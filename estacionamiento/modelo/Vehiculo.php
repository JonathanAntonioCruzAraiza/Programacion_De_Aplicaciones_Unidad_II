<?php

/**
  * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
class Vehiculo  {
    //put your code here
    protected $color;
    protected $marca;
    protected $modelo;
    private  $placas;

    
    function __construct() {
        
    }

    
    function getColor() {
        return $this->color;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }


    function setColor($color) {
        $this->color = $color;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }   
    function getPlacas() {
        return $this->placas;
    }

    function setPlacas(Placa $placas) {
        $this->placas = $placas;
    }


}
