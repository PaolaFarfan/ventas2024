async function registrar_compra() {
    let id_producto = document.getElementById('#id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let id_trabajador = document.querySelector('#id_trabajador')

    if (id_producto === "" || cantidad === "" || precio === "" || id_trabajador === "") {
        alert("Error, campos vacíos");
        return;
    }
    try {
        const datos = new FormData(fromCompras);
        datos.append('id_producto', id_producto);
        datos.append('cantidad', cantidad);
        datos.append('precio', precio);
        datos.append('id_trabajador', id_trabajador);

        let respuesta = await fetch(base_url+'controller/compra.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        let json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error " + e);
    }
}

//funcion para crear la lista de compra
async function listar_compra() {
    try{
      let respuesta = await fetch(base_url+'controller/compra.php?tipo=listar');
      json = await respuesta.json();
      if (json.status){
         let datos = json.contenido;
         let cont  = 0;
         datos.forEach(item =>{
             let nueva_fila = document.createElement("tr");
             //id de la fila y id de base de datos//
             nueva_fila.id = "fila"+item.id;
             cont+=1;
             nueva_fila.innerHTML = `
                    <th>${cont}</th>
                    <td>${item.id_producto}</td>
                    <td>${item.cantidad}</td>
                    <td>${item.id_trabajador}</td>
                    <td>${item.precio}</td>
                    <td>${item.options}</td>
                    
             `;
             document.querySelector('#tbl_compra').appendChild(nueva_fila);
         });
      }
      console.log(json);
    }catch(error){
        console.log("Oops salio un error" + error);
    } 
 }
 if (document.querySelector('#tbl_compra')){
    listar_compra();
 }
