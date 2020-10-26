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

        <div class="basket_block">
            <? if (empty($_SESSION['product_basket'])) : ?>
                <h1 class="basket_header_h2">В корзине нет товаров</h1>
            <? else : ?>

            <div class="basket_product">
                <table class="basket_table">
                <tr>
                    <td colspan="2" class="table_name"><b>Наименование </b></td>
                    <td class="table_price"><b>Цена </b></td>
                    <td class="table_count"><b>Количество</b></td>
                </tr>
                <? foreach ($productInfo as $product) : ?>
                    <tr>
                        <td class="table_img">
                            <img class="basket_image" src="../public/images/small_images_product/<?= $product[0]['image'] ?>" alt="">
                        </td>
                        <td class="table_name"> 
                            <?= $product[0]['name'] ?>
                        </td>
                        <td class="table_price">
                            <?= $product[0]['price'] ?>
                        </td>
                        <td class="table_count">
                            <a class="counter_product" href="../engine/changetProductBasket.php?id=<?= $product[0]['id'] ?>&act=plus">+</a>
                            <span class="counter_product"><?= $productCount[$product[0]['id']] ?></span>
                            <a class="counter_product" href="../engine/changetProductBasket.php?id=<?= $product[0]['id'] ?>&act=minus">-</a>
                        </td>
                        <td class="table_delete">
                            <a class="table_delete_input" href="../engine/changetProductBasket.php?id=<?= $product[0]['id'] ?>&act=delete">Удалить товар</a>
                        </td>
                        <? $productSum[] = $product[0]['price'] * $productCount[$product[0]['id']] ?> <!-- Записиваем общую суму -->
                    </tr>
                <? endforeach ?>
                </table>
                <h3>Общая сумма заказа: <?= array_sum($productSum) ?> грн</h3>
            </div>
            <hr>
            
            <div class="basket_info">
                <h3>Информация о клиенте</h3>
                <form action="#" method="POST">
                    <input class="table_user_info" type="text" placeholder="Ваше имя" required> <br>
                    <input class="table_user_info" type="number" placeholder="Ваш номер мобильного" required> <br>
                    <input class="table_user_info" type="text" placeholder="Адрес доставки" required> <br>
                    <input class="table_user_info_submit" type="submit" value="Отправить заказ">
                </form>
            </div>
            <? endif ?>
        </div>

        <div class="footer">
            <p> <a class="header_link" href="">О нас</a> </p>
            <p> <a class="header_link" href="">Контакты</a> </p>
            <p> <a class="header_link" href="">Все права защищены!</a> </p>
        </div>

    </div>
</body>
</html>