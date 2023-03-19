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
                         $_state = "", $_phone = "", $_github = "",
                         $_experience = "", $_relocate = "", $_bio = "")
    {
        $this->_fname = $_fname;
        $this->_lname = $_lname;
        $this->_email = $_email;
        $this->_state = $_state;
        $this->_phone = $_phone;
        $this->_github = $_github;
        $this->_experience = $_experience;
        $this->_relocate = $_relocate;
        $this->_bio = $_bio;
    }
}
