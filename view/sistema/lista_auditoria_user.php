<?php 
require_once("../../controller/auditoria/get_audi_user.php");


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>lista de auditoria usuarios</title>
	<?php include "includes/scripts.php";?>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php";?>
	<section id="container">
		<h1><i class="fas fa-users"></i> Lista de auditoria de usuarios </h1>
		

		
		<table>
			<tr>
				<th>ID_AUDITORIA</th>
				<th>Usuario</th>
				<th>creacion de registro</th>
                <th>lista</th>
                <th>edicion</th>
                <th>eliminacion</th>
				<th>hora</th>
				<th>fecha</th>
				
			</tr>
			<?php 

			if($query > 0){

				foreach($query as $data){
					
			 ?>
			<tr>
				<td><?php echo $data["id_audi_user"] ;?></td>
				<td><?php echo $data["usuario"]; ?></td>
				<td><?php echo $data["agg_user_audi"] ;?></td>
                <td><?php echo $data["lista_user_audi"] ;?></td>
				<td><?php echo $data["edit_user_audi"] ;?></td>
				<td><?php echo $data["delet_user_audi"] ;?></td>
                <td><?php echo $data["hora_user_audi"] ;?></td>
                <td><?php echo $data["fecha_user_audi"] ;?></td>
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