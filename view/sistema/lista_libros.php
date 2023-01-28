<?php
    require_once ("../../controller/libros/libros.php");
	
	//$id_user = $_SESSION['idUser'];	
	//mysqli_query($conection,"INSERT INTO auditoria_libro(fecha_audi_libro,hora_audi_libro,lista_libro_audi) VALUES(CURRENT_DATE(),CURRENT_TIME(),$id_user)");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title> Lista de libros</title>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
<?php include "includes/header.php"; ?>

<section id="container">
		<h1> <i class="fa-solid fa-book-bookmark"></i> Lista de libros</h1>
		<a href="registro_libros.php" class="btn_new"><i class="fa-solid fa-plus"></i> Agregar  libros</a>

		<form action="buscar_libros.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="buscar">
			<button type="submit" class="btn_search"><i class="fas fa-search"></i></button>
		</form>
		<table>
			<tr>
				<th>Cota</th>
				<th>nombre</th>
				<th>autor</th>
				<th>año</th>
				<th>numero de ejemplar</th>
				<th>carrera</th>
				<th>Estado</th>
				<th>Acciones</th>
				
			</tr>
			<?php 
				if($query > 0){

					foreach ($query as $data) {
						

						if ($data["n_ejemplar"] == 0){
							$estado = 'No disponible';
						}else{
							$estado = 'Disponible';
						}
						
                   
 			?>
		
			<tr>
				<td><?php echo $data["cota"] ;?></td>
				<td><?php echo $data["nombre_libro"] ;?></td>
				<td><?php echo $data["autor"] ;?></td>
				<td><?php echo $data["año_libro"] ;?></td>
				<td><?php echo $data["n_ejemplar"] ;?></td>
				<td><?php echo $data["carrera"] ;?></td>
				<td><?php echo $estado ; ?></td>

				<td>
					<a class="link_edit" href="agregar_prestamo.php?cota=<?php echo $data["cota"];?>"><i class="fa-solid fa-plus"></i> prestamo </a>
					|
					<a class="link_edit" href="editar_libros.php?id=<?php echo $data["cota"];?>"><i class="far fa-edit"></i> editar </a>
					<?php if($_SESSION['rol'] == 1){

					 ?>
					|
					<a class="link_delete" href="eliminar_libros.php?id=<?php echo $data["cota"];?>"><i class="far fa-trash-alt"></i> eliminar</a>
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