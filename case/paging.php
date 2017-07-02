<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/7/2
 * Time: 15:39
 */

include "user/public/mysql_config.php";

$sql = "SELECT COUNT(*) FROM user1";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_row($result);

$total = $row[0];

//每页多少
$lenght = 2;

//总页数
$pagenum = ceil($total/$lenght);

//计算当前页
$page = $_GET['p'] ? $_GET['p']:1;

//计算offset
$offset = ($page-1) * $lenght;

//输出每页数据
$sqlUser = "select * from user1 order by id limit {$offset},{$lenght}";
$resultUser = mysqli_query($conn,$sqlUser);
while ($rowUser = mysqli_fetch_row($resultUser)){
    print_r($rowUser[1]);
    echo "<br>";
}

//计算上一页下一页
$prevpage = $page-1<1 ? 1 : $page-1;
$nextpage = $page+1>$pagenum ? $pagenum : $page+1;
echo "<a href='paging.php?p=$prevpage'>上一页</a>|<a href='paging.php?p=$nextpage'>下一页</a>";





