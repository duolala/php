<?php 
try {
	$db = new PDO("mysql:host=115.29.9.163;dbname=ameav","root","5324180");
	$sql = "create database mp3;";
	$sql2 = <<<EOF
	CREATE TABLE IF NOT EXISTS user(
	id INT UNSIGNED AUTO_INCREMENT KEY,
	username VARCHAR(20) NOT NULL UNIQUE,
	password CHAR(32) NOT NULL,
	email VARCHAR(30) NOT NULL
	);
EOF;
	$res = $db->exec($sql2);
	var_dump($res);
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>