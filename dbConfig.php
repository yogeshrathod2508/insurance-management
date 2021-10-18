<?php
/*
	//For xamp
	$hostName = 'localhost';
	$dbUserName = 'root';
	$dbPassword = '';
	$dbName = 'test';

	$dbConnection = new PDO("mysql:host=$hostName;dbname=$dbName", $dbUserName, $dbPassword);
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/
//For Microsoft Workbench
$hostName = "localhost";
$dbPortNo = 3306;
$dbUserName = "root";
$dbPassword = "";
$dbName = "test";

try {
  $dbConnection = new PDO("mysql:host={$hostName};port={$dbPortNo};dbname={$dbName}", $dbUserName, $dbPassword);
} catch (PDOException $e) {
  echo 'Connection Failed: ' . $e->getMessage();
}
