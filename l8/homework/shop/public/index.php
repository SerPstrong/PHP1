<?php include_once "../controllers/Product.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<? include "../templates/menu.php"; ?>
<main>
    <div class='goodsTable'>
        <?php
        if (isset($goods))
            foreach ($goods as $good) : ?>
                <div class='goodsWrap'>
                    <?php if ($good['discount'] > 0) {
                        echo('<div class="sticker"><img class="stickerImg" src="css/star.png"><span class="stickerTextFit">' . $good['discount'] . '%</span></div>');
                    } elseif ($good['stickerFit'] == 1) {
                        echo('<div class="sticker"><img class="stickerImg" src="css/star.png"><span class="stickerTextFit">Fit!</span></div>');
                    } elseif ($good['stickerHit'] == 1) {
                        echo('<div class="sticker"><img class="stickerImg" src="css/star.png"><span class="stickerTextHit">Hit!</span></div>');
                    }; ?>
                    <div class="wrapGoodImg">
                        <a href="item.php?photo=<?= $good["bigPhoto"] ?>&id=<?= $good["id"] ?>"><img class='goodImg'
                                                                                                     src="<?= $good["miniPhoto"] ?>"></a>
                    </div>
                    <div class="wrapGoodInfo">
                        <div class='goodsNameFull'><?= $good['nameFull']; ?></div>
                        <div class='goodsPrice'><?= $good['price'] ?><b>&#8381;</b></div>
                        <div class='goodsParam'><span><b>Состав: </b></span><?= $good['param'] ?></div>
                    </div>
                    <div class="btnWrap">
                        <input type='button' class='addToBasket btn' value='Дoбавить в корзину'
                               onclick="addToBasket(<?= $good["id"] ?>)" data-id='<?= $good["id"] ?>'>
                        <input type='button' class='deleteToBasket btn' value='Удалить из корзины'
                               onclick="deleteToBasket(<?= $good["id"] ?>)" data-id='<?= $good["id"] ?>'>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</main>
<? include "../templates/footer.php"; ?>
</body>
</html>