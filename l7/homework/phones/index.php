<?
    session_start();
    // session_unset();
    include_once 'engine/functions.php';
    $products = getAllProduct();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="public/style.css" rel="stylesheet">
    <title>Тест</title>
</head>
<body>
    <div class="container">

        <div class="header">
            <a class="header_link" href="index.php">Каталог товаров</a>
            <a class="header_link" href="engine/calculator_1.php">Калькулятор №1</a>
            <a class="header_link" href="engine/calculator_2.php">Калькулятор №2</a>
            <a class="header_link" href="engine/reviews.php">Отзывы</a> 
            <? if (isset($_SESSION['userName'])) : ?>
                <a class="header_link" href="engine/cabinet.php">Личный кабинет</a>
            <? else : ?>
                <a class="header_link" href="engine/auth.php">Авторизация</a>
            <? endif ?>
            <a class="header_link" href="engine/basket.php">Корзина (<?= countProductBasket(); ?>)</a> 
        </div>

        <h1 class="heading_h1">Каталог товаров</h1>
        <div class="catalog_products">
            <? foreach ($products as $product) : ?>
                <div class="catalog_card">
                    <div class="catalog_card_block_img">
                        <img class="catalog_card_img" src="public/images/small_images_product/<?= $product['image'] ?>" alt="">
                    </div>
                    <div class="catalog_card_block_info">
                        <p class="catalog_card_name"><b><?= $product['name'] ?></b></p>
                        <p class="catalog_card_price"><b><?= $product['price'] ?> грн</b></p>
                        <p class="catalog_card_add">
                            <a class="catalog_card_add_link" href="view/v_product.php?id=<?= $product['id'] ?>">Перейти к товару</a>
                        </p>
                    </div>
                </div>
            <? endforeach ?>
        </div>

        <div class="footer">
            <p> <a class="header_link" href="">О нас</a> </p>
            <p> <a class="header_link" href="">Контакты</a> </p>
            <p> <a class="header_link" href="">Все права защищены!</a> </p>
        </div>

    </div>
</body>
</html>