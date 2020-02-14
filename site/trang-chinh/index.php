<?php
require '../../global.php';

if(exist_param("gioi_thieu")){
    $VIEW_NAME = "trang-chinh/gioi-thieu.php";
}
else if(exist_param("lien_he")){
    $VIEW_NAME = "trang-chinh/lien-he.php";
}
else if(exist_param("gop_y")){
    $VIEW_NAME = "trang-chinh/gop-y.php";
}
else if(exist_param("hoi_dap")){
    $VIEW_NAME = "trang-chinh/hoi-dap.php";
}
else{
    require_once '../../dao/hang-hoa.php';
    $items = hang_hoa_select_dac_biet();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
}

require '../layout.php';