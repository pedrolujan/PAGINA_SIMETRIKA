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

<div class="page-header col-12 header d-flex">
    <div class="contenAmburgesa col-xs-1 col-sm-1 col-md-1 col-lg-1 d-flex justify-content-center align-items-center">
        <span style="font-size:30px;cursor:pointer" onclick="abrirMenu()">&#9776;</span>
    </div>

    
    <div class="contenVacio col-xs-9  col-sm-9 col-md-9 col-lg-9">

    </div>
    <div class="contenUsuario col-xs-2 col-sm-2 col-md-2 col-lg-2 d-flex justify-content-center align-items-center">
        <img src="<?php echo $urlProyecto ?>IMAGENES/user.png" class="img-circle img_User" alt="" srcset="">
    </div>
</div>
    
</body>
</html>