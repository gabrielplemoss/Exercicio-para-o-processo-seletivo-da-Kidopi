<?php
require __dir__."/connection.php";

try {
	$pdo->query("INSERT INTO access_history (country_name) VALUE ('$country')");
	$pdo = null;
} catch (Exception $e) {
	var_dump($e);
}
