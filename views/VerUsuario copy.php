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
        <h1 align="center">Usuario</h1>
        <?php
        use MyApp\query\select;
        require_once("../vendor/autoload.php");

        $query=new Select();
        $cadena="SELECT login.ID_LOGIN as LOGIN ,usuarios.TIPO, login.CORREO FROM login join usuarios on usuarios.KEY=login.TIPO_USUARIO";
        $tabla =$query ->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Login</th>
        <th>Tipo de usuario</th><th>Correo</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $usuario)
        {
            echo "<tr>";
            echo "<td> $usuario->LOGIN</td>";
            echo "<td> $usuario->USUARIO</td>";
            echo "<td> $usuario->CORREO</td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";

        ?>
    </div>
</body>
</html>