<?php 
try {
	$db = new PDO("mysql:host=115.29.9.163;dbname=mp3","root","5324180");
  $sql =<<<EOF
  INSERT user (username,password,email) VALUES ("king1","king1","imooc@qq.com"),
  ("king2","king2","imooc@qq.com"),
  ("king3","king3","imooc@qq.com"),
  ("king4","king4","imooc@qq.com")
EOF;
	$res = $db->exec($sql);
	echo($res);
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>