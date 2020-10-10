<?php

//$cars = ["Audi"=>1000,"BMW"=>1200,"VW"=>900];
////print_r($cars);
//
//foreach($cars as $marka => $price){
//    echo "$marka стоит $price<br>";
//}

$shop = [
    "Audi"=>[
        "price"=>[1000,1500],
        "color"=>"white",
        "year"=>2020
    ],
     "BMW"=>[
        "price"=>1200,
        "color"=>"black",
        "year"=>2020
    ]
];

//print_r($shop);

foreach($shop as $marka => $properties){
    if(is_array($properties['price'])){
        $p = "от ".implode(" до ",$properties['price']);//от 1000 до 1500
    }
    else{
        $p = $properties['price'];
    }
    echo "Автомобиль $marka стоит $p, год выпуска ".$properties['year']."<br>";
}