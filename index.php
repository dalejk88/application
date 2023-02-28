<?php

// Controller file

// Turn on error reporting
ini_set('display_errors', 1);
// Error reporting level
error_reporting(E_ALL);

// Start a session
session_start();

// Require autoload file
require_once('vendor/autoload.php');
require_once('model/validate.php');

//Instantiate F3 Base class
$f3 = Base::instance();

// Define a default route (328/application/home)
$f3->route('GET /', function() {
    // Instantiate a view
    $view = new Template();
    echo $view->render("views/home.html");
});

// Define information route
$f3->route('GET /info', function() {
    // Instantiate a view
    $view = new Template();
    echo $view->render("views/information.html");
});

//Define an experience route (328/application/experience)
$f3->route('GET /experience', function($f3) {

    //Instantiate a view
    $view = new Template();
    echo $view->render("views/experience.html");

});

// Run Fat Free
$f3->run();