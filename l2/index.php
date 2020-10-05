<?php

echo '1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
значения. Затем написать скрипт, который работает по следующему принципу:
a. если $a и $b положительные, вывести их разность;
b. если $а и $b отрицательные, вывести их произведение;
c. если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.';

$a = rand(-15, 15);
$b = rand(-15, 15);

echo "<br>";
echo "a = $a , b =  $b Результат:";

if ($a >= 0 && $b >= 0) {
    echo $a > $b ? $a - $b : $b - $a;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} elseif ($a < 0 && $b >= 0 || $a >= 0 && $b < 0) {
    echo $a + $b;
}
echo "<br>";

echo "<br>";
echo '2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
switch организовать вывод чисел от $a до 15.';
echo "<br>";

$a = rand(0, 15);

switch ($a) {
    case 0:
        echo $a;
        $a++;
        echo "<br>";
    case 1:
        echo $a;
        $a++;
        echo "<br>";
    case 2:
        echo $a;
        $a++;
        echo "<br>";
    case 3:
        echo $a;
        $a++;
        echo "<br>";
    case 4:
        echo $a;
        $a++;
        echo "<br>";
    case 5:
        echo $a;
        $a++;
        echo "<br>";
    case 6:
        echo $a;
        $a++;
        echo "<br>";
    case 7:
        echo $a;
        $a++;
        echo "<br>";
    case 8:
        echo $a;
        $a++;
        echo "<br>";
    case 9:
        echo $a;
        $a++;
        echo "<br>";
    case 10:
        echo $a;
        $a++;
        echo "<br>";
    case 11:
        echo $a;
        $a++;
        echo "<br>";
    case 12:
        echo $a;
        $a++;
        echo "<br>";
    case 13:
        echo $a;
        $a++;
        echo "<br>";
    case 14:
        echo $a;
        $a++;
        echo "<br>";
    case 15:
        echo $a;
        break;
}
echo "<br>";

echo "<br>";
echo '3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return. ';
echo "<br>";

function func_difference($par1, $par2)
{
    return $par1 - $par2;
}

function func_composition($par1, $par2)
{
    return $par1 * $par2;
}

function func_sum($par1, $par2)
{
    return $par1 + $par2;
}

function func_private($par1, $par2)
{
    return $par1 / $par2;
}

echo "<br>";
echo '4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где
$arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от
переданного значения операции выполнить одну из арифметических операций (использовать
функции из пункта 3) и вернуть полученное значение (использовать switch).';
echo "<br>";

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case $operation == "-";
            return func_difference($arg1, $arg2);
        case $operation == "*";
            return func_composition($arg1, $arg2);
        case $operation == "+";
            return func_sum($arg1, $arg2);
        case $operation == "/";
            return func_private($arg1, $arg2);
    }
};

$arrOperation = array("-", "*", "+", "/");
$val = $arrOperation[rand(0, count($arrOperation))];

echo $val;
echo "<br>";

echo mathOperation(2, 5, $val);

echo "<br>";
echo "5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
текущий год в подвале при помощи встроенных функций PHP.";
echo "<br>";

echo "<br>";
echo '6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function
power($val, $pow), где $val – заданное число, $pow – степень.';
echo "<br>";



echo "<br>";
echo '7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с
правильными склонениями, например:
 22 часа 15 минут
 21 час 43 минуты';
echo "<br>";