<?php 

require_once("../../controller/libros/delet_libros.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar libro</title>
	<link rel="icon" href="img/logoiut.png">
	<?php include "includes/scripts.php";?>
	
</head>
<body>
	<?php include "includes/header.php";?>
	<section>
        <div class="form-container">

		<h4><i class="fa-solid fa-book-bookmark fa-4x" style="color: #e66262"></i></h4>
		
		<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>
		<br>
		<h4>¿Desea eliminar este libro?</h4>
		<br>
		<div>
			<label>Nombre:</label> <span><?php echo $nombre;?></span>
		</div>
		<div>
			<label>Autor:</label> <span><?php echo $autor;?></span>
		</div>
		<div>
			<label>Carrera:</label>  <span><?php echo $carrera;?></span>
		</div>
		<form action="" method="post">
		<br>
		<<input type="hidden" name="cota" value="<?php echo $cota;?>">
				<input type="submit" value="Aceptar" class="btn_cancel">
				<a href="lista_libros.php" class="btn_ok">Cancelar</a>
        </form>
        </div>
		
</section>

	<?php include "includes/chat_bot.php";?>
	
	
</body>
</html>