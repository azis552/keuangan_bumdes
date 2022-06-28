-- MySQL dump 10.18  Distrib 10.3.27-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: udbseme1_ta_bumdes
-- ------------------------------------------------------
-- Server version	10.3.27-MariaDB-log-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `udbseme1_ta_bumdes`
--


--
-- Temporary table structure for view `cek_debit_jurnal_penyesuaian`
--

DROP TABLE IF EXISTS `cek_debit_jurnal_penyesuaian`;
/*!50001 DROP VIEW IF EXISTS `cek_debit_jurnal_penyesuaian`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_debit_jurnal_penyesuaian` (
  `posisi` tinyint NOT NULL,
  `jumlah` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_email`
--

DROP TABLE IF EXISTS `cek_email`;
/*!50001 DROP VIEW IF EXISTS `cek_email`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_email` (
  `email` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_id_penangguhan`
--

DROP TABLE IF EXISTS `cek_id_penangguhan`;
/*!50001 DROP VIEW IF EXISTS `cek_id_penangguhan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_id_penangguhan` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_penangguhan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_id_pencairan`
--

DROP TABLE IF EXISTS `cek_id_pencairan`;
/*!50001 DROP VIEW IF EXISTS `cek_id_pencairan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_id_pencairan` (
  `nik` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `id_pencairan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_kredit_jurnal_penyesuaian`
--

DROP TABLE IF EXISTS `cek_kredit_jurnal_penyesuaian`;
/*!50001 DROP VIEW IF EXISTS `cek_kredit_jurnal_penyesuaian`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_kredit_jurnal_penyesuaian` (
  `posisi` tinyint NOT NULL,
  `jumlah` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_nik_exist`
--

DROP TABLE IF EXISTS `cek_nik_exist`;
/*!50001 DROP VIEW IF EXISTS `cek_nik_exist`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_nik_exist` (
  `nik` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_pengajuan_nik_exist`
--

DROP TABLE IF EXISTS `cek_pengajuan_nik_exist`;
/*!50001 DROP VIEW IF EXISTS `cek_pengajuan_nik_exist`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_pengajuan_nik_exist` (
  `nik` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_profil`
--

DROP TABLE IF EXISTS `cek_profil`;
/*!50001 DROP VIEW IF EXISTS `cek_profil`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_profil` (
  `id` tinyint NOT NULL,
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `jenis_kelamin` tinyint NOT NULL,
  `tempat_lahir` tinyint NOT NULL,
  `tanggal_lahir` tinyint NOT NULL,
  `jumlah_tanggungan` tinyint NOT NULL,
  `status_tmp_tinggal` tinyint NOT NULL,
  `lama_tinggal` tinyint NOT NULL,
  `kode_pos` tinyint NOT NULL,
  `telepon` tinyint NOT NULL,
  `email` tinyint NOT NULL,
  `pekerjaan` tinyint NOT NULL,
  `jabatan` tinyint NOT NULL,
  `alamat` tinyint NOT NULL,
  `id_kelompok` tinyint NOT NULL,
  `id_desa` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `tanggal_daftar` tinyint NOT NULL,
  `username` tinyint NOT NULL,
  `password` tinyint NOT NULL,
  `status` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_profil_data_diri`
--

DROP TABLE IF EXISTS `cek_profil_data_diri`;
/*!50001 DROP VIEW IF EXISTS `cek_profil_data_diri`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_profil_data_diri` (
  `nik` tinyint NOT NULL,
  `STATUS` tinyint NOT NULL,
  `status_kelompok` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_profil_pekerjaan`
--

DROP TABLE IF EXISTS `cek_profil_pekerjaan`;
/*!50001 DROP VIEW IF EXISTS `cek_profil_pekerjaan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_profil_pekerjaan` (
  `nik` tinyint NOT NULL,
  `status` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_temp_trans_debit`
--

DROP TABLE IF EXISTS `cek_temp_trans_debit`;
/*!50001 DROP VIEW IF EXISTS `cek_temp_trans_debit`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_temp_trans_debit` (
  `posisi` tinyint NOT NULL,
  `jumlah` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_temp_trans_kredit`
--

DROP TABLE IF EXISTS `cek_temp_trans_kredit`;
/*!50001 DROP VIEW IF EXISTS `cek_temp_trans_kredit`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_temp_trans_kredit` (
  `posisi` tinyint NOT NULL,
  `jumlah` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `cek_username`
--

DROP TABLE IF EXISTS `cek_username`;
/*!50001 DROP VIEW IF EXISTS `cek_username`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `cek_username` (
  `username` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `daftar_penangguhan`
--

DROP TABLE IF EXISTS `daftar_penangguhan`;
/*!50001 DROP VIEW IF EXISTS `daftar_penangguhan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `daftar_penangguhan` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `id_penangguhan` tinyint NOT NULL,
  `id_det_penangguhan` tinyint NOT NULL,
  `alasan` tinyint NOT NULL,
  `lama_penangguhan` tinyint NOT NULL,
  `tindakan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `data_nasabah`
--

DROP TABLE IF EXISTS `data_nasabah`;
/*!50001 DROP VIEW IF EXISTS `data_nasabah`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `data_nasabah` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `jk` tinyint NOT NULL,
  `tempat_lahir` tinyint NOT NULL,
  `tanggal_lahir` tinyint NOT NULL,
  `status_keluarga` tinyint NOT NULL,
  `jumlah_tanggungan` tinyint NOT NULL,
  `lama_tinggal` tinyint NOT NULL,
  `kode_pos` tinyint NOT NULL,
  `telepon` tinyint NOT NULL,
  `email` tinyint NOT NULL,
  `pekerjaan` tinyint NOT NULL,
  `alamat` tinyint NOT NULL,
  `status_tmp_tinggal` tinyint NOT NULL,
  `nama_desa` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `data_user`
--

DROP TABLE IF EXISTS `data_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_user` (
  `id_user` varchar(10) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `id_identitas` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_jabatan` (`id_jabatan`),
  KEY `id_identitas` (`id_identitas`),
  CONSTRAINT `data_user_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`),
  CONSTRAINT `data_user_ibfk_2` FOREIGN KEY (`id_identitas`) REFERENCES `identitas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_user`
--

LOCK TABLES `data_user` WRITE;
/*!40000 ALTER TABLE `data_user` DISABLE KEYS */;
INSERT INTO `data_user` (`id_user`, `username`, `password`, `id_jabatan`, `id_identitas`) VALUES ('User001','Abdul Azis Ansori','25d55ad283aa400af464c76d713c07ad',1,'User001'),('User002','azis1','25d55ad283aa400af464c76d713c07ad',2,'User002'),('User003','abdul1','25d55ad283aa400af464c76d713c07ad',3,'User003'),('User004','user4','25d55ad283aa400af464c76d713c07ad',4,'User004'),('User005','user5','25d55ad283aa400af464c76d713c07ad',5,'User005'),('User006','user6','25d55ad283aa400af464c76d713c07ad',5,'User006'),('User007','azis','25d55ad283aa400af464c76d713c07ad',1,'User007'),('User008','ansori','25d55ad283aa400af464c76d713c07ad',5,'User008');
/*!40000 ALTER TABLE `data_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `det_trans_keu`
--

DROP TABLE IF EXISTS `det_trans_keu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `det_trans_keu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_det` varchar(30) DEFAULT NULL,
  `id_trans` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_trans` (`id_trans`),
  CONSTRAINT `det_trans_keu_ibfk_1` FOREIGN KEY (`id_trans`) REFERENCES `tb_transaksi_keu` (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=296 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `det_trans_keu`
--

LOCK TABLES `det_trans_keu` WRITE;
/*!40000 ALTER TABLE `det_trans_keu` DISABLE KEYS */;
INSERT INTO `det_trans_keu` (`id`, `id_det`, `id_trans`) VALUES (202,'Det-T-42560022001','T-121053851922001'),(203,'Det-T-42560022001','T-24010632921001'),(204,'Det-T-42560022001','T-67056487320001'),(205,'Det-T-42560022001','T-72235111920001'),(206,'Det-T-8367221002','T-35455270521002'),(207,'Det-T-8367221002','T-39719261821002'),(208,'Det-T-51704921003','T-64114073821003'),(209,'Det-T-51704921003','T-80914471022003'),(210,'Det-T-46876521004','T-103327013422004'),(211,'Det-T-46876521004','T-28276231420004'),(212,'Det-T-46876521004','T-57941621621004'),(213,'Det-T-46876521004','T-63698011021004'),(214,'Det-T-36453322005','T-107931191021005'),(215,'Det-T-36453322005','T-47102363420005'),(216,'Det-T-36453322005','T-70566411922005'),(217,'Det-T-36453322005','T-99828911920005'),(218,'Det-T-32269121006','T-12084701620006'),(219,'Det-T-32269121006','T-90404798122006'),(220,'Det-T-20514321007','T-45515754020007'),(221,'Det-T-20514321007','T-53221938122007'),(222,'Det-T-20514321007','T-8120549620007'),(223,'Det-T-20514321007','T-83963372822007'),(224,'Det-T-3765520008','T-256733222008'),(225,'Det-T-3765520008','T-74104698621008'),(226,'Det-T-12273821009','T-53432839420009'),(227,'Det-T-12273821009','T-9065812020009'),(228,'Det-T-18969620010','T-37668658721010'),(229,'Det-T-18969620010','T-47463405522010'),(230,'Det-T-31267520011','T-113200451420011'),(231,'Det-T-31267520011','T-875758522011'),(232,'Det-T-48582421012','T-120595438922012'),(233,'Det-T-48582421012','T-24149422021012'),(234,'Det-T-39221220013','T-57569579721013'),(235,'Det-T-39221220013','T-7519269522013'),(236,'Det-T-43578022014','T-78928168320014'),(237,'Det-T-43578022014','T-79931144822014'),(238,'Det-T-11455120015','T-37200617221015'),(239,'Det-T-11455120015','T-46224828920015'),(240,'Det-T-53843822016','T-72415553921016'),(241,'Det-T-53843822016','T-87560120020016'),(242,'Det-T-13220921017','T-118696174822017'),(243,'Det-T-13220921017','T-52974568622017'),(244,'Det-T-45908522018','T-108486932320018'),(245,'Det-T-45908522018','T-86896373621018'),(246,'Det-T-49765320019','T-109773802522019'),(247,'Det-T-49765320019','T-6095522821019'),(248,'Det-T-15088922020','T-109127147020020'),(249,'Det-T-15088922020','T-15819665624020'),(250,'Det-T-22465114021','T-25879111818021'),(251,'Det-T-22465114021','T-65497884016021'),(252,'Det-T-22465114021','T-70028722612021'),(253,'Det-T-22465114021','T-7231326456021'),(254,'Det-T-42324212022','T-107818358813022'),(255,'Det-T-42324212022','T-7492415926022'),(256,'Det-T-3355835023','T-22186923316023'),(257,'Det-T-3355835023','T-26311509617023'),(258,'Det-T-3355835023','T-5559204345023'),(259,'Det-T-3355835023','T-67253454220023'),(260,'Det-T-26972312024','T-10671149447024'),(261,'Det-T-26972312024','T-2718944969024'),(262,'Det-T-26972312024','T-32305991613024'),(263,'Det-T-26972312024','T-91284804411024'),(264,'Det-T-28616214025','T-10338907216025'),(265,'Det-T-28616214025','T-19211237720025'),(266,'Det-T-28616214025','T-31267805710025'),(267,'Det-T-28616214025','T-82538812912025'),(268,'Det-T-396315026','T-10103828022026'),(269,'Det-T-396315026','T-450560118026'),(270,'Det-T-396315026','T-63214243610026'),(271,'Det-T-396315026','T-65954593213026'),(272,'Det-T-51518812027','T-4120153907027'),(273,'Det-T-51518812027','T-98404364019027'),(274,'Det-T-5094089028','T-108791513820028'),(275,'Det-T-5094089028','T-5095711345028'),(276,'Det-T-5094089028','T-57549627319028'),(277,'Det-T-5094089028','T-83722251020028'),(278,'Det-T-52201710029','T-12285604878029'),(279,'Det-T-52201710029','T-64604932910029'),(280,'Det-T-36962419030','T-120612338619030'),(281,'Det-T-36962419030','T-40449923710030'),(282,'Det-T-36962419030','T-45573385811030'),(283,'Det-T-36962419030','T-5628907339030'),(284,'Det-T-39318616031','T-4449994809031'),(285,'Det-T-39318616031','T-8523871377031'),(286,'Det-T-10981412032','T-1565483078032'),(287,'Det-T-10981412032','T-8640145514032'),(288,'Det-T-11494721033','T-18972230520033'),(289,'Det-T-11494721033','T-7641655737033'),(290,'Det-T-19173918034','T-7142156116034'),(291,'Det-T-19173918034','T-9768335015034'),(292,'Det-T-23184518035','T-70537023219035'),(293,'Det-T-23184518035','T-83325888711035'),(294,'Det-T-2628197036','T-114164038513036'),(295,'Det-T-2628197036','T-55236556611036');
/*!40000 ALTER TABLE `det_trans_keu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domp_tb_pengajuan`
--

DROP TABLE IF EXISTS `domp_tb_pengajuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domp_tb_pengajuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(40) DEFAULT NULL,
  `besaran` varchar(40) DEFAULT NULL,
  `id_kelompok` varchar(40) DEFAULT NULL,
  `id_pengajuan` varchar(40) DEFAULT NULL,
  `nik_pj` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domp_tb_pengajuan`
--

LOCK TABLES `domp_tb_pengajuan` WRITE;
/*!40000 ALTER TABLE `domp_tb_pengajuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `domp_tb_pengajuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `dt_sem_peng`
--

DROP TABLE IF EXISTS `dt_sem_peng`;
/*!50001 DROP VIEW IF EXISTS `dt_sem_peng`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `dt_sem_peng` (
  `id_kelompok` tinyint NOT NULL,
  `nik` tinyint NOT NULL,
  `besaran` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `email_lupa_password`
--

DROP TABLE IF EXISTS `email_lupa_password`;
/*!50001 DROP VIEW IF EXISTS `email_lupa_password`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `email_lupa_password` (
  `nama_lengkap` tinyint NOT NULL,
  `email` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `grafik_pengajuan`
--

DROP TABLE IF EXISTS `grafik_pengajuan`;
/*!50001 DROP VIEW IF EXISTS `grafik_pengajuan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `grafik_pengajuan` (
  `jumlah` tinyint NOT NULL,
  `nama` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `id_det_trans`
--

DROP TABLE IF EXISTS `id_det_trans`;
/*!50001 DROP VIEW IF EXISTS `id_det_trans`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `id_det_trans` (
  `id_det_trans` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `id_pengajuan`
--

DROP TABLE IF EXISTS `id_pengajuan`;
/*!50001 DROP VIEW IF EXISTS `id_pengajuan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `id_pengajuan` (
  `id_pengajuan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `id_per_keu`
--

DROP TABLE IF EXISTS `id_per_keu`;
/*!50001 DROP VIEW IF EXISTS `id_per_keu`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `id_per_keu` (
  `id_periode` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `id_transaksi`
--

DROP TABLE IF EXISTS `id_transaksi`;
/*!50001 DROP VIEW IF EXISTS `id_transaksi`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `id_transaksi` (
  `id_trans` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `id_user`
--

DROP TABLE IF EXISTS `id_user`;
/*!50001 DROP VIEW IF EXISTS `id_user`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `id_user` (
  `id_user` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `identitas`
--

DROP TABLE IF EXISTS `identitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `identitas` (
  `id` varchar(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `identitas`
--

LOCK TABLES `identitas` WRITE;
/*!40000 ALTER TABLE `identitas` DISABLE KEYS */;
INSERT INTO `identitas` (`id`, `nik`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `tempat_lahir`, `pendidikan`) VALUES ('User001',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('User002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('User003','2342342342','Abdul Azis Ansoria','1','2020-11-01','desa kanyoran kecamatan semen ','kediri','s1'),('User004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('User005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('User006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),('User007','3500350210345652','abdul azis ansori','1','2020-12-14','desa kanyoran kecamatan semen ','kediri','s1'),('User008',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `identitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` (`id_jabatan`, `nama`) VALUES (1,'direktur'),(2,'bendahara'),(3,'administrasi'),(4,'kasir'),(5,'admin');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `jurnal_penyesuaian`
--

DROP TABLE IF EXISTS `jurnal_penyesuaian`;
/*!50001 DROP VIEW IF EXISTS `jurnal_penyesuaian`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `jurnal_penyesuaian` (
  `id_transaksi` tinyint NOT NULL,
  `id_akun` tinyint NOT NULL,
  `jumlah_transaksi` tinyint NOT NULL,
  `posisi` tinyint NOT NULL,
  `jenis_jurnal` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `jurnal_umum`
--

DROP TABLE IF EXISTS `jurnal_umum`;
/*!50001 DROP VIEW IF EXISTS `jurnal_umum`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `jurnal_umum` (
  `id_transaksi` tinyint NOT NULL,
  `id_akun` tinyint NOT NULL,
  `jumlah_transaksi` tinyint NOT NULL,
  `posisi` tinyint NOT NULL,
  `jenis_jurnal` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `notifikasi_administrasi`
--

DROP TABLE IF EXISTS `notifikasi_administrasi`;
/*!50001 DROP VIEW IF EXISTS `notifikasi_administrasi`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `notifikasi_administrasi` (
  `id_pengajuan` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `nama_ang` tinyint NOT NULL,
  `link` tinyint NOT NULL,
  `jenis` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `notifikasi_direktur`
--

DROP TABLE IF EXISTS `notifikasi_direktur`;
/*!50001 DROP VIEW IF EXISTS `notifikasi_direktur`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `notifikasi_direktur` (
  `id_pengajuan` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `nama_ang` tinyint NOT NULL,
  `link` tinyint NOT NULL,
  `jenis` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tb_akun_rekening`
--

DROP TABLE IF EXISTS `tb_akun_rekening`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_akun_rekening` (
  `id_akun` varchar(40) NOT NULL,
  `nama_akun` varchar(50) DEFAULT NULL,
  `tipe_akun` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_akun_rekening`
--

LOCK TABLES `tb_akun_rekening` WRITE;
/*!40000 ALTER TABLE `tb_akun_rekening` DISABLE KEYS */;
INSERT INTO `tb_akun_rekening` (`id_akun`, `nama_akun`, `tipe_akun`) VALUES ('111210','Kas Operasional','Aset Lancar'),('111300','Kas SPP','Aset Lancar'),('111301','Kas Mudhorobah','Aset Lancar'),('112120','Bank Operasional','Aset Lancar'),('112130','Bank SPP','Aset Lancar'),('112442','Piutang SPP','Aset Lancar'),('112446','Piutang Mudhorobah','Aset Lancar'),('121100','Gedung','Aset Tetap'),('121500','Peralatan Kantor','Aset Tetap'),('121600','Akum. Penyusutan Peralatan Kantor','Aset Tetap'),('121900','Tanah','Aset Tetap'),('216115','Hutang Dana Sosial','Kewajiban'),('216116','Hutang Dana Kelembagaan','Kewajiban'),('231200','Modal Awal (BLM) SPP','Ekuitas'),('231300','Alokasi Operasional','Ekuitas'),('241100','Saldo Laba (Defisit) Tahun Berjalan','Ekuitas'),('241300','Saldo Laba (Defisit) Ditahan','Ekuitas'),('411220','Pendapatan Jasa SPP','Pendapatan'),('411270','Pendapatan Mudhorobah','Pendapatan'),('414100','Pendapatan Operasional Lain','Pendapatan'),('421000','Jasa Giro/Tab Bank Operasional','Pendapatan'),('423000','Jasa Giro/Tab Bank SPP','Pendapatan'),('512210','Beban Gaji Pengurus','Beban'),('512212','Beban Asuransi','Beban'),('512213','Beban Komunikasi','Beban'),('512300','Beban Pajak Jasa Giro/Tab Bank SPP','Beban'),('512311','Beban ATK','Beban'),('512314','Beban Listrik','Beban'),('512316','Beban Internet','Beban'),('512318','Beban Kebersihan Kantor','Beban'),('512326','Beban Photocopy','Beban'),('512327','Beban Konsumsi','Beban'),('512411','Beban Akomodasi','Beban'),('512600','Biaya Adm Bank SPP','Beban'),('512715','Beban Verifikasi','Beban'),('512812','Beban IPTW SPP','Beban'),('512982','Beban Penghapusan Piutang SPP','Beban'),('514123','Beban Promosi','Beban'),('514135','Beban Musyawarah Pendanaan','Beban'),('514137','Beban Rapat Kelembagaan','Beban'),('515130','Beban Penyusutan Peralatan Kantor','Beban'),('521100','Beban Pajak Jasa Giro/Tab Bank Ops','Beban'),('521400','Beban Adm Bank Operasional','Beban');
/*!40000 ALTER TABLE `tb_akun_rekening` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_angsuran`
--

DROP TABLE IF EXISTS `tb_angsuran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_angsuran` (
  `id_angsuran` varchar(100) NOT NULL,
  `id_pengembalian` varchar(40) DEFAULT NULL,
  `id_nik` varchar(50) DEFAULT NULL,
  `tgl_tagihan` date DEFAULT NULL,
  `keterangan` varchar(40) DEFAULT NULL,
  `jumlah` varchar(40) DEFAULT NULL,
  `tgl_dibayar` date DEFAULT NULL,
  `status` varchar(30) DEFAULT 'belum',
  `keuntungan_bh` varchar(30) DEFAULT NULL,
  `jumlah_dibayar` varchar(30) DEFAULT NULL,
  `kekurangan` varchar(30) DEFAULT NULL,
  `id_penangguhan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_angsuran`),
  KEY `id_pengembalian` (`id_pengembalian`),
  CONSTRAINT `tb_angsuran_ibfk_1` FOREIGN KEY (`id_pengembalian`) REFERENCES `tb_pengembalian` (`id_pengembalian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_angsuran`
--

LOCK TABLES `tb_angsuran` WRITE;
/*!40000 ALTER TABLE `tb_angsuran` DISABLE KEYS */;
INSERT INTO `tb_angsuran` (`id_angsuran`, `id_pengembalian`, `id_nik`, `tgl_tagihan`, `keterangan`, `jumlah`, `tgl_dibayar`, `status`, `keuntungan_bh`, `jumlah_dibayar`, `kekurangan`, `id_penangguhan`) VALUES ('A-Peng-239724892734833321324239724892734833320','Peng-239724892734833321324','23972489273483332','2021-02-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-239724892734833321324239724892734833321','Peng-239724892734833321324','23972489273483332','2021-03-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333210','Peng-239724892734833321324','23972489273483332','2021-12-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333211','Peng-239724892734833321324','23972489273483332','2022-01-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333212','Peng-239724892734833321324','23972489273483332','2021-02-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333213','Peng-239724892734833321324','23972489273483332','2021-03-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333214','Peng-239724892734833321324','23972489273483332','2021-04-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333215','Peng-239724892734833321324','23972489273483332','2021-05-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333216','Peng-239724892734833321324','23972489273483332','2021-06-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333217','Peng-239724892734833321324','23972489273483332','2021-07-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333218','Peng-239724892734833321324','23972489273483332','2021-08-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333219','Peng-239724892734833321324','23972489273483332','2021-09-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-239724892734833321324239724892734833322','Peng-239724892734833321324','23972489273483332','2021-04-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333220','Peng-239724892734833321324','23972489273483332','2021-10-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333221','Peng-239724892734833321324','23972489273483332','2021-11-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333213242397248927348333223','Peng-239724892734833321324','23972489273483332','2022-01-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-239724892734833321324239724892734833323','Peng-239724892734833321324','23972489273483332','2021-05-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-239724892734833321324239724892734833324','Peng-239724892734833321324','23972489273483332','2021-06-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-239724892734833321324239724892734833325','Peng-239724892734833321324','23972489273483332','2021-07-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-239724892734833321324239724892734833326','Peng-239724892734833321324','23972489273483332','2021-08-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-239724892734833321324239724892734833327','Peng-239724892734833321324','23972489273483332','2021-09-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-239724892734833321324239724892734833328','Peng-239724892734833321324','23972489273483332','2021-10-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-239724892734833321324239724892734833329','Peng-239724892734833321324','23972489273483332','2021-11-20','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333242132397248927348333222','Peng-239724892734833324213','23972489273483332','2021-12-20','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333321423972489273483331','Peng-23972489273483333214','2397248927348333','2021-06-23','Pokok','12500000',NULL,'Lunas',NULL,NULL,NULL,'Pen-2397248927348333-11872128'),('A-Peng-23972489273483333214239724892734833310','Peng-23972489273483333214','2397248927348333','2021-07-23','Bagi Hasil','30','2020-12-22','Lunas','30000','9000',NULL,NULL),('A-Peng-23972489273483333214239724892734833311','Peng-23972489273483333214','2397248927348333','2021-08-23','Bagi Hasil','30','2020-12-22','Lunas','40000','12000',NULL,NULL),('A-Peng-23972489273483333214239724892734833312','Peng-23972489273483333214','2397248927348333','2021-11-23','Bagi Hasil','30',NULL,'Lunas',NULL,NULL,NULL,NULL),('A-Peng-23972489273483333214239724892734833313','Peng-23972489273483333214','2397248927348333','2021-10-23','Bagi Hasil','30','2020-12-22','Lunas','300000','100000',NULL,NULL),('A-Peng-23972489273483333214239724892734833314','Peng-23972489273483333214','2397248927348333','2021-11-23','Bagi Hasil','30','2020-12-22','Lunas','2000','600',NULL,NULL),('A-Peng-23972489273483333214239724892734833315','Peng-23972489273483333214','2397248927348333','2022-04-23','Bagi Hasil','30','2021-01-02','Lunas','10000','3000',NULL,NULL),('A-Peng-2397248927348333321423972489273483332','Peng-23972489273483333214','2397248927348333','2022-01-23','Pokok','12500000','2021-01-02','Lunas','0','100000000',NULL,NULL),('A-Peng-2397248927348333321423972489273483333','Peng-23972489273483333214','2397248927348333','2022-04-23','Pokok','12500000','2021-01-02','Lunas','10000','12500000',NULL,NULL),('A-Peng-2397248927348333321423972489273483334','Peng-23972489273483333214','2397248927348333','2021-01-23','Bagi Hasil','30','2020-12-22','Lunas',NULL,'100000',NULL,NULL),('A-Peng-2397248927348333321423972489273483335','Peng-23972489273483333214','2397248927348333','2021-02-23','Bagi Hasil','30','2020-12-22','Lunas','10000','3000',NULL,NULL),('A-Peng-2397248927348333321423972489273483336','Peng-23972489273483333214','2397248927348333','2021-03-23','Bagi Hasil','-59970','2020-12-22','Lunas','2000000','60000',NULL,'Pen-2397248927348333-1168294'),('A-Peng-2397248927348333321423972489273483337','Peng-23972489273483333214','2397248927348333','2021-04-23','Bagi Hasil','30','2020-12-22','Lunas','200000','60000',NULL,NULL),('A-Peng-2397248927348333321423972489273483338','Peng-23972489273483333214','2397248927348333','2021-05-23','Bagi Hasil','30','2020-12-22','Lunas','100000','30000',NULL,NULL),('A-Peng-2397248927348333321423972489273483339','Peng-23972489273483333214','2397248927348333','2021-08-23','Bagi Hasil','30',NULL,'Lunas',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483330','Peng-23972489273483334123','2397248927348333','2021-02-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483331','Peng-23972489273483334123','2397248927348333','2021-03-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833310','Peng-23972489273483334123','2397248927348333','2021-12-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833311','Peng-23972489273483334123','2397248927348333','2022-01-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833312','Peng-23972489273483334123','2397248927348333','2021-02-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833313','Peng-23972489273483334123','2397248927348333','2021-03-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833314','Peng-23972489273483334123','2397248927348333','2021-04-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833315','Peng-23972489273483334123','2397248927348333','2021-05-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833316','Peng-23972489273483334123','2397248927348333','2021-06-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833317','Peng-23972489273483334123','2397248927348333','2021-07-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833318','Peng-23972489273483334123','2397248927348333','2021-08-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833319','Peng-23972489273483334123','2397248927348333','2021-09-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483332','Peng-23972489273483334123','2397248927348333','2021-04-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833320','Peng-23972489273483334123','2397248927348333','2021-10-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833321','Peng-23972489273483334123','2397248927348333','2021-11-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833322','Peng-23972489273483334123','2397248927348333','2021-12-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-23972489273483334123239724892734833323','Peng-23972489273483334123','2397248927348333','2022-01-05','Jasa','37500',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483333','Peng-23972489273483334123','2397248927348333','2021-05-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483334','Peng-23972489273483334123','2397248927348333','2021-06-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483335','Peng-23972489273483334123','2397248927348333','2021-07-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483336','Peng-23972489273483334123','2397248927348333','2021-08-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483337','Peng-23972489273483334123','2397248927348333','2021-09-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483338','Peng-23972489273483334123','2397248927348333','2021-10-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-2397248927348333412323972489273483339','Peng-23972489273483334123','2397248927348333','2021-11-05','Pokok','208333',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456530','Peng-35003502103456532341','3500350210345653','2021-02-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456531','Peng-35003502103456532341','3500350210345653','2021-03-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565310','Peng-35003502103456532341','3500350210345653','2021-12-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565311','Peng-35003502103456532341','3500350210345653','2022-01-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565312','Peng-35003502103456532341','3500350210345653','2021-02-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565313','Peng-35003502103456532341','3500350210345653','2021-03-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565314','Peng-35003502103456532341','3500350210345653','2021-04-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565315','Peng-35003502103456532341','3500350210345653','2021-05-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565316','Peng-35003502103456532341','3500350210345653','2021-06-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565317','Peng-35003502103456532341','3500350210345653','2021-07-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565318','Peng-35003502103456532341','3500350210345653','2021-08-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565319','Peng-35003502103456532341','3500350210345653','2021-09-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456532','Peng-35003502103456532341','3500350210345653','2021-04-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565320','Peng-35003502103456532341','3500350210345653','2021-10-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565321','Peng-35003502103456532341','3500350210345653','2021-11-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565322','Peng-35003502103456532341','3500350210345653','2021-12-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35003502103456532341350035021034565323','Peng-35003502103456532341','3500350210345653','2022-01-14','Jasa','750000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456533','Peng-35003502103456532341','3500350210345653','2021-05-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456534','Peng-35003502103456532341','3500350210345653','2021-06-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456535','Peng-35003502103456532341','3500350210345653','2021-07-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456536','Peng-35003502103456532341','3500350210345653','2021-08-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456537','Peng-35003502103456532341','3500350210345653','2021-09-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456538','Peng-35003502103456532341','3500350210345653','2021-10-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3500350210345653234135003502103456539','Peng-35003502103456532341','3500350210345653','2021-11-14','Pokok','4166667',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3506011504980003312435060115049800030','Peng-35060115049800033124','3506011504980003','2022-05-28','Pokok','50000','2021-01-02','kurang',NULL,'200000',NULL,NULL),('A-Peng-3506011504980003312435060115049800031','Peng-35060115049800033124','3506011504980003','2022-07-02','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000310','Peng-35060115049800033124','3506011504980003','2023-03-28','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000311','Peng-35060115049800033124','3506011504980003','2023-04-28','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000312','Peng-35060115049800033124','3506011504980003','2021-08-30','Jasa','45000',NULL,'lunas',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000313','Peng-35060115049800033124','3506011504980003','2021-10-02','Jasa','45000',NULL,'lunas',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000314','Peng-35060115049800033124','3506011504980003','2021-10-30','Jasa','45000',NULL,'lunas',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000315','Peng-35060115049800033124','3506011504980003','2021-11-30','Jasa','45000',NULL,'lunas',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000316','Peng-35060115049800033124','3506011504980003','2021-12-30','Jasa','45000',NULL,'lunas',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000317','Peng-35060115049800033124','3506011504980003','2022-01-30','Jasa','45000',NULL,'lunas',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000318','Peng-35060115049800033124','3506011504980003','2022-02-28','Jasa','45000',NULL,'lunas',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000319','Peng-35060115049800033124','3506011504980003','2022-03-28','Jasa','45000',NULL,'lunas',NULL,NULL,NULL,NULL),('A-Peng-3506011504980003312435060115049800032','Peng-35060115049800033124','3506011504980003','2022-07-30','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000320','Peng-35060115049800033124','3506011504980003','2022-04-28','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000321','Peng-35060115049800033124','3506011504980003','2022-05-30','Jasa','45000','2021-01-02','kurang',NULL,'0',NULL,NULL),('A-Peng-35060115049800033124350601150498000322','Peng-35060115049800033124','3506011504980003','2022-06-28','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-35060115049800033124350601150498000323','Peng-35060115049800033124','3506011504980003','2022-07-28','Jasa','45000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3506011504980003312435060115049800033','Peng-35060115049800033124','3506011504980003','2022-08-28','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3506011504980003312435060115049800034','Peng-35060115049800033124','3506011504980003','2022-09-28','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3506011504980003312435060115049800035','Peng-35060115049800033124','3506011504980003','2022-10-30','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3506011504980003312435060115049800036','Peng-35060115049800033124','3506011504980003','2022-11-28','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3506011504980003312435060115049800037','Peng-35060115049800033124','3506011504980003','2022-12-28','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3506011504980003312435060115049800038','Peng-35060115049800033124','3506011504980003','2023-01-28','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('A-Peng-3506011504980003312435060115049800039','Peng-35060115049800033124','3506011504980003','2023-02-28','Pokok','250000',NULL,'belum',NULL,NULL,NULL,NULL),('sta','Peng-23972489273483333214','2397248927348333','2021-03-23','Pokok','12500000','2020-12-22','Lunas','2000000','25000000',NULL,NULL);
/*!40000 ALTER TABLE `tb_angsuran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_desa`
--

DROP TABLE IF EXISTS `tb_desa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_desa` (
  `id_desa` varchar(5) NOT NULL,
  `nama_desa` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_desa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_desa`
--

LOCK TABLES `tb_desa` WRITE;
/*!40000 ALTER TABLE `tb_desa` DISABLE KEYS */;
INSERT INTO `tb_desa` (`id_desa`, `nama_desa`) VALUES ('1','Puhsarang'),('10','Sidomulyo'),('11','Joho'),('12','Bulu'),('2','Kedak'),('3','Titik'),('4','Selopanggung'),('5','Puhrubuh'),('6','Semen'),('7','Kanyoran'),('8','Pagung'),('9','Bobang');
/*!40000 ALTER TABLE `tb_desa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_det_penangguhan`
--

DROP TABLE IF EXISTS `tb_det_penangguhan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_det_penangguhan` (
  `id_det_penangguhan` varchar(100) NOT NULL,
  `id_penangguhan` varchar(100) DEFAULT NULL,
  `alasan` varchar(100) DEFAULT NULL,
  `desk_alasan` text DEFAULT NULL,
  `tgl_penangguhan` date DEFAULT NULL,
  `lama_penangguhan` varchar(10) DEFAULT NULL,
  `tindakan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_det_penangguhan`),
  KEY `id_penangguhan` (`id_penangguhan`),
  CONSTRAINT `tb_det_penangguhan_ibfk_1` FOREIGN KEY (`id_penangguhan`) REFERENCES `tb_penangguhan` (`id_penangguhan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_det_penangguhan`
--

LOCK TABLES `tb_det_penangguhan` WRITE;
/*!40000 ALTER TABLE `tb_det_penangguhan` DISABLE KEYS */;
INSERT INTO `tb_det_penangguhan` (`id_det_penangguhan`, `id_penangguhan`, `alasan`, `desk_alasan`, `tgl_penangguhan`, `lama_penangguhan`, `tindakan`) VALUES ('Det-P-01-18010121','P-350601150498000327','1','jhvyuvhj','2021-01-01','1','1'),('Det-P-01-23010121','P-350601150498000327','1','ddcscdsd','2021-01-01','1','1'),('Det-P-01-24010121','P-350601150498000327','1','ddcscdsd','2021-01-01','2','1'),('Det-P-01-39010121','P-350601150498000327','1','ddcscdsd','2021-01-01','1','1'),('Det-P-01-49010121','P-350601150498000327','1','asdasd','2021-01-01','2','2'),('Det-P-21010104-2381189','P-350601150498000327','1','dfsfs','2021-01-01','1','2'),('Det-P-21010107-7010121','P-350601150498000327','1','dsfdsf','2021-01-01','2','2'),('Det-P-21010133-26832719','P-350601150498000327','1','dfsfs','2021-01-01','2','2'),('Det-P-21010138-15377963','P-239724892734833338','1','hgvghvj','2021-01-01','2','1'),('Det-P-21010146-46010121','P-350601150498000327','1','sadasdas','2021-01-01','1','2'),('Det-P-21010157-34357550','P-350601150498000327','1','sadasdas','2021-01-01','1','2');
/*!40000 ALTER TABLE `tb_det_penangguhan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_detail_kelompok`
--

DROP TABLE IF EXISTS `tb_detail_kelompok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_detail_kelompok` (
  `id_detail_kelompok` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelompok` varchar(40) DEFAULT NULL,
  `nama_anggota` varchar(40) DEFAULT NULL,
  `posisi_anggota` varchar(50) DEFAULT NULL,
  `nik` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_detail_kelompok`),
  KEY `id_kelompok` (`id_kelompok`),
  CONSTRAINT `tb_detail_kelompok_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `tb_kelompok` (`id_kelompok`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_detail_kelompok`
--

LOCK TABLES `tb_detail_kelompok` WRITE;
/*!40000 ALTER TABLE `tb_detail_kelompok` DISABLE KEYS */;
INSERT INTO `tb_detail_kelompok` (`id_detail_kelompok`, `id_kelompok`, `nama_anggota`, `posisi_anggota`, `nik`) VALUES (25,'Kel-8400505133900061','Abdul Azis Ansoria','ketua','3506011504980003'),(26,'Kel-8400505133900061','WARTIAH','anggota','3500350210345653'),(27,'Kel-2938333322977448','dian','ketua','2397248927348333'),(28,'Kel-2938333322977448','aziss','anggota','23972489273483332'),(29,'Kel-0010009581056234','Nazilatul Maula','ketua','3506041810950002'),(30,'Kel-3312722923182321','abdul azis ansori','ketua','1932371283122322'),(31,'Kel-3312722923182321','Muhammad Alfian Hanif','anggota','3242342342342323');
/*!40000 ALTER TABLE `tb_detail_kelompok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_jns_pengajuan`
--

DROP TABLE IF EXISTS `tb_jns_pengajuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_jns_pengajuan` (
  `id_jns_pengajuan` varchar(2) NOT NULL,
  `nama_jns_pengajuan` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_jns_pengajuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_jns_pengajuan`
--

LOCK TABLES `tb_jns_pengajuan` WRITE;
/*!40000 ALTER TABLE `tb_jns_pengajuan` DISABLE KEYS */;
INSERT INTO `tb_jns_pengajuan` (`id_jns_pengajuan`, `nama_jns_pengajuan`) VALUES ('1','peminjaman'),('2','permodalan');
/*!40000 ALTER TABLE `tb_jns_pengajuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kelompok`
--

DROP TABLE IF EXISTS `tb_kelompok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kelompok` (
  `id_kelompok` varchar(40) NOT NULL,
  `nama_kelompok` varchar(100) DEFAULT NULL,
  `tanggal_berdiri` date DEFAULT NULL,
  `id_desa` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_kelompok`),
  KEY `id_desa` (`id_desa`),
  CONSTRAINT `tb_kelompok_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `tb_desa` (`id_desa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kelompok`
--

LOCK TABLES `tb_kelompok` WRITE;
/*!40000 ALTER TABLE `tb_kelompok` DISABLE KEYS */;
INSERT INTO `tb_kelompok` (`id_kelompok`, `nama_kelompok`, `tanggal_berdiri`, `id_desa`) VALUES ('Kel-0010009581056234','mawar','2021-01-23','7'),('Kel-2938333322977448','kakap','2020-12-24','1'),('Kel-3312722923182321','melati','2020-12-09','6'),('Kel-8400505133900061','konoha','2020-12-25','1');
/*!40000 ALTER TABLE `tb_kelompok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_nasabah`
--

DROP TABLE IF EXISTS `tb_nasabah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_nasabah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `status_keluarga` varchar(50) DEFAULT NULL,
  `jumlah_tanggungan` varchar(10) DEFAULT NULL,
  `status_tmp_tinggal` varchar(20) DEFAULT NULL,
  `lama_tinggal` varchar(10) DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `id_pengajuan` varchar(40) DEFAULT NULL,
  `id_kelompok` varchar(40) DEFAULT NULL,
  `id_desa` varchar(5) DEFAULT NULL,
  `tanggal_daftar` timestamp NULL DEFAULT current_timestamp(),
  `tanggal_update` timestamp NULL DEFAULT current_timestamp(),
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `data_diri` varchar(50) DEFAULT NULL,
  `key` varchar(100) DEFAULT NULL,
  `akun` varchar(100) DEFAULT 'non aktif',
  PRIMARY KEY (`id`),
  KEY `id_kelompok` (`id_kelompok`),
  KEY `id_desa` (`id_desa`),
  KEY `id_pengajuan` (`id_pengajuan`),
  CONSTRAINT `tb_nasabah_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `tb_kelompok` (`id_kelompok`),
  CONSTRAINT `tb_nasabah_ibfk_2` FOREIGN KEY (`id_desa`) REFERENCES `tb_desa` (`id_desa`),
  CONSTRAINT `tb_nasabah_ibfk_3` FOREIGN KEY (`id_pengajuan`) REFERENCES `tb_pengajuan` (`id_pengajuan`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_nasabah`
--

LOCK TABLES `tb_nasabah` WRITE;
/*!40000 ALTER TABLE `tb_nasabah` DISABLE KEYS */;
INSERT INTO `tb_nasabah` (`id`, `nik`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_keluarga`, `jumlah_tanggungan`, `status_tmp_tinggal`, `lama_tinggal`, `kode_pos`, `telepon`, `email`, `pekerjaan`, `jabatan`, `alamat`, `id_pengajuan`, `id_kelompok`, `id_desa`, `tanggal_daftar`, `tanggal_update`, `username`, `password`, `status`, `data_diri`, `key`, `akun`) VALUES (37,'3506011504980003','Abdul Azis Ansoria','1','Kediri','2020-12-31','1','3','1','3','641010','089674552593','Azisaan552@gmail.coms','petani','petani','desa kanyoran kecamatan semen ','P-3506011504980003-004','Kel-8400505133900061','1','2020-12-18 15:21:26','2020-12-18 15:23:02','abdul','25d55ad283aa400af464c76d713c07ad','1',NULL,'QyRH6NwOYcgrhxn7Km524XuIE9qPtMGeSzvCFVsdLWZj31Uf0b','aktif'),(38,'3500350210345653','WARTIAH','1','Kediri','2020-12-26','1','3','1','3','641010','089674552593','Azisaan552@gmail.coma','petani','petani','desa kanyoran kecamatan semen ',NULL,'Kel-8400505133900061','1','2020-12-18 15:24:12','2020-12-18 15:24:12','wartiah','a1c49ab731cdfd8562944884290b3c65',NULL,NULL,'xibtA7ULpFmfgQsu4JTyVCRN8PEz2WXr6KdknjGlDev3SIqHO5','aktif'),(39,'2397248927348333','dian','1','kediri','2020-12-24','1','2','1','2','3424324','234242424242','ansoriazis15@gmail.com','petani','petani','puhsarang kediri jatim','P-2397248927348333-006','Kel-2938333322977448','1','2020-12-22 01:09:26','2020-12-22 01:13:13','dian','25d55ad283aa400af464c76d713c07ad','1',NULL,'Co1KctM4uTaEUBQpyeA78gj5Fbw9G3xnzJSsliYkh6dZVqW0XO','aktif'),(40,'23972489273483332','aziss','1','kediri','2020-12-23','1','3','1','2','3424324','234242424242','cobaaplikasi15@gmail.com','petani','petani','puhsarang kediri jatim','P-2397248927348333-006','Kel-2938333322977448','1','2020-12-22 01:15:12','2020-12-22 01:15:12','azisaaaa','cf9e254e55b90bdb20ab45a58bb3ac72',NULL,NULL,'mh5KV7bo9AOeQ4jTJEPRN8UpcYlfCI6kSztMdHF30wDZG1rXBi','aktif'),(41,'7465463424324234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'cintikaoktavia09@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'2020-12-24 04:53:50','2020-12-24 04:53:50','df','25d55ad283aa400af464c76d713c07ad','1',NULL,'rDo8cPWNjfJdEtqZAwh1QpMXm65H0ea4uKFi3lGzCyUsSvn9k7','aktif'),(46,'4234234234234234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Azisaan552@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'2021-01-02 14:39:50','2021-01-02 14:39:50','dian12','76d80224611fc919a5d54f0ff9fba446','1',NULL,'tJklYIMigv35beHrfFXjxAy4RDS2UzcCEWam7N9KqPsnwh1O0T','aktif'),(47,'3506041810950002','Nazilatul Maula','2','Kediri','1998-10-22','1','5','1','22','64161','089515725886','nazilatulmaula22@gmail.com','Wiraswasta','Direktur','Ds. Kanyoran RT 01 RW 03','P-3506041810950002-008','Kel-0010009581056234','7','2021-01-02 14:44:03','2021-01-02 14:48:11','Nazila','8d3e42b3cdffaecfc4ab2b997daca8f0','1',NULL,'6qT9vUx2nhX3pkt84eYJLWcSIPoQ7u0KE1zawjC5rimFsDGfbM','aktif'),(48,'3521152609980002','Dian Kurniawan Saputra','1','Mojokerto','1998-09-26','1','0','1','2','65344','085645807091','dyankurniawansaputra5@gmail.com','Direktur Utama PT Mencari cinta sejati','Direktur Utama','semen Rt 013 Rw 004',NULL,NULL,'1','2021-01-03 02:15:00','2021-01-03 02:21:21','diankurniawansaputra','25d55ad283aa400af464c76d713c07ad','1',NULL,'E0WlUFVqcYwuRg9sL4Pix1MDmfjCoHbZIAJdTtOhnpG7XK62r5','aktif'),(49,'1932371283122322','abdul azis ansori','1','Kediri','2021-01-21','1','3','2','3','641010','089674552593','aplikasicoba15@gmail.com','petani','petani','desa kanyoran kecamatan semen ','P-1932371283122322-009','Kel-3312722923182321','6','2021-01-04 06:06:46','2021-01-04 06:09:35','azis15','25d55ad283aa400af464c76d713c07ad','1',NULL,'P1O9jq6WIx4krcNZVaEyXuvT3w87nhY5dJzSpGB0omfiQDlLtU','aktif'),(50,'3242342342342323','Muhammad Alfian Hanif','1','Kediri','2021-01-05','1','3','1','3','641010','322423333333','hanif@gmail.com','petani','petani','desa kanyoran kecamatan semen ','P-1932371283122322-009','Kel-3312722923182321','2','2021-01-04 06:15:30','2021-01-04 06:15:30','hanif','15e2ce6867a6a5b9c5b78bc90c417c0e',NULL,NULL,'NLE28QroTWOaZXluGHpi0xSJYcM3B5UA6Ck4zhFfRveDdVIP9n','non aktif');
/*!40000 ALTER TABLE `tb_nasabah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pembahasan`
--

DROP TABLE IF EXISTS `tb_pembahasan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pembahasan` (
  `id_pembahasan` varchar(40) NOT NULL,
  `jadwal_survey` date DEFAULT NULL,
  `catatan_pem_awal` text DEFAULT NULL,
  `tanggal_survey` date DEFAULT NULL,
  `ft_peta` varchar(40) DEFAULT NULL,
  `ft_rumah` varchar(40) DEFAULT NULL,
  `ft_usaha` varchar(40) DEFAULT NULL,
  `usaha_lain` varchar(40) DEFAULT NULL,
  `total_pendapatan` varchar(40) DEFAULT NULL,
  `biaya_keluarga` varchar(40) DEFAULT NULL,
  `biaya_pengembalian` varchar(40) DEFAULT NULL,
  `biaya_lain2` varchar(40) DEFAULT NULL,
  `sisa_pendapatan` varchar(40) DEFAULT NULL,
  `rekomendasi` varchar(20) DEFAULT NULL,
  `dana_cair` varchar(20) DEFAULT NULL,
  `bagi_hasil` varchar(20) DEFAULT NULL,
  `tgl_pencairan` date DEFAULT NULL,
  `periode_pengembalian` varchar(10) DEFAULT NULL,
  `validasi` varchar(10) DEFAULT 'belum',
  PRIMARY KEY (`id_pembahasan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pembahasan`
--

LOCK TABLES `tb_pembahasan` WRITE;
/*!40000 ALTER TABLE `tb_pembahasan` DISABLE KEYS */;
INSERT INTO `tb_pembahasan` (`id_pembahasan`, `jadwal_survey`, `catatan_pem_awal`, `tanggal_survey`, `ft_peta`, `ft_rumah`, `ft_usaha`, `usaha_lain`, `total_pendapatan`, `biaya_keluarga`, `biaya_pengembalian`, `biaya_lain2`, `sisa_pendapatan`, `rekomendasi`, `dana_cair`, `bagi_hasil`, `tgl_pencairan`, `periode_pengembalian`, `validasi`) VALUES ('Pem-P-1932371283122322-009-0501','2021-01-15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'belum'),('Pem-P-1932371283122322-009-5100','2021-01-22',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'belum'),('Pem-P-2397248927348333-003-2221','2020-12-23',NULL,'2020-12-24','Peta-P-2397248927348333-003201222.PNG','Rumah-P-2397248927348333-003201222.PNG','Usaha-P-2397248927348333-003201222.PNG','dagang','20000000','1000000','1000000','1000000','15000000','3000000','50000000','30','2020-12-24','3','sudah'),('Pem-P-2397248927348333-006-1500','2021-01-14',NULL,'2021-01-13','Peta-P-2397248927348333-006210105.png','Rumah-P-2397248927348333-006210105.png','Usaha-P-2397248927348333-006210105.png','dagang','2000000','1000000','1000000','1000000','1000000','3000000','3000000','','2021-01-14','','sudah'),('Pem-P-2397248927348333-006-5010','2021-01-07',NULL,'2021-01-21','Peta-P-2397248927348333-006210105.jpg','Rumah-P-2397248927348333-006210105.jpg','Usaha-P-2397248927348333-006210105.jpg','dagang ','5000000','500000','500000','500000','3500000','2500000','2500000','','2021-01-16','','sudah'),('Pem-P-3506011504980003-004-2281','2020-12-31',NULL,'2021-01-03','Peta-P-3506011504980003-004210104.jpg','Rumah-P-3506011504980003-004210104.jpg','Usaha-P-3506011504980003-004210104.jpg','dagang','20000000','1000000','1000000','1000000','17000000','3000000','50000000','','2021-01-22','','sudah'),('Pem-P-3506011504980003-004-2821','2020-12-31',NULL,'2020-12-29','Peta-P-3506011504980003-004201228.jpg','Rumah-P-3506011504980003-004201228.jpg','Usaha-P-3506011504980003-004201228.jpg','dagang','3000000','1000000','1000000','500000','500000','3000000','3000000','','2020-12-25','','sudah'),('Pem-P-3506041810950002-008-1050','2021-01-15',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'belum');
/*!40000 ALTER TABLE `tb_pembahasan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_penangguhan`
--

DROP TABLE IF EXISTS `tb_penangguhan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_penangguhan` (
  `id_penangguhan` varchar(100) NOT NULL,
  `berkas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_penangguhan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_penangguhan`
--

LOCK TABLES `tb_penangguhan` WRITE;
/*!40000 ALTER TABLE `tb_penangguhan` DISABLE KEYS */;
INSERT INTO `tb_penangguhan` (`id_penangguhan`, `berkas`) VALUES ('P-239724892734833338','SB-Det-P-01-58010121.rar'),('P-350601150498000327','SB-Det-P-01-18010121.rar');
/*!40000 ALTER TABLE `tb_penangguhan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pencairan`
--

DROP TABLE IF EXISTS `tb_pencairan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pencairan` (
  `id_pencairan` varchar(40) NOT NULL,
  `tanggal_pencairan` date DEFAULT NULL,
  `nama_penerima` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pencairan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pencairan`
--

LOCK TABLES `tb_pencairan` WRITE;
/*!40000 ALTER TABLE `tb_pencairan` DISABLE KEYS */;
INSERT INTO `tb_pencairan` (`id_pencairan`, `tanggal_pencairan`, `nama_penerima`) VALUES ('PenP-2397248927348333-0022122','2020-12-22','dian'),('PenP-2397248927348333-0032221','2020-12-22','dian'),('PenP-2397248927348333-0061500','2021-01-05','aziss'),('PenP-2397248927348333-0065001','2021-01-05','dian'),('PenP-3506011504980003-0011222','2020-12-22','Abdul Azis Ansoria'),('PenP-3506011504980003-0041228','2020-12-28','Abdul Azis Ansoria'),('PenP-3506011504980003-0045001','2021-01-05','WARTIAH');
/*!40000 ALTER TABLE `tb_pencairan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pengajuan`
--

DROP TABLE IF EXISTS `tb_pengajuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pengajuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengajuan` varchar(40) DEFAULT NULL,
  `nik_penanggung` varchar(40) DEFAULT NULL,
  `nik_anggota` varchar(40) DEFAULT NULL,
  `tanggal_pengajuan` timestamp NOT NULL DEFAULT current_timestamp(),
  `besaran_pengajuan` varchar(20) DEFAULT NULL,
  `bagi_hasil` varchar(20) DEFAULT NULL,
  `periode_pengembalian` varchar(5) DEFAULT NULL,
  `id_jns_pengajuan` varchar(2) DEFAULT NULL,
  `id_berkas` varchar(40) DEFAULT NULL,
  `id_user` varchar(10) DEFAULT NULL,
  `id_pembahasan` varchar(40) DEFAULT NULL,
  `id_pencairan` varchar(40) DEFAULT NULL,
  `pesan` varchar(100) DEFAULT 'berkas terkirim',
  `progress` varchar(100) DEFAULT 'berkas terkirim',
  `id_penangguhan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jns_pengajuan` (`id_jns_pengajuan`),
  KEY `id_berkas` (`id_berkas`),
  KEY `id_pencairan` (`id_pencairan`),
  KEY `id_user` (`id_user`),
  KEY `id_pengajuan` (`id_pengajuan`),
  KEY `id_pembahasan` (`id_pembahasan`),
  KEY `id_penangguhan` (`id_penangguhan`),
  CONSTRAINT `tb_pengajuan_ibfk_1` FOREIGN KEY (`id_jns_pengajuan`) REFERENCES `tb_jns_pengajuan` (`id_jns_pengajuan`),
  CONSTRAINT `tb_pengajuan_ibfk_3` FOREIGN KEY (`id_pencairan`) REFERENCES `tb_pencairan` (`id_pencairan`),
  CONSTRAINT `tb_pengajuan_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`),
  CONSTRAINT `tb_pengajuan_ibfk_6` FOREIGN KEY (`id_pembahasan`) REFERENCES `tb_pembahasan` (`id_pembahasan`),
  CONSTRAINT `tb_pengajuan_ibfk_7` FOREIGN KEY (`id_penangguhan`) REFERENCES `tb_penangguhan` (`id_penangguhan`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pengajuan`
--

LOCK TABLES `tb_pengajuan` WRITE;
/*!40000 ALTER TABLE `tb_pengajuan` DISABLE KEYS */;
INSERT INTO `tb_pengajuan` (`id`, `id_pengajuan`, `nik_penanggung`, `nik_anggota`, `tanggal_pengajuan`, `besaran_pengajuan`, `bagi_hasil`, `periode_pengembalian`, `id_jns_pengajuan`, `id_berkas`, `id_user`, `id_pembahasan`, `id_pencairan`, `pesan`, `progress`, `id_penangguhan`) VALUES (76,'P-2397248927348333-003','2397248927348333','2397248927348333','2020-12-22 03:52:36','50000000','20','3','2','B-2397248927348333-201222.rar','User003','Pem-P-2397248927348333-003-2221','PenP-2397248927348333-0032221','Pengajuan Cair','Pengajuan Lolos','P-239724892734833338'),(77,'P-3506011504980003-004','3506011504980003','3506011504980003','2020-12-27 09:45:12','3000000',NULL,'1','1','B-3506011504980003-201227.rar','User003','Pem-P-3506011504980003-004-2821','PenP-3506011504980003-0041228','Pengajuan Cair','Pengajuan Lolos','P-350601150498000327'),(78,'P-3506011504980003-004','3506011504980003','3500350210345653','2020-12-27 09:45:13','3000000',NULL,'1','1','B-3506011504980003-201227.rar','User003','Pem-P-3506011504980003-004-2281','PenP-3506011504980003-0045001','Pengajuan Cair','Pengajuan Lolos',NULL),(79,NULL,NULL,NULL,'2021-01-01 02:21:22',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'berkas terkirim','berkas terkirim',NULL),(80,'P-3506041810950002-005','3506041810950002','3506041810950002','2021-01-02 14:50:49','5000000','10','6','2','abad 21.pdf',NULL,NULL,NULL,'berkas terkirim','berkas terkirim',NULL),(81,'P-2397248927348333-006','2397248927348333','2397248927348333','2021-01-03 02:30:47','3000000',NULL,'1','1','B-2397248927348333-210103.zip','User003','Pem-P-2397248927348333-006-5010','PenP-2397248927348333-0065001','Pengajuan Cair','Pengajuan Lolos',NULL),(82,'P-2397248927348333-006','2397248927348333','23972489273483332','2021-01-03 02:30:47','3000000',NULL,'1','1','B-2397248927348333-210103.zip','User003','Pem-P-2397248927348333-006-1500','PenP-2397248927348333-0061500','Pengajuan Cair','Pengajuan Lolos',NULL),(83,'P-3506041810950002-007','3506041810950002','3506041810950002','2021-01-03 02:38:09','500000000','10','12','2','qs an nahl.pdf',NULL,NULL,NULL,'berkas terkirim','berkas terkirim',NULL),(84,'P-3506041810950002-008','3506041810950002','3506041810950002','2021-01-03 02:51:28','2000000','40','1','2','B-3506041810950002-210103.zip','User007','Pem-P-3506041810950002-008-1050',NULL,'','Pembahasan Awal',NULL),(85,'P-1932371283122322-009','1932371283122322','1932371283122322','2021-01-04 06:36:49','3000000',NULL,'1','1','B-1932371283122322-210104.zip','User007','Pem-P-1932371283122322-009-0501',NULL,'','Pembahasan Awal',NULL),(86,'P-1932371283122322-009','1932371283122322','3242342342342323','2021-01-04 06:36:49','3000000',NULL,'1','1','B-1932371283122322-210104.zip','User007','Pem-P-1932371283122322-009-5100',NULL,'','Pembahasan Awal',NULL);
/*!40000 ALTER TABLE `tb_pengajuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pengembalian`
--

DROP TABLE IF EXISTS `tb_pengembalian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pengembalian` (
  `id_pengembalian` varchar(40) NOT NULL,
  `id_pencairan` varchar(40) DEFAULT NULL,
  `id_pengajuan` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_pengembalian`),
  KEY `id_pencairan` (`id_pencairan`),
  CONSTRAINT `tb_pengembalian_ibfk_1` FOREIGN KEY (`id_pencairan`) REFERENCES `tb_pencairan` (`id_pencairan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pengembalian`
--

LOCK TABLES `tb_pengembalian` WRITE;
/*!40000 ALTER TABLE `tb_pengembalian` DISABLE KEYS */;
INSERT INTO `tb_pengembalian` (`id_pengembalian`, `id_pencairan`, `id_pengajuan`) VALUES ('Peng-23972489273483331324','PenP-2397248927348333-0022122','P-2397248927348333-002'),('Peng-239724892734833321324','PenP-2397248927348333-0061500','P-2397248927348333-006'),('Peng-239724892734833324213','PenP-2397248927348333-0061500','P-2397248927348333-006'),('Peng-23972489273483333214','PenP-2397248927348333-0032221','P-2397248927348333-003'),('Peng-23972489273483334123','PenP-2397248927348333-0065001','P-2397248927348333-006'),('Peng-35003502103456532341','PenP-3506011504980003-0045001','P-3506011504980003-004'),('Peng-35060115049800033124','PenP-3506011504980003-0041228','P-3506011504980003-004'),('Peng-35060115049800033412','PenP-3506011504980003-0011222','P-3506011504980003-001');
/*!40000 ALTER TABLE `tb_pengembalian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_periode_keu`
--

DROP TABLE IF EXISTS `tb_periode_keu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_periode_keu` (
  `id_periode` varchar(40) NOT NULL,
  `tanggal_periode` date DEFAULT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_periode_keu`
--

LOCK TABLES `tb_periode_keu` WRITE;
/*!40000 ALTER TABLE `tb_periode_keu` DISABLE KEYS */;
INSERT INTO `tb_periode_keu` (`id_periode`, `tanggal_periode`) VALUES ('Per002','2020-12-22'),('Per003','2021-01-01');
/*!40000 ALTER TABLE `tb_periode_keu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_transaksi_keu`
--

DROP TABLE IF EXISTS `tb_transaksi_keu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_transaksi_keu` (
  `id_transaksi` varchar(40) NOT NULL,
  `id_periode` varchar(40) DEFAULT NULL,
  `jumlah_transaksi` varchar(50) DEFAULT NULL,
  `posisi` varchar(40) DEFAULT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `id_akun` varchar(40) DEFAULT NULL,
  `jenis_jurnal` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_periode` (`id_periode`),
  KEY `id_akun` (`id_akun`),
  CONSTRAINT `tb_transaksi_keu_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `tb_periode_keu` (`id_periode`),
  CONSTRAINT `tb_transaksi_keu_ibfk_3` FOREIGN KEY (`id_akun`) REFERENCES `tb_akun_rekening` (`id_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_transaksi_keu`
--

LOCK TABLES `tb_transaksi_keu` WRITE;
/*!40000 ALTER TABLE `tb_transaksi_keu` DISABLE KEYS */;
INSERT INTO `tb_transaksi_keu` (`id_transaksi`, `id_periode`, `jumlah_transaksi`, `posisi`, `tanggal_transaksi`, `id_akun`, `jenis_jurnal`) VALUES ('T-10103828022026','Per002','12500000','Debit','2021-01-02','111301','Jurnal Umum'),('T-103327013422004','Per002','90000','Debit','2020-12-22','111300','Jurnal Umum'),('T-10338907216025','Per002','12500000','Kredit','2021-01-02','112446','Jurnal Umum'),('T-10671149447024','Per002','12500000','Debit','2021-01-02','111301','Jurnal Umum'),('T-107818358813022','Per002','12500000','Kredit','2021-01-02','112446','Jurnal Umum'),('T-107931191021005','Per002','','Kredit','2020-12-22','111301','Jurnal Umum'),('T-108486932320018','Per002','600','Debit','2020-12-22','111301','Jurnal Umum'),('T-108791513820028','Per003','7000000','Kredit','2021-01-02','231200','Jurnal Penyesuaian'),('T-109127147020020','Per002','3000000','Debit','2020-12-28','112442','Jurnal Umum'),('T-109773802522019','Per002','600','Kredit','2020-12-22','112446','Jurnal Umum'),('T-113200451420011','Per002','12000','Debit','2020-12-22','111301','Jurnal Umum'),('T-114164038513036','Per003','1000000','Debit','2021-01-09','231200','Jurnal Penyesuaian'),('T-118696174822017','Per002','90000','Debit','2020-12-22','111301','Jurnal Umum'),('T-120595438922012','Per002','12000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-120612338619030','Per003','80000000','Kredit','2021-01-07','411270','Jurnal Umum'),('T-12084701620006','Per002','60000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-121053851922001','Per002','2000000','Kredit','2020-12-23','112442','Jurnal Umum'),('T-12285604878029','Per003','1000000','Kredit','2021-01-21','111210','Jurnal Umum'),('T-1565483078032','Per003','50000000','Kredit','2021-01-05','111300','Jurnal Umum'),('T-15819665624020','Per002','3000000','Kredit','2020-12-28','111300','Jurnal Umum'),('T-18972230520033','Per003','2500000','Debit','2021-01-05','112442','Jurnal Umum'),('T-19211237720025','Per002','3000','Kredit','2021-01-02','111301','Jurnal Umum'),('T-22186923316023','Per002','300000','Debit','2021-01-02','411270','Jurnal Umum'),('T-24010632921001','Per002','2000000','Debit','2020-12-23','111300','Jurnal Umum'),('T-24149422021012','Per002','12000','Debit','2020-12-22','111301','Jurnal Umum'),('T-256733222008','Per002','30000','Debit','2020-12-22','111301','Jurnal Umum'),('T-25879111818021','Per002','200000','Debit','2021-01-02','111300','Jurnal Umum'),('T-26311509617023','Per002','12500000','Kredit','2021-01-02','112446','Jurnal Umum'),('T-2718944969024','Per002','3000','Debit','2021-01-02','411270','Jurnal Umum'),('T-28276231420004','Per002','90000','Debit','2020-12-22','411220','Jurnal Umum'),('T-31267805710025','Per002','12500000','Debit','2021-01-02','111301','Jurnal Umum'),('T-32305991613024','Per002','12500000','Kredit','2021-01-02','112446','Jurnal Umum'),('T-35455270521002','Per002','50000000','Debit','2020-12-22','112446','Jurnal Umum'),('T-37200617221015','Per002','12000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-37668658721010','Per002','12000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-39719261821002','Per002','50000000','Kredit','2020-12-22','111301','Jurnal Umum'),('T-40449923710030','Per003','80000000','Debit','2021-01-07','111301','Jurnal Umum'),('T-4120153907027','Per003','7000000','Debit','2021-01-02','231200','Jurnal Umum'),('T-4449994809031','Per003','7000000','Debit','2021-01-21','121900','Jurnal Umum'),('T-450560118026','Per002','12500000','Kredit','2021-01-02','112446','Jurnal Umum'),('T-45515754020007','Per002','12500000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-45573385811030','Per003','3000000','Kredit','2021-01-07','411220','Jurnal Umum'),('T-46224828920015','Per002','12000','Debit','2020-12-22','111301','Jurnal Umum'),('T-47102363420005','Per002','3000','Debit','2020-12-22','111301','Jurnal Umum'),('T-47463405522010','Per002','12000','Debit','2020-12-22','111301','Jurnal Umum'),('T-5095711345028','Per003','7000000','Debit','2021-01-02','111300','Jurnal Penyesuaian'),('T-52974568622017','Per002','90000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-53221938122007','Per002','60000','Kredit','2020-12-22','111301','Jurnal Umum'),('T-53432839420009','Per002','9000','Debit','2020-12-22','111301','Jurnal Umum'),('T-55236556611036','Per003','1000000','Kredit','2021-01-09','111300','Jurnal Penyesuaian'),('T-5559204345023','Per002','300000','Kredit','2021-01-02','111301','Jurnal Umum'),('T-5628907339030','Per003','3000000','Debit','2021-01-07','111300','Jurnal Umum'),('T-57549627319028','Per003','7000000','Kredit','2021-01-02','231200','Jurnal Penyesuaian'),('T-57569579721013','Per002','12000','Debit','2020-12-22','111301','Jurnal Umum'),('T-57941621621004','Per002','90000','Kredit','2020-12-22','112442','Jurnal Umum'),('T-6095522821019','Per002','600','Debit','2020-12-22','111301','Jurnal Umum'),('T-63214243610026','Per002','3000','Kredit','2021-01-02','111301','Jurnal Umum'),('T-63698011021004','Per002','90000','Kredit','2020-12-22','111300','Jurnal Umum'),('T-64114073821003','Per002','2000000','Kredit','2020-12-23','111210','Jurnal Penyesuaian'),('T-64604932910029','Per003','1000000','Debit','2021-01-21','512314','Jurnal Umum'),('T-65497884016021','Per002','200000','Kredit','2021-01-02','112442','Jurnal Umum'),('T-65954593213026','Per002','3000','Debit','2021-01-02','411270','Jurnal Umum'),('T-67056487320001','Per002','100000000','Kredit','2020-12-23','231200','Jurnal Umum'),('T-67253454220023','Per002','12500000','Debit','2021-01-02','111301','Jurnal Umum'),('T-70028722612021','Per002','0','Kredit','2021-01-02','111300','Jurnal Umum'),('T-70537023219035','Per003','1000000','Debit','2021-01-08','111300','Jurnal Umum'),('T-70566411922005','Per002','3000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-7142156116034','Per003','3000000','Kredit','2021-01-05','111300','Jurnal Umum'),('T-72235111920001','Per002','100000000','Debit','2020-12-23','111210','Jurnal Umum'),('T-7231326456021','Per002','0','Debit','2021-01-02','411220','Jurnal Umum'),('T-72415553921016','Per002','90000','Debit','2020-12-22','111301','Jurnal Umum'),('T-74104698621008','Per002','30000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-7492415926022','Per002','12500000','Debit','2021-01-02','111301','Jurnal Umum'),('T-7519269522013','Per002','12000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-7641655737033','Per003','2500000','Kredit','2021-01-05','111300','Jurnal Umum'),('T-78928168320014','Per002','12000','Debit','2020-12-22','111301','Jurnal Umum'),('T-79931144822014','Per002','12000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-80914471022003','Per002','2000000','Debit','2020-12-23','512327','Jurnal Penyesuaian'),('T-8120549620007','Per002','12500000','Debit','2020-12-22','111301','Jurnal Umum'),('T-82538812912025','Per002','3000','Debit','2021-01-02','411270','Jurnal Umum'),('T-83325888711035','Per003','1000000','Kredit','2021-01-08','231200','Jurnal Umum'),('T-83722251020028','Per003','7000000','Debit','2021-01-02','111300','Jurnal Penyesuaian'),('T-83963372822007','Per002','60000','Debit','2020-12-22','411270','Jurnal Umum'),('T-8523871377031','Per003','7000000','Kredit','2021-01-21','111210','Jurnal Umum'),('T-8640145514032','Per003','50000000','Debit','2021-01-05','112442','Jurnal Umum'),('T-86896373621018','Per002','600','Kredit','2020-12-22','112446','Jurnal Umum'),('T-87560120020016','Per002','90000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-875758522011','Per002','12000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-90404798122006','Per002','60000','Debit','2020-12-22','111301','Jurnal Umum'),('T-9065812020009','Per002','9000','Kredit','2020-12-22','112446','Jurnal Umum'),('T-91284804411024','Per002','3000','Kredit','2021-01-02','111301','Jurnal Umum'),('T-9768335015034','Per003','3000000','Debit','2021-01-05','112442','Jurnal Umum'),('T-98404364019027','Per003','7000000','Kredit','2021-01-02','111300','Jurnal Umum'),('T-99828911920005','Per002','','Debit','2020-12-22','411270','Jurnal Umum');
/*!40000 ALTER TABLE `tb_transaksi_keu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_transaksi_keu`
--

DROP TABLE IF EXISTS `temp_transaksi_keu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_transaksi_keu` (
  `id_transaksi` varchar(40) NOT NULL,
  `id_akun` varchar(40) DEFAULT NULL,
  `jumlah_transaksi` varchar(40) DEFAULT NULL,
  `posisi` varchar(40) DEFAULT NULL,
  `jenis_jurnal` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_transaksi_keu`
--

LOCK TABLES `temp_transaksi_keu` WRITE;
/*!40000 ALTER TABLE `temp_transaksi_keu` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp_transaksi_keu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `v_angsuran`
--

DROP TABLE IF EXISTS `v_angsuran`;
/*!50001 DROP VIEW IF EXISTS `v_angsuran`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_angsuran` (
  `id_angsuran` tinyint NOT NULL,
  `id_pengembalian` tinyint NOT NULL,
  `id_nik` tinyint NOT NULL,
  `tgl_tagihan` tinyint NOT NULL,
  `keterangan` tinyint NOT NULL,
  `jumlah` tinyint NOT NULL,
  `tgl_dibayar` tinyint NOT NULL,
  `status` tinyint NOT NULL,
  `keuntungan_bh` tinyint NOT NULL,
  `jumlah_dibayar` tinyint NOT NULL,
  `kekurangan` tinyint NOT NULL,
  `id_penangguhan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_bukti_pengumpulan`
--

DROP TABLE IF EXISTS `v_bukti_pengumpulan`;
/*!50001 DROP VIEW IF EXISTS `v_bukti_pengumpulan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_bukti_pengumpulan` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `id_berkas` tinyint NOT NULL,
  `nama_jns_pengajuan` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_bukti_terima_dana`
--

DROP TABLE IF EXISTS `v_bukti_terima_dana`;
/*!50001 DROP VIEW IF EXISTS `v_bukti_terima_dana`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_bukti_terima_dana` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `nama_penerima` tinyint NOT NULL,
  `tanggal_pencairan` tinyint NOT NULL,
  `dana_cair` tinyint NOT NULL,
  `periode` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_data_kelompok`
--

DROP TABLE IF EXISTS `v_data_kelompok`;
/*!50001 DROP VIEW IF EXISTS `v_data_kelompok`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_data_kelompok` (
  `id_kelompok` tinyint NOT NULL,
  `nama_kelompok` tinyint NOT NULL,
  `tanggal_berdiri` tinyint NOT NULL,
  `nama_desa` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_det_transaksi`
--

DROP TABLE IF EXISTS `v_det_transaksi`;
/*!50001 DROP VIEW IF EXISTS `v_det_transaksi`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_det_transaksi` (
  `id_det` tinyint NOT NULL,
  `tanggal_periode` tinyint NOT NULL,
  `id_transaksi` tinyint NOT NULL,
  `id_akun` tinyint NOT NULL,
  `nama_akun` tinyint NOT NULL,
  `jumlah_transaksi` tinyint NOT NULL,
  `posisi` tinyint NOT NULL,
  `tanggal_transaksi` tinyint NOT NULL,
  `id_per` tinyint NOT NULL,
  `tipe` tinyint NOT NULL,
  `jenis_jurnal` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_jurnal_penyesuaian`
--

DROP TABLE IF EXISTS `v_jurnal_penyesuaian`;
/*!50001 DROP VIEW IF EXISTS `v_jurnal_penyesuaian`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_jurnal_penyesuaian` (
  `id_transaksi` tinyint NOT NULL,
  `id_akun` tinyint NOT NULL,
  `nama_akun` tinyint NOT NULL,
  `jumlah_transaksi` tinyint NOT NULL,
  `posisi` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_kel`
--

DROP TABLE IF EXISTS `v_kel`;
/*!50001 DROP VIEW IF EXISTS `v_kel`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_kel` (
  `nik` tinyint NOT NULL,
  `nama` tinyint NOT NULL,
  `id_kelompok` tinyint NOT NULL,
  `nama_kelompok` tinyint NOT NULL,
  `tanggal_berdiri` tinyint NOT NULL,
  `id_desa` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_laporan_keu_debit`
--

DROP TABLE IF EXISTS `v_laporan_keu_debit`;
/*!50001 DROP VIEW IF EXISTS `v_laporan_keu_debit`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_laporan_keu_debit` (
  `no_akun` tinyint NOT NULL,
  `nama_akun` tinyint NOT NULL,
  `tipe` tinyint NOT NULL,
  `id_per` tinyint NOT NULL,
  `jml` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_laporan_keu_kredit`
--

DROP TABLE IF EXISTS `v_laporan_keu_kredit`;
/*!50001 DROP VIEW IF EXISTS `v_laporan_keu_kredit`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_laporan_keu_kredit` (
  `no_akun` tinyint NOT NULL,
  `nama_akun` tinyint NOT NULL,
  `tipe` tinyint NOT NULL,
  `periode` tinyint NOT NULL,
  `id_per` tinyint NOT NULL,
  `jml` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_login_peg`
--

DROP TABLE IF EXISTS `v_login_peg`;
/*!50001 DROP VIEW IF EXISTS `v_login_peg`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_login_peg` (
  `id_user` tinyint NOT NULL,
  `username` tinyint NOT NULL,
  `PASSWORD` tinyint NOT NULL,
  `id_jabatan` tinyint NOT NULL,
  `jabatan` tinyint NOT NULL,
  `NIK` tinyint NOT NULL,
  `nama` tinyint NOT NULL,
  `jk` tinyint NOT NULL,
  `tgl_lhr` tinyint NOT NULL,
  `alamat` tinyint NOT NULL,
  `tmp_lhr` tinyint NOT NULL,
  `pendidikan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_musyawarah_pendanaan`
--

DROP TABLE IF EXISTS `v_musyawarah_pendanaan`;
/*!50001 DROP VIEW IF EXISTS `v_musyawarah_pendanaan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_musyawarah_pendanaan` (
  `id` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `nik_penanggung` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `bagi_hasil` tinyint NOT NULL,
  `periode_pengembalian` tinyint NOT NULL,
  `id_jns_pengajuan` tinyint NOT NULL,
  `id_berkas` tinyint NOT NULL,
  `id_user` tinyint NOT NULL,
  `id_pembahasan` tinyint NOT NULL,
  `id_pencairan` tinyint NOT NULL,
  `pesan` tinyint NOT NULL,
  `progress` tinyint NOT NULL,
  `nama_pj` tinyint NOT NULL,
  `nama_ang` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_pembahasan_akhir`
--

DROP TABLE IF EXISTS `v_pembahasan_akhir`;
/*!50001 DROP VIEW IF EXISTS `v_pembahasan_akhir`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_pembahasan_akhir` (
  `id` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `nik_penanggung` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `periode_pengembalian` tinyint NOT NULL,
  `id_jns_pengajuan` tinyint NOT NULL,
  `id_berkas` tinyint NOT NULL,
  `id_user` tinyint NOT NULL,
  `id_pembahasan` tinyint NOT NULL,
  `id_pencairan` tinyint NOT NULL,
  `pesan` tinyint NOT NULL,
  `progress` tinyint NOT NULL,
  `nama_pj` tinyint NOT NULL,
  `nama_ang` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_pembahasan_awal`
--

DROP TABLE IF EXISTS `v_pembahasan_awal`;
/*!50001 DROP VIEW IF EXISTS `v_pembahasan_awal`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_pembahasan_awal` (
  `id` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `nik_penanggung` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `periode_pengembalian` tinyint NOT NULL,
  `id_jns_pengajuan` tinyint NOT NULL,
  `id_berkas` tinyint NOT NULL,
  `id_user` tinyint NOT NULL,
  `id_pembahasan` tinyint NOT NULL,
  `id_pencairan` tinyint NOT NULL,
  `pesan` tinyint NOT NULL,
  `progress` tinyint NOT NULL,
  `nama_pj` tinyint NOT NULL,
  `nama_ang` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_penangguhan`
--

DROP TABLE IF EXISTS `v_penangguhan`;
/*!50001 DROP VIEW IF EXISTS `v_penangguhan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_penangguhan` (
  `niknya` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_peng` tinyint NOT NULL,
  `jumlah_penangguhan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_pencairan`
--

DROP TABLE IF EXISTS `v_pencairan`;
/*!50001 DROP VIEW IF EXISTS `v_pencairan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_pencairan` (
  `id` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `nik_penanggung` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `periode_pengembalian` tinyint NOT NULL,
  `id_jns_pengajuan` tinyint NOT NULL,
  `id_berkas` tinyint NOT NULL,
  `id_user` tinyint NOT NULL,
  `id_pembahasan` tinyint NOT NULL,
  `id_pencairan` tinyint NOT NULL,
  `pesan` tinyint NOT NULL,
  `progress` tinyint NOT NULL,
  `tgl_pencairan` tinyint NOT NULL,
  `dana_cair` tinyint NOT NULL,
  `bagi_hasil` tinyint NOT NULL,
  `validasi` tinyint NOT NULL,
  `nama_pj` tinyint NOT NULL,
  `nama_ang` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_pengajuan_baru`
--

DROP TABLE IF EXISTS `v_pengajuan_baru`;
/*!50001 DROP VIEW IF EXISTS `v_pengajuan_baru`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_pengajuan_baru` (
  `id` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `nik_penanggung` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `periode_pengembalian` tinyint NOT NULL,
  `id_jns_pengajuan` tinyint NOT NULL,
  `id_berkas` tinyint NOT NULL,
  `id_user` tinyint NOT NULL,
  `id_pembahasan` tinyint NOT NULL,
  `id_pencairan` tinyint NOT NULL,
  `nama_pj` tinyint NOT NULL,
  `nama_ang` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_pengecekan_dir`
--

DROP TABLE IF EXISTS `v_pengecekan_dir`;
/*!50001 DROP VIEW IF EXISTS `v_pengecekan_dir`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_pengecekan_dir` (
  `id` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `nik_penanggung` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `periode_pengembalian` tinyint NOT NULL,
  `id_jns_pengajuan` tinyint NOT NULL,
  `id_berkas` tinyint NOT NULL,
  `id_user` tinyint NOT NULL,
  `id_pembahasan` tinyint NOT NULL,
  `id_pencairan` tinyint NOT NULL,
  `pesan` tinyint NOT NULL,
  `progress` tinyint NOT NULL,
  `nama_pj` tinyint NOT NULL,
  `nama_ang` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_pengembalian`
--

DROP TABLE IF EXISTS `v_pengembalian`;
/*!50001 DROP VIEW IF EXISTS `v_pengembalian`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_pengembalian` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `keterangan` tinyint NOT NULL,
  `tanggal_tagihan` tinyint NOT NULL,
  `jumlah` tinyint NOT NULL,
  `status` tinyint NOT NULL,
  `dibayar` tinyint NOT NULL,
  `tanggal_dibayar` tinyint NOT NULL,
  `id_pencairan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_pengembalian_bh`
--

DROP TABLE IF EXISTS `v_pengembalian_bh`;
/*!50001 DROP VIEW IF EXISTS `v_pengembalian_bh`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_pengembalian_bh` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `keterangan` tinyint NOT NULL,
  `id_angsuran` tinyint NOT NULL,
  `tanggal_tagihan` tinyint NOT NULL,
  `jumlah` tinyint NOT NULL,
  `jenis_pengajuan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_pengembalian_jasa`
--

DROP TABLE IF EXISTS `v_pengembalian_jasa`;
/*!50001 DROP VIEW IF EXISTS `v_pengembalian_jasa`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_pengembalian_jasa` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `keterangan` tinyint NOT NULL,
  `id_angsuran` tinyint NOT NULL,
  `tanggal_tagihan` tinyint NOT NULL,
  `jumlah` tinyint NOT NULL,
  `jenis_pengajuan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_pengembalian_pokok`
--

DROP TABLE IF EXISTS `v_pengembalian_pokok`;
/*!50001 DROP VIEW IF EXISTS `v_pengembalian_pokok`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_pengembalian_pokok` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `keterangan` tinyint NOT NULL,
  `id_angsuran` tinyint NOT NULL,
  `tanggal_tagihan` tinyint NOT NULL,
  `jumlah` tinyint NOT NULL,
  `jenis_pengajuan` tinyint NOT NULL,
  `id_pengembalian` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_periode`
--

DROP TABLE IF EXISTS `v_periode`;
/*!50001 DROP VIEW IF EXISTS `v_periode`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_periode` (
  `periode` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_periode_keu`
--

DROP TABLE IF EXISTS `v_periode_keu`;
/*!50001 DROP VIEW IF EXISTS `v_periode_keu`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_periode_keu` (
  `id_periode` tinyint NOT NULL,
  `tanggal_periode` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_riwayat_pengajuan`
--

DROP TABLE IF EXISTS `v_riwayat_pengajuan`;
/*!50001 DROP VIEW IF EXISTS `v_riwayat_pengajuan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_riwayat_pengajuan` (
  `id_pengajuan` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `id_jns_pengajuan` tinyint NOT NULL,
  `progress` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_tagihan`
--

DROP TABLE IF EXISTS `v_tagihan`;
/*!50001 DROP VIEW IF EXISTS `v_tagihan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_tagihan` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `id_peng` tinyint NOT NULL,
  `tgl_tagihan` tinyint NOT NULL,
  `id_angsuran` tinyint NOT NULL,
  `jml` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_transaksi_keu`
--

DROP TABLE IF EXISTS `v_transaksi_keu`;
/*!50001 DROP VIEW IF EXISTS `v_transaksi_keu`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_transaksi_keu` (
  `id_transaksi` tinyint NOT NULL,
  `id_akun` tinyint NOT NULL,
  `nama_akun` tinyint NOT NULL,
  `jumlah_transaksi` tinyint NOT NULL,
  `posisi` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_validasi_pencairan`
--

DROP TABLE IF EXISTS `v_validasi_pencairan`;
/*!50001 DROP VIEW IF EXISTS `v_validasi_pencairan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_validasi_pencairan` (
  `id` tinyint NOT NULL,
  `id_pengajuan` tinyint NOT NULL,
  `nik_penanggung` tinyint NOT NULL,
  `nik_anggota` tinyint NOT NULL,
  `tanggal_pengajuan` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `periode_pengembalian` tinyint NOT NULL,
  `id_jns_pengajuan` tinyint NOT NULL,
  `id_berkas` tinyint NOT NULL,
  `id_user` tinyint NOT NULL,
  `id_pembahasan` tinyint NOT NULL,
  `id_pencairan` tinyint NOT NULL,
  `pesan` tinyint NOT NULL,
  `progress` tinyint NOT NULL,
  `tgl_pencairan` tinyint NOT NULL,
  `dana_cair` tinyint NOT NULL,
  `bagi_hasil` tinyint NOT NULL,
  `validasi` tinyint NOT NULL,
  `nama_pj` tinyint NOT NULL,
  `nama_ang` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `v_verifikasi`
--

DROP TABLE IF EXISTS `v_verifikasi`;
/*!50001 DROP VIEW IF EXISTS `v_verifikasi`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `v_verifikasi` (
  `nama_desa` tinyint NOT NULL,
  `nama_kelompok` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `tanggal_lahir` tinyint NOT NULL,
  `tempat_lahir` tinyint NOT NULL,
  `alamat` tinyint NOT NULL,
  `telepon` tinyint NOT NULL,
  `status_tmp_tinggal` tinyint NOT NULL,
  `lama_tinggal` tinyint NOT NULL,
  `nik` tinyint NOT NULL,
  `jumlah_tanggungan` tinyint NOT NULL,
  `pekerjaan` tinyint NOT NULL,
  `tanggal_daftar` tinyint NOT NULL,
  `usaha_lain` tinyint NOT NULL,
  `besaran_pengajuan` tinyint NOT NULL,
  `ft_rumah` tinyint NOT NULL,
  `ft_usaha` tinyint NOT NULL,
  `ft_peta` tinyint NOT NULL,
  `rekomendasi` tinyint NOT NULL,
  `posisi_anggota` tinyint NOT NULL,
  `total_pendapatan` tinyint NOT NULL,
  `biaya_keluarga` tinyint NOT NULL,
  `biaya_pengembalian` tinyint NOT NULL,
  `biaya_lain2` tinyint NOT NULL,
  `sisa_pendapatan` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_data_kelompok`
--

DROP TABLE IF EXISTS `view_data_kelompok`;
/*!50001 DROP VIEW IF EXISTS `view_data_kelompok`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_data_kelompok` (
  `nik` tinyint NOT NULL,
  `nama` tinyint NOT NULL,
  `id_kelompok` tinyint NOT NULL,
  `nama_kelompok` tinyint NOT NULL,
  `tanggal_berdiri` tinyint NOT NULL,
  `id_desa` tinyint NOT NULL,
  `posisi` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_data_profil`
--

DROP TABLE IF EXISTS `view_data_profil`;
/*!50001 DROP VIEW IF EXISTS `view_data_profil`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_data_profil` (
  `nik` tinyint NOT NULL,
  `nama_lengkap` tinyint NOT NULL,
  `jenis_kelaminnya` tinyint NOT NULL,
  `tempat_lahir` tinyint NOT NULL,
  `tanggal_lahir` tinyint NOT NULL,
  `status_keluarganya` tinyint NOT NULL,
  `jumlah_tanggungan` tinyint NOT NULL,
  `status_tempat_tinggal` tinyint NOT NULL,
  `lama_tinggal` tinyint NOT NULL,
  `kode_pos` tinyint NOT NULL,
  `telepon` tinyint NOT NULL,
  `email` tinyint NOT NULL,
  `pekerjaan` tinyint NOT NULL,
  `jabatan` tinyint NOT NULL,
  `alamat` tinyint NOT NULL,
  `nama_desa` tinyint NOT NULL,
  `id_desa` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `view_nik_pengajuan`
--

DROP TABLE IF EXISTS `view_nik_pengajuan`;
/*!50001 DROP VIEW IF EXISTS `view_nik_pengajuan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `view_nik_pengajuan` (
  `id_kelompok` tinyint NOT NULL,
  `nik` tinyint NOT NULL,
  `nama_anggota` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'udbseme1_ta_bumdes'
--

--
-- Dumping routines for database 'udbseme1_ta_bumdes'
--
/*!50003 DROP PROCEDURE IF EXISTS `sp_aktifasi` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_aktifasi`(
	in keynya varchar (100),
	in statusnya varchar (50)
    )
BEGIN
	update tb_nasabah set akun=statusnya where tb_nasabah.`key` = keynya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_bayar_angsuran_pem_kurang` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_bayar_angsuran_pem_kurang`(
	in id_angsurannya varchar (100),
	in statusnya varchar (100),
	in jumlahnya int (30),
	in bayarnya int (30)
)
BEGIN
	update tb_angsuran set tgl_dibayar = now(), jumlah = (jumlah - bayarnya), jumlah_dibayar = bayarnya , status = statusnya where id_angsuran = id_angsurannya;	
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_bayar_angsuran_pem_lunas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_bayar_angsuran_pem_lunas`(
	in id_angsurannya varchar (100),
	in statusnya varchar (100),
	in jumlahnya varchar (30),
	in bayarnya varchar (30)
)
BEGIN
	update tb_angsuran set tgl_dibayar = now(), status = statusnya, jumlah_dibayar = bayarnya where id_angsuran = id_angsurannya;	
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_bayar_angsuran_per_kurang` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_bayar_angsuran_per_kurang`(
	in id_angsurannya varchar (100),
	in statusnya varchar (100),
	in jumlahnya int (30),
	in bayarnya int (30),
	in keuntungan int (30)
)
BEGIN
	update tb_angsuran set tgl_dibayar = now(),jumlah_dibayar = bayarnya , jumlah = (jumlah - bayarnya) , keuntungan_bh = keuntungan, status = statusnya where id_angsuran = id_angsurannya;	
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_bayar_angsuran_per_lunas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_bayar_angsuran_per_lunas`(
	in id_angsurannya varchar (100),
	in statusnya varchar (100),
	in jumlahnya int (30),
	in bayarnya int (30),
	in keuntungan int (30)
)
BEGIN
	update tb_angsuran set tgl_dibayar = now(),jumlah_dibayar = bayarnya , keuntungan_bh = keuntungan, status = statusnya where id_angsuran = id_angsurannya;	
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_del_periode` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_del_periode`(
	in id_pernya varchar (40)
    )
BEGIN
	delete from tb_periode_keu where id_periode = id_pernya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_del_rek` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_del_rek`(
    in no_rek varchar (40))
BEGIN
	delete from tb_akun_rekening where id_akun = no_rek;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_del_temp_trans` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_del_temp_trans`(
	in id_transnya varchar (40)
    )
BEGIN
	delete from temp_transaksi_keu where id_transaksi = id_transnya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_det_transaksi_keu` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_det_transaksi_keu`(
	in id_det_transnya varchar (40),
	in id_transnya varchar (40),
	in no_akunnya varchar (40),
	in jml_transaksinya varchar (50),
	in dk_nya varchar (30),
	in periodenya varchar (40),
	in tgl_transnya date,
	in jenis_jurnalnya varchar (40)
    )
BEGIN
	insert into tb_transaksi_keu (id_transaksi,id_periode,jumlah_transaksi,posisi,tanggal_transaksi,id_akun, jenis_jurnal)
	value (id_transnya,periodenya,jml_transaksinya,dk_nya,tgl_transnya,no_akunnya, jenis_jurnalnya);
	insert into det_trans_keu (id_det,id_trans) values (id_det_transnya,id_transnya);
	delete from temp_transaksi_keu where id_transaksi = id_transnya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_edit_ang_kel` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_edit_ang_kel`(
	in niknya varchar (40),
	in posisinya varchar (40)
    )
BEGIN
	update `tb_detail_kelompok` set posisi_anggota= posisinya where nik = niknya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_edit_pegawai` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_edit_pegawai`(IN id_usernya VARCHAR(30),
    IN usernamenya VARCHAR (30),
    IN passwordnya VARCHAR (100),
    IN id_jabatannya VARCHAR (2),
    IN id_identitasnya VARCHAR (10) )
BEGIN
UPDATE `data_user` SET `username` = usernamenya, PASSWORD = passwordnya, `id_jabatan` = id_jabatannya WHERE `id_user` = id_usernya;	

	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_edit_pengajuan_kel` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_edit_pengajuan_kel`(
	in besarannya varchar(40),
	in niknya varchar (40)
    )
BEGIN
	update domp_tb_pengajuan set `besaran` = besarannya where nik=niknya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_edit_periode` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_edit_periode`(
    in id_pernya varchar (40),
    in tglnya date
	)
BEGIN
	update tb_periode_keu set tb_periode_keu.`tanggal_periode` = tglnya where tb_periode_keu.`id_periode` = id_pernya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_edit_profil_peg` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_edit_profil_peg`(
	in id_usernya varchar (40),
	in niknya varchar (40),
	in namanya varchar (100),
	in jknya varchar (5),
	in tmp_lhrnya varchar (100),
	in tgl_lhrnya date,
	in alamatnya varchar (100),
	in pendidikannya varchar (20)
    )
BEGIN
	update identitas set nik=niknya, nama = namanya, jenis_kelamin = jknya,
	tanggal_lahir = tgl_lhrnya, alamat = alamatnya, tempat_lahir = tmp_lhrnya,
	pendidikan = pendidikannya where id = id_usernya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_ganti_password` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ganti_password`(
	in emailnya varchar (100),
	in keynya varchar (100)
    )
BEGIN
	update tb_nasabah set password = keynya where email = emailnya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_hapus_anggota` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_hapus_anggota`(
	in niknya varchar(40)
    )
BEGIN
	delete from `tb_detail_kelompok` where nik=niknya;
	update tb_nasabah set `id_kelompok` = null where nik = niknya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_hapus_dump_pengajuan` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_hapus_dump_pengajuan`(
	in niknya varchar (40)
    )
BEGIN
	delete from domp_tb_pengajuan where nik = niknya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_key_akun` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_key_akun`(
	in keynya varchar (100),
	in emailnya varchar (100)
    )
BEGIN
	update tb_nasabah set tb_nasabah.`key` = keynya where email = emailnya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_musy_pendanaan` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_musy_pendanaan`(
	IN id_pemb VARCHAR (60),
	IN nik_anggotanya VARCHAR (40),
	in tanggal_pen date,
	IN pesannya VARCHAR (100),
	IN dn_cairnya VARCHAR (100),
	IN tanggalnya date,
	in progressnya varchar (100),
	IN id_usernya VARCHAR (40),
	in periodenya varchar (10),
	in bagi_hasilnya varchar (40) 
    )
BEGIN
	update tb_pengajuan set pesan = pesannya, progress = progressnya, id_user = id_usernya where id_pembahasan = id_pemb;
	update tb_pembahasan set dana_cair = dn_cairnya, tgl_pencairan = tanggalnya, periode_pengembalian = periodenya, bagi_hasil = bagi_hasilnya where id_pembahasan = id_pemb;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pelunasan` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pelunasan`(
	in id_peng varchar (100),
	in niknya varchar (100),
	in id_pengajuannya varchar (100)
    )
BEGIN
	update tb_angsuran set tb_angsuran.`status` = "Lunas" where id_pengembalian = id_peng and id_nik = niknya;
	update tb_nasabah set tb_nasabah.`id_pengajuan` = null where id_pengajuan = id_pengajuannya and nik = niknya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pem_akhir` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pem_akhir`(
	in id_pemb varchar (60),
	IN nik_anggotanya VARCHAR (40),
	IN tanggalnya date,
	IN usaha_lainnya VARCHAR (100),
	IN tot_pendapatannya VARCHAR (100),
	IN biy_keluarganya VARCHAR (100),
	IN biy_pengembaliannya VARCHAR (100),
	IN biy_lainnya VARCHAR (100),
	IN sisa_pendapatannya VARCHAR (100),
	IN rekomendasinya VARCHAR (100),
	IN ft_petanya VARCHAR (100),
	IN ft_rumahnya VARCHAR (100),
	IN ft_usahanya VARCHAR (100),
	IN id_usernya VARCHAR (40),
	in progressnya varchar (40)
	 
    )
BEGIN
	update tb_pembahasan set tanggal_survey = tanggalnya, ft_peta = ft_petanya, ft_rumah = ft_rumahnya, ft_usaha = ft_usahanya,
	usaha_lain = usaha_lainnya, total_pendapatan = tot_pendapatannya, biaya_keluarga = biy_keluarganya, biaya_pengembalian = biy_pengembaliannya,
	biaya_lain2 = biy_lainnya, sisa_pendapatan = sisa_pendapatannya, rekomendasi = rekomendasinya where id_pembahasan = id_pemb;
	update tb_pengajuan set id_user = id_usernya, progress = progressnya where id_pembahasan = id_pemb;	
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pem_awal` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pem_awal`(
	in id_pemb varchar (60),
	IN id_peng VARCHAR (60),
	IN nik_anggotanya VARCHAR (40),
	IN tanggalnya date,
	in progressnya varchar (100),
	IN id_usernya VARCHAR (40) 
    )
BEGIN
	insert into tb_pembahasan (id_pembahasan,jadwal_survey)
	values (id_pemb,tanggalnya);
	update tb_pengajuan set id_pembahasan = id_pemb, progress = progressnya where id_pengajuan = id_peng and nik_anggota = nik_anggotanya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_penangguhan_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_penangguhan_id`(
	in id_penangguhannya varchar (100),
	in id_det_penangguhannya varchar (100),
	in alasannya varchar (50),
	in desk_alasan text,
	in lama_penangguhannya varchar (50),
	in tindakannya varchar (10),
	in berkasnya varchar (100),
	in id_pengajuannya varchar (100),
	in niknya varchar (100)
    )
BEGIN
	insert into tb_penangguhan (id_penangguhan,berkas) values (id_penangguhannya,berkasnya);
	insert into tb_det_penangguhan (id_det_penangguhan,id_penangguhan,alasan,desk_alasan,tgl_penangguhan,lama_penangguhan,tindakan)
	values (id_det_penangguhannya,id_penangguhannya,alasannya,desk_alasan,now(),lama_penangguhannya,tindakannya);
	update tb_pengajuan set id_penangguhan = id_penangguhannya where id_pengajuan = id_pengajuannya and nik_anggota = niknya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_penangguhan_tanpa_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_penangguhan_tanpa_id`(
	in id_det_penangguhannya varchar (100),
	in id_penangguhannya varchar (100),
	in alasannya varchar (50),
	in desk_alasan text,
	in lama_penangguhannya varchar (50),
	in tindakannya varchar (10)
    )
BEGIN

	insert into tb_det_penangguhan (id_det_penangguhan,id_penangguhan,alasan,desk_alasan,tgl_penangguhan,lama_penangguhan,tindakan)
	values (id_det_penangguhannya,id_penangguhannya,alasannya,desk_alasan,now(),lama_penangguhannya,tindakannya);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_pencairan` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pencairan`(
	in id_pen varchar (50),
	IN id_pengnya varchar (50),
	in nik_ang varchar (50),
	in penerimanya varchar (100)
    )
BEGIN
	insert into tb_pencairan (id_pencairan,tanggal_pencairan,nama_penerima) values (id_pen,now(),penerimanya);
	update tb_pengajuan set id_pencairan = id_pen where id_pengajuan = id_pengnya and nik_anggota = nik_ang;
	update tb_pengembalian set id_pencairan = id_pen where id_pengajuan = id_pengnya and id_pengembalian regexp nik_ang;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_per_keu` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_per_keu`(
    in id_pernya varchar (30),
    in tanggal_per date
    )
BEGIN
	insert into tb_periode_keu (id_periode,tanggal_periode) values (id_pernya, tanggal_per);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_register_nas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_register_nas`(in niknya varchar(20),
	in usernamenya varchar(20),
	IN passwordnya varchar(100),
	in emailnya varchar(40),
	in statusnya varchar(3),
	in keynya varchar(100)
    )
BEGIN
	insert into tb_nasabah (nik,username,password,email,status,tb_nasabah.key) 
	values (niknya,usernamenya,passwordnya,emailnya,statusnya,keynya);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_anggota_kel` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_anggota_kel`(
	IN niknya VARCHAR (50),
	IN nama_lengkapnya VARCHAR (100),
	IN jenis_kelaminnya VARCHAR (5),
	IN tempat_lahirnya VARCHAR (100),
	IN tanggal_lahirnya DATE,
	IN status_keluarganya VARCHAR (50),
	IN jumlah_tanggungannya VARCHAR (5),
	IN status_tmp_tinggalnya VARCHAR (5),
	IN lama_tinggalnya VARCHAR (20),
	IN kode_posnya VARCHAR (30),
	IN teleponnya VARCHAR (30),
	IN pekerjaannya VARCHAR (100),
	IN jabatannya VARCHAR (100),
	IN alamatnya TEXT,
	IN desanya VARCHAR(3),
	in emailnya varchar (100),
	in passwordnya varchar (100),
	in id_kelompoknya varchar (40),
	in usernamenya varchar (100),
	in posisinya varchar (100),
	in keynya varchar (100)
	
    )
BEGIN
	insert into tb_nasabah (nik,nama_lengkap,jenis_kelamin,tempat_lahir,tanggal_lahir,`status_keluarga`,jumlah_tanggungan,
	status_tmp_tinggal,lama_tinggal,kode_pos,telepon,email,pekerjaan,jabatan,alamat,id_kelompok,id_desa,username,password,tb_nasabah.`key`) values 
	(niknya,nama_lengkapnya,jenis_kelaminnya,tempat_lahirnya,tanggal_lahirnya,status_keluarganya,jumlah_tanggungannya,
	status_tmp_tinggalnya,lama_tinggalnya,kode_posnya,teleponnya,emailnya,pekerjaannya,jabatannya,alamatnya,id_kelompoknya,desanya,
	usernamenya,passwordnya,keynya);
	insert into tb_detail_kelompok (id_kelompok,nama_anggota,posisi_anggota,nik) values
	(id_kelompoknya,nama_lengkapnya,posisinya,niknya);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_anggota_kel_1` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_anggota_kel_1`(
	in niknya varchar (40),
	in id_kelompoknya varchar (40),
	in nama_anggotanya varchar (100),
	in posisinya varchar (100)
    )
BEGIN
	insert into tb_detail_kelompok (id_kelompok,nama_anggota,posisi_anggota,nik)
	values (id_kelompoknya,nama_anggotanya,posisinya,niknya);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_bulan` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_bulan`(
	in id_angsurannya varchar (100),
	in tanggal_tagihan date,
	in bln int (10)
    )
BEGIN
	UPDATE `tb_angsuran` SET tgl_tagihan = DATE_ADD(tgl_tagihan, INTERVAL bln MONTH) WHERE id_angsuran = id_angsurannya;
	
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_bulan2` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_bulan2`(
	in id_angsurannya varchar (100),
	in tanggal_tagihan date,
	in bln int (10),
	in tgl_terakhir date
    )
BEGIN
	UPDATE `tb_angsuran` SET tgl_tagihan = DATE_ADD(tgl_tagihan, INTERVAL bln MONTH) WHERE id_angsuran = id_angsurannya and keterangan = "pokok";
	update tb_angsuran set tb_angsuran.`status` = "lunas" where id_angsuran = id_angsurannya and tgl_tagihan <= tgl_terakhir ;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_det_peng` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_det_peng`(
    in nik_pjnya varchar (40),
    in id_kel varchar (40),
    in id_peng varchar (40),
    in besarannya varchar (40),
    in nik_ang varchar (40)		
    )
BEGIN
	insert into domp_tb_pengajuan (nik,besaran,id_kelompok,id_pengajuan,nik_pj) values (nik_ang,besarannya,id_kel,id_peng,nik_pjnya);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_pegawai` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_pegawai`(in id_usernya varchar(30),
    in usernamenya varchar (30),
    in passwordnya varchar (100),
    in id_jabatannya varchar (2),
    in id_identitasnya varchar (10) )
BEGIN
	insert into identitas (id) values (id_identitasnya);
	insert into data_user (id_user,username,password,id_jabatan,id_identitas) values (id_usernya,usernamenya,passwordnya,id_jabatannya,id_identitasnya);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_pengajuan` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_pengajuan`(
	in niknya_ang varchar (40),
	in id_pengajuannya varchar (40),
	in besarannya varchar (40),
	in nik_pjnya varchar (40),
	in berkasnya varchar (40),
	in periodenya varchar (40)
    )
BEGIN
	
	insert into `tb_pengajuan` (id_pengajuan,nik_penanggung,besaran_pengajuan,periode_pengembalian,id_jns_pengajuan,nik_anggota,id_berkas)
	values (id_pengajuannya,nik_pjnya,besarannya,periodenya,1,niknya_ang,berkasnya);
	update `tb_nasabah` set `id_pengajuan` = id_pengajuannya where nik= niknya_ang;
	delete from domp_tb_pengajuan where nik_pj = nik_pjnya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_pengajuan_per` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_pengajuan_per`(
	IN id_pengajuannya VARCHAR (40),
	IN besarannya VARCHAR (40),
	in bagi_hasilnya varchar (40),
	IN nik_nya VARCHAR (40),
	IN berkasnya VARCHAR (40),
	IN periodenya VARCHAR (40)
    )
BEGIN
	INSERT INTO `tb_pengajuan` (id_pengajuan,nik_penanggung,besaran_pengajuan,bagi_hasil,periode_pengembalian,id_jns_pengajuan,nik_anggota,id_berkas)
	VALUES (id_pengajuannya,nik_nya,besarannya,bagi_hasilnya,periodenya,2,nik_nya,berkasnya);
	UPDATE `tb_nasabah` SET `id_pengajuan` = id_pengajuannya WHERE nik= nik_nya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_rekening` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_rekening`(
	in no_akunnya varchar (40),
	in namanya varchar (40),
	in tipenya varchar (40)
    )
BEGIN
	insert into tb_akun_rekening (id_akun,nama_akun,tipe_akun)
	values (no_akunnya,namanya,tipenya);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_tambah_transaksi` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_tambah_transaksi`(
	in id_transnya varchar (30),
	in id_akunnya varchar (30),
	in jumlahnya varchar (40),
	in keterangannya varchar (30),
	in jurnal_umumnya varchar (40)
    )
BEGIN
	insert into temp_transaksi_keu (id_transaksi,id_akun,jumlah_transaksi,posisi,jenis_jurnal)
	values (id_transnya,id_akunnya,jumlahnya,keterangannya, jurnal_umumnya);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_kel` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_kel`(in id_kel varchar (40),
    in nama_kelompoknya varchar (100),
    in tanggal_berdirinya date,
    in id_desanya varchar (10),
    in niknya varchar (30)    
    
    )
BEGIN
	insert into `tb_kelompok` (`id_kelompok`,`nama_kelompok`,`tanggal_berdiri`,`id_desa`) 
	values (id_kel,nama_kelompoknya,tanggal_berdirinya,id_desanya);
	update tb_nasabah set `tb_nasabah`.`id_kelompok` = id_kel where nik= niknya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_password` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_password`(
	in passnya varchar (100),
	in keynya varchar (100)
    )
BEGIN
	update tb_nasabah set password = passnya where password = keynya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_pengembalian` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_pengembalian`( 
in id_pengembaliannya varchar (100),
in id_peng varchar (100))
BEGIN
	insert into tb_pengembalian (id_pengembalian,id_pengajuan) values ( id_pengembaliannya,id_peng);
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_rekening` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_rekening`(
	in no_reknya varchar (50),
	in keterangannya varchar (100),
	in tipenya varchar (50)
    )
BEGIN
	update tb_akun_rekening set  nama_akun = keterangannya, tipe_akun = tipenya where id_akun = no_reknya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_seleksi_berkas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_seleksi_berkas`(
	in id_peng varchar (60),
	in nik_anggotanya varchar (40),
	in pesannya varchar (100),
	in progressnya varchar (100),
	in id_usernya varchar (40) 
    )
BEGIN
	update tb_pengajuan set id_user = id_usernya, pesan = pesannya, progress = progressnya
	where id_pengajuan = id_peng and nik_anggota = 	nik_anggotanya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_status_validasi` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_status_validasi`(in id_pem varchar (100))
BEGIN
	update tb_pembahasan set validasi = "sudah" where id_pembahasan = id_pem;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_update_tidak_lolos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_tidak_lolos`(
	in id_pengnya varchar (100),
	in niknya varchar (100)
    )
BEGIN
	update tb_nasabah set id_pengajuan = null where nik = niknya and id_pengajuan = id_pengnya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `update_profil_nasabah` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = latin1 */ ;
/*!50003 SET character_set_results = latin1 */ ;
/*!50003 SET collation_connection  = latin1_swedish_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_profil_nasabah`(
	in niknya varchar (50),
	in nama_lengkapnya varchar (100),
	in jenis_kelaminnya varchar (5),
	in tempat_lahirnya varchar (100),
	in tanggal_lahirnya date,
	in status_keluarganya varchar (50),
	in jumlah_tanggungannya varchar (5),
	in status_tmp_tinggalnya varchar (5),
	in lama_tinggalnya varchar (20),
	in kode_posnya varchar (30),
	in teleponnya varchar (30),
	in pekerjaannya varchar (100),
	in jabatannya varchar (100),
	in alamatnya text,
	in desanya varchar(3)
	
    )
BEGIN
	update `tb_nasabah` set `nama_lengkap` = nama_lengkapnya, jenis_kelamin = jenis_kelaminnya, tempat_lahir = tempat_lahirnya,
	tanggal_lahir=tanggal_lahirnya, jumlah_tanggungan= jumlah_tanggungannya, status_tmp_tinggal = status_tmp_tinggalnya, lama_tinggal=lama_tinggalnya,
	kode_pos= kode_posnya, telepon=teleponnya,status_keluarga=status_keluarganya, pekerjaan=pekerjaannya, jabatan=jabatannya, alamat=alamatnya ,`tanggal_update` = now(), `id_desa` = desanya
	where nik = niknya;
	END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Current Database: `udbseme1_ta_bumdes`
--


--
-- Final view structure for view `cek_debit_jurnal_penyesuaian`
--

/*!50001 DROP TABLE IF EXISTS `cek_debit_jurnal_penyesuaian`*/;
/*!50001 DROP VIEW IF EXISTS `cek_debit_jurnal_penyesuaian`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_debit_jurnal_penyesuaian` AS (select distinct `temp_transaksi_keu`.`posisi` AS `posisi`,(select sum(`temp_transaksi_keu`.`jumlah_transaksi`) from `temp_transaksi_keu` where `temp_transaksi_keu`.`posisi` = 'debit') AS `jumlah` from `temp_transaksi_keu` where `temp_transaksi_keu`.`posisi` = 'debit' and `temp_transaksi_keu`.`jenis_jurnal` = 'Jurnal Penyesuaian') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_email`
--

/*!50001 DROP TABLE IF EXISTS `cek_email`*/;
/*!50001 DROP VIEW IF EXISTS `cek_email`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_email` AS (select `tb_nasabah`.`email` AS `email` from `tb_nasabah`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_id_penangguhan`
--

/*!50001 DROP TABLE IF EXISTS `cek_id_penangguhan`*/;
/*!50001 DROP VIEW IF EXISTS `cek_id_penangguhan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_id_penangguhan` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_pengajuan`.`id_penangguhan` AS `id_penangguhan` from (`tb_nasabah` join `tb_pengajuan`) where `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` and `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_id_pencairan`
--

/*!50001 DROP TABLE IF EXISTS `cek_id_pencairan`*/;
/*!50001 DROP VIEW IF EXISTS `cek_id_pencairan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_id_pencairan` AS select `tb_nasabah`.`nik` AS `nik`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`id_pencairan` AS `id_pencairan` from (`tb_nasabah` join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_kredit_jurnal_penyesuaian`
--

/*!50001 DROP TABLE IF EXISTS `cek_kredit_jurnal_penyesuaian`*/;
/*!50001 DROP VIEW IF EXISTS `cek_kredit_jurnal_penyesuaian`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_kredit_jurnal_penyesuaian` AS (select distinct `temp_transaksi_keu`.`posisi` AS `posisi`,(select sum(`temp_transaksi_keu`.`jumlah_transaksi`) from `temp_transaksi_keu` where `temp_transaksi_keu`.`posisi` = 'kredit') AS `jumlah` from `temp_transaksi_keu` where `temp_transaksi_keu`.`posisi` = 'kredit' and `temp_transaksi_keu`.`jenis_jurnal` = 'Jurnal Penyesuaian') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_nik_exist`
--

/*!50001 DROP TABLE IF EXISTS `cek_nik_exist`*/;
/*!50001 DROP VIEW IF EXISTS `cek_nik_exist`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_nik_exist` AS (select `tb_nasabah`.`nik` AS `nik` from `tb_nasabah`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_pengajuan_nik_exist`
--

/*!50001 DROP TABLE IF EXISTS `cek_pengajuan_nik_exist`*/;
/*!50001 DROP VIEW IF EXISTS `cek_pengajuan_nik_exist`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_pengajuan_nik_exist` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`id_pengajuan` AS `id_pengajuan` from `tb_nasabah`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_profil`
--

/*!50001 DROP TABLE IF EXISTS `cek_profil`*/;
/*!50001 DROP VIEW IF EXISTS `cek_profil`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_profil` AS (select `tb_nasabah`.`id` AS `id`,`tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_nasabah`.`jenis_kelamin` AS `jenis_kelamin`,`tb_nasabah`.`tempat_lahir` AS `tempat_lahir`,`tb_nasabah`.`tanggal_lahir` AS `tanggal_lahir`,`tb_nasabah`.`jumlah_tanggungan` AS `jumlah_tanggungan`,`tb_nasabah`.`status_tmp_tinggal` AS `status_tmp_tinggal`,`tb_nasabah`.`lama_tinggal` AS `lama_tinggal`,`tb_nasabah`.`kode_pos` AS `kode_pos`,`tb_nasabah`.`telepon` AS `telepon`,`tb_nasabah`.`email` AS `email`,`tb_nasabah`.`pekerjaan` AS `pekerjaan`,`tb_nasabah`.`jabatan` AS `jabatan`,`tb_nasabah`.`alamat` AS `alamat`,`tb_nasabah`.`id_kelompok` AS `id_kelompok`,`tb_nasabah`.`id_desa` AS `id_desa`,`tb_nasabah`.`id_pengajuan` AS `id_pengajuan`,`tb_nasabah`.`tanggal_daftar` AS `tanggal_daftar`,`tb_nasabah`.`username` AS `username`,`tb_nasabah`.`password` AS `password`,`tb_nasabah`.`status` AS `status` from `tb_nasabah` where `tb_nasabah`.`nama_lengkap` is null and `tb_nasabah`.`jenis_kelamin` is null and `tb_nasabah`.`tempat_lahir` is null and `tb_nasabah`.`tanggal_lahir` is null and `tb_nasabah`.`jumlah_tanggungan` is null and `tb_nasabah`.`status_tmp_tinggal` is null and `tb_nasabah`.`lama_tinggal` is null and `tb_nasabah`.`kode_pos` is null and `tb_nasabah`.`telepon` is null and `tb_nasabah`.`pekerjaan` is null and `tb_nasabah`.`jabatan` is null and `tb_nasabah`.`alamat` is null and `tb_nasabah`.`id_kelompok` is null and `tb_nasabah`.`id_desa` is null and `tb_nasabah`.`id_pengajuan` is null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_profil_data_diri`
--

/*!50001 DROP TABLE IF EXISTS `cek_profil_data_diri`*/;
/*!50001 DROP VIEW IF EXISTS `cek_profil_data_diri`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_profil_data_diri` AS (select `tb_nasabah`.`nik` AS `nik`,if(`tb_nasabah`.`nama_lengkap` is null or `tb_nasabah`.`jenis_kelamin` is null or `tb_nasabah`.`tempat_lahir` is null or `tb_nasabah`.`jumlah_tanggungan` is null or `tb_nasabah`.`status_tmp_tinggal` is null or `tb_nasabah`.`lama_tinggal` is null or `tb_nasabah`.`kode_pos` is null or `tb_nasabah`.`telepon` is null or `tb_nasabah`.`email` is null or `tb_nasabah`.`pekerjaan` is null or `tb_nasabah`.`jabatan` is null,'0','1') AS `STATUS`,if(`tb_nasabah`.`id_kelompok` is null,0,1) AS `status_kelompok` from `tb_nasabah`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_profil_pekerjaan`
--

/*!50001 DROP TABLE IF EXISTS `cek_profil_pekerjaan`*/;
/*!50001 DROP VIEW IF EXISTS `cek_profil_pekerjaan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_profil_pekerjaan` AS (select `tb_nasabah`.`nik` AS `nik`,if(`tb_nasabah`.`pekerjaan` is null or `tb_nasabah`.`jabatan` is null,'0','1') AS `status` from `tb_nasabah`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_temp_trans_debit`
--

/*!50001 DROP TABLE IF EXISTS `cek_temp_trans_debit`*/;
/*!50001 DROP VIEW IF EXISTS `cek_temp_trans_debit`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_temp_trans_debit` AS (select distinct `temp_transaksi_keu`.`posisi` AS `posisi`,(select sum(`temp_transaksi_keu`.`jumlah_transaksi`) from `temp_transaksi_keu` where `temp_transaksi_keu`.`posisi` = 'debit') AS `jumlah` from `temp_transaksi_keu` where `temp_transaksi_keu`.`posisi` = 'debit' and `temp_transaksi_keu`.`jenis_jurnal` = 'Jurnal Umum') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_temp_trans_kredit`
--

/*!50001 DROP TABLE IF EXISTS `cek_temp_trans_kredit`*/;
/*!50001 DROP VIEW IF EXISTS `cek_temp_trans_kredit`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_temp_trans_kredit` AS (select distinct `temp_transaksi_keu`.`posisi` AS `posisi`,(select sum(`temp_transaksi_keu`.`jumlah_transaksi`) from `temp_transaksi_keu` where `temp_transaksi_keu`.`posisi` = 'kredit') AS `jumlah` from `temp_transaksi_keu` where `temp_transaksi_keu`.`posisi` = 'kredit' and `temp_transaksi_keu`.`jenis_jurnal` = 'Jurnal Umum') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `cek_username`
--

/*!50001 DROP TABLE IF EXISTS `cek_username`*/;
/*!50001 DROP VIEW IF EXISTS `cek_username`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `cek_username` AS select `tb_nasabah`.`username` AS `username` from `tb_nasabah` union select `data_user`.`username` AS `username` from `data_user` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `daftar_penangguhan`
--

/*!50001 DROP TABLE IF EXISTS `daftar_penangguhan`*/;
/*!50001 DROP VIEW IF EXISTS `daftar_penangguhan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `daftar_penangguhan` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_penangguhan`.`id_penangguhan` AS `id_penangguhan`,`tb_det_penangguhan`.`id_det_penangguhan` AS `id_det_penangguhan`,`tb_det_penangguhan`.`alasan` AS `alasan`,`tb_det_penangguhan`.`lama_penangguhan` AS `lama_penangguhan`,`tb_det_penangguhan`.`tindakan` AS `tindakan` from (((`tb_nasabah` join `tb_pengajuan`) join `tb_penangguhan`) join `tb_det_penangguhan`) where `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` and `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_penangguhan`.`id_penangguhan` = `tb_pengajuan`.`id_penangguhan` and `tb_det_penangguhan`.`id_penangguhan` = `tb_penangguhan`.`id_penangguhan`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `data_nasabah`
--

/*!50001 DROP TABLE IF EXISTS `data_nasabah`*/;
/*!50001 DROP VIEW IF EXISTS `data_nasabah`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `data_nasabah` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,if(`tb_nasabah`.`jenis_kelamin` = 1,'Laki - Laki','Perempuan') AS `jk`,`tb_nasabah`.`tempat_lahir` AS `tempat_lahir`,`tb_nasabah`.`tanggal_lahir` AS `tanggal_lahir`,if(`tb_nasabah`.`status_keluarga` = 1,'Kawin','Janda/Duda') AS `status_keluarga`,`tb_nasabah`.`jumlah_tanggungan` AS `jumlah_tanggungan`,`tb_nasabah`.`lama_tinggal` AS `lama_tinggal`,`tb_nasabah`.`kode_pos` AS `kode_pos`,`tb_nasabah`.`telepon` AS `telepon`,`tb_nasabah`.`email` AS `email`,`tb_nasabah`.`pekerjaan` AS `pekerjaan`,`tb_nasabah`.`alamat` AS `alamat`,if(`tb_nasabah`.`status_tmp_tinggal` = 1,'Rumah Sendiri',if(`tb_nasabah`.`status_tmp_tinggal` = 2,'Rumah Orang Tua',if(`tb_nasabah`.`status_tmp_tinggal`,'Kontrak/Kos','kosong'))) AS `status_tmp_tinggal`,`tb_desa`.`nama_desa` AS `nama_desa` from (`tb_nasabah` join `tb_desa`) where `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `dt_sem_peng`
--

/*!50001 DROP TABLE IF EXISTS `dt_sem_peng`*/;
/*!50001 DROP VIEW IF EXISTS `dt_sem_peng`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `dt_sem_peng` AS (select `domp_tb_pengajuan`.`id_kelompok` AS `id_kelompok`,`domp_tb_pengajuan`.`nik` AS `nik`,`domp_tb_pengajuan`.`besaran` AS `besaran`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap` from (`tb_nasabah` join `domp_tb_pengajuan`) where `tb_nasabah`.`nik` = `domp_tb_pengajuan`.`nik`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `email_lupa_password`
--

/*!50001 DROP TABLE IF EXISTS `email_lupa_password`*/;
/*!50001 DROP VIEW IF EXISTS `email_lupa_password`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `email_lupa_password` AS (select `tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_nasabah`.`email` AS `email` from `tb_nasabah`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `grafik_pengajuan`
--

/*!50001 DROP TABLE IF EXISTS `grafik_pengajuan`*/;
/*!50001 DROP VIEW IF EXISTS `grafik_pengajuan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `grafik_pengajuan` AS select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '1' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '2' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '3' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '4' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '5' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '6' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '7' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '8' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '9' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '10' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '11' union select count(`tb_nasabah`.`nik`) AS `jumlah`,`tb_desa`.`nama_desa` AS `nama` from ((`tb_nasabah` join `tb_desa`) join `tb_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa` and `tb_desa`.`id_desa` = '12' */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `id_det_trans`
--

/*!50001 DROP TABLE IF EXISTS `id_det_trans`*/;
/*!50001 DROP VIEW IF EXISTS `id_det_trans`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `id_det_trans` AS (select right(`det_trans_keu`.`id_det`,3) AS `id_det_trans` from `det_trans_keu` order by right(`det_trans_keu`.`id_det`,3)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `id_pengajuan`
--

/*!50001 DROP TABLE IF EXISTS `id_pengajuan`*/;
/*!50001 DROP VIEW IF EXISTS `id_pengajuan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `id_pengajuan` AS (select right(`tb_pengajuan`.`id_pengajuan`,3) AS `id_pengajuan` from `tb_pengajuan` order by right(`tb_pengajuan`.`id_pengajuan`,3)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `id_per_keu`
--

/*!50001 DROP TABLE IF EXISTS `id_per_keu`*/;
/*!50001 DROP VIEW IF EXISTS `id_per_keu`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `id_per_keu` AS (select right(`tb_periode_keu`.`id_periode`,3) AS `id_periode` from `tb_periode_keu` order by right(`tb_periode_keu`.`id_periode`,3)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `id_transaksi`
--

/*!50001 DROP TABLE IF EXISTS `id_transaksi`*/;
/*!50001 DROP VIEW IF EXISTS `id_transaksi`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `id_transaksi` AS (select right(`tb_transaksi_keu`.`id_transaksi`,3) AS `id_trans` from `tb_transaksi_keu` order by right(`tb_transaksi_keu`.`id_transaksi`,3)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `id_user`
--

/*!50001 DROP TABLE IF EXISTS `id_user`*/;
/*!50001 DROP VIEW IF EXISTS `id_user`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `id_user` AS (select right(`data_user`.`id_user`,3) AS `id_user` from `data_user` order by right(`data_user`.`id_user`,3)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `jurnal_penyesuaian`
--

/*!50001 DROP TABLE IF EXISTS `jurnal_penyesuaian`*/;
/*!50001 DROP VIEW IF EXISTS `jurnal_penyesuaian`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `jurnal_penyesuaian` AS (select `temp_transaksi_keu`.`id_transaksi` AS `id_transaksi`,`temp_transaksi_keu`.`id_akun` AS `id_akun`,`temp_transaksi_keu`.`jumlah_transaksi` AS `jumlah_transaksi`,`temp_transaksi_keu`.`posisi` AS `posisi`,`temp_transaksi_keu`.`jenis_jurnal` AS `jenis_jurnal` from `temp_transaksi_keu` where `temp_transaksi_keu`.`jenis_jurnal` = 'jurnal penyesuaian') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `jurnal_umum`
--

/*!50001 DROP TABLE IF EXISTS `jurnal_umum`*/;
/*!50001 DROP VIEW IF EXISTS `jurnal_umum`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `jurnal_umum` AS (select `temp_transaksi_keu`.`id_transaksi` AS `id_transaksi`,`temp_transaksi_keu`.`id_akun` AS `id_akun`,`temp_transaksi_keu`.`jumlah_transaksi` AS `jumlah_transaksi`,`temp_transaksi_keu`.`posisi` AS `posisi`,`temp_transaksi_keu`.`jenis_jurnal` AS `jenis_jurnal` from `temp_transaksi_keu` where `temp_transaksi_keu`.`jenis_jurnal` = 'jurnal umum') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `notifikasi_administrasi`
--

/*!50001 DROP TABLE IF EXISTS `notifikasi_administrasi`*/;
/*!50001 DROP VIEW IF EXISTS `notifikasi_administrasi`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `notifikasi_administrasi` AS select `v_pengajuan_baru`.`id_pengajuan` AS `id_pengajuan`,`v_pengajuan_baru`.`nik_anggota` AS `nik_anggota`,`v_pengajuan_baru`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`v_pengajuan_baru`.`besaran_pengajuan` AS `besaran_pengajuan`,`v_pengajuan_baru`.`nama_ang` AS `nama_ang`,'administrasi_pegawai/pengajuan_baru' AS `link`,'pengajuan baru' AS `jenis` from `v_pengajuan_baru` union select `v_pembahasan_awal`.`id_pengajuan` AS `id_pengajuan`,`v_pembahasan_awal`.`nik_anggota` AS `nik_anggota`,`v_pembahasan_awal`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`v_pembahasan_awal`.`besaran_pengajuan` AS `besaran_pengajuan`,`v_pembahasan_awal`.`nama_ang` AS `nama_ang`,'administrasi_pegawai/pembahasan' AS `link`,'pembahasan awal' AS `jenis` from `v_pembahasan_awal` union select `v_pembahasan_akhir`.`id_pengajuan` AS `id_pengajuan`,`v_pembahasan_akhir`.`nik_anggota` AS `nik_anggota`,`v_pembahasan_akhir`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`v_pembahasan_akhir`.`besaran_pengajuan` AS `besaran_pengajuan`,`v_pembahasan_akhir`.`nama_ang` AS `nama_ang`,'administrasi_pegawai/pembahasan_akhir' AS `link`,'pembahasan akhir' AS `jenis` from `v_pembahasan_akhir` union select `v_musyawarah_pendanaan`.`id_pengajuan` AS `id_pengajuan`,`v_musyawarah_pendanaan`.`nik_anggota` AS `nik_anggota`,`v_musyawarah_pendanaan`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`v_musyawarah_pendanaan`.`besaran_pengajuan` AS `besaran_pengajuan`,`v_musyawarah_pendanaan`.`nama_ang` AS `nama_ang`,'administrasi_pegawai/musyawarah_pendanaan' AS `link`,'musyawarah pendanaan' AS `jenis` from `v_musyawarah_pendanaan` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `notifikasi_direktur`
--

/*!50001 DROP TABLE IF EXISTS `notifikasi_direktur`*/;
/*!50001 DROP VIEW IF EXISTS `notifikasi_direktur`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `notifikasi_direktur` AS (select `v_pengecekan_dir`.`id_pengajuan` AS `id_pengajuan`,`v_pengecekan_dir`.`nik_anggota` AS `nik_anggota`,`v_pengecekan_dir`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`v_pengecekan_dir`.`besaran_pengajuan` AS `besaran_pengajuan`,`v_pengecekan_dir`.`nama_ang` AS `nama_ang`,'direktur_pegawai/pengajuan_baru' AS `link`,'pengajuan baru' AS `jenis` from `v_pengecekan_dir`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_angsuran`
--

/*!50001 DROP TABLE IF EXISTS `v_angsuran`*/;
/*!50001 DROP VIEW IF EXISTS `v_angsuran`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_angsuran` AS (select `tb_angsuran`.`id_angsuran` AS `id_angsuran`,`tb_angsuran`.`id_pengembalian` AS `id_pengembalian`,`tb_angsuran`.`id_nik` AS `id_nik`,`tb_angsuran`.`tgl_tagihan` AS `tgl_tagihan`,`tb_angsuran`.`keterangan` AS `keterangan`,`tb_angsuran`.`jumlah` AS `jumlah`,`tb_angsuran`.`tgl_dibayar` AS `tgl_dibayar`,`tb_angsuran`.`status` AS `status`,`tb_angsuran`.`keuntungan_bh` AS `keuntungan_bh`,`tb_angsuran`.`jumlah_dibayar` AS `jumlah_dibayar`,`tb_angsuran`.`kekurangan` AS `kekurangan`,`tb_angsuran`.`id_penangguhan` AS `id_penangguhan` from `tb_angsuran` where `tb_angsuran`.`status` = 'belum') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_bukti_pengumpulan`
--

/*!50001 DROP TABLE IF EXISTS `v_bukti_pengumpulan`*/;
/*!50001 DROP VIEW IF EXISTS `v_bukti_pengumpulan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_bukti_pengumpulan` AS select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_nasabah`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`id_berkas` AS `id_berkas`,`tb_jns_pengajuan`.`nama_jns_pengajuan` AS `nama_jns_pengajuan`,`tb_pengajuan`.`tanggal_pengajuan` AS `tanggal_pengajuan` from ((`tb_nasabah` join `tb_pengajuan`) join `tb_jns_pengajuan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_jns_pengajuan`.`id_jns_pengajuan` = `tb_pengajuan`.`id_jns_pengajuan` order by `tb_pengajuan`.`tanggal_pengajuan` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_bukti_terima_dana`
--

/*!50001 DROP TABLE IF EXISTS `v_bukti_terima_dana`*/;
/*!50001 DROP VIEW IF EXISTS `v_bukti_terima_dana`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_bukti_terima_dana` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pencairan`.`nama_penerima` AS `nama_penerima`,`tb_pencairan`.`tanggal_pencairan` AS `tanggal_pencairan`,`tb_pembahasan`.`dana_cair` AS `dana_cair`,if(`tb_pembahasan`.`periode_pengembalian` = '',12,`tb_pengajuan`.`periode_pengembalian`) AS `periode` from (((`tb_nasabah` join `tb_pengajuan`) join `tb_pencairan`) join `tb_pembahasan`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` and `tb_pengajuan`.`id_pembahasan` = `tb_pembahasan`.`id_pembahasan` and `tb_pengajuan`.`id_pencairan` = `tb_pencairan`.`id_pencairan`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_data_kelompok`
--

/*!50001 DROP TABLE IF EXISTS `v_data_kelompok`*/;
/*!50001 DROP VIEW IF EXISTS `v_data_kelompok`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_data_kelompok` AS (select `tb_kelompok`.`id_kelompok` AS `id_kelompok`,`tb_kelompok`.`nama_kelompok` AS `nama_kelompok`,`tb_kelompok`.`tanggal_berdiri` AS `tanggal_berdiri`,`tb_desa`.`nama_desa` AS `nama_desa` from (`tb_kelompok` join `tb_desa`) where `tb_kelompok`.`id_desa` = `tb_desa`.`id_desa`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_det_transaksi`
--

/*!50001 DROP TABLE IF EXISTS `v_det_transaksi`*/;
/*!50001 DROP VIEW IF EXISTS `v_det_transaksi`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_det_transaksi` AS (select `det_trans_keu`.`id_det` AS `id_det`,`tb_periode_keu`.`tanggal_periode` AS `tanggal_periode`,`tb_transaksi_keu`.`id_transaksi` AS `id_transaksi`,`tb_transaksi_keu`.`id_akun` AS `id_akun`,`tb_akun_rekening`.`nama_akun` AS `nama_akun`,`tb_transaksi_keu`.`jumlah_transaksi` AS `jumlah_transaksi`,`tb_transaksi_keu`.`posisi` AS `posisi`,`tb_transaksi_keu`.`tanggal_transaksi` AS `tanggal_transaksi`,`tb_periode_keu`.`id_periode` AS `id_per`,`tb_akun_rekening`.`tipe_akun` AS `tipe`,`tb_transaksi_keu`.`jenis_jurnal` AS `jenis_jurnal` from (((`tb_transaksi_keu` join `tb_akun_rekening`) join `tb_periode_keu`) join `det_trans_keu`) where `tb_transaksi_keu`.`id_akun` = `tb_akun_rekening`.`id_akun` and `tb_transaksi_keu`.`id_periode` = `tb_periode_keu`.`id_periode` and `tb_transaksi_keu`.`id_transaksi` = `det_trans_keu`.`id_trans`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_jurnal_penyesuaian`
--

/*!50001 DROP TABLE IF EXISTS `v_jurnal_penyesuaian`*/;
/*!50001 DROP VIEW IF EXISTS `v_jurnal_penyesuaian`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_jurnal_penyesuaian` AS (select `temp_transaksi_keu`.`id_transaksi` AS `id_transaksi`,`tb_akun_rekening`.`id_akun` AS `id_akun`,`tb_akun_rekening`.`nama_akun` AS `nama_akun`,`temp_transaksi_keu`.`jumlah_transaksi` AS `jumlah_transaksi`,`temp_transaksi_keu`.`posisi` AS `posisi` from (`temp_transaksi_keu` join `tb_akun_rekening`) where `temp_transaksi_keu`.`id_akun` = `tb_akun_rekening`.`id_akun` and `temp_transaksi_keu`.`jenis_jurnal` = 'Jurnal Penyesuaian') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_kel`
--

/*!50001 DROP TABLE IF EXISTS `v_kel`*/;
/*!50001 DROP VIEW IF EXISTS `v_kel`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_kel` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama`,`tb_kelompok`.`id_kelompok` AS `id_kelompok`,`tb_kelompok`.`nama_kelompok` AS `nama_kelompok`,`tb_kelompok`.`tanggal_berdiri` AS `tanggal_berdiri`,`tb_kelompok`.`id_desa` AS `id_desa` from (`tb_nasabah` join `tb_kelompok`) where `tb_nasabah`.`id_kelompok` = `tb_kelompok`.`id_kelompok`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_laporan_keu_debit`
--

/*!50001 DROP TABLE IF EXISTS `v_laporan_keu_debit`*/;
/*!50001 DROP VIEW IF EXISTS `v_laporan_keu_debit`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_laporan_keu_debit` AS (select `v_det_transaksi`.`id_akun` AS `no_akun`,`v_det_transaksi`.`nama_akun` AS `nama_akun`,`v_det_transaksi`.`tipe` AS `tipe`,`v_det_transaksi`.`id_per` AS `id_per`,sum(`v_det_transaksi`.`jumlah_transaksi`) AS `jml` from `v_det_transaksi` where `v_det_transaksi`.`posisi` = 'debit' group by `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_laporan_keu_kredit`
--

/*!50001 DROP TABLE IF EXISTS `v_laporan_keu_kredit`*/;
/*!50001 DROP VIEW IF EXISTS `v_laporan_keu_kredit`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_laporan_keu_kredit` AS (select `v_det_transaksi`.`id_akun` AS `no_akun`,`v_det_transaksi`.`nama_akun` AS `nama_akun`,`v_det_transaksi`.`tipe` AS `tipe`,`v_det_transaksi`.`tanggal_periode` AS `periode`,`v_det_transaksi`.`id_per` AS `id_per`,sum(`v_det_transaksi`.`jumlah_transaksi`) AS `jml` from `v_det_transaksi` where `v_det_transaksi`.`posisi` = 'kredit' group by `v_det_transaksi`.`nama_akun`,`v_det_transaksi`.`id_per`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_login_peg`
--

/*!50001 DROP TABLE IF EXISTS `v_login_peg`*/;
/*!50001 DROP VIEW IF EXISTS `v_login_peg`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_login_peg` AS (select `data_user`.`id_user` AS `id_user`,`data_user`.`username` AS `username`,`data_user`.`password` AS `PASSWORD`,`jabatan`.`id_jabatan` AS `id_jabatan`,`jabatan`.`nama` AS `jabatan`,`identitas`.`nik` AS `NIK`,`identitas`.`nama` AS `nama`,`identitas`.`jenis_kelamin` AS `jk`,`identitas`.`tanggal_lahir` AS `tgl_lhr`,`identitas`.`alamat` AS `alamat`,`identitas`.`tempat_lahir` AS `tmp_lhr`,`identitas`.`pendidikan` AS `pendidikan` from ((`data_user` join `identitas`) join `jabatan`) where `data_user`.`id_identitas` = `identitas`.`id` and `data_user`.`id_jabatan` = `jabatan`.`id_jabatan` order by `data_user`.`id_user`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_musyawarah_pendanaan`
--

/*!50001 DROP TABLE IF EXISTS `v_musyawarah_pendanaan`*/;
/*!50001 DROP VIEW IF EXISTS `v_musyawarah_pendanaan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_musyawarah_pendanaan` AS (select `tb_pengajuan`.`id` AS `id`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`nik_penanggung` AS `nik_penanggung`,`tb_pengajuan`.`nik_anggota` AS `nik_anggota`,`tb_pengajuan`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`tb_pengajuan`.`besaran_pengajuan` AS `besaran_pengajuan`,`tb_pengajuan`.`bagi_hasil` AS `bagi_hasil`,`tb_pengajuan`.`periode_pengembalian` AS `periode_pengembalian`,`tb_pengajuan`.`id_jns_pengajuan` AS `id_jns_pengajuan`,`tb_pengajuan`.`id_berkas` AS `id_berkas`,`tb_pengajuan`.`id_user` AS `id_user`,`tb_pengajuan`.`id_pembahasan` AS `id_pembahasan`,`tb_pengajuan`.`id_pencairan` AS `id_pencairan`,`tb_pengajuan`.`pesan` AS `pesan`,`tb_pengajuan`.`progress` AS `progress`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_penanggung`) AS `nama_pj`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota`) AS `nama_ang` from `tb_pengajuan` where `tb_pengajuan`.`id_user` is not null and `tb_pengajuan`.`progress` = 'Pembahasan Akhir' and `tb_pengajuan`.`pesan` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pembahasan_akhir`
--

/*!50001 DROP TABLE IF EXISTS `v_pembahasan_akhir`*/;
/*!50001 DROP VIEW IF EXISTS `v_pembahasan_akhir`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pembahasan_akhir` AS (select `tb_pengajuan`.`id` AS `id`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`nik_penanggung` AS `nik_penanggung`,`tb_pengajuan`.`nik_anggota` AS `nik_anggota`,`tb_pengajuan`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`tb_pengajuan`.`besaran_pengajuan` AS `besaran_pengajuan`,`tb_pengajuan`.`periode_pengembalian` AS `periode_pengembalian`,`tb_pengajuan`.`id_jns_pengajuan` AS `id_jns_pengajuan`,`tb_pengajuan`.`id_berkas` AS `id_berkas`,`tb_pengajuan`.`id_user` AS `id_user`,`tb_pengajuan`.`id_pembahasan` AS `id_pembahasan`,`tb_pengajuan`.`id_pencairan` AS `id_pencairan`,`tb_pengajuan`.`pesan` AS `pesan`,`tb_pengajuan`.`progress` AS `progress`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_penanggung`) AS `nama_pj`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota`) AS `nama_ang` from `tb_pengajuan` where `tb_pengajuan`.`id_user` is not null and `tb_pengajuan`.`progress` = 'Pembahasan Awal' and `tb_pengajuan`.`pesan` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pembahasan_awal`
--

/*!50001 DROP TABLE IF EXISTS `v_pembahasan_awal`*/;
/*!50001 DROP VIEW IF EXISTS `v_pembahasan_awal`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pembahasan_awal` AS (select `tb_pengajuan`.`id` AS `id`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`nik_penanggung` AS `nik_penanggung`,`tb_pengajuan`.`nik_anggota` AS `nik_anggota`,`tb_pengajuan`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`tb_pengajuan`.`besaran_pengajuan` AS `besaran_pengajuan`,`tb_pengajuan`.`periode_pengembalian` AS `periode_pengembalian`,`tb_pengajuan`.`id_jns_pengajuan` AS `id_jns_pengajuan`,`tb_pengajuan`.`id_berkas` AS `id_berkas`,`tb_pengajuan`.`id_user` AS `id_user`,`tb_pengajuan`.`id_pembahasan` AS `id_pembahasan`,`tb_pengajuan`.`id_pencairan` AS `id_pencairan`,`tb_pengajuan`.`pesan` AS `pesan`,`tb_pengajuan`.`progress` AS `progress`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_penanggung`) AS `nama_pj`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota`) AS `nama_ang` from `tb_pengajuan` where `tb_pengajuan`.`id_user` is not null and `tb_pengajuan`.`progress` = 'Lolos Seleksi Direktur' and `tb_pengajuan`.`pesan` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_penangguhan`
--

/*!50001 DROP TABLE IF EXISTS `v_penangguhan`*/;
/*!50001 DROP VIEW IF EXISTS `v_penangguhan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_penangguhan` AS (select `tb_nasabah`.`nik` AS `niknya`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_pengajuan`.`id_pengajuan` AS `id_peng`,(select count(`daftar_penangguhan`.`id_det_penangguhan`) from `daftar_penangguhan` where `daftar_penangguhan`.`nik` = `niknya` and `daftar_penangguhan`.`id_pengajuan` = `id_peng`) AS `jumlah_penangguhan` from (`tb_nasabah` join `tb_pengajuan`) where `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` and `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pencairan`
--

/*!50001 DROP TABLE IF EXISTS `v_pencairan`*/;
/*!50001 DROP VIEW IF EXISTS `v_pencairan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pencairan` AS (select `tb_pengajuan`.`id` AS `id`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`nik_penanggung` AS `nik_penanggung`,`tb_pengajuan`.`nik_anggota` AS `nik_anggota`,`tb_pengajuan`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`tb_pengajuan`.`besaran_pengajuan` AS `besaran_pengajuan`,`tb_pengajuan`.`periode_pengembalian` AS `periode_pengembalian`,`tb_pengajuan`.`id_jns_pengajuan` AS `id_jns_pengajuan`,`tb_pengajuan`.`id_berkas` AS `id_berkas`,`tb_pengajuan`.`id_user` AS `id_user`,`tb_pengajuan`.`id_pembahasan` AS `id_pembahasan`,`tb_pengajuan`.`id_pencairan` AS `id_pencairan`,`tb_pengajuan`.`pesan` AS `pesan`,`tb_pengajuan`.`progress` AS `progress`,`tb_pembahasan`.`tgl_pencairan` AS `tgl_pencairan`,`tb_pembahasan`.`dana_cair` AS `dana_cair`,`tb_pembahasan`.`bagi_hasil` AS `bagi_hasil`,`tb_pembahasan`.`validasi` AS `validasi`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_penanggung`) AS `nama_pj`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota`) AS `nama_ang` from (`tb_pengajuan` join `tb_pembahasan`) where `tb_pengajuan`.`id_user` is not null and `tb_pembahasan`.`id_pembahasan` = `tb_pengajuan`.`id_pembahasan` and `tb_pengajuan`.`progress` = 'Pengajuan Lolos' and `tb_pembahasan`.`validasi` = 'sudah' and `tb_pengajuan`.`pesan` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pengajuan_baru`
--

/*!50001 DROP TABLE IF EXISTS `v_pengajuan_baru`*/;
/*!50001 DROP VIEW IF EXISTS `v_pengajuan_baru`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pengajuan_baru` AS (select `tb_pengajuan`.`id` AS `id`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`nik_penanggung` AS `nik_penanggung`,`tb_pengajuan`.`nik_anggota` AS `nik_anggota`,`tb_pengajuan`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`tb_pengajuan`.`besaran_pengajuan` AS `besaran_pengajuan`,`tb_pengajuan`.`periode_pengembalian` AS `periode_pengembalian`,`tb_pengajuan`.`id_jns_pengajuan` AS `id_jns_pengajuan`,`tb_pengajuan`.`id_berkas` AS `id_berkas`,`tb_pengajuan`.`id_user` AS `id_user`,`tb_pengajuan`.`id_pembahasan` AS `id_pembahasan`,`tb_pengajuan`.`id_pencairan` AS `id_pencairan`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_penanggung`) AS `nama_pj`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota`) AS `nama_ang` from (`tb_pengajuan` join `tb_nasabah`) where `tb_pengajuan`.`id_user` is null and `tb_pengajuan`.`id_pengajuan` = `tb_nasabah`.`id_pengajuan` and `tb_pengajuan`.`nik_anggota` = `tb_nasabah`.`nik`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pengecekan_dir`
--

/*!50001 DROP TABLE IF EXISTS `v_pengecekan_dir`*/;
/*!50001 DROP VIEW IF EXISTS `v_pengecekan_dir`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pengecekan_dir` AS (select `tb_pengajuan`.`id` AS `id`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`nik_penanggung` AS `nik_penanggung`,`tb_pengajuan`.`nik_anggota` AS `nik_anggota`,`tb_pengajuan`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`tb_pengajuan`.`besaran_pengajuan` AS `besaran_pengajuan`,`tb_pengajuan`.`periode_pengembalian` AS `periode_pengembalian`,`tb_pengajuan`.`id_jns_pengajuan` AS `id_jns_pengajuan`,`tb_pengajuan`.`id_berkas` AS `id_berkas`,`tb_pengajuan`.`id_user` AS `id_user`,`tb_pengajuan`.`id_pembahasan` AS `id_pembahasan`,`tb_pengajuan`.`id_pencairan` AS `id_pencairan`,`tb_pengajuan`.`pesan` AS `pesan`,`tb_pengajuan`.`progress` AS `progress`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_penanggung`) AS `nama_pj`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota`) AS `nama_ang` from `tb_pengajuan` where `tb_pengajuan`.`id_user` is not null and `tb_pengajuan`.`progress` = 'Lolos Seleksi Berkas' and `tb_pengajuan`.`pesan` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pengembalian`
--

/*!50001 DROP TABLE IF EXISTS `v_pengembalian`*/;
/*!50001 DROP VIEW IF EXISTS `v_pengembalian`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pengembalian` AS select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_angsuran`.`keterangan` AS `keterangan`,`tb_angsuran`.`tgl_tagihan` AS `tanggal_tagihan`,`tb_angsuran`.`jumlah` AS `jumlah`,`tb_angsuran`.`status` AS `status`,`tb_angsuran`.`jumlah_dibayar` AS `dibayar`,`tb_angsuran`.`tgl_dibayar` AS `tanggal_dibayar`,`tb_pencairan`.`id_pencairan` AS `id_pencairan` from (((((`tb_nasabah` join `tb_pengajuan`) join `tb_pencairan`) join `tb_pembahasan`) join `tb_angsuran`) join `tb_pengembalian`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` and `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_pengajuan`.`id_pembahasan` = `tb_pembahasan`.`id_pembahasan` and `tb_pengajuan`.`id_pencairan` = `tb_pencairan`.`id_pencairan` and `tb_pengembalian`.`id_pencairan` = `tb_pencairan`.`id_pencairan` and `tb_pengembalian`.`id_pengembalian` = `tb_angsuran`.`id_pengembalian` and `tb_nasabah`.`nik` = `tb_angsuran`.`id_nik` and `tb_angsuran`.`id_nik` = `tb_nasabah`.`nik` order by `tb_angsuran`.`keterangan` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pengembalian_bh`
--

/*!50001 DROP TABLE IF EXISTS `v_pengembalian_bh`*/;
/*!50001 DROP VIEW IF EXISTS `v_pengembalian_bh`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pengembalian_bh` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_angsuran`.`keterangan` AS `keterangan`,`tb_angsuran`.`id_angsuran` AS `id_angsuran`,`tb_angsuran`.`tgl_tagihan` AS `tanggal_tagihan`,`tb_angsuran`.`jumlah` AS `jumlah`,`tb_pengajuan`.`id_jns_pengajuan` AS `jenis_pengajuan` from (((((`tb_nasabah` join `tb_pengajuan`) join `tb_pencairan`) join `tb_pembahasan`) join `tb_angsuran`) join `tb_pengembalian`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` and `tb_pengajuan`.`id_pembahasan` = `tb_pembahasan`.`id_pembahasan` and `tb_pengajuan`.`id_pencairan` = `tb_pencairan`.`id_pencairan` and `tb_pengembalian`.`id_pencairan` = `tb_pencairan`.`id_pencairan` and `tb_nasabah`.`nik` = `tb_angsuran`.`id_nik` and `tb_angsuran`.`keterangan` = 'Bagi Hasil' and (`tb_angsuran`.`status` = 'belum' or `tb_angsuran`.`status` = 'kurang') order by `tb_angsuran`.`keterangan`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pengembalian_jasa`
--

/*!50001 DROP TABLE IF EXISTS `v_pengembalian_jasa`*/;
/*!50001 DROP VIEW IF EXISTS `v_pengembalian_jasa`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pengembalian_jasa` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_angsuran`.`keterangan` AS `keterangan`,`tb_angsuran`.`id_angsuran` AS `id_angsuran`,`tb_angsuran`.`tgl_tagihan` AS `tanggal_tagihan`,`tb_angsuran`.`jumlah` AS `jumlah`,`tb_pengajuan`.`id_jns_pengajuan` AS `jenis_pengajuan` from (((((`tb_nasabah` join `tb_pengajuan`) join `tb_pencairan`) join `tb_pembahasan`) join `tb_angsuran`) join `tb_pengembalian`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` and `tb_pengajuan`.`id_pembahasan` = `tb_pembahasan`.`id_pembahasan` and `tb_pengajuan`.`id_pencairan` = `tb_pencairan`.`id_pencairan` and `tb_pengembalian`.`id_pencairan` = `tb_pencairan`.`id_pencairan` and `tb_nasabah`.`nik` = `tb_angsuran`.`id_nik` and `tb_angsuran`.`keterangan` = 'jasa' and (`tb_angsuran`.`status` = 'belum' or `tb_angsuran`.`status` = 'kurang') order by `tb_angsuran`.`keterangan`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_pengembalian_pokok`
--

/*!50001 DROP TABLE IF EXISTS `v_pengembalian_pokok`*/;
/*!50001 DROP VIEW IF EXISTS `v_pengembalian_pokok`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_pengembalian_pokok` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_angsuran`.`keterangan` AS `keterangan`,`tb_angsuran`.`id_angsuran` AS `id_angsuran`,`tb_angsuran`.`tgl_tagihan` AS `tanggal_tagihan`,`tb_angsuran`.`jumlah` AS `jumlah`,`tb_pengajuan`.`id_jns_pengajuan` AS `jenis_pengajuan`,`tb_angsuran`.`id_pengembalian` AS `id_pengembalian` from (((((`tb_nasabah` join `tb_pengajuan`) join `tb_pencairan`) join `tb_pembahasan`) join `tb_angsuran`) join `tb_pengembalian`) where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota` and `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` and `tb_pengajuan`.`id_pembahasan` = `tb_pembahasan`.`id_pembahasan` and `tb_pengajuan`.`id_pencairan` = `tb_pencairan`.`id_pencairan` and `tb_pengembalian`.`id_pencairan` = `tb_pencairan`.`id_pencairan` and `tb_nasabah`.`nik` = `tb_angsuran`.`id_nik` and `tb_angsuran`.`keterangan` = 'Pokok' and (`tb_angsuran`.`status` = 'belum' or `tb_angsuran`.`status` = 'kurang') order by `tb_angsuran`.`keterangan`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_periode`
--

/*!50001 DROP TABLE IF EXISTS `v_periode`*/;
/*!50001 DROP VIEW IF EXISTS `v_periode`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_periode` AS (select max(`tb_periode_keu`.`id_periode`) AS `periode` from `tb_periode_keu`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_periode_keu`
--

/*!50001 DROP TABLE IF EXISTS `v_periode_keu`*/;
/*!50001 DROP VIEW IF EXISTS `v_periode_keu`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_periode_keu` AS (select `tb_periode_keu`.`id_periode` AS `id_periode`,`tb_periode_keu`.`tanggal_periode` AS `tanggal_periode` from `tb_periode_keu`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_riwayat_pengajuan`
--

/*!50001 DROP TABLE IF EXISTS `v_riwayat_pengajuan`*/;
/*!50001 DROP VIEW IF EXISTS `v_riwayat_pengajuan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_riwayat_pengajuan` AS (select `tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`nik_anggota` AS `nik_anggota`,`tb_pengajuan`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`tb_pengajuan`.`besaran_pengajuan` AS `besaran_pengajuan`,`tb_pengajuan`.`id_jns_pengajuan` AS `id_jns_pengajuan`,`tb_pengajuan`.`progress` AS `progress` from `tb_pengajuan`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_tagihan`
--

/*!50001 DROP TABLE IF EXISTS `v_tagihan`*/;
/*!50001 DROP VIEW IF EXISTS `v_tagihan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_tagihan` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengembalian`.`id_pengembalian` AS `id_peng`,(select `tb_angsuran`.`tgl_tagihan` from `tb_angsuran` where `tb_angsuran`.`keterangan` = 'pokok' and `tb_angsuran`.`status` = 'belum' and `tb_angsuran`.`id_pengembalian` = `id_peng` order by `tb_angsuran`.`tgl_tagihan` limit 1) AS `tgl_tagihan`,(select `tb_angsuran`.`id_angsuran` from `tb_angsuran` where `tb_angsuran`.`keterangan` = 'pokok' and `tb_angsuran`.`status` = 'belum' and `tb_angsuran`.`id_pengembalian` = `id_peng` order by `tb_angsuran`.`tgl_tagihan` limit 1) AS `id_angsuran`,(select `tb_angsuran`.`jumlah` from `tb_angsuran` where `tb_angsuran`.`keterangan` = 'pokok' and `tb_angsuran`.`status` = 'belum' and `tb_angsuran`.`id_pengembalian` = `id_peng` order by `tb_angsuran`.`tgl_tagihan` limit 1) AS `jml` from (((`tb_nasabah` join `tb_pengajuan`) join `tb_pengembalian`) join `tb_pencairan`) where `tb_nasabah`.`id_pengajuan` = `tb_pengajuan`.`id_pengajuan` and `tb_pengajuan`.`id_pencairan` = `tb_pencairan`.`id_pencairan` and `tb_pengajuan`.`id_pengajuan` = `tb_pengembalian`.`id_pengajuan` and `tb_pencairan`.`id_pencairan` = `tb_pengembalian`.`id_pencairan`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_transaksi_keu`
--

/*!50001 DROP TABLE IF EXISTS `v_transaksi_keu`*/;
/*!50001 DROP VIEW IF EXISTS `v_transaksi_keu`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_transaksi_keu` AS (select `temp_transaksi_keu`.`id_transaksi` AS `id_transaksi`,`tb_akun_rekening`.`id_akun` AS `id_akun`,`tb_akun_rekening`.`nama_akun` AS `nama_akun`,`temp_transaksi_keu`.`jumlah_transaksi` AS `jumlah_transaksi`,`temp_transaksi_keu`.`posisi` AS `posisi` from (`temp_transaksi_keu` join `tb_akun_rekening`) where `temp_transaksi_keu`.`id_akun` = `tb_akun_rekening`.`id_akun` and `temp_transaksi_keu`.`jenis_jurnal` = 'Jurnal Umum') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_validasi_pencairan`
--

/*!50001 DROP TABLE IF EXISTS `v_validasi_pencairan`*/;
/*!50001 DROP VIEW IF EXISTS `v_validasi_pencairan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_validasi_pencairan` AS (select `tb_pengajuan`.`id` AS `id`,`tb_pengajuan`.`id_pengajuan` AS `id_pengajuan`,`tb_pengajuan`.`nik_penanggung` AS `nik_penanggung`,`tb_pengajuan`.`nik_anggota` AS `nik_anggota`,`tb_pengajuan`.`tanggal_pengajuan` AS `tanggal_pengajuan`,`tb_pengajuan`.`besaran_pengajuan` AS `besaran_pengajuan`,`tb_pengajuan`.`periode_pengembalian` AS `periode_pengembalian`,`tb_pengajuan`.`id_jns_pengajuan` AS `id_jns_pengajuan`,`tb_pengajuan`.`id_berkas` AS `id_berkas`,`tb_pengajuan`.`id_user` AS `id_user`,`tb_pengajuan`.`id_pembahasan` AS `id_pembahasan`,`tb_pengajuan`.`id_pencairan` AS `id_pencairan`,`tb_pengajuan`.`pesan` AS `pesan`,`tb_pengajuan`.`progress` AS `progress`,`tb_pembahasan`.`tgl_pencairan` AS `tgl_pencairan`,`tb_pembahasan`.`dana_cair` AS `dana_cair`,`tb_pembahasan`.`bagi_hasil` AS `bagi_hasil`,`tb_pembahasan`.`validasi` AS `validasi`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_penanggung`) AS `nama_pj`,(select `tb_nasabah`.`nama_lengkap` from `tb_nasabah` where `tb_nasabah`.`nik` = `tb_pengajuan`.`nik_anggota`) AS `nama_ang` from (`tb_pengajuan` join `tb_pembahasan`) where `tb_pengajuan`.`id_user` is not null and `tb_pembahasan`.`id_pembahasan` = `tb_pengajuan`.`id_pembahasan` and `tb_pengajuan`.`progress` = 'Pengajuan Lolos' and `tb_pembahasan`.`validasi` = 'belum' and `tb_pengajuan`.`pesan` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `v_verifikasi`
--

/*!50001 DROP TABLE IF EXISTS `v_verifikasi`*/;
/*!50001 DROP VIEW IF EXISTS `v_verifikasi`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_verifikasi` AS (select `tb_desa`.`nama_desa` AS `nama_desa`,`tb_kelompok`.`nama_kelompok` AS `nama_kelompok`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,`tb_nasabah`.`tanggal_lahir` AS `tanggal_lahir`,`tb_nasabah`.`tempat_lahir` AS `tempat_lahir`,`tb_nasabah`.`alamat` AS `alamat`,`tb_nasabah`.`telepon` AS `telepon`,`tb_nasabah`.`status_tmp_tinggal` AS `status_tmp_tinggal`,`tb_nasabah`.`lama_tinggal` AS `lama_tinggal`,`tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`jumlah_tanggungan` AS `jumlah_tanggungan`,`tb_nasabah`.`pekerjaan` AS `pekerjaan`,`tb_nasabah`.`tanggal_daftar` AS `tanggal_daftar`,`tb_pembahasan`.`usaha_lain` AS `usaha_lain`,`tb_pengajuan`.`besaran_pengajuan` AS `besaran_pengajuan`,`tb_pembahasan`.`ft_rumah` AS `ft_rumah`,`tb_pembahasan`.`ft_usaha` AS `ft_usaha`,`tb_pembahasan`.`ft_peta` AS `ft_peta`,`tb_pembahasan`.`rekomendasi` AS `rekomendasi`,`tb_detail_kelompok`.`posisi_anggota` AS `posisi_anggota`,`tb_pembahasan`.`total_pendapatan` AS `total_pendapatan`,`tb_pembahasan`.`biaya_keluarga` AS `biaya_keluarga`,`tb_pembahasan`.`biaya_pengembalian` AS `biaya_pengembalian`,`tb_pembahasan`.`biaya_lain2` AS `biaya_lain2`,`tb_pembahasan`.`sisa_pendapatan` AS `sisa_pendapatan` from (((((`tb_nasabah` join `tb_desa`) join `tb_kelompok`) join `tb_pembahasan`) join `tb_pengajuan`) join `tb_detail_kelompok`) where `tb_nasabah`.`id_kelompok` = `tb_kelompok`.`id_kelompok` and `tb_nasabah`.`nik` = `tb_detail_kelompok`.`nik` and `tb_desa`.`id_desa` = `tb_nasabah`.`id_desa` and `tb_desa`.`id_desa` = `tb_kelompok`.`id_desa` and `tb_pengajuan`.`nik_anggota` = `tb_nasabah`.`nik` and `tb_pengajuan`.`id_pembahasan` = `tb_pembahasan`.`id_pembahasan`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_data_kelompok`
--

/*!50001 DROP TABLE IF EXISTS `view_data_kelompok`*/;
/*!50001 DROP VIEW IF EXISTS `view_data_kelompok`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_data_kelompok` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama`,`tb_kelompok`.`id_kelompok` AS `id_kelompok`,`tb_kelompok`.`nama_kelompok` AS `nama_kelompok`,`tb_kelompok`.`tanggal_berdiri` AS `tanggal_berdiri`,`tb_kelompok`.`id_desa` AS `id_desa`,`tb_detail_kelompok`.`posisi_anggota` AS `posisi` from ((`tb_nasabah` join `tb_kelompok`) join `tb_detail_kelompok`) where `tb_nasabah`.`id_kelompok` = `tb_kelompok`.`id_kelompok` and `tb_nasabah`.`nik` = `tb_detail_kelompok`.`nik`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_data_profil`
--

/*!50001 DROP TABLE IF EXISTS `view_data_profil`*/;
/*!50001 DROP VIEW IF EXISTS `view_data_profil`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_data_profil` AS (select `tb_nasabah`.`nik` AS `nik`,`tb_nasabah`.`nama_lengkap` AS `nama_lengkap`,if(`tb_nasabah`.`jenis_kelamin` = 1,'Laki-laki','Perempuan') AS `jenis_kelaminnya`,`tb_nasabah`.`tempat_lahir` AS `tempat_lahir`,`tb_nasabah`.`tanggal_lahir` AS `tanggal_lahir`,if(`tb_nasabah`.`status_keluarga` = 1,'Kawin','Janda/Duda') AS `status_keluarganya`,`tb_nasabah`.`jumlah_tanggungan` AS `jumlah_tanggungan`,case when `tb_nasabah`.`status_tmp_tinggal` = 1 then 'Rumah Sendiri' when `tb_nasabah`.`status_tmp_tinggal` = 2 then 'Rumah Orang Tua' else 'Kos/Kontrak' end AS `status_tempat_tinggal`,`tb_nasabah`.`lama_tinggal` AS `lama_tinggal`,`tb_nasabah`.`kode_pos` AS `kode_pos`,`tb_nasabah`.`telepon` AS `telepon`,`tb_nasabah`.`email` AS `email`,`tb_nasabah`.`pekerjaan` AS `pekerjaan`,`tb_nasabah`.`jabatan` AS `jabatan`,`tb_nasabah`.`alamat` AS `alamat`,`tb_desa`.`nama_desa` AS `nama_desa`,`tb_nasabah`.`id_desa` AS `id_desa` from (`tb_nasabah` join `tb_desa`) where `tb_nasabah`.`id_desa` = `tb_desa`.`id_desa`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `view_nik_pengajuan`
--

/*!50001 DROP TABLE IF EXISTS `view_nik_pengajuan`*/;
/*!50001 DROP VIEW IF EXISTS `view_nik_pengajuan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = latin1 */;
/*!50001 SET character_set_results     = latin1 */;
/*!50001 SET collation_connection      = latin1_swedish_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `view_nik_pengajuan` AS (select `tb_detail_kelompok`.`id_kelompok` AS `id_kelompok`,`tb_detail_kelompok`.`nik` AS `nik`,`tb_detail_kelompok`.`nama_anggota` AS `nama_anggota` from (`tb_nasabah` join `tb_detail_kelompok`) where `tb_detail_kelompok`.`nik` = `tb_nasabah`.`nik` and `tb_nasabah`.`id_pengajuan` is null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-13  5:25:05
