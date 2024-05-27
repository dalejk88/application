<?php

/* This is my Data Layer
 * It belongs to the Model
 * */

class DataLayer
{
// Get the meals for the Job Application
    static function getExperience()
    {
        return array('0-2', '2-4', '4+');
    }
}