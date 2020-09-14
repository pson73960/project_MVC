<?php
include '../config/connect_database.php';
include '../Model/model.php' ;
session_start();
$n=new model();

$id=$_GET["id"];
$r=$n->getByID($id);
$set=$r->fetch();
if (isset($id)&&is_numeric($id)){
//$id=isset($_GET['id']) ? $_GET['id'] : '';
    if (isset($_SESSION["cart"])){
        if (isset($_SESSION["cart"][$id])){
        $_SESSION["cart"][$id]["qty"]+=1;
            $_SESSION["success"]="Tồn tại giỏ hàng!Cập nhật mới thành công";
        }
        else{
            $_SESSION["cart"][$id]["qty"]=1;
        }
        $_SESSION["cart"][$id]["name"]=$set["name"];
        $_SESSION["cart"][$id]["image"]=$set["image"];
        $_SESSION["cart"][$id]["price"]=$set["price"];
        $_SESSION["success"]="Đã thêm vào giỏ hàng !!";
        header("Location:index.php");
        exit();
        }
    else{
    $_SESSION["cart"][$id]["qty"]=1;
    $_SESSION["cart"][$id]["name"]=$set["name"];
    $_SESSION["cart"][$id]["image"]=$set["image"];
        $_SESSION["cart"][$id]["price"]=$set["price"];

        $_SESSION["success"]="Đã thêm vào giỏ hàng !!";
        header("Location:index.php");
        exit();
    }}
else{
    echo "<h1>Sản Phẩm Không Tồn Tại</h1>";
}
