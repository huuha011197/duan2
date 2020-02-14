 <?php 
require '../../global.php';
require '../../dao/hang-hoa.php';
if (!isset($_SESSION['user'])) {
	echo "<script>alert('Đăng nhập để thực hiện chức năng này'); location.href='http://localhost/xshop/site/hang-hoa/liet-ke.php'</script>";
	# code...
}else{
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
$smtm = pdo_get_connection()->prepare("SELECT * from hang_hoa where ma_hh=$id");
		$smtm -> execute();
		$product = $smtm ->fetch();
//kiem tra session
if (isset($_SESSION["cart"])) {
	if (isset($_SESSION["cart"][$id]['qty'])) {
		$_SESSION['cart'][$id]['qty'] +=1;
	}
	else{
		$_SESSION['cart'][$id]['qty'] =1;
	}
	$_SESSION["cart"] [$id]["name"] =$product['ten_hh'];
	$_SESSION["cart"] [$id]["don_gia"] =$product['don_gia'];
	$_SESSION["cart"] [$id]["giam_gia"] =$product['giam_gia'];
	$_SESSION['success'] = 'Đã thêm vào giỏ hàng';
	header("location:../hang-hoa/liet-ke.php"); exit();
}else{
	$_SESSION["cart"] [$id]["qty"] = 1;
	$_SESSION["cart"] [$id]["name"] =$product['ten_hh'];
	$_SESSION["cart"] [$id]["don_gia"] =$product['don_gia'];
	$_SESSION["cart"] [$id]["giam_gia"] =$product['giam_gia'];
	$_SESSION['success'] = 'Tạo mới giỏ hàng thàng công';
	header("location:../hang-hoa/liet-ke.php"); exit();
}
}