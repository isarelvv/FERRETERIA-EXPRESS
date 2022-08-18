<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/aAltas.css">
    <title>Altas Repartidores - Administrador</title>
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
              <a class="nav-link border border-danger text-danger" href="../../views/views_administrador/aAltasProovedores.php">Proovedores</a>
            </li>

            <!--Vendedores-->
            <li class="nav-item ms-1 me-2">
              <a class="nav-link border border-danger text-danger" href="../../views/views_administrador/aAltasVendedores.php">Vendedores</a>
            </li>

            <!--Repartidores-->
            <li class="nav-item">
              <a class="nav-link active bg-danger border border-danger" href="../../views/views_administrador/aAltasRepartidores.php">Repartidores</a>
            </li>
          </ul>
        </div>

        <hr>

        <!--Formulario-->
        <div>
          <form action="../scripts/guardarRepartidor.php" method="POST" enctype="multipart/form-data">
            <!--Nombre-->
            <div class="secciones_form">
              <label class="form-label" for="nReparitdor"><b>Nombre(s)</b></label>
              <input class="form-control" type="text" id="nReparitdor" name="nombre">
            </div>

            <!--Apellidos-->
            <div class="row">
                <!--Apellido Paterno-->
                <div class="secciones_form col">
                    <label class="form-label" for="apReparitdor"><b>Apellidos</b></label>
                    <input class="form-control" type="text" id="apReparitdor" name="apellidos">
                </div>

            <!--Fila Info-->
            <div class="row">
                <!--Foto-->
                <div class="secciones_form col">
                    <label class="form-label" for="fReparitdor"><b>Foto del Vendedor</b></label>
                    <input class="form-control" type="file" accept="image/*" id="fReparitdor" name="foto">
                </div>

            </div>
            
            <!--Telefono-->
            <div class="secciones_form">
                <label class="form-label" for="telReparitdor"><b>Numero de Telefono</b></label>
                <input class="form-control" type="tel" id="telReparitdor" name="telefono">
              </div>
  
            <!--Email-->
            <div class="secciones_form">
                <label class="form-label" for="emailReparitdor"><b>Correo Electronico</b></label>
                <input class="form-control" type="email" id="emailReparitdor" name="correo">
            </div>

            <!--Contraseña-->
            <div class="row">
                <!--Contraseña-->
                <div class="secciones_form col">
                    <label class="form-label" for="cReparitdor"><b>Contraseña</b></label>
                    <input class="form-control" type="password" id="cVendedor" name="pass">
                </div>

                <!--Repetir Contraseña-->
                <div class="secciones_form col">
                    <label class="form-label" for="rcReparitdor"><b>Repetir Contraseña</b></label>
                    <input class="form-control" type="password" id="rcReparitdor" name="pass1">
                </div>
            </div>

            <hr>

            <!--Vehiculo-->
            <div class="row">
                <h5><b>Informacion del Vehiculo</b></h5>

                <!--Numero de Licencia-->
                <div class="secciones_form col">
                    <label class="form-label" for="nlReparitdor"><b>Numero de Licencia</b></label>
                    <input class="form-control" type="text" id="nlReparitdor" name="licencia">
                </div>

                <!--Numero de Placas-->
                <div class="secciones_form col">
                    <label class="form-label" for="nlVendedor"><b>Numero de Placas</b></label>
                    <input class="form-control" type="text" id="nlReparitdor" name="placas">
                </div>
            </div>

            <!--Botones-->
            <div class="row justify-content-end mt-4">
              <div class="col-2 text-end">
                <button class="btn btn-danger" type="reset">Vaciar Formulario</button>
              </div>

              <div class="col-2 text-end">
                <button class="btn btn-primary" type="submit">Añadir Vendedor</button>
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