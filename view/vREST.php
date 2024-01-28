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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formDetalle" method="post">
            <button type="submit" name="volver" class="botonVolver">Volver</button>
        </form>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formRest" method="post">
            <select name="municipio" id="municipio">
                <option value="490219">Benavente</option>
                <option value="492755">Zamora</option>
                <option value="240896">Leon</option>
                <option value="372745">Salamanca</option>
            </select>
        </form>
        <div class="temperatura">
            <?php
            print_r($_SESSION['apiAEMET']);
//            if (isset($_SESSION['apiAEMET']) && !is_null($_SESSION['apiAEMET'])) {
//                $respuestaAPI = <<<IMAGENTITULOAPI
//                    <div class="container">
//                    <div class="">
//                        <img class='' src='{$_SESSION['apiAEMET']['url']}'>
//                        <div class="">
//                            <p class="card-text">{$_SESSION['apiNasa']['titulo']}</p><br>
//                            <p class="card-text">{$_SESSION['apiNasa']['explicacion']}</p>
//                        </div>
//                    </div>
//                IMAGENTITULOAPI;
//                echo $respuestaAPI;
//            }
            ?>
        </div>
    </div>
</main>