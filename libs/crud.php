<?php 
require_once ("database.php");
class Crud extends Conexion{
    
    private $conexion;
    private $strquery;
    private $arrvalues;

    function __construct(){
        parent::__construct();
       $this->conexion = new Conexion();
       $this->conexion = $this->conexion->connect();
    }

    //Isertar un registro
    public function insert(string $query, array $arrvalues){
        $this->strquery = $query;
        $this->arrvalues = $arrvalues;

        $insert =  $this->conexion->prepare($this->strquery);
        $resInsert = $insert->execute($this->arrvalues);
        if($resInsert){
            $lastInsert = $this->conexion->lastInsertId();
        }else{
            $lastInsert = 0;
        }
        return $lastInsert;
    }

   

    //devuelve todo los registros 

    public function select_all(string $query){
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchall(PDO::FETCH_ASSOC);
        return $data;

    }

    //actualizar datos

    public function update(string $query, array $arrvalues){
        $this->strquery = $query;
        $this->arrvalues = $arrvalues;
        $update = $this->conexion->prepare($this->strquery);
        $resExecute = $update->execute($this->arrvalues);
        return $resExecute;
    }

    //eliminar datos

    public function dalete(string $query){
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        return $result;
    }

}

?>