<?
include 'model/goods.php';

$goods = getGoods();

$title = "List of goods";

$content = "templates/goods.php";	


include "templates/main.php";//базовый шаблон