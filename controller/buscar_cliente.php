<!-- <link rel="stylesheet" href="css/estilos_principal.css"> -->
<?php
session_start();
include("../model/conexion.php");
$user = new ApptivaDB();
$html = "";
if (isset($_POST['search']) && ($_POST['search'] != "")) {
    $tipoBusqueda = "";
    if ($_POST['tipoBusqueda'] == 'dni') {
        $tipoBusqueda = "dni";
    } elseif ($_POST['tipoBusqueda'] == 'correo') {
        $tipoBusqueda = "email";
    } elseif ($_POST['tipoBusqueda'] == 'telefono') {
        $tipoBusqueda = "telefono";
    } 
    $u = $user->buscarFech("*","prospectos pro
    INNER JOIN pais pa on pro.ID_PAIS=pa.Codigo", "prospectos.pros_estado='1' AND prospectos." . $tipoBusqueda . " like '%" . $_POST['search'] . "%'");
}else{
    $u = $user->buscar("prospectos pro INNER JOIN pais pa on pro.ID_PAIS=pa.Codigo", "1");
}

if (!$u) {
    $html .= "<p style='background: #D9534F; color: #fff; padding: 5px;'> No se encontraron datos </p>";
} else {
    $html .= "<table class='table table-striped table-hover table-responsive-sm table-responsive-xs' id='tabla' >
    <thead>
        <tr>
            <th>Cliente</th>
          
            <th>Correo electronico</th>
            <th>Telefono</th>          
            <th>Pais</th>
               
        </tr>
    </thead>
    <tbody>";
    foreach ($u as $v) {

        $html .= "<a href='views/login'>
                <tr captId='".$v['idProspecto']."' class='celProspecto' >
               
                <td>".$v["pros_apellido_paterno"] .' ' . $v["pros_apellido_materno"] . ' ' . $v["pros_nombres"] . "</td>
                    <td>" . $v["pros_email"] . "</td>
                    <td>" . $v["pros_telefono"] . "</td>
                    <td>" . $v["Nombre_pais"] . "</td>                  
                </tr>
                </a>
                ";
    }
    $html .= "</tbody>
    </table>";
}
echo $html;
?>