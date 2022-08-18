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
  <?php
  use MyApp\query\select;
  require_once("../../vendor/autoload.php");
  $seleccionar = new select();
$fechahoy = date('Y-m-d');

$cadena=" select ID_REPARTIDOR, NOMBRE from repartidores";
$resultado=$seleccionar->seleccionar($cadena);
  ?>
  
  
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
          <form action="" method="post">
            <div class="row mb-4">
              <h5><b>Filtros de Busqueda</b></h5>

              <!--Repartidor-->
              <div class="col-6 mb-2">
                <label class="form-label" for="rep"><b>Repartidor</b></label>
                <select class="form-select form-select-sm" name="repartidor" id="rep">
                  <?php
                  foreach($resultado as $datos)
                  {
                    ?>
                <option value="<?php $datos->ID  ?>"> <?php echo $datos->NOMBRE ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>

              <!--Periodo-->
              <div class="col-9 row mb-2">
                <div class="col">
                  <label class="form-label" for="desde"><b>Desde</b></label>
                  <input class="form-control form-control-sm" type="date" name="fecha1" id="desde" value="<?php echo $fechahoy?>">
                </div>

                <div class="col">
                  <label class="form-label" for="hasta"><b>Hasta</b></label>
                  <input class="form-control form-control-sm" type="date" name="fecha2" id="hasta" value="<?php echo $fechahoy?>">
                </div>
              </div>

              <!--Status-->
              <div class="col mb-2">
                <label class="form-label" for="rep"><b>Status</b></label>
                <select class="form-select form-select-sm" name="estatus" id="rep">
                  <option value="Entregado">Entregado</option>
                  <option value="Pendiente">Pendiente</option>
                  <option value="En camino">En Camino</option>
                </select>
              </div>

              <!--Boton-->
              <div class="text-end pt-2">
                <button class="btn btn-sm btn-primary col-2" type="submit" name="filtrar">Filtrar</button>
              </div>
            </div>
          </form>

          <hr class="mb-3">

          <?php

          if(isset($_POST['repartidor']['estatus']['fecha1']['fecha2']))
          {
                extract($_POST);
                $barra= new select();
                $consulta="PEDIDOS_REPARTIDOR_PERIODO('$repartidor','$estatus','$fecha1','$fecha2')";
                $tabla=$barra->seleccionar($consulta);
                ?>


        <hr>

        <div>
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
              </tr>
            </thead>

            <tbody>
              <tr>  
                <?php
                foreach($tabla as $tabla1)
                {
                  ?>
                }

                <td>#123-456ec</td>
                <td><?php echo $tabla1->NOMBRE ?> </td>
                <td><?php echo $tabla1->VENDEDOR?></td>
                <td>#Javier Resendiz Carpio</td>
                <td>#12/08/2022</td>
                <td>#15/08/2022</td>
                <td>#Pendiente</td>
                <td>#$1000.00</td>
                  <?php
                  }
                
              }
          ?>

        </div>
      </div>
    </main>
  </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>