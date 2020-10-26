<?php
    session_start();
    include_once 'functions.php';

    if (isset($_SESSION['product_basket'])) {
        $productCount = $_SESSION['product_basket'];
        $productInfo = [];
        foreach ($productCount as $key => $val) {
            $productInfo[$key] = getProduct($key);
        }
    }


    include_once '../view/v_basket.php';
?>