<?php
/**
 * Created by PhpStorm.
 * User: lx
 * Date: 2017/7/2
 * Time: 20:46
 */

//分页面向对象分装
class paging {
    //成员变量
    var $total;
    var $length;
    var $pagenum;
    var $page;
    var $offset;
    var $prevpage;
    var $nextpage;

    //构造函数 ，是一种特殊的方法。主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值，总与new运算符一起使用在创建对象的语句中。
    function __construct($total,$length){
        $this->total = $total;
        $this->length = $length;
        $this->pagenum = ceil($this->total/$this->length);
        $this->page = $_GET['p'] ? $_GET['p']:1;
        $this->offset = ($this->page-1) * $this->length;
        $this->limit = "limit {$this->offset},{$this->length}";
        $this->prevpage();
        $this->nextpage();
    }

    //成员函数
    function prevpage(){
        if($this->page-1<0){
            $this->prevpage = 0;
        }else{
            $this->prevpage = $this->page-1;
        }
    }

    function nextpage(){
        if($this->page+1 > $this->total){
            $this->nextpage = $this->pagenum;
        }else{
            $this->nextpage = $this->page+1;
        }
    }

    function show(){
        echo "<a href='paging.php?p={$this->prevpage}'>上一页</a>|<a href='paging.php?p={$this->nextpage}'>下一页</a>";
    }

}