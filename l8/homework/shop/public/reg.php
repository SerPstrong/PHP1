<?php include_once "../controllers/User.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Регистрация на сайте</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
<div id="container">
    <? include "../templates/menu.php"; ?>
    <div class="content">
        <h1>Регистрация на сайте</h1>
        <hr>
        <?
        if (isset($_SESSION["login"]) && isset($_SESSION["pass"])) {
            echo "Вы уже вошли";
        } else {
            echo $message ? $message : ""; ?>
            <form method="post">
                <p>Имя: <input type="text" name="name" maxlength="30" placeholder="Введите Имя" autofocus required></p>
                <p>Логин: <input type="text" name="login" maxlength="30" placeholder="Введите Логин" required></p>
                <p>Email: <input type="email" name="email" maxlength="30" placeholder="Введите Email" required></p>
                <p>Пароль: <input type="password" minlength="2" name="pass" placeholder="Введите Пароль" required></p>
                <input type="submit" name="submit" value="Зарегистрироваться">
            </form>
        <? } ?>
    </div>
</div>
<? include "../templates/footer.php"; ?>
</body>
</html>