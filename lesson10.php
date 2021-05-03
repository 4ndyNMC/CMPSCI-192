<?php
session_start();
if(!(session_id() == '' || !isset($_SESSION))){
    session_destroy();
    session_start();
} else session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <div>
            <?php
            $answer;
            $n1;
            $n2;
            if(isset($_GET['n2'])and isset($_GET['n2'])and isset($_GET['operation'])){
                $n1=$_GET['n1'];
                $n2=$_GET['n2'];
            }
            if(isset($_GET['operation'])){
                if($_GET['operation']!="?"){
                    switch($_GET['operation']){
                        case("add"):
                            $answer = $_GET['n1']+$_GET['n2'];# echo $_GET['n1']+$_GET['n2'];
                            break;
                        case("sub"):
                            $answer = $_GET['n1']-$_GET['n2'];
                            break;
                        case("mul"):
                            $answer = $_GET['n1']*$_GET['n2'];
                            break;
                        case("div"):
                            $answer = $_GET['n1']/$_GET['n2'];
                            break;
                        default:
                            $answer = "??";
                    }
                }
                $sum=$_SESSION['solve']+1;
                echo "Requests: ".$sum;
            }
            ?>
            <form action="lesson10.php" method="get">
                <p><input type="text" name="n1" size="1" value="<?php if(isset($n1)) echo $n1;?>"/>
                <select name="operation">
                      <option value="opt">?</option>
                      <option value="add">+</option>
                      <option value="sub">-</option>
                      <option value="mul">x</option>
                      <option value="div">/</option>
                </select>
                <input type="text" name="n2" size="1" value="<?php if(isset($n2)) echo $n2;?>"/>
                = <input type="text" name="telnum" value="<?php if(isset($answer)) echo $answer;?>" readonly="readonly" size="4"/>
                <input type="hidden" name="foo" value="<?php if(isset($_GET['solve'])){
                                                                 $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

                                                                 if($pageWasRefreshed ) {
                                                                     //donothing :)
                                                                 } else {
                                                                     $_SESSION['solve'] = $_SESSION['solve']+1;
                                                                     echo $_SESSION['solve'];
                                                                 }
                                                                 
                                                             }else echo "1";?>" />
                </p>
                <p><input type="submit" name="solve" value="Submit"/></p>
            </form>
        </div>
    </body>
</html>