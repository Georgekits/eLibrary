--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(25) NOT NULL,
  `title` varchar(40) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

-- --
-- -- Dumping data for table `books`
-- --

INSERT INTO `books` (`id`, `author`, `title`, `genre`, `price`) VALUES
(38, 'asd', 'asd', 'Science fiction', 123),
(22, 'Jon Duckett', 'HTML and CSS: Design and Build Websites', 'Technology & Program', 23),
(37, '1984', 'George Orwell', 'Science fiction', 10),
(39, 'sdfs', 'df', 'Science fiction', 234),
(40, '', '', 'Science fiction', 0),
(41, 'george', 'kitsos', 'Science fiction', 123);