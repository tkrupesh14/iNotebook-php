-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 02:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inotebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `description`, `time`) VALUES
(5, 'note 10000', 'this is note 5\r\n', '2022-06-25 12:14:50'),
(6, 'hello', 'this is my note', '2022-06-25 11:09:37'),
(7, 'Sunday', 'Tomorrow is Sunday & I will do OOPs in PHP ', '2022-06-25 11:23:36'),
(8, 'Avnish', 'Avnish meeting ma kidi katki ben na account mathi join thayo che. ', '2022-06-25 11:45:08'),
(9, 'Avnish is 1', 'thnish osnwefkhrebjbchjsf', '2022-06-25 12:14:07'),
(10, 'hello', 'this is note w', '2022-06-25 11:52:43'),
(11, 'note 3', 'ewdkjkfhkvbhv', '2022-06-25 11:53:53'),
(12, 'hello', 'rhivbvfn', '2022-06-25 11:59:42'),
(13, 'notes 5', 'this is note 5\r\n', '2022-06-25 12:12:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
