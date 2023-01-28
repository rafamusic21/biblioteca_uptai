<?php
include '../libs/crud.php';
class LoginModel extends Crud{

    function __construct(){
        parent::__construct();
    }

    public function verUser(string $user, string $pass){
        //selecciona  datos de la base de datos
        $query_get = "SELECT u.idusuario,u.nombre_u,u.correo, u.usuario, r.idrol, r.rol 
        FROM usuarios u
        INNER JOIN rol r
        ON u.rol = r.idrol
        WHERE u.usuario = '$user' AND u.clave = '$pass' ";
        
        $result =  $this->select_all($query_get);

        return $result;
    }

    

    public function auditorialogin($id_user){
        $sql = "INSERT INTO sesion_login(id_user_login,hora_user_login, fecha_user_login) 
        VALUES(?,CURRENT_TIME(), CURRENT_DATE())";
    
        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
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