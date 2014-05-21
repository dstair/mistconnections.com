
-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 50.63.239.43
-- Generation Time: Dec 08, 2013 at 08:28 AM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Mist`
--
CREATE DATABASE `Mist` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Mist`;

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `user_id` varchar(20) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `post` varchar(500) NOT NULL,
  `lat` decimal(13,10) NOT NULL,
  `lng` decimal(13,10) NOT NULL,
  `category` varchar(40) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `id` int(20) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'Have a few tickets here that i need to use up by the end of the year. Let me know if you want them!', 42.3389340920, -71.0938326666, 'Random Thoughts', '2013-12-07 00:06:23', 5);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'Heading to Parish cafe tonight for some good company and good beer!', 42.3404995823, -71.0821228776, 'Food', '2013-12-07 13:20:45', 9);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'Wanted to go to Old Sichuan for lunch but they apparently don\\''t have a chinese breakfast :(', 42.3461369308, -71.1076657498, 'Food', '2013-12-07 14:02:52', 12);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'Enjoying my last saturday night with CS 50!', 42.3492502785, -71.0882473412, 'Random Thoughts', '2013-12-07 20:43:36', 14);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'Looking forward to trying out empire garden dim sum tomorrow!', 42.3519234585, -71.0626026960, 'Food', '2013-12-07 21:12:44', 15);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'I definitely feel the need to put in a plug for Boston Beer Works. You wouldn\\''t expect great food from a large bar, but we had another great meal - lamb - just last night!', 42.3470157830, -71.0989228619, 'Food', '2013-12-07 21:17:03', 16);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'Been meaning to make it to the house of blues - it\\''s pretty overshadowed by Fenway during baseball season, but during winter I\\''m reminded of what a great and popular venue it is!', 42.3472836133, -71.0961041492, 'Music', '2013-12-07 21:21:04', 17);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'If in the mood for a classy cocktail, I would highly recommend Cleo at the Eliot hotel. Potentially the best manhattan I have had!', 42.3492888181, -71.0859602856, 'Food', '2013-12-07 21:36:01', 18);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'CS50 is awesome!', 42.3442006410, -71.0978109783, 'Random Thoughts', '2013-12-07 21:55:06', 19);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'CS50 is awesome, and over :(', 42.3654470994, -71.1038070265, 'Random Thoughts', '2013-12-07 22:02:41', 20);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'Went for a run along the Charles... beautiful blue sky, but bitter, bitter cold.', 42.3508045589, -71.0958943031, 'Random Thoughts', '2013-12-07 22:55:35', 21);
INSERT INTO `Posts` VALUES('1368000566/', 'Daniel/', 'Stair/', 'one last test!', 42.3510063480, -71.1205908684, 'Food', '2013-12-08 07:49:36', 22);
