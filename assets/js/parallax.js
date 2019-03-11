( function($) {
    // Parallax
    $(document).scroll(function() {
        var scrolled = $(window).scrollTop()
        $('.parallax').each(function(index, element) {
            var initY = $(this).offset().top
            var height = $(this).height()
            var endY  = initY + $(this).height()

            // Check if the element is in the viewport.
            var visible = isInViewport(this)
            if(visible) {
            var diff = scrolled - initY
            var ratio = Math.round((diff / height) * 100)
            $(this).css('background-position','center ' + parseInt(-(ratio * 2.5)) + 'px')
            }
        });
    });
    function isInViewport(node) {
        var rect = node.getBoundingClientRect()
        return (
          (rect.height > 0 || rect.width > 0) &&
          rect.bottom >= 0 &&
          rect.right >= 0 &&
          rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.left <= (window.innerWidth || document.documentElement.clientWidth)
        )
      }
} )( jQuery );