<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/aReportesV_R.css">

    <title>Lista de Vendedores - Administrador</title>

    <title>Reportes Vendedores - Administrador</title>

</head>
<body>
<?php
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");

        $query=new Select();
        $cadena="SELECT login.ID_LOGIN as LOGIN,login.CORREO as CORREO,vendedores.NOMBRE AS NOMBRE,vendedores.APELLIDOS AS APELLIDOS, vendedores.TELEFONO AS TELEFONO, vendedores.SEXO AS SEXO,vendedores.FOTO FROM login JOIN vendedores ON login.ID_LOGIN=vendedores.LOGIN;";

        $tabla =$query ->seleccionar($cadena);
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
              <a class="nav-link active bg-danger border border-danger" aria-current="page" href="../../views/views_administrador/aReportesVendedores.php">Lista de Vendedores</a>
            </li>

            <!--Repartidores-->
            <li class="nav-item ms-3 me-3">
              <a class="nav-link border border-danger text-danger" href="../../views/views_administrador/aReportesRepartidores.php">Lista de Repartidores</a>
            </li>

            <!--Productos-->
            <li class="nav-item">
              <a class="nav-link border border-danger text-danger" href="../../views/views_administrador/aReportesPedidos.php">Lista de Pedidos</a>

            </li>
          </ul>
        </div>

        <hr>
        <div>
          <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col" colspan="3" class="informacion">Informacion Personal</th>
                <th scope="col" colspan="2" class="informacion">Informacion de Contacto</th>

              </tr>
              <tr class="bg-dark text-white">
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th class="border-end" scope="col">Sexo</th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Telefono</th>
                <th scope="col">Foto</th>
              </tr>
            </thead>
            <tbody>
                          <?php
        foreach($tabla as $registro)
        {
          ?>
              <tr>
                <td><?php echo $registro->NOMBRE?></td>
                <td><?php echo $registro->APELLIDOS?></td>
                <td class="border-end"><?php echo $registro->SEXO?></td>
                <td><?php echo $registro->CORREO?></td>
                <td><?php echo $registro->TELEFONO?></td>
                <td><img src="<?php echo $registro->FOTO?>" alt=""></td>
              </tr>
            </tbody>
            <?php
        }
        ?>
          </table>
        </div>
      </div>
    </main>
  </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>