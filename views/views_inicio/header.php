<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/header.css">
    <link rel="stylesheet" href="../../css/mi_css/inicio.css">
    <link rel="stylesheet" href="../../css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Header</title>
</head>
<body>
    <!--Header-->
    <header class="row justify-content-center">
        <!--Parte Arriba Header-->
        <div class="row justify-content-center border-bottom border-1 border-dark border-opacity-25     barra_arriba">
            <!--Logo Express-->
            <div class="col-2 text-end">
                <object data="svg/logo-r.svg" class="text-end border border-dark   logo"></object>
            </div>
            
            <!--Barra de Busqueda-->
            <div class="col-6 text-center">
                <div class="input-group mb-3 border border-1 border-dark rounded rounded-3  buscar">
                    <!--Barra-->
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Buscar productos">
                    <!--Boton Buscar-->
                    <button class="btn border-0 border-start  b-buscar" type="button" id="button-addon1">Buscar</button>
                </div>
            </div>
    

            <!--Login-->
            <!--Boton Iniciar Sesion-->
            <?php 
            if(isset($_SESSION["usuario"]))
            {
                echo "<div class='col-2'>
                <button class='btn  boton-login' type='button' data-bs-toggle='modal' data-bs-target='#iniciar-sesion'>
                    <img src='svg/perfil-b.svg' alt='' class='icono_boton'>
                    <p class='texto-boton-login-no-iniciado text-start'><b>".$_SESSION["usuario"]."</b></p>
                </button>";
            }
            else
            {
                echo "<div class='col-2'>
                <button class='btn  boton-login' type='button' data-bs-toggle='modal' data-bs-target='#iniciar-sesion'>
                    <img src='svg/perfil-b.svg' alt='' class='icono_boton'>
                    <p class='texto-boton-login-no-iniciado text-start'><b>Iniciar Sesion o Registrarse</b></p>
                </button>";
            }

            ?>
      
                <!--Modal Iniciar Sesion-->
                <div class="modal modal-sm" id="iniciar-sesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center border-bottom border-dark     m_h_i">
                            <h5 class="modal-title   t_modal_i" id="exampleModalLabel">Iniciar Sesion</h5>
                        </div>

                        <div class="modal-body  m_c_i">
                        <form action="../scripts/VerificarLogin.php" method="POST">
                            <div class="label">
                                <label for="correo" class="form-label"><b>Correo Electronico</b></label>
                                <input type="email" id="correo" class="form-control     in_m_i" name="usuario">
                            </div>

                            <div class="label">
                                <label for="contraseña" class="form-label"><b>Contraseña</b></label>
                                <input type="password" id="contraseña" class="form-control  in_m_i" name="contraseña">
                                <a href="" class="link_modal_i">¿Olvidaste tu contraseña?</a>
                            </div>

                            <div class="text-center     label">
                                <button class="btn  boton_i_s" type="submit">Iniciar Sesion</button>
                            </div>

                            <div class="row text-center     label p_c_c">
                                <b>¿Aún no tienes cuenta?</b>

                                <!--Link Crear Cuenta-->
                                <a href="views/views_inicio/registrarse.php" class="link_modal_i">Registrate aqui</a>

                            </div>
                        </form>
                        </div>
                    </div>
                    </div> 
                </div>
            </div>
        </div>
            
        <!--Parte Abajo Header-->
          
        <div class="border-bottom border-dark">
            <div class="row justify-content-center  barra">
                <!--Inicio-Productos-Servicios-->
                <div class="col-8">
                    <ul class="nav justify-content-center">           
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" type="button" href="index.php">
                                <div class="organizar">
                                    <img src="svg/casa-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Inicio</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="views/views_inicio/productos.php">
                                <div class="organizar">
                                    <img src="svg/caja-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Productos</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="views/views_inicio/servicios.php">
                                <div class="organizar">
                                    <img src="svg/servicios-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Servicios</b></p>
                                </div>
                            </a>
                        </li>
                            <?php
               
                            if (!isset($_SESSION["usuario"]))
                            {
                            echo
                        "<li class='nav-item disabled    boton-bb'>
                            <a class='btn   boton-a-bb' data-bs-toggle='modal data-bs-target='#iniciar-sesion'>
                                <div class='organizar'>
                                    <img src='svg/carrito-b.svg' class='icono'>
                                    <p class='texto-botones-bb'><b>Carrito</b></p>
                                </div>
                            </a>
                        </li>";
                            }
                            else
                            {
                                echo "<li class='nav-item    boton-bb'>
                                <a class='btn   boton-a-bb' href='views/views_inicio/carrito.php'>
                                    <div class='organizar'>
                                        <img src='svg/carrito-b.svg' class='icono'>
                                        <p class='texto-botones-bb'><b>Carrito</b></p>
                                    </div>
                                </a>
                            </li>";
                            }
                        ?>
                        <?php
                        if(!isset($_SESSION['usuario']))

                        {
                         echo "<li class='nav-item    boton-bb disabled '>
                         <a class='btn   boton-a-bb' href='views/views_inicio/pedidos.php'>
                             <div class='organizar'>
                                 <img src='svg/bolsa-b.svg' class='icono'>
                                 <p class='texto-botones-bb'><b>Mis Pedidos</b></p>
                             </div>
                         </a>
                     </li> ";
                        }
                        else
                        {
                            echo "<li class='nav-item     boton-bb'>
                            <a class='btn   boton-a-bb' href='views/views_inicio/pedidos.php'>
                                <div class='organizar'>
                                    <img src='svg/bolsa-b.svg' class='icono'>
                                    <p class='texto-botones-bb'><b>Mis Pedidos</b></p>
                                </div>
                            </a>
                        </li> ";
                        }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>