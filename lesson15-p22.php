<?php
Header("Content-Type: image/png");
$image = imagecreate($_GET['width'], $_GET['height']);
 $string=$_GET['text'];
 $string=str_replace("_"," ",$string);
 $string=str_replace("<!DOCTYPE","",$string);
 $bcolor = imagecolorallocate($image,$_GET['br'],$_GET['bg'],$_GET['bb']);# $_GET['bcolor'];
 $textcolor = imagecolorallocate($image,$_GET['fr'],$_GET['fg'],$_GET['fb']);# $_GET['fcolor'];
 if($_GET['shadow']){
 	 $shadowcolor = imagecolorallocate($image,($_GET['br']+$_GET['fr']) /2,($_GET['bg']+$_GET['fg']) /2,($_GET['bb']+$_GET['fb']) /2);
	 imageString($image, 4, $_GET['width']/11,$_GET['height']/9,$string,$shadowcolor);
 }

 # if(!isset($_GET['text'])){
  # imageString( $image, 4, 0, 0, "default", $white );
 # imagepng($image);
 # }else{
	imageString( $image, 4, $_GET['width']/10, $_GET['height']/10, $string, $textcolor );
	imagepng($image);
#  }

?>