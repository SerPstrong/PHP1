<?php
$a = 5;
$b = '05';
var_dump($a == $b);                       // Почему true?  Сравнение не строгое, поэтому идет сравнение как строк.
var_dump((int)'012345');                           // Почему 12345? Функция int(), преобразует к числу.
var_dump((float)123.0 === (int)123.0);    // Почему false? Строгое сравнение, по значению и по типу.
var_dump((int)0 === (int)'hello, world'); // Почему true?  Строка преобразована в число.

echo "<br>";

echo "<h3>Дополнительное задание</h1>";
echo "<p>Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные использовать нельзя</p>";
$a = 10;
$b = 20;
echo "Текущие значения: \$a=$a, \$b=$b<br>";
$a = $a + $b;//30
$b = $a - $b;//10
$a = $a - $b;//20
echo 'Новые значения: $a=' . $a . ', $b=' . $b;

