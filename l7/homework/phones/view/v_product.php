<?
    session_start();
    include_once '../engine/functions.php';
    $productID = (int)($_GET['id']);
    $product = getProduct($productID);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="../public/style.css" rel="stylesheet">
    <title>Тест</title>
</head>
<body>
    <div class="container">

        <div class="header">
            <a class="header_link" href="../index.php">Каталог товаров</a>
            <a class="header_link" href="../engine/calculator_1.php">Калькулятор №1</a>
            <a class="header_link" href="../engine/calculator_2.php">Калькулятор №2</a>
            <a class="header_link" href="../engine/reviews.php">Отзывы</a> 
            <? if (isset($_SESSION['userName'])) : ?>
                <a class="header_link" href="../engine/cabinet.php">Личный кабинет</a>
            <? else : ?>
                <a class="header_link" href="../engine/auth.php">Авторизация</a>
            <? endif ?>
            <a class="header_link" href="../engine/basket.php">Корзина (<?= countProductBasket(); ?>)</a> 
        </div>

        <a class="one_card_product_link_back" href="../index.php"><-Назад</a>
        <div class="one_card_product">
            <div>
                <img src="../public/images/big_images_product/<?= $product[0]['image'] ?>" alt="">
            </div>
            <div>
                <p class="one_card_product_name"><?= $product[0]['name'] ?></p>
                <p class="one_card_product_price"><?= $product[0]['price'] ?> грн</p>
                <p class="one_card_product_add_basket">
                    <a class="one_card_product_add_basket_link" href="../engine/addBasket.php?id=<?= $product[0]['id'] ?>">Добавить в корзину</a>
                </p>
                <p class="one_card_product_description"><b>Описание: </b><?= $product[0]['description'] ?></p>
            </div>
        </div>
        
        <div class="footer">
            <p> <a class="header_link" href="">О нас</a> </p>
            <p> <a class="header_link" href="">Контакты</a> </p>
            <p> <a class="header_link" href="">Все права защищены!</a> </p>
        </div>

    </div>
</body>
</html>