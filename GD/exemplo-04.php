<?php 

header("Content-Type: image/jpg");

$file = "wallpaper.jpg";

$new_width = 255;

$new_heigth = 255;

if (file_exists($file)){

	list($old_width, $old_height) = getimagesize($file);

	$new_image = imagecreatetruecolor($new_width, $new_heigth);

	$old_image = imagecreatefromjpeg($file);


	imagecopyresized($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_heigth, $old_width, $old_height);

	imagejpeg($new_image);

	imagedestroy($new_image);
	imagedestroy($old_image);
}

?>