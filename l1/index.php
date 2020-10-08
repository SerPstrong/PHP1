<?php
$a = 5;
$b = '05';
var_dump($a == $b);                       // Почему true?  Сравнение не строгое, поэтому идет сравнение как строк.
var_dump((int)'012345');                           // Почему 12345? Функция int(), преобразует к числу.
var_dump((float)123.0 === (int)123.0);    // Почему false? Строгое сравнение, по значению и по типу.
var_dump((int)0 === (int)'hello, world'); // Почему true?  Строка преобразована в число.

echo "<br>";

$a = 1;
$b = 2;

$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;

echo "a = " . $a . "b = " . $b;
