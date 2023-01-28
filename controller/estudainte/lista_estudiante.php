<?php
include '../../model/estudianteModel.php';

session_start();

$id_user = $_SESSION['idUser'];
	$delet = new EstudianteModel();

	$delet->auditorialista($id_user);
/*
$id_user = $_SESSION['idUser'];	
mysqli_query($conection,"INSERT INTO auditoria_estudiante(fecha_audi_est,hora_audi_est,lista_est_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
*/

	//paginador
    $student =  new EstudianteModel();
    $sql_register =  $student->countStudent();
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




    $query =  $student->getStundentLista($desde,$por_pagina);
