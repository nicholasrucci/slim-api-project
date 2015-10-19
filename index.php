<?php

require "vendor/slim/slim/Slim/Slim.php";
require "includes/DB.php";

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/students/new', function () use ($app) {
    $app->render('students/new.php');
});

$app->post('/students', function() use ($app){
    $data = $app->request->post();

    $db = new DB();
    $db->createStudent($data);

    echo "Success";
});

$app->run();

?>