-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Okt 2018 um 18:57
-- Server-Version: 10.1.35-MariaDB
-- PHP-Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `restaurant_db`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellung`
--

CREATE TABLE `bestellung` (
  `bestellung_id` int(5) NOT NULL,
  `restaurant_id` int(5) NOT NULL DEFAULT '1',
  `bestellung_datum` datetime NOT NULL,
  `bestellung_erledigt` tinyint(1) NOT NULL DEFAULT '0',
  `gast_id` int(5) NOT NULL,
  `bestellung_bewertung` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `bestellung`
--

INSERT INTO `bestellung` (`bestellung_id`, `restaurant_id`, `bestellung_datum`, `bestellung_erledigt`, `gast_id`, `bestellung_bewertung`) VALUES
(2, 1, '2018-09-22 01:32:30', 0, 0, NULL),
(3, 1, '2018-09-22 01:36:41', 0, 0, NULL),
(4, 1, '2018-09-22 01:51:03', 0, 0, NULL),
(5, 1, '2018-09-22 01:54:24', 0, 0, NULL),
(6, 1, '2018-09-22 01:54:44', 0, 0, NULL),
(7, 1, '2018-09-22 01:57:59', 0, 0, NULL),
(8, 1, '2018-09-22 01:58:47', 0, 0, NULL),
(9, 1, '2018-09-22 01:59:11', 0, 0, NULL),
(10, 1, '2018-09-23 01:15:02', 1, 2, NULL),
(11, 1, '2018-09-23 01:27:47', 0, 2, NULL),
(12, 1, '2018-09-23 01:32:18', 0, 2, NULL),
(13, 1, '2018-09-23 01:32:19', 0, 2, NULL),
(14, 1, '2018-09-23 01:32:19', 0, 2, NULL),
(15, 1, '2018-09-23 01:32:19', 0, 2, NULL),
(16, 1, '2018-09-23 01:32:19', 0, 2, NULL),
(17, 1, '2018-09-23 01:32:19', 0, 2, NULL),
(18, 1, '2018-09-23 01:32:19', 1, 2, NULL),
(19, 1, '2018-09-23 01:32:20', 0, 2, NULL),
(20, 1, '2018-09-23 01:32:20', 0, 2, NULL),
(21, 1, '2018-09-23 01:32:20', 0, 2, NULL),
(22, 1, '2018-09-23 08:25:32', 0, 0, NULL),
(23, 1, '2018-09-23 08:37:48', 0, 0, NULL),
(24, 1, '2018-09-23 09:32:29', 1, 0, NULL),
(25, 1, '2018-09-24 12:15:11', 0, 0, 1),
(26, 1, '2018-09-26 11:48:17', 0, 0, 2),
(27, 1, '2018-09-26 15:24:22', 0, 18, 3),
(28, 1, '2018-09-26 20:06:40', 0, 19, 2),
(29, 1, '2018-09-26 20:07:57', 0, 20, 1),
(30, 1, '2018-10-02 10:42:14', 0, 24, 3),
(31, 1, '2018-10-02 16:05:09', 0, 25, NULL),
(32, 1, '2018-10-02 16:11:29', 0, 26, NULL),
(33, 1, '2018-10-02 16:14:34', 0, 27, 3),
(34, 1, '2018-10-02 16:24:38', 0, 28, NULL),
(35, 1, '2018-10-02 16:26:01', 0, 29, NULL),
(36, 1, '2018-10-02 16:27:39', 0, 30, NULL),
(37, 1, '2018-10-02 16:34:31', 0, 0, NULL),
(38, 1, '2018-10-02 16:36:02', 0, 33, NULL),
(39, 1, '2018-10-02 16:39:57', 0, 0, NULL),
(40, 1, '2018-10-02 16:40:31', 0, 35, 2),
(41, 1, '2018-10-02 16:41:14', 0, 36, NULL),
(42, 1, '2018-10-04 15:53:23', 0, 37, NULL),
(43, 1, '2018-10-04 15:58:03', 0, 38, NULL),
(44, 1, '2018-10-04 16:04:45', 0, 41, NULL),
(45, 1, '2018-10-04 16:12:00', 1, 50, NULL),
(46, 1, '2018-10-04 16:15:48', 0, 54, NULL),
(47, 1, '2018-10-04 16:20:35', 0, 55, NULL),
(48, 1, '2018-10-05 11:32:44', 0, 60, NULL),
(49, 1, '2018-10-05 11:32:51', 0, 60, 3),
(50, 1, '2018-10-05 11:34:07', 1, 60, NULL),
(51, 1, '2018-10-05 18:01:06', 1, 69, 3),
(52, 1, '2018-10-05 18:13:45', 0, 70, NULL),
(53, 1, '2018-10-05 18:15:49', 0, 71, NULL),
(54, 1, '2018-10-05 18:19:51', 0, 75, NULL),
(55, 1, '2018-10-05 18:25:12', 1, 77, 2),
(56, 1, '2018-10-05 18:34:36', 0, 77, NULL),
(57, 1, '2018-10-05 18:35:52', 0, 79, 3),
(58, 1, '2018-10-05 18:38:10', 0, 79, NULL),
(59, 1, '2018-10-05 18:39:02', 0, 79, NULL),
(60, 1, '2018-10-05 18:44:11', 0, 80, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellung_gerichte`
--

