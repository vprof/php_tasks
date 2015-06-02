-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 02 2015 г., 07:49
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `vprof`
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `firstName` varchar(256) NOT NULL,
  `lastName` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `age` int(255) NOT NULL,
  `sgroup` varchar(256) NOT NULL,
  `faculty` varchar(256) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`firstName`, `lastName`, `gender`, `age`, `sgroup`, `faculty`, `id`) VALUES
('Sidor', 'Sidorov', 'Male', 23, 'E909', 'Technology', 1),
('Ivan', 'Ivanov', 'Male', 23, 'E910', 'Medicine', 4),
('Petr', 'Petrov', 'Male', 23, 'E911', 'Economy', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
