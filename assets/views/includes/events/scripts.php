<script src="../event-assets/js/jquery-3.3.1.min.js"></script>
<script src="../event-assets/js/popper.min.js"></script>
<script src="../event-assets/js/bootstrap.min.js"></script>
<script src="../third-party-plugins/js/bootoast.min.js"></script>
<script src="../third-party-plugins/js/jquery.imgcheckbox.js"></script>
<script src="../third-party-plugins/js/jpreview.js"></script>
<script src="../third-party-plugins/js/ekko-lightbox.min.js"></script>
<script src="../handlers/js/dom-event-handlers.js"></script>
<script src="../handlers/js/ajax-post-event.js"></script>
<script src="../handlers/js/ajax-get-event.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>