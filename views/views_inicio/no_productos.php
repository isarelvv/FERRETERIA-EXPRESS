<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/header.css">
    <link rel="stylesheet" href="../../css/mi_css/productos.css">
    <link rel="stylesheet" href="../../css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Productos - Ferreteria y Materiales Express</title>
</head>
<body>
    <!--Header-->
    <header class="row justify-content-center">
        <!--Parte Arriba Header-->
        <div class="row justify-content-center border-bottom border-1 border-dark border-opacity-25     barra_arriba">
            <!--Logo Express-->
            <div class="col-2 text-end">
                <object data="../../svg/logo-r.svg" class="text-end border border-dark   logo"></object>
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
            <div class="col-2">
                <!--Boton Iniciar Sesion-->
                <button class="btn  boton-login" type="button" data-bs-toggle="modal" data-bs-target="#iniciar-sesion">
                    <img src="../../svg/perfil-b.svg" alt="" class="icono_boton">
                    <p class="texto-boton-login-no-iniciado text-start"><b>Iniciar Sesion o Registrarse</b></p>
                </button>
      
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
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" type="button" href="../../index.php">
                                <div class="organizar">
                                    <img src="../../svg/casa-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Inicio</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="productos.php">
                                <div class="organizar">
                                    <img src="../../svg/caja-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Productos</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="servicios.php">
                                <div class="organizar">
                                    <img src="../../svg/servicios-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Servicios</b></p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="carrito.php">
                                <div class="organizar">
                                    <img src="../../svg/carrito-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Carrito</b></p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="pedidos.php">
                                <div class="organizar">
                                    <img src="../../svg/bolsa-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Mis Pedidos</b></p>
                                </div>
                            </a>
                        </li>  
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!--Contenedor Productos-->
    <div class="container">
        <!--Mensajes Barra-->
        <div class="row">
            <!--Barra-->
            <div class="col-2   titulos">
                <b>Categorias</b>
                <hr class="hrs">
            </div>

            <!--Cantidad de Productos y Filtros-->
            <div class="row col-10">
                <div class="col-4   titulos"><b>Productos: (30 resultados)</b></div>
                <div class="col-2   titulos"><b>Ordenar por:</b></div>
                <div class="col-3">
                    <form action="">
                        <select name="filtos_de_busqueda" class="form-select form-select-sm     select_filtros" aria-label="Default select example">
                            <option selected value="1">Todos los productos</option>
                            <option value="2">Solo productos en stock</option>
                            <option value="3">Ordenar de la A a la Z</option>
                            <option value="4">Ordenar de la Z a la A</option>
                            <option value="5">De precio Mayor a Menor</option>
                            <option value="6">De precio Menor a Mayor</option>
                        </select>
                    </form>
                </div>
                <hr class="hrs">
            </div>
        </div>

        <!--Categorias y Productos-->
        <div class="row" style="margin-top: 10px;">
            <!--Categorias-->
            <div class="col-2">
                <form action="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="categorias" value="herramientas">
                        <label class="form-check-label" for="categorias">Herramientas</label>   
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="union" value="union">
                        <label class="form-check-label" for="union">Union</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="medicion" value="medicion">
                        <label class="form-check-label" for="medicion">Medicion</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="construccion" value="construccion">
                        <label class="form-check-label" for="construccion">Construccion</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="tuberias" value="tuberias">
                        <label class="form-check-label" for="tuberias">Tuberias</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="alumbrado" value="alumbrado">
                        <label class="form-check-label" for="alumbrado">Alumbrado</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="proteccion" value="protecion">
                        <label class="form-check-label" for="proteccion">Proteccion</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="limpieza" value="limpieza">
                        <label class="form-check-label" for="limpieza">Limpieza</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="pintura" value="pintura">
                        <label class="form-check-label" for="pintura">Pintura</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="componentes_diversos" value="componentes_diversos">
                        <label class="form-check-label" for="componentes_diversos">Componentes Diversos</label>
                    </div>
                </form>
            </div>

            <!--Productos-->
            <div class="col-10 text-center">
                <div><img src="../../svg/Lupa.svg" alt="" class="lupa"></div>
                <div class="mensaje_no_encontrado"><b>No se encontro ningun resultado para "Ejemplo"</b></div>
            </div>
        </div>

        <!--Paginacion-->
        <div></div>
    </div>

    <!--Footer-->
    <footer>
        <div class="row">
            <div class="col-2">
                <h5>Contacto</h5>
                <h6>Telefonos de Contacto</h6>
                <li class="lista_cont">8717922116</li>
                <li class="lista_cont">8717922117</li>
                <li class="lista_cont">8711930946</li>
            </div>

            <div class="col-4">
                <div>
                    <h5>Direccion</h5>
                    <h6>Calz. Agustín Espinoza, Satelite 5053, 27059 Torreón, Coah.</h6>
                </div>
            </div>

            <div class="col-3">
                <h5>Redes Sociales</h5>
                <a href="https://www.facebook.com/Ferretería-y-Materiales-Express-Torreón-1672126383002791/"><img src="../../svg/facebook.svg" alt="facebook" class="icono_facebook"></a>
            </div>
        </div>

        <div class="row     p_abajo">
            <div class="col-2">
                <h6>Correos de Contacto</h6>
                <li class="lista_cont">gerrymatrix@hotmail.com</li>
                <li class="lista_cont">tilinlover17@gmail.com</li>
            </div>
            <div class="col-4"></div>
            <div class="col-6 text-end">
                <img src="../../svg/utt.svg" alt="" class="f_express">
                <img src="../../svg/express-r.svg" alt="" class="f_express">
            </div>
        </div>
    </footer>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>