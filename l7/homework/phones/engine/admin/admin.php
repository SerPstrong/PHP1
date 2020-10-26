<?php
    session_start();

    if (isset($_SESSION['userName'])) {
        include_once '../functions.php';
        
        $userRole = getUserRole($_SESSION['userName']);
    
        if ($userRole[0]['role'] === 'admin') {
            include_once '../../view/admin/v_createProduct.php';
        } else {
            header("location: ../../index.php");
        }

    } else {
        header("location: ../../index.php");
    }
?>