<?php
include '../../model/userModel.php';
session_start();
if($_SESSION['rol'] != 1) 
{
    header("location: ./");
}

$usuario_id = $_SESSION['idUser'];
$auditoria = new UserModel();
$auditoria->auditoriaset($usuario_id);
/*$id_user = $_SESSION['idUser'];	
mysqli_query($conection,"INSERT INTO auditoria_user(fecha_user_audi,hora_user_audi,agg_user_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
*/
  if(!empty($_POST))
  {
      
      $alert ='';
      if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol']))
      {
          $alert ='<p class="msg_error">todos los campos son obligatorios</p>';
      }else{
          

          $nombre = $_POST['nombre'];
          $email = $_POST['correo'];
          $usuario = $_POST['usuario'];
          $clave = md5($_POST['clave']);
          $rol = $_POST['rol'];
          $usuario_id = $_SESSION['idUser'];
          
          
          $user = new UserModel();
          
          if($user->getUserEmail($usuario,$email)){

              $alert ='<p class="msg_error">el correo o el usuario ya existe</p>';
        }else{
            if($user->setUser($nombre,$email,$usuario,$clave,$rol,$usuario_id)){
                $alert ='<p class="msg_save">usuario creado correctamente</p>';
             }else{
                $alert ='<p class="msg_error">error al crear el usuario</p>';
             } 
 
          }
      }
  }


         