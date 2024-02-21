<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 07/02/2024
 */
?>
<h2>MANTENIMIENTO TRABAJOS</h2>
</header>
<main class="mtoTrabajos">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formMtoTrabajo" method="post">
            <input placeholder="BUSCAR TRABAJO POR DESCRIPCIÓN" id="busquedaSimple" class="obligatorio" type="text" name="busquedaSimple" value="<?php echo(isset($_REQUEST['busquedaSimple']) ? $_REQUEST['busquedaSimple'] : '') ?>">
            <button type="submit" name="buscar" class="botones">BUSCAR</button>
        </form>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formMtoTrabajoVolver" method="post">
            <button type="submit" name="volver" class="botones botonVolver">VOLVER</button>
        </form>

        <div class="resultado">
            <table class="tablaTrabajos">
                <thead>
                    <tr>
                        <th>CÓDIGO</th>
                        <th>DESCRIPCIÓN</th>
                        <th>FECHA DE CREACIÓN</th>
                        <th>FECHA DE INICIO</th>
                        <th>FECHA DE FIN</th>
                        <th>ESTADO</th>
                        <th>COSTE</th>
                        <th>FECHA DE BAJA</th>
                        <th colspan='4'></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($aTrabajosBuscadosVista as $aTrabajos) {//Recorro el objeto del resultado que contiene un array
                        echo ("<tr>");
                        echo ("<td>" . $aTrabajos['codTrabajo'] . "</td>");
                        echo ("<td>" . $aTrabajos['descTrabajo'] . "</td>");
                        echo ("<td>" . $aTrabajos['fechaCreacion'] . "</td>");
                        echo ("<td>" . $aTrabajos['fechaInicio'] . "</td>");
                        echo ("<td>" . $aTrabajos['fechaFin'] . "</td>");
                        echo ("<td>" . $aTrabajos['estado'] . "</td>");
                        echo ("<td>" . $aTrabajos['coste'] . "€</td>");
                        echo ("<td>" . $aTrabajos['fechaBaja'] . "</td>");
                        echo ("<td>");
                            echo ("<form method='post'>");
                            echo ("<button name='mostrarTrabajo' value='{$aTrabajos['codTrabajo']}' id='botonMostrar' type='submit'><img src='webroot/image/ojo.png' id='fotoMostrar' alt='INFO'></button>");
                            echo ("</form>");
                        echo ("</td>");
                        echo ("<td>");
                            echo ("<form method='post'>");
                            echo ("<button name='modificarTrabajo' value='{$aTrabajos['codTrabajo']}' id='botonEditar' type='submit'><img src='webroot/image/editar.png' id='fotoEditar' alt='EDIT'></button>");
                            echo ("</form>");
                        echo ("</td>");
                        echo ("<td>");
                            echo ("<form method='post'>");
                            echo ("<button name='eleminarTrabajo' value='{$aTrabajos['codTrabajo']}' id='botonEliminar' type='submit'><img src='webroot/image/borrar.png' id='fotoEliminar' alt='DELETE'></button>");
                            echo ("</form>");
                        echo ("</td>");
                        echo ("</tr>");
//                    var_dump($aTrabajosBuscadosVista);
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>