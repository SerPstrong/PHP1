<h1>Welcome</h1>
<?php
//    ini_set('display_errors','Off');
//    echo "<h1>Welcome</h1>";

?>

<?php
//    $str = "<h2>Сегодня ".date('d.m.Y')."</h2>";
?>
<h2>Сегодня <?= date('d.m.Y')?></h2>


<?php
    $day = date('w');//2
    echo "Переменная \$day = $day";
    echo "<hr>Проект \"САОС\" - самый успешный проект компании";
    
    $x = 25.7;
    var_dump($x);
?>