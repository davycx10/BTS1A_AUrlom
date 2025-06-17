-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2025 at 08:49 AM
-- Server version: 8.0.42-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_PPE`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `ID_ARTICLE` int NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Modele` varchar(50) NOT NULL,
  `Prix` decimal(15,3) NOT NULL,
  `Reference` varchar(50) NOT NULL,
  `Configuration` text NOT NULL,
  `ID_MARQUE` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ID_ARTICLE`, `Nom`, `Description`, `Modele`, `Prix`, `Reference`, `Configuration`, `ID_MARQUE`) VALUES
(1, 'PC Work BRONZE Pro', 'La plupart des composants de ce PC peuvent être remplacés pour gagner en puissance ou en capacité de stockage et ainsi prolonger sa durée de vie.', 'BRONZE', 549.000, 'dsgliusld8s6d', 'Intel Core i5-12400 (3.3 GHz)\r\nSocket 1700 - Hexa Core - Cache 18 Mo - Alder Lake - Ventirad inclus\r\nCarte mère\r\n\r\n', 8),
(2, 'Mac Mini', 'Maintenant doté de la puce M4 ou M4 Pro, le Mac mini livre des performances hors normes et des capacités d’IA inédites. Les de', 'Mini M4 Pro - 24 Go - 512 Go', 1650.000, 'MCX44FN/A', 'Dimensions\r\n12.7 x 12.7 x 5 cm\r\n\r\nApple M4 Pro :\r\n', 5),
(3, 'PC GENIAL', 'PERFORMANCES LIBÉRÉES\r\n\r\nAvec les processeurs Intel® Core ™ de 11e génération déverrouillés et les cartes graphiques séparées à double slot, vous \r\n', 'NUC11BTMi70002', 579.000, 'NUC11BTMi70002', 'Liste produits connexes :\r\nPC de bureau avec processeur i7 | PC sans OS\r\nRéférences connexes :\r\nMSI Modern AM273Q AI (1UM-007FR) | MSI ', 7),
(4, 'Machine vraiment cool', 'N PC COMPACT POUR TOUTES VOS TÂCHES\r\n \r\nLe Petit F2-N10016-N05 se distingue par sa polyvalence et sa compacité. Que ce soit dans un bureau ou un salon, il s\'intègre ', 'N10016-N05', 520.000, 'P2-N10016-N05', 'Références connexes :\r\nApple iMac M4 (2024) 24\" - 16 Go - 256 Go - Orange | Apple Mac Mini M4 - 32 Go - 2 ', 6),
(5, 'ASUS M3702WFAK-WA025W', 'DES VISUELS BRILLANTS\r\n \r\nL\'ASUS M3702WFA est incroyablement compact et léger, avec un écran NanoEdge à cadre fin. Cet écran large de 27 pouces offre ', 'M3702WFAK-WA025W', 900.000, 'M3702WFAK-WA025W', 'Liste produits connexes :\r\nPC Tout en un (All-in-One) | PC de bureau avec processeur | PC de bureau RAM 8 Go | ', 7),
(6, 'MSI MPG Trident AS ', 'INTEL CORE 14ÈME GÉNÉRATION\r\n \r\nLe processeur Intel® Core™ i5 est équipé de 6 cœurs Performances (P-cores) et de 4 ', '14NUD5-650EU', 1500.000, '14NUD5-650EU', 'Liste produits connexes :\r\nPC Tour Gamer | PC de bureau avec ', 3),
(7, 'MSI Cubi NUC', 'CONÇU POUR LES UTILISATEURS PROFESSIONNELS\r\n \r\nLe Cubi NUC est équipé d\'un processeur Intel® Core™ 3 100U à 6 cœurs et 8 threads ', 'Cubi NUC', 790.000, '1M-003EU', 'Liste produits connexes :\r\nPC de bureau RAM 8 Go | PC de bureau stockage 256 Go | PC de bureau Disque SSD\r\n', 2),
(8, 'MSI MAG Infinite S3', 'super cette machine', '14NUD5-1433EU', 1500.000, '14NUD5', 'Liste produits connexes :\r\nPC Tour Gamer | PC de bureau avec processeur i5 | PC de bureau RAM 16 Go | ', 2),
(10, 'Apple iMac M4', 'INCROYABLE. AVANCÉE.\r\n\r\nApple Intelligence est capable de réviser vos écrits, d’en proposer diffé­rentes \r\n\r\n', 'M4', 1750.000, 'REF M58', 'Processeur\r\nPuce Apple M4\r\n\r\nCPU 10 cœurs avec 4 cœurs de perfor­mance \r\n', 5);

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `ID_MARQUE` int NOT NULL,
  `Nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`ID_MARQUE`, `Nom`) VALUES
