<?php
if(isset($_POST['submit'])and isset($_POST['bday'])){
    $bday=str_replace("-","/",$_POST['bday']);
    echo $bday;
    if(strtotime($bday)<time()){
        echo "Nearest birthday is ".substr($bday,5)."/".(date("Y")+1);
        # $ts=strtotime(substr($bday,5)."/".(date("Y")+1)-time());# -strtotime(date("m/d/Y"));
        $ts=strval(strtotime(substr($bday,5)."/".(date("Y")+1))-time())+32400;
        # echo "<br>$ts";
	}else{
        echo "Nearest birthday is ".substr($bday,5)."/".(date("Y"));
        # $ts=strtotime(substr($bday,5)."/".(date("Y"))-time());# -strtotime(date("m/d/Y"));
        $ts=strval(strtotime(substr($bday,5)."/".(date("Y")))-time())+32400;
        # echo "<br>$ts";
	}
    $day = floor($ts / (24 * 3600)); 
    $ts = ($ts % (24 * 3600)); 
    $hour = $ts / 3600; 
    $ts %= 3600; 
    $minutes = $ts / 60 ; 
    $ts %= 60; 
    $seconds = $ts;   
    echo ("<br>$day days ".floor($hour)." hours ".floor($minutes)." minutes $seconds seconds"); 
}
?>
<!DOCTYPE html>
<html>
    <body>
        <div>
        <form method="post" action="lesson16.php">Birthday:<input type="date" name="bday"><input type="submit" name="submit"></form>
        </div>
    </body>
</html>