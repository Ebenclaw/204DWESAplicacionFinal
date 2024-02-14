<?php
/*
 * @author Rebeca Sánchez Pérez
 * @version 1.0
 * @since 07/02/2024
 */
?>
<h2>TRABAJOS</h2>
</header>
<main class="mtoTrabajos">
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formMtoTrabajo" method="post">
            <input placeholder="BUSCAR TRABAJO POR DESCRIPCIÓN" id="busquedaSimple" class="obligatorio" type="text" name="busquedaSimple" value="<?php echo(isset($_REQUEST['busquedaSimple'])?$_REQUEST['busquedaSimple']:'') ?>">
            <button type="submit" name="buscar" class="botones">BUSCAR</button>
        </form>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="formMtoTrabajoVolver" method="post">
            <button type="submit" name="volver" class="botones">VOLVER</button>
        </form>
        
        <div class="resultado">
            <?php
            var_dump($aTrabajosBuscadosVista);
            ?>
        </div>
    </div>