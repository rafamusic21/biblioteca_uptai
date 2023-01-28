<?php 
	session_start();
	if($_SESSION['rol'] != 1 and $_SESSION['rol'] != 2) 
	{
		header("location: ./");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reportes</title>
	<?php 
	include "includes/scripts.php";?>
	<link rel="icon" href="img/logoiut.png">
</head>
<body>
	<?php include "includes/header.php";?>
	<section id="container">
		<div class="divContainer">
			
			<div class="reportes_a">
				<a href="pdf/reporte_usuarios.php" target="_blank">
					<i class="fas fa-users"></i>
					<p>
						<strong>Reporte de usuarios en PDF</strong><br>
					</p>
				</a>
				
				<a href="pdf/reporte_estudiantes.php" target="_blank">
				<i class="fa-solid fa-graduation-cap"></i>
					<p>
						<strong> Reporte de estudiantes en  PDF</strong><br>
						
					</p>
				</a>
				
				<a href="pdf/reporte_libros.php" target="_blank">
				<i class="fa-solid fa-book-atlas"></i>
					<p>
						<strong> Reporte de libros en PDF </strong><br>
						
					</p>
				</a>
				<a href="pdf/reporte_prestamos.php" target="_blank">
				<i class="fa-solid fa-hourglass-end"></i>
					<p>
						<strong> Registro de prestamos en PDF</strong><br>
						
					</p>
				</a>

				
				<a href="pdf/reporte_eliminacion_estudiante.php" target="_blank">
				<i class="fa-solid fa-ban"></i>
					<p>
						<strong> Registro de estudiantes eliminados en PDF</strong><br>
						
					</p>
				</a>
				

				
				


				
			</div>
		<section id="container">
		<div class="divContainer">
			<div class="reportes_a">

				<a href="pdf/reporte_devolucion.php" target="_blank">
				<i class="fa-solid fa-arrow-right-arrow-left"></i>
					<p>
						<strong> Libros retornados en PDF</strong><br>
						
					</p>
				</a>

				<a href="pdf/reporte_eliminacion_libros.php" target="_blank">
				<i class="fa-solid fa-trash-arrow-up"></i>
					<p>
						<strong>Reporte de libros eliminados en PDF</strong><br>
					</p>
				</a>
				
				<a href="pdf/reporte_eliminacion_usuario.php" target="_blank">
				<i class="fa-solid fa-person-circle-minus"></i>
					<p>
						<strong> Reporte de usuarios eliminados en PDF</strong><br>
						
					</p>
				</a>

				<a href="pdf/reporte_respaldo_libros.php" target="_blank">
				<i class="fa-solid fa-cloud-arrow-up"></i>
					<p>
						<strong> Reporte de respaldo de los libros en  PDF</strong><br>
						
					</p>
				</a>
				<a href="pdf/reporte_respaldo_usuarios.php" target="_blank">
				<i class="fa-solid fa-cloud-arrow-up"></i>
					<p>
						<strong> Reporte de respaldo de los usuarios en  PDF</strong><br>
						
					</p>
				</a>
				
		</div>




		<?php
				if($_SESSION['rol'] == 1) { ?>

		<section id="container">
		<div class="divContainer">
			<div class="reportes_a">

				<a href="pdf/reporte_login.php" target="_blank">
				<i class="fa-solid fa-user"></i>
					<p>
						<strong> Lista de login en PDF</strong><br>
						
					</p>
				</a>

				<a href="pdf/reporte_logout.php" target="_blank">
				<i class="fa-sharp fa-solid fa-list-check"></i>
					<p>
						<strong>Lista logout en PDF</strong><br>
					</p>
				</a>
				
				<a href="pdf/reporte_user.php" target="_blank">
				<i class="fa-solid fa-circle-check"></i>
					<p>
						<strong> Lista auditoria user de PDF</strong><br>
						
					</p>
				</a>

				<a href="pdf/reporte_aud_estudiante.php" target="_blank">
				<i class="fa-regular fa-list-ol"></i>
					<p>
						<strong> Lista de auditoria estudiante en  PDF</strong><br>
						
					</p>
				</a>
				<a href="pdf/reporte_aud_libro.php" target="_blank">
				<i class="fa-solid fa-book-open-reader"></i>
					<p>
						<strong> Lista de auditoria de libros en  PDF</strong><br>
						
					</p>
				</a>
				
		</div>
		<?php }?>
	</section>
	<?php include "includes/chat_bot.php";?>
	
	
</body>
</html>