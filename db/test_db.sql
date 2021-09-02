CREATE database testLogin;

USE testLogin;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'eder.chua@ciit.edu.ph', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'ela@ciit.edu.ph', '202cb962ac59075b964b07152d234b70'),
(3, 'elias@ciit.edu.ph', '202cb962ac59075b964b07152d234b70');

ALTER TABLE users AUTO_INCREMENT=4;