<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/rInicio.css">
    <title>Inicio - Repartidor</title>
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
                  <a class="nav-link active    items" aria-current="page" href="../../views/views_repartidor/rInicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link    items" href="../../views/views_repartidor/rPedidos.php">Pedidos</a>
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
            <div class="container   contenedor">
              <!--Mensaje Bienvenida-->
              <div class="row   mensaje_bienvendia">
                <div class="col   contenedor_imagen_bv">
                  <img src="../../svg/facebook.svg" alt="" class="imagen_bienvenida">
                </div>
                <div class="col" style="margin-top: 5px;">
                  <b class="bv_mensaje">Bienvenido de Vuelta</b>
                  <p class="bv_nombre">#Nombre del Repartidor</p>
                </div>
              </div>

              <!--Pedido Activo-->
              <div class="border border-2 border-secondary info_pedido">
                <div class="titulo_info"><b>Pedido Activo</b></div>

                <hr style="margin-top: 0%; border-width: 2px;">

                <div class="mb-3  info_pedido_mensaje"><b>Informacion del Pedido</b></div>

                <!--Inputs-->
                <div>
                  <!--Numero Pedido-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Pedido N.°</b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="#123-456-7890" disabled>
                  </div>
                  <!--Cliente-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Cliente:</b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="#Edeh Gerardo Meza Reyes" disabled>
                  </div>
                  <!--Direccion-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Direccion:</b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="#ejemplo" disabled>
                  </div>
                  <!--Telefono-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Telefono:</b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="#8717321111" disabled>
                  </div>
                  <!--Email-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Correo Electronico:</b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="#tilinlover17@gmail.com" disabled>
                  </div>

                  <hr style="border-width: 2px; width: 80%;">

                  <div class="text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#pedidos_proximos_info">Mas Informacion</a>

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
                          </div>

                          <!--Footer-->
                          <div class="modal-footer">
                          <button type="button" class="btn boton_cancelar" data-bs-dismiss="modal">Cerrar</button>
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