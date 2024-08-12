-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2021 a las 14:07:21
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kian_componentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'clientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `Id` int(11) NOT NULL,
  `nombre_categoria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`Id`, `nombre_categoria`) VALUES
(2, 'Accesorios'),
(3, 'Discos Duros'),
(1, 'Laptops'),
(5, 'Monitores'),
(6, 'Ordenadores'),
(7, 'Procesadores'),
(4, 'Ram'),
(8, 'Telefonos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `nombre_producto` varchar(250) NOT NULL,
  `descripcion_producto` text NOT NULL,
  `imagen_producto` varchar(250) NOT NULL,
  `categoria` varchar(250) NOT NULL,
  `precio_producto` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `nombre_producto`, `descripcion_producto`, `imagen_producto`, `categoria`, `precio_producto`) VALUES
(1, 'Gigabyte AORUS 15G KB-7ES1130MD Intel Core i7-10750H/16GB/512GB SSD/RTX 2060/15.6\" Reacondicionado', 'El nuevo AORUS 15G, equipado con gráficas NVIDIA® GeForce® RTX SUPER™, basado en la arquitectura GPU NVIDIA Turing™ GPU con trazado de rayos en tiempo real, inteligencia artificial, y sombreado programable, ofrece una experiencia totalmente nueva a los jugadores. Trazado de rayos Reproduce de manera exacta y realista los rayos de luz en cualquier juego, produciendo un paisaje visual natural para una experiencia de próxima generación.', 'img_c18b9177a1cdfd7a2df46c1e95802d3c.jpg', 'Laptops', '1022.14'),
(2, 'Asus TUF Gaming FX505DV-AL014 AMD Ryzen 7 3750H/16GB/512GB SSD/RTX 2060/15.6\" Reacondicionado', 'Une el último procesador AMD® Ryzen ™ y los gráficos GeForce RTX ™ 2060 en una pantalla NanoEdge de nivel IPS de hasta 144Hz / 3 ms con el nuevo ASUS TUF Gaming FX505DV, que ofrece juegos inmersivos de alto rendimiento a un precio asequible. Está probado y certificado para cumplir con los estándares militares MIL-STD-810G de grado militar, lo que garantiza la dureza y durabilidad que necesita para resistir los golpes y golpes del trabajo y el juego cotidianos.\r\n\r\n', 'img_dd9338b63d5cd5d7c252b298cb291d56.jpg', 'Laptops', '965.79'),
(3, 'Asus ROG Zephyrus G14 GA401II-HE004 AMD Ryzen 7 4800HS/16GB/1TB SSD/GTX 1650Ti/14\" Reacondicionado', 'Dinámico y preparado para viajar, el innovador ROG Zephyrus G14 supera a la competencia con una CPU de hasta 8 núcleos AMD® Ryzen™ de la Serie 4000 y con hasta una potente GPU GeForce RTX™ 2060 que acelera el entorno multitarea y los juegos. Personalízalo a tu gusto con paneles de 120 Hz o WQHD de alta resolución, ambas opciones con validación Pantone®. Sumérgete como nunca antes en películas, juegos y música con los cuatro altavoces y el sonido Dolby Atmos. El Zephyrus G14 es un potente portátil de gaming que puedes llevar a cualquier lugar sin que represente una carga.', 'img_2f51ad9c6e8867078d36166714db2b97.jpg', 'Laptops', '1017.99'),
(4, 'Tempest Chromatose Chroma Set para Streaming', 'Tempest se ha empeñado que disfrutes con sus productos, y para ello no deja de sorprender día a día, lanzando esta vez para ello un completo set de Chroma para tus streaming, un producto realmente novedoso en el mercado. Llega Tempest Chromatose, tu compañero perfecto para tus partidas diarias. El Tempest Chromatose gracias a sus sujeciones especiales, se enganchará en tu silla como guerrero a espada. \r\n\r\nEste Set de Chroma te permitirá profesionalizar tus emisiones a través de las diferentes plataformas de streaming, permitiendo escoger el fondo que desees durante tu emisión ya sea el juego, tu fondo personalizado y todo aquello que imagines. \r\n\r\nGracias a Tempest Chromatosse darás ese paso hacia adelante que deseas en el mundo del gaming, podrás ponerlo en segundos, dotar a tus partidas de un fondo premium, y gracias a su funda, podrás guardarlo de nuevo rápidamente hasta la siguiente partida. ', 'img_1707bdeaa7d4c623fa667ccd3fe46c5w.jpg', 'Accesorios', '22.99'),
(5, 'Elgato Stream Deck MK.2 Interfaz Táctil de Control 15 Teclas LCD Personalizables', 'Stream Deck te da 15 teclas LCD para controlar tus apps y herramientas. Lanza acciones, publica mensajes en redes sociales, ajusta el audio, reproduce clips de sonido, enciende tus luces y mucho más. Recibe respuestas visuales que confirman tus órdenes. Configura Stream Deck para cambiar automáticamente de configuraciones de teclado al cambiar de una app a otra. Es una auténtica revolución para tu forma de trabajar, y es totalmente personalizable. Personaliza tu Stream Deck con iconos personalizados, salvapantallas y una gama creciente de paneles frontales intercambiables.\r\n\r\nUsa la app para configurar fácilmente las teclas, y visita la Stream Deck Store si quieres plug-ins para apps, paquetes de iconos, miles de canciones y efectos libres derechos, y mucho más.', 'img_978f8a4062592bba34c6ada4e1263cb3.jpg', 'Accesorios', '149.99'),
(6, 'Elgato Key Light Panel LED de Estudio Profesional 2500 Lúmens', 'Los 160 LED premium emiten 2500 lúmenes que puedes controlar mediante la aplicación Control Center. La superficie de vidrio opalino satinado garantiza una difusión equilibrada y antideslumbramiento. Y un soporte de escritorio de metal completamente ajustable mantiene tu configuración optimizada. Lo que Elgato Key Light transmite: eres un profesional.', 'img_978f8a4062592bba34c6ada4e1263cb2.jpg', 'Accesorios', '203.13'),
(7, 'Toshiba Canvio Basics 25 2TB USB 30 Negro', 'Transfiere archivos rápidamente con la tecnología SuperSpeed USB 3.0 en tu disco duro externo Canvio Basics. Este dispositivo está listo para usarlo en sistemas con Microsoft Windows y no requiere la instalación de ningún software, por lo que almacenar todos tus archivos favoritos es más fácil que nunca. Su diseño atemporal con acabado mate le proporciona un aspecto increíble tanto en tu escritorio como en cualquier otro lugar. Además, este disco duro se puede conectar a hardware antiguo gracias a la compatibilidad con USB 2.0.', 'img_f168f3c6d6c3894f3b6cee776d51cc45.jpg', 'Discos Duros', '53.55'),
(8, 'GoodRam CL100 Gen.3 SSD 480GB 2.5\" SATA III', 'SSD CL100 gen.3 se basa en memorias TLC minuciosamente seleccionadas. Esto te permitirá acelerar un ordenador equipado con un disco duro tradicional incluso 10 veces, asegurando a la vez la estabilidad del trabajo y la fiabilidad durante un período prolongado.', 'img_1dc2f123a21d0ee7af5346d638f13205.jpg', 'Discos Duros', '58.60'),
(9, 'Kioxia EXCERIA 240GB SSD SATA', 'Mejorar una unidad de disco duro (HDD) debería ser fácil y asequible. Y ahí es donde la serie de unidades SSD EXCERIA SATA entra en juego. Diseñada para aumentar la velocidad de su ordenador de sobremesa o portátil con respecto a las unidades de disco duro convencionales, la serie de unidades SSD EXCERIA SATA aprovecha la tecnología de BiCS FLASH™ para ofrecer, de una forma equilibrada, rendimiento, fiabilidad y valor que transformarán su sistema de sobremesa o portátil.', 'img_f86b5cfae6216e3f53621f90b4fbb229.jpg', 'Discos Duros', '31.99'),
(10, 'Dell Alienware AW3420DW 34.1\" LED WQHD 120Hz G-Sync Curva', 'Monitor gaming de 34 pulgadas con los colores completos aportados por la tecnología IPS nano color (98 % DCI-P3) y un verdadero tiempo de respuesta de 2ms. Con una resolución WQHD 1900R y una relación de pantalla de 21:9.', 'img_1707bdeaa7d4c623fa667ccd3fe46c5e.jpg', 'Monitores', '1004.20'),
(11, 'Gigabyte G34WQC Gaming Monitor 34\" LED WQHD 144Hz Curva', 'Como jugador invisible, a menudo se subestima al monitor. La verdad es que los monitores se forman como un efecto sinérgico y ofrecen el mejor rendimiento de los componentes de la PC. Los monitores para juegos de GIGABYTE ofrecen las mejores especificaciones y calidad, los usuarios realmente pueden disfrutar de un rendimiento de primer nivel sin necesidad de extravagancias.', 'img_b552a1a2afc14ee32cc67804bb284d68.jpg', 'Monitores', '499.00'),
(12, 'Samsung LS34J552WQRXEN 34\" LED UltraWide QHD FreeSync', 'Ya sea para entretenimiento, juegos o trabajo, el monitor Samsung LS34J552WQRXEN tiene todo para satisfacer sus necesidades. Con un diseño elegante con bordes finos, esta pantalla UltraWide QHD de 34 pulgadas te sumergirá en el corazón de tu contenido.', 'img_58c4e519c67a46aed270bfefbe5b43c7.jpg', 'Monitores', '369.00'),
(13, 'PcCom Bronze Intel Core i5-10400/8GB/1TB+480SSD', 'Pensado para un uso general en el hogar. el PcCom Bronze Intel se presenta como un potente equipo en el que su procesador Intel Corei5-10400, sus 8GB de RAM DDR4 2666MHz y el rápido disco SSD de 480GB SATA3 permiten trabajar de forma holgada en muy diferentes tareas, lo que lo hace ideal para entornos domésticos o de oficina.', 'img_bffa2748f7cce5c75f6366cf0b43c81d.jpg', 'Ordenadores', '545.07'),
(14, 'PcVIP Altair Intel Core i5-9400/16GB/1TB+480GB SSD', 'IbericaVIP ha llegado con un nuevo PcVIP, una línea de Pcs de sobremesa para juegos creada tras un amplio trabajo de investigación para ofrecer el mayor rendimiento y optimización en el juego para nuestros clientes.\r\n\r\nEnsamblados por nuestros expertos de montaje, los nuevos PcVIP ofrecen un rendimiento increíble, con máxima velocidad, capacidad de ampliación y un amplio abanico de posibilidades dentro de la gama, en la que podrá elegir el producto óptimo según las necesidades y el tipo de Pc que está buscando.\r\n\r\nEl nuevo PcVIP Altair está equipado con un procesador Intel i5 9400.', 'img_a83502597bfe6622b35509ca2d96e0e9.jpg', 'Ordenadores', '598.49'),
(15, 'PcCom Platinum AMD Ryzen 9 5900X/32GB/1TB SSD+2TB/RTX 3090', 'Una vez más PcComponentes sorprende a la industria de la informática con el lanzamiento de los nuevos PcCom, la nueva línea de Pcs de sobremesa con componentes específicos para juegos, creada tras un amplio trabajo de investigación para ofrecer el mayor rendimiento y optimización en el juego para nuestros clientes. Ensamblados por nuestros expertos de montaje, los nuevos PcCom ofrecen un rendimiento increíble, con máxima velocidad, capacidad de ampliación y un amplio abanico de posibilidades dentro de la gama, en la que podrás elegir el producto óptimo según las necesidades y el tipo de Pc que estás buscando.', 'img_1707bdeaa7d4c623fa667ccd3fe46c5p.jpg', 'Ordenadores', '4781.36'),
(16, 'Intel Core I9 11900K 35 Ghz', 'Procesador de escritorio desbloqueado Intel® Core ™ i9-11900K de 11.ª generación. Con Intel® Turbo Boost Max Technology 3.0 y compatibilidad con PCIe Gen 4.0, los procesadores de escritorio Intel® Core ™ desbloqueados de 11ª generación están optimizados para jugadores entusiastas y creadores serios y ayudan a ofrecer overclocking de alto rendimiento para un impulso adicional.', 'img_d2861cd1f24495574ae85cdb0cc1862a.jpg', 'Procesadores', '554.61'),
(17, 'Intel Core I5 10400 290 GHz', 'Los nuevos procesadores Intel® Core™ de 10? generación ofrecen mejoras de rendimiento notables para conseguir una productividad mejorada y un entretenimiento impresionante, incluyendo hasta 5,3 GHz, Intel® Wi-Fi 6 (Gig+), tecnología Thunderbolt™ 3, HDR 4K, optimización de sistema inteligente y mucho más.', 'img_bb2ba10e2384b65221b02307b343e038.jpg', 'Procesadores', '179.89'),
(18, 'AMD Ryzen 5 5600X 3.7GHz', 'Juega con lo mejor. Seis núcleos increíbles para quienes simplemente desean jugar.', 'img_e6b20fdece42f5caa4046d31b55c0ae4.jpg', 'Procesadores', '299.90'),
(19, 'Team Group Delta White RGB DDR4 3200 PC4 25600 16GB 2x8GB CL16', 'La serie de juegos TEAMGROUP T-FORCE lanzó una vez más el nuevo módulo de memoria luminosa: DELTA RGB. La R en el esparcidor de calor representa la Revolución y también representa un concepto creativo con un espíritu intransigente. El esparcidor de calor está construido con un material metálico más ligero, delgado y de alta calidad. Los coloridos cambios de luz hacen que la ?R? hueca en la parte frontal sea aún más estereoscópica, y hace eco en el área luminosa de gran angular. La revolución extraordinaria proporcionará a los jugadores una nueva experiencia nunca antes vista.', 'img_7615c53732471e13e305b09f444018f9.jpg', 'Ram', '112.43'),
(20, 'Corsair Vengeance RGB Pro Optimizado AMD DDR4 3200 16GB 2x8GB CL16', 'La memoria con overclocking DDR4 Corsair Vengeance RGB Pro ilumina el PC con un efecto hipnótico gracias a la iluminación RGB dinámica multizona, además de ofrecer las mejores características de las DDR4 en cuanto a rendimiento.', 'img_bb2ba10e2384b65221b02307b343e038.jpg', 'Ram', '96.00'),
(21, 'Kingston FURY Beast DDR4 3200 MHz 16GB 2x8GB CL16', 'La memoria para PC FURY Beast DDR4 de Kingston ofrece un potente aumento de rendimiento para juegos, edición de vídeo y renderización con velocidades de hasta 3733 MHz. Esta rentable actualización está disponible en velocidades de 2666 MHz a 3733 MHz, con latencias de CL15 a 19, capacidades de 4 GB a 32 GB en módulos individuales y de 8 GB a 128 GB en kits. Su overclocking automático Plug N Play a velocidades de 2666 MHz está disponible en Intel XMP y Ryzen. El módulo FURY Beast DDR4 se mantiene fresco gracias a su elegante y delgado disipador de calor. Probada al 100% y garantizada de por vida, esta actualización es muy fácil y sin problemas para tu sistema Intel o AMD.', 'img_29452dc4bb031c69a7732a205799a633.jpg', 'Ram', '79.44'),
(22, 'Motorola Moto E20 2/32GB Gris Libre', 'La serie E de Motorola se corresponde con sus móviles más modestos de gama de entrada, en donde entra directo el nuevo Moto E20. Es un nuevo móvil sencillo con Android Go y un curioso diseño con patrones hexagonales.\r\n\r\nEl Moto E20 es uno de los móviles más modestos de la casa, con Android Go a bordo, procesador Unisoc, pantalla LCD de 6,5 pulgadas y una cámara dual de 13 megapíxeles. Uno de sus puntos positivos es que, para ser básico, cuenta con un lector de huellas.', 'img_c5bb23f0ce722e8cfc8ee3e9eae8d13d.jpg', 'Telefonos', '109.00'),
(23, 'Xiaomi Mi 11i 5G 8/128GB Negro Libre', 'Mi 11i, potencia que deslumbra. Este móvil Xiaomi 5G cuenta con procesador flagship Qualcomm Snapdragon 888, una espectacular pantalla DotDisplay AMOLED de 120 Hz y 6,67\" y cámara de ultra alta resolución de 108 MP.', 'img_9b2ffc701fd5b84b5d9ed8730aa8a5ef.jpg', 'Telefonos', '555.00'),
(24, 'Samsung Galaxy M12 128GB Negro Libre', 'Comienza a retratar tu mundo y a llevar todos tus recuerdos en la palma de tu mano con los 48 MP de la Cámara Principal de tu Galaxy M12 para capturar lo que te rodea. Para hacer los mejores retratos tienes la Cámara Macro y para los detalles de la vida, la Cámara de Profundidad.', 'img_e3a3b2962edab194e855877fb7160583.jpg', 'Telefonos', '229.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`, `id_cargo`) VALUES
(1, 'Ney Apolinario Mendieta', 'ney_apolinario1@hotmail.com', 'kian14', 'Ap660534919', 1),
(2, 'Melva Mendieta Sanchez', 'kerlyverenisse@hotmail.com', 'Melva', 'Melva1979', 2),
(3, 'Kerly Apolinario Mendieta', 'kerlyapolinario2002@gmail.com', 'Kerly', 'Apolinario2002', 2),
(4, 'justo', 'justodelgado@gmail.com', 'Justo', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `nombre_categoria` (`nombre_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
