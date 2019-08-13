<?php
//教师注册，接受信息，返回true或false
header("Content-type:text/html;charset=utf-8");    //设置php连接数据库用utf8编码，不然中文乱码
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$conn->query("set names utf8");	//设置php连接数据库用utf8编码，不然中文乱码
$sql = "INSERT INTO teacher (jobnumber, office, name, ftpnumber, ftppassword, phone)
VALUES ('$_POST[jobnumber]', '$_POST[office]', '$_POST[name]', '$_POST[ftpnumber]', '$_POST[ftppassword]', '$_POST[phone]')";

$result = $conn->query($sql);

if ($result)
	echo "t";
else
	echo "f";
?>