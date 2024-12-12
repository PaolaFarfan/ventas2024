
    <style>

.producto {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 900px;
    width: 100%;
}

.productos {
    background-color: #e3f2fd;
    border: 1px solid #bbdefb;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    flex: 1 1 calc(45% - 20px);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.productos p {
    font-size: 18px;
    font-weight: bold;
    color: #1a237e;
    margin-bottom: 15px;
}

.productos a {
    display: inline-block;
    text-decoration: none;
    background-color: #1e88e5;
    color: #ffffff;
    padding: 10px 15px;
    margin: 5px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.productos a:hover {
    background-color: #1565c0;
}

.productos:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}
    </style>

    <div class="producto">
        <div class="productos">
            <p>Registrar Nuevo Producto</p>
            <a href="<?php echo BASEE_URL ?>producto1" class="btn btn-primary">Ver Nuevo Registro</a>
            <a href="<?php echo BASEE_URL ?>nuevo-producto" class="btn btn-primary"> Registrar producto</a>
        </div>
        <div class="productos">
            <p>Registrar Nueva Persona/Usuario</p>
            <a href="<?php echo BASEE_URL ?>persona1" class="btn btn-primary">Ver Nueva Persona</a>
            <a href="<?php echo BASEE_URL ?>nueva-persona" class="btn btn-primary">Registrar persona</a>
        </div>
        <div class="productos">
            <p>Registrar Nueva Categoría</p>
            <a href="<?php echo BASEE_URL ?>categoria1" class="btn btn-primary">Ver Nueva Categoria</a>
            <a href="<?php echo BASEE_URL ?>nueva-categoria" class="btn btn-primary">Registrar categoria</a>
        </div>
        <div class="productos">
            <p>Registrar Nueva Compra/Venta</p>
            <a href="<?php echo BASEE_URL ?>compra1" class="btn btn-primary">Ver Nueva Compra</a>
            <a href="<?php echo BASEE_URL ?>nueva-compra" class="btn btn-primary">Registrar compra</a>
        </div>
    </div>
    <br><br>




