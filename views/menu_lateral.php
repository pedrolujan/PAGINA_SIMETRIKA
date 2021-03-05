<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include("model/url.php");
?>

<div id="mySidenav" class="sidenav menu-espanded">
    <div class="mini-header">
   
        <img src="<?php echo $urlProyecto ?>IMAGENES/simetrika.png" class="img-fluid logo_empresa" id="logo_empresa" alt="" srcset="">
   
        <a href="javascript:void(0)" class="closebtn" onclick="abrirMenu()">&times;</a>
    </div>

    <a href="<?php echo $urlProyecto ?>views/clientes.php" class="itemClientes">Clientes</a>
    <a href="#">Administrar</a>
    <a href="#">Estadisticas</a>
    <a href="<?php echo $urlProyecto ?>views/forms">formulario prospectos</a>
    <a href="<?php echo $urlProyecto ?>controller/salir.php">salir</a>




</div>


<script>
    function abrirMenu() {
        const menu = document.querySelector('#mySidenav');
        menu.classList.toggle("menu-espanded");
        menu.classList.toggle("menu-collapsed");
        document.querySelector('#main').classList.toggle('main-expanded');

    }
</script>
    
</body>
</html>