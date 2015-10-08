<?php
//php连接mysql数据库
$host = '127.0.0.1';//服务器地址
$user = 'root';//数据库用户名
$pwd = '123456';//数据库密码

$conn = mysql_connect($host,$user,$pwd);
if($conn == false){
	echo "连接数据库失败！";
}else{
	echo "连接数据库成功！！！";
}
?>
