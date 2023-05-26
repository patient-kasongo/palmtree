<?php
    require "../vendor/autoload.php";
    
    define("VIEWS_PATH",dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);

    $router = new AltoRouter();

    $router->map('GET|POST', '/public','home','home');
    $match = $router->match();

    if(isset($match['target'])){
        ob_start();
        require VIEWS_PATH.$match['target'].'.php';
        $contents = ob_get_clean();
        require VIEWS_PATH."page.php";
    }
?>