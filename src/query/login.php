<?php

namespace MyApp\query;

use PDO;
use MyApp\data\Database;
use PDOException;

class Login 
{
    public function verificaLogin($usuario, $password)
    {
        echo "<div class='alert alert-success'>";
                echo "<h2 align='center'> usuario o password incorrecto <h2>";
                echo "</div>";
        
        try 
        {
            $login = 0;
<<<<<<< HEAD
            $cc = new Database("save","admin","administrador");
=======
            #$cc=new database("SAVE","root","");
            $cc = new Database("SAVE", "doadmin", "AVNS_0irFMC1NWTaraDt_uR8");
>>>>>>> main
            $objetoPDO = $cc->getPDO();
            $query ="call SAVE.LOGUEAR('$usuario');";
            $consulta = $objetoPDO->query($query);
            while($renglon = $consulta->fetch(PDO::FETCH_ASSOC))
            #foreach($consulta as $renglon)
            {
                print_r($renglon);
            echo $usuario;
            echo $password;
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
                        header("Location: ../views_vendedor/vAjustes.html");
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
                        $login=303;
                        header("Location: ../../index.php");
                   }
                
                }
            if ($login>0)
            {

                session_start();
                $_SESSION["usuario"] = $usuario;
                $_SESSION["SESION"]=$login;
                $_SESSION['ID']=$renglon['ID_LOGIN'];
        
            }
            else 
            {
                echo "<div class='alert alert-success'>";
                echo "<h2 align='center'> usuario o password incorrecto <h2>";
                echo "</div>";
     
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