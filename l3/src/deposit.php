<?php

function deposit($money,$year){
    $stavka = $year > 3 ? 8 : 7;
    for($i = 1;$i <= $year;$i++){
        $profit = $money * $stavka / 100;//ежегодная прибыль
        $money += $profit;
        echo "За $i год Ваша сумма = ".round($money,2)." Прибыль = ".round($profit,2)."<br>";
    }
}

//deposit(100000,5);

$money = (isset($_GET['money'])) ? $_GET['money'] : rand(100000,1000000);
$year = (isset($_GET['year'])) ? $_GET['year'] : rand(1,7);
deposit($money,$year);