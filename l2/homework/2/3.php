<!--Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.           Обязательно использовать оператор return. -->


 function sum($a,$b) {
 return $a+$b;
 }
 function dif($a,$b) {
 return $a-$b;
 }
 function mult($a,$b) {
 return $a*$b;
 }
 function division($a,$b) {
 if($b!=0){
 return $a/b;
 }
 }
 
<!--Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch)-->


function mathOperation($a, $b, $operation) {
    switch ($operation) {
        case "+":
            return sum($a,$b);
        case "-":
            return dif($a,$b);
        case "/":
            return division($a,$b);
        case "*":
            return mult($a,$b);
        default:
            echo "<h3>error</h3>";
    }
}


//5 задание выполнено в прошлом ДЗ