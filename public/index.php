<?php
    define("VENDOR",dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');
    require VENDOR;
    
    define("VIEWS_PATH",dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);

    $router = new AltoRouter();

    $router->map('GET|POST', '/public','home','home');
    $router->map('GET|POST', '/public/cours/add','create_cours','createcours');
    $router->map('GET|POST', '/public/cours/management','gestion_cours','management_cours');
    $router->map('GET|POST', '/public/client/inscription-[i:id]','make_reservation','make_reservation');
    $router->map('GET|POST', '/public/client/management','gestion_client','magement_client');
    $router->map('GET|POST', '/public/client/show-[i:id]','view_detail','details_client');
    $router->map('GET|POST', '/public/session/create','create_session','create_session');
    $router->map('GET|POST', '/public/login','login','login');
    $router->map('GET|POST', '/public/logout','logout','logout');

    $match = $router->match();

    if(isset($match['target'])){
        ob_start();
        require VIEWS_PATH.$match['target'].'.php';
        $contents = ob_get_clean();
        require VIEWS_PATH."page.php";
    }
?>