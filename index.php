<?php 
    session_start();
    $user = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kian_Comp</title>
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
    <!-- no añadimos un div#wrapper global porque será un diseño full-width -->
    <header>
        <a href="index.php" id="logo"><img src="img/logo.png" alt="Logo de la página"/></a>
        <nav class="perfiles">
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
                <?php if (!$user): ?>
                    <li><a href="apartados/formulario.php"><i class="fas fa-sign-in-alt"></i>Registrarse</a></li>
                <?php endif; ?>

                <?php if ($user): ?>
                    <?php if($user['id_cargo'] === 1): ?>
                        <li class="apartados_perfil">
                            <a href="#"><i class="fas fa-user-tie"></i><p class="apartados"><?php echo $user['usuario']; ?>  </p></a>
                            <ul class="subMenu">
                                <li><a href="#">Perfil</a></li>
                                <li><a href="apartados/registro_productos_bd.php">Agregar productos</a></li>
                                <li><a href="php/cerrar_sesion_usuario.php">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    <?php elseif($user['id_cargo'] === 2): ?>
                        <li><a href="#"><i class="fas fa-shopping-cart"></i>Mi carrito</a></li>
                        <li class="apartados_perfil">
                            <a href="#"><i class="fas fa-user"></i><p class="apartados"><?php echo $user['usuario']; ?>  </p></a>
                            <ul class="subMenu">
                                <li><a href="#">Perfil</a></li>
                                <li><a href="php/cerrar_sesion_usuario.php">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
                
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
    <!-- Este es la barra de búsqueda interna -->
    <div id="ctn-bars-search">
        <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
    </div>
    <ul id="box-search">
        <li><a href="apartados/monitores.php"><i class="fas fa-search"></i>Monitores</a></li>
        <li><a href="apartados/accesorios.php"><i class="fas fa-search"></i>Accesorios</a></li>
        <li><a href="apartados/ordenadores.php"><i class="fas fa-search"></i>Ordenadores</a></li>
        <li><a href="apartados/laptops.php"><i class="fas fa-search"></i>Laptops</a></li>
        <li><a href="apartados/discos.php"><i class="fas fa-search"></i>Discos Duros</a></li>
        <li><a href="apartados/telefonos.php"><i class="fas fa-search"></i>Teléfonos Móviles</a></li>
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
                <h3><span class="linea">CAT</span>EGORÍAS <span class="negrita">MÁS RELEVANTES</span></h3>
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
                                <span class="titulo"><?php echo $row['nombre_producto']; ?></span><br>
                                <span class="precio"><?php echo $row['precio_producto'];?>€</span>
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
                        <div class="imagenBlog1"></div>
                        <section>
                            <h4>Mejores configuraciones para PC Gaming</h4>
                            <p>Un buen gamer exige a su equipo un buen rendimiento, sin interrupciones y que sea rápido y potente. Para los ordenadores gaming elegimos los mejores componentes, acompáñalo con los mejores periféricos y forma tu equipo para jugar.</p>
                        </section>
                    </a>
                </div>
                <div class="LinkBlog">
                    <a href="apartados/blogs.php" class="link">
                        <div class="imagenBlog2"></div>
                        <section>
                            <h4>Mejores configuraciones Workstation y equipos para trabajar</h4>
                            <p>En rasgos generales, los WorkStation son prácticamente equipos gaming pero con componentes que buscan otra estética más profesional. Nuestros expertos seleccionan aquí las mejores configuraciones para trabajar.</p>
                        </section>
                    </a>
                </div>
                <div class="LinkBlog">
                    <a href="apartados/blogs.php" class="link">
                        <div class="imagenBlog3"></div>
                        <section>
                            <h4>¿Merece la pena configurar tu PC desde cero?</h4>
                            <p>Montarte tu propio equipo gaming personalizado es una idea que resulta de lo más atractiva y hay dos maneras de hacerlo. En este post te indicamos cómo hacerlo y los pros y contras de cada método.</p>
                        </section>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="subir">
            <a href="#wrapper" class="ir-arriba"><i class="fas fa-arrow-up"></i></a>
        </div>
        <div id="contacto">
            <ul>
                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                <li><a href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i>Twitter</a></li>
                <li><a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram"></i>Instagram</a></li>
            </ul>
        </div>
        <div id="leyenda">
            <p>&copy; 2023 KianComp. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="js/scroll.js"></script>
    <script src="js/buscador.js"></script>
    <script src="js/light.js"></script>
</body>
</html>
