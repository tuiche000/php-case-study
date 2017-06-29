<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/6/27
 * Time: 2:41
 */


//链接数据库
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "user";

// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}


