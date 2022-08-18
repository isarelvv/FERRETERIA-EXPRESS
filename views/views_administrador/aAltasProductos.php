<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/aAltas.css">
    <link rel="stylesheet" href="../../css/mi_css/aReportesV_R.css">
    <title>Altas Productos - Administrador</title>
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
            <!--Productos-->
            <li class="nav-item">

              <a class="nav-link active bg-danger border border-danger" aria-current="page" href="../../views/views_administrador/aAltasProductos.php">Productos</a>

            </li>

            <!--Proovedores-->
            <li class="nav-item ms-2 me-1">

              <a class="nav-link border border-danger text-danger" href="../../views/views_administrador/aAltasProovedores.php">Proovedores</a

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
          <form action="../scripts/guardarProducto.php" method="POST">
            <!--Nombre-->
            <div class="secciones_form">
              <label class="form-label" for="nProduto"><b>Nombre del Producto</b></label>
              <input class="form-control" type="text" id="nProduto" name="nombre">
            </div>


            <!--Foto-->
            <div class="secciones_form">
              <label class="form-label" for="fProducto"><b>Foto del Producto</b></label>
              <input class="form-control" type="file" accept="image/*" id="fProducto" name="foto">
            </div>

            <!--Descripcion-->
            <div class="secciones_form">
              <label class="form-label" for="dProducto"><b>Descripcion</b></label>
              <textarea class="form-control" name="descripcion" id="dProducto" rows="5"></textarea>
            </div>

            <!--Linea 2-->
            <div class="row">
              <!--Cantidad Real-->
              <div class="col secciones_form">
                <label class="form-label" for="crProducto"><b>Cantidad Real</b></label>
                <input class="form-control" type="number" value="1" min="1" max="#10" id="crProducto"
                name="cantidad_real">
              </div>
  
              <!--Cantidad Ideal-->
              <div class="col secciones_form">
                <label class="form-label" for="ciProducto"><b>Cantidad Ideal</b></label>
                <input class="form-control" type="number" value="1" min="1" max="#10" id="ciProducto" name="cantidad_ideal">
              </div>
  
              <!--Precio Venta-->
              <div class="col secciones_form">
                <label class="form-label" for="pvProducto"><b>Precio Venta</b></label>
                <div class="input-group">
                  <span class="input-group-text">$</span>
                  <input class="form-control" type="text" id="pvProducto" name="precio_venta">
                </div>
              </div>
  
              <!--Precio Compra-->
              <div class="col secciones_form">
                <label class="form-label" for="pcProducto"><b>Precio Compra</b></label>
                <div class="input-group">
                  <span class="input-group-text">$</span>
                  <input class="form-control" type="text" id="pcProducto" name="precio_compra">
                </div>
              </div>
            </div>


            <!--Linea 3-->
            <div class="row">
              <!--Medida-->
              <div class="col secciones_form">
                <label class="form-label" for="mProducto"><b>Medida</b></label>
                <select class="form-select" name="medida" id="mProducto">
                <option value="Pieza" >Pieza</option>
                <option value="Litro">Litro</option>
                <option value="Lata">Lata</option>
                <option value="Metro">Metro</option>
                <option value="Kg">Kg</option>
                <option value="M3">M3</option>
                <option value="Gramo">Gramo</option>
                </select>
              </div>
              

              <!--Proovedor-->
              <?php
              use MyApp\Query\select;
                require_once("../../vendor/autoload.php");

                $query = new select();
                $cadena="SELECT ID_PROVEEDOR, COMPAÑIA FROM PROVEEDORES";
                $reg = $query->seleccionar($cadena);
                ?>
                
              <div class="col secciones_form">
                <label class="form-label" for="provProducto"><b>Proovedor</b></label>
                <select class="form-select" name="proveedor" id="provProducto">
                  <?php
                foreach ($reg as $value)
                {
                    echo "<option value='".$value->ID_PROVEEDOR."'>".$value->COMPAÑIA."</option>";
                }
                ?>
                </select>
              </div>
  
              <!--Categoria-->
              <?php
               $cadena2="SELECT ID_CATEGORIA, NOMBRE FROM CATEGORIAS";
               $reg1 = $query->seleccionar($cadena2);
               ?>
              <div class="col secciones_form">
                <label class="form-label" for="catProducto"><b>Categoria</b></label>
                <select class="form-select" name="categoria" id="catProducto">
                  <?php
                foreach ($reg1 as $value1)
                {
                    echo "<option value='".$value1->ID_CATEGORIA."'>".$value1->NOMBRE."</option>";
                }
                ?>
                </select>
              </div>
  

              <!--Entrega a Domicilio-->
              <div class="col secciones_form">
                <label class="form-label" for="eadProductos"><b>Entrega a Domicilio</b></label>
                <select class="form-select" name="entrega_domicilio" id="eadProductos">
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                </select>
              </div>
            </div>

            <!--Botones-->
            <div class="row justify-content-end mt-4">
              <div class="col-2 text-end">
                <button class="btn btn-danger" type="reset">Vaciar Formulario</button>
              </div>

              <div class="col-2 text-end">
                <button class="btn btn-primary" type="submit">Agregar Producto</button>
              </div>
            </div>
          </form>

        <div>
          <table class="table">
            <thead>
              <tr class="text-center">
                <th scope="col" colspan="4">Informacion Personal</th>
                <th scope="col" colspan="2">Informacion de Contacto</th>
                <th scope="col" colspan="2">Informacion del Vehiculo</th>
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