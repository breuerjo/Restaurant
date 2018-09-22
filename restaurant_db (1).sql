-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 01:38 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bestellung`
--

CREATE TABLE `bestellung` (
  `bestellung_id` int(5) NOT NULL,
  `restaurant_id` int(5) NOT NULL DEFAULT '1',
  `bestellung_datum` datetime NOT NULL,
  `bestellung_erledigt` tinyint(1) NOT NULL DEFAULT '0',
  `gast_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bestellung`
--

INSERT INTO `bestellung` (`bestellung_id`, `restaurant_id`, `bestellung_datum`, `bestellung_erledigt`, `gast_id`) VALUES
(2, 1, '2018-09-22 01:32:30', 0, 0),
(3, 1, '2018-09-22 01:36:41', 0, 0),
(4, 1, '2018-09-22 01:51:03', 0, 0),
(5, 1, '2018-09-22 01:54:24', 0, 0),
(6, 1, '2018-09-22 01:54:44', 0, 0),
(7, 1, '2018-09-22 01:57:59', 0, 0),
(8, 1, '2018-09-22 01:58:47', 0, 0),
(9, 1, '2018-09-22 01:59:11', 0, 0),
(10, 1, '2018-09-23 01:15:02', 0, 2),
(11, 1, '2018-09-23 01:27:47', 0, 2),
(12, 1, '2018-09-23 01:32:18', 0, 2),
(13, 1, '2018-09-23 01:32:19', 0, 2),
(14, 1, '2018-09-23 01:32:19', 0, 2),
(15, 1, '2018-09-23 01:32:19', 0, 2),
(16, 1, '2018-09-23 01:32:19', 0, 2),
(17, 1, '2018-09-23 01:32:19', 0, 2),
(18, 1, '2018-09-23 01:32:19', 0, 2),
(19, 1, '2018-09-23 01:32:20', 0, 2),
(20, 1, '2018-09-23 01:32:20', 0, 2),
(21, 1, '2018-09-23 01:32:20', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bestellung_gerichte`
--

