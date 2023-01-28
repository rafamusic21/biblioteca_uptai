<?php

const HOST  = "localhost";
const DB = "biblioteca_uptai";
const USER  = "root";
const PASSWORD  = "";
const CHARSET  = "charset=utf8";

class Conexion{
     
    private $conect;

    public function __construct(){
        $connectionString = "mysql:host=".HOST.";dbname=".DB.";.CHARSET.";
        try{
            $this->conect = new PDO($connectionString,USER,PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
        }catch (Exception $e){
            $this->conect ='Error de conexion';
            echo  "ERROR: ". $e->getMessage();
        }
    }
    
    public function connect(){
        return $this->conect;
    }

    }

    

    

?>
   
