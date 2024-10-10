<style>
    .modal-header {
        border-bottom: none;
        position: relative;
    }
    .modal-header .close {
        position: absolute;
        right: 15px;
        top: 15px;
        font-size: 1.5rem;
        color: #000;
    }
    .modal-body {
        text-align: center;
        padding: 2rem;
    }
    .modal-body img {
        max-height: 70px;
        margin-bottom: 1rem;
    }
    .modal-body h5 {
        font-size: 1.75rem;
        margin-bottom: 1rem;
        color: #933A71;
    }
    .modal-body p {
        font-size: 1.25rem;
        color: #333;
    }
    .modal-footer {
        border-top: none;
        justify-content: center;
    }
    .modal-footer .btn {
        background-color: #933A71;
        border: none;
        color: #fff;
        padding: 0.5rem 2rem;
        font-size: 1rem;
    }
</style>

<body>

      <!-- Modal Promo-->
    <div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="discountModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    
                </div>
                <div class="modal-body">
                    <img src="./views/plantilla/logo_marca.png" alt="Logo">
                    <h5 class="modal-title" id="discountModalLabel">¡20% de Descuento en Todos los Productos!</h5>
                    <p>No te pierdas esta increíble oferta. ¡Aprovecha ahora!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="cerrarVentana();" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

        <div class="container-fluid">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="https://mir-s3-cdn-cf.behance.net/projects/404/6053ac101947847.Y3JvcCwzMTgyLDI0ODksMTY1LDA.jpg"
                            class="d-block w-100" height="700px"  alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>LOS MEJORES PRECIOS EN</h5>
                            <p>ZAPATOS PARA CUALQUIER PERSONA.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://i.blogs.es/acdf55/2018-06-22-12.58.51-1807284574263313216_175669251/1366_2000.jpg"
                            class="d-block w-100" height="700px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>LOS MEJORES PRECIOS EN</h5>
                            <p>ZAPATOS PARA CUALQUIER PERSONA.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://hips.hearstapps.com/hmg-prod/images/zapatillas-deportivas-sneakers-mujer-1640617438.jpeg?crop=0.668xw:1.00xh;0.167xw,0&resize=640:*"
                            class="d-block w-100" height="700" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>LOS MEJORES PRECIOS EN</h5>
                            <p>ZAPATOS PARA CUALQUIER PERSONA.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> 
        <!--cuerpo -->
        <div class="container-fluid m-0 p-3 mt-4 row ">
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://vans.com.pe/cdn/shop/products/Q5EBA2-HERO.jpg?v=1664385432"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">ZAPATILLAS OLD</h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">SKOOL OVERT</p>
                            <h2>COMFYCUSH BLACK</h2>
                            <h2>WHITE</h2>
                        </div>
                        <div class="text-center">
                            <a href="<?php echo BASEE_URL ?>detalle-producto" class="btn btn-primary">Ver Detalles</a>
                            <a href="<?php echo BASEE_URL ?>carrito" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://www.moov.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw1276f562/products/NIDH6927-161/NIDH6927-161-6.JPG"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Zapatillas Jordan Air</h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">4 Retro Red Cement</p>
                            <h2>Hombre</h2>
                        </div>
                        <div class="text-center">
                            <a href="<?php echo BASEE_URL ?>detalle-producto" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://home.ripley.com.pe/Attachment/WOP_5/2084308306536/2084308306536_2.jpg"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">ZAPATILLAS MUJER NIKE </h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text"> RUNNING NEGRO</p>
                            <h2>W RENEW RUN 4</h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://www.lapolar.cl/dw/image/v2/BCPP_PRD/on/demandware.static/-/Sites-master-catalog/default/dw08a508b7/images/large/586800-multicolor.jpg?sw=1200&sh=1200&sm=fit"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">PUMA Rebound Joy,</h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">PUMA Rebound Joy,</p>
                            <h2>Dark Shadow Black White</h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://home.ripley.com.pe/Attachment/WOP_5/2084303661876/2084303661876_2.jpg"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">ZAPATILLAS HOMBRE </h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">NIKE RUNNING</p>
                            <h2>BLANCO AIR WINFLO 9</h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_918745-MLA50213992415_062022-W.jpg"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">ZAPATILLAS URBANAS </h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text"> NIÑO OCEAN PACIFIC </p>
                            <h2>KIDS FARID-G22</h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://darkorbitperu.com/wp-content/uploads/2021/08/nAir-Force-1-07-WORLDWIDE-PACK-BLUE-FURY1.jpg"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Zapatillas Nike </h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">Air Force1</p>
                            <h2>White/Sky blue</h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://cdna.lystit.com/photos/size/65372b0e/converse--Run-Star-Hike.jpeg"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Converse Run Star Caminata</h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">rosa sal del Himalaya 171668C para</p>
                            <h2>mujer 11,5 hombres 10</h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_500,h_500/global/389853/11/sv01/fnd/PER/fmt/png/Zapatillas-Mayze-Stack-Luxe-para-mujer"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Zapatillas Mayse Stack Luxe para mujer</h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">un estilo son suela alta</p>
                            <h2>Puma whitw-alpine snow</h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_500,h_500/global/392725/21/sv01/fnd/PER/fmt/png/Zapatillas-Blktop-Rider"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Zapatillas Blktop Rider</h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">Puma rider, las blacktop rider</p>
                            <h2>diseño moderno en un estilo</h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_500,h_500/global/395205/01/sv01/fnd/PER/fmt/png/Zapatillas-Suede-XL-unisex"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">zapatillas suede xl unisex</h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">Una version de las Suede</p>
                            <h2>Se inspira a la tradicion de puma</h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: 700px;">
                    <img src="https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_500,h_500/global/392326/06/sv01/fnd/PER/fmt/png/Zapatillas-Rebound-unisex"
                        class="card-img-top w-100" alt="..." style="height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">zapatillas Rebound unisex</h5>
                        <div class="overflow-y-hidden" style="height: 190px;">
                            <p class="card-text">Puma con una inspiracion retro a </p>
                            <h2> esta nueva era del baloncento </h2>
                        </div>
                        <div class="text-center">
                            <a href="detalles_producto.html" class="btn btn-primary">Ver Detalles</a>
                            <a href="carrito.html" class="btn btn-success">Añadir a Carrito</a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>