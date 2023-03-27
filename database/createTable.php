<?php 
require __dir__."/connection.php";

try {
	$pdo->query("
		CREATE TABLE IF NOT EXISTS access_history(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		country_name VARCHAR(50) NOT NULL,
		access_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
		);
	");
	$pdo = null;
} catch (Exception $e) {
	var_dump($e);
}
