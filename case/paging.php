<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/7/2
 * Time: 15:39
 */

include "user/public/mysql.inc.php";
include "user/class/Model.class.php";
include "user/class/paging.class.php";

$m=new model('user1');

$rows = $m->field('*')->where('id>1')->order('id desc')->select();
echo '<pre>';
print_r($rows);
echo '</pre>';



exit();

$sql = "SELECT COUNT(*) FROM user1";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_row($result);

$page = new paging($row[0],2);


//输出每页数据
$sqlUser = "select * from user1 order by id {$page->limit}";
$resultUser = mysqli_query($conn,$sqlUser);
while ($rowUser = mysqli_fetch_row($resultUser)){
    print_r($rowUser[1]);
    echo "<br>";
}
$page->show();






