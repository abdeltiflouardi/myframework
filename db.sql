-- MySQL dump 10.13  Distrib 5.5.29, for Linux (i686)
--
-- Host: localhost    Database: clubkastalani
-- ------------------------------------------------------
-- Server version	5.5.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abonnement` (
  `id_ab` int(100) NOT NULL AUTO_INCREMENT,
  `id_mbr` int(100) NOT NULL,
  `type_ab` varchar(100) NOT NULL,
  `date_jour` date NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `date_deb_ab` date NOT NULL,
  `date_fin_ab` date NOT NULL,
  `num_assur` varchar(100) NOT NULL,
  `frais_assur` varchar(100) NOT NULL,
  `mode_pay_assur` varchar(100) NOT NULL,
  `frais_ab` varchar(100) NOT NULL,
  `mode_pay_ab` varchar(100) NOT NULL,
  `total_pay_ab` varchar(100) NOT NULL,
  `conseiller` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ab`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abonnement`
--

LOCK TABLES `abonnement` WRITE;
/*!40000 ALTER TABLE `abonnement` DISABLE KEYS */;
INSERT INTO `abonnement` VALUES (1,1,'Abonnement','2013-02-21','Homme','2013-03-01','2014-02-28','00022','50','Esp','300','Ch','350','AZOUGGAR'),(2,2,'Abonnement','2013-02-21','Femme','2013-03-01','2014-02-28','0048','50','Esp','300','Esp','350','AZOUGGAR'),(3,3,'Abonnement','2013-02-21','Fille','2013-03-01','2014-02-28','01256','50','Esp','300','Esp','350','AZOUGGAR'),(4,4,'Abonnement','2013-02-21','Garcon','2013-03-01','2014-02-28','3368','50','Esp','300','Esp','350','AZOUGGAR'),(5,5,'Abonnement','2013-02-19','Homme','2013-03-01','2014-02-28','002358','50','Esp','300','Ch','350','AZOUGGAR'),(6,6,'Abonnement','2013-02-21','Garcon','2013-03-01','2014-02-28','11478','50','Esp','300','Esp','350','AZOUGGAR'),(7,7,'Abonnement','2013-02-18','Femme','2013-03-01','2014-02-28','03987','50','Esp','300','Esp','350','AZOUGGAR'),(8,8,'Abonnement','2013-02-18','Fille','2013-03-01','2014-02-28','6519','50','Esp','300','Ch','350','AZOUGGAR'),(9,9,'Abonnement','2013-02-22','Homme','2013-03-01','2014-02-28','00215','50','Esp','300','Esp','350','AZOUGGAR');
/*!40000 ALTER TABLE `abonnement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adherent` (
  `id_mbr` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `date_naiss` date NOT NULL,
  `cin` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `adresse` varchar(500) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_insc` varchar(100) NOT NULL,
  `observation` varchar(1000) NOT NULL,
  `nom_photo` varchar(255) NOT NULL,
  `nom_cin_recto` varchar(255) NOT NULL,
  `nom_cin_verso` varchar(255) NOT NULL,
  `conseiller` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mbr`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adherent`
--

