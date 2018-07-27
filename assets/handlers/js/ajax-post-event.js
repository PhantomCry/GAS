$(function () {
    // Modal Create Event
    $("#eventForm").on('submit', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: 'POST',
            url: '../handlers/php/new-event-handler.php',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log(data);
            }
        });
    });
    // Event Listener for Mark As Done
    $("#markAsDone").on('click', function () {
        $("#moveUp").on('submit', function () {
            var dataString = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '../handlers/php/marking-handler.php',
                data: dataString,
                success: function (data) {
                    console.log("Marking Success");
                    console.log(data);
                }
            })
        });
    });
    // Event Listener for Deleting Upcoming Events
    $("#deleteUp").on('click', function () {
        $("#moveUp").on('submit', function () {
            var dataString = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '../handlers/php/delete-up-event-handler.php',
                data: dataString,
                success: function (data) {
                    console.log("Deleted Selected Images");
                }
            })
        });
    });

    // Event Listener for Deleting Past Events
    $("#deletePast").on('click', function () {
        $("#movePast").on('submit', function () {
            var dataString = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '../handlers/php/delete-past-event-handler.php',
                data: dataString,
                success: function (data) {
                    console.log("Deleted Selected Images");
                }
            })
        });
    });
    // Clicked Event
    $("#moveUp").on('click', 'a', function (e) {
        e.preventDefault();
        var value = $(this).attr('href');
        var eventName = value.substr(value.lastIndexOf("/") + 1);
        // Event Lister for Event-Contents
        $('#event-content').on('change', function () {
            var form = new FormData();
            for (var i = 0; i < $(this).get(0).files.length; ++i) {
                form.append('fileToUpload[]', $(this).get(0).files[i]);
            }
            form.append('eventName', eventName);
            console.log(form);
            $('#event-content-form').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '../handlers/php/event-content-data-handler.php',
                    data: form,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        console.log("Upload Complete");
                        console.log(data);
                    }
                });
            });
            // End of Event-Contents
        });
        $('#event-title').append("<h5 class='modal-title'>" + eventName +
            "</h5><button type='button' class='close' data-dismiss='modal'><span>&times;</span></button>");
        $.ajax({
            type: "POST",
            url: "../data/event-content-data.php",
            data: {
                data: eventName
            },
            success: function (data) {
                var jsonData = JSON.parse(data);
                $(jsonData).each(function (index, value) {
                    $('#eventCont').append("<img src=" + value + " width='255' height='255'>");
                });
                $('#eventCont').append(
                    "<div id='preview-container' class='jpreview-container pt-3 border mt-3'></div>");
            }
        });
    });
    // End of Clicked Event
});