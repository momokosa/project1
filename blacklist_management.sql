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
-- โครงสร้างตาราง `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `national_id_card` varchar(20) NOT NULL,
  `name_title` varchar(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `nick_name` varchar(20) NOT NULL,
  `gender_id` varchar(1) NOT NULL DEFAULT '1',
  `birthdate` date NOT NULL,
  `religion_id` varchar(1) NOT NULL DEFAULT '1',
  `status_blacklist` varchar(1) NOT NULL DEFAULT '1' COMMENT '1=Whitelist,2=Blacklist',
  `status_active` varchar(1) NOT NULL DEFAULT 'A' COMMENT 'A=Active,I=inactive',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `customers`
--

INSERT INTO `customers` (`id`, `national_id_card`, `name_title`, `first_name`, `middle_name`, `last_name`, `nick_name`, `gender_id`, `birthdate`, `religion_id`, `status_blacklist`, `status_active`) VALUES
(1, '1799999669250', 'นาย', 'ไกรสง', '', 'กงไส', 'น็อต', '2', '1991-11-28', '2', '1', 'A'),
(2, '1788888888250', 'นาง', 'มะลิ', '', 'บานเช้า', '', '1', '0000-00-00', '1', '2', 'A');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `customers_address`
--

CREATE TABLE IF NOT EXISTS `customers_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(11) NOT NULL DEFAULT '0',
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `customers_address`
--

INSERT INTO `customers_address` (`id`, `customer_id`, `address`) VALUES
(1, '0', 'ไม่ระบุ'),
(2, '1', '55/1 ม.6 ต.นางตะเคียน อ.เมือง จ.สมุทรสงคราม');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `master_blacklist`
--

CREATE TABLE IF NOT EXISTS `master_blacklist` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `master_blacklist`
--

INSERT INTO `master_blacklist` (`id`, `status_name`) VALUES
(1, 'Whitelist'),
(2, 'Blacklist');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `master_gender`
--

CREATE TABLE IF NOT EXISTS `master_gender` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `gender_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- dump ตาราง `master_gender`
--

INSERT INTO `master_gender` (`id`, `gender_name`) VALUES
(1, 'ไม่ระบุ'),
(2, 'ชาย'),
(3, 'หญิง');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `master_religion`
--

CREATE TABLE IF NOT EXISTS `master_religion` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `religion_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `master_religion`
--

INSERT INTO `master_religion` (`id`, `religion_name`) VALUES
(1, 'ไม่ระบุ'),
(2, 'พุทธ');

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
(3, 'Sale'),
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
(4, 'test_sale', 'test_sale', '', 'test_sale', 'test_sale', 3),
(7, 'test_debt', 'test_debt', '', 'first_debt', 'last_debt', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
