<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 19/02/2024
 */
?>
<h2>MODIFICAR TRABAJOS</h2>
</header>
<main class="modTrabajos">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formModTrabajo" method="post">
            <table>
                <tr>
                    <td class="titulo">CÓDIGO DEL TRABAJO</td>
                    <td><input placeholder="CÓDIGO" id="cod" class="obligatorio" type="text" name="codigo" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">DESCRIPCIÓN DEL TRABAJO</td>
                    <td><input placeholder="DESCRIPCION" id="desc" class="obligatorio" type="text" name="descripcion"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE CREACIÓN</td>
                    <td><input placeholder="FECHA CREACION" id="fcreacion" class="obligatorio" type="text" name="fechaCreacion" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE INICIO</td>
                    <td><input placeholder="FECHA INICIO" id="finicio" class="obligatorio" type="text" name="fechaInicio" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE FIN</td>
                    <td><input placeholder="FECHA FIN" id="ffin" class="obligatorio" type="text" name="fechaFin" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">ESTADO</td>
                    <td><input placeholder="ESTADO" id="estado" class="obligatorio" type="text" name="estado" disabled></td>
                </tr>
                <tr>
                    <td class="titulo">COSTE</td>
                    <td><input placeholder="COSTE" id="coste" class="obligatorio" type="text" name="coste"></td>
                </tr>
                <tr>
                    <td class="titulo">FECHA DE BAJA</td>
                    <td><input placeholder="FECHA BAJA" id="fbaja" class="obligatorio" type="text" name="fechaBaja" disabled></td>
                </tr>
            </table>
            <button type="submit" name="cancelar" class="botones">CANCELAR</button>
            <button type="submit" name="aceptar" class="botones" disabled>ACEPTAR</button>
        </form>
    </div>