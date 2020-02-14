<!DOCTYPE html>
<html>
    <body>
         <div class="panel panel-default nn-panel-login">
             <div class="panel-heading">TÀI KHOẢN</div>
             <div class="panel-body">
                <div class="form-group">
                    <img class="img-circle" style="width: 230px; height: 150px" src='<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>'>
                    <br>
                    <h5 class="text-center">
                    <?= $_SESSION['user']['ho_ten']?></h6>
                </div>
                <li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
                <li><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
                <?php
                    if($_SESSION['user']['vai_tro'] == TRUE){
                        echo "<li><a href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                    }
                ?>
            </div>
        </div>        
    </body>
</html>
