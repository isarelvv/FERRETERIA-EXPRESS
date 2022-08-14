<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/rAjustes.css">
    <title>Ajustes - Repartidores</title>
</head>
<body>
<?php
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");

        $query=new Select();
        $id=$_SESSION["ID"];
        $cadena="SELECT * from repartidores where ID_REPARTIDOR='$id'";
        $registro =$query ->seleccionar($cadena);

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> <input type='hidden' value='$registro->ID_REPARTIDOR' name='id'></td>";
            echo "<td> <input type='text' value='$registro->NOMBRE' name='nombre'></td>";
            echo "<td> <input type='text' value='$registro->APELLIDOS' name='apellidos'> </td>";
            echo "<td> <input type='text' value='$registro->CORREO' name='correo'> </td>";
            echo "<td> <input type='text' value='$registro->TELEFONO' name='telefono'> </td>";
            echo "<td> <input type='text' value='$registro->PLACAS' name='placas'></td>";
            echo "<td> <input type='text' value='$registro->NUM_LICENCIA' name='licencia'> </td>";
            echo "</tr>";
        }
        ?>
    <div class="row">
        <!--Barra-->
        <nav class="col-2">
          <div class="container d-flex flex-column">
            <!--Repartidores-->
            <div class="text-center titulo">Repartidores</div>
            <div class="text-center">
              <img src="../../svg/facebook.svg" alt="" class="border border-2 rounded-circle foto_perfil">
            </div>

            <hr class="text-white">

            <!--Botones paginas-->
            <ul class="nav nav-pills row text-center justify-content-center">
              <li class="nav-item">
                <a class="nav-link    items" aria-current="page" href="../../views/views_repartidor/rInicio.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link    items" href="../../views/views_repartidor/rPedidos.php">Pedidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link    items" href="../../views/views_repartidor/rHistorial.php">Historial</a>
              </li>
            </ul>

            <hr class="text-white">

            <!--Configuracion-->
            <div class="text-center">
              <div class="dropdown dropdown-center">
                <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
              
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li style="margin-bottom: 10px;"><a class="dropdown-item" href="../views_repartidor/rAjustes.php">Ajustes</a></li>
                  <li><hr class="sep_hr"></li>
                  <li style="margin-top: 10px;"><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
                </ul>
              </div>
            </div>
          </div>
      </nav>

        <!--Info Pedidos-->
        <main class="col-10 border">
            <div class="container border border-2">
              <!--Mensaje-->
              <div class="row text-center">
                <div class="col   barras_mensaje"><hr></div>

                <div class="col-3   mensaje_arriba">
                    <p><b>Ajustes de Cuenta</b></p>
                </div>

                <div class="col   barras_mensaje"><hr></div>
              </div>

              <!--Forms-->
              <div>
                <div class="text-center">
                  <img src="../../svg/facebook.svg" alt="" class="rounded-circle border border-2  foto">
                </div>

                <!--Fila 1-->
                <div class="row justify-content-evenly mt-4">
                  <!--Informacion no Modificable-->
                  <div class="col-5 border border-dark rounded rounded-3    cont_form">
                      <div class="label_form">
                          <label for="nombre" class="form-label   texto_label"><b>Nombre</b></label>
                          <fieldset disabled="disabled">
                              <input type="text" id="nombre" class="form-control" placeholder="#Edeh Gerardo" value='<?php $registro->NOMBRE ?>' name='id'>
                          </fieldset>
                      </div>
      
                      <div class="label_form">
                          <label for="apellido_paterno" class="form-label     texto_label"><b>Apellido Paterno</b></label>
                          <fieldset disabled="disabled">
                              <input type="text" id="apellido_paterno" class="form-control" placeholder="#Meza" value='<?php $registro->APELLIDOS ?>' name='id'>
                          </fieldset>
                      </div>
      
                      <hr>

                      <div class="label_form">
                        <label for="email" class="form-label    texto_label"><b>Numero de Telefono</b></label>
                        <fieldset disabled="disabled">
                            <input type="tel" id="email" class="form-control" placeholder="#8717321111" value='<?php $registro->TELEFONO ?>' name='id'>
                        </fieldset>
                    </div>

                      <hr>
      
                      <div class="label_form">
                          <label for="email" class="form-label    texto_label"><b>Correo Electronico</b></label>
                          <fieldset disabled="disabled">
                              <input type="text" id="email" class="form-control" placeholder="#tilinlover17@gmail.com">
                          </fieldset>
                      </div>
                  </div>   
                  </div>
                </div>

                <!--Fila 2-->
                <div class="row justify-content-evenly  fila_2">
                  <div class="col-5   cont_tel_btn">
                      <!--Telefono-->
                      <div class="border border-dark rounded rounded-3 row    cont_form">
                        <h4><b>Información del Transporte</b></h4>

                        <div class="label_form">
                          <label for="licencia" class="form-label     texto_label"><b>Numero de Licencia</b></label>
                          <input type="text" id="licencia" class="form-control" placeholder="#1234567890" disabled>
                        </div>

                        <div class="label_form">
                          <label for="placas" class="form-label     texto_label"><b>Numero de Placas</b></label>
                          <input type="text" id="placas" class="form-control" placeholder="#1234567890" disabled>
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