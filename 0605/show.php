<?php
header('content-type:text/html;charset=utf-8');
@mysql_connect("127.0.0.1","root","root");
mysql_select_db("leave");
$res="SELECT * FROM user";
$arr=mysql_query($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<center>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>名称</th>
			<th>留言板内容</th>
			<th>操作</th>
		</tr>
		<?php while ($data=mysql_fetch_assoc($arr)) {?>
            <tr>
            	<td><?php echo $data['id']?></td>
            	<td><?php echo $data['name']?></td>
            	<td><?php echo $data['content']?></td>
            	<td><a href="delete.php?id=<?php echo $data['id'];?>">删除</a>||<a href="update.php?id=<?php echo $data['id'];?>">修改</a></td>
            </tr>
		<?php }?>
	</table>
</center>	
</body>
</html>