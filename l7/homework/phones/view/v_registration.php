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

        <div class="registration_block">
            <h2 class="heading_h2">Регистрация</h2>
            
            <? if ($_SESSION['userName'] === 1) : ?>
                <h3>Такой email уже существует</h3> <br>
            <? elseif ($_SESSION['userName'] === 2) : ?>
                <h3>Такой login уже существует. Придумайте пожалуйста другой</h3> <br>
            <? elseif ($_SESSION['userName'] === 3) : ?>
                <h3>Пароли не сходяться</h3> <br>
            <? endif ?>

            <form action="../engine/registration.php" method="POST">
                <input class="registration_form_input" type="text" name="login" placeholder="Придумайте логин" required> <br>
                <input class="registration_form_input" type="password" name="password" placeholder="Придумайте пароль" required> <br>
                <input class="registration_form_input" type="password" name="confirm" placeholder="Повторите пароль" required> <br>
                <input class="registration_form_input" type="email" name="email" placeholder="Напишите ваш email" required> <br>
                <b><p class="registration_form_text">Ваша дата рождения:</p></b>
                <input class="registration_form_input" type="date" name="birthday" required> <br>
                <b><p class="registration_form_text">Ваша пол:</p></b>
                <label>
                    <input type="radio" name="sex" value="мужской" checked><span> мужской</span>
                </label>
                <label>
                    <input type="radio" name="sex" value="женский"><span> женский</span>
                </label><br>
                <input class="registration_form_inpu_submit" type="submit" name="submit" value="зарегестрироваться">
            </form>
            <span>Перейти на страницу <a href="../engine/auth.php">авторизации</a> </span>
        </div>

        <div class="footer">
            <p> <a class="header_link" href="">О нас</a> </p>
            <p> <a class="header_link" href="">Контакты</a> </p>
            <p> <a class="header_link" href="">Все права защищены!</a> </p>
        </div>

    </div>
</body>
</html>