<!DOCTYPE html>
<html>
<style type="text/css">
    label {
        width: 120px;
    }
    form div {
        margin: 5px;
    }
</style>
    <body>
        <div class="alert alert-danger">
            <h3>Đăng ký thành viên</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-ky.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input class="form-control" name="ma_kh" value="<?=$ma_kh?>">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input  class="form-control" name="mat_khau" type="password" value="<?=$mat_khau?>">
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu</label>
                <input class="form-control" name="mat_khau2" type="password" value="<?=$mat_khau2?>">
            </div>
            <div class="form-group">
                <label>Họ và tên</label>
                <input class="form-control" name="ho_ten" value="<?=$ho_ten?>">
            </div>
            <div class="form-group">
                <label>Địa chỉ email</label>
                <input class="form-control" name="email" value="<?=$email?>">
            </div>
            <div class="form-group">
                <label>Hình</label>
                <input name="up_hinh" type="file">
            </div>
            <div class="form-group">
                <button class="btn btn-default" name="btn_register">Đăng ký</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
        </form>
    </body>
</html>
