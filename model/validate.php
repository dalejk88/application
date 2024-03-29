<?php

class Validate
{
//Return true if a string is all alphabetic
    static function validName($name)
    {
        if (!is_string($name)) return false;
        return ctype_alpha($name);
    }

//Return true if string is a valid github url
    static function validGithub($github)
    {
        if (strlen($github) < 19) return false;
        else if (str_starts_with($github, "https://github.com/")) return true;
        else return false;
    }

//Return true if string is a valid “value” property.
    static function validExperience($experience)
    {
        if (is_string($experience)) return true;
        else return false;
    }

//Return true if string is a valid phone number (numeric)
    static function validPhone($phone)
    {
        return ctype_digit($phone);
    }

//Return true if email is valid
    static function validEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
        else return false;
    }

//Checks each selected jobs checkbox selection against a list of valid options
    static function validSelectionsJobs($jobs)
    {

    }

//Checks each selected verticals checkbox selection against a list of valid options
    static function validSelectionsVerticals($verticals)
    {

    }
}