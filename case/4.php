<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/6/25
 * Time: 18:00
 */

/*
万年历
1.几年几月几日
2.周日-周六
3.一号是星期几
4.这个月有多少天
5.下一年和上一年
6.下一月和上一月
*/



//修改页面编码
header("content-type:text/html;charset=utf-8");

//屏蔽Notice错误
error_reporting(E_ALL^E_NOTICE);

//获取当前年
$year = $_GET['y'] ? $_GET['y'] : date('Y');

//获取当前月
$month = $_GET['m'] ? $_GET['m'] : date('m');

//获取当前月有多少天
$w = strtotime("{$year}-{$month}-1");
$days = date('t',$w);

//当前一号是周几
$week = date('w',$w);

//所有内容剧中
echo "<center>";

//输出表头
echo "<h2>{$year}年{$month}月</h2>";

//输入日期表格
echo "<table width='700px' border='1px'>";

echo "<tr>";
echo "<th>周一</th>";
echo "<th>周二</th>";
echo "<th>周三</th>";
echo "<th>周四</th>";
echo "<th>周五</th>";
echo "<th>周六</th>";
echo "<th>周日</th>";
echo "</tr>";

//铺表格
for($i = 1-$week+1; $i <= $days;){
    echo '<tr>';
    for($j = 0; $j < 7; $j++){
        if($i > $days || $i < 1){
            echo '<td>&nbsp;</td>';
        }else{
            echo "<td>{$i}</td>";
        }
        $i++;
    };
    echo '</tr>';
}

echo "</table>";

//实现上一年和上一月
if($month == 1){
    $prevyear = $year-1;
    $prevmonth = 12;
}else{
    $prevyear = $year;
    $prevmonth = $month-1;
}
if($month == 12){
    $nextyear = $year+1;
    $nextmonth = 1;
}else{
    $nextyear = $year;
    $nextmonth = $month+1;
}


//输出上一月和下一月的按钮
echo "<h2><a href='4.php?y={$prevyear}&m={$prevmonth}'>上一月</a>|<a href='4.php?y={$nextyear}&m={$nextmonth}'>下一月</a></h2>";

echo "</center>";

?>
