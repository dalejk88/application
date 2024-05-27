<?php

/* Validate data for the job application
 */
class Validate
{
    // Return true if name is all alphabetic
    static function validName($name)
    {
        return ctype_alpha($name);
    }

    // Return true if email is valid
    static function validEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    // Return true if phone number is numeric
    static function validPhone($phone)
    {
        return is_numeric($phone);
    }

    // Return true if GitHub link is valid
    static function validGithub($github)
    {
        if (!filter_var($github, FILTER_VALIDATE_URL)) {
            return false;
        }
        return true;
    }

    // Return true if experience is a valid value
    static function validExperience($experience)
    {
        return in_array($experience, DataLayer::getExperience());
    }
}