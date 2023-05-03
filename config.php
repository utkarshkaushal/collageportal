<?php
session_start();
$dbHost = 'localhost';
$dbName = 'login_db';
$dbUID = 'root';
$dbPassword = 'yes';
$dbc= mysqli_connect($dbHost,$dbName,$dbUID,$dbPassword);
?>