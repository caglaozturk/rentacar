<?php

function __autoload($className){
    $classPath = "model/" . $className . ".php";
    if(is_readable)    require_once $classPath;
    else                echo $className . " Sınıfı Bulunamadı";
}

function redirect($url){
    header("Location: $url");
    exit;
}