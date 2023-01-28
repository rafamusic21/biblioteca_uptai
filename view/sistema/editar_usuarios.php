<?php
require_once("../../controller/user/update_user.php");



// MOSTRAR DATOS

  	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title> actualizar usuario</title>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php"; ?>



<section>
    <div class="form-container">
		<h4><i class="fas fa-user-plus"></i> Actualizarm Usuario</h4>
		<hr>
		<br>
	<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>

	<?php 

		$option = '';
		if($result_user > 0){

	 	foreach($result_user as $data){
		$iduser = $data['idusuario'];
		$nombre = $data['nombre_u'];
		$correo = $data['correo'];
		$usuario = $data['usuario'];
		$rol = $data['rol'];
		$idrol = $data['idrol'];
		$option = '<option value="'.$idrol.'"select>'.$rol.'</option>';
	?>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $iduser; ?>">
        <div class="control">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" placeholder="Nombre completo" value="<?php echo $nombre; ?>">
		</div>
        <div class="control">
			<label for="correo">Correo electronico</label>
			<input type="email" name="correo" id="correo" placeholder="correo electronico" value="<?php echo $correo; ?>">
		</div>
		<div class="control">
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario" placeholder="usuario" value="<?php echo $usuario; ?>">
		</div>
		<div class="control">
			<label for="clave">Clave</label>
			<input type="password" name="clave" id="clave" placeholder="clave">
		</div>
		<div class="control">
			<label for="rol">Tipo Usuario</label>

			<?php 
				$rol = new userModel();
				$result_rol = $rol->getrol();
			 ?>

		<select name="rol" id="rol" class="notItemOne">

			<?php 

			echo $option;

				if($result_rol > 0)
				{
					foreach($result_rol as $rol) {
			?>
		<option value="<?php echo $rol["idrol"] ;?>"><?php echo $rol["rol"] ;?></option>
			<?php
				   	}
				}
			?>

					  
		</select>
		</div>
				
        <div class="control">

			<input type="submit" value="actualizar usuario" class="btn_save">
                
		</div>

    </form>
	<?php 
			}
		}

	?>
        </div>
		
</section>
	<?php include "includes/chat_bot.php";?>
	

</body>
</html>