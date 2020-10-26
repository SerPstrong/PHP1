<?php
    session_start();
    include_once 'functions.php';
    include_once '../config/config.php';

    $login = trim( strip_tags ($_POST['login']));
    $password = trim( strip_tags ($_POST['password']));
    $password = md5($password) . SALT;

    if (isset($_SESSION['userName']) && $_SESSION['userName'] === $login) {
        header("location: cabinet.php");
    } else {

        if (isset($_POST['submit'])) {

            if (issetUser('login', $login) && issetUser('password', $password)) {
                $_SESSION['userName'] = $login;
                header("location: cabinet.php");
            } else {
                $_SESSION['userName'] = 0;
            }
    
        }
        include_once '../view/v_auth.php';
    }
?>