<?php

include '../../libs/crud.php';

class UserModel extends Crud{

    function __construct(){
        parent::__construct();
    }

    //retorna los roles
    public function getrol(){
        $sql = "SELECT * FROM rol";

        $result = $this->select_all($sql);

        return $result;
    }

    //retorna si el usuario y email ya existen

    public function getUserEmail(string $usuario, string $email){
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' OR correo = '$email'";

        $result = $this->select_all($sql);

        return $result;
    }

    //inserta los datos en la tabla usuario

    public function setUser(string $nombre,string $email, string $usuario,string $clave,int $rol,int $usuario_id){
        $query = "INSERT INTO usuarios(nombre_u,correo,usuario,clave,rol,id_userCreador)     VALUES(?,?,?,?,?,?)";

        $data = array($nombre,$email,$usuario,$clave,$rol,$usuario_id);
        $result = $this->insert($query,$data);

        return $result;
    }

    //cuenta los registros de usuarios

    public function countUser(){
        $sql = "SELECT count(*)  as total_registro FROM usuarios WHERE status = 1";
        $result = $this->select_all($sql);

        return $result;
    }

    //retorna los registro de los usaurios 

    public function getUserLista($desde,$por_pagina){
        $sql = "SELECT u.idusuario, u.nombre_u, u.correo, u.usuario, r.rol FROM usuarios u INNER JOIN rol r ON u.rol = r.idrol WHERE status = 1 ORDER BY u.idusuario ASC
        LIMIT $desde, $por_pagina";
        $result = $this->select_all($sql);

        return $result;
    }

    //retorna un usuario 

    public function getUser($iduser){
        $sql = "SELECT u.idusuario, u.nombre_u, u.correo, u.usuario, (r.rol) as rol, (r.idrol) as idrol 
                                  FROM usuarios u 
                                  INNER JOIN rol r 
                                  ON u.rol = r.idrol 
                                   WHERE idusuario = $iduser  AND status = 1";
        $result = $this->select_all($sql);
        return $result;

    }

    //restorna si hay considencia entre usuario o  emmail distinto al id de usuario logeado

    public function getUserEmailUpdate($idusuario,$user,$email){
        $sql = "SELECT * FROM usuarios WHERE (usuario = '$user' AND idusuario != '$idusuario')
  										  OR (correo ='$email' AND idusuario != '$idusuario')";

        $result = $this->select_all($sql);
        return $result;
    }

    //se realiza el update sin cambio de clave

    public function updateUser($idusuario,$nombre,$email,$user,$rol){
        $sql = "UPDATE usuarios
        SET nombre_u = ?, correo = ?,usuario = ?, rol = ?
        WHERE idusuario = '$idusuario' ";

        $data = array($nombre,$email,$user,$rol);
        $result = $this->update($sql,$data);
        return $result;
    }

    //se realiza el update con cambio de clave

    public function updateUserPass($idusuario,$nombre,$email,$user,$clave,$rol){
        $sql = "UPDATE usuarios
        SET nombre_u = ?, correo = ?,usuario = ?, clave = ?, rol = ?
        WHERE idusuario = '$idusuario' ";

        $data = array($nombre,$email,$user,$clave,$rol);
        $result = $this->update($sql,$data);
        return $result;
    }   
    
    //elimina el usuario

    public function deletUser($idusuario,$usuario_id){
        $sql = "UPDATE usuarios SET status = 0, id_userDeleted = ? WHERE idusuario = $idusuario";

        $data = array($usuario_id);
        $result = $this->update($sql,$data);
        return $result;
    }

    //cuenat los registros de los libros buscados

    public function countUserSearch($busqueda,$rol){
        $sql = "SELECT count(*) as total_registro FROM usuarios 
        WHERE ( idusuario LIKE '%$busqueda%' OR 
                nombre_u LIKE '%$busqueda%' OR 
                correo LIKE '%$busqueda%' OR 
                usuario LIKE '%$busqueda%'
                $rol ) 
        AND status = 1";
        $result = $this->select_all($sql);

        return $result;
    }

    //retorna los registros encontrados en la busqueda

    public function getUserListaSearch($busqueda,$desde,$por_pagina){
        $sql = "SELECT u.idusuario, u.nombre_u, u.correo, u.usuario, r.rol FROM usuarios u INNER JOIN rol r ON u.rol = r.idrol 
        WHERE ( u.idusuario LIKE '%$busqueda%' OR 
                u.nombre_u LIKE '%$busqueda%' OR 
                u.correo LIKE '%$busqueda%' OR 
                u.usuario LIKE '%$busqueda%' OR
                r.rol   LIKE '%$busqueda%')  

        AND status = 1 ORDER BY u.idusuario ASC LIMIT $desde, $por_pagina";
        $result = $this->select_all($sql);

        return $result;
    }

    public function auditoriaset($id_user){
        $sql = "INSERT INTO auditoria_user(fecha_user_audi,hora_user_audi,agg_user_audi) 
        VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }
    public function auditoriadelet($id_user){
        $sql = "INSERT INTO auditoria_user(fecha_user_audi,hora_user_audi,delet_user_audi) 
        VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }
    public function auditoriaedit($id_user){
        $sql = "INSERT INTO auditoria_user(fecha_user_audi,hora_user_audi,edit_user_audi) 
        VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }
    public function auditorialista($id_user){
        $sql = "INSERT INTO auditoria_user(fecha_user_audi,hora_user_audi,lista_user_audi) 
        VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }

}