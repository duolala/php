<?php 
/**
 * 1、取值
 * 2、插入值
 */
require_once('../connect.php');
$val = $_POST;
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$data = time();
$sql = "insert into article(title,author,description,content,detele) values ('$title','$author','$description','$content','$data');";
if($mysqli->query($sql)){
	echo "<script>alert('插入成功');window.location.href='article.manage.php'</script>";
}else{
	echo "<script>alert('插入失败');window.location.href='article.manage.php'</script>";
};
?>                                          
