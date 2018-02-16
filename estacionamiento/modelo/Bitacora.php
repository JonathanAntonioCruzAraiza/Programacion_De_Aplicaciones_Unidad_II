<?php



/**
 * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
class Bitacora {
     

    private $fecha;
    private $horaEntrada;
    private $horaSalida;
    private $incidencia = array(Incidencia);
     
    
    function __construct() {
        
    }

    
    function getFecha() {
        return $this->fecha;
    }

    function getHoraEntrada() {
        return $this->horaEntrada;
    }

    function getHoraSalida() {
        return $this->horaSalida;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHoraEntrada($horaEntrada) {
        $this->horaEntrada = $horaEntrada;
    }

    function setHoraSalida($horaSalida) {
        $this->horaSalida = $horaSalida;
    }
    function getUsuario() {
        return $this->usuario;
    }

    function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }

    function getIncidencia() {
        return $this->incidencia;
    }

    function setIncidencia(Incidencia $incidencia) {
        $this->incidencia = $incidencia;
    }


            
}
