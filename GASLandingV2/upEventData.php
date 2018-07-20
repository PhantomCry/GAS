<?php
$up_dir = "assets/images/events/Upcoming/*.{jpg,png,gif,JPG,jpeg}";
$up_images = glob($up_dir, GLOB_BRACE);
$up_data = json_encode($up_images);
echo $up_data;
?>