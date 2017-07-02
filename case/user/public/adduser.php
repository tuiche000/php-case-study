<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/6/28
 * Time: 17:02
 */
//连接数据库
include('mysql_config.php');

$username = $_POST['username'];
$password = $_POST['password'];
$time = time();
echo $time;

//添加数据
$sql = "INSERT INTO users (username,password,time) VALUE ('{$username}','{$password}','{$time}')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    exit( "Error: " . $sql . "<br>" . $conn->error );
}

echo "<script>window.location.href='../../../../index.php';</script>";



?>
