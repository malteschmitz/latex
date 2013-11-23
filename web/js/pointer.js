var slideshowPointer = function () {
  var $canvas,
    circle,
    pointerTimeout,
    currentAnimationTarget;

  function init () {
  	if (!$canvas) {
  		$canvas = $('#the-canvas');
      circle = $('<div></div>');
			circle.css({
			  backgroundColor: "#FF0000",
			  position: "absolute"
			});
			circle.hide();
			$("body").append(circle);
  	}
  	return circle;
  }

  function show (x,y) {
	  if (currentAnimationTarget &&
	      x === currentAnimationTarget[0] &&
	      y === currentAnimationTarget[1]) {
	    // prevent strange animation bugs if
	    // the same animation gets started more than once
	    return
	  }
	  // create circle if not already existing
	  init();
	  // store current parameters for the test above
	  currentAnimationTarget = [x,y];
	  // compute absolut coordinates
	  var offset = $canvas.offset(),
	    circleRadius = .03 * $canvas.width();
	  x = offset.left + $canvas.width() * x;
	  y = offset.top + $canvas.height() * y;
	  // display circle
	  circle.stop(true, true);
	  if (pointerTimeout) {
	    circle.animate({
	      top: y - circleRadius,
	      left: x - circleRadius
	    }, {
	      duration: 300,
	      done: function () {
	        currentAnimationTarget = null;
	      }
	    });
	    window.clearTimeout(pointerTimeout);
	    pointerTimeout = null;
	  } else {
	    circle.show();
	    circle.css({
	      top: y,
	      left: x,
	      opacity: 0,
	      borderRadius: 0,
	      width: 0,
	      height: 0
	    });
	    circle.animate({
	      top: y - circleRadius,
	      left: x - circleRadius,
	      width: 2 * circleRadius,
	      height: 2 * circleRadius,
	      borderRadius: circleRadius,
	      opacity: .64
	    }, {
	      duration: 600,
	      done: function () {
	        currentAnimationTarget = null;
	      },
	      easing: "easeOutElastic"
	    });
	  }
	  // start timeout to hide circle
	  pointerTimeout = window.setTimeout(function() {
	    circle.fadeOut({
	      duration: 600
	    });
	    pointerTimeout = null;
	  }, 4000);
	}

	function hide () {
	  if (pointerTimeout) {
	    window.clearTimeout(pointerTimeout);
	    pointerTimeout = null;
	    circle.hide();
	  }
	}

  return {
  	show: show,
  	hide: hide
  }
}();