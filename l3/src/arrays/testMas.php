<?php

$cars = ["Audi","BMW","VW"];

//$size = count($cars);

//echo $cars[count($cars) - 1];

//var_dump($cars);//array
//echo "<pre>";
//print_r($cars);
//echo "</pre>";
?>
<ul>
<?php
for($i=0;$i<count($cars);$i++):?>
    <li><?= $cars[$i]?></li>
<?php
    endfor;
        ?>
</ul>


<?php

foreach($cars as $index => $marka){
    echo $index ."-".$marka."<br>";
}