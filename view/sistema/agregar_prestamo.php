<?php 
 require_once ("../../controller/libros/prestamo_libro.php");

	


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prestamo de libros</title>
	<?php include "includes/scripts.php";?>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php";?>
	<section>
        <div class="form-container">

		<h4><i class="fa-solid fa-book-medical fa-4x" style="color: #3CCD45"></i></h4>
		
		<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>
		<br>
		<br>
		<h4>¿Desea prestar este libro?</h4>
		<div>
			<label>Nombre:</label> <span><?php echo $nombre;?></span>
		</div>
		<div>
			<label>Autor:</label> <span><?php echo $autor;?></span>
		</div>
		<form action="" method="post">
		<div class="control">
			<br>
			<label for="cedula">cedula</label>
			<input class="prestamo" type="number" name="cedula" value="CI del estudainte" placeholder="Ingrese la cedula">	
		</div>
		<input type="hidden" name="cota" value="<?php echo $cota?>">
				<input type="submit" value="prestamo" class="btn_cancel">
				<a href="lista_libros.php" class="btn_ok">Cancelar</a>	

        </form>
        </div>
		
</section>
	<?php include "includes/chat_bot.php";?>
	
	
</body>
</html>