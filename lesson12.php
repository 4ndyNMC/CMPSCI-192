<!DOCTYPE html>
<html><br />
<body>
    <div>
        <?php
        $connect=mysqli_connect("localhost","root","","userinfo");
        if(isset($_POST['save'])){
            # $user=$_POST['user'];
            # $pass=$_POST['pass'];
            # $query="choose * from login, username=".$user." and password".$pass;
            $sql = "SELECT * FROM users;";
            $result=mysqli_query($connect,$sql);
            if(!$result)echo var_dump(mysqli_error($connect));
            $count=mysqli_num_rows($result);
            if($count>0){
                while($row = mysqli_fetch_assoc($result)) echo $row['username'];
            }
            else echo "darnit it's empT";
        }
        ?>
        <form method="post">
            Username: <input type="text" name="user"/> Password: <input type="text" name="pass" />
            <p><input type="submit" name="save" value="login" /></p>
        </form>
    </div>
</body>
</html>