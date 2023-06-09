-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2023 at 10:48 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_medical_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `gender`, `created_at`) VALUES
(1, 'wijaya', 'male', '2023-04-24 09:23:11'),
(2, 'kadek', 'male', '2023-04-24 09:23:22'),
(3, 'sasmitha', 'male', '2023-04-24 09:23:49'),
(4, 'adhi', 'male', '2023-04-24 09:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` smallint(6) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` smallint(6) NOT NULL,
  `weight` smallint(6) NOT NULL,
  `waist` smallint(6) NOT NULL,
  `bmi_score` float DEFAULT NULL,
  `bmi_category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rfm_score` float DEFAULT NULL,
  `rfm_category` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `age`, `gender`, `height`, `weight`, `waist`, `bmi_score`, `bmi_category`, `rfm_score`, `rfm_category`) VALUES
(1, 'wijaya', 18, 'male', 167, 52, 59, 22, 'Normal', 5.59, 'Average'),
(2, 'dekac', 34, 'male', 156, 56, 78, 22, 'Normal', 5.59, 'Average'),
(3, 'dekac2', 34, 'male', 178, 56, 59, NULL, NULL, NULL, NULL),
(4, 'dekac4', 34, 'male', 167, 56, 59, NULL, NULL, NULL, NULL),
(5, 'test', 24, 'male', 156, 54, 77, NULL, NULL, NULL, NULL),
(6, 'testing', 24, 'male', 156, 54, 77, NULL, NULL, NULL, NULL),
(7, 'nama', 22, 'female', 156, 56, 77, NULL, NULL, NULL, NULL),
(8, 'Wijaya ac', 22, 'female', 156, 56, 47, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
