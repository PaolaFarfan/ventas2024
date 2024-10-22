async function registrar_producto(){
    let codigo = document.getElementById('codigo').values;
    let nombre =document.querySelector('#nombre').values;
    let detalle =document.querySelector('#detalle').values;
    let precio =document.querySelector('#precio').values;
    let stock =document.querySelector('#stock').values;
    let categoria =document.querySelector('#categoria').values;
    let fecha_v =document.querySelector('#fecha_v').values;
    let imagen =document.querySelector('#imagen').values;
    let provedor =document.querySelector('#proveedor').values;
    if (codigo=="" || nombre=="" || detalle=="" || precio=="" || stock=="" || categoria=="" || fecha_v=="" || imagen=="" || provedor=="") {
        alert("error, campos vacios");
        return;
    }
    try {
        const datos = new FormData(frmRegistrar); // capturamos datos del formulario html
        // enviar datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar', {
            method: 'POST',
            method:'cors',
            cache: 'no-cache',
            body: datos
        });
        console.log(respuesta);
    } catch (e) {
        console.log("Oops, ocurrio un error" +e);
    }

}
