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

    $ID = $renglon['ID_LOGIN'];
    $datos = "SELECT CLIENTES.NOMBRE as CLIENTE, CLIENTES.ap_paterno as AP, CLIENTES.ap_materno as AM, CLIENTES.direccion as DIR, CLIENTES.cp as CP, CLIENTES.TELEFONO AS TEL  FROM CLIENTES join login on login.ID_LOGIN = CLIENTES.LOGIN WHERE ID_LOGIN='$ID";
    $CLIENTE=$objetoPDO->query($datos);


    ?>
</body>
</html>