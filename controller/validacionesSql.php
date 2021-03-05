<?php
include("../model/conexion.php");
include("../model/url.php");
$busq = new ApptivaDB();
$CodigoPais = array();
$Codigo = "";
$institucion = "";
if (isset($_POST["buscTelefono"])) {
    $telefono = $busq->buscarFech(
        "prospectos.pros_telefono",
        "prospectos",
        "prospectos.pros_telefono='" . $_POST["buscTelefono"] . "'"
    );
    $respTelefono=mysqli_fetch_array($telefono);

    if($respTelefono["pros_telefono"]==$_POST["buscTelefono"]){
        $Respuestas["error"]="Este numero de telefono ya existe";
    }else{
        $Respuestas["exito"]="";
    }

    echo json_encode($Respuestas);
}
 if (isset($_POST["buscCorreo"])) {
    $correo = $busq->buscarFech(
        "prospectos.pros_email",
        "prospectos",
        "prospectos.pros_email='" . $_POST["buscCorreo"] . "'"
    );
    $respcorreo=mysqli_fetch_array($correo);

    if($respcorreo["pros_email"]==$_POST["buscCorreo"]){
        $Respuestas["error"]="Este correo electronico ya existe";
    }else{
        $Respuestas["exito"]="";
    }

    echo json_encode($Respuestas);
}
$cboInstitucion = "";
