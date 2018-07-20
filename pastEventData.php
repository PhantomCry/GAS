<?php 
$past_dir = "assets/images/events/Past/*.{jpg,png,gif,JPG,jpeg}";
$past_images = glob($past_dir, GLOB_BRACE);
$past_data = json_encode($past_images);
echo $past_data;
?>