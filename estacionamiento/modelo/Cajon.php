<?php



/**
 * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
class Cajon {
    private $clave;
    private $numero;
    private $descripcion;
    private $usuario;
    
    
    function __construct() {
        
    }

    
    function getClave() {
        return $this->clave;
    }

    function getNumero() {
        return $this->numero;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }


    
}
