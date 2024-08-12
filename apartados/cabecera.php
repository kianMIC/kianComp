<?php 
	
	session_start();
	if(!isset($_SESSION['usuario'])){
?>
	<link rel="shortcut icon" href="../img/icono.png">

	<!-- AQUI LOS CSS -->
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/main.css">
  	<link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
  	<link rel="stylesheet" href="../css/nivo-slider.css">
  	<link rel="stylesheet" href="../themes/dark/dark.css">

  	<!-- AQUI LOS SCRIPTS -->
  	<script src="../js/jquery-3.6.0.min.js"></script>
  	<script src="../js/jquery.nivo.slider.js"></script>
</head>
<body>
	<header>
		<a href="../index.php" id="logo"><img src="../img/logo.png" alt="Logo de la pagina"/></a>
		<nav class="perfiles">
			<ul>
				<li><a href="../index.php"><i class="fas fa-home"></i>Inicio</a></li>
				<li><a href="formulario.php"><i class="fas fa-sign-in-alt"></i>Registrarse</a></li>
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
		<li><a href="monitores.php"><i class="fas fa-search"></i>Monitores</a></li>
		<li><a href="accesorios.php"><i class="fas fa-search"></i>Accesorios</a></li>
		<li><a href="ordenadores.php"><i class="fas fa-search"></i>Ordenadores</a></li>
		<li><a href="laptops.php"><i class="fas fa-search"></i>Laptops</a></li>
		<li><a href="discos.php"><i class="fas fa-search"></i>Discos Duros</a></li>
		<li><a href="telefonos.php"><i class="fas fa-search"></i>Telefonos Móviles</a></li>
		<li><a href="memoria.php"><i class="fas fa-search"></i>Memorias RAM</a></li>
		<li><a href="procesadores.php"><i class="fas fa-search"></i>Procesadores</a></li>
	</ul>
	<div id="cover-ctn-search"></div>
<?php 
	}else{
		$user = $_SESSION['usuario'];
?>
	<link rel="shortcut icon" href="../img/icono.png">

	<!-- AQUI LOS CSS -->
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/main.css">
  	<link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
  	<link rel="stylesheet" href="../css/nivo-slider.css">
  	<link rel="stylesheet" href="../themes/dark/dark.css">

  	<!-- AQUI LOS SCRIPTS -->
  	<script src="../js/jquery-3.6.0.min.js"></script>
  	<script src="../js/jquery.nivo.slider.js"></script>
</head>
<body>
	<header>
		<a href="../index.php" id="logo"><img src="../img/logo.png" alt="Logo de la pagina"/></a>
		<nav class="perfiles">
               <ul>
                    <li><a href="../index.php"><i class="fas fa-home"></i>Inicio</a></li>
                    <?php
                         if($user['id_cargo'] === 1) {
                    ?>
                    <li class="apartados_perfil">
                         <a href="#"><i class="fas fa-user-tie"></i><p class="apartados"><?php echo $user['usuario']; ?>  </p></a>
                         <ul class="subMenu">
                              <li><a href="#">Perfil</a></li>
                              <li><a href="registro_productos_bd.php">Agregar productos</a></li>
                              <li><a href="../php/cerrar_sesion_usuario.php">cerrar sesion</a></li>
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
                              <li><a href="../php/cerrar_sesion_usuario.php">cerrar sesion</a></li>
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
		<li><a href="monitores.php"><i class="fas fa-search"></i>Monitores</a></li>
		<li><a href="accesorios.php"><i class="fas fa-search"></i>Accesorios</a></li>
		<li><a href="ordenadores.php"><i class="fas fa-search"></i>Ordenadores</a></li>
		<li><a href="laptops.php"><i class="fas fa-search"></i>Laptops</a></li>
		<li><a href="discos.php"><i class="fas fa-search"></i>Discos Duros</a></li>
		<li><a href="telefonos.php"><i class="fas fa-search"></i>Telefonos Móviles</a></li>
		<li><a href="memoria.php"><i class="fas fa-search"></i>Memorias RAM</a></li>
		<li><a href="procesadores.php"><i class="fas fa-search"></i>Procesadores</a></li>
	</ul>
	<div id="cover-ctn-search"></div>
<?php 
	}
 ?>
