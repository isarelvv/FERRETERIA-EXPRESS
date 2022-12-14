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
        <h1 align="center">Vendedores</h1>
        <?php
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");

        $query=new Select();
        $cadena="SELECT login.ID_LOGIN as LOGIN,login.CORREO as CORREO,vendedores.NOMBRE AS NOMBRE,vendedores.APELLIDOS AS APELLIDOS, vendedores.TELEFONO AS TELEFONO, vendedores.SEXO AS SEXO FROM login JOIN vendedores ON login.ID_LOGIN=vendedores.LOGIN;";
        $tabla =$query ->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th><th>Apellidos</th>
        <th>Correo</th><th>Telefono</th><th>Sexo</th>
        <th>Edicion</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->NOMBRE </td>";
            echo "<td> $registro->APELLIDOS </td>";
            echo "<td> $registro->CORREO </td>";
            echo "<td> $registro->TELEFONO </td>";
            echo "<td> $registro->SEXO</td>";
            echo "<td><a href='ActualizarVendedores.php?id=$registro->LOGIN'>EDITAR</a></td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";

        ?>
        <a href="AltaVendedores.php" class="button">Dar de alta</a>
    </div>
</body>
</html>