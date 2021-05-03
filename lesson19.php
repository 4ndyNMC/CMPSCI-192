<?php
$GLOBALS['color'] = $_COOKIE['color'];
$GLOBALS['name'] = $_COOKIE['name'];
if(empty($name)){
    echo "hello first timer!";
}else{
    echo "Hello, $name!<body style='background-color:$color'>";
}
?>
<html>
<body>
    <div>
        <form action="lesson19_dest.php" method="get">
        Name: <input type="text" name="name"><br>
        Page Color: <select name="color">
            <option value="red">Red</option>
            <option value="orange">Orange</option>
            <option value="yellow">Yellow</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="white">White</option>
            <option value="mrose">Misty Rose</option>
            <option value="beige">Beige</option>
        <input type="submit">
        </form>
    </div>
</body>
</html>