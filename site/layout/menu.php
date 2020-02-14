 <?php if (!isset($_SESSION['cart'])) {
      $a=0;
    }
    elseif (empty($_SESSION['cart'])) {
      $a=0;
    }
    else{
      $a = count($_SESSION['cart']);
    };
  ?>
<nav  id="grad1" class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=$SITE_URL?>/trang-chinh?trang_chu">Trang chủ</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?=$SITE_URL?>/trang-chinh?gioi_thieu">Giới thiệu</a></li>
        <li><a href="<?=$SITE_URL?>/trang-chinh?lien_he">Liên hệ</a></li>
        <li><a href="<?=$SITE_URL?>/trang-chinh?gop_y">Góp ý</a></li>
        <li><a href="<?=$SITE_URL?>/trang-chinh?hoi_dap">Hỏi đáp</a></li>
      </ul>
      <div style="float: right;">
      <div class="dropdown" style="float: left; margin: 8px 10px;">
        <button class="btn btn-primary dropdown-toggle drop" type="button" data-toggle="dropdown">
          <?php if (isset($_SESSION['user'])): ?>
          <img class="img-circle" style="width: 23px; height: 15px" src='<?=$CONTENT_URL?>/images/users/<?=$_SESSION['user']['hinh']?>'>
          <?php echo $_SESSION['user']['ho_ten'];
          else :echo "Đăng nhập";?>
          <?php endif; ?>
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <?php 
              if (isset($_SESSION['user'])):
          ?>
         <li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
         <li><a href="<?=$SITE_URL?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
         <li><a href="<?=$SITE_URL?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
         <?php if($_SESSION['user']['vai_tro'] == TRUE): ?>
         <li><a href="../../admin/trang-chinh">Quản trị website</a></li>
         <?php endif; ?>
         <?php else:?>
          <li><a href="<?=$SITE_URL?>/tai-khoan/dang-nhap.php">Đăng nhập</a></li>
          <li><a  href="<?=$SITE_URL?>/tai-khoan/dang-ky.php">Đăng ký</a></li>
        <?php endif; ?>
        </ul>
      </div>
        <div style="display: inline-block; position: relative;">
          <div style="height: 20px; margin-top: 10px; float: right;">
            <a href="../cart/list-cart.php" class="btn btn-default btn-sm" style="">
              <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
              <?php if (isset($_SESSION['user'])):?>
              <span class="a v3-header-cart-count"><?=$a?></span>
            <?php endif;?>
          </a>
        <div>
        </div>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>