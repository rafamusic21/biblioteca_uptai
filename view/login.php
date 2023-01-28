<?php

include '../controller/login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/css/login.css">

</head>
<body>
    <section>
        <div class="form-container">
            <h1>Iniciar Sesion</h1>
            <form action="" method="post">
                <div class="control">
                    <label for="name">Name</label>
                    <input type="text" name="usuario" placeholder="usuario">
                </div>
                <div class="control">
                    <label for="psw">Password</label>
                    <input type="password" name="clave" placeholder="contraseña">
                </div>
                <div class="control">
                    <input type="submit" value="login">
                </div>
                <div class="alert"><?php echo isset($alert) ? $alert: '' ; ?></div>
            </form>
        </div>
		
    </section>
</body>
</html>

