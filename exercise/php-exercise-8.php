<?php 
try {
	
	$db = new PDO("mysql:host=115.29.9.163;dbname=mp3","root","5324180");
  	$sql = 'update user set username="imooc1", password="imooc1" where id=1';
	
	$res = $db->query($sql);
	if($res) {
		echo '成功插入'.print_r(var_dump($res))."<hr >";
	}else {
		echo '插入出错:'.print_r(var_dump($db->errorInfo()))."<br />";
	}

} catch (PDOException $e) {
	echo $e->getMessage();

}

?>