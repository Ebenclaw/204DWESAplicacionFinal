<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 19/02/2024
 */
?>
<h2>AÑADIR TRABAJOS</h2>
</header>
<main class="addTrabajos">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formAddTrabajo" method="post">
            <table>
                <tr>
                    <td class="titulo">CÓDIGO DEL TRABAJO</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["CodTrabajo"]) ? $aErrores["CodTrabajo"] : 'A01'); ?>" value="<?php echo (isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : ''); ?>" id="cod" class="obligatorio" type="text" name="codigo"></td>
                </tr>
                <tr>
                    <td class="titulo">DESCRIPCIÓN DEL TRABAJO</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["descTrabajo"]) ? $aErrores["descTrabajo"] : 'Ir a comprar'); ?>" value="<?php echo (isset($_REQUEST['descripcion']) ? $_REQUEST['descripcion'] : ''); ?>" id="desc" class="obligatorio" type="text" name="descripcion"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE CREACIÓN</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["fechaCreacion"]) ? $aErrores["fechaCreacion"] : '2024-02-22 12:00:00'); ?>" value="<?php echo (isset($_REQUEST['fechaCreacion']) ? $_REQUEST['fechaCreacion'] : ''); ?>" id="fcreacion" class="obligatorio" type="text" name="fechaCreacion"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE INICIO</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["fechaInicio"]) ? $aErrores["fechaInicio"] : '2024-02-22 12:00:00'); ?>" value="<?php echo (isset($_REQUEST['fechaInicio']) ? $_REQUEST['fechaInicio'] : ''); ?>" id="finicio" class="obligatorio" type="text" name="fechaInicio"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE FIN</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["fechaFin"]) ? $aErrores["fechaFin"] : '2024-02-22 12:00:00'); ?>" value="<?php echo (isset($_REQUEST['fechaFin']) ? $_REQUEST['fechaFin'] : ''); ?>" id="ffin" class="obligatorio" type="text" name="fechaFin"></td>
                </tr>
                <tr class="radios">
                    <td class="titulo">ESTADO</td>
                    <td>
                        <input value="pendiente" id="estado" class="obligatorio" type="radio" name="estado"><label> PENDIENTE</label><input value="en curso" id="estado" class="obligatorio" type="radio" name="estado"><label> EN CURSO</label><input value="finalizado" id="estado" class="obligatorio" type="radio" name="estado" checked><label> FINALIZADO</label>
                    </td>
                </tr>
                <tr>
                    <td class="titulo">COSTE (EN €)</td>
                    <td><input placeholder="<?php echo (!empty($aErrores["coste"]) ? $aErrores["coste"] : '9.99'); ?>" value="<?php echo (isset($_REQUEST['coste']) ? $_REQUEST['coste'] : ''); ?>" id="coste" class="obligatorio" type="text" name="coste"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE BAJA</td>
                    <td><input value="<?php echo (isset($_REQUEST['fechaBaja']) ? $_REQUEST['fechaBaja'] : ''); ?>" placeholder="--Sin definir--" id="fbaja" class="obligatorio" type="text" name="fechaBaja" disabled></td>
                </tr>
            </table>
            <button type="submit" name="cancelar" class="botones">CANCELAR</button>
            <button type="submit" name="darDeAlta" class="botones">AÑADIR</button>
        </form>
    </div>