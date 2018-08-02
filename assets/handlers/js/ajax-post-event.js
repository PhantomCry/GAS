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
        $('#moveUp').find("span").remove();
        $.ajax({
          type: 'GET',
          url: '../data/up-event-data.php',
          dataType: 'json',
          success: function (data) {
            $(data).each(function (index, value) {
              var index = value.lastIndexOf("/") + 1;
              var filename = value.substr(index);
              var eventName = value.substring(
                value.lastIndexOf("/") + 1,
                value.lastIndexOf("_")
              );
              $('#moveUp').append(
                "<span class='imgCheckbox1 hovereffect'><img src='" + value +
                "' width='264' height='250' name='" +
                filename +
                "'><div class='overlay toggle-hover'><a id='test' href='assets/images/events/Main/" +
                eventName + "' data-toggle='modal' data-target='#eventConts'>" + eventName +
                "</a></div></span>");
            });
          }
        });
        bootoast.toast({
          message: 'Event Created',
        });
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
          console.log("Done");
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
    $('#event-title').append("<h5 class='modal-title'>" + eventName +
      "</h5><button type='button' class='close' data-dismiss='modal'><span>&times;</span></button>");
    // Event Listener for Event-Contents
    $('#event-content').on('change', function () {
      var form = new FormData();
      for (var i = 0; i < $(this).get(0).files.length; ++i) {
        form.append('fileToUpload[]', $(this).get(0).files[i]);
      }
      form.append('eventName', eventName);
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
            console.log(data);
            $.ajax({
              type: "POST",
              url: "../data/event-content-data.php",
              data: {
                data: eventName
              },
              success: function (data) {
                $("#eventConts").find("#event-title").html('');
                $("#eventConts").find("#eventCont").html('');
                $('#event-title').append("<h5 class='modal-title'>" + eventName +
                  "</h5><button type='button' class='close' data-dismiss='modal'><span>&times;</span></button>");
                var jsonData = JSON.parse(data);
                $(jsonData).each(function (index, value) {
                  $('#eventCont').append("<a href='" + value + "' data-toggle='lightbox' data-gallery='event-content-gallery'><img src=" + value + " width='255' height='255'></a>");
                });
                $('#eventCont').append(
                  "<div id='preview-container' class='jpreview-container pt-3 border mt-3'></div>");
              }
            });
          }
        });
      });
      // $('#eventConts').on('hidden.bs.modal', function (e) {
      //   form = [];
      // });
      // End of Event-Contents
    });
    $.ajax({
      type: "POST",
      url: "../data/event-content-data.php",
      data: {
        data: eventName
      },
      success: function (data) {
        var jsonData = JSON.parse(data);
        $(jsonData).each(function (index, value) {
          $('#eventCont').append("<a href='" + value + "' data-toggle='lightbox' data-gallery='event-content-gallery'><img src=" + value + " width='255' height='255'></a>");
        });
        $('#eventCont').append(
          "<div id='preview-container' class='jpreview-container pt-3 border mt-3'></div>");
      }
    });
  });
  // End of Clicked Event
  $("#movePast").on('click', 'a', function (e) {
    e.preventDefault();
    var value = $(this).attr('href');
    var eventName = value.substr(value.lastIndexOf("/") + 1);
    $('#event-title').append("<h5 class='modal-title'>" + eventName +
      "</h5><button type='button' class='close' data-dismiss='modal'><span>&times;</span></button>");
    // Event Lister for Event-Contents
    $('#event-content').on('change', function () {
      var form = new FormData();
      for (var i = 0; i < $(this).get(0).files.length; ++i) {
        form.append('fileToUpload[]', $(this).get(0).files[i]);
      }
      form.append('eventName', eventName);
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
            console.log(data);
            $.ajax({
              type: "POST",
              url: "../data/event-content-data.php",
              data: {
                data: eventName
              },
              success: function (data) {
                $("#eventConts").find("#event-title").html('');
                $("#eventConts").find("#eventCont").html('');
                $('#event-title').append("<h5 class='modal-title'>" + eventName +
                  "</h5><button type='button' class='close' data-dismiss='modal'><span>&times;</span></button>");
                var jsonData = JSON.parse(data);
                $(jsonData).each(function (index, value) {
                  $('#eventCont').append("<a href='" + value + "' data-toggle='lightbox' data-gallery='event-content-gallery'><img src=" + value + " width='255' height='255'></a>");
                });
                $('#eventCont').append(
                  "<div id='preview-container' class='jpreview-container pt-3 border mt-3'></div>");
              }
            });
          }
        });
      });
      // End of Event-Contents
    });
    $.ajax({
      type: "POST",
      url: "../data/event-content-data.php",
      data: {
        data: eventName
      },
      success: function (data) {
        var jsonData = JSON.parse(data);
        $(jsonData).each(function (index, value) {
          $('#eventCont').append("<a href='" + value + "' data-toggle='lightbox' data-gallery='event-content-gallery'><img src=" + value + " width='255' height='255'></a>");
        });
        $('#eventCont').append(
          "<div id='preview-container' class='jpreview-container pt-3 border mt-3'></div>");
      }
    });
  });
});