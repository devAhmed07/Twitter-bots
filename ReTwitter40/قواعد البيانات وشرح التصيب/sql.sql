-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- المزود: localhost
-- أنشئ في: 27 يوليو 2013 الساعة 01:25
-- إصدارة المزود: 5.5.27
-- PHP إصدارة: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `twi1`
--

-- --------------------------------------------------------

--
-- بنية الجدول `AdminCp`
--

CREATE TABLE IF NOT EXISTS `AdminCp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Mail` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `AdminCp`
--

INSERT INTO `AdminCp` (`id`, `Username`, `Password`, `Mail`) VALUES
(1, 'admin', '123456', 'protop96@gmail.com');

-- --------------------------------------------------------

--
-- بنية الجدول `all`
--

CREATE TABLE IF NOT EXISTS `all` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Tags` varchar(200) NOT NULL,
  `Twitter` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `all`
--

INSERT INTO `all` (`id`, `website`, `Description`, `Tags`, `Twitter`) VALUES
(1, 'Ø§Ù„Ø±Ø¯ Ø§Ù„ØªÙ„Ù‚Ø§Ø¦ÙŠ', 'Ù…ØºØ±Ø¯', 'Ù…ØºØ±Ø¯', 'Ù…ØºØ±Ø¯');

-- --------------------------------------------------------

--
-- بنية الجدول `cronR`
--

CREATE TABLE IF NOT EXISTS `cronR` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(300) NOT NULL,
  `accessToken` varchar(300) NOT NULL,
  `accessTokenSecret` varchar(300) NOT NULL,
  `reply_id` bigint(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `cronS`
--

CREATE TABLE IF NOT EXISTS `cronS` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_all` int(11) NOT NULL,
  `user_her` int(11) NOT NULL,
  `user_end` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reply` text NOT NULL,
  `accessToken` varchar(300) NOT NULL,
  `accessTokenSecret` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `reply_user`
--

CREATE TABLE IF NOT EXISTS `reply_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(300) NOT NULL,
  `reply_id` bigint(90) NOT NULL,
  `accessToken` varchar(300) NOT NULL,
  `accessTokenSecret` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) DEFAULT NULL,
  `oauth_uid` varchar(300) DEFAULT NULL,
  `oauth_provider` varchar(300) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL,
  `twitter_oauth_token` varchar(300) DEFAULT NULL,
  `twitter_oauth_token_secret` varchar(300) DEFAULT NULL,
  `accessToken` varchar(300) DEFAULT NULL,
  `accessTokenSecret` varchar(300) DEFAULT NULL,
  `screen_name` varchar(300) DEFAULT NULL,
  `Muslim` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
