<?php

//$svetophor = ["red","yellow","green"];
//$color = $svetophor[rand(0,2)];
$color = $_GET['color'];
//$color = $_GET['color'] ? $_GET['color'] : "green";
echo "Горит $color цвет<hr>";

switch ($color){
    case "red":
        echo "Стоп";
        break;
    case "green":
        echo "Вперед";
        break;
    case "yellow":
        echo "Внимание";
        break;
    default:
        echo "Поломка светофора";
}
