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
$select = "SELECT * FROM employee";
$res = mysqli_query($link, $select);

while ($data = mysqli_fetch_assoc($res)) {
    echo "qqqqqqqqq" . $data['first_name'] . "<br>";
}
?>

<?php
$select2 = "SELECT * FROM photo";
$res2 = mysqli_query($link, $select2);

while ($data2 = mysqli_fetch_assoc($res2)) {
    echo "qqqqqqqqq" . $data2['link_img'] . "<br>";
}
?>


</body>
</html>
