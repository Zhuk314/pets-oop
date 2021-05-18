<?php

//This is my controller for the diner project

//Turn on error-reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//Require necessary files
require_once ('vendor/autoload.php');

//Instantiate Fat-Free
$f3 = Base::instance();

// Require the file that defines the pet class
require('pet.php');

//Define default route
$f3->route('GET /', function(){

    //Display the home page
    //$view = new Template();
    //echo $view->render('views/home.html');
    echo "<h1>Hello</h1>";

    //instance a pet obj
    //$pet1 = new Pet("Rex", "brown");
    //$pet1 = new Pet();
    $pet1 = new Pet("Bobik");

    //test setters and getters
    $pet1->setName("Fifi");

    echo "<pre>";
    var_dump($pet1);
    echo "</pre>";

    // Invoke the eat method
    $pet1->eat();
    $pet1->talk();
    $pet1->sleep();
});

//Run Fat-Free
$f3->run();