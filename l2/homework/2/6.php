<!-- *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function           power($val, $pow), где $val – заданное число, $pow – степень. -->


<?php
function power($val, $pow) {
        if ($pow > 1) { 
            return $val * power($val, $pow - 1);
        } else if($pow==0) {
            return $val=1;
        } else {
            return $val;
        }
     }
    $val = rand(0,10);
    $pow = rand(0,10);

  echo $val." ".$pow."<p> Ответ: ".power($val, $pow)."</p>";


?>