CREATE TABLE `bestellung_gerichte` (
  `bestellung_gerichte_id` int(5) NOT NULL,
  `bestellung_id` int(5) NOT NULL,
  `gericht_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `bestellung_gerichte`
--

INSERT INTO `bestellung_gerichte` (`bestellung_gerichte_id`, `bestellung_id`, `gericht_id`) VALUES
(20, 9, 1),
(21, 9, 1),
(22, 9, 2),
(23, 9, 2),
(24, 10, 26),
(25, 10, 27),
(26, 10, 28),
(27, 10, 24),
(28, 22, 2),
(29, 22, 6),
(30, 22, 10),
(31, 23, 3),
(32, 23, 6),
(33, 23, 11),
(34, 23, 23),
(35, 24, 2),
(36, 24, 5),
(37, 24, 10),
(38, 24, 16),
(39, 24, 28),
(40, 25, 2),
(41, 26, 51),
(42, 27, 6),
(43, 27, 11),
(44, 27, 13),
(45, 28, 7),
(46, 28, 6),
(47, 28, 5),
(48, 29, 3),
(49, 30, 6),
(50, 30, 5),
(51, 30, 7),
(52, 30, 29),
(53, 30, 34),
(54, 30, 32),
(55, 30, 44),
(56, 30, 54),
(57, 31, 2),
(58, 31, 10),
(59, 31, 12),
(60, 32, 20),
(61, 33, 2),
(62, 33, 6),
(63, 34, 3),
(64, 35, 2),
(65, 36, 7),
(66, 37, 2),
(67, 37, 2),
(68, 37, 3),
(69, 37, 4),
(70, 37, 5),
(71, 38, 3),
(72, 39, 2),
(73, 39, 2),
(74, 39, 3),
(75, 39, 4),
(76, 39, 5),
(77, 39, 2),
(78, 39, 4),
(79, 40, 2),
(80, 40, 4),
(81, 40, 13),
(82, 40, 14),
(83, 41, 3),
(84, 41, 20),
(85, 41, 31),
(86, 42, 1),
(87, 42, 6),
(88, 43, 1),
(89, 43, 4),
(90, 44, 2),
(91, 44, 7),
(92, 44, 12),
(93, 44, 20),
(94, 45, 4),
(95, 45, 5),
(96, 46, 4),
(97, 46, 11),
(98, 46, 55),
(99, 46, 2),
(100, 47, 2),
(101, 47, 54),
(102, 47, 53),
(103, 47, 55),
(104, 49, 54),
(105, 50, 54),
(106, 51, 6),
(107, 51, 16),
(108, 51, 28),
(109, 52, 4),
(110, 53, 2),
(111, 54, 3),
(112, 54, 2),
(113, 55, 3),
(114, 56, 3),
(115, 56, 3),
(116, 57, 3),
(117, 57, 2),
(118, 57, 4),
(119, 58, 3),
(120, 58, 2),
(121, 58, 4),
(122, 59, 3),
(123, 59, 2),
(124, 59, 4),
(125, 60, 1),
(126, 60, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gaeste`
--

CREATE TABLE `gaeste` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tisch` int(5) NOT NULL,
  `raum_id` int(5) NOT NULL,
  `datum` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gaeste`
--

INSERT INTO `gaeste` (`id`, `name`, `tisch`, `raum_id`, `datum`) VALUES
(1, 'PAGINAsohn', 55, 0, '0000-00-00 00:00:00'),
(2, 'PAGINAsohn', 55, 0, '0000-00-00 00:00:00'),
(3, 'TimCookBoss', 44, 0, '0000-00-00 00:00:00'),
(4, 'TIMIBOY', 2, 0, '0000-00-00 00:00:00'),
(5, 'PAGINAxxxx', 21, 0, '0000-00-00 00:00:00'),
(6, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(7, 'sdsd', 125, 0, '0000-00-00 00:00:00'),
(8, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(9, 'PAGINAssss', 1112, 0, '0000-00-00 00:00:00'),
(10, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(11, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(12, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(13, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(14, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(15, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(16, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(17, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(18, 'TIMI', 69, 0, '0000-00-00 00:00:00'),
(19, 'BewertungTest', 45, 0, '0000-00-00 00:00:00'),
(20, 'BewertungTest2', 45, 0, '0000-00-00 00:00:00'),
(21, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(22, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(23, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(24, 'test123', 48, 0, '0000-00-00 00:00:00'),
(25, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(26, '627', 55, 0, '0000-00-00 00:00:00'),
(27, 'kk', 828, 0, '0000-00-00 00:00:00'),
(28, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(29, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(30, 'sdsd', 0, 0, '0000-00-00 00:00:00'),
(31, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(32, 'PAGINA', 884, 0, '0000-00-00 00:00:00'),
(33, 'PAGINA', 12, 0, '0000-00-00 00:00:00'),
(34, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(35, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(36, 'Felix', 1222, 0, '0000-00-00 00:00:00'),
(37, 'hjhiui', 79979, 0, '0000-00-00 00:00:00'),
(38, 'Tim123', 15, 0, '0000-00-00 00:00:00'),
(39, 'Test', 747, 0, '0000-00-00 00:00:00'),
(40, 'Test', 484, 0, '0000-00-00 00:00:00'),
(41, 'Test123', 858, 0, '0000-00-00 00:00:00'),
(42, 'qwe', 25, 0, '0000-00-00 00:00:00'),
(43, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(44, 'cv', 121, 0, '0000-00-00 00:00:00'),
(45, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(46, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(47, 'df', 12, 0, '0000-00-00 00:00:00'),
(48, 'dd', 12, 0, '0000-00-00 00:00:00'),
(49, 'fgh', 12, 0, '0000-00-00 00:00:00'),
(50, 'ffs', 12, 0, '0000-00-00 00:00:00'),
(51, 'qwedffg', 15, 0, '0000-00-00 00:00:00'),
(52, 'as', 15, 0, '0000-00-00 00:00:00'),
(53, 'qwe', 15, 0, '0000-00-00 00:00:00'),
(54, 'PAGINA', 15, 0, '0000-00-00 00:00:00'),
(55, 'ddds', 12, 0, '0000-00-00 00:00:00'),
(56, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(57, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(58, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(59, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(60, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(61, 'PAGINA', 0, 0, '0000-00-00 00:00:00'),
(62, 'Test', 0, 0, '0000-00-00 00:00:00'),
(63, 'Test', 14, 0, '0000-00-00 00:00:00'),
(64, 'Test', 12, 0, '0000-00-00 00:00:00'),
(65, 'Test', 12, 0, '0000-00-00 00:00:00'),
(66, 'Test', 0, 0, '0000-00-00 00:00:00'),
(67, 'Test', 0, 0, '0000-00-00 00:00:00'),
(68, 'TestRaum', 12, 12, '2018-10-05 12:34:39'),
(69, 'TestGast', 12, 12, '2018-10-05 18:00:54'),
(70, 'Testt', 12, 12, '2018-10-05 18:13:36'),
(71, 'Test', 84, 84, '2018-10-05 18:15:46'),
(72, 'Testgf', 17, 1, '2018-10-05 18:17:43'),
(73, 'Test', 19, 1, '2018-10-05 18:18:36'),
(74, 'Test', 20, 1, '2018-10-05 18:19:26'),
(75, 'Test', 20, 1, '2018-10-05 18:19:46'),
(76, 'Test', 18, 1, '2018-10-05 18:24:27'),
(77, 'Test', 10, 1, '2018-10-05 18:25:03'),
(78, 'Test', 19, 1, '2018-10-05 18:35:34'),
(79, 'Test', 17, 1, '2018-10-05 18:35:44'),
(80, 'Test', 14, 1, '2018-10-05 18:42:40');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gericht`
--

CREATE TABLE `gericht` (
  `gericht_id` int(11) NOT NULL,
  `restaurant_id` int(5) NOT NULL DEFAULT '1',
  `gericht_bezeichnung` varchar(100) NOT NULL,
  `gericht_preis` decimal(10,2) NOT NULL,
  `gericht_beschreibung` varchar(300) NOT NULL,
  `gericht_bildadresse` varchar(100) NOT NULL,
  `gericht_kategorie` varchar(50) NOT NULL,
  `gericht_dauer` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gericht`
--

INSERT INTO `gericht` (`gericht_id`, `restaurant_id`, `gericht_bezeichnung`, `gericht_preis`, `gericht_beschreibung`, `gericht_bildadresse`, `gericht_kategorie`, `gericht_dauer`) VALUES
(1, 0, 'ORIGINAL PARMIGIANO REGGIANO STÜCKE', '9.80', 'mit Birnen-Ingwer-Salsa', '..\\img\\Parmigiano.jpg', 'Vorspeisen', 10),
(2, 0, 'HAUSGEMACHTE TOMATENSUPPE ', '6.80', 'mit Basilikum', '..\\img\\Tomatensuppe.jpg', 'Vorspeisen', 5),
(3, 0, 'PIZZABROT', '3.40', 'mit Knoblauchöl', '..\\img\\Pizzabrot.jpg', 'Vorspeisen', 5),
(4, 0, 'MARINATA ', '8.80', 'Pizzabrot mit Tomaten & Knoblauchöl', '..\\img\\Marinata.jpg', 'Vorspeisen', 5),
(5, 0, 'TOMATEN CAPRESE', '10.90', 'mit Mozzarella, Olivenöl & Balsamico-Essig', '..\\img\\Tomaten_Caprese.jpg', 'Vorspeisen', 8),
(6, 0, 'ANTIPASTI ', '13.80', 'Parmigiano Reggiano, Parmaschinken, scharfe Salami,\r\nOliven, getrockente Tomaten, Balsamicozwiebeln', '..\\img\\Antipasti.jpg', 'Vorspeisen', 10),
(7, 0, 'SCAMPI & SALSICCIA', '13.50', 'Scampi & scharfe Salami in Knoblauchöl. Lecker! \r\nOliven, getrockente Tomaten, Balsamicozwiebeln', '..\\img\\Scampi_Salcissia.jpg', 'Vorspeisen', 11),
(8, 0, 'BEILAGEN-BLATTSALATE', '5.40', 'Gemischter Salat', '..\\img\\Beilagen_Blattsalat.jpg', 'Salate', 3),
(9, 0, 'INSALATA ROMA', '12.80', 'Tomaten, Gurken & Schafskäse', '..\\img\\Salata_Roma.jpg', 'Salate', 9),
(10, 0, 'INSALATA TONNO ', '11.80', 'Thunfisch & Zwiebeln', '..\\img\\Insalata_Tonno.jpg', 'Salate', 8),
(11, 0, 'INSALATA BELLA VISTA', '15.80', 'mit original Parmaschinken & original Parmigiano Reggiano', '..\\img\\Insalata_BellaVista.jpg', 'Salate', 10),
(12, 0, 'NAPOLI ', '9.40', 'unsere Tomatensauce mit Basilikum', '..\\img\\Pasta_Napoli.jpg', 'Pasta', 13),
(13, 0, 'ROSÉ', '9.60', 'Tomaten-Sahnesauce', '..\\img\\Pasta_Rose.jpg', 'Pasta', 14),
(14, 0, 'AGLIO E OLIO', '10.80', 'Knoblauch, Olivenöl, Chili', '..\\img\\Pasta_Oglio.jpg', 'Pasta', 12),
(15, 0, 'SPINACI', '10.40', 'Spinat in Sahnesauce', '..\\img\\Pasta_Spinaci.jpg', 'Pasta', 11),
(16, 0, 'ALL\'ARRABBIATA', '10.80', 'scharfe Tomatensauce, Chili & Knoblauch (scharf)', '..\\img\\Pasta_Al_Aribaitaa.jpg', 'Pasta', 9),
(17, 0, 'BELLA VISTA', '12.70', 'getrocknete Tomaten, original Parmigiano Reggiano,\r\nBalsamico-Zwiebeln & Knoblauch', '..\\img\\Pasta_Bella_Vista.jpg', 'Pasta', 13),
(18, 0, 'CARBONARA', '12.30', 'Sahnesauce, Ei, Speck, Petersilie & Zwiebeln \r\nBalsamico-Zwiebeln & Knoblauch', '..\\img\\Pasta_Carbonara.jpg', 'Pasta', 9),
(19, 0, 'SALMONE ', '14.50', 'Lachsstreifen & Spinat in Tomaten-Sahne-Sauceeln & Knoblauch', '..\\img\\Pasta_Salmone.jpg', 'Pasta', 14),
(20, 0, 'AL FORNO', '13.90', 'mit Mozzarella³ überbacken', '..\\img\\Pasta_Al_Forno.jpg', 'Pasta', 18),
(21, 0, 'MARGHERITA ', '9.80', 'Tomaten & Mozzarella', '..\\img\\Pizza_Margherita.jpg', 'Pizza', 10),
(22, 0, 'FUNGHI ', '11.80', 'Tomaten & Mozzarella & frische Champignons', '..\\img\\Pizza_Funghi.jpg', 'Pizza', 11),
(23, 0, 'SALAMI ', '11.80', 'Tomaten & Mozzarella & Mailänder Salami', '..\\img\\Pizza_Salami.jpg', 'Pizza', 11),
(24, 0, 'PROSCIUTTO', '11.60', 'Tomaten & Mozzarella & Vorderschinken', '..\\img\\Pizza_Prosciutto.jpg', 'Pizza', 12),
(25, 0, 'ALONSO', '12.10', 'Tomaten & Mozzarella, Salami\r\n & frische Champignons', '..\\img\\Pizza_Alonso.jpg', 'Pizza', 13),
(26, 0, 'CALZONE ', '13.80', 'zusammen geklappte Pizza\r\nTomaten, Mozzarella, Schinken\r\n & Salami', '..\\img\\Pizza_Calzone.jpg', 'Pizza', 23),
(27, 0, 'TONNO', '11.90', 'Tomaten & Mozzarella, Oliven, Thunfisch & Zwiebeln', '..\\img\\Pizza_Thunfisch.jpg', 'Pizza', 12),
(28, 0, 'AL SALMONE', '13.80', 'Tomaten, Mozzarella, Lachs & Knoblauch', '..\\img\\Pizza_Lachs.jpg', 'Pizza', 14),
(29, 0, 'RUMPSTEAK (200 GRAMM)', '24.80', 'mit hausgemachter Kräuterbutter, hausgemachtem\r\nKnoblauchbrot & gemischtem Salat', '..\\img\\Rumpsteak_Rucola.jpg', 'Fleisch', 25),
(30, 0, 'TAGLIATA (RUMPSTEAK IN SCHEIBEN) ', '23.80', 'auf Rucola mit Balsamico & original Parmigiano Reggiano\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nKnoblauchbrot & gemischtem Salat', '..\\img\\Rumpsteak_Knoblauchbutter.jpg', 'Fleisch', 24),
(31, 0, 'PETTO DI POLLO RIPIENO', '19.80', 'Hähnchenbrust gefüllt mit getrockneten Tomaten und Feta\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nKnoblauchbrot & gemischtem Salat', '..\\img\\Hähnchenbrust.jpg', 'Fleisch', 22),
(32, 0, 'LACHSSTEAK KNOBLAUCHÖL', '20.80', 'Lachssteak verfeinert mit Knoblauchöl', '..\\img\\Lachssteak_Knoblauch.jpg', 'Fisch', 27),
(33, 0, 'LACHSSTEAK TOMATEN-SAHNE-SAUCE', '21.80', 'Lachssteak in saftiger Tomaten-Sahne-Sauce', '..\\img\\Lachssteak_Tomatensoße.jpg', 'Fisch', 26),
(34, 0, '6 BLACK TIGER RIESENGARNELEN', '24.80', 'mit Knoblauchbrot & gemischtem Salat', '..\\img\\Riesengarnelen.jpg', 'Fisch', 33),
(35, 0, 'KLEINES SCHOKOMOUSSE ', '5.80', 'mit Sahne', '..\\img\\Schokomousse.jpg', 'Dessert', 8),
(36, 0, 'HAUSGEMACHTES TIRAMISU', '6.80', 'Lecker!', '..\\img\\Tiramisu.jpg', 'Dessert', 4),
(37, 0, 'SÜDTIROLER APFELSTRUDEL', '6.40', 'mit Vanilleeis, Sahne & Vanillesauce', '..\\img\\Apfelstrudel.jpg', 'Dessert', 5),
(38, 0, 'PIZZA DOLCE VITA ', '6.90', 'Kleine Pizza mit Apfel oder Bananen und Schokosauce', '..\\img\\Pizza_Dolce_Vita.jpg', 'Dessert', 12),
(39, 0, 'SPAGHETTIEIS CLASSICO', '6.20', 'Frisch!', '..\\img\\Spaghettieis.jpg', 'Dessert', 4),
(40, 0, 'EISKAFFEE', '5.40', 'mit Vanilleeis, Kaffee & Schlagsahne', '..\\img\\Eiskaffee.jpg', 'Dessert', 2),
(41, 0, 'Espresso', '2.00', '', '..\\img\\Espresso.jpg', 'Getraenk', 2),
(42, 0, 'Cappucino', '2.50', '', '..\\img\\Cappucino.jpg', 'Getraenk', 2),
(43, 0, 'Latte Macchiato', '3.00', '', '..\\img\\Latte_Macchiato.jpg', 'Getraenk', 2),
(44, 0, 'Coca Cola', '2.50', '0,3l', '..\\img\\Coca_Cola.jpg', 'Getraenk', 1),
(45, 0, 'Fanta', '2.50', '0,3l', '..\\img\\Fanta.jpg', 'Getraenk', 1),
(46, 0, 'Apfelsaft', '2.50', '0,3l', '..\\img\\Apfelsaft.jpg', 'Getraenk', 1),
(47, 0, 'Tafelwasser', '2.00', '0,5l', '..\\img\\Tafelwasser.jpg', 'Getraenk', 1),
(48, 0, 'Mineralwasser', '2.00', '0,5l', '..\\img\\Mineralwasser.jpg', 'Getraenk', 1),
(49, 0, 'Welde Pils', '3.00', '0,3l', '..\\img\\Welde_Pils.jpg', 'Getraenk', 1),
(50, 0, 'Paulaner Hefeweizen', '3.50', '0,5l', '..\\img\\Paulaner_Hefe.jpg', 'Getraenk', 1),
(51, 0, 'Rotwein', '3.50', '0,25l', '..\\img\\Rotwein.jpg', 'Getraenk', 2),
(52, 0, 'Grappa', '4.50', '2cl', '..\\img\\Grappa.jpg', 'Getraenk', 1),
(53, 1, 'Sprite', '2.50', '0,3l', '..\\img\\Sprite.jpg', 'Getraenk', 1),
(54, 1, 'Coca Cola Light', '2.50', '0,3l', '..\\img\\Coca_Cola_Light.jpg', 'Getraenk', 1),
(55, 1, 'Orangensaft', '3.50', '0,5l', '..\\img\\Orangensaft.jpg', 'Getraenk', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitarbeiter`
--

CREATE TABLE `mitarbeiter` (
  `mitarbeiter_id` int(5) NOT NULL,
  `restaurant_id` int(5) NOT NULL DEFAULT '1',
  `mitarbeiter_benutzername` varchar(50) NOT NULL,
  `mitarbeiter_passwort` varchar(50) NOT NULL,
  `mitarbeiter_name` varchar(100) NOT NULL,
  `mitarbeiter_beruf` varchar(100) NOT NULL,
  `mitarbeiter_bildadresse` varchar(50) NOT NULL DEFAULT '..\\img\\Logo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `mitarbeiter`
--

INSERT INTO `mitarbeiter` (`mitarbeiter_id`, `restaurant_id`, `mitarbeiter_benutzername`, `mitarbeiter_passwort`, `mitarbeiter_name`, `mitarbeiter_beruf`, `mitarbeiter_bildadresse`) VALUES
(1, 1, 'russo_f', '123', 'Francesco Russo', 'Inhaber', '..\\img\\Russo.jpg'),
(2, 1, 'ferrari_a', 'qwe', 'Alessandro Ferrari', 'Koch', '..\\img\\Ferrari.jpg'),
(3, 1, 'morelli_g', 'qwe', 'Giovanni Morelli', 'Koch', '..\\img\\Morelli.jpg'),
(4, 1, 'negri_g', 'qwe', 'Giulia Negri', 'Kellner', '..\\img\\Negri.jpg'),
(5, 1, 'amore_a', 'qwe', 'Alessia Amore', 'Kellner', '..\\img\\Amore.jpg'),
(6, 1, 'caputo_m', 'qwe', 'Matilde Caputo', 'Kellner', '..\\img\\Caputo.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(5) NOT NULL,
  `restaurant_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`) VALUES
(1, 'Bella España');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `warenkorb`
--

CREATE TABLE `warenkorb` (
  `id` int(5) NOT NULL,
  `gericht_id` int(5) NOT NULL,
  `gast_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `warenkorb`
--

INSERT INTO `warenkorb` (`id`, `gericht_id`, `gast_id`) VALUES
(15, 2, 3),
(16, 5, 3),
(17, 10, 3),
(18, 20, 3),
(19, 28, 3),
(20, 6, 18),
(21, 11, 18),
(22, 13, 18),
(23, 7, 19),
(24, 6, 19),
(25, 5, 19),
(26, 3, 20),
(27, 6, 24),
(28, 5, 24),
(29, 7, 24),
(30, 29, 24),
(31, 34, 24),
(32, 32, 24),
(33, 44, 24),
(34, 54, 24),
(35, 2, 25),
(36, 10, 25),
(37, 12, 25),
(38, 20, 26),
(39, 2, 27),
(40, 6, 27),
(41, 3, 28),
(42, 2, 29),
(43, 7, 30),
(49, 3, 33),
(50, 3, 34),
(53, 2, 35),
(54, 4, 35),
(55, 13, 35),
(56, 14, 35),
(57, 3, 36),
(58, 20, 36),
(59, 31, 36),
(60, 1, 37),
(61, 6, 37),
(62, 1, 38),
(63, 4, 38),
(73, 4, 50),
(74, 5, 50),
(75, 4, 54),
(76, 11, 54),
(77, 55, 54),
(78, 2, 54),
(79, 2, 55),
(80, 54, 55),
(81, 53, 55),
(82, 55, 55),
(86, 54, 60),
(87, 6, 69),
(88, 16, 69),
(89, 28, 69),
(90, 4, 70),
(91, 2, 71),
(92, 3, 75),
(93, 2, 75),
(94, 3, 77),
(95, 3, 77),
(96, 3, 79),
(97, 2, 79),
(98, 4, 79),
(99, 1, 80),
(100, 3, 80);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD PRIMARY KEY (`bestellung_id`);

--
-- Indizes für die Tabelle `bestellung_gerichte`
--
ALTER TABLE `bestellung_gerichte`
  ADD PRIMARY KEY (`bestellung_gerichte_id`);

--
-- Indizes für die Tabelle `gaeste`
--
ALTER TABLE `gaeste`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `gericht`
--
ALTER TABLE `gericht`
  ADD PRIMARY KEY (`gericht_id`);

--
-- Indizes für die Tabelle `mitarbeiter`
--
ALTER TABLE `mitarbeiter`
  ADD PRIMARY KEY (`mitarbeiter_id`);

--
-- Indizes für die Tabelle `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indizes für die Tabelle `warenkorb`
--
ALTER TABLE `warenkorb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  MODIFY `bestellung_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT für Tabelle `bestellung_gerichte`
--
ALTER TABLE `bestellung_gerichte`
  MODIFY `bestellung_gerichte_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT für Tabelle `gaeste`
--
ALTER TABLE `gaeste`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT für Tabelle `gericht`
--
ALTER TABLE `gericht`
  MODIFY `gericht_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT für Tabelle `mitarbeiter`
--
ALTER TABLE `mitarbeiter`
  MODIFY `mitarbeiter_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `warenkorb`
--
ALTER TABLE `warenkorb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
