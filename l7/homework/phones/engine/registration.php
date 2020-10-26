<?php
    session_start();
    include_once 'functions.php';

    if (isset($_POST['submit'])) {
        $login = trim( strip_tags ($_POST['login']));
        $password = trim( strip_tags ($_POST['password']));
        $confirm = trim( strip_tags ($_POST['confirm']));
        $email = trim( strip_tags ($_POST['email']));

        if (issetUser('login', $login) === false) { // если false, значит такого логина нет в БД

            if (issetUser('email', $email) === false) { // если false, значит такого email нет в БД

                if ($password === $confirm) {
                    saveRegistrationInfoUser($_POST);
                    $_SESSION['userName'] = $login;
                    header("location: ../index.php");
                } else {
                    $_SESSION['userName'] = 3;
                }
                
            } else {
                $_SESSION['userName'] = 2;
            }

        } else {
            $_SESSION['userName'] = 1;
        }

        // перенаправляем на личный кабинет и пишем приветствие
    }

    include_once '../view/v_registration.php';
?>