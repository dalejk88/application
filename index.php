<?php
/*
 * 328/application/index.php
 * Author: Dale Kanikkeberg
 * Date: April 15, 2024
 * Description: Controller for the job application site
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    // Render a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// Define an information route
$f3->route('GET /info', function() {
    // Render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Define an experience route
$f3->route('GET /experience', function() {
    // Render a view page
    $view = new Template();
    echo $view->render('views/experience.html');
});

// Run Fat-Free
$f3->run();