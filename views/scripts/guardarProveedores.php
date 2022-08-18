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

    $cadena = "INSERT INTO PROVEEDORES (COMPAÑIA, TELEFONO, CORREO, DIRECCION, CP)
    values ('$nombre', '$telefono', '$correo', '$direccion', '$cp')";

    $insert -> ejecutar($cadena);

    echo "<div class= alert-succes'>Producto Registrado </div>";
    header("refresh:2; ../views_administrador/aInicio.php")

    ?>
    </div>
    
</body>
</html>+