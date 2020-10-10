<?php
$table = "<table border='1' width='600'>";

$tr = 1;//счетчик строк

while($tr <= 100){
    if($tr == 6){
        break;
    }
    $table .= "<tr>";
    $td = 1;//счетчик столбцов
    while($td <= 10){
        $temp = $tr * $td;
        if($temp % 2 == 0){
            $style="color:red;";
        }
        else{
            $style="color:blue;";
        }
        $table .= "<td style='$style'>$temp</td>";
        $td++;
    }
    $table .= "</tr>";
    $tr++;
}
$table .= "</table>";
echo $table;