<!DOCTYPE html>
<html><br />
<body>
    <div>Response from website: 
    <?php
    if(isset($_POST['url'])){
        /*$webpage = $_POST['url'];
        $fp = fopen( $webpage, "r" ) or die("couldn't open $webpage");
        while ( ! feof( $fp )) {
            print fgets( $fp, 1024 );
        }*/
        /*if(fsockopen($_POST['url'],80,$emp1,$emp2,30)){
            $fp = fsockopen($_POST['url'],80,$emp1,$emp2,30);
		}else echo "that link does not work bro";*/
        $host=$_POST['url'];
        $page="/index.html";
        $fp = fsockopen("$host",80,$errno,$errdesc,30);
        if(!$fp){
            die("Couldn't connect to $host:\nError: $errno\nDesc: $errdesc\n" ); 
		}else{
            fputs( $fp, "HEAD $page HTTP/1.0\r\n" );
            fputs( $fp, "Host: $host\r\n" );
            fputs( $fp, "\r\n" );
            print fgets($fp,1024);
            fclose($fp);
		}
        
        # $request="GET $page HTTP/1.0\r\n";
        # $request.="Host: $host\r\n";
        /*$page=array();
        fputs($fp,$request);
        while(!feof($fp)){
            $page[]=fgets($fp,1024);  
		}
        fclose($fp);
        print "the server returned ".(count($page))."lines!";*/
    }else echo "put in a url mydude";
    ?>
    <form method="post" action="lesson14.php">
    <input type="text" name="url"><br>
    <input type="submit" value="submit">
    </form><br>
    <?php
    $to="99032112@my.hartdistrict.org";
    if(isset($_POST['message'])){
        mail($to,$_POST['subject'],$_POST['message']);
	}
    ?>
    Now send me a message!
    <form method="post" action="lesson14.php">
    <p>Subect: <input type="text" name="subject"></p>
    Message: <input type="text" name="message" size="50">
    <input type="submit" value="send">
    </form>
    </div>
</body>
</html>