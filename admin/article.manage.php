<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章管理</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php 
require_once("../connect.php");
$result = $mysqli->query('select * from article order by id desc');
?>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
	<tbody>
		<tr>
			<td height="25" colspan="9"></td>
		</tr>
		<tr class="header">
			<td width="6%" height="25">
				<div align="center">
					<a href="ListNews.php?&amp;bclassid=203&amp;classid=206&amp;totalnum=123&amp;myorder=4"> <u>ID</u>
					</a>
				</div>
			</td>
			<td width="30%" height="25">
				<div align="center">标题</div>
			</td>
			<td width="12%" height="25">
				<div align="center">发布者</div>
			</td>
			<td width="16%" height="25">
				<div align="center">
					<a href="ListNews.php?&amp;bclassid=203&amp;classid=206&amp;totalnum=123&amp;myorder=1"> <u>发布时间</u>
					</a>
				</div>
			</td>
			<td width="14%" height="25">
				<div align="center">操作</div>
			</td>
		</tr>
<?php while ($row = $result->fetch_array()) {
 ?>
		<tr bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#C3EFFF'" id="news5757" style="background-color: rgb(255, 255, 255);">
			<td height="32">
				<div align="center">
					<?php echo $row["id"] ?>
				</div>
			</td>
			<td height="25">
				<div align="left">
					<?php echo $row["title"] ?>
				</div>
			</td>
			<td height="25">
				<div align="center"><?php echo $row["author"] ?></div>
			</td>
			<td height="25">
				<div align="center">
					<input name="newstime" type="text" value="<?php echo date('Y-m-d H:i:s', $row["detele"])?>" size="20"></div>
			</td>
			<td height="25">
				<div align="center">
					<a href="article.modify.php?id=<?php echo $row["id"] ?>">修改</a>
					|
					<a href="article.del.handle.php?id=<?php echo $row["id"] ?>">删除</a>
				</div>
			</td>
		</tr>
<?php 
}
?>
	</tbody>
</table>
</body>
</html>