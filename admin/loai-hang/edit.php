<!DOCTYPE html>
<html>
    <body>
        <h3 class="alert alert-success">QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <div class="form-group">
                <label>Mã loại</label>
                <input class="form-control" name="ma_loai" value="<?=$ma_loai?>" readonly>
            </div>
            <div class="form-group">
                <label>Tên loại</label>
                <input class="form-control" name="ten_loai" value="<?=$ten_loai?>" >
            </div>
            <div>
                <button class="btn btn-default" name="btn_update">Cập nhật</button>
                <button class="btn btn-default" type="reset">Nhập lại</button>
                <a href="index.php">Thêm mới</a>
                <a href="index.php?btn_list">Danh sách</a>
            </div>
        </form>
    </body>
</html>
