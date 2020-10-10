<?php

$url = "https://site.ru/demo/index.php?id=1";
$arr = pathinfo($url);
echo $arr['filename'];