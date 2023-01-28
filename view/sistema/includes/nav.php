<nav>

			<ul >	
				<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>	
				<li class="principal">
					<a href="#"><i class="fa-solid fa-book-bookmark"></i> Registro de libros</a>
					<ul>
						<li><a href="registro_libros.php"><i class="fa-solid fa-plus"></i> Agregar</a></li>
						<li><a href="lista_libros.php"><i class="fa-solid fa-book-open"></i> lista</a></li>
                     
					</ul>
				</li>
				
				<li class="principal">
					<a href="#"><i class="fa-solid fa-hourglass-end"></i> Prestamos</a>
					<ul>
                        <li><a href="lista_libros.php"><i class="fa-solid fa-plus"></i> Agregar</a></li>
						<li><a href="lista_retiroLibro.php"><i class="fa-solid fa-book-open"></i>  lista</a></li>
                        
					</ul>
				</li>
				
				<li class="principal">
					<a href="#"><i class="fa-solid fa-graduation-cap"></i> Estudiantes</a>
					<ul>
							
                        <li><a href="registro_estudiante.php"><i class="fa-solid fa-plus"></i> Agregar</a></li>
						<li><a href="lista_estudiantes.php"><i class="fa-solid fa-book-open"></i> Lista</a></li>
                        
					</ul>
				</li>

				<li class="principal">
					<a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i> Retorno de libros</a>
					<ul>
                        <li><a href="retorno_libro.php"><i class="fa-solid fa-plus"></i> Agregar</a></li>
						
                   
					</ul>
				</li>

				<?php
				if($_SESSION['rol'] == 1) { ?>
				
				<li class="principal">
					<a href="#"><i class="fa-solid fa-user-check"></i> Usuarios</a>
					<ul>
                        <li><a href="registro_usuario.php"><i class="fa-solid fa-plus"></i> Agregar</a></li>
						<li><a href="lista_usuarios.php"><i class="fa-solid fa-book-open"></i> Lista</a></li>
                       
                    </ul>
				</li>

				<?php
				 }
				?>	
				<li class="principal">
					<a href="auditoria.php"><i class="fa-solid fa-clipboard-check"></i> Reportes</a>
				 	
				</li>

				<?php
				if($_SESSION['rol'] == 1) { ?>
				
				<li class="principal">
					<a href="#"><i class="fa-solid fa-user-check"></i> Auditoria</a>
					<ul>
						<li><a href="lista_session_login.php"><i class="fa-solid fa-book-open"></i> Lista LOGIN</a></li>
						<li><a href="lista_session_logout.php"><i class="fa-solid fa-book-open"></i> Lista LOGOUT</a></li>
						<li><a href="lista_auditoria_user.php"><i class="fa-solid fa-book-open"></i> Lista auditoria user</a></li>
						<li><a href="lista_auditoria_est.php"><i class="fa-solid fa-book-open"></i> Lista auditoria estudiante</a></li>
						<li><a href="lista_auditoria_libro.php"><i class="fa-solid fa-book-open"></i> Lista auditoria libros</a></li>
                       
                    </ul>
				</li>

				<?php
				 }
				?>	
				<li><a href="subir_libro.php"><i class="fas fa-home"></i> Subir libro</a></li>

				<?php
				if($_SESSION['rol'] == 1) {
				?>
				<li><a href="backup_bd/php/index.php"><i class="fas fa-home"></i> backup</a></li>
				<?php }?>
			</ul>
			
		</nav>
	