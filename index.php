<?php
session_start();
if(!empty($_SESSION['active']))
{
	if($_SESSION['rol'] != 3){

        header('location: view/sistema/');
		
    }else{
        header('location: view/lector/');
    }
	
}
?>
<html lang="es">
<head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <title>Biblioteca UPTAI</title>
     <?php
	 	include "public/includes/scripts1.php";
	 ?>
<link rel="icon" href="view/sistema/img/logoiut.png">
</head>
<body>


	<header class="main-header" >
		<div class="logo">
			<img src="public/img/logoiut.png" alt="logo del iut">
			<h2 class="letra"> Biblioteca Digital UPTAI </h2>
		</div>
		<nav>
				
			
			<a class="letra" href="view/login.php">Login </a>
				
		</nav>
	</header>

	<section class="banner">
	<img src="public/img/header.jpg" alt="" class="banner__img">
</section>


	<main>
	<section class="group group--color">
		<div class="conteiner">
			<h2 class="main__title">Bienvenidos</h2>
			<h3 class="cita"> "Una biblioteca no es un lujo, sino una de las necesidades de la vida"Henry Ward Beecher.</h3>
		</div>
	</section>
	
	<section class=" group main__about__description">
		<div class="container container--flex">
			<div class="column column--50">
				<img class="img" src="public/img/studio.jpg" alt="">
			</div>
			<div class="column column--50">
				<h3 class="column__title">Misión</h3>
				<p class="column__txt">formar técnicos superiores universitarios y especialistas con criterios de calidad, excelencia y tecnología de vanguardia, a través del diseño, desarrollo e implementación de servicios educativos, actividades de investigación y de extensión, vinculados a las comunidades y sectores productivos, aptos para desempeñarse en las áreas prioritarias para el desarrollo económico y social del país.</p>
			</div>
		</div>
		<div class="container container--flex">
			
			<div class="column column--50">
				<h3 class="column__title">Visión</h3>
				<p class="column__txt">ser una institución de educación superior con proyección internacional, orientada a elevar el nivel de excelencia en la formación tecnológica y profesional, que contribuya con el desarrollo sustentable de la nación.</p>
			</div>
			<div class="column column--50">
				<img class="img" src="public/img/lentes.jpg" alt="">
			</div>
		</div>
		<div class="marquee">
			<div>  Biblioteca UPTAI      |   horario de trabajo 8:00 am-1:00 pm. </div>
		</div>
		
	</section>
		</br>
		</br>
			<div class="conteiner">
				<h2 class="main__title">Areas de estudio</h2>
			</div>
		<section class="gallery" id="galeria">
		<div class="container container--flex">
				<div class="column column--50-25"><img src="public/img/informatica.jpg" class="img-galeria" alt=""></div> 
				
				<div class="column column--50-25"><img src="public/img/meca.jpg" class="img-galeria" alt=""> </div>
				<div class="column column--50-25"><img src="public/img/electronica.jpg" class="img-galeria" alt=""></div>
				<div class="column column--50-25"><img src="public/img/pro.jpg" class="img-galeria" alt=""></div>
				<div class="column column--50-25"><img src="public/img/civil.jpg" class="img-galeria" alt=""></div>
				<div class="column column--50-25"><img src="public/img/agro.png" class="img-galeria" alt=""></div>
				<div class="column column--50-25"><img src="public/img/electri.jpg" class="img-galeria " alt=""></div>
				<div class="column column--50-25"><img src="public/img/sturio2.jpg" class="img-galeria " alt=""></div>
			</div>
		</section>

			<div class="subtitulo1">
				<h2 > Somos profesionales en:</h2>
			</div>
			
			<table class="pre-footer">
				
				<tr>
					<td><img src="public/img/equipo3.jpg" alt=""></td>
					<td><img src="public/img/equipo.jpg" alt=""></td>
					<td><img src="public/img/seguridad.jpg" alt=""></td>
				</tr>
				<tr>
					<td><h3 class="n-expert">Registro</h2></td>
					<td><h3 class="n-expert">Eficacia</h2>	</td>
					<td><h3 class="n-expert">Seguridad</h2>	</td>
				</tr>
				
			</table>
			
	</main>

	<footer class="main-footer">
	<div class="container container--flex">
		<div class="column column--50">
             <h2 class="column__title">
				Biblioteca UPTAI
			 </h2>
			 <p class="column__txt">
				Biblioteca central Dr. Federico Rivero Palacio, excelencia y saber.
			 </p>      
		</div>
		
	</div>
</footer>
  
</body>
</html>