<?php



/**
 * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
class Placa {
    
    private $color;
    private $numeroPlaca;
    private $vehiculo;
    
    
    function __construct() {
        
    }

    
    function getColor() {
        return $this->color;
    }

    function getNumeroPlaca() {
        return $this->numeroPlaca;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setNumeroPlaca($numeroPlaca) {
        $this->numeroPlaca = $numeroPlaca;
    }


    
    
    function getVehiculo() {
        return $this->vehiculo;
    }

    function setVehiculo(Vehiculo $vehiculo) {
        $this->vehiculo = $vehiculo;
    }


}
