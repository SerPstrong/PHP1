<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<style>
    .container {
        max-width: 960px;
        margin: 0 auto;
    }

    .image__block {
        display: flex;
        justify-content: space-between;
        margin: 30px 0 0 0;
    }

    .image__block_a {
        display: inline-block;
        max-width: 30%;
    }

    .image__block_a img {
        display: inline-block;
        max-width: 100%;
    }
</style>

<div class="container">
    <?php
    $images = scandir("images");
    $i = 2;
    for ($i; $i < count($images); $i++):?>

        <div class="image__block">
            <?php
            for ($k = 0; $k < 3; $k++, $i++):?>
                <a class="image__block_a" href="server.php?path=images/<?= $images[$i] ?>" target="_blank"><img
                            src="images/<?= $images[$i] ?>"></a>
            <?php
            endfor;
            ?>
        </div>
    <?php
    endfor;
    ?>
</div>
</body>
</html>