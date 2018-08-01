$(function () {
  var month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";

  var xmlHttp;

  function srvTime() {
    try {
      //FF, Opera, Safari, Chrome
      xmlHttp = new XMLHttpRequest();
    } catch (err1) {
      //IE
      try {
        xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');
      } catch (err2) {
        try {
          xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
        } catch (eerr3) {
          //AJAX not supported, use CPU time.
          alert("AJAX not supported");
        }
      }
    }
    xmlHttp.open('HEAD', window.location.href.toString(), false);
    xmlHttp.setRequestHeader("Content-Type", "text/html");
    xmlHttp.send('');
    return xmlHttp.getResponseHeader("Date");
  }

  var st = srvTime();
  var today = new Date(st);
  var MM = month[today.getMonth()]; // NOTE:  January is 0!
  var year = today.getFullYear();
  today = MM + "-" + year;

  var lastMonth = new Date(st);
  lastMonth = month[lastMonth.getMonth() - 1] + "-" + year;

  var lastTwoMonths = new Date(st);
  lastTwoMonths = month[lastTwoMonths.getMonth() - 2] + "-" + year;

  var lastThreeMonths = new Date(st);
  lastThreeMonths = month[lastThreeMonths.getMonth() - 3] + "-" + year;

  $.ajax({
    type: 'GET',
    url: '../data/team-data.json',
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      $(data).each(function (index, value) {
        switch (value['date']) {
          case today:
            $('#current-month').append("<img class='card-img-top' id='best-mem' src='../../assets/images/logo/template.png' alt='Card image cap'><div class='card-body'><h3 class='card-title'>Employee Name</h3><p class='card-text'>Employee Position</p></div>");
            break;
          case lastMonth:
            console.log('EYYYY');
            console.log(index);
            break;
          case lastTwoMonths:
            console.log('Workin');
            console.log(index);
            break;
          case lastThreeMonths:
            console.log('HEYYY');
            console.log(index);
            break;
          default:
            console.log('Not Shown');
            console.log(index);
            break;
        }
        // if (value['date'] === today) {
        //   console.log('QWE');
        // } else if (value['date'] === lastMonth) {
        //   console.log('ASDASDASD');
        // }
      })
    }
  });




  $("#award-form").on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      type: 'POST',
      url: '../handlers/php/team-handler.php',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
        console.log(data);
      }
    });
  });
});