<?php
session_start();
?>
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
    $datoscliente = new select();
    $ID = $_SESSION['ID'];
    $datos = "call SAVE.DATOS_CLIENTE('$ID');";
    $cliente = $datoscliente->seleccionar($datos);
    foreach($cliente as $info)
    {
        $_SESSION['ID_CLIENTE']=$info->ID;        
        $_SESSION['TEL']=$info->TEL;
        $_SESSION['CLIENTE']=$info->CLIENTE;
        $_SESSION['AP']=$info->AP;
        $_SESSION['AM']=$info->AM;
        $_SESSION['DIR']=$info->DIR;
        $_SESSION['CP']=$info->CP;
    } 
    header("Location: ../../index.php");
    


    ?>
</body>
</html>