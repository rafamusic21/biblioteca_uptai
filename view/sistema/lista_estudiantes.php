<?php

use function PHPSTORM_META\registerArgumentsSet;

   require_once("../../controller/estudainte/lista_estudiante.php");
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title> Lista de estudiante</title>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
<?php include "includes/header.php"; ?>

<section id="container">
		<h1> <i class="fa-solid fa-graduation-cap"></i>Lista de estudiante</h1>
		<a href="registro_estudiante.php" class="btn_new"><i class="fa-solid fa-plus"></i> Agregar  estudiante</a>

		<form action="buscar_estudiante.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="buscar">
			<button type="submit" class="btn_search"><i class="fas fa-search"></i></button>
		</form>
		<table>
			<tr>
				<th>ID</th>
				<th>C.I</th>
				<th>Nombre</th>
				<th>apellido</th>
				<th>numero telf</th>
				<th>carrera</th>
				<th>Acciones</th>
			</tr>
			<?php 

			
				if($query > 0){

					foreach($query as $data){
						if ($data["cedula"] == 0) {
							$ci = 'C/F';
						}else{
							$ci = $data["cedula"];
						}
 			?>
		
			<tr>
				<td><?php echo $data["id"] ;?></td>
				<td><?php echo $data["cedula"] ;?></td>
				<td><?php echo $data["nombre"] ;?></td>
				<td><?php echo $data["apellido"] ;?></td>
				<td><?php echo $data["numero"] ;?></td>
				<td><?php echo $data["carrera"] ;?></td>

				<td>
					<a class="link_edit" href="editar_estudiante.php?id=<?php echo $data["id"];?>"><i class="far fa-edit"></i> editar </a>
					<?php if($_SESSION['rol'] == 1){

					 ?>
					|
					<a class="link_delete" href="eliminar_estudiante.php?id=<?php echo $data["id"];?>"><i class="far fa-trash-alt"></i> eliminar</a>
					<?php }  ?>
				</td>
			</tr>
			<?php 

				}
			}

			?>

		</table>

		<div class="paginador">
			<ul>

			<?php
				if ($pagina !=1) {
			?>
				<li><a href="?pagina=<?php echo 1; ?>"> <i class="fa-solid fa-chevron-left"></i> </a></li>
				<li><a href="?pagina=<?php echo $pagina-1; ?>"> <i class="fa-solid fa-angles-left"></i> </a></li>
			<?php
				}
				for($i = 1; $i <= $total_paginas; $i++){

					if($i == $pagina){
						
						echo '<li class"pageSelected"> '. $i.'</li>';
					}else{
						echo '<li><a href="?pagina='.$i.'"> '. $i.'</a></li>';
					}
					


				}
				if ($pagina != $total_paginas) {
				
  			?>
				<li><a href="?pagina=<?php echo $pagina + 1; ?>"> <i class="fa-solid fa-angles-right"></i> </a></li>
				<li><a href="?pagina=<?php echo $total_paginas; ?>"> <i class="fa-solid fa-angle-right"></i> </a></li>
				<?php 
				  } ?>
			</ul>
		</div>


		<?php include "includes/chat_bot.php";?>
	
</body>
</html>