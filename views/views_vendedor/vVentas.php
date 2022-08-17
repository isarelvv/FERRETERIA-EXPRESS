<!DOCTYPE html>
<?php
use MyApp\query\select;
require_once("../../vendor/autoload.php");
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/vVentas.css">
    <title>Ventas - Repartidor</title>
</head>
<body>
<?php 
if(isset($_SESSION['usuario']))
{
    switch ($_SESSION['SESION']) 
    {
        case 300:
            header("Location: ../views_administrador/inicio.php");
            break;   
        case 303: 
            header("Location: ../../index.php");
            break;
        case 302:
                header("Location: ../views_repartidor/rInicio.php");
            break;
    }
}
else
{
    header("Location: ../../index.php");
}
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
                  <a class="nav-link active    items" aria-current="page" href="../../views/views_vendedor/vVentas.html">Ventas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link    items" href="../../views/views_vendedor/vInventario.html">Inventario</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link    items" href="../../views/views_vendedor/vHistorial.php">Historial de Ventas</a>
                </li>
              </ul>

              <hr class="text-white">

              <!--Configuracion-->
              <div class="text-center">
                <div class="dropdown dropdown-center">
                  <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
                
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li style="margin-bottom: 10px;"><a class="dropdown-item" href="../../views/views_vendedor/vAjustes.html">Ajustes</a></li>
                    <li><hr class="sep_hr"></li>
                    <li style="margin-top: 10px;"><a class="dropdown-item" href="..\scripts\cerrarSesion.php">Cerrar Sesion</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </nav>

        <!--Info Pedidos-->
        <main class="col-10 border">
            <div class="container">
              <div class="row">

                <!--Agregar productos-->
                <div class="col-8  agregar_productos">
                  <form action="" method="POST">
                    <div>
                      <div class="row">
                        <div class="col-8"><input class="form-control" type="text" id="productos" name="buscar" placeholder="Ingresa el nombre del producto..."></div>
                        <div class="col-2">
                          <div class="row">
                            <button class="btn boton_buscar" type="submit" name="buscar_producto">Buscar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  
                  <hr>
                 
                  
                  <!--Productos-->
                  <div class="mt-2">
                 
                    
                      <div class="contenedor_productos">
                      <?php
                   if(isset($_POST['buscar']) && isset($_POST['buscar_producto']))
                   {
                       extract($_POST);
                       $barra = new select();
                       $consulta = "SELECT PRODUCTOS.CODIGO, PRODUCTOS.NOMBRE AS PRODUCTO, CATEGORIAS.NOMBRE AS CATEGORIA, 
                       PRODUCTOS.PRECIO_VENTA AS PRECIO, PRODUCTOS.FOTO AS FOTO, PRODUCTOS.DESCRIPCION AS DESCRIPCION,
                       PRODUCTOS.CANTIDAD_REAL AS CANTIDAD,(PRODUCTOS.CANTIDAD_IDEAL-PRODUCTOS.CANTIDAD_REAL) AS FALTANTES FROM PRODUCTOS
                       INNER JOIN CATEGORIAS ON CATEGORIAS.ID_CATEGORIA = PRODUCTOS.CATEGORIA WHERE PRODUCTOS.NOMBRE   LIKE '%$buscar%'";
                       $resultado = $barra->seleccionar($consulta);
                       foreach ($resultado as $tabla ) {
                        ?>
                        <!--Producto-->
                        <div class="row border  producto_carito">
                          <!--Imagen-->
                          <div class="col-1 p-0">
                              <img src="<?php echo $tabla->FOTO ?>" alt="" class="imagen_productos">
                          </div>
    
                          <!--Info Producto Carrito-->
                          <div class="col ms-1 mt-2">
                              <div class="row justify-content-lg-start">
                                  <div class="col-9 pNombre"><b><?php echo $tabla->PRODUCTO ?></b></div>
                                  <div class="col-3 text-end nPrecio"><b>Precio: </b>$<?php echo $tabla->PRECIO ?>.00</div>
                              </div>
                              <form action="..\scripts\Productos_Ventas.php" method="post">
                              <div class="row justify-content-start mt-1">
                                <div class="col-3 pt-1"><b>Cantidad en Stock: </b><?php echo $tabla->CANTIDAD ?></div>
                                <div class="col-2">
                                  <input name="cantidad_llevada" class="form-control form-control-sm" type="number" id="cantidad_llevada" placeholder="1" value=1 min="1" max="<?php echo $tabla->CANTIDAD ?>">
                                </div>
                                <div class="col text-end">
                                  <button class="btn btn-sm boton_buscar" type="submit" name="agregar" id="agregar" value="<?php echo $tabla->CODIGO ?>" >
                                    Agregar al Carrito
                                  </button>
                                  </form>
                                </div>
                              </div>
                          </div>
                        </div>
                        <?php

                       }
                       
                      }
                    
                ?>
                      </div>  
                 
                  </div>
                  

                </div>
                
                <!--Info Venta-->
                <div class="col-4 border  informacion_venta">
                  <!--Cliente-->
                  <div>
                    <div class="text-center titulo_secc"><b>Cliente</b></div>

                    <hr class="mt-2 mb-3">

                    <form action="..\scripts\VentaClases.php" method="POST">
                      <div class="row">

                      <?php
                      if (isset($_SESSION['comprador'])) {
                        ?>
                        
                
                        <div class="row">
                        <div class="col-5"><h6><?php echo  $_SESSION['comprador']." ". $_SESSION['comprador_ape'] ?></h6></div>
                        <div class="col-3"><h6><?php echo  $_SESSION['tel'] ?></h6></div>
                        <form action="" method="post">
                        <div class="col-2"><button type="submit" name="eliminar" class="btn btn-danger btn-sm w-50 h-50" id="eliminar" value="eliminar"></button></div>
                        </form>
                      </div>  
                      <?php  
                      }
                      else
                      {
                      ?>
                        <div class="col-6" >
                          <input class="form-control form-control-sm " type="tel" id="tel_cliente" placeholder=" NUMERO DE CLIENTE" name="cliente" required >
                        </div>
                        <div class="col-3 row " >
                          <button class="btn btn-sm   boton_buscar" type="submit" name="busqueda" id="busqueda" value="hola">
                            Buscar
                          </button>
                        </div>
                      </form>
                      </div>
                      
                      <div class="text-center mt-2">
                        <a href="" class="link_modal" data-bs-toggle="modal" data-bs-target="#registrarse">Registrar cliente nuevo</a>
                      </div>
                      <?php
                      }
                    
                      ?>
        
                

                      <!-- Modal -->
                      <div class="modal fade" id="registrarse" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                          <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header bg-dark">
                              <h5 class="modal-title text-white" id="exampleModalLabel">Crear Cuenta</h5>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <!--Cuerpo-->
                            <div class="modal-body">
                            <form action="../scripts/guardarUsuario.php" method="POST">                      
                                <div class="justify-content-center">
                                    <div class="">
                                      <!--Seccion1-->
                                      <div class="contenedores_form">
                                        <h5>Informacion Personal</h5>
                                        <!--Nombre-->
                                        <div class="form-floating mb-2">
                                            <input class="form-control  conf_labels" type="text" id="nombre" placeholder="Nombre" name="nombre" required>
                                            <label class="form-label"  for="nombre">Nombre</label>
                                        </div>
                                        <!--Apellido Paterno-->
                                        <div class="form-floating mb-2">
                                            <input class="form-control  conf_labels" type="text" id="a_p" placeholder="Apellido Paterno" name="appaterno" required>
                                            <label class="form-label" for="a_p">Apellido Paterno</label>
                                        </div>
                                        <!--Apellido Materno-->
                                        <div class="form-floating mb-2">
                                            <input class="form-control  conf_labels" type="text" id="a_m" placeholder="Apellido Materno" name="apmaterno" required>
                                            <label class="form-label" for="a_m">Apellido Materno</label>
                                        </div>
                                        <!--Correo Electronico-->
                                        <div class="form-floating mb-2">
                                            <input class="form-control  conf_labels" type="email" id="correo" placeholder="Correo Electronico" name="correo" required>
                                            <label class="form-label" for="correo">Correo Electronico</label>
                                        </div>
                                        <!--Numero de Telefono-->
                                        <div class="form-floating mb-2">
                                            <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Numero de Telefono" name="tel" required>
                                            <label class="form-label" for="telefono">Numero de Telefono</label>
                                        </div>
                                    </div>

                                    <hr>
                    
                                    <!--Seccion2-->
                                    <div class="contenedores_form">
                                        <h5>Direccion</h5>
                                        <!--Direccion-->
                                        <div class="form-floating mb-2">
                                            <input class="form-control  conf_labels" type="text" id="direccion" placeholder="Direccion" name="dir" required>
                                            <label class="form-label" for="direccion">Direccion</label>
                                        </div>
                    
                                        <!--Codigo Postal-->
                                        <div class="form-floating mb-2">
                                            <input class="form-control  conf_labels" type="text" id="cp" placeholder="Codigo Postal" style="max-width: 200px;" name="codpst" required>
                                            <label class="form-label" for="cp">Codigo Postal</label>
                                        </div>
                                    </div>

                                    <hr>
                    
                                    <!--Seccion3-->
                                    <div class="contenedores_form">
                                        <h5>Contraseña</h5>
                                        <!--Contraseña-->
                                        <div class="form-floating mb-2">
                                            <input class="form-control  conf_labels" type="password" id="contra" placeholder="Contraseña" name="pass" required maxlength="30" minlength="8">
                                            <label class="form-label" for="contra">Contraseña</label>
                                            <div id="ayuda_email" class="form-text">La contraseña debe tener al menos 8 digitos.</div>
                                        </div>
                    
                                        <!--Repetir Contraseña-->
                                        <div class="form-floating mb-2">
                                            <input class="form-control  conf_labels" type="password" id="rcontra" placeholder="Repetir Contraseña" name="pass1">
                                            <label class="form-label" for="rcontra">Repetir Contraseña</label>
                                        </div> 
                                    </div>
                                    </div>
                                </div>
                              </form>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer bg-dark">
                              <button type="button" class="btn  boton_cerrar" data-bs-dismiss="modal">Cerrar</button>
                              <form action="">
                                <button type="submit" class="btn  crear_cuenta">Crear Cuenta</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <hr class="mt-2 mb-2">
                  <?php
    
      

