<?php

namespace MyApp\query;
use PDO;
use PDOException;
use MyApp\data\Database;

class ejecutar
{
    public function ejecutar($qry)
    {
        try
        {
<<<<<<< HEAD
            $con = new Database("save", "admin", "administrador");
            $objetoPDO = $con->getPDO();
=======
            #$cc=new database("SAVE","root","");
            $cc = new Database("SAVE", "doadmin", "AVNS_0irFMC1NWTaraDt_uR8");
            $objetoPDO = $cc->getPDO();
>>>>>>> main
            $objetoPDO->query($qry);
            $cc->desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e ->getMessage();
        }
    }
}
