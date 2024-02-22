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
                    <td><input value="<?php echo $codTrabajoAEditar; ?>" placeholder="A01" id="cod" class="obligatorio" type="text" name="codigo"></td>
                </tr>
                <tr>
                    <td class="titulo">DESCRIPCIÓN DEL TRABAJO</td>
                    <td><input value="<?php echo $descTrabajoAEditar; ?>" placeholder="COCINAR" id="desc" class="obligatorio" type="text" name="descripcion"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE CREACIÓN</td>
                    <td><input value="<?php echo $fechaCreacionAEditar; ?>" placeholder="2024-02-22 12:00:00" id="fcreacion" class="obligatorio" type="text" name="fechaCreacion"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE INICIO</td>
                    <td><input value="<?php echo $fechaInicioAEditar; ?>" placeholder="2024-02-22 12:00:00" id="finicio" class="obligatorio" type="text" name="fechaInicio"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE FIN</td>
                    <td><input value="<?php echo $fechaFinAEditar; ?>" placeholder="2024-02-22 12:00:00" id="ffin" class="obligatorio" type="text" name="fechaFin"></td>
                </tr>
                <tr>
                    <td class="titulo">ESTADO</td>
                    <td class="radios">
                        <input id="estado" class="obligatorio" type="radio" name="estado"><label> PENDIENTE</label><input id="estado" class="obligatorio" type="radio" name="estado"><label> EN CURSO</label><input id="estado" class="obligatorio" type="radio" name="estado"><label> FINALIZADO</label>
                    </td>
                </tr>
                <tr>
                    <td class="titulo">COSTE (EN €)</td>
                    <td><input value="<?php echo $costeAEditar; ?>" placeholder="10" id="coste" class="obligatorio" type="text" name="coste"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE BAJA</td>
                    <td><input value="<?php echo '--Sin definir--'; ?>" placeholder="2024-02-22 12:00:00" id="fbaja" class="obligatorio" type="text" name="fechaBaja" disabled></td>
                </tr>
            </table>
            <button type="submit" name="cancelar" class="botones">CANCELAR</button>
            <button type="submit" name="aceptar" class="botones">ACEPTAR</button>
        </form>
    </div>