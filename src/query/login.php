<?php

namespace MyApp\Query;

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
            $cc = new Database("save","root","admin");
            $objetoPDO = $cc->getPDO();

            $query ="SELECT usuarios.KEY as SESION, usuarios.TIPO as TIPO, login.ID_LOGIN, login.correo, login.contraseña as contraseña FROM usuarios join login on usuarios.KEY=login.TIPO_USUARIO where login.correo='$usuario'";
            $consulta = $objetoPDO->query($query);

            while($renglon =$consulta->fetch(PDO::FETCH_ASSOC))
            {
                if (password_verify($password,$renglon['contraseña']))
                {
                   $login=1;

                   if ($renglon['SESION'] == 300 )
                   {
                       $login=300;
                   }
                   else if ($renglon['SESION'] == 301)
                   {
                       $login=301;
                   }
                   else if ($renglon['SESION']== 302)
                   {
                       $login=302;
                   }
                   else if ($renglon['SESION']== 303)
                   {
                       $login=303;
                   }

                }
            }

            if ($login>0)
            {
                session_start();
                $_SESSION["usuario"] = $usuario;
                $_SESSION["SESION"]=$login;
                echo "<div class='alert alert-success-'>";
                echo "<h2 align='center'> Bienvenido".$_SESSION["usuario"]."<h2>";
                echo "</div>";
                header ("refresh:2; ../../index.php");
            }
            
            else 
            {
                $_SESSION["usuario"] = $usuario;
                $_SESSION["SESION"]=$login;
                echo "<div class='alert alert-success-'>";
                echo "<h2 align='center'> usuario o password incorrecto <h2>";
                echo "</div>";
                header ("refresh:2; ../../index.php");
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