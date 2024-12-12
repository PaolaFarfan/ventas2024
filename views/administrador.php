
    <style>
    .producto {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    width: 100%;
}

.productos {
    background-color: #e9f5ff;
    border: 1px solid #cde7ff;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    flex: 1 1 calc(50% - 20px);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.productos p {
    font-size: 16px;
    font-weight: bold;
    color: #333333;
    margin-bottom: 10px;
}

.productos a {
    display: inline-block;
    text-decoration: none;
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    transition: background-color 0.3s;
}

.productos a:hover {
    background-color: #0056b3;
}

.productos:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}
    </style>

    <div class="producto">
        <div class="productos">
            <p>Registrar Nuevo Producto</p>
            <a href="<?php echo BASEE_URL ?>producto1" class="btn btn-primary">Ver Nuevo Registro</a>
        </div>
        <div class="productos">
            <p>Registrar Nueva Persona/Usuario</p>
            <a href="<?php echo BASEE_URL ?>persona1" class="btn btn-primary">Ver Nueva Persona</a>
        </div>
        <div class="productos">
            <p>Registrar Nueva Categoría</p>
            <a href="<?php echo BASEE_URL ?>categoria1" class="btn btn-primary">Ver Nueva Categoria</a>
        </div>
        <div class="productos">
            <p>Registrar Nueva Compra/Venta</p>
            <a href="<?php echo BASEE_URL ?>compra1" class="btn btn-primary">Ver Nueva Compra</a>
        </div>
    </div>
    <br><br>




