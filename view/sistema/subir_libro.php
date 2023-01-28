<?php
    session_start();
    $alert ='';
    $tamaño = 4096;
    if(isset($_FILES['documento']) && $_FILES['documento']['type'] == 'application/pdf') {

        

            move_uploaded_file( $_FILES['documento']['tmp_name'], 'upload/'. $_FILES['documento']['name']);
            $alert ='<p class="msg_save">Libro suvido correctamente</p>';
        
    
       
     }else if(isset($_FILES['documento']) && $_FILES['documento']['type'] != 'application/pdf'){
        $alert ='<p class="msg_error">solo se admiten documentos de tipo PDF</p>';
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>biblioteca virtual</title>
<?php 
	include "includes/scripts.php";
	
?>
	<link rel="icon" href="img/logoiut.png">
</head>
<body>
	<?php include "includes/header.php";?>

    <section>
        <div class="form-container">

		<h4 style="text-transform: uppercase; font-family: Splash;"><i class="fa-solid fa-graduation-cap fa-3x"></i> SUBIR LIBRO</h4>
		
		<div class="alert"> <?php echo isset($alert) ? $alert : ''; ?> </div>
		<br>
		<br>
        <form action="" method="post"  enctype="multipart/form-data">
            
            <input type="file" name="documento" style="color: white; font-size: 1em;">

            <div class="control">

            <input type="submit" value="subir libro" class="btn_save">
    
</div>
			
     		
		</form>		
        </div>
		
</section>

   
	<?php include "includes/chat_bot.php";?>
	
	
</body>
</html>