<?php 
require_once("../connect.php");
$id = $_POST["id"];
$title= $_POST["title"];
$author= $_POST["author"];
$description= $_POST["description"];
$content= $_POST["content"];
$detele = time();
if($mysqli->query("update article set title='$title', author='$author', description='$description', content='$content', detele='$detele' where id=$id;")){
	echo "<script>alert('修改成功');window.location.href='article.manage.php'</script>";
}else {
	echo "<script>alert('修改失败');window.location.href='article.manage.php'</script>";
}
 ?>