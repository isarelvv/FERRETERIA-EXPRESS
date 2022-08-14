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
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php   
    use MyApp\query\ejecutar;
    use MyApp\query\select;
    require_once("../../vendor/autoload.php");
    
    if(isset($_POST['compra']))
    {
        extract($_POST);
        echo $metodo_entrega."<br>";
        echo  $_SESSION['ID_CLIENTE'];
        echo "<pre>";
        print_r ($_SESSION['carrito']);
        echo "</pre>";
        //$ID = $_SESSION['SESION'];
        //extract($_POST);
        //$searchventa = new select();
        //$insert = new ejecutar();
        //$insert2 = new ejecutar();
        //$buscardetalle = new select(); 
        //$fecha = date('Y-m-d');
        //$nuevaventa = "INSERT INTO VENTAS (CLIENTE,fecha)VALUES ('$ID','$fecha')";
        //$insert->ejecutar($nuevaventa);
        //$ventarealizada = "SELECT LAST_INSERT_ID(VENTAS.FOLIO) AS UV FROM VENTAS WHERE VENTAS.CLIENTE = $_SESSION['ID_CLIENTE'] ";
        //$folio = $searchventa->seleccionar($ventarealizada)
        //foreach($folio as $venta)
        //{
            //$ventacliente = $venta->FOLIO;
            //$ingresaprods = "INSERT INTO DETALLE_VENTAS(VENTA,PRODUCTO,CANTIDAD,TIPO_ENTREGA)VALUES('$ventacliente','¿ARREGLOPRODUCTOS?','CANTIDADES','$metodo_entrega')";
            //$insert2->ejecutar($ingresaprods);
            //$consultardetalle = "SELECT last_insert_id(VE.UV) ,DETALLE_VENTAS.FOLIO_DETALLE FROM DETALLE_VENTAS JOIN VENTAS ON DETALLE_VENTAS.VENTA = VENTAS.FOLIO JOIN SELECT LAST_INSERT_ID(VENTAS.FOLIO) AS UV FROM VENTAS WHERE VENTAS.CLIENTE = $_SESSION['ID_CLIENTE'] AS VE ON DETALLE_VENTAS.VENTA = VE.UV WHERE DETALLE_VENTAS.VENTA = VE.UV";
            //$resdetalles = $buscardetalle->seleccionar($consultardetalle);
            //foreach($resdetalles as $foliodetalle)
            //{
                //$fdetalle = $foliodetalle->FOLIO_DETALLE;
            //}

        //}
    } 
    ?>
    </div>
</body>
</html>