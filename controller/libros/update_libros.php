<?php
include '../../model/librosModel.php';
session_start();

$usuario_id = $_SESSION['idUser'];
$auditoria = new LibrosModel();
$auditoria->auditoriedit($usuario_id);

if($_SESSION['rol'] != 1) {
		header("location: ./");
}
if(!empty($_POST))
  	{
  		
		  $alert ='';
  		if(empty($_POST['nombre']) || empty($_POST['autor']) || empty($_POST['año'])  ||  empty($_POST['carrera']))
  		{
  			$alert ='<p class="msg_error">todos los campos son obligatorios</p>';
  		}else{
  			
  			
  			$cota = $_POST['cota'];
  			$nombre = $_POST['nombre'];
  			$autor = $_POST['autor'];
  			$año = $_POST['año'];
            $ejemplar = $_POST['ejemplar'];
  			$carrera = $_POST['carrera'];
              
            $update = new LibrosModel();



  			$result_update  = $update->updateLibro($cota,$nombre,$autor,$año,$ejemplar,$carrera);
  				
              if($result_update){
              	$alert ='<p class="msg_save">libro actualizado correctamente</p>';
              }else{
              	$alert ='<p class="msg_error">error al actualizar el libro</p>';
              }     
  			
  		}
  		
  	}

    



//mostar libros

if (empty($_REQUEST['id'])) {
    header('location:  ../../view/sistema/lista_libros.php'); 
 }
 
 $cota = $_REQUEST['id'];
 
 $update = new LibrosModel();
 $result_libro = $update->getLibro($cota);