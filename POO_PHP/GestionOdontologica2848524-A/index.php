<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odontologia</title>
</head>

<body>
    <?php
    require_once 'Controlador/Controlador.php';
    require_once 'Modelo/GestorCita.php';
    require_once 'Modelo/Cita.php';
    require_once 'Modelo/Paciente.php';
    require_once 'Modelo/Conexion.php';

    $controlador = new Controlador();

    if (isset($_GET["accion"])) {
        if ($_GET["accion"] == "asignar") {
            $controlador->verPagina('Vista/html/asignar.php');
        } elseif ($_GET["accion"] == "consultar") {
            $controlador->verPagina('Vista/html/consultar.php');
        } elseif ($_GET["accion"] == "cancelar") {
            $controlador->verPagina('Vista/html/cancelar.php');
        } elseif ($_GET["accion"] == "guardarCita") {
            $controlador->agregarCita(
                $_POST["asignarDocumento"],
                $_POST["medico"],
                $_POST["fecha"],
                $_POST["hora"],
                $_POST["consultorio"]
            );
        } elseif ($_GET["accion"] == "consultarCita") {
            $controlador->consultarCitas($_POST["consultarDocumento"]);
        } elseif ($_GET["accion"] == "cancelarCita") {
            $controlador->cancelarCitas($_POST["cancelarDocumento"]);
        } elseif ($_GET["accion"] == "consultarPaciente") {
            $controlador->consultarPaciente($_GET["documento"]);
        } elseif ($_GET["accion"] == "ingresarPaciente") {
            $controlador->agregarPaciente(
                $_GET["PacDocumento"],
                $_GET["PacNombres"],
                $_GET["PacApellidos"],
                $_GET["PacNacimiento"],
                $_GET["PacSexo"]
            );
        }
    } else {
        $controlador->verPagina('Vista/html/inicio.php');
    }
    ?>
</body>

</html>