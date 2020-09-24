-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla senoracarmen.apoyo_academicos
CREATE TABLE IF NOT EXISTS `apoyo_academicos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `apoyo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.apoyo_academicos: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `apoyo_academicos` DISABLE KEYS */;
INSERT INTO `apoyo_academicos` (`id`, `apoyo`, `created_at`, `updated_at`) VALUES
	(1, 'En Domicilio', '2020-07-03 10:57:54', '2020-07-03 10:57:54'),
	(2, 'En el Establecimiento', '2020-07-03 10:58:13', '2020-07-03 10:58:13'),
	(3, 'En Inst de Apoyo', '2020-07-03 10:58:37', '2020-07-03 10:58:37'),
	(4, 'En aula Hospitalaria ', '2020-07-03 10:58:51', '2020-07-03 10:58:51'),
	(5, 'Sistema de Responsabilidad Penal Adolescentes', '2020-07-03 10:59:06', '2020-07-03 10:59:06'),
	(6, 'Privado de la Libertad', '2020-07-03 10:59:39', '2020-07-03 10:59:39'),
	(7, 'No Privado de la Libertad ', '2020-07-03 10:59:58', '2020-07-03 10:59:58'),
	(8, 'No aplica', '2020-07-03 11:00:05', '2020-07-03 11:00:06');
/*!40000 ALTER TABLE `apoyo_academicos` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.capacidades_excepcionales
CREATE TABLE IF NOT EXISTS `capacidades_excepcionales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `capacidades` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.capacidades_excepcionales: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `capacidades_excepcionales` DISABLE KEYS */;
INSERT INTO `capacidades_excepcionales` (`id`, `capacidades`, `created_at`, `updated_at`) VALUES
	(1, 'Cap. Excepcionales', '2020-07-03 11:01:11', '2020-07-03 11:01:11'),
	(2, 'Líder Social y Emprendimiento ', '2020-07-03 11:01:30', '2020-07-03 11:01:30'),
	(3, 'Talento en Ciencias Naturales', '2020-07-03 11:01:51', '2020-07-03 11:01:51'),
	(4, 'Talento en Artes o  Letras', '2020-07-03 11:02:11', '2020-07-03 11:02:11'),
	(5, 'Talento en Act. Física – Deporte', '2020-07-03 11:02:28', '2020-07-03 11:02:28'),
	(6, 'Talento en Ciencias Sociales y humanas', '2020-07-03 11:02:50', '2020-07-03 11:02:50'),
	(7, 'No aplica', '2020-07-03 11:03:20', '2020-07-03 11:03:20');
/*!40000 ALTER TABLE `capacidades_excepcionales` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.departamentos
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `departamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.departamentos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` (`id`, `departamento`, `created_at`, `updated_at`) VALUES
	(1, 'Volibar', '2020-07-03 10:31:14', '2020-07-03 10:31:14'),
	(2, 'Atlantico', '2020-07-03 10:31:26', '2020-07-03 10:31:27'),
	(3, 'Antioquia', '2020-07-03 10:31:43', '2020-07-03 10:31:44');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.departamento_expedicions
CREATE TABLE IF NOT EXISTS `departamento_expedicions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `departamentoExpedicion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.departamento_expedicions: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento_expedicions` DISABLE KEYS */;
INSERT INTO `departamento_expedicions` (`id`, `departamentoExpedicion`, `created_at`, `updated_at`) VALUES
	(1, 'Volibar', '2020-07-03 10:29:47', '2020-07-03 10:29:47'),
	(2, 'Atlantico', '2020-07-03 10:29:58', '2020-07-03 10:29:59'),
	(3, 'Antioquia', '2020-07-03 10:30:07', '2020-07-03 10:30:08');
/*!40000 ALTER TABLE `departamento_expedicions` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.departamento_expedicion_acudientes
CREATE TABLE IF NOT EXISTS `departamento_expedicion_acudientes` (
  `id` int(250) NOT NULL,
  `departamentoAcudiente` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senoracarmen.departamento_expedicion_acudientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento_expedicion_acudientes` DISABLE KEYS */;
