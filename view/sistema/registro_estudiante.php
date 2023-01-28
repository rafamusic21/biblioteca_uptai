<?php  require_once '../../controller/estudainte/registro_estudiante.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title> reguistro estudiante</title>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php"; ?>

	<section>
        <div class="form-container">
		<h4><i class="fa-solid fa-graduation-cap"></i> Registro de estudiante</h4>
		<hr>
		<br>
		<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>

		<form action="" method="post">


                <div class="control">
				<label for="ci">C.I</label>
			<input type="number" name="ci" id="ci" placeholder="Numero de cedula">

				</div>
                <div class="control">
				
				<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
				</div>
				<div class="control">
				
				<label for="apellido">Apellido</label>
			<input type="text" name="apellido" id="apellido" placeholder="Apellido completo">
			
				</div>
				<div class="control">
				
				<label for="telf">Numero de telefono</label>
			<input type="number" name="telf" id="telf"  placeholder="Numero de telefono">
				</div>
				<div class="control">
				<label for="carrera">Carrera</label>
			<?php 			
			

				$carrera = new EstudianteModel();
				
				$result_carrera = $carrera->getcarrera();	
			?>

			<select name="carrera" id="carrera">

				<?php
					if($result_carrera > 0)
				{
					foreach($result_carrera as $data)
					{
				?>
					
		 <option value="<?php echo $data["idcarrera"] ?>"><?php echo $data["nom_carrera"]?></option>
				  <?php

					}
				}
				?>
			</select>
				</div>
				
                <div class="control">

				<input type="submit" value="Guardar estudiante" class="btn_save">
                
				</div>

            </form>
        </div>
		
</section>
	


	<?php include "includes/chat_bot.php";?>
	

</body>
</html>