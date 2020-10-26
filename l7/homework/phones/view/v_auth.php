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

        <div class="auth_block">
            <? if ($_SESSION['userName'] === 0) : ?>
                <h2>Вы ввели не верно логин или пароль</h2>
            <? endif ?>
            <h2 class="heading_h2">Авторизация</h2>
            <form action="../engine/auth.php" method="POST">
                <input class="auth_form_input" type="text" name="login" placeholder="Введите ваш логин" required> <br>
                <input class="auth_form_input" type="password" name="password" placeholder="Введите ваш пароль" required> <br>
                <input class="auth_form_submit" type="submit" name="submit" value="войти">
            </form>
            <span>Перейти на страницу <a href="../engine/registration.php">регистрации</a> </span>
            <br> <br>
            <hr>
            <br> <br>
            <p>Войти как админ:</p>
            <p>пароль: 12345</p>
            <p>логин: admin</p>
            <br> <br>
            <p>Войти как пользователь:</p>
            <p>пароль: 12345</p>
            <p>логин: user</p>
        </div>

        <div class="footer">
            <p> <a class="header_link" href="">О нас</a> </p>
            <p> <a class="header_link" href="">Контакты</a> </p>
            <p> <a class="header_link" href="">Все права защищены!</a> </p>
        </div>

    </div>
</body>
</html>