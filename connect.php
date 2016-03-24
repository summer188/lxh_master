<?php
$host="111.68.4.194";
$db_user="lxh_f";
$db_pass="root";
$db_name="lxh";
$timezone="Asia/Beijing";

$link=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
mysql_query("SET names UTF8");

header("Content-Type: text/html; charset=utf-8");
?>
