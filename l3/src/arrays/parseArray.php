<?php

$cars = ["Audi","BMW","VW"];

//Преобразование массива в строку

$str = implode(", ",$cars);
echo $str;

//Преобразование строки в массив
$mas = explode(", ",$str);


//echo array_push($cars,"Skoda");//добавляет элемент в конец массива
$cars[] = "VAZ";

$deleted = array_pop($cars);
//print_r($cars);

$cart = [500,300,200];

function sumCart($m){
    $s = 0;
    foreach($m as $good){
       $s = $s + $good; 
    }
    return $s;
}

echo sumCart($cart);