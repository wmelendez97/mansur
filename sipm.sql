-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2022 a las 15:17:34
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sipm`
--
CREATE DATABASE IF NOT EXISTS `sipm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sipm`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `descuento` int(3) NOT NULL,
  `descripcion` text NOT NULL,
  `img` varchar(250) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `ge_id` int(5) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `tallas` tinyint(1) NOT NULL,
  `cantidad` int(5) NOT NULL,
  PRIMARY KEY (`art_id`),
  KEY `cat_id` (`cat_id`),
  KEY `ge_id` (`ge_id`),
  FULLTEXT KEY `nombre` (`nombre`,`marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`art_id`, `fecha`, `nombre`, `marca`, `precio`, `descuento`, `descripcion`, `img`, `cat_id`, `ge_id`, `estado`, `tallas`, `cantidad`) VALUES
(1, '2019-07-18', 'Graffiti Long Sleeve T Shirt', 'LShirt', '8.12', 0, '¡Confeccionada en un tejido de micro canalé suave y liviano, esta camiseta de manga larga con cuello simulado es una pieza básica para cualquier look! Usa una falda para vibraciones de muy buen gusto o en jeans para una apariencia elegante de streetwear.', 'Grafiti TShirt.png', 3, 1, 1, 1, 10),
(2, '2019-07-18', 'Reloj RED WOMEN', 'WJewelry', '7.47', 0, 'Característica:\r\n\r\n100% nuevo y de alta calidad.\r\n\r\nDiseño único de esfera redonda, muy elegante y con estilo.\r\n\r\nCierre de hebilla ajustable.\r\n\r\nForma del dial: redondo\r\n\r\nMaterial: metal y cuarzo', 'RED WOMEN.png', 1, 1, 1, 1, 10),
(3, '2019-07-18', 'Botas GOLDEN BROWN', 'ICat', '66.07', 0, '¡Nuestras botas para hombre definitivamente están hechas para caminar! Sí, las botas de cuero para hombres y las botas militares para hombres preparan los pies para pisar el patio, salir a la carretera o a la pista de baile o caminar por los pasillos del poder.', 'GOLDEN BROWN.png', 6, 2, 1, 1, 10),
(4, '2019-07-18', 'Reloj DEEP COFFEE', 'WJewelry', '8.82', 8, 'La resistente correa de cuero y una esfera grande hacen que el reloj se vea elegante y atemporal. La esfera monocromática y las manecillas de color plateado indican la hora exacta.', 'DEEP COFFEE.png', 1, 1, 1, 1, 10),
(5, '2019-07-18', 'Camiseta Once Upon a Time', 'DShrit', '12.88', 0, 'El arte lineal de flores agrega un toque dulce a una simple camiseta blanca. Esta camisa de manga corta extragrande brinda un ambiente relajado y casual a cualquier atuendo.', 'Once Upon a Time.png', 3, 1, 1, 1, 10),
(6, '2019-07-18', 'Camiseta Mr 1991 INC Miss Go', 'DShrit', '6.18', 5, 'El arte distintivo en las mangas y el frente de esta camiseta agrega un ambiente vanguardista a cualquier atuendo.', 'Mr 1991.png', 2, 1, 1, 1, 10),
(7, '2019-07-18', 'Camiseta Lapel Man', 'DShrit', '29.77', 26, 'La camiseta clásica de cuello redondo opta por un estampado simple en el corpiño y un corpiño relajado. El tamaño es pequeño.', 'Lapel Man.png', 3, 2, 1, 1, 10),
(8, '2019-07-18', 'Pantalones Street man money', 'MJeans', '28.22', 0, 'Los pantalones ajustados van por una silueta cónica en las piernas y los bolsillos laterales para un atractivo funcional.', 'Street man money.png', 4, 2, 1, 1, 10),
(9, '2019-07-18', 'Pantalones Wear White', 'MJeans', '60.20', 0, 'De azul a blanco, así detallan este clásico par de jeans ajustados. El tamaño es pequeño.', 'Wear White.png', 4, 2, 1, 1, 10),
(10, '2019-07-18', 'Military Jeans Belt', 'AMan', '12.42', 10, 'El cinturón de piel sintética está asegurado con una hebilla rectangular en un acabado plateado para un toque militar.', 'Military Jeans Belt.png', 1, 2, 1, 1, 10),
(11, '2019-07-18', 'Pantalones Ripped Fold Slim Jeans Elasticity', 'MJeans', '26.09', 0, 'Estos jeans llevan la comodidad al siguiente nivel con su cintura elástica y detalles de cordón. Están diseñados con un estilo contemporáneo.', 'Ripped Fold Slim Jeans Elasticity.png', 4, 2, 1, 1, 10),
(12, '2019-07-18', 'Vestido Long Knit', 'FDress', '27.87', 26, 'Una opción a prueba de fallas para la oficina, este vestido presenta un cuello en U en contraste asegurado por un lazo de tela en la cintura.', 'Long Knit Dress.png', 5, 1, 1, 1, 10),
(13, '2019-07-18', 'Pantalon Casual Breathable', 'CBJeans', '31.54', 0, 'Los jeans rasgados son de un ancho que los hace muy cómodos. ¡Este diseño clásico de 5 bolsillos nunca pasa de moda!', 'Casual Breathable.png', 4, 2, 1, 1, 10),
(14, '2019-07-18', 'Short Waist Burrs Jeans Shorts', 'MD', '20.97', 20, 'Los pantalones cortos de mezclilla simples son esenciales durante todo el año. Los bolsillos laterales lo mantienen funcional.', 'Waist Burrs Jeans Shorts.png', 4, 1, 1, 1, 10),
(15, '2019-07-18', 'Anillo Crystal Fashion Jewelry Punk Skull', 'WJewelry', '8.52', 0, 'Metals Type: Copper\r\nMaterial: Cubic Zirconia', 'Crystal Fashion Jewelry Punk Skull.png', 1, 1, 1, 1, 10),
(16, '2019-07-18', 'Pulsera Silver Love Hearts', 'WJewelry', '7.37', 0, 'Metal: Silver\r\nStyle: Anklet', 'Silver Love Hearts.png', 1, 1, 1, 1, 10),
(17, '2019-07-18', 'Gorro Warm-keeping Knitted', 'MD', '5.82', 0, 'Material: cotton + polyester', 'Warm-keeping Knitted.png', 1, 2, 1, 1, 10),
(18, '2019-07-18', 'Camisa 3D Fashion Design', 'DShrit', '31.17', 0, '3D digital realistic pattern\r\nFabric: polyester', '3D Fashion Design.png', 2, 2, 1, 1, 10),
(19, '2019-07-18', 'Gorra Camouflage Ghost', 'Ghost', '10.99', 2, 'La gorra de béisbol clásica está bordada con el dibujo de un cráneo sobre el diseño de camuflaje militar.', 'Camouflage Ghost.png', 1, 2, 1, 1, 10),
(20, '2019-07-18', 'Camisa Collar Faux', 'FShrit', '26.49', 22, '¿Quieres ir por un aspecto casual y elegante? Confeccionada en algodón cómodo, esta camisa de manga larga es perfecta para la moda diaria.', 'Collar Faux.png', 2, 2, 1, 1, 10),
(21, '2019-07-18', 'Camisa Summer Fashion', 'DShrit', '9.86', 0, 'Material: Polyester,Cotton', 'Summer Fashion.png', 3, 2, 1, 1, 10),
(22, '2019-07-18', 'Camisa V - Neck Large', 'FShrit', '24.43', 20, 'Material: Polyester', 'V - Neck Large.png', 2, 1, 1, 1, 10),
(23, '2019-07-18', 'Camisa Dropped Shoulder Vertical', 'FShrit', '17.69', 0, 'Material: Cotton,Polyester', 'Dropped Shoulder Vertical.png', 2, 1, 1, 1, 10),
(24, '2019-07-18', 'Vestido Day Cat Pumpkin Dark', 'FDress', '19.05', 0, 'Material: Polyester ', 'Day Cat Pumpkin Dark.png', 5, 1, 1, 1, 10),
(25, '2019-07-18', 'Fashion Plaid Print', 'FDress', '19.36', 0, 'Material: Polyester', 'Fashion Plaid Print Women.png', 5, 1, 1, 1, 10),
(26, '2019-07-18', 'Zapatos deportivos RED 10', 'Adoc', '29.91', 0, 'Zapatos deportivos', 'Sports Shoes.png', 1, 1, 1, 1, 10),
(27, '2019-07-18', 'Plataformas ROSSO RED', 'Adoc', '35.71', 30, 'Weight: 1.6500kg \r\nPackage Contents: 1xshoes(pair)', 'ROSSO RED.png', 6, 1, 1, 1, 10),
(28, '2019-07-18', 'Botas RED WINE', 'ICat', '53.90', 50, 'Type: Boots \r\nMaterials: Genuine Leather', 'RED WINE.png', 6, 1, 1, 1, 10),
(29, '2019-07-18', 'Reloj NAVIFORCE 9028', 'Naviforce', '11.64', 0, 'Main Features:\r\n• Military style design, cool and fashion', 'NAVIFORCE.png', 1, 2, 1, 1, 10),
(30, '2019-07-18', 'Pantalon High Waist Trousers Woman Jeans', 'CBJeans', '29.99', 0, 'Length: Normal \r\nFit Type: Loose \r\nWaist Type: Mid \r\nClosure Type: Button Fly \r\nElasticity: Elastic \r\nPant Style: Boot Cut', 'High Waist Trousers.png', 4, 1, 1, 1, 10),
(31, '2019-07-18', 'Camisa What''s Up, My Witches', 'LShirt', '13.07', 0, 'The sweatshirt featuring personalized sentence print and skew neck, suitable for Halloween themes, a little sexy and fashion', 'Whats Up My Witches.png', 3, 1, 1, 1, 10),
(32, '2019-07-18', 'Reloj Curren 8166', 'Curren', '10.87', 0, 'Main Features:\r\n? High-precision quartz movement guarantees precise and punctual timing\r\n? Round watch dial is simple and generous\r\n? With date function', 'CURREN.png', 1, 2, 1, 1, 10),
(33, '2019-08-16', 'Plaid Pointed Chunky Heel Sandals', 'Yuki Yoru', '15.66', 0, 'Las elegantes sandalias puntiagudas incluyen detalles en piel sintética y una hebilla de metal en forma de U para contrastar la parte superior de tweed y los tacones de bloque.\r\n\r\nAlto de tacón: 6cm', 'Yuki Yoru - Plaid Pointed Chunky Heel Sandals.jpg', 6, 1, 1, 1, 15),
(34, '2019-08-16', 'Ruffle Trim Slide Sandals', 'Shoeland', '8.50', 0, 'Estas sandalias con volantes de tela sintética complementan a la perfección cualquier atuendo veraniego.\r\n\r\nMediciones de producto:\r\n35: Longitud del pie: 22.0-22.5cm, Ancho del pie: 8.5cm\r\n36: Longitud del pie: 22.5-23.0cm, Ancho del pie: 8.5-9.0cm\r\n37: Longitud del pie: 23.0-23.5cm, Ancho del pie: 9.0cm\r\n38: Longitud del pie: 23.5-24.0cm, Ancho del pie: 9.0-9.5cm\r\n39: longitud del pie: 24.0-24.5 cm, ancho del pie: 9.5 cm', 'Shoeland - Ruffle Trim Slide Sandals.jpg', 6, 1, 1, 1, 10),
(35, '2019-08-16', 'Strappy Sandals', 'Frivole', '14.30', 5, 'Con un tacón de bloque bajo y correas delgadas que aseguran tus pies, estas sandalias de gamuza sintética son tu calzado infalible, llueva o truene.\r\n\r\nAlto de tacón: 4cm', 'Frivole - Strappy Sandals.jpg', 6, 1, 1, 1, 15),
(36, '2019-08-16', 'Plain Faux Leather Flats', 'kokoin', '20.00', 5, 'Los tacones de piel sintética con punta cuadrada vienen en negro, blanco y almendra para un uso versátil dentro y fuera de la oficina.', 'kokoin - Plain Faux Leather Flats.jpg', 6, 1, 1, 1, 10),
(37, '2019-08-16', 'Lace-Up Chunky-Heel Ankle Boots', 'Zandy Shoes', '35.00', 5, 'Hecho en tonos que combinan con dorado, incluyen una hebilla y una cremallera lateral glamorosa en estos botines de gamuza sintética, por lo que es apropiado combinar con cualquier cosa, desde jeans hasta vestidos.', 'Zandy Shoes - Lace-Up Chunky-Heel Ankle Boots.jpg', 1, 1, 1, 1, 15),
(38, '2019-08-16', 'Ankle Strap Sandals', 'Arpeggi', '10.00', 0, 'Las sandalias con correa de tobillo de gamuza sintética cuentan con una correa de tobillo abrochada para asegurar el pie. Costuras de contraste resaltadas en la forma ajustada del zapato.', 'Arpeggi - Ankle Strap Sandals.jpg', 1, 1, 1, 1, 10),
(39, '2019-08-16', 'Ankle-Strap Block Heel Sandals', 'Sunsteps', '15.99', 0, 'Complete su vestimenta casual con estas sandalias de tacón transitables. Acentuado con correas delgadas y un tacón de bloque llamativo, estas sandalias elevan su atuendo en el trabajo y en su día casual.', 'Sunsteps - Ankle-Strap Block Heel Sandals.jpg', 6, 1, 1, 1, 15),
(40, '2019-08-16', 'Cross-Strap Platform Sandals', 'Megan', '20.00', 10, 'Sandalias hechas de piel sintética mate que incluye la hebilla le dan a estas sandalias de plataforma un encanto discreto.\r\n\r\nAlto de tacón: 5cm', 'Megan - Cross-Strap Platform Sandals.jpg', 6, 1, 1, 1, 15),
(41, '2019-08-17', 'Short-Sleeve Crewneck T-Shirt', 'Angel Love', '10.00', 0, 'Las camisetas lisas de cuello redondo vienen en tonos neutros para una fácil mezcla y combinación. El tamaño es pequeño.\r\n\r\n\r\nMediciones de producto:\r\nS: Anchura del hombro: 46 cm, busto: 98 cm, longitud de la manga: 22 cm, longitud total: 60 cm\r\nM: Anchura del hombro: 47 cm, busto: 102 cm, longitud de la manga: 23 cm, longitud total: 61 cm\r\nL: Anchura del hombro: 48 cm, busto: 106 cm, longitud de la manga: 24 cm, longitud total: 62 cm\r\nXL: Anchura del hombro: 49 cm, busto: 110 cm, longitud de la manga: 25 cm, longitud total: 63 cm', 'Angel Love - Short-Sleeve Crewneck T-Shirt.jpg', 2, 1, 1, 1, 30),
(42, '2019-08-17', 'V-Neck Chiffon Blouse', 'Alfie', '12.00', 4, 'Las mangas extra largas suben el estilo despreocupado de esta blusa de gasa cuadrada. El cuello en V de corte limpio muestra con elegancia el escote. Acentúalo aún más con un collar colgante minimalista.', 'Alfie - V-Neck Chiffon Blouse.jpg', 1, 1, 1, 1, 10),
(43, '2019-08-17', 'Long-Sleeve Mini A-Line Dress', 'Monroll', '20.00', 5, 'Puedes usar este vestido casual para los días más calurosos de la ciudad o en la playa.', 'monroll - Long-Sleeve Mini A-Line Dress.jpg', 1, 1, 1, 1, 10),
(44, '2019-08-17', 'Pleated Mini Skirt', 'Rosehedge', '11.00', 0, 'La minifalda corta y dulce viene con pliegues afilados, un botón combinado y cierre de cremallera lateral para un ajuste personalizado. Viene con pantalones cortos insertados.', 'Rosehedge - Pleated Mini Skirt.jpg', 1, 1, 1, 1, 10),
(45, '2019-08-17', 'Embroidered Socks', 'Cottonet', '2.00', 0, 'Par de calcetines a escoger entre diseños lindos y sencillos.', 'Cottonet - Embroidered Socks.jpg', 1, 1, 1, 1, 30),
(46, '2019-08-17', 'Mock- Turtleneck Heart-Embroidered Sweater', 'Moon City', '18.00', 4, 'Un pequeño corazón rojo está bordado en el cuello de cuello alto simulado de este suéter de algodón ajustado. El tamaño del corazón es pequeño.', 'MoonCity.jpg', 1, 1, 1, 1, 15),
(47, '2019-08-17', 'Floral Print Trifold Wallet', 'NICOLEBONNIE', '8.50', 0, '¡Una billetera funcional y bonita con un suave toque de niña! Equipado con un monedero con cierre giratorio para cambio suelto, 6 ranuras para tarjetas y un compartimento principal para notas. Disponible en negro, azul, marrón, gris y rosa.', 'NICOLEBONNIE.jpg', 1, 1, 1, 1, 15),
(48, '2019-08-17', 'Faux Leather Wallet', 'ETONWEAG', '12.50', 2, 'La elegante billetera presenta un exterior con estampado de madera y un elegante interior de piel sintética con múltiples ranuras para tarjetas. Disponible en café oscuro, café claro y azul marino oscuro.', 'ETONWEAG - Faux Leather Wallet.jpg', 1, 1, 1, 1, 10),
(49, '2019-08-17', 'Buckled Shoulder Bag', 'Minafox', '20.00', 0, 'Este bolso de hombro con hebilla viene con una correa para el hombro delgada hecha de piel sintética y una versión de lona más amplia adecuada para días casuales.', 'L_g0079641815.jpg', 1, 1, 1, 1, 15),
(50, '2019-08-17', 'High Top Sneakers', 'Rizmond', '30.67', 0, 'Zapatos altos', 'L_g0058306237.jpg', 6, 2, 1, 1, 10),
(51, '2019-08-17', 'Zip Wallet', 'Rinka Doll', '11.50', 2, 'Esta billetera compacta tiene todo, desde fotos y tarjetas hasta billetes y monedas con sus amplias ranuras y compartimento con cremallera. Un llavero con borlas agrega un atractivo elegante.', 'Rinka Doll - Zip Wallet.jpg', 1, 1, 1, 1, 15),
(52, '2019-09-27', 'Naviforce NF 9074', 'Naviforce', '25.00', 5, 'Dial Diameter Size: 42mm\r\n\r\nCase Thickness 11mm\r\n\r\nBand Width: 22mm\r\n\r\nBand Length: 23mm\r\n\r\nCase Colour: Black\r\n\r\nDial Colour:  Black\r\n\r\nMovement: Japanese Quartz Movement with Day and Date Function\r\n\r\nStrap: Genuine Leather\r\n\r\nStrap Colour: Brown, Black\r\n\r\nInterchangeable Straps: Yes\r\n\r\nWater Resistance: Upto 3 ATM', 'naviforce-meter-brown1-570x577.jpg', 1, 2, 1, 0, 10),
(53, '2019-09-27', 'Beribboned Puff-Sleeve Knit Top', 'CLICK', '36.90', 20, 'Imported from: South Korea\r\n\r\nMaterial:50% Cotton, 40% Acrylic, 10% Wool\r\n\r\nColor:Black, Cream, Mustard Yellow, Red\r\n\r\nWash care:	Dry Clean\r\n\r\nCatalog No.:	1077720115', 'Yess.jpg', 1, 1, 1, 0, 8),
(54, '2019-09-27', 'Under Armour HeatGear Long Sleeve', 'Under Armour', '20.99', 0, '84 % poliéster, 16 % elastán\r\n\r\nImportado\r\n\r\nCierre de zipper\r\n\r\nLavar a máquina\r\n\r\nTela HeatGear, con todos los beneficios de compresión UA, lo suficientemente cómoda para usarse todo el día.\r\n\r\nPaneles de malla elástica en las axilas para una ventilación estratégica.\r\n\r\nUPF 30+ protege tu piel de los dañinos rayos del sol.', '51JjXoc21JL._UX522_.jpg', 3, 2, 1, 0, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `car_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(6) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`car_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(20) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cat_id`, `categoria`) VALUES
(1, 'Accesorios'),
(2, 'Camisas'),
(3, 'Camisetas'),
(4, 'Pantalones'),
(5, 'Vestidos'),
(6, 'Zapatos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `ciu_id` int(5) NOT NULL AUTO_INCREMENT,
  `dep_id` int(5) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  PRIMARY KEY (`ciu_id`),
  KEY `dep_id` (`dep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ciu_id`, `dep_id`, `ciudad`) VALUES
(1, 1, 'San Miguel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `com_id` int(5) NOT NULL AUTO_INCREMENT,
  `car_id` int(5) NOT NULL,
  `art_id` int(5) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `cantidad` int(5) NOT NULL,
  PRIMARY KEY (`com_id`),
  KEY `car_id` (`car_id`),
  KEY `art_id` (`art_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `dep_id` int(5) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(50) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`dep_id`, `departamento`) VALUES
