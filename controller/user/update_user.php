<?php
include '../../model/userModel.php';
session_start();
$usuario_id = $_SESSION['idUser'];
$auditoria = new UserModel();
$auditoria->auditoriaedit($usuario_id);
    /*
    $id_user = $_SESSION['idUser'];	
	mysqli_query($conection,"INSERT INTO auditoria_user(fecha_user_audi,hora_user_audi,edit_user_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
    */
    if(!empty($_POST))
  	{
  		
  		$alert ='';
  		if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['rol']))
  		{
  			$alert ='<p class="msg_error">todos los campos son obligatorios</p>';
  		}else{
  			
  			
  			$idusuario = $_POST['id'];
  			$nombre = $_POST['nombre'];
  			$email = $_POST['correo'];
  			$user = $_POST['usuario'];
  			$clave = md5($_POST['clave']);
  			$rol = $_POST['rol'];
  			
            $update = new UserModel();
  			
  			
  		

  			if( $update->getUserEmailUpdate($idusuario,$user,$email)){
  				$alert ='<p class="msg_error">el correo o el usuario ya existen</p>';
  			}else{

  				if (empty($_POST['clave'])) {

  					$sql_update = $update->updateUser($idusuario,$nombre,$email,$user,$rol);
  				}else {
  					$sql_update = $update->updateUserPass($idusuario,$nombre,$email,$user,$clave,$rol);

  				}
             
              
              if($sql_update){
              	$alert ='<p class="msg_save">usuario actualizado correctamente</p>';
              }else{
              	$alert ='<p class="msg_error">error al actualizar el usuario</p>';
              }     
  			}
  		}
  		
  	}


//mostramos los datos

if($_SESSION['rol'] != 1) 
{
    header("location: ./");
}


if (empty($_REQUEST['id'])) {
    header('location: ../../view/sistema/lista_usuarios.php');
    
}

$iduser = $_REQUEST['id'];
$update = new UserModel();
$result_user = $update->getUser($iduser);


  $option = '';

  foreach($result_user as $data) {
      
      $iduser = $data['idusuario'];
      $nombre = $data['nombre_u'];
      $correo = $data['correo'];
      $usuario = $data['usuario'];
      $rol = $data['rol'];
      $idrol = $data['idrol'];
    $option = '<option value="'.$idrol.'"select>'.$rol.'</option>';
      }
  
