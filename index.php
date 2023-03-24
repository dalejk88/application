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

//Instantiate a Controller and DataLayer object
$con = new Controller($f3);
//$datalayer = new DataLayer();

// Define a default route (328/application/home)
$f3->route('GET /', function() {
    $GLOBALS['con']->home();
});

// Define information route
$f3->route('GET|POST /info', function() {
    $GLOBALS['con']->info();
});

//Define an experience route (328/application/experience)
$f3->route('GET|POST /experience', function() {
    $GLOBALS['con']->experience();
});

// Define mailing route (328/application/mailing)
$f3->route('GET|POST /mailing', function() {
    // Instantiate a view
    $view = new Template();
    echo $view->render("views/mailing.html");
});

// Run Fat Free
$f3->run();