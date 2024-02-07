<?php

/*
 * @author Rebeca Sánchez Pérez
 * @version 1.2
 * @since 07/02/2023
 */

class DepartamentoPDO {

    public static function buscaDepartamentoPorCod() {
        
    }

    public static function buscaDepartamentosPorDesc($descDepartamento) {
        // Se inicializa un array que almacena objetos Departamentos relativos a cada registro de la consulta
        $aDepartamentos = [];
        //Consulta SQL para validar si la descripcion del departamento existe
        $sql = <<<SQL
            SELECT * FROM T02_Departamento 
            WHERE T02_DescDepartamento LIKE'%$descDepartamento%';
        SQL;

        // Se llama a la funcion ejecutarConsulta para devolver el resultado de la consulta de seleccion
        $resultadoConsulta = DBPDO::ejecutaConsulta($sql);

        // Se recorre cada fila, es decir, cada departamento
        if ($resultadoConsulta !== false) {
            while ($oDepartamento = $resultadoConsulta->fetchObject()) { // Recorro el resultado de la consulta y creo un objeto por iteración (elemento)
                $aDepartamentos[$oDepartamento->T02_CodDepartamento] = new Departamento(// Creo un array asociativo usando de key el propio código de Departamento y almaceno un objeto Departamento
                        $oDepartamento->T02_CodDepartamento,
                        $oDepartamento->T02_DescDepartamento,
                        $oDepartamento->T02_FechaCreacionDepartamento,
                        $oDepartamento->T02_VolumenDeNegocio,
                        $oDepartamento->T02_FechaBajaDepartamento);
            }
            return $aDepartamentos; // Devuelvo el 'array' con todos los Departamentos
        } else {
            return false; // Si ocurre algún error devolvemos 'false'
        }
    }

    public static function altaDepartamento() {
        
    }

    public static function bajaFisicaDepartamento() {
        
    }

    public static function bajaLogicaDepartamento() {
        
    }

    public static function modificaDepartamento() {
        
    }

    public static function rehabilitaDepartamento() {
        
    }

    public static function validaCodNoExiste() {
        
    }
}
