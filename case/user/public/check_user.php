<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/6/30
 * Time: 19:57
 */

//连接数据库
include('mysql_config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

print_r($row);

if($row){
    echo "登陆成功";
    setcookie("username","$row[$username]",time()+60*60*24);
    setcookie("password","$row[$password]",time()+60*60*24);
}else{
    echo "没用户";
}

mysqli_close($conn);


