<!DOCTYPE html>
<html>
<body>
    <div>
        <?php
        print "<pre>\n";
        $file = fopen('lesson18.txt','r');
        $text = "";
        while ($line = fgets($file)) {
          $text.=" $line";
        }
        fclose($file);
        preg_match_all("/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9_-]+)/", $text, $array) . "\n";
        print_r( $array );
        print "</pre>\n";
        ?>
    </div>
</body>
</html>