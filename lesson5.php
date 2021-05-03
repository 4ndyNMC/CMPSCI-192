<!DOCTYPE html>
<html>
    <body>
        <div>
            <!--<form action="lesson5.php" method="get">
                Age: <input type="text" name="age" /><br />
                <input type="submit" /><br />
            </form>
            How's it feel to be <?php #echo $_GET["age"]?>-->
            <?php
            $x=4;
            $y=6;
            switch ($x+$y){
                case $x+$y>10:
                    echo "result 1 has been passed!";
                    break;
                case $x+$y<10:
                    echo "result 2 has been passed!";
                    break;
                default:
                    echo "Spot on!";
            }
            echo "<br><br>";
            $name="johnny";
            switch ($name){
                case "john":
                    echo "I don't know you";
                    break;
                case "johnny":
                    echo "getting warmer";
                    break;
                case "johnyyyy":
                    echo "johnyyy!!";
                    break;
                default:
                    echo "who in the world??";
            }
            echo "<br><br>";
            $answer = 'yes';
            echo $question = "is the ternary operator useful?<br>";
            echo $question = $answer == 'yes'?'Yes indeed<br>':'I sure hope so<br>';
            echo 'i guess the ternary operator is important for quick variable assignment like was shown above, 
                apart of that it just kinda seems like a shortened if statement';
            ?>

        </div>
    </body>
</html>