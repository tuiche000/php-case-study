<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/6/29
 * Time: 17:21
 */
//连接数据库
include('../mysql_config.php');

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

//修改数据
$sql = "UPDATE users SET username='{$username}', password='{$password}' WHERE id={$id}";

if ($conn->query($sql) === TRUE) {
    echo "修改成功";
} else {
    exit( "Error: " . $sql . "<br>" . $conn->error );
}

echo "<script>window.location.href='index.php';</script>";




?>
