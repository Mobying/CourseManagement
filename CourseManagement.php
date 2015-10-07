<html>

<head>
<style type="text/css">
div#container{width:100%}
div#header {background-color:#6A6AFF;height:110px;}
div#menu {background-color:#87CEEB;height:100%;width:10%;float:left;}
div#content{background-color:#E6E6FA;height:100%;width:90%; display:table;}
div#innercon{background-color:#E6E6FA;display:table-cell;vertical-align:middle;text-align:center;}//垂直水平居中
</style>
</head>

<body>

<div id="header"> <img src="header.PNG" width=100% height=110px; /> </div>

<div id="menu"> <img src="menu.PNG" width=100% height=100%; /></div>

<div id="content">
<div id="innercon">
<?php
$serverName="127.0.0.1,1433"; //数据库地址和端口
$database="school"; //数据库名称
$uid="sa"; //用户名
$pwd="sa"; //密码
try {
$conn = new PDO( "sqlsrv:server=$serverName;Database = $database", $uid, $pwd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} 
catch( PDOException $e ) {
die( "Error connecting to SQL Server".$e );
} 
echo "Connected to SQL Server\n";
//SQL语句 
$query = 'select * from teacher';
//$query = iconv("utf-8", "gbk", $query);
$stmt = $conn->query( $query );
while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){
print_r( $row );
} 
// Free statement and connection resources.
$stmt = null;
$conn = null;
?>
</div>
</div>

</body>

</html>