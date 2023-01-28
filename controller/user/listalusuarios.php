<?php
include '../../model/userModel.php';
session_start();
if($_SESSION['rol'] != 1) {
    header("location: ./");
}
$usuario_id = $_SESSION['idUser'];
$auditoria = new UserModel();
$auditoria->auditoriaedit($usuario_id);
/*
$id_user = $_SESSION['idUser'];	
	mysqli_query($conection,"INSERT INTO auditoria_user(fecha_user_audi,hora_user_audi,lista_user_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
*/

//paginador
$user = new UserModel();
$sql_register =  $user->countUser();
if($sql_register > 0){
    foreach($sql_register as $data){    

        $total_registro = $data['total_registro'];
    }
}

$por_pagina = 5;

if(empty($_GET['pagina']))
{
    $pagina = 1;
}else{
    $pagina = $_GET['pagina'];
}

$desde = ($pagina-1) * $por_pagina;
$total_paginas = ceil($total_registro / $por_pagina);

$query = $user->getUserLista($desde,$por_pagina);

