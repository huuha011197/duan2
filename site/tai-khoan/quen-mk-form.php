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
            <h3 >Quên mật khẩu</h3>
        </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="quen-mk.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input class="form-control" name="ma_kh">
            </div>
            <div class="form-group">
                <label>Địa chỉ email</label>
                <input class="form-control" name="email">
            </div>
            <div class="form-group">
                <button class="btn btn-default name="btn_forgot">Tìm lại mật khẩu</button>
            </div>
        </form>
    </body>
</html>
