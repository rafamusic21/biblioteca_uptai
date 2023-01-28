<?php
include '../../model/librosModel.php';
session_start();

$usuario_id = $_SESSION['idUser'];
$auditoria = new LibrosModel();
$auditoria->auditoriaset($usuario_id);

if(!empty($_POST)){
    $alert = "";

    if(empty($_POST['cota']) || empty($_POST['nombre']) || empty($_POST['autor']) || empty($_POST['año']) || empty($_POST['numero']) || empty($_POST['carrera'])){
        $alert ='<p class="msg_error">todos los campos son obligatorios</p>';
    }else{
            $cota = $_POST['cota'];
			$nombre = $_POST['nombre'];
  			$autor = $_POST['autor'];
  			$año = $_POST['año'];
  			$numero = $_POST['numero'];
            $carrera = $_POST['carrera'];
			$usuario_id = $_SESSION['idUser'];

            $libro = new LibrosModel();

            if($libro->getCota($cota)){
                $alert ='<p class="msg_error">La cota ya existe</p>';
            }else{
                if($libro->setLibro($cota,$nombre,$autor,$año,$numero,$carrera,$usuario_id)){
                    $alert ='<p class="msg_error">error al guardar el libro</p>';
                }else{
                    $alert ='<p class="msg_save">Libro guardado correctamente</p>';
                }
            }
    }
}



