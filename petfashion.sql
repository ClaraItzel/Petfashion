-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2021 a las 04:14:39
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petfashion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'Perros', 'Ropa, accesorios, alimentos y medicamentos para perros'),
(2, 'Gatos', 'Ropa, accesorios, alimentos y medicamentos para gatos'),
(3, 'Aves', 'Accesorios, alimentos y medicamentos para aves');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id_colaborador` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `prim_ape` varchar(50) NOT NULL,
  `seg_ape` varchar(50) DEFAULT NULL,
  `rfc` varchar(13) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `experiencia` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `presentacion` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colaboradores`
--

INSERT INTO `colaboradores` (`id_colaborador`, `id_empresa`, `nombre`, `prim_ape`, `seg_ape`, `rfc`, `correo`, `cargo`, `experiencia`, `fecha_inicio`, `fecha_fin`, `presentacion`, `foto`) VALUES
(1, 1, 'Javier', 'Vazquez', 'Ortega', 'VAOJ990630H12', 'javier@correo.com', 'Vendedor', '', '2021-10-02', NULL, 'Es un vendedor apasionado por las aves, le encanta servir a nuestros clientes y siempre es muy amigable con los pequeños dueños de una mascota!!', '/petfashion/vendedor.jpg'),
(2, 1, 'María', 'Juárez', 'León', 'JULM991102MMC', 'maria@correo.com', 'Atención al cliente', '', '2021-10-08', NULL, 'Es una persona apasionada por ayudar a quien lo necesite, siempre te resuelve tus dudas con un trato amable, no dudes en llamar si necesitas ayuda!!', '/petfashion/atencion_cliente.jpg'),
(3, 1, 'Mario', 'Gonzalez', 'Fernández', 'GOFMMMFRBV', 'mario@correo.com', 'Encargado de sucursal', '', '2021-10-15', '0000-00-00', 'En el mejor encargado de sucursal, siempre está disponible para mejorar tu experiencia de compra', '/petfashion/encargado_tienda.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `metodo_pago` int(11) NOT NULL,
  `forma_pago` int(11) NOT NULL,
  `tipo_pago` int(11) NOT NULL,
  `promociones` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `num_contacto` varchar(20) NOT NULL,
  `cond_compra` varchar(100) NOT NULL,
  `aviso_legal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre`, `logo`, `rfc`, `direccion`, `slogan`, `num_contacto`, `cond_compra`, `aviso_legal`) VALUES
