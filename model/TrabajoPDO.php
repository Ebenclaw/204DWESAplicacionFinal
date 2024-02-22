<?php

/*
 * @author Rebeca Sánchez Pérez, Carlos García Cachón
 * @version 1.2
 * @since 14/02/2023
 */

class TrabajoPDO {

    public static function buscarTrabajoPorCod($codTrabajo) {

        //Consulta SQL para validar si la descripcion del trabajo existe
        $sql = <<<SQL
            select * from T11_Trabajo where T11_CodTrabajo like '%$codTrabajo%';
        SQL;

        // Se llama a la funcion ejecutarConsulta para devolver el resultado de la consulta de seleccion
        $resultadoConsulta = DBPDO::ejecutaConsulta($sql);

        // Se guarda el resultado en un objeto
        $oTrabajo = $resultadoConsulta->fetchObject();

        // Se comprueba que el objeto contenga datos
        if ($oTrabajo) { 
            // Se crea un objeto Trabajo en base al modelo
            return new Trabajo(
                    $oTrabajo->T11_CodTrabajo,
                    $oTrabajo->T11_DescTrabajo,
                    $oTrabajo->T11_FechaCreacion,
                    $oTrabajo->T11_FechaInicio,
                    $oTrabajo->T11_FechaFin,
                    $oTrabajo->T11_Estado,
                    $oTrabajo->T11_Coste,
                    $oTrabajo->T11_FechaBaja);
        } else {
            return null; 
        }
    }

    public static function buscarTrabajosPorDesc($descTrabajo = null) {

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

    public static function altaTrabajo($codTrabajo, $descTrabajo, $fechaCreacion, $fechaInicio, $fechaFin, $estado, $coste) {
        // Consulta SQL de insercion en la base de datos de un trabajo
        $sql = <<<SQL
            INSERT INTO T11_Trabajo VALUES ('$codTrabajo','$descTrabajo', '$fechaCreacion', '$fechaInicio', '$fechaFin', '$estado', $coste, NULL);
        SQL;
        
        if (DBPDO::ejecutaConsulta($sql)) { // Ejecuto la consulta
            return new Trabajo($codTrabajo, $descTrabajo, $fechaCreacion, $fechaInicio, $fechaFin, $estado, $coste);
        } else {
            return false; // Si la consulta falla devuelvo 'false'
        }
    }

    public static function bajaFisicaTrabajo($codTrabajo) {
        
        // Consulta SQL de borrado en la base de datos de un trabajo
        $sql = <<<SQL
            DELETE FROM T11_Trabajo where T11_CodTrabajo = '$codTrabajo';
        SQL;

        // Se devulve el ejecutar la consulta de delete
        return DBPDO::ejecutaConsulta($sql); 
    }

    public static function bajaLogicaTrabajo() {
        
    }

    public static function modificarTrabajo($codTrabajo, $descTrabajo, $coste) {
        // Consulta de busqueda según el valor del parametro introducido
        $consulta = <<<CONSULTA
            UPDATE T11_Trabajo SET T11_DescTrabajo = '$descTrabajo', T11_Coste = $coste WHERE T11_CodTrabajo = '$codTrabajo';
        CONSULTA;

        // Devolvemos la ejecucion de la consulta
        return DBPDO::ejecutaConsulta($consulta); 
    }

    public static function rehabilitarTrabajo() {
        
    }

    public static function validarCodNoExiste() {
        
    }
}