INSERT INTO `departamento_expedicion_acudientes` (`id`, `departamentoAcudiente`) VALUES
	(1, 'Volibar'),
	(2, 'Atlantico'),
	(3, 'Antioquia');
/*!40000 ALTER TABLE `departamento_expedicion_acudientes` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.discapacidads
CREATE TABLE IF NOT EXISTS `discapacidads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `discapacidad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.discapacidads: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `discapacidads` DISABLE KEYS */;
INSERT INTO `discapacidads` (`id`, `discapacidad`, `created_at`, `updated_at`) VALUES
	(1, 'Fisica', '2020-07-03 10:49:35', '2020-07-03 10:49:35'),
	(2, 'Usuario de lengua de señas', '2020-07-03 10:50:31', '2020-07-03 10:50:31'),
	(3, 'Lengua del Castellano', '2020-07-03 10:51:02', '2020-07-03 10:51:03'),
	(4, 'Baja Visión Irreversible', '2020-07-03 10:51:25', '2020-07-03 10:51:25'),
	(5, 'Ceguera', '2020-07-03 10:51:42', '2020-07-03 10:51:43'),
	(6, 'Sordoceguera', '2020-07-03 10:51:56', '2020-07-03 10:51:56'),
	(7, 'Intelectual', '2020-07-03 10:52:19', '2020-07-03 10:52:19'),
	(8, 'Psico Social Mental', '2020-07-03 10:52:37', '2020-07-03 10:52:37'),
	(9, 'Multiple', '2020-07-03 10:52:56', '2020-07-03 10:52:56'),
	(10, 'Trastorno del Espectro Autista ', '2020-07-03 10:53:13', '2020-07-03 10:53:14'),
	(11, 'No aplica', '2020-07-03 10:53:22', '2020-07-03 10:53:22');
/*!40000 ALTER TABLE `discapacidads` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.eps_municipios
CREATE TABLE IF NOT EXISTS `eps_municipios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `municipios` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.eps_municipios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `eps_municipios` DISABLE KEYS */;
INSERT INTO `eps_municipios` (`id`, `municipios`, `created_at`, `updated_at`) VALUES
	(1, 'Cartagena', '2020-07-03 10:35:40', '2020-07-03 10:35:40'),
	(2, 'Barranquilla', '2020-07-03 10:36:31', '2020-07-03 10:36:31'),
	(3, 'Medellin', '2020-07-03 10:36:41', '2020-07-03 10:36:41');
/*!40000 ALTER TABLE `eps_municipios` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.eps_privados
CREATE TABLE IF NOT EXISTS `eps_privados` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sector` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.eps_privados: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `eps_privados` DISABLE KEYS */;
INSERT INTO `eps_privados` (`id`, `sector`, `created_at`, `updated_at`) VALUES
	(1, 'Si', '2020-07-03 10:35:16', '2020-07-03 10:35:16'),
	(2, 'No', '2020-07-03 10:35:22', '2020-07-03 10:35:22');
/*!40000 ALTER TABLE `eps_privados` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.estatus_alumno_madres
CREATE TABLE IF NOT EXISTS `estatus_alumno_madres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `estatus` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.estatus_alumno_madres: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `estatus_alumno_madres` DISABLE KEYS */;
INSERT INTO `estatus_alumno_madres` (`id`, `estatus`, `created_at`, `updated_at`) VALUES
	(1, 'Alumno Madre Cabeza de Familia', '2020-07-03 10:43:41', '2020-07-03 10:43:41'),
	(2, 'Ben. Hijos dependientes de Madre Cabeza de Familia', '2020-07-03 10:44:42', '2020-07-03 10:44:42'),
	(3, 'Beneficiario Veterano De la Fuerza Pública', '2020-07-03 10:45:43', '2020-07-03 10:45:43'),
	(4, 'Beneficiario Héroe De la Nacion', '2020-07-03 10:46:08', '2020-07-03 10:46:08'),
	(5, 'No Aplica', '2020-07-04 20:35:49', '2020-07-04 20:35:50');
