<!DOCTYPE html>
<html>
    <body>
        <h3 class="alert alert-success">CẬP NHẬT TÀI KHOẢN</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
            <div>
                <div  class="form-group">
                    <img src="<?=$CONTENT_URL?>/images/users/<?=$hinh?>" style="max-width: 95%">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input class="form-control" name="ma_kh" value="<?=$ma_kh?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input  class="form-control" name="ho_ten" value="<?=$ho_ten?>">
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ email</label>
                        <input class="form-control" name="email" value="<?=$email?>">
                    </div>
                    <div class="form-group">
                        <label>Hình</label>
                        <input  class="form-control"name="up_hinh" type="file">
                    </div>
                    <div class="form-group">
                        <button  class="btn btn-default" name="btn_update">Cập nhật</button>
                    </div>
                    <!--Giá trị mặc định-->
                    <input name="vai_tro" value="<?=$vai_tro?>" type="hidden">
                    <input name="kich_hoat" value="<?=$kich_hoat?>" type="hidden">
                    <input name="mat_khau" value="<?=$mat_khau?>" type="hidden">
                    <input name="hinh" value="<?=$hinh?>" type="hidden">
                </div>
            </div>
        </form>
    </body>
</html>
