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
            #$cc=new database("SAVE","root","");
            $cc = new Database("SAVE", "doadmin", "AVNS_0irFMC1NWTaraDt_uR8");
            $objetoPDO = $cc->getPDO();
            $objetoPDO->query($qry);
            $cc->desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e ->getMessage();
        }
    }
}
