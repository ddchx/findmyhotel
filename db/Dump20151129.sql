--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
INSERT INTO `hotels` VALUES (1,'Galadari','Galadari, Sri Lanka',6.93194900,79.84411700),(2,'Hilton','Hilton, Colombo, Sri Lanka',6.92707900,79.86124300),(3,'Cinnamon','Cinnamon, Colombo, Sri Lanka',6.90652800,79.86608400),(4,'Chathuranga','Chathuranga, Colombo',65.96670000,-18.53330000),(5,'Chathuranga','Chathuranga, Colombo',65.96670000,-18.53330000),(6,'Chathuranga','Chathuranga, Malabe',65.96670000,-18.53330000),(7,'Chathuranga','Chathuranga, Malabe',65.96670000,-18.53330000),(8,'Chath','Chat, col',65.96670000,-18.53330000);
