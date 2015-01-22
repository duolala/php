<?php 
// $LoginName = $_POST["LoginName"];
// $LoginPassword = $_POST["LoginPassword"];
//trim

/* 设置缓存限制为 “private” */
    $configTime=30; //保存1分钟
    session_set_cookie_params($configTime);
	session_start();
	session_regenerate_id(true);
	date_default_timezone_set('PRC');
	$db = new PDO('mysql:host=115.29.9.163;dbname=ameav', 'root', '5324180');
	$db->exec('set names utf8');

	if (empty($_POST["CheckCode"])) {
		echo "<script language=javascript> alert('验证码不能为空');location.replace('AdminLogin.php');</script>";
		exit();
	}

	if(!empty($_POST["uername"]) and !empty($_POST["password"])) {
		$LoginUername = $_POST["uername"];              //取得用户名
		$LoginPassword = $_POST["password"];       //取得密码值
		$sql = 'select * from Ameav_Admin where AdminName='.$db->quote($LoginUername).';';
		$user = $db->query($sql)->fetch();
		// $sql = 'select * from Ameav_Admin where AdminName='.$db->quote($LoginUername).' and Password='.$db->quote(md5($LoginPassword)).';';
	}else {
		echo "<script language=javascript> alert('管理员名称不正确，请重新输入。');location.replace('AdminLogin.php');</script>";
		exit();
	}

	if($user["AdminName"]!=$LoginUername){
		echo "<script language=javascript> alert('用户名不正确');location.replace('AdminLogin.php');</script>";
		exit();
	}

	if($user["Password"] != md5($LoginPassword) ){
		echo "<script language=javascript> alert('密码不正确');location.replace('AdminLogin.php');</script>";
		exit();
	}

	if(empty($_SESSION["VerifyCode"])!=$CheckCode){
		echo "<script language=javascript> alert('验证码不正确');location.replace('AdminLogin.php');</script>";
		exit();
	}

	if (!$user["Working"]) {
		echo "<script language=javascript> alert('不能登录，此管理员帐号已被锁定');location.replace('AdminLogin.php');</script>";
		exit();
	}


	if(($user["AdminName"]===$LoginUername) and ($user["Password"] === md5($LoginPassword))) {
		$db->exec('UPDATE Ameav_Admin SET LastLoginTime ='.$db->quote(date("Y-m-d H:i:s")).';');
		$_SESSION["AdminName"] = $user["AdminName"];
		$_SESSION["UserName"] = $user["UserName"];
		$_SESSION["AdminPurview"] = $user["AdminPurview"];
		$_SESSION["Succeed"] = 'Succeed';
		//==========================================
		$AdminName = $user["AdminName"];
		$UserName = $user["UserName"];
		$LoginIP = $_SERVER["REMOTE_ADDR"];
		$LoginSoft = $_SERVER['HTTP_USER_AGENT'];
		$LoginTime = date("Y-m-d H:i:s");
		$db->exec('INSERT INTO Ameav_AdminLog (AdminName,UserName,LoginIP,LoginSoft,LoginTime) 
		values ('.$db->quote($AdminName).','.$db->quote($UserName).','.$db->quote($LoginIP).','.$db->quote($LoginSoft).','.$db->quote($LoginTime).');');

		//==========================================
		header("Location: main.php");
	}





	// if($user["UserName"] != $LoginName) {
	// 	echo("用户名不正确");
	// 	echo("<hr />");
	// 	echo $LoginName;
	// }

	// if ($user["Password"] != $LoginPassword) {
	// 	echo("密码不正确");
	// 	echo("<hr />");
	// }

	// if(!$user["Working"]){
	// 	echo '不能登录，此管理员帐号已被锁定。';
	// 	echo("<hr />");
	// }

	// if ($user["UserName"] === $LoginName and !empty($LoginPassword)) {
	// 	$_SESSION["AdminName"] = $user["AdminName"];
	// 	$_SESSION["UserName"] = $user["UserName"];
	// 	$_SESSION["AdminPurview"] = $user["AdminPurview"];
	// 	$_SESSION["LoginSystem"] ="Succeed";
	// 	//$_SESSION["LoginSystem"] = "Succeed";
		
	// }

 ?>