/*!40000 ALTER TABLE `estatus_alumno_madres` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.estudiantes
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fechaNacimiento` date NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insProveniente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `eps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ips` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipoSangre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noCarnetSisben` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puntajeSisben` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estrato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paisAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccionAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barrioAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentescoAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `celularAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNacimientoAcudiente` date NOT NULL,
  `ocupacionAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profecionAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccionEmpresaAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreEmpresaAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargoEmpresaAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonoEmpresaAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `convivenciaAcudiente` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idGeneroAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTipoDocumentoAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDepartamentoExpedicionAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idMunicipioExpedicionAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idMunicipioAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDepartamentoAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idZonaAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTipoEmpleoAcudiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idGenero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTipoDocumento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDepartamentoExpedicion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idMunicipioEspedicion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idMunicipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDepartamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idZona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idEpsMunicipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idVictimaConflicto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idEtnia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idEstatusAlumnoMadre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idDiscapacidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTranstornoAprendisaje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idApoyoAcademico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCapacidadesExeccionales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idEpsPrivado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `estudiantes_email_unique` (`email`),
  UNIQUE KEY `estudiantes_idacudiente_unique` (`idAcudiente`),
  UNIQUE KEY `estudiantes_emailacudiente_unique` (`emailAcudiente`)
) ENGINE=InnoDB AUTO_INCREMENT=1003337812 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.estudiantes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` (`id`, `fechaNacimiento`, `apellido`, `nombre`, `direccion`, `telefono`, `barrio`, `celular`, `email`, `insProveniente`, `eps`, `ips`, `tipoSangre`, `noCarnetSisben`, `puntajeSisben`, `estrato`, `idAcudiente`, `apellidoAcudiente`, `nombreAcudiente`, `paisAcudiente`, `direccionAcudiente`, `barrioAcudiente`, `parentescoAcudiente`, `celularAcudiente`, `emailAcudiente`, `fechaNacimientoAcudiente`, `ocupacionAcudiente`, `profecionAcudiente`, `direccionEmpresaAcudiente`, `nombreEmpresaAcudiente`, `cargoEmpresaAcudiente`, `telefonoEmpresaAcudiente`, `convivenciaAcudiente`, `idGeneroAcudiente`, `idTipoDocumentoAcudiente`, `idDepartamentoExpedicionAcudiente`, `idMunicipioExpedicionAcudiente`, `idMunicipioAcudiente`, `idDepartamentoAcudiente`, `idZonaAcudiente`, `idTipoEmpleoAcudiente`, `idGenero`, `idTipoDocumento`, `idDepartamentoExpedicion`, `idMunicipioEspedicion`, `idMunicipio`, `idDepartamento`, `idZona`, `idEpsMunicipio`, `idVictimaConflicto`, `idEtnia`, `idEstatusAlumnoMadre`, `idDiscapacidad`, `idTranstornoAprendisaje`, `idApoyoAcademico`, `idCapacidadesExeccionales`, `created_at`, `updated_at`, `idEpsPrivado`) VALUES
	(100333, '2001-12-05', 'Bru Torres', 'Wilfer Jose', 'bicentnario', '923932002', 'bicentenario', '1234567', 'wilfer@gmail.com', 'la salle', 'www', 'www', 'O+', '12355', '1', '1', '122', 'Bru vega', 'Eligio', 'www', 'bicentnario', 'ww', 'Papa', '12222', 'wilfer@gmail.com', '2020-07-29', 'deee', 'hola', 'Bocagrande', 'jolaa', 'silla', '923932002', 'si', '1', '1', '2', '2', '2', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '17', '6', '2', '11', '4', '8', '8', '2020-07-03 17:34:36', '2020-07-03 17:34:38', '1'),
	(123444, '2020-07-06', 'barragan', 'carlos zzzzzz', 'bicentnario', '923932002', 'bicentenario', '1233', 'wilfer22@gmail.com', 'la salle', 'www', 'nose', 'O+', '122', '22', '22', '1223', 'banegas', 'rodolfo', 'www', 'bicentnario', 'ww', 'Papa', '222', 'wilfer3333@gmail.com', '2020-08-06', 'deee', 'hola', 'bicentnario', 'jolaa', 'Local', '923932002', 'no', '1', '5', '1', '2', '1', '3', '2', '1', '1', '1', '1', '2', '1', '3', '1', '1', '15', '2', '3', '10', '2', '7', '7', '2020-07-15 20:41:25', '2020-07-15 20:41:25', '1'),
	(144422, '2001-12-05', 'Bru Torres', 'Wilfer Bru', 'Torre.24 Apr-.303 Man.76A', '640999', 'Bicentenario', '3092456788', 'yy123@gmail.com', 'la salle', 'Mutual ser', 'nose', 'O+', '1232111', '1', '1', '34256213', 'Torres Martines', 'Adriana', 'Colombia', 'bicentnario', 'Bicentenario', 'Madre', '12222', '345aiwe123@gmail.com', '1979-11-19', 'Independiente', 'Maniculista', 'No tengo', 'No tengo', 'No tengo', '123222', 'si', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '17', '6', '1', '11', '4', '8', '8', '2020-07-11 09:39:43', '2020-07-11 09:39:44', '2'),
	(3422111, '2001-12-05', 'Bru Torres', 'Wilfer Bru', 'Torre.24 Apr-.303 Man.76A', '640999', 'Bicentenario', '3092456788', 'weyy123@gmail.com', 'la salle', 'Mutual ser', 'nose', 'O+', '1232111', '1', '1', '342', 'Torres Martines', 'Adriana', 'Colombia', 'bicentnario', 'Bicentenario', 'Madre', '12222', 'aiwe123@gmail.com', '1979-11-19', 'Independiente', 'Maniculista', 'No tengo', 'No tengo', 'No tengo', '123222', 'si', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '17', '6', '1', '11', '4', '8', '8', '2020-07-11 09:39:43', '2020-07-11 09:39:44', '2'),
	(13321244, '2002-01-17', 'barragan', 'carlos', 'bicentnario', '923932002', 'bicentenario', '1234', 'comowe@gmail.com', 'la salle', 'www', 'nose', 'O+', '123444', '1', '1', '12333', 'barragan', 'carlos', 'www', 'bicentnario', 'ww', 'Papa', '12222', '122r@gmail.com', '1986-01-12', 'deee', 'Maniculista', 'bicentnario', 'No tengo', 'silla', '923932002', 'si', '1', '1', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '17', '1', '5', '11', '4', '6', '6', '2020-07-10 23:07:12', '2020-07-10 23:07:12', '2'),
	(1003337811, '2001-12-05', 'Bru Torres', 'Wilfer Bru', 'Torre.24 Apr-.303 Man.76A', '662781', 'Bicentenario', '3024600878', 'wilferaiwe12@gmail.com', 'la salle', 'Mutual ser', 'Mutual ser', 'O+', '123456', '10', '1', '35143609', 'Torres Martines', 'Adriana', 'Colombia', 'Torres Bicentenario', 'Bicentenario', 'Madre', '3217420380', 'sisa@gmail.com', '1979-11-19', 'Independiente', 'Maniculista', 'Local', 'Local', 'Local', '3217420380', 'si', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '17', '6', '5', '11', '4', '7', '7', '2020-07-13 21:04:35', '2020-07-13 21:04:35', '2');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.etnias
CREATE TABLE IF NOT EXISTS `etnias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `etnia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.etnias: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `etnias` DISABLE KEYS */;
INSERT INTO `etnias` (`id`, `etnia`, `created_at`, `updated_at`) VALUES
	(1, 'Afrodescendiente', '2020-07-03 10:46:44', '2020-07-03 10:46:44'),
	(2, 'Negritude', '2020-07-03 10:47:27', '2020-07-03 10:47:28'),
	(3, 'Palenquero', '2020-07-03 10:47:49', '2020-07-03 10:47:49'),
	(4, 'Zenu', '2020-07-03 10:48:07', '2020-07-03 10:48:07'),
	(5, 'Wayuu', '2020-07-03 10:48:19', '2020-07-03 10:48:20'),
	(6, 'No aplica', '2020-07-03 10:48:44', '2020-07-03 10:48:45');
