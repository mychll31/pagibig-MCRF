-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2013 at 10:55 AM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pagibig`
--

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE IF NOT EXISTS `contribution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagibig_no` int(11) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `ext` varchar(5) DEFAULT NULL,
  `middlename` varchar(200) NOT NULL,
  `employeeCont` int(11) NOT NULL,
  `employerCont` int(11) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`id`, `pagibig_no`, `lastname`, `firstname`, `ext`, `middlename`, `employeeCont`, `employerCont`, `remarks`, `status`) VALUES
(1, 123, 'Mint AizawaTokyo Mew Mew)', 'FairchildDC/Wildstorm)', 'jr', 'Jupiter', 100, 100, 'employed', 1),
(2, 456, 'Momoko AkatsutsumiCartoon Network)', 'FaithDC Comics)', 'jr', 'Mars', 100, 100, 'employed', 1),
(3, 789, 'AlishaMisfits)', 'Fallen AngelDC Comics)', 'jr', 'Mercury', 100, 100, 'employed', 1),
(4, 1122, 'Alexandra/Alex (Totally Spies)', 'Fantomah', 'jr', 'Moon', 100, 100, 'employed', 1),
(5, 1455, 'AliceResident Evil series)', 'FantometteCollection Rose)', 'jr', 'Neptune', 100, 100, 'employed', 1),
(6, 1788, 'Amazi-Girl (Dumbing of Age)', 'Fathom', 'jr', 'Pluto', 100, 100, 'employed', 1),
(7, 2121, 'AmberEclipse Comics)', 'FathomAspen Comics)', 'jr', 'Saturn', 100, 100, 'employed', 1),
(8, 2454, 'American DreamMarvel Comics-MC2)', 'FeralMarvel)', 'jr', 'Uranus', 100, 100, 'employed', 1),
(9, 2787, 'American MaidThe Tick)', 'FeverDC Comics)', 'jr', 'Venus', 100, 100, 'employed', 1),
(10, 3120, 'Amethyst Princess of GemworldDC Comics)', 'FireDC Comics)', '', 'Star Fighter', 100, 100, 'employed', 1),
(11, 3453, 'AndromedaDC Comics)', 'FirebirdMarvel Comics)', 'III', 'Star Healer', 100, 100, 'employed', 1),
(12, 3786, 'AndromedaMarvel Comics)', 'FirestarMarvel Comics)', 'III', 'Star Maker', 100, 100, 'employed', 1),
(13, 4119, 'AngelaImage Comics)', 'Fire Lily (Nathan DiYorio)', 'III', 'Chibi Moon', 100, 100, 'employed', 1),
(14, 4452, 'AquagirlDC Comics)', 'Flaberella the simpsons)', 'III', 'Jupiter', 100, 100, 'employed', 1),
(15, 4785, 'Samus Aran', 'Flamebird III-V (DC Comics)', 'III', 'Mars', 100, 100, 'employed', 1),
(16, 5118, 'ArgentDC Comics)', 'Flash (Just Imagine...) (DC Comics)', 'III', 'Mercury', 100, 100, 'employed', 1),
(17, 5451, 'Arisia the Green Lantern of Graxos IV (DC Comics)', 'Flash (Tangent)DC Comics)', 'III', 'Moon', 100, 100, 'employed', 1),
(18, 5784, 'ArrowetteDC Comics)', 'Fleur-de-LisDC Comics)', 'III', 'Neptune', 100, 100, 'employed', 1),
(19, 6117, 'Artemis of Bana-MighdallDC Comics)', 'FlintWS)', 'III', 'Pluto', 100, 100, 'employed', 1),
(20, 6450, 'Atom EveImage)', 'Flora (Winx Club)', '', 'Saturn', 100, 100, 'employed', 1),
(21, 6783, 'Atomic Bettytelevision series title character)', 'ForerunnerDC Comics)', 'I', 'Uranus', 100, 100, 'employed', 1),
(22, 7116, 'AuroraMarvel Comics)', 'Pudding FongTokyo Mew Mew)', 'I', 'Venus', 100, 100, 'employed', 1),
(23, 7449, 'Avengelynevarious)', 'Melaka FrayDark Horse Comics)', 'I', 'Star Fighter', 100, 100, 'employed', 1),
(24, 7782, 'B.OrchidKiller Instinct)', 'Free SpiritMarvel Comics)', 'I', 'Star Healer', 100, 100, 'employed', 1),
(25, 8115, 'Babaing Kidlat (from the 1964 movie Babaing Kidlat)', 'FreefallDC-Wildstorm)', 'I', 'Star Maker', 100, 100, 'employed', 1),
(26, 8448, 'BallisticCyberforce member) (Top Cow)', 'Tara FremontAC comics)', 'I', 'Chibi Moon', 100, 100, 'employed', 1),
(27, 8781, 'Barb Wire', 'Adrienne FrostMarvel Comics)', 'I', 'Jupiter', 100, 100, 'employed', 1),
(28, 9114, 'BarbarellaV-Magazine)', 'GamoraMarvel Comics)', 'I', 'Mars', 100, 100, 'employed', 1),
(29, 9447, 'BatgirlDC Comics)', 'GanymedeMarvel Comics)', 'I', 'Mercury', 100, 100, 'employed', 1),
(30, 9780, 'Battle Angel AlitaShueisha)', 'GargantaAC comics)', 'I', 'Moon', 100, 100, 'employed', 1),
(31, 10113, 'BatwomanDC Comics)', 'Gemma Ang Babaing Kidlat', 'I', 'Neptune', 100, 100, 'employed', 1),
(32, 10446, 'Beautiful DreamerDC Comics)', 'GhostDark Horse Comics)', '', 'Pluto', 100, 100, 'employed', 1),
(33, 10779, 'Bella DonnaMarvel Comics)', 'GlitterMarvel - New Universe)', '', 'Saturn', 100, 100, 'employed', 1),
(34, 11112, 'BelphegorDC Comics)', 'Gloryvarious)', '', 'Uranus', 100, 100, 'employed', 1),
(35, 11445, 'Big BardaDC Comics)', 'GlossDC Comics)', '', 'Venus', 100, 100, 'employed', 1),
(36, 11778, 'Big Bertha (comics)Marvel Comics)', 'GodivaDC Comics)', '', 'Star Fighter', 100, 100, 'employed', 1),
(37, 12111, 'The Bionic WomanIma)', 'Miyako GoutokujiCartoon Network)', '', 'Star Healer', 100, 100, 'employed', 1),
(38, 12444, 'BinaryMarvel Comics)', 'GraceDC Comics)', '', 'Star Maker', 100, 100, 'employed', 1),
(39, 12777, 'Vera Blackaka Sister Superior) (DC Comics)', 'Graphics Girl (Amy Scutter)', '', 'Chibi Moon', 100, 100, 'employed', 1),
(40, 13110, 'Blackbat [1][2]DC Comics)', 'Gravity GirlBirdman and the Galaxy Trio)', '', 'Jupiter', 100, 100, 'employed', 1),
(41, 13443, 'Black CanaryDC Comics)', 'Max Guevarafrom live-action TV show Dark Angel)', '', 'Mars', 100, 100, 'employed', 1),
(42, 13776, 'Black Cat[3]Harvey Comics)', 'GypsyDC Comics)', '', 'Mercury', 100, 100, 'employed', 1),
(43, 14109, 'Black CatMarvel Comics)', 'HaloDC Comics)', '', 'Moon', 100, 100, 'employed', 1),
(44, 14442, 'Black Cherry X2000 AD)', 'HarbingerDC Comics)', '', 'Neptune', 100, 100, 'employed', 1),
(45, 14775, 'Black OrchidDC Comics)', 'Hawk as Holly Granger and Sasha Martens (DC Comics)', '', 'Pluto', 100, 100, 'employed', 1),
(46, 15108, 'Black WidowNatasha Romanoff)', 'Hawkeye (Kate Bishop)Marvel Comics)', '', 'Saturn', 100, 100, 'employed', 1),
(47, 15441, 'Black WidowTimely Comics)', 'HawkgirlDC Comics)', '', 'Uranus', 100, 100, 'employed', 1),
(48, 15774, 'BlacklightMarvel Comics-MC2)', 'HawkwomanDC Comics)', '', 'Venus', 100, 100, 'employed', 1),
(49, 16107, 'BlinkMarvel Comics)', 'Molly HayesMarvel Comics)', '', 'Star Fighter', 100, 100, 'employed', 1),
(50, 16440, 'Blitzkrieg (Antarctic Press)', 'HellcatMarvel Comics)', '', 'Star Healer', 100, 100, 'employed', 1),
(51, 16773, 'BloomWinx Club)', 'Satana HellstromMarvel Comics)', '', 'Star Maker', 100, 100, 'employed', 1),
(52, 17106, 'Blonde PhantomMarvel Comics)', 'HepzibahMarvel Comics)', '', 'Chibi Moon', 100, 100, 'employed', 1),
(53, 17439, 'BlossomCartoon Network)', 'Hit GirlKick-Ass)', '', 'Jupiter', 100, 100, 'employed', 1),
(54, 17772, 'Bloodberry', 'HorridusImage-Highbrow Ent)', '', 'Mars', 100, 100, 'employed', 1),
(55, 18105, 'BluestreakMarvel Comics-MC2)', 'Heather Hudson formerly Sasquatch Exiles member (Marvel Comics)', '', 'Mercury', 100, 100, 'employed', 1),
(56, 18438, 'BoodikkaGreen Lantern Corps) (DC Comics)', 'HuntaraMarvel Comics)', '', 'Moon', 100, 100, 'employed', 1),
(57, 18771, 'CallistoMarvel Comics)', 'HuntressDC Comics)', '', 'Neptune', 100, 100, 'employed', 1),
(58, 19104, 'Captain ConfederacyMarvel Comics)', 'IceDC Comics)', '', 'Pluto', 100, 100, 'employed', 1),
(59, 19437, 'Captain MarvelMarvel Comics)', 'IcemaidenDC Comics)', '', 'Saturn', 100, 100, 'employed', 1),
(60, 19770, 'Captain UniverseMarvel Comics)', 'IndigoDC Comics)', '', 'Uranus', 100, 100, 'employed', 1),
(61, 20103, 'Lenore Castle (Powerline) ', 'Infragirl (Tomorrow Syndicate member) (Image Comics)', '', 'Venus', 100, 100, 'employed', 1),
(62, 20436, 'The CatMarvel Comics)', 'Insect QueenDC Comics)', '', 'Star Fighter', 100, 100, 'employed', 1),
(63, 20769, 'Cat ClawMalibu comics)', 'Invisible WomanMarvel Comics)', '', 'Star Healer', 100, 100, 'employed', 1),
(64, 21102, 'CatwomanDC comics)', 'Natasha IronsDC Comics)', '', 'Star Maker', 100, 100, 'employed', 1),
(65, 21435, 'CelsiusDC Comics)', 'IsisDC Comics)', '', 'Chibi Moon', 100, 100, 'employed', 1),
(66, 21768, 'CeriseMarvel Comics)', 'Ichigo Momomomiya (Tokyo Mew Mew)', '', 'Jupiter', 100, 100, 'employed', 1),
(67, 22101, 'ChanceMarvel Comics)', 'Iron Man (Marvel comics)', '', 'Mars', 100, 100, 'employed', 1),
(68, 22434, 'Chandika (comics)', 'JadeDC)', '', 'Mercury', 100, 100, 'employed', 1),
(69, 22767, 'ChaseDC Comics)', 'Jann of the JungleMarvel Comics)', '', 'Moon', 100, 100, 'employed', 1),
(70, 23100, 'Abbey Chase (see Danger Girl)', 'JaynaDC Comics)', '', 'Neptune', 100, 100, 'employed', 1),
(71, 23433, 'ChastityChaos Comics)', 'Jericho (Reload Comics)', '', 'Pluto', 100, 100, 'employed', 1),
(72, 23766, 'Cheetara', 'JetDC Comics)', '', 'Saturn', 100, 100, 'employed', 1),
(73, 24099, 'Cherry', 'JetWildstorm)', '', 'Uranus', 100, 100, 'employed', 1),
(74, 24432, 'ChoiceMarvel - Ultraverse)', 'Jem and the HologramsHasbro)', '', 'Venus', 100, 100, 'employed', 1),
(75, 24765, 'Chun-LiStreet Fighter)', 'JocastaMarvel Comics)', '', 'Star Fighter', 100, 100, 'employed', 1),
(76, 25098, 'Cammy WhiteStreet Fighter)', 'JoltMarvel Comics)', '', 'Star Healer', 100, 100, 'employed', 1),
(77, 25431, 'CimarronEclipse comics)', 'Jessica Jonesaka Jewel and Knightress) (Marvel Comics)', '', 'Star Maker', 100, 100, 'employed', 1),
(78, 25764, 'CinnamonDC Comics)', 'JessMisfits)', '', 'Chibi Moon', 100, 100, 'employed', 1),
(79, 26097, 'Circuit BreakerTransformers)', 'Rhea Jonesaka Lodestone) (DC Comics)', '', 'Jupiter', 100, 100, 'employed', 1),
(80, 26430, 'CleaMarvel Comics)', 'JinxDC Comics) (Teen Titans TV Series only)', '', 'Mars', 100, 100, 'employed', 1),
(81, 26763, 'Cleopatra (Astro City)', 'JoystickMarvel Comics)', '', 'Mercury', 100, 100, 'employed', 1),
(82, 27096, 'Clover (Totally Spies)', 'JubileeMarvel Comics)', '', 'Moon', 100, 100, 'employed', 1),
(83, 27429, 'Clobber GirlSimpsons)', 'Judomaster IIIDC Comics)', '', 'Neptune', 100, 100, 'employed', 1),
(84, 27762, 'ClobberellaFuturama)', 'Jungle Girlvarious)', '', 'Pluto', 100, 100, 'employed', 1),
(85, 28095, 'CoagulaDC Comics)', 'Jarella (Huk)', '', 'Saturn', 100, 100, 'employed', 1),
(86, 28428, 'CobwebAmericas Best Comics)', 'Jennifer KaleMarvel Comics)', '', 'Uranus', 100, 100, 'employed', 1),
(87, 28761, 'ColtAC Comics)[1]', 'Bette KaneDC Comics)', '', 'Venus', 100, 100, 'employed', 1),
(88, 29094, 'Comet QueenDC Comics Legion of Super-Heroes)', 'Nova KaneFirst)', '', 'Star Fighter', 100, 100, 'employed', 1),
(89, 29427, 'CopycatDC-Wildstorm)', 'Karatecha (Kiss Comics)', '', 'Star Healer', 100, 100, 'employed', 1),
(90, 29760, 'CopycatMarvel Comics)', 'KarmaMarvel Comics)', '', 'Star Maker', 100, 100, 'employed', 1),
(91, 30093, 'Anya CorazonMarvel Comics)', 'Kasumi (aka Batgirl) (Cassandra Cain) (DC Comics)', '', 'Chibi Moon', 100, 100, 'employed', 1),
(92, 30426, 'CraneBon Comics)', 'KatanaDC Comics)', '', 'Jupiter', 100, 100, 'employed', 1),
(93, 30759, 'Crazy JaneDC Comics)', 'Kendra YoungBuffy the Vampire Slayer)', '', 'Mars', 100, 100, 'employed', 1),
(94, 31092, 'Crimson Avenger IIIDC Comics)', 'KellyMisfits)', '', 'Mercury', 100, 100, 'employed', 1),
(95, 31425, 'Crimson CurseMarvel Comics-MC2)', 'Laurel KentDC Comics)', '', 'Moon', 100, 100, 'employed', 1),
(96, 31758, 'Crimson FoxDC Comics)', 'Kid Flash (Iris West)DC Comics)', '', 'Neptune', 100, 100, 'employed', 1),
(97, 32091, 'CrystalMarvel Comics)', 'Kimberly(Pink Power Ranger)', '', 'Pluto', 100, 100, 'employed', 1),
(98, 32424, 'Cutey Honeytitle character)', 'KinetixDC Comics)', '', 'Saturn', 100, 100, 'employed', 1),
(99, 32757, 'Cybergirltitle character)', 'KismetMarvel Comics)', '', 'Uranus', 100, 100, 'employed', 1),
(100, 33090, 'Cyborg girl/Cyborg-She', 'Misty KnightMarvel Comics)', '', 'Venus', 100, 100, 'employed', 1),
(101, 33423, 'Cybersix', 'KnockoutDC Comics)', '', 'Star Fighter', 100, 100, 'employed', 1),
(102, 33756, 'CybladeTop Cow)', 'KoleDC Comics)', '', 'Star Healer', 100, 100, 'employed', 1),
(103, 34089, 'Cyclone (DC Comics)', 'KOS-MOSHeroine of the Xenosaga series)', '', 'Star Maker', 100, 100, 'employed', 1),
(104, 34422, 'DaggerMarvel Comics)', 'KrathaVirgin Comiffcs)', '', 'Chibi Moon', 100, 100, 'employed', 1),
(105, 34755, 'DarkstarMarvel Comics)', 'KristinComics Interview)', '', 'Jupiter', 100, 100, 'employed', 1),
(106, 35088, 'DarnaMango Comics)', 'KrystalaABS-CBN Television)', '', 'Mars', 100, 100, 'employed', 1),
(107, 35421, 'DartDC Comics)', 'Kumori (Aftermath)', '', 'Mercury', 100, 100, 'employed', 1),
(108, 35754, 'DartImage-Highbrow Ent)', 'Kitty (Wolverine And The X-Men DVD Series)', '', 'Moon', 100, 100, 'employed', 1),
(109, 36087, 'DawnSirius Comics)', 'Lady BlackhawkDC Comics)', '', 'Neptune', 100, 100, 'employed', 1),
(110, 36420, 'DawnstarDC Comics)', 'Lady DeathChaos Comics)', '', 'Pluto', 100, 100, 'employed', 1),
(111, 36753, 'DazzlerMarvel Comics)', 'Lady Luck The Spirit Section', '', 'Saturn', 100, 100, 'employed', 1),
(112, 37086, 'Dead GirlMarvel Comics)', 'LadyhawkMarvel Comic)', '', 'Uranus', 100, 100, 'employed', 1),
(113, 37419, 'Karolina DeanMarvel Comics)', 'La LunaticaMarvel Comics)', '', 'Venus', 100, 100, 'employed', 1),
(114, 37752, 'DeathcryMarvel Comics)', 'Lavagirl (Sharkboy and Lavagirl)', '', 'Star Fighter', 100, 100, 'employed', 1),
(115, 38085, 'DebriiMarvel Comics)', 'Layla (Winx Club)', '', 'Star Healer', 100, 100, 'employed', 1),
(116, 38418, 'Deep BlueDC Comics)', 'Layla (Sky High)', '', 'Star Maker', 100, 100, 'employed', 1),
(117, 38751, 'DestinyMarvel Comics)', 'Juniper LeeThe Life and Times of Juniper Lee)', '', 'Chibi Moon', 100, 100, 'employed', 1),
(118, 39084, 'DeviVirgin Comics)', 'LeelooThe Fifth Element)', '', 'Jupiter', 100, 100, 'employed', 1),
(119, 39417, 'DiamondBlink Comics)', 'Faith LehaneBuffy the Vampire Slayer)', '', 'Mars', 100, 100, 'employed', 1),
(120, 39750, 'Diamond LilMarvel Comics)', 'Liberty BelleDC Comics)', '', 'Mercury', 100, 100, 'employed', 1),
(121, 40083, 'DiamondbackMarvel Comics)', 'Lightning Lassa.k.a. Light Lass Gossamer Spark) (DC Comics)', '', 'Moon', 100, 100, 'employed', 1),
(122, 40416, 'Brittany DiggersAntarctic)', 'Lightspeedfrom Power Pack) (Marvel Comics)', '', 'Neptune', 100, 100, 'employed', 1),
(123, 40749, 'DivaDC-Wildstorm)', 'Lime', '', 'Pluto', 100, 100, 'employed', 1),
(124, 41082, 'Doctor LightDC Comics)', 'Little MermaidDC Comics)', '', 'Saturn', 100, 100, 'employed', 1),
(125, 41415, 'Doctor MidnightDC Comics)', 'LookerDC Comics)', '', 'Uranus', 100, 100, 'employed', 1),
(126, 41748, 'Doll GirlDC Comics)', 'Loria (see Blood Pack (comics) version) (DC Comics)', '', 'Venus', 100, 100, 'employed', 1),
(127, 42081, 'DolphinDC Comics)', 'Lyjaaka Lazerfist and Ms. Fantastic) (Marvel Comics)(Marvel-MC2)', '', 'Star Fighter', 100, 100, 'employed', 1),
(128, 42414, 'DominoMarvel Comics)', 'Madame .44DC Comics)[2]', '', 'Star Healer', 100, 100, 'employed', 1),
(129, 42747, 'Domino LadyPulps)', 'Madame MirageTop Cow Productions)', '', 'Star Maker', 100, 100, 'employed', 1),
(130, 43080, 'Dove as Dawn Granger (DC Comics)', 'Madame XanaduDC Comics)', '', 'Chibi Moon', 100, 100, 'employed', 1),
(131, 43413, 'DragonnaMars Ravelos)', 'The MagdalenaTop Cow Productions)', '', 'Jupiter', 100, 100, 'employed', 1),
(132, 43746, 'DragonflyAC Comics)', 'MagdaleneMarvel Comics)', '', 'Mars', 100, 100, 'employed', 1),
(133, 44079, 'Dream GirlDC Comics)', 'MagikMarvel Comics)', '', 'Mercury', 100, 100, 'employed', 1),
(134, 44412, 'Duck-GirlBon Comics)', 'MagmaMarvel Comics)', '', 'Moon', 100, 100, 'employed', 1),
(135, 44745, 'Dumb BunnyDC Comics)', 'Maiden Justice', '', 'Neptune', 100, 100, 'employed', 1),
(136, 45078, 'DuskMarvel Comics)', 'Manhunter (Kate Spencer)DC Comics)', '', 'Pluto', 100, 100, 'employed', 1),
(137, 45411, 'DustMarvel Comics)', 'Manitou DawnDC Comics)', '', 'Saturn', 100, 100, 'employed', 1),
(138, 45744, 'Dyna GirlKrofft)', 'Marionette (see Micronauts) (Marvel Comics)', '', 'Uranus', 100, 100, 'employed', 1),
(139, 46077, 'Dynamite GirlAntarctic Press)', 'MarrinaMarvel Comics)', '', 'Venus', 100, 100, 'employed', 1),
(140, 46410, 'EchoMarvel Comics)', 'MarrowMarvel Comics)', '', 'Star Fighter', 100, 100, 'employed', 1),
(141, 46743, 'Elasti-GirlDC Comics)', 'Marvel GirlMarvel Comics)', '', 'Star Healer', 100, 100, 'employed', 1),
(142, 47076, 'Elastigirl/Mrs.IncredibleThe Incredibles)', 'Mary MarvelDC Comics)', '', 'Star Maker', 100, 100, 'employed', 1),
(143, 47409, 'Electra WomanKrofft)', 'Masada (see Youngblood) (various)', '', 'Chibi Moon', 100, 100, 'employed', 1),
(144, 47742, 'ElektraMarvel Comics)', 'MatildaMatilda from the Roald Dahl series)', '', 'Jupiter', 100, 100, 'employed', 1),
(145, 48075, 'EmpoweredDark Horse Comics)', 'Kaoru MatsubaraCartoon Network)', '', 'Mars', 100, 100, 'employed', 1),
(146, 48408, 'EmpressDC)', 'Aspen MatthewsAspen Comics)', '', 'Mercury', 100, 100, 'employed', 1),
(147, 48741, 'Energizerfrom Power Pack) (Marvel)', 'MaximaDC Comics)', '', 'Moon', 100, 100, 'employed', 1),
(148, 49074, 'The Engineer IIDC - Wildstorm)', 'Maximum Ridenovel series and manga)', '', 'Neptune', 100, 100, 'employed', 1),
(149, 49407, 'FairchildDC/Wildstorm)', 'MayaDC Comics)', '', 'Pluto', 100, 100, 'employed', 1),
(150, 49740, 'FaithDC Comics)', 'MedusaMarvel Comics)', '', 'Saturn', 100, 100, 'employed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employer_profile`
--

CREATE TABLE IF NOT EXISTS `employer_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagibig_no` int(100) DEFAULT NULL,
  `buss_name` varchar(500) DEFAULT NULL,
  `sss_no` int(11) DEFAULT NULL,
  `div_code` int(11) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `tin` int(11) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employer_profile`
--

INSERT INTO `employer_profile` (`id`, `pagibig_no`, `buss_name`, `sss_no`, `div_code`, `address`, `zip_code`, `tin`, `contact_no`) VALUES
(1, 0, 'NO DATA YET', 0, 0, 'NO DATA YET', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
