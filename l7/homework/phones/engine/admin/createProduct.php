<?php
    session_start();

    if (isset($_SESSION['userName'])) {
        include_once '../functions.php';
        $userRole = getUserRole($_SESSION['userName']);
    
        if ($userRole[0]['role'] === 'admin') {

            if (isset($_POST['submit'])) {
                $pathSmall = "../../public/images/small_images_product/"; 
                $pathBig = "../../public/images/big_images_product/"; 
        
                // сохраняем товар в БД
                saveProduct($_POST, $_FILES); 
        
                // создаем уменьшеную версию изображения
                resize($_FILES['image'], $pathSmall, 250, 250);
        
                // создаем большую версию изображения для карточки товара
                resize($_FILES['image'], $pathBig, 500, 500);
            }

            include_once '../view/admin/v_createProduct.php';

        } else {
            header("location: ../../index.php");
        }

    } else {
        header("location: ../../index.php");
    }
?>