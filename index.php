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
$f3->route('GET|POST /info', function($f3) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Get the data from the POST array
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];

        // If the data is valid
        if (true) {
            // Add the data to the session array
            $f3->set('SESSION.firstName', $firstName);
            $f3->set('SESSION.lastName', $lastName);
            $f3->set('SESSION.email', $email);
            $f3->set('SESSION.state', $state);
            $f3->set('SESSION.phone', $phone);

            // Send the user to the next form
            $f3->reroute("experience");
        }
    }
    // Render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Define an experience route
$f3->route('GET /experience', function($f3) {
    var_dump ($f3->get("SESSION"));
    // Render a view page
    $view = new Template();
    echo $view->render('views/experience.html');
});

// Run Fat-Free
$f3->run();