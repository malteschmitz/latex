/**
 * Performs a binary search on the host array. This method can either be
 * injected into Array.prototype or called with a specified scope like this:
 * binaryIndexOf.call(someArray, searchElement);
 *
 * @param {*} searchElement The item to search for within the array.
 * @return {Number} The index of the element which defaults to -1 when not found.
 */

function binaryIndexOf(searchElement) {
  'use strict';

  var minIndex = 0;
  var maxIndex = this.length - 1;
  var currentIndex;
  var currentElement;
  var resultIndex;

  while (minIndex <= maxIndex) {
    resultIndex = currentIndex = (minIndex + maxIndex) / 2 | 0;
    currentElement = this[currentIndex];

    if (currentElement < searchElement) {
      minIndex = currentIndex + 1;
    } else if (currentElement > searchElement) {
      maxIndex = currentIndex - 1;
    } else {
      return currentIndex;
    }
  }

  return -1;
}

Array.prototype.binaryIndexOf = binaryIndexOf;

////////////////////////////////////////////////////////////////////////////////////

$(function () {
  'use strict';

  var pdfDoc = null,
    currentPage = 1,
    $canvas = $('#slideshow canvas'),
    context = $canvas[0].getContext('2d'),
    player = $('#player'),
    isPlaying = false,
    isFullScreen = false,
    zoom = 2;

  // audiofile, slides and points must be defined before loading this script
  // * audiofile contains the base part of filenames of the mp3 and oga encoded audio files
  // * slides contains the timestamps where to start the pages (sorted by timestamps)
  //    - first element is time in seconds
  //    - second element is the number of the page to show
  // * points contains the timestamps where the pointer should be shown
  //    - first element is time in seconds
  //    - second element is the x coordinate
  //    - third element is the y coordinate


  // timestamps sorted by pages
  // number of the page is used as key and its timestamp as value
  var timestamps = [];
  $.each(slides, function (i, value) {
    var old = timestamps[value[1]];
    if (old === undefined || old > value[0]) {
      timestamps[value[1]] = value[0];
    }
  });

  // display initial please wait on the canvas
  $canvas[0].height = 544;
  $canvas[0].width = 725;
  context.font = "24pt \"Helvetica Neue\",Helvetica,Arial,sans-serif";
  context.fillText("Bitte warten!", 10, 50);
  context.font = "16pt \"Helvetica Neue\",Helvetica,Arial,sans-serif";
  context.fillText("Präsentation wird geladen...", 10, 100);

  player.jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        oga: audiofile + ".ogg",
        mp3: audiofile + ".mp3"
      });
    },
    swfPath: "jplayer",
    preload: "auto",
    wmode: "window",
    supplied: "oga,mp3",
    keyEnabled: true
  });

  player.bind($.jPlayer.event.timeupdate, function (event) {
    var current = event.jPlayer.status.currentTime;
    var duration = event.jPlayer.status.duration;
    $("#current_time").text($.jPlayer.convertTime(current));
    $("#duration").text($.jPlayer.convertTime(duration));

    var nextPage = -1;
    $.each(slides, function (i, value) {
      var timestamp = value[0];
      if (timestamp > current) {
        return false;
      }
      nextPage = value[1];
    });
    if (nextPage > -1 && nextPage != currentPage) {
    	currentPage = nextPage;
    	renderPage();
    }

    var nextPoint = null;
    $.each(points, function (i, value) {
      var timestamp = value[0];
      if (timestamp > current) {
        return false;
      }
      nextPoint = value;
    });
    if (nextPoint && Math.abs(current - nextPoint[0]) < .5) {
      slideshowPointer.show(nextPoint[1], nextPoint[2]);
    }
  });

  player.bind($.jPlayer.event.play, function (event) {
    isPlaying = true;
  });

  player.bind($.jPlayer.event.pause, function (event) {
    // This event is raised in case of stop AND pause.
    isPlaying = false;
  });


  function jumpInPlayer (play) {
    // jump in player to the slide matching the current page
    var target = timestamps[currentPage];
    if (target !== undefined) {
      if (play) {
        player.jPlayer("play", target);
      } else {
        player.jPlayer("pause", target);
      }
    }
  }

  // Get page info from document, resize canvas accordingly, and render page
  function renderPage () {
    if (!pdfDoc) {
      // avoid trying to render a page before the document is loaded
      return;
    }
    // Using promise to fetch the page
    pdfDoc.getPage(currentPage).then(function (page) {
      var viewport, z;
      if (isFullScreen) {
        viewport = page.getViewport(1);
        z = Math.min(screen.width / viewport.width, screen.height / viewport.height);
        viewport = page.getViewport(z);
      } else {
        viewport = page.getViewport(zoom);
      }

      $canvas[0].height = viewport.height;
      $canvas[0].width = viewport.width;

      // Render PDF page into canvas context
      var renderContext = {
        canvasContext: context,
        viewport: viewport
      };
      page.render(renderContext);
    });

    // Update page counters
    $('#page_num').text(currentPage);
    $('#page_count').text(pdfDoc.numPages);

    // Hide pointer
    slideshowPointer.hide();
  }

  // Set Path to worker
  PDFJS.workerSrc = 'js/pdf.worker.js';

  // Asynchronously download PDF as an ArrayBuffer
  PDFJS.getDocument("//latex/latex.pdf").then(function (_pdfDoc) {
    pdfDoc = _pdfDoc;
    renderPage();
  });

  function gotoPage (num) {
    var play = isPlaying;
    player.jPlayer("pause");
    currentPage = num;
    renderPage();
    jumpInPlayer(play);
  }

  // Go to previous page
  function prevPage() {
    if (currentPage > 1) {
      gotoPage(currentPage - 1);
    }
    return false;
  }
  $("#prev").click(prevPage);

  // Go to next page
  function nextPage() {
    if (currentPage < pdfDoc.numPages) {
      gotoPage(currentPage + 1);
    }
    return false;
  }
  $("#next").click(nextPage);

  function zoomIn() {
    if (zoom < 10) {
      zoom *= 1.2;
      renderPage();
    }
    return false;
  }

  $("#zoom-in").click(zoomIn);

  function zoomDefault() {
    if (zoom != 2) {
      zoom = 2;
      renderPage();
    }
    return false;
  }

  $("#zoom-default").click(zoomDefault);

  function zoomOut() {
    if (zoom > 0.3) {
      zoom /= 1.2;
      renderPage();
    }
    return false;
  }

  $("#zoom-out").click(zoomOut);

  function toggleFullScreen() {
    if (isFullScreen) {
      cancelFullScreen(document);
    } else {
      requestFullScreen(document.getElementById('slideshow'));
    }
    return false;
  }

  $("#fullscreen").click(toggleFullScreen);

  function togglePlayPause() {
    if (isPlaying) {
      player.jPlayer("pause");
    } else {
      player.jPlayer("play");
    }
    return false;
  }

  $canvas.click(togglePlayPause);

  $(document).keydown(function (event) {
    switch (event.which) {
      case 173: // -
        zoomOut();
        break;
      case 48: // 0
        zoomDefault();
        break;
      case 61: // +
        zoomIn();
        break;
      case 37: // Left
        prevPage();
        break;
      case 39: // Right
        nextPage();
        break;
      case 13: // Enter
        toggleFullScreen();
        break;
      case 32: // Space
        togglePlayPause();
        break;
    }
  })

  function cancelFullScreen(element) {
    var method = element.cancelFullScreen || element.webkitCancelFullScreen ||
        element.mozCancelFullScreen || element.exitFullscreen;
      if (method) {
        method.call(element);
      } else {
        alert("Your browser does not support fullscreen.");
      }
  }

  function fullScreen() {
    return (document.fullScreenElement && document.fullScreenElement !== null) ||
        !!document.mozFullScreen || !!document.webkitIsFullScreen;
  }

  function requestFullScreen(element) {
    var method = element.requestFullScreen || element.webkitRequestFullScreen ||
        element.mozRequestFullScreen || element.msRequestFullScreen;
    if (method) {
      method.call(element);
    } else {
      alert("Your browser does not support fullscreen.");
    }
  }

  $(document).on('webkitfullscreenchange mozfullscreenchange fullscreenchange', function() {
    isFullScreen = fullScreen();
    if (isFullScreen) {
      $('#slideshow').addClass('fullscreen');
      hideCursor();
    } else {
      $('#slideshow').removeClass('fullscreen');
      showCursor();
    }
    renderPage();
  });

  var hideCursorTimeout, cursorJustHidden;
  function showCursor() {
    if (hideCursorTimeout) {
      clearTimeout(hideCursorTimeout);
    }
    hideCursorTimeout = undefined;
    $('#slideshow').removeClass('no-cursor');
  }
  function hideCursor() {
    if (cursorJustHidden) {
      // prevent the hiding action to trigger mousemove
      cursorJustHidden = undefined;
      return;
    }
    showCursor();
    if (isFullScreen) {
      hideCursorTimeout = setTimeout(function () {
        $('#slideshow').addClass('no-cursor');
        cursorJustHidden = true;
      }, 2000);
    }
  }
  $('#slideshow').mousemove(hideCursor);
});