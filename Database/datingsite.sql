-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2023 at 01:11 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datingsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `age` int NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `zodiac` varchar(100) NOT NULL,
  `eyeColor` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bio` varchar(100) NOT NULL,
  `background` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `address`, `gender`, `zodiac`, `eyeColor`, `username`, `password`, `interest`, `image`, `bio`, `background`) VALUES
(11, 'Roland Clarion', 23, 'Barangay Quezon', 'male', 'capricorn', 'black', 'roland123', '202cb962ac59075b964b07152d234b70', 'female', 'helloCutie.jpg', 'Looking for lover', 'default.jpeg'),
(12, 'Reynaldo Mahinay', 20, 'Barangay Quezon', 'male', 'leo', 'black', 'mhine', '202cb962ac59075b964b07152d234b70', 'female', 'panomonasabe.jfif', 'Looking for lover', 'default.jpeg'),
(13, 'Rhejen Rocamora', 22, 'Barangay Quezon', 'female', 'libra', 'black', 'rhejen', '202cb962ac59075b964b07152d234b70', 'male', 'bahug.jfif', 'Looking for lover', 'default.jpeg'),
(14, 'Wilson Laguda', 21, 'Barangay Quezon', 'male', 'virgo', 'black', 'laguda', '202cb962ac59075b964b07152d234b70', 'female', 'johny.jfif', 'Looking for lover', 'default.jpeg'),
(15, 'Dulce Amor Olmedo', 21, 'San Carlos City', 'female', 'gemini', 'blue', 'dulce', '202cb962ac59075b964b07152d234b70', 'male', 'dulce.jfif', 'Looking for lover', 'default.jpeg'),
(16, 'Idly Vencing', 20, 'Valye', 'male', 'virgo', 'black', 'vencing', '202cb962ac59075b964b07152d234b70', 'female', 'vesper.jfif', 'Looking for lover', 'default.jpeg'),
(17, 'Caila Dumdum', 20, 'Toboso', 'female', 'libra', 'black', 'caila', '202cb962ac59075b964b07152d234b70', 'male', 'caila.jpg', 'Looking for lover', 'default.jpeg'),
(18, 'Harrey Antonio', 21, 'Lamesa', 'male', 'sagittarius', 'black', 'harrey', '202cb962ac59075b964b07152d234b70', 'female', 'harrey.jfif', 'Looking for lover', 'default.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
