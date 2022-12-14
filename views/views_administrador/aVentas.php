<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/aVentas.css">
    <title>Inventario - Administrador</title>
</head>
<body>
  <div class="row">
    <!--Barra-->
    <nav class="col-2">
      <div class="container d-flex flex-column">
        <!--Repartidores-->
        <div class="text-center titulo">Administrador</div>
        <div class="text-center">
          <img src="../../svg/facebook.svg" alt="" class="border border-2 rounded-circle foto_perfil">
        </div>

        <hr class="text-white">

        <!--Botones paginas-->
        <ul class="nav nav-pills row text-center justify-content-center">
          <li class="nav-item">
            <a class="nav-link     items" aria-current="page" href="../../views/views_administrador/aInicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link    items" aria-current="page" href="../../views/views_administrador/aReportesVendedores.php">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link    items" href="../../views/views_administrador/aAltasProductos.php">Altas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link    items" href="../../views/views_administrador/aInventario.php">Inventarios</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link active bg-danger    items" href="../../views/views_administrador/aVentas.php">Ventas</a>
          </li>
        </ul>

        <hr class="text-white">

        <!--Configuracion-->
        <div class="text-center">
          <div class="dropdown dropdown-center">
            <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
          
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!--Contenedor-->
    <main class="col-10">
      <div class="container">
        <div class="row">

            <!--Agregar productos-->
            <div class="col-8  agregar_productos">
              <form action="">
                <div>
                  <div class="row">
                    <div class="col-8"><input class="form-control" type="text" id="productos" placeholder="Ingresa el nombre del producto..."></div>
                    <div class="col-2">
                      <div class="row">
                        <button class="btn btn-danger" type="button">Buscar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              
              <hr>

              <!--Productos-->
              <div class="mt-2">
                <form action="">
                  <div class="contenedor_productos">
                    <!--Producto-->
                    <div class="row border  producto_carito">
                      <!--Imagen-->
                      <div class="col p-0" style="max-width: 80px;">
                          <img src="../../svg/facebook.svg" alt="" class="imagen_productos">
                      </div>

                      <!--Info Producto Carrito-->
                      <div class="col ms-1 mt-2">
                          <div class="row justify-content-lg-start">
                              <div class="col-9 pNombre"><b>#Producto</b></div>
                              <div class="col-3 text-end nPrecio"><b>Precio: </b>$150.00</div>
                          </div>

                          <div class="row justify-content-start mt-1">
                            <div class="col-3 pt-1  pCategoria"><b>#Categoria</b></div>
                            <div class="col-4 pt-1"><b>Cantidad Real: </b>#10</div>
                            <div class="col-2">
                              <input class="form-control form-control-sm" type="number" id="cantidad_carrito" placeholder="Cantidad..." min="1" max="#10">
                            </div>
                            <div class="col text-end">
                              <button class="btn btn-sm btn-danger" type="button">
                                Agregar al Carrito
                              </button>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!--Info Venta-->
            <div class="col-4 border  informacion_venta">
              <!--Cliente-->
              <div>
                <div class="text-center titulo_secc"><b>Cliente</b></div>

                <hr class="mt-2 mb-3">

                <form action="">
                  <div class="row">
                    <div class="col-8">
                      <input class="form-control form-control-sm " type="tel" id="tel_cliente" placeholder="Ingresa el telefono del cliente...">
                    </div>

                    <div class="col-3 row">
                      <button class="btn btn-sm btn-danger">
                        Buscar
                      </button>
                    </div>
                  </div>

                  <div class="text-center mt-2">
                    <a href="" class="link_modal" data-bs-toggle="modal" data-bs-target="#registrarse">Registrar cliente nuevo</a>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="registrarse" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                      <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header bg-dark">
                          <h5 class="modal-title text-white" id="exampleModalLabel">Crear Cuenta</h5>
                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <!--Cuerpo-->
                        <div class="modal-body">
                          <form action="">                      
                            <div class="justify-content-center">
                                <div class="">
                                  <!--Seccion1-->
                                  <div class="contenedores_form">
                                    <h5>Informacion Personal</h5>
                                    <!--Nombre-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control  conf_labels" type="text" id="nombre" placeholder="Nombre">
                                        <label class="form-label"  for="nombre">Nombre</label>
                                    </div>
                                    <!--Apellido Paterno-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control  conf_labels" type="text" id="a_p" placeholder="Apellido Paterno">
                                        <label class="form-label" for="a_p">Apellido Paterno</label>
                                    </div>
                                    <!--Apellido Materno-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control  conf_labels" type="text" id="a_m" placeholder="Apellido Materno">
                                        <label class="form-label" for="a_m">Apellido Materno</label>
                                    </div>
                                    <!--Correo Electronico-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control  conf_labels" type="email" id="correo" placeholder="Correo Electronico">
                                        <label class="form-label" for="correo">Correo Electronico</label>
                                    </div>
                                    <!--Numero de Telefono-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Numero de Telefono">
                                        <label class="form-label" for="telefono">Numero de Telefono</label>
                                    </div>
                                </div>

                                <hr>
                
                                <!--Seccion2-->
                                <div class="contenedores_form">
                                    <h5>Direccion</h5>
                                    <!--Direccion-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control  conf_labels" type="text" id="direccion" placeholder="Direccion">
                                        <label class="form-label" for="direccion">Direccion</label>
                                    </div>
                
                                    <!--Codigo Postal-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control  conf_labels" type="text" id="cp" placeholder="Codigo Postal" style="max-width: 200px;">
                                        <label class="form-label" for="cp">Codigo Postal</label>
                                    </div>
                                </div>

                                <hr>
                
                                <!--Seccion3-->
                                <div class="contenedores_form">
                                    <h5>Contrase??a</h5>
                                    <!--Contrase??a-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control  conf_labels" type="password" id="contra" placeholder="Contrase??a">
                                        <label class="form-label" for="contra">Contrase??a</label>
                                        <div id="ayuda_email" class="form-text">La contrase??a debe tener al menos 8 digitos.</div>
                                    </div>
                
                                    <!--Repetir Contrase??a-->
                                    <div class="form-floating mb-2">
                                        <input class="form-control  conf_labels" type="password" id="rcontra" placeholder="Repetir Contrase??a">
                                        <label class="form-label" for="rcontra">Repetir Contrase??a</label>
                                    </div> 
                                </div>
                                </div>
                            </div>
                          </form>
                        </div>

                        <!--Footer-->
                        <div class="modal-footer bg-dark">
                          <button type="button" class="btn  boton_cerrar" data-bs-dismiss="modal">Cerrar</button>
                          <form action="">
                            <button type="button" class="btn  crear_cuenta">Crear Cuenta</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <hr class="mt-2 mb-2">

              <!--Carrito-->
              <div class="mt-3">
                <table class="table">
                  <thead class="table-bordered">
                    <tr class="table-light text-center  titulos_tabla">
                      <th class="text-start" scope="col">Nombre</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">Monto</th>
                    </tr>

                    <tr class="">
                      <td>#Producto</td>
                      <td class="text-center">#3</td>
                      <td class="text-center">#$450.00</td>
                    </tr>
                  </thead>
                </table>
              </div>

              <!--Resumen del Pedido-->
              <div class="border p-1  resumen_pedido">
                <div><b>Nombre del Cliente: </b>#Edeh Gerardo Meza</div>
                <div><b>Telefono: </b>#8717321111</div>
                <div><b>Correo Electronico: </b>#tililover17@gmail.com</div>
                <div><b>Precio Total: </b>#$450.00</div>
              </div>

              <!--Botones-->
              <div class="row mt-3">
                <div class="col text-end me-1">
                  <button class="btn btn-danger">Confirmar Venta</button>
                </div>
                <div class="col text-start ms-1">
                  <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#checkDOMICILIO">Envio a Domicilio</button>
                </div>

                <!-- Modal -->
                <div class="modal modal-sm fade" id="checkDOMICILIO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <!--Header-->
                      <div class="modal-header bg-black">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Envio a Domicilio</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <!--Cuerpo-->
                      <div class="modal-body">
                        <form action="">
                          <div>
                            <div><b>Selecciona los productos que seran enviados a domicilio:</b></div>
                            <div class="container">
                              <!--Productos-->
                              <div class="row border  producto_carito">
                                <!--Imagen-->
                                <div class="col p-0 text-center" style="max-width: 60px; max-height: 60px;">
                                    <img src="../../svg/facebook.svg" alt="" class="imagen_productos_modal">
                                </div>
          
                                <!--Info Producto Carrito-->
                                <div class="col ms-1 mt-2">
                                    <div class="row justify-content-lg-start">
                                        <div class="col pNombre_modal"><b>#Producto</b></div>
                                        <div class="col-2 ps-2">
                                          <input class="form-check" type="checkbox" name="" id="">
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>

                      <!--Footer-->
                      <div class="modal-footer">
                        <button type="button" class="btn boton_cerrar" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn crear_cuenta">Confirmar Venta</button>
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