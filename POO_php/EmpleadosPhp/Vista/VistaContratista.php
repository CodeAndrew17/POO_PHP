<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <?php
        include "../Modelo/Empleado.php";
        include "../Modelo/Contratista.php";
        include "../Vista/FormularioContratista.php";
        $formulario = new FormularioContratista();
        $formulario->mostrar();
    ?>
</body>

</html>