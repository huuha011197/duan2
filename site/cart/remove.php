<?php
session_start();
$key = isset($_GET['key']) ? (int)$_GET['key']: '';
if($key){
	if(array_key_exists($key,$_SESSION['cart'])){
		unset($_SESSION['cart'][$key]);
		$_SESSION['gh'] = 'xoa thanh cong';
	}
}
header("location:../cart/list-cart.php"); exit();
?>