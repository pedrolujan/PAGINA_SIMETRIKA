<?php
include("../../model/conexion.php");
include("../../model/url.php");

$con = new ApptivaDB();
$sql = $con->buscarFech(
    "pros_nombres,pros_apellido_paterno,pros_apellido_materno,pros_email,pros_telefono,Nombre_pais",
    "prospectos 
 INNER JOIN pais on pais.Codigo=prospectos.ID_PAIS",
    "prospectos.idProspecto='" . $_POST["txtidProspecto"] . "'"
);

$datos = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $urlProyecto ?>CSS/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $urlProyecto ?>CSS/estilos_sideBar.css">
    <link rel="stylesheet" href="<?php echo $urlProyecto ?>CSS/estilos_header.css">
    <link rel="stylesheet" href="<?php echo $urlProyecto ?>CSS/estilosProspecto_ifo.css">
</head>

<body>
    <?php
    include("../menu_lateral.php");
    ?>
    <div id="main" class="main-expanded row  col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php
        include("../header.php");
        ?>
        <div class="contenedor col-xs-12 col-sm-12 col-md-12 col-lg-12 d-md-flex">
            <div class="contenedorDatos col-xs-12 col-sm-12 col-md-12 col-lg-6">

                <div class="datosPospectos"><label for=""> Nombre:</label><span><?php echo  $datos["pros_nombres"] ?></span></div><br>
                <div class="datosPospectos"><label for=""> Apellido paterno:</label><span><?php echo  $datos["pros_apellido_paterno"] ?></div></span><br>
                <div class="datosPospectos"><label for=""> Apellido materno:</label><span><?php echo  $datos["pros_apellido_materno"] ?></div></span><br>
                <div class="datosPospectos"><label for=""> Correo:</label><span><?php echo  $datos["pros_email"] ?></span></div><br>
                <div class="datosPospectos"><label for=""> Telefono:</label><span><?php echo  $datos["pros_telefono"] ?></span></div><br>
                <div class="datosPospectos"><label for=""> Pais:</label><span><?php echo  $datos["Nombre_pais"] ?></span></div><br>
            </div>
            <div class="contenedorRespuesta col-xs-12 col-sm-12 col-md-12 col-lg-6 d-block">
                <label for="">Describa que acccion realizo para con este prospecto </label> <br>
                <form action="#" id="FormularioAccionSupervisor" method="post">
                    <input type="hidden" name="txtIdProspecto" id="txtIdProspecto" readonly="readonly" value="<?php echo $_POST["txtidProspecto"] ?>"><br>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                <div class="contenedorBoton col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <input type="submit" value="Guardar tarea" class="btnGuardarRegistro" id="btnGuardarRegistro">
                </div>
                </form>
            </div>

        </div>
        <div class="formulario__mensaje" id="formulario__mensaje"></div>
    </div>
    <script src="<?php echo $urlProyecto ?>JS/jquery-3.5.1.min.js"></script>
    <script src="<?php echo $urlProyecto ?>JS/SCRIP.JS"></script>
    <script type="module" src="<?php echo $urlProyecto ?>JS/scripPagClientes.js"></script>

</body>

</html>