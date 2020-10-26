<?php
    session_start();

    if (isset($_SESSION['userName'])) {
        include_once '../functions.php';
            
        $userRole = getUserRole($_SESSION['userName']);
        
        if ($userRole[0]['role'] === 'admin') {
            
            if (isset($_POST['delete'])) {
                $id = $_POST['id'];
                deleteProduct($id);
            }
        
            $allProduct = getAllProduct();
            include_once '../../view/admin/v_deleteProduct.php';

        } else {
            header("location: ../../index.php");
        }
    
    } else {
        header("location: ../../index.php");
    }
?>