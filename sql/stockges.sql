-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 15 Avril 2020 à 12:45
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `stockges`
--

-- --------------------------------------------------------


--
-- Structure de la table `produit`
--
drop table IF  exists `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  
  `codeprod` varchar(10) NOT NULL,
  `nomprod` varchar(100) NOT NULL,
  `prix` int(11) NOT NULL,
  `cpa` int (10) NOT NULL,
  `taux de possession` float (10) not null,
  `Quantite anuelle` int(10) not null,
  `Consommation mensuelle moyenne` int(10) not null,
  `Delais de livraison en mois` int(10) not null,
  `taux d evaluation du SS` float (10) not null,
 
  
  PRIMARY KEY (`codeprod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

drop table IF  exists `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  
  `codeprod` varchar(10) NOT NULL,
  `nomprod` varchar(10) NOT NULL unique,
  `prix` int(11) NOT NULL,
  `stock minimum` int(10) not null,
  `stock de securite` int(10) not null,
  `stock d alerte` int (10) not null,
 
  
  PRIMARY KEY (`codeprod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--

-- Contenu de la table `produit`
--

INSERT INTO `produit` (`codeprod`, `nomprod`, `prix`, `cpa`, `taux de possession`, `Quantite anuelle`, `Consommation mensuelle moyenne`, `Delais de livraison en mois`,`taux d evaluation du SS`) VALUES
('tmv', 'tomate en boite', 80 ,  200 , 0.01 , 1000, 8, 6, 0.2),

('cr', 'cereale', 200 ,  200 , 0.01 , 4000, 8, 3, 0.2),
('mayo', 'mayonnaise', 13,  200 , 0.01 , 4000, 4, 2, 0.2),
('ncf', 'nescafe', 75 ,  300 , 0.01 , 1000, 8, 3, 0.2),
('nd', 'nido', 27 ,  400 , 0.01 , 1000 ,8, 3, 0.2),
('scr', 'sucre en paquet', 10 ,  500 , 0.01 , 1000, 8, 3, 0.2),
('sp', 'spagueti', 15 ,  500 , 0.01 , 4000,8, 3, 0.2),
('sr', 'sardine', 20 ,  600 , 0.01 , 4000,8, 3, 0.2),
('sv', 'savon', 30 ,  700 , 0.01 , 4000,8, 3, 0.2),
('tmt', 'tomate en boite', 8 ,  200 , 0.01 , 1000, 8, 3, 0.2),
('chb', 'charbon', 80 ,  20 , 0.01 , 1000, 8, 3, 0.2),
('cr', 'cereale', 200 ,  200 , 0.01 , 4000, 8, 3, 0.2),
('gr', 'gravier', 800 ,  200 , 0.01 , 1000, 8, 3, 0.2),
('sb', 'sable', 600 ,  200 , 0.01 , 4000, 8, 3, 0.2),
('br', 'brique', 700 ,  200 , 0.01 , 4000, 8, 3, 0.2);

-- --------------------------------------------------------


-- Structure de la table `fournisseur`
--
drop table IF  exists `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `ID_F` int(11) NOT NULL ,
  `RAISSOCF` varchar(30) NOT NULL,
  `ADRESSE_F` text NOT NULL,
  `TEL_F` varchar(10) NOT NULL,
  `FAX_F` varchar(10) NOT NULL,
  `EMAIL_F` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_F`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`ID_F`, `RAISSOCF`, `ADRESSE_F`, `TEL_F`, `FAX_F`, `EMAIL_F`) VALUES
(1, 'GLOBAL PAPIER', 'CASABLANCA maarif', '0661930203', '0661930201', 'PAPIER@HOTMAIL.FR'),
(2, 'IDRISSI SALAH', 'RABAT', '0661729303', '0661729304', 'SALAH@GMAIL.COM'),
(4, 'KING BUREAU', 'RABAT HAY A RIAD', '0537256487', '0537256484', 'KINGBUREAU@HOTMAIL.COM'),
(5, 'C.B.Ina', 'el jadida el malah MAROC', '060000000', '0667545851', 'CBI@gmail.com'),
(8, 'MANCOUR BILLAH IDRISS', 'CASABLANCA JILLALI EL OUFIR ETG 1 APPT 1 MAROC', '0661849974', '0561849974', 'DRISS@GMAIL.COM'),
(11, 'RESTAURANT MANIA', 'AGDAL 5, MAMOUNIA RABAT', '0522648456', '0522648458', 'MANIA@MANIA.fr');
--

--

