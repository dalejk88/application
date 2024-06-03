<?php
/** My Controller class for the Application project
 *  328/application/controllers/controller.php
 */
class Controller
{
    private $_f3; // Fat-Free Router

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        // Render a view page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function info()
    {
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
                $this->_f3->set('errors["firstName"]', 'Please enter a valid name');
            }
            // Last Name
            if (Validate::validName($_POST['lastName'])) {
                $lastName = $_POST['lastName'];
            }
            else {
                $this->_f3->set('errors["lastName"]', 'Please enter a valid name');
            }
            // Email
            if (Validate::validEmail($_POST['email'])) {
                $email = $_POST['email'];
            }
            else {
                $this->_f3->set('errors["email"]', 'Please enter a valid email');
            }
            // Phone
            if (Validate::validPhone($_POST['phone'])) {
                $phone = $_POST['phone'];
            }
            else {
                $this->_f3->set('errors["phone"]', 'Please enter a valid phone number');
            }

            if (isset($_POST['mailingLists'])) {
                $applicant = new Applicant_SubscribedToLists($firstName, $lastName, $email, $state, $phone);
                $this->_f3->set('SESSION.applicant', $applicant);
            } else {
                $applicant = new Applicant($firstName, $lastName, $email, $state, $phone);
                $this->_f3->set('SESSION.applicant', $applicant);
            }

            // If there are no errors,
            // Send the user to the next form
            if(empty($this->_f3->get('errors'))) {
                $this->_f3->reroute('experience');
            }
        }
        // Render a view page
        $view = new Template();
        echo $view->render('views/info.html');
    }

    function experience()
    {
        var_dump ( $this->_f3->get('SESSION') );
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Get the data from the POST array
            $biography = $_POST['biography'];
            $githubLink = "";
            $yearsExperience = "";
            $relocate = $_POST['relocate'];

            // If the data is valid
            // Get the data from the post array

            // GitHub
            if (Validate::validGithub($_POST['githubLink'])) {
                $githubLink = $_POST['githubLink'];
            }
            else {
                $this->_f3->set('errors["githubLink"]', 'Please enter a valid link');
            }

            // Experience
            if (Validate::validExperience($_POST['yearsExperience'])) {
                $yearsExperience = $_POST['yearsExperience'];
            }
            else {
                $this->_f3->set('errors["yearsExperience"]', 'Please select a valid option');
            }

            // Add the data to the session array
            $this->_f3->set('SESSION.biography', $biography);
            $this->_f3->set('SESSION.githubLink', $githubLink);
            $this->_f3->set('SESSION.yearsExperience', $yearsExperience);
            $this->_f3->set('SESSION.relocate', $relocate);

            // If there are no errors,
            // Send the user to the next form
            if(empty($this->_f3->get('errors'))) {
                $this->_f3->reroute('mailing');
            }
        }
        // Render a view page
        $view = new Template();
        echo $view->render('views/experience.html');
    }

    function mailing()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Get the data from the POST array
            if (isset($_POST["jobOpenings"])) {
                $jobOpenings = implode(", ",$_POST["jobOpenings"]);
            }

            // If the data is valid
            if (true) {
                // Add the data to the session array
                $this->_f3->set('SESSION.jobOpenings', $jobOpenings);

                // Send the user to the next form
                $this->_f3->reroute("summary");
            }
        }
        // Render a view page
        $view = new Template();
        echo $view->render('views/mailing.html');
    }

    function summary()
    {
        // Render a view page
        $view = new Template();
        echo $view->render('views/summary.html');
    }
}