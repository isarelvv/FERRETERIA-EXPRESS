<?php

namespace MyApp\data;

use PDO;
use PDOException;

class Database 
{
    public $objetoPDO = null;
    public $user="";
    public $password="";
    public $dbname="";

    public function __construct(string $dbname, string $user, string $password)
    {
        $this->dbname=$dbname;
        $this->user=$user;
        $this->password=$password;
    }

    public function getPDO()
    {
        try
        {
            $host="mysql:host=save-do-user-12249563-0.b.db.ondigitalocean.com:25060; dbname=$this->dbname";
            $objetoPDO=new PDO($host,$this->user,$this->password);
            return $objetoPDO;
        }

        catch(PDOException $e)
        {   
            echo $e->getMessage();
        }
    }

    public function desconectarDB()
    {
        $objetoPDO=null;
    }
}