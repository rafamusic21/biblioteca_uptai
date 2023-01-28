<?php
include '../../model/estudianteModel.php';
session_start();
if($_SESSION['rol'] != 1) 
{
    header("location: ./");
}
$id_user = $_SESSION['idUser'];
	$delet = new EstudianteModel();

	$delet->auditoriedit($id_user);
/*
$id_user = $_SESSION['idUser'];	
mysqli_query($conection,"INSERT INTO auditoria_estudiante(fecha_audi_est,hora_audi_est,edit_est_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
*/
  if(!empty($_POST))
  {
      
      $alert ='';
      if(empty($_POST['cedula']) || empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['telf']) ||  empty($_POST['carrera']))
      {
          $alert ='<p class="msg_error">todos los campos son obligatorios</p>';
      }else{
          
          
          $idestudiante = $_POST['id'];
          $cedula = $_POST['cedula'];
          $nombre = $_POST['nombre'];
          $apellido = $_POST['apellido'];
          $telf = $_POST['telf'];
          $carrera = $_POST['carrera'];

          $student = new EstudianteModel();

           
          if($student->getCi($idestudiante,$cedula)){
              $alert ='<p class="msg_error">el numero de cedula ya existe</p>';
          }else{

         
          
          
  
          if($student->updateStudent($cedula,$nombre,$apellido,$telf,$carrera,$idestudiante)){
              $alert ='<p class="msg_save">Estudiante actualizado correctamente</p>';
          }else{
              $alert ='<p class="msg_error">error al actualizar el estudiante</p>';
          } 
          }

              
          
      }
      
  }

// MOSTRAR DATOS

if (empty($_REQUEST['id'])) {
    header('location: ../../view/sistema/lista_estudiante.php');
    
}

$idestudiante = $_REQUEST['id'];

$student = new EstudianteModel();


$result_student = $student->getStudentId($idestudiante);


      
       
      
       
       
      
     
      
      

  