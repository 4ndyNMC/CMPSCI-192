<?php
session_start();
$_SESSION['path']="lesson20";
if( isset($_SESSION['name']) and isset($_SESSION['color']) ){
    $name=$_SESSION['name'];
    $color=$_SESSION['color'];

    $id=session_id();
    echo "Hello, $name with session id $id!<body style='background-color:$color'><br>";
    print_r($_SESSION['path']);
}else echo "hello first timer";
?>
<html>
<body>
    <div>
        <form action="lesson20_dest.php" method="get">
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