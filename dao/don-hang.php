<?php 
require_once 'pdo.php';
function don_hang_delete($ma_TT){
    $sql = "DELETE FROM thanh_toan WHERE ma_TT=?";
    if(is_array($ma_TT)){
        foreach ($ma_TT as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_TT);
    }
}
function ct_don_hang_delete($ma_TT){
    $sql = "DELETE FROM don_hang WHERE ma_TT=?";
    if(is_array($ma_TT)){
        foreach ($ma_TT as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_TT);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function don_hang_select_all(){
    $sql = "SELECT * FROM thanh_toan";
    return pdo_query($sql);
}

/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function don_hang_select_by_id($ma_TT){
    $sql = "SELECT * FROM don_hang WHERE ma_TT=?";
    return pdo_query($sql, $ma_TT);
} 
function thanh_toan_select_by_id($ma_TT){
    $sql = "SELECT * FROM thanh_toan WHERE ma_TT=?";
    return pdo_query($sql, $ma_TT);
} 
function thanh_toan_update($ma_TT,$trang_thai){
    $sql = "UPDATE thanh_toan SET trang_thai=1 WHERE ma_TT='$ma_TT'";
    pdo_execute($sql,$trang_thai);
}