/*!40000 ALTER TABLE `etnias` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.generos
CREATE TABLE IF NOT EXISTS `generos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `genero` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.generos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` (`id`, `genero`, `created_at`, `updated_at`) VALUES
	(1, 'Masculino', '2020-07-03 10:29:00', '2020-07-03 10:29:00'),
	(2, 'Femenino', '2020-07-03 10:29:10', '2020-07-03 10:29:10');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.genero_acudientes
CREATE TABLE IF NOT EXISTS `genero_acudientes` (
  `id` int(250) NOT NULL,
  `generoAcudiente` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senoracarmen.genero_acudientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `genero_acudientes` DISABLE KEYS */;
INSERT INTO `genero_acudientes` (`id`, `generoAcudiente`) VALUES
	(1, 'Masculino'),
	(2, 'Femenino');
/*!40000 ALTER TABLE `genero_acudientes` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.migrations: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2020_06_27_200116_create_estudiantes_table', 1),
	(4, '2020_06_27_200746_create_municipios_table', 1),
	(5, '2020_06_27_200932_create_estatus_alumno_madres_table', 1),
	(6, '2020_06_27_201350_create_discapacidads_table', 1),
	(7, '2020_06_27_201421_create_transtorno_aprendisajes_table', 1),
	(8, '2020_06_27_201450_create_apoyo_academicos_table', 1),
	(9, '2020_06_27_201634_create_capacidades_excepcionales_table', 1),
	(10, '2020_06_27_201850_create_eps_privados_table', 1),
	(11, '2020_06_27_201938_create_victima_conflictos_table', 1),
	(12, '2020_06_27_202018_create_zonas_table', 1),
	(13, '2020_06_27_202208_create_eps_municipios_table', 1),
	(14, '2020_06_27_202249_create_generos_table', 1),
	(15, '2020_06_27_202341_create_tipo_documentos_table', 1),
	(16, '2020_06_27_202424_create_departamento_expedicions_table', 1),
	(17, '2020_06_27_202458_create_municipio_expeicions_table', 1),
	(18, '2020_06_27_202548_create_tipo_empleos_table', 1),
	(19, '2020_07_02_223437_create_etnias_table', 1),
	(20, '2020_07_03_020636_create_departamentos_table', 1),
	(21, '2014_10_12_100000_create_password_resets_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.municipios
CREATE TABLE IF NOT EXISTS `municipios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `municipio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.municipios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT INTO `municipios` (`id`, `municipio`, `created_at`, `updated_at`) VALUES
	(1, 'Cartagena', '2020-07-03 10:31:55', '2020-07-03 10:31:55'),
	(2, 'Barranquilla', '2020-07-03 10:32:19', '2020-07-03 10:32:20'),
	(3, 'Medellin', '2020-07-03 10:32:15', '2020-07-03 10:32:15');
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.municipio_expedicion_acudientes
CREATE TABLE IF NOT EXISTS `municipio_expedicion_acudientes` (
  `id` int(250) NOT NULL,
  `municipioAcudiente` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senoracarmen.municipio_expedicion_acudientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `municipio_expedicion_acudientes` DISABLE KEYS */;
