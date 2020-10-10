<?php
$page = file_get_contents("https://www.bbc.com/news");
file_put_contents("news.php",$page);
header("Location: news.php");