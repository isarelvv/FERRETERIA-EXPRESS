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
  <?php
  use MyApp\query\select;
  require_once("../../vendor/autoload.php");
  session_start();
  ?>
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
                  <a class="nav-link    items" aria-current="page" href="../../views/views_vendedor/vVentas.php">Ventas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link   items" href="../../views/views_vendedor/vInventario.html">Inventario</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active    items" href="../../views/views_vendedor/vHistorial.php">Historial de Ventas</a>
                </li>
              </ul>

              <hr class="text-white">

              <!--Configuracion-->
              <div class="text-center">
                <div class="dropdown dropdown-center">
                  <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
                
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li style="margin-bottom: 10px;"><a class="dropdown-item" href="../../views/views_vendedor/vAjustes.php">Ajustes</a></li>
                    <li><hr class="sep_hr"></li>
                    <li style="margin-top: 10px;"><a class="dropdown-item" href="../scripts/cerrarSesion.php">Cerrar Sesion</a></li>
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
                    <?php
                    $vendedor=$_SESSION['ID'];
                    $consult = new select();
                    $qry="call VENTAS_DETERMINADO_VENDEDOR();";
                    $datos=$consult->seleccionar($qry);
                    foreach ($datos as $tabla ) {
                    ?>
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
                            <td><?php echo $tabla->FOLIO ?></td>
                            <td><?php echo $tabla->NOMBRE_CLIENTES ?></td>
                            <td><?php echo $tabla->NOMBRE_VENDEDORES ?></td>
                            <td><?php echo $tabla->FECHA?></td>
                            <td>$<?php echo $tabla->TOTAL ?>.00 </td>
                            <td>
                              <a href="#detalles_producto" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="detalles_producto">
                                Mas Detalles
                              </a>
                            </td>
                          </tr>
                        </thead>
                      </table>

                      <!--Collapse-->
                      <div id="detalles_producto" class="collapse">
                        <div class="card">
                          <div class="card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                        </div>
                      </div>
                      </div>
                      <?php
                    } 
                    ?>
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