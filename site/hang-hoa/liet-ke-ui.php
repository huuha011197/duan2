<!DOCTYPE html>
<html>
<head>
    <script src="<?=$CONTENT_URL?>/js/mua.js"></script>
</head>
    <body>
        <div class="alert alert-success">
             <?php
                 if(exist_param("ma_loai")){
                    $loai=loai_selected($ma_loai);
                    echo '<p style="font-size:20px;color:darkgreen">'."$loai[ten_loai]".'</h3>';
                }
                else if(exist_param("dac_biet")){
                    echo "dac_biet";
                }
                else if(exist_param("keywords")){
                   echo "Từ khóa tìm kiếm: $keywords";
                }
                else{
                    echo "Tất cả hàng hóa";
                }
            ?>
        <div>
            <?php if (isset($_SESSION['success'])) :?>
            <p class="text-danger"> <?php $message=$_SESSION['success']; echo "<script type='text/javascript'>alert('$message');</script>"; 
             ?></p>
        <?php endif ; unset($_SESSION['success']) ?>
        <?php
            foreach ($items as $item) {
                extract($item);
        ?>
            <div class="col-sm-6 col-md-3 grid-view-item divbutton"" style="text-align: center;">
                <div style="display: block;">
                    <a class="grid-view-item deal-mix" href="chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <img class="img-thumbnail" src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>">
                    </a>
                    <div class="product-info">
                        <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>" class="product-name"><?=$ten_hh?></a>
                        <div class="final-price">$<?=number_format($don_gia, 2)?></div>
                        <!-- <a class="btn btn-danger" href="../cart/add.php?id=<?php echo $item["ma_hh"]; ?>"> Mua ngay</a> -->
                    </div>
                </div>
                <button class="btn btn-danger mua" onclick="window.location.href='http://localhost/xshop/site/cart/add.php?id=<?php echo $item["ma_hh"]; ?>'">Mua ngay</button>
            </div>
        <?php
            }
        ?>
        </div>
    </body>
</html>
