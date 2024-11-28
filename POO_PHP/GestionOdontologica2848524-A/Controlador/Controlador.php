<?php
class Controlador
{
    public function verPagina($ruta)
    {
        require_once $ruta;
    }

    public function agregarCita($doc, $med, $fec, $hor, $con)
    {
        $cita = new Cita(
            null,
            $fec,
            $hor,
            $doc,
            $med,
            $con,
            "Solicitada",
            "Ninguna"
        );
        $gestorCita = new GestorCita();
        $id = $gestorCita->agregarCita($cita);
        $result = $gestorCita->consultarCitaPorId($id);
        require_once 'Vista/html/confirmarCita.php';
    }

    public function consultarCitas($doc)
    {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once 'Vista/html/consultarCita.php';
    }
}
