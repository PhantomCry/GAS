<!DOCTYPE html>
<html>

<head>
  <title>Upload your files</title>
  <link rel="stylesheet" href="assets/addEventAssets/bootstrap.min.css">
  <link rel="stylesheet" href="assets/addEventAssets/main.css">
</head>

<body>

  <div class="container p-4 mt-3 border">
    <div class="upload-type text-center mb-2">
      <h1>Upload New Event</h1>
    </div>
    <form id="postEvent" class="custom-file" method="POST" enctype="multipart/form-data">
      <input type="file" class="custom-file-input" name="fileToUpload" id="upcomingEvent" multiple="multiple">
      <label class="custom-file-label">Choose file...</label>
      <input class="btn btn-primary mt-3" type="submit" value="Upload"></input>
    </form>

    <div class="row">

      <!-- <div class="col-4 mt-4" id="upcoming">
        <div class="carousel-header text-center">
          <h2>Upcoming Events</h2>
        </div>
        <div id="upcoming-events-controls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner rounded" id="upcoming-events-carousel">
          </div>
          <a class="carousel-control-prev " href="#upcoming-events-controls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#upcoming-events-controls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> -->

      <!-- <div class="col-4 mt-5 text-center">
        <h1>Select Upcoming Event to Finish</h1>
        <form action="addEvent.php" method="post" id="eventFinisher">
          <select class="custom-select" name="moveFile">
            <option value="">- Select Image -
              <?php
                                $dirPath = dir('assets/images/events/Upcoming');
                                $imgArray = array();
                                 while (($file = $dirPath->read()) !== false)
                                {
                                if ((substr($file, -3)=="gif") || (substr($file, -3)=="jpg") || (substr($file, -3)=="png"))
                                {
                                    $imgArray[ ] = trim($file);
                                }
                                }
                                $dirPath->close();
                                sort($imgArray);
                                $c = count($imgArray);
                                for($i=0; $i<$c; $i++)
                                {
                                    echo "<option value=\"" . $imgArray[$i] . "\">" . $imgArray[$i] . "\n";
                                }    
                            ?>
          </select>
          <input type="submit" class="btn btn-primary mt-3" name="markAsDone" value="Mark as Done" />
        </form>
      </div> -->

      <!-- <div class="col-4 mt-4">
        <div class="carousel-header text-center">
          <h2>Past Events</h2>
        </div>
        <div id="past-event-controls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner rounded" id="past-events-carousel">
          </div>
          <a class="carousel-control-prev" href="#past-event-controls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#past-event-controls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> -->

      <div class="row mx-auto p-5">
        <div class="col-12 p-3">
          <h1 class="text-center">Upcoming Events Gallery</h1>
        </div>
        <div class="col-12 mx-auto">
          <form action="" class="test" multiple="" name="filesToMove[]">
            <span class="imgCheckbox1">
              <img src="http://kb4images.com/images/imagens-hd/36253174-imagens-hd.jpg" alt="" width="230" height="230">
            </span>
            <span class="imgCheckbox1">
              <img src="https://www.planwallpaper.com/static/images/wallpapers-hd-8000-8331-hd-wallpapers.jpg" alt="" width="230" height="230">
            </span>
            <span class="imgCheckbox1">
              <img src="https://images3.alphacoders.com/823/82317.jpg" alt="" width="230" height="230">
            </span>
            <span class="imgCheckbox1">
              <img src="https://images3.alphacoders.com/823/82317.jpg" alt="" width="230" height="230">
            </span>
            <span class="imgCheckbox1">
              <img src="https://images3.alphacoders.com/823/82317.jpg" alt="" width="230" height="230">
            </span>
            <span class="imgCheckbox1">
              <img src="https://images3.alphacoders.com/823/82317.jpg" alt="" width="230" height="230">
            </span>
            <span class="imgCheckbox1">
              <img src="https://images3.alphacoders.com/823/82317.jpg" alt="" width="230" height="230">
            </span>
            <span class="imgCheckbox1">
              <img src="https://images3.alphacoders.com/823/82317.jpg" alt="" width="230" height="230">
            </span>
          </form>
          <input class="btn btn-primary m-2" type="submit" value="Mark As Done">
          <input class="btn btn-primary m-2" type="submit" value="Delete">
        </div>
      </div>

      <div class="row mx-auto p-5">
        <div class="col-12 p-3">
          <h1 class="text-center">Past Events Gallery</h1>
        </div>
        <div class="col-12 mx-auto">
          <form action="" class="test">
            <span class="imgCheckbox1">
              <img src="http://kb4images.com/images/imagens-hd/36253174-imagens-hd.jpg" alt="" width="200" height="200">
            </span>
            <span class="imgCheckbox1">
              <img src="https://www.planwallpaper.com/static/images/wallpapers-hd-8000-8331-hd-wallpapers.jpg" alt="" width="200" height="200">
            </span>
            <span class="imgCheckbox1">
              <img src="https://images3.alphacoders.com/823/82317.jpg" alt="" width="200" height="200">
            </span>
          </form>
        </div>
      </div>
    </div>
    <script src="assets/addEventAssets/jquery-3.3.1.min.js"></script>
    <script src="assets/addEventAssets/popper.min.js"></script>
    <script src="assets/addEventAssets/bootstrap.min.js"></script>
    <script src="assets/addEventAssets/jquery.imgcheckbox.js"></script>
    <script type="text/javascript">
      $("img").imgCheckbox();
      $('#upcomingEvent').on('change', function () {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
      });
      // $('input[name=fileToUpload]').change(function () {
      //   var formData = new FormData();
      //   for (var i = 0; i < $(this).get(0).files.length; ++i) {
      //     formData.append('fileToUpload[]', $(this).get(0).files[i]);
      //     console.log(formData);
      //   }
      // });
      $('#upcomingEvent').on('change', function () {
        var form = new FormData();
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
          form.append('fileToUpload[]', $(this).get(0).files[i]);
        }
        $('#postEvent').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'POST',
            url: 'uploadHandler.php',
            data: form,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
              console.log("done");
              console.log(data);
            }
          });
        });
      });

      $(function (e) {
        $.ajax({
          type: 'GET',
          url: 'upEventData.php',
          dataType: 'json',
          success: function (data) {
            $(data).each(function (index, value) {
              $('#upcoming-events-carousel').append(
                "<div class='carousel-item'><img class='d-block mx-auto w-100' src='" + value +
                "' /></div>")
              $('#upcoming-events-carousel .carousel-item').first().addClass('active');
            });
          }
        });
        $.ajax({
          type: 'GET',
          url: 'pastEventData.php',
          dataType: 'json',
          success: function (data) {
            $(data).each(function (index, value) {
              $('#past-events-carousel').append(
                "<div class='carousel-item'><img class='d-block mx-auto w-100' src='" + value +
                "' /></div>")
              $('#past-events-carousel .carousel-item').first().addClass('active');
            });
          }
        });
      });
    </script>
</body>

</html>
<?PHP
    if(isset($_POST['markAsDone'])){
    $selected_val = $_POST['moveFile'];  // Storing Selected Value In Variable
    rename("assets/images/events/Upcoming/$selected_val", "assets/images/events/Past/$selected_val");  // Displaying Selected Value
    }
?>