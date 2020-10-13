<?php

include "../config.php";

$action = $_GET['action'];
$id = $_GET['id'];

if($action == "delete"){
    $sql = "delete from shop where id=$id";
    if(mysqli_query($connect,$sql)){
        header("Location: index.php");
    }
}
elseif($action == "edit"){
    $price = $_GET['price'];
    $sql = "UPDATE shop SET price=$price where id=$id";
    if(mysqli_query($connect,$sql)){
        echo "Данные сохранены!";
    }
    else{
        echo "Ошибка сохранения данных!";
    }
}
