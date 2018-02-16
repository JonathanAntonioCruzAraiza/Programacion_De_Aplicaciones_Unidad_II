<?php

/**
 * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
 class   Usuario {
    protected $nombre;
    protected $apellidoPaterno;
    protected $apellifoMaterno;
    protected $correoElectronico;
    protected $telefonoCelular;
    private $cajon;
    private $tarjeta;
    private $bitacora;
    
    function __construct() {
        
    }

    function getCajon() {
        return $this->cajon;
    }

    function getTarjeta() {
        return $this->tarjeta;
    }

    function getBitacora() {
        return $this->bitacora;
    }

    function setCajon(Cajon $cajon) {
        $this->cajon = $cajon;
    }

    function setTarjeta(Tarjeta $tarjeta) {
        $this->tarjeta = $tarjeta;
    }

    function setBitacora(Bitacora $bitacora) {
        $this->bitacora = $bitacora;
    }

        function getNombre() {
        return $this->nombre;
    }

    function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    function getApellifoMaterno() {
        return $this->apellifoMaterno;
    }

    function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    function getTelefonoCelular() {
        return $this->telefonoCelular;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidoPaterno($apellidoPaterno) {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    function setApellifoMaterno($apellifoMaterno) {
        $this->apellifoMaterno = $apellifoMaterno;
    }

    function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }

    function setTelefonoCelular($telefonoCelular) {
        $this->telefonoCelular = $telefonoCelular;
    }
    
    function registrarVehiculo(Vehiculo $vehiculo){
        
    }
    function registrarUsuario(Usuario $usuario){
        
    }
    
    function asignarCajon(Cajon $cajon, 
                          Vehiculo $vehiculo,
                          Usuario $usuario){
    }
 function escanerCodigo(int $codigoTarjeta){
     
 }
 function  registrarHoraEntrada(Bitacora $bitacora,
                                Tarjeta $tarjeta, 
                                Empleado $empleado ){   
 }
  function  registrarHoraSalida(Bitacora $bitacora,
                                Tarjeta $tarjeta, 
                                Empleado $empleado ){
 }
}
