<?php include_once "../controllers/Product.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Фотогаллерея</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
<? include "../templates/menu.php"; ?>
<main>
    <div class="promoHeader">Акции</div>
    <div id="container">
        <div class="content">
            <div class="promoWrap">
                <i class="fas fa-truck fa-7x"></i>
                <div class="promoText">
                    <span>Самовывоз</span><br>
                    <span>Скидка 10% если забираете заказ самостоятельно в филиале компании</span>
                </div>
            </div>
            <div class="promoWrap">
                <i class="far fa-clock fa-9x"></i>
                <div class="promoText">
                    <span>Акция "Счастливый час!</span><br>
                    <span>Скидка 7% при заказе от 0ч 00м до 8ч 00м</span>
                </div>
            </div>
            <div class="promoWrap">
                <i class="far fa-smile fa-9x"></i>
                <div class="promoText">
                    <span>Скидка дня!</span><br>
                    <span>Скидки до 10% на отдельные роллы и суши. Следите за акциями компании. Новые скидки каждый день!</span>
                </div>
            </div>

        </div>
    </div>
</main>
<? include "../templates/footer.php"; ?>
</body>
</html>
