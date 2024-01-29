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
            <button type="submit" name="solicitar" class="botonSolicitar">SOLICITAR PRONÓSTICO</button>
        </form>
        <div class="infoApi">
            <?php
            if (isset($_SESSION['apiAEMET'])&&$_SESSION['municipioSeleccionada']!=null) {
                echo('<p class="mensajeAEMET">Según la <a href="'.$_SESSION['apiAEMET']['origen']['enlace'].'" target="_blank">AEMET</a>, el pronóstico de <u>' . $_SESSION['apiAEMET']['nombre'] . '</u>, de la provincia de <u>' . $_SESSION['apiAEMET']['provincia'] . '</u>, es el siguiente:</p>');
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
</main>