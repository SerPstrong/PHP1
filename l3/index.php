<?php
//1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка .
$i = 1;

//while ($i <= 100) {
//    echo $i . "</br>";
//    $i++;
//}

while ($i <= 100) {
    if ($i % 3 == 0) {
        echo $i . "</br>";
        $i++;
    } else {
        $i++;
        continue;

    }

}

echo "<br>";

//2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
//0 – ноль .
//1 – нечетное число .
//2 – четное число .
//3 – нечетное число .
//…
//10 – четное число .
$i = 0;

do {
    if ($i == 0) {
        echo $i . " - ноль" . "<br>";
    }
    if ($i % 2 == 0 && $i != 0) {
        echo $i . " - четное число" . "<br>";
    } elseif ($i % 2 != 0 && $i != 0) {
        echo $i . " - нечетное число" . "<br>";
    }
    $i++;
} while ($i <= 10);

echo "<br>";

//3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы
//с названиями городов из соответствующей области . Вывести в цикле значения массива, чтобы результат был таким:
//Московская область:
//Москва, Зеленоград, Клин
//Ленинградская область:
//Санкт - Петербург, Всеволожск, Павловск, Кронштадт
//Рязанская область …(названия городов можно найти на maps . yandex . ru)
$regions = [
    'Московская' => 'Сергиев Посад, Волоколамск, Озеры',
    'Свердловская' => 'Екатеринбург, Нижний Тагил, Верхняя Салда'
];

foreach ($regions as $key => $value) {
    echo("$key область:  $value <br/>");
}

echo "<br>";

//4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
//буквосочетания(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
//Написать функцию транслитерации строк.
$abc = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'ю' => 'yu', 'я' => 'ya'
];

$result = '';

function abc_func($x)
{
    global $abc;
    global $result;
    global $key;
    foreach ($abc as $key => $answer) {
        if ($x == $key) {
            $result = $answer;
            break;
        }
    }
    if ($x != $key) {
        return "Нет такой буквы";
    } else {
        return "Буква '$x' в переводе '$result'";
    }
}

echo abc_func('я');

echo "<br>";
echo "<br>";

//5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
function func_change($x)
{
    $aWords = explode(' ', $x);
    foreach ($aWords as $str => $y){
        $res .= $str."_".$y;
    }
    return $res;
}

echo func_change("Мороз и солнце, день чудесный");


echo "<br>";

//6. В имеющемся шаблоне сайта заменить статичное меню(ul - li) на генерируемое через PHP . Необходимо представить пункты
//меню как элементы массива и вывести их циклом . Подумать, как можно реализовать меню с вложенными подменю ? Попробовать его реализовать .

echo "<br>";

//7. * Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла . То есть выглядеть должно так:
//for (…) { // здесь пусто}

echo "<br>";

//8. * Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К» .

echo "<br>";

//9. * Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию
//и замену пробелов на подчеркивания(аналогичная задача решается при конструировании url - адресов на основе названия статьи в блогах).