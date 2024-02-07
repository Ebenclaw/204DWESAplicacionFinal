<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 07/02/2024
 */

/**
 * 
 * Clase Departamento
 * 
 * Clase Departamento que contiene la construcion de un objeto relativo a un departamento
 * 
 * @source Departamento.php
 * @copyright 2022-2024 DAW2
 */
class Departamento {
    
    /*
     * Atributos de Departamento
     */

    private $codDepartamento;
    private $descDepartamento;
    private $fechaCreacionDepartamento;
    private $volumenDeNegocio;
    private $fechaBajaDepartamento;

    /*
     * Constructor de Departamento
     */

    public function __construct($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenDeNegocio, $fechaBajaDepartamento = null) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
        $this->volumenDeNegocio = $volumenDeNegocio;
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }

    /*
     * Getter
     */

    public function getCodDepartamento() {
        return $this->codDepartamento;
    }

    public function getDescDepartamento() {
        return $this->descDepartamento;
    }

    public function getFechaCreacionDepartamento() {
        return $this->fechaCreacionDepartamento;
    }

    public function getVolumenDeNegocio() {
        return $this->volumenDeNegocio;
    }

    public function getFechaBajaDepartamento() {
        return $this->fechaBajaDepartamento;
    }

    /*
     * Setter
     */
        
    public function setCodDepartamento($codDepartamento): void {
        $this->codDepartamento = $codDepartamento;
    }

    public function setDescDepartamento($descDepartamento): void {
        $this->descDepartamento = $descDepartamento;
    }

    public function setFechaCreacionDepartamento($fechaCreacionDepartamento): void {
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
    }

    public function setVolumenDeNegocio($volumenDeNegocio): void {
        $this->volumenDeNegocio = $volumenDeNegocio;
    }

    public function setFechaBajaDepartamento($fechaBajaDepartamento): void {
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }
}
