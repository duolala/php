<?php 
try {
	$db = new PDO("mysql:host=115.29.9.163;dbname=mp3","root","5324180");
  $sql = 'update user set usernam="imooc", password="imooc" where id=1';
	$res = $db->exec($sql);
	//echo '受影响数记录数：'.$res."<hr >";
  print_r($res->errorCode());
  

} catch (PDOException $e) {
	echo $e->getMessage();
}

?>