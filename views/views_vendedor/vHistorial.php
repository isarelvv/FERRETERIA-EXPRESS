<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/vHistorial.css">
    <title>Historial de Ventas - Repartidor</title>
</head>
<body>
    <div class="row">
        <!--Barra-->
        <nav class="col-2">
            <div class="container d-flex flex-column">

              <!--Repartidores-->
              <div class="text-center titulo">Vendedores</div>
              <div class="text-center">
                <img src="../../svg/facebook.svg" alt="" class="border border-2 rounded-circle foto_perfil">
              </div>

              <hr class="text-white">

              <!--Botones paginas-->
              <ul class="nav nav-pills row text-center justify-content-center">
                <li class="nav-item">
                  <a class="nav-link    items" aria-current="page" href="../../views/views_vendedor/vVentas.html">Ventas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link   items" href="../../views/views_vendedor/vInventario.html">Inventario</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active    items" href="../../views/views_vendedor/vHistorial.html">Historial de Ventas</a>
                </li>
              </ul>

              <hr class="text-white">

              <!--Configuracion-->
              <div class="text-center">
                <div class="dropdown dropdown-center">
                  <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
                
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li style="margin-bottom: 10px;"><a class="dropdown-item" href="../../views/views_vendedor/vAjustes.html">Ajustes</a></li>
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
                <div class="titulo_contenedor"><b>Historial de Ventas</b></div>

                <form action="">
                  <!--Buscar Clientes-->
                  <div class="contenedores">
                    <div class="filtros_contenedor"><b>Buscar Cliente por Telefono</b></div>
                    <div class="row">
                      <div class="col-4">
                        <input class="form-control" type="tel">
                      </div>

                      <div class="col-2 row">
                        <button class="btn boton_buscar" type="button">
                          <b>Buscar</b>
                        </button>
                      </div>
                    </div>
                  </div>

                  <!--Ventas Por Periodo-->
                  <div class="contenedores">
                    <div class="filtros_contenedor"><b>Ventas por periodo</b></div>

                    <div>
                      <!--Labels-->
                      <div class="row">
                        <div class="col-5">
                          <label class="form-label  labels" for="fecha1">Desde:</label>
                        </div>
      
                        <div class="col-5">
                          <label class="form-label  labels" for="fecha2">Hasta:</label>
                        </div>
                      </div>

                      <!--Inputs-->
                      <div class="row">
                        <div class="col-5">
                          <input class="form-control" type="date" id="fecha1" value="fecha1" min="Fecha minima para seleccionar" max="Fecha minima para seleccionar" step="1">
                        </div>
      
                        <div class="col-5">
                          <input class="form-control" type="date" id="fecha2" value="fecha2" min="Fecha minima para seleccionar" max="Fecha minima para seleccionar" step="1">
                        </div>
      
                        <div class="col-2 row">
                          <button class="btn boton_buscar" type="button">
                            <b>Filtrar Resultados</b>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <div class="border  info_venta">
                    <div class="contenedor_tabla">
                      <table class="table table-bordered">
                        <thead>
                          <tr class="table-dark">
                            <th scope="col">Clave Venta</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Vendedor</th>
                            <th scope="col">Fecha de Venta</th>
                            <th scope="col">Monto</th>
                            <th scope="col">Detalles</th>
                          </tr>

                          <tr>
                            <td>#123-456</td>
                            <td>#Edeh Gerardo Meza Reyes</td>
                            <td>#Luis Angel Zapata Zuñiga</td>
                            <td>#12/08/2022</td>
                            <td>#$1000.00</td>
                            <td>
                              <a href="" role="button" data-bs-toggle="modal" data-bs-target="#pedidos_proximos_info">
                                Mas Detalles
                              </a>
                            </td>

                            <!--Modal Info Venta-->
                            <div class="modal modal-lg" id="pedidos_proximos_info" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <!--Header-->
                                  <div class="modal-header header_modal">
                                  <h5 class="modal-title" id="exampleModalLabel">Venta N.° #123-456</h5>
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
                                  <button type="button" class="btn boton_cancelar" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                              </div>
                              </div>
                          </div>
                          </tr>
                        </thead>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.min.js"></script>
</html>