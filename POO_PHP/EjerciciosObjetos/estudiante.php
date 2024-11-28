<?php
include "Persona.php"; #Se incluye para poder acceder a ella
class Estudiante extends Persona
    {
        //Atributo curso: que curso estudia el estudiante
        protected $curso;
        //Constructor clase estudiante
        public function Estudiante($nombre, $curso)
        {
            parent::__Construct($nombre);
            $this->curso = $curso;
        }
        //Metodo que obtiene el curso que estudia el estudiante
        public function getCurso()
        {
            return $this->curso;
        }
        //Método que permite cambiar el curso del estudiante.
        public function setCurso($value)
        {
            $this->curso = $value;
        }
    }
?>