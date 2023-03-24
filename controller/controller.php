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
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $newApplicant = new Applicant();

            // Validate fname
            $fname = trim($_POST['fname']);
            if (Validate::validFood($fname)) {
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
            $email = $_POST['email'];
            if (Validate::validEmail($email)) {
                $newApplicant->setEmail($email);
            }
            else {
                $this->_f3->set('errors["email"]',
                    'Email is invalid');
            }

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
}
