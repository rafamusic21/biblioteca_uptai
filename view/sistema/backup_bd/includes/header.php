<?php 


if(empty($_SESSION['active']) || $_SESSION['rol'] == 3 )
{

	header('location: ../../');
}

 ?>

<header>
	<div class="header">
        <div class="logo">
			<img src="../../../sistema/img/logoiut.png" alt="logo del iut">
			<h2 class="letra" > Biblioteca Digital UPTAI </h2>
		</div>
		<div class="optionsBar">
			<div>
				<p>Venezuela, <?php echo fechaC(); ?></p>
			</div>
			<div>	
				<span class="user"><?php echo $_SESSION['user']  ;?> </span>
			    
		</div>
		<i class="fa-regular fa-user" style="color: #fffc39"></i>
			<div>
				
			</div>
			<div>
				<a href="../../salir.php"><i class="fa-solid fa-power-off" style="color: #fffc39"></i></a>
			</div>
				
		</div>
	</div>
<?php include "nav.php"?>

</header>

