<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<?php if(isset($item)) : ?>
			<table class="table table-hover">
				<thead>
                    <tr>
                        <th>Mã ĐH</th>
                        <th>Mã HH</th>
                        <th>Tên SP</th>
                        <th>Số lượng</th>
                        <th>Giá SP</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                	<?php  foreach ($item as $value) {
                		extract($value);
                	?>
                		<td><?=$ma_TT?></td>
						<td><?=$ma_hh?></td>
						<td><?=$ten_SP?></td>
						<td><?=$so_luong?></td>
						<td><?=$gia_SP?></td>
		 			</tr>
				<?php
                    }
                ?>
                </tbody>
			</table>
            <a class="btn btn-primary" href="../don-hang"> Quay lại </a>
		<?php else: echo "Đơn hàng không tồn tại hoặc đã xóa";?>
		<?php endif; ?>
</body>
</html>