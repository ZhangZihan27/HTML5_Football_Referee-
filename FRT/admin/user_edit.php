<?php
	header("Content-Type: text/html; charset=UTF-8");
// //连接
 $con = mysql_connect("localhost","root","");

// //检测连接
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else{
	//echo"建立连接OK!<br>";
}

// //选择数据库
$myDb = mysql_select_db("FTR");
if($myDb){
	//echo"数据库选择OK！<br>";
}

//修改数据
$a = @$_POST['id'];
$b = @$_POST['username'];
$c = @$_POST['name'];
$d = @$_POST['email'];
$time = date("Y-m-d H:i:s");
echo $a.$b.$c.$d;
$sql = mysql_query("UPDATE ftr_users SET username = '$b',name = '$c',email='$d',date='$time'
WHERE userid = $a");

mysql_close($con);

?>