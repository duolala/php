<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body style="background-color: #f5f5f5;">
<?php 
require_once("connect.php");
$result = $mysqli->query("select * from article order by id desc");
?>
<div class="content_area cell "><div class="learnchapter  learnchapter-active ">
	<h3><span>-</span> <strong><i class="hasOpenOn"></i>php练习</strong> </h3>
	<ul class="video">
		<?php while ($row = $result->fetch_array()) { ?>
		<li><a target="_blank" href="article.show.php?id=<?php echo $row["id"] ?>" ><?php echo $row["title"] ?><i></i></a></li>
		<?php } ?>
	</ul>
</div></div>
</body>
</html>
