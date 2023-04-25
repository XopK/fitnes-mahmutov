-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 25 2023 г., 08:55
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fitnes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `plans`
--

CREATE TABLE `plans` (
  `id_plan` int NOT NULL,
  `client` int NOT NULL,
  `date_training` date NOT NULL,
  `status_success` int NOT NULL,
  `trainer` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `requestes`
--

CREATE TABLE `requestes` (
  `id_request` int NOT NULL,
  `client_req` int NOT NULL,
  `trainer_req` int NOT NULL,
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_req` date NOT NULL,
  `purpose` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `requestes`
--

INSERT INTO `requestes` (`id_request`, `client_req`, `trainer_req`, `reason`, `date_req`, `purpose`) VALUES
(24, 18, 17, 'Хочу добиться отличного телосложения', '2023-04-25', '-'),
(25, 19, 7, 'Хочу не сдохнуть в конце барби', '2023-04-25', '-'),
(26, 19, 7, 'Хочу не сдохнуть в конце барби', '2023-04-25', '-'),
(27, 19, 7, 'Хочу не сдохнуть в конце барби', '2023-04-25', '-'),
(28, 19, 7, 'Хочу не сдохнуть в конце барби', '2023-04-25', '-'),
(29, 19, 7, 'Хочу не сдохнуть в конце барби', '2023-04-25', '-'),
(30, 19, 7, 'Хочу не сдохнуть в конце барби', '2023-04-25', '-'),
(31, 19, 7, 'hbuubu', '2023-04-25', '-'),
(32, 19, 11, 'hbuubu', '2023-04-25', '-'),
(33, 19, 7, 'qweqweqwe', '2023-04-25', '-'),
(34, 19, 7, 'qweqweqwe', '2023-04-25', '-'),
(35, 19, 7, 'qweqweqwe', '2023-04-25', '-'),
(36, 18, 11, 'rrrht', '2023-04-25', '-'),
(37, 18, 11, 'rrrht', '2023-04-25', '-');

-- --------------------------------------------------------

--
-- Структура таблицы `requestes_status`
--

CREATE TABLE `requestes_status` (
  `id_req_stat` int NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `requestes_status`
--

INSERT INTO `requestes_status` (`id_req_stat`, `title`) VALUES
(1, 'Ожидание'),
(2, 'Принято'),
(3, 'Отклонено ');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id_role` int NOT NULL,
  `name_role` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`) VALUES
(1, 'Клиент'),
(2, 'Администратор'),
(3, 'Тренер');

-- --------------------------------------------------------

--
-- Структура таблицы `status_request`
--

CREATE TABLE `status_request` (
  `id_request` int NOT NULL,
  `stat` int NOT NULL,
  `update_req` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `status_request`
--

INSERT INTO `status_request` (`id_request`, `stat`, `update_req`) VALUES
(35, 1, '2023-04-25 03:44:27'),
(35, 2, '2023-04-25 05:44:56'),
(37, 1, '2023-04-25 03:46:58');

-- --------------------------------------------------------

--
-- Структура таблицы `trainings`
--

CREATE TABLE `trainings` (
  `id_training` int NOT NULL,
  `type` int NOT NULL,
  `amount_workout` int NOT NULL,
  `amount_repeat` int NOT NULL,
  `plan` int NOT NULL,
  `pulse` int NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id_type` int NOT NULL,
  `name_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_birthday` date NOT NULL,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `achievements` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `surname`, `name`, `patronymic`, `phone_number`, `password`, `date_birthday`, `photo`, `gender`, `date_create`, `achievements`, `role`) VALUES
(7, 'Иванов ', 'Иван', 'Иванович', '88005323535', 'idjidjgsdipsdfs', '2001-11-30', 'dmitrij-kulikov-koordinator-tz--personalnyj-trener-tz-min-250x400-311.jpg', 'муж', '2023-03-13 07:41:30', '-', 3),
(10, 'Кожевникова', 'Ева', 'Евгеньевна', '88005353535', 'уувпывпвпвывыпя', '1997-06-18', 'majer_valeriya_trener-250x400-fe7.jpg', 'жен', '2023-03-18 10:19:59', 'Заслуженный мастер спорта по легкой атлетики ', 3),
(11, 'Недашковский ', 'Борислав ', 'Артемович', '89983941619', 'aBTT7XKrqn6A', '1996-03-11', 'baaf1e03e3fe1bb5604223071c69a2ad.jpg', 'муж', '2023-03-18 10:23:52', 'Мастер спорта по карате', 3),
(12, 'Алексей', 'Семенов', 'Семенович', '89983941619', 'rhhrhryrrryhri5', '2003-07-09', 'inno 1.png', 'муж', '2023-03-21 06:50:37', '-', 1),
(13, 'admin', 'admin', 'admin', '12', 'admin', '2023-03-17', '-', 'муж', '2023-03-21 07:14:04', '-', 2),
(16, 'Недашковский ', 'Борислав ', 'Артемович', '543434343', 'ТАШВТАВГ51', '2032-04-25', 'free-icon-vk-3670029.png', 'жен', '2023-03-23 11:14:33', '-', 1),
(17, 'Алексей', 'Семенов', 'Артемович', '852441228752', 'guhdbn453', '1997-10-16', 'aleksandr-ermolaev-personalnyj-trener-tz-min-250x400-934.jpg', 'муж', '2023-03-27 06:23:42', '-', 3),
(18, 'Егоров', 'Егор', 'Егорович', '253', 'qwerty1', '2023-04-22', 'ю-и-портрет-s-че-овека-69803479.jpg', 'муж', '2023-04-24 07:17:23', '-', 1),
(19, 'Прохоров', 'Сергей', 'Олегович', '727', '727', '2002-02-06', '446128934473.jpg', 'муж', '2023-04-25 08:20:51', '-', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `client` (`client`),
  ADD KEY `trainer` (`trainer`);

--
-- Индексы таблицы `requestes`
--
ALTER TABLE `requestes`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `client_req` (`client_req`),
  ADD KEY `trainer_req` (`trainer_req`);

--
-- Индексы таблицы `requestes_status`
--
ALTER TABLE `requestes_status`
  ADD PRIMARY KEY (`id_req_stat`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `status_request`
--
ALTER TABLE `status_request`
  ADD KEY `id_request` (`id_request`),
  ADD KEY `id_req_stat` (`stat`) USING BTREE;

--
-- Индексы таблицы `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id_training`),
  ADD KEY `plan` (`plan`),
  ADD KEY `type` (`type`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_type`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `plans`
--
ALTER TABLE `plans`
  MODIFY `id_plan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `requestes`
--
ALTER TABLE `requestes`
  MODIFY `id_request` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `requestes_status`
--
ALTER TABLE `requestes_status`
  MODIFY `id_req_stat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `status_request`
--
ALTER TABLE `status_request`
  MODIFY `id_request` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id_training` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id_type` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`client`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `plans_ibfk_2` FOREIGN KEY (`trainer`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `requestes`
--
ALTER TABLE `requestes`
  ADD CONSTRAINT `requestes_ibfk_1` FOREIGN KEY (`client_req`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `requestes_ibfk_2` FOREIGN KEY (`trainer_req`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `status_request`
--
ALTER TABLE `status_request`
  ADD CONSTRAINT `status_request_ibfk_2` FOREIGN KEY (`id_request`) REFERENCES `requestes` (`id_request`),
  ADD CONSTRAINT `status_request_ibfk_3` FOREIGN KEY (`stat`) REFERENCES `requestes_status` (`id_req_stat`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `trainings`
--
ALTER TABLE `trainings`
  ADD CONSTRAINT `trainings_ibfk_1` FOREIGN KEY (`plan`) REFERENCES `plans` (`id_plan`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `trainings_ibfk_2` FOREIGN KEY (`type`) REFERENCES `types` (`id_type`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id_role`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
