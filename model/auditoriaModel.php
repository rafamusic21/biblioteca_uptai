<?php
include '../../libs/crud.php';

class AuditoriaModel extends Crud{

    function __construct(){
        parent::__construct();
    }
    //muestar  la lista de logout
    public function countAuditorialogout(){
        $sql = "SELECT count(*)  as total_registro FROM sesion_logout ";
        $result = $this->select_all($sql);
        return $result;
    }

    public function getAuditoriaListalogout($desde,$por_pagina){
        $sql = "SELECT s.id_sesion_logout, s.id_user_logout, s.hora_logout, s.fecha_logout, u.usuario FROM sesion_logout s INNER JOIN usuarios u ON s.id_user_logout = u.idusuario ORDER BY s.id_user_logout ASC
        LIMIT $desde, $por_pagina";
        $result = $this->select_all($sql);
        return $result;
    }

    //muestar la lista login

    public function countAuditorialogin(){
        $sql = "SELECT count(*)  as total_registro FROM sesion_login ";
        $result = $this->select_all($sql);
        return $result;
    }

    public function getAuditoriaLogin($desde,$por_pagina){
        $sql = "SELECT s.id_sesion, s.id_user_login, s.hora_user_login, s.fecha_user_login, u.usuario FROM sesion_login s INNER JOIN usuarios u ON s.id_user_login = u.idusuario  ORDER BY s.id_user_login ASC
        LIMIT $desde, $por_pagina";
        $result = $this->select_all($sql);
        return $result;
    }

    //muestar  la lista user

    public function countAuditoriaUser(){
        $sql = "SELECT count(*)  as total_registro FROM auditoria_user  ";
        $result = $this->select_all($sql);
        return $result;
    }

    public function getAuditoriaUser($desde,$por_pagina){
        $sql = "SELECT a.id_audi_user, a.agg_user_audi,a.lista_user_audi,a.edit_user_audi,a.delet_user_audi, a.hora_user_audi, a.fecha_user_audi, u.usuario FROM auditoria_user a INNER JOIN usuarios u ON a.agg_user_audi = u.idusuario OR a.lista_user_audi = u.idusuario OR a.edit_user_audi = u.idusuario OR a.delet_user_audi = u.idusuario ORDER BY a.id_audi_user ASC
        LIMIT $desde, $por_pagina";
        $result = $this->select_all($sql);
        return $result;
    }
    //muestar  la lista estudiante

    public function countAuditoriaEst(){
        $sql = "SELECT count(*)  as total_registro FROM auditoria_estudiante ";
        $result = $this->select_all($sql);
        return $result;
    }

    public function getAuditoriaEst($desde,$por_pagina){
        $sql = "SELECT a.id_audi_est, a.agg_est_audi,a.lista_est_audi,a.edit_est_audi,a.delet_est_audi, a.hora_audi_est, a.fecha_audi_est, u.usuario FROM auditoria_estudiante a INNER JOIN usuarios u ON a.agg_est_audi = u.idusuario OR a.lista_est_audi = u.idusuario OR a.edit_est_audi = u.idusuario OR a.delet_est_audi = u.idusuario ORDER BY a.id_audi_est ASC
        LIMIT $desde, $por_pagina";
        $result = $this->select_all($sql);
        return $result;
    }
    //muestar  la lista libros

    public function countAuditoriaLib(){
        $sql = "SELECT count(*)  as total_registro FROM auditoria_libro  ";
        $result = $this->select_all($sql);
        return $result;
    }

    public function getAuditoriaLib($desde,$por_pagina){
        $sql = "SELECT a.id_audi_libro,a.pres_libro_audi,a.retor_libro_audi, a.agg_libro_audi,a.lista_libro_audi,a.edit_libro_audi,a.delet_libro_audi, a.hora_audi_libro, a.fecha_audi_libro, u.usuario FROM auditoria_libro a INNER JOIN usuarios u ON a.agg_libro_audi = u.idusuario OR a.lista_libro_audi = u.idusuario OR a.edit_libro_audi = u.idusuario OR a.delet_libro_audi = u.idusuario OR a.pres_libro_audi = u.idusuario OR a.retor_libro_audi = u.idusuario ORDER BY a.id_audi_libro ASC
        LIMIT $desde, $por_pagina";
        $result = $this->select_all($sql);
        return $result;
    }

}