LOCK TABLES `adherent` WRITE;
/*!40000 ALTER TABLE `adherent` DISABLE KEYS */;
INSERT INTO `adherent` VALUES (1,'SAFIR','Mohammed','Homme','1978-07-23','A1256','Cyclice','Bloc 7, App 5','Marrakech','0654879963','azizi.med@yahoo.fr','21/02/2013','','','','','AZOUGGAR'),(2,'MADIGA','Fatima','Femme','1988-02-15','JB55412','Ensegnante','N','Essaouira','0651236985','madiga.fatima@hotmail.com','21/02/2013','','','','','AZOUGGAR'),(3,'KITAR','Ghizlan','Fille','0000-00-00','','el','Route principal N','Marrakech','0666258741','kitar.ghizlan@gmail.com','21/02/2013','','','','','AZOUGGAR'),(4,'BOUGAYOU','Farid','Garcon','2005-10-09','','el','Bd. des jeunes Imm. 5 App 22','Agadir','05282828','bougayou.farid@gmail.com','21/02/2013','Attention! Trop de b','','','','AZOUGGAR'),(5,'FAGIDA','Mouhssine','Homme','1980-02-13','JB4589','Cyclice','kjhfkjsdh sdjfhsdjh lsh','Marrakech','06666666','aoi@ioa.o','19/02/2013','','','','','AZOUGGAR'),(6,'RAZIKI','Abdou','Garcon','0000-00-00','','el','Rue des FAR Imm. Takadoum App. 5','Agadir','0584285696','','21/02/2013','','','','','AZOUGGAR'),(7,'WARDA','Latifa','Femme','1972-11-02','AC1259','Sans','Hay wifak imm. biga app 18','Essaouira','0622145874','','18/02/2013','','','','','AZOUGGAR'),(8,'RAZIKI','Hanane','Fille','2005-10-09','','el','Biugra N','Agadir','0658963214','raziki.hanane','18/02/2013','','','','','AZOUGGAR'),(9,'AGOURAM','Fadna','Femme','1973-10-07','D255871','Femme de m','Assais Tikiouine\r\nBloc7, Rue3, N','Agadir','0665698521','fadna00123@yahoo.fr','2013/02/22','','','','','AZOUGGAR');
/*!40000 ALTER TABLE `adherent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fitness`
--

DROP TABLE IF EXISTS `fitness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fitness` (
  `id_fit` int(100) NOT NULL AUTO_INCREMENT,
  `id_mbr` int(100) NOT NULL,
  `date_jour` date NOT NULL,
  `num_tik_fit` varchar(100) NOT NULL,
  `horaire` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `prix_fit` int(100) NOT NULL,
  `conseiller` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fit`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fitness`
--

LOCK TABLES `fitness` WRITE;
/*!40000 ALTER TABLE `fitness` DISABLE KEYS */;
INSERT INTO `fitness` VALUES (1,1,'2013-02-20','22569','21:00h-22:00h','Homme',50,'AZOUGGAR'),(2,3,'2013-02-21','5454','6:00h-7:00h','Fille',50,'AZOUGGAR'),(3,6,'2013-02-21','00369','20:00h-21:00h','Gar',50,'AZOUGGAR'),(4,1,'2013-02-21','2158','20:00h-22:00h','Homme',100,'AZOUGGAR'),(5,2,'2013-02-21','2597','18:00h-19:00h','Femme',50,'AZOUGGAR'),(6,7,'2013-02-18','002148','6:00h-7:00h','Femme',50,'AZOUGGAR');
/*!40000 ALTER TABLE `fitness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mois_pay`
--

DROP TABLE IF EXISTS `mois_pay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mois_pay` (
  `id_mois_pay` int(100) NOT NULL AUTO_INCREMENT,
  `id_mbr` int(100) NOT NULL,
  `date_jour` date NOT NULL,
  `annee` varchar(100) NOT NULL,
  `jan` varchar(10) NOT NULL,
  `fev` varchar(10) NOT NULL,
  `mar` varchar(10) NOT NULL,
  `avr` varchar(10) NOT NULL,
  `mai` varchar(10) NOT NULL,
  `jun` varchar(10) NOT NULL,
  `jul` varchar(10) NOT NULL,
  `aou` varchar(10) NOT NULL,
  `sep` varchar(10) NOT NULL,
  `oct` varchar(10) NOT NULL,
  `nov` varchar(10) NOT NULL,
  `des` varchar(10) NOT NULL,
  `total_mois_pay` varchar(100) NOT NULL,
  `conseiller` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mois_pay`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mois_pay`
--

LOCK TABLES `mois_pay` WRITE;
/*!40000 ALTER TABLE `mois_pay` DISABLE KEYS */;
INSERT INTO `mois_pay` VALUES (1,1,'2013-02-21','2013','','','checked','checked','checked','checked','checked','checked','checked','checked','checked','checked','4000','AZOUGGAR'),(2,1,'2013-02-21','2014','checked','checked','','','','','','','','','','','800','AZOUGGAR'),(3,5,'2013-02-19','2013','','','checked','checked','checked','checked','checked','','','checked','checked','','3200','AZOUGGAR'),(4,5,'2013-02-19','2014','checked','checked','','','','','','','','','','','800','AZOUGGAR'),(5,6,'2013-02-21','2013','','','','','','','checked','checked','','','','','800','AZOUGGAR'),(6,7,'2013-02-18','2013','','','checked','checked','checked','checked','checked','','checked','checked','checked','checked','3600','AZOUGGAR'),(7,7,'2013-02-18','2014','checked','checked','','','','','','','','','','','800','AZOUGGAR');
/*!40000 ALTER TABLE `mois_pay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `natation`
--

DROP TABLE IF EXISTS `natation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `natation` (
  `id_nat` int(100) NOT NULL AUTO_INCREMENT,
  `id_mbr` int(100) NOT NULL,
  `date_jour` date NOT NULL,
  `num_tik_nat` varchar(100) NOT NULL,
  `horaire` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `prix_nat` int(100) NOT NULL,
  `conseiller` varchar(100) NOT NULL,
  PRIMARY KEY (`id_nat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `natation`
--

LOCK TABLES `natation` WRITE;
/*!40000 ALTER TABLE `natation` DISABLE KEYS */;
INSERT INTO `natation` VALUES (1,2,'2013-02-21','4456','7:00h-8:00h','Femme',50,'AZOUGGAR'),(2,6,'2013-02-21','0021','18:00h-20:00h','Garcon',100,'AZOUGGAR'),(3,3,'2013-02-21','19852','18:00h-19:00h','Fille',50,'AZOUGGAR');
/*!40000 ALTER TABLE `natation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sauna`
--

DROP TABLE IF EXISTS `sauna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sauna` (
  `id_sna` int(100) NOT NULL AUTO_INCREMENT,
  `id_mbr` int(100) NOT NULL,
  `date_jour` date NOT NULL,
  `num_tik_sna` varchar(100) NOT NULL,
  `horaire` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `prix_sna` int(100) NOT NULL,
  `conseiller` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sna`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sauna`
--

LOCK TABLES `sauna` WRITE;
/*!40000 ALTER TABLE `sauna` DISABLE KEYS */;
INSERT INTO `sauna` VALUES (1,2,'2013-02-21','3967','19:00h-20:00h','Femme',30,'AZOUGGAR'),(2,7,'2013-02-18','00145','7:00h-8:00h','Femme',30,'AZOUGGAR');
/*!40000 ALTER TABLE `sauna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `nom_user` varchar(100) NOT NULL,
  `prenom_user` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'root','password','AZOUGGAR','Mountasser');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-01  0:04:41
