let url = "../controllers/paises.controllers.php?op=";

$().ready(() => {
  todos();
});

var todos = () => {
  var html = "";
  $.get(url + "todos", (paises) => {
    paises = JSON.parse(paises);
    $.each(paises, (index, pais) => {
      html += `<tr>
        <td>${index + 1}</td>
        <td>${pais.Nombre}</td>
        <td>${pais.Poblacion}</td>
        <td>${pais.CodigoPostal}</td>
        <td>
            <button class="btn btn-primary">Editar</button>
            <button class="btn btn-danger">Eliminar</button>
            <button class="btn btn-success">Ver</button>
        </td>
    </tr>`;
    });
    $("#lista").html(html);
  });
};
