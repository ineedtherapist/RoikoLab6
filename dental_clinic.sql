-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 20 2023 г., 22:57
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dental_clinic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `appoint_time` datetime NOT NULL,
  `client_id` int(11) NOT NULL,
  `dentist_id` int(11) NOT NULL,
  `clinic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `appointments`
--

INSERT INTO `appointments` (`id`, `service_id`, `appoint_time`, `client_id`, `dentist_id`, `clinic_id`) VALUES
(100, 22, '2023-11-21 15:30:00', 33, 12, 1),
(101, 22, '2023-11-30 10:20:00', 31, 13, 1),
(102, 21, '2023-11-19 16:25:00', 32, 11, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `phone_number` decimal(15,0) NOT NULL,
  `date_birth` date NOT NULL,
  `allergies` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `name`, `lastname`, `middlename`, `phone_number`, `date_birth`, `allergies`) VALUES
(31, 'anton', 'kostaniuk', 'volodymyrovych', 380957838720, '2006-05-24', 'air, water, earth, fire. '),
(32, 'vlad', 'groshev', 'vyacheslavovych', 3809537428484, '2006-02-23', 'null'),
(33, 'lenya', 'zvarych', 'mykolayovych', 380958883344, '2006-05-02', 'rap');

-- --------------------------------------------------------

--
-- Структура таблицы `clinic`
--

CREATE TABLE `clinic` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `street_num` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `clinic`
--

INSERT INTO `clinic` (`id`, `name`, `city`, `street_name`, `street_num`) VALUES
(1, 'clinic', 'lutsk', 'peremogi ', 14);

-- --------------------------------------------------------

--
-- Структура таблицы `dentists`
--

CREATE TABLE `dentists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `clinic_id` int(11) NOT NULL,
  `phone_number` decimal(15,0) NOT NULL,
  `date_birth` date NOT NULL,
  `hiring_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dentists`
--

INSERT INTO `dentists` (`id`, `name`, `lastname`, `middlename`, `post`, `clinic_id`, `phone_number`, `date_birth`, `hiring_date`) VALUES
(11, 'denis', 'pepis', 'bob', 'Dentist-surgeon', 1, 380953334523, '1975-06-13', '2013-11-15'),
(12, 'mike', 'bike', 'tyson', 'Dentist-therapist', 1, 380953847358, '2004-01-15', '2023-11-10'),
(13, 'bruce', 'wayne', 'thomas', 'Doctor-dentist', 1, 380952872875, '1987-04-07', '2003-04-18');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `price`) VALUES
(21, 'Therapeutic treatment and diagnostics', 250),
(22, 'preventive and therapeutic procedures aimed at pre', 500),
(23, 'surgical treatment', 400);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id_to_appointment` (`client_id`),
  ADD KEY `dentist_id_to_appointment` (`dentist_id`),
  ADD KEY `clinic_id_to_appointment` (`clinic_id`),
  ADD KEY `service_id_to_appointment` (`service_id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dentists`
--
ALTER TABLE `dentists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clinic_id_to_clinics` (`clinic_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `clinic`
--
ALTER TABLE `clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `dentists`
--
ALTER TABLE `dentists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `client_id_to_appointment` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  ADD CONSTRAINT `clinic_id_to_appointment` FOREIGN KEY (`clinic_id`) REFERENCES `clinic` (`id`),
  ADD CONSTRAINT `dentist_id_to_appointment` FOREIGN KEY (`dentist_id`) REFERENCES `dentists` (`id`),
  ADD CONSTRAINT `service_id_to_appointment` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Ограничения внешнего ключа таблицы `dentists`
--
ALTER TABLE `dentists`
  ADD CONSTRAINT `clinic_id_to_clinics` FOREIGN KEY (`clinic_id`) REFERENCES `clinic` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
