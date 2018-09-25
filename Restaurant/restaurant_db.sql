-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Sep 2018 um 20:33
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
  `gast_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `bestellung`
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
(10, 1, '2018-09-23 01:15:02', 1, 2),
(11, 1, '2018-09-23 01:27:47', 0, 2),
(12, 1, '2018-09-23 01:32:18', 0, 2),
(13, 1, '2018-09-23 01:32:19', 0, 2),
(14, 1, '2018-09-23 01:32:19', 0, 2),
(15, 1, '2018-09-23 01:32:19', 0, 2),
(16, 1, '2018-09-23 01:32:19', 0, 2),
(17, 1, '2018-09-23 01:32:19', 0, 2),
(18, 1, '2018-09-23 01:32:19', 1, 2),
(19, 1, '2018-09-23 01:32:20', 0, 2),
(20, 1, '2018-09-23 01:32:20', 0, 2),
(21, 1, '2018-09-23 01:32:20', 0, 2),
(22, 1, '2018-09-23 08:25:32', 0, 0),
(23, 1, '2018-09-23 08:37:48', 0, 0),
(24, 1, '2018-09-23 09:32:29', 1, 0),
(25, 1, '2018-09-24 12:15:11', 0, 0);

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
(40, 25, 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gaeste`
--

CREATE TABLE `gaeste` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tisch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gaeste`
--

INSERT INTO `gaeste` (`id`, `name`, `tisch`) VALUES
(1, 'PAGINAsohn', 55),
(2, 'PAGINAsohn', 55),
(3, 'TimCookBoss', 44),
(4, 'TIMIBOY', 2),
(5, 'PAGINAxxxx', 21),
(6, 'PAGINA', 0),
(7, 'sdsd', 125),
(8, 'PAGINA', 0),
(9, 'PAGINAssss', 1112),
(10, 'PAGINA', 0),
(11, 'PAGINA', 0),
(12, 'PAGINA', 0);

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
  `gericht_kategorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gericht`
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
(40, 0, 'EISKAFFEE', '5.40', 'mit Vanilleeis, Kaffee & Schlagsahne', '..\\img\\Eiskaffee.jpg', 'Dessert'),
(41, 0, 'Espresso', '2.00', '', '..\\img\\Espresso.jpg', 'Getraenk'),
(42, 0, 'Cappucino', '2.50', '', '..\\img\\Cappucino.jpg', 'Getraenk'),
(43, 0, 'Latte Macchiato', '3.00', '', '..\\img\\Latte_Macchiato.jpg', 'Getraenk'),
(44, 0, 'Coca Cola', '2.50', '0,3l', '..\\img\\Coca_Cola.jpg', 'Getraenk'),
(45, 0, 'Fanta', '2.50', '0,3l', '..\\img\\Fanta.jpg', 'Getraenk'),
(46, 0, 'Apfelsaft', '2.50', '0,3l', '..\\img\\Apfelsaft.jpg', 'Getraenk'),
(47, 0, 'Tafelwasser', '2.00', '0,5l', '..\\img\\Tafelwasser.jpg', 'Getraenk'),
(48, 0, 'Mineralwasser', '2.00', '0,5l', '..\\img\\Mineralwasser.jpg', 'Getraenk'),
(49, 0, 'Welde Pils', '3.00', '0,3l', '..\\img\\Welde_Pils.jpg', 'Getraenk'),
(50, 0, 'Paulaner Hefeweizen', '3.50', '0,5l', '..\\img\\Paulaner_Hefe.jpg', 'Getraenk'),
(51, 0, 'Rotwein', '3.50', '0,25l', '..\\img\\Rotwein.jpg', 'Getraenk'),
(52, 0, 'Grappa', '4.50', '2cl', '..\\img\\Grappa.jpg', 'Getraenk'),
(53, 1, 'Sprite', '2.50', '0,3l', '..\\img\\Sprite.jpg', 'Getraenk'),
(54, 1, 'Coca Cola Light', '2.50', '0,3l', '..\\img\\Coca_Cola_Light.jpg', 'Getraenk'),
(55, 1, 'Orangensaft', '3.50', '0,5l', '..\\img\\Orangensaft.jpg', 'Getraenk');

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
  `mitarbeiter_beruf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `mitarbeiter`
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
(35, 50, 0),
(36, 51, 0);

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
  MODIFY `bestellung_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT für Tabelle `bestellung_gerichte`
--
ALTER TABLE `bestellung_gerichte`
  MODIFY `bestellung_gerichte_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT für Tabelle `gaeste`
--
ALTER TABLE `gaeste`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
