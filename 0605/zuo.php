<?php 
$a=100;
function  test(&$a){
	$a=200;
}
test($a);
echo  $a;
//结果是100，变量作用域的限制
//加入&符，是传地址
 ?>


 <?php 
$a=1;
class test{
	$b=2;
}






  ?>