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

    public function __construct($codDepartamento, $descDepartamento, $fechaCreacionDepartamento, $volumenDeNegocio, $fechaBajaDepartamento) {
        $this->codDepartamento = $codDepartamento;
        $this->descDepartamento = $descDepartamento;
        $this->fechaCreacionDepartamento = $fechaCreacionDepartamento;
        $this->volumenDeNegocio = $volumenDeNegocio;
        $this->fechaBajaDepartamento = $fechaBajaDepartamento;
    }

    /*
     * Getter
     */
    
    public function getCodUsuario() {
        return $this->codUsuario;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDescUsuario() {
        return $this->descUsuario;
    }

    public function getNumAcceso() {
        return $this->numAcceso;
    }

    public function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    /*
     * Setter
     */
    
    public function setCodUsuario($codUsuario): void {
        $this->codUsuario = $codUsuario;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setDescUsuario($descUsuario): void {
        $this->descUsuario = $descUsuario;
    }

    public function setNumAcceso($numAcceso): void {
        $this->numAcceso = $numAcceso;
    }

    public function setFechaHoraUltimaConexion($fechaHoraUltimaConexion): void {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }
}
