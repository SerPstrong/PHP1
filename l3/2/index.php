<?//$str = iconv("","UTF-8",$str)?>
 
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework № 3</title>
</head>
<body>

<h1>Домашняя работа № 3</h1>

<ol>
    <li>С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.<br><br>

        <?php

        $a = 0;

        while($a <= 100) {
            if($a % 3 !=0) {
                $a++;
                continue;
            }
            echo $a . ' ';
            $a++;
        }

        ?>

    </li>
    <li>С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:<br>
        0 – это ноль.<br>
        1 – нечетное число.<br>
        2 – четное число.<br>
        3 – нечетное число.<br>
        …<br>
        10 – четное число.<br><br>

        <?php

        $b = 0;
        do {
            if($b == 0) {
                echo $b . ' – это ноль.<br>';
                $b++;
            } elseif ($b % 2 == 0) {
                echo $b . ' – четное число.<br>';
                $b++;
            } else {
                echo $b . ' – нечетное число.<br>';
                $b++;
            }
        } while ($b < 11);

        ?>

    </li>
    <li>Объявить массив, в котором в качестве ключей будут использоваться названия областей,
        а в качестве значений – массивы с названиями городов из соответствующей области.
        Вывести в цикле значения массива, чтобы результат был таким:<br>
        Московская область:<br>
        Москва, Зеленоград, Клин<br>
        Ленинградская область:<br>
        Санкт-Петербург, Всеволожск, Павловск, Кронштадт<br>
        Рязанская область … (названия городов можно найти на maps.yandex.ru)<br><br>

        <?php

        $regions = [
            'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
            'Нижегородская область' => ['Нижний Новгород', 'Дзержинск', 'Кстово'],
            'Ярославская область' => ['Ярославль', 'Рыбинск', 'Мышкин']
        ];

        foreach ($regions as $obl => $masTown) {
            echo $obl . ':<br>';
            echo implode(', ', $masTown) . '<br>';
        }

        ?>

    </li>
    <li>Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
        буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
        Написать функцию транслитерации строк.<br><br>

        <?php
        function transLiter ($str) {
            $alfavite = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zh',
                'з' => 'z', 'и' => 'i', 'й' => 'iy', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p',
                'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
                'ш' => 'sh', 'щ' => 'shch', 'ъ' => '"', 'ы' => 'y', 'ь' => '\'', 'э' => 'ie', 'ю' => 'yu', 'я' => 'ya'];

            $str = mb_strtolower($str);//привожу все к нижнему регистру
            $res = strtr($str, $alfavite);

            return $res;
        }


        echo transLiter('ПриВет');

        ?>

    </li>
    <li>Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.<br><br>

        <?php

        function replace ($str) {
            return str_replace(' ', '_', $str);
        }

        echo replace('я люблю php!');
        ?>

    </li>
    <li>В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить
        пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю?
        Попробовать его реализовать.<br><br>

        <?php

        $menu = [
            'Первый пункт' => ['первый подпункт первого пункта'=>['элемент 1','элемент '], 'второй подпункт первого пункта'],
            'Второй пункт' => ['первый подпункт второго пункта', 'второй подпункт второго пункта'],
            'Третий пункт' => ['первый подпункт третьего пункта', 'второй подпункт третьего пункта'],
        ];
        echo '<ul>';
        foreach ($menu as $key => $val) { ?>
            <li><?php echo $key; ?>  

                <ul>
                    <?php

                    foreach ($val as $item) { ?>      
                        <li><?php echo $item; ?></li>
                    <?php }

                    ?>
                </ul>

            </li>
        <?php }
        echo '</ul>';

        ?>

    </li>
    <li>*Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так:<br>
        for (…){ // здесь пусто}<br><br>

        <?php

        for($i = 0; $i < 10; print $i++) {}

        ?>

    </li>
    <li>*Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».<br><br>

        <?php

        //Оптимальный вариант

		//iconv("","utf-8",$str);
			
        foreach ($regions as $obl => $masTown) {
            echo $obl . ':<br>';
            foreach ($masTown as $town) {  
				//$town = iconv("","UTF-8",$town);
                if (mb_substr($town, 0, 1) == 'К') {
                    echo $town . ' ';
                }
            }
            echo '<br>';
        }
        
       

        ?>

    </li>
    <li>*Объединить две ранее написанные функции в одну, которая получает строку на русском языке,
        производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании
        url-адресов на основе названия статьи в блогах).<br><br>

        <?php

        function transLiterReplace ($str) {

            return replace(transLiter($str));//аргументом функции replace выступает значение функции transLiter

        }

        echo transLiterReplace('ПриВет Мир!');

        ?>

    </li>
</ol>
</body>
</html>