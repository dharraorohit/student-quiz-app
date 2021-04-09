-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: quiz
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `Aid` int NOT NULL AUTO_INCREMENT,
  `AName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Aid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Admin','admin@gmail.com','21232f297a57a5a743894a0e4a801fc3'),(2,'Admin Rohit','adminrohit@gmail.com','26c11b691d371a0a17035774c63c7bc2');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `questions` (
  `Queid` int NOT NULL AUTO_INCREMENT,
  `Question` varchar(500) NOT NULL,
  `Ans1` varchar(500) NOT NULL,
  `Ans2` varchar(500) NOT NULL,
  `Ans3` varchar(500) NOT NULL,
  `Ans4` varchar(500) NOT NULL,
  `Correctans` int NOT NULL,
  `Qid` int NOT NULL,
  `Explanation` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Queid`),
  KEY `Qid` (`Qid`),
  CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`Qid`) REFERENCES `quizinfo` (`Qid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'What is the range of byte data type in Java?','-128 to 127','-32768 to 32767','-2147483648 to 2147483647','None of the mentioned',1,5,'Byte occupies 8 bits in memory. Its range is from -128 to 127.'),(2,'What is the range of short data type in Java?','-128 to 127','-32768 to 32767','-2147483648 to 2147483647','None of the mentioned',2,5,'Short occupies 16 bits in memory. Its range is from -32768 to 32767.'),(3,'An expression involving byte, int, and literal numbers is promoted to which of these?','int','long','byte','float',1,5,'An expression involving bytes, ints, shorts, literal numbers, the entire expression is promoted to int before any calculation is done.'),(4,'Which of these literals can be contained in float data type variable?','-1.7e+308','-3.4e+038','+1.7e+308','-3.4e+050',2,5,'Range of float data type is -(3.4e38) To +(3.4e38)'),(5,'Which data type value is returned by all transcendental math functions?','int','float','double','long',3,5,'Double is returned.'),(6,'Which of the following can be operands of arithmetic operators?','Numeric','Boolean','Characters','Both Numeric & Characters',4,5,'The operand of arithmetic operators can be any of numeric or character type, But not boolean.'),(7,'Modulus operator, %, can be applied to which of these?','Integers','Floating – point numbers','Both Integers and floating – point numbers','None of the mentioned',3,5,'Modulus operator can be applied to both integers and floating point numbers.'),(8,'Decrement operator, −−, decreases the value of variable by what number?','1','2','3','4',1,5,'By 1 '),(9,'Which of these selection statements test only for equality?','if','switch','if & switch','none of the mentioned',2,5,'Switch statements checks for equality between the controlling variable and its constant cases.'),(10,'Which of these are selection statements in Java?','if()','for()','continue','break',1,5,'Continue and break are jump statements, and for is a looping statement.'),(12,'The script tag must be placed in __________','the head tag','the head or body','the title or head','after the body tag',2,10,'If the script tag is placed after the body tag, then, it will not be evaluated at all. Also, it is always recommended and effective to use the script snippet in the <head> tag.'),(13,'A JavaScript program developed on a Unix Machine ________','will throw errors and exceptions','must be restricted to a Unix Machine only','will work perfectly well on a Windows Machine','will be displayed as a JavaScript text on the browser',3,10,'JavaScript can be executed on different operating systems therefore the program developed on UNIX will work perfectly fine on windows also.'),(14,'JavaScript is ideal to ________','make computations in HTML simpler','minimize storage requirements on the web server','increase the download time for the client','increase the loading time of the website',2,10,'JavaScript helps in performing various tasks with minimum storage requirements. Therefore to minimize storage requirements, JavaScript is always a better say.'),(15,'JavaScript can be written __________','directly into JS file and included into HTML','directly on the server page','directly into HTML pages','directly into the css file',1,10,'JavaScript files can be saved by .JS extension and can be included in the HTML files. Script tag along with src attribute is used to include the js files.'),(16,'Which of the following Attribute is used to include External JS code inside your HTML Document?','src','ext','script','link',1,10,'Script “tag” is used to include the JavaScript code. To include external JavaScript files “src” attribute is used inside the script tag.'),(17,'A proper scripting language is a __________','High level programming language','Assembly level programming language','Machine level programming language','Low level programming language',1,10,'JavaScript is a high-level programming language that is interpreted by another program at runtime rather than compiled by the computer’s processor. Scripting languages, which can be embedded within HTML, commonly are used to add functionality to a Web page, such as different menu styles or graphics displays or to serve dynamic advertisements.'),(18,'JavaScript Code can be called by using ___________','RMI','Triggering Event','Preprocessor','Function/Method',4,10,'JavaScript code can be called by making a function call to the element on which JavaScript has to be run. There are many other methods like onclick, onload, and onsubmit etc.'),(19,'Which of the following is not considered as an error in JavaScript?','Syntax error','Missing of semicolons','Division by zero','Missing of Bracket',3,10,'Division by zero is not an error in JavaScript: it simply returns infinity or negative infinity. There is one exception, however: zero divided by zero does not have a well defined value, and the result of this operation is the special not-a-number value, printed as NaN.'),(20,'A function definition expression can be called as _________','Function prototype','Function literal','Function calling','Function declaration',2,10,'A function definition expression is a “function literal” in the same way that an object initializer is an “object literal.” A Function definition expression typically consists of the keyword function followed by a comma-separated list of zero or more identifiers (the parameter names) in parentheses and a block of JavaScript code (the function body) in curly braces.'),(21,'The property of a primary expression is ____________','stand-alone expressions','basic expressions containing all necessary functions','contains variable references alone','contains only keywords',1,10,'The simplest expressions, known as primary expressions, are those that stand alone — they do not include any simpler expressions. Primary expressions in JavaScript are constant or literal values, certain language keywords, and variable references.'),(22,'The expression of calling (or executing) a function or method in JavaScript is called ________','Primary expression','Functional expression','Invocation expression','Property Access Expression',3,10,'An invocation expression is JavaScript’s syntax for calling (or executing) a function or method). It starts with a function expression that identifies the function to be called.'),(23,'Which of the operator is used to test if a particular property exists or not?','in','exist','within','exists',1,10,'The operator “in” tests whether a particular property exists or not. In operator is usually added in looping statements to traverse the array or the object.'),(24,'A relational database consists of a collection of','Tables','Fields','Records','Keys',1,12,'Fields are the column of the relation or tables. Records are each row in a relation. Keys are the constraints in a relation.'),(25,'A ________ in a table represents a relationship among a set of values.','Column','Key','Row','Entry',3,12,'Column has only one set of values. Keys are constraints and row is one whole set of attributes. Entry is just a piece of data.'),(26,'How to define a function in PHP?','function {function body}','data type functionName(parameters) {function body}','functionName(parameters) {function body}','function functionName(parameters) {function body}',4,11,'PHP allows us to create our own user-defined functions. Any name ending with an open and closed parenthesis is a function. The keyword function is always used to begin a function.'),(27,'Type Hinting was introduced in which version of PHP?','PHP 4','PHP 5','PHP 5.3','PHP 6',2,11,'PHP 5 introduced the feature of type hinting. With the help of type hinting, we can specify the expected data type of an argument in a function declaration. First valid types can be the class names for arguments that receive objects and the other are array for those that receive arrays.');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quizinfo`
--

DROP TABLE IF EXISTS `quizinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quizinfo` (
  `Qid` int NOT NULL AUTO_INCREMENT,
  `Qname` varchar(255) NOT NULL,
  PRIMARY KEY (`Qid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quizinfo`
--

LOCK TABLES `quizinfo` WRITE;
/*!40000 ALTER TABLE `quizinfo` DISABLE KEYS */;
INSERT INTO `quizinfo` VALUES (5,'Java Quiz'),(10,'JavaScript Quiz'),(11,'PHP Quiz'),(12,'DBMS Quiz'),(26,'OS Quiz'),(27,'Python Quiz');
/*!40000 ALTER TABLE `quizinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `SName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Class` varchar(100) NOT NULL,
  `Sid` int NOT NULL AUTO_INCREMENT,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES ('Rohit Dharrao','dharraorohit@gmail.com','10',6,'acf2fde1171bcbe8152f235c5104673f'),('Rahul Satpute','rahulsatpute@gmail.com','12',7,'439ed537979d8e831561964dbbbd7413'),('Sakshi Dharrao','sakshi@gmail.com','12',8,'b31e31dac8811d89bb1cbfc384414aaf'),('Akash Kamankar','akashkamankar@gmail.com','7',9,'6cb1658d04e1b529629f324e7c25e49e'),('Sanjana Kandekar','sanjanakandekar@gmail.com','7',14,'d8eaf5b2e0cc90fa03d3dcfa17623816');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-09 18:05:37
