<!DOCTYPE html>
<html>
    <style type="text/css">
        .nn-panel-body img {
    width: 25px;
    height: 25px;
    border-radius: 5px;
    border: 1px solid silver;
    margin-left: 5px;
    margin-bottom: 5px;
    </style>
    <body>
        <div class="panel panel-default">
            <div class="panel-heading">TOP 10 YÊU THÍCH</div>
            <div class="panel-body nn-panel-body container-fluid">
                <?php
                    require_once '../../dao/hang-hoa.php';
                    $hh_array = hang_hoa_select_top10();
                    foreach ($hh_array as $hh) {
                        $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                        echo "
                            <div class='row'>
                                <div class='col-xs-2'><img src='$CONTENT_URL/images/products/$hh[hinh]'></div>
                                <div class='col-xs-10'><a href='$href'>$hh[ten_hh]</a></div>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
