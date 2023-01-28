<?php 
	require_once("../../controller/user/listalusuarios.php");
	
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lista de usuarios</title>
	<?php include "includes/scripts.php";?>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php";?>
	<section id="container">
		<h1><i class="fas fa-users"></i> Lista de usuarios</h1>
		<a href="registro_usuario.php" class="btn_new"><i class="fa-solid fa-plus"></i> Crear Usuario</a>

		<form action="buscar_usuarios.php" method="get" class="form_search">
			<input type="text" name="busqueda" id="busqueda" placeholder="buscar">
			<button type="submit" class="btn_search"><i class="fas fa-search"></i></button>
		</form>
		<table>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Usuario</th>
				<th>Rol</th>
				<th>Acciones</th>
			</tr>
			<?php 

			

			if($query > 0){

				foreach ($query as $data) {
					
			 ?>
			<tr>
				<td><?php echo $data["idusuario"] ;?></td>
				<td><?php echo $data["nombre_u"]; ?></td>
				<td><?php echo $data["correo"] ;?></td>
				<td><?php echo $data["usuario"] ;?></td>
				<td><?php echo $data["rol"] ;?></td>
				<td>
					<a class="link_edit" href="editar_usuarios.php?id=<?php echo $data["idusuario"];?>"><i class="far fa-edit"></i> editar </a>

					<?php 
						if ($data["idusuario"] != 1) { ?>

					|
					<a class="link_delete" href="eliminar_usuarios.php?id=<?php echo $data["idusuario"];?>"><i class="far fa-trash-alt"></i> eliminar</a>

					<?php } ?>
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

	</section>

	<?php include "includes/chat_bot.php";?>
	
</body>
</html>