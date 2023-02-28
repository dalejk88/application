<?php

//Return true if a string is all alphabetic
function validName($name)
{
    if (!is_string($name)) return false;
    return ctype_alpha($name);
}

//Return true if string is a valid github url
function validGithub($github)
{
    if (strlen($github) < 19) return false;
    if (substr($github, 0, 18) == "https://github.com/") return true;
    else return false;
}

//Return true if string is a valid “value” property.
function validExperience($experience)
{
    if (is_string($experience)) return true;
}

//Return true if string is a valid phone number (numeric)
function validPhone($phone)
{
    return ctype_digit($phone);
}

//Return true if email is valid
function validEmail($phone)
{

}

//Checks each selected jobs checkbox selection against a list of valid options
function validSelectionsJobs($jobs)
{

}

//Checks each selected verticals checkbox selection against a list of valid options
function validSelectionsVerticals($verticals)
{

}