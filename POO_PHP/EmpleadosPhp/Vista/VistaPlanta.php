<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <?php
        include "../Modelo/empleado.php";
        include "../Modelo/planta.php";
        include "../Vista/FormularioPlanta.php";
        $formulario = new FormularioPlanta();
        $formulario->mostrar();
    ?>
</body>

</html>