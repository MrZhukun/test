<?php 
header('content-type:text/html;charset=utf8');
session_start();
require_once './config/conf.php';
require_once './common/function.php';
$link=mysqllink($conf['host'],$conf['username'],$conf['pwd'],$conf['dbname']);
if(isset($_POST['username'])) {
	$query="INSERT INTO `user` VALUES('{$_POST['username']}','{$_POST['pwd']}','{$_POST['ID']}','{$_POST['sex']}')";
	mysqli_query($link,$query);
}
$array=selectall($link,'user');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<td>用户名</td>
			<td>密码</td>
			<td>性别</td>
			<td>身份证</td>
			<td>id</td>
		<?php if(count($array)!=0){foreach($array as $key => $value){?>
			<tr>
				<td><?php echo $value['username']?></td>
				<td><?php echo $value['pwd']?></td>
				<td><?php echo $value['ID']?></td>
				<td><?php echo $value['sex']?></td>
			</tr>
		<?php }}?>
	</tr>
	</table>	
</body>
</html>