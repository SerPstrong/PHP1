<?php
session_start();
$salt = "sldkfjslfj2302s,.ps";
$connect = mysqli_connect("localhost","serpstrong","111","auth");
$login = $_POST['login'] ? strip_tags($_POST['login']) : "";
$pass = $_POST['pass'] ? strip_tags($_POST['pass']) : "";

$pass = $salt.md5($pass).strrev($salt);

$sql = "select id from users where login='$login' and pass='$pass'";
$res = mysqli_query($connect,$sql) or die("Error: ".mysqli_error($connect));

if(mysqli_num_rows($res) == 1){
    $_SESSION["login"] = $login;
    $_SESSION["pass"] = $pass;
    header("Location: index.php?success=true");
}
else{
    header("Location: index.php");
}