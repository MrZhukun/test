<?php
// session_start();
// require_once './config/conf.php';
// require_once './common/function.php';
// $link=mysqllink($conf['host'],$conf['username'],$conf['pwd'],$conf['dbname']);
// $array=selectall($link,'user');
 ?>
<!-- 个人信息表 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人信息表</title>
</head>
<body>
	<tr>
	<form action="people.php" method="post">
		<td>用户名</td>
		<input type="text" name="username"><br/>
		<td>密&nbsp&nbsp&nbsp码</td>
		<input type="password" name="pwd"><br/>
		<td>身&nbsp份&nbsp证</td>
		<input type="password" name="ID"><br/>
		<td>
		<td>性别</td>
		<input type="text" name="sex"><br/>
		<td>
		<input type="radio" name="sex" value="1">男<br /><input type="radio" name="sex" value="0">女<br />
		<input type="submit" value="提交">
		</td>
		</tr>
	</form>
</body>
</html>