<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/6/28
 * Time: 17:23
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加用户</title>
</head>
<body>
<form action="adduser.php" method="post">
    <input type="text" name="username">用户名
    <input type="password" name="password">密码
    <input type="hidden" name="time">
    <input type="reset">
    <input type="submit" value="提交">
</form>
</body>
</html>