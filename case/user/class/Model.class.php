<?php

/**
 * Created by PhpStorm.
 * User: Rare
 * Date: 2017/7/7
 * Time: 12:08
 */

//封装数据库
class Model
{
    var $tname;
    var $field;
    var $where;
    var $order;
    var $conn;

    function __construct($tname)
    {
        $this->tname = $tname;
        $this->conn = mysqli_connect(HOST,USER,PASS);
        mysqli_select_db($this->conn,DBNAME);
        mysqli_query($this->conn,"set names utf8");
    }

    function field($field){
        $this->field = $field;
        return $this;
    }
    function where($where){
        $this->where = 'where ' .$where;
        return $this;
    }
    function order($order){
        $this->order = 'order by ' .$order;
        return $this;
    }
    function select(){
        $sql = "select {$this->field} from {$this->tname} {$this->where} {$this->order}";
        $ret = mysqli_query($this->conn,$sql);
        while ($row = mysqli_fetch_assoc($ret)){
            $rows[]=$row;
        };
        return $rows;

    }



}

