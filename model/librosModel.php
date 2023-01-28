<?php
include '../../libs/crud.php';
class LibrosModel extends Crud{

    function __construct(){
        parent::__construct();
    }

    //muestra la carrera
    public function getcarrera(){
        
        $query = "SELECT * FROM carrera";
        $result = $this->select_all($query);

        return $result;
    }

//MUESTRA LA COTA
    public function getCota(string $cota){

        $sql = "SELECT * FROM libros WHERE cota = '$cota'";
        $result = $this->select_all($sql);

        return $result;

    }
//INSERTA el libro en la bd
    public function setLibro(string $cota,string $nombre,string $autor, $año,int $numero,int $carrera,int $usuario_id){

        $sql = "INSERT INTO libros(cota,nombre_libro,autor,año_libro,n_ejemplar,carrera,id_userCreador)     VALUES(?,?,?,?,?,?,?)";
        $data = array($cota,$nombre,$autor,$año,$numero,$carrera,$usuario_id);
        $result = $this->insert($sql,$data);

        return $result;
    }
//cuenta los libro
    public function countLibro(){

        $sql = "SELECT count(*)  as total_registro FROM libros WHERE status = 1";
        $result = $this->select_all($sql);

        return $result;

    }
//muestra los libros
    public function getLibros($desde,$por_pagina){
        $sql = "SELECT l.cota, l.nombre_libro, l.autor, l.año_libro, l.n_ejemplar, (c.nom_carrera) as carrera, (c.idcarrera) as idcarrera FROM libros l INNER JOIN carrera c ON l.carrera = c.idcarrera WHERE status = 1 ORDER BY cota ASC LIMIT $desde, $por_pagina";
        $result = $this->select_all($sql);

        return $result;

    }
//muestra un solo libro
    public function getlibro($cota){
        $sql = "SELECT l.cota, l.nombre_libro, l.autor, l.año_libro, l.n_ejemplar, (c.nom_carrera) as carrera, (c.idcarrera) as idcarrera 
        FROM libros l 
        INNER JOIN carrera c
        ON l.carrera = c.idcarrera 
        WHERE cota = '$cota' and status = 1"; 
        $result = $this->select_all($sql);

        return $result;
    }

//ejecuta el update
    public function updateLibro($cota,$nombre,$autor,$año,$ejemplar,$carrera){
        $sql = "UPDATE libros
        SET nombre_libro = ?, autor = ?,año_libro = ?, n_ejemplar = ?, carrera = ?
        WHERE cota = '$cota'";

        $data = array($nombre,$autor,$año,$ejemplar,$carrera);
        $update = $this->update($sql,$data);

        return $update;
    }
    
//ejecuta el delete
    public function deletLibro($cota,$usuario_id){
        $sql = "UPDATE libros SET status = 0, id_userDeleted = ? WHERE cota = '$cota'";
        $data = array($usuario_id);

        $delet = $this->update($sql,$data);
        return $delet;
    }
//cuenta los libros buscados
    public function countLibrosSearch($busqueda,$carrera){
        $sql = "SELECT count(*) as total_registro FROM libros 
        WHERE ( cota LIKE '%$busqueda%' OR 
                nombre_libro LIKE '%$busqueda%' OR 
                autor LIKE '%$busqueda%' OR 
                año_libro LIKE '%$busqueda%'
                $carrera ) 
        AND status = 1";
        $result = $this->select_all($sql);

        return $result;


    }
//muestra los libros buscados
    public function librosSearch($busqueda,$desde,$por_pagina){
        $sql = "SELECT l.cota, l.nombre_libro, l.autor, l.año_libro, l.n_ejemplar, c.nom_carrera FROM libros l INNER JOIN carrera c ON l.carrera = c.idcarrera 
        WHERE ( l.cota LIKE '%$busqueda%' OR 
                l.nombre_libro LIKE '%$busqueda%' OR 
                l.autor LIKE '%$busqueda%' OR 
                l.año_libro LIKE '%$busqueda%' OR
                c.nom_carrera  LIKE '%$busqueda%')  

        AND status = 1 ORDER BY l.cota ASC LIMIT $desde, $por_pagina";

        $result = $this->select_all($sql);

        return $result;
    }
//retorna los libros que no tienen existencia
    public function getLibroPrestado($cota){
        $sql = "SELECT * FROM libros WHERE STATUS = 1 and n_ejemplar = 0 AND cota ='$cota'";

        $result = $this->select_all($sql);

        return $result;
    }
// retorna  el nª de ejemplares
    public function numLibro($cota){
        $sql = "SELECT n_ejemplar FROM libros WHERE cota = '$cota'";

        $result = $this->select_all($sql);

        return $result;
    }
//actualiza el ejemplar
    public function updateEjemplar($cota,$n_libros){
        $sql = "UPDATE libros SET n_ejemplar = ? WHERE cota = '$cota'";

        $data = array($n_libros);
        $update = $this->update($sql,$data);

        return $update;
    }
//presta el libro
    public function prestamoLibro($cota,$id,$nombre,$ci,$usuario_id){
        $sql = "INSERT INTO retiro_libros(cota, fecha_retiro, hora_retiro,id_estudiante_rl,nombre,cedula, id_userCreador,fecha_entrega) 
        values(?, CURDATE(), NOW(),?,?, ?,?, date_add(CURRENT_DATE, interval 3 day))";
        $data = array($cota,$id,$nombre,$ci,$usuario_id);
        $result = $this->insert($sql,$data);

        return $result;
    }
//retorna la cedula
    public function Getcedula($ci){
        $query = "SELECT * FROM inf_estudiante WHERE cedula = '$ci'";

        $result =  $this->select_all($query);

        return $result;
    }

