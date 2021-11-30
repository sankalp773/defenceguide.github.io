-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 04:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `defenceguidedata`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE `feedbacks` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `state`, `feedback`) VALUES
(1, 'sankalp', 'sa@ti.com', 'New Delhi', 'new feedback');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
CREATE TABLE `search` (
  `id` int(6) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `link`, `title`, `text`) VALUES
(1, 'why to join defence.php', 'why to join defence forces?', 'The Indian Armed Forces comprise the Army, Navy and the Air Force. Joining the Armed Forces has always been seen as an attractive career opportunity by the youth.\r\nThere is no doubt that the members of the Armed Forces are one of the most respected profes'),
(2, 'home.php', 'Must Reads', 'The topics which every aspirant wants to know about!'),
(3, 'hownda.php', 'How to join NDA?', 'The National Defence Academy (NDA) is the Joint Services academy of the Indian Armed Forces, where cadets of the three services, the Army, the Navy and the Air Force train together before they go on to pre-commissioning training in their respective servic'),
(4, 'pabt.php', 'What is the PABT test?', 'This test aims at judging the basic skills needed by a person to qualify as a pilot. In this test, the most important things judged are\r\n\r\nHow attentively you listen to a session and how you answer the simple questions that follow?\r\nWhat amount of focus y'),
(5, 'ssb.php', 'What is SSB?', 'Services Selection Boards (SSBs) were raised with a view to recommend suitable and right candidates for the Indian Armed Forces. It is based on the PRISM concept i.e. Psychological Tests, Group Discussions, Ground Tasks, and Personal Interview\r\nThese are '),
(6, 'ors.php', 'Entries other than officer\'s entry', 'For Army\r\nsoldier(genera duty,technical,clerks,nursing assistant,tradesmen)\r\nsoldier(general duty metric pass)\r\nsurveyor auto carto(Enigineers)\r\njunior command officer religious teacher\r\njunior command officer catering\r\nhavaldar education\r\n(to know more c'),
(7, 'army.php', 'ALL ABOUT ARMY', 'Indian Army Flag.\r\nMotto of Indian Army:Service Before Self.\r\nIndian Army is the land-based branch and the largest component of the Indian Armed Forces and The President of India is the Supreme Commander. It is headed by The Chief of Army staff (COAS), wh'),
(8, 'navy.php', 'ALL ABOUT NAVY', 'Indian Navy Flag.\r\nMotto of Indian Navy:\'May the Lord of Water be auspicious unto us\'.\r\nOur country is covered almost from three sides with water with a coastline of approximately over 6000 Km. The sea around India has impact/effect on India’s freedom, tr'),
(9, 'airforce.php', 'ALL ABOUT AIRFORCE', 'Indian Air Force Flag.\r\nMotto of Indian Air Force:\"Touch the sky with Glory\".\r\nThe Indian Air Force (IAF) is the air arm of the Indian Armed Forces.Its primary mission is to secure Indian airspace and to conduct aerial warfare during armed conflict. It wa'),
(10, 'notifs.php', 'NOTIFICATIONS', 'National Defence Academy and Naval Academy Examination (II), 2021\r\nCombined Defence Services Examination (II), 2021'),
(11, 'index.php', 'defence guide', 'GUIDE TO BECOME THE BEST\r\nTop Articles\r\nWhy to join defence?\r\nHow to join NDA?\r\nWhat is PABT test?\r\nWhat is SSB?\r\nEntries except officer\'s entry\r\n\r\nBest Books\r\n\r\nThe Brave: Param Vir Chakra Stories\r\n\r\nSSB Interview: The Complete Guide\r\n\r\nThe 7 Habits of H'),
(12, 'kvd.php', 'Kargil Vijay Diwas', 'India celebrates Kargil Vijay Diwas on July 26 every year to mark the anniversary of the Indian Army\'s victory against Pakistan on this day in 1999, after more than 60 days of armed conflict on the highlands of Kargil in Ladakh.\r\nKargil Vijay Diwas is obs'),
(13, 'para.php', 'Para SF and other SFs', 'Para Special Force(SF)\r\nPara (Special Forces), also known as Para SF, is a special forces unit of the Indian Army, and part of the Parachute Regiment. The unit specializes in various roles including hostage rescue, counter-terrorism, unconventional warfar'),
(14, 'aircrafts.php', 'Aircrafts Of Airforce', 'The Indian Airforce has a huge number of aircrafts in use all serving different roles.Here is a list of all the aircracts:-\r\nDassault Rafale\r\n\r\nThe Dassault Rafale (French pronunciation:, literally meaning \"gust of wind\",and \"burst of fire\" in a more mili');

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

DROP TABLE IF EXISTS `userinfodata`;
CREATE TABLE `userinfodata` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `email`, `password`) VALUES
(16, 'sasasasa', 'sfgdfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
