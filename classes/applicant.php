<?php

/**
 * Applicant class represents an applicant for Green River Corn Dogs
 * @Dale Kanikkeberg
 */

class Applicant
{
    private $_fname;
    private $_lname;
    private $_email;
    private $_state;
    private $_phone;
    private $_github;
    private $_experience;
    private $_relocate;
    private $_bio;

    function __construct($_fname = "", $_lname = "", $_email = "",
                         $_state = "", $_phone = "")
    {
        $this->_fname = $_fname;
        $this->_lname = $_lname;
        $this->_email = $_email;
        $this->_state = $_state;
        $this->_phone = $_phone;
    }

    /**
     * getFname returns the first name of the Applicant
     * @return string
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * setFname sets the first name of the Applicant
     * @param string
     */
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    /**
     * getLname returns the last name of the Applicant
     * @return string
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * setLname sets the last name of the Applicant
     * @param string
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    /**
     * getEmail returns the email of the Applicant
     * @return string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * setEmail sets the email of the Applicant
     * @param string
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * getState returns the state of the Applicant
     * @return string
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * setState sets the state of the Applicant
     * @param string
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * getPhone returns the phone number of the Applicant
     * @return string
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * setPhone sets the phone number of the Applicant
     * @param string
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * getGitHub returns the github address of the Applicant
     * @return string
     */
    public function getGitHub()
    {
        return $this->_github;
    }

    /**
     * setGitHub sets the github address of the Applicant
     * @param string
     */
    public function setGitHub($github)
    {
        $this->_github = $github;
    }

    /**
     * getExperience returns the years of experience of the Applicant
     * @return string
     */
    public function getExperience()
    {
        return $this->_experience;
    }

    /**
     * setExperience sets the years of experience of the Applicant
     * @param string
     */
    public function setExperience($experience)
    {
        $this->_experience = $experience;
    }

    /**
     * getRelocate returns the answer to "Willing to Relocate?" for the Applicant
     * @return string
     */
    public function getRelocate()
    {
        return $this->_relocate;
    }

    /**
     * setRelocate sets the answer to "Willing to Relocate?" for the Applicant
     * @param string
     */
    public function setRelocate($relocate)
    {
        $this->_relocate = $relocate;
    }

    //bio
    /**
     * getBio returns the bio the Applicant submitted
     * @return string
     */
    public function getBio()
    {
        return $this->_bio;
    }

    /**
     * setBio sets the bio of the Applicant
     * @param string
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }
}
