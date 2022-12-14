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
        <h1 align="center">Edicion Repartidores</h1>
        <?php
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");

        $query=new Select();
        $id=$_GET["id"];

        $cadena="SELECT login.ID_LOGIN,login.CORREO,repartidores.NOMBRE,repartidores.APELLIDOS, repartidores.CORREO, repartidores.TELEFONO FROM login JOIN repartidores ON login.ID_LOGIN=repartidores.LOGIN where ID_LOGIN='$id';";

        $cadena="SELECT login.ID_LOGIN as LOGIN , repartidores.ID_REPARTIDOR as REPARTIDOR ,login.CORREO as CORREO,repartidores.NOMBRE AS NOMBRE,repartidores.APELLIDOS AS APELLIDOS, repartidores.TELEFONO as TELEFONO, repartidores.NUM_LICENCIA as  LICENCIA,repartidores.PLACAS FROM login JOIN repartidores ON login.ID_LOGIN=repartidores.LOGIN where login.ID_login='$id'";

        $tabla =$query ->seleccionar($cadena);

        echo "
        <form class='container-table' action='../scripts/ActualizarRepartidor.php' method='post'>
        <table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th></th><th></th>
        <th>Nombre</th><th>Apellidos Paterno</th>
        <th>Correo</th><th>Telefono</th><th>Placas</th><th>NumLicencia</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> <input type='hidden' value='$registro->LOGIN' name='id_login'></td>";
            echo "<td> <input type='hidden' value='$registro->REPARTIDOR' name='id_repartidor'></td>";
            echo "<td> <input type='text' value='$registro->NOMBRE' name='nombre'></td>";
            echo "<td> <input type='text' value='$registro->APELLIDOS' name='apellidos'> </td>";
            echo "<td> <input type='text' value='$registro->CORREO' name='correo'> </td>";
            echo "<td> <input type='text' value='$registro->TELEFONO' name='telefono'> </td>";
            echo "<td> <input type='text' value='$registro->LICENCIA' name='licencia'></td>";
            echo "<td> <input type='text' value='$registro->PLACAS' name='placas'> </td>";
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