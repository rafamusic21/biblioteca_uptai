<?php
include '../../model/librosModel.php';
session_start();
	if($_SESSION['rol'] != 1) {
		header("location: ./");
	}
	
$busqueda = strtolower($_REQUEST['busqueda']);
		if (empty($busqueda)) {
			header("location: ../../view/sistema/lista_libros.php");
			mysqli_close($conection);
		}

    $search = new LibrosModel();
    $result_libro = $search->countLibrosRetiroSearch($busqueda);

    if($result_libro > 0){
        foreach($result_libro as $result_register){

            $total_registro = $result_register['total_registro'];
        }
    }



$por_pagina = 5;

        if(empty($_GET['pagina'])){
            $pagina = 1;
        }else{
            $pagina = $_GET['pagina'];
        }

$desde = ($pagina-1) * $por_pagina;
$total_paginas = ceil($total_registro / $por_pagina);




$query = $search->librosRetrioSearch($busqueda,$desde,$por_pagina);