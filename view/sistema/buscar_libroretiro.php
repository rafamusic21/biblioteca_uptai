<?php 
 require_once ("../../controller/libros/getlibroRetiro.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lista de libros</title>
	<?php include "includes/scripts.php";?>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php";?>
	<section id="container">

    <?php 

		


		 ?>

		<h1> <i class="fa-solid fa-book-bookmark"></i> Lista de libros prestados</h1>
		<a href="lista_libros.php" class="btn_new"><i class="fa-solid fa-plus"></i> Agregar  prestamo</a>

		<form action="buscar_libroretiro.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="buscar">
			<button type="submit" class="btn_search"><i class="fas fa-search"></i></button>
		</form>
		<table>
			<tr>
				<th>Cota</th>
				<th>fecha</th>
				<th>hora</th>
				<th>estudainte</th>
                <th>cedula</th>
				<th>fecha de entrega</th>
				
			</tr>
			<?php 

				//paginador
				
				if($query > 0){

					foreach($query as $data) {
						
                   
 			?>
		
			<tr>
				<td><?php echo $data["cota"] ;?></td>
				<td><?php echo $data["fecha_retiro"] ;?></td>
				<td><?php echo $data["hora_retiro"] ;?></td>
				<td><?php echo $data["nombre"] ;?></td>
				<td><?php echo $data["cedula"] ;?></td>
				<td><?php echo $data["fecha_entrega"] ;?></td>
			
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

	</section>

	<?php include "includes/chat_bot.php";?>
	
	
</body>
</html>