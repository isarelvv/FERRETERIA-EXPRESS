<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/aModal.css">
    <link rel="stylesheet" href="../../css/mi_css/aInventario.css">
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
            <a class="nav-link    items" aria-current="page" href="../../views/views_administrador/aInicio.php">Inicio</a>
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
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!--Contenedor-->
    <main class="col-10">
      <div class="container">
        <h4><b>Surtir Productos</b></h4>

        <hr>

        <form action="">
            <div class="row">
              <div class="col-2 pt-1">
                <label class="form-label" for="cvProducto"><b>Clave del Producto:</b></label>
              </div>
              <div class="col-6">
                <input class="form-control" type="text" id="cvProducto" placeholder="Ingresa la clave aqui...">
              </div>
              <div class="col">
                <input class="form-control" type="number" placeholder="Cantidad..." value="1" min="1">
              </div>
              <div class="col row">
                <button class="btn btn-primary col">Agregar</button>
              </div>
            </div>

            <hr>

            <!--Productos-->
            <!--Cuadros Info Productos-->
            <div class="row border border-secondary    productos">
                <!--Imagen-->
                <div class="col" style="max-width: 80px;">
                    <img src="../../svg/facebook.svg" alt="" class="imagen_productos">
                </div>
        
                <!--Info Producto Carrito-->
                <div class="col text-start  info_producto_carrito">
                    <div class="row justify-content-between">
                        <div class="col-12   nombre_producto">
                            <b>#Producto</b>
                        </div>
                    </div>
        
                    <div class="row justify-content-start     barra_baja">
                        <div class="col-2 precio_total" style="color: #0254EB;"><b>#Proovedor</b></div>

                        <div class="col-3">
                            <div class="input-group">
                                <span class="input-group-text   barra_cantidad">Cantidad</span>
                                <input type="number" class="form-control    barra_cantidad" disabled="disabled" aria-label="Username" value="3">
                                <span class="input-group-text   barra_cantidad">kg</span>
                            </div>
                        </div>

                        <div class="col text-end  precio_total">
                            <b>Precio Unitario: $50.00</b>
                        </div>

                        <div class="col text-end  precio_total">
                            <b>Precio Total: $150.00</b>
                        </div>
                    </div>
                </div>
            </div>
          </form>
      </div>
    </main>
  </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>