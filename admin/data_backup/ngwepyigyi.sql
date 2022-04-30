-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 07:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngwepyigyi`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `photo`) VALUES
(1, 'uploads/files/ai9124jymqndkpc.jpeg,uploads/files/3ridkfmb0vzha9q.jpeg,uploads/files/oz8s09ut5r3yah_.jpeg,uploads/files/v2lac8z0ysqe9_j.jpeg,uploads/files/p1ud279l6o8wtjc.jpeg,uploads/files/ucwpa4ry3modv80.jpeg,uploads/files/txjehulwgop9icv.jpeg,uploads/files/4acmbvy6lik8g3h.png,uploads/files/75infk43u_92myr.jpeg,uploads/files/izovek2px3dwfh1.jpeg,uploads/files/dg3ks7jre52ml1v.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Malaysia'),
(2, 'Singapore'),
(3, 'Japan'),
(4, 'Dubai');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `cv_file` text DEFAULT NULL,
  `upload_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `name`, `phone`, `cv_file`, `upload_date`) VALUES
(1, 'sdf', 'asdf', '92461f9d9e7d75127b3af10d2492c077.pdf', '2022/04/30');

-- --------------------------------------------------------

--
-- Table structure for table `employer_form`
--

CREATE TABLE `employer_form` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job_category` varchar(255) DEFAULT NULL,
  `age_limit` varchar(255) DEFAULT NULL,
  `educational_requirement` varchar(255) DEFAULT NULL,
  `working_experience_requirement` varchar(255) DEFAULT NULL,
  `other_additional_requirement` varchar(255) DEFAULT NULL,
  `estimate_salary_offer` varchar(255) DEFAULT NULL,
  `other_allowance` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `interview_type` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_form`
--

INSERT INTO `employer_form` (`id`, `company_name`, `company_type`, `location`, `website`, `phone`, `email`, `job_category`, `age_limit`, `educational_requirement`, `working_experience_requirement`, `other_additional_requirement`, `estimate_salary_offer`, `other_allowance`, `gender`, `interview_type`, `date`) VALUES
(1, 'afds', 'asfd', 'ad', 'sadf', 'asdf', 'asdf@gmail.com', 'asdf', 'asdf', 'adsf', 'adsf', 'asdf', 'adsf', 'adsf', 'adf', 'adf', '2022/04/30');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `inquiry_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `phone`, `subject`, `message`, `inquiry_date`) VALUES
(1, 'Mg Mg', 'mgmg@gmail.com', 'asdf', '09888272665', 'asdfasdf', '2022/04/30');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nrc_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `health_status` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `education` text NOT NULL,
  `skill` text NOT NULL,
  `language` text DEFAULT NULL,
  `current_address` varchar(255) NOT NULL,
  `passport` text DEFAULT NULL,
  `expire_date` text DEFAULT NULL,
  `registration_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `name`, `nrc_no`, `email`, `phone`, `date_of_birth`, `age`, `gender`, `health_status`, `height`, `weight`, `education`, `skill`, `language`, `current_address`, `passport`, `expire_date`, `registration_date`) VALUES
(1, 'asdf', 'adsf', 'asdf@gmail.com', 'asdf', 'asdf', '20', 'Male', 'asdf', 'asdf', 'asdf', 'asdf', 'ads', 'asdf', 'dasf', 'adf', 'adsf', '2022/04/30');

-- --------------------------------------------------------

--
-- Table structure for table `oversea_jobs`
--

CREATE TABLE `oversea_jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oversea_jobs`
--

INSERT INTO `oversea_jobs` (`id`, `name`, `description`, `country_id`) VALUES
(1, 'Construction', '<span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\" times=\"\" new=\"\" roman\";\"=\"\" lucida=\"\" console\",=\"\" \"courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 12px;=\"\" white-space:=\"\" pre-wrap;\"=\"\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span>', 1),
(2, 'Construction', '<span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br>', 2),
(3, 'Factory', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 1),
(4, 'Factory', '<p><span style=\"color: rgb(32, 33, 36);\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 2),
(5, 'Engineers', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 1),
(6, 'Engineers', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 2),
(7, 'Agriculture', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 1),
(8, 'Agriculture', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 2),
(9, 'Restaurant', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 1),
(10, 'Restaurant', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 2),
(11, 'Home Helper', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 1),
(12, 'Home Helper', '<p><span style=\"color: rgb(32, 33, 36);\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 2),
(13, 'Construction', '<span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\" times=\"\" new=\"\" roman\";\"=\"\" lucida=\"\" console\",=\"\" \"courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 12px;=\"\" white-space:=\"\" pre-wrap;\"=\"\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span>', 3),
(14, 'Factory', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 3),
(15, 'Engineers', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 3),
(16, 'Agriculture', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 3),
(17, 'Restaurant', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 3),
(18, 'Home Helper', '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Times New Roman&quot;;\">Our global service are oriented with a supplier of employers’ requirements and our customers’ appreciation in greatly impact. We have been furnished and adequate to perform in recruiting as following Job categories under industries and other fields.</span><br></p>', 3),
(19, 'Hotel', '<p>Testing</p>', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2022-01-25 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$lVnOwXBFb8GZTrzI9KvY1OlcODngr/ujvpCPsEXb4ngiY5VaowEMu', NULL, NULL, '2022-01-25 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_form`
--
ALTER TABLE `employer_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oversea_jobs`
--
ALTER TABLE `oversea_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employer_form`
--
ALTER TABLE `employer_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oversea_jobs`
--
ALTER TABLE `oversea_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
