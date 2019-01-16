
DROP TABLE IF EXISTS `shoes`;
CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marque` enum('Adidas','Kickers','Nike','Reebok') NOT NULL,
  `modele` varchar(50) NOT NULL,
  `quantite` smallint(6) NOT NULL,
  `style` enum('mariage','ville','sportswear') DEFAULT NULL,
  `prix` decimal(10,0) DEFAULT NULL,
  `taille` smallint(6) DEFAULT NULL,
  `fermeture` enum('eclair','lacets','scratch') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;