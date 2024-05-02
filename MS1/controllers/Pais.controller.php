<?php
require_once('../config/cors.php');
require_once('../models/paises.models.php');

$pais = new Pais();
switch ($_GET['op']) {
    case 'todos':
        $datos = array();
        $datos = $pais->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;

        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];
        if (empty($correo) || empty($contrasenia)) {
            header('Location: ../login.php?op=2');
            exit();
        }
        try {
            $datos = array();
            $datos = $usuario->login($correo);
            $res = mysqli_fetch_assoc($datos);
        } catch (Exception $e) {
            header('Location: ../login.php?op=1');
            exit();
        }
        try {
            if (is_array($res) and count($res) > 0) {
                if ($contrasenia == $res['contrasenia']) {
                    $_SESSION['UsuarioId'] = $res['UsuarioId'];
                    $_SESSION['correo'] = $res['correo'];
                    $_SESSION['rol'] = $res['rol'];
                    header('Location: ../index.php');
                    exit();
                }
            }
        } catch (\Throwable $th) {
            header('Location: ../login.php?op=1');
            exit();
        }
        break;
}
