<?php
include "config.php";

$sql = "select * from shop";
//echo $sql;
$res = mysqli_query($connect,$sql);

while($data = mysqli_fetch_assoc($res)){
    echo "Автомобиль ".$data['title']." стоит ".$data['price']."<br>";
}