(1, 'HP'),
(2, 'MSI'),
(3, 'ACER'),
(4, 'Lenovo'),
(5, 'APPLE'),
(6, 'SAMSUNG'),
(7, 'ASUS'),
(8, 'DELL');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `ID_PANIER` int NOT NULL,
  `QTE` int NOT NULL,
  `ID_UTILISATEUR` int DEFAULT NULL,
  `ID_ARTICLE` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`ID_PANIER`, `QTE`, `ID_UTILISATEUR`, `ID_ARTICLE`) VALUES
(1, 2, 1, 3),
(3, 10, 1, 2),
(4, 2, 14, 4),
(5, 4, 9, 6),
(6, 1, 12, 6),
(7, 2, 1, 1),
(8, 1, 18, 2),
(10, 1, 18, 2),
(11, 1, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `ID_UTILISATEUR` int NOT NULL,
  `Login` varchar(50) NOT NULL,
  `MDP` varchar(100) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID_UTILISATEUR`, `Login`, `MDP`, `Prenom`, `Nom`) VALUES
(1, 'admin', '$2y$10$uOEf5lErLvxFdU80Mr2cceCE5gxvfkg4RFQogTneZRYghQf06bJVW', 'Gerard', 'Menvu'),
(5, 'Stephone', '$2y$10$kT71GNWH8MnTH4/P6LiqZudXn06U4fbvYArzqs/rauRubzM/F6Ham', 'moimeme', 'steph'),
(6, 'moi', '$2y$10$MrOI/GdfE9E8IDvUA.LRvebLymQRcP/EghUtZ4UQRlpsZtTcq4/9u', 'bbb', 'aa'),
(7, 'df', '$2y$10$Ufsow4CoYBCAQ76S8mQQJ.LchvCz.og2pzKcbMUlK27d3uQGbEvvy', 'qsf', 'fsqf'),
(8, 'aa', '$2y$10$QBeMjRO3J7I/Xp0OKSeY1eWfqGtgK3J965pRNeGp4Te3y..nfBdHC', 'qfs', 'dfs'),
(9, 'sfq', '$2y$10$CTAUrJHpFtv7IXRNvg/pMuLnaUxBS4J14jByfrXJpTONn5zityU6G', 'sqfqsfs', 'sqf'),
(10, 'wcs<', '$2y$10$87fOJG6N7IGluowfllsFQ.r1Lp/1qdBw0TP3sBkRUTKklTZEdWkJq', 'wv', '<ww<'),
(11, 'qgs', '$2y$10$Mg7hziQHP7ZYot9pxMNmR.ivE7OrQO8erbyIeZ3QJQheigK/L1PWe', '', ''),
(12, 'dqfqsf', '$2y$10$lL3qi1Uh2nVq7x7jBjh0wOS.KFZsxey3dU.1I2lASpF2t1UXZYgWS', '', 'sqgqs'),
(13, 'aaaa', '$2y$10$thrheYnbTKO33sTqPjOLSugsKvvOvAkJ5FcFXtd8ykZYenwIVIhpi', 'mpmilk', 'dteph'),
(14, 'salut', '$2y$10$7SlPOQKDc73bY.w.PpgqCez7Qz9aEA.XbO4s0BOvEcgtANzPVnDVG', 'kjqsyfoqsl', 'pomm'),
(17, 'test1', '$2y$10$DitD48VEX0T5z3b5rZwo3uNG5zVEN147dqUcO.7b2l9yTRvNVGRbu', 'test1A', 'test1'),
(18, 'miaou', '$2y$10$NTXGy0eDQHyBvjUvSi4aROdbVV3ewEmgQbnuoPeKiayjfzjeHdafe', 'miaou', 'miaou');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID_ARTICLE`),
  ADD KEY `Article_Marque_FK` (`ID_MARQUE`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`ID_MARQUE`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`ID_PANIER`),
  ADD KEY `Panier_Utilisateurs_FK` (`ID_UTILISATEUR`),
  ADD KEY `Panier_Article0_FK` (`ID_ARTICLE`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`ID_UTILISATEUR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ID_ARTICLE` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
  MODIFY `ID_MARQUE` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `ID_PANIER` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `ID_UTILISATEUR` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `Article_Marque_FK` FOREIGN KEY (`ID_MARQUE`) REFERENCES `marque` (`ID_MARQUE`);

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `Panier_Article0_FK` FOREIGN KEY (`ID_ARTICLE`) REFERENCES `article` (`ID_ARTICLE`),
  ADD CONSTRAINT `Panier_Utilisateurs_FK` FOREIGN KEY (`ID_UTILISATEUR`) REFERENCES `utilisateurs` (`ID_UTILISATEUR`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
