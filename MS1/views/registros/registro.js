$().ready(() => {
  todos();
  pais();
});

var todos = () => {
  var html = "";
  $.get("../../controllers/Registro.controller.php?op=todos", (registros) => {
    registros = JSON.parse(registros);
    console.log(registros);

    $.each(registros, (index, valor) => {
      html += `<tr>
                        <td>${index + 1}</td>
                        <td>${valor.Nombres}</td>
                        <td>${valor.Apellidos}</td>
                        <td>${valor.Pais}</td>
                        <td>${valor.Ciudad}</td>
                        <td>${valor.Telefono}</td>
                        <td><button class="btn btn-secondary" onclick="editar(${
                          valor.RegistrId
                        })">Editar
                        <button class="btn btn-danger" onclick="eliminar(${
                          valor.RegistrId
                        })">Eliminar</td>
                    </tr>`;
    });
    $("#registros").html(html);
  });
};
var editar = (id) => {
  console.log(id);
};
var eliminar = (id) => {
  console.log(id);
};

var pais = () => {
  $.ajax({
    url: "../../controllers/Pais.controller.php?op=todos",
    type: "GET",
    success: function (response) {
      response = JSON.parse(response);
      var html = "<option>Seleccione su país de origen</option>";
      $.each(response, function (i, item) {
        html +=
          '<option value="' + item.Codigo + '">' + item.Pais + "</option>";
      });

      $("#PaisId").html(html);
    },
  });
};
var ciudad = () => {
  var Paises_Codigo = $("#PaisId").val();
  $.ajax({
    url: "../../controllers/ciudad.controller.php?op=todosFiltro",
    type: "POST",
    data: { Paises_Codigo: Paises_Codigo },
    success: function (response) {
      response = JSON.parse(response);
      var html = "<option>Seleccione su ciudad</option>";
      $.each(response, function (i, item) {
        html +=
          '<option value="' +
          item.idCiudades +
          '">' +
          item.Ciudad +
          "</option>";
      });

      $("#CiudadId").html(html);
    },
  });
};
