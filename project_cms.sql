-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 feb 2018 om 11:05
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cms`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cms_user`
--

CREATE TABLE `cms_user` (
  `id` int(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_level` enum('Admin','Beheerder') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `cms_user`
--

INSERT INTO `cms_user` (`id`, `surname`, `name`, `photo`, `username`, `password`, `user_level`) VALUES
(27, 'Fransman', 'Jovin', 'img/WP_Midnight_Warrior-2560x1440_00000.jpg', 'jovinfransman', '$2y$10$GI592SOASzbkDbm3Mr.Y4uasPyWJ4wopeCpiJWVLioJCmaRAeItOu', 'Beheerder'),
(13, 'Ramdin', 'Viresh', 'img/WP_Lightning_Legend-2560x1440_00000.jpg', 'vireshramdin', '$2y$10$53hruBzbkY7BVv4HwT3x8.A4xaU.bxwf1W/6kfHukDJ0s2GjhM.WO', 'Admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `dealspagina`
--

CREATE TABLE `dealspagina` (
  `id` int(11) NOT NULL,
  `deal_naam` varchar(100) NOT NULL,
  `over_deal` varchar(10000) NOT NULL,
  `photo_path` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `dealspagina`
--

INSERT INTO `dealspagina` (`id`, `deal_naam`, `over_deal`, `photo_path`) VALUES
(5, 'Vakantie Deals', 'Profiteer van de hoogste kortingen en scherpste prijzen in de vakantie periode.\r\n*Actie start vanaf 14Juli ', 'img/deals/deal1.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenementen`
--

CREATE TABLE `evenementen` (
  `id` int(100) NOT NULL,
  `evenement_id` int(100) NOT NULL,
  `photo_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `evenementen`
--

INSERT INTO `evenementen` (`id`, `evenement_id`, `photo_path`) VALUES
(196, 42, 'img/evenementen/1.jpg'),
(197, 42, 'img/evenementen/2.jpg'),
(198, 42, 'img/evenementen/3.jpg'),
(199, 42, 'img/evenementen/4.jpg'),
(200, 42, 'img/evenementen/5.jpg'),
(201, 42, 'img/evenementen/6.jpg'),
(202, 43, 'img/evenementen/1.jpg'),
(203, 43, 'img/evenementen/2.jpg'),
(204, 43, 'img/evenementen/3.jpg'),
(205, 43, 'img/evenementen/4.jpg'),
(206, 43, 'img/evenementen/5.jpg'),
(207, 43, 'img/evenementen/6.jpg'),
(220, 46, 'img/evenementen/1.jpg'),
(221, 46, 'img/evenementen/2.jpg'),
(222, 46, 'img/evenementen/3.jpg'),
(223, 46, 'img/evenementen/4.jpg'),
(224, 46, 'img/evenementen/5.jpg'),
(225, 46, 'img/evenementen/6.jpg'),
(226, 47, 'img/evenementen/2.jpg'),
(227, 47, 'img/evenementen/3.jpg'),
(228, 47, 'img/evenementen/4.jpg'),
(229, 47, 'img/evenementen/5.jpg'),
(230, 47, 'img/evenementen/6.jpg'),
(231, 47, 'img/evenementen/1.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenementenpagina`
--

CREATE TABLE `evenementenpagina` (
  `id` int(100) NOT NULL,
  `evenement_naam` varchar(100) NOT NULL,
  `over_evenement` varchar(10000) NOT NULL,
  `cover_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `evenementenpagina`
--

INSERT INTO `evenementenpagina` (`id`, `evenement_naam`, `over_evenement`, `cover_photo`) VALUES
(42, 'Huwelijk', '', 'img/evenementen/covers/event3.jpg'),
(43, 'Receptie', '', 'img/evenementen/covers/even2.jpg'),
(46, 'Brunch', '', 'img/evenementen/covers/event4.jpg'),
(47, 'Pool Day', '', 'img/evenementen/covers/event5.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `homepagina`
--

CREATE TABLE `homepagina` (
  `id` int(100) NOT NULL,
  `photo_path` varchar(100) NOT NULL,
  `photo_caption` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `homepagina`
--

INSERT INTO `homepagina` (`id`, `photo_path`, `photo_caption`) VALUES
(21, 'img/slideshow/room.jpg', 'Welkom Bij Hotel Fevie Ster'),
(31, 'img/slideshow/room1.jpeg', 'Elegantie, Comfort, Gemak'),
(33, 'img/slideshow/WP_Gothams_Champion-2560x1440_00000.jpg', 'Test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kamerspagina`
--

CREATE TABLE `kamerspagina` (
  `id` int(11) NOT NULL,
  `kamertype` varchar(100) DEFAULT NULL,
  `kamer_info` varchar(10000) NOT NULL,
  `prijs` varchar(100) NOT NULL,
  `photo_path` varchar(100) NOT NULL,
  `bedden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `kamerspagina`
--

INSERT INTO `kamerspagina` (`id`, `kamertype`, `kamer_info`, `prijs`, `photo_path`, `bedden`) VALUES
(3, 'Standard', 'Geniet van uw verblijf in Suriname in een van onze goed ontworpen en comfortabele standaardkamers die het perfecte toevluchtsoord bieden voor zowel zaken als plezier.\r\n\r\nOnze Standaardkamer biedt u zeker de gemakken en luxe die u zoekt in een viersterrenhotel. De kamers zijn elegant ingericht en zeer comfortabel.\r\nOns team dat er alles aan doet om uw verblijf zo gedenkwaardig en aangenaam mogelijk te maken, is slechts een telefoontje verwijderd.', 'Vanaf $100 p/nacht', 'img/kamers/standard.jpg', 1),
(5, 'Test', 'test', '120', 'img/kamers/WP_Panthera-2560x1440_00000.jpg', 3),
(4, 'Deluxe', 'De Deluxe Rooms vanHotel Fevie Ster  zijn qua inrichting even strak, modern en gezellig ingericht als de Standard Rooms.\r\n\r\nOnze Deluxe kamers zijn ruimer van opzet dan de Standard Room, zodat u meer bewegingsvrijheid ervaart. Een tweede kingsize bed in deze hotelkamer geeft u de mogelijkheid met maximaal 3 personen te overnachten.\r\n\r\nDeze kamers zijn voornamelijk aan het einde van jaar zeer populair, omdat ze uitzicht geven op alle festiviteiten op de uitgaansstrip die tijdens de laatste dagen van December plaatsvinden.\r\n', 'Vanaf  $150,- p/nacht', 'img/kamers/deluxe.jpg', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `restaurantpagina`
--

CREATE TABLE `restaurantpagina` (
  `id` int(100) NOT NULL,
  `restaurant_info` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `restaurantpagina`
--

INSERT INTO `restaurantpagina` (`id`, `restaurant_info`) VALUES
(1, '<div><span style="font-weight: bold;">DINER & ENTERTAINMENT</span></div><div><span style="font-weight: bold;">In overeenstemming met ons begrip van gastvrijheid en onze voortdurende inspanningen om elk verblijf van onze gasten onvergetelijk te maken, doen wij altijd een extra stap voor onze gasten met betrekking tot onze diensten. Daarbij verrassen we onze gasten regelmatig met onze menus door innovatief en verfrissend te zijn.</span></div><div><br></div><div><span style="font-weight: bold;">Restaurant en terras</span></div><div>Serveer je smaakpapillen en dineer in stijl in ons restaurant en terras, dat geweldige eetervaringen biedt. Onze chef werkt nauw samen met zijn team om een â€‹â€‹menu te ontwerpen dat wordt aangevuld met een uitgebreide wijnkaart met enkele goede wijnen uit de beroemde wijngaarden.</div><div><span style="font-weight: bold;"><br></span></div><div><span style="font-weight: bold;">Reserveer een tafel in ons restaurant door te bellen naar +597 47 35 00</span></div><div><br></div><div>Dagelijks geopend van 6.00 tot 10.30 uur</div><div>Ontbijt: 6:00 - 10:30 uur</div><div>Lunch: 12.00 - 16.00 uur</div><div>Diner: 18:00 - 22.30 uur</div><div>Snacks: 10:30 - 00:00 uur</div><div><br></div><div><span style="font-weight: bold;">Lobby bar</span></div><div>De Lobby Bar is een uitstekende manifestatie van het zakelijk georiÃ«nteerde hotelbeleid en hoge normen en is ook een geavanceerdere optie voor mensen die willen relaxen met vrienden.</div><div><br></div><div>Neem plaats in onze lobbybar en proef de smaak van een gearomatiseerde koffie, kwaliteitswijnen of mixdrankjes.</div><div><br></div><div>Dagelijks geopend van 10:00 tot 01:00 uur</div>');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `dealspagina`
--
ALTER TABLE `dealspagina`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `evenementen`
--
ALTER TABLE `evenementen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evenement_id` (`evenement_id`);

--
-- Indexen voor tabel `evenementenpagina`
--
ALTER TABLE `evenementenpagina`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `homepagina`
--
ALTER TABLE `homepagina`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `kamerspagina`
--
ALTER TABLE `kamerspagina`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `restaurantpagina`
--
ALTER TABLE `restaurantpagina`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT voor een tabel `dealspagina`
--
ALTER TABLE `dealspagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `evenementen`
--
ALTER TABLE `evenementen`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
--
-- AUTO_INCREMENT voor een tabel `evenementenpagina`
--
ALTER TABLE `evenementenpagina`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT voor een tabel `homepagina`
--
ALTER TABLE `homepagina`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT voor een tabel `kamerspagina`
--
ALTER TABLE `kamerspagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `restaurantpagina`
--
ALTER TABLE `restaurantpagina`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `evenementen`
--
ALTER TABLE `evenementen`
  ADD CONSTRAINT `evenementen_ibfk_1` FOREIGN KEY (`evenement_id`) REFERENCES `evenementenpagina` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
