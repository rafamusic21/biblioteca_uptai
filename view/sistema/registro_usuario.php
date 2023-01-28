<?php  require_once("../../controller/user/registro_user.php");?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php";?>
	<title> reguistro usuario</title>
	<link rel="icon" href="img/logoiut.png">
	
</head>
<body>
	<?php include "includes/header.php"; ?>

	<section>
        <div class="form-container">
		<h4><i class="fas fa-user-plus"></i> Registro Usuario</h4>
		<hr>
		<br>
		<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>

		<form action="" method="post">


                <div class="control">
				<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
				</div>
                <div class="control">
				<label for="correo">Correo electronico</label>
			<input type="email" name="correo" id="correo" placeholder="correo electronico">
				</div>
				<div class="control">
				<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario" placeholder="usuario">
			
				</div>
				<div class="control">
				<label for="clave">Clave</label>
			<input type="password" name="clave" id="clave" placeholder="clave">
				</div>
				<div class="control">
				<label for="rol">Tipo Usuario</label>

<?php 

$rol = new UserModel();
$result_rol = $rol->getrol();
 ?>

<select  name="rol" id="rol">

<?php 
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

				<input type="submit" value="crear usuario" class="btn_save">
                
				</div>

            </form>
        </div>
		
</section>



	<?php include "includes/chat_bot.php";?>
	

</body>
</html>