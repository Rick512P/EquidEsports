CREATE DATABASE  IF NOT EXISTS `textos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `textos`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.2    Database: textos
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artigos`
--

DROP TABLE IF EXISTS `artigos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artigos` (
  `idartigos` int NOT NULL AUTO_INCREMENT,
  `titulo1` varchar(90) NOT NULL,
  `subtitulo` varchar(90) DEFAULT NULL,
  `nome_autor` varchar(45) NOT NULL,
  `nome_redator` varchar(45) NOT NULL,
  `paragrafos` mediumtext,
  `rodape` varchar(45) NOT NULL,
  `link_original` tinytext,
  PRIMARY KEY (`idartigos`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artigos`
--

LOCK TABLES `artigos` WRITE;
/*!40000 ALTER TABLE `artigos` DISABLE KEYS */;
INSERT INTO `artigos` VALUES (1,'Onde armazenar configurações de aplicação','','Desconhecido','Érick Santos Matos','Em programação .NET, é prática padrão armazenar configurações de aplicação em documentos XML (normalmente com uma extensão .config). A dificuldade surge quando você precisa ou quer \nque sua aplicação comporte-se de maneira diferente em situações diferentes. Você deve dar suporte para isso no arquivo de configurações ou buscar uma arquitetura de configurações\nbaseadas em dados na qual você utiliza dados para configurar sua aplicação. Se escolher a última solução, um banco de dados é o lugar natural para armazenar os dados que determinam as \nconfigurações da sua aplicação. Antes de adotar o modelo de configurações baseadas em dados, você deve primeiro entender algumas das razões para utilizar arquivos de configuração \npara sua aplicação. Se sua aplicação não requer um banco de dados para qualquer outra função, é recomendável não incluir funcionalidades de banco de dados somente para armazenar \nas configurações da aplicação. Da mesma forma, se sua aplicação requer configurações durante a inicialização, um banco de dados em geral não está disponível naquele ponto do processo, \nentão um arquivo de configurações é uma solução mais natural. (No passado, configurações de aplicação nessas situações costumavam ser armazenadas no Registro do Windows, mas atualmente \nelas são armazenadas com mais freqüência juntamente com a aplicação nos arquivos de configuração.) Uma das principais vantagens de armazenar as definições de configuração da sua \naplicação em um arquivo é que o arquivo pode ser facilmente manipulado pelo usuário. Um arquivo XML pode ser editado no Bloco de Notas, para que qualquer usuário possa modificar as\nconfigurações. Se você precisa impedir que usuários visualizem ou manipulem configurações sigilosas, os arquivos de configuração podem ser encriptados. Embora muitas vezes não estejam\ndisponíveis durante a inicialização da aplicação, as configurações armazenadas em um banco de dados podem ser vantajosas. Em um banco de dados, você pode controlar o acesso às\nconfigurações utilizando a segurança do banco de dados, incluindo criptografia no SQL Server 2005. Isso ajuda a assegurar que usuários que talvez não entendam o impacto de suas\nalterações não possam modificar facilmente as configurações. Se estiver utilizando alguma forma de segurança baseada em perfis (veja o Capítulo 2, “Princípios básicos de segurança de\nbanco de dados”), você pode gerenciar quem tem permissão para alterar configurações individuais da aplicação. As configurações da aplicação armazenadas no banco de dados também são\núteis em aplicações distribuídas. Portanto, você poderá armazenar configurações, como fuso horário ou diretivas corporativas, em um lugar — o banco de dados. Essas configurações\npodem ser gerenciadas pelo pessoal apropriado e podem ser configuradas de modo que a aplicação tenha versões diferentes de configurações para diferentes usuários ou grupos de usuários.\nA Tabela 1-1 mostra as vantagens oferecidas pelas duas opções.','a','https://statics-shoptime.b2w.io/sherlock/books/firstChapter/5949422.pdf');
/*!40000 ALTER TABLE `artigos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-19 15:25:01
