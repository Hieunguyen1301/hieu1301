<?php
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('location:addcart.php');
}
unset($_SESSION['cart'][$id]);
header('location:addcart.php');
