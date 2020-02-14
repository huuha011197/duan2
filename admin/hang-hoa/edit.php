<!DOCTYPE html>
<html>
    <body>
        <h3 class="alert alert-success">QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <div class="form-group">
                    <label>MÃ HÀNG HÓA</label>
                    <input  class="form-control" name="ma_hh" readonly value="<?=$ma_hh?>">
                </div>
                <div class="form-group">
                    <label>TÊN HÀNG HÓA</label>
                    <input class="form-control" name="ten_hh" value="<?=$ten_hh?>">
                </div>
                <div class="form-group">
                    <label>ĐƠN GIÁ</label>
                    <input class="form-control" name="don_gia" value="<?=$don_gia?>">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>GIẢM GIÁ</label>
                    <input class="form-control" name="giam_gia" value="<?=$giam_gia?>">
                </div>
                <div class="form-group">
                    <label>HÌNH ẢNH</label>
                    <input name="up_hinh" type="file">
                    <input name="hinh" type="hidden" value="<?=$hinh?>"> (<?=$hinh?>)
                </div>
                <div class="form-group">
                    <label>LOẠI HÀNG</label>
                    <select name="ma_loai">
                        <?php
                            foreach ($loai_select_list as $loai) {
                                if($loai['ma_loai'] == $ma_loai){
                                    echo '<option selected value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                }
                                else{
                                    echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div>
                        <label class="radio-inline"><input name="dac_biet" value="0" type="radio" <?=$dac_biet?'':'checked'?>>Đặc biệt</label>
                        <label class="radio-inline"><input name="dac_biet" value="1" type="radio"<?=$dac_biet?'checked':''?>>Bình thường</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>NGÀY NHẬP</label>
                    <input class="form-control" name="ngay_nhap" value="<?=$ngay_nhap?>">
                </div>
                <div class="form-group">
                    <label>SỐ LƯỢC XEM</label>
                    <input class="form-control" name="so_luot_xem" readonly value="0" value="<?=$so_luot_xem?>">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>MÔ TẢ</label>
                    <textarea class="form-control" rows="5" name="mo_ta" rows="4"><?=$mo_ta?></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-default"name="btn_update">Cập nhật</button>
                    <button  class="btn btn-default" type="reset">Nhập lại</button>
                    <a href="index.php">Thêm mới</a>
                    <a href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
</html>
