<?php
    session_start();

    if (isset($_SESSION['userName'])) {
        include_once 'functions.php';

        $userRole = getUserRole($_SESSION['userName']);
        $infoUser = getUser('login', $_SESSION['userName']);

        if ($userRole[0]['role'] === 'admin') {
            header("location: admin/admin.php");
        } else {
            include_once '../view/v_cabinet.php';
        }

    } else {
        header("location: auth.php");
    }
?>