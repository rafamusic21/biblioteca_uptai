<?php
include '../../model/estudianteModel.php';
session_start();
if($_SESSION['rol'] != 1) {
    header("location: ./");
}


$busqueda = strtolower($_REQUEST['busqueda']);
		if (empty($busqueda)) {
			header("location:  ../../view/sistema/lista_estudiantes.php");
		}

        $carrera = '';
			if($busqueda == 'PNF INFORMATICA'){

				$carrera = "OR carrera LIKE '%1%'";

			}else if($busqueda == 'PNF CONSTRUCCION CIVIL'){

				$carrera = "OR carrera LIKE '%2%'";

			}else if($busqueda == 'PNF MECANICA'){

				$carrera = "OR carrera LIKE '%3%'";

			}else if($busqueda == 'PNF PROSESAMIENTO DE ALIMENTOS'){

				$carrera = "OR carrera LIKE '%4%'";

			}else if($busqueda == 'PNF ELECTRONICA'){

				$carrera = "OR carrera LIKE '%5%'";

			}else if($busqueda == 'PNF PROSESAMIENTO DE ALIMENTOS'){

				$carrera = "OR carrera LIKE '%6%'";

			}else if($busqueda == 'PNF AGROALIMENTACION'){

				$carrera = "OR carrera LIKE '%7%'";

			}

            $search = new EstudianteModel();

			$search_count = $search->countStudentSeacrh($busqueda,$carrera);


			if($search_count > 0){
                foreach($search_count as $data){

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




			$query =  $search->GetStudentSerach($busqueda,$desde,$por_pagina);
			