(1, 'PetFashion', '/Petfashion/logo.jpg', 'PETF150623A2S', 'Av De Los Reyes Mz 7 Lt 3, Santa Rosa de Lima, 54740 Cuautitlán Izcalli, Méx.', '“¡Para dueños y mascotas felices! Tu mascota al último ladrido de la moda”', '5522002121', '/petsfashion/archivos/condiciones_compra.pdf', '/petsfashion/archivos/politicas_de_privacidad.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencias`
--

CREATE TABLE `experiencias` (
  `id_experiencia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `experiencias`
--

INSERT INTO `experiencias` (`id_experiencia`, `id_usuario`, `descripcion`, `fecha`) VALUES
(1, 5, 'He encontrado todos los productos que necesitaba gracias a ustedes, mi gato hoy está a la moda. compre un chaleco para el frío, ya que mi gato suele meterse en las cobijas y no salir, ahora con este producto en las noches frías está en cualquier lugar sin pasar frío, esta tienda garantiza calidad.', '2020-10-01'),
(2, 6, 'El producto me llegó en excelentes condiciones, era justo lo que buscaba y el servicio de paquetería fue muy eficaz. Mi perro CornFleis necesitaba una correa duradera porque es un animal muy grande, había estado buscando en muchas tiendas, hasta que por fin encontré una que pueda aguantar el peso de mi mascota, muchas gracias.', '2021-06-30'),
(3, 3, 'La calidad de la tela de la ropa es super buena y las medidas son adecuadas', '2020-06-30'),
(4, 4, 'Las casas para perro adulto son de buen tamaño y no guardan olores tal como lo prometen, sin duda es una tienda confiable', '2021-03-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `tipo_factura` varchar(30) NOT NULL,
  `regimen` varchar(30) NOT NULL,
  `sello` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE `forma_pago` (
  `id_forma` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`id_forma`, `nombre`) VALUES
(1, 'Pago en efectivo'),
(2, 'Tarjeta bancaria'),
(3, 'Vales u otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identidad`
--

CREATE TABLE `identidad` (
  `id_identidad` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `mision` varchar(350) NOT NULL,
  `vision` varchar(350) NOT NULL,
  `fundacion` text NOT NULL,
  `historia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `identidad`
--

INSERT INTO `identidad` (`id_identidad`, `id_empresa`, `mision`, `vision`, `fundacion`, `historia`) VALUES
(1, 1, 'Crear un espacio único para la compra de artículos exclusivos para mascotas, con una gran variedad sin excluir a aquellas mascotas poco comunes.\r\nLa misión de la empresa es garantizar a sus clientes productos que reflejen su misma pasión por la moda, en sus mascotas que son parte de ellos.\r\n', 'Ser una empresa competitiva en la comercialización y distribución de prendas de vestir y accesorios para animales, que pueda llegar a clientes de todo el mundo facilitándoles diferentes diseños y modas de acuerdo a sus gustos y tendencias a precios asequibles\r\n', '\r\n	La empresa PetsFashion nace en 2015 como un objetivo personal de Clara Gómez, una activista en pro de los derechos de los animales y su protección, el principal objetivo de la fundadora es distribuir productos de calidad para las mascotas, teniendo como prioridad el bienestar y comodidad de los animales, pues se dió cuenta de que muchas empresas comercializan productos de baja calidad sin importar las consecuencias que les traen a la salud de nuestras mascotas, es por ello que en 2015 se comprometió en la creación de esta empresa donde además de consentir y hacer lucir a nuestras mascotas, podemos tener la seguridad de que estos productos no comprometen el bienestar de nuestros pequeños peludos, si ellos se sienten bien, los dueños nos sentiremos seguros y en paz con nuestras especies. \r\nDerivado de diversas situaciones que han surgido respecto a la protección de los animales, es importante hacer llegar a un mayor número de personas información de los productos de calidad para las mascotas, es por eso que en 2021, se invertirá en la creación de una tienda en línea para la empresa, por lo que nuestros clientes podrán adquirir sus productos desde la comodidad de su hogar, sin perderse de los productos de novedad, descuentos y promociones especiales del portal en línea.\r\n', '2015- Fundación de la empresa\n2021-  Creación de la tienda en linea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes_contacto`
--

CREATE TABLE `mensajes_contacto` (
  `id_mesaje` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `prim_ape` varchar(50) NOT NULL,
  `seg_ape` varchar(50) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes_contacto`
--

INSERT INTO `mensajes_contacto` (`id_mesaje`, `nombre`, `prim_ape`, `seg_ape`, `correo`, `telefono`, `mensaje`) VALUES
(1, 'Lilia', 'Garcia ', 'Inclán', 'liliaginclan@gmail.com', '5522002121', 'Muy wena tienda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `id_metodo` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `metodo_pago`
--

INSERT INTO `metodo_pago` (`id_metodo`, `nombre`) VALUES
(1, 'Pago en una solo exhibición'),
(2, 'Pago en parcialidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE `objetivos` (
  `id_objetivos` int(11) NOT NULL,
  `id_identidad` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `objetivos`
--

INSERT INTO `objetivos` (`id_objetivos`, `id_identidad`, `descripcion`) VALUES
(1, 1, 'Captar la atención de nuevos clientes a través de la amplia variedad de productos'),
(2, 1, 'Respetar la confidencialidad de los datos de nuestros clientes'),
(3, 1, 'Tener gran variedad de productos para poder satisfacer la necesidades de mayor número posible de clientes'),
(4, 1, 'Expandir el alcance de la plataforma a otros estados para abarcar el mayor público posible'),
(5, 1, 'Implementar códigos con descuentos atractivos para atraer más público a la plataforma'),
(6, 1, 'Tener una interfaz intuitiva para mejorar la experiencia de usuario y hacer la navegación fácil.'),
(7, 1, 'Estar actualizando los productos de manera constante para mantener interesada a la clientela actual y atraer nuevo público'),
(8, 1, 'Generar un sentimiento de fidelidad en la clientela proporcionando el mejor de los servicios posibles, monitoreando los envíos a los clientes, mejorando la calidad de nuestras prendas, etc.'),
(9, 1, 'Hacer estudios de mercados de manera constante para mantenernos competitivos en el mercado'),
(10, 1, 'Darnos a conocer por medio de redes sociales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio_compra` double NOT NULL,
  `precio_venta` double NOT NULL,
  `imagen` text NOT NULL,
  `video` varchar(100) DEFAULT NULL,
  `disponibilidad` int(11) NOT NULL,
  `devoluciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_categoria`, `nombre`, `descripcion`, `precio_compra`, `precio_venta`, `imagen`, `video`, `disponibilidad`, `devoluciones`) VALUES
(1, 1, 'Rompevientos Fiusha con Azul ', 'Rompevientos Fiusha con Azul para Perro, X-Grande\r\nIdeal para: Peso 20-30 kg, espalda 48-55 cm, Raza sugerida boxer', 60, 100, '<img src=\"/petfashion/rompevientos.jfif\">', NULL, 0, ''),
(2, 1, 'Sudadera Azul-Gris', 'Sudadera Colorblock Azul-Gris, Mediano 42-46 cm', 350, 450, '<img src=\"/petfashion/sudadera.jfif\">', NULL, 0, ''),
(3, 2, 'Disfraz de Rey para Gato', 'Disfraz de rey para Gato\r\nUnitalla\r\n', 60, 180, '<img src=\"/petfashion/reygato.jfif\">', NULL, 0, ''),
(4, 2, 'Disfraz Vaquero para Gato', 'Disfraz de vaquero para gato \r\nUnitalla\r\nMulticolor', 70, 200, '<img src=\"/petfashion/vaquerogato.jfif\">', NULL, 0, ''),
(5, 3, 'Zona de Juegos para Ave', 'Zona de Juegos para Ave \n15cm de largo * 15cm de ancho\nMadera natural pulida', 250, 400, '<img src=\"/petfashion/juegosave.jfif\">', NULL, 0, ''),
(6, 3, 'Jaula para Aves', 'Jaula para Aves Modelo Niza Palace \r\n47cm x 36cm x 68cm * \r\nMetal conn base plastica y charola removible\r Para aves de ornato de tamaño pequeño', 900, 1800, '<img src=\"/petfashion/jaula.jpg\">', NULL, 0, ''),
(7, 1, 'Casa para perro', 'Casa para perro, raza grande \r\nPolietileno moldeado con proteccion UV y antibacterial * \r\nDiseño ergonómico\r Resistentes a impactos, mordidas y cambios del clima', 1200, 2500, '<img src=\"/petfashion/casa_perro.png\">', NULL, 0, ''),
(8, 1, 'Cama para perro', 'Cama para perro chico - mediano\r\nUnitalla\r\nMulticolor\r 50cm x 70 cm', 80, 220, '<img src=\"/petfashion/cama_colores.jpg\">', NULL, 0, ''),
(9, 1, 'Lanza Pelotas Automático', 'Juguete automático para perro\r\nIdeal para interior y exterior\r\nVerde llamativo\r Funciona con baterias de litio\rDistancia de lanzamiento ajustable', 1400, 2400, '<video src=\"lanzapelotas.mp4\" autoplay controls></video>', '<video src=\"lanzapelotas.mp4\" controls autoplay></video>', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_valoracion`
--

CREATE TABLE `producto_valoracion` (
  `id_valor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `valoracion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_valoracion`
--

INSERT INTO `producto_valoracion` (`id_valor`, `id_usuario`, `id_producto`, `valoracion`) VALUES
(1, 3, 1, 'Las costuras de la prenda vienen bien reforzadas y es realmente impermeable, me sirvió mucho para dar un paseo a mi perro sin preocuparme por la lluvia'),
(2, 4, 2, 'La sudadera es muy calientita, mi perro ya no sufre frio y se ve realmente fashion con ese bolsillo de la prenda, el gorrito le da mejor apariencia'),
(3, 5, 3, 'Aunque la coronita la ocupa de juguete, mi gato se ve super cute con su capa de rey, me encanta que las correas del disfraz hacen que no se le desacomode'),
(4, 6, 4, 'A mi gato le encanta su disfraz de vaquero, se le ajusta a su cuerpo y puede seguir luciendo su pelaje, realmente estoy satisfecha con esta compra'),
(5, 3, 5, 'La zona de juegos es atractiva para mi canario, me gustaria que vendan un tamaño mas grande, pero por el momento esta es adecuada para mi cantarin'),
(6, 4, 6, 'Esta jaula tiene un diseño mas bonito que las jaulas comunes, y adecuada para limpiar la suciedad'),
(7, 5, 7, 'La casita es muy bonita y con un diseño original, mi perro la usa en tiempo de calor y de frio'),
(8, 6, 8, 'Cama con bonito diseño y repelente al agua, me gusta que es facil lavarla'),
(9, 3, 9, 'Es muy efectiva para cuando no puedo jugar con mi perro, me gusta que se pase un buen rato solito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id_promocion` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `descripcion` text NOT NULL,
  `descuento` float NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id_promocion`, `codigo`, `descripcion`, `descuento`, `fecha_inicio`, `fecha_fin`, `estatus`) VALUES
(1, '20OCTUBREH', '20% De descuento en productos de temporada hallowen', 0.2, '2021-10-16', '2021-10-29', 1),
(2, '15DICIEMBR', '15% De descuento en productos de temporada navideña', 0.15, '2021-12-01', '2021-12-22', 0),
(3, '30BUENFIN', '30% De descuento en productos seleccionados para el buen fin', 0.3, '2021-11-16', '2021-11-20', 0),
(4, '15PRIMAVER', '15% De descuento en disfraces de temporada primavera', 0.15, '2022-03-03', '2022-03-20', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `prim_ape` varchar(50) NOT NULL,
  `seg_ape` varchar(50) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `password` varchar(200) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `prim_ape`, `seg_ape`, `correo`, `direccion`, `telefono`, `rfc`, `password`, `foto`) VALUES
(3, 'Lilia Guadalupe', 'Garcia ', 'Inclán', 'liliaginclan@gmail.com', 'Avenida Reforma', '5522002121', 'GAIL991106MMC', 'd41d8cd98f00b204e9800998ecf8427e', '/Petfashion/lilia.jpg'),
(4, 'Herlinda', 'Inclan', 'Lazaro', 'herlinda@correo.com', 'Avenida Reforma', '5539075394', 'IALH720317MMC', 'd41d8cd98f00b204e9800998ecf8427e', '/Petfashion/herlinda.jpg'),
(5, 'Monica', 'Arriaga', 'Diaz', 'monica@correo.com', 'Estado de México- Atizapán de Zaragoza.', '5522003232', 'AIDM680231MMC', 'e10adc3949ba59abbe56e057f20f883e', '/Petfashion/monica.jpg'),
(6, 'Fabiola', 'Torreblanca', 'Jenkins', 'fabiola@correo.com', 'CDMX Av del trabajo', '5566998787', 'TOJF861121HAM', 'e10adc3949ba59abbe56e057f20f883e', '/Petfashion/fabiola.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valores`
--

CREATE TABLE `valores` (
  `id_valores` int(11) NOT NULL,
  `id_identidad` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `valores`
--

INSERT INTO `valores` (`id_valores`, `id_identidad`, `nombre`, `descripcion`) VALUES
(1, 1, 'Transparencia', 'Siempre seremos claros  en la descripción de nuestros productos, toda la información que nuestros clientes necesiten, será otorgada de forma íntegra y verídica, todos los colaboradores estamos comprometidos con la empresa y nuestros clientes para el desarrollo honesto de nuestras actividades'),
(2, 1, 'Respeto', 'El respeto es el principio primordial del desarrollo de la humanidad, por lo que dentro de la empresa todos nos trataremos con cordialidad y respeto.Somos conscientes de que nuestros usuarios son seres vivos que merecen todo nuestro afecto, por lo tanto merecen ser tratados con dignidad, al raspetar a tu mascota aseguramos tu tranquilidad y confianza'),
(3, 1, 'Honestidad', 'Anteponer la sinceridad ante cualquier situación, es importante generar credibilidad a los objetivos de la empresa, facilitando una relación estrecha y saludable con nuestros clientes. La transparencia en nuestro trato es el principio del respeto dentro y fuera de la empresa.'),
(4, 1, 'Integridad', 'Nuestros colaboradores deben ser personas que cuenten con toda la confianza para poner en sus manos a nuestros clientes y usuariosDar lo mejor de cada uno en cada actividad realizada, haciéndonos responsables de los resultados arrojados'),
(5, 1, 'Compromiso', 'Permite la transición entre las promesas y los hechos, generando los beneficios y resultados tangibles, ningún compromiso planteado para nuestros clientes será insignificante, se trabajará activamente en cumplir todas las promesas.'),
(6, 1, 'Pasión', 'Usar nuestro impulso y optimismo para motivar, comprometer e inspirar a otras personas que amen nuestra causa. Ninguna actividad ni trato será simplificado, cada actividad será sumada al alcance de nuestros objetivos y la satisfacción de nuestros colaboradores y clientes. '),
(7, 1, 'Puntualidad', 'Respetar el tiempo de nuestros clientes es un objetivo primordial para la empresa, es por ello que todas las actividades se desarrollan de forma organizada y ágil, la satisfacción oportuna de las necesidades de los clientes y las actividades de los colaboradores será pieza clave para generar fidelidad de clientes'),
(8, 1, 'Excelencia', 'Los productos que manejamos en la empresa gozan de una calidad superior a la media de la estándar, brindando seguridad y satisfacción en la cobertura de las necesidades.'),
(9, 1, 'Diligencia', 'Tenemos el compromiso de identificar, prevenir y mitigar las necesidades antes que el cliente las exprese, es por eso que todos los esfuerzos serán dirigidos a la satisfacción del cliente.'),
(10, 1, 'Colaboración', 'Fomentar la creatividad entre los colaboradores, teniendo un ambiente de unión y trabajo en equipo.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id_colaborador`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `metodo_pago` (`metodo_pago`),
  ADD KEY `forma_pago` (`forma_pago`),
  ADD KEY `tipo_pago` (`tipo_pago`),
  ADD KEY `promociones` (`promociones`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  ADD PRIMARY KEY (`id_experiencia`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_compra` (`id_compra`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  ADD PRIMARY KEY (`id_forma`);

--
-- Indices de la tabla `identidad`
--
ALTER TABLE `identidad`
  ADD PRIMARY KEY (`id_identidad`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `mensajes_contacto`
--
ALTER TABLE `mensajes_contacto`
  ADD PRIMARY KEY (`id_mesaje`);

--
-- Indices de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`id_metodo`);

--
-- Indices de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`id_objetivos`),
  ADD KEY `id_identidad` (`id_identidad`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `producto_valoracion`
--
ALTER TABLE `producto_valoracion`
  ADD PRIMARY KEY (`id_valor`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promocion`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `valores`
--
ALTER TABLE `valores`
  ADD PRIMARY KEY (`id_valores`),
  ADD KEY `id_identidad` (`id_identidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id_colaborador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `experiencias`
--
ALTER TABLE `experiencias`
  MODIFY `id_experiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `forma_pago`
--
ALTER TABLE `forma_pago`
  MODIFY `id_forma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mensajes_contacto`
--
ALTER TABLE `mensajes_contacto`
  MODIFY `id_mesaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  MODIFY `id_metodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id_promocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD CONSTRAINT `colaboradores_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `compras_ibfk_3` FOREIGN KEY (`metodo_pago`) REFERENCES `metodo_pago` (`id_metodo`),
  ADD CONSTRAINT `compras_ibfk_4` FOREIGN KEY (`forma_pago`) REFERENCES `forma_pago` (`id_forma`),
  ADD CONSTRAINT `compras_ibfk_5` FOREIGN KEY (`tipo_pago`) REFERENCES `tipo_pago` (`id_tipo`),
  ADD CONSTRAINT `compras_ibfk_6` FOREIGN KEY (`promociones`) REFERENCES `promociones` (`id_promocion`);

--
-- Filtros para la tabla `experiencias`
--
ALTER TABLE `experiencias`
  ADD CONSTRAINT `experiencias_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id_compra`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `identidad`
--
ALTER TABLE `identidad`
  ADD CONSTRAINT `identidad_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);

--
-- Filtros para la tabla `objetivos`
--
ALTER TABLE `objetivos`
  ADD CONSTRAINT `objetivos_ibfk_1` FOREIGN KEY (`id_identidad`) REFERENCES `identidad` (`id_identidad`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `producto_valoracion`
--
ALTER TABLE `producto_valoracion`
  ADD CONSTRAINT `producto_valoracion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `producto_valoracion_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `valores`
--
ALTER TABLE `valores`
  ADD CONSTRAINT `valores_ibfk_1` FOREIGN KEY (`id_identidad`) REFERENCES `identidad` (`id_identidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
