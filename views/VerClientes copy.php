
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
        <h1 align="center">Clientes</h1>
        <?php
        use MyApp\query\select;
        require_once("../vendor/autoload.php");

        $query=new Select();
        $cadena="SELECT * FROM cliente";
        $tabla =$query ->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>id_cliente</th><th>Nombre</th><th>APaterno</th><th>AMaterno</th>
        <th>Direccion</th><th>Telefono</th><th>Correo</th><th>Departamento</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->id_cliente </td>";
            echo "<td> $registro->nombre </td>";
            echo "<td> $registro->ap_paterno </td>";
            echo "<td> $registro->ap_materno </td>";
            echo "<td> $registro->direccion </td>";
            echo "<td> $registro->telefono </td>";
            echo "<td> $registro->mail </td>";
            echo "<td> $registro->departamento </td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";

        ?>
    </div>
</body>
</html>