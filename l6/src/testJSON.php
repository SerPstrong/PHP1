<?php
//$mas = ["good"=>"Audi","price"=>100];
//$str =  json_encode($mas);
//
//$arr = json_decode($str,true);
//print_r($arr);
//

$src = file_get_contents("https://www.cbr-xml-daily.ru/daily_json.js");
$cources = json_decode($src,true);
//print_r($cources);
echo "Курс доллара: ".$cources['Valute']['USD']['Value'];