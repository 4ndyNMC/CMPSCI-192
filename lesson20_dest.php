<?php
session_start();
if(isset($_GET['name']) and isset($_GET['color'])){
    $_SESSION['name']=$_GET['name'];
    $_SESSION['color']=$_GET['color'];
}
$_SESSION['path'].=" lesson20_dest";
$id=session_id();
echo "Hello, ".$_SESSION['name']." with session id $id!<body style='background-color:".$_SESSION['color']."'><br>";
print_r($_SESSION['path']);
?>
<br><form action="lesson20.php"><input type="submit" value="go back"></form>
        <li><a href="lesson20_dest_1.php?<?php print "id=$id";?>">Place 1</a></li>
        <li><a href="lesson20_dest_2.php?<?php print "id=$id";?>">Place 2</a></li>
        <li><a href="lesson20_dest_3.php?<?php print "id=$id";?>">Place 3</a></li>