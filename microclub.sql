-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2022 at 08:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `nom_event` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `date_event` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `nom_event`, `description`, `date_event`) VALUES
(1, 'Capture The Flag', 'Micro Club Capture The Flag is an exhibition around cyber security, including conferences, round tables, and national competitions. The goal of MCTF is to allow participants to discover and master new technologies and develop new skills. In order to encourage the development of the white hacker community, Micro-Club would like to organize an event related to computer security in order to bring together computer security enthusiasts and potential recruiters.', '2021-02-26'),
(2, 'Red Hat Training Camp', 'Red Hat Training Camp is a 3-day certified training on Red Hat technologies. The course is led by Dr. Djelloul Bouida, senior solutions architect and level IV RHCA. The goal is to allow students to gain experience on the experience on linux, virtualization and cloud computing on a beginner and cloud computing on a beginner-intermediate level.', '2019-05-25'),
(3, 'Algeria game challenge', 'Pioneer of video game development and first initiative to introduce this field in Algeria to introduce this field in Algeria, Algeria Game Challenge, formerly named \"XNA\" after the Micro-soft Framework, is a soft, is a video game development contest intended for video game enthusiasts video game enthusiasts from all over the country. country. This contest aims to launch the participants in a process of exploration of the profession of video game developer, in order to attract to attract investors in this sector.', '2015-05-11'),
(4, 'Algeria Disrupt 2.0', 'Algeria 2.0 is the biggest WEB and ICT event in Africa. It is considered as \"the international crossroads of professionals of ICT and WEB 2.0 professionals\". It aims to ensure a transformation towards a digital future. It creates all kinds of opportunities for the development of the country and the continent. of the country and the continent.', '2022-03-06'),
(5, 'MC Winter Hack', 'The idea of the Winter Hacks Season is to bring together activities and events such as hackathons, workshops and competi- tions during the of the winter season from September to February in an from September to February in an intercon- nected format format that allows participants to take advantage of activities to learn new technologies, improve their skills technologies, improve their skills, acquire new ones skills, and acquire new ones that will serve them in their academic, professional and personal life, as well as and personal life as well as to be able to apply these new skills in the challenges of challenges of different events and work within a community. community.', '2021-10-21'),
(6, 'Major League Hacking', 'The first episode of the hackathon series presented by Major League Hacking and taking place from October 18 to October 24, a week during which week during which a series of workshops, talks and other activities will be presented, talks and other activities. Micro Club, the only representative of USTHB and Algeria so far, is participating as a Guild (or local community). In addition to the hundred (+100) workshops presented by MLH, additional workshops organized by club members as official MLH Localhost are planned towards the are planned towards the end of the event week. Micro Club being the only North African guild ranks 9th among more than 350 guilds worldwide and 10,000 participants during the during the week-long event.', '2021-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `level` varchar(2) NOT NULL,
  `university` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `first_name`, `last_name`, `email`, `password`, `birthdate`, `level`, `university`, `created_at`) VALUES
(1, 'Hichem', 'BOUZOURINE', 'hichembouzourine.uni@gmail.com', 'testingTheDatabase', '2022-05-12', 'L2', 'USTHB', '2022-05-26 18:34:03'),
(3, 'Ahmed', 'Yacine', 'Ahmed@gmail.co.uk', 'ahmedyacine2020', '2022-05-18', 'L3', 'ENPA', '2022-05-26 22:35:03'),
(4, 'Hichem', 'BOUZOURINE', 'hichammafr5@gmail.com', 'giludghliuj', '2022-05-12', 'L3', 'ESI', '2022-05-26 23:06:41'),
(21, 'Ahmed', 'benyoucef', 'ahmedBenyoucef@gmail.com', 'ahmedahmed', '1221-12-12', 'M1', 'ESI', '2022-05-27 14:27:25'),
(23, 'Racim', 'SAAL', 'Saalracim@gmail.com', 'saalsaal', '2002-07-17', 'L2', 'USTHB', '2022-05-27 16:43:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
