<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <script src="<?=$CONTENT_URL?>/js/mua.js"></script>
    </head>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php
                    for ($i = 1;$i < count($items); $i++) {
                        echo "<li data-target='#myCarousel' data-slide-to='$i'></li>";
                    }
                ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
                <?php
                    $active = " active";
                    foreach ($items as $item) {
                ?>
                    <div class="item<?=$active?>">
                        <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
                            <img src="<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>"/>
                        </a>
                        <div class="carousel-caption">
                            <h3 class="text-danger"><?=number_format($item['don_gia'])." VND"?></h3>
                            <p class="text-info"><?=$item['ten_hh']?></p>
                        </div>
                    </div>                
                <?php
                    $active = "";
                    }
                ?>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
         <h3 class="alert alert-success"> Sản phẩm đặc biệt</h3>
            <?php
            foreach ($items as $item) {
                extract($item);
        ?>
            <?php extract($item);?>
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
    </body>
</html>
