<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/aInventario.css">
    <title>Inventario - Administrador</title>
</head>
<body>
<?php
            
            use MyApp\query\select;
            require_once("../../vendor/autoload.php");
           

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
            <a class="nav-link     items" aria-current="page" href="../../views/views_administrador/aInicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link    items" aria-current="page" href="../../views/views_administrador/aReportesVendedores.php">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link    items" href="../../views/views_administrador/aAltasProductos.php">Altas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active bg-danger    items" href="../../views/views_administrador/aInventario.php">Inventarios</a>
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
        <div class="titulo_contenedor"><b>Inventario</b></div>
              <form action="" method="post">
                <div class="filtros_contenedor"><b>Filtros de Busqueda</b></div>

                <!--Selects-->
                <!--Fila 1-->
                <div class="row mb-2">
                  <!--Buscar por Nombre-->
                  <div class="col">
                    <label class="form-label" for="b_nombre"><b>Buscar por Nombre</b></label>
                    <div class="row">
                      <div class="col-5">
                        <input class="form-control form-control-sm" type="text" id="b_nombre" placeholder="Ingresa el nombre del producto..." name="buscar">
                      </div>

                      <!--Boton-->
                      <div class="col-2 row">
                        <button class="btn btn-sm btn-danger" type="submit">
                          Buscar Producto
                        </button>
                      </div>  
                  </div>
                </div>
              </div>
            </form>

                  <?php
            if(isset($_POST['buscar']))
            {
                extract($_POST);
                $barra = new select();
                $consulta = "SELECT productos.CODIGO, categorias.NOMBRE AS CATEGORIA, productos.NOMBRE, productos.DESCRIPCION, productos.CANTIDAD_REAL,productos.CANTIDAD_IDEAL,productos.PRECIO_VENTA,productos.PRECIO_COMPRA, 
                productos.MEDIDA, PROVEEDORES.COMPAÑIA ,productos.FOTO FROM productos JOIN categorias ON categorias.ID_CATEGORIA=productos.CATEGORIA
                JOIN PROVEEDORES ON PROVEEDORES.ID_PROVEEDOR=productos.PROVEEDOR
                WHERE productos.nombre LIKE '%$buscar%'";
                $resultado = $barra->seleccionar($consulta);
            }
            ?>


                <hr>

                <!--Fila 2-->
                <div class="row">
                  <!--Ordenar-->
                  <div class="col-5">
                    <form action="" method="POST">
                    <select name="filtros_de_busqueda" class="form-select form-select-sm     select_filtros" aria-label="Default select example">
                      <option value="1">Todos los productos</option>
                      <option value="2">Ordenar de la A a la Z</option>
                      <option value="3">Ordenar de la Z a la A</option>
                      <option value="4">De Mayor a Menor Cantidad</option>
                      <option value="5">De Menor a Mayor Cantidad</option>
                    </select>
                  </div>

                  <!--Categorias-->
                  <div class="col-5">
                    <select name="categorias" class="form-select form-select-sm     select_filtros" aria-label="Default select example">
                    <option value="Herramientas" name="categorias">Herramientas</option>
                            <option value="adiciones" name="categorias">Union</option>
                            <option value="medicion" name="categorias">Medicion</option>
                            <option value="construccion" name="categorias">Construccion</option>
                            <option value="tuberia" name="categorias">Tuberias</option>
                            <option value="iluminacion" name="categorias">Alumbrado</option>
                            <option value="seguridad" name="categorias">Proteccion</option>
                            <option value="limpieza" name="categorias">Limpieza</option>
                            <option value="pintura" name="categorias">Pintura</option>
                            <option value="otros" name="categorias">Otros</option>
                    </select>
                  </div>

                  <!--Boton-->
                  <div class="col-2 row">
                    <button class="btn btn-sm btn-danger" type="submit" name="filtrar">
                      Filtrar Resultados
                    </button>
                  </div>
                </div>
              </form>

              <hr>
              <?php
               $cadena= "CALL PPC_ADMIN('herramientas');";
            if($_POST)
            {
                 if (isset($_POST)) 
                 {
                    $filtros_de_busqueda ="";
                    extract($_POST);    
                    if (isset($categorias))   
                    {  
                        switch ($filtros_de_busqueda) 
                        {
                            case 1:
                                $cadena= "CALL PPC_ADMIN('$categorias');";
                                break;
                            case 2:
                                $cadena= "CALL PRODUCTOS_STOCK_ADMIN('$categorias');";
                                break;
                            case 3:
                                $cadena= "CALL ORDEN_PPC_AZ_ADMIN('$categorias');";
                                break;
                            case 4:
                                $cadena= "CALL ORDEN_PPC_ZA_ADMIN('$categorias');";
                                break;
                            case 5:
                                $cadena= "CALL PPC_PRECIO_MAYOR_ADMIN('$categorias');";
                                break;
                            case 6:
                                $cadena= "CALL PPC_PRECIO_MENOR_ADMIN('$categorias');";
                                break; 
                        }
                    }
               }
             ?>
             
        <?php
        if (isset($_POST['buscar']))
        {
          ?>

              <!--Tabla Inventario-->
              <table class="table table-bordered">
                <thead>
                  <tr class="table-dark">
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio venta</th>
                    <th scope="col">Precio compra</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($resultado as $registro)
                  {
                    ?>
                    <tr style="vertical-align: middle;">
                        <td class="text-center" style="padding: 0%;">
                          <img src='<?php echo $registro->FOTO?>'  style="max-width: 60px;">
                        </td>
                        <td><?php echo $registro->NOMBRE?></td>
                        <td><?php echo $registro->CATEGORIA?></td>
                        <td class="text-center"><?php echo $registro->CANTIDAD_REAL?></td>
                        <td class="text-center"><?php echo $registro->PRECIO_VENTA?></td>
                        <td class="text-center"><?php echo $registro->PRECIO_COMPRA?></td>
                </tbody>
                <?php 
                  }
                  ?>

                              
            <?php
                  
        }
        else
        {
          $query=new Select();
          $tabla =$query ->seleccionar($cadena);
       ?>
       
        <!--Tabla Inventario-->
        <table class="table table-bordered">
          <thead>
            <tr class="table-dark">
              <th scope="col">Foto</th>
              <th scope="col">Nombre del Producto</th>
              <th scope="col">Categoria</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Precio venta</th>
              <th scope="col">Precio compra</th>
            </tr>
          </thead>
        
          <tbody>
            
          <?php
          foreach($tabla as $registro)
          {
         ?>
              <tr style="vertical-align: middle;">
                  <td class="text-center" style="padding: 0%;">
                    <img src='<?php echo $registro->FOTO?>'  style="max-width: 60px;">
                  </td>
                  <td><?php echo $registro->NOMBRE?></td>
                  <td><?php echo $registro->CATEGORIA?></td>
                  <td class="text-center"><?php echo $registro->CANTIDAD_REAL?></td>
                  <td class="text-center"><?php echo $registro->PRECIO_VENTA?></td>
                  <td class="text-center"><?php echo $registro->PRECIO_COMPRA?></td>
                  <?php
    }
    ?>
            </tbody>
          
                  <?php
        }
      }
      else
      {

      }
            ?>
                  
      </div>
    </main>
  </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>