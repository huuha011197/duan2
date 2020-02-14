<!DOCTYPE html>
<html>
    <body>
        <div class="panel panel-default nn-panel-login">
             <div class="panel-heading">TÀI KHOẢN</div>
            <div class="panel-body">
                <form action="<?=$SITE_URL?>/tai-khoan/dang-nhap.php" method="post">
                    <div class="form-group">
                        <div>Tên đăng nhập</div>
                        <input class="form-control"name="ma_kh" value="<?=$ma_kh?>">
                    </div>
                    <div class="form-group">
                        <div>Mật khẩu</div>
                        <input class="form-control"name="mat_khau" type="password" value="<?=$mat_khau?>">
                    </div>
                    <div class="form-group">
                        <div>
                            <label class="checkbox-inline">
                                <input name="ghi_nho" type="checkbox" checked>
                                Ghi nhớ tài khoản?
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" name="btn_login">Đăng nhập</button>
                    </div>
                    <div>
                        <li><a href="<?=$SITE_URL?>/tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
                        <li><a href="<?=$SITE_URL?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
                    </div>
                </form>        
            </div>
        </div>        
    </body>
</html>
