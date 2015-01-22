<?php 
session_start();
if(!empty($_GET["AdminAction"])) {
	OutLogin();
}else {
	Login();
}

function Login() {
	if(empty($_SESSION["AdminName"])) {
		echo "您还没有登录或登录已超时，请<a href='AdminLogin.php' target='_parent'><font color='red'>返回登录</font></a>!";
		exit();
	}
}
function OutLogin() {
	session_destroy();
	echo "<script language=javascript>top.location.replace('AdminLogin.php');</script>";
}

 ?>