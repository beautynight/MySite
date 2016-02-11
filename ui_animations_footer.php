  <!-- LazyLineSVG Plugin -->
  <script src="vendor/plugins/lazyline/jquery.lazylinepainter-1.5.0.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    // Demo Code -Toggle animation nav list bg color
    $('.animation-nav').click(function() {
      $('.animation-nav').removeClass('btn-primary').addClass('btn-default');
      $(this).addClass('btn-primary');
    });

    // Example animate buttons
    $('.animations .btn').click(function() {
      if ($('body.animation-running').length) {
        return;
      }
      $(this).addClass('item-checked');
      var animateVal = $(this).attr('data-test');
      testAnim(animateVal)
    });

    // Simply adds CSS classes required for animation
    // and then removes them after an elapsed time
    var animatedObj = $('#mac_wire');

    function testAnim(x) {
      $('body').addClass('animation-running');
      animatedObj.removeClass('fadeIn').addClass(x);

      animatedObj.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $('body').removeClass('animation-running');
        animatedObj.removeClass(x);
      });

    }

    /* Demo Code - Creates animated SVG(desktop image)
     * Lazy Line Painter - Path Object
     * Generated using 'SVG to Lazy Line Converter'
     *
     * http://lazylinepainter.info
     * Copyright 2013, Cam O'Connell
     *
     */
    var pathObj = {
      "mac_wire": {
        "strokepath": [{
          "path": "M264.41,447.79   c-1.07,13.219-1.292,40.276-2.087,47.116c-1.064,9.147-3.618,11.702-10,13.403c-5.289,1.409-12.453,3.028-15.439,3.796   c-2.985,0.768-3.923,1.287-3.923,1.879c0,0,0,0.031,0.006,0.089c0.003,0.03,0.007,0.059,0.012,0.086   c0.129,0.788,17.132,2.911,25.421,2.911h143.717c8.287,0,25.29-2.123,25.419-2.911c0.006-0.027,0.01-0.056,0.013-0.086   c0.006-0.058,0.006-0.089,0.006-0.089c0-0.592-0.937-1.11-3.923-1.879c-2.986-0.768-10.15-2.387-15.439-3.796   c-6.382-1.701-8.935-4.256-9.999-13.403c-0.795-6.84-1.018-33.897-2.089-47.116",
          "duration": 600
        }, {
          "path": "M636.122,7.411H24.392   c-7.962,0-14.438,6.477-14.438,14.438v411.503c0,7.961,6.476,14.438,14.438,14.438h242.261l0,0h127.208l0,0h242.261   c7.962,0,14.438-6.478,14.438-14.438V21.849C650.561,13.888,644.084,7.411,636.122,7.411z M623.411,361.445H37.103V34.56h586.308   V361.445z",
          "duration": 1000
        }],
        "dimensions": {
          "width": 660,
          "height": 523
        }
      }
    };

    /* 
     * Setup and Paint your lazyline! 
     */
    $('#mac_wire').lazylinepainter({
      "svgData": pathObj,
      "strokeWidth": 3,
      "strokeColor": "#e09b99",
      "delay": 400,
      "onComplete": function() {
        $('body').addClass('svg-fill');
      }
    }).lazylinepainter('paint');

  });
  </script>