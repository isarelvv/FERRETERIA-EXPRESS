<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h1 align="center">Vendedores</h1>
        <?php
        use MyApp\query\select;
        require_once("../vendor/autoload.php");

        $query=new Select();
        $cadena="SELECT NOMBRE, APELLIDOS, CORREO,TELEFONO, SEXO, FOTO FROM vendedores;";
        $tabla =$query ->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th><th>Apellidos</th><th>Correo</th><th>Telefono</th>
        <th>Sexo</th><th>Foto</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $vendedores)
        {
            echo "<tr>";
            echo "<td> $vendedores->NOMBRE </td>";
            echo "<td> $vendedores->APELLIDOS </td>";
            echo "<td> $vendedores->CORREO </td>";
            echo "<td> $vendedores->TELEFONO </td>";
            echo "<td> $vendedores->SEXO </td>";
            echo "<td><img src=".substr($vendedores->FOTO,3)." width='100px'></td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";

        ?>
    </div>
</body>
</html>