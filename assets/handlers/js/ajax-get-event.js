// Dynamic Contents
$(function () {
  // Get Data of Upcoming Events
  $.ajax({
    type: 'GET',
    url: 'assets/data/up-event-data.php',
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
          "<span class='imgCheckbox1 hovereffect'><img src='assets/images/events/Upcoming/" + filename +
          "' name='" + filename + "'><div class='overlay toggle-hover'><a id='test' href='assets/images/events/Main/" +
          eventName + "' data-toggle='modal' data-target='#eventConts'>" + eventName +
          "</a></div></span>");
      });

      $("#toggle-checkbox").on('click', function () {
        $("#moveUp img").imgCheckbox();
        $("#moveUp").find("img").attr("width", 225);
        $("#moveUp").find("img").attr("height", 225);
        $("#moveUp").find("span").removeClass("hovereffect");
        $("#moveUp").find(".toggle-hover").addClass("hide");
        $("#up-buttons").removeClass("hide");
        $("#cancel-edit").removeClass("hide");
      });
      $("#cancel-edit").on('click', function () {
        location.reload(true);
      });
    }
  });
  // End of Upcoming Event Data

  // Get Data of Past Events
  $.ajax({
    type: 'GET',
    url: 'assets/data/past-event-data.php',
    dataType: 'json',
    success: function (data) {
      $(data).each(function (index, value) {
        var index = value.lastIndexOf("/") + 1;
        var filename = value.substr(index);
        var eventName = value.substring(
          value.lastIndexOf("/") + 1,
          value.lastIndexOf("_")
        );
        $('#movePast').append(
          "<span class='imgCheckbox1 hovereffect'><img src='assets/images/events/Past/" + filename +
          "' name='" + filename + "'><div class='overlay toggle-hover'><a href='assets/images/events/Main/" +
          eventName + "' data-toggle='modal' data-target='#eventConts'>" + eventName + "</a></div></span>")
      });
      $("#toggle-checkbox").on('click', function () {
        $("#movePast img").imgCheckbox();
        $("#movePast").find("img").attr("width", 225);
        $("#movePast").find("img").attr("height", 225);
        $("#movePast").find("span").removeClass("hovereffect");
        $("#movePast").find(".toggle-hover").addClass("hide");
        $("#past-buttons").removeClass("hide");
      });
      $("#cancel-edit").on('click', function () {
        location.reload(true);
      });
    }
  });
  // End of Past Event Data
});