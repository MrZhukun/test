<?php 
session_start();
require_once './config/conf.php';
require_once './common/function.php';
$link=mysqllink($conf['host'],$conf['username'],$conf['pwd'],$conf['dbname']);
$array=selectall($link,'user');
?>
<!-- 登录界面 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<tr>
	<form action="save.php" method="post">
		<td>用户名</td>
		<input type="text" name="username"><br/>
		<td>密&nbsp&nbsp&nbsp码</td>
		<input type="password" name="pwd"><br/>
		<img src="yanzhenma.php"><br />
		<input type="submit" value="确认">
		<input type="text">
		</tr>
	</form>
</body>
</html>