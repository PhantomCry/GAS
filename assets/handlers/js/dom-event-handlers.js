$(function () {
  // Initialize Jpreview
  $('.event-cont-uploader').jPreview();
  // Event Listener For Viewing the filename to be uploaded
  $('#eventCover').on('change', function () {
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  });
  // Clear modal contents of Clicked Event
  $('#eventConts').on('hidden.bs.modal', function (e) {
    $(this).find("#event-title").html('');
    $(this).find("#eventCont").html('');
    location.reload(true);
  });
});