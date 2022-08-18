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
            #$cc=new database("SAVE","root","");
            $cc = new Database("SAVE", "doadmin", "AVNS_0irFMC1NWTaraDt_uR8");
            $objetoPDO = $cc->getPDO();
            $query ="SELECT USUARIOS.KEY AS SESION, USUARIOS.TIPO AS 
            TIPO,LOGIN.ID_LOGIN, LOGIN.CORREO AS CORREO, LOGIN.CONTRASEÑA AS CONTRASEÑA 
            FROM USUARIOS JOIN LOGIN ON USUARIOS.KEY=LOGIN.TIPO_USUARIO WHERE LOGIN.CORREO='$usuario';";
            $consulta = $objetoPDO->query($query);
            while($renglon = $consulta->fetch(PDO::FETCH_ASSOC))
            print_r($renglon);
            echo $usuario;
            echo $password;
            {
                if (password_verify($password,$renglon['CONTRASEÑA']))
                {   
                   if ($renglon['SESION'] == 300 )
                   {
                        $login=300;
                        header("Location: ../views/views_administrador/inicio.php");
                   }
                   else if ($renglon['SESION'] == 301)
                   {
                        $login=301;
                        session_start();
                        $_SESSION['ID'] = $renglon['ID_LOGIN'];    
                        header("Location: ../scripts/datosvendedor.php");
                   }
                   else if ($renglon['SESION']== 302)
                   {
                       $login=302;
                       session_start();
                       $_SESSION['ID'] = $renglon['ID_LOGIN'];    
                       header("Location: ../scripts/datosrepartidor.php");
                   }
                   else if ($renglon['SESION']== 303)
                   {
                        session_start();         
                        $login=303;
                        $_SESSION['ID'] = $renglon['ID_LOGIN'];
                        header("Location: ../scripts/datoscliente.php");
                   }
                
                }
            if ($login>0)
            {

                session_start();
                $_SESSION["usuario"] = $usuario;
                $_SESSION["SESION"]=$login;
        
            }
            else 
            {
                echo "<div class='alert alert-success'>";
                echo "<h2 align='center'> usuario o password incorrecto <h2>";
                echo "</div>";
                header ("refresh:3; ../../index.php");
            }
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