-- Structure de la table `client`
--
drop table IF  exists `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID_C` int(11) NOT NULL ,
  `RAISSO_C` varchar(30) NOT NULL,
  `ADRESSE_C` text NOT NULL,
  `TEL_C` varchar(10) NOT NULL,
  `FAX` varchar(10) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_C`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`ID_C`, `RAISSO_C`, `ADRESSE_C`, `TEL_C`, `FAX`, `EMAIL`) VALUES
(1, 'FCG AL AMANE', 'RABAT', '0537839403', '0537839403', 'AMANE@HOTMAIL.COM'),
(2, 'MR CHICHAOUI JAMAL', 'RABAT AGDAL RUE MIMOZA', '0537829201', '0537829201', 'JAMAL@GMAIL.COM'),
(3, 'A.N.A SARL NETOYAGE', '5 RUE JELJLAN AGDAL RABAT ', '0678543465', '0578543465', 'ANA@MSN.COM'),
(11, 'Mr Mancouri Billah', '5 RUE HAJ JILLALI EL OUFIR RABAT', '0661849974', '0522849974', 'mancouri@gmail.com'),
(12, 'Mr Idrissi maliki', '5 rue jilaliya Maarif casablanca France', '0522457898', '0522457898', 'idriss@hotmail.fr');



-- Table structure for table `user`

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL unique,
  `username` varchar(255) NOT NULL unique,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
   `service` VARCHAR(30) NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fullName`, `username`, `password`, `status`) VALUES
