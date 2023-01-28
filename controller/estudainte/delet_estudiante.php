<?php
include '../../model/estudianteModel.php';
session_start();
	if($_SESSION['rol'] != 1) {
		header("location: ./");
	}
	$id_user = $_SESSION['idUser'];
	$delet = new EstudianteModel();

	$delet->auditoriadelet($id_user);
		
    if(!empty($_POST)){

		if(empty($_POST['id'])){
			header("location: ../../view/sistema/lista_estudiantes.php");
			
		}

		$idestudiante = $_POST['id'];
		$usuario_id = $_SESSION['idUser'];

        $delet = new EstudianteModel();
		
		
		if($delet->deletStudent($idestudiante,$usuario_id)){
			header("location: ../../view/sistema/lista_estudiantes.php");
		}else{
			echo "error al eliminar el estudiante";
		}
	}


	if(empty($_REQUEST['id'])){
		header("location: ../../view/sistema/lista_estudiantes.php");
		
	}else{
	

		$idestudiante = $_REQUEST['id'];

        $get = new EstudianteModel();
		$result_get = $get->getStudentId($idestudiante);

		

			foreach($result_get as $data) {
				
                $ci = $data['cedula'];
				$nombre = $data['nombre'];
				$apellido = $data['apellido'];
				$carrera = $data['carrera'];
			}
		
	}