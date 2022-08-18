<?php
namespace MyApp\query;

use PDO;
use PDOException;
use MyApp\data\Database;

class select 
{
    public function seleccionar($qry)
    {
        try
        {
<<<<<<< HEAD
            $cc=new Database("save","admin","administrador");
=======
            #$cc=new database("SAVE","root","");
            $cc = new Database("SAVE", "doadmin", "AVNS_0irFMC1NWTaraDt_uR8");
>>>>>>> main
            $objetoPDO=$cc ->getPDO();
            $resultado = $objetoPDO->query($qry);
            $fila = $resultado->fetchAll(PDO::FETCH_OBJ);
            $cc->desconectarDB();
            return $fila;
        }
        catch (PDOException $e)
        {
            echo $e ->getMessage();
        }
    }
}