INSERT INTO `municipio_expedicion_acudientes` (`id`, `municipioAcudiente`) VALUES
	(1, 'Cartagena'),
	(2, 'Barranquilla'),
	(3, 'Medellin');
/*!40000 ALTER TABLE `municipio_expedicion_acudientes` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.municipio_expeicions
CREATE TABLE IF NOT EXISTS `municipio_expeicions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `municipioExpedicion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.municipio_expeicions: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `municipio_expeicions` DISABLE KEYS */;
INSERT INTO `municipio_expeicions` (`id`, `municipioExpedicion`, `created_at`, `updated_at`) VALUES
	(1, 'Cartagena', '2020-07-03 10:30:27', '2020-07-03 10:30:27'),
	(2, 'Barranquilla', '2020-07-03 10:30:39', '2020-07-03 10:30:40'),
	(3, 'Medellin', '2020-07-03 10:30:50', '2020-07-03 10:30:50');
/*!40000 ALTER TABLE `municipio_expeicions` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.tipo_documentos
CREATE TABLE IF NOT EXISTS `tipo_documentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `documento` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.tipo_documentos: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_documentos` DISABLE KEYS */;
INSERT INTO `tipo_documentos` (`id`, `documento`, `created_at`, `updated_at`) VALUES
	(1, 'Cedula Ciudadania', '2020-07-03 10:25:57', '2020-07-03 10:25:58'),
	(2, 'Cedula Extrangera', '2020-07-03 10:26:17', '2020-07-03 10:26:17'),
	(3, 'NES', '2020-07-03 10:26:33', '2020-07-03 10:26:33'),
	(4, 'Targeta Identidad', '2020-07-03 10:26:54', '2020-07-03 10:26:54'),
	(5, 'Registro Civil', '2020-07-03 10:27:12', '2020-07-03 10:27:12'),
	(6, 'PEP', '2020-07-03 10:27:24', '2020-07-03 10:27:24'),
	(7, 'TMF', '2020-07-03 10:27:37', '2020-07-03 10:27:38'),
	(8, 'Visa', '2020-07-03 10:27:46', '2020-07-03 10:27:47');
