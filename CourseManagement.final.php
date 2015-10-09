<html>
<head>
<style type="text/css">
div#container{width:100%}
div#header {background-color:#6A6AFF;height:110px;}
div#menu {background-color:#87CEEB;height:100%;width:10%;float:left;}
div#content{background-color:#E6E6FA;height:100%;width:90%; display:table;}
div#innercon{background-color:#E6E6FA;display:table-cell;text-align:center;}//垂直水平居中
</style>
</head>
<body>
<div id="header"> <img src="header.PNG" width=100% height=110px; /> </div>
<div id="menu"> <img src="menu.PNG" width=100% height=100%; /></div>
<div id="content">
  <div id="innercon">
    <table width="80%"  border="1" cellpadding="1" cellspacing="1" align="center" text-align="center">
      <h1 style="font-size:30px;color:lightskyblue;">2015&nbsp&nbsp教&nbsp&nbsp师&nbsp&nbsp开&nbsp&nbsp课&nbsp&nbsp计&nbsp&nbsp划</h1>
      <tr align="center">
        <th width="5%">年级</th>
        <th width="15%">专业</th>
        <th width="5%">专业人数</th>
        <th width="20%">课程名称</th>
        <th width="15%">选修类型</th>
        <th width="5%">学分</th>
        <th width="5%">学时</th>
        <th width="5%">实验学时</th>
        <th width="5%">上机学时</th>
        <th width="5%">起讫周序</th>
        <th width="5%">任课教师</th>
        <th width="5%">备注</th>
      </tr>
      <?php
	  mysql_connect('localhost','root','123456');
	  mysql_select_db('coursemanagement');
	  mysql_query("SET NAMES utf8");
	  $sql = "select * from course";
	  $result = mysql_query($sql);
	  while($row = mysql_fetch_array($result)){
	  echo '<tr align="center">';
	  echo "<td>" . $row['年级'] . "</td>";
	  echo "<td>" . $row['专业'] . "</td>";
	  echo "<td>" . $row['专业人数'] . "</td>";
	  echo "<td>" . $row['课程名称'] . "</td>";
	  echo "<td>" . $row['选修类型'] . "</td>";
	  echo "<td>" . $row['学分'] . "</td>";
	  echo "<td>" . $row['学时'] . "</td>";
	  echo "<td>" . $row['实验学时'] . "</td>";
	  echo "<td>" . $row['上机学时'] . "</td>";
	  echo "<td>" . $row['起讫周序'] . "</td>";
	  echo "<td>" . $row['任课教师'] . "</td>";
	  echo "<td>" . $row['备注'] . "</td>";
	  echo "</tr>";
	  }
	  mysql_close();
	  ?>
    </table>
  </div>
</div>
</body>
</html>