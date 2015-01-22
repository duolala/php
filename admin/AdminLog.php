<?php 

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>内容</title>
		<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body class="templatemo-bg-gray">
	<div class="container templatemo-container">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>UserName</th>
					<th>LoginIP</th>
					<th>LoginSoft</th>
					<th>LoginTime</th>
					<th class="text-right">View</th>
				</tr>
			</thead>
			<tbody>
				<?php
				require_once("Function.php");
				$db = new PDO('mysql:host=115.29.9.163;dbname=ameav', 'root', '5324180');
				$res = $db->prepare(" SELECT * FROM Ameav_AdminLog");
				$res->execute();

				while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
				# code...
				 ?>
				<tr>
					<td><?php echo $row["ID"]; ?></td>
					<td><?php echo $row["UserName"]; ?></td>
					<td><?php echo $row["LoginIP"]; ?></td>
					<td><?php echo getBrowse($row["LoginSoft"]); ?></td>
					<td><?php echo $row["LoginTime"]; ?></td>
					<td class="text-right">
						<a href="login-1.html" class="btn btn-info"> <i class="glyphicon glyphicon-circle-arrow-right"></i>
						</a>
					</td>
				</tr>
				<?php 
				}	
				 ?>
				 <tr>
				 	<?php 
$page=$_GET['page'];
$allcount= 200;
$page_size =5;
$page_show =5;
$page_count = ceil($allcount/$page_size);
if($page <= 1 || $page == '') $page = 1;
if($page >= $page_count) $page = $page_count;
$select_limit = $page_size;
$select_from = ($page - 1) * $page_size.',';
$pre_page = ($page == 1)? 1 : $page - 1;
$next_page= ($page == $page_count)? $page_count : $page + 1 ;
$pagenav .= "第 $page/$page_count 页 共 $allcount 条记录 ";
$pagenav .= "<a href='?page=1'>首页</a> ";
$pagenav .= "<a href='?page=$pre_page'>前一页</a> ";
//当前显示的开始也
$page_show_start = (ceil($page/$page_show)-1)*$page_show;
//显示分页
$page_show_str = '';
if($page_show>$page_count){
$page_show = $page_count;
}
for($j=1;$j<=$page_show;$j++){
$page_show_now = $page_show_start+$j;
if($page==$page_show_now){
$page_show_str .= "<a href='?page=$page_show_now'><strong>$page_show_now</strong></a> ";
}else{
$page_show_str .= "<a href='?page=$page_show_now'>$page_show_now</a> ";
}
}

$pagenav.=$page_show_str;

$pagenav .= "<a href='?page=$next_page'>后一页</a> ";

$pagenav .= "<a href='?page=$page_count'>末页</a>";

$pagenav.='跳到<select name="topage" size="1" onchange="window.location="?page="+this.value">';

for($i=1;$i<=$page_count;$i++){

if($i==$page) $pagenav.="<option value='$i' selected>$i</option>";

else $pagenav.="<option value='$i'>$i</option>";

}

$pagenav .='</select>';

echo '<div class="pages">'.$pagenav.'</div>' ;
?>
				 </tr>
			</tbody>

		</table>

	</div>
</body>
</html>