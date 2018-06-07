<?php 
header('content-type:text/html;charset=utf-8');
@mysql_connect('127.0.0.1','root','root');
mysql_select_db('leave');
mysql_query('set names utf8');

$name=$_POST['name'];
$content=$_POST['content'];

$sql="insert into user (`name`,`content`) values ('$name','$content')";
$res=mysql_query($sql);
if($res){
    echo  "<script>alert('添加成功');location.href='show.php'</script>";
}else{
	echo  "<script>alert('添加失败');location.href='add.php'</script>";
}
 ?>