<?php

/* sleep(1); */
include("../model/conexion.php");
$user = new ApptivaDB();

$usuario = $_POST["txtUsuario"];
$clave = $_POST["txtClave"];


$arreglo = array();

if ($usuario == null) {
	$arreglo['error'] = "ingrese Usuario";
} elseif ($clave == null) {
	$arreglo['error'] = "ingrese Clave";
} else {
	$sql1 = $user->buscarFech("u.ID_PERSONAL,p.idPersonal,p.per_nombre,p.per_apellido_paterno,c.nombreCargo,u.ID_CARGO,u.usuario,u.clave", "usuarios u
	INNER JOIN personal p ON u.ID_PERSONAL=p.idPersonal
	INNER JOIN cargos c ON u.ID_CARGO=c.idCargo", "u.usuario='" . $usuario . "' AND u.clave='" . $clave . "'");
	$res1 = mysqli_num_rows($sql1);
	if ($res1 >= 1) {
		session_start();
		$usuarios=mysqli_fetch_array($sql1);
		if ($usuarios["ID_CARGO"]==1) {

			$_SESSION['adminLogeado'] = $usuarios['idPersonal'];
			$arreglo['exito'] = " ✔ Administrad@r " . $usuarios['per_nombre'];

		}elseif ($usuarios["ID_CARGO"]==2) {

			$_SESSION['supervisorLogeado'] = $usuarios['idPersonal'];
			$arreglo['exito'] = " ✔ Supervis@r " . $usuarios['per_nombre'];

		}elseif ($usuarios["ID_CARGO"]==3) {

			$_SESSION['asistenteLogeado'] = $usuarios['idPersonal'];
			$arreglo['exito'] = " ✔ Asistente " . $usuarios['per_nombre'];
		}
		
	} else {
		$arreglo['error'] = "usuario o clave incorrectos";
	}
}
echo json_encode($arreglo);
