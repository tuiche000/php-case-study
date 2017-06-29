<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/6/28
 * Time: 18:14
 */
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$Title$</title>
</head>
<body>
<form action="edituser.php" method="post">
    <input type="text" name="username">用户名
    <input type="password" name="password">密码
    <input type="hidden" name="id" value="<?php echo $id?>">
    <input type="reset">
    <input type="submit" value="提交">
</form>
</body>
</html>