(1, 'San Miguel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `det_id` int(5) NOT NULL AUTO_INCREMENT,
  `ped_id` int(5) NOT NULL,
  `art_id` int(5) NOT NULL,
  `detalle` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `cantidad` int(5) NOT NULL,
  PRIMARY KEY (`det_id`),
  KEY `ped_id` (`ped_id`),
  KEY `art_id` (`art_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE IF NOT EXISTS `direccion` (
  `dir_id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `dep_id` int(5) NOT NULL,
  `ciu_id` int(5) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `user_id` int(6) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  PRIMARY KEY (`dir_id`),
  KEY `dep_id` (`dep_id`),
  KEY `ciu_id` (`ciu_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

CREATE TABLE IF NOT EXISTS `favorito` (
  `fav_id` int(5) NOT NULL AUTO_INCREMENT,
  `art_id` int(5) NOT NULL,
  `user_id` int(6) NOT NULL,
  PRIMARY KEY (`fav_id`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `art_id` (`art_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `ge_id` int(5) NOT NULL AUTO_INCREMENT,
  `genero` varchar(20) NOT NULL,
  PRIMARY KEY (`ge_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`ge_id`, `genero`) VALUES
(1, 'Femenino'),
(2, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `ped_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(6) NOT NULL,
  `fecha` text NOT NULL,
  PRIMARY KEY (`ped_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE IF NOT EXISTS `tallas` (
  `tall_id` int(5) NOT NULL AUTO_INCREMENT,
  `art_id` int(5) NOT NULL,
  `cantidad` int(5) NOT NULL,
  PRIMARY KEY (`tall_id`),
  KEY `art_id` (`art_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alist`
--

CREATE TABLE IF NOT EXISTS `tbl_alist` (
  `alist_id` int(11) NOT NULL AUTO_INCREMENT,
  `dt_create` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`alist_id`),
  KEY `dt_create` (`dt_create`),
  KEY `user_id` (`user_id`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1002 ;

--
-- Volcado de datos para la tabla `tbl_alist`
--

INSERT INTO `tbl_alist` (`alist_id`, `dt_create`, `user_id`, `group_id`) VALUES
(1001, '2000-01-01 00:00:00', 1001, 1001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_article`
--

CREATE TABLE IF NOT EXISTS `tbl_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `dt_create` datetime NOT NULL,
  `alist_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `idx` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`article_id`),
  KEY `alist_id` (`alist_id`),
  KEY `status` (`status`),
  KEY `idx` (`idx`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1011 ;

--
-- Volcado de datos para la tabla `tbl_article`
--

INSERT INTO `tbl_article` (`article_id`, `dt_create`, `alist_id`, `status`, `idx`, `title`, `content`) VALUES
(1001, '2000-01-01 00:00:00', 1001, 1, 1, 'Article 1 : Computer', '<div style=''color:white;background-color:#022;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 1 : Computer</b></p>\n<p>A computer is a device that can be instructed to carry out an arbitrary set of arithmetic or logical operations automatically. The ability of computers to follow a sequence of operations, called a program, make computers very flexible and useful. Such computers are used as control systems for a very wide variety of industrial and consumer devices. This includes simple special purpose devices like microwave ovens and remote controls, factory devices such as industrial robots and computer assisted design, but also in general purpose devices like personal computers and mobile devices such as smartphones. The Internet is run on computers and it connects millions of other computers.</p>\n</div>\n'),
(1002, '2000-01-01 00:00:00', 1001, 1, 2, 'Article 2 : World Wide Web', '<div style=''color:white;background-color:#202;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 2 : World Wide Web</b></p>\n<p>The World Wide Web (abbreviated WWW or the Web) is an information space where documents and other web resources are identified by Uniform Resource Locators (URLs), interlinked by hypertext links, and can be accessed via the Internet.English scientist Tim Berners-Lee invented the World Wide Web in 1989. He wrote the first web browser computer programme in 1990 while employed at CERN in Switzerland.</p>\n</div>\n'),
(1003, '2000-01-01 00:00:00', 1001, 1, 3, 'Article 3 : Hyperlink', '<div style=''color:white;background-color:#220;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 3 : Hyperlink</b></p>\n<p>In computing, a hyperlink, or simply a link, is a reference to data that the reader can directly follow either by clicking, tapping, or hovering. A hyperlink points to a whole document or to a specific element within a document. Hypertext is text with hyperlinks. The text that is linked is called anchor text. A software system that is used for viewing and creating hypertext is a hypertext system, and to create a hyperlink is to hyperlink (or simply to link). A user following hyperlinks is said to navigate or browse the hypertext.</p>\n</div>\n'),
(1004, '2000-01-01 00:00:00', 1001, 1, 4, 'Article 4 : Web browser', '<div style=''color:white;background-color:#200;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 4 : Web browser</b></p>\n<p>A web browser (commonly referred to as a browser) is a software application for retrieving, presenting, and traversing information resources on the World Wide Web. An information resource is identified by a Uniform Resource Identifier (URI/URL) and may be a web page, image, video or other piece of content. Hyperlinks present in resources enable users easily to navigate their browsers to related resources.</p>\n<p>Although browsers are primarily intended to use the World Wide Web, they can also be used to access information provided by web servers in private networks or files in file systems.</p>\n</div>\n'),
(1005, '2000-01-01 00:00:00', 1001, 1, 5, 'Article 5 : HTML', '<div style=''color:white;background-color:#020;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 5 : HTML</b></p>\n<p>HyperText Markup Language (HTML) is the standard markup language for creating web pages and web applications. With Cascading Style Sheets (CSS), and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web. Web browsers receive HTML documents from a webserver or from local storage and render them into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.</p>\n</div>\n'),
(1006, '2000-01-01 00:00:00', 1001, 1, 6, 'Article 6 : JavaScript', '<div style=''color:white;background-color:#002;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 6 : JavaScript</b></p>\n<p>JavaScript is a high-level, dynamic, untyped, and interpreted programming language. It has been standardized in the ECMAScript language specification. Alongside HTML and CSS, it is one of the three core technologies of World Wide Web content production; the majority of websites employ it and it is supported by all modern Web browsers without plug-ins. JavaScript is prototype-based with first-class functions, making it a multi-paradigm language, supporting object-oriented, imperative, and functional programming styles. It has an API for working with text, arrays, dates and regular expressions, but does not include any I/O, such as networking, storage, or graphics facilities, relying for these upon the host environment in which it is embedded.</p>\n</div>'),
(1007, '2000-01-01 00:00:00', 1001, 1, 7, 'Article 7 : Cascading Style Sheets', '<div style=''color:white;background-color:#022;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 7 : Cascading Style Sheets</b></p>\n<p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language.[1] Although most often used to set the visual style of web pages and user interfaces written in HTML and XHTML, the language can be applied to any XML document, including plain XML, SVG and XUL, and is applicable to rendering in speech, or on other media. Along with HTML and JavaScript, CSS is a cornerstone technology used by most websites to create visually engaging webpages, user interfaces for web applications, and user interfaces for many mobile applications.</p>\n</div>'),
(1008, '2000-01-01 00:00:00', 1001, 1, 8, 'Article 8 : PHP', '<div style=''color:white;background-color:#202;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 8 : PHP</b></p>\n<p>PHP is a server-side scripting language designed primarily for web development but is also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Development Team. PHP originally stood for Personal Home Page, but it now stands for the recursive acronym PHP: Hypertext Preprocessor.</p>\n</div>\n'),
(1009, '2000-01-01 00:00:00', 1001, 1, 9, 'Article 9 : MySQL', '<div style=''color:white;background-color:#220;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 9 : MySQL</b></p>\n<p>MySQL is an open-source relational database management system (RDBMS). Its name is a combination of "My", the name of co-founder Michael Widenius'' daughter, and "SQL", the abbreviation for Structured Query Language. The MySQL development project has made its source code available under the terms of the GNU General Public License, as well as under a variety of proprietary agreements. MySQL was owned and sponsored by a single for-profit firm, the Swedish company MySQL AB, now owned by Oracle Corporation. For proprietary use, several paid editions are available, and offer additional functionality.</p>\n</div>\n'),
(1010, '2000-01-01 00:00:00', 1001, 1, 10, 'Article 10 : jQuery (Last Article!)', '<div style=''color:white;background-color:#200;margin:20px 0;padding:20px;font-size:26px;''>\n<p><b>Article 10 : jQuery (Last Article!)</b></p>\n<p>jQuery is a cross-platform JavaScript library designed to simplify the client-side scripting of HTML. jQuery is the most popular JavaScript library in use today, with installation on 65% of the top 10 million highest-trafficked sites on the Web. jQuery is free, open-source software licensed under the MIT License.</p>\n</div>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cfgdb`
--

CREATE TABLE IF NOT EXISTS `tbl_cfgdb` (
  `cfgdb_id` int(11) NOT NULL AUTO_INCREMENT,
  `ckey` varchar(40) DEFAULT NULL,
  `cval` text,
  PRIMARY KEY (`cfgdb_id`),
  UNIQUE KEY `ckey` (`ckey`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1002 ;

--
-- Volcado de datos para la tabla `tbl_cfgdb`
--

INSERT INTO `tbl_cfgdb` (`cfgdb_id`, `ckey`, `cval`) VALUES
(1001, 'cfgapp', '{"tbl:user:default-page-size":10,"tbl:user:default-sort-val":"dt_create:asc"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `dt_create` datetime DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `pinidx` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL,
  `b_admin` tinyint(4) NOT NULL DEFAULT '0',
  `username` varchar(100) DEFAULT NULL,
  `passkey` varchar(300) DEFAULT NULL,
  `sess_exp` datetime DEFAULT NULL,
  `sess_sig` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `notes` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `dt_create` (`dt_create`),
  KEY `group_id` (`group_id`),
  KEY `pinidx` (`pinidx`),
  KEY `status` (`status`),
  KEY `username` (`username`),
  KEY `sess_sig` (`sess_sig`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1002 ;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `dt_create`, `group_id`, `pinidx`, `status`, `b_admin`, `username`, `passkey`, `sess_exp`, `sess_sig`, `first_name`, `last_name`, `email`, `notes`) VALUES
(1001, '2000-01-01 00:00:00', 1001, 1, 1, 1, 'admin', 'password', '2019-12-07 15:57:44', 'weuoapejvjhohauovrzekymtnxpddezqtuwegkaaebpamkjoqm', NULL, 'Administrator', 'admin@admin.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `user_id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `telefono` varchar(8) NOT NULL,
  `rango` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user_id`, `nombre`, `username`, `correo`, `pass`, `telefono`, `rango`) VALUES
(1, 'William Meléndez', 'Wijomepi', 'williamjmelendez@hotmail.com', '$2y$10$XN.QjpNtBfiD7T.egMjjBey43ccCDkchB2LCs5bazz6CzNUIr12U.', '75571938', 1),
(2, 'Keiry Hernandez', 'KeiryHdez', 'keiryhdez@gmail.com', '$2y$10$usXa3blt6n079P8oFS5Ixeeoc9aGDIcDXl4r9uwsvHs/Zm63x/Py6', '70880483', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categoria` (`cat_id`),
  ADD CONSTRAINT `articulo_ibfk_2` FOREIGN KEY (`ge_id`) REFERENCES `genero` (`ge_id`);

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`user_id`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `departamento` (`dep_id`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `articulo` (`art_id`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `carrito` (`car_id`);

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`ped_id`) REFERENCES `pedido` (`ped_id`),
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`art_id`) REFERENCES `articulo` (`art_id`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_2` FOREIGN KEY (`ciu_id`) REFERENCES `ciudad` (`ciu_id`),
  ADD CONSTRAINT `direccion_ibfk_3` FOREIGN KEY (`dep_id`) REFERENCES `departamento` (`dep_id`),
  ADD CONSTRAINT `direccion_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`user_id`);

--
-- Filtros para la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `favorito_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `articulo` (`art_id`),
  ADD CONSTRAINT `favorito_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`user_id`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`user_id`);

--
-- Filtros para la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD CONSTRAINT `tallas_ibfk_1` FOREIGN KEY (`art_id`) REFERENCES `articulo` (`art_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
