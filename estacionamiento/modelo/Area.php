<?php

/**
 *
 * @authorRosa Sarahi Huerta Gonzalez
 * @authorLuis Gerardo Moñoz Jueáres
 * @author Jonathan Antonio Cruz Araiza
 * @version 1.0
 */
class Area {
   private $nombre;
   private $descripcion;
   private $alumno  =  array (Alumno);
   function getNombre() {
       return $this->nombre;
   }

   function getDescripcion() {
       return $this->descripcion;
   }

   function getAlumno() {
       return $this->alumno;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setDescripcion($descripcion) {
       $this->descripcion = $descripcion;
   }

   function setAlumno(Alumno $alum) {
       array_push($alum, $alum);
   }



   
}
