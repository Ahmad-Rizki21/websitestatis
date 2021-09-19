<?php
session_start();
$dbHost = 'localhost';
$dbName = '_database';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>