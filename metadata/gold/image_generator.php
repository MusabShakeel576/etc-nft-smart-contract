<?php
  $id = $_GET['id'];

  //Set the Content Type
  header('Content-type: image/png');

  // Create Image From Existing File
  $image = imagecreatefrompng('gold.png');
  imagesavealpha($image, true);
  
  // Allocate A Color For The Text
  $color = imagecolorallocate($image, 212, 175, 55);

  // Set Path to Font File
  $font_path = 'NotoSansMono-Regular.ttf';

  // Set Text to Be Printed On Image
  $identifier = "2000 0000 000";
  $pad = str_pad($id+1, 5, "0", STR_PAD_LEFT);
  $substring1 = substr($pad, 0, 1);
  $substring2 = substr($pad, 1);
  $text = $identifier . $substring1 . ' ' . $substring2;

  // Print Text On Image
  imagettftext($image, 31, 0, 70, 210, $color, $font_path, $text);

  // Send Image to Browser
  imagepng($image);

  // Clear Memory
  imagedestroy($image);
?>