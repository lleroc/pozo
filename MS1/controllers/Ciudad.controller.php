<?php
error_reporting(0);
require_once('../config/cors.php');
require_once('../models/ciudades.models.php');

$ciudades = new Ciudades();
switch ($_GET['op']) {
    case 'todos':
        $datos = array();
        $datos = $ciudades->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case 'todosFiltro':
        $Paises_Codigo = $_POST['Paises_Codigo'];
        $datos = array();
        $datos = $ciudades->todosFiltro($Paises_Codigo);
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case 'uno':
        $idCiudades = $_POST['idCiudades'];
        $datos = array();
        $datos = $ciudades->uno($idCiudades);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
}
