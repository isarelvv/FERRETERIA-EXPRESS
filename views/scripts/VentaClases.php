
<?php
use MyApp\query\select;
require_once("../../vendor/autoload.php");
session_start();

    
    $accion=extract($_POST); 
     $accion;
    if ($accion==2) {
        echo "CHINGA TU REPUTA MADRE EDER";
        $seleccionr=new select();
        $consulta2="CALL SAVE.TELEFONO_CLIENTE('$cliente')";
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
 
