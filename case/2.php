<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/6/25
 * Time: 17:20
 */

//九九乘法表
for($i = 1; $i <= 9; $i++){

    for($j = 1; $j <=$i; $j++){
        echo $j .'*' .$i .'=' .($j*$i);
        echo ' ';
    }

    echo "<br>";

}