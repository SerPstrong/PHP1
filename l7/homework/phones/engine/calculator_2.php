<?php 
    session_start();
    include_once 'functions.php';

    if (isset($_POST['calculator_2'])) {
        $value_1 = trim( strip_tags ( $_POST['value_1']));
        $value_2 = trim( strip_tags( $_POST['value_2']));
        
        if ($value_1 == 0 && $value_2 == 0) {
            $error = "Вы ввели два значения \"0\".";
        } else {

            if (isset($_POST['submit_plus'])) {
                $result = $value_1 + $value_2;
            } elseif (isset($_POST['submit_minus'])) {
                $result = $value_1 - $value_2;
            } elseif (isset($_POST['submit_division'])) {
            
                if ($value_1 == 0 || $value_2 == 0) {
                    $error = "Делить на 0 нельзя.";
                } else {
                    $result = $value_1 / $value_2;
                }

            } elseif (isset($_POST['submit_multi'])) {
                
                if ($value_1 == 0 || $value_2 == 0) {
                    $error = "Умножать на 0 нельзя.";
                } else {
                    $result = $value_1 * $value_2;  
                }
            }
        }
    }

    include_once '../view/v_calculator_2.php';
?>