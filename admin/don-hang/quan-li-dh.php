<!DOCTYPE html>
<html>
<body>
	<h3 class="alert alert-success">QUẢN LÝ ĐƠN HÀNG</h3>
	<?php
            foreach ($items as $item);
        ?>
        <?php if(isset($item['ma_TT'])) : 
            if(isset($_SESSION['massages'])){
                echo $_SESSION['massages'];
                unset($_SESSION['massages']);
            }?>

		<form action="index.php" method="post">
			<table class="table table-hover">
				<thead>
                    <tr>
                        <th>Mã Đh</th>
                        <th>Mã KH</th>
                        <th>Giá ĐH</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Ghi chú</th>
                    </tr>
                </thead>
                <tbody>
                	<?php 
						foreach ($items as $item) {
						extract($item);
					?>
					<tr>
						<td><?=$ma_TT?></td>
						<td><?=$ma_kh?></td>
						<td><?=$gia_dh?></td>
						<td>
							<a href="xuli.php?id=<?=$ma_TT?>" class="btn btn-xs <?php echo $trang_thai == 0 ?'btn-danger' : 'btn-primary' ?>" ><?php echo $trang_thai == 0 ? 'Chưa xử lí': 'Đã xử lí'?></a>
						</td>
						<td><?=$ngay_tao?></td>
						<td><?=$note?></td>
						<td style="width: 150px">	
                			<a class="btn btn-primary" href="index.php?btn_chitiet&ma_TT=<?=$ma_TT?>" >Chi tiết</a>
                			<a class="btn btn-danger" href="index.php?btn_delete&ma_TT=<?=$ma_TT?>" >Xóa</a>
        				</td>
					</tr>
					<?php
                    }
                ?>
                </tbody>
			</table>
        </form>
        <?php else : echo "Không có đơn hàng"; ?>
    <?php endif; ?>
</body>
</html>