<?php
header("Content-type: image/png");
 $image = imagecreate( 400, 100 );
 $red = imagecolorallocate($image, 255,0,0);
 $blue = imagecolorallocate($image, 0,0,255 );
 $green = imagecolorallocate($image, 0,255,0);
 $white = imagecolorallocate($image,255,255,255);
 imagerectangle( $image, 10, 10, 390, 50, $blue );
 $progress=rand(0,390);
 $moneymade=round($progress/390 * 10000);
 $string = "There has been \$".$moneymade." dollars out of \$10000 so far!";
 imagefilledrectangle($image,10,10,$progress,50,$green);
 imageString( $image, 4, 10, 75, $string, $white );
 imagepng($image);
?>
<!DOCTYPE html>
<html><br />
<body>
    <div>
        
    </div>
</body>
</html>