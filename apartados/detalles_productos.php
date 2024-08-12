<?php
	include('cabecera.php');
?>
	<main id="wrapper">
		<div id="contenido">
			<?php 
                include("../php/conexion_bd.php");
                $query = "SELECT * FROM productos WHERE Id = " . $_GET['id'] . "";
                $resultado = $conexion -> query($query);
                while ($row = $resultado->fetch_assoc()){

            ?>
			<div class="producto">
				<h2 class="nombreP">
						 <?php echo $row['nombre_producto']; ?>
					</h2>
				<div class="img">
					<img src="../img/productos/<?php echo $row['imagen_producto']; ?>" alt="img">
				</div>
				<div class="detalles">
					<h2 class="nombreG">
						 <?php echo $row['nombre_producto']; ?>
					</h2>
					<p class="precio">
						<?php echo $row['precio_producto'];?>€
					</p>
					<p class="descripcion">
						<span>Descripcion del producto:</span>
						<?php echo $row['descripcion_producto']; ?>
					</p>
					<div class="vinculos">
						<a href="#"><i class="fas fa-cart-plus"></i>  Añadir al carrito</a>
						<a href="tarjeta.php" target="_blank" ><i class="fas fa-money-check-alt"></i>  Comprar Ahora</a>
					</div>
				</div>
			</div>
			<?php 
				}
			?>
		

	<?php 
		include('fin_main.php');
		include('footer.php');
	?>