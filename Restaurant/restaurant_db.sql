-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Okt 2018 um 13:41
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
(1, 1, '2018-10-01 13:10:50', 1, 1, 3),
(2, 1, '2018-10-02 07:19:09', 1, 2, 2),
(3, 1, '2018-10-03 09:18:00', 1, 3, 3),
(4, 1, '2018-10-04 11:44:28', 1, 4, 1),
(5, 1, '2018-10-12 20:05:18', 0, 5, 3),
(6, 1, '2018-10-12 20:06:59', 0, 6, 3),
(7, 1, '2018-10-09 20:07:42', 0, 7, 1),
(8, 1, '2018-10-10 20:10:14', 0, 8, 3),
(9, 1, '2018-10-11 05:28:09', 0, 9, NULL),
(10, 1, '2018-10-12 20:12:34', 0, 10, 3),
(11, 1, '2018-10-12 20:17:35', 0, 11, 2),
(12, 1, '2018-10-13 12:59:57', 0, 13, 3),
(13, 1, '2018-10-13 13:41:38', 0, 14, 3);

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
(1, 1, 1),
(2, 1, 3),
(3, 1, 8),
(4, 2, 7),
(5, 2, 13),
(6, 2, 15),
(7, 2, 20),
(8, 3, 5),
(9, 3, 26),
(10, 3, 27),
(11, 3, 28),
(12, 3, 32),
(13, 4, 24),
(14, 4, 32),
(15, 4, 35),
(16, 4, 37),
(17, 4, 40),
(18, 5, 5),
(19, 5, 12),
(20, 5, 15),
(21, 5, 51),
(22, 5, 49),
(23, 6, 4),
(24, 6, 34),
(25, 6, 7),
(26, 6, 28),
(27, 6, 29),
(28, 6, 34),
(29, 6, 35),
(30, 6, 40),
(31, 6, 42),
(32, 6, 44),
(33, 6, 50),
(34, 7, 5),
(35, 7, 7),
(36, 7, 9),
(37, 7, 17),
(38, 7, 22),
(39, 7, 31),
(40, 7, 38),
(41, 7, 40),
(42, 7, 48),
(43, 8, 1),
(44, 8, 8),
(45, 8, 9),
(46, 8, 11),
(47, 8, 37),
(48, 8, 42),
(49, 8, 43),
(50, 8, 46),
(51, 8, 47),
(52, 9, 2),
(53, 9, 7),
(54, 9, 11),
(55, 9, 13),
(56, 9, 20),
(57, 10, 2),
(58, 10, 5),
(59, 10, 9),
(60, 10, 11),
(61, 10, 7),
(62, 11, 1),
(63, 11, 28),
(64, 11, 26),
(65, 11, 30),
(66, 11, 34),
(67, 11, 40),
(68, 11, 39),
(69, 11, 41),
(70, 11, 44),
(71, 12, 2),
(72, 12, 20),
(73, 12, 22),
(74, 12, 27),
(75, 12, 33),
(76, 12, 44),
(77, 12, 47),
(78, 13, 8),
(79, 13, 11),
(80, 13, 13),
(81, 13, 20),
(82, 13, 33),
(83, 13, 37),
(84, 13, 45),
(85, 13, 56);

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
(1, 'Hans Müller', 19, 1, '2018-10-01 15:19:50'),
(2, 'Peter Schwarz', 8, 1, '2018-10-02 20:03:39'),
(3, 'Hans Tellas', 6, 1, '2018-10-03 20:04:00'),
(4, 'Jürgen Flaig', 7, 1, '2018-10-04 20:04:27'),
(5, 'Johannes Weiß', 2, 1, '2018-10-09 20:05:05'),
(6, 'Maria Neust', 20, 1, '2018-10-10 20:05:42'),
(7, 'Nathalie Tramm', 3, 1, '2018-10-11 20:07:23'),
(8, 'Petra Winger', 2, 1, '2018-10-12 20:09:59'),
(9, 'Hajo Mans', 15, 1, '2018-10-12 20:10:39'),
(10, 'Walter Schmidt', 12, 1, '2018-10-12 20:12:15'),
(11, 'Katrin Pfahl', 9, 1, '2018-10-12 20:17:21'),
(12, 'Marcel Staner', 5, 1, '2018-10-12 12:59:08'),
(13, 'Ingo Neudorf', 18, 1, '2018-10-13 12:59:42'),
(14, 'Marleen Mayer', 20, 1, '2018-10-13 13:41:18');

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
(30, 0, 'TAGLIATA (RUMPSTEAK IN SCHEIBEN) ', '23.80', 'auf Rucola mit Balsamico & original Parmigiano Reggiano\r\n\r\n', '..\\img\\Rumpsteak_Knoblauchbutter.jpg', 'Fleisch', 24),
(31, 0, 'PETTO DI POLLO RIPIENO', '19.80', 'Hähnchenbrust gefüllt mit getrockneten Tomaten und Feta\r\n', '..\\img\\Hähnchenbrust.jpg', 'Fleisch', 22),
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
(55, 1, 'Orangensaft', '3.50', '0,5l', '..\\img\\Orangensaft.jpg', 'Getraenk', 2),
(56, 1, 'Tonic Water', '3.50', '0,5l', '..\\img\\TonicWater.jpg', 'Getraenk', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitarbeiter`
--

CREATE TABLE `mitarbeiter` (
  `mitarbeiter_id` int(5) NOT NULL,
  `restaurant_id` int(5) NOT NULL DEFAULT '1',
  `mitarbeiter_benutzername` varchar(50) NOT NULL,
  `mitarbeiter_passwort` varchar(250) NOT NULL,
  `mitarbeiter_name` varchar(100) NOT NULL,
  `mitarbeiter_beruf` varchar(100) NOT NULL,
  `mitarbeiter_bildadresse` varchar(50) NOT NULL DEFAULT '..\\img\\Logo.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `mitarbeiter`
--

INSERT INTO `mitarbeiter` (`mitarbeiter_id`, `restaurant_id`, `mitarbeiter_benutzername`, `mitarbeiter_passwort`, `mitarbeiter_name`, `mitarbeiter_beruf`, `mitarbeiter_bildadresse`) VALUES
(1, 1, 'russo_f', '$2y$10$dEDw/l3q97bcS1WqkmDLZ.yE.SAP2fUWL34Tpyis/eJJfICduLJo6', 'Francesco Russo', 'Inhaber', '..\\img\\Russo.jpg'),
(2, 1, 'ferrari_a', '$2y$10$JVNMyKKkcNZzk7pxD8rRW.qbn5ChKUCAZGuinnDRxMb13pjt/Wv1y', 'Alessandro Ferrari', 'Koch', '..\\img\\Ferrari.jpg'),
(3, 1, 'morelli_g', '$2y$10$H6xmwJOSem1h3/XvxD2rBOZQrenzpS7ZUgxbcnh0ULpkRKsTZq76K', 'Giovanni Morelli', 'Koch', '..\\img\\Morelli.jpg'),
(4, 1, 'negri_g', '$2y$10$MZC.Smx0n4In2ROReO/qrOF83JEXyPsXpZp1Z5ZKs6lfp4UpyYLdy', 'Giulia Negri', 'Kellner', '..\\img\\Negri.jpg'),
(5, 1, 'amore_a', '$2y$10$Mj8XpOIZz7KC/9x9J6dKlua5oATtJ.7MxXUVTVV7o6.vVVox2o13C', 'Alessia Amore', 'Kellner', '..\\img\\Amore.jpg'),
(6, 1, 'caputo_m', '$2y$10$xiMGPxZA4X3rhIemlRidTOcug2335LVdFR8dVDAI6vS/1KP3hdRti', 'Matilde Caputo', 'Kellner', '..\\img\\Caputo.jpg');

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
(1, 3, 215),
(2, 1, 1),
(3, 3, 1),
(4, 8, 1),
(5, 7, 2),
(6, 13, 2),
(7, 15, 2),
(8, 20, 2),
(9, 5, 3),
(10, 26, 3),
(11, 27, 3),
(12, 28, 3),
(13, 32, 3),
(14, 24, 4),
(15, 32, 4),
(16, 35, 4),
(17, 37, 4),
(18, 40, 4),
(19, 5, 5),
(20, 12, 5),
(21, 15, 5),
(22, 51, 5),
(23, 49, 5),
(24, 4, 6),
(25, 34, 6),
(26, 7, 6),
(27, 28, 6),
(28, 29, 6),
(29, 34, 6),
(30, 35, 6),
(31, 40, 6),
(32, 42, 6),
(33, 44, 6),
(34, 50, 6),
(35, 5, 7),
(36, 7, 7),
(37, 9, 7),
(38, 17, 7),
(39, 22, 7),
(40, 31, 7),
(41, 38, 7),
(42, 40, 7),
(43, 48, 7),
(44, 1, 8),
(45, 8, 8),
(46, 9, 8),
(47, 11, 8),
(48, 37, 8),
(49, 42, 8),
(50, 43, 8),
(51, 46, 8),
(52, 47, 8),
(53, 2, 9),
(54, 7, 9),
(55, 11, 9),
(56, 13, 9),
(57, 20, 9),
(58, 2, 10),
(59, 5, 10),
(60, 9, 10),
(61, 11, 10),
(62, 7, 10),
(63, 1, 11),
(64, 28, 11),
(65, 26, 11),
(66, 30, 11),
(67, 34, 11),
(68, 40, 11),
(69, 39, 11),
(70, 41, 11),
(71, 44, 11),
(72, 2, 13),
(73, 20, 13),
(74, 22, 13),
(75, 27, 13),
(76, 33, 13),
(77, 44, 13),
(78, 47, 13),
(79, 8, 14),
(80, 11, 14),
(81, 13, 14),
(82, 20, 14),
(83, 33, 14),
(84, 37, 14),
(85, 45, 14),
(86, 56, 14);

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
  MODIFY `bestellung_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `bestellung_gerichte`
--
ALTER TABLE `bestellung_gerichte`
  MODIFY `bestellung_gerichte_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT für Tabelle `gaeste`
--
ALTER TABLE `gaeste`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `gericht`
--
ALTER TABLE `gericht`
  MODIFY `gericht_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT für Tabelle `mitarbeiter`
--
ALTER TABLE `mitarbeiter`
  MODIFY `mitarbeiter_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `warenkorb`
--
ALTER TABLE `warenkorb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
