<?php
require "config.php";
session_start();
global $mysqli; 
$mysqli = new mysqli($DB_HOST_NAME, $DB_USER_NAME, $DB_PASSWORD, $DB_NAME);
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>