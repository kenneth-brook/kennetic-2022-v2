<?php

ini_set('error_reporting, E_ALL');
ini_set('display_errors', 'On');

$servername = "localhost";
$username = "tkbcwzsc_wombat72";
$password = "Wizard72!";
$dbname = "tkbcwzsc_kenneticdirectus";

// Create connection
$connection = mysqli_connect($servername, $username, $password);
mysqli_set_charset($connection, 'utf8');
mysqli_select_db($connection, $dbname);



?>