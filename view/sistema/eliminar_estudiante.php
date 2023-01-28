<?php 
require_once ("../../controller/estudainte/delet_estudiante.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar estudiante</title>
	<?php include "includes/scripts.php";?>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php";?>


	<section>
        <div class="form-container">

		<h4><i class="fa-solid fa-graduation-cap fa-4x" style="color: #e66262"></i></h4>
		
		<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>
		<br>
		<h4>¿Desea eliminar este estudiante?</h4>
		<br>
		<div>
			<label>Nombre:</label> <span><?php echo $nombre;?></span>
		</div>
		<br>
		<div>
			<label> Apellido:</label> <span><?php echo $apellido;?></span>
		</div>
		<br>
		<div>
			<label>C.I:</label>  <span><?php echo $ci;?></span>
		</div>
		<br>
		<div>
			<label>Carrera:</label>   <span><?php echo $carrera;?></span>
		</div>
		<br>
		<form action="" method="post">
		<br>
		<input type="hidden" name="id" value="<?php echo $idestudiante;?>">
				<input type="submit" value="Aceptar" class="btn_cancel">
				<a href="lista_estudiantes.php" class="btn_ok">Cancelar</a>
        </form>
        </div>
		
</section>





	<?php include "includes/chat_bot.php";?>
	
	
</body>
</html>
