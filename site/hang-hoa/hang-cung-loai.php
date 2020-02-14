<!DOCTYPE html>
<html>
<head><script src="<?=$CONTENT_URL?>/js/mua.js"></script>
</head>
    <body>
        <div class="panel panel-default">
            <div class="panel-heading">HÀNG CÙNG LOẠI</div>
            <div class="panel-body">
                <ul>
                    <?php
                    $hh_cung_loai = hang_hoa_select_top4_by_loai($ma_loai);
                    foreach ($hh_cung_loai as $item) {
                       extract($item); ?>
                        <div class="col-sm-6 col-md-3 grid-view-item divbutton"" style="text-align: center;">
                <div style="display: block;">
                    <a class="grid-view-item deal-mix" href="../hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <img class="img-thumbnail" src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>">
                    </a>
                    <div class="product-info">
                        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>" class="product-name"><?=$ten_hh?></a>
                        <div class="final-price">$<?=number_format($don_gia)?></div>
                    </div>
                </div>
                <button class="btn btn-danger chitiet" onclick="window.location.href='../hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>'">Chi tiết</button>
            </div>
            <?php
                    }
                    ?>
                </ul>                
            </div>
        </div>
    </body>
</html>
