-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 12:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `event_title` text NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `repeat` int(1) NOT NULL,
  `repeat_every` text NOT NULL,
  `repeat_day_month_year` text NOT NULL,
  `repeat_on_the` int(1) NOT NULL,
  `day_number` int(11) NOT NULL,
  `day_name` text NOT NULL,
  `months` varchar(10) NOT NULL,
  `details_entered_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `details_entered_from` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_title`, `event_start_date`, `event_end_date`, `repeat`, `repeat_every`, `repeat_day_month_year`, `repeat_on_the`, `day_number`, `day_name`, `months`, `details_entered_on`, `details_entered_from`) VALUES
(1, 'dds', '0000-00-00', '0000-00-00', 0, '', '', 1, 0, 'mon', '3months', '2021-09-17 08:53:13', '127.0.0.1'),
(2, 'dds', '0000-00-00', '0000-00-00', 0, '', '', 1, 0, 'mon', '3months', '2021-09-17 09:12:03', '127.0.0.1'),
(3, 'sfsfs', '0000-00-00', '2021-06-09', 0, '', '', 0, 0, 'Tue', '4months', '2021-09-17 09:32:11', '127.0.0.1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`),
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
