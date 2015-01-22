<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
require_once("connect.php");
$mysqli = new mysqli("115.29.9.163","root","5324180","ameav");
$mysqli->set_charset('utf8');
date_default_timezone_set('PRC');

$result = $mysqli->query("SELECT
Ameav_Admin.ID,
Ameav_Admin.AdminName,
Ameav_Admin.`Password`,
Ameav_Admin.UserName,
Ameav_Admin.AdminPurview,
Ameav_Admin.Working,
Ameav_Admin.LastLoginTime,
Ameav_Admin.LastLoginIP,
Ameav_Admin.`Explain`,
Ameav_Admin.AddTime
FROM
Ameav_Admin");

	while ($row = $result->fetch_assoc()) {
        echo $row["AdminName"];
        echo "<hr />";
        echo $row["Password"];
    }

 ?>
</body>
</html>