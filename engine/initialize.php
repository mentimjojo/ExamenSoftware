<?php
/*
 * Initialize file for getting all the classes etc.
 */

// Get constant data
require_once("data/constans.php");

// Load all the classes
function LoadControllers($class){
    // Load classes
    foreach(glob("engine/controllers/**/".strtolower($class.".php")) as $filename){
        // Include class
        include($filename);
    }
}

// Register load classes
spl_autoload_register(LoadControllers);

// Register connection class
$Connection = new Connection();

// Make database connection
$conn = $Connection->connectDB();
?>