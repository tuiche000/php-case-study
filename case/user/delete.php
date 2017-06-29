<?php
/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/6/28
 * Time: 17:02
 */
//连接数据库
include('../mysql_config.php');

//删除数据
$sql = "DELETE FROM users WHERE id={$_GET['id']}";

mysqli_query($conn,$sql);

mysqli_close($conn);

echo "<script>window.location.href='index.php';</script>";



?>
