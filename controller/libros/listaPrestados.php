<?php
include '../../model/librosModel.php';
session_start();

$usuario_id = $_SESSION['idUser'];
$auditoria = new LibrosModel();
$auditoria->auditoriaprestamo($usuario_id);

	//paginador
    $libro = new LibrosModel();
    $result_libro = $libro->countLibroRetiro();

    foreach($result_libro as $result_register){

        $total_registro = $result_register['total_registro'];
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


    $query =  $libro->getLibroRetiro($desde,$por_pagina );

    
    