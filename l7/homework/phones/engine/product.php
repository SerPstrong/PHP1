<?php 
    include_once 'functions.php';

    $productID = $_GET['id'];
    $product = getProduct($productID);

    include_once '../view/v_product.php';
?>