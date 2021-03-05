import { urlProyect } from "../../../JS/urlProyecto.js";
import { funcionMensaje } from "../../../JS/urlProyecto.js";
TraerCursos();
$("#btn_guardar").click(function (evt) {
  evt.preventDefault();  
  let datos = $("#contenedor_formulario").serialize();
  $.ajax({
    data: datos,
    url: urlProyect+"controller/registro_prospecto.php",
    type: "post",
    dataType: "json",
    async: true,
  })
    .done(function correcto(resp) {
      alert(resp);
        funcionMensaje(resp);
             
    })
    .fail(function error(e) {})
    .always(function final() {});
});

/* codigo para cargar combox en la ventana de ver el carrito de compras */

$(document).on("change", "#CboPais", function () {
  let idPais = $("#CboPais").val();
  $.ajax({
    data: {idPais},
    url: urlProyect + "controller/DevolverDatos.php",
    type: "post",
    beforeSend: function () {},
    success: function (response) {
      let datos = JSON.parse(response);
      let codigo = "";
      datos.forEach((element) => {
        $("#CodigoPais").html(`${element.codigo}`);
        $(".CodigoPais").val(`${element.codigo}`);

      });
    },
    error: function () {
      alert("error");
    },
  });
});

$(document).on("change", "#CboCateIntitucion", function () {
  let idCateInstitucion = $("#CboCateIntitucion").val();
  $.ajax({
    data: {idCateInstitucion},
    url: urlProyect + "controller/DevolverDatos.php",
    type: "post",
    beforeSend: function () {},
    success: function (resp) {
      $("#CboInstitucion").html(resp);
    },
    error: function () {
      alert("error");
    },
  });
});

$(document).on("change", "#cboOcupacion", function () {
  let idOcupacion = $("#cboOcupacion").val();

  if (idOcupacion == 5) {
    $("#txtOcupacion").addClass("d-block");
    $("#msjTxtOcupacion").addClass("d-block");
    $("#txtOcupacion").removeClass("d-none");
    $("#msjTxtOcupacion").removeClass("d-none");
  } else {
    $("#txtOcupacion").addClass("d-none");
    $("#msjTxtOcupacion").addClass("d-none");
    $("#txtOcupacion").removeClass("d-block");
    $("#msjTxtOcupacion").removeClass("d-block");
  }
});

function TraerCursos() {
  let CURSOS = "CURSOS";
  $.ajax({
    data: {CURSOS},
    url: urlProyect + "controller/DevolverDatos.php",
    type: "post",
    beforeSend: function () {},
    success: function (resp) {
      let datos = JSON.parse(resp);
      let Cursos = "";
      datos.forEach((element) => {
        Cursos+=`
        <div class="contenChecks">
          <input type="checkbox" class="cheks" name="" id="${element.id}" value="${element.id}">
          <label for="${element.id}">${element.nombre}</label>
          </div></br>`;
       
      });
      $(".contenedor_cursos").html(Cursos);
    },
    error: function () {
      alert("error");
    },
  });
}
