<?php 
try {
	$db = new PDO("mysql:host=115.29.9.163;dbname=mp3","root","5324180");
  $sql ='INSERT user (username,password,email) VALUES ("king5","king5","imooc@qq.com")';

	$res = $db->exec($sql);
	echo '受影响数记录数：'.$res."<hr >";
	echo '最后一条插入ID号数:'.$db->lastInsertId();
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>