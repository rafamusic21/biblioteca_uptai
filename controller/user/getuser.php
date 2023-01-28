<?php
include '../../model/userModel.php';
session_start();
	if($_SESSION['rol'] != 1) {
		header("location: ./");
	}

    $busqueda = strtolower($_REQUEST['busqueda']);
		if (empty($busqueda)) {
			header("location: ../../view/sistema/lista_usaurios.php");
			mysqli_close($conection);
		}


    $rol = '';
			if($busqueda == 'administrador'){

				$rol = "OR rol LIKE '%1%'";

			}else if($busqueda == 'colavorador'){

				$rol = "OR rol LIKE '%2%'";

			}else if($busqueda == 'lector'){

				$rol = "OR rol LIKE '%3%'";
			}

			$search = new UserModel();
            $result_user = $search->countUserSearch($busqueda,$rol);

            if($result_user > 0){
                foreach($result_user as $numuser){
            
                    $total_registro = $numuser['total_registro'];
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




			$query = $search->getUserListaSearch($busqueda,$desde,$por_pagina);