<?php

$routes =[
    'GET'=>[],
    'POST'=>[]
];

function getRoute(string $path,string $functionName){
    global $routes;
    $functionName = $routes['GET'][$path];
}

function postRoute(string $path,string $functionName){
    global $routes;
    $functionName = $routes['POST'][$path];
}

function cheminRoutage(string $uri,string $method){
    global $routes;
    $path = rtrim($uri,'/');
    if(empty($path)){
        $path = '/';
    }

    $functionName = $routes[$method][$path]?? null;
    if($functionName==null){
        http_response_code(404);
        echo "<h1>Erreur 404</h1><p>La page demandée n'existe pas </p>";
        exit;
    }

    if (function_exists($functionName)) {
        $functionName();
    } else {
        http_response_code(500);
        echo "Erreur : La fonction PHP  n'existe pas.";
    }

}