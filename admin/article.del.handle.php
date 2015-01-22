<?php 
require_once("../connect.php");
$id = $_GET["id"];
$mysqli->query("delete from article where id=$id;");
echo '<script>alert("删除成功");window.location.href="article.manage.php"</script>';
?>
