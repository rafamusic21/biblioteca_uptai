<?php
include '../../model/librosModel.php';

session_start();
if($_SESSION['rol'] != 1 and $_SESSION['rol'] != 2) {
    header("location: ../../view/sistema/lista_libros.php");
}
$usuario_id = $_SESSION['idUser'];
$auditoria = new LibrosModel();
$auditoria->auditoriaprestamo($usuario_id);

/*$id_user = $_SESSION['idUser'];	
mysqli_query($conection,"INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,pres_libro_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
*/
if(!empty($_POST)){


    if(empty($_POST['cota']) || empty($_POST['cedula'])){
        header("location: ../../view/sistema/lista_libros.php");
    
    }

    $cota = $_POST['cota'];
    $ci = $_POST['cedula'];
    $usuario_id = $_SESSION['idUser'];

     $cedula = new LibrosModel();
    
    if($cedula->Getcedula($ci)){

        $prestamo = new LibrosModel();
        
         
        if ($prestamo->getLibroPrestado($cota) ){
        
        header("location:  ../../view/sistema/lista_libros.php");
    
        }else{
            $cedula = new LibrosModel();
            $query_ci = $cedula->Getcedula($ci);
            foreach($query_ci as $data){
    
                $id = $data['id'];
                $nombre = $data['nombre'];
            }
           
            $ejemplar = new LibrosModel();
            $query_libro = $ejemplar->numLibro($cota);
    
            foreach($query_libro as $data_libro){
    
                $n_libros = $data_libro['n_ejemplar'] - 1;
            }
            
            $updateejemplar = new LibrosModel();
            $update = $updateejemplar->updateEjemplar($cota,$n_libros);
            
    
    
            $insert = new LibrosModel();
            $query_retiro = $insert->prestamoLibro($cota,$id,$nombre,$ci,$usuario_id);
    
    
            if($query_retiro){
            header("location: ../../view/sistema/lista_libros.php");
              }else{
            
             $alert ='<p class="msg_error">error al registrar el prestamo</p>';
            
             }
    
        }
    }else{
        header("location:  ../../view/sistema/lista_libros.php");

    }
    
    
    
}


//mostramos la inf enviada por url

if(empty($_REQUEST['cota']) ){
    header("location: ../../view/sistema/lista_libros.php");
 
}
$cota = $_REQUEST['cota'];
 
 $getLibro = new LibrosModel();
 $result_libro = $getLibro->getLibro($cota);

 foreach($result_libro as $data){
    $cota = $data['cota'];
    $nombre = $data['nombre_libro'];
    $autor = $data['autor'];
 }
