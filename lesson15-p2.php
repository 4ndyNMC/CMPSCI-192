<?php
if(isset($_POST['br']) and isset($_POST['bg']) and isset($_POST['bb']) and isset($_POST['fr']) and isset($_POST['fg']) and isset($_POST['fb']) ){
    if(isset($_POST['height']) and isset($_POST['width']) and isset($_POST['message']) ){
        $br= $_POST['br'];
        $bg= $_POST['bg'];
        $bb= $_POST['bb'];
        $fr= $_POST['fr'];
        $fg= $_POST['fg'];
        $fb= $_POST['fb'];
        $height=$_POST['height'];
        $width=$_POST['width'];
        $text = $_POST['message'];
        $text = str_replace(" ","_",$text);
    
        if($_POST['shadow']=='true')$shadow=true;
        else $shadow=false;
    }else echo "<b>complete the form, please</b>";
}else echo "<b>complete the form, please</b>";
?>
<img src = "lesson15-p22.php?<?php echo "text=$text&height=$height&width=$width&br=$br&bg=$bg&bb=$bb&fr=$fr&fg=$fg&fb=$fb&shadow=$shadow";?>">
<!DOCTYPE html>
<html>
<body>
    <div>
        <form method="post" action="lesson15-p2.php">
        Height:<input type="number" name="height"><br> Width:<input type="number" name="width"><br>
        Headline:<input type="text" name="message" size="30"><br>
        Background Red:<input type="number" name="br" min=0 max=255> Background Green:<input type="number" name="bg" min=0 max=255>
        Background Blue:<input type="number" name="bb" min=0 max=255><br>
        Foreground Red: <input type="number" name="fr" min=0 max=255>Foreground Green:<input type="number" name="fg" min=0 max=255>
        Foreground Blue:<input type="number" name="fb" min=0 max=255><br>
        Shadow:<select name="shadow"><option value="true">Yes</option><option value="false">No</option></select><br>
        <input type="submit" name="create">
        </form>
    </div>
</body>
</html>
