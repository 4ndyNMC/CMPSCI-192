<?php
if(isset($_GET['color']) and isset($_GET['name'])){
	$color=$_GET['color'];
	$name=$_GET['name'];
	setcookie("name",$name,time()+(60*60*24*365*10),"/");
	setcookie("color",$color,time()+(60*60*24*365*10),"/");
	echo "Hello, $name!<body style='background-color:$color'>";
}
?>
<br><form action="lesson19.php"><input type="submit" value="go back"></form>