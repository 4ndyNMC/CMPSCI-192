<?php
session_start();
$name=$_SESSION['name'];
$color=$_SESSION['color'];
$_SESSION['path'].=" lesson20_dest_3";
$id=session_id();
echo "Hello, $name with session id $id!<body style='background-color:$color'><br>";
print_r($_SESSION['path']);
?>
<br><form action="lesson20.php"><input type="submit" value="go back"></form>
        <li><a href="lesson20_dest_1.php?<?php print "id=$id";?>">Place 1</a></li>
        <li><a href="lesson20_dest_2.php?<?php print "id=$id";?>">Place 2</a></li>
        <li><a href="lesson20_dest.php?<?php print "id=$id";?>">Origin</a></li>