/*!40000 ALTER TABLE `tipo_documentos` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.tipo_documento_acudientes
CREATE TABLE IF NOT EXISTS `tipo_documento_acudientes` (
  `id` int(250) NOT NULL,
  `tipoDocument` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senoracarmen.tipo_documento_acudientes: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_documento_acudientes` DISABLE KEYS */;
INSERT INTO `tipo_documento_acudientes` (`id`, `tipoDocument`) VALUES
	(1, 'Ceduda Ciudadania'),
	(2, 'Cedula Extrangera'),
	(3, 'NES'),
	(4, 'Targeta Identidad'),
	(5, 'Registro Civil'),
	(6, 'PEP'),
	(7, 'TMF'),
	(8, 'Visa');
/*!40000 ALTER TABLE `tipo_documento_acudientes` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.tipo_empleos
CREATE TABLE IF NOT EXISTS `tipo_empleos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.tipo_empleos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_empleos` DISABLE KEYS */;
INSERT INTO `tipo_empleos` (`id`, `tipo`, `created_at`, `updated_at`) VALUES
	(1, 'Permanente', '2020-07-03 11:05:28', '2020-07-03 11:05:29'),
	(2, 'Temporal', '2020-07-03 11:05:43', '2020-07-03 11:05:43');
/*!40000 ALTER TABLE `tipo_empleos` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.transtorno_aprendisajes
CREATE TABLE IF NOT EXISTS `transtorno_aprendisajes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transtorno` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.transtorno_aprendisajes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `transtorno_aprendisajes` DISABLE KEYS */;
INSERT INTO `transtorno_aprendisajes` (`id`, `transtorno`, `created_at`, `updated_at`) VALUES
	(1, 'Déficit de atención con o sin  hiperactividad', '2020-07-03 10:54:09', '2020-07-03 10:54:09'),
	(2, 'Específico de Aprendizaje Escolar', '2020-07-03 10:55:08', '2020-07-03 10:55:08'),
	(3, 'De Aprendizaje Escolar  y por Déficit ', '2020-07-03 10:55:55', '2020-07-03 10:55:55'),
	(4, 'No aplica', '2020-07-03 10:56:04', '2020-07-03 10:56:05');
