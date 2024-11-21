<?php
class Persona
{
    //Definicion de atributos
    private $identificacion;
    private $nombre;
    private $fechaNacimiento;
    //Constructor
    public function __Construct($nombre)
    {
        $this->nombre = $nombre;
    }
    //Definicion de metodos
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($value)
    {
        $this->nombre = $value;
    }
    public function getIdentificacion()
    {
        return $this->identificacion;
    }
    public function setIdentificacion($value)
    {
        $this->identificacion = $value;
    }
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
    public function setFechaNacimiento($value)
    {
        $this->fechaNacimiento = $value;
    }
}
