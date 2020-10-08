<?php
function f($n){
    echo $n."<br>";
    if($n==0){
        return;
    }
    f($n-1);
}

f(20);