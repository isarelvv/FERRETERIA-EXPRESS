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

    if($_POST)
    {
      $fecha =date('Y-m-d');
      $venta = new ejecutar();
      $nuevaventa = "INSERT INTO VENTAS (CLIENTE, FECHA) VALUES ('','')";
    }
    ?>
    </div>
</body>
</html>