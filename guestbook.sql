-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 14 2015 г., 18:52
-- Версия сервера: 5.6.13
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `guestbook`
--
CREATE DATABASE IF NOT EXISTS `guestbook` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `guestbook`;

-- --------------------------------------------------------

--
-- Структура таблицы `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `autoID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `response` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_auto` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`autoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `guestbook`
--

INSERT INTO `guestbook` (`autoID`, `name`, `email`, `comment`, `response`, `date_auto`) VALUES
(1, 'First', '1email', 'Comment first', 'Bad', 1435521801),
(2, '', '', '', 'Good', 1435521911),
(3, 'hello', 'mail', 'name', 'Good', 1435522166),
(4, 'Ð²Ð°Ð¿Ð²Ð°', 'ÑƒÐºÐ¿ÑƒÐºÐ¿', 'ÑƒÐºÐ¿ÑƒÐºÐ¿Ñƒ', 'Bad', 1435524415),
(5, 'Ð°Ð¿Ð²Ð²Ð°Ð²Ð¿', 'ÐºÐ¿ÑƒÐ¿ÐºÑƒÐºÐ¿', 'ÑƒÐºÐ¿ÑƒÐºÐ¿ÑƒÐºÐ¿', 'Good', 1435524712),
(6, 'ÑƒÐºÐ¿ÑƒÐºÐ¿ÑƒÐ¿', 'ÑƒÐºÐ¿ÑƒÐºÐ¿ÑƒÐºÐ¿', 'ÑƒÐºÐ¿ÑƒÐºÐ¿ÑƒÐ¿Ñƒ', 'Bad', 1435524725),
(7, 'Ñ–Ð²Ð°Ñ–Ð²Ð°Ñ–', '', 'Ñ–Ð²Ð°Ñ–Ð²', 'Good', 1435525642),
(8, 'Ð¢ÐµÑÑ‚', 'Ð¾Ñ‚', 'Ð¢ÐµÑÑ‚ÑƒÑ”Ð¼Ð¾', 'Bad', 1435526852),
(9, 'Ñ–Ð²Ð°Ñ–Ð²Ð°', 'Ñ–Ð²Ð°Ñ–Ñ–', 'Ñ†ÑƒÑ–Ð²Ð°', 'Good', 1435526869),
(10, 'Ñ–Ð²Ð°Ñ–', 'Ñ–Ð²Ð°', 'Ñ–Ð²Ð°', 'Good', 1435526875),
(11, 'Ð²Ð°Ð¿Ð²Ð°Ð¿', 'Ð²Ð¿ÑƒÐºÐ¿ÑƒÐ¿', 'Ñ–Ð²Ð¿Ð²Ð°Ð¿Ð²', 'Bad', 1435526888),
(12, 'ÑƒÐ¿ÐºÑƒ', 'ÑƒÐºÐ¿ÑƒÐº', 'Ð°Ñ†ÑƒÑƒÑ†Ð°Ñ†Ð¿', 'Bad', 1435526898),
(13, 'Ñ†ÑƒÐ°Ñ†ÑƒÐ°ÑƒÑ†Ð°', 'Ñ–Ð²Ð°Ñ–Ð²Ð°Ñ–Ð°', 'Ñ†ÑƒÐ°Ñ†ÑƒÐ°ÑƒÑ†', 'Good', 1435526905),
(14, 'ÑÐ²Ð°Ñ–Ð²Ð°Ñ–Ð²Ð°', 'Ñ–Ð²Ð°Ñ–Ð²Ð°Ð²Ñ–', 'Ñ–Ð²Ð°Ñ–Ð²Ð°', 'Good', 1435527116),
(15, 'Kate', 'mail@i.ua', 'Ñ– Ñ‡Ð¸ Ð²Ñ–Ñ€Ð½Ð¾ Ð²Ñ–Ð½ Ð²Ð²Ñ–Ð² email', 'Good', 1436805363),
(16, 'Vlad', 'vlad@mail.ru', 'negative negative negative negative negative negative negative negative negative negative', 'Bad', 1436887849);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
