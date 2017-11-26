-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2017 a las 04:17:28
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `esencial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `correoadmin` varchar(45) NOT NULL,
  `tipo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`correoadmin`, `tipo`) VALUES
('nachoanime3@hotmail.com', 'Sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `numero` int(10) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `sub_titulo` varchar(45) DEFAULT NULL,
  `resumen` varchar(100) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `cantlike_articulo` int(10) DEFAULT NULL,
  `cantcomp_articulo` int(10) DEFAULT NULL,
  `cantvisi_articulo` int(10) DEFAULT NULL,
  `estado` int(10) DEFAULT NULL,
  `nomimagen` varchar(25) DEFAULT NULL,
  `correoadmin` varchar(45) NOT NULL,
  `fecha_crea` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`numero`, `titulo`, `sub_titulo`, `resumen`, `descripcion`, `cantlike_articulo`, `cantcomp_articulo`, `cantvisi_articulo`, `estado`, `nomimagen`, `correoadmin`, `fecha_crea`) VALUES
(1, 'Noticia', 'sub noticia', 'esto es un resumen', 'descripcion del la noticia', 10, 1, 1, 1, 'imagen.jpg', 'nachoanime3@hotmail.com', '30/10/2017'),
(2, 'esto es una noticia', 'subtitulo de noticia', 'resumen lindo', 'descripcion linda', 10, 0, 0, 1, 'nom', 'nachoanime3@hotmail.com', '30/10/2017'),
(3, 'Noticia linda coso', 'sub titulo lindo', 'resumend de noticia linda', 'descripcion coso coso', 0, 0, 0, 1, 'img.jpg', 'nachoanime3@hotmail.com', '31/10/2017'),
(4, 'Nueva consola', 'La nueva consola de Nacho causa sensacion', 'La nueva consola es una truchada pero nos pagan por esto', 'descripcion......', 2, 0, 0, 1, 'img.jpg', 'nachoanime3@hotmail.com', '08/11/2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baja_suspende`
--

CREATE TABLE `baja_suspende` (
  `numero_baja` int(10) NOT NULL,
  `correo_persona_baja` varchar(40) DEFAULT NULL,
  `fecha_baja` varchar(25) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcat` int(10) NOT NULL,
  `nombrecat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcat`, `nombrecat`) VALUES
(0, 'sin categoria'),
(1, 'Deportes'),
(2, 'Tecnologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `correo_persona` varchar(45) NOT NULL,
  `numero_coment` int(10) NOT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `fecha_coment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`correo_persona`, `numero_coment`, `comentario`, `fecha_coment`) VALUES
('nachoanime1@hotmail.com', 1, 'uiiuiui', '08/11/2017 09:34:45'),
('nachoanime1@hotmail.com', 1, 'rthrth', '08/11/2017 14:21:55'),
('nachoanime1@hotmail.com', 1, 'rthrthrhrthrthr', '08/11/2017 14:22:00'),
('nachoanime1@hotmail.com', 1, 'gsdfgsdfgdfgsdfgsdfg', '08/11/2017 14:22:07'),
('nachoanime1@hotmail.com', 2, 'asdasdasd', '08/11/2017 05:36:53'),
('nachoanime1@hotmail.com', 2, 'asdasdasdasdasdasdasdasd', '08/11/2017 05:36:57'),
('nachoanime1@hotmail.com', 2, 'ya tu ya', '08/11/2017 05:37:46'),
('nachoanime1@hotmail.com', 2, 'asdasdasdasdasdasd', '08/11/2017 05:37:53'),
('nachoanime1@hotmail.com', 4, 'uiojio', '08/11/2017 15:30:37'),
('nachoanime1@hotmail.com', 4, 'fghfghfgh', '08/11/2017 15:30:42'),
('nachoanime2@hotmail.com', 1, 'cvxcvxcvxcv', '08/11/2017 05:49:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE `contiene` (
  `id_cat` int(10) NOT NULL,
  `nombre_cat` varchar(25) NOT NULL,
  `id_edi` int(10) DEFAULT NULL,
  `fecha_edi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edicion`
--

CREATE TABLE `edicion` (
  `idedi` int(10) NOT NULL,
  `fecha_edi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `edicion`
--

INSERT INTO `edicion` (`idedi`, `fecha_edi`) VALUES
(1, '30/10/2017'),
(2, '31/10/2017'),
(3, '08/11/2017');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modifica`
--

CREATE TABLE `modifica` (
  `correo_admin_modi` varchar(40) NOT NULL,
  `numero_modi` varchar(10) DEFAULT NULL,
  `fecha_modi` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo` varchar(45) NOT NULL,
  `contrasena` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nombre`, `apellido`, `correo`, `contrasena`) VALUES
('ignacio', 'gallardo', 'nachoanime1@hotmail.com', 'b623e24add2f342de2acdf8b4edad496'),
('Jose', 'gallardo', 'nachoanime2@hotmail.com', 'b623e24add2f342de2acdf8b4edad496'),
('jose', 'gallardo', 'nachoanime3@hotmail.com', 'b623e24add2f342de2acdf8b4edad496'),
('JOse', 'Sito', 'ss@ss.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE `pertenece` (
  `numero_art_pertenece` int(10) NOT NULL,
  `fecha_pert` varchar(25) NOT NULL,
  `ida_cat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pertenece`
--

INSERT INTO `pertenece` (`numero_art_pertenece`, `fecha_pert`, `ida_cat`) VALUES
(1, '30/10/2017', 1),
(2, '30/10/2017', 1),
(3, '31/10/2017', 1),
(4, '08/11/2017', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `id` int(2) NOT NULL,
  `costo` int(5) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `tamaño` varchar(10) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `seccion` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sancion_borra_modifi`
--

CREATE TABLE `sancion_borra_modifi` (
  `correo_usu` varchar(40) NOT NULL,
  `correo_admin` varchar(40) NOT NULL,
  `fecha_sancion` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefono`
--

CREATE TABLE `telefono` (
  `correoper` varchar(45) NOT NULL,
  `telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefono`
--

INSERT INTO `telefono` (`correoper`, `telefono`) VALUES
('nachoanime1@hotmail.com', 26262),
('nachoanime2@hotmail.com', 87989798),
('nachoanime3@hotmail.com', 3232323);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `correousu` varchar(45) NOT NULL,
  `tipo` varchar(40) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`correousu`, `tipo`, `estado`) VALUES
('nachoanime1@hotmail.com', 'Sin suscripcion', 'activo'),
('nachoanime2@hotmail.com', 'Sin suscripcion', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `numero_articulo` int(3) NOT NULL,
  `num_visita` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`correoadmin`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `baja_suspende`
--
ALTER TABLE `baja_suspende`
  ADD PRIMARY KEY (`numero_baja`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcat`,`nombrecat`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`correo_persona`,`numero_coment`,`fecha_coment`),
  ADD KEY `numero_coment` (`numero_coment`);

--
-- Indices de la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD PRIMARY KEY (`id_cat`,`nombre_cat`);

--
-- Indices de la tabla `edicion`
--
ALTER TABLE `edicion`
  ADD PRIMARY KEY (`idedi`,`fecha_edi`);

--
-- Indices de la tabla `modifica`
--
ALTER TABLE `modifica`
  ADD PRIMARY KEY (`correo_admin_modi`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD PRIMARY KEY (`numero_art_pertenece`,`fecha_pert`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sancion_borra_modifi`
--
ALTER TABLE `sancion_borra_modifi`
  ADD PRIMARY KEY (`correo_usu`,`correo_admin`),
  ADD KEY `correo_admin` (`correo_admin`);

--
-- Indices de la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD PRIMARY KEY (`correoper`,`telefono`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`correousu`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`numero_articulo`,`num_visita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `numero` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `baja_suspende`
--
ALTER TABLE `baja_suspende`
  MODIFY `numero_baja` int(10) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `correoadmin` FOREIGN KEY (`correoadmin`) REFERENCES `persona` (`correo`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `correo_persona` FOREIGN KEY (`correo_persona`) REFERENCES `persona` (`correo`);

--
-- Filtros para la tabla `modifica`
--
ALTER TABLE `modifica`
  ADD CONSTRAINT `correo_admin_modi` FOREIGN KEY (`correo_admin_modi`) REFERENCES `persona` (`correo`);

--
-- Filtros para la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD CONSTRAINT `numero_art_pertenece` FOREIGN KEY (`numero_art_pertenece`) REFERENCES `articulo` (`numero`);

--
-- Filtros para la tabla `sancion_borra_modifi`
--
ALTER TABLE `sancion_borra_modifi`
  ADD CONSTRAINT `correo_admin` FOREIGN KEY (`correo_admin`) REFERENCES `persona` (`correo`),
  ADD CONSTRAINT `correo_usu` FOREIGN KEY (`correo_usu`) REFERENCES `persona` (`correo`);

--
-- Filtros para la tabla `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `correo` FOREIGN KEY (`correoper`) REFERENCES `persona` (`correo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `correousu` FOREIGN KEY (`correousu`) REFERENCES `persona` (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
