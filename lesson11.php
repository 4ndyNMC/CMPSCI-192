<!DOCTYPE html>
<html><br />
<body>
    <div>
        <?php
        touch("lesson11.txt");
        if(isset($_POST['first']) and isset($_POST['last'])){
            $write = fopen("lesson11.txt",'w');
            fwrite($write,$_POST['first']." ".$_POST['last']);
        }
        ?>
        <form action="lesson11.php" method="post">
            First: <input type="text" name="first" size="8"/> Last: <input type="text" name="last" size="8" />
            <p><input type="submit" name="solve" value="Submit" /></p>
        </form>
        <?php
        $file="lesson11.txt";
        $linecount = 0;
        $handle = fopen($file, "r");
        while(!feof($handle)){
            $line = fgets($handle);
            $linecount++;
        }
        fclose($handle);// https://stackoverflow.com/questions/2162497/efficiently-counting-the-number-of-lines-of-a-text-file-200mb :D
        echo "Well hello there, ".file_get_contents('lesson11.txt')."!<br><br>";
              echo "Your name is stored in lesson11.php, which is a file that is ".filesize('lesson11.txt')." bytes<br><br>";
              echo "It also has ".$linecount." line, though idk why you'd need to know that since you just put like 2 names into it..";?>
    </div>
</body>
</html>