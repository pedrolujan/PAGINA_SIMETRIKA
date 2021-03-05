import { urlProyect } from "./urlProyecto.js";
import { funcionMensaje } from "./urlProyecto.js";

 fnBuscarClientes();

$("#text_buscar").keyup(function () { /*  $(".contengif").html('<div class="loading"><img src="../imagenes/loader.gif" style="height: 20px; margin-left: 10px;"/></div>').show(); */
    fnBuscarClientes();
})
function fnBuscarClientes() {

    let tipoBusqueda = "";
    if ($("#rbDni").is(':checked')) {
        tipoBusqueda = "dni";
    } else if ($("#rbTelefono").is(':checked')) {
        tipoBusqueda = "telefono";
    } else if ($("#rbCorreo").is(':checked')) {
        tipoBusqueda = "correo";
    }
    let search=$("#text_buscar").val();
    $.ajax({
        data: {search,tipoBusqueda},
        url: urlProyect+'controller/buscar_cliente.php',
        type: 'post',
        beforeSend: function () {},
        success: function (response) {
            $("#conten_cargar_datos").html(response);

        },
        error: function () {
           
        }
    });
}
$(document).on("click",".celProspecto",function(){
    let element = $(this)[0];
    let id = $(element).attr('captId');
    var url = 'views/infoProspecto/';
  
var form = $('<form action="' +urlProyect+url + '" method="post">' +
     '<input type="hidden" name="txtidProspecto" id="txtidProspecto" value="' + id + '">' +
     '</form>');
$('body').append(form);
form.submit();
    
    
})


//codigo para giardar la la tarea que hiso el asistente de ventas para con el prospecto

$(document).on("click","#btnGuardarRegistro",function(e){
    e.preventDefault();
    let datos=$("#FormularioAccionSupervisor").serialize();
    $.ajax({
        data: datos,
        url: urlProyect+"controller/registro_accionPersonal.php",
        type: "post",
        dataType: "json",
          async: true,
        success:function(resp) {
          funcionMensaje(resp,"formulario__mensaje");
        //   setTimeout("location.href='gracias/'", 3000);
    
        }
      }) 
})
