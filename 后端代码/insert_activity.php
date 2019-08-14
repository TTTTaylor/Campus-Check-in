<?php
//注册，接受信息，返回true或false
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
$sql = "INSERT INTO activity 
(user_id, activity_id, activity_name,activity_caption,activity_detail,activity_person,start_time,end_time
,if_photo,if_location,if_face)
VALUES ('$_POST[user_id]', '$_POST[activity_id]', '$_POST[activity_name]', '$_POST[activity_name]'
, '$_POST[activity_caption]', '$_POST[activity_detail]', '$_POST[activity_person]', '$_POST[start_time]'
, '$_POST[end_time]', '$_POST[if_photo]', '$_POST[if_location]', '$_POST[if_face]')";

$result = $conn->query($sql);

if ($result)
	echo "t";
else
	echo "f";
?>