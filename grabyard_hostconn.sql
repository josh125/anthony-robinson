-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2014 at 02:37 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grabyard_hostconn`
--

-- --------------------------------------------------------

--
-- Table structure for table `babyone_advance_about`
--

CREATE TABLE IF NOT EXISTS `babyone_advance_about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about_header` varchar(128) NOT NULL,
  `about_content` text NOT NULL,
  `about_img` varchar(255) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `babyone_advance_about`
--

INSERT INTO `babyone_advance_about` (`about_id`, `about_header`, `about_content`, `about_img`, `date_updated`) VALUES
(1, 'header', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '1.jpg', '2014-05-27 22:00:00'),
(2, 'header 2', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '2.jpg', '2014-05-28 10:48:15'),
(3, 'header 3', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', '3.jpg', '2014-05-28 00:00:00'),
(4, 'sample header 1', 'sample content 1', '31.jpg', '2014-05-28 13:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `babyone_advance_jumbotron`
--

CREATE TABLE IF NOT EXISTS `babyone_advance_jumbotron` (
  `jumbotron_id` int(11) NOT NULL AUTO_INCREMENT,
  `jumbo_header` varchar(128) NOT NULL,
  `jumbo_content` text NOT NULL,
  `jumbo_img` varchar(255) NOT NULL,
  `jumbo_quote` varchar(128) NOT NULL,
  `jumbotron_hide_show` enum('hide','') NOT NULL DEFAULT '',
  PRIMARY KEY (`jumbotron_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `babyone_advance_jumbotron`
--

INSERT INTO `babyone_advance_jumbotron` (`jumbotron_id`, `jumbo_header`, `jumbo_content`, `jumbo_img`, `jumbo_quote`, `jumbotron_hide_show`) VALUES
(1, 'Bread and Pastry ', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'bt1280x800.png', 'Qualty Bread for Value Customer', 'hide');

-- --------------------------------------------------------

--
-- Table structure for table `babyuser`
--

