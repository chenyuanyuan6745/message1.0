<?php 
header('content-type:text/html;charset=utf-8');
@mysql_connect("127.0.0.1","root","root");
mysql_select_db("leave");
$sql="update user set  name='$name' content='$content' where  ";
$res=mysql_query($sql);
if($res){
    echo  "<script>alert('修改成功');location.href='show.php'</script>";
}else{
	echo  "<script>alert('修改失败');location.href='update.php'</script>";
}
 ?>
 ?>