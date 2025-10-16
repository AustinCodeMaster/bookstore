<?php
/*
|--------------------------------------------------------------------------
| Example Database and Mail Configuration
|--------------------------------------------------------------------------
| Copy this file to dataBaseConfigurations.php and fill in your own values.
| This file is just a template and should remain in the repository.
*/

$dbHost = "localhost";
$dbUser = "your_username";
$dbPass = "your_password";
$dbName = "your_database_name";

// Mail Configuration
$mailHost = "smtp.gmail.com";
$mailUsername = "your_email@gmail.com";
$mailPassword = "your_app_password";
$mailPort = 587;
$mailFromName = "Your Project Name";
$mailFromEmail = "your_email@gmail.com";

// Create database connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
