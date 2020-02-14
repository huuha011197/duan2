<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3 class="alert alert-success">QUẢN LÝ HÀNG HÓA</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>MÃ HÀNG HÓA</label>
                    <input name="ma_hh" class="form-control" readonly value="auto number">
                </div>
                <div class="form-group col-sm-4">
                    <label>TÊN HÀNG HÓA</label>
                    <input name="ten_hh" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <label>ĐƠN GIÁ</label>
                    <input name="don_gia" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>GIẢM GIÁ</label>
                    <input name="giam_gia" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <label>HÌNH ẢNH</label>
                    <input name="hinh" type="file" class="form-control">
                </div>
                <div class="form-group col-sm-4">
                    <label>LOẠI HÀNG</label>
                    <select name="ma_loai" class="form-control">
                        <?php
                            foreach ($loai_select_list as $loai) {
                                echo '<option value="'.$loai['ma_loai'].'">'.$loai['ten_loai'].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-4">
                    <label>HÀNG ĐẶC BIỆT?</label>
                    <div class="form-control">
                        <label class="radio-inline"><input name="dac_biet" value="0" type="radio">Đặc biệt</label>
                        <label class="radio-inline"><input name="dac_biet" value="1" type="radio" checked>Bình thường</label>
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <label>NGÀY NHẬP</label>
                    <input name="ngay_nhap" class="form-control datepicker">
                </div>
                <div class="form-group col-sm-4">
                    <label>SỐ LƯỢC XEM</label>
                    <input name="so_luot_xem" readonly value="0" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-12">
                    <label>MÔ TẢ</label>
                    <textarea name="mo_ta" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group col-sm-12">
                    <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                    <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
</html>
