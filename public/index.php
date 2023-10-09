<?php
    define("VENDOR",dirname(__DIR__).DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');
    require VENDOR;
    
    define("VIEWS_PATH",dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);

    $router = new AltoRouter();

    $router->map('GET|POST', '/public/','home','home');
    $router->map('GET|POST', '/public/assujob','assujob','assujob');
    $router->map('GET|POST', '/public/HI-TECH-REV','ptsitlab','ptsitlab');
    $router->map('GET|POST', '/public/ptsbussnessboot','ptsbussnessboot','ptsbussnessboot');

    $match = $router->match();

    if(isset($match['target'])){
        ob_start();
        require VIEWS_PATH.$match['target'].'.php';
        $contents = ob_get_clean();
        require VIEWS_PATH."page.php";
    }
?>