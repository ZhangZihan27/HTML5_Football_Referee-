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
	echo"建立连接OK!<br>";
}

// some code
//创建数据库
// if (mysql_query("CREATE DATABASE FTR",$con))
//   {
//   echo "Database created";
//   }
// else
//   {
//   echo "Error creating database: " . mysql_error();
//   }

// //选择数据库
$myDb = mysql_select_db("FTR");
if($myDb){
	echo"数据库选择OK！<br>";
}

// //添加表
// $sql = "CREATE TABLE users1 
// (
// ID int NOT NULL AUTO_INCREMENT, 
// PRIMARY KEY(ID),
// username varchar(15),
// password varchar(15)
// )";
// if(mysql_query($sql,$con)){
// 	echo"添加表成功！<br>";
// }


//插入数据
// $data1 = mysql_query("insert into name(FirstName, LastName, Age)
// 	values('zhao','sen','20')");
// $data2 = mysql_query("insert into name(FirstName, LastName, Age)
// 	values('zhao','miao','14')");
// if($data1){
// 	echo"插入数据1";
// }
// if($data2){
// 	echo "插入数据2";
// }

 //echo $_POST['id'];

$data3 = mysql_query("insert into users1(username, password)
	values('$_POST[username]','$_POST[password]')");
if($data3){
	echo "插入数据成功";
}

// $id = $_GET['id'];
// //获取数据
// $result = mysql_query("SELECT * FROM name WHERE personID=$id");
// //$result = mysql_query("SELECT * FROM name ");
// $row = mysql_fetch_array($result);
// //echo $row['FirstName'].$row['LastName'].$row['Age'];
// echo"<p>".$row['FirstName'].$row['LastName'].$row['Age']."</p>";
mysql_close($con);

//返回html
echo "<a href='../index.html'>返回</a>";

?>