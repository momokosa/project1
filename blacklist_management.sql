-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.1.41
-- รุ่นของ PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `blacklist_management`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `m_role`
--

CREATE TABLE IF NOT EXISTS `m_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- dump ตาราง `m_role`
--

INSERT INTO `m_role` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Front'),
(3, 'Sell'),
(4, 'Debt Tracking');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `employee_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- dump ตาราง `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`, `employee_id`, `first_name`, `last_name`, `role`) VALUES
(1, 'admin', 'admin', '', 'admin_first', 'admin_last', 1),
(2, 'developer', 'developer', '', 'developer_first', 'developer_last', 1),
(3, 'test_front', 'test_front', '', 'first_front', 'last_front', 2),
(4, 'test_sell', 'test_sell', '', 'first_sell', 'last_sell', 3),
(7, 'test_debt', 'test_debt', '', 'first_debt', 'last_debt', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
