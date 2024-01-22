<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 22/01/2023
 */

interface UsuarioDB{
    public static function validarUsuario($codUsuario, $password);
}
