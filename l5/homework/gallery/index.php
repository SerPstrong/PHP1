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
$result = mysqli_query($link, "SELECT * FROM employee");

//  if (mysqli_num_rows($result) > 0) {
//      while($row = mysqli_fetch_assoc($result)) {
//          $arr[] = $row;
//      }
//  } else {
//      echo "0 results";
//  }
//
//  for ($i = 0; $i < count($arr); $i++){
//      echo $arr[$i];
//  }

$epms = array();
while ($row = mysqli_fetch_assoc($result))
    $epms[] = $row;
?>

<?php
print_r($epms);
?>

<?php
foreach ($epms as $value) {
    echo $value;
}
?>


<!--  --><?php //for ($i=0; $i < count($emps); $i++) : ?>
<!--      <div>--><? //=$emps[$i] ?><!--</div>-->
<!--  --><?php //endfor; ?>


</body>
</html>
