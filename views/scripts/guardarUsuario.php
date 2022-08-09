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
    require_once("../../vendor/autoload.php");

    $insert = new ejecutar();
    $insert2 = new ejecutar();

    extract($_POST);

    $contraseñahash = password_hash($pass, PASSWORD_DEFAULT);
    $cadena2 = "INSERT INTO login (correo,contraseña,tipo_usuario) VALUES ('$correo','$contraseñahash',303)";
  
    $cadena = "INSERT INTO clientes (nombre,ap_paterno,ap_materno,telefono,direccion,cp,correo) VALUES
    ('$nombre','$appaterno','$apmaterno','$tel','$dir','$codpst','$correo')";

    $insert2->ejecutar($cadena2);
    $insert->ejecutar($cadena);
    echo "<div class='alert alert-success'>Usuario Registrado</div>";
    header("refresh:3; ../../index.php");

    ?>

    </div>
</body>
</html>