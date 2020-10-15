<?php
include_once 'models/config.php';
include_once 'models/photo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Работа с файлами</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<style>
    .images_style {
        width: 200px;
    }
</style>

<header>
    <h1>ГАЛЕРЕЯ ФОТО</h1>
</header>


<div class="images">
    <?php for ($i = 0; $i < count($images); $i++) : ?>
        <a href="image.php?photo=<?= $images[$i] ?>">
            <img src="<?= PHOTO_SMALL . $images[$i] ?>">
        </a>
    <?php endfor; ?>
</div>

<div class="add_foto">
    <form action="" method="POST" enctype="multipart/form-data">
        <span> <b>Добавить файл: </b> </span>
        <input type="file" name="userfile">
        <button type="submit" name="send">ЗАГРУЗИТЬ</button>
        <br>
        <span><?= $message ?></span>
    </form>
</div>

<?php
//$select = "SELECT * FROM employee";
//$res = mysqli_query($link, $select);
//
//while ($data = mysqli_fetch_assoc($res)) {
////    echo "qqqqqqqqq" . " " . $data['first_name'] . " " . $data['middle_name'] . " " . $data['last_name'] . "<br>";
//    echo "qqqqqqqqq" . " " . $data['id_employee'] . "<br>";
//}
//?>

<?php
$select2 = "SELECT * FROM img";
$res2 = mysqli_query($link2, $select2);
//
//while ($data2 = mysqli_fetch_assoc($res2)) {
//    echo "wwwwww" . "<img src=" $PHOTO_SMALL . $images[$i] ">" .  $data2['link_img'] . "<br>";
//}
//?>

<div class="images2">
    <?php for ($i = 0; count($data2 = mysqli_fetch_assoc($res2)); $i++) : ?>
        <a href="image.php?photo=<?= $data2[$i] ?>">
            <img class="images_style" src="<?= $data2['link_img'] ?>">
        </a>
    <?php endfor; ?>
</div>


</body>
</html>
