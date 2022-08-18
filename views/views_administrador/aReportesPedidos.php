<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <link rel="stylesheet" href="../../css/mi_css/aModal.css">
    <link rel="stylesheet" href="../../css/mi_css/aReportesPedidos.css">
    <title>Lista de Pedidos - Administrador</title>

    <link rel="stylesheet" href="../../css/mi_css/aReportesPedidos.css">
    <title>Reportes Pedidos - Administrador</title>

</head>
<body>
  <div class="row">
    <!--Barra-->
    <nav class="col-2   barra_navegacion">
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
            <a class="nav-link    items" aria-current="page" href="../../views/views_administrador/aInicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bg-danger    items" aria-current="page" href="../../views/views_administrador/aReportesVendedores.php">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link    items" href="../../views/views_administrador/aAltasProductos.php">Altas</a>
          </li>
          <li class="nav-item">

            <a class="nav-link    items" href="../../views/views_administrador/aInventario.php">Inventarios</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link    items" href="../../views/views_administrador/aVentas.php">Ventas</a>
          </li> 
        </ul>

        <hr class="text-white">

        <!--Configuracion-->
        <div class="text-center">
          <div class="dropdown dropdown-center">
            <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
          
            <ul class="dropdown-menu dropdown-menu-dark">

              <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>

              <li style="margin-bottom: 10px;"><a class="dropdown-item" href="configuracion.php">Ajustes</a></li>
              <li><hr class="sep_hr"></li>
              <li style="margin-top: 10px;"><a class="dropdown-item" href="#">Cerrar Sesion</a></li>

            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!--Contenedor-->
    <main class="col-10">
      <div class="container">
        <!--Barra-->
        <div class="mt-4">
          <ul class="nav nav-pills nav-fill justify-content-center">
            <!--Vendedores-->
            <li class="nav-item">
              <a class="nav-link border border-danger text-danger" aria-current="page" href="../../views/views_administrador/aReportesVendedores.php">Lista de Vendedores</a>
            </li>

            <!--Repartidores-->
            <li class="nav-item ms-3 me-3">
              <a class="nav-link border border-danger text-danger" href="../../views/views_administrador/aReportesRepartidores.php">Lista de Repartidores</a>
            </li>

            <!--Productos-->
            <li class="nav-item">

              <a class="nav-link active bg-danger border border-danger" href="../../views/views_administrador/aReportesPedidos.php">Lista de Pedidos</a>
            </li>
          </ul>
        </div>

        <hr class="mb-2">

        <div>
          <form action="">
            <div class="row mb-4">
              <h5><b>Filtros de Busqueda</b></h5>

              <!--Vendedor-->
              <div class="col-6 mb-2">
                <label class="form-label" for="ven"><b>Vendedor</b></label>
                <select class="form-select form-select-sm" name="" id="ven">
                  <option value="">Todos los Vendedores</option>
                  <option value="">#Ejemplo</option>
                </select>
              </div>

              <!--Repartidor-->
              <div class="col-6 mb-2">
                <label class="form-label" for="rep"><b>Repartidor</b></label>
                <select class="form-select form-select-sm" name="" id="rep">
                  <option value="">Todos los Repartidores</option>
                  <option value="">#Ejemplo</option>
                </select>
              </div>

              <!--Periodo-->
              <div class="col-9 row mb-2">
                <div class="col">
                  <label class="form-label" for="desde"><b>Desde</b></label>
                  <input class="form-control form-control-sm" type="date" name="" id="desde">
                </div>

                <div class="col">
                  <label class="form-label" for="hasta"><b>Hasta</b></label>
                  <input class="form-control form-control-sm" type="date" name="" id="hasta">
                </div>
              </div>

              <!--Status-->
              <div class="col mb-2">
                <label class="form-label" for="rep"><b>Status</b></label>
                <select class="form-select form-select-sm" name="" id="rep">
                  <option value="">Todos los Status</option>
                  <option value="">Entregado</option>
                  <option value="">Pendiente</option>
                  <option value="">En Camino</option>
                </select>
              </div>

              <!--Boton-->
              <div class="text-end pt-2">
                <button class="btn btn-sm btn-primary col-2">Filtrar</button>
              </div>
            </div>
          </form>

          <hr class="mb-3">

          <table class="table">
            <thead>
              <tr class="table-dark">
                <th scope="col">Clave Venta</th>
                <th scope="col">Cliente</th>
                <th scope="col">Vendedor</th>
                <th scope="col">Repartidor</th>
                <th scope="col">Fecha de Venta</th>
                <th scope="col">Fecha de Venta</th>
                <th scope="col">Status</th>
                <th scope="col">Monto</th>
                <th scope="col">Detalles</th>

        <hr>

        <div>
          <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col" colspan="4" class="informacion">Informacion Personal</th>
                <th scope="col" colspan="2" class="informacion">Informacion de Contacto</th>
                <th scope="col" colspan="2" class="informacion">Informacion del Vehiculo</th>
              </tr>
              <tr class="bg-dark text-white">
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th class="border-end" scope="col">Sexo</th>
                <th scope="col">Correo Electronico</th>
                <th class="border-end" scope="col">Telefono</th>
                <th scope="col">N° Licencia</th>
                <th scope="col">N° Placas</th>

              </tr>
            </thead>

            <tbody>
              <tr>

                <td>#123-456</td>
                <td>#Edeh Gerardo Meza Reyes</td>
                <td>#Luis Angel Zapata Zuñiga</td>
                <td>#Javier Resendiz Carpio</td>
                <td>#12/08/2022</td>
                <td>#15/08/2022</td>
                <td>#Pendiente</td>
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
                        </div>

                        <!--Footer-->
                        <div class="modal-footer">
                          <button type="button" class="btn boton_cancelar" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                  </div>
                </div>

                <td>#Edeh Gerardo</td>
                <td>#Meza</td>
                <td>#Reyes</td>
                <td class="border-end">#M</td>
                <td>#tilinlover17@gmail.com</td>
                <td class="border-end">#8717321111</td>
                <td>#Ejemplo</td>
                <td>#Ejemplo</td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>