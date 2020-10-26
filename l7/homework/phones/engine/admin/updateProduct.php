<?php
    session_start();

    if (isset($_SESSION['userName'])) {
        include_once '../functions.php';
        
        $userRole = getUserRole($_SESSION['userName']);
    
        if ($userRole[0]['role'] === 'admin') {

            if (isset($_POST['deleteImage'])) {
                deleteImageProduct($_POST['id']);
            }
        
            if (isset($_POST['inputSaveImage'])) {
                $pathSmall = "../public/images/small_images_product/"; 
                $pathBig = "../public/images/big_images_product/"; 
        
                // сохраняем изображение в БД
                saveImage($_POST['id'], $_FILES); 
        
                // создаем уменьшеную версию изображения
                resize($_FILES['saveImage'], $pathSmall, 250, 250);
        
                // создаем большую версию изображения для карточки товара
                resize($_FILES['saveImage'], $pathBig, 500, 500);
            }
        
            if (isset($_POST['updateInfo'])) {
                updateInfoProduct($_POST);
            }
            
            $allProduct = getAllProduct();
            include_once '../../view/admin/v_updateProduct.php';

        } else {
            header("location: ../../index.php");
        }

    } else {
        header("location: ../../index.php");
    }
?>

