<!DOCTYPE html>
<html>
    <body>
        <div>
            <?php
            $output = "hey earth!";
            $putout = "hola tierra!";
            $port1 = "ola";
            $port2 = "mundo!";
            # $portugal = $port1 ." ". $port2;
            # $portugal = '$port1 $port 2';
            $portugal = "$port1 $port2";
            echo $output;
            print "<br>";

            echo $putout . " " . $portugal;
            print "<br><br>";
            $bridge = " is a ";
            $string = "note";
            $int = 6;
            $float = 0.9438743;
            $boolean = true;
            echo "$string $bridge". gettype($string). "<br>";
            echo "$int $bridge". gettype($int) ."<br>";
            echo "$float $bridge". gettype($float) ."<br>";
            echo "$boolean $bridge". gettype($boolean) ."<br><br>";

            $a = 6;
            $b = 8;
            if($a>$b){
                echo "a is the big boy";
            } else if ($b>$a){
                echo "b is the big boy";
            } else echo "they're same!";
            print "<br>";
            echo json_encode($a<$b && $b<4328049);
            echo $a>$b;
            echo $b>$a;
            echo $a==$b;
            echo $a<=$b;
            ?>
        </div>
    </body>
</html>