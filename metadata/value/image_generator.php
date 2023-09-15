<?php
  $id = $_GET['id'];

  //Set the Content Type
  header('Content-type: image/png');

  // Create Image From Existing File
  $image = imagecreatefrompng('value.png');
  imagesavealpha($image, true);
  
  // Allocate A Color For The Text
  $color = imagecolorallocate($image, 57, 138, 211);

  // Set Path to Font File
  $font_path = 'NotoSansMono-Regular.ttf';

  // Set Text to Be Printed On Image
  $identifier = "3000 0000 00";
  $pad = str_pad($id+1, 6, "0", STR_PAD_LEFT);
  $substring1 = substr($pad, 0, 2);
  $substring2 = substr($pad, 2);
  $text = $identifier . $substring1 . ' ' . $substring2;

  // Print Text On Image
  imagettftext($image, 31, 0, 70, 210, $color, $font_path, $text);

  // Send Image to Browser
  imagepng($image);

  // Clear Memory
  imagedestroy($image);
?>