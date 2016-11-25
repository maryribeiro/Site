<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Infofelb</title>
        <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img src="img/logo.png"width=250"height="120">
            </div>
            <div id="menu">
                <?php
                    include 'menu.php';
                ?>
            </div>
            <div id="content">
                <div id="content-main">
                    <?php
                        $pg = $_GET["pg"];
                        if(!empty($pg)) {
                            include $pg.'.php';
                        } else {
                            include 'home.php';
                        }
                    ?>
                </div>
                
            </div>
             
            <br>
            <div id="footer"> 
                 <span>
                    Todos os direitos reservados - &copy; - 2016.
                    </span>
            </div>
        </div>
    </body>
</html>
