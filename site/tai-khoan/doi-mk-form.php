<!DOCTYPE html>
<html>
<style type="text/css">
    label {
    }
    form div {
        margin: 5px;
    }
</style>
    <body>
        <h3 class="alert alert-danger">ĐỔI MẬT KHẨU</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="doi-mk.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input class="form-control" name="ma_kh">
            </div>
            <div class="form-group">
                <label>Mật khẩu cũ</label>
                <input class="form-control" name="mat_khau" type="password">
            </div>
            <div class="form-group">
                <label>Mật khẩu mới</label>
                <input class="form-control" name="mat_khau2" type="password">
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu mới</label>
                <input class="form-control" name="mat_khau3" type="password">
            </div>
            <div class="form-group">
                <button class="btn btn-default" name="btn_change">Đổi mật khẩu</button>
            </div>
        </form>
    </body>
</html>
