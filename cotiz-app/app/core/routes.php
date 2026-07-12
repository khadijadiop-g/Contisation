<?php

$controller = $_GET['controller'];
$action=$_GET['action'];

$routes = [

    'gerantt'=>[],
    'apprenant'=>[],
    'voiture'=>[]

];


$fonction = $routes[$controller][$action]?? null;
if($fonction){
    require_once(dirname(__DIR__)."/controllers/".$controller.".controllers.php");
        $fonction();
}else{
    echo"Le page que vous essayer de charger n existe pas";
}