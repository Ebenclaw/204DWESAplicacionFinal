<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 25/01/2024
 */

class REST {

    /**
     * Obtenemos el pronostico de un municipio de la API de la AEMET.
     *
     * @param string $municipio el codigo del municipio del que se desea conocer la prediccion (Ej: 49021)
     * 
     * @return array|null En caso de éxito, devuelve toda la información. En caso de error, devuelve null.
     */
    public static function apiAEMET($municipio) { //$municipio
        // Clave de API de la aemet
        $apiKey = 'eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJyZWJla2FzYW5wZXIxNUBnbWFpbC5jb20iLCJqdGkiOiJlNTA1MTk3OC0zM2E0LTQ4ZjgtOTkxOC1hOTk2Zjk2YmVjZTEiLCJpc3MiOiJBRU1FVCIsImlhdCI6MTcwNjQ2NjUzOSwidXNlcklkIjoiZTUwNTE5NzgtMzNhNC00OGY4LTk5MTgtYTk5NmY5NmJlY2UxIiwicm9sZSI6IiJ9.tYp73Mwg56cTKWY3z8vyPXGTXaDAY9vJPXhTcc3z9xI';
        try {
            // Solicitud a la API
            $solicitudApi = file_get_contents("https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/{$municipio}/?api_key={$apiKey}", true);

            // Verificamos si la solicitud fue exitosa
            if ($solicitudApi === false) {
                return null; // Si no devolvemos 'NULL'
            }

            // Decodificamos la respuesta JSON
            $aApiJSON = json_decode($solicitudApi, true);
            
            // Almacenamos en una variable la URL del campo 'datos'
            $solicitudInfoMunicipio = $aApiJSON['datos'];

            // Se devuelve un array asociativo con los datos que devolvia la URL anterior, se usa utf8_encode para traducir las tildes
            $aResultadoApi= json_decode(utf8_encode(file_get_contents($solicitudInfoMunicipio)), true); 

            // Se devuelve el primer array asociativo que tiene el JSON
           return $aResultadoApi[0];
           
        } catch (Exception $excepcion) {
            return $excepcion->getMessage();
        }
    }
}
