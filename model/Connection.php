<?php
require_once './config/config.php';

class Connection{
    private static $connection = null;
    
    //init construct
    private function __construct(){

    }

    //method connection 
    public static function getConnection(){
        try{
            if(!isset(self::$connection)){
                self::$connection=new PDO("mysql:host=".SERVIDOR."; port=".PUERTO."; dbname=".NOMBREDB.";",USUARIO,PASSWORD);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXEPTION);
                self::$connection->exec("set character set utf8");
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
        return self::$connection;
    }
}
?>