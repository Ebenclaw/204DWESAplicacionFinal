<?php

/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 22/01/2023
 */

/**
 * 
 * Clase Usuario
 * 
 * This is a summary: Clase Usuario que contiene el constructor, atributos y metodos (getter y setter) que tiene un Usuario
 * This is a description: Clase Usuario construye un objeto "usuario" para identificar al cliente. Se usara para almacenar los objetos que devuelvan las consultas sql y operar con ellas en la sesion
 * 
 * @source Usuario.php
 * @copyright 2022-2024 DAW2
 * @author Rebeca Sánchez Pérez
 * @since 22/01/2023
 * @since 22/01/2023
 */
class Usuario {
    /*
     * Atributos de Usuario
     */

    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numConexiones;
    private $fechaUltimaConexion;
    private $fechaHoraUltimaConexionAnterior;
    private $perfil;

    /*
     * @constructor Constructor de Usuario
     * 
     * @param int    $codUsuario
     * @param String $password
     * @param String $descUsuario
     * @param int    $numAcceso
     * @param date   $fechaHoraUltimaConexion
     * @param date   $fechaHoraUltimaConexionAnterior
     * @param String    $perfil
     */

    public function __construct($codUsuario, $password, $descUsuario, $numAcceso, $fechaHoraUltimaConexion, $fechaHoraUltimaConexionAnterior, $perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numAcceso = $numAcceso;
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
        $this->perfil = $perfil;
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

    public function getFechaHoraUltimaConexionAnterior() {
        return $this->fechaHoraUltimaConexionAnterior;
    }

    public function getPerfil() {
        return $this->perfil;
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

    public function setFechaHoraUltimaConexionAnterior($fechaHoraUltimaConexionAnterior): void {
        $this->fechaHoraUltimaConexionAnterior = $fechaHoraUltimaConexionAnterior;
    }

    public function setPerfil($perfil): void {
        $this->perfil = $perfil;
    }
}
