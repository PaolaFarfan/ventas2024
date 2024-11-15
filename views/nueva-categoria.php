<h2>Formulario de Categoria</h2>
    <form action="submit" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="detalles">Detalles:</label><br>
        <textarea id="detalles" name="detalles" rows="4" cols="50" required></textarea><br><br>

        <button type="submit"  class="btn btn-succes"
        onclick="registrar_categoria();">Registrar</button>
    </form>

    
    <script src="<?php echo BASEE_URL?>views/js/functions_producto.js"></script>
    <script>registrar_categoria();</script>