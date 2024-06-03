<?php

/** Applicant class represents an applying user */
class Applicant
{
private string $_fname;
private string $_lname;
private string $_email;
private string $_state;
private string $_phone;
private string $_github;
private string $_experience;
private string $_relocate;
private string $_bio;

    /**
     * @param string $_fname
     * @param string $_lname
     * @param string $_email
     * @param string $_state
     * @param string $_phone
     */
    public function __construct(string $_fname, string $_lname, string $_email, string $_state, string $_phone)
    {
        $this->_fname = $_fname;
        $this->_lname = $_lname;
        $this->_email = $_email;
        $this->_state = $_state;
        $this->_phone = $_phone;
    }

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->_fname;
    }

    /**
     * @param string $fname
     */
    public function setFname(string $fname): void
    {
        $this->_fname = $fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->_lname;
    }

    /**
     * @param string $lname
     */
    public function setLname(string $lname): void
    {
        $this->_lname = $lname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->_email = $email;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->_state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->_state = $state;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->_phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->_phone = $phone;
    }

    /**
     * @return string
     */
    public function getGithub(): string
    {
        return $this->_github;
    }

    /**
     * @param string $github
     */
    public function setGithub(string $github): void
    {
        $this->_github = $github;
    }

    /**
     * @return string
     */
    public function getExperience(): string
    {
        return $this->_experience;
    }

    /**
     * @param string $experience
     */
    public function setExperience(string $experience): void
    {
        $this->_experience = $experience;
    }

    /**
     * @return string
     */
    public function getRelocate(): string
    {
        return $this->_relocate;
    }

    /**
     * @param string $relocate
     */
    public function setRelocate(string $relocate): void
    {
        $this->_relocate = $relocate;
    }

    /**
     * @return string
     */
    public function getBio(): string
    {
        return $this->_bio;
    }

    /**
     * @param string $bio
     */
    public function setBio(string $bio): void
    {
        $this->_bio = $bio;
    }
}