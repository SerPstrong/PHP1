<?php 
    session_start();
    $id = $_GET['id'];
    $act = $_GET['act'];

    if ($act == 'plus') {
        $_SESSION['product_basket'][$id]++;
    } elseif ($act == 'minus') {

        if ($_SESSION['product_basket'][$id] > 1) {
            $_SESSION['product_basket'][$id]--;
        }

    } elseif ($act == 'delete') {
        unset($_SESSION['product_basket'][$id]);
    }

    header("location: basket.php");
?>