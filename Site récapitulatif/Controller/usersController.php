<?php

$uri = $_SERVER['REQUEST_URI'];

if($uri === '/login'){
    require_once "Templates/users/login.php";
}else if ($uri === '/inscription'){
    require_once "Templates/users/profil.php";
}else if ($uri === '/register'){
    require_once "Templates/users/register.php";
}

?>