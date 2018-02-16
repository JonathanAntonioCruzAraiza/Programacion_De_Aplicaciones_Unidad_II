<?php


/*** and open the template in the editor.
 *
  * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
class Empleado extends Usuario {
    
    private $numeroEmpleado;
    private $departamento;
    
    
    function __construct() {
        parent::__construct();
    }

    function getNumeroEmpleado() {
        return $this->numeroEmpleado;
    }
        function setNumeroEmpleado($numeroEmpleado) {
        $this->numeroEmpleado = $numeroEmpleado;
    }
    function getDepartamento() {
        return $this->departamento;
    }

    function setDepartamento(Departamento $departamento) {
        $this->departamento = $departamento;
    }


    




}
