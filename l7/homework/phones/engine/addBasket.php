<?php 
    session_start();

    $id = $_GET['id'];
    $productBasket = [];

    if (isset($_SESSION['product_basket'])) {
        $productBasket = $_SESSION['product_basket'];
    }

    if (array_key_exists($id, $productBasket)) {
        $productBasket[$id] = $productBasket[$id] + 1;
    } else {
        $productBasket[$id] = 1;
    }

    $_SESSION['product_basket'] = $productBasket;
    $backLink = $_SERVER["HTTP_REFERER"];
    header("location: $backLink");
?>