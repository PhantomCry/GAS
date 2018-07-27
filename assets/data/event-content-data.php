<?php 
$eventName = $_POST["data"];
$event_dir = "../images/events/Main/$eventName/*.{jpg,png,gif,jpeg,JPG,PNG,JPEG,GIF}";
$event_images = glob($event_dir, GLOB_BRACE);
$event_data = json_encode($event_images);
echo $event_data;
?>