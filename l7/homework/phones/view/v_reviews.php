<? 
    include_once '../engine/functions.php';
    $reviews = getAllReview();
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

        <div class="review_block">
            <div class="review_block_form">
                <h2 class="heading_h2">Оставить отзыв:</h2>
                <form action="../engine/reviews.php" method="POST">
                    <input class="review_input" type="text" name="name" placeholder="Ваше имя" required> <br> 
                    <input class="review_input" type="email" name="email" placeholder="Ваш email" required> <br> 
                    <textarea class="review_input" name="review" cols="50" rows="5" placeholder="напишите ваш отзыв" required></textarea> <br>
                    <input class="review_form_input" type="submit" name="submit" value="Отправить">
                </form>
            </div>
            <hr class="review_hr">
            <div class="review_user_block_all">
                <h2 class="heading_h2">Отзывы о нас:</h2>
                <? foreach ($reviews as $review) : ?>
                    <div class="review_user_block_one">
                        <div class="review_user_review_text">
                            <p><?= $review['review'] ?></p>
                        </div>
                        <div class="review_user_review_info">
                            <p><b>Имя: </b><?= $review['name'] ?></p>
                            <p><b>Email: </b><?= $review['email'] ?></p>
                            <p><b>Дата: </b><?= $review['date'] ?></p>
                        </div>
                    </div>
                <? endforeach ?>
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