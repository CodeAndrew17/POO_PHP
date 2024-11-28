<?php
class Empleado
{
    protected $cargo;
    protected $identificacion;
    protected $nombre;
    protected $salario;
    public function __Construct($identificacion, $nombre, $cargo)
    {
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->cargo = $cargo;
    }
    protected function getCargo()
    {
        return $this->cargo;
    }

    protected function getIdentificacion()
    {
        return $this->identificacion;
    }

    protected function getNombre()
    {
        return $this->nombre;
    }

    protected function getSalario()
    {
        return $this->salario;
    }
    
    protected function setCargo($newVal)
    {
        $this->cargo = $newVal;
    }

    protected function setIdentificacion($newVal)
    {
        $this->identificacion = $newVal;
    }

    protected function setNombre($newVal)
    {
        $this->nombre = $newVal;
    }
    
    protected function setSalario($newVal)
    {
        $this->salario = $newVal;
    }
}
