  <style>
  /*demo styles*/
  #alert-demo-1,
  #alert-demo-2 {
    display: none;
  }
  </style>

  <!-- jQuery -->
  <script type="text/javascript">
  jQuery(document).ready(function() {
    // Demo Javascript- SlideIn alert on click
    $('#alert-demo-call-1').on('click', function() {
      $('#alert-demo-1').slideToggle('fast');
    });

    // Demo Javascript- Fades alert on click
    $('#alert-demo-call-2').on('click', function() {
      $('#alert-demo-2').fadeToggle();
    });
  });
  </script>