CREATE TABLE `bestellung_gerichte` (
  `bestellung_gerichte_id` int(5) NOT NULL,
  `bestellung_id` int(5) NOT NULL,
  `gericht_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bestellung_gerichte`
--

INSERT INTO `bestellung_gerichte` (`bestellung_gerichte_id`, `bestellung_id`, `gericht_id`) VALUES
(20, 9, 1),
(21, 9, 1),
(22, 9, 2),
(23, 9, 2),
(24, 10, 26),
(25, 10, 27),
(26, 10, 28),
(27, 10, 24);

-- --------------------------------------------------------

--
-- Table structure for table `gaeste`
--

CREATE TABLE `gaeste` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tisch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaeste`
--

INSERT INTO `gaeste` (`id`, `name`, `tisch`) VALUES
(1, 'PAGINAsohn', 55),
(2, 'PAGINAsohn', 55);

-- --------------------------------------------------------

--
-- Table structure for table `gericht`
--

CREATE TABLE `gericht` (
  `gericht_id` int(11) NOT NULL,
  `restaurant_id` int(5) NOT NULL DEFAULT '1',
  `gericht_bezeichnung` varchar(100) NOT NULL,
  `gericht_preis` decimal(10,2) NOT NULL,
  `gericht_beschreibung` varchar(300) NOT NULL,
  `gericht_bildadresse` varchar(100) NOT NULL,
  `gericht_kategorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gericht`
--

INSERT INTO `gericht` (`gericht_id`, `restaurant_id`, `gericht_bezeichnung`, `gericht_preis`, `gericht_beschreibung`, `gericht_bildadresse`, `gericht_kategorie`) VALUES
(1, 0, 'ORIGINAL PARMIGIANO REGGIANO STÜCKE', '9.80', 'mit Birnen-Ingwer-Salsa', '..\\img\\Parmigiano.jpg', 'Vorspeisen'),
(2, 0, 'HAUSGEMACHTE TOMATENSUPPE ', '6.80', 'mit Basilikum', '..\\img\\Tomatensuppe.jpg', 'Vorspeisen'),
(3, 0, 'PIZZABROT', '3.40', 'mit Knoblauchöl', '..\\img\\Pizzabrot.jpg', 'Vorspeisen'),
(4, 0, 'MARINATA ', '8.80', 'Pizzabrot mit Tomaten & Knoblauchöl', '..\\img\\Marinata.jpg', 'Vorspeisen'),
(5, 0, 'TOMATEN CAPRESE', '10.90', 'mit Mozzarella, Olivenöl & Balsamico-Essig', '..\\img\\Tomaten_Caprese.jpg', 'Vorspeisen'),
(6, 0, 'ANTIPASTI ', '13.80', 'Parmigiano Reggiano, Parmaschinken, scharfe Salami,\r\nOliven, getrockente Tomaten, Balsamicozwiebeln', '..\\img\\Antipasti.jpg', 'Vorspeisen'),
(7, 0, 'SCAMPI & SALSICCIA', '13.50', 'Scampi & scharfe Salami in Knoblauchöl. Lecker! \r\nOliven, getrockente Tomaten, Balsamicozwiebeln', '..\\img\\Scampi_Salcissia.jpg', 'Vorspeisen'),
(8, 0, 'BEILAGEN-BLATTSALATE', '5.40', 'Gemischter Salat', '..\\img\\Beilagen_Blattsalat.jpg', 'Salate'),
(9, 0, 'INSALATA ROMA', '12.80', 'Tomaten, Gurken & Schafskäse', '..\\img\\Salata_Roma.jpg', 'Salate'),
(10, 0, 'INSALATA TONNO ', '11.80', 'Thunfisch & Zwiebeln', '..\\img\\Insalata_Tonno.jpg', 'Salate'),
(11, 0, 'INSALATA BELLA VISTA', '15.80', 'mit original Parmaschinken & original Parmigiano Reggiano', '..\\img\\Insalata_BellaVista.jpg', 'Salate'),
(12, 0, 'NAPOLI ', '9.40', 'unsere Tomatensauce mit Basilikum', '..\\img\\Pasta_Napoli.jpg', 'Pasta'),
(13, 0, 'ROSÉ', '9.60', 'Tomaten-Sahnesauce', '..\\img\\Pasta_Rose.jpg', 'Pasta'),
(14, 0, 'AGLIO E OLIO', '10.80', 'Knoblauch, Olivenöl, Chili', '..\\img\\Pasta_Oglio.jpg', 'Pasta'),
(15, 0, 'SPINACI', '10.40', 'Spinat in Sahnesauce', '..\\img\\Pasta_Spinaci.jpg', 'Pasta'),
(16, 0, 'ALL\'ARRABBIATA', '10.80', 'scharfe Tomatensauce, Chili & Knoblauch (scharf)', '..\\img\\Pasta_Al_Aribaitaa.jpg', 'Pasta'),
(17, 0, 'BELLA VISTA', '12.70', 'getrocknete Tomaten, original Parmigiano Reggiano,\r\nBalsamico-Zwiebeln & Knoblauch', '..\\img\\Pasta_Bella_Vista.jpg', 'Pasta'),
(18, 0, 'CARBONARA', '12.30', 'Sahnesauce, Ei, Speck, Petersilie & Zwiebeln \r\nBalsamico-Zwiebeln & Knoblauch', '..\\img\\Pasta_Carbonara.jpg', 'Pasta'),
(19, 0, 'SALMONE ', '14.50', 'Lachsstreifen & Spinat in Tomaten-Sahne-Sauceeln & Knoblauch', '..\\img\\Pasta_Salmone.jpg', 'Pasta'),
(20, 0, 'AL FORNO', '13.90', 'mit Mozzarella³ überbacken', '..\\img\\Pasta_Al_Forno.jpg', 'Pasta'),
(21, 0, 'MARGHERITA ', '9.80', 'Tomaten & Mozzarella', '..\\img\\Pizza_Margherita.jpg', 'Pizza'),
(22, 0, 'FUNGHI ', '11.80', 'Tomaten & Mozzarella & frische Champignons', '..\\img\\Pizza_Funghi.jpg', 'Pizza'),
(23, 0, 'SALAMI ', '11.80', 'Tomaten & Mozzarella & Mailänder Salami', '..\\img\\Pizza_Salami.jpg', 'Pizza'),
(24, 0, 'PROSCIUTTO', '11.60', 'Tomaten & Mozzarella & Vorderschinken', '..\\img\\Pizza_Prosciutto.jpg', 'Pizza'),
(25, 0, 'ALONSO', '12.10', 'Tomaten & Mozzarella, Salami\r\n & frische Champignons', '..\\img\\Pizza_Alonso.jpg', 'Pizza'),
(26, 0, 'CALZONE ', '13.80', 'zusammen geklappte Pizza\r\nTomaten, Mozzarella, Schinken\r\n & Salami', '..\\img\\Pizza_Calzone.jpg', 'Pizza'),
(27, 0, 'TONNO', '11.90', 'Tomaten & Mozzarella, Oliven, Thunfisch & Zwiebeln', '..\\img\\Pizza_Thunfisch.jpg', 'Pizza'),
(28, 0, 'AL SALMONE', '13.80', 'Tomaten, Mozzarella, Lachs & Knoblauch', '..\\img\\Pizza_Lachs.jpg', 'Pizza'),
(29, 0, 'RUMPSTEAK (200 GRAMM)', '24.80', 'mit hausgemachter Kräuterbutter, hausgemachtem\r\nKnoblauchbrot & gemischtem Salat', '..\\img\\Rumpsteak_Rucola.jpg', 'Fleisch'),
(30, 0, 'TAGLIATA (RUMPSTEAK IN SCHEIBEN) ', '23.80', 'auf Rucola mit Balsamico & original Parmigiano Reggiano\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nKnoblauchbrot & gemischtem Salat', '..\\img\\Rumpsteak_Knoblauchbutter.jpg', 'Fleisch'),
(31, 0, 'PETTO DI POLLO RIPIENO', '19.80', 'Hähnchenbrust gefüllt mit getrockneten Tomaten und Feta\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nKnoblauchbrot & gemischtem Salat', '..\\img\\Hähnchenbrust.jpg', 'Fleisch'),
(32, 0, 'LACHSSTEAK KNOBLAUCHÖL', '20.80', 'Hähnchenbrust gefüllt mit getrockneten Tomaten und Feta\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nKnoblauchbrot & gemischtem Salat', '..\\img\\Lachssteak_Knoblauch.jpg', 'Fisch'),
(33, 0, 'LACHSSTEAK TOMATEN-SAHNE-SAUCE', '21.80', 'Hähnchenbrust gefüllt mit getrockneten Tomaten und Feta\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nmit hausgemachtem Knoblauchbrot & gemischtem Salat\r\nKnoblauchbrot & gemischtem Salat', '..\\img\\Lachssteak_Tomatensoße.jpg', 'Fisch'),
(34, 0, '6 BLACK TIGER RIESENGARNELEN', '24.80', 'mit Knoblauchbrot & gemischtem Salat', '..\\img\\Riesengarnelen.jpg', 'Fisch'),
(35, 0, 'KLEINES SCHOKOMOUSSE ', '5.80', 'mit Sahne', '..\\img\\Schokomousse.jpg', 'Dessert'),
(36, 0, 'HAUSGEMACHTES TIRAMISU', '6.80', 'Lecker!', '..\\img\\Tiramisu.jpg', 'Dessert'),
(37, 0, 'SÜDTIROLER APFELSTRUDEL', '6.40', 'mit Vanilleeis, Sahne & Vanillesauce', '..\\img\\Apfelstrudel.jpg', 'Dessert'),
(38, 0, 'PIZZA DOLCE VITA ', '6.90', 'Kleine Pizza mit Apfel oder Bananen und Schokosauce', '..\\img\\Pizza_Dolce_Vita.jpg', 'Dessert'),
(39, 0, 'SPAGHETTIEIS CLASSICO', '6.20', 'Frisch!', '..\\img\\Spaghettieis.jpg', 'Dessert'),
(40, 0, 'EISKAFFEE', '5.40', 'mit Vanilleeis, Kaffee & Schlagsahne', '..\\im\\Eiskaffee.jpg', 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `mitarbeiter`
--

CREATE TABLE `mitarbeiter` (
  `mitarbeiter_id` int(5) NOT NULL,
  `restaurant_id` int(5) NOT NULL DEFAULT '1',
  `mitarbeiter_benutzername` varchar(50) NOT NULL,
  `mitarbeiter_passwort` varchar(50) NOT NULL,
  `mitarbeiter_name` varchar(100) NOT NULL,
  `mitarbeiter_beruf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mitarbeiter`
--

INSERT INTO `mitarbeiter` (`mitarbeiter_id`, `restaurant_id`, `mitarbeiter_benutzername`, `mitarbeiter_passwort`, `mitarbeiter_name`, `mitarbeiter_beruf`) VALUES
(1, 1, 'russo_f', '123', 'Francesco Russo', 'Inhaber'),
(2, 1, 'ferrari_a', 'qwe', 'Alessandro Ferrari', 'Koch'),
(3, 1, 'morelli_g', 'qwe', 'Giovanni Morelli', 'Koch'),
(4, 1, 'negri_g', 'qwe', 'Giulia Negri', 'Kellner'),
(5, 1, 'amore_a', 'qwe', 'Alessia Amore', 'Kellner'),
(6, 1, 'caputo_m', 'qwe', 'Matilde Caputo', 'Kellner');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(5) NOT NULL,
  `restaurant_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`) VALUES
(1, 'Bella España');

-- --------------------------------------------------------

--
-- Table structure for table `warenkorb`
--

CREATE TABLE `warenkorb` (
  `id` int(5) NOT NULL,
  `gericht_id` int(5) NOT NULL,
  `gast_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestellung`
--
ALTER TABLE `bestellung`
  ADD PRIMARY KEY (`bestellung_id`);

--
-- Indexes for table `bestellung_gerichte`
--
ALTER TABLE `bestellung_gerichte`
  ADD PRIMARY KEY (`bestellung_gerichte_id`);

--
-- Indexes for table `gaeste`
--
ALTER TABLE `gaeste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gericht`
--
ALTER TABLE `gericht`
  ADD PRIMARY KEY (`gericht_id`);

--
-- Indexes for table `mitarbeiter`
--
ALTER TABLE `mitarbeiter`
  ADD PRIMARY KEY (`mitarbeiter_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `warenkorb`
--
ALTER TABLE `warenkorb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestellung`
--
ALTER TABLE `bestellung`
  MODIFY `bestellung_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bestellung_gerichte`
--
ALTER TABLE `bestellung_gerichte`
  MODIFY `bestellung_gerichte_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `gaeste`
--
ALTER TABLE `gaeste`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gericht`
--
ALTER TABLE `gericht`
  MODIFY `gericht_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `mitarbeiter`
--
ALTER TABLE `mitarbeiter`
  MODIFY `mitarbeiter_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warenkorb`
--
ALTER TABLE `warenkorb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
