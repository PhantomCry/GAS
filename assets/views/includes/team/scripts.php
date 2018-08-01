<script src="../event-assets/js/jquery-3.3.1.min.js"></script>
<script src="../event-assets/js/popper.min.js"></script>
<script src="../event-assets/js/bootstrap.min.js"></script>
<script src="../third-party-plugins/js/bootstrap-datepicker.min.js"></script>
<script src="../handlers/js/ajax-team-handler.js"></script>
<script>
  $('#award-modal').on('shown.bs.modal', function () {
    $('#award-modal #datepick').datepicker({
      format: "MM-yyyy",
      startView: 1,
      minViewMode: 1,
      maxViewMode: 2,
      orientation: "top right"
    });
  });
</script>