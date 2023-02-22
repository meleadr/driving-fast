-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 22, 2023 at 07:14 PM
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
  `path_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id_car`, `brand`, `model`, `description`, `price`, `path_image`) VALUES
(1, 'Ferrari', 'F40', 'La Ferrari F40 est une supercar GT et de compétition, du constructeur automobile italien Ferrari. Produite entre 1987 et 1992, pour fêter les quarante ans de la marque, elle succède à la Ferrari 288 GTO. Ultime création du vivant du Commendatore Enzo Ferrari (1898-1988), elle est au moment de sa sortie, la voiture la plus rapide, la plus puissante et la plus chère de l\'histoire de l\'automobile (liste des voitures de série les plus rapides au monde).', 1300000, '../../assets/img/product/ferrari-f40.jpg'),
(2, 'Mazda', 'Mx5 NA', 'La MX-5 repose sur 5 principes fondamentaux, définis par l\'actuel chef de programme Nobuhiro Yamamoto : légèreté, propulsion, répartition des masses 50/50, faible inertie en virage, prix abordable1.', 9800, '../../assets/img/product/mx5-na.jpg'),
(3, 'Ferrari', '488 GTB', 'La Ferrari 488 GTB est un coupé GT produit par le constructeur automobile italien Ferrari, successeur de la Ferrari 458.', 250000, '../../assets/img/product/ferrari-488-gtb.jpg'),
(4, 'Lamborghini', 'Huracán', 'La Lamborghini Huracán est une voiture de sport produite par le constructeur automobile italien Lamborghini.', 270000, '../../assets/img/product/lamborghini-huracan.jpg'),
(5, 'Aston Martin', 'Vantage', 'La Vantage est une voiture de sport produite par le constructeur britannique Aston Martin.', 180000, '../../assets/img/product/aston-martin-vantage.jpg'),
(6, 'Porsche', '911', 'La Porsche 911 est une voiture de sport produite par le constructeur allemand Porsche depuis 1963.', 200000, '../../assets/img/product/porsche-911.jpg'),
(7, 'McLaren', '570S', 'La McLaren 570S est une voiture de sport produite par le constructeur automobile britannique McLaren Automotive.', 260000, '../../assets/img/product/mclaren-570s.jpg'),
(8, 'Renault', 'Clio V', 'La Renault Clio V est une citadine produite par le constructeur français Renault depuis 2019. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 15000, '../../assets/img/product/renault-clio.jpg'),
(9, 'Peugeot', '308', 'La Peugeot 308 est une voiture compacte produite par le constructeur français Peugeot depuis 2007. Elle est disponible en plusieurs versions, notamment essence, diesel et électrique.', 18000, '../../assets/img/product/peugeot-308.jpg'),
(10, 'Citroën', 'C4 Cactus', 'La Citroën C4 Cactus est un crossover compact produit par le constructeur français Citroën depuis 2014. Elle se distingue par un design original et des coussins d\'air sur les portes.', 19000, '../../assets/img/product/citroen-c4-cactus.jpg'),
(11, 'Volkswagen', 'Golf VII', 'La Volkswagen Golf VII est une voiture compacte produite par le constructeur allemand Volkswagen depuis 2012. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 20000, '../../assets/img/product/volkswagen-golf.jpg'),
(12, 'Toyota', 'Corolla', 'La Toyota Corolla est une voiture compacte produite par le constructeur japonais Toyota depuis 1966. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 22000, '../../assets/img/product/toyota-corolla.jpg'),
(13, 'Ford', 'Focus', 'La Ford Focus est une voiture compacte produite par le constructeur américain Ford depuis 1998. Elle est disponible en plusieurs versions, notamment essence, diesel et électrique.', 19000, '../../assets/img/product/ford-focus.jpg'),
(14, 'BMW', 'Série 3', 'La BMW Série 3 est une berline produite par le constructeur allemand BMW depuis 1975. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 35000, '../../assets/img/product/bmw-serie-3.jpg'),
(15, 'Mercedes-Benz', 'Classe C', 'La Mercedes-Benz Classe C est une berline produite par le constructeur allemand Mercedes-Benz depuis 1993. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 40000, '../../assets/img/product/mercedes-classe-c.jpg'),
(16, 'Audi', 'A4', 'La Audi A4 est une berline produite par le constructeur allemand Audi depuis 1994. Elle est disponible en plusieurs versions, notamment essence, diesel et hybride.', 38000, '../../assets/img/product/audi-a4.jpg'),
(17, 'Tesla', 'Model 3', 'La Tesla Model 3 est une voiture électrique produite par le constructeur américain Tesla depuis 2017. Elle est équipée d\'une grande autonomie de batterie et d\'un écran tactile de bord.', 50000, '../../assets/img/product/tesla-model-3.jpg');

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
(1, 'adriano@newave.be', 'adri', 'Adriano', 'Meledina', 'Rue Diérain Patar 55', 'Grace-Hollogne', '4460'),
(2, 'john_doe', 'password123', 'John', 'Doe', '12 Rue de la Paix', 'Paris', '75008'),
(3, 'jane_doe', 'password123', 'Jane', 'Doe', '8 Rue du Faubourg Saint-Honoré', 'Paris', '75008'),
(4, 'bob_smith', 'password123', 'Bob', 'Smith', '17 Avenue des Champs-Élysées', 'Paris', '75008'),
(5, 'alice_johnson', 'password123', 'Alice', 'Johnson', '3 Rue de la Pompe', 'Neuilly-sur-Seine', '92200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_car`);

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
