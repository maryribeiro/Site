
<html>
    <head>
        <meta charset="UTF-8">
        <title> Infofelb </title>
        <link rel="stylesheet" href="css/estilo.css" type="text/css"/>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img src="img/infofelb.jpg">
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
                    if (!empty($pg)) {
                        include $pg . '.php';
                    } else {
                        include 'home.php';
                    }
                    ?>
                </div>
                <br>
                <hr>
                </div>
            <div id="content-banner">
                <img src="img/banner1.jpg"/>
                </div>
            <br>
            <center> <h1> Bem-Vindo Ao Site </h1></center>
            <br>
        
            
            </div>
            <div id="footer">
                <center>
                    Todos os direitos reservados - &copy; - 2016.
                </center>
            </div>
        </div>
    </body>
</html>
