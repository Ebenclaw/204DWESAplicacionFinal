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
            select * from T02_Departamento where T02_DescDepartamento like '%".$descDepartamento."%';
        SQL;

        // Se llama a la funcion ejecutarConsulta para devolver el resultado de la consulta de seleccion
        $resultadoConsulta = DBPDO::ejecutaConsulta($sql);

        // Se recorre cada fila, es decir, cada departamento
        while ($oDepartamento = $resultadoConsulta->fetchObject()) {
            $aDepartamentos[$oDepartamento->T02_CodDepartamento] = new Departamento(
                    $oDepartamento->T02_CodDepartamento,
                    $oDepartamento->T02_DescDepartamento,
                    $oDepartamento->T02_FechaCreacionDepartamento,
                    $oDepartamento->T02_VolumenDeNegocio,
                    $oDepartamento->T02_FechaBajaDepartamento);
//            array_push($aDepartamentos, new Departamento(
//                            $oDepartamento->T02_CodDepartamento,
//                            $oDepartamento->T02_DescDepartamento,
//                            $oDepartamento->T02_FechaCreacionDepartamento,
//                            $oDepartamento->T02_VolumenDeNegocio,
//                            $oDepartamento->T02_FechaBajaDepartamento));
        }
        return $aDepartamentos;
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
