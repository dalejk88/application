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

    // Return true if email valid
    static function validEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }
}