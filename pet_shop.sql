-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 29 2021 г., 11:16
-- Версия сервера: 5.7.16-log
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pet_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `article_name` varchar(100) NOT NULL,
  `article_description` varchar(300) NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `article_name`, `article_description`, `article`) VALUES
(1, 'Что нужно щенку с первых дней в доме?', 'Появлению щенка в новом месте обитания обязательно предшествует определённая подготовка. Причем покупкой еды, миски и подстилки она не должна ограничиваться. Также щенку потребуются другие, может быть, не столь очевидные вещи.', 'Корм\r\n\r\nПервое время на новом месте щенка рекомендуется кормить пищей, которую он ел раньше. Поэтому следует обеспечить ему запас привычной еды на несколько дней. Резкая смена диеты может грозить здоровью животного неприятными осложнениями. Поэтому перевод на оптимальный рацион, если он не состоялся раньше, необходимо проводить постепенно. Важно знать: оптимальным для домашнего питомца считается сочетание сухого и влажного кормов.\r\n\r\nЛоток\r\n\r\nОн пригодится, если щенок слишком мал или относится к тем породам, которые спокойно переносят отсутствие прогулок. Лоток должен быть устойчивым и гигиеничным, надёжно удерживающим содержимое внутри. Можно заменить лоток специальной пелёнкой — с её помощью щенок также привыкнет ходить в туалет в строго определённом месте.\r\n\r\nЛежанка\r\n\r\nЩенку нужно обеспечить комфортное, тёплое место для сна и отдыха. Лучше всего это сделать с помощью подстилки, которая легко поддаётся чистке и стирке. Чтобы питомец поскорее привык к лежанке, рекомендуется на первых порах подложить к ней знакомую игрушку или кусок ткани с запахом матери. Хороший вариант — поселить щенка в корзинку или специальный домик. А вот пускать щенка в собственную кровать владельцу не стоит, как бы тот ни просил. Это можно расценивать как элемент дрессуры — животное должно почувствовать волю хозяина и понять, что ничего не сможет добиться, если будет скулить.'),
(2, 'Как выбрать игрушки для щенка?', 'Игрушки для щенков — это не просто развлечение и веселая игра. В первую очередь, с их помощью они познают мир: учатся приемам защиты и охоты. Кроме того, некоторые виды игрушек способствуют развитию зубов питомца и, конечно, поддерживают его физическую активность. Какие игрушки нужны для щенка?', 'Правило 1. Руководствуйтесь интересами щенка\r\n\r\nОбратите внимание на его любимые занятия и темперамент. Щенок обожает грызть что-нибудь или предпочитает активный отдых? Обязательно учитывайте это.\r\n\r\nПравило 2. Помните о безопасности\r\n\r\nНе стоит покупать дешевые игрушки. В погоне за низкой ценой зачастую теряется качество вещи. Токсичная краска и мелкие детали могут доставить большие неприятности собаке. Кроме того, важно обращать внимание и на качество материала, из которого изготовлено изделие. Плохая резина и плюш, торчащие нитки — все это щенок может с легкостью разгрызть и проглотить, а это может плохо кончиться.\r\n\r\nПравило 3. Разделите игрушки для дома и для улицы\r\n\r\nНа прогулке собака должна, в первую очередь, двигаться. Для этого прекрасно подойдут фрисби и мячи. А вот для дома можно подбирать варианты более спокойного времяпрепровождения: лакомства, жевалки и мягкие игрушки.\r\n\r\nПравило 4. Не забывайте о сроке годности\r\n\r\nСтарые, пришедшие в негодность игрушки необходимо вовремя менять. Не стоит ждать их полного уничтожения. Некоторые материалы могут разрушаться от старости и попадать в желудок питомца.');

-- --------------------------------------------------------

--
-- Структура таблицы `comments_feed`
--

CREATE TABLE `comments_feed` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments_feed`
--

INSERT INTO `comments_feed` (`id`, `product_id`, `body`) VALUES
(1, 5, 'корм супер');

-- --------------------------------------------------------

--
-- Структура таблицы `comments_toy`
--

CREATE TABLE `comments_toy` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `body` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments_toy`
--

INSERT INTO `comments_toy` (`id`, `product_id`, `body`) VALUES
(1, 1, 'Классная гантеля'),
(2, 1, 'супер игрушка');

-- --------------------------------------------------------

--
-- Структура таблицы `products_feed`
--

CREATE TABLE `products_feed` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(4) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_feed`
--

INSERT INTO `products_feed` (`id`, `name`, `description`, `price`, `img`) VALUES
(1, 'Monge Speciality line', 'Сухой корм для собак', 2499, NULL),
(2, 'Наша Марка ', 'Сухой корм для собак', 2499, NULL),
(3, 'Stardog', 'Сухой корм для собак', 3199, NULL),
(4, 'Probalance Delicate', 'Сухой корм для собак', 3299, NULL),
(5, 'Probalance Gourmet Diet', 'Сухой корм для собак ', 3499, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products_toy`
--

CREATE TABLE `products_toy` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(4) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_toy`
--

INSERT INTO `products_toy` (`id`, `name`, `description`, `price`, `img`) VALUES
(1, 'Гантеля ', 'Игрушка для собак Гантеля для лакомств', 199, NULL),
(2, 'Крокодил', 'Резиновая игрушка', 249, NULL),
(3, 'Канат', 'Игрушка для собак \"Веревка 2 узла\"', 190, NULL),
(4, 'Шар', 'Игрушка для собак Шар для лакомств', 249, NULL),
(5, 'Ослик\r\n', 'Резиновая игрушка', 239, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number_phone` varchar(100) NOT NULL,
  `color` varchar(100) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `wishes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `number_phone`, `color`, `sex`, `email`, `wishes`) VALUES
(5, 'Иванов Иван Иванович', '+79999999999', '”Черный”', '”Кобель”', 'Mail@mail.ru', 'только черного цвета');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `number_phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reviews` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `fio`, `number_phone`, `email`, `reviews`) VALUES
(1, 'иванов иван иванович', '999999999', 'Mail@mail.ru', 'ЗДоровые, красивые собаки'),
(2, 'Смирнов Александр Александрович', '+79999999999', 'Mail@mail.ru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum imperdiet neque quis malesuada.'),
(3, 'Медведева валентина', '+79999999999', 'Mail@mail.ru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum imperdiet neque quis malesuada.'),
(4, 'Миронова Юлия ЕВгеньевна', '+79999999999', 'Mail@mail.ru', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dictum imperdiet neque quis malesuada.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments_feed`
--
ALTER TABLE `comments_feed`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments_toy`
--
ALTER TABLE `comments_toy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_feed`
--
ALTER TABLE `products_feed`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_toy`
--
ALTER TABLE `products_toy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `comments_feed`
--
ALTER TABLE `comments_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `comments_toy`
--
ALTER TABLE `comments_toy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `products_feed`
--
ALTER TABLE `products_feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `products_toy`
--
ALTER TABLE `products_toy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
