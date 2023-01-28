<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>biblioteca virtual</title>
	<link rel="icon" href="../../img/logoiut.png">
	<?php include "../includes/scripts.php";?>

	

	
</head>
<body>
<?php include "../includes/header.php";?>

<section>
        <div class="form-container">
		<a href="./Backup.php" class="btn_cancel">Realizar copia de seguridad</a>
		<form action="./Restore.php" method="POST">
                <div class="control">
				<label>Selecciona un punto de restauración</label><br>
                </div>

                
        <select name="restorePoint">
			<option value="" disabled="" selected="">Selecciona un punto de restauración</option>
			<?php
				include_once './Connet.php';
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
				                if(is_dir($ruta_completa)){
				                }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                }
				            }
				        }
				        closedir($aux);
				    }
				}else{
				    echo $ruta." No es ruta válida";
				}
			?>
		</select>
		<button type="submit" >Restaurar</button>
            </form>
        </div>
		
    </section>

	<?php include "../includes/chat_bot.php";?>
</body>
</html>
