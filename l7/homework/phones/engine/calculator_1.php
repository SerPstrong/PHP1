<?php
    session_start();
    include_once 'functions.php';
    
    if (isset($_POST['submit'])) {
        $value_1 = trim( strip_tags( $_POST['value_1']));
        $value_2 = trim( strip_tags( $_POST['value_2']));
        $option = trim( strip_tags( $_POST['calculator_1']));
        $error = '';

        if ($value_1 == 0 && $value_2 == 0) {
            $error = "Вы ввели два значения \"0\".";
        } else {

            if ($option === 'minus') {
                $result = $value_1 - $value_2;
            } elseif ($option === 'plus') {
                $result = $value_1 + $value_2;
            } elseif ($option === 'division') {

                if ($value_1 == 0 || $value_2 == 0) {
                    $error = "Делить на 0 нельзя.";
                } else {
                    $result = $value_1 / $value_2;
                }

            } elseif ($option === "multi") {

                if ($value_1 == 0 || $value_2 == 0) {
                    $error = "Умножать на 0 нельзя.";
                } else {
                    $result = $value_1 * $value_2;  
                }
            }
        }
    }

    include_once '../view/v_calculator_1.php';
?>