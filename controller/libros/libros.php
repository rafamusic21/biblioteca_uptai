<?php

include '../../model/librosModel.php';

session_start();

$usuario_id = $_SESSION['idUser'];
$auditoria = new LibrosModel();
$auditoria->auditorialista($usuario_id);

//paginador
$libro = new LibrosModel();
$result_libro = $libro->countLibro();
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




$query =  $libro->getLibros($desde,$por_pagina );