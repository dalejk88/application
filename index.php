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

//Insantiate F3 Base class
$f3 = Base::instance();

// Define a default route (328/home)
$f3->route('GET /', function(){
    // Instantiate a view
    $view = new Template();
    echo $view->render("views/home.html");
});

// Define information route
// start of application route
$f3->route('GET /information', function() {
    // Instantiate a view
    $view = new Template();
    echo $view->render("views/information.html");
});

// Run Fat Free
$f3->run();