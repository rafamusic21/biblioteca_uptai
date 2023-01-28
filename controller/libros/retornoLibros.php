<?php
include '../../model/librosModel.php';
session_start();
if($_SESSION['rol'] != 1 and $_SESSION['rol'] != 2) {
    header("location: ./");
}

$usuario_id = $_SESSION['idUser'];
$auditoria = new LibrosModel();
$auditoria->auditoriaretorno($usuario_id);
   /*
    $id_user = $_SESSION['idUser'];	
	mysqli_query($conection,"INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,retor_libro_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
*/
if(!empty($_POST)){

    
    if(empty($_POST['cota']) || empty($_POST['ci'])){
        header("location: ../../view/sistema/retorno_libro.php");
    
       
    }
    $cota = $_POST['cota'];
    $ci = $_POST['ci'];
    $usuario_id = $_SESSION['idUser'];

    $retorno = new LibrosModel();
    $query_retorno = $retorno->returnLibro($cota,$ci);
    if($query_retorno == 0){
        $alert ='<p class="msg_error">el libro ya fue devuelto</p>';
        
        }else{
           
            foreach($query_retorno as $data){

                $id = $data['id'];
                $id_estudiante = $data['id_estudiante_rl'];
                $nombre = $data['nombre'];
            }


			

        $retorno = new LibrosModel();
       
        if($retorno->setReturn($cota,$id_estudiante,$nombre,$ci,$usuario_id)){
            
            $query_libro = $retorno->numlibro($cota);

            foreach($query_libro as $data_libro){

                $n_libros = $data_libro['n_ejemplar'] + 1;
            }
			
			
			$update = $retorno->updateEjemplar($cota,$n_libros);

           
                
                 if($retorno->deletRetiro($cota,$ci,$id,$usuario_id)){
			    header("location: ../../view/sistema/lista_libros.php");
		        }else{
			    echo "error al retornar el libro";
		        }
        }else{
            echo "error al registrar la devolucion";
        }

       


    }
        
        
}


