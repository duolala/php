<?php 
try {
	$db = new PDO("mysql:host=115.29.9.163;dbname=mp3","root","5324180");
	$sql = 'INSERT INTO user (username,password,email) VALUES ("king","'.md5('king').'","imooc@.qq.com")';
	$res = $db->exec($sql);
	echo($res);
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>