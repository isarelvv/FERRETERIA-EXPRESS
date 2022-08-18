<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/bootstrap-grid.min.css">
</head>
<body>
    <div class="container">
        <?php
        use MyApp\query\Login;
        require("../../vendor/autoload.php");
        $usuarios =new Login();
        extract($_POST);
        echo $usuario;
        echo $contraseña;
        $usuarios->verificaLogin("$usuario","$contraseña");
        ?>
    </div>
</body>
</html>