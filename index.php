<?php

    require_once("vendor/autoload.php");
    ini_set('display_errors',-1);
    

    $app = new \Slim\Slim();

    $app->config('debug', true);

    $app->get('/', function(){
        // echo "OK";

        $select = new \VictorEcommerce\DB\Sql();
        $results = $select->select("SELECT * FROM tb_users");
         
        echo json_encode($results);

    });

    $app->run();

?>