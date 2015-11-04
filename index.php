<?php

require "vendor/slim/slim/Slim/Slim.php";
require 'vendor/autoload.php';
require "includes/DB.php";

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

function APIrequest(){
    $app = \Slim\Slim::getInstance();
    $app->view(new \JsonApiView());
    $app->add(new \JsonApiMiddleware());
}

$app->get('/', function() use ($app){
    $app->render('root.php');
});

$app->get('/students/new', function () use ($app) {
    $app->render('students/new.php');
});

$app->post('/students', function() use ($app){
    $data = $app->request->post();

    $db = new DB();
    $db->createStudent($data);

    $app->redirect('/students');
});

$app->post('/api/students', 'APIrequest', function() use ($app){
    $data = $app->request->post();

    $db = new DB();
    $db->createStudent($data);

    $app->redirect('/students');
});

$app->get('/students', function() use ($app) {
    $db = new DB();
    $students = $db->getStudents();
    $app->render('students/index.php', array(
        'students' => $students
    ));
});

$app->get('/api/students', 'APIrequest', function() use ($app) {
    $db = new DB();
    $students = $db->getStudents();
    $app->render(200, array(
        'students' => $students
    ));
});

$app->get('/students/:id', function($id) use ($app){
    $db = new DB();
    $student = $db->getStudent($id);
    $app->render('students/show.php', array(
        'student' => $student
    ));
});

$app->get('/api/students/:id', 'APIrequest', function($id) use ($app){
    $db = new DB();
    $student = $db->getStudent($id);
    $app->render('students/show.php', array(
        'student' => $student
    ));
});

$app->run();

?>
