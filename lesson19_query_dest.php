<?php
$name=$_GET['name'];
$color=$_GET['color'];
echo "Hello, $name!<body style='background-color:$color'>";
$query="color=".urlencode($color);
$query.="&name=".urlencode($name);
?>
<br><a href="lesson19_query.php?<?php print $query ?>">go back</a>