<div class="modal fade" id="eventCreator" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create Event</h5>
        <a class="unclickable" href="" data-toggle="tooltip" title="<div><h5>Restrictions:</h5><p class='text-center'>Event Title and Cover Picture must not have any special characters including whitespaces.</p></div>" data-placement="right">
          <span>
            <i class="fas fa-info-circle p-2"></i>
          </span>
        </a>
        <!-- Restriction Rules Info -->

        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="eventForm">
          <div class="form-group">
            <input type="text" class="form-control" id="eventTitle" placeholder="Event Title" name="eventTitle" autocomplete="off">
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="eventCover" name="eventCover" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"
                required>
              <label class="custom-file-label" for="eventCover" name="eventCover">Select Cover Picture...</label>
            </div>
          </div>
          <div class="form-group">
            <img src="" id="preview" alt="Your Image Preview" width="100%" height="200px">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" class="clearForm">Close</button>
        <button type="submit" form="eventForm" class="btn btn-success " class="clearForm">Create Event</button>
      </div>
    </div>
  </div>
</div>