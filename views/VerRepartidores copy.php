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
        <h1 align="center">Repartidores</h1>
        <?php
        use MyApp\query\select;
        require_once("../vendor/autoload.php");

        $query=new Select();
        $cadena="SELECT NOMBRE, APELLIDOS, CORREO,TELEFONO, PLACAS, NUM_LICENCIA, FOTO FROM repartidores;";
        $tabla =$query ->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th><th>Apellidos</th><th>Correo</th><th>Telefono</th>
        <th>Placas</th><th>Numero de licencia</th><th>Foto</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $repartidor)
        {
            echo "<tr>";
            echo "<td> $repartidor->NOMBRE </td>";
            echo "<td> $repartidor->APELLIDOS </td>";
            echo "<td> $repartidor->CORREO </td>";
            echo "<td> $repartidor->TELEFONO </td>";
            echo "<td> $repartidor->PLACAS </td>";
            echo "<td> $repartidor->NUM_LICENCIA </td>";
            echo "<td> $repartidor->FOTO </td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";

        ?>
    </div>
</body>
</html>