<?php 
     session_start();
     if(!isset($_SESSION['usuario'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kian_Componentes</title>
	<link rel="shortcut icon" href="img/icono.png">
	<!-- estilos de CSS -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/main.css">
  	<link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
  	<link rel="stylesheet" href="css/nivo-slider.css">
  	<link rel="stylesheet" href="themes/dark/dark.css">
     

  	<!-- Los diferentes plugins Y JS -->
  	<script src="js/jquery-3.6.0.min.js"></script>
  	<script src="js/jquery.nivo.slider.js"></script>


</head>
<body>
	<!-- no añadimos un div#wrapper global por que sera un diseño full whith -->
	<header>
		<a href="index.php" id="logo"><img src="img/logo.png" alt="Logo de la pagina"/></a>
		<nav class="perfiles">
			<ul>
				<li><a href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
				<li><a href="apartados/formulario.php"><i class="fas fa-sign-in-alt"></i>Registrarse</a></li>
				<button class="switch" id="switch">
					<span><i class="fas fa-sun"></i></span>
					<span><i class="fas fa-moon"></i></span>
				</button>
			</ul>
               <div id="ctn-icon-search">
                    <i class="fas fa-search" id="icon-search"></i>
               </div>
		</nav>
		
	</header>
	<!-- Este es la barra de busqeuda interna -->
	<div id="ctn-bars-search">
		<input type="text" id="inputSearch" placeholder="¿Que deseas buscar?">
	</div>
	<ul id="box-search">
		<li><a href="apartados/monitores.php"><i class="fas fa-search"></i>Monitores</a></li>
		<li><a href="apartados/accesorios.php"><i class="fas fa-search"></i>Accesorios</a></li>
		<li><a href="apartados/ordenadores.php"><i class="fas fa-search"></i>Ordenadores</a></li>
		<li><a href="apartados/laptops.php"><i class="fas fa-search"></i>Laptops</a></li>
		<li><a href="apartados/discos.php"><i class="fas fa-search"></i>Discos Duros</a></li>
		<li><a href="apartados/telefonos.php"><i class="fas fa-search"></i>Telefonos Móviles</a></li>
		<li><a href="apartados/memoria.php"><i class="fas fa-search"></i>Memorias RAM</a></li>
		<li><a href="apartados/procesadores.php"><i class="fas fa-search"></i>Procesadores</a></li>
	</ul>
	<div id="cover-ctn-search"></div>
	<main id="wrapper">
		<div id="contenido">
			<div class="slider-wrap theme-dark">
            	<div id="slider" class="nivoSlider">
              		<img src="img/portada1.jpg" alt="img1">
               	<img src="img/portada2.jpg" style="width: 1217.42px;" alt="img2">
                	<img src="img/portada3.jpg" alt="img3">
            	</div>
     		</div>
     		<div id="relevantes">
     			<h3><span class="linea">CAT</span>EGORIAS <span class="negrita">MAS RELEVANTES</span></h3>
     			<div class="categorias">
     				<a href="apartados/laptops.php">
     					<div><img src="img/relevante/relevante1.jpg" alt="relevante"></div>
     					<span class="titulo">Portátiles</span>
	     			</a>
	     			<a href="apartados/memoria.php">
	     				<div><img src="img/relevante/relevante4.jpg" alt="relevante"></div>
	     				<span class="titulo">Memoria RAM</span>
	     			</a>
	     			<a href="apartados/procesadores.php">
	     				<div><img src="img/relevante/relevante5.jpg" alt="relevante"></div>
	     				<span class="titulo">Procesadores</span>
	     			</a>
	     			<a href="apartados/monitores.php">
	     				<div><img src="img/relevante/relevante6.jpg" alt="relevante"></div>
	     				<span class="titulo">Monitores</span>
	     			</a>
     			</div>
     		</div>
     		<h3><span class="linea">SEG</span>URO <span class="negrita">TE INTERESA</span></h3>
     		<div id="interes">
                    <?php 
                         include("php/conexion_bd.php");
                              $query = "SELECT * FROM productos ORDER BY RAND() LIMIT 9";
                              $resultado = $conexion -> query($query);
                              while ($row = $resultado->fetch_assoc()){
                    ?>
                                   <div class="item">
                                        <?php echo "<a href='apartados/detalles_productos.php?id=" . $row["Id"] . "' class='producto'>" ?>
                                             <div>
                                                  <img src="img/productos/<?php echo $row['imagen_producto']; ?>" alt="img"><br>
                                                  <span class="titulo">
                                                       <?php echo $row['nombre_producto']; ?>
                                                  </span><br>
                                                  <span class="precio">
                                                       <?php echo $row['precio_producto'];?>€
                                                  </span>

                                             </div>
                                        </a>
                                   </div>
                                   <?php 
                                   }
                                   ?>
               </div>
     		<h3><span class="linea">EN</span> NUESTRO <span class="negrita">BLOG</span></h3>
     		<div id="blog">
     			<div class="LinkBlog">
     				<a href="apartados/blogs.php" class="link">
     					<div class="imagenBlog1">
     					</div>
     					<section>
     						<h4>Mejores configuraciones para PC Gaming</h4>
     						<p>Un buen gamer exige a su equipo un buen rendimiento, sin interrupciones y que sea rápido y potente. Para los ordenadores gaming elegimos los mejores componentes, acompáñalo con los mejores periféricos y forma tu equipo para jugar.</p>
     					</section>
     				</a>
     			</div>
     			<div class="LinkBlog">
     				<a href="apartados/blogs.php" class="link">
     					<div class="imagenBlog2">
     					</div>
     					<section>
     						<h4>Mejores configuraciones Workstation y equipos para trabajar</h4>
     						<p>En rasgos generales, los WorkStation son prácticamente equipos gaming pero con componentes que buscan otra estética mas profesional. Nuestros expertos seleccionan aquí las mejores configuraciones para trabajar.</p>
     					</section>
     				</a>
     			</div>
     			<div class="LinkBlog">
     				<a href="apartados/blogs.php" class="link">
     					<div class="imagenBlog3">
     					</div>
     					<section>
     						<h4>Diferencias entre pantallas OLED, AMOLED, QLED y NanoCell: ¿cuál es mejor?</h4>
     						<p>Diferencias entre las diferentes tecnologías de iluminación para las pantallas: LED, AMOLED, LCD y OLED, qué son y cuál es mejor. Además los tipos de paneles TN, IPS y VA.</p>
     					</section>
     				</a>
     			</div>
     		</div>
     		<p class="detalles"><span class="negrita">KianComponentes</span> es la tienda de tecnología online. Con servicio de calidad y atención personalizada, los clientes tienen a su disposición el <span class="negrita">mejor precio</span> de venta online en la más amplia variedad de productos tecnológicos: entre otros, componentes, portátiles/ordenadores, smartphones y móviles, artículos gaming, tablets/eBooks.</p>
		</div>
	</main>
	<footer>
		<div id="contactos">
			<div id="ubicacion">
			<p>Nos puedes localizar en nuestra tienda.</p>
				<div id ="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.1285493760556!2d1.8114521514935142!3d41.240757679176184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a38038c7a4fa95%3A0x3e2d568d52c0bf46!2sCarrer%20Verge%20de%20la%20Llum%2C%209%2C%2008870%20Sitges%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1625923391476!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
			<div id="redes">
				<p>Puedes localizarnos en nuestras redes sociales:</p>
				<ul>
					<li><a href="https://es-es.facebook.com" class="facebook"><i class="fab fa-facebook-square"></i>Facebook</a></li>
					<li><a href="https://twitter.com/?lang=es" class="twitter"><i class="fab fa-twitter-square"></i>Twitter</a></li>
					
				</ul>
				<ul>
					<li><a href="https://www.instagram.com/?hl=es" class="instagram"><i class="fab fa-instagram-square"></i>Instagram</a></li>
					<li><a href="https://discord.com" class="discord"><i class="fab fa-discord"></i>Discord</a></li>
				</ul>
			</div>
		</div>
		
	</footer>
		

	<script src="js/js.js"></script>
	<script>
		//modo oscuro//
		const btnSwitch = document.querySelector('#switch');

		btnSwitch.addEventListener('click', () => {
			document.body.classList.toggle('dark');
			btnSwitch.classList.toggle('active');
		})
	</script>
</body>
</html>



                                    <!-- PARA CUANDO SE INICIA SESION -->



<?php     
     }else{
     $user = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Kian_Componentes</title>
     <link rel="shortcut icon" href="img/icono.png">
     <!-- estilos de CSS -->
     <link rel="stylesheet" href="css/reset.css">
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
     <link rel="stylesheet" href="css/nivo-slider.css">
     <link rel="stylesheet" href="themes/dark/dark.css">

     <!-- Los diferentes plugins Y JS -->
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/jquery.nivo.slider.js"></script>


</head>
<body>
     <!-- no añadimos un div#wrapper global por que sera un diseño full whith -->
     <header>
          <a href="index.php" id="logo"><img src="img/logo.png" alt="Logo de la pagina"/></a>
          <nav class="perfiles">
               <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
                    <?php
                         if($user['id_cargo'] === 1) {
                    ?>
                    <li class="apartados_perfil">
                         <a href="#"><i class="fas fa-user-tie"></i><p class="apartados"><?php echo $user['usuario']; ?>  </p></a>
                         <ul class="subMenu">
                              <li><a href="#">Perfil</a></li>
                              <li><a href="apartados/registro_productos_bd.php">Agregar productos</a></li>
                              <li><a href="php/cerrar_sesion_usuario.php">Cerrar sesion</a></li>
                         </ul>
                         
                    </li>
                    <?php
                         }
                    ?>
                    <?php
                         if($user['id_cargo'] === 2) {
                    ?>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i>Mi carrito</a></li>
                    <li class="apartados_perfil">
                         <a href="#"><i class="fas fa-user"></i><p class="apartados"><?php echo $user['usuario']; ?>  </p></a>
                         <ul class="subMenu">
                              <li><a href="#">Perfil</a></li>
                              <li><a href="php/cerrar_sesion_usuario.php">Cerrar sesion</a></li>
                         </ul>
                         
                    </li>
                    <?php
                         }
                    ?>
                    <button class="switch" id="switch">
                         <span><i class="fas fa-sun"></i></span>
                         <span><i class="fas fa-moon"></i></span>
                    </button>
               </ul>
               <div id="ctn-icon-search">
                    <i class="fas fa-search" id="icon-search"></i>
               </div>
          </nav>
          
     </header>
     <!-- Este es la barra de busqeuda interna -->
     <div id="ctn-bars-search">
          <input type="text" id="inputSearch" placeholder="¿Que deseas buscar?">
     </div>
     <ul id="box-search">
          <li><a href="apartados/monitores.php"><i class="fas fa-search"></i>Monitores</a></li>
          <li><a href="apartados/accesorios.php"><i class="fas fa-search"></i>Accesorios</a></li>
          <li><a href="apartados/ordenadores.php"><i class="fas fa-search"></i>Ordenadores</a></li>
          <li><a href="apartados/laptops.php"><i class="fas fa-search"></i>Laptops</a></li>
          <li><a href="apartados/discos.php"><i class="fas fa-search"></i>Discos Duros</a></li>
          <li><a href="apartados/telefonos.php"><i class="fas fa-search"></i>Telefonos Móviles</a></li>
          <li><a href="apartados/memoria.php"><i class="fas fa-search"></i>Memorias RAM</a></li>
          <li><a href="apartados/procesadores.php"><i class="fas fa-search"></i>Procesadores</a></li>
     </ul>
     <div id="cover-ctn-search"></div>
     <main id="wrapper">
          <div id="contenido">
               <div class="slider-wrap theme-dark">
               <div id="slider" class="nivoSlider">
                    <img src="img/portada1.jpg" alt="img1">
                    <img src="img/portada2.jpg" style="width: 1217.42px;" alt="img2">
                    <img src="img/portada3.jpg" alt="img3">
               </div>
               </div>
               <div id="relevantes">
                    <h3><span class="linea">CAT</span>EGORIAS <span class="negrita">MAS RELEVANTES</span></h3>
                    <div class="categorias">
                         <a href="apartados/laptops.php">
                              <div><img src="img/relevante/relevante1.jpg" alt="relevante"></div>
                              <span class="titulo">Portátiles</span>
                         </a>
                         <a href="apartados/memoria.php">
                              <div><img src="img/relevante/relevante4.jpg" alt="relevante"></div>
                              <span class="titulo">Memoria RAM</span>
                         </a>
                         <a href="apartados/procesadores.php">
                              <div><img src="img/relevante/relevante5.jpg" alt="relevante"></div>
                              <span class="titulo">Procesadores</span>
                         </a>
                         <a href="apartados/monitores.php">
                              <div><img src="img/relevante/relevante6.jpg" alt="relevante"></div>
                              <span class="titulo">Monitores</span>
                         </a>
                    </div>
               </div>
               <h3><span class="linea">SEG</span>URO <span class="negrita">TE INTERESA</span></h3>
                              <div id="interes">
                    <?php 
                         include("php/conexion_bd.php");
                              $query = "SELECT * FROM productos ORDER BY RAND() LIMIT 9";
                              $resultado = $conexion -> query($query);
                              while ($row = $resultado->fetch_assoc()){
                    ?>
                                   <div class="item">
                                        <?php echo "<a href='apartados/detalles_productos.php?id=" . $row["Id"] . "' class='producto'>" ?>
                                             <div>
                                                  <img src="img/productos/<?php echo $row['imagen_producto']; ?>" alt="img"><br>
                                                  <span class="titulo">
                                                       <?php echo $row['nombre_producto'];?>
                                                  </span><br>
                                                  <span class="precio">
                                                       <?php echo $row['precio_producto'];?>€
                                                  </span>

                                             </div>
                                        </a>
                                   </div>
                                   <?php 
                                   }
                                   ?>
               </div>
               <h3><span class="linea">EN</span> NUESTRO <span class="negrita">BLOG</span></h3>
               <div id="blog">
                    <div class="LinkBlog">
                         <a href="apartados/blogs.php" class="link">
                              <div class="imagenBlog1">
                              </div>
                              <section>
                                   <h4>Mejores configuraciones para PC Gaming</h4>
                                   <p>Un buen gamer exige a su equipo un buen rendimiento, sin interrupciones y que sea rápido y potente. Para los ordenadores gaming elegimos los mejores componentes, acompáñalo con los mejores periféricos y forma tu equipo para jugar.</p>
                              </section>
                         </a>
                    </div>
                    <div class="LinkBlog">
                         <a href="apartados/blogs.php" class="link">
                              <div class="imagenBlog2">
                              </div>
                              <section>
                                   <h4>Mejores configuraciones Workstation y equipos para trabajar</h4>
                                   <p>En rasgos generales, los WorkStation son prácticamente equipos gaming pero con componentes que buscan otra estética mas profesional. Nuestros expertos seleccionan aquí las mejores configuraciones para trabajar.</p>
                              </section>
                         </a>
                    </div>
                    <div class="LinkBlog">
                         <a href="apartados/blogs.php" class="link">
                              <div class="imagenBlog3">
                              </div>
                              <section>
                                   <h4>Diferencias entre pantallas OLED, AMOLED, QLED y NanoCell: ¿cuál es mejor?</h4>
                                   <p>Diferencias entre las diferentes tecnologías de iluminación para las pantallas: LED, AMOLED, LCD y OLED, qué son y cuál es mejor. Además los tipos de paneles TN, IPS y VA.</p>
                              </section>
                         </a>
                    </div>
               </div>
               <p class="detalles"><span class="negrita">KianComponentes</span> es la tienda de tecnología online. Con servicio de calidad y atención personalizada, los clientes tienen a su disposición el <span class="negrita">mejor precio</span> de venta online en la más amplia variedad de productos tecnológicos: entre otros, componentes, portátiles/ordenadores, smartphones y móviles, artículos gaming, tablets/eBooks.</p>
          </div>
     </main>
     <footer>
          <div id="contactos">
               <div id="ubicacion">
               <p>Nos puedes localizar en nuestra tienda.</p>
                    <div id ="map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.1285493760556!2d1.8114521514935142!3d41.240757679176184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a38038c7a4fa95%3A0x3e2d568d52c0bf46!2sCarrer%20Verge%20de%20la%20Llum%2C%209%2C%2008870%20Sitges%2C%20Barcelona!5e0!3m2!1ses!2ses!4v1625923391476!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
               </div>
               <div id="redes">
                    <p>Puedes localizarnos en nuestras redes sociales:</p>
                    <ul>
                         <li><a href="https://es-es.facebook.com" class="facebook"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                         <li><a href="https://twitter.com/?lang=es" class="twitter"><i class="fab fa-twitter-square"></i>Twitter</a></li>
                         
                    </ul>
                    <ul>
                         <li><a href="https://www.instagram.com/?hl=es" class="instagram"><i class="fab fa-instagram-square"></i>Instagram</a></li>
                         <li><a href="https://discord.com" class="discord"><i class="fab fa-discord"></i>Discord</a></li>
                    </ul>
               </div>
          </div>
          
     </footer>
          

     <script src="js/js.js"></script>
     <script>
          //modo oscuro//
          const btnSwitch = document.querySelector('#switch');

          btnSwitch.addEventListener('click', () => {
               document.body.classList.toggle('dark');
               btnSwitch.classList.toggle('active');
          })
     </script>
</body>
</html>
<?php 
     }
?>