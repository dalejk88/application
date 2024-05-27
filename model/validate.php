<?php

/* Validate data for the job application
 */
class Validate
{
    // Return true if name is all alphabetic
    static function validName($name)
    {
        return strlen(trim($name)) >= 3;
    }
}