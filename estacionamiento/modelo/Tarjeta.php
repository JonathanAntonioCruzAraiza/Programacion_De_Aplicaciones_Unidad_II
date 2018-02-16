<?php



/**
  * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
class Tarjeta {
    private $tarjeta;
    private $numeroTarjeta;
    private $usuario;
    
    
    function __construct() {
        
    }

    
    function getTarjeta() {
        return $this->tarjeta;
    }

    function getNumeroTarjeta() {
        return $this->numeroTarjeta;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setTarjeta($tarjeta) {
        $this->tarjeta = $tarjeta;
    }

    function setNumeroTarjeta($numeroTarjeta) {
        $this->numeroTarjeta = $numeroTarjeta;
    }

    function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }


    
    
}
