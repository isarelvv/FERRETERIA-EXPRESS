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
            $cc = new Database("save","root","");
            $objetoPDO = $cc->getPDO();

            $query ="SELECT usuarios.KEY as sesion, usuarios.TIPO as TIPO, login.ID_LOGIN, login.correo, login.contraseña as contraseña FROM usuarios join login on usuarios.KEY=login.TIPO_USUARIO where login.correo='$usuario'";
            $consulta = $objetoPDO->query($query);

            while($renglon =$consulta->fetch(PDO::FETCH_ASSOC))
            {
                if (password_verify($password,$renglon['contraseña']))
                {
                   $login=1;
                }
            }

            if ($login>0)
            {
                if ($renglon['sesion'] == 300 )
                {
                    $login=300;
                    session_start();
                    $usuario = $renglon['TIPO'];
                    $_SESSION["usuario"] = $usuario;
                    echo "<div class='alert alert-success-'>";
                    echo "<h2 align='center'> Bienvenido".$_SESSION["usuario"]."<h2>";
                    echo "</div>";
                }
                else if ($renglon['sesion'] == 301)
                {
                    $login=301;
                    session_start();
                    $usuario = $renglon['TIPO'];
                    $_SESSION["usuario"] = $usuario;
                    echo "<div class='alert alert-success-'>";
                    echo "<h2 align='center'> Bienvenido".$_SESSION["usuario"]."<h2>";
                    echo "</div>";
                }
                else if ($renglon['sesion']== 302)
                {
                    $login=302;
                    session_start();
                    $usuario = $renglon['TIPO'];
                    $_SESSION["usuario"] = $usuario;
                    echo "<div class='alert alert-success-'>";
                    echo "<h2 align='center'> Bienvenido".$_SESSION["usuario"]."<h2>";
                    echo "</div>";
                }
                else if ($renglon['sesion']== 303)
                {
                    $login=303;
                    session_start();
                    $usuario = $renglon['TIPO'];
                    $_SESSION["usuario"] = $usuario;
                    echo "<div class='alert alert-success-'>";
                    echo "<h2 align='center'> Bienvenido".$_SESSION["usuario"]."<h2>";
                    echo "</div>";
                }

                session_start();
                $_SESSION["usuario"] = $usuario;
                echo "<div class='alert alert-success-'>";
                echo "<h2 align='center'> Bienvenido".$_SESSION["usuario"]."<h2>";
                echo "</div>";
                header ("refresh:2; ../../index.php");
            }
            
            else 
            {
                session_start();
                $_SESSION["usuario"] = $usuario;
                $TIPO["TIPO"] = $login;
                echo "<div class='alert alert-success-'>";
                echo "<h2 align='center'> usuario o password incorrecto <h2>";
                echo "</div>";
                header ("refresh:2; ../../Login.php");
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