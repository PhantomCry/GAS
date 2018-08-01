$(function (){
  $("#award-form").on('submit', function (e){
    e.preventDefault();
    var formData = new FormData(this);
    console.log('TEST');
    $.ajax({
      type: 'POST',
      url: '../handlers/php/team-handler.php',
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        console.log(data);
      }
    });
  });
});