<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/6/25
 * Time: 17:29
 */

//递归
$num = 100;

function sum($num){
    static $result;
    if($num >= 1){
        $result += $num;
        return sum(--$num);
    }else{
        return $result;
    }
};

echo sum($num);

