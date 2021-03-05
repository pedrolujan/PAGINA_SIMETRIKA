<?php include("../model/url.php") ?>
<div class="container col-xs-12 col-sm-12 col-md-12 col-lg-12 p-10  d-flex mt-5 justify-content-center align-items-center">
    <fieldset class="col-xs-12 col-sm-12 col-md-2 col-lg-2 fielset">
        <legend>Buscar por:</legend>
        <div class="form-check">
            <input class="form-check-input w-10" type="radio" checked name="flexRadioDefault" id="rbDni">
            <label class="form-check-label" for="rbDni">
                DNI
            </label>
            <br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="rbTelefono">
            <label class="form-check-label" for="rbTelefono">
                TELEFONO
            </label>
            <br>
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="rbCorreo">
            <label class="form-check-label" for="rbCorreo">
                CORREO
            </label>
        </div>
    </fieldset>
    <form id="buscar" action="" class="col-xs-12 col-sm-12 col-md-10 col-lg-10 d-flex">
        <input type="text" class="col-xs-8 col-sm-8 col-md-10 col-lg-10" id="text_buscar" placeholder="Buscar usuarios.." />
        <button type="submit" class="btn_txtBuscar"><img src="<?php echo $urlProyecto ?>IMAGENES/search_simetrica.png" alt=""></button>

    </form>
</div>
<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5 conten_cargar_datos" id="conten_cargar_datos">

</div>
<script type="module" src="<?php echo $urlProyecto ?>JS/scripPagClientes.js"></script>