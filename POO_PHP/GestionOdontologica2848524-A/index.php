<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odontologia</title>
</head>

<body>
    <?php
    if (isset($_GET["accion"])) {
        if ($_GET["accion"] == "asignar") {
            require_once 'Vista/html/asignar.php';
        }
        if ($_GET["accion"] == "consultar") {
            require_once 'Vista/html/consultar.php';
        }
        if ($_GET["accion"] == "cancelar") {
            require_once 'Vista/html/cancelar.php';
        }
    } else {
        require_once 'Vista/html/inicio.php';
    }
    ?>
</body>

</html>