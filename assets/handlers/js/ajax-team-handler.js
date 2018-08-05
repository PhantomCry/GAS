$(function () {
  
  getJSONData();
  
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

  var lastFourMonths = new Date(st);
  lastFourMonths = month[lastFourMonths.getMonth() - 4] + "-" + year;


  
  function getJSONData(){
    $.ajax({
      type: 'GET',
      url: 'assets/data/team-data.json',
      dataType: 'json',
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
        $(data).each(function (index, value) {
          switch (value['date']) {
            case lastMonth:
            $('#last-month').html('');
              $('#last-month').append("<img class='card-img-top' src='assets/images/awards/" + year + "/" + value['pic'] + "' alt='Card image cap'><div class='card-body'><h3 class='card-title'>" + value['first-name'] + ' ' + value['last-name'] + "</h3><p class='card-text'>" + value['position'] + "</p></div><button type='button' class='btn btn-danger remove' id='"+index+"'>Remove</button>");
              break;  
            case lastTwoMonths:
            $('#last-two-months').html('');
              $('#last-two-months').append("<h2 class='text-center'>"+value['date'].split('-')[0]+"</h2><img class='card-img-top'  src='assets/images/awards/" + year + "/" + value['pic'] + "' alt='Card image cap'><div class='card-body'><h3 class='card-title'>" + value['first-name'] + ' ' + value['last-name'] + "</h3><p class='card-text'>" + value['position'] + "</p></div><button type='button' class='btn btn-danger remove' id='"+index+"'>Remove</button>");
              break;
            case lastThreeMonths:
            $('#last-three-months').html('');
              $('#last-three-months').append("<h2 class='text-center'>"+value['date'].split('-')[0]+"</h2><img class='card-img-top' src='assets/images/awards/" + year + "/" + value['pic'] + "' alt='Card image cap'><div class='card-body'><h3 class='card-title'>" + value['first-name'] + ' ' + value['last-name'] + "</h3><p class='card-text'>" + value['position'] + "</p></div><button type='button' class='btn btn-danger remove' id='"+index+"'>Remove</button>");
              break;
            case lastFourMonths:
            $('#last-four-months').html('');
              $('#last-four-months').append("<h2 class='text-center'>"+value['date'].split('-')[0]+"</h2><img class='card-img-top' src='assets/images/awards/" + year + "/" + value['pic'] + "' alt='Card image cap'><div class='card-body'><h3 class='card-title'>" + value['first-name'] + ' ' + value['last-name'] + "</h3><p class='card-text'>" + value['position'] + "</p></div><button type='button' class='btn btn-danger remove' id='"+index+"'>Remove</button>");
              break;
            default:
            $('#others').append("<div class='card'><h2 class='text-center'>"+value['date']+"</h2><img class='card-img-top' src='assets/images/awards/" + year + "/" + value['pic'] + "' alt='Card image cap'div class='card-body'><h3 class='card-title'>" + value['first-name'] + ' ' + value['last-name'] + "</h3><p class='card-text'>" + value['position'] + "</p></div></div><button type='button' class='btn btn-danger remove' id='"+index+"'>Remove</button>");
              break;
          }
        });
        $('.remove').on('click', function (){
          var id = $(this).attr('id');
          deleteMem(id);
        });
      }
    });
  }
  
  
  function deleteMem(id){
    $.ajax({
      type: 'POST',
      url: 'assets/handlers/php/team-delete-handler.php',
      data: { id : id },
      success: function (data) {
        console.log(data);
        location.reload();
      }
    })
  }

  
  $("#award-form").on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      type: 'POST',
      url: 'assets/handlers/php/team-handler.php',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function () {
        getJSONData();
      }
    });
  });
});