    //retonrna el libro prestado
    public function returnLibro($cota,$ci){
        $sql = "SELECT * FROM retiro_libros WHERE cedula = '$ci' AND cota = '$cota' AND status = 1";

        $result =  $this->select_all($sql);

        return $result;
    }
    // inserta el retorno del libro en la bd
    public function setReturn($cota,$id_estudiante,$nombre,$ci,$usuario_id){
        $sql = "INSERT INTO entrega_libro(cota, fecha_entrega, hora_entrega,id_estudiante_el,nombre,cedula, id_userCreador) 
        values(?, CURDATE(), NOW(),?,?,?,?)";
        $data = array($cota,$id_estudiante,$nombre,$ci,$usuario_id);
        $result = $this->insert($sql,$data);

        return $result;
    }

    //elimina el retiro del libro de la tabla de lisbros retirados
    public function deletRetiro($cota,$ci,$id,$usuario_id){
        $sql = "UPDATE retiro_libros SET status = 0, id_userDeleted = ? WHERE cota = '$cota' AND cedula = '$ci' AND id = $id";

        $data = array($usuario_id);
        $update = $this->update($sql,$data);

        return $update;
    }
    //ceunta los registros de la tabla retiro_libros
    public function countLibroRetiro(){
        $sql = "SELECT count(*)  as total_registro FROM retiro_libros WHERE status = 1";
        $result = $this->select_all($sql);

        return $result;
    }
    
    //retorna los registros de ka tabla retiro_libros
    public function getLibroRetiro($desde,$por_pagina){
        $sql = "SELECT * FROM retiro_libros  WHERE status = 1 
        ORDER BY id ASC
        LIMIT $desde, $por_pagina";
        $result = $this->select_all($sql);

        return $result;
    }
    //ceunat los registros del la busqueda de retiro_libros
    public function countLibrosRetiroSearch($busqueda){

        $sql = "SELECT count(*)  as total_registro FROM retiro_libros 
        WHERE (cota LIKE '%$busqueda%' OR 
               fecha_retiro LIKE '%$busqueda%' OR
               hora_retiro LIKE '%$busqueda%' OR
               nombre LIKE '%$busqueda%' OR
               cedula LIKE '%$busqueda%' OR
               fecha_entrega LIKE '%$busqueda%') AND status = 1";

        $result = $this->select_all($sql);

        return $result;
    }

    //retorna los libros buscados
    public function librosRetrioSearch($busqueda,$desde,$por_pagina){
        
        $sql = "SELECT * FROM retiro_libros 
        WHERE (cota LIKE '%$busqueda%' OR 
        fecha_retiro LIKE '%$busqueda%' OR
        hora_retiro LIKE '%$busqueda%' OR
        nombre LIKE '%$busqueda%' OR
        cedula LIKE '%$busqueda%' OR
        fecha_entrega LIKE '%$busqueda%') AND status = 1
        ORDER BY cota ASC
        LIMIT $desde, $por_pagina";

        $result = $this->select_all($sql);

        return $result;
    }

    //hace la auditoria 

    public function auditoriadelet($id_user){
        $sql = "INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,delet_libro_audi) 
        VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }

    public function auditoriedit($id_user){
        $sql = "INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,edit_libro_audi) 
        VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }

    public function auditorialista($id_user){
        $sql = "INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,lista_libro_audi) 
        VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }

    public function auditoriaset($id_user){
        $sql = "INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,agg_libro_audi) 
        VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }
    public function auditoriaretorno($id_user){
        $sql = "INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,retor_libro_audi) 
        VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

        $data = array($id_user);
        
        $result = $this->insert($sql,$data);
        return $result;
    }

    public function auditoriaprestamo($id_user){
    $sql = "INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,pres_libro_audi) 
    VALUES(CURRENT_DATE(),CURRENT_TIME(),?)";

    $data = array($id_user);
    
    $result = $this->insert($sql,$data);
    return $result;
    }
}