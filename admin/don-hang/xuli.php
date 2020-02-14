<?php 
require_once "../../global.php";
require_once "../../dao/don-hang.php";

// $db= new DB();
$id = intval(getInput('id'));
// $edit=$db->fetchOne("thanh_toan",$id);
// if( empty($edit)){
// 	$_SESSION['error'] = "Dữ liệu không tồn tại";
// 	redirectAdmin("thanh_toan");
// }
// $status= $edit['trang_thai'] == 0 ? 1: 0;
// $update= $db ->update('trang_thai',array("trang_thai" => $status), array("ma_TT" => $id ));
// if($update >0){
// 	$_SESSION['success']="Cập nhập thành công";
// 	redirectAdmin("thanh_toan");
// }else{
// 	$_SESSION['error']="Dữ liệu không thay đổi";
// 	redirectAdmin("thanh_toan");
// }
$edit=thanh_toan_select_by_id($id);
// echo "<pre/>";
// var_dump($edit);
foreach ($edit as $key => $value) {
	extract($value);
	// echo $ma_TT;
	// echo $trang_thai;
if ($trang_thai==0) {
		$update=thanh_toan_update($ma_TT,$trang_thai);
		$_SESSION['massages']="Đã xử lí đơn hàng ". $ma_TT;
		header("location:index.php");
}
else
$_SESSION['massages']= "Đơn hàng ".$ma_TT." đã xử lí rồi!";
header("location:index.php");
}
?>