?><?php 
$venta=0;
if (isset( $_SESSION['venta'])) {
  ?>
                  <!--Carrito-->
                  <div class="mt-3">
                    <table class="table">
                      <thead class="table-bordered">
                        <tr class="table-light text-center  titulos_tabla">
                          <th class="text-start" scope="col">Nombre</th>
                          <th scope="col">Cantidad</th>
                          <th scope="col">Monto</th>
                        </tr>
                        
                       <?php
                        foreach ($_SESSION['venta'] as $dato) {
                          $venta+=$dato['total'];
                        ?>
                        <tr class="">
                          <td><?php echo $dato['nombre'] ?></td>
                          <td class="text-center"><?php echo $dato['cantidad'] ?></td>
                          <td class="text-center">$<?php echo $dato['total'] ?>.00</td>
                        </tr>
                        <tr class="">
                          <td></td>
                          <td></td>
                          <td> 
                            <form action="..\scripts\Productos_Ventas.php" method="post">
                          <button class="btn btn-sm btn-danger  " type="submit" name="eliminar" id="eliminar" value="<?php echo $dato['id'] ?>">
                            Eliminar
                          </button>
                        </form>
                          </td>
                        </tr>
                        <?php 
                        }
                        ?>
                      </thead>
                    </table>
                  </div>
                  <?php
                      if (isset($_SESSION['comprador'])) {
                        ?>
                        
                  <!--Resumen del Pedido-->
                  <div class="border p-1  resumen_pedido">
                    <div><b>Nombre del Cliente: </b><?php echo  $_SESSION['comprador']." ". $_SESSION['comprador_ape'] ?></div>
                    <div><b>Telefono: </b><?php echo  $_SESSION['tel'] ?></div>
                    <div><b>Correo Electronico: </b><?php echo  $_SESSION['mail'] ?></div>
                    
                    <?php 
                    }      
                  }   
                           ?>
                    <div><b>Precio Total: </b>$<?php echo $venta?>.00</div>
                    <div class="row mt-3">
                    <div class="col text-end me-1">
                      <button class="btn  boton_buscar">Confirmar Venta</button>
                    </div>
                    <div class="col text-start ms-1">
                      <button class="btn  boton_buscar" type="button" data-bs-toggle="modal" data-bs-target="#checkDOMICILIO">Envio a Domicilio</button>
                    </div>
                  </div>
                  

                  <!--Botones-->
                  

                    <!-- Modal -->
                    <div class="modal modal-sm fade" id="checkDOMICILIO" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <!--Header-->
                          <div class="modal-header bg-black">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Envio a Domicilio</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <!--Cuerpo-->
                          <div class="modal-body">
                            <form action="">
                              <div>
                                <div><b>Selecciona los productos que seran enviados a domicilio:</b></div>
                                <?php
                                     if (isset($_SESSION['venta'])) {
                                      foreach ($_SESSION['venta'] as $dato) {
                                    ?>
                                <div class="container">
                                  <!--Productos-->
                                  <div class="row border  producto_carito">
                                    <!--Imagen-->
                                    <div class="col p-0 text-center" style="max-width: 60px; max-height: 60px;">
                                        <img src="<?php echo$dato['foto'] ?>" alt="" class="imagen_productos_modal">
                                    </div>
                                    
                                    <!--Info Producto Carrito-->
                                    <div class="col ms-1 mt-2">
                                        <div class="row justify-content-lg-start">
                                            <div class="col pNombre_modal"><b><?php echo$dato['nombre'] ?></b></div>
                                            <div class="col-2 ps-2">
                                              <input class="form-check" type="checkbox" name="" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                     }
                                    }
                                    ?>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>

                          <!--Footer-->
                          <div class="modal-footer">
                            <button type="button" class="btn boton_cerrar" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn crear_cuenta">Confirmar Venta</button>
                          </div>
                        </div>
                      </div>
                    </div>
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