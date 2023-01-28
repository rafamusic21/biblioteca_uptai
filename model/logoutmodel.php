<?php
include '../../libs/crud.php';
class LogoutModel extends Crud{

    function __construct(){
        parent::__construct();
    }

   
    public function auditorialogout($id_user){
        $sql = "INSERT INTO sesion_logout(id_user_logout,hora_logout, fecha_logout) 
        VALUES(?,CURRENT_TIME(), CURRENT_DATE())";
    
        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
        }

    

}

?>