<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3 class="alert alert-danger">ĐĂNG NHẬP</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="dang-nhap.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control" value="<?=$ma_kh?>">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" class="form-control" value="<?=$mat_khau?>">
            </div>
            <div class="form-group">
                <label class="radio-inline">
                    <input name="ghi_nho" type="checkbox" checked>
                    Ghi nhớ tài khoản?
                </label>
            </div>
            <div class="form-group">
                <button name="btn_login" class="btn btn-default">Đăng nhập</button>
            </div>
        </form>
    </body>
</html>
