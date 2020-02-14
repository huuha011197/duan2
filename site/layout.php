<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Shopping Center</title>
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?=$CONTENT_URL?>/js/bootstrap.min.js"></script>
        <link href="<?=$CONTENT_URL?>/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?=$CONTENT_URL?>/css/main.css" rel="stylesheet"/>
        <link href="<?=$CONTENT_URL?>/css/jquery-ui.min.css" rel="stylesheet"/>
        <script src="<?=$CONTENT_URL?>/js/jquery-ui.min.js"></script>
        
        <script>
        $(function (){
            $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
        });
        </script>
    <body>
        <div class="container">
            <header class="row">
                <img style="width: 100%" src="../baner.jpg">
            </header>
            <nav class="row">
                <?php require 'layout/menu.php';?>            
            </nav>
            <div class="row">
                <article class="col-sm-9">
                    <div class="row">
                    <?php
                        require $VIEW_NAME;
                    ?>  
                    </div>
                </article>
                <aside class="col-sm-3">
                    <!--LOGIN-->
                    <?php #require 'layout/dang-nhap.php';?>
                    <!--CATALOG-->
                    <?php require 'layout/loai-hang.php';?>
                    <!--FAVORITE-->
                    <?php require 'layout/top10.php';?>
                </aside>
            </div>
            <footer class="row">
                <script type="text/javascript">
                    $(function(){
                    $updatecart = $(".updatecart");
                    $updatecart.click(function(e){
                        e.preventDefault();
                        $qty= $(this).parents("tr").find("#qty").val();
                        console.log($qty);
                        $key = $(this).attr("data-key");
                        $.ajax({
                            url: 'http://localhost/xshop/site/cart/update-cart.php',
                            type: 'GET',
                            data:{'qty':$qty,'key':$key},
                            success:function(data)
                            {
                                if(data ==1)
                                {
                                    alert("cap nha gio hang thanh cong");
                                    location.href='http://localhost/xshop/site/cart/list-cart.php';
                                }
                            }
                        });
                    });
                });
                </script>
            </footer>
        </div>
    </body>
</html>
