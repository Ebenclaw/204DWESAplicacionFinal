<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 27/01/2024
 */
?>
<h2 class="tituloRest">API REST AEMET</h2>
</header>
<main class="rest">
    <div class="container">
        <?php
        // Definir el valor por defecto para el select
        $municipioSeleccionado = isset($_SESSION['municipioSeleccionado']) ? $_SESSION['municipioSeleccionado'] : '';
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRest" method="post">
            <select name="municipio" id="municipio">
                <option value="" default>-Selecciona un municipio-</option>
                <option value="49021" <?php echo ($municipioSeleccionado === '49021') ? 'selected' : ''; ?>>Benavente</option>
                <option value="49200" <?php echo ($municipioSeleccionado === '49200') ? 'selected' : ''; ?>>Santa Cristina de la Polvorosa</option>
                <option value="49187" <?php echo ($municipioSeleccionado === '49187') ? 'selected' : ''; ?>>San Cristóbal de Entreviñas</option>
                <option value="49041" <?php echo ($municipioSeleccionado === '49041') ? 'selected' : ''; ?>>Castrogonzalo</option>
                <option value="49275" <?php echo ($municipioSeleccionado === '49275') ? 'selected' : ''; ?>>Zamora</option>
                <option value="24089" <?php echo ($municipioSeleccionado === '24089') ? 'selected' : ''; ?>>León</option>
                <option value="37107" <?php echo ($municipioSeleccionado === '37107') ? 'selected' : ''; ?>>Ciudad Rodrigo</option>
                <option value="37274" <?php echo ($municipioSeleccionado === '37274') ? 'selected' : ''; ?>>Salamanca</option>
            </select>
            <button type="submit" name="solicitarMunicipio" class="botonSolicitar">SOLICITAR PRONÓSTICO</button>
        </form>
        <div class="infoApi">
            <?php
            if (isset($_SESSION['apiAEMET']) && $_SESSION['municipioSeleccionado'] != null) {
                echo('<p class="mensajeAEMET">Según la <a href="' . $_SESSION['apiAEMET']['origen']['enlace'] . '" target="_blank">AEMET</a>, el pronóstico de hoy de <u>' . $_SESSION['apiAEMET']['nombre'] . '</u>, de la provincia de <u>' . $_SESSION['apiAEMET']['provincia'] . '</u>, es el siguiente:</p>');
                //var_dump($_SESSION['apiAEMET']['prediccion']['dia'][1]['temperatura']);
                echo('<table class="tablaAEMET">');
                echo('<tr><th>Hora</th><th>Temperatura</th></tr>');
                for ($i = 0; $i < 24; $i++) {
                    echo('<tr>');
                    echo('<td>' . $_SESSION['apiAEMET']['prediccion']['dia'][1]['temperatura'][$i]['periodo'] . ':00</td>');
                    echo('<td>' . $_SESSION['apiAEMET']['prediccion']['dia'][1]['temperatura'][$i]['value'] . 'ºC</td>');
                    echo('</tr>');
                }
                echo('</table>');
            } else {
                echo('<div class="infoAEMET"><p>INFORMACIÓN DEL REST DE LA AEMET</p></br>');
                echo('<p>Esta funcionalidad proporciona las temperaturas por hora del municipio seleccionado del dia actual.</p></br>');
                echo('<p>Metodo de peticion HTTP: <b>GET</b></p></br>');
                echo('<p>Parámetros de la peticion: <b>codigo del municipio</b> y <b>api key</b></p></br>');
                echo('<p>Peticion de la API: <b>https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/horaria/{municipio}</b></p></br>');
                echo('<p>Acceso a las peticiones de JSON: <b><a href="https://opendata.aemet.es/dist/index.html?" target="_blank">https://opendata.aemet.es/dist/index.html?</a></b></p></br>');
                echo('</div>');
            }
            ?>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRest" method="post">
            <button type="submit" name="volver" class="botonVolver">VOLVER</button>
        </form>
    </div>
    <div class="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRestHoroscopo" method="post">
            <?php
            // Definir el valor por defecto para el select
            $signoSeleccionado = isset($_SESSION['signoZodiacoSeleccionado']) ? $_SESSION['signoZodiacoSeleccionado'] : '';
            ?>
            <select name="signoZodiacoSeleccionado" id="signo">
                <option value="" default>-Selecciona un signo-</option>
                <option value="aries" <?php echo ($signoSeleccionado === 'aries') ? 'selected' : ''; ?>>Aries (21/03 - 19/04)</option>
                <option value="taurus" <?php echo ($signoSeleccionado === 'taurus') ? 'selected' : ''; ?>>Tauro (20/03 - 20/05)</option>
                <option value="gemini" <?php echo ($signoSeleccionado === 'gemini') ? 'selected' : ''; ?>>Géminis (21/05 - 20/06)</option>
                <option value="cancer" <?php echo ($signoSeleccionado === 'cancer') ? 'selected' : ''; ?>>Cáncer (21/06 - 22/07)</option>
                <option value="leo" <?php echo ($signoSeleccionado === 'leo') ? 'selected' : ''; ?>>Leo (23/07 - 22/08)</option>
                <option value="virgo" <?php echo ($signoSeleccionado === 'virgo') ? 'selected' : ''; ?>>Virgo (23/08 - 22/09)</option>
                <option value="libra" <?php echo ($signoSeleccionado === 'libra') ? 'selected' : ''; ?>>Libra (23/09 - 22/10)</option>
                <option value="scorpio" <?php echo ($signoSeleccionado === 'scorpio') ? 'selected' : ''; ?>>Escorpio (23/10 - 21/11)</option>
                <option value="sagittarius" <?php echo ($signoSeleccionado === 'sagittarius') ? 'selected' : ''; ?>>Sagitario (22/11 - 21/12)</option>
                <option value="capricorn" <?php echo ($signoSeleccionado === 'capricorn') ? 'selected' : ''; ?>>Capricornio (22/12 - 19/01)</option>
                <option value="aquarius" <?php echo ($signoSeleccionado === 'aquarius') ? 'selected' : ''; ?>>Acuario (20/01 - 18/02)</option>
                <option value="pisces" <?php echo ($signoSeleccionado === 'pisces') ? 'selected' : ''; ?>>Piscis (19/02 - 20/03)</option>
                <!--                Aries: 21 de marzo al 19 de abril
                                    Tauro: 20 de abril y al 20 de mayo
                                    Géminis: 21 de mayo al 20 de junio
                                    Cáncer: 21 de junio al 22 de julio
                                    Leo: 23 de julio al 22 de agosto
                                    Virgo: 23 de agosto al 22 de septiembre
                                    Libra: 23 de septiembre al 22 de octubre
                                    Escorpio: 23 de octubre al 21 de noviembre
                                    Sagitario: 22 de noviembre al 21 de diciembre
                                    Capricornio: 22 de diciembre al 19 de enero
                                    Acuario: 20 de enero al 18 de febrero
                                    Piscis: 19 de febrero al 20 de marzo-->
            </select>
            <input type="date" id="fechaZodiaco" name="fechaZodiacoSeleccionada" value="<?php echo isset($_SESSION['fechaZodiacoSeleccionada']) ? $_SESSION['fechaZodiacoSeleccionada'] : date("Y-m-d") ?>" max=<?php
            $hoy = date("Y-m-d");
            echo $hoy;
            ?>>
            <button type="submit" name="solicitarHoroscopo" class="botonSolicitar">SOLICITAR HORÓSCOPO</button>
        </form>
        <div class="infoApiHoroscopo">
            <?php
            if (isset($_SESSION['apiHoroscopo'])) {
                echo($_SESSION['apiHoroscopo']);
            } else {
                echo('<div class="infoHoroscopo"><p>INFORMACIÓN DEL REST DEL HORÓSPOCO</p></br>');
                echo('<p>Esta funcionalidad proporciona el mensaje del horoscopo segun el zigno del zodiaco y la fecha seleccionados</p></br>');
                echo('<p>Metodo de peticion HTTP: <b>GET</b></p></br>');
                echo('<p>Parámetros de la peticion: <b>signo zodiacal</b> y <b>fecha</b></p></br>');
                echo('<p>Peticion de la API: <b>https://horoscope-app-api.vercel.app/api/v1/get-horoscope/daily</b></p></br>');
                echo('<p>Acceso a las peticiones de JSON: <b><a href="https://horoscope-app-api.vercel.app/" target="_blank">https://horoscope-app-api.vercel.app/</a></b></p></br>');
                echo('</div>');
            }
            ?>
        </div>
    </div> 
    <div class="container2">
        <!--        aqui aparecera la API que desarrollamos-->
    </div>
</main>