<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 21/02/2024
 */
?>
<h2>ELIMINAR TRABAJOS</h2>
</header>
<main class="modTrabajos eliminarTrabajo">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formModTrabajo" method="post">
            <table>
                <tr>
                    <td class="titulo">CÓDIGO DEL TRABAJO</td>
                    <td><input value="<?php echo $codTrabajoAEliminar; ?>" placeholder="CÓDIGO" id="cod" class="obligatorio" type="text" name="codigo" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">DESCRIPCIÓN DEL TRABAJO</td>
                    <td><input value="<?php echo $descTrabajoAEliminar; ?>" placeholder="DESCRIPCION" id="desc" class="obligatorio" type="text" name="descripcion" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE CREACIÓN</td>
                    <td><input value="<?php echo $fechaCreacionAEliminar; ?>" placeholder="FECHA CREACION" id="fcreacion" class="obligatorio" type="text" name="fechaCreacion" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE INICIO</td>
                    <td><input value="<?php echo $fechaInicioAEliminar; ?>" placeholder="FECHA INICIO" id="finicio" class="obligatorio" type="text" name="fechaInicio" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE FIN</td>
                    <td><input value="<?php echo $fechaFinAEliminar; ?>" placeholder="FECHA FIN" id="ffin" class="obligatorio" type="text" name="fechaFin" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">ESTADO</td>
                    <td><input value="<?php echo $estadoAEliminar; ?>" placeholder="ESTADO" id="estado" class="obligatorio" type="text" name="estado" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">COSTE (EN €)</td>
                    <td><input value="<?php echo $costeAEliminar; ?>" placeholder="COSTE" id="coste" class="obligatorio" type="text" name="coste" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE BAJA</td>
                    <td><input value="<?php echo '--Sin definir--'; ?>" placeholder="FECHA BAJA" id="fbaja" class="obligatorio" type="text" name="fechaBaja" disabled></td>
                </tr>
            </table>
            <button type="submit" name="cancelar" class="botones">CANCELAR</button>
            <button type="submit" name="aceptarBorrado" class="botones botonBorrar">BORRAR</button>
        </form>
    </div>