CREATE TABLE IF NOT EXISTS `babyuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `cellphone` varchar(17) NOT NULL,
  `telephone` int(11) NOT NULL,
  `company_logo` varchar(128) NOT NULL,
  `account_stat` enum('active','inactive') NOT NULL DEFAULT 'active',
  `status` enum('online','') NOT NULL DEFAULT '',
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `business_name` varchar(128) NOT NULL,
  `conn_type` enum('baby','advance','business') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `babyuser`
--

INSERT INTO `babyuser` (`id`, `email`, `password`, `fullname`, `address`, `cellphone`, `telephone`, `company_logo`, `account_stat`, `status`, `date_reg`, `business_name`, `conn_type`) VALUES
(1, 'admin@yahoo.com', '123123123', 'fullname here', 'business address', '09066478155', 1234567, '', 'active', '', '2014-05-22 10:29:25', 'business name here', 'advance'),
(2, 'admin2@yahoo.com', 'hostconn', 'fullname here', 'business address here', '09091234567', 1234567, '', 'active', '', '2014-05-22 10:31:27', 'business name', 'baby');

-- --------------------------------------------------------

--
-- Table structure for table `client_blogs`
--

CREATE TABLE IF NOT EXISTS `client_blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `blog_img` varchar(128) NOT NULL,
  `blog_title` varchar(128) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_status` enum('posted','deleted') NOT NULL DEFAULT 'posted',
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `conn_type` enum('baby','advance','business') NOT NULL,
  `client_name` varchar(128) NOT NULL,
  `status` enum('','pending') NOT NULL DEFAULT 'pending',
  `hash_tag` varchar(128) NOT NULL,
  `approve_by` int(11) NOT NULL,
  `hide_show` enum('hide','') NOT NULL DEFAULT '',
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `client_blogs`
--

INSERT INTO `client_blogs` (`blog_id`, `client_id`, `blog_img`, `blog_title`, `blog_content`, `blog_status`, `date_posted`, `conn_type`, `client_name`, `status`, `hash_tag`, `approve_by`, `hide_show`) VALUES
(1, 1, '1.jpg', 'We''re happy to serve you', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'posted', '2014-05-23 12:14:41', 'advance', 'client name here', '', 'more fun', 1, ''),
(2, 1, '3.jpg', 'Quality is our passion', 'sample content here sample content here sample content here sample content here sample content here sample content here sample content here', 'posted', '2014-05-23 12:14:41', 'advance', 'clinet 2', '', 'Tummy', 3, ''),
(3, 34, '', 'Title blog here', 'content content content content content content content content content content content content content content content content content content content content content content content content ', 'posted', '2014-05-23 12:17:29', 'business', 'business conn', 'pending', 'hash business', 3, ''),
(4, 1, '2.jpg', 'Eat with your Eyes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'posted', '2014-05-23 12:17:29', 'advance', 'baby conn name', '', 'hashtag', 1, 'hide'),
(6, 1, 'big_f08ac18dde00c31da232da7b9c84ef7b0b31d8ae.jpg', 'sample', 'sample', 'deleted', '2014-06-03 11:02:21', 'baby', '', 'pending', 'hash', 0, 'hide'),
(7, 1, '10292132_507254392740502_2270288677538231878_n.jpg', 'sad', 'asdawdasdaw', 'posted', '2014-06-27 08:51:46', 'baby', '', 'pending', 'sdwdasd', 0, ''),
(8, 1, 'Desert.jpg', 'sample', 'sample', 'posted', '2014-07-02 09:20:33', 'baby', '', 'pending', 'hash', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `client_products_services`
--

CREATE TABLE IF NOT EXISTS `client_products_services` (
  `ps_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `ps_img` varchar(128) NOT NULL,
  `ps_title` varchar(255) NOT NULL,
  `ps_content` text NOT NULL,
  `ps_status` enum('posted','deleted') NOT NULL DEFAULT 'posted',
  `ps_date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ps_conn_type` enum('baby','advance','business') NOT NULL,
  `ps_confirmation` enum('pending','') NOT NULL DEFAULT '',
  `ps_approve_by` int(11) NOT NULL,
  `ps_hide_show` enum('hide','') NOT NULL DEFAULT '',
  PRIMARY KEY (`ps_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `client_products_services`
--

INSERT INTO `client_products_services` (`ps_id`, `client_id`, `ps_img`, `ps_title`, `ps_content`, `ps_status`, `ps_date_posted`, `ps_conn_type`, `ps_confirmation`, `ps_approve_by`, `ps_hide_show`) VALUES
(1, 1, '1.jpg', 'title', 'content', 'posted', '2014-05-27 16:34:51', 'advance', '', 3, ''),
(2, 1, '2.jpg', 'title 2', 'content 2', 'posted', '2014-05-27 16:35:15', 'advance', '', 1, ''),
(3, 1, '3.jpg', 'title 3', 'content 3', 'posted', '2014-05-27 16:35:18', 'advance', '', 1, ''),
(4, 1, '52.jpg', 'title 5', 'content 5', 'posted', '2014-06-18 14:29:00', 'baby', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `dmci_sorrel_blogs`
--

CREATE TABLE IF NOT EXISTS `dmci_sorrel_blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_user_id` int(11) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_hashtag` varchar(125) NOT NULL,
  `blog_date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `blog_status` enum('deleted','') NOT NULL DEFAULT '',
  `blog_hide_unhide` enum('hidden','') NOT NULL DEFAULT '',
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `dmci_sorrel_blogs`
--

INSERT INTO `dmci_sorrel_blogs` (`blog_id`, `blog_title`, `blog_content`, `blog_user_id`, `blog_img`, `blog_hashtag`, `blog_date_posted`, `blog_status`, `blog_hide_unhide`) VALUES
(4, 'Sorrel Manila Philippines', 'your home, your life', 3, '1.jpg', 'sorrel', '2014-08-18 07:43:08', 'deleted', ''),
(5, 'Sorrel Open House', 'Heighten your living experience at Sorrel Residences - a one-tower residential development along Sociego St., Sampaloc, Manila that features expansive open spaces, commanding skyline views, resort-style amenities, and unparalleled access to all the important places in the metro.', 3, '4.jpg', 'sorrel', '2014-08-18 07:42:57', 'deleted', ''),
(6, 'title', 'sample content', 3, 'arista-place2.jpg', '', '2014-08-18 07:42:50', 'deleted', ''),
(7, '#Open House', 'Heighten your living experience at Sorrel Residences - a one-tower residential development along Sociego St., Sampaloc, Manila that features expansive open spaces, commanding skyline views, resort-style amenities, and unparalleled access to all the important places in the metro.', 4, '6.jpg', '', '2014-08-08 08:46:28', 'deleted', ''),
(8, '#Open House', 'say something', 4, 'brio-tower1.jpg', '', '2014-08-08 08:46:23', 'deleted', ''),
(9, '#Sorrel', 'Heighten your living experience at Sorrel Residences - a one-tower residential development along Sociego St., Sampaloc, Manila that features expansive open spaces, commanding skyline views, resort-style amenities, and unparalleled access to all the important places in the metro.', 4, 'about-pic.jpg', '', '2014-08-08 08:50:23', '', ''),
(10, '#SorrelManila', 'Heighten your living experience at Sorrel Residences - a one-tower residential development along Sociego St., Sampaloc, Manila that features expansive open spaces, commanding skyline views, resort-style amenities, and unparalleled access to all the important places in the metro.', 5, 'about-pic1.jpg', '', '2014-08-08 10:59:16', '', ''),
(11, '#SorrelManila', 'Heighten your living experience at Sorrel Residences - a one-tower residential development along Sociego St., Sampaloc, Manila that features expansive open spaces, commanding skyline views, resort-style amenities, and unparalleled access to all the important places in the metro.', 6, 'about-pic1.jpg', '', '2014-08-08 11:00:08', '', ''),
(12, 'Exclusive Adobe', 'Despite its convenient location, being just a block away from V. Mapa and Ramon Magsaysay Boulevard, residents are nevertheless shielded from the noise and pollution from these major thoroughfares. With priority given to security features and exclusivity, Sorrel Residences provides its future residents with peace of mind and worry-free living. This exclusive and gated community boasts of 24/7 security, and the purely residential community further takes your safety to the next level.', 6, 'sorrel-manila-philippines.jpg', '', '2014-08-08 12:24:51', '', ''),
(13, '#SorrelResidence', 'Is a modern tropical, resort-themed high rised development located in Sociego Street Sampaloc, Manila within close proximity to place of interest (school and worlkplaces) Quezon City and Manila.', 5, 'sorrel.png', '', '2014-08-08 15:39:25', 'deleted', ''),
(14, '#SorrelResidence', 'Is a modern tropical, resort-themed high rised development located in Sociego Street Sampaloc, Manila within close proximity to place of interest (school and worlkplaces) Quezon City and Manila.', 6, 'sorrel.png', '', '2014-08-08 15:46:29', 'deleted', ''),
(15, '#SorrelResidence', 'Is a modern tropical, resort-themed high rised development located in Sociego Street Sampaloc, Manila within close proximity to place of interest (school and workplaces) Quezon City and Manila.', 4, 'sorrel.png', '', '2014-08-08 15:55:27', 'deleted', ''),
(16, 'title', 'say somthing', 5, '603590_507254482740493_8184212917609089966_n.jpg', '', '2014-08-09 04:09:46', 'deleted', 'hidden'),
(17, 'Brio Tower', 'Brio Tower, is a premier condo community project of DMCI Homes-a company of innovative builders and engineering experts that develop modern day living solutions for urban families. Each of its developments is built with world-standard craftsmanship borne from D.M. Consunji Inc.''s almost 60 years of experience in the construction and development industry. DMCI Homes offers its customers the highest level of expertise and its strict adherence to global standards. Its corporate philosophy is anchored on a deep understanding that buying a home is more about investing in a better way of living.Brio Tower is the perfect validation of this timely proposition. Thanks to this feature-rich ideally located community, residents can finally enjoy a more comfortable and meaningful way of life where they can feel real good to be home.', 5, 'brio-tower5.jpg', '', '2014-08-09 10:14:44', '', ''),
(18, '#BrioTower', 'Brio Tower, is a premier condo community project of DMCI Homes-a company of innovative builders and engineering experts that develop modern day living solutions for urban families. Each of its developments is built with world-standard craftsmanship borne from D.M. Consunji Inc.''s almost 60 years of experience in the construction and development industry. DMCI Homes offers its customers the highest level of expertise and its strict adherence to global standards. Its corporate philosophy is anchored on a deep understanding that buying a home is more about investing in a better way of living.Brio Tower is the perfect validation of this timely proposition. Thanks to this feature-rich ideally located community, residents can finally enjoy a more comfortable and meaningful way of life where they can feel real good to be home.', 4, 'brio-tower5.jpg', '', '2014-08-13 14:30:33', 'deleted', ''),
(19, '#sorrelResidences', 'Heighten your living experience at Sorrel Residences - a one-tower residential development along Sociego St., Sampaloc, Manila that features expansive open spaces, commanding skyline views, resort-style amenities, and unparalleled access to all the important places in the metro.', 3, '3.jpg', '', '2014-08-18 07:48:39', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dmci_sorrel_contact_info`
--

CREATE TABLE IF NOT EXISTS `dmci_sorrel_contact_info` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_no` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_type` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `dmci_sorrel_contact_info`
--

INSERT INTO `dmci_sorrel_contact_info` (`contact_id`, `contact_no`, `user_id`, `contact_type`) VALUES
(1, '09179563513', 3, 'mobile'),
(2, '768-2324', 3, 'telephone'),
(3, '09279592148', 4, 'mobile'),
(4, '123-4567', 4, 'telephone'),
(5, '09173414295', 5, 'mobile'),
(6, '123-1234', 5, 'telephone'),
(7, '09157495722', 6, 'mobile'),
(8, '123-1234', 6, 'telephone');

-- --------------------------------------------------------

--
-- Table structure for table `dmci_sorrel_inquiries`
--

CREATE TABLE IF NOT EXISTS `dmci_sorrel_inquiries` (
  `inq_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_inq` varchar(255) NOT NULL,
  `email_inq` varchar(125) NOT NULL,
  `contact_inq` varchar(17) NOT NULL,
  `project_inq` varchar(255) NOT NULL,
  `comment_inq` text NOT NULL,
  `user_id_inq` int(11) NOT NULL,
  `date_inq` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_inq` enum('important','trashbin','deleted','') NOT NULL DEFAULT '',
  PRIMARY KEY (`inq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `dmci_sorrel_inquiries`
--

INSERT INTO `dmci_sorrel_inquiries` (`inq_id`, `name_inq`, `email_inq`, `contact_inq`, `project_inq`, `comment_inq`, `user_id_inq`, `date_inq`, `status_inq`) VALUES
(21, 'Lester Ramos', 'tzokoletze@yahoo.com', '090909090909', 'quiapo', 'may libre ba kayong unit ngayon?', 4, '2014-08-08 15:36:35', ''),
(22, 'Lester Ramos', 'tzokoletze@yahoo.com', '09079393030', 'quiapo', 'may libre ba kayong unit ngayon?', 6, '2014-08-08 15:41:55', ''),
(23, 'Lester Ramos', 'tzokoletze@yahoo.com', '090327498237948', 'cebu', 'ako po yung nanalo ng 1 million pesosesososes', 4, '2014-08-08 15:45:41', 'deleted'),
(24, 'Lester Ramos', 'tzokoletze@yahoo.com', '3928392479309380', 'tuguegarao', 'miss hermie recieved nyo na na yung 1Million?', 4, '2014-08-08 15:51:06', 'deleted'),
(25, 'kuya mikel', 'mikel@yahoo.com', '0909090909090909', 'manila', 'manila philippines', 6, '2014-08-08 15:56:32', 'deleted'),
(26, 'full short', 'gull@hayoo.com', '1234567890', 'sulu', 'manila pa din ako', 4, '2014-08-08 15:58:55', 'deleted'),
(27, 'Lester Ramos', 'kupalako@yahoo.com', '09057387004', 'Manila', 'how much your sorrel tower?', 4, '2014-08-08 16:04:19', 'deleted'),
(28, 'Joshua delo Santos', 'joshua@yahoo.com', '09057387005', 'Paco', 'how much the lady guard?', 4, '2014-08-08 16:05:01', 'deleted'),
(29, 'Lester Ramos', 'kupalako@yahoo.com', '09057387004', 'Manila', 'manila please po', 4, '2014-08-08 16:06:08', 'deleted'),
(30, 'kupalako master', 'wowph@yahoo.com', '09057387009', 'manila', 'ako ay isang buyer', 6, '2014-08-08 16:07:19', 'deleted'),
(31, 'fast and fast', 'fast@yahoo.com', '09057387007', 'sulu sulu', 'julu sulo version', 4, '2014-08-08 16:08:27', 'deleted'),
(32, 'ate wana kuya mikel', 'ululan@yahoo.com', '090573870100', 'lincallo', 'sa pag ibig walang sinuman', 4, '2014-08-08 16:11:12', 'deleted'),
(33, 'kingkong', '', '12312312323', 'sorrel manila philippines', '', 5, '2014-08-09 04:03:03', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `dmci_sorrel_user`
--

CREATE TABLE IF NOT EXISTS `dmci_sorrel_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `cellphone` varchar(17) NOT NULL,
  `telephone` int(11) NOT NULL,
  `company_logo` varchar(128) NOT NULL,
  `account_stat` enum('active','inactive') NOT NULL DEFAULT 'active',
  `status` enum('online','') NOT NULL DEFAULT '',
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `business_name` varchar(128) NOT NULL,
  `conn_type` enum('baby','advance','business') NOT NULL,
  `username` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dmci_sorrel_user`
--

INSERT INTO `dmci_sorrel_user` (`id`, `email`, `password`, `fullname`, `address`, `cellphone`, `telephone`, `company_logo`, `account_stat`, `status`, `date_reg`, `business_name`, `conn_type`, `username`, `owner`) VALUES
(3, 'wesley.dmci@gmail.com', 'wesleydmci', 'Wesley Karen L. Aguila', 'Lakandula Tondo Manila Philippines', '0917-956-3513', 123, '', 'active', '', '2014-07-30 15:49:45', 'DMCI Sorrel Manila Philippines', 'advance', 'wesleydmci', 'wesley'),
(4, 'goodshepperd.dmci@gmail.com', 'tequiero8', 'Hermie Urbano', 'Manila', '09279592148', 0, '', 'active', '', '2014-08-03 03:17:49', 'DMCI Sorrel Manila', 'advance', 'hermiedmci', 'hermie'),
(5, 'joan_bujing08@yahoo.com', 'joanbujing08', 'Joan Acuba', 'Makati City', '09173414295', 0, '', 'active', '', '2014-08-06 00:29:00', 'DMCI Sorrel Manila Philippines', 'advance', 'joandmci', 'joan'),
(6, 'jigsnepomuceno@yahoo.com', 'jigs10dmci', 'Jigs Nepomuceno', 'location Address', '', 0, '', 'active', '', '2014-08-08 10:22:11', 'DMCI Sorrel Manila Philippines', 'advance', 'jigs10dmci', 'jigs');

-- --------------------------------------------------------

--
-- Table structure for table `home_header`
--

CREATE TABLE IF NOT EXISTS `home_header` (
  `header_id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(255) NOT NULL,
  `header_content` varchar(255) NOT NULL,
  PRIMARY KEY (`header_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `home_header`
--

INSERT INTO `home_header` (`header_id`, `header`, `header_content`) VALUES
(1, 'Hostconn can make planning your website Easy.', 'Let the world know you.');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE IF NOT EXISTS `home_slides` (
  `slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slide_num` int(11) NOT NULL,
  `slide_header` varchar(255) NOT NULL,
  `slide_content` varchar(255) NOT NULL,
  `slide_img` varchar(512) NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`slide_id`, `date`, `slide_num`, `slide_header`, `slide_content`, `slide_img`) VALUES
(1, '2014-05-14 12:44:59', 1, 'Easy to use', 'sample easy to use', 'adjustment11.jpg'),
(2, '2014-05-14 12:44:09', 2, 'Header 2', 'this is a sample of content of slide num 2', 'planning6.jpg'),
(3, '2014-05-14 12:44:28', 3, 'header 3', 'this sample of content of slide num 3', 'lets-talk5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_stat` enum('keep','deleted') NOT NULL DEFAULT 'keep',
  `sender_id` int(11) NOT NULL,
  `receiver_stat` enum('keep','deleted') NOT NULL DEFAULT 'keep',
  `receiver_id` int(11) NOT NULL,
  `msg_status` enum('unread','') NOT NULL DEFAULT 'unread',
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `sender_stat`, `sender_id`, `receiver_stat`, `receiver_id`, `msg_status`, `message`, `date`) VALUES
(102, 'keep', 1, 'keep', 3, '', 'nasa manila ka parin ba ?', '2014-05-02 11:08:46'),
(103, 'keep', 1, 'keep', 3, '', 'di ko pa nalalagay yung AJAX code, pinag aaralan ko pa, bro ito nalang kulng, wla ng problema sa design at dev code, kaylngan ko nlng ng tiga design, =)', '2014-05-02 11:10:19'),
(104, 'keep', 1, 'keep', 2, '', 'this is sample message, you can reply to this message by click the name or profile at the user list, the envelope icon will show the unread message, and notification message, this is unique message system of hostconn company, this is not a social network, be responsible, thank you.', '2014-05-02 11:23:37'),
(105, 'keep', 1, 'keep', 3, '', 'this is sample message, you can reply to this message by click the name or profile at the user list, the envelope icon will show the unread message, and notification message, this is unique message system of hostconn company, this is not a social network, be responsible, thank you.', '2014-05-02 11:23:59'),
(106, 'keep', 1, 'keep', 4, '', 'this is sample message, you can reply to this message by click the name or profile at the user list, the envelope icon will show the unread message, and notification message, this is unique message system of hostconn company, this is not a social network, be responsible, thank you.', '2014-05-02 11:24:09'),
(107, 'keep', 1, 'keep', 5, '', 'this is sample message, you can reply to this message by click the name or profile at the user list, the envelope icon will show the unread message, and notification message, this is unique message system of hostconn company, this is not a social network, be responsible, thank you.', '2014-05-02 11:24:18'),
(108, 'keep', 1, 'keep', 6, '', 'this is sample message, you can reply to this message by click the name or profile at the user list, the envelope icon will show the unread message, and notification message, this is unique message system of hostconn company, this is not a social network, be responsible, thank you.', '2014-05-02 11:24:31'),
(109, 'keep', 1, 'keep', 7, '', 'this is sample message, you can reply to this message by click the name or profile at the user list, the envelope icon will show the unread message, and notification message, this is unique message system of hostconn company, this is not a social network, be responsible, thank you.', '2014-05-02 11:24:39'),
(110, 'keep', 1, 'keep', 8, '', 'this is sample message, you can reply to this message by click the name or profile at the user list, the envelope icon will show the unread message, and notification message, this is unique message system of hostconn company, this is not a social network, be responsible, thank you.', '2014-05-02 11:24:48'),
(111, 'keep', 1, 'keep', 9, '', 'this is sample message, you can reply to this message by click the name or profile at the user list, the envelope icon will show the unread message, and notification message, this is unique message system of hostconn company, this is not a social network, be responsible, thank you.', '2014-05-02 11:24:55'),
(112, 'keep', 2, 'deleted', 1, '', 'empoy? hahaha', '2014-05-02 15:09:33'),
(113, 'keep', 2, 'keep', 3, '', 'churatas!', '2014-05-02 15:10:03'),
(114, 'keep', 1, 'keep', 2, '', '=)', '2014-05-02 21:50:14'),
(115, 'keep', 1, 'keep', 3, '', 'kelan balik nila paolo sa office ?', '2014-05-03 15:44:36'),
(116, 'keep', 1, 'keep', 3, '', 'try mo mag reply, nakikita kung nabasa na ung msg. sa next monday pa balik ko ng Manila.', '2014-05-05 04:14:29'),
(117, 'keep', 3, 'deleted', 1, '', 'nandito pa ako sa manila..', '2014-05-05 15:55:03'),
(118, 'keep', 1, 'keep', 3, '', 'wala ako net dtio, sa shop lang ako nakikita open, di ako mkpag uplaod wala ako net, di ka nag tetext ?', '2014-05-07 13:39:27'),
(119, 'keep', 1, 'keep', 6, '', 'di ka nagtetext ? ano gamit mong number ngayun ?', '2014-05-08 14:22:40'),
(120, 'keep', 1, 'keep', 3, '', 'na upload ko na =)', '2014-05-08 14:27:21'),
(121, 'keep', 3, 'deleted', 1, '', 'bakit si sean laging online?', '2014-05-08 15:00:11'),
(122, 'keep', 1, 'keep', 3, '', 'hindi na lalagout wala pa kasing ajx to, pero pag nalagyan na mag auto out na yun, cp gamit sguro pang online', '2014-05-08 15:05:55'),
(123, 'keep', 8, 'keep', 3, '', 'ahihihihi', '2014-05-08 21:59:08'),
(124, 'keep', 8, 'keep', 7, '', 'nice pic pare', '2014-05-08 22:01:10'),
(125, 'keep', 7, 'deleted', 1, '', 'nice naman!!..hahaha', '2014-05-09 03:44:16'),
(126, 'keep', 7, 'keep', 3, '', 'hoy kupal! hahahahahaha', '2014-05-09 03:45:46'),
(127, 'keep', 7, 'deleted', 1, '', 'king okay nba yung chat??..', '2014-05-09 04:16:26'),
(128, 'keep', 7, 'keep', 8, '', 'owwww yeeeeaahhhhh!', '2014-05-09 04:16:50'),
(129, 'keep', 1, 'keep', 7, '', 'Ajax nlng kulang pero working na sya na gagmait na,', '2014-05-09 06:56:25'),
(130, 'keep', 3, 'keep', 7, '', 'kupal ka din!', '2014-05-09 13:09:20'),
(131, 'keep', 1, 'keep', 7, '', 'babalik na k sa monday  sas manila bro,', '2014-05-10 02:08:44'),
(142, 'keep', 1, 'keep', 3, '', 'asdwa', '2014-05-12 10:38:03'),
(143, 'keep', 1, 'keep', 3, '', 'adwasd', '2014-05-12 10:45:13'),
(144, 'keep', 1, 'keep', 3, '', 'adwasd', '2014-05-12 10:45:18'),
(145, 'keep', 1, 'keep', 3, '', 'asdwasdawdasdawsd', '2014-05-12 10:50:39'),
(146, 'keep', 1, 'keep', 3, '', 'awkjd;aklwhdoasdaw', '2014-05-12 10:53:32'),
(147, 'keep', 1, 'keep', 3, '', 'nice Ter =) ! malapit kana ma sabak sa pag eedit.', '2014-05-13 11:47:27'),
(148, 'keep', 1, 'keep', 6, '', 'awdaAWDAWDASD', '2014-05-14 07:41:15'),
(149, 'keep', 8, 'keep', 7, '', 'balita', '2014-05-20 03:25:12'),
(150, 'keep', 1, 'keep', 3, '', 'hoy pogi, pang ganun yun oh, alalalall', '2014-07-07 16:11:00'),
(151, 'keep', 3, 'keep', 1, '', 'olol', '2014-07-07 16:11:50'),
(152, 'keep', 1, 'keep', 3, 'unread', 'pag ganun yun oh . alalallalala', '2014-07-07 16:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `msg_inq`
--

CREATE TABLE IF NOT EXISTS `msg_inq` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `contact` varchar(125) NOT NULL,
  `comment` text NOT NULL,
  `msg_status` enum('read','unread','deleted','trash') NOT NULL DEFAULT 'unread',
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `msg_inq`
--

INSERT INTO `msg_inq` (`msg_id`, `name`, `contact`, `comment`, `msg_status`, `msg_date`) VALUES
(2, 'lester ramos', '09066478155', 'sample comment here', 'unread', '2014-08-20 10:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `posted_by` varchar(55) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `source` varchar(550) NOT NULL,
  `recycle` enum('post','deleted') NOT NULL DEFAULT 'post',
  `user_post_id` int(11) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `posted_by`, `date_posted`, `image`, `title`, `content`, `source`, `recycle`, `user_post_id`) VALUES
(1, 'King Miranda Romero', '2014-04-13 23:05:15', 'pac1.jpg', 'Pacquiao wrests back WBO welterweight belt from Bradly', 'Manny Pacquiao raises his fists in victory after wresting back the WBO welterweight title from Timothy Bradley', 'www.interaksyon.com/article/84703/gallery--pacquiao-wrests-back-wbo-welterweight-belt-from-bradley', 'post', 1),
(2, 'King Miranda Romero', '2014-04-14 00:00:18', 'newspaper.jpg', 'TPhilippine, Vietnamese navies to unite against China over beers and volleyball', 'The Philippine navy will soon return to a South China Sea island it lost to Vietnam 40 years ago to drink beer and play volleyball with Vietnamese sailors, symbolizing how once-suspicious neighbors are cooperating in the face of China''s assertiveness in d', 'www.interaksyon.com', 'post', 1),
(3, 'Lester Ramos', '2014-04-14 00:03:39', 'newspaper.jpg', 'TPhilippine, Vietnamese navies to unite against China over beers and volleyball', 'The Philippine navy will soon return to a South China Sea island it lost to Vietnam 40 years ago to drink beer and play volleyball with Vietnamese sailors, symbolizing how once-suspicious neighbors are cooperating in the face of China''s assertiveness in d', 'www.interaksyon.com', 'post', 3),
(4, 'Lester M. Ramos', '2014-04-14 00:05:09', 'newspaper.jpg', 'TPhilippine, Vietnamese navies to unite against China over beers and volleyball', 'The Philippine navy will soon return to a South China Sea island it lost to Vietnam 40 years ago to drink beer and play volleyball with Vietnamese sailors, symbolizing how once-suspicious neighbors are cooperating in the face of China''s assertiveness in d', 'www.interaksyon.com', 'post', 3),
(5, 'Lester M. Ramos', '2014-04-14 00:06:07', 'newspaper.jpg', 'TPhilippine, Vietnamese navies to unite against China over beers and volleyball', 'The Philippine navy will soon return to a South China Sea island it lost to Vietnam 40 years ago to drink beer and play volleyball with Vietnamese sailors, symbolizing how once-suspicious neighbors are cooperating in the face of China''s assertiveness in d', 'www.interaksyon.com', 'deleted', 3),
(6, 'King Miranda Romero', '2014-04-15 10:01:44', 'pba1111.jpg', 'Ginebra seeks playoff spot versus Alaska; Barako Bull, GlobalPort in cellar-dwellers'' clash', 'Barangay Ginebra San Miguel is seeking to formalize its entry into the playoffs of the PLDT Home TVolution Commissioner''s Cup when it takes on defending champion Alaska on Sunday at SMART-Araneta Coliseum.\r\n\r\nTipoff is set at 5:15 p.m. after the curtain-raiser between Barako Bull and GlobalPort at 3 p.m.\r\n\r\nThe match between the Gin Kings and the Aces will be a rematch of the finals of the tournament last year, which Alaska won in a 3-0 sweep.\r\n\r\nGinebra (3-4) is hoping for a different result this time as it tries to take a trouble-free ride into the quarterfinals.\r\n\r\nNew Gin Kings reinforcement Josh Powell, who had a solid debut in Ginebra''s win over Meralco two weeks ago, will be tested against the tournament''s reigning Best Import Robert Dozier at Alaska (4-3).\r\n\r\nIn the first game, Barako Bull (2-6) will try to keep alive its flagging hopes of making the quarterfinals when it takes on winless GlobalPort (0-8).', 'www.interaksyon.com/interaktv/ginebra-seeks-playoff-spot-versus-alaska-barako-bull-globalport-in-cellar-dwellers-clash', 'post', 1),
(7, 'Lester M. Ramos', '2014-04-15 10:01:44', 'news1.jpg', 'TPhilippine, Vietnamese navies to unite against China over beers and volleyball', 'The Philippine navy will soon return to a South China Sea island it lost to Vietnam 40 years ago to drink beer and play volleyball with Vietnamese sailors, symbolizing how once-suspicious neighbors are cooperating in the face of China''s assertiveness in d', 'www.interaksyon.com', 'post', 3),
(25, 'King Miranda Romero ', '2014-04-24 00:58:53', 'hostconn-line_png.png', 'we provide quality services', 'we are Team, we are Family', 'www.grabyard.com', 'deleted', 1),
(27, 'King Miranda Romero ', '2014-04-25 05:30:29', 'wzdl8aq1or2mqmoy4w4pf0ijevqvi0di1.jpg', 'sad', 'asd', 'asdasdasd', 'deleted', 1),
(28, 'King Miranda Romero ', '2014-05-08 14:48:15', 'hostconn-line_png1.png', 'hostconn will serve you soon,', 'upcoming updates will finalized the hostconn website', 'wwww.hostconn.com', 'post', 1),
(29, 'Allan B. Coleto', '2014-05-09 04:38:19', 'berrics.jpg', 'BATTLE COMMANDER PAUL RODRIGUEZ', 'The Battle Commander not only leads the troops into battle, but also plans attacks and formulates strategies. He is often both the brain and the brawn behind the army. Inside the Berrics, this position is now held by Paul Rodriguez.', 'theberrics.com/battle-commander/paul-rodriguez.html', 'post', 7),
(30, 'Allan B. Coleto', '2014-05-09 04:48:36', 'Capture.jpg', 'BATB 7 pros vs joes', 'WATCH skateboarding competition. pro vs joe..', 'www.theberrics.com/battle-at-the-berrics-7', 'post', 7);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `quote_id` int(11) NOT NULL AUTO_INCREMENT,
  `posted_by` varchar(55) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `from` varchar(55) NOT NULL,
  `recycle` enum('post','deleted') NOT NULL DEFAULT 'post',
  `id` int(11) NOT NULL,
  PRIMARY KEY (`quote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quote_id`, `posted_by`, `date_posted`, `image`, `message`, `from`, `recycle`, `id`) VALUES
(1, 'Neil Paolo P. Lumanglas', '2014-04-15 09:41:34', 'bghero.jpg', 'Be a yardstick of quality. Some people aren''t used to an environment where excellence is expected.', 'Steve Jobs', 'post', 4),
(2, 'King Miranda Romero', '2014-04-15 09:41:34', 'bghero.jpg', 'Three things cannot be long hidden: the sun, the moon, and the truth.', 'Buddah', 'post', 1),
(3, 'Lester M. Ramos', '2014-04-15 09:43:17', 'bghero.jpg', 'The world won''t care about your self-esteem. The world will expect you to accomplish something BEFORE you feel good about yourself.', 'Bill Gates', 'post', 3),
(4, 'Allan B. Coleto', '2014-04-15 09:43:17', 'bghero.jpg', 'The secret of getting ahead is getting started.', 'Mark Twain', 'post', 7),
(5, 'King Miranda Romero ', '2014-04-24 17:50:53', '', 'If you can''t explain it to a six year old, you don''t understand it yourself.', 'Albert Einstein', 'post', 1),
(6, 'King Miranda Romero ', '2014-04-24 18:22:18', '', 'Learn from yesterday, live for today, hope for tomorrow. The important thing is to not\r\nstop questioning.', 'Albert Einstein', 'post', 1),
(7, 'King Miranda Romero ', '2014-04-24 18:24:29', '', 'q3EQWEWQEWQEQEQEQWEDASDDADASASDS', 'QEEWEWQEWQEWQEWQ', 'deleted', 1),
(8, 'sean zayril p evangelista', '2014-04-26 04:08:59', '', 'Keep Moving Forward', 'Walt Disney', 'post', 2),
(9, 'sean zayril p evangelista', '2014-04-26 05:04:19', '', 'what is love really if it only affects, one aspect of life.?', 'SOJA', 'post', 2),
(10, 'Eman Picar', '2014-04-27 04:48:17', '', 'I have yet to show you, young warrior, what I''m truly capable of.', 'Cell (Dragon Ball Z)', 'post', 8),
(11, 'Allan B. Coleto', '2014-04-27 09:49:59', '', 'keep moving forward, because history start with UNKNOWN until it became USEFUL, and affects the future.', 'Grabyard / Hostconn', 'post', 7),
(12, 'King Miranda Romero ', '2014-04-28 11:20:03', '', 'In just a few moves, i can shake the world.', 'King M. Romero', 'post', 1),
(13, 'Neil Paolo P. Lumanglas', '2014-04-28 17:16:31', '', 'If two men on the same job agree all the time, then one is useless. If they disagree all the time, both are useless.', 'Darryl F. Zanuck', 'post', 4),
(14, 'Allan B. Coleto', '2014-05-09 04:11:42', '', 'The greatness of a man is not in how much wealth he acquires, but in his integrity and his ability to affect those around him positively.', 'Bob Marley', 'post', 7);

-- --------------------------------------------------------

--
-- Table structure for table `robinson_blog`
--

CREATE TABLE IF NOT EXISTS `robinson_blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(255) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_user_id` int(11) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_hashtag` varchar(125) NOT NULL,
  `blog_date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `blog_status` enum('','deleted') NOT NULL,
  `blog_hide_unhide` enum('','hidden') NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `robinson_blog`
--

INSERT INTO `robinson_blog` (`blog_id`, `blog_title`, `blog_content`, `blog_user_id`, `blog_img`, `blog_hashtag`, `blog_date_posted`, `blog_status`, `blog_hide_unhide`) VALUES
(1, 'blog', 'dsfdsafas', 1, '1510428_653295018071735_5891268121443745024_n.jpg', '#blog', '2014-10-21 02:36:22', '', ''),
(2, 'codeigniter', 'jfjhgjgj', 1, 'Koala.jpg', '', '2014-10-25 11:30:52', '', ''),
(3, 'codeigniter', 'dfasfasfasfas', 1, '1510428_653295018071735_5891268121443745024_n2.jpg', '', '2014-10-21 02:47:36', 'deleted', ''),
(4, 'dota 2', 'sample comment', 1, 'Chrysanthemum.jpg', '', '2014-10-21 02:46:10', 'deleted', ''),
(5, 'dota 2', 'adsfasfasdfas', 1, 'Jellyfish.jpg', '', '2014-10-21 02:47:31', 'deleted', ''),
(6, 'dota2', 'sadfsfs', 1, 'Penguins.jpg', '', '2014-10-25 11:49:46', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `robinson_contact_info`
--

CREATE TABLE IF NOT EXISTS `robinson_contact_info` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_no` varchar(25) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_type` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `robinson_contact_info`
--

INSERT INTO `robinson_contact_info` (`contact_id`, `contact_no`, `user_id`, `contact_type`) VALUES
(1, '092343242', 1, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `robinson_user`
--

CREATE TABLE IF NOT EXISTS `robinson_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `cellphone` varchar(17) NOT NULL,
  `telephone` int(11) NOT NULL,
  `company_log` varchar(128) NOT NULL,
  `account_stat` enum('active','inactive') NOT NULL,
  `status` enum('online') NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `business_name` varchar(128) NOT NULL,
  `conn_type` enum('baby','advance','business') NOT NULL,
  `username` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `robinson_user`
--

INSERT INTO `robinson_user` (`id`, `email`, `password`, `fullname`, `address`, `cellphone`, `telephone`, `company_log`, `account_stat`, `status`, `date_reg`, `business_name`, `conn_type`, `username`, `owner`) VALUES
(1, 'a.manansala@gmail.com', 'anthony', 'anthony manansala', 'manila', '0921456894', 6546452, '', 'active', 'online', '2014-10-08 03:00:45', 'Robinson Communities', 'advance', 'anthony', 'anthony');

-- --------------------------------------------------------

--
-- Table structure for table `rob_inq`
--

CREATE TABLE IF NOT EXISTS `rob_inq` (
  `inq_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_inq` varchar(255) NOT NULL,
  `email_inq` varchar(125) NOT NULL,
  `contact_inq` varchar(17) NOT NULL,
  `project_inq` varchar(255) NOT NULL,
  `comment_inq` text NOT NULL,
  `user_id_inq` int(11) NOT NULL,
  `date_inq` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_inq` enum('','important','trashbin','deleted') NOT NULL,
  PRIMARY KEY (`inq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `rob_inq`
--

INSERT INTO `rob_inq` (`inq_id`, `name_inq`, `email_inq`, `contact_inq`, `project_inq`, `comment_inq`, `user_id_inq`, `date_inq`, `status_inq`) VALUES
(1, 'joshua delos santos', 'josh@yahoo.com', '09123423434', 'manila', 'sample comment', 1, '2014-10-21 07:44:55', ''),
(2, 'parkway drive', 'keepeye16@yahoo.com', '09324324327', 'Metro Manila', 'sdfgdgdfgdfg', 1, '2014-10-21 08:08:07', ''),
(7, 'angelring', 'angel@yahoo.com', '09123423434', 'Metro Manila', 'sample kung lalabas ung success send', 1, '2014-10-21 21:43:27', 'trashbin'),
(8, 'angelring', 'keepeye16@yahoo.com', '09123423434', 'Metro Manila', 'dsfdhgfh', 1, '2014-10-21 22:29:44', ''),
(10, 'joshdrive', 'josh@yahoo.com', '09324242324', 'manila', 'asdfasf', 1, '2014-10-25 09:56:50', 'important'),
(11, 'je', 'je@yahoo.com', '0923432445', 'manila', 'asdfsf', 1, '2014-10-25 10:26:33', ''),
(19, 'sdfs', 'sdf@yahoo.com', '11', 'manila', 'adfasfasd', 1, '2014-10-25 11:58:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `services_slides`
--

CREATE TABLE IF NOT EXISTS `services_slides` (
  `slide_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slide_num` int(11) NOT NULL,
  `slide_header` varchar(256) NOT NULL,
  `slide_content` varchar(256) NOT NULL,
  `slide_img` varchar(256) NOT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `services_slides`
--

INSERT INTO `services_slides` (`slide_id`, `date`, `slide_num`, `slide_header`, `slide_content`, `slide_img`) VALUES
(1, '2014-05-14 06:27:26', 1, 'Keep in touch', 'this is a sample of content of slide num 1', 'adjustment3.jpg'),
(2, '2014-05-14 06:27:37', 2, 'Let''s Start Planning', 'this is a sample of content of slide num 2', 'planning5.jpg'),
(3, '2014-05-14 06:27:49', 3, 'Let''s Talk', 'this is a sample of content of slide num 3', 'lets-talk4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `themes` varchar(55) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`themes`, `id`) VALUES
('simplex', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `status` enum('','online') NOT NULL DEFAULT '',
  `profile_pic` varchar(500) NOT NULL,
  `bar_pic` varchar(256) NOT NULL,
  `account_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `fullname`, `address`, `contact`, `status`, `profile_pic`, `bar_pic`, `account_status`) VALUES
(1, 'king@yahoo.com', '123123123', 'King Miranda Romero ', 'Tondo Manila', '09066478155', 'online', 'king.jpg', '', 'active'),
(2, 'sean@yahoo.com', 'wetrustGod', 'sean zayril p evangelista', '282 fgt building aguado st. san miguel manila', '09358722821', '', 'sean.jpg', '', 'active'),
(3, 'akopositer@yahoo.com', '123456789', 'Lester M. Ramos', '1253 Lincallo St. Quiapo, Manila', '09057387004', '', 'lester.jpg', '', 'active'),
(4, 'paolo@yahoo.com', 'paoloneil', 'Neil Paolo P. Lumanglas', '282 fgt building aguado st. san miguel manila', '09064790825', 'online', 'paolo.jpg', '', 'active'),
(5, 'donking@yahoo.com', 'donking', 'Donking P. Huerto', '282 fgt building aguado st. san miguel manila', '09063820373', '', 'donking.jpg', '', 'active'),
(6, 'josh@yahoo.com', 'joshua', 'Joshua Delo Santos', 'Paco Manila', '09067600858', '', 'joshua.jpg', '', 'active'),
(7, 'jaka@yahoo.com', 'jakacoleto', 'Allan B. Coleto', 'Pinagbuhatan Pasig City', '09051717559', '', 'jaks.jpg', '', 'active'),
(8, 'eman@yahoo.com', 'emanpicar', 'Eman Picar', 'Malong Tondo Manila', '09168722903', 'online', 'eman.jpg', '', 'active'),
(9, 'kingmorilo@yahoo.com', 'kingmorilo', 'Ephraim Morilo III', 'Sta Mesa Manila', '09178629984', '', 'kingm.jpg', '', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
