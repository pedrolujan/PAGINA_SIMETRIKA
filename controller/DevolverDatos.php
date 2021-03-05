<?php
include("../model/conexion.php");
include("../model/url.php");
$busq = new ApptivaDB();
$CodigoPais = array();
$Codigo = "";
$institucion = "";
$cboInstitucion = "";
if (isset($_POST["idPais"])) {
    $Codigo = $busq->buscarFech(
        "pais.Codigo_pais",
        "pais",
        "pais.Codigo='" . $_POST["idPais"] . "'"
    );

    while ($row = mysqli_fetch_array($Codigo)) {
        $CodigoPais[] = array(
            'codigo' => $row['Codigo_pais']
        );
    }
    echo json_encode($CodigoPais);
} else if (isset($_POST["idCateInstitucion"])) {
    $institucion = $busq->buscarCar(
        "idInstitucion,nombre",
        "institucion",
        "institucion.ID_CATINSTITUCION='" . $_POST["idCateInstitucion"] . "'"
    );
    foreach ($institucion as $inst) {
        $cboInstitucion .= "<option value=" . $inst['idInstitucion'] . ">" . $inst['nombre'] . "</option>";
    }
    echo $cboInstitucion;
} elseif (isset($_POST["CURSOS"])) {
    $cursostodos = array();
    $cursos = $busq->buscarFech(
        "cursos.idCursos,cursos.nombre",
        "cursos",
        "'1'"
    );

    while ($row = mysqli_fetch_array($cursos)) {
        $cursostodos[] = array(
            'id' => $row['idCursos'],
            'nombre' => $row['nombre']
        );
    }
    echo json_encode($cursostodos);
} elseif (isset($_POST["OCUPACION"])) {
    $Ocupaciones = array();
    $ocupacion = $busq->buscarFech(
        "ocupacion.idOcupacion,ocupacion.descripcion",
        "ocupacion",
        "'1'"
    );

    while ($row = mysqli_fetch_array($ocupacion)) {
        $Ocupaciones[] = array(
            'id' => $row['idOcupacion'],
            'nombre' => $row['descripcion']
        );
    }
    echo json_encode($Ocupaciones);
} elseif (isset($_POST["PREGUNTAS"])) {
    $Ocupaciones = array();
    $ocupacion = $busq->buscarFech(
        "preguntas.idPregunta,preguntas.pre_nombre",
        "preguntas",
        "preguntas.pre_estado='1'"
    );
    
    while ($row = mysqli_fetch_array($ocupacion)) {
        $respuesta = $busq->buscarFech(
            "respuestas.idRespuesta,respuestas.resp_nombre",
            "respuestas",
            "respuestas.ID_PREGUNTA='".$row['idPregunta']."' AND respuestas.resp_estado='1'"
        );
        while ($row2 = mysqli_fetch_array($respuesta)) {
            $Re[] = array(
                'idResp' => intval($row2['idRespuesta']),
                'nombreResp' => $row2['resp_nombre']
            );
        }
        $Respuestas[] = array(
            'id' => intval($row["idPregunta"]),
            'pregunta' => $row['pre_nombre'],
            'respuestas'=>$Re
        );
        unset($Re);
       
    }
    echo json_encode($Respuestas);
}
