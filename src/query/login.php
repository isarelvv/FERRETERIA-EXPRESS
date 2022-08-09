<?php

namespace MyApp\query;

use PDO;
use MyApp\data\Database;
use PDOException;

class Login 
{
    public function verificaLogin($usuario, $password)
    {
        try 
        {
            $login = 0;
            $cc = new Database("save","root","");
            $objetoPDO = $cc->getPDO();

            $query ="SELECT * FROM LOGIN  WHERE CORREO='$usuario';";
            $consulta = $objetoPDO->query($query);

            while($renglon = $consulta->fetch(PDO::FETCH_ASSOC))
            {
                if (password_verify($password,$renglon['CONTRASEÑA']))
                {
                   $login++;
                }
            }
            if ($login>0)
            {
                
        
                session_start();
                $_SESSION["usuario"] = $usuario;
                echo "<div class='alert alert-success-'>";
                echo "<h2 align='center'> Bienvenido".$_SESSION["usuario"]."<h2>";
                echo "</div>";
                header("Location: ../../index.php");
            }
            
            else 
            {
                $_SESSION["usuario"] = $usuario;
                $TIPO["TIPO"] = $login;
                echo "<div class='alert alert-success-'>";
                echo "<h2 align='center'> usuario o password incorrecto <h2>";
                echo "</div>";
                
            }
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function cerrarSesion()
    {
        session_start();
        session_destroy();
        header("Location: ../../index.php");
    }
}