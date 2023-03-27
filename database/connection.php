<?php

try {
	$username = "root";
	$password = "";
	$dbname = "desafio_covid";

	$pdo = new PDO("mysql:host=localhost", $username, $password);

	$pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");

	$pdo = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
} catch (Exception $e) {
	var_dump($e);
}
