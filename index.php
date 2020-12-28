<?php

    require_once("vendor/autoload.php");
    ini_set('display_errors',-1);
    
    use VictorEcommerce\Page;

    $app = new \Slim\Slim();

    $app->config('debug', true);

    $app->get('/', function(){
        $page = new Page();
        $page->setTpl('index');

        
    });

    $app->run();

?>