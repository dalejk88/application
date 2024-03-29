<?php

// 328/application/controller/controller.php

class Controller
{
    private $_f3; //Fat-Free object

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        // Instantiate a view
        $view = new Template();
        echo $view->render("views/home.html");
    }

    function info()
    {
        echo '<pre>';
        Print_r ($_SESSION);
        echo '</pre>';
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            print_r($_POST);
            // instantiate a new Applicant
            if(!empty($_POST['lists'])) {
                $newApplicant = new Applicant_SubscribedToLists();
            } else {
                $newApplicant = new Applicant();
            }

            // Validate fname
            $fname = trim($_POST['fname']);
            if (Validate::validName($fname)) {
                $newApplicant->setFname($fname);
            }
            else {
                $this->_f3->set('errors["fname"]',
                    'Name must be all alphabetic');
            }

            // Validate lname
            $lname = trim($_POST['lname']);
            if (Validate::validName($lname)) {
                $newApplicant->setLname($lname);
            }
            else {
                $this->_f3->set('errors["lname"]',
                    'Name must be all alphabetic');
            }

            //Validate email
            $email = trim($_POST['email']);
            if (Validate::validEmail($email)) {
                $newApplicant->setEmail($email);
            }
            else {
                $this->_f3->set('errors["email"]',
                    'Email is invalid');
            }

            // Validate phone number
            $phone = trim($_POST['phone']);
            if (Validate::validPhone($phone)) {
                $newApplicant->setPhone($phone);
            }
            else {
                $this->_f3->set('errors["phone"]',
                    'Phone number must be numeric');
            }

            $newApplicant->setState($_POST['state']);

            //Redirect to experience page
            //if there are no errors
            if (empty($this->_f3->get('errors'))) {
                $_SESSION['newApplicant'] = $newApplicant;
                $this->_f3->reroute('experience');
            }
        }

        //Add meals to F3 hive
        //$this->_f3->set('meals', DataLayer::getMeals());

        // Instantiate a view
        $view = new Template();
        echo $view->render("views/information.html");

    }

    function experience()
    {
        echo '<pre>';
        Print_r ($_SESSION);
        echo '</pre>';

        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_SESSION['newApplicant']->setBio($_POST['bio']);
            $_SESSION['newApplicant']->setRelocate($_POST['relocate']);

            // Validate github
            $github = trim($_POST['github']);
            if (Validate::validGithub($github)) {
                $_SESSION['newApplicant']->setGithub($github);
            }
            else {
                $this->_f3->set('errors["github"]',
                    'Must be a valid github url');
            }

            // Validate experience
            $experience = trim($_POST['experience']);
            if (Validate::validExperience($experience)) {
                $_SESSION['newApplicant']->setExperience($experience);
            }
            else {
                $this->_f3->set('errors["experience"]',
                    'Not a valid input');
            }

            //Redirect to mailing page
            //if there are no errors
            if (empty($this->_f3->get('errors'))) {
                $this->_f3->reroute('mailing');
            }
        }

        //Instantiate a view
        $view = new Template();
        echo $view->render("views/experience.html");
    }

    function mailing()
    {
        echo '<pre>';
        Print_r ($_SESSION);
        echo '</pre>';
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Set mailing lists only for Applicants subscribed to lists
            if (get_class($_SESSION['newApplicant']) == "Applicant_SubscribedToLists") {
                $jobsArr = $_POST['jobs'];
                $_SESSION['newApplicant']->setSelectionsJobs($jobsArr);
                $vertArr = $_POST['verticals'];
                $_SESSION['newApplicant']->setSelectionsVerticals($vertArr);
            }

            //Redirect to summary page
            //if there are no errors
            if (empty($this->_f3->get('errors'))) {
                $this->_f3->reroute('summary');
            }
        }

        //Add jobs and verticals to the hive
        $this->_f3->set('jobs', DataLayer::getJobs());
        $this->_f3->set('verticals', DataLayer::getVerticals());

        // Instantiate a view
        $view = new Template();
        echo $view->render("views/mailing.html");
    }

    function summary()
    {
        // Instantiate a view
        $view = new Template();
        echo $view->render("views/summary.html");
    }
}
