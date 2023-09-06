<?php


class connect extends PDO{

    const Host="localhost";
    const DB="webcridii";
    const USER="root";
    const PSW="";

    public function __construct(){
        
        try {
            parent::__construct("mysql:dbname=".self::DB.";host=".self::Host, self::USER, self::PSW);

            echo "DONE";

        } catch (PDOException $e) {
            echo $e->getMessage()." ".$e->getFile()." ".$e->getLine();
            
        }

    }


}

?>