<!DOCTYPE html>
<html>
    <body>
        <div>
            <?php
            function convert($username,$email){
                if(!strstr($email,"@"))return false;
                return array(strtoupper(substr($username,0,1)).substr($username,1),strtolower($email));
            }
            echo print_r(convert("andy","ME@hotmail.net"))."<br><br>";
            $numbers = array(14,28.5,69,420,6.6666,6);
            echo "<pre>";
            foreach($numbers as $number){
                printf("%.2f<br>",$number);
            }
            ?>
        </div>
    </body>
</html>