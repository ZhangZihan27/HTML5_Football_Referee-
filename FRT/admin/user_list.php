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

if(@$_AJAX['do']){
	$a = @$_POST['id'];
	mysql_query("DELETE FROM ftr_users WHERE userid='$a'");

}
//获取数据
$result = mysql_query("SELECT * FROM ftr_users ");

while ($row = mysql_fetch_array($result)) {
	echo "<tr><td id='id'>".$row['userid']."</td><td>".$row['username']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['date']."</td><td>
	<a href='' id='del' >删除</a></td></tr>";
}

mysql_close($con);

?>