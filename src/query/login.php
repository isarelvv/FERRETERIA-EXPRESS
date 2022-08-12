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
            $query ="SELECT usuarios.KEY as SESION, usuarios.TIPO as TIPO,login.ID_LOGIN, login.correo as correo, login.contraseña as contraseña FROM usuarios join login on usuarios.KEY=login.TIPO_USUARIO where login.correo='$usuario'";
            $consulta = $objetoPDO->query($query);

            while($renglon = $consulta->fetch(PDO::FETCH_ASSOC))
            {
                
                if (password_verify($password,$renglon['contraseña']))
                {   
                   $login=1;

                   if ($renglon['SESION'] == 300 )
                   {
                        header("Locatiom: admin") ;
                    $login=300;
                       
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
                   }
                   else if ($renglon['SESION']== 303)
                   {
                        $ID = $renglon['ID_LOGIN'];
                        $datos = "SELECT CLIENTES.NOMBRE as CLIENTE, CLIENTES.ap_paterno as AP, CLIENTES.ap_materno as AM, CLIENTES.direccion as DIR, CLIENTES.cp as CP, CLIENTES.TELEFONO AS TEL  FROM CLIENTES join login on login.ID_LOGIN = CLIENTES.LOGIN WHERE ID_LOGIN='$ID";
                        $CLIENTE=$objetoPDO->query($datos);
                        session_start();
                        
                        while($datoscliente=$CLIENTE->fetch(PDO::FETCH_ASSOC))
                        {
                        $_SESSION['TEL']=$datoscliente['TEL'];
                        $_SESSION['CLIENTE']=$datoscliente['CLIENTE'];
                        $_SESSION['AP']=$datoscliente['AP'];
                        $_SESSION['AM']=$datoscliente['AM'];
                        $_SESSION['DIR']=$datoscliente['DIR'];
                        $_SESSION['CP']=$$datoscliente['CP'];                            
                        }        
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
                header("Location: ../../index.php");
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