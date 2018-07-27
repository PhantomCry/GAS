<?php
$up_dir = "../images/events/Upcoming/*.{jpg,png,gif,jpeg,JPG,PNG,JPEG,GIF}";
$up_images = glob($up_dir, GLOB_BRACE);
$up_data = json_encode($up_images);
echo $up_data;
?>