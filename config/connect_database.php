<?php
class connect_database{
//    public $host= DB_HOST;
//    public $user=DB_USER;
//    public $pass=DB_PASS;
//    public $dbname=DB_NAME;
//    public $link;
//    public $error;
//    public function connect_db(){
//        $this->link=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
//        if ($this->link){
//            $this->error="Connect fail".$this->link->connect_error;
//            return false;
//       }
//  }

var $db=null;
function __construct(){
    $dsn="mysql:host=localhost;dbname=game";
    $user="root";
    $pass="";
    $this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

}
function getList($select){
    $result=$this->db->query($select);
    return $result;
}
function getInstance($select){
    $result=$this->db->query($select);
    //$result=$result->fetch();
    return $result;
}

//public $conn= "";
//    function db_connect(){
//        global $conn;
//        if (!$conn){
//            $conn = mysqli_connect('localhost', 'root', 'abc', 'Imfomation')
//            or die ('Không thể kết nối CSDL');
//            mysqli_set_charset($conn, 'UTF-8');
//        }
//    }

}