<?php

$url = 'http://slashdot.org/slashdot.xml';
$xml = simplexml_load_file($url) or die("cannot connect");

echo "<b><u>Storytime!</u></b><br>";
foreach($xml->story as $story){
    printf('<li><a href="%s">%s</a></li>',$story->url,$story->title);
}

?>