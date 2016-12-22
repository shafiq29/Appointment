-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 04:48 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `friend_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_noti`
--

CREATE TABLE IF NOT EXISTS `all_noti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notice` varchar(200) NOT NULL,
  `track` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `frnd_graph`
--

CREATE TABLE IF NOT EXISTS `frnd_graph` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_1` varchar(255) DEFAULT '0',
  `user_2` varchar(255) DEFAULT '0',
  `user_3` varchar(255) DEFAULT '0',
  `user_4` varchar(255) DEFAULT '0',
  `user_5` varchar(255) DEFAULT '0',
  `user_6` varchar(255) DEFAULT '0',
  `user_7` varchar(255) DEFAULT '0',
  `user_8` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `frnd_graph`
--

INSERT INTO `frnd_graph` (`id`, `user_1`, `user_2`, `user_3`, `user_4`, `user_5`, `user_6`, `user_7`, `user_8`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0'),
(2, '0', '0', '0', '0', '0', '0', '0', '0'),
(3, '0', '0', '0', '0', '0', '0', '0', '0'),
(4, '0', '0', '0', '0', '0', '0', '0', '0'),
(5, '0', '0', '0', '0', '0', '0', '0', '0'),
(6, '0', '0', '0', '0', '0', '0', '0', '0'),
(7, '0', '0', '0', '0', '0', '0', '0', '0'),
(8, '0', '0', '0', '0', '0', '0', '0', '0'),
(9, '0', '0', '0', '0', '0', '0', '0', '0'),
(10, '0', '0', '0', '0', '0', '0', '0', '0'),
(11, '0', '0', '0', '0', '0', '0', '0', '0'),
(12, '0', '0', '0', '0', '0', '0', '0', '0'),
(13, '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(100) NOT NULL,
  `img_path_two` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_path`, `img_path_two`) VALUES
