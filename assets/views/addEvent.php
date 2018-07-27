<!DOCTYPE html>
<html>

<head>
  <title>Event's Picture Manager</title>
  <link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.ico" />
  <link rel="stylesheet" href="../event-assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../event-assets/css/main.css">
  <link rel="stylesheet" href="../third-party-plugins/css/jpreview.css">
</head>

<body>
  <!-- <div class="container-fluid"> -->
  <div class="container border mt-5 mb-5 p-3">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#eventCreator">
      Create Event
    </button>
    <button class="btn btn-success float-right" id="toggle-checkbox">Edit</button>
    <button class="btn btn-success float-right mr-3 hide" id="cancel-edit">Cancel</button>
    <!-- Modal -->
    <div class="modal fade" id="eventCreator" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create Event</h5>
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

    <div class="row">
      <!-- Upcoming Events Start -->
      <div class="row mx-auto p-5">
        <div class="col-12 p-3 border mb-5">
          <h1 class="text-center">Upcoming Events</h1>
        </div>
        <div class="col-12 mx-auto">
          <form id="moveUp">
            <div class="container-fluid hide" id="up-buttons">
              <input class="btn btn-success m-2" type="submit" id="markAsDone" value="Mark As Done">
              <input class="btn btn-success m-2 float-right" type="submit" id="deleteUp" value="Delete">
            </div>
          </form>
        </div>
      </div>
      <!-- Upcoming Events End -->


      <!-- Past Events Start -->
      <div class="row mx-auto p-5">
        <div class="col-12 p-3 border mb-5">
          <h1 class="text-center">Past Events</h1>
        </div>
        <div class="col-12 mx-auto">
          <form id="movePast">
            <div class="container-fluid hide" id="past-buttons">
              <input class="btn btn-success m-2" type="submit" id="deletePast" value="Delete">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Past Events End -->

    <!-- Clicked Event Content Modal -->
    <div class="modal fade" id="eventConts" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header" id="event-title">
          </div>
          <div class="modal-body" id="eventCont">

          </div>
          <div class="modal-footer">
            <form action="" class="custom-file" id="event-content-form">
              <input type="file" class="event-cont-uploader custom-file-input" multiple data-jpreview-container="#preview-container" id="event-content"
                name="fileToUpload">
              <label class="custom-file-label">Choose file...</label>
            </form>
            <button type="submit" form="event-content-form" class="btn btn-success" class="clearForm">Upload</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" class="clearForm">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Clicked Event -->
    <script src="../event-assets/js/jquery-3.3.1.min.js"></script>
    <script src="../event-assets/js/popper.min.js"></script>
    <script src="../event-assets/js/bootstrap.min.js"></script>
    <script src="../third-party-plugins/js/jquery.imgcheckbox.js"></script>
    <script src="../third-party-plugins/js/jpreview.js"></script>
    <script src="../handlers/js/dom-event-handlers.js"></script>
    <script src="../handlers/js/ajax-post-event.js"></script>
    <script src="../handlers/js/ajax-get-event.js"></script>
</body>

</html>