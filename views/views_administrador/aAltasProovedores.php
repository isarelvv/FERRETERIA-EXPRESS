<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/aAltas.css">
    <title>Altas Proovedores - Administrador</title>
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
            <a class="nav-link     items" aria-current="page" href="../../views/views_administrador/aReportesVendedores.php">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bg-danger   items" href="../../views/views_administrador/aAltasProductos.php">Altas</a>
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
              <li style="margin-bottom: 10px;"><a class="dropdown-item" href="configuracion.php">Ajustes</a></li>
              <li><hr class="sep_hr"></li>
              <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
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
            <!--Productos-->
            <li class="nav-item">
              <a class="nav-link border border-danger text-danger" aria-current="page" href="../../views/views_administrador/aAltasProductos.php">Productos</a>
            </li>

            <!--Proovedores-->
            <li class="nav-item ms-2 me-1">
              <a class="nav-link active bg-danger border border-danger" href="../../views/views_administrador/aAltasProovedores.php">Proovedores</a>
            </li>

            <!--Vendedores-->
            <li class="nav-item ms-1 me-2">
              <a class="nav-link border border-danger text-danger" href="../../views/views_administrador/aAltasVendedores.php">Vendedores</a>
            </li>

            <!--Repartidores-->
            <li class="nav-item">
              <a class="nav-link border border-danger text-danger" href="../../views/views_administrador/aAltasRepartidores.php">Repartidores</a>
            </li>
          </ul>
        </div>

        <hr>

        <!--Formulario-->
        <div>
          <form action="../scripts/guardarProveedores.php" method="POST">
            <!--Nombre-->
            <div class="secciones_form">
              <label class="form-label" for="nProovedor"><b>Nombre de la Compa??ia</b></label>
              <input class="form-control" type="text" id="nProovedor" name="nombre">
            </div>

            <!--Telefono-->
            <div class="secciones_form">
              <label class="form-label" for="telProovedor"><b>Numero de Telefono</b></label>
              <input class="form-control" type="tel" id="telProovedor" name="telefono">
            </div>

            <!--Email-->
            <div class="secciones_form">
                <label class="form-label" for="emailProovedor"><b>Correo Electronico</b></label>
                <input class="form-control" type="email" id="emailProovedor" name="correo">
              </div>

            <!--Linea 2-->
            <div class="row">
              <!--Direccion-->
              <div class="col secciones_form">
                <label class="form-label" for="dProovedor"><b>Direccion</b></label>
                <input class="form-control" type="text" id="dProovedor" name="direccion">
              </div>
  
              <!--Codigo Postal-->
              <div class="col-3 secciones_form">
                <label class="form-label" for="cpProovedor"><b>Codigo Postal</b></label>
                <input class="form-control" type="number" id="cpProovedor" name="cp">
              </div>
            </div>

            <!--Botones-->
            <div class="row justify-content-end mt-4">
              <div class="col-2 text-end">
                <button class="btn btn-danger" type="reset">Vaciar Formulario</button>
              </div>

              <div class="col-2 text-end">
                <button class="btn btn-primary" type="submit">A??adir Proovedor</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
  </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>