<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap-grid.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
    use MyApp\Query\ejecutar;
    require("../../vendor/autoload.php");

    $insert = new ejecutar();  
    extract($_POST);
  
    
    $nombre_imagen = $_FILES['foto']['name'];
    $temporal = $_FILES['foto']['tmp_name'];
    $carpeta = '../../db_img';
    $ruta = $carpeta.'/'.$nombre_imagen;
    move_uploaded_file($temporal,$carpeta.'/'.$nombre_imagen);


    $cadena = "INSERT INTO PRODUCTOS (NOMBRE, DESCRIPCION, CANTIDAD_REAL, CANTIDAD_IDEAL, PRECIO_VENTA, PRECIO_COMPRA, MEDIDA,PROVEEDOR,CATEGORIA,ENTREGA_DOMICILIO, FOTO)
    values ('$nombre', '$descripcion', '$cantidad_real', '$cantidad_ideal', '$precio_venta', '$precio_compra','$medida', '$proveedor','$categoria','$entrega_domicilio', '$ruta')";

    $insert -> ejecutar($cadena);

    echo "<div class= alert-succes'>Producto Registrado </div>";

    ?>
    </div>
</body>
</html>