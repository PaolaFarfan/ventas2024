<h2>Registro de compra</h2>
    <form action="" method="post" id="fromCompras">
        <div>
        <label for="id_producto">ID del Producto:</label><br>
        <input type="text" id="id_producto" name="producto_id" required><br><br>
        </div>

        <div></div>
        <label for="cantidad">Cantidad:</label><br>
        <input type="number" id="cantidad" name="cantidad" required><br><br>
        </div>

        <div>
        <label for="precio">Precio:</label><br>
        <input type="number" id="precio" name="precio"  required><br><br>
        </div>

        <div>
        <label for="id_trabajador">ID del Trabajador:</label><br>
        <input type="text" id="id_trabajador" name="trabajador_id" required><br><br>
        </div>

        <button type="submit"  class="btn btn-succes"
            onclick="registrar_compra();">Registrar</button>

    </form>