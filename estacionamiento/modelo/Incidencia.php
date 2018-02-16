<?php

/**
  * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
class Incidencia {
    
    private $fecha;
    private $discripcion;
    private $usuario = array(Usuario);
    private $bitacora ;
    
    function __construct() {
        
    }

    
    function getFecha() {
        return $this->fecha;
    }

    function getDiscripcion() {
        return $this->discripcion;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setDiscripcion($discripcion) {
        $this->discripcion = $discripcion;
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function setUsuario(Usuario $usuar) {
        array_push($usuario, $usuar);
    }
    
    function getBitacora() {
        return $this->bitacora;
    }

    function setBitacora(Bitacora $bitacora) {
        $this->bitacora = $bitacora;
    }




}
