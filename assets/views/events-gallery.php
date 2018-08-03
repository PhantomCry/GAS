<!DOCTYPE html>
<html>

<head>
    <base href="GAS">
    <title>Event's Picture Manager</title>
    <link rel="shortcut icon" type="image/icon" href="assets/images/logo/favicon.ico" />
    <link rel="stylesheet" href="assets/event-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/third-party-plugins/css/jpreview.css">
    <link rel="stylesheet" href="assets/event-assets/css/main.css">
    <link rel="stylesheet" href="assets/third-party-plugins/css/ekko-lightbox.css">
</head>

<body>
    <div id="particles-js"></div>
    <div id="gallery-contents">
        <?php include 'includes/gallery/navbar.php';?>
        <div class="container-fluid">
            <!-- Modal -->
            <?php include 'includes/events/create-event-modal.php'; ?>
    
            <div class="row">
                <ul class="inlineList container-fluid justify-content-center">
                    <li class="pl-3">
                        <h1 class="text-white">Upcoming Events</h1>
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
                <ul class="inlineList container-fluid mt-3 justify-content-center">
                    <li class="pl-3">
                        <h1 class="text-white">Past Events</h1>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Clicked Event -->
            <?php include 'includes/gallery/scripts.php';?>
    </div>
</body>

</html>