-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 27, 2023 at 03:38 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving_fast`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id_car` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `path_image` varchar(255) NOT NULL,
  `category` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id_car`, `brand`, `model`, `description`, `price`, `path_image`, `category`, `stock`) VALUES
(1, 'Ferrari', 'F40', 'La Ferrari F40 est une supercar GT et de compétition, du constructeur automobile italien Ferrari. Produite entre 1987 et 1992, pour fêter les quarante ans de la marque, elle succède à la Ferrari 288 GTO. Ultime création du vivant du Commendatore Enzo Ferrari (1898-1988), elle est au moment de sa sortie, la voiture la plus rapide, la plus puissante et la plus chère de l\'histoire de l\'automobile (liste des voitures de série les plus rapides au monde).', 980000, '../../assets/img/product/ferrari-f40.jpg', 1, 1),
(2, 'Mazda', 'Mx5 NA', 'La MX-5 repose sur 5 principes fondamentaux, définis par l\'actuel chef de programme Nobuhiro Yamamoto : légèreté, propulsion, répartition des masses 50/50, faible inertie en virage, prix abordable1.', 9800, '../../assets/img/product/mx5-na.jpg', 2, 2),
(3, 'Ferrari', '488 GTB', 'La Ferrari 488 GTB est un coupé GT produit par le constructeur automobile italien Ferrari, successeur de la Ferrari 458.', 250000, '../../assets/img/product/ferrari-488-gtb.jpg', 3, 2),
(4, 'Lamborghini', 'Huracán', 'La Lamborghini Huracán est une voiture de sport produite par le constructeur automobile italien Lamborghini.', 270000, '../../assets/img/product/lamborghini-huracan.jpg', 1, 1),
(5, 'Aston Martin', 'Vantage', 'La Vantage est une voiture de sport produite par le constructeur britannique Aston Martin.', 180000, '../../assets/img/product/aston-martin-vantage.jpg', 2, 2),
(6, 'Porsche', '911', 'La Porsche 911 est une voiture de sport produite par le constructeur allemand Porsche depuis 1963.', 200000, '../../assets/img/product/porsche-911.jpg', 2, 2),
(7, 'McLaren', '570S', 'La McLaren 570S est une voiture de sport produite par le constructeur automobile britannique McLaren Automotive.', 260000, '../../assets/img/product/mclaren-570s.jpg', 1, 2),
(8, 'Renault', 'Clio V', 'La Renault Clio V est une citadine produite par le constructeur français Renault depuis 2019. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 15000, '../../assets/img/product/renault-clio.jpg', 5, 2),
(9, 'Peugeot', '308', 'La Peugeot 308 est une voiture compacte produite par le constructeur français Peugeot depuis 2007. Elle est disponible en plusieurs versions, notamment essence, diesel et électrique.', 18000, '../../assets/img/product/peugeot-308.jpg', 4, 2),
(10, 'Citroën', 'C4 Cactus', 'La Citroën C4 Cactus est un crossover compact produit par le constructeur français Citroën depuis 2014. Elle se distingue par un design original et des coussins d\'air sur les portes.', 19000, '../../assets/img/product/citroen-c4-cactus.jpg', 5, 2),
(11, 'Volkswagen', 'Golf VII', 'La Volkswagen Golf VII est une voiture compacte produite par le constructeur allemand Volkswagen depuis 2012. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 20000, '../../assets/img/product/volkswagen-golf.jpg', 5, 2),
(12, 'Toyota', 'Corolla', 'La Toyota Corolla est une voiture compacte produite par le constructeur japonais Toyota depuis 1966. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 22000, '../../assets/img/product/toyota-corolla.jpg', 5, 2),
(13, 'Ford', 'Focus', 'La Ford Focus est une voiture compacte produite par le constructeur américain Ford depuis 1998. Elle est disponible en plusieurs versions, notamment essence, diesel et électrique.', 19000, '../../assets/img/product/ford-focus.jpg', 4, 2),
(14, 'BMW', 'Série 3', 'La BMW Série 3 est une berline produite par le constructeur allemand BMW depuis 1975. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 35000, '../../assets/img/product/bmw-serie-3.jpg', 4, 2),
(15, 'Mercedes-Benz', 'Classe C', 'La Mercedes-Benz Classe C est une berline produite par le constructeur allemand Mercedes-Benz depuis 1993. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 40000, '../../assets/img/product/mercedes-classe-c.jpg', 4, 2),
(16, 'Audi', 'A4', 'La Audi A4 est une berline produite par le constructeur allemand Audi depuis 1994. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 38000, '../../assets/img/product/audi-a4.jpg', 4, 2),
(17, 'Tesla', 'Model 3', 'La Tesla Model 3 est une voiture électrique produite par le constructeur américain Tesla depuis 2017. Elle est équipée d\'une grande autonomie de batterie et d\'un écran tactile de bord.', 50000, '../../assets/img/product/tesla-model-3.jpg', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `name`) VALUES
(1, 'Supercar'),
(2, 'Roadster'),
(3, 'Sportive'),
(4, 'Citadine'),
(5, 'Compacte');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_order` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_car`, `id_user`, `quantity`, `date_order`) VALUES
(1, 4, 1, 1, '2023-02-27 15:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `first_name`, `last_name`, `adress`, `city`, `zipcode`) VALUES
(1, 'adriano@newave.be', 'd302886ecca83222a392f6549e520dacbd95dc65f1a303f8c571ca3bb9b8e196', 'Adriano', 'Meledina', 'Rue Diérain Patar 55', 'Grace-Hollogne', '4460'),
(2, 'john_doe@gmail.com', '96d9632f363564cc3032521409cf22a852f2032eec099ed5967c0d000cec607a', 'John', 'Doe', '12 Rue de la Paix', 'Paris', '75008'),
(3, 'jane_doe@gmail.com', '81f8f6dde88365f3928796ec7aa53f72820b06db8664f5fe76a7eb13e24546a2', 'Jane', 'Doe', '8 Rue du Faubourg Saint-Honoré', 'Paris', '75008'),
(4, 'bob_smith@gmail.com', '81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9', 'Bob', 'Smith', '17 Avenue des Champs-Élysées', 'Paris', '75008'),
(5, 'alice_johnson@gmail.com', '2bd806c97f0e00af1a1fc3328fa763a9269723c8db8fac4f93af71db186d6e90', 'Alice', 'Johnson', '3 Rue de la Pompe', 'Neuilly-sur-Seine', '92200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_car`),
  ADD KEY `fk_category` (`category`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_car` (`id_car`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category`) REFERENCES `categories` (`id_category`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_car` FOREIGN KEY (`id_car`) REFERENCES `cars` (`id_car`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
