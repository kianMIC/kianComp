
					<!-- PRIMERO HACEMOS UNA VALIDACION PARA QUE SOLO LOS ADMINISTRADORES PUEDAN ENTRAR A ESTA SECCION -->

<?php 
     include '../php/conexion_bd.php';
	session_start();
	$user = $_SESSION['usuario'];
	if(!isset($user) || $user['id_cargo'] !== 1){
		echo '
			<script>
				alert("No puedes acceder a este apartado, tienes que ser administrador");
				window.location = "../index.php";
			</script>
		';
		session_destroy();
		die();
	}
                         // AHORA HACEMOS UNA VALIDACION DEL FORMULARIO Y DE PASO PROGRAMAMOS PARA SUBIR LOS DATOS A LA BASE DE DATOS
     if (!empty($_POST)) {
          $alert = '';
          if (empty($_POST['producto']) || empty($_POST['precio']) || empty($_POST['descripcion']) || $_POST['precio'] <= 0){
               $alert = '<p class="msg_error">Todos los campos son obligatorios.</p>';
          }else{
               $categoria = $_POST['categoria'];
               $producto = $_POST['producto'];
               $precio = $_POST['precio'];
               $descripcion = $_POST['descripcion'];

               $foto = $_FILES['foto'];
               $nombre_foto = $foto['name'];
               $type = $foto['type'];
               $url_temp = $foto['tmp_name'];

               $imgProducto = '../img/img_producto.jpg';

               if ($nombre_foto != '') {
                    $destino = '../img/productos/';
                    $img_nombre = 'img_'.md5(date('d-m-Y H:m:s'));
                    $imgProducto= $img_nombre.'.jpg';
                    $src = $destino.$imgProducto; 
               }

               $query_inset = mysqli_query($conexion, "INSERT INTO productos(categoria, nombre_producto, precio_producto, descripcion_producto, imagen_producto) VALUES ('$categoria', '$producto', '$precio', '$descripcion', '$imgProducto')");
               if ($query_inset) {
                    if ($nombre_foto !== '') {
                         move_uploaded_file($url_temp, $src);
                         $alert = '<p class="msg_save">Producto guardado correctamente.</p>';
                    }
                    
               }else{
                    $alert = '<p class="msg_error">Error al guardar el producto.</p>';
               }
          }
     }
?>


											<!-- AHORA SI PODEMOS CONTINUAR -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registro de productos || Kian_Componentes</title>
     <link rel="shortcut icon" href="../img/icono.png">

     <!-- estilos de CSS -->
     <link rel="stylesheet" href="../css/reset.css">
     <link rel="stylesheet" href="../css/main.css">
     <link rel="stylesheet" href="../css/formularioRegistrocss.css">
     <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
     
     <!-- Los diferentes plugins Y JS -->
     <script src="../js/jquery-3.6.0.min.js"></script>
     <script src="../js/jquery.nivo.slider.js"></script>
     <script src="../js/FormularioRegistroProductos.js"></script>
</head>
<body>
	<header>
          <a href="../index.php" id="logo"><img src="../img/logo.png" alt="Logo de la pagina"/></a>
          <nav class="perfiles">
               <ul>
                    <li><a href="../index.php"><i class="fas fa-home"></i>Inicio</a></li>
                    <li class="apartados_perfil">
                         <a href="#"><i class="fas fa-user-tie"></i><p class="apartados"><?php echo $user['usuario']; ?>  </p></a>
                         <ul class="subMenu">
                              <li><a href="#">Perfil</a></li>
                              <li><a href="registro_productos_bd.php">Agregar productos</a></li>
                              <li><a href="../php/cerrar_sesion_usuario.php">Cerrar sesion</a></li>
                         </ul>
                         
                    </li>
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
     <main id="wrapper">
          <div id="registro">
               <h2><i class="fas fa-cubes"></i>        Registro de productos</h2>
               <hr>
               <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
               <form action="" method="POST" id="formularioRegistro" enctype="multipart/form-data">
                    <label for="foe">Categoria</label>
                         <?php 
                              include("../php/conexion_bd.php");
                              $query_categoria = mysqli_query($conexion, "SELECT * FROM categorias");
                              $result_categoria = mysqli_num_rows($query_categoria);
                              mysqli_close($conexion);
                         ?>
                         <select name="categoria" id="categoria">
                              <?php 
                                   if($result_categoria > 0){
                                        while($categoria = mysqli_fetch_array($query_categoria)){
                              ?>
                              <option value="<?php echo $categoria['nombre_categoria'];?>"><?php echo $categoria['nombre_categoria'];?></option>
                              <?php 
                                        }
                                   }
                               ?>
                                   
                              
                         </select>

                         <label for="producto">Producto:</label>
                         <input type="text" name="producto" id="producto" placeholder="Nombre del producto">

                         <label for="precio">Precio del producto:</label>
                         <input type="number" step="0.01" name="precio" id="precio" placeholder="Precio del producto">

                         <label for="descripcion">Descripcion del producto:</label>
                         <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>

                         <div class="photo">
                         <label for="foto">Foto:</label>
                              <div class="prevPhoto">
                                   <span class="delPhoto notBlock">X</span>
                                   <label for="foto"></label>
                              </div>
                              <div class="upimg">
                                   <input type="file" name="foto" id="foto">
                              </div>
                              <div id="form_alert"></div>
                         </div>
                    <button type="submit" class="btn_save"><i class="fas fa-cart-arrow-down"></i>Guardar producto</button>
               </form>
               <div id="error"></div>
          </div>
     </main>
<?php 
	include('footer.php');

?>