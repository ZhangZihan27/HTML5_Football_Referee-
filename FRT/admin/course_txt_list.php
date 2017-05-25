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


// $sql = mysql_query("INSERT INTO ftr_managers (managerid,managername,password,name,telnum,date) 
// VALUES (6,'$a','$b','$c','$d','$time')");

// if($sql){
// 	//echo "插入数据成功";
// }

//获取数据
$result = mysql_query("SELECT * FROM course_txt");
if($result){
	echo "success";
}else{
	echo "no";
}

while ($row = mysql_fetch_array($result)) {
	echo "<tr><td id='delName'>".$row['txtname']."</td><td>".$row['txtsort']."</td><td>".$row['date']."</td><td>".$row['content']."</td><td>
	<a href='' id='del'>删除</a></td></tr>";
}
mysql_close($con);

?>