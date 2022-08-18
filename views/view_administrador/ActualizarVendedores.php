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
        $id=$_GET["id"];
        $cadena="SELECT login.ID_LOGIN as LOGIN, vendedores.ID_VENDEDOR AS VENDEDOR, login.CORREO AS CORREO,vendedores.NOMBRE AS NOMBRE,vendedores.APELLIDOS AS APELLIDOS, vendedores.TELEFONO AS TELEFONO, vendedores.SEXO AS SEXO FROM login JOIN vendedores ON login.ID_LOGIN=vendedores.LOGIN where ID_LOGIN='$id';";
        $tabla =$query ->seleccionar($cadena);

        echo "
        <form class='container-table' action='../scripts/ActualizarVendedor.php' method='post'>
        <table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th></th><th></th>
        <th>Nombre</th><th>Apellidos</th>
        <th>Correo</th><th>Telefono</th><th>Sexo</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> <input type='hidden' value='$registro->LOGIN' name='id_login'></td>";
            echo "<td> <input type='hidden' value='$registro->VENDEDOR' name='id_vendedor'></td>";
            echo "<td> <input type='text' value='$registro->NOMBRE' name='nombre'></td>";
            echo "<td> <input type='text' value='$registro->APELLIDOS' name='apellidos'> </td>";
            echo "<td> <input type='text' value='$registro->CORREO' name='correo'> </td>";
            echo "<td> <input type='text' value='$registro->TELEFONO' name='telefono'> </td>";
            echo "<td> <input type='text' value='$registro->SEXO' name='sexo'></td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>
        <input type='submit' value='Actualizar'>
    </form>";
        ?>
    </div>
</body>
</html>