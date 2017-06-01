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
//插入数据

$a = @$_POST['name'];
$b = @$_POST['sort'];
$c = @$_POST['content'];
$time = date("Y-m-d H:i:s");
echo $a;
echo $b;
echo $c;
if($a&&$b&&$c){
	$sql = mysql_query("INSERT INTO course_txt (txtname,txtsort,date,content) 
VALUES ('$a','$b','$time','$c')");

}

// $sql = mysql_query("INSERT INTO ftr_managers (managerid,managername,password,name,telnum,date) 
// VALUES (6,'$a','$b','$c','$d','$time')");

if($sql){
	echo "OK";
}

//获取数据
// $result = mysql_query("SELECT * FROM ftr_managers");
// if($result){
// 	//echo mysql_fetch_array($result);
// }else{
// 	//echo "shibai";
// }

// while ($row = mysql_fetch_array($result)) {
// 	echo "<tr><td id='delName'>".$row['managername']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['date']."</td><td>
// 	<a href='' id='del'>删除</a></td></tr>";
// }
mysql_close($con);

?>