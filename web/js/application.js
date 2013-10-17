$(function() {
  var win = $(window);
  var bd = $(document.body);

  bd.scrollspy({
    target: '.bs-sidebar',
  });

  win.on('load', function () {
    bd.scrollspy('refresh');
  });

  window.setTimeout(function () {
    var sidebar = $('.bs-sidebar');
    sidebar.affix({
      offset: {
        top: function () {
          var offsetTop = sidebar.offset().top;
          var sideBarMargin = parseInt(sidebar.children(0).css('margin-top'), 10);
          return (this.top = offsetTop - sideBarMargin);
        }
      }
    });
  }, 100);
});
