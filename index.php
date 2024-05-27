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
        $firstName = "";
        $lastName = "";
        $email = "";
        $state = $_POST['state'];
        $phone = "";

        // If the data is valid
        // Get the data from the post array

        // First Name
        if (Validate::validName($_POST['firstName'])) {
            $firstName = $_POST['firstName'];
        }
        else {
            $f3->set('errors["firstName"]', 'Please enter a valid name');
        }
        // Last Name
        if (Validate::validName($_POST['lastName'])) {
            $lastName = $_POST['lastName'];
        }
        else {
            $f3->set('errors["lastName"]', 'Please enter a valid name');
        }
        // Email
        if (Validate::validEmail($_POST['email'])) {
            $email = $_POST['email'];
        }
        else {
            $f3->set('errors["email"]', 'Please enter a valid email');
        }
        // Phone
        if (Validate::validPhone($_POST['phone'])) {
            $phone = $_POST['phone'];
        }
        else {
            $f3->set('errors["phone"]', 'Please enter a valid phone number');
        }

        // Add the data to the session array
        $f3->set('SESSION.firstName', $firstName);
        $f3->set('SESSION.lastName', $lastName);
        $f3->set('SESSION.email', $email);
        $f3->set('SESSION.state', $state);
        $f3->set('SESSION.phone', $phone);

        // If there are no errors,
        // Send the user to the next form
        if(empty($f3->get('errors'))) {
            $f3->reroute('experience');
        }
    }
    // Render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Define an experience route
$f3->route('GET|POST /experience', function($f3) {
    //var_dump ($f3->get("SESSION"));

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Get the data from the POST array
        $biography = $_POST['biography'];
        $githubLink = $_POST['githubLink'];
        $yearsExperience = $_POST['yearsExperience'];
        $relocate = $_POST['relocate'];

        // If the data is valid
        // Get the data from the post array

        // Add the data to the session array
        $f3->set('SESSION.biography', $biography);
        $f3->set('SESSION.githubLink', $githubLink);
        $f3->set('SESSION.yearsExperience', $yearsExperience);
        $f3->set('SESSION.relocate', $relocate);

        // If there are no errors,
        // Send the user to the next form
        if(empty($f3->get('errors'))) {
            $f3->reroute('mailing');
        }
    }
    // Render a view page
    $view = new Template();
    echo $view->render('views/experience.html');
});

// Define a mailing route
$f3->route('GET|POST /mailing', function($f3) {
    //var_dump ($f3->get("SESSION"));

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Get the data from the POST array
        if (isset($_POST["jobOpenings"])) {
            $jobOpenings = implode(", ",$_POST["jobOpenings"]);
        }

        // If the data is valid
        if (true) {
            // Add the data to the session array
            $f3->set('SESSION.jobOpenings', $jobOpenings);

            // Send the user to the next form
            $f3->reroute("summary");
        }
    }
    // Render a view page
    $view = new Template();
    echo $view->render('views/mailing.html');
});

// Define a summary route
$f3->route('GET /summary', function($f3) {
    //var_dump ($f3->get("SESSION"));

    // Render a view page
    $view = new Template();
    echo $view->render('views/summary.html');
});

// Run Fat-Free
$f3->run();