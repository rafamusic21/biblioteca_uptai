<?php
include '../../model/userModel.php';
session_start();
if($_SESSION['rol'] != 1) {
    header("location: ./");
}
$usuario_id = $_SESSION['idUser'];
$auditoria = new UserModel();
$auditoria->auditoriadelet($usuario_id);
   /* 
    $id_user = $_SESSION['idUser'];	
mysqli_query($conection,"INSERT INTO auditoria_user(fecha_user_audi,hora_user_audi,delet_user_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
*/

if(!empty($_POST)){

    if($_POST['idusuario'] ==1){
        header("location: ../../view/sistema/lista_usuarios.php");
        mysqli_close($conection);
        exit;
    }

    $idusuario = $_POST['idusuario'];
    $usuario_id = $_SESSION['idUser'];

    $query_delete = new UserModel();
    $user_delet = $query_delete->deletUser($idusuario, $usuario_id);
    if($query_delete){
        header("location: ../../view/sistema/lista_usuarios.php");
    }else{
        echo "error al eliminar el usuario";
    }
}



if(empty($_REQUEST['id']) || $_REQUEST['id'] == 1){
    header("location: ../../view/sistema/lista_usuarios.php");
    
}else{


    $idusuario = $_REQUEST['id'];
    $get = new UserModel();

    $result_get = $get->getUser($idusuario);
    
   

    

        foreach($result_get as $data) {
            
            $nombre = $data['nombre_u'];
            $usuario = $data['usuario'];
            $rol = $data['rol'];
        }
   
}
