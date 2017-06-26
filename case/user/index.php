<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/6/27
 * Time: 2:27
 */

//连接数据库
include('../mysql_config.php');

//查询数据
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
if(! $result){
    die('无法读取数据: ' . mysqli_error($conn));
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{ text-align: center;}
        table{ width: 700px; margin: 0 auto; }
    </style>
</head>
<body>
<h2>用户管理 | <a href="">添加用户</a></h2>
<hr>
<table border="1px">
    <tr>
        <th>用户编号</th>
        <th>用户名</th>
        <th>密码</th>
        <th>注册时间</th>
        <th>修改</th>
        <th>删除</th>
    </tr>
    <?php

        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['username']}</td>";
            echo "<td>{$row['password']}</td>";
            echo "<td>{$row['time']}</td>";
            echo "<td><a href=''><button>修改</button></a></td>";
            echo "<td><a href=''><button>删除</button></a></td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>


