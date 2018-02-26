-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2018 at 03:19 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lineweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `text` longtext NOT NULL,
  `author` varchar(50) NOT NULL,
  PRIMARY KEY (`title`),
  UNIQUE KEY `i.d.` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `text`, `author`) VALUES
(1, 'Lorem ipsum', 'news1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Marko Nikolic'),
(2, 'Duis aute irure dolor', 'news2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Marko Nikolic'),
(3, 'Duis faucibus', 'news3.jpg', 'Duis faucibus interdum metus, eu sagittis eros hendrerit et. Etiam a nisi varius, eleifend nunc id, finibus magna. Nulla cursus urna varius libero tincidunt, molestie tincidunt ipsum aliquet. Donec nisi elit, rutrum et justo at, ornare auctor erat. Nunc a tincidunt dui. Pellentesque cursus vel turpis nec feugiat. Morbi mauris nulla, ultricies sit amet hendrerit ac, auctor id erat. Nunc aliquam tortor vitae ligula posuere, id aliquam dolor tincidunt. Pellentesque commodo odio magna, non laoreet odio consectetur sed. Praesent scelerisque sed est tristique eleifend.', 'Pera Peric'),
(4, 'Praesent egestas in lorem', 'news4.jpg', 'Praesent egestas in lorem sed molestie. Sed a nisl vitae ex sodales mattis sit amet id sem. Integer nulla odio, cursus eu volutpat ac, interdum sit amet ex. Fusce at eros rutrum, varius lectus sed, vestibulum enim. Nunc vitae mollis dolor, vitae ornare neque. Vivamus convallis imperdiet egestas. Nulla orci nisl, fringilla nec augue ac, tristique viverra risus. Vestibulum ac nulla finibus, finibus ex vulputate, mattis ex. Vestibulum sollicitudin felis aliquam nisi sodales rhoncus. In odio sem, vulputate et malesuada id, blandit nec orci. Donec consequat diam porttitor tellus dictum sagittis. Nulla luctus vel lacus a ultricies. Etiam et rhoncus odio, ac convallis libero. Fusce aliquet placerat erat sed consequat. Nunc elementum felis mi, eu scelerisque nisl dictum a.', 'Mitar Miric'),
(5, 'Phasellus dignissim', 'news5.jpg', 'Aenean vel diam lacinia augue auctor commodo sodales sollicitudin orci. Proin rhoncus scelerisque elit, nec feugiat sem gravida at. Phasellus dignissim luctus turpis quis hendrerit. Donec scelerisque purus in eros semper vulputate. Curabitur velit quam, varius ullamcorper sem sagittis, varius vehicula dui. Nunc ultrices, ex eget facilisis sodales, tortor metus tempor elit, a sagittis ligula urna id lectus. Nam fermentum nisi rutrum, consectetur lacus nec, molestie dolor. Nam commodo tristique mauris, in tristique nulla consequat a. Proin aliquam volutpat lectus non dignissim. Nullam lobortis, dolor non dignissim interdum, dui metus venenatis elit, et volutpat metus ex nec nunc.', 'Mitar Peric'),
(6, 'Fusce vitae', 'news6.jpg', 'Ut commodo eu nunc sit amet imperdiet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin a libero sem. Donec facilisis nulla non orci convallis sollicitudin. Vestibulum ac placerat orci, vitae placerat odio. Fusce laoreet, justo non cursus accumsan, mauris metus euismod nisi, ut finibus felis est vitae sem. Donec consequat consectetur vehicula. Aliquam molestie eget sem nec facilisis. Curabitur aliquam nisi nulla. Sed bibendum tellus ac ipsum rutrum molestie. In lacinia lectus tellus, quis venenatis ligula lobortis et. Praesent rutrum justo eget risus lacinia auctor. Nulla vel ligula sed tellus semper efficitur vel pharetra tellus. Nam a lectus eget ex aliquet sollicitudin. Fusce vitae justo ex.', 'Marko Nikolic'),
(7, 'Morbi posuere est', 'news7.jpg', 'Donec fermentum ultrices justo ac lacinia. Nulla dui ante, laoreet nec ligula ac, placerat varius orci. Nulla nec purus rhoncus metus interdum dapibus. Donec sed suscipit odio, fermentum congue tellus. Maecenas laoreet feugiat felis congue mattis. Nunc feugiat nisi quis nisi ullamcorper varius. Vestibulum ac tellus non nisl euismod ullamcorper id a justo. Fusce non fringilla diam. Proin tristique mauris sit amet urna gravida, sit amet venenatis magna convallis. Quisque neque sapien, eleifend nec congue non, molestie nec dolor. Ut tincidunt est ut felis facilisis, sit amet faucibus nisi lacinia. Phasellus id mauris nec magna auctor venenatis a sed arcu. Nulla suscipit euismod orci ac aliquet. Mauris vitae venenatis est. Morbi posuere est a porta imperdiet.', 'Marko Markovic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `i.d.` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `priviledge` varchar(10) NOT NULL,
  PRIMARY KEY (`i.d.`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`i.d.`, `username`, `password`, `user`, `priviledge`) VALUES
(1, 'marniko', 'bubica', 'Marko Nikolic', 'admin'),
(2, 'perica', '123456', 'Pera Peric', 'member');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
