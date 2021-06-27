-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 11:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `how2`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `title` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `article_id` varchar(20) NOT NULL,
  `article` varchar(5000) NOT NULL,
  `Author` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`title`, `description`, `article_id`, `article`, `Author`, `image`) VALUES
('HERO', 'What it means to be a HERO.', '60d842cbc98d5', 'Being a hero is not a matter of fashionable clothes or showing off but it is by wearing a cape and saving people in order to present you as a positive image in front of everybody, so that you can boost your ego along with their hopes. For me, being a hero means to believe in something higher than yourself and also with a great responsibility. To sacrifice yourself for that work when you take one for the wellbeing of others though you remain anonymous. Heroism comes down to courage, bravery, achievement, and morality—noble quality. A hero is someone who has seen past the mistakes she/he made and came through as new and re-energized, ready to show us the truth she/he discovered, so that we can see ourselves as well and aim for the ultimate inner freedom we’re all hoping for deep inside. A hero is a child who looks at you simply enjoying every sign of acceptance you display. A true hero also keeps the war quietly. She/he fights herself/himself before taking on any outside threat which appears under the shape of a human being she/he takes care of us like a parent too. Being a hero means to love others more than yourself, by killing your own needs and expectations with the vision of offering them everything. A hero is the one who be a humble person , we will clap for him as he pass by but he will never make a big of it. A hero is your father, mother, brother, sister, one who survived losing her legs and never lost hopes, one who works day and night to save people from critical conditions. Eg for recent conditions by means of a pandemic even the vegetable vendor, your milkman and of course Policemen, Doctors, hospital staff and also one who keeps our country beautiful, all are the HEROS. Any one can be a hero you just need to get that into you. You are not a hero for the world but you are hero for someone who keeps you as his/her idol. Changing the world through your own example without expecting anything in return– that’s what being a hero means to me.', 'KSHITIJA BHARAMBE', 'hero-cape-skyscraper-50048095.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
('60d6fed9566c2', 'Kshitija Bharambe', 'Bharambekshitija2@gmail.com', '12345678'),
('60d70dd43a0e1', 'Jayant', 'aiyer786@gmail.com', '12345678'),
('60d7125b87c93', 'Omkar Ukirde', 'ukirdeomkar@gmail.com', '123'),
('60d73e495107d', 'omkar', 'omkar@gmail.com', 'omkar'),
('60d7622608c53', 'ou', 'ou@gmail.com', '123'),
('60d802a2b63b3', 'omk', 'o@gmail.com', '123'),
('60d8092c0baa3', 'oml', 'om@gmail.com', '12345678'),
('60d8102122918', 'omkar', 'omkar1@gmail.com', 'omkar123'),
('60d84565a4d2f', 'john doe', 'abc@gmail.com', '123456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
