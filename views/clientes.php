<?php
include("../model/url.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/estilos_sideBar.css">
    <link rel="stylesheet" href="../CSS/estilos_header.css">
    <link rel="stylesheet" href="../CSS/estilos_Cliente.css">
</head>

<body>
    <?php include("menu_lateral.php") ?>
    <div id="main" class="p-0 main-expanded">
        <?php include("header.php") ?>
        <?php include("consultaClientes.php") ?>
        

    </div>
    <script src="../JS/jquery-3.5.1.min.js"></script>
    <script src="../JS/scripPagClientes.js"></script>
    <script src="../JS/redirect.js"></script>
    <script src="../JS/SCRIP.JS"></script>
   <!--  <script src="../JS/BOOTSTRAP/jquery-3.5.1.slim.min.js"></script>
    <script src="../JS/BOOTSTRAP/popper.min.js"></script>
    <script src="../JS/BOOTSTRAP/bootstrap.min.js"></script> -->
</body>

</html>