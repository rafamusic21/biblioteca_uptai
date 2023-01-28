<?php

include '../model/loginmodel.php';
$alert = '';
session_start();
if(!empty($_SESSION['active']) )
{
    if($_SESSION['rol'] != 3){

        header('location: sistema/');
    }else{
        header('location: lector/');
    }
}
if(!empty($_POST)){
    $user = $_POST['usuario'];
    $pass = MD5($_POST['clave']);

    if(empty($user) || empty($pass)){
        $alert = 'Ingrese usuario y contraseña';
    }else{
        $login = new LoginModel();
         $result = $login->verUser($user,$pass);
        if($login->verUser($user,$pass)){
            
            
            $_SESSION['active'] = true;

           foreach($result as $data){
            $_SESSION['idUser'] = $data['idusuario'];
            $_SESSION['nombre'] = $data['nombre_u'];
            $_SESSION['email']  = $data['correo'];
            $_SESSION['user']   = $data['usuario'];
            $_SESSION['rol'] 	= $data['idrol'];
            $_SESSION['rol_name'] 	= $data['rol'];

            $usuario_id = $_SESSION['idUser'];
            $auditoria = new LoginModel();
            $auditoria->auditorialogin($usuario_id);
           }
           if($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2 ){

               header('Localtion: sistema/');
           }else{
            header('Localtion: lector/');
           }
        }else{
            $alert = 'usuario o clave incorrectos';
            session_destroy();
        }
    }
}