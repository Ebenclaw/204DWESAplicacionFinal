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
    public static function apiAEMET() { //$municipio
        // Clave de API de la aemet
        $apiKey = 'eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJyZWJla2FzYW5wZXIxNUBnbWFpbC5jb20iLCJqdGkiOiJlNTA1MTk3OC0zM2E0LTQ4ZjgtOTkxOC1hOTk2Zjk2YmVjZTEiLCJpc3MiOiJBRU1FVCIsImlhdCI6MTcwNjQ2NjUzOSwidXNlcklkIjoiZTUwNTE5NzgtMzNhNC00OGY4LTk5MTgtYTk5NmY5NmJlY2UxIiwicm9sZSI6IiJ9.tYp73Mwg56cTKWY3z8vyPXGTXaDAY9vJPXhTcc3z9xI';
        
        // Solicitud a la API
        $solicitudApi = file_get_contents("https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/49021/?api_key={$apiKey}");

        // Verificamos si la solicitud fue exitosa
        if ($solicitudApi === false) {
            return null; // Si no devolvemos 'NULL'
        }

        // Decodificamos la respuesta JSON
        $aImagenJSON = json_decode($solicitudApi, true);

        // Verificamos si la decodificación fue exitosa 
        if ($aImagenJSON) {
            // Y almacenamos los datos en el siguiente array
            $aResultado['descripcion'] = $aImagenJSON['descripcion'];
            $aResultado['estado'] = $aImagenJSON['estado'];
            $aResultado['datos'] = $aImagenJSON['datos'];
            $aResultado['metadatos'] = $aImagenJSON['metadatos'];
            
            // decodificamos el json que devuelbe la parte de datos
            $solicitudInfoMunicipio = file_get_contents($aResultado['datos']);
            
            // Verificamos si la solicitud fue exitosa
            if ($solicitudApi === false) {
                return null; // Si no devolvemos 'NULL'
            }
            
            // obtenemos los datos del json en un array
            $aInfoMunicipio = json_decode($solicitudInfoMunicipio, true);
            
            // comprobamos que el objeto existe
            if($aInfoMunicipio!=null){
                // devuelve la fecha de la solicitud "2024-01-28T13:38:07"
                $aResultadoApi['elaborado'] = $aInfoMunicipio['elaborado'];
                // devuelve el nombre del municipio "Benavente"
                $aResultadoApi['nombre'] = $aInfoMunicipio['nombre'];
                // devuelve el nombre de la provincia "Zamora"
                $aResultadoApi['provincia'] = $aInfoMunicipio['provincia'];
                // devuelve la prediccion del dia seleccionado
                $aResultadoApi['prediccion'] = $aInfoMunicipio['prediccion']; //dia -> temperatura -> (value && periodo (la hora))
            
                
                return $aResultadoApi; // Devolvemos un array con los datos devueltos por la API
            }    

            
        } else {
            return $aResultado; // Caso de fallar la decodificación o datos faltantes
        }
    }
}