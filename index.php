<?php

session_start();
require "config/init.php";
$dbhandle = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$username", "$password");
$dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbhandle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


$uri = $_SERVER['REQUEST_URI'];
echo $uri;


if($uri === '/bms/'){
    require 'View/index.php';
}else if($uri ==='/bms/login'){
    echo "hello";
}

/*echo $_SERVER['REQUEST_URI'];
echo "<br>";
$route = str_replace('',"",$_SERVER['REQUEST_URI']);
$route = explode('/',$route);

switch($route[2]??''){
    case "";
    case "index.php":
        HomeController::showHome();
        break;
    case "login":
        HomeController::showLogin();
        break;
}*/
?>