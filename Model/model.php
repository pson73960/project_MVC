<?php
class model{
    public function getList(){
        $db=new connect_database();
        $str="select * from Imfomation";
        $r=$db->getList($str);
        return $r;
    }
    public function getByID($id){
        $db=new connect_database();
        $str="select * from Imfomation where id='$id'";
        $r=$db->getInstance($str);
        return $r;
    }
    public function login($user,$pass){
        $db=new connect_database();
        $str="select * from user where user='$user' and password='$pass'";
        $r=$db->getList($str);
        return $r;
    }
    public function insert($name,$price,$image,$nxx,$sl){
        $db=new connect_database();
        $str="insert into Imfomation(name,price,image,NXX,SL) values ('$name','$price','$image','$nxx','$sl')";
        $r=$db->getInsert($str);
        return $r;
    }
}
