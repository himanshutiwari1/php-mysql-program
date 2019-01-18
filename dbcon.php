<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("clickpick");
function foemet($str){
	$r = addslashes(strip_tags(trim($str)));
	return $r;
}
?>