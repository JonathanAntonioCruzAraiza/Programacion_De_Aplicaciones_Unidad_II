<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Departamento
 *
 * @author MTI
 */
class Departamento {
    private $nombre;
    private $descripcion;
    private $empleados = array(Departamento);
    
   
    function __construct() {
     
    }
    
    
    function getEmpleados() {
        return $this->empleados;
    }

    function setEmpleados(Empleado $empl) {
        array_push($empleados, $empl);
    }

    
    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


    
}
