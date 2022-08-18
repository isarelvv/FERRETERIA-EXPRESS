
<?php
use MyApp\query\select;
require_once("../../vendor/autoload.php");
session_start();

    
    $accion=extract($_POST); 
     $accion;
    if ($accion==2) {
        
        $seleccionr=new select();
        $consulta2="SELECT CLIENTES.NO_CLIENTE AS ID, CLIENTES.NOMBRE AS NOMBRE, CLIENTES.AP_PATERNO AS APE_PA, CLIENTES.AP_MATERNO AS AP_MA, CLIENTES.TELEFONO AS TEL,
        CLIENTES.CORREO AS MAIL FROM
        CLIENTES WHERE CLIENTES.TELEFONO = '$tel_cliente'";
        $dato=$seleccionr->seleccionar($consulta2);
        foreach ($dato as $info) {
          $_SESSION['comprador']=$info->NOMBRE ;
          $_SESSION['comprador_ape']=$info->APE_PA ;
          $_SESSION['tel']=$info->TEL ;
          $_SESSION['mail']=$info->MAIL ;
        }

    }
    elseif ($accion==1) {
        unset($_SESSION['comprador'],$_SESSION['comprador_ape'],
        $_SESSION['tel']);
   
    }
    header("refresh:0;../views_vendedor/vVentas.php");
 
