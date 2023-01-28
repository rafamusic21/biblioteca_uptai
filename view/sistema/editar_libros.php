<?php

require_once ("../../controller/libros/update_libros.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title> actualizar libros</title>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php"; ?>

<section>
    <div class="form-container">
		<h4><i class="fa-solid fa-book-bookmark"></i> Actualizarm Libros</h4>
		<hr>
		<br>
	<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>

	<?php 

		$option = '';
		if($result_libro > 0){

			foreach($result_libro as $data){
			$carrera = $data['carrera'];
			$idcarrera = $data['idcarrera'];
			$option = '<option value="'.$idcarrera.'"select>'.$carrera.'</option>';
	?>

	<form action="" method="post">
		<input type="hidden" name="cota" value="<?php echo  $data['cota']; ?>">
        <div class="control">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" placeholder="nombre del libro" value="<?php echo  $data['nombre_libro']; ?>">
			
		</div>
        <div class="control">
			<label for="autor">Autor</label>
			<input type="text" name="autor" id="autor" placeholder="autor del libro" value="<?php echo $data['autor']; ?>">
			
		</div>
		<div class="control">
			<label for="año">Año</label>
			<input type="date" name="año" id="año" placeholder="año" value="<?php echo $data['año_libro']; ?>">
		</div>
		<div class="control">
			<label for="ejemplar">numero de ejmplar</label>
			<input type="number" name="ejemplar" id="ejemplar" placeholder="numero de ejmplar" value="<?php echo $data['n_ejemplar']; ?>">
			
		</div>
		<div class="control">
		<label for="carrera">Carrera</label>

<?php 

	$carrera = new LibrosModel();
	$result_carrera = $carrera->getcarrera();
 ?>

<select name="carrera" id="carrera">

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
	}
?>

		  
</select>
		</div>
				
        <div class="control">

		<input type="submit" value="actualizar libro" class="btn_save">
                
		</div>

    </form>
	<?php }
		?>
        </div>
		
</section>


	<?php include "includes/chat_bot.php";?>
	

</body>
</html>