(5, 'Guest', 'guest', '81dc9bdb52d04dc20036dbd8313ed055', 'Active');
--
-- Structure de la table `mouvmt`
--
drop table IF  exists `mouvmt`;
CREATE TABLE IF NOT EXISTS `mouvmt` (
  `idmv` int(11) NOT NULL,
  `codeprd` varchar(10) NOT NULL,
  `ID_F` int(11)  ,
  `ID_C` int(11)  ,
  `ID_user` int(11),
  `quantite` int(11) NOT NULL,
  `nature` varchar(20) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`idmv`),
  KEY `fk1` (`codeprd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `mouvmt`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`codeprd`) REFERENCES `produit` (`codeprod`);
  ALTER TABLE `mouvmt`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`ID_F`) REFERENCES `fournisseur` (`ID_F`);
  ALTER TABLE `mouvmt`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`ID_C`) REFERENCES `client` (`ID_C`);  
  ALTER TABLE `mouvmt`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`ID_user`) REFERENCES `user` (`userid`);

--
-- Contenu de la table `mouvmt`
--

insert into mouvmt values ('1','sv','1','1','7','120','depot','2009-04-22 12:06:47'),
('2','ncf','2','1','7','60','depot','2018-04-06 12:05:42'),
('3','nd','2','1','7','45','depot','2019-03-10 12:04:42'),
('4','sr','2','1','7','20','depot','2019-11-11 12:03:42'),
('6','sp','2','1','7','75','stock_lifo','2019-08-07 12:03:41'),
('8','sr','2','1','7','30','depot','2019-12-11 12:02:42'),
('9','br','1','1','7','94','stock_fifo','2009-04-22 01:26:32'),
('10','br','5','3','7','25','stock_lifo','2009-04-22 01:26:45'),
('15','br','1','1','7','3','Retrait_fifo','2022-04-09 13:51:12'),
('16','br','1','1','7','3','Retrait_fifo','2022-04-09 13:51:28'),
('17','br','1','1','7','30','Retrait_basic','2022-04-09 13:52:20'),
('18','br','1','1','7','3','Retrait_basic','2022-04-09 13:53:28'),
('19','br','1','1','7','3','Retrait_lifo','2022-04-09 13:53:39'),
('20','br','1','1','7','30','Retrait_basic','2022-04-09 14:17:33'),
('21','br','1','1','7','30','Retrait_basic','2022-04-09 14:49:11'),
('22','br','1','1','7','11','Retrait_fifo','2022-04-09 15:12:39'),
('23','br','1','1','7','20','Retrait_lifo','2022-04-09 15:30:12'),
('25','mayo','4','1','7','27','stock_fifo','2022-04-09 16:33:44'),
('26','chb','8','1','7','81','stock_fifo','2022-04-09 16:34:19'),
('27','cr','8','1','7','47','stock_fifo','2022-04-09 16:37:17'),
('28','cr','1','11','7','3','Retrait_basic','2022-04-09 16:45:29'),
('29','br','1','3','7','3','Retrait_basic','2022-04-09 16:46:03'),
('30','br','1','2','7','3','Retrait_basic','2022-04-09 16:46:16'),
('31','br','1','2','7','3','Retrait_fifo','2022-04-09 16:53:15'),
('32','br','1','3','7','3','Retrait_fifo','2022-04-09 16:53:33'),
('33','chb','1','11','7','3','Retrait_fifo','2022-04-09 16:53:40'),
('34','cr','1','12','7','3','Retrait_fifo','2022-04-09 16:53:56'),
('35','br','1','11','7','3','Retrait_lifo','2022-04-09 16:54:41'),
('36','br','1','11','7','3','Retrait_lifo','2022-04-09 16:54:50'),
('37','sp','1','12','7','5','Retrait_lifo','2022-04-09 16:55:24'),
('38','br','1','2','7','3','Retrait_lifo','2022-04-09 16:57:09'),
('39','br','1','3','7','3','Retrait_lifo','2022-04-09 16:57:47'),
('40','br','1','11','7','3','Retrait_lifo','2022-04-09 16:57:56'),
('41','br','1','11','7','20','Retrait_lifo','2022-04-09 17:05:12'),
('42','br','1','1','7','20','Retrait_lifo','2022-04-09 17:05:44'),
('43','br','1','1','7','30','Retrait_lifo','2022-04-09 17:06:02'),
('44','br','1','1','7','30','Retrait_lifo','2022-04-09 17:06:14'),
('45','chb','1','1','7','3','Retrait_fifo','2022-04-09 17:08:15'),
('46','chb','1','1','7','30','Retrait_fifo','2022-04-09 17:08:23'),
('47','mayo','1','1','7','30','Retrait_fifo','2022-04-09 17:08:39'),
('48','mayo','1','1','7','30','Retrait_fifo','2022-04-09 17:08:50'),
('49','mayo','1','1','7','30','Retrait_fifo','2022-04-09 17:09:02'),
('50','br','5','1','7','20','depot','2022-04-10 00:03:21'),
('51','br','2','1','7','24','stock_lifo','2022-04-10 00:03:39'),
('55','br','1','3','7','3','Retrait_lifo','2022-04-10 00:06:01'),
('56','br','1','3','7','30','Retrait_lifo','2022-04-10 00:06:22'),
('57','br','1','1','7','30','Retrait_lifo','2022-04-10 00:06:47'),
('58','br','1','1','7','30','Retrait_lifo','2022-04-10 00:07:01'),
('59','br','1','1','7','30','Retrait_lifo','2022-04-10 00:07:11'),
('60','br','1','1','7','30','Retrait_lifo','2022-04-10 00:09:25'),
('61','br','1','1','7','30','Retrait_lifo','2022-04-10 00:09:53'),
('62','cr','1','1','7','200','depot','2022-04-10 00:10:16'),
('63','gr','1','1','7','197','stock_lifo','2022-04-10 00:10:26'),
('64','sb','1','1','7','194','stock_lifo','2022-04-10 00:10:37'),
('65','sb','1','1','7','3','Retrait_lifo','2022-04-10 00:10:54'),
('66','sb','1','1','7','3','Retrait_lifo','2022-04-10 00:11:20'),
('67','gr','1','1','7','3','Retrait_lifo','2022-04-10 00:13:02'),
('68','chb','1','1','7','196','stock_lifo','2022-04-10 00:13:38'),
('69','chb','1','1','7','4','Retrait_lifo','2022-04-10 00:13:52'),
('70','br','1','1','7','50','depot','2022-04-10 12:38:53'),
('71','br','1','1','7','20','depot','2022-04-10 12:39:33');





--


-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Structure de la vue `vue1`
--
DROP view IF EXISTS `vue1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue1` AS select `stock`.`codeprod` AS `codeprod`,
`stock`.`nomprod` AS `nomprod`,`stock`.`stock d alerte` as `alerte`,`stock`.`stock de securite` as `securite`, `stock`.`stock minimum` as `min`,
`stock`.`prix` AS `prix`,`mouvmt`.`quantite` AS `qte`,`mouvmt`.`nature` AS `nature`,`mouvmt`.`date` AS `date` 
from (`stock` join `mouvmt` on((`stock`.`codeprod` = `mouvmt`.`codeprd`))) where (`mouvmt`.`nature` = 'stock_basic') ;



DROP view IF EXISTS `vue2`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue2` AS select `stock`.`codeprod` AS `codeprod`,`stock`.`nomprod` AS `nomprod`,
`stock`.`stock d alerte` as `alerte`,`stock`.`stock de securite` as `securite`, `stock`.`stock minimum` as `min`,
`stock`.`prix` AS `prix`,`mouvmt`.`quantite` AS `qte`
,`mouvmt`.`nature` AS `nature`,`mouvmt`.`date` AS `date` 
from (`stock` join `mouvmt` on((`stock`.`codeprod` = `mouvmt`.`codeprd`))) where (`mouvmt`.`nature` = 'stock_fifo') ;


DROP view IF EXISTS `vue3`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue3` AS select `stock`.`codeprod` AS `codeprod`,`stock`.`nomprod` AS `nomprod`,
`stock`.`stock d alerte` as `alerte`,`stock`.`stock de securite` as `securite`, `stock`.`stock minimum` as `min`,
`stock`.`prix` AS `prix`,`mouvmt`.`quantite` AS `qte`
,`mouvmt`.`nature` AS `nature`,`mouvmt`.`date` AS `date` 
from (`stock` join `mouvmt` on((`stock`.`codeprod` = `mouvmt`.`codeprd`))) where (`mouvmt`.`nature` = 'stock_lifo') ;


--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `mouvmt`
--

  
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

  
  ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;









/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
