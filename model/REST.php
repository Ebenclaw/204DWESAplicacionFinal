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
    public static function apiAEMET($municipio) {
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
            $aResultadoApi = json_decode(utf8_encode(file_get_contents($solicitudInfoMunicipio)), true);

            // Se devuelve el primer array asociativo que tiene el JSON
            return $aResultadoApi[0];
        } catch (Exception $excepcion) {
            return $excepcion->getMessage();
        }
    }

    /**
     * Obtenemos el horoscopo del dia y signo del zodiaco seleccionado
     *
     * @param string $signoZodiacal el nombre del signo del zodiaco en ingles (Ej: taurus)
     * @param string $fechaSolicitada la fecha del dia que queremos solicitar (Formato: YYYY-MM-DD)
     * 
     * @return array|null En caso de éxito, devuelve toda la información. En caso de error, devuelve null.
     */
    public static function apiHoroscopo($signoZodiacal, $fechaSolicitada) { //$signoZodiacal, $fechaSolicitada
        try {
            // Solicitud a la API
            $solicitudApi = file_get_contents("https://horoscope-app-api.vercel.app/api/v1/get-horoscope/daily?sign={$signoZodiacal}&day={$fechaSolicitada}", true);

            // Verificamos si la solicitud fue exitosa
            if ($solicitudApi === false) {
                return null; // Si no devolvemos 'NULL'
            }

            // Decodificamos la respuesta JSON
            $aApiJSON = json_decode($solicitudApi, true);
            
            /*
             * {
             *    "data": {
             *       "date": "Dec 5, 2023",
             *       "horoscope_data": "A partnership that may have been moving steadily forward might seem stalled in its tracks. This could involve either business or romance. This isn't a good time to try to pressure your partner toward progress. You'll only meet stubborn resistance, which will slow things down even more. Be patient and let things progress in their own time."
             *    },
             *    "status": 200,
             *    "success": true
             * }
             */
            
            // Almacenamos en una variable el mensaje del campo 'horoscope_data' del campo 'data'
            $mensajeHoroscopo = $aApiJSON['data']['horoscope_data'];
            
            // Se devuelve el mensaje del horoscopo en ingles
            return $mensajeHoroscopo;
        } catch (Exception $excepcion) {
            return $excepcion->getMessage();
        }
    }
}
