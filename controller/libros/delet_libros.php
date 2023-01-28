<?php
include '../../model/librosModel.php';
session_start();

$usuario_id = $_SESSION['idUser'];
$auditoria = new LibrosModel();
$auditoria->auditoriadelet($usuario_id);

if($_SESSION['rol'] != 1) {
    header("location: ../../view/sistema/lista_libros.php");
}
    
    /*$id_user = $_SESSION['idUser'];	
mysqli_query($conection,"INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,delet_libro_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
*/
if(!empty($_POST)){

    if(empty($_POST['cota'])){
        header("location: ../../view/sistema/lista_libros.php");
    }

    $cota = $_POST['cota'];
    $usuario_id = $_SESSION['idUser'];
    $delet_libro = new LibrosModel();
    $query_delete = $delet_libro->deletLibro($cota,$usuario_id);
    if($query_delete){
        
        header("location: ../../view/sistema/lista_libros.php");
    }else{
        echo "error al eliminar el libro";
    }
}

//mostar libro

if(empty($_REQUEST['id'])){
    header("location: ../../view/sistema/lista_libros.php");
}

$cota =  $_REQUEST['id'];

$get = new LibrosModel();

$result_get = $get->getLibro($cota);

foreach ($result_get as $data) {
				
    $nombre = $data['nombre_libro'];
    $autor = $data['autor'];
    $carrera = $data['carrera'];
}