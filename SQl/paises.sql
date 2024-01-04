-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 05-11-2023 a las 21:42:58
-- Versión del servidor: 10.6.15-MariaDB-cll-lve
-- Versión de PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuelae_estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `codigo` varchar(3) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `pais` varchar(36) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`codigo`, `pais`) VALUES
('00', 'Anguila'),
('02', 'Bahamas'),
('03', 'Barbados'),
('04', 'Bermudas'),
('05', 'Canadá'),
('06', 'Dominica'),
('07', 'Estados Unidos de América'),
('08', 'Granada'),
('09', 'Guam'),
('10', 'Antigua y Barbuda'),
('10', 'Islas Caimán'),
('11', 'Islas Marianas del Norte'),
('12', 'Islas Vírgenes de los Estados Unidos'),
('13', 'Jamaica'),
('14', 'Puerto Rico'),
('15', 'República Dominicana'),
('16', 'Samoa Americana'),
('17', 'Santa Lucía'),
('18', 'Sint Maarten'),
('19', 'Trinidad y Tobago'),
('20', 'Egipto'),
('211', 'Sudán del Sur'),
('212', 'Marruecos'),
('213', 'Argelia'),
('216', 'Túnez'),
('218', 'Libia'),
('220', 'Gambia'),
('221', 'Senegal'),
('222', 'Mauritania'),
('223', 'Malí'),
('226', 'Burkina Faso'),
('227', 'Níger'),
('228', 'Togo'),
('229', 'Benín'),
('230', 'Mauricio'),
('231', 'Liberia'),
('232', 'Sierra Leona'),
('233', 'Ghana'),
('234', 'Nigeria'),
('236', 'República Centroafricana'),
('237', 'Camerún'),
('238', 'Cabo Verde'),
('240', 'Guinea Ecuatorial'),
('241', 'Gabón'),
('242', 'Congo'),
('244', 'Angola'),
('248', 'Seychelles'),
('249', 'Sudán'),
('250', 'Ruanda'),
('251', 'Etiopía'),
('252', 'Somalia'),
('253', 'Yibuti'),
('254', 'Kenia'),
('255', 'Tanzania'),
('256', 'Uganda'),
('257', 'Burundi'),
('260', 'Zambia'),
('261', 'Madagascar'),
('262', 'Reunión'),
('263', 'Zimbabue'),
('264', 'Namibia'),
('265', 'Malawi'),
('266', 'Lesoto'),
('268', 'Suazilandia'),
('27', 'Sudáfrica'),
('291', 'Eritrea'),
('297', 'Aruba'),
('298', 'Islas Feroe'),
('299', 'Groenlandia'),
('30', 'Grecia'),
('31', 'Países Bajos'),
('32', 'Belgica'),
('33', 'Francia'),
('34', 'España'),
('350', 'Gibraltar'),
('351', 'Portugal'),
('352', 'Luxemburgo'),
('353', 'Irlanda'),
('354', 'Islandia'),
('355', 'Albania'),
('356', 'Malta'),
('357', 'Chipre'),
('358', 'Finlandia'),
('359', 'Bulgaria'),
('36', 'Hungría'),
('370', 'Lituania'),
('371', 'Letonia'),
('372', 'Estonia'),
('373', 'Moldova'),
('374', 'Armenia'),
('375', 'Belarús'),
('376', 'Andorra'),
('377', 'Mónaco'),
('380', 'Ucrania'),
('381', 'Serbia'),
('382', 'Montenegro'),
('385', 'Croacia'),
('386', 'Eslovenia'),
('387', 'Bosnia y Herzegovina'),
('389', 'Macedonia'),
('39', 'Italia'),
('40', 'Rumania'),
('41', 'Suiza'),
('420', 'República Checa'),
('421', 'Eslovaquia'),
('423', 'Liechtenstein'),
('43', 'Austria'),
('44', 'Reino Unido'),
('45', 'Dinamarca'),
('46', 'Suecia'),
('47', 'Noruega'),
('48', 'Polonia'),
('49', 'Alemania'),
('500', 'Islas Malvinas'),
('501', 'Belice'),
('502', 'Guatemala'),
('503', 'El Salvador'),
('504', 'Honduras'),
('505', 'Nicaragua'),
('506', 'Costa Rica'),
('507', 'Panamá'),
('509', 'Haití'),
('51', 'Perú'),
('52', 'México'),
('53', 'Cuba'),
('54', 'Argentina'),
('55', 'Brasil'),
('56', 'Chile'),
('57', 'Colombia'),
('58', 'Venezuela'),
('591', 'Bolivia'),
('593', 'Ecuador'),
('594', 'Guayana Francesa'),
('595', 'Paraguay'),
('596', 'Martinica'),
('597', 'Surinam'),
('598', 'Uruguay'),
('599', 'Bonaire'),
('60', 'Malasia'),
('61', 'Australia'),
('62', 'Indonesia'),
('63', 'Filipinas'),
('64', 'Nueva Zelanda'),
('65', 'Singapur'),
('66', 'Tailandia'),
('670', 'Timor-Leste'),
('673', 'Brunéi'),
('675', 'Papúa Nueva Guinea'),
('676', 'Tonga'),
('677', 'Islas Salomón'),
('678', 'Vanuatu'),
('679', 'Fiyi'),
('680', 'Palaos'),
('682', 'Islas Cook'),
('685', 'Samoa'),
('687', 'Nueva Caledonia'),
('688', 'Tuvalu'),
('689', 'Polinesia Francesa'),
('691', 'Micronesia'),
('7', 'Kazajistán'),
('7', 'Rusia'),
('81', 'Japón'),
('82', 'Corea del Sur'),
('84', 'Vietnam'),
('850', 'Corea del Norte'),
('852', 'Hong Kong'),
('855', 'Camboya'),
('856', 'Laos'),
('86', 'China'),
('880', 'Bangladesh'),
('886', 'Taiwán'),
('90', 'Turquía'),
('91', 'India'),
('92', 'Pakistán'),
('93', 'Afganistan'),
('94', 'Sri Lanka'),
('95', 'Myanmar'),
('960', 'Maldivas'),
('961', 'Líbano'),
('962', 'Jordania'),
('963', 'Siria'),
('964', 'Irak'),
('965', 'Kuwait'),
('966', 'Arabia Saudí'),
('967', 'Yemen'),
('968', 'Omán'),
('971', 'Emiratos Árabes Unidos'),
('972', 'Israel'),
('973', 'Baréin'),
('974', 'Qatar'),
('975', 'Bután'),
('976', 'Mongolia'),
('977', 'Nepal'),
('98', 'Irán'),
('992', 'Tayikistán'),
('993', 'Turkmenistán'),
('994', 'Azerbaiyan'),
('995', 'Georgia'),
('996', 'Kirguistán'),
('998', 'Uzbekistán');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD UNIQUE KEY `unico` (`codigo`,`pais`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
