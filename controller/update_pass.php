<?php 
		
		
		include '../../model/updatePassModel.php';
		if(!empty($_POST))
  	{
  		
  		$alert ='';
  		if(empty($_POST['txtPassUser']) || empty($_POST['txtNewPassUser']) || empty($_POST['txtPassConfirm']))
  		{
  			$alert ='<p class="msg_error">todos los campos son obligatorios</p>';
  		}else{
  			
  			
  			$idusuario = $_SESSION['idUser'];
  			$passuser = md5($_POST['txtPassUser']);
  			$newpass = md5($_POST['txtNewPassUser']);
  			$confirpass = md5($_POST['txtPassConfirm']);

            $pass = new updatePassModel();
            
  			if($pass->getPass($idusuario,$passuser)){

  			
                  if($newpass != $confirpass){
                      $alert ='<p class="msg_error">La confirmacion de la clave es incorecta</p>';
                  }else{


                     
                  if($pass->updatePass($idusuario,$confirpass)){
                      $alert ='<p class="msg_save">clave actualizada correctamente</p>';
                  }else{
                      $alert ='<p class="msg_error">error al actualizar la clave</p>';
                      } 
              

              }
  			}else{
                $alert ='<p class="msg_error">la clave es incorrecta</p>';
   
  			}
  		}
  		
  	}

	 ?>