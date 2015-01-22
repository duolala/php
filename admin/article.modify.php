<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
$id = $_GET["id"];
require_once("../connect.php");
$result = $mysqli->query("select * from article where id=$id");
$row = $result->fetch_array();
?>
<div id="add">
		<form id="profile" action="article.modify.handle.php" method="post">
			<input type="hidden" name="id" value="<?php echo $row["id"] ?>">
		<ul>
<li><label>标题 : </label><input name="title" value="<?php echo $row["title"] ?>"></li>
<li><label>作者 : </label><input name="author" value="<?php echo $row["author"] ?>"></li>
<li><label>简介 : </label><input name="description" value="<?php echo $row["description"] ?>"></li>
<li><label>内容 : </label><textarea name="content" cols="30" rows="5" class="textarea"><?php echo $row["content"] ?></textarea></li>
			<input type="submit" value="Submit">
		</ul>
	</form>
</div>
</body>
</html>