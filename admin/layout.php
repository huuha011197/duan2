<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quản trị website</title>
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js" type="text/javascript"></script>
        
        <script src="<?=$CONTENT_URL?>/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="<?=$CONTENT_URL?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <link href="<?=$CONTENT_URL?>/css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?=$CONTENT_URL?>/js/jquery-ui.min.js" type="text/javascript"></script>
        
        <script>
        $(function (){
            $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
        });
        </script>
    </head>
    <body>
        <div class="container">
            <h1 class="alert alert-danger">QUẢN TRỊ WEBSITE</h1>
            <nav>
                <?php require 'menu.php';?>
            </nav>
            <?php
                
                require $VIEW_NAME;
            ?>
        </div>
    </body>
</html>
