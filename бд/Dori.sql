-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 12 2023 г., 13:38
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Dori`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Рыба'),
(2, 'Стейки'),
(3, 'Краб'),
(4, 'Лобстер'),
(5, 'Икра'),
(6, 'Осьминоги');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(512) NOT NULL,
  `category_id` int NOT NULL,
  `content` varchar(256) NOT NULL,
  `weight` varchar(128) NOT NULL,
  `pack` varchar(128) NOT NULL,
  `keeping` varchar(256) NOT NULL,
  `nut_value` varchar(512) NOT NULL,
  `note` varchar(256) NOT NULL,
  `price` varchar(64) NOT NULL,
  `delivery` varchar(256) NOT NULL,
  `image_name` varchar(128) NOT NULL,
  `image_path` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category_id`, `content`, `weight`, `pack`, `keeping`, `nut_value`, `note`, `price`, `delivery`, `image_name`, `image_path`) VALUES
(22, 'ОСЬМИНОГИ МИНИ ЗАМОРОЖЕННЫЕ ', '', 6, '', 'Цена за 400г', '', '', '', '', 'Цена: 399р', '', '3.png', 'bd-images/'),
(23, 'МЯСО УСТРИЦ ЗАМОРОЖЕННОЕ JAPAN', '', 1, '', 'Цена за 250г', '', '', '', '', 'Цена: 1400р', '', '1.png', 'bd-images/'),
(24, 'ФОРЕЛЬ КАРЕЛЬСКАЯ ОХЛАЖДЕННАЯ', '', 1, '', 'Цена за 1кг', '', '', '', '', 'Цена: 1190р', '', '4.png', 'bd-images/'),
(25, 'КРАБ МЯГКОПАНЦИРНЫЙ СВЕЖЕМОРОЖЕНЫЙ JAPAN', '', 3, '', 'Цена за 160г', '', '', '', '', 'Цена: 1750р', '', '2.png', 'bd-images/'),
(26, 'МЯСО КАМЧАТСКОГО КРАБА, ПЕРВАЯ ФАЛАНГА', '', 3, '', 'Цена за 500г', '', '', '', '', 'Цена: 4350р', '', '5.png', 'bd-images/'),
(27, 'ГОЛУБЫЕ ЯПОНСКИЕ КРЕВЕТКИ ТЭНШИ', '', 4, '', 'Цена за 2кг', '', '', '', '', 'Цена: 9900р', '', '6.png', 'bd-images/'),
(28, 'КАРАКАТИЦА ОЧИЩЕННАЯ МИНИ', '', 2, '', 'Цена за 400г', '', '', '', '', 'Цена: 765р', '', '12.png', 'bd-images/'),
(29, 'ТУНЕЦ ИСПАНСКИЙ БЛЮФИН ', '', 1, '', 'Цена за 350г', '', '', '', '', 'Цена: 23900р', '', '13.png', 'bd-images/'),
(30, 'СИБАС БЕЗ ГОЛОВЫ', '', 1, '', 'Цена за 900г', '', '', '', '', 'Цена: 900р', '', '14.png', 'bd-images/'),
(31, 'ФОРЕЛЬ СТЕЙКИ ', '', 2, '', 'Цена за 900г', '', '', '', '', 'Цена: 1690р', '', '15.png', 'bd-images/'),
(32, 'СТЕЙКИ ДАЛЬНЕВОСТОЧНОЙ НЕРКИ', '', 2, '', 'Цена за 650г', '', '', '', '', 'Цена: 1900р', '', '16.png', 'bd-images/'),
(34, 'ПАЛТУС СИНЕКОРЫЙ ТУШКА', '', 1, '', 'Цена за 2.5кг', '', '', '', '', 'Цена: 2900р', '', '17.png', 'bd-images/'),
(35, 'ОХЛАЖДЕННАЯ АКУЛА', '', 1, '', 'Цена за 1кг', '', '', '', '', 'Цена: 2064р', '', '18.png', 'bd-images/'),
(36, 'ХВОСТЫ ЛОБСТЕРА', '', 4, '', 'Цена за 200г', '', '', '', '', 'Цена: 17700р', '', '20.png', 'bd-images/'),
(37, 'ИКРА ОСЕТРА РОЯЛ ', '', 5, '', 'Цена за 200г', '', '', '', '', 'Цена: 435р', '', '19.png', 'bd-images/'),
(38, 'МЯСО МОЛЛЮСКА ХОККИГАЙ', '', 2, '', 'Цена за 1кг', '', '', '', '', 'Цена: 1900р', '', '8.png', 'bd-images/'),
(39, 'ЩУПАЛЬЦА ОСЬМИНОГА ', '', 6, '', 'Цена за 850г', '', '', '', '', 'Цена: 1900р', '', '9.png', 'bd-images/'),
(40, 'КАЛЬМАР ЛОЛИГО', '', 4, '', 'Цена за 600г', '', '', '', '', 'Цена: 700р', '', '11.png', 'bd-images/'),
(41, 'ЛАНГУСТИНЫ ЯПОНСКИЕ \"СКАМПИ\"', '', 4, '', 'Цена за 1кг', '', '', '', '', 'Цена: 14900р', '', '10.png', 'bd-images/'),
(42, 'КЛЕМЫ ВОНОЛОГЕ В РАКОВИНЕ В/М 31/40', '', 4, '', 'Цена за 1кг', '', '', '', '', 'Цена: 550р', '', '21.png', 'bd-images/'),
(43, 'ТИГРОВЫЕ КРЕВЕТКИ 8/12 С ГОЛОВОЙ', '', 4, '', 'Цена за 500г', '', '', '', '', 'Цена: 699р', '', '7.png', 'bd-images/');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `username`) VALUES
(4, 'admin@admin.com', 'admin12345', 'admin'),
(7, 'vova@mail.ru', '12345', 'Вова');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
