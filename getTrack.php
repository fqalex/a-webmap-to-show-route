<?php
 
$url='http://www.foooooot.com/trip/' . $_GET["track_id"].'/trackjson/';
// echo $url;
$html= file_get_contents($url);
 
echo $html;
 
?>