<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 14/02/2024
 */

/**
 * 
 * Clase Trabajo
 * 
 * Clase Trabajo que contiene la construcion de un objeto relativo a un trabajo
 * 
 * @source Trabajo.php
 * @copyright 2022-2024 DAW2
 */
class Trabajo {
    
    /*
     * Atributos de Trabajo
     */

    private $codTrabajo;
    private $descTrabajo;
    private $fechaCreacion;
    private $fechaInicio;
    private $fechaFin;
    private $estado;
    private $coste;
    private $fechaBaja;

    /*
     * Constructor de Trabajo
     */

    public function __construct($codTrabajo, $descTrabajo, $fechaCreacion, $fechaInicio, $fechaFin, $estado, $coste, $fechaBaja = null) {
        $this->codTrabajo = $codTrabajo;
        $this->descTrabajo = $descTrabajo;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->estado = $estado;
        $this->coste = $coste;
        $this->fechaBaja = $fechaBaja;
    }

    /*
     * Getter
     */

    public function getCodTrabajo() {
        return $this->codTrabajo;
    }

    public function getDescTrabajo() {
        return $this->descTrabajo;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    public function getFechaFin() {
        return $this->fechaFin;
    }
    public function getEstado() {
        return $this->estado;
    }
    public function getCoste() {
        return $this->coste;
    }
    public function getFechaBaja() {
        return $this->fechaBaja;
    }

    /*
     * Setter
     */
        
    public function setCodTrabajo($codTrabajo): void {
        $this->codTrabajo = $codTrabajo;
    }

    public function setDescTrabajo($descTrabajo): void {
        $this->descTrabajo = $descTrabajo;
    }

    public function setFechaCreacion($fechaCreacion): void {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function setFechaInicio($fechaInicio): void {
        $this->fechaInicio = $fechaInicio;
    }

    public function setFechaFin($fechaFin): void {
        $this->fechaFin = $fechaFin;
    }
    
    public function setEstado($estado): void {
        $this->estado = $estado;
    }
    
    public function setCoste($coste): void {
        $this->coste = $coste;
    }
    
    public function setFechaBaja($fechaBaja): void {
        $this->fechaBaja = $fechaBaja;
    }
}
