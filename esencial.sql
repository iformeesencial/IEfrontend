-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2017 a las 20:15:33
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `numero` int(10) NOT NULL,
  `seccion` varchar(25) NOT NULL,
  `fecha_articulo` varchar(25) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `sub_titulo` varchar(45) DEFAULT NULL,
  `resumen` varchar(100) DEFAULT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `cantlike_articulo` int(10) DEFAULT NULL,
  `cantcomp_articulo` int(10) DEFAULT NULL,
  `cantvisi_articulo` int(10) DEFAULT NULL,
  `estado` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`numero`, `seccion`, `fecha_articulo`, `titulo`, `sub_titulo`, `resumen`, `descripcion`, `cantlike_articulo`, `cantcomp_articulo`, `cantvisi_articulo`, `estado`) VALUES
(1, 'deporte', '27/9/2017', 'Esto es una prueba', 'subtitulo de prueba', 'resumen de prueba', 'descripcion de la prueba', 1, 1, 1, 1),
(2, 'Politica', '28/9/2017', 'titulo principal', 'subtitulo lindo', 'esto es un resumen del articulo de politica', 'esto es un descripcion del articulo de politica', 20, 10, 13, 1);

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
-- Estructura de tabla para la tabla `comenta`
--

CREATE TABLE `comenta` (
  `correo_persona` varchar(45) NOT NULL,
  `numero_coment` int(10) NOT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `fecha_coment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comenta`
--

INSERT INTO `comenta` (`correo_persona`, `numero_coment`, `comentario`, `fecha_coment`) VALUES
('nachoanime1@hotmail.com', 1, 'linda publicacion', '28/9/2017 1'),
('nachoanime1@hotmail.com', 1, 'comentario lindo 2', '28/9/2017 2'),
('nachoanime2@hotmail.com', 1, 'akljsdklajsdkljasd', '28/9/2017 3'),
('nachoanime3@hotmail.com', 1, 'gghdfghdfghfghfghgfh', '28/9/2017 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crea`
--

CREATE TABLE `crea` (
  `numero_arti_crea` int(10) NOT NULL,
  `fecha_crea` varchar(25) DEFAULT NULL,
  `titulo_art` varchar(45) DEFAULT NULL,
  `subtitulo_art` varchar(45) DEFAULT NULL,
  `resumen_art` varchar(100) DEFAULT NULL,
  `descripcion_art` varchar(1000) DEFAULT NULL,
  `cantlike_art` int(10) DEFAULT NULL,
  `cantcomp_art` int(10) DEFAULT NULL,
  `cantvisita_art` int(10) DEFAULT NULL,
  `estado_art` varchar(15) DEFAULT NULL,
  `correoadmin_art` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edicion`
--

CREATE TABLE `edicion` (
  `fecha` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('ignacio', 'gallardo', 'nachoanime2@hotmail.com', 'b623e24add2f342de2acdf8b4edad496'),
('ignacio', 'gallardo', 'nachoanime3@hotmail.com', 'b623e24add2f342de2acdf8b4edad496'),
('matias', 'gallardo', 'nachoanime400@hotmail.com', 'b623e24add2f342de2acdf8b4edad496'),
('ignacio', 'gallardo', 'nachoanime4@hotmail.com', 'b623e24add2f342de2acdf8b4edad496'),
('kopkopkopkkop', 'asdasdasdasdasd', 'nachoanime51@hotmail.com', 'b623e24add2f342de2acdf8b4edad496');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE `pertenece` (
  `fecha_edicion` varchar(25) NOT NULL,
  `numero_art` int(10) DEFAULT NULL,
  `seccion` varchar(25) DEFAULT NULL
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
('nachoanime1@hotmail.com', 23091329),
('nachoanime2@hotmail.com', 23091329),
('nachoanime3@hotmail.com', 87897897),
('nachoanime400@hotmail.com', 23091329);

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
('nachoanime1@hotmail.com', 'Suscripcion 3 dias', 'Activo'),
('nachoanime2@hotmail.com', 'Sin suscripcion', 'Activo'),
('nachoanime3@hotmail.com', 'Sin suscripcion', 'Activo'),
('nachoanime400@hotmail.com', 'Suscripcion 3 dias', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `numero_art` int(3) NOT NULL,
  `correo_per` varchar(45) NOT NULL,
  `seccion_art` varchar(25) NOT NULL,
  `fecha_visita` varchar(25) DEFAULT NULL
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
  ADD PRIMARY KEY (`numero`,`seccion`);

--
-- Indices de la tabla `baja_suspende`
--
ALTER TABLE `baja_suspende`
  ADD PRIMARY KEY (`numero_baja`);

--
-- Indices de la tabla `comenta`
--
ALTER TABLE `comenta`
  ADD PRIMARY KEY (`correo_persona`,`numero_coment`,`fecha_coment`),
  ADD KEY `numero_coment` (`numero_coment`);

--
-- Indices de la tabla `crea`
--
ALTER TABLE `crea`
  ADD PRIMARY KEY (`numero_arti_crea`);

--
-- Indices de la tabla `edicion`
--
ALTER TABLE `edicion`
  ADD PRIMARY KEY (`fecha`);

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
  ADD PRIMARY KEY (`fecha_edicion`);

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
  ADD PRIMARY KEY (`numero_art`,`correo_per`,`seccion_art`),
  ADD KEY `correo_per` (`correo_per`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `correoadmin` FOREIGN KEY (`correoadmin`) REFERENCES `persona` (`correo`);

--
-- Filtros para la tabla `baja_suspende`
--
ALTER TABLE `baja_suspende`
  ADD CONSTRAINT `numero_baja` FOREIGN KEY (`numero_baja`) REFERENCES `articulo` (`numero`);

--
-- Filtros para la tabla `comenta`
--
ALTER TABLE `comenta`
  ADD CONSTRAINT `correo_persona` FOREIGN KEY (`correo_persona`) REFERENCES `persona` (`correo`),
  ADD CONSTRAINT `numero_coment` FOREIGN KEY (`numero_coment`) REFERENCES `articulo` (`numero`);

--
-- Filtros para la tabla `crea`
--
ALTER TABLE `crea`
  ADD CONSTRAINT `numero_arti_crea` FOREIGN KEY (`numero_arti_crea`) REFERENCES `articulo` (`numero`);

--
-- Filtros para la tabla `modifica`
--
ALTER TABLE `modifica`
  ADD CONSTRAINT `correo_admin_modi` FOREIGN KEY (`correo_admin_modi`) REFERENCES `persona` (`correo`);

--
-- Filtros para la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD CONSTRAINT `fecha_edicion` FOREIGN KEY (`fecha_edicion`) REFERENCES `edicion` (`fecha`);

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

--
-- Filtros para la tabla `visita`
--
ALTER TABLE `visita`
  ADD CONSTRAINT `correo_per` FOREIGN KEY (`correo_per`) REFERENCES `persona` (`correo`),
  ADD CONSTRAINT `numero_art` FOREIGN KEY (`numero_art`) REFERENCES `articulo` (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
