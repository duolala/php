<!DOCTYPE html>
<html>
<head>
  	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>登录页面</title>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
<script type="text/javascript">
$(document).ready(function(){
	$(".img-rounded").click(function(){
		var num = 	new Date().getTime();
		var rand = Math.round(Math.random() * 10000);
		num = num + rand;
		$(".img-rounded").attr("src","CheckCode.php?" + num);
		return false;
	})
})

</script>
</head>
<body class="templatemo-bg-gray">
<div class="container">
	<div class="col-md-12 ">
		<h1 class="margin-bottom-15">
		<?php 
		ob_start();
		session_start(); 
		?></h1>
		<form role="form" method="post" action="CheckLogin.php" class="form-horizontal templatemo-container templatemo-login-form margin-bottom-30 clearfix ">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-1 control-label padding-right-0">
					<span class="glyphicon glyphicon-user"></span>
				</label>
				<div class="col-sm-11">
					<input type="text" name="uername" class="form-control" id="inputEmail3" placeholder="Username"></div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-1 control-label padding-right-0 "><span class="glyphicon glyphicon-lock"></span></label>
				<div class="col-sm-11">
					<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password"></div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-1 control-label padding-right-0 "><span class="glyphicon glyphicon-cog"></span></label>
				<div class="col-sm-3">
					<input type="text" name="CheckCode" class="form-control" id="inputPassword3" placeholder="验证码"></div>
				<div class="col-sm-3 row ">
					<img src="CheckCode.php" class="img-rounded">
				</div>
			</div>
			<div class="form-group margin-top-20">
				<div class="col-sm-offset-1 col-sm-11">
					<button type="submit" class="btn btn-info btn-block btn-primary">确认登录</button>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-12">
					<p class="text-left pull-left">合作账号登录:</p>
					<p class="text-right pull-right">
						<a href="">马上注册，免费试用</a>
					</p>
				</div>
			</div>	
		</form>
		<div class="text-center">
			<a href="create-account.html" class="templatemo-create-new">
				<i class="fa fa-arrow-circle-o-right"></i>
			</a>
		</div>
	</div>
</div>
</body>
</html>