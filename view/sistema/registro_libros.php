<?php require_once '../../controller/libros/validar_registroLibros.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title>Registro de libros</title>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php"; ?>

	<section>
        <div class="form-container">
		<h4><i class="fa-solid fa-book-bookmark"></i> Registro de libros</h4>
		<hr>
		<br>
		<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>
		<form action="" method="post">


                <div class="control">
					<label for="cota">Cota</label>
					<input type="text" name="cota" id="cota" placeholder="Cota del libro">	
				</div>
                <div class="control">
					<label for="nombre">nombre del libro</label>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre del libro">
				</div>
				<div class="control">
				<label for="autor">Autor</label>
			<input type="text" name="autor" id="autor" placeholder="Autor del libro">
					
				</div>
				<div class="control">
				<label for="año">Año del libro</label>
			<input class="año" type="date" name="año" id="año" placeholder="Año del libro">
					
				</div>
				<div class="control">
				<label for="numero">Número de ejemplar</label>
			<input type="number" name="numero" id="numero" placeholder="Número de ejemplar">
					
				</div>
				<div class="control">
				<label for="carrera">carrera</label>

<?php 

	$carrera = new LibrosModel();
	$result_carrera = $carrera->getcarrera();
 ?>

<select name="carrera" id="carrera">

<?php 
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

				<input type="submit" value="Registrar libro" class="btn_save">
                
				</div>

            </form>
        </div>
		
</section>

	<?php include "includes/chat_bot.php";?>
	

</body>
</html>


