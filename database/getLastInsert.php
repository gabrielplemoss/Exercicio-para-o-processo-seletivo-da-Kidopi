<?php
require __dir__."/connection.php";

try {
	$db = $pdo->prepare("SELECT * FROM access_history
		WHERE access_date IN (SELECT max(access_date) FROM access_history);");
	$db->execute();

	$dados = $db->fetch(PDO::FETCH_ASSOC);
	$pdo = null;
} catch (Exception $e) {
	var_dump($e);
}
