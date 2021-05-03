<?php
// shows processes going on in system
echo exec('ps -e
          ps -ef
          ps -eF
          ps -ely');
$cmd;
if(isset($_POST['submit'])){
    switch($_POST['cmd']){
        case("tree"):
            $cmd='ps -ejH|ps axjf';
            break;
        case("thread"):
            $cmd='ps -eLf|ps axms';
            break;
        case("security"):
            $cmd='ps -eo euser,ruser,suser,fuser,f,comm,label|ps axZ|ps -eMs';
            break;
        case("process"):
            $cmd='ps -e|ps -ef|ps -eF|ps -ely';
            break;
	}
    echo exec($cmd);
}
?>
<html>
<body>
    <div>
        <form action="lesson21.php" method="post">
        Command:<select name="cmd"><option value="tree">Print process tree</option>
        <option value="thread">Get info about threads</option>
        <option value="security">Get security info</option>
        <option value="process">See processes running on system</option></select>
        <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>
</html>