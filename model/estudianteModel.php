<?php
include '../../libs/crud.php';
class EstudianteModel extends Crud{

    function __construct(){
        parent::__construct();
    }

    //retorna las carreras

    public function getcarrera(){
        
        $query = "SELECT * FROM carrera";
        $result = $this->select_all($query);

        return $result;
    }

    //retrorna la cedula 
    public function Getcedula($ci){
        $query = "SELECT * FROM inf_estudiante WHERE cedula = '$ci'";

        $result =  $this->select_all($query);

        return $result;
    }

    //inserta el estudainte en la bd

    public function setStudent($ci,$nombre,$apellido,$telf,$carrera,$usuario_id){
        $sql = "INSERT INTO inf_estudiante(cedula,nombre,apellido,numero,carrera,id_userCreador)     VALUES(?,?,?,?,?,?)";
        $data = array($ci,$nombre,$apellido,$telf,$carrera,$usuario_id);

        $result = $this->insert($sql,$data);

        return $result;

    }

    //cuenta los registros de la tabla estudiante

    public function countStudent(){
        $sql = "SELECT count(*)  as total_registro FROM inf_estudiante WHERE status = 1";

        $result = $this->select_all($sql);
        return $result;

    }


    //devuelve los registros de la tabla estudiante

    public function getStundentLista($desde,$por_pagina){
        $sql = "SELECT e.id, e.cedula, e.nombre, e.apellido, e.numero, (c.nom_carrera) as carrera, (c.idcarrera) as idcarrera
        FROM inf_estudiante e 
        INNER JOIN carrera c 
        ON e.carrera = c.idcarrera
         WHERE status = 1 ORDER BY id ASC
            LIMIT $desde, $por_pagina";

        $result = $this->select_all($sql);
        return $result;
    }

    //retorna al estudiante por id
    public function getStudentId($idestudiante){

        $query = "SELECT e.id,e.cedula,  e.nombre, e.apellido, e.numero, (c.nom_carrera) as carrera, (c.idcarrera) as idcarrera
        FROM inf_estudiante e 
        INNER JOIN carrera c 
        ON e.carrera = c.idcarrera
        WHERE id = $idestudiante AND status = 1  AND status = 1";

        $result =  $this->select_all($query);

        return $result;
    }

    //compara si la existe uhna sedula distinda de la de el id que se esta mandado

    public function getCi($idestudiante,$ci){

        $sql = "SELECT * FROM inf_estudiante WHERE (cedula = '$ci' AND id != '$idestudiante')";

        $result = $this->select_all($sql);
        return $result;

    }

    //se realiza el update 

    public function updateStudent($cedula,$nombre,$apellido,$telf,$carrera,$idestudiante){
        $sql = "UPDATE inf_estudiante
        SET  cedula = ?, nombre = ?,apellido = ?,numero = ?, carrera = ?
        WHERE id = '$idestudiante' ";
        $data = array($cedula,$nombre,$apellido,$telf,$carrera);
        $result = $this->update($sql,$data);
        
        return $result;
    }

    //se realiza el delet

    public function deletStudent($idestudiante,$usuario_id){
        $sql = "UPDATE inf_estudiante SET status = 0, id_userDeleted = ? WHERE id = '$idestudiante'";
        $data = array($usuario_id);
        $result = $this->update($sql,$data);
        return $result;
    }

    //cuenta los registros buscados 


    public function countStudentSeacrh($busqueda,$carrera){
        $sql = "SELECT count(*) as total_registro FROM inf_estudiante
        WHERE ( id LIKE '%$busqueda%' OR 
                cedula LIKE '%$busqueda%' OR 
                nombre LIKE '%$busqueda%' OR 
                apellido LIKE '%$busqueda%' OR
                numero LIKE '%$busqueda%'
                $carrera ) 
        AND status = 1";

        $result = $this->select_all($sql);
        return $result;

    }

    //retorna los reguistro bsucados

    public function GetStudentSerach($busqueda,$desde,$por_pagina){

        $sql = "SELECT e.id, e.cedula, e.nombre, e.apellido, e.numero, c.nom_carrera FROM inf_estudiante e INNER JOIN carrera c ON e.carrera = c.idcarrera 
        WHERE ( e.id LIKE '%$busqueda%' OR 
                e.cedula LIKE '%$busqueda%' OR 
                e.nombre LIKE '%$busqueda%' OR 
                e.apellido LIKE '%$busqueda%' OR
                e.numero LIKE '%$busqueda%' OR
                c.nom_carrera  LIKE '%$busqueda%')  
        AND status = 1 ORDER BY e.id ASC LIMIT $desde, $por_pagina";
        
        $result = $this->select_all($sql);
        return $result;

    }

    //hace la auditoria 

    public function auditoriadelet($id_user){
        $sql = "INSERT INTO auditoria_estudiante(fecha_audi_est,hora_audi_est,delet_est_audi) 
                VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }

    public function auditoriedit($id_user){
        $sql = "INSERT INTO auditoria_estudiante(fecha_audi_est,hora_audi_est,edit_est_audi) 
                VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }

    public function auditorialista($id_user){
        $sql = "INSERT INTO auditoria_estudiante(fecha_audi_est,hora_audi_est,lista_est_audi) 
                VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }

    public function auditoriaset($id_user){
        $sql = "INSERT INTO auditoria_estudiante(fecha_audi_est,hora_audi_est,agg_est_audi) 
                VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }


}
    

