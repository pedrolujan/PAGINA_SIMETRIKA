<?php
include("../../model/conexion.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../CSS/estilos_formProspecto.css">
</head>

<body>
    <div class="contenedorProspecto col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex">

        <div class="contenThemePorspecto d-none  col-xs-0 col-sm-0 d-md-block  col-md-3 col-lg-5">
            <h2>Titulo de la Campaña</h2>
            <div class="col-xs-0 col-sm-0 col-md-12  col-lg-12 d-flex m-0 p-0">
                <div class="col-xs-0 col-sm-0 col-md-12 col-lg-12 ">
                      <img class="img_campaña" src="../../IMAGENES/fontoCampaña.jpeg" alt="" srcset="">
                </div>
                <div class="contenedor-datosEvento d-none">
                    <img class="img_expositor" src="../../IMAGENES/expositor.jpg" alt="" srcset="">
                    <p>Nombre del Expositor</p>
                    <p>Cargo</p>
                </div>
            </div>
           
        </div>
        <div class="contenedorFormProspecto col-xs-12 col-sm-12 col-md-9 col-lg-7  m-lg-50">
            <form action="#" class="contenedor_formulario" id="contenedor_formulario" method="post">
                <div class="row">
                    <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12 contenGeneralImg">
                        <div class="form-group contenImg">
                            <img src="https://simetrika.store/wp-content/uploads/2021/02/header_form.png" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contenGeneralInfo">
                    <div class="form-group contenInfoEvento">
                        <h2 class="titulo_evento">¡Webinars imperdibles!</h2>
                        <p class="DescripcionEvento">🎉Este nuevo año lo comenzamos con la mejor educación 🙌🏻
                            Simétrika trae para ti este Webinar totalmente GRATUITO🏗
                            ✅Martes 02 de febrero 8:00 p.m. (hora de Perú, México, Colombia) con el Ing. Carlos
                            Rodríguez y el Webinar "Pack de Consejos Útiles para el Diseño de Concreto Armado"
                            ¿Te los piensas perder?😳😱</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 divCaja">
                    <span class="titulo_preguntas">Dirección de correo electrónico (*)</span>
                    <input type="email" name="txtEmail" id="txtEmail" class="" placeholder="Ej: nicorreo12@gmail.com" required>
                    <br><label class="mensaje" id="mensajeEmail"></label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 divCaja">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex">
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <span class="titulo_preguntas">Apellido paterno (*)</span>
                            <input type="text" name="txtApePaterno" id="txtApePaterno" class="" placeholder="Ingrese apellido paterno" required>
                            <br><label class="mensaje" id="mensajeEmail"></label>
                        </div>
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <span class="titulo_preguntas">Apellido materno (*)</span>
                            <input type="text" name="txtApeMaterno" id="txtApeMaterno" class="" placeholder="Ingrese apellido materno" required>
                            <br><label class="mensaje" id="mensajeEmail"></label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-3 d-flex">
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <span class="titulo_preguntas">Nombres (*)</span>
                            <input type="text" name="txtnombres" id="txtnombres" class="" placeholder="Ingrese nombres" required>
                            <br><label class="mensaje" id="mensajeEmail"></label>
                        </div>
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <span class="titulo_preguntas">Edad(*)</span>
                            <input type="number" name="txtEdad" id="txtEdad" class="" placeholder="Ingrese edad" required>
                            <br><label class="mensaje" id="mensajeEmail"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 divCaja">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex">
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <span class="titulo_preguntas">Pais(*)</span>
                            <select name="CboPais" id="CboPais">
                                <option value="0">Seleccione pais</option>
                                <?php
                                $user = new ApptivaDB();
                                $categorias = $user->buscarTodo("pais", "Nombre_pais");
                                foreach ($categorias as $cat) :   ?>
                                    <option value="<?php echo $cat['Codigo'] ?>">
                                        <?php echo $cat['Nombre_pais'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <br><label class="mensaje" id="mensajeEmail"></label>
                        </div>
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <span class="titulo_preguntas">Numero de celular (*)</span>
                            <label class="CodigoPais" name="CodigoPais" id="CodigoPais">+00</label>
                            <input type="number" name="txtNumCelular" id="txtNumCelular" class="" placeholder="Numero de celular" required>
                            <input type="hidden" name="txtCodigoPais" class="CodigoPais">
                            <br><label class="mensaje" id="mensajeEmail"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 divCaja">
                    <span class="titulo_preguntas">Dirección domiciliar(*)</span>
                    <input type="text" name="txtdireccion" id="txtdireccion" class="" placeholder="Ingrese domicilio" required>
                    <br><label class="mensaje" id="mensajeEmail"></label>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 divCaja">
                    <span class="titulo_preguntas">A que institucion perteneces(*)</span>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-3  align-items-center d-flex">
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6  align-items-center d-flex ">
                            <select name="CboCateIntitucion" id="CboCateIntitucion">
                                <option value="0">Seleccione categoria</option>
                                <?php
                                $user = new ApptivaDB();
                                $categorias = $user->buscarTodo("categoria_institucion", "nombre_cat");
                                foreach ($categorias as $cat) :   ?>
                                    <option value="<?php echo $cat['idCateInstitucion'] ?>">
                                        <?php echo $cat['nombre_cat'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <br><label class="mensaje" id="mensajeEmail"></label>
                        </div>
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6 align-items-center d-flex ">

                            <select name="CboInstitucion" id="CboInstitucion">
                                <option value="0">Seleccione institucion</option>


                            </select>
                            <br><label class="mensaje" id="mensajeEmail"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 divCaja">
                    <label> 2. ¿ Cuál es tu ocupación principal ? </label>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex">
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6  align-items-center">

                            <select name="cboOcupacion" id="cboOcupacion">
                                <option value="0">Seleccione ocupacion</option>
                                <?php
                                $categorias = $user->buscarTodo("ocupacion", "descripcion");
                                foreach ($categorias as $cat) :   ?>
                                    <option value="<?php echo $cat['idOcupacion'] ?>">
                                        <?php echo $cat['descripcion'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <br><label class="mensaje" id="mensajeEmail"></label>
                        </div>
                        <div class="datosPersonales col-xs-12 col-sm-12 col-md-12 col-lg-6  align-items-center">
                                 
                            <input type="text" name="txtOcupacion" id="txtOcupacion" placeholder="Ingrese su ocupacion" class="d-none">
                            <label class="mensaje d-none" id="msjTxtOcupacion"></label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 divCaja">
                <span> Cursos de interes</span>
                <br>
                <div class="contenedor_cursos">

                </div>    
                


                <!-- Facebook Pixel Code -->
                <script>
                    ! function(f, b, e, v, n, t, s) {
                        if (f.fbq) return;
                        n = f.fbq = function() {
                            n.callMethod ?
                                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                        };
                        if (!f._fbq) f._fbq = n;
                        n.push = n;
                        n.loaded = !0;
                        n.version = '2.0';
                        n.queue = [];
                        t = b.createElement(e);
                        t.async = !0;
                        t.src = v;
                        s = b.getElementsByTagName(e)[0];
                        s.parentNode.insertBefore(t, s)
                    }(window, document, 'script',
                        'https://connect.facebook.net/en_US/fbevents.js');
                    fbq('init', '768509680685292');
                    fbq('track', 'PageView');
                </script>
                <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=768509680685292&ev=PageView&noscript=1" /></noscript>
                <!-- End Facebook Pixel Code -->


                <div class="row divContenDentro contenBoton">
                    <div class="msj" id="msj"></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 subContenBoton">

                        <input type="submit" id="btn_guardar" class="btn" value="Registrar >">

                    </div>

                </div>
            </form>
        </div>
    </div>
    <script src="../../JS/jquery-3.5.1.min.js"></script>
    <script src="js/scripFormulario.js" type="module"></script>
</body>

</html>