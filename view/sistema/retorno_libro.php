<?php require_once '../../controller/libros/retornoLibros.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title>Retorno de libros</title>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php"; ?>

	<section>
        <div class="form-container">
		<h4><i class="fa-solid fa-arrow-right-arrow-left"></i> Retorno de libros</h4>
		<hr>
		<br>
		<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>

		<form action="" method="post">


                <div class="control">
				<label for="cota">Cota</label>
			<input type="text" name="cota" id="cota" placeholder="Cota del libro">
				</div>
                <div class="control">
				<label for="ci">Cedula del estudiante</label>
			<input type="number" name="ci" id="ci" placeholder="Número de cedula">
				</div>
                <div class="control">

				<input type="submit" value="Retornar libro" class="btn_save">
                
				</div>

            </form>
        </div>
		
</section>
	<?php include "includes/chat_bot.php";?>
	

</body>
</html>