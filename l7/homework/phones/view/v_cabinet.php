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

        <div class="cabinet">
            <h2 class="heading_h2">Личный кабинет</h2>
            <form action="" method="POST">
                <? foreach ($infoUser as $info) : ?>
                    <p class="cabinet_info_user"><b>ваш логин: </b><?= $info['login'] ?></p>
                    <p class="cabinet_info_user"><b>ваш email: </b><?= $info['email'] ?></p>
                    <p class="cabinet_info_user"><b>ваша дата рождения: </b><?= $info['birthday'] ?></p>
                    <p class="cabinet_info_user"><b>ваш пол: </b><?= $info['sex'] ?></p>
                <? endforeach ?>
            </form>
            <a class="cabinet_logout" href="../engine/logout.php">Выйти</a>
        </div>

        <div class="footer">
            <p> <a class="header_link" href="">О нас</a> </p>
            <p> <a class="header_link" href="">Контакты</a> </p>
            <p> <a class="header_link" href="">Все права защищены!</a> </p>
        </div>

    </div>
</body>
</html>