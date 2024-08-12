<?php 
     include("cabecera.php");
?>
	<main id="wrapper">

		<div id="contenido">
			<div class="ajax">
				<nav>
					<ul>
						<li id="ajax1">Configuraciones para PC Gaming</li>
						<li id="ajax2">Configuraciones Workstation</li>
						<li id="ajax3">Diferencias entre OLED, AMOLED...</li>
					</ul>
				</nav>
			</div>
			<div class="slider-wrap theme-dark">
            	<div id="slider" class="nivoSlider">
              		<img src="../img/portada1.jpg" alt="img1">
               	 	<img src="../img/portada2.jpg" style="width: 1217.42px;" alt="img2">
                	<img src="../img/portada3.jpg" alt="img3">
            	</div>
     		</div>

     		<section id="blogs">
     			
     		</section>
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
		window.onload = function(){
		const btnSwitch = document.querySelector('#switch');

		btnSwitch.addEventListener('click', () => {
			document.body.classList.toggle('dark');
			btnSwitch.classList.toggle('active');
		})

		//ajax

			$.ajax({
				url : "ajax.html",
				success : function(data){
					setTimeout(function(){
						$('#blogs').html(data);
					}
					);
				}

			})
			$('#ajax1').click(function(){
				$.ajax({
					url : "ajax.html",	
					success : function(data){
						setTimeout(function(){
							$('#blogs').html(data);
						}
						);
					}
				})
			});
			$('#ajax2').click(function(){
				$.ajax({
					url : "ajax1.html",	
					success : function(data){
						setTimeout(function(){
							$('#blogs').html(data);
						}
						);
					}
				})
			});
			$('#ajax3').click(function(){
				$.ajax({
					url : "ajax2.html",	
					success : function(data){
						setTimeout(function(){
							$('#blogs').html(data);
						}
						);
					}
				})
			});
		}
	</script>
</body>
</html>