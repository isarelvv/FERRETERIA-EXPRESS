<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/aInicio.css">
    <title>Inicio - Administrador</title>
</head>
<body>
  <?php

use MyApp\query\select;
require_once("../../vendor/autoload.php");
$seleccionar = new select();

$fechahoy = date('Y-m-d');
$fechasemana = strtotime('-6 day',strtotime($fechahoy));
$fechasemana = date('Y-m-d',$fechasemana);
$mes=date("m");
$ano=date("Y");


$cadena=" CALL GANANCIA_VENTAS_MES($mes)";
$resultado=$seleccionar->seleccionar($cadena);

$cadena2=" CALL GANANCIA_VENTAS_AÑO($ano)";
$resultado2=$seleccionar->seleccionar($cadena2);

$cadena3=" CALL GANANCIA_VENTAS_PERIODO($fechasemana,$fechahoy)";
$resultado3=$seleccionar->seleccionar($cadena3);

$cadena4=" CALL GANANCIA_VENTAS_PERIODO($fechahoy,$fechahoy)";
$resultado4=$seleccionar->seleccionar($cadena4);

$cadena5="CALL PRODUCTOS_FALTANTES()";
$resultado5=$seleccionar->seleccionar($cadena5);

$cadena6="CALL PRODUCTO_MAS_VENDIDO ()";
$resultado6=$seleccionar->seleccionar($cadena6);
  ?>

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
            <a class="nav-link active bg-danger    items" aria-current="page" href="../../views/views_administrador/aInicio.php">Inicio</a>
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

        <!--Mensaje-->
        <div class="text-center mt-4">
          <span class="titulos_secciones"><b>Ingresos Generados</b></span>
          <hr class="mt-3 mb-1">
        </div>

        <!--Info Ingresos-->
        <div class="mb-3">
          <table class="table table-borderless">
            <thead>
              <tr class="titulos_tabla">
                <th colspan="1" scope="col"></th>
                <th class="text-center" colspan="1" scope="col">Cantidad Bruta</th>
                <th class="text-center" colspan="1" scope="col">Cantidad Capital</th>
              </tr>
              <?php
                foreach($resultado4 as $datos4)
                ?>
              <tr class="ingresos_periodo">
                <td><b>DIARIO ----------------------------------------</b></td>
                <td class="text-center">$<?php echo $datos4->MONTO_GENERADO?></td>
                <td class="text-center">$<?php echo $datos4->MONTO_CAPITAL?></td>
              </tr>
              <?php
                foreach($resultado3 as $datos3)
                ?>
              <tr class="ingresos_periodo">
                <td><b>SEMANAL -------------------------------------</b></td>
                <td class="text-center">$<?php echo $datos3->MONTO_GENERADO?></td>
                <td class="text-center">$<?php echo $datos3->MONTO_CAPITAL?></td>
              </tr>
                <?php
                foreach($resultado as $datos)
                ?>
              <tr class="ingresos_periodo">
                <td><b>MENSUAL -------------------------------------</b></td>
                <td class="text-center">$<?php echo $datos->MONTO_GENERADO?></td>
                <td class="text-center">$<?php echo $datos->MONTO_CAPITAL?></td>
              </tr>
              <?php
                foreach($resultado2 as $datos2)
                ?>
              <tr class="ingresos_periodo">
                <td><b>ANUAL ----------------------------------------</b></td>
                <td class="text-center">$<?php echo $datos2->MONTO_GENERADO?></td>
                <td class="text-center">$<?php echo $datos2->MONTO_CAPITAL?></td>
              </tr>
            </thead>
          </table>
        </div>

        <!--Tablas Productos-->
        <div class="row mt-5">
          <!--Productos Faltantes-->
          <div class="col me-1">
            <!--Mensaje-->
            <div class="text-center mt-4">
              <span class="titulos_secciones"><b>Productos Faltantes</b></span>
              <hr class="mt-3 mb-1">
              <?php
              foreach($resultado5 as $datos)
              {
              ?>
              <!--Contenedor Productos-->
              <div class="container">
                <!--Producto-->
                <div class="row border mt-2">
                  <!--Imagen-->
                  <div class="col-1 p-0" style="min-width: 80px;">
                      <img src="<?php echo $datos->FOTO ?>" alt="" class="imagen_productos">
                  </div>

                  <!--Info Producto Carrito-->
                  <div class="col ms-1 mt-2">
                      <div class="row justify-content-start">
                          <div class="col-6 text-start pNombre"><b>Producto</b></div>
                          <div class="col-5 text-start pNombre"><b>Proovedor</b></div>
                      </div>

                      <div class="row justify-content-end">
                        <div class="col-6 text-start pInfo"><?php echo $datos->NOMBRE ?></div>
                        <div class="col-6 text-start pInfo"><?php echo $datos->COMPAÑIA ?></div>
                      </div>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>

          <!--Productos Mas Vendidos-->
          <div class="col ms-1">
            <!--Mensaje-->
            <div class="text-center mt-4">
              <span class="titulos_secciones"><b>Productos Mas Vendidos</b></span>
              <hr class="mt-3 mb-1">
              <?php
              foreach($resultado6 as $datos)
              {
              ?>
              <!--Contenedor Productos-->
              <div class="container">
                <!--Producto-->
                <div class="row border mt-2">
                  <!--Imagen-->
                  <div class="col-1 p-0" style="min-width: 80px;">
                      <img src="<?php echo $datos->FOTO ?>" alt="" class="imagen_productos">
                  </div>

                  <!--Info Producto Carrito-->
                  <div class="col ms-1 mt-2">
                      <div class="row justify-content-start">
                          <div class="col-6 text-start pNombre"><b>Producto</b></div>
                          <div class="col-5 text-start pNombre"><b>Cantidad Vendida</b></div>
                      </div>

                      <div class="row justify-content-end">
                        <div class="col-6 text-start pInfo"><?php echo $datos->NOMBRE?></div>
                        <div class="col-6 text-start pInfo"><?php echo $datos->CANTIDAD_VENDIDA ?> </div>
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
<script src="../../js/bootstrap.bundle.js"></script>
</html>