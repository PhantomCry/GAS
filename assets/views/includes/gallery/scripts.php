<script src="../event-assets/js/jquery-3.3.1.min.js"></script>
<script src="../event-assets/js/popper.min.js"></script>
<script src="../event-assets/js/bootstrap.min.js"></script>
<script src="../third-party-plugins/js/jpreview.js"></script>
<script src="../third-party-plugins/js/ekko-lightbox.min.js"></script>
<script src="../third-party-plugins/js/particles.js"></script>
<script src="../third-party-plugins/js/app.js"></script>
<script src="../handlers/js/ajax-post-event.js"></script>
<script src="../handlers/js/ajax-get-event.js"></script>
<script>
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    $('#eventConts').on('hidden.bs.modal', function (e) {
        $(this).find("#event-title").html('');
        $(this).find("#eventCont").html('');
    });
    $('#eventConts').on('shown.bs.modal', function(){
        $("#preview-container").addClass('hide');
    })
</script>