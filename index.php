<?php
session_start();
include("model/url.php");

if(!(isset($_SESSION['adminLogeado']) || isset($_SESSION["supervisorLogeado"]) || isset($_SESSION["asistenteLogeado"]))){
    header("Location:".$urlProyecto."views/login");
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/estilos_header.css">
    <link rel="stylesheet" href="CSS/estilos_sideBar.css">
    <link rel="stylesheet" href="CSS/estilos_Cliente.css">
    <link rel="stylesheet" href="CSS/estilos_dashoard.css">
    <link rel="stylesheet" href="fonts/style.css">

</head>

<body>
    <?php include("views/menu_lateral.php") ?>
    <div id="main" class="main p-0 main-expanded">
        <?php include("views/header.php") ?>
        <div class="row contenedor_dashboard col-xs-12 col-sm-12 col-md-12 col-lg-12 m-0" id="">
            <div class="contenCaja1 conten col-xs-12 col-sm-12 col-md-12 col-lg-3 " id="">
                <div class="contenInfo_logo">
                    <div class="contenInfo">
                        <div>
                            <h2>190</h2>
                            <span>usarios </span>
                        </div>
                    </div>
                    <div class="contenLogo">
                        <span class="icon-users"></span>
                    </div>
                </div>
                <div class="contenEstActual estadoActua1">
                    <div>
                        <span>12</span>
                        <span>hoy</span>
                    </div>
                </div>
            </div>
            <div class="contenCaja2 conten col-xs-12 col-sm-12 col-md-12 col-lg-3" id="">
                <div class="contenInfo_logo">
                    <div class="contenInfo">
                        <div>
                            <h2>190</h2>
                            <span>usarios </span>
                        </div>
                    </div>
                    <div class="contenLogo">
                    <span class="icon-users"></span>
                    </div>
                </div>
                <div class="contenEstActual estadoActua2">
                    <div>
                        <span>12</span>
                        <span>hoy</span>
                    </div>
                </div>
            </div>
            <div class="contenCaja3 conten col-xs-12 col-sm-12 col-md-12 col-lg-3" id="">
                <div class="contenInfo_logo">
                    <div class="contenInfo">
                        <div>
                            <h2>190</h2>
                            <span>usarios </span>
                        </div>
                    </div>
                    <div class="contenLogo">
                    <span class="icon-users"></span>
                    </div>
                </div>
                <div class="contenEstActual estadoActua3">
                    <div>
                        <span>12</span>
                        <span>hoy</span>
                    </div>
                </div>
            </div>
        </div>
        <?php include("views/consultaClientes.php"); ?>



    </div>

    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/SCRIP.js"></script>
    <script type="module" src="<?php echo $urlProyecto?>JS/scripPagClientes.js"></script>    <script src="JS/BOOTSTRAP/jquery-3.5.1.slim.min.js"></script>
    <script src="JS/BOOTSTRAP/popper.min.js"></script>
    <script src="JS/BOOTSTRAP/bootstrap.min.js"></script>
</body>

</html>