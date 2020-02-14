<?php
require "../../global.php";
require "../../dao/don-hang.php";
check_login();
extract($_REQUEST);
if(exist_param("btn_chitiet")){
	$item = don_hang_select_by_id($ma_TT);
$VIEW_NAME = "don-hang/chi-tiet-dh.php";
}
else if(exist_param("btn_delete")){
    try {
    	ct_don_hang_delete($ma_TT);
        don_hang_delete($ma_TT);
        $items = don_hang_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
        $items = don_hang_select_all();
    }
    $VIEW_NAME = "don-hang/quan-li-dh.php";
}
else{
	$items = don_hang_select_all();
	$VIEW_NAME = "don-hang/quan-li-dh.php";
}

require "../layout.php";