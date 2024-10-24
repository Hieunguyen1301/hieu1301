<?php
//luu thong tin san pham vao session
//$_SESSION['cart']['id']=qty
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //kiem tra gio hang da co san pham $id chua?
    if (isset($_SESSION['cart'][$id])) {
        //neu co tang so luong len 1
        $_SESSION['cart'][$id] += 1;
    } else {
        //neu chua, so luong = 1
        $_SESSION['cart'][$id] = 1;
    }
} else {
    header('location:index.php');
}
var_dump($_SESSION['cart']);
header('location:addcart.php');
