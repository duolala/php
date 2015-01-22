<?php 
//连库
//字符集
require_once('config.php');
 $mysqli = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);
 $mysqli->set_charset('utf8');
 date_default_timezone_set('PRC');
?>