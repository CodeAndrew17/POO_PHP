<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //se incluye el archivo donde esta el código de la clase Persona
    include "Persona.php";
    //Se instancia el primer Objeto
    $objPersona = new Persona("Pedro Picapiedra");
    echo "Nombre del primer objeto Persona: " . $objPersona->getNombre();
    /* Para poder mostrar en pantalla el nombre de la
persona se debe utilizar el método getNombre(), ya que
el atributo $nombre es privado.*/
    //Ahora se instancia otra vez la clase persona
    $objPersona2 = new Persona("Vilma");
    echo "<br> Nombre del segundo objeto Persona: " . $objPersona2->getNombre();
    ?>
</body>

</html>