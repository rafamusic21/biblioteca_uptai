<?php
include '../../libs/crud.php';
class updatePassModel extends Crud{

    function __construct(){
        parent::__construct();
    }

    public function getPass(int $idusuario, string $passuser){
        $query = "SELECT * FROM usuarios WHERE clave = '$passuser' AND idusuario = $idusuario";


        $result =  $this->select_all($query);

        return $result;
    }

    public function updatePass(string $idusuario, string $confirpass){
        $sql_update = "UPDATE usuarios SET clave = ? WHERE idusuario = $idusuario";
        $data = array($confirpass);

        $result = $this->update($sql_update,$data);

        return $result;

    }


}

