<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/6/25
 * Time: 17:10
 */

//日历
$day = 31;

echo '<table border="1px">';

for($i = 1; $i <= $day;){
    echo '<tr>';
    for($j = 1; $j <= 7; $j++){
        if($i > $day){
            echo '<td>&nbsp;</td>';
        }else{
            echo '<td>' .$i . '</td>';
        }
        $i++;
    }
    echo '</tr>';
}

echo '</table>';