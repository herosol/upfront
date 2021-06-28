-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 04:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herosols_upfront`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_remember` varchar(2) DEFAULT NULL,
  `user_token` varchar(100) DEFAULT NULL,
  `user_type` enum('user','artist','model') DEFAULT 'user',
  `mem_social_type` varchar(255) DEFAULT 'website',
  `mem_social_id` varchar(255) DEFAULT NULL,
  `user_fname` varchar(30) DEFAULT NULL,
  `user_lname` varchar(30) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_pswd` varchar(255) DEFAULT NULL,
  `mem_code` varchar(255) NOT NULL,
  `mem_phone` varchar(255) DEFAULT NULL,
  `mem_sex` enum('male','female','other') DEFAULT NULL,
  `mem_dob` date DEFAULT NULL,
  `mem_company` varchar(255) DEFAULT NULL,
  `mem_website` varchar(255) NOT NULL,
  `mem_about` text DEFAULT NULL,
  `mem_profile_heading` varchar(255) DEFAULT NULL,
  `mem_availability` varchar(500) DEFAULT NULL,
  `mem_video` varchar(255) DEFAULT NULL,
  `mem_image` varchar(100) DEFAULT NULL,
  `mem_cover_image` varchar(255) NOT NULL,
  `mem_street` varchar(100) DEFAULT NULL,
  `mem_address1` varchar(255) NOT NULL,
  `mem_address2` varchar(255) NOT NULL,
  `mem_city` varchar(255) NOT NULL,
  `mem_state` varchar(2) DEFAULT NULL,
  `mem_zip` varchar(100) DEFAULT NULL,
  `mem_country_id` int(11) NOT NULL,
  `mem_rate` float DEFAULT NULL,
  `mem_characters` varchar(100) DEFAULT NULL,
  `mem_ssn` varchar(50) DEFAULT NULL,
  `mem_dln` varchar(50) DEFAULT NULL,
  `mem_travel_radius` float UNSIGNED DEFAULT NULL,
  `mem_ip` varchar(255) NOT NULL,
  `mem_note` varchar(255) DEFAULT NULL,
  `mem_referral_code` varchar(6) DEFAULT NULL,
  `mem_fb_link` varchar(255) DEFAULT NULL,
  `mem_instagram_link` varchar(255) DEFAULT NULL,
  `mem_twitter_link` varchar(255) DEFAULT NULL,
  `mem_linkedin_link` varchar(255) DEFAULT NULL,
  `mem_youtube_link` varchar(255) DEFAULT NULL,
  `mem_paypal` varchar(255) DEFAULT NULL,
  `mem_stripe_id` varchar(255) DEFAULT NULL,
  `mem_map_lat` varchar(500) DEFAULT NULL,
  `mem_map_lng` varchar(500) DEFAULT NULL,
  `mem_hear_about` varchar(255) DEFAULT NULL,
  `mem_player_application` tinyint(1) NOT NULL DEFAULT 0,
  `mem_become_buyer` tinyint(1) DEFAULT 0,
  `mem_phone_code` varchar(6) DEFAULT NULL,
  `mem_phone_verified` tinyint(1) NOT NULL DEFAULT 0,
  `mem_player_verified` tinyint(1) NOT NULL DEFAULT 0,
  `mem_verified` tinyint(1) NOT NULL DEFAULT 0,
  `user_status` tinyint(1) NOT NULL DEFAULT 1,
  `mem_featured` tinyint(1) DEFAULT 0,
  `mem_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_remember`, `user_token`, `user_type`, `mem_social_type`, `mem_social_id`, `user_fname`, `user_lname`, `user_email`, `user_pswd`, `mem_code`, `mem_phone`, `mem_sex`, `mem_dob`, `mem_company`, `mem_website`, `mem_about`, `mem_profile_heading`, `mem_availability`, `mem_video`, `mem_image`, `mem_cover_image`, `mem_street`, `mem_address1`, `mem_address2`, `mem_city`, `mem_state`, `mem_zip`, `mem_country_id`, `mem_rate`, `mem_characters`, `mem_ssn`, `mem_dln`, `mem_travel_radius`, `mem_ip`, `mem_note`, `mem_referral_code`, `mem_fb_link`, `mem_instagram_link`, `mem_twitter_link`, `mem_linkedin_link`, `mem_youtube_link`, `mem_paypal`, `mem_stripe_id`, `mem_map_lat`, `mem_map_lng`, `mem_hear_about`, `mem_player_application`, `mem_become_buyer`, `mem_phone_code`, `mem_phone_verified`, `mem_player_verified`, `mem_verified`, `user_status`, `mem_featured`, `mem_date`, `user_last_login`) VALUES
(1, NULL, NULL, 'user', 'website', NULL, 'Saad', 'Ashraf', 'saad@gmail.com', 'h5r2e394y3r4o5v36564j4s4', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', '', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, 1, 0, '2021-06-23 12:35:25', '2021-06-23 15:35:25'),
(2, NULL, NULL, 'user', 'website', NULL, 'Saad', 'Ashraf', 'saad1@gmail.com', 'h5r2e394y3r4o5v36564j4s4', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', '', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, 1, 0, '2021-06-23 13:03:14', '2021-06-23 16:03:14'),
(3, NULL, NULL, 'user', 'website', NULL, 'Saad', 'Ashraf', 'saad45@gmail.com', 'h5r2e394y3r4o5v36564j4s4', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', '', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 0, 1, 0, '2021-06-25 07:40:30', '2021-06-25 10:40:30'),
(32, 'g5', 'la9i6rjm7j6ku6vee8gr0jbaiq34qoi5', 'user', 'website', NULL, 'Saad', 'Chaudhary', 'saad@herosolutions.com.pk', 'h5r2e394y3r4o5k36574w49315h393o4', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', '', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, 0, 0, 1, 1, 0, '2021-06-25 09:44:45', '2021-06-25 17:07:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
