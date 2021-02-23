-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2021 at 11:19 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `epost` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customersId` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `tel` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `epost` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `adress` varchar(50) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `img`, `date_added`) VALUES
(1, 'Coffee Yauco Selecto AA (Puerto Rico)', '<p>Fängslande kaffe ifrån Puerto Rico.</p>\r\n<h3>Beskrivning</h3>\r\n<ul>\r\n<li>Detta kaffe kommer de två farmerna Hacienda San Pedro och Hacienda Santa Ana \r\ni de sydvästra delarna av Puerto Rico.</li>\r\n<li>Alla bönor växer på den högsta höjden i Puerto Rico, vilket gör produktionen långsammare som i sin tur är en förutsättning för denna speciella böna.</li>\r\n<li>Bönan har en krämig nästan smörig smak med en fängslande eftersmak. En touch av choklad förgyller smaken och upplevelsen./li>\r\n<li>Alla bönor är handplockade och företaget sätter stort värde i deras arbetare med bra löner och goda hälsokontroller.</li>\r\n</ul>', '340 kr/kg', 'CoffeeYaucoSelectoAA.jpg', '2021-02-15 11:16:57'),
(2, 'Starbucks Rwanda Blue Bourbon (Gatare/Karengera, Rwanda)', '<p> Ett paradoxalt kaffe, tunt och dämpat, men med anmärkningsbar fyllighet och komplexitet.\r\n</p>\r\n<h3>Beskrivning</h3>\r\n<ul>\r\n<li>2004 så introducerades Starbucks Rwanda Blue Bourbon i Rwanda av just kaffekedjan Starbucks. Det här kaffet kommer från Rwanda, Gatare/Karengera.</li>\r\n</ul>', '340 kr/kg', 'rwaandacoffee.jpg', '2021-02-15 11:16:57'),
(3, 'Hawaiian Kona Coffee (Hawaii)', '<p>Kaffet som skapar den där speciella aloha känslan för just ditt hem!\r\n</p>\r\n<h3>Beskrivning</h3>\r\n<ul>\r\n<li>Royal Kona har skapat kaffe de senaste 50 åren. Med vår kaffe kvarn i Captain Cook i regionen Kona på den stora ön så ligger vi i hjärtat av den kända odlings regionen. Vilket är en av de mest kända platserna i världen för kaffeälskare.</li>\r\n<li>100% Kona kaffe bönor från Hawaii’s Kona kust. vårt Hawaiian Kona kaffe är noga utvalt ifrån de bästa av Kona kaffes odlingar. Dessa stora, smakfulla Kona kaffe bönor är rostade med perfektion av experter!\r\n</li>\r\n\r\n</ul>', '485 kr/kg', 'HawaiianKonaCoffee.jpg', '2021-02-15 11:16:57'),
(4, 'Los Planes (Citala, El Salvador)', '<p>Ett unikt kaffe från El Salvador i Centralamerika .</p>\r\n<h3>Beskrivning</h3>\r\n<ul>\r\n<li>Skapat av Sergio and Isabel Ticas.</li>\r\n<li>Produktionen började på Finca Los Planes i den bergiga regionen Chalatenango, El Salvador.</li>\r\n<li>Har vunnit flera priser i El Salvador för sitt anmärkningsvärda kaffe.</li>\r\n</ul>', '570 kr/kg', 'LosPlanes.jpg', '2021-02-15 11:16:57'),
(5, 'Blue Mountain (Wallenford Estate, Jamaica)', '<p>\"I de majestätiska Blue Mountains of Jamaica växwer världens finaste kaffe.\" Så lyder förklaring på deras egna hemsida och vilka är vi att tvivla ? KÖP!</p>\r\n<h3>Beskrivning</h3>\r\n<ul>\r\n<li>Från Jamaica kommer Blue Mountain och är enligt många kaffekännare världens bästa kaffe. Det är väldigt omtyckt för att inte ha några bittra toner utan är väldigt mild i smaken. Största importören av den här kaffesorten är Japan som står för över 80%.</li>\r\n</ul>', '700 kr/kg', 'BlueMountain.jpg', '2021-02-15 11:16:57'),
(6, 'St. Helena Coffee Company’s Island (St. Helena)', '<p>Ifall du har råd att lägga över 1100 kr per kg på ditt kaffe så rekommenderar vi skribenter detta kaffe!\r\n</p>\r\n<h3>Beskrivning</h3>\r\n<ul>\r\n<li>Ön St. Helena ligger i Södra Atlanten och upptäcktes år 1502 av en portugis. Upptäckten förblev en hemlighet under många år och det skulle dröja ända till år 1733 innan den första kaffebönan fraktades till ön. Numera är öns kaffe känt över hela världen för dess unika smak och distinkta kvalitet, mycket tack vare att deras kaffe innehåller en enda bönsort. Det är Green Tipped Bourbon Arabica som odlas och förädlas.</li>\r\n</ul>', '1130 kr/kg', 'sthelena.jpg', '2021-02-15 11:16:57'),
(7, 'Kopi Luwak Coffee (Indonesia)', '<p>För den \"kaffebajsfinsmakande\" personen kommer denna magstarka kaffesort.</p>\r\n<h3>Beskrivning</h3>\r\n<ul>\r\n<li>Kärt barn har många namn och kaffesorten Kopi Luwak brukar kallas både sibetkaffe, palmmårdskaffe och även det charmiga namnet bajskaffe. En kopp kopi luwak kan kosta så mycket som över 1000 kronor beroende på i vilket land och café som du befinner dig på, kilopriset för bönorna ligger på strax över 2000 kr/kg. Processen för att framställa kaffesorten är inte helt enkel och det är på odlingar i Sydostasien som kaffet tillverkas. För att få fram dessa lyxiga och unika bönor matar man palmmårdar med mogna kaffebär, när bären färdas genom palmmårdens mag- och tarmkanal mildras den bittra smaken och när de på naturlig väg kommer ut igen sorteras och rengörs det för att sedan framställas till kaffe.</li>\r\n</ul>', '2280 kr/kg', 'kopiluwak.jpg', '2021-02-15 11:16:57'),
(8, 'Hacienda La Esmeralda (Boquete, Panama)', '<p>Välbalanserad kopp med söta plommontoner. Där finns inget som sticker ut eller tar överhanden, utan allt smälter ihop till en god kopp kaffe. Munkänslan är len som siden. I bakgrunden ligger en liten syra som gör att plommontonerna inte blir kvalmiga i sin sötma.  \r\n</p>\r\n<h3>Beskrivning</h3>\r\n<ul>\r\n<li>Markerna i Panama där Hacienda La Esmeralda numera odlas och produceras ägdes från början av en svensk man, Hans Elliot. Därefter köpte en svensk-amerikansk man upp alla marker och det är av den familjen, Peterson, som kaffeodlingen än idag ägs. Kaffeodlingen har under flera hundra år vuxit fram och förfinats. Gården Hacienda La Esmeralda har vunnit flertal priser under årens lopp för bland annat bästa Geisha men även för sitt miljöarbete.</li>\r\n</ul>', '1482 kr/kg', 'HaciendaLaEsmeralda.jpg', '2021-02-15 11:16:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customersId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `customer` (`customerId`),
  ADD KEY `product` (`productId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customersId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customer` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customersId`),
  ADD CONSTRAINT `product` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
