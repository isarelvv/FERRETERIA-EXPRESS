<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/pared-r.ico"> 
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/header.css">
    <link rel="stylesheet" href="../../css/mi_css/servicios.css">
    <link rel="stylesheet" href="../../css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Servicios - Ferreteria y Materiales Express</title>
</head>
<body>
    <?php
        if(isset($_SESSION['SESION']))

        {
        switch ($_SESSION['SESION']) 
        {
            case 300:
                header("Location: views/views_administrador/inicio.php");
                break;   
            case 301: 
                header("Location: views/views_vendedor/vInicio.html");
                break;
            case 302:
                    header("Location: ../views_repartidor/rInicio.php");
                break;
        }
        }
    ?>
    <!--Header-->
    <header class="row justify-content-center">
        <!--Parte Arriba Header-->
        <div class="row justify-content-center border-bottom border-1 border-dark border-opacity-25     barra_arriba">
            <!--Logo Express-->
            <div class="col-2  col-sm-3 text-end">
                <object data="../../svg/logo-r.svg" class="text-end border border-dark   logo"></object>
            </div>
            
            <!--Barra de Busqueda-->
            <div class="col-6 text-center">
                <form action="productos.php" method="POST">
                <div class="input-group mb-3 border border-1 border-dark rounded rounded-3  buscar">
                    <!--Barra-->
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Buscar productos" name="buscar">
                    <!--Boton Buscar-->
                    <button class="btn border-0 border-start  b-buscar" type="submit" id="button-addon1">Buscar</button>
                </div>
                </form>
            </div>

            <!--Login-->
            <div class="col-2">
                <!--Boton Iniciar Sesion-->
                <?php 
            if(isset($_SESSION["usuario"]))
            {    
                echo "<div class='col-2' texto-boton-login>
                <a href='cuenta.php' class='link_cuenta' style='color: white'>
                <button class='btn  boton-login' type='button'>
                    <img src='../../svg/perfil-b.svg' alt='' class='icono_boton'>       
                    <p class='texto-boton-login-no-iniciado text-start'><b>Bienvenido ".$_SESSION["usuario"]."</b>
                    </a></p>
                </button> </div>";
            }
            else
            {
                echo "<button class='btn  boton-login' type='button' data-bs-toggle='modal' data-bs-target='#iniciar-sesion'>
                    <img src='../../svg/perfil-b.svg' alt='' class='icono_boton'>
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
                        <form action="">
                            <div class="label">
                                <label for="correo" class="form-label"><b>Correo Electronico</b></label>
                                <input type="email" id="correo" class="form-control     in_m_i">
                            </div>

                            <div class="label">
                                <label for="contraseña" class="form-label"><b>Contraseña</b></label>
                                <input type="password" id="contraseña" class="form-control  in_m_i">
                                <a href="" class="link_modal_i">¿Olvidaste tu contraseña?</a>
                            </div>

                            <div class="text-center     label">
                                <button class="btn  boton_i_s">Iniciar Sesion</button>
                            </div>

                            <div class="row text-center     label p_c_c">
                                <b>¿Aún no tienes cuenta?</b>

                                <!--Link Crear Cuenta-->
                                <a href="registrarse.php" class="link_modal_i">Registrate aqui</a>

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
                        <li class="nav-item     boton-bb col-sm-1">
                            <a class="btn   boton-a-bb" type="button" href="../../index.php">
                                <div class="organizar">
                                    <img src="../../svg/casa-b.svg" class="icono">
                                    <p class="texto-botones-bb d-lg-block d-none"><b>Inicio</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb col-sm-1">
                            <a class="btn   boton-a-bb" href="productos.php">
                                <div class="organizar">
                                    <img src="../../svg/caja-b.svg" class="icono">
                                    <p class="texto-botones-bb d-lg-block d-none"><b>Productos</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb col-sm-1">
                            <a class="btn   boton-a-bb" href="servicios.php">
                                <div class="organizar">
                                    <img src="../../svg/servicios-b.svg" class="icono">
                                    <p class="texto-botones-bb d-lg-block d-none"><b>Servicios</b></p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item     boton-bb col-sm-1">
                            <a class="btn   boton-a-bb" href="carrito.php">
                                <div class="organizar">
                                    <img src="../../svg/carrito-b.svg" class="icono">
                                    <p class="texto-botones-bb d-lg-block d-none"><b>Carrito</b></p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item     boton-bb col-sm-1 col-lg-2">
                            <a class="btn   boton-a-bb" href="pedidos.php">
                                <div class="organizar">
                                    <img src="../../svg/bolsa-b.svg" class="icono">
                                    <p class="texto-botones-bb d-lg-block d-none"><b>Mis Pedidos</b></p>
                                </div>
                            </a>
                        </li>  
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <!--Mensaje-->
        <div class="row text-center">
            <div class="col   barras_mensaje"><hr></div>

            <div class="col-lg-3 col-sm-7   mensaje_arriba">
                <p><b>Conoce los Servicios</b></p>
            </div>

            <div class="col   barras_mensaje"><hr></div>
        </div>

        <!--
        <div class="row border-bottom justify-content-between   barra_arriba_servicios">
            <div class="col-6   nom_info_serv">
                <b>Informacion de los Servicios</b>
            </div>
            <div class="col-2">
                <form action="" class="justify-content-end">
                    <select class="form-select form-select-sm   lista_servicios" name="" id="">
                        <option selected>Todos los servicios</option>
                        <option value="1">Electricista</option>
                        <option value="2">Fontaneria</option>
                        <option value="3">Construccion</option>
                        <option value="4">Carpinteria</option>
                    </select>
                </form>
            </div>
        </div>-->

        <!--Servicios-->
        <div>
            <!--Info Servicios-->
            <!--Electricistas-->
            <div>
                <!--1-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Electricista</b></div>
                            <!--Nombre-->
                            <div>Juan Jose Perez Camacho</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8712429088</div>
                            </div>

                            <div class="col-4">
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Instalaciones residenciales, industriales, corto circuito, acometida de CFE, etc. Contamos con mas de 40 años de experiencia.</div>
                    </div>
                </div>

                <!--2-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Electricista</b></div>
                            <!--Nombre-->
                            <div>Electricidad Santana</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8721214065</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Electricistas, locales -  Dirección: Niños Héroes 111 - (35017) Gómez Palacio, Durango</div>
                    </div>
                </div>

                <!--3-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Electricista</b></div>
                            <!--Nombre-->
                            <div>Eléctrica Narro</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8711085200</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Instalaciones de divisiones, servicio de electricistas, instalaciones eléctricas, instalación de plomería, equipos hidroneumáticos, servicios eléctricos, electricistas, electricidad.  - Dirección: Avenida Morelos #37 Colonia Montemayor - (27056) Torreón, Coahuila</div>
                    </div>
                </div>

                <!--4-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Electricista</b></div>
                            <!--Nombre-->
                            <div>Lincoln Electric</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8718460864</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Electricistas - Dirección: Calle San Pedro - (27148) Torreón, Coahuila</div>
                    </div>
                </div>

                <!--5-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Electricista</b></div>
                            <!--Nombre-->
                            <div>Servicios Eléctricos Gd</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8711534352</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Mantenimiento de subestaciones eléctricas, mantenimiento a instalaciones eléctricas, mantenimiento de subestaciones, instalación y mantenimiento, servicio de electricistas, instalación de minisplits, mantenimiento de aparatos, instalaciones eléctricas, subestaciones eléctricas - Dirección: Comarca Lagunera - (35010) Gómez Palacio, Durango</div>
                    </div>
                </div>
            </div>

            <!--Fontaneria-->
            <div>
                <!--1-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Fontaneria</b></div>
                            <!--Nombre-->
                            <div>Plomería en general travi</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8717517433</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Reparación de fugas hidraulicas,gas y residuales reparación de boilers, hidroneumaticos, lavabos, tarjas, etc. - Direccion: C. Hotel arriaga no. 1016 fracc. Mayran - (27105) Torreon, Coahuila.</div>
                    </div>
                </div>

                <!--2-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Fontaneria</b></div>
                            <!--Nombre-->
                            <div>Plomeros briones</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8711992543</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Reparacion de instalaciones plomeria electricidad mantenimiento en general. - Direccion: Cepeda 220 nte - (27000) Torreon, Coahuila.</div>
                    </div>
                </div>

                <!--3-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Fontaneria</b></div>
                            <!--Nombre-->
                            <div>Servicios integrales plomeria y electricidad</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8711992543</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Reparacion e instalaciones de electricidad plomeria ducteria y aires lavado. - Direccion: De torreon a lerdo 1871 rincon la merced - Torreon, Coahuila.</div>
                    </div>
                </div>

                <!--4-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Fontaneria</b></div>
                            <!--Nombre-->
                            <div>Plomeros ávila</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8711383096</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Reparación, mantenimiento e instalación de plomeria en general. - Direccion: Cda. Librado Rivera. Colonia Alamedas - Torreon, Coahuila.</div>
                    </div>
                </div>

                <!--5-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Fontaneria</b></div>
                            <!--Nombre-->
                            <div>Industrial RV</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8717310691</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Contratista de instalacion de tuberias, paileria, soldadura, instalacion de equipo - Direccion: Colombia 377, col aviacion - Torreon, Coahuila.</div>
                    </div>
                </div>
            </div>

            <!--Construccion-->
            <div>
                <!--1-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Construccion</b></div>
                            <!--Nombre-->
                            <div>Construcciones Rivera</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8710464475</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Empresa dedicada a la construcción de casa habitación, Residencial, comercial, bodegas, albercas Quintas, remodelacion, ampliacion. Planos Renders y gestiones gubernamentales. - Direccion: Calle C. Juan de la Barrera 130.</div>
                    </div>
                </div>

                <!--2-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Construccion</b></div>
                            <!--Nombre-->
                            <div>Pnc Ingenieria Civil Sa De Cv</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8712996023</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Nuestra empresa está dedicada a la construcción de pavimento de concreto hidráulico, concreto estampado, muros de contención, estructuras y obras de drenaje, cimentación mediante piloteo, muros de gavión, sistemas de agua potable, drenaje sanitario y drenaje pluvial, bacheo superficial y bacheo profundo entre otros. - Direccion: PASEO DE LAS GERBERAS 425.</div>
                    </div>
                </div>

                <!--3-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Construccion</b></div>
                            <!--Nombre-->
                            <div>Jose Fco. Herrera Gilio</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8710017747</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Diseño y construcción de proyectos arquitectonicos comerciales, residenciales e industriales. - Direccion: P.º del Tornado 108.</div>
                    </div>
                </div>

                <!--4-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Construccion</b></div>
                            <!--Nombre-->
                            <div>Roga Diseño, Planeación Y Construcción</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8712893070</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Somos una empresa que busca brindar a sus clientes la mejor calidad y eficacia requerida para proyectos en obra civiles, industriales y estructurales. En nuestros proyectos buscamos innovar, transformar, mejorar la calidad de vida y el confort del medio ambiente. - Direccion: Progreso 898.</div>
                    </div>
                </div>

                <!--5-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Construccion</b></div>
                            <!--Nombre-->
                            <div>Construcciónes Raldaco Sa De Cv</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8712656305</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Somos una empresa de construcción de Torreón Coahuila, tenemos como prioridad dar un servicio de calidad a nuestros clientes para ganarnos su confianza. - Direccion: Santa Teresa 210 villas de San angel. </div>
                    </div>
                </div>
            </div>

            <!--Carpinteria-->
            <div>
                <!--1-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Carpinteria</b></div>
                            <!--Nombre-->
                            <div>Carpinteria 19</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8719985890</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Se fabrican todo tipo de muebles asi como reparaciones de estos. - Direccion: Cerro de las casitas 664 cd nazas - (27277) Torreon, Coahuila.</div>
                    </div>
                </div>

                <!--2-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Carpinteria</b></div>
                            <!--Nombre-->
                            <div>Servicios Roman</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8711250751</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Empresa dedicada al rubro de la remodelacion de su hogar o su oficina. - Direccion: Lazaro cardenas del rio, 26, col. La merced I. - (27276) Torreon, Coahuila.</div>
                    </div>
                </div>

                <!--3-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Carpinteria</b></div>
                            <!--Nombre-->
                            <div>Marcos Mueblerias</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8717779562</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Muebleria mayoreo y publico - Direccion: Avenida hidalgo ote. 676 Centro - Torreon, Coahuila.</div>
                    </div>
                </div>

                <!--4-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Carpinteria</b></div>
                            <!--Nombre-->
                            <div>Closet y cocinas las etnias</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8714428709</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Carpinteria de calidad ,en el diseño y madera que usted elija. - Direccion: Av juan pablo II no. 648 col. Miguel de la madrid - (27057) Torreon, Coahuila.</div>
                    </div>
                </div>

                <!--5-->
                <div class="border  servicios">
                    <div class="row">
                        <div class="col-3">
                            <!--Categoria-->
                            <div class="titulo_servicios_cat"><b>Carpinteria</b></div>
                            <!--Nombre-->
                            <div>Logfreight, S.A. De C.V.</div>
                        </div>

                        <div class="col-9 row justify-content-end text-end">
                            <div class="col-4">
                                <!--Telefono-->
                                <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                                <div>8710839745</div>
                            </div>

                            <div class="col-4">
                                <!--Correo-->
                                <div class="titulo_servicios"><b>Correo Electronico</b></div>
                                <div>-----</div>
                            </div>
                        </div>
                    </div>

                    <!--Descripcion-->
                    <div class="descripcion">
                        <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                        <div>Carga internacional puerta a puerta, aereo, maritimo y terrestre, con amplia red de agentes en los 5 continentes. - Direccion: Carretera a San Agustin Km 1, San Agustin, Torreón, Coahuila, México, 27400 - (27400) Torreon, Coahuila.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <footer>
        <div class="row">
            <div class="col-lg-2 col-sm-4">
                <h5>Contacto</h5>
                <h6>Telefonos de Contacto</h6>
                <li class="lista_cont">8717922116</li>
                <li class="lista_cont">8717922117</li>
                <li class="lista_cont">8711930946</li>
            </div>

            <div class="col-lg-4 col-sm-4">
                <div>
                    <h5>Direccion</h5>
                    <h6>Calz. Agustín Espinoza, Satelite 5053, 27059 Torreón, Coah.</h6>
                </div>
            </div>

            <div class="col-lg-3 col-sm-4">
                <h5>Redes Sociales</h5>
                <a href="https://www.facebook.com/Ferretería-y-Materiales-Express-Torreón-1672126383002791/"><img src="../svg/facebook.svg" alt="facebook" class="icono_facebook"></a>
            </div>
        </div>

        <div class="row     p_abajo">
            <div class="col-lg-2 col-sm-8">
                <h6>Correos de Contacto</h6>
                <li class="lista_cont">gerrymatrix@hotmail.com</li>
                <li class="lista_cont">tilinlover17@gmail.com</li>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-6 text-end">
                <img src="../../svg/utt.svg" alt="" class="f_express col-sm-4">
                <img src="../../svg/express-r.svg" alt="" class="f_express col-sm-3">
            </div>
        </div>
    </footer>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>