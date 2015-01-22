<!DOCname html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<div id="add">
		<form id="profile" action="article.add.handle.php" method="post">
		<ul>
			<li><label>标题 : </label><input name="title"></li>
			<li><label>作者 : </label><input name="author"></li>
			<li><label>简介 : </label><input name="description"></li>
			<li><label>内容 : </label><textarea name="content" cols="30" rows="5" class="textarea"></textarea></li>
			<input type="submit" value="Submit">
		</ul>
	</form>
</div>

</body>
</html>