(6, 'img_icon/blank_pic.jpg', 'img_icon/blank_pic2.jpg'),
(7, 'img_icon/blank_pic.jpg', 'img_icon/blank_pic2.jpg'),
(8, 'img_size_one/lms_pro_size_one_4.jpg', 'img_size_two/lms_pro_size_two_4.jpg'),
(9, 'img_icon/blank_pic.jpg', 'img_icon/blank_pic2.jpg'),
(10, 'img_icon/blank_pic.jpg', 'img_icon/blank_pic2.jpg'),
(11, 'img_icon/blank_pic.jpg', 'img_icon/blank_pic2.jpg'),
(12, 'img_icon/blank_pic.jpg', 'img_icon/blank_pic2.jpg'),
(13, 'img_icon/blank_pic.jpg', 'img_icon/blank_pic2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_img` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `num_img`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fr` varchar(100) NOT NULL,
  `tom` varchar(100) NOT NULL,
  `mes` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `noti_frnd_req`
--

CREATE TABLE IF NOT EXISTS `noti_frnd_req` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_1` varchar(255) DEFAULT '0',
  `user_2` varchar(255) DEFAULT '0',
  `user_3` varchar(255) DEFAULT '0',
  `user_4` varchar(255) DEFAULT '0',
  `user_5` varchar(255) DEFAULT '0',
  `user_6` varchar(255) DEFAULT '0',
  `user_7` varchar(255) DEFAULT '0',
  `user_8` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `noti_frnd_req`
--

INSERT INTO `noti_frnd_req` (`id`, `user_1`, `user_2`, `user_3`, `user_4`, `user_5`, `user_6`, `user_7`, `user_8`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0'),
(2, '0', '0', '0', '0', '0', '0', '0', '0'),
(3, '0', '0', '0', '0', '0', '0', '0', '0'),
(4, '0', '0', '0', '0', '0', '0', '0', '0'),
(5, '0', '0', '0', '0', '0', '0', '0', '0'),
(6, '0', '0', '0', '0', '0', '0', '0', '0'),
(7, '0', '0', '0', '0', '0', '0', '0', '0'),
(8, '0', '0', '0', '0', '0', '0', '0', '0'),
(9, '0', '0', '0', '0', '0', '0', '0', '0'),
(10, '0', '0', '0', '0', '0', '0', '0', '0'),
(11, '0', '0', '0', '0', '0', '0', '0', '0'),
(12, '0', '0', '0', '0', '0', '0', '0', '0'),
(13, '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `noti_new_mes`
--

CREATE TABLE IF NOT EXISTS `noti_new_mes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_1` varchar(255) DEFAULT '0',
  `user_2` varchar(255) DEFAULT '0',
  `user_3` varchar(255) DEFAULT '0',
  `user_4` varchar(255) DEFAULT '0',
  `user_5` varchar(255) DEFAULT '0',
  `user_6` varchar(255) DEFAULT '0',
  `user_7` varchar(255) DEFAULT '0',
  `user_8` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `noti_new_mes`
--

INSERT INTO `noti_new_mes` (`id`, `user_1`, `user_2`, `user_3`, `user_4`, `user_5`, `user_6`, `user_7`, `user_8`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0'),
(2, '0', '0', '0', '0', '0', '0', '0', '0'),
(3, '0', '0', '0', '0', '0', '0', '0', '0'),
(4, '0', '0', '0', '0', '0', '0', '0', '0'),
(5, '0', '0', '0', '0', '0', '0', '0', '0'),
(6, '0', '0', '0', '0', '0', '0', '0', '0'),
(7, '0', '0', '0', '0', '0', '0', '0', '0'),
(8, '0', '0', '0', '0', '0', '0', '0', '0'),
(9, '0', '0', '0', '0', '0', '0', '0', '0'),
(10, '0', '0', '0', '0', '0', '0', '0', '0'),
(11, '0', '0', '0', '0', '0', '0', '0', '0'),
(12, '0', '0', '0', '0', '0', '0', '0', '0'),
(13, '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `noti_new_post`
--

CREATE TABLE IF NOT EXISTS `noti_new_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_1` varchar(255) DEFAULT '0',
  `user_2` varchar(255) DEFAULT '0',
  `user_3` varchar(255) DEFAULT '0',
  `user_4` varchar(255) DEFAULT '0',
  `user_5` varchar(255) DEFAULT '0',
  `user_6` varchar(255) DEFAULT '0',
  `user_7` varchar(255) DEFAULT '0',
  `user_8` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `noti_new_post`
--

INSERT INTO `noti_new_post` (`id`, `user_1`, `user_2`, `user_3`, `user_4`, `user_5`, `user_6`, `user_7`, `user_8`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0'),
(2, '0', '0', '0', '0', '0', '0', '0', '0'),
(3, '0', '0', '0', '0', '0', '0', '0', '0'),
(4, '0', '0', '0', '0', '0', '0', '0', '0'),
(5, '0', '0', '0', '0', '0', '0', '0', '0'),
(6, '0', '0', '0', '0', '0', '0', '0', '0'),
(7, '0', '0', '0', '0', '0', '0', '0', '0'),
(8, '0', '0', '0', '0', '0', '0', '0', '0'),
(9, '0', '0', '0', '0', '0', '0', '0', '0'),
(10, '0', '0', '0', '0', '0', '0', '0', '0'),
(11, '0', '0', '0', '0', '0', '0', '0', '0'),
(12, '0', '0', '0', '0', '0', '0', '0', '0'),
(13, '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `state` int(11) NOT NULL,
  `noti_mes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `email`, `pass`, `state`, `noti_mes`) VALUES
(1, 'Shafiqul Islam', 'shafiq@gmail.com', 'c375b8abb2eb79d220bb3cf1e687e323', 0, 0),
(2, 'kamal', 'kamal@gmail.com', 'a370d79debd29ef7c0e4b8bb59438a99', 0, 0),
(3, 'hayat', 'hayat@gmail.com', 'e01bc2e78a391e5f714e863e38850ac1', 0, 0),
(4, 'Lobon', 'lobon@gmail.com', 'd312c62d5f2ed822c3238195389119ed', 0, 0),
(5, 'plabon', 'plabon@gmail.com', 'dbe5ae5f86fb82a669814d48301c297e', 0, 0),
(6, 'abul', 'abul@gmail.com', '61a269185395febd567f5d81c16e61e2', 0, 0),
(7, 'Latif', 'latif@gmail.com', '0f1c7fe0972bded1fc16292beb8afc5f', 0, 0),
(8, 'abdul', 'abdul@gmail.com', 'e309519a0c853f23ac37faba874feb73', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE IF NOT EXISTS `user_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
