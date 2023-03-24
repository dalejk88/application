<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/../pdo-config.php');

class DataLayer
{
    // database connection object
    private $_dbh;

    function __construct()
    {
        try {
            $this->_dbh = new PDO(DB_DRIVER, USERNAME, PASSWORD);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
