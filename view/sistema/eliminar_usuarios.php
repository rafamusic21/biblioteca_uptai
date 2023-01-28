<?php 
require_once("../../controller/user/delet_user.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eliminar usuario</title>
	<link rel="icon" href="img/logoiut.png">
	<?php include "includes/scripts.php";?>
	
</head>
<body>
	<?php include "includes/header.php";?>

	<section>
        <div class="form-container">

		<h4><i class="fas fa-user-times fa-4x" style="color: #e66262"></i></h4>
		
		<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>
		<br>
		<h4>¿Desea eliminar este usuario?</h4>
		<br>
		<div>
			<label>Nombre:</label> <span><?php echo $nombre;?></span>
		</div>
		<div>
			<label>Usuario:</label>  <span><?php echo $usuario;?></span>
		</div>
		<div>
			<label>Rol:</label>  <span><?php echo $rol;?></span></p>
		</div>
		<form action="" method="post">
		<br>
		<input type="hidden" name="idusuario" value="<?php echo $idusuario;?>">
		<input type="submit" value="Aceptar" class="btn_cancel">
		<a href="lista_usuarios.php" class="btn_ok">Cancelar</a>
        </form>
        </div>
		
</section>

	<?php include "includes/chat_bot.php";?>
	
	
</body>
</html>