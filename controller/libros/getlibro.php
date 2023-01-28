<?php

include '../../model/librosModel.php';

session_start();


//buscar

$busqueda = strtolower($_REQUEST['busqueda']);
		if (empty($busqueda)) {
			header("location: ../../view/sistema/lista_libros.php");
		
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

$search = new LibrosModel();
$result_libro = $search->countLibrosSearch($busqueda,$carrera);

if($result_libro > 0){
    foreach($result_libro as $numlibro){

        $total_registro = $numlibro['total_registro'];
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

$query = $search->librosSearch($busqueda,$desde,$por_pagina);