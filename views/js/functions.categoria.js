
async function listar_categorias() {
    try{
      let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
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
                    <td>${item.nombre}</td>
                    <td>${item.detalle}</td>
                    <td>${item.options}</td>
                    
             `;
             document.querySelector('#tbl_categoria').appendChild(nueva_fila);
         });
      }
      console.log(json);
    }catch(error){
        console.log("Oops salio un error" + error);
    } 
 }
 if (document.querySelector('#tbl_categoria')){
    listar_categorias();
 }

async function registrar_categorias() {
    
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    
    if ( nombre == "" || detalle == "" ) {
        alert("error, campos vacios");
        return;
    }
    try {
        const datos = new FormData(frmRegistrar); // capturamos datos del formulario html
        // enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
if(json.status){
    swal("Registro",json.mensaje,"success");
}else{  
    swal("Registro",json.mensaje,"error");
}
        console.log(json);

    } catch (e) {
        console.log("Oops, ocurrio un error" + e);
    }

}
async function ver_categoria(id) {
    const formData = new FormData();
    formData.append('id_categoria', id);
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=ver',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData 
        });
        json =await respuesta.json();
        if (json.status) {
            document.querySelector('#nombre').value= json.contenido.codigo;
        }else{
            window.location = base_url+"categoria";
        }
        console.log(json);
        
    } catch (error) {
        console.log("oops ocurrio un error" +error);
    }
}