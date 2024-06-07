-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2024 at 03:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `featured` tinyint(1) DEFAULT 0,
  `tags` varchar(255) DEFAULT 'misc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_path`, `featured`, `tags`) VALUES
(2, 'uploads/pexels-diva-plavalaguna-6150432.jpg', 1, 'dikshas'),
(3, 'uploads/pexels-enginakyurt-1486861.jpg', 1, 'misc'),
(4, 'uploads/pexels-hoangchuong-2374652.jpg', 1, 'dikshas'),
(5, 'uploads/pexels-jan-van-der-wolf-11680885-19850155.jpg', 1, 'diksha'),
(6, 'uploads/pexels-matvalina-20508811.jpg', 1, 'misc'),
(7, 'uploads/pexels-nadezhda-moryak-6063622.jpg', 1, 'diksha'),
(8, 'uploads/pexels-pixabay-63294.jpg', 1, 'misc'),
(9, 'uploads/pexels-robert-clark-504241532-20493143.jpg', 1, 'misc'),
(10, 'uploads/pexels-sergeymakashin-5444883.jpg', 1, 'misc'),
(11, 'uploads/pexels-shvetsa-4557831.jpg', 1, 'misc'),
(12, 'uploads/pexels-thais-freires-227884957-12050951.jpg', 1, 'misc'),
(13, 'uploads/pexels-yankrukov-8613086.jpg', 1, 'misc'),
(14, 'uploads/pexels-diva-plavalaguna-6150432.jpg', 1, 'misc'),
(15, 'uploads/pexels-enginakyurt-1486861.jpg', 1, 'misc'),
(16, 'uploads/pexels-hoangchuong-2374652.jpg', 1, 'misc'),
(17, 'uploads/pexels-jan-van-der-wolf-11680885-19850155.jpg', 1, 'misc'),
(18, 'uploads/pexels-matvalina-20508811.jpg', 1, 'misc'),
(19, 'uploads/pexels-nadezhda-moryak-6063622.jpg', 1, 'misc'),
(20, 'uploads/pexels-pixabay-63294.jpg', 1, 'misc'),
(21, 'uploads/pexels-robert-clark-504241532-20493143.jpg', 1, 'misc'),
(22, 'uploads/pexels-sergeymakashin-5444883.jpg', 1, 'misc'),
(23, 'uploads/pexels-shvetsa-4557831.jpg', 1, 'misc'),
(24, 'uploads/pexels-thais-freires-227884957-12050951.jpg', 1, 'misc'),
(25, 'uploads/pexels-yankrukov-8613086.jpg', 1, 'misc'),
(26, 'uploads/college1.jpeg', 1, 'misc'),
(27, 'uploads/pexels-sergeymakashin-5444883.jpg', 0, 'diksha'),
(28, 'uploads/pexels-shvetsa-4557831.jpg', 0, 'diksha'),
(29, 'uploads/pexels-thais-freires-227884957-12050951.jpg', 0, 'diksha'),
(30, 'uploads/pexels-yankrukov-8613086.jpg', 0, 'diksha'),
(31, 'uploads/pexels-sergeymakashin-5444883.jpg', 0, 'diksha'),
(32, 'uploads/pexels-shvetsa-4557831.jpg', 0, 'diksha'),
(33, 'uploads/pexels-thais-freires-227884957-12050951.jpg', 0, 'diksha'),
(34, 'uploads/pexels-yankrukov-8613086.jpg', 0, 'diksha'),
(35, 'uploads/college1.jpeg', 0, 'misc'),
(36, 'uploads/college1.jpeg', 0, 'misc'),
(37, 'uploads/college1.jpeg', 0, 'misc'),
(38, 'uploads/college1.jpeg', 0, 'misc'),
(39, 'uploads/whatscode.jpeg', 0, 'misc'),
(40, 'uploads/whatscode.jpeg', 1, 'misc'),
(41, 'uploads/_4b03b721-c9e6-4c07-83ef-05959d839d6a.jpeg', 0, 'dikshas'),
(42, 'uploads/_5ebc9510-5968-48f0-8ceb-dd8f3155460a.jpeg', 0, 'dikshas'),
(43, 'uploads/_6dc658cb-2729-403f-af10-c3286bf43482.jpeg', 0, 'dikshas'),
(44, 'uploads/_8eae5459-a25d-4eea-b45b-a14c707211fa.jpeg', 0, 'dikshas'),
(45, 'uploads/_18dc74d5-f7e5-4d1e-b9eb-a5e5515dfb5a.jpeg', 0, 'dikshas');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notification` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT 'home'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification`, `url`, `tags`) VALUES
(2, 'this is the very really updated notification', 'index.php', 'ec'),
(4, 'this is the added notification', 'index.html', 'home'),
(6, 'this is the newest notification', 'index.html', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image_url`, `slug`, `created_at`) VALUES
(38, 'hello', 'just checking. hello is this working The annual cultural & technical fest titled under \'Blaze\' is the most blazing events organized by college union. The 4 daylong events starting with a series of technical competitions like Truss Making, Best Manager, Paper Presentation, Quiz etc takes the audience to a new level of entertainment once the curtain rises of cultural events. \r\n\r\nEnriched with a wide range of competitions including off stage & on stage, Student from various departments compete each other on various items and judged under an audible and experienced jury panel and winners are awarded with attractive prizes. Without the aids of any external agencies, Blaze is entirely organized by the College Union with the sole support of students. Every year College Union is successful in delivering a grand colorful event remaining in limited financial boundaries. With a motto of \"Entertainment with Erudition\", Blaze offers an opportunity for the students to delve into themselves and comes up with those talents which might be even unknown to them. It is actually the best platform for the students to test their skills on management as well as teaches them to face bravely those various problems that hinder them from reaching the glorious zeniths in their career and life.\r\n\r\n', 'postedimages/pexels-lastly-699122.jpg', 'hello', '2024-06-01 15:33:37'),
(39, 'DIKSHA', 'Being one among the biggest technical and cultural fest witnessed by South India, \'Diskha\' is the result of painstaking efforts taken by the college union that starts even months before the curtain raiser. Better to say, almost a year long of efforts are taken by the college union to organize a pitch perfect event like \'Diksha\'. Blessed with the participation of the leading colleges across the nation like IIT Bombay, IIT Kanpur, IIT Madras, NIT Calicut, the audience witness a variety of entertaining as well as enlightening programs in IET Robot Festivals, Auto Expos are some among them. Launched under the partnerships of various audible brands from all walks of life like Sun Groups, Kairali entertainment, Mathrboomi groups, Ford Automobiles etc, Diksha also offers informative pods from eminent IIT Alumnus and other technical organizations. The 4 day event is bounded with various cultural items throughout where students from various colleges takes part and garners prize and praise. The event was also blessed with the presence of veterans from the field of arts in the yesteryear like Stphen Devasi, Madhu Ramakrishnan etc.\r\n\r\n', 'postedimages/college1.jpeg', 'diksha', '2024-06-02 02:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `slider_contents`
--

CREATE TABLE `slider_contents` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `caption` text DEFAULT NULL,
  `text_content` text DEFAULT NULL,
  `active` int(11) DEFAULT 0,
  `button` text DEFAULT NULL,
  `location` varchar(111) DEFAULT NULL,
  `sort_order` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_contents`
--

INSERT INTO `slider_contents` (`id`, `image_url`, `caption`, `text_content`, `active`, `button`, `location`, `sort_order`) VALUES
(3, '3d-portrait-people.jpg', 'kannan', 'hi hows this for a slider', 1, '', NULL, 2),
(7, 'image5.jpg', 'asas', 'saasasa', 1, NULL, NULL, 3),
(8, '0766fdd2-49ee-49bd-99ab-d5d862d815f8.gif', 'GIFS', 'can also be', 1, NULL, NULL, 4),
(9, 'whatscode.jpeg', 'with button', 'button can also be placed', 1, 'button', 'editslide.php', 0),
(10, 'college1.jpeg', 'CUIET', 'Building a better world', 1, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'diksha'),
(4, 'dikshas'),
(5, 'misc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$oAlNMH68dTXzvKw/sKfMnOBbnpDop633wj1GAmfpINs7KD5K9Nq9u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_contents`
--
ALTER TABLE `slider_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `slider_contents`
--
ALTER TABLE `slider_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
