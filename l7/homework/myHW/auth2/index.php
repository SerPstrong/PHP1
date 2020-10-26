<?php
session_start();
if($_GET['success'] && $_SESSION['login']):?>
<h1>Ваша учетная запись подтверждена</h1>
<?php

endif;
?>
<form action="server.php" method="post">
    <p>Ваш логин</p>
    <input type="text" name="login" value="<?= $_SESSION['login']?>">
    <p>Ваш пароль</p>
    <input type="text" name="pass" value="<?= $_SESSION['pass']?>"><br><br>
    <input type="submit" value="Войти">
</form>