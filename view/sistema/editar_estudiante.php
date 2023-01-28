<?php
require_once("../../controller/estudainte/update_estudiante.php");




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title> actualizar estudiante</title>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php"; ?>

	<section>
    <div class="form-container">
		<h4><i class="fas fa-user-plus"></i> Actualizar Estudiantes</h4>
		<hr>
		<br>
	<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>

	<?php 

		$option = '';
		if($result_student > 0){

			 foreach($result_student as $data){
				$carrera = $data['carrera'];
				$idcarrera = $data['idcarrera'];
		  
				  $option = '<option value="'.$idcarrera.'"select>'.$carrera.'</option>';
	?>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <div class="control">
			<label for="cedula">Cedula</label>
			<input type="number" name="cedula" id="cedula" placeholder="Cedula"  value="<?php echo $data['cedula'];?>">
		
		</div>
        <div class="control">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" placeholder="Nombre completo" value="<?php echo $data['nombre']; ?>">
			

		</div>
		<div class="control">
			<label for="apellido">Apellido</label>
			<input type="text" name="apellido" id="apellido" placeholder="Apellido completo" value="<?php echo $data['apellido']; ?>">
			
	
		</div>
		<div class="control">
			<label for="telf">Numero de telefono</label>
			<input type="number" name="telf" id="telf"  placeholder="Numero de telefono" value="<?php echo  $data['numero']; ?>">
			 

		</div>
		<div class="control">
		<label for="carrera">Carrera</label>

<?php 
	
	$carrera = new EstudianteModel();
	$result_carrera = $carrera->getcarrera();
 ?>

<select name="carrera" id="carrera" class="notItemOne">

<?php 

echo $option;

	if($result_carrera > 0)
	{
		foreach($result_carrera as $data) {
?>
  <option value="<?php echo $data["idcarrera"] ;?>"><?php echo $data["nom_carrera"] ;?></option>
<?php
		   }
	}
?>

		  
</select>
		
		</div>
				
        <div class="control">

		<input type="submit" value="actualizar estudiante" class="btn_save">
                
		</div>

    </form>
	<?php
			 }
			}
		?>
        </div>
		
</section>



	<?php include "includes/chat_bot.php";?>
	

</body>
</html>