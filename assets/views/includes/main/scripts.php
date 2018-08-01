<!-- jquery link -->
<script src="assets/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<!--modernizr.min.js-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


<!--bootstrap.min.js-->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- bootsnav js -->
<script src="assets/js/bootsnav.js"></script>

<!-- for menu -->
<script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>


<!-- vedio player js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!--owl.carousel.js-->
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

<!-- counter js -->
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>

<!--Custom JS-->
<script type="text/javascript" src="assets/js/jak-menusearch.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>

<!--Ekko Lightbox Plugin-->
<script type="text/javascript" src="assets/third-party-plugins/js/ekko-lightbox.min.js"></script>

<!--Plugin Initializers-->
<script>
  $('[data-toggle="popover"]').popover({
    html: true,
    content: function () {
      return $('#popover-content').html();
    }
  });
  $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
</script>