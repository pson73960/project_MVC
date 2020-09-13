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
        $str="select * from Imfomation where id like '%$id%'";
        $r=$db->getInstance($str);
        return $r;
    }
}
