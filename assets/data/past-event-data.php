<?php 
$past_dir = "../images/events/Past/*.{jpg,png,gif,jpeg,JPG,PNG,JPEG,GIF}";
$past_images = glob($past_dir, GLOB_BRACE);
$past_data = json_encode($past_images);
echo $past_data;
?> 