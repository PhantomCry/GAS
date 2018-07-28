<!DOCTYPE html>
<html>

<head>
  <title>Event's Picture Manager</title>
  <link rel="shortcut icon" type="image/icon" href="../images/logo/favicon.ico" />
  <link rel="stylesheet" href="../event-assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../third-party-plugins/css/jpreview.css">
  <link rel="stylesheet" href="../third-party-plugins/css/bootoast.min.css">
  <link rel="stylesheet" href="../event-assets/css/main.css">
</head>

<body>
  <?php include 'includes/navbar.php';?>
  <!-- <div class="container-fluid"> -->
  <div class="container-fluid">
    <!-- Modal -->
    <?php include 'includes/create-event-modal.php' ?>

    <div class="row">
      <ul class="inlineList container-fluid border-bottom">
        <li class="pl-3">
          <h1>Upcoming Events</h1>
        </li>
        <li class="ml-auto mt-2 pr-3 hide" id="up-buttons">
          <button class="btn btn-success" form="moveUp" id="markAsDone" type="submit">Mark as Done</button>
          <button class="btn btn-danger" form="moveUp" id="deleteUp" type="submit">Delete</button>
        </li>
      </ul>
      <!-- Upcoming Events Start -->
      <div class="row pl-3">
        <div class="col-12 mx-auto">
          <form id="moveUp">
          </form>
        </div>
      </div>
      <!-- Upcoming Events End -->


      <!-- Past Events Start -->
      <ul class="inlineList container-fluid border-bottom border-top mt-3">
        <li class="pl-3">
          <h1>Past Events</h1>
        </li>
        <li class="ml-auto mt-2 pr-3 hide" id="past-buttons">
          <button class="btn btn-danger m-2" form="movePast" type="submit" id="deletePast">Delete</button>
        </li>
      </ul>
      <div class="row pl-3">
        <div class="col-12 mx-auto">
          <form id="movePast">
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
    <?php include 'includes/scripts.php';?>
</body>

</html>