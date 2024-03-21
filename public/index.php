<?php
    require_once "../vendor/autoload.php";
    $route = new App\Route;

    echo 'ponto de entrada -----';
    echo '<hr>';
    print_r($route->getUrl());
?>
