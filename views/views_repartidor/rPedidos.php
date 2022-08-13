<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/rPedidos.css">
    <title>Pedidos - Repartidores</title>
</head>
<body>
    <div class="row">
        <!--Barra-->
        <nav class="col-2">
            <div class="container d-flex flex-column">
                <!--Repartidores-->
                <div class="text-center titulo">Repartidores</div>
                <div class="text-center">
                    <img src="../../svg/facebook.svg" alt="" class="border border-2 rounded-circle foto_perfil">
                </div>

                <hr class="text-white">

                <!--Botones paginas-->
                <ul class="nav nav-pills row text-center justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link    items" aria-current="page" href="../../views/views_repartidor/rInicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active    items" href="../../views/views_repartidor/rPedidos.php">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link    items" href="../../views/views_repartidor/rHistorial.php">Historial</a>
                    </li>
                </ul>

                <hr class="text-white">

                <!--Configuracion-->
                <div class="text-center">
                    <div class="dropdown dropdown-center">
                        <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
                        
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li style="margin-bottom: 10px;"><a class="dropdown-item" href="../views_repartidor/rAjustes.php">Ajustes</a></li>
                            <li><hr class="sep_hr"></li>
                            <li style="margin-top: 10px;"><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!--Info Pedidos-->
        <main class="col-10 border">
            <div class="container">
                <!--Mensaje-->
                <div class="row text-center     mensaje">
                    <div class="col   barras_mensaje"><hr></div>

                    <div class="col-3   mensaje_arriba">
                        <p><b>Pedidos de Hoy</b></p>
                    </div>

                    <div class="col   barras_mensaje"><hr></div>
                </div>

                <div class="cuadros">
                    <!--Pedidos-hoy-->
                    <div class="row justify-content-evenly     cuadros_pedidos">
                        <!--Pedidos-->
                        <div class="col-4 border border-secondary rounded-2 text-center  info_pedidos" style="max-width: 360px;">
                            <div class="num_pedido"><b>Pedido N.° #123-456-7890</b></div>
                            <div class="persona_pedido"><p>#Edeh Gerardo Meza Reyes</p></div>
                            <hr>
                            <div class="row contenedor_boton">
                                <button class="btn boton-informacion" type="button" data-bs-toggle="modal" data-bs-target="#pedidos_hoy_info">
                                    <b>Mas Informacion</b>
                                </button>

                                <!--Modal Info Pedido-->
                                <div class="modal modal-lg fade" id="pedidos_hoy_info" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header header_modal">
                                        <h5 class="modal-title" id="exampleModalLabel">Pedido N.° #123-456-7890</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <!--Cuerpo-->
                                        <div class="modal-body">

                                            <!--Info Cliente-->
                                            <div class="text-start info_cliente_modal">
                                                <div class="info_cliente_modal_lab"><b>Cliente:</b> #Edeh Gerardo Meza Reyes</div>
                                                <div class="info_cliente_modal_lab"><b>Direccion:</b> #ejemplo</div>
                                                <div class="info_cliente_modal_lab"><b>Telefono:</b> #8717321111</div>
                                                <div class="info_cliente_modal_lab"><b>Correo Electronico:</b> #tilinlover17@gmail.com</div>
                                            </div>

                                            <!--Productos-->
                                            <!--Cuadros Info Productos-->
                                            <div class="row border border-secondary     productos">
                                                <!--Imagen-->
                                                <div class="col-1">
                                                    <img src="../../svg/facebook.svg" alt="" class="imagen_productos">
                                                </div>
                        
                                                <!--Info Producto Carrito-->
                                                <div class="col text-start  info_producto_carrito">
                                                    <div class="row justify-content-between">
                                                        <div class="col-12   nombre_producto">
                                                            <b>Producto</b>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row justify-content-between     barra_baja">
                                                        <div class="col-4">
                                                            <div class="input-group">
                                                                <span class="input-group-text   barra_cantidad">Cantidad</span>
                                                                <input type="number" class="form-control    barra_cantidad" disabled="disabled" aria-label="Username">
                                                                <span class="input-group-text   barra_cantidad">kg</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-3 text-end  precio_total">
                                                            <b>Precio: $150.00</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row border border-secondary     productos">
                                                <!--Imagen-->
                                                <div class="col-1">
                                                    <img src="../../svg/facebook.svg" alt="" class="imagen_productos">
                                                </div>
                        
                                                <!--Info Producto Carrito-->
                                                <div class="col text-start  info_producto_carrito">
                                                    <div class="row justify-content-between">
                                                        <div class="col-12   nombre_producto">
                                                            <b>Producto</b>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row justify-content-between     barra_baja">
                                                        <div class="col-4">
                                                            <div class="input-group">
                                                                <span class="input-group-text   barra_cantidad">Cantidad</span>
                                                                <input type="number" class="form-control    barra_cantidad" disabled="disabled" aria-label="Username">
                                                                <span class="input-group-text   barra_cantidad">kg</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-3 text-end  precio_total">
                                                            <b>Precio: $150.00</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row border border-secondary     productos">
                                                <!--Imagen-->
                                                <div class="col-1">
                                                    <img src="../../svg/facebook.svg" alt="" class="imagen_productos">
                                                </div>
                        
                                                <!--Info Producto Carrito-->
                                                <div class="col text-start  info_producto_carrito">
                                                    <div class="row justify-content-between">
                                                        <div class="col-12   nombre_producto">
                                                            <b>Producto</b>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row justify-content-between     barra_baja">
                                                        <div class="col-4">
                                                            <div class="input-group">
                                                                <span class="input-group-text   barra_cantidad">Cantidad</span>
                                                                <input type="number" class="form-control    barra_cantidad" disabled="disabled" aria-label="Username">
                                                                <span class="input-group-text   barra_cantidad">kg</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-3 text-end  precio_total">
                                                            <b>Precio: $150.00</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                        <button type="button" class="btn boton_cancelar" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn boton_activar">Activar Pedido</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </div>

                <!--Mensaje-->
                <div class="row text-center">
                    <div class="col   barras_mensaje"><hr></div>

                    <div class="col-3   mensaje_arriba">
                        <p><b>Proximos Pedidos</b></p>
                    </div>

                    <div class="col   barras_mensaje"><hr></div>
                </div>

                <div class="cuadros">
                    <!--Pedidos-Proximos-->
                    <div class="row justify-content-evenly     cuadros_pedidos">
                        <!--Pedidos-->
                        <div class="col-4 border border-secondary rounded-2 text-center  info_pedidos">
                            <div class="num_pedido"><b>Pedido N.° #123-456-7890</b></div>
                            <div class="persona_pedido"><p>#Edeh Gerardo Meza Reyes</p></div>
                            <div class=""><b>Fecha de Entrega:</b> 17/08/2022</div>
                            <hr>
                            <div class="row contenedor_boton">
                                <button class="btn boton-informacion" type="button" data-bs-toggle="modal" data-bs-target="#pedidos_proximos_info">
                                    <b>Mas Informacion</b>
                                </button>

                                <!--Modal Info Pedido-->
                                <div class="modal modal-lg fade" id="pedidos_proximos_info" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header header_modal">
                                        <h5 class="modal-title" id="exampleModalLabel">Pedido N.° #123-456-7890</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <!--Cuerpo-->
                                        <div class="modal-body">

                                            <!--Info Cliente-->
                                            <div class="text-start info_cliente_modal">
                                                <div class="info_cliente_modal_lab"><b>Cliente:</b> #Edeh Gerardo Meza Reyes</div>
                                                <div class="info_cliente_modal_lab"><b>Direccion:</b> #ejemplo</div>
                                                <div class="info_cliente_modal_lab"><b>Telefono:</b> #8717321111</div>
                                                <div class="info_cliente_modal_lab"><b>Correo Electronico:</b> #tilinlover17@gmail.com</div>
                                            </div>

                                            <!--Productos-->
                                            <!--Cuadros Info Productos-->
                                            <div class="row border border-secondary     productos">
                                                <!--Imagen-->
                                                <div class="col-1">
                                                    <img src="../../svg/facebook.svg" alt="" class="imagen_productos">
                                                </div>
                        
                                                <!--Info Producto Carrito-->
                                                <div class="col text-start  info_producto_carrito">
                                                    <div class="row justify-content-between">
                                                        <div class="col-12   nombre_producto">
                                                            <b>Producto</b>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row justify-content-between     barra_baja">
                                                        <div class="col-4">
                                                            <div class="input-group">
                                                                <span class="input-group-text   barra_cantidad">Cantidad</span>
                                                                <input type="number" class="form-control    barra_cantidad" disabled="disabled" aria-label="Username">
                                                                <span class="input-group-text   barra_cantidad">kg</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-3 text-end  precio_total">
                                                            <b>Precio: $150.00</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row border border-secondary     productos">
                                                <!--Imagen-->
                                                <div class="col-1">
                                                    <img src="../../svg/facebook.svg" alt="" class="imagen_productos">
                                                </div>
                        
                                                <!--Info Producto Carrito-->
                                                <div class="col text-start  info_producto_carrito">
                                                    <div class="row justify-content-between">
                                                        <div class="col-12   nombre_producto">
                                                            <b>Producto</b>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row justify-content-between     barra_baja">
                                                        <div class="col-4">
                                                            <div class="input-group">
                                                                <span class="input-group-text   barra_cantidad">Cantidad</span>
                                                                <input type="number" class="form-control    barra_cantidad" disabled="disabled" aria-label="Username">
                                                                <span class="input-group-text   barra_cantidad">kg</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-3 text-end  precio_total">
                                                            <b>Precio: $150.00</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row border border-secondary     productos">
                                                <!--Imagen-->
                                                <div class="col-1">
                                                    <img src="../../svg/facebook.svg" alt="" class="imagen_productos">
                                                </div>
                        
                                                <!--Info Producto Carrito-->
                                                <div class="col text-start  info_producto_carrito">
                                                    <div class="row justify-content-between">
                                                        <div class="col-12   nombre_producto">
                                                            <b>Producto</b>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row justify-content-between     barra_baja">
                                                        <div class="col-4">
                                                            <div class="input-group">
                                                                <span class="input-group-text   barra_cantidad">Cantidad</span>
                                                                <input type="number" class="form-control    barra_cantidad" disabled="disabled" aria-label="Username">
                                                                <span class="input-group-text   barra_cantidad">kg</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-3 text-end  precio_total">
                                                            <b>Precio: $150.00</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                        <button type="button" class="btn boton_cancelar" data-bs-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </main>
    </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>