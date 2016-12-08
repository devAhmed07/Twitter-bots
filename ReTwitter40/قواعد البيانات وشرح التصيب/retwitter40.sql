

--
-- Table structure for table `admincp`
--

CREATE TABLE IF NOT EXISTS `admincp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Mail` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admincp`
--

INSERT INTO `admincp` (`id`, `Username`, `Password`, `Mail`) VALUES
(1, 'admin', '123456', 'protop96@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `crons`
--

CREATE TABLE IF NOT EXISTS `crons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_all` int(11) NOT NULL,
  `user_her` int(11) NOT NULL,
  `user_end` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reply` varchar(200) CHARACTER SET latin1 NOT NULL,
  `accessToken` varchar(255) CHARACTER SET latin1 NOT NULL,
  `accessTokenSecret` varchar(255) CHARACTER SET latin1 NOT NULL,
  `iduser` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `reply_user`
--

CREATE TABLE IF NOT EXISTS `reply_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(300) CHARACTER SET latin1 NOT NULL,
  `reply_id` bigint(90) NOT NULL,
  `accessToken` varchar(300) CHARACTER SET latin1 NOT NULL,
  `accessTokenSecret` varchar(300) CHARACTER SET latin1 NOT NULL,
  `iduser` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `consumerkey` varchar(255) CHARACTER SET latin1 NOT NULL,
  `consumersecret` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tws` varchar(255) CHARACTER SET latin1 NOT NULL,
  `t_s` varchar(255) CHARACTER SET latin1 NOT NULL,
  `redirected` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `accessToken` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `accessTokenSecret` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `screen_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `limitreply` int(11) NOT NULL,
  `limitreply_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `username`, `accessToken`, `accessTokenSecret`, `screen_name`, `limitreply`, `limitreply_user`) VALUES
(1, '55', '55', '# Ù‡Ø§Ø´ØªØ§Ù‚ #', '2422456452-g9d8jxPYXZCLgSgl5NFFqXILPTtxGKajyOr9rM3', 'R3rHaqJYSGbZ7N2cS90wf4ebv1VFI95tmQhTRJHnqz6lk', '24Hashtag', 1, 1),
(2, '22', '22', '# Ù‡Ø§Ø´ØªØ§Ù‚ #', '2422456452-g9d8jxPYXZCLgSgl5NFFqXILPTtxGKajyOr9rM3', 'R3rHaqJYSGbZ7N2cS90wf4ebv1VFI95tmQhTRJHnqz6lk', '24Hashtag', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Description` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Tags` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Twitter` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `website`, `Description`, `Tags`, `Twitter`) VALUES
(1, 'Ø§Ù„Ø±Ø¯ Ø§Ù„ØªÙ„Ù‚Ø§Ø¦ÙŠ', ',ÙˆØµÙ Ø§Ù„Ù…ÙˆÙ‚Ø¹', 'Ø§Ù„ÙƒÙ„Ù…Ø§Øª Ø§Ù„Ø¯Ù„ÙŠÙ„Ø©', 'Ù…Ø£ Ø°Ø§ Ø³ÙˆÙ ØªØºØ±Ø¯');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
