-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Сен 20 2017 г., 21:55
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `buildcompany`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `picture` tinytext NOT NULL,
  `putdate` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `img` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `putdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `title`, `img`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'Главная', 'Добро пожаловать на наш новый сайт!', 'imgs/building_company.jpg', '              \r\n                Мы – энергичная, твердо стоящая на ногах и динамично развивающаяся компания, хорошо известная на строительном рынке Москвы и Подмосковья.\r\n                Ранее мы специализировались только на продаже фасадной и интерьерной лепнины ведущих зарубежных и российских производителей. Именно благодаря качеству продукции и услуг фирма LEPNINAPLAST успешно преодолела самое сложное время кризиса.\r\n                Мы работаем и с розничными, и с оптовыми покупателями, готовы предоставить самые выгодные условия сотрудничества и гибкую систему скидок. При этом как на этом сайте, так и в наших магазинах покупатель всегда сможет получить самую полную информацию о наличии любого товара, ценах и условиях поставки. Отметим, что для региональных клиентов действует особая система скидок.\r\nА самое интересное, теперь мы предлагаем нашим клиентам уникальную услугу – производство лепных изделий по индивидуальным заказам.               Также мы можем предоставить услуги профессионального дизайнера-проектировщика – и тогда фасад и интерьер Вашего дома станут по-настоящему неповторимыми!\r\nМы всегда рады вам – и на нашем сайте, и в наших магазинах. Желаем удачных покупок, хорошего настроения! Расскажите о нас своим друзьям и знакомым!', 'index', 'show', 'ru', '2017-09-01'),
(2, 'Главная', 'Выполняем проектирование домов любой сложности', 'imgs/proekti_domov.jpg', 'Наша компания осуществляет весь спектр услуг по проектированию и строительству домов "под ключ". В перечень оказываемых услуг входят: проектирование, строительство, дизайн интерьера и ремонт "под ключ", декорирование и ландшафтный дизайн. Мы осуществляем разработку индивидуальных проектов любой сложности. В портфолио представлены готовые проекты 1-но и 2-х этажных жилых домов, бань и шале, садовых домиков и гаражей, типовые проекты на получение кредита (со сметой и коммуникациями).\r\nЕсли вернуться к вопросу качества, то лучшим вашим гарантом является официальный договор с гарантией 5 лет на все работы. Все технологии работ выполняются по ГОСТам, с минимальными допусками.', 'index', 'show', 'ru', '2017-09-01'),
(3, 'Контакты', 'Наши контакты', 'imgs/contacts.png', 'Акционерное общество «СтройТрансНефтеГаз» (АО «СТНГ»)Ленинградский пр., д. 39, стр. 80,  БЦ «SkyLight», г. Москва,Российская Федерация, 125167Тел.: +7 495 741-48-17\r\nФакс: +7 495 741-48-18\r\nE-mail: info@stg.ru\r\n', 'contacts', 'show', 'ru', '2017-09-02'),
(4, 'О нас', 'Информация о нас', 'imgs/about_us_img.jpg', 'Открытое акционерное общество «БЕЛИНТЕ-РОБА» было основано в 2004 году.\r\n\r\nНа сегодняшний день эта компания является одним из самых перспективных и динамично развивающихся застройщиков на рынке недвижимости и долевого строительства жилья.\r\n\r\n«БЕЛИНТЕ-РОБА» выступает не только как проектировщик различных строительных проектов, но и как застройщик. Среди реализованных проектов являются застройки с необычными для зданий именами «Бетховен», «Шопен», «Вивальди». Кроме того «Вивальди» - это не только жилые здания, но и полный комплекс со встроенными торговыми и офисными помещениями.\r\n\r\nКомпания «БЕЛИНТЕ-РОБА» является генеральным проектировщиком здания «Маяк Минска».\r\n\r\n«Маяк Минска» - комплексная застройка целого квартала, это своего рода «город в городе»,где будет своя инфраструктура, кроме того здесь же будет находиться подземный многоуровневый паркинг и большое количество плоскостных парковочных мест. Размещаться «Маяк» будет в Первомайском районе столицы, прилегая к зданию Национальной библиотеки, находясь на границе проспекта Независимости и ул. Скорины.', 'about_us', 'show', 'ru', '2017-09-01'),
(5, 'Наша продукция', 'Наши новые поступления', 'imgs/utepliteli.jpg', 'На  склад поступили новые материалы для утепления домов.\r\n                    Наружное утепление здания позволяет существенно сократить потери энергии и сэкономить на отоплении. Такой метод требует использования прочного и влагостойкого материала. Стоимость теплоизоляции не должна составлять значительную часть бюджета, предусмотренного на строительство. Специалисты рекомендуют выполнить утепление стен пенопластом, при этом работу несложно выполнить своими руками. Плиты пенополистирола характеризуются низкой теплопроводностью, прочностью и долговечностью. Чтобы установка изоляции дала ощутимый эффект, необходимо точно соблюдать технологию монтажа.', 'news', 'show', 'ru', '2017-09-01'),
(6, 'Наша продукция', 'Теперь доступны новые услуги', 'imgs/proekti_domov.jpg', 'Наша компания теперь осуществляет разработку проектов домов разной сложности\r\n                    Архитектурное проектирование домов\r\n                    Архитектурное проектирование – это один из важнейших этапов строительства, а также своеобразная отправная точка в создании дома вашей мечты. Данный этап определяет порядок действий при возведении дома, а также содержит информацию о конечном результате работ. Впрочем, сводить подобный процесс лишь к техническо-архитектурному аспекту все же нельзя. Ведь проектирование дома – это не столько разработка пакета необходимой документации, сколько диалог между заказчиком и автором проекта, направленный на создание индивидуального, целостного и поистине интересного проекта, способного стать воплощением всех замыслов.\r\n                    Весь спектр услуг по проектированию и строительству домов "под ключ"\r\n                    Наша компания осуществляет весь спектр услуг по проектированию и строительству домов "под ключ". В перечень оказываемых услуг входят: проектирование, строительство, дизайн интерьера и ремонт "под ключ", декорирование и ландшафтный дизайн. Мы осуществляем разработку индивидуальных проектов любой сложности. В портфолио представлены готовые проекты 1-но и 2-х этажных жилых домов, бань и шале, садовых домиков и гаражей, типовые проекты на получение кредита (со сметой и коммуникациями).', 'news', 'show', 'ru', '2017-09-02'),
(7, 'Наша продукция', 'У нас можно арендовать строительную технику', 'imgs/stroj_tech.jpg', 'У нас можно арендовать строительную технику для рытья катлованов и транщей любой сложности. А так  же выполняет земляные работы разной степени сложности с использованием спецтехники. Этот этап – один из самых ответственных при подготовке к постройке различных сооружений. Земляные работы требуют высокого уровня профессионализма и опыта. Мы гарантируем высокое качество исполнения.\r\n\r\n                    Наши услуги не ограничиваются начальными этапами строительства. Мы можем предложить спецтехнику в аренду, наш парк способен удовлетворить практически любые технические потребности.', 'news', 'show', 'ru', '2017-09-07'),
(8, 'Наши работы', 'Дом из бруса', 'imgs/dom_iz_brusa.jpg', 'Строительство дома из бруса на сегодняшний день один из самых востребованных видов строительного подряда в частном секторе. Возрождение интереса к деревянному строительству во всех странах умеренного и в значительной части холодного климатических поясов вполне закономерно.', 'our_work', 'show', 'ru', '2017-09-01'),
(9, 'Наши работы', 'Дом из кирпича', 'imgs/dom_iz_kirpicha.jpg', 'Примеры строительства домов из кирпича не только в нашей стране, но и во всем мире свидетельствуют о его высокой долговечности. Построенный вами дом из кирпича прослужит не только вашим внукам, но скорее всего и правнукам. Прочность коттеджей, возведенных из кирпича, не имеет себе равных. Они действительно строятся на века.', 'our_work', 'show', 'ru', '2017-09-01'),
(10, 'Наши работы', 'Монолитный дом  ', 'imgs/dom_monolitnij.jpg', '\r\nСреди множества разнообразных приемов строительства зданий, изобретенных человечеством за свою многовековую историю, наиболее совершенным является способ создания цельных конструкций из железобетона. Нисколько не умаляя достоинства других технологий, стоит отметить, что сейчас строения, возведенные с помощью арматурного каркаса, залитого бетоном, занимают лидирующие позиции на рынке недвижимости.', 'our_work', 'show', 'ru', '2017-09-02'),
(11, 'Наши работы', 'Каркасный дом ', 'imgs/dom_karkasnij.jpg', 'Каркасный дом – это дом, имеющий основу (каркас), которую легко воспроизвести по схемам и чертежам. Далее, каркас (деревянный или металлический) обшивается специальными материалами с внутренней и внешней стороны. Внутри стены наполняются утеплителем.', 'our_work', 'show', 'ru', '2017-09-08'),
(12, 'Наши работы', 'Панельный дом', 'imgs/dom_panelnij.jpg', 'Панель в строительстве сегодня не сильно распространена: новое строительство панельного жилья в крупных городах колеблется от 4 до 7%. Мы рассматриваем исключительно панельные дома, а не жилье, возведенное по каркасной или монолитной технологии, где панели выступают в роли навесного фасада. Если эти категории объединить, то получится порядка 20% рынка новостроек.', 'our_work', 'show', 'ru', '2017-09-05');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `datereg` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  `blockunblock` enum('unblock','block') NOT NULL DEFAULT 'unblock',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `datereg`, `lastvisit`, `blockunblock`) VALUES
(1, 'qwer', 'qwer@MAIL.RU', 'QWER', '2017-09-18', '2017-09-18 21:44:53', 'unblock');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
