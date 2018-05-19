-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Хост: 10.0.0.168:3309
-- Время создания: Янв 06 2016 г., 12:50
-- Версия сервера: 5.5.44-37.3-log
-- Версия PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `sanga6666-0_randomcago`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answerers`
--

CREATE TABLE IF NOT EXISTS `answerers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `money_shop`
--

CREATE TABLE IF NOT EXISTS `money_shop` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_pay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cnt_goods` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit_goods` text COLLATE utf8_unicode_ci NOT NULL,
  `id_goods` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `money_shop`
--

INSERT INTO `money_shop` (`id`, `uid`, `inv`, `date_pay`, `cnt_goods`, `unit_goods`, `id_goods`) VALUES
(1, '76561198126603701', '10-6639093001446760694-76c2a8660d90522b4129c3c8807b76f9', '06.11.2015 12:58:22', '10', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` smallint(5) unsigned NOT NULL,
  `answerer` int(10) unsigned NOT NULL,
  `title` tinytext NOT NULL,
  `text` text NOT NULL,
  `answer` text NOT NULL,
  `created` varchar(55) NOT NULL,
  `changed` datetime NOT NULL,
  `answered` datetime DEFAULT NULL,
  `author` varchar(40) NOT NULL,
  `shown` tinyint(4) NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pastor` (`answerer`),
  KEY `created` (`created`),
  KEY `answered` (`answered`),
  KEY `shown` (`shown`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `category`, `answerer`, `title`, `text`, `answer`, `created`, `changed`, `answered`, `author`, `shown`, `price`, `images`) VALUES
(1, 1, 1, '[Chroma Case] Glock-18 | Catacombs | Захоронение', '', '', '02.12.2015 14:32:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 8, 'zap/1.png'),
(2, 1, 57, '[Chroma Case] Glock-18 | Catacombs | Захоронение', '', '', '02.12.2015 14:33:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '57', 0, 9, 'zap/1.png'),
(3, 1, 57, '[Knife Case] Glock-18 | Catacombs | Захоронение', '', '', '02.12.2015 14:34:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '57', 0, 9, 'zap/1.png'),
(4, 1, 1, '[Chroma Case] MP9 | Deadly Poison | Смертельный яд', '', '', '02.12.2015 14:36:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 2, 'zap/3.png'),
(5, 1, 54, '[Chroma Case] MP9 | Deadly Poison | Смертельный яд', '', '', '02.12.2015 19:39:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 3, 'zap/3.png'),
(6, 1, 54, '[ZAPRECHENNOE] Glock-18 | Catacombs | Захоронение', '', '', '04.12.2015 18:12:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 6, 'zap/1.png'),
(9, 1, 54, '[ZASEKRECHENNOE] SCAR-20 | Grotto | Грот', '', '', '04.12.2015 20:54:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 10, 'zap/4.png'),
(10, 1, 54, '[ZAPRECHENNOE] M249 | System Lock | Блокировка', '', '', '04.12.2015 20:54:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 2, 'zap/2.png'),
(11, 1, 54, '[ZAPRECHENNOE] M249 | System Lock | БлокировкаStatTrak™', '', '', '04.12.2015 20:56:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 5, 'zap/2.png'),
(14, 1, 1, '[ARMEYSKOE] SCAR-20 | Grotto | Грот', '', '', '05.12.2015 15:51:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 3, 'zap/4.png'),
(15, 1, 1, '[GLOCK-18] Glock-18 | Catacombs | Захоронение', '', '', '05.12.2015 15:54:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 10, 'zap/1.png'),
(16, 1, 1, '[GLOCK-18] SCAR-20 | Grotto | Грот', '', '', '05.12.2015 15:56:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 6, 'zap/4.png'),
(17, 1, 1, '[ARMEYSKOE] M249 | System Lock | Блокировка', '', '', '05.12.2015 15:58:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 7, 'zap/2.png'),
(18, 2, 1, '[ZASEKRECHENNOE] Dual Berettas | Urban Shock | Городской шок', '', '', '05.12.2015 15:59:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 4, 'zap/6.png'),
(20, 2, 1, '[M4A4] Dual Berettas | Urban Shock | Городской шок', '', '', '05.12.2015 16:04:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 10, 'zap/6.png'),
(24, 1, 54, '[ZAPRECHENNOE] SCAR-20 | Grotto | Грот', '', '', '05.12.2015 18:41:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 10, 'zap/4.png'),
(25, 1, 54, '[ZAPRECHENNOE] Glock-18 | Catacombs | Захоронение', '', '', '05.12.2015 18:42:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 6, 'zap/1.png'),
(26, 1, 54, '[ZAPRECHENNOE] XM1014 | Quicksilver | Ртуть', '', '', '05.12.2015 19:42:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 3, 'zap/5.png'),
(28, 1, 1, '[ZAPRECHENNOE] SCAR-20 | Grotto | Грот', '', '', '07.12.2015 13:35:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 1, 'zap/4.png'),
(29, 1, 54, '[ZAPRECHENNOE] M249 | System Lock | Блокировка', '', '', '07.12.2015 14:20:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 7, 'zap/2.png'),
(30, 1, 1, '[ARMEYSKOE] Glock-18 | Catacombs | Захоронение', '', '', '07.12.2015 14:21:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 8, 'zap/1.png'),
(31, 1, 54, '[ZAPRECHENNOE] M249 | System Lock | Блокировка', '', '', '07.12.2015 15:30:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 8, 'zap/2.png'),
(32, 1, 54, '[ZAPRECHENNOE] Glock-18 | Catacombs | Захоронение', '', '', '07.12.2015 15:31:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 7, 'zap/1.png'),
(33, 1, 1, '[ZAPRECHENNOE] SCAR-20 | Grotto | Грот', '', '', '07.12.2015 15:41:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 7, 'zap/4.png'),
(37, 1, 54, '[ARMEYSKOE] XM1014 | Quicksilver | Ртуть', '', '', '07.12.2015 16:18:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '54', 0, 4, 'zap/5.png'),
(38, 2, 1, '[ARMEYSKOE] Dual Berettas | Urban Shock | Городской шок', '', '', '07.12.2015 16:18:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 2, 'zap/6.png'),
(39, 1, 1, '[ARMEYSKOE] XM1014 | Quicksilver | Ртуть', '', '', '07.12.2015 16:23:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 4, 'zap/5.png'),
(40, 2, 1, '[ZAPRECHENNOE] Dual Berettas | Urban Shock | Городской шок', '', '', '07.12.2015 16:24:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 9, 'zap/6.png'),
(41, 1, 1, '[ZAPRECHENNOE] MP9 | Deadly Poison | Смертельный ядStatTrak™', '', '', '07.12.2015 16:24:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 5, 'zap/3.png'),
(44, 1, 1, '[ZAPRECHENNOE] M249 | System Lock | Блокировка', '', '', '07.12.2015 18:26:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 3, 'zap/2.png'),
(45, 1, 1, '[ARMEYSKOE] M249 | System Lock | Блокировка', '', '', '07.12.2015 18:48:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 4, 'zap/2.png'),
(46, 1, 1, '[TAINOE] M249 | System Lock | Блокировка', '', '', '07.12.2015 18:48:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 3, 'zap/2.png'),
(47, 1, 1, '[GLOCK-18] XM1014 | Quicksilver | Ртуть', '', '', '07.12.2015 18:49:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 5, 'zap/5.png'),
(49, 1, 57, '[ARMEYSKOE] M249 | System Lock | Блокировка', '', '', '07.12.2015 18:52:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '57', 0, 6, 'zap/2.png'),
(50, 1, 1, '[ZAPRECHENNOE] SCAR-20 | Grotto | ГротStatTrak™', '', '', '21.12.2015 16:54:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 2, 'zap/4.png'),
(52, 1, 59, '[AWP] Glock-18 | Catacombs | Захоронение', '', '', '21.12.2015 16:56:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '59', 0, 7, 'zap/1.png'),
(54, 1, 1, '[TAINOE] M249 | System Lock | Блокировка', '', '', '21.12.2015 17:02:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 9, 'zap/2.png'),
(55, 1, 59, '[TAINOE] SCAR-20 | Grotto | Грот', '', '', '21.12.2015 17:03:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '59', 0, 7, 'zap/4.png'),
(56, 1, 1, '[ARMEYSKOE] M249 | System Lock | Блокировка', '', '', '21.12.2015 17:04:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 5, 'zap/2.png'),
(59, 1, 1, '[ZASEKRECHENNOE] MP9 | Deadly Poison | Смертельный яд', '', '', '21.12.2015 17:06:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 4, 'zap/3.png'),
(60, 1, 1, '[CHROMA2CASE] SCAR-20 | Grotto | Грот', '', '', '21.12.2015 17:24:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 0, 5, 'zap/4.png'),
(63, 1, 72, '[ZAPRECHENNOE] Glock-18 | Catacombs | Захоронение', '', '', '05.01.2016 15:39:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '72', 0, 4, 'zap/1.png'),
(64, 1, 72, '[ZAPRECHENNOE] SCAR-20 | Grotto | Грот', '', '', '05.01.2016 15:39:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '72', 0, 8, 'zap/4.png'),
(65, 1, 72, '[GLOCK-18] SCAR-20 | Grotto | Грот', '', '', '05.01.2016 15:39:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '72', 0, 10, 'zap/4.png'),
(66, 1, 72, '[SHADOWCASE] XM1014 | Quicksilver | Ртуть', '', '', '05.01.2016 15:49:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '72', 0, 3, 'zap/5.png'),
(67, 1, 72, '[TAINOE] SCAR-20 | Grotto | Грот', '', '', '05.01.2016 16:02:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '72', 0, 2, 'zap/4.png'),
(68, 2, 72, '[GLOCK-18] Dual Berettas | Urban Shock | Городской шок', '', '', '05.01.2016 19:18:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '72', 0, 8, 'zap/6.png');

-- --------------------------------------------------------

--
-- Структура таблицы `question_categories`
--

CREATE TABLE IF NOT EXISTS `question_categories` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `parent` smallint(6) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(40) NOT NULL,
  `shown` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`),
  KEY `parent` (`parent`),
  KEY `shown` (`shown`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `question_categories`
--

INSERT INTO `question_categories` (`id`, `parent`, `title`, `alias`, `shown`) VALUES
(1, NULL, 'milspec', 'milspec', 1),
(2, NULL, 'restricted', 'restricted', 1),
(3, NULL, 'classified', 'classified', 1),
(4, NULL, 'covert', 'covert', 1),
(5, NULL, 'rare', 'rare', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users_shop`
--

CREATE TABLE IF NOT EXISTS `users_shop` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `money` int(10) NOT NULL DEFAULT '0',
  `uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img2` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `network` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trade_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ban` int(11) NOT NULL DEFAULT '0',
  `nickname` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Дамп данных таблицы `users_shop`
--

INSERT INTO `users_shop` (`id`, `money`, `uid`, `img`, `img2`, `network`, `last_name`, `first_name`, `identity`, `trade_url`, `token`, `ban`, `nickname`) VALUES
(1, 97552, '76561198006009595', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/55/55c705356e8b49733b4987575bc5f9c7e7b2e1ad.jpg', NULL, 'steam', 'Васильев', 'Александр', 'http://steamcommunity.com/openid/id/76561198006009595', '123', 'bada8ca80ef11e32b64acd925325361b', 0, 'SANGA666'),
(72, 489, '76561197965070616', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/52/520f5556d7948693e035deb8d4ee59d0074a40e9.jpg', '', 'steam', 'ниже | Information below', 'Информация', 'http://steamcommunity.com/openid/id/76561197965070616', 'https://steamcommunity.com/tradeoffer/new/?partner=4804888&token=PsT8Fu3M', '4f89f4441a11e9e161cce9447c7b0c3f', 0, 'Warrhogg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
