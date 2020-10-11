<?php
switch ($_GET['url']){
    case "https://yandex.ru":
        $isQueryEmpty = (empty($_GET['query'])) ? true : false;
        if(!$isQueryEmpty){
            $url = "https://yandex.ru/search/?text=".$_GET['query'];
            header("Location: $url");
        }
        else{
            header("Location: ".$_GET['url']);
        }
        break;
    default:
        header("Location: ".$_GET['url']);
}