<?php
include '../../model/estudianteModel.php';

	session_start();
	$id_user = $_SESSION['idUser'];
	$delet = new EstudianteModel();

	$delet->auditoriaset($id_user);
	/*
	$id_user = $_SESSION['idUser'];	
	mysqli_query($conection,"INSERT INTO auditoria_estudiante(fecha_audi_est,hora_audi_est,agg_est_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
*/
  	if(!empty($_POST))
  	{
  		
  		$alert ='';
  		if(empty($_POST['ci']) || empty($_POST['nombre']) || empty($_POST['apellido']) ||  empty($_POST['carrera']))
  		{
  			$alert ='<p class="msg_error">todos los campos son obligatorios</p>';
  		}else{

  			
				$ci = $_POST['ci'];
				$nombre = $_POST['nombre'];
  				$apellido = $_POST['apellido'];
  				$telf = $_POST['telf'];
  				$carrera = $_POST['carrera'];
				$usuario_id = $_SESSION['idUser'];
			
				
                    $student = new EstudianteModel();

					if($student->Getcedula($ci)){
						$alert ='<p class="msg_error">el numero de cedula ya existe</p>';
					}	
					else{

						

  			 			 if($student->setStudent($ci,$nombre,$apellido,$telf,$carrera,$usuario_id)){
              				$alert ='<p class="msg_save">Estudiante guardado correctamente</p>';
             			 }else{
             	 			$alert ='<p class="msg_error">error al guardar el Estudiante</p>';
              		 
  						}
				}

  			
  			 	

  			}	
			
  	}
