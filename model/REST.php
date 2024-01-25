<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 25/01/2024
 */


class REST {

    /**
     * Obtenemos la imagen de la API de la NASA.
     *
     * @param string $fecha La fecha para buscar la imagen (AAAA-MM-DD)
     * 
     * @return array|null En caso de éxito, devuelve toda la información. En caso de error, devuelve null.
     */
    public static function apiAEMET($municipio) {
        // Clave de API de la aemet
        $apiKey = 'QeyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJyZWJla2FzYW5wZXIxNUBnbWFpbC5jb20iLCJqdGkiOiJmN2NmNGQwYS04ZmIzLTQ3MDktOGRmZi1jOTY0ZWVjNjMwNmEiLCJpc3MiOiJBRU1FVCIsImlhdCI6MTcwNjE2NjI2MiwidXNlcklkIjoiZjdjZjRkMGEtOGZiMy00NzA5LThkZmYtYzk2NGVlYzYzMDZhIiwicm9sZSI6IiJ9.pdywk9gEt1aTPL7fw3W8YRSVtodwwj5uxiC8Fpc8g58';
        $codigoBenavente = '490219';
        
        // Solicitud a la API
        $solicitudApi = file_get_contents("https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/{$municipio}");

        // Verificamos si la solicitud fue exitosa
        if ($solicitudApi === false) {
            return null; // Si no devolvemos 'NULL'
        }

        // Decodificamos la respuesta JSON
        $aImagenJSON = json_decode($solicitudApi, true);

        // Verificamos si la decodificación fue exitosa y si la clave 'url' está presente
        if ($aImagenJSON && isset($aImagenJSON['url'])) {
            // Y almacenamos los datos en el siguiente array
            $aResultadoApi['url'] = $aImagenJSON['url'];
            $aResultadoApi['titulo'] = $aImagenJSON['title'];
            $aResultadoApi['explicacion'] = $aImagenJSON['explanation'];

            return $aResultadoApi; // Devolvemos un array con los datos devueltos por la API
        } else {
            return null; // Caso de fallar la decodificación o datos faltantes
        }
    }
}