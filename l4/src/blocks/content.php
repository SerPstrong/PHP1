<?php
$path = $_SERVER['DOCUMENT_ROOT']."/files/test.txt";

$file = fopen($path,"r");
while(!feof($file)){
    echo fgets($file)."<br>";
}