/*!40000 ALTER TABLE `transtorno_aprendisajes` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'wilfer', 'wilferaiwe@gmail.com', '2020-07-08 13:58:58', '$2y$10$dp1JxoZiOKOGhJ48JMFXSu9r26Lk2ZMc1iHqBKSgT9bAz8nyjAcLG', NULL, '2020-07-05 20:48:32', '2020-07-05 20:48:32'),
	(2, 'Administrador', 'Administrador@gmail.com', '2020-07-12 10:51:04', '$2y$10$Hxo/4MqqioOEVllZgDSXP.oSSUTkUBWJVBkLRTcDjohufEgWL0BO.', 'qtk4UR0PhRSUDBSSIXLUeEWzuufTnOlZWAnk8YeSNAbN2XAZbnPju3CCgvT4', '2020-07-10 19:28:48', '2020-07-10 19:28:48'),
	(3, 'tal', 'prueba2.0@gmail.com', NULL, '$2y$10$4uKQoB9qGlMTFXsq53jgpOYZVLwxf6WdFhwpN0wxpmyaLUaHuSf4i', NULL, '2020-09-23 02:33:15', '2020-09-23 02:33:15');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.victima_conflictos
CREATE TABLE IF NOT EXISTS `victima_conflictos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `victima` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.victima_conflictos: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `victima_conflictos` DISABLE KEYS */;
INSERT INTO `victima_conflictos` (`id`, `victima`, `created_at`, `updated_at`) VALUES
	(1, 'Abandono o despojo de Tierra', '2020-07-03 10:37:31', '2020-07-03 10:37:31'),
	(2, 'Acto Terrorista – Atentado ', '2020-07-03 10:37:48', '2020-07-03 10:37:48'),
	(3, 'Amenaza', '2020-07-03 10:38:13', '2020-07-03 10:38:13'),
	(4, 'Confinamiento', '2020-07-03 10:38:32', '2020-07-03 10:38:32'),
	(5, 'Delitos contra la Lib e Int Sexual', '2020-07-03 10:38:59', '2020-07-03 10:38:59'),
	(6, 'Desaparición Forzada', '2020-07-03 10:39:17', '2020-07-03 10:39:17'),
	(7, 'Desplazamiento Forzado', '2020-07-03 10:39:32', '2020-07-03 10:39:33'),
	(8, 'Desvinculado de Grupos Armados ', '2020-07-03 10:39:59', '2020-07-03 10:39:59'),
	(9, 'En situación de Desplazamiento', '2020-07-03 10:40:20', '2020-07-03 10:40:20'),
	(10, 'Hijo de Adulto desmov ', '2020-07-03 10:40:36', '2020-07-03 10:40:36'),
	(11, 'Homicidio', '2020-07-03 10:40:49', '2020-07-03 10:40:49'),
	(12, 'Lesiones Personales Físicas', '2020-07-03 10:41:07', '2020-07-03 10:41:08'),
	(13, 'Lesiones Personales Psicológicas ', '2020-07-03 10:41:25', '2020-07-03 10:41:25'),
	(14, 'Minas Anti personales ', '2020-07-03 10:41:44', '2020-07-03 10:41:45'),
	(15, 'Pérdida de Bienes…....', '2020-07-03 10:42:01', '2020-07-03 10:42:01'),
	(16, 'Secuestro', '2020-07-03 10:42:22', '2020-07-03 10:42:23'),
	(17, 'No aplica', '2020-07-03 10:42:33', '2020-07-03 10:42:34');
/*!40000 ALTER TABLE `victima_conflictos` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.zonas
CREATE TABLE IF NOT EXISTS `zonas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `zona` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla senoracarmen.zonas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `zonas` DISABLE KEYS */;
INSERT INTO `zonas` (`id`, `zona`, `created_at`, `updated_at`) VALUES
	(1, 'Urbana', '2020-07-03 10:34:27', '2020-07-03 10:34:28'),
	(2, 'Rural', '2020-07-03 10:34:40', '2020-07-03 10:34:40');
/*!40000 ALTER TABLE `zonas` ENABLE KEYS */;

-- Volcando estructura para tabla senoracarmen.zona_acudientes
CREATE TABLE IF NOT EXISTS `zona_acudientes` (
  `id` int(250) NOT NULL,
  `zonaAcudiente` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla senoracarmen.zona_acudientes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `zona_acudientes` DISABLE KEYS */;
INSERT INTO `zona_acudientes` (`id`, `zonaAcudiente`) VALUES
	(1, 'Urbana'),
	(2, 'Rural');
/*!40000 ALTER TABLE `zona_acudientes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
