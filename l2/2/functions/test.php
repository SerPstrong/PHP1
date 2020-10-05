<?php
$test = 10;//к внешним переменным обращаться нельзя из функции
function sum(int $a,int $b) : int{
    if(isEven($a) && isEven($b)){
        return $a * $b;
    }
    return $a + $b;

    //return - оператор, который завершает работу функции и присваивает ей значение
//    $res = $a + $b;
//    echo $res."<br>";
//    return $res;
//    echo 111;
}

function isEven($x){
    return $x % 2 == 0;//функции присвоили true или false
}

$res = 2 * sum(2,4);
echo $res;
//sum(5);