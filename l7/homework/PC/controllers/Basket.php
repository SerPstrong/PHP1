<?php

//Файл помещает товар в корзину или обновляет количество товара в уже существующей корзине
include_once "../models/Model.php";
$count = 1;
if(isset($_POST['id'])){
    $id = (int)($_POST['id']);
    if(isset($_SESSION['login']) && isset($_SESSION['pass'])) {
        $login = $_SESSION['login'];
    }
    $good = getOne($link, $id, 'goods');//массив из 1 товара
    $_SESSION['basket'] = 1;

    $goodTemp = getOneTemp($link, $id, 'temp_orders');
    if(isset($goodTemp)){
        $id = $goodTemp['id_good'];
        $count = $goodTemp['count'];
        $count++;
        editTempOrder($link, $id, $count);
    }else{
        newTempOrder($link, $id, $good['name'], $good['price'], $count, $login);
    }

   echo "<a href='basket.php'><u>Просмотреть товары</u></a>";

}

$goodsTemp = getAll($link,'temp_orders');

if(isset($_GET['action']) and $_GET['action']=='clear'){
    unset($_SESSION['basket']);
    $query = sprintf("DELETE FROM temp_orders");
    $result = mysqli_query($link, $query);
    header('Location: index.php');
}

if(isset($_GET['action']) and $_GET['action']=='order'){

}
