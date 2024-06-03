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

// Require necessary files
require_once ('vendor/autoload.php');
require_once ('model/validate.php');
require_once ('model/data-layer.php');

// Instantiate the F3 Base class
$f3 = Base::instance();
$con = new Controller($f3);

// Define a default route
$f3->route('GET /', function() {
    $GLOBALS['con']->home();
});

// Define an information route
$f3->route('GET|POST /info', function() {
    $GLOBALS['con']->info();
});

// Define an experience route
$f3->route('GET|POST /experience', function() {
    $GLOBALS['con']->experience();
});

// Define a mailing route
$f3->route('GET|POST /mailing', function() {
    $GLOBALS['con']->mailing();
});

// Define a summary route
$f3->route('GET /summary', function($f3) {
    $GLOBALS['con']->summary();
});

// Run Fat-Free
$f3->run();