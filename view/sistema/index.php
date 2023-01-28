<?php
    session_start();
	
	include '../../controller/update_pass.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>biblioteca virtual</title>
	<link rel="icon" href="img/logoiut.png">
<?php 
	include "includes/scripts.php";
	
	
?>

	
</head>
<body>
	<?php include "includes/header.php";?>
	<section>
        <div class="form-container">
		<div class="logoUser">
					<img src="../sistema/img/user.png" alt="logo del iut">
					</div>
					<div class="divDataUser">
						<h4>Informacion Personal</h4>
	

						<div>
							<label>Nombre:</label> <span><?= $_SESSION['nombre']; ?></span>
						</div>
						<div>
							<label>Correo:</label> <span><?= $_SESSION['email']; ?></span>
						</div>
						<h4>Datos del usuario</h4>
						<div>
							<label>Rol:</label> <span><?= $_SESSION['rol_name']; ?></span>
						</div>
						<div>
							<label>Usuario:</label> <span><?= $_SESSION['user']; ?></span>
						</div>

		<h4>Cambiar contraseña</h4>
		<form action="" method="post">


                <div class="control">
					<label for="txtPassUser">Contraseña actual</label>
					<input type="password" name="txtPassUser" id="txtPassUser" placeholder="Contraseña actual">
                </div>
                <div class="control">
					<label for="txtNewPassUser">Nueva contraseña</label>
					<input type="password" name="txtNewPassUser" id="txtNewPassUser" placeholder="Nueva contraseña">  
                </div>
				<div class="control">
					<label for="txtPassConfirm">Confirme contraseña</label>
					<input type="password" name="txtPassConfirm" id="txtPassConfirm" placeholder="Confirme contraseña">
				</div>
                <div class="control">
                    <input type="submit" value="actualizar usuario" class="btn_save">
                </div>
                <div class="alert"><?php echo isset($alert) ? $alert: '' ; ?></div>
            </form>
        </div>
		
    </section>
	<?php include "includes/chat_bot.php";?>

	
	
</body>
</html>