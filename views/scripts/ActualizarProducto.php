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
    use MyApp\query\ejecutar;
    require_once("../../vendor/autoload.php");

    $insert = new ejecutar();

    extract($_POST);

    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    $cantidad_real=$_POST["cantidad_real"];
    $cantidad_ideal=$_POST["cantidad_ideal"];
    $precio_venta=$_POST["precio_venta"];
    $precio_compra=$_POST["precio_compra"];
    $medida=$_POST["medida"];
    $proveedor=$_POST["proveedor"];
    $categoria=$_POST["categoria"];
    $entrega_domicilio=$_POST["entrega_domicilio"];


    $cadena = "UPDATE productos SET NOMBRE='$nombre',DESCRIPCION='$descripcion',CANTIDAD_REAL='$cantidad_real', CANTIDAD_IDEAL='$cantidad_ideal',PRECIO_VENTA='$precio_venta',PRECIO_COMPRA='$precio_compra',MEDIDA='$medida' ,PROVEEDOR='$proveedor', CATEGORIA='$categoria', ENTREGA_DOMICILIO='$entrega_domicilio' where CODIGO='$id'";

    $insert -> ejecutar($cadena);
    

    echo "<div class= alert-succes'>Producto Actualizado </div>";
    header("refresh:3; ../view_administrador/VerProductos.php");

    ?>
    </div>
    
</body>
</html>