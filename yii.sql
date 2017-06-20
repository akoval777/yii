-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 20 2017 г., 23:11
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1497988096),
('m170620_194930_create_user_table', 1497988454),
('m170620_195142_create_projects_table', 1497988454);

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `date` date NOT NULL,
  `flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `img`, `date`, `flag`) VALUES
(1, 'Onefootball', 'Теперь вы никогда не пропустите очередной матч или новости о последних трансферах. Onefootball — это футбольное приложение, которое обязательно нужно иметь. Вы заядлый поклонник английского футбола? Тогда следите за матчами Премьер-лиги, Лиги чемпионов, Кубка Англии и многими другими. Или вы также интересуетесь международным футболом? Onefootball может предложить вам более 200 крупных лиг и соревнований, таких как Примера Дивисьон, Серия А, Бундеслига и многие другие. Наша функция «Избранное» позволяет настроить Onefootball в соответствии с вашими потребностями.', '1.jpg', '2017-06-05', 0),
(2, 'Такси Крылья', 'Приложение для удобного и быстрого заказа такси в городе Иркутске. Всего несколько касаний отделяет Вас от сотни профессиональных водителей. Грамотные, вежливые и пунктуальные водители готовы доставить Вас в любую точку города и за его пределы - быстро, комфортно и абсолютно безопасно!\r\nПриложение \"Такси Крылья: Заказчик\" позволяет всего в несколько касаний проложить нужный маршрут, выбрать нужные услуги, и подобрать оптимальный тариф для поездки.\r\nСистема уведомлений поможет быть в курсе того как проходит поиск авто для Вас. Каждый важный этап поиска будет сопровождаться звуковым уведомлением, и как только авто будет найдено - Вы можете посмотреть движение водителя к Вам в режиме реального времени.\r\nДля улучшения работы, а главное сервиса нашей компании, Вы можете оставить комментарий к совершенной поездке, и указать оценку. Рейтинг водителей всегда просматривают наши компетентные менеджеры, и ни один негативный отзыв не остается незамеченным.', '2.jpg', '2017-06-14', 0),
(3, 'Объединенная Подмосковная Лига', 'Мы Объединенная Подмосковная Лига (ОПЛ), круглогодично проводим любительские футбольные турниры и чемпионаты во всех крупных городах на востоке Подмосковья. В Лиге играет более 100 любительских команд в форматах 5Х5, 6Х6, 8Х8, зимой и летом. Мы организовываем детские турниры и различные благотворительные акции. Также все команды участвуют в объединенном Кубке, а лучшие сражаются в Лиге Чемпионов', '3.jpg', '2017-06-23', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `first_name`, `last_name`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'alex', 'k');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
