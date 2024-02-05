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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRest" method="post">
            <select name="municipio" id="municipio">
                <option value="" default>-Selecciona un municipio-</option>
                <option value="49021">Benavente</option>
                <option value="49200">Santa Cristina de la Polvorosa</option>
                <option value="49187">San Cristóbal de Entreviñas</option>
                <option value="49041">Castrogonzalo</option>
                <option value="49275">Zamora</option>
                <option value="24089">León</option>
                <option value="37107">Ciudad Rodrigo</option>
                <option value="37274">Salamanca</option>
            </select>
            <button type="submit" name="solicitarMunicipio" class="botonSolicitar">SOLICITAR PRONÓSTICO</button>
        </form>
        <div class="infoApi">
            <?php
            if (isset($_SESSION['apiAEMET']) && $_SESSION['municipioSeleccionado'] != null) {
                echo('<p class="mensajeAEMET">Según la <a href="' . $_SESSION['apiAEMET']['origen']['enlace'] . '" target="_blank">AEMET</a>, el pronóstico de <u>' . $_SESSION['apiAEMET']['nombre'] . '</u>, de la provincia de <u>' . $_SESSION['apiAEMET']['provincia'] . '</u>, es el siguiente:</p>');
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
            }
            ?>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRest" method="post">
            <button type="submit" name="volver" class="botonVolver">VOLVER</button>
        </form>
    </div>
    <div class="wrapper">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRestHoroscopo" method="post">
            <select name="signoZodiacoSeleccionado" id="signo">
                <option value="" default>-Selecciona un signo-</option>
                <option value="aries">Aries (21/03 - 19/04)</option>
                <option value="taurus">Tauro (20/03 - 20/05)</option>
                <option value="gemini">Géminis (21/05 - 20/06)</option>
                <option value="cancer">Cáncer (21/06 - 22/07)</option>
                <option value="leo">Leo (23/07 - 22/08)</option>
                <option value="virgo">Virgo (23/08 - 22/09)</option>
                <option value="libra">Libra (23/09 - 22/10)</option>
                <option value="scorpio">Escorpio (23/10 - 21/11)</option>
                <option value="sagittarius">Sagitario (22/11 - 21/12)</option>
                <option value="capricorn">Capricornio (22/12 - 19/01)</option>
                <option value="aquarius">Acuario (20/01 - 18/02)</option>
                <option value="pisces">Piscis (19/02 - 20/03)</option>
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
            <input type="date" name="fechaZodiacoSeleccionada" value="<?php echo isset($_SESSION['fechaZodiacoSeleccionada']) ? $_SESSION['fechaZodiacoSeleccionada'] : "" ?>" max=<?php
            $hoy = date("Y-m-d");
            echo $hoy;
            ?>>
            <button type="submit" name="solicitarHoroscopo" class="botonSolicitar">SOLICITAR HORÓSCOPO</button>
        </form>
        <div class="infoApiHoroscopo">
            <?php
            if (isset($_SESSION['apiHoroscopo'])) {
                echo($_SESSION['apiHoroscopo']);
            }
            ?>
        </div>
    </div> 


</main>