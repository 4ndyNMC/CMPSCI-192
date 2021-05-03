<!DOCTYPE html>
<html><br />
<body>
    <div>
        <?php
        $email;
        $message;
        $date;
        if(isset($_POST['email']) and isset($_POST['msg']) and isset($_POST['date'] )){
            $email = $_POST['email'];
            $message = $_POST['msg'];
            $date = strtotime($_POST['date']);
		}
        $connect=mysqli_connect("localhost","root","","userinfo");
        if(isset($_POST['save'])){
            $sql="INSERT INTO db13 (email,message,date) VALUES ('$email','$message',$date);";
            mysqli_query($connect,$sql);
        }
        ?>
        <form method="post">
            Email: <input type="email" name="email">
            <p>Message: <input type="text" name="msg" size="50"></p>
            <p>Date: <input type="datetime-local" name="date"></p>
            <p><input type="submit" name="save" value="login" ></p>
        </form>
        <table style="width:100%">
          <tr>
            <th>Email</th>
            <th>Message</th> 
            <th>Unix Timestamp</th>
          </tr>
        <?php
        $query = "SELECT * FROM db13;";
        $result=mysqli_query($connect,$query);
        $count=mysqli_num_rows($result);
        if($count>0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<tr><td>'.$row['email'].'</td>';
                echo '<td>'.$row['message'].'</td>';
                echo '<td>'.$row['date'].'</td></tr>';
            }
        }
        ?>
        </table>
    </div>
</body>
</html>