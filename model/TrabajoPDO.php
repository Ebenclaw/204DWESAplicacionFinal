<?php

/*
 * @author Rebeca Sánchez Pérez
 * @version 1.2
 * @since 14/02/2023
 */

class TrabajoPDO {

    public static function buscaTrabajoPorCod() {
        
    }

    public static function buscaTrabajosPorDesc($descTrabajo = null) {

        //Consulta SQL para validar si la descripcion del trabajo existe
        $sql = <<<SQL
            select * from T11_Trabajo where T11_DescTrabajo like '%$descTrabajo%';
        SQL;

        // Se llama a la funcion ejecutarConsulta para devolver el resultado de la consulta de seleccion
        $resultadoConsulta = DBPDO::ejecutaConsulta($sql);

        // Se inicializa un array que almacena objetos Trabajos relativos a cada registro de la consulta
        $aTrabajos = [];
        
        // Se recorre cada fila, es decir, cada trabajo
        while ($oT11Trabajo = $resultadoConsulta->fetchObject()) {
            $aTrabajos[$oT11Trabajo->T11_CodTrabajo] = new Trabajo(
                    $oT11Trabajo->T11_CodTrabajo,
                    $oT11Trabajo->T11_DescTrabajo,
                    $oT11Trabajo->T11_FechaCreacion,
                    $oT11Trabajo->T11_FechaInicio,
                    $oT11Trabajo->T11_FechaFin,
                    $oT11Trabajo->T11_Estado,
                    $oT11Trabajo->T11_Coste,
                    $oT11Trabajo->T11_FechaBaja);
        }
        
        //Se devuelven los trabajos
        return $aTrabajos;
    }

    public static function altaTrabajo() {
        
    }

    public static function bajaFisicaTrabajo() {
        
    }

    public static function bajaLogicaTrabajo() {
        
    }

    public static function modificaTrabajo() {
        
    }

    public static function rehabilitaTrabajo() {
        
    }

    public static function validaCodNoExiste() {
        
    }
}
