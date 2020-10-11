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

<?php
$images = scandir("images");
for ($i = 2; $i < count($images); $i++):?>
    <a href="server.php?path=images/<?= $images[$i] ?>" target="_blank"><img width="200px" src="images/<?= $images[$i] ?>"></a>
<?php
endfor;
?>

</body>
</html>