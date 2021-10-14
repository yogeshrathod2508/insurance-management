<?php
$hostName = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'test';

$dbConnection = new PDO("mysql:host=$hostName;dbname=$dbName", $dbUserName, $dbPassword);
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
