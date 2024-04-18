<?php
require_once('../models/paises.models.php');

error_reporting(0);
$paises = new Clase_Paises();

// get    => url
// post   => formulario
// localhost/pozo/ej1/paises.controllers.php?op=todos
switch ($_GET['op']) {

    case 'todos':
        $datos = array();
        $datos = $paises->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case 'uno':
        $PaisId = $_GET['PaisId'];
        $datos = array();
        $datos = $paises->uno($PaisId);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case 'insertar':
        $Nombre = $_POST['Nombre'];
        $Pablacion = $_POST['Pablacion'];
        $CodigoPostal = $_POST['CodigoPostal'];
        $datos = array();
        $datos = $paises->insertar($Nombre, $Pablacion, $CodigoPostal);
        echo json_encode($datos);
        break;
    case 'actualizar':
        $PaisId = $_POST['PaisId'];
        $Nombre = $_POST['Nombre'];
        $Pablacion = $_POST['Pablacion'];
        $CodigoPostal = $_POST['CodigoPostal'];
        $datos = array();
        $datos = $paises->actualizar($PaisId, $Nombre, $Pablacion, $CodigoPostal);
        echo json_encode($datos);
        break;
    case 'eliminar':
        $PaisId = $_POST['PaisId'];
        $datos = array();
        $datos = $paises->eliminar($PaisId);
        echo json_encode($datos);
        break;
    case 'contar':
        $datos = array();
        $datos = $paises->contar();
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
}
