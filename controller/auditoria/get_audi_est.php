<?php
include '../../model/auditoriaModel.php';
session_start();
if($_SESSION['rol'] != 1) {
    header("location: ./");
}

$auditoria =  new AuditoriaModel();
$sql_register =  $auditoria->countAuditoriaEst();
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




$query =  $auditoria->getAuditoriaEst($desde,$por_pagina);