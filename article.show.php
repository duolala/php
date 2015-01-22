<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章页面</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<?php 
require_once("connect.php");
$id = $_GET["id"];
$result = $mysqli->query("select * from article where id=$id");
$row = $result->fetch_array();
?>
<body style="background-color: #f5f5f5;">
<div class="row-left cell">
	<div class="row-article">
		<h1><?php echo $row["title"] ?></h1>
		<div class="article-writer">
			<div class="text">
				时间: <?php echo date('Y-m-d H:i:s',$row["detele"] )?>
			</div>
			<div class="face">
				作者: <?php echo $row["author"] ?>
			</div>
		</div>
		<div class="article-content">
			<?php echo $row["content"] ?>
		</div>
	</div>
</div>
</body>
</html>