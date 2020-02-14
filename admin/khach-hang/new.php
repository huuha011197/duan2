<!DOCTYPE html>
<html>
    <body>
        <h3 class="alert alert-success">QUẢN LÝ KHÁCH HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div>
                <div class="form-group">
                    <label>MÃ KHÁCH HÀNG</label>
                    <input class="form-control" name="ma_kh">
                </div>
                <div class="form-group">
                    <label>HỌ VÀ TÊN</label>
                    <input class="form-control" name="ho_ten">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>MẬT KHẨU</label>
                    <input class="form-control" name="mat_khau" type="password">
                </div>
                <div class="form-group">
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input class="form-control" name="mat_khau2" type="password">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>ĐỊA CHỈ EMAIL</label>
                    <input class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>HÌNH ẢNH</label>
                    <input  class="form-control" name="hinh" type="file">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label>KÍCH HOẠT?</label>
                    <div>
                        <label><input name="kich_hoat" value="0" type="radio">Chưa kích hoạt</label>
                        <label><input name="kich_hoat" value="1" type="radio" checked>Kích hoạt</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>VAI TRÒ</label>
                    <div>
                        <label><input name="vai_tro" value="0" type="radio">Khách hàng</label>
                        <label><input name="vai_tro" value="1" type="radio" checked>Nhân viên</label>
                    </div>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <button class="btn btn-default" name="btn_insert">Thêm mới</button>
                    <button class="btn btn-default" type="reset">Nhập lại</button>
                    <a href="index.php?btn_list">Danh sách</a>
                </div>
            </div>
        </form>
    </body>
</html>
