<!DOCTYPE html>
<html>
<head>
    <title>MY PHP SCRIPT :)</title>
</head>
<body>
    <div>
        <?php
             $heroes = array("iron man","thor","captain america","the incredible hulk");
             $timestheydostuff[] = "4:30";
             $timestheydostuff[] = "6:00";
             $timestheydostuff[] = "7:30";
             $timestheydostuff[] = "9:00";
             # echo print_r($heroes)."<br><br>";
             # echo print_r($timestheydostuff)."<br><br>";

             $movies = array("SF"=>array("2001","terminator","alien"),
                 "action"=>array("john wick","die hard","rambo"),
                 "romance"=>array("twighlight","a star is born","i still believe"));
             # echo print_r($movies);
             foreach($movies as $genre=>$movie){
                 echo "<u>".$genre."</u><br>";
                 foreach($movie as $name){
                     echo " - ".$name."<br>";
                 }
             }
        ?>
    </div>
</body>
</html>