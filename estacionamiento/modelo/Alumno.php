<?php


/**
  * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
class Alumno extends Usuario {

    private $numeroControl;
    private $bitacora;
    private $area;
  
    
    
    function getArea() {
        return $this->area;
    }

    function setArea(Area $area) {
        array_push($array, $area);
    }

        function getBitacora() {
        return $this->bitacora;
    }

    function setBitacora(Bitacora $bitacora) {
        $this->bitacora = $bitacora;
    }

    
    
    
    function __construct() {
        parent::__construct();
    }

    function getNumeroControl() {
        return $this->numeroControl;
    }

    function setNumeroControl($numeroControl) {
        $this->numeroControl = $numeroControl;
    }

        function registrarVehiculo(Vehiculo $vehiculo) {
        
    }

    function registrarUsuario(Alumno $alumno) {
        
    }

}
