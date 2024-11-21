<?php
class Contratista extends Empleado
{
    private $totalHoras;
    private $valorHora;
    //Constructor
    public function Contratista($identificacion, $nombre, $cargo)
    {
        //Se ejecuta el constructor de la clase Padre Empleado
        parent::__Construct($identificacion, $nombre, $cargo);
    }
    public function calcularSalario($totalHoras, $valorHora)
    {
        $this->salario = $valorHora * $totalHoras;
    }
    public function getTotalHoras()
    {
        return $this->totalHoras;
    }
    public function getValorHora()
    {
        return $this->valorHora;
    }
    public function getCargo()
    {
        return $this->cargo;
    }
    public function getIdentificacion()
    {
        return $this->identificacion;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function setTotalHoras($newVal)
    {

        $this->totalHoras = $newVal;
    }
    public function setValorHora($newVal)
    {
        $this->valorHora = $newVal;
    }
}
