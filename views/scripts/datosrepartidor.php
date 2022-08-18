<<<<<<< Updated upstream
=======
<?php
session_start();
?>
>>>>>>> Stashed changes
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    use MyApp\query\select;
    require_once ("../../vendor/autoload.php");
    $id = $_SESSION['ID'];
    $datos = new select();
    $consulta = "SELECT ID_REPARTIDOR as ID, NOMBRE AS NOMBRE, APELLIDOS AS APELLIDOS, TELEFONO AS TELEFONO, PLACAS AS PLACAS, NUM_LICENCIA AS LICENCIA FROM REPARTIDORES WHERE REPARTIDORES.LOGIN= '$id'";
    $repartidor = $datos->seleccionar($consulta);
    foreach($repartidor as $inforepartidor)
    {
        $_SESSION['IDREP'] = $inforepartidor->ID;
        $_SESSION['NOMBREREP'] = $inforepartidor->NOMBRE;
        $_SESSION['APELLIDOSREP'] = $inforepartidor->APELLIDOS;
        $_SESSION['TELREP'] = $inforepartidor->TELEFONO;
        $_SESSION['PLACAS'] = $inforepartidor->PLACAS;
        $_SESSION['LICENCIA'] = $inforepartidor->LICENCIA;
        
    }
    header("Location: ../views_repartidor/rInicio.php");

    $datosrepartidor = new select();
    $ID = $_SESSION['ID'];
    $datos = "SELECT REPARTIDORES.ID_REPARTIDOR AS IDR, REPARTIDORES.NOMBRE as REPARTIDOR, REPARTIDORES.APELLIDOS, REPARTIDORES.TELEFONO AS TELEFONO
    as AP, REPARTIDORES.CORREO as CORREO ,login.ID_LOGIN as ID_LOGIN 
    FROM REPARTIDORES join login on login.ID_LOGIN = REPARTIDORES.LOGIN WHERE ID_LOGIN='$ID';";
    $repartidor = $datosrepartidor->seleccionar($datos);
    foreach($repartidor as $info)
    {
        $_SESSION['ID_LOGIN']=$info->ID_LOGIN;    
        $_SESSION['IDR']=$info->IDR;        
        $_SESSION['NOMBRE']=$info->REPARTIDOR;
        $_SESSION['APELLIDOS']=$info->APELLIDOS;
        $_SESSION['TELEFENO']=$info->TELEFONO;
        $_SESSION['CORREO']=$info->CORREO;

    } 
    header("Location: ../../index.php");
    


    ?>
</body>
</html>