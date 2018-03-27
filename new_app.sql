-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 27 2018 г., 23:45
-- Версия сервера: 10.1.29-MariaDB
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_mail` varchar(20) NOT NULL,
  `status` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `description`, `user_name`, `user_mail`, `status`) VALUES
(1, 'Я заремапил этот хоткей на панель консоли (Terminal Tool Window). По умолчанию на этой клавише находится Run Tool Window, а панель терминала вызывалась по Alt+-.\r\n            Ctrl+Shift+X\r\n            Панель Command Tools Console. Консоль командных инструментов как-то Composer, Symfony 2 (app/console), Laravel (artisan), etc.. Есть поддержка дополнения кода.\r\n            Shift+Escape\r\n            Скрыть текущую активную панель (Hide Active Tool Window). Я добавил на этот экшн просто клавишу Escape.\r\n            Ctrl+Tab\r\n            Переключение между 2-мя последними вкладками редактора.\r\n            Ctrl+F11 или F11\r\n            Поставить закладку.\r\n            Ctrl+Shift+F11\r\n            Поставить закладку с указанием мнемоники (идентификатора, номера закладки)\r\n            Shift+F11\r\n            Показать закладки', 'Иван', 'Ivan@mail.ru', 1),
(2, 'Я заремапил этот хоткей на панель консоли (Terminal Tool Window). По умолчанию на этой клавише находится Run Tool Window, а панель терминала вызывалась по Alt+-.\r\n            Ctrl+Shift+X\r\n            Панель Command Tools Console. Консоль командных инструментов как-то Composer, Symfony 2 (app/console), Laravel (artisan), etc.. Есть поддержка дополнения кода.\r\n            Shift+Escape\r\n            Скрыть текущую активную панель (Hide Active Tool Window). Я добавил на этот экшн просто клавишу Escape.\r\n            Ctrl+Tab\r\n            Переключение между 2-мя последними вкладками редактора.\r\n            Ctrl+F11 или F11\r\n            Поставить закладку.\r\n            Ctrl+Shift+F11\r\n            Поставить закладку с указанием мнемоники (идентификатора, номера закладки)\r\n            Shift+F11\r\n            Показать закладки', 'Рома', 'Roman@ukr.net', 0),
(3, 'Я заремапил этот хоткей на панель консоли (Terminal Tool Window). По умолчанию на этой клавише находится Run Tool Window, а панель терминала вызывалась по Alt+-.\r\n            Ctrl+Shift+X\r\n            Панель Command Tools Console. Консоль командных инструментов как-то Composer, Symfony 2 (app/console), Laravel (artisan), etc.. Есть поддержка дополнения кода.\r\n            Shift+Escape\r\n            Скрыть текущую активную панель (Hide Active Tool Window). Я добавил на этот экшн просто клавишу Escape.\r\n            Ctrl+Tab\r\n            Переключение между 2-мя последними вкладками редактора.\r\n            Ctrl+F11 или F11\r\n            Поставить закладку.\r\n            Ctrl+Shift+F11\r\n            Поставить закладку с указанием мнемоники (идентификатора, номера закладки)\r\n            Shift+F11\r\n            Показать закладки', 'Анна', 'Hanna@gmail.com', 1),
(4, 'Я заремапил этот хоткей на панель консоли (Terminal Tool Window). По умолчанию на этой клавише находится Run Tool Window, а панель терминала вызывалась по Alt+-.\r\n            Ctrl+Shift+X\r\n            Панель Command Tools Console. Консоль командных инструментов как-то Composer, Symfony 2 (app/console), Laravel (artisan), etc.. Есть поддержка дополнения кода.\r\n            Shift+Escape\r\n            Скрыть текущую активную панель (Hide Active Tool Window). Я добавил на этот экшн просто клавишу Escape.\r\n            Ctrl+Tab\r\n            Переключение между 2-мя последними вкладками редактора.\r\n            Ctrl+F11 или F11\r\n            Поставить закладку.\r\n            Ctrl+Shift+F11\r\n            Поставить закладку с указанием мнемоники (идентификатора, номера закладки)\r\n            Shift+F11\r\n            Показать закладки', 'Андрей', 'Andry@i.ua', 0),
(5, 'Testwwwwwwwwwwwwwwww', 'Vovawwwww', 'Vova@mail.ru', 1),
(6, 'Test dima', 'Dima', 'Doma@mail.ru', 0),
(7, 'Test dima', 'Dima', 'Doma@mail.ru', 0),
(8, 'Test dima', 'Dima', 'Doma@mail.ru', 0),
(9, 'wetdthdf', 'Adidas Hot New', 'Petro@mail.ru', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `email`, `user_role`) VALUES
(1, '', 'admin', '81888cf93a4e289e822e3f82df69886b', 'admin@ukr.net', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `task_id` (`user_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
