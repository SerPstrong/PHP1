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

        <div class="calculator_2">
            <h2 class="heading_h2">Калькулятор №2</h2>
            <form action="../engine/calculator_2.php" method="POST">
                <input type="hidden" name="calculator_2">
                <input type="number" name="value_1" value="<?= $value_1 ?>" required>
                    <input class="calculator_2_input" type="submit" name="submit_plus" value="+">
                    <input class="calculator_2_input" type="submit" name="submit_minus" value="-">
                    <input class="calculator_2_input" type="submit" name="submit_division" value="/">
                    <input class="calculator_2_input" type="submit" name="submit_multi" value="*">
                <input type="number" name="value_2" value="<?= $value_2 ?>" required>
                <span>=</span>
                <input type="number" name="answer" value="<?= $result ?>" disabled> <br> <br>
                <?= $error ?>
            </form>
        </div>

        <div class="footer">
            <p> <a class="header_link" href="">О нас</a> </p>
            <p> <a class="header_link" href="">Контакты</a> </p>
            <p> <a class="header_link" href="">Все права защищены!</a> </p>
        </div>

    </div>
</body>
</html>