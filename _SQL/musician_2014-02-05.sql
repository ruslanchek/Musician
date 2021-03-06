# ************************************************************
# Sequel Pro SQL dump
# Версия 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Адрес: 127.0.0.1 (MySQL 5.5.29)
# Схема: musician
# Время создания: 2014-02-05 14:14:43 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы datasets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `datasets`;

CREATE TABLE `datasets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(10) unsigned NOT NULL,
  `type` tinytext NOT NULL,
  `label` tinytext,
  `default` text,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `unique` tinyint(1) NOT NULL,
  `options_source` tinyint(4) NOT NULL DEFAULT '0',
  `options_custom` text,
  `options_table` text,
  `use_editor` tinyint(1) DEFAULT NULL,
  `description` text,
  `sort` int(11) NOT NULL DEFAULT '0',
  `embed` tinyint(1) NOT NULL DEFAULT '0',
  `embed_name` tinytext,
  `list` tinyint(1) NOT NULL DEFAULT '0',
  `email` tinyint(1) DEFAULT '0',
  `rows` tinyint(2) DEFAULT '3',
  `randomize` tinyint(1) DEFAULT '0',
  `number` tinyint(1) DEFAULT '0',
  `multiple` tinyint(1) DEFAULT '0',
  `extensions` text,
  `thumbs` text,
  `folder` tinytext,
  `prefix` tinytext,
  `suffix` tinytext,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `mode` tinyint(1) NOT NULL DEFAULT '1',
  `interval` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `datasets` WRITE;
/*!40000 ALTER TABLE `datasets` DISABLE KEYS */;

INSERT INTO `datasets` (`id`, `section_id`, `type`, `label`, `default`, `required`, `unique`, `options_source`, `options_custom`, `options_table`, `use_editor`, `description`, `sort`, `embed`, `embed_name`, `list`, `email`, `rows`, `randomize`, `number`, `multiple`, `extensions`, `thumbs`, `folder`, `prefix`, `suffix`, `min`, `max`, `mode`, `interval`)
VALUES
	(234,34,'select','Альбом','0',0,0,1,'','section_35',0,'',3,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),
	(235,34,'separator','Разделитель','',0,0,0,'','',0,'',9,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),
	(236,34,'text','Длительность (ММ:СС)','',0,0,0,'','',0,'',10,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),
	(229,35,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(230,35,'separator','Разделитель','',0,0,0,'','',0,'',2,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),
	(231,35,'text','Название','',1,0,0,'','',0,'Название элемента',3,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(228,34,'text','Последнее действие','',0,0,0,'','',0,'',8,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),
	(225,34,'file','MP3-файл','',0,0,0,'','',0,'',5,0,NULL,0,0,0,0,0,0,'1=mp3','','','','',0,0,0,0),
	(226,34,'text','Рейтинг','0',0,0,0,'','',0,'',7,0,NULL,1,0,0,0,1,0,'','','','','',0,0,0,0),
	(227,34,'separator','Разделитель','',0,0,0,'','',0,'',6,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),
	(224,34,'text','Название','',1,0,0,'','',0,'Название элемента',2,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(223,34,'separator','Разделитель','',0,0,0,'','',0,'',4,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),
	(222,34,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(220,33,'text','Название','',1,0,0,'','',0,'Название элемента',3,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(217,32,'textarea','Полный текст','',0,0,0,'','',1,'',6,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),
	(218,33,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(219,33,'separator','Разделитель','',0,0,0,'','',0,'',2,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),
	(221,33,'image','Картинка','',0,0,0,'','',0,'',4,0,NULL,1,0,0,0,0,0,'','245,1000,pic,2;1200,1200,big,2','','','',0,0,0,0),
	(215,32,'calendar','Дата и время','',0,0,0,'','',0,'',4,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),
	(214,32,'text','Название','',1,0,0,'','',0,'Название элемента',3,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(213,32,'separator','Разделитель','',0,0,0,'','',0,'',2,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),
	(216,32,'textarea','Короткий текст','',0,0,0,'','',1,'',5,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),
	(212,32,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(237,36,'checkbox','Публиковать','0',0,0,0,'','',0,'Публиковать элемент',1,1,'publish',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(238,36,'separator','Разделитель','',0,0,0,'','',0,'',4,1,'main',0,0,0,0,0,0,'','','','','',0,0,0,0),
	(239,36,'text','Название','',1,0,0,'','',0,'Название элемента',2,1,'name',1,0,0,0,0,0,'','','','','',0,0,0,0),
	(246,36,'file','Файл MP4','',0,0,0,'','',0,'',7,0,NULL,0,0,0,0,0,0,'1=mp4','','','','',0,0,0,0),
	(241,36,'text','Дополнительно','',0,0,0,'','',0,'',3,0,NULL,1,0,0,0,0,0,'','','','','',0,0,0,0),
	(242,36,'text','Продолжительность','',0,0,0,'','',0,'',10,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),
	(243,36,'image','Картинка (453x345)','',0,0,0,'','',0,'',5,0,NULL,1,0,0,0,0,0,'','74,74,pic,4','','','',0,0,0,0),
	(244,36,'separator','Разделитель','',0,0,0,'','',0,'',6,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),
	(245,36,'separator','Разделитель','',0,0,0,'','',0,'',9,0,NULL,0,0,0,0,0,0,'','','','','',0,0,0,0),
	(247,36,'file','Файл WEBM','',0,0,0,'','',0,'',8,0,NULL,0,0,0,0,0,0,'1=webm','','','','',0,0,0,0);

/*!40000 ALTER TABLE `datasets` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `extension` tinytext,
  `path` tinytext,
  `type` tinyint(1) DEFAULT '0',
  `relative_id` int(11) DEFAULT NULL,
  `form_item` tinytext,
  `date` datetime DEFAULT NULL,
  `size` int(50) DEFAULT '0',
  `relative_table` tinytext,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `name`, `extension`, `path`, `type`, `relative_id`, `form_item`, `date`, `size`, `relative_table`, `sort`)
VALUES
	(1,'01-sweet-emotion','mp3','/data/files/section_34/1/',0,1,'col_225','2014-02-03 22:32:52',11476434,'section_34',NULL),
	(2,'03-i--m-a-man','mp3','/data/files/section_34/2/',0,2,'col_225','2014-02-03 22:32:58',10453724,'section_34',NULL),
	(3,'04-south-of-the-border','mp3','/data/files/section_34/3/',0,3,'col_225','2014-02-03 22:43:42',6967448,'section_34',NULL),
	(4,'02-the-stroke','mp3','/data/files/section_34/4/',0,4,'col_225','2014-02-03 22:43:57',9091575,'section_34',NULL),
	(6,'oceans','mp4','/data/files/section_36/1/',0,1,'col_246','2014-02-05 17:39:31',23014356,'section_36',NULL),
	(7,'oceans','mp4','/data/files/section_36/2/',0,2,'col_246','2014-02-05 17:39:52',23014356,'section_36',NULL);

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `extension` tinytext,
  `path` tinytext,
  `type` tinyint(1) DEFAULT '0',
  `relative_id` int(11) DEFAULT NULL,
  `form_item` tinytext,
  `date` datetime DEFAULT NULL,
  `size` int(50) DEFAULT '0',
  `metaname` tinytext,
  `metadesc` text,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `relative_table` tinytext,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;

INSERT INTO `images` (`id`, `name`, `extension`, `path`, `type`, `relative_id`, `form_item`, `date`, `size`, `metaname`, `metadesc`, `width`, `height`, `relative_table`, `sort`)
VALUES
	(96,'2013-07-29-17-48-58-2','jpg','/data/images/section_33/20/',0,20,'col_221','2014-01-31 19:35:41',699691,NULL,NULL,1440,1440,'section_33',96),
	(81,'1','jpg','/data/images/section_33/19/',0,19,'col_221','2014-01-31 17:01:05',59913,NULL,NULL,170,255,'section_33',81),
	(79,'5','jpg','/data/images/section_33/18/',0,18,'col_221','2014-01-31 17:00:10',67586,NULL,NULL,170,256,'section_33',79),
	(78,'7','jpg','/data/images/section_33/17/',0,17,'col_221','2014-01-31 17:00:06',40344,NULL,NULL,170,125,'section_33',78),
	(77,'7','jpg','/data/images/section_33/16/',0,16,'col_221','2014-01-31 17:00:00',40344,NULL,NULL,170,125,'section_33',77),
	(76,'10','jpg','/data/images/section_33/15/',0,15,'col_221','2014-01-31 16:59:51',25758,NULL,NULL,170,125,'section_33',76),
	(75,'9','jpg','/data/images/section_33/14/',0,14,'col_221','2014-01-31 16:59:41',21863,NULL,NULL,170,125,'section_33',75),
	(74,'1','jpg','/data/images/section_33/13/',0,13,'col_221','2014-01-31 16:24:54',59913,NULL,NULL,170,255,'section_33',74),
	(73,'3','jpg','/data/images/section_33/12/',0,12,'col_221','2014-01-31 16:24:43',24011,NULL,NULL,170,125,'section_33',73),
	(72,'9','jpg','/data/images/section_33/11/',0,11,'col_221','2014-01-31 16:24:32',21863,NULL,NULL,170,125,'section_33',72),
	(71,'8','jpg','/data/images/section_33/10/',0,10,'col_221','2014-01-31 16:24:17',79739,NULL,NULL,220,255,'section_33',71),
	(70,'2','jpg','/data/images/section_33/9/',0,9,'col_221','2014-01-31 16:24:06',55171,NULL,NULL,220,255,'section_33',70),
	(66,'skrinshot-2014-01-11-04-46-53','png','/data/images/section_33/8/',0,8,'col_221','2014-01-31 16:20:13',15542,NULL,NULL,76,172,'section_33',66),
	(65,'03085-steam-1680x1050','jpg','/data/images/section_33/7/',0,7,'col_221','2014-01-31 16:19:53',1550445,NULL,NULL,1680,1050,'section_33',65),
	(64,'03107-afallsunrise-1680x1050','jpg','/data/images/section_33/6/',0,6,'col_221','2014-01-31 16:19:46',1611892,NULL,NULL,1680,1050,'section_33',64),
	(63,'03108-foginthemorning-1680x1050','jpg','/data/images/section_33/5/',0,5,'col_221','2014-01-31 16:19:39',2115485,NULL,NULL,1680,1050,'section_33',63),
	(62,'03107-afallsunrise-1680x1050','jpg','/data/images/section_33/4/',0,4,'col_221','2014-01-31 16:19:32',1611892,NULL,NULL,1680,1050,'section_33',62),
	(59,'03126-amazingmilkywayvi-1680x1050','jpg','/data/images/section_33/1/',0,1,'col_221','2014-01-31 15:53:49',2418401,NULL,NULL,1680,1050,'section_33',59),
	(60,'03112-theeveningsrest-1680x1050','jpg','/data/images/section_33/2/',0,2,'col_221','2014-01-31 15:53:58',797342,NULL,NULL,1680,1050,'section_33',60),
	(61,'03085-steam-1680x1050','jpg','/data/images/section_33/3/',0,3,'col_221','2014-01-31 15:54:05',1550445,NULL,NULL,1680,1050,'section_33',61),
	(97,'2013-07-24-19-40-42','jpg','/data/images/section_33/21/',0,21,'col_221','2014-01-31 19:35:53',153716,NULL,NULL,640,480,'section_33',97),
	(84,'1','jpg','/data/images/section_33/22/',0,22,'col_221','2014-01-31 18:31:40',59913,NULL,NULL,170,255,'section_33',84),
	(98,'2013-07-30-19-00-53','png','/data/images/section_33/23/',0,23,'col_221','2014-01-31 19:36:15',1104435,NULL,NULL,640,960,'section_33',98),
	(99,'2013-08-22-21-51-34','png','/data/images/section_33/24/',0,24,'col_221','2014-01-31 19:37:36',866209,NULL,NULL,640,960,'section_33',99),
	(100,'2013-12-20-21-22-09','jpg','/data/images/section_33/25/',0,25,'col_221','2014-01-31 19:38:36',1237685,NULL,NULL,1936,1936,'section_33',100),
	(101,'2013-08-07-09-26-32','jpg','/data/images/section_33/26/',0,26,'col_221','2014-01-31 19:39:53',250168,NULL,NULL,1243,1243,'section_33',101),
	(102,'03117-bigsursunrise-1680x1050','jpg','/data/images/section_33/27/',0,27,'col_221','2014-01-31 19:40:41',1380694,NULL,NULL,1680,1050,'section_33',102),
	(103,'03125-sandyseffectsinsaintjoseph-1680x1050','jpg','/data/images/section_33/28/',0,28,'col_221','2014-01-31 19:41:01',1437168,NULL,NULL,1680,1050,'section_33',103),
	(104,'b99cd365','jpeg','/data/images/section_33/29/',0,29,'col_221','2014-01-31 19:41:16',1705208,NULL,NULL,2048,1536,'section_33',104),
	(105,'unknown','jpeg','/data/images/section_33/30/',0,30,'col_221','2014-01-31 19:41:27',265114,NULL,NULL,800,600,'section_33',105),
	(106,'skrinshot-2014-01-13-19-56-50','png','/data/images/section_33/31/',0,31,'col_221','2014-01-31 19:41:45',37566,NULL,NULL,249,202,'section_33',106),
	(94,'2013-07-18-08-54-53-1','jpg','/data/images/section_33/32/',0,32,'col_221','2014-01-31 19:09:05',268200,NULL,NULL,1013,1014,'section_33',94),
	(95,'2013-07-29-18-59-43-2','jpg','/data/images/section_33/33/',0,33,'col_221','2014-01-31 19:09:21',49906,NULL,NULL,489,489,'section_33',95),
	(108,'03066-napali-1680x1050','jpg','/data/images/section_36/1/',0,1,'col_243','2014-02-05 14:17:53',1494365,NULL,NULL,1680,1050,'section_36',108),
	(109,'03073-peekingsun-1680x1050','jpg','/data/images/section_36/2/',0,2,'col_243','2014-02-05 14:22:19',1745756,NULL,NULL,1680,1050,'section_36',109);

/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы maps_objects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `maps_objects`;

CREATE TABLE `maps_objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) DEFAULT NULL,
  `name` text,
  `description` text,
  `data` text,
  `relative_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `module` tinyint(1) DEFAULT NULL,
  `form_item` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `sort` int(11) NOT NULL,
  `publish` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `name`, `sort`, `publish`)
VALUES
	(3,'Главное меню',3,1);

/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы public_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `public_users`;

CREATE TABLE `public_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` int(10) unsigned NOT NULL DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `subscriber` tinyint(1) DEFAULT '0',
  `login` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `email` tinytext,
  `name` tinytext,
  `reg_date` datetime NOT NULL,
  `last_login` datetime DEFAULT '2010-01-01 00:00:00',
  `last_activity` datetime DEFAULT '2010-01-01 00:00:00',
  `last_remember` datetime DEFAULT NULL,
  `remember_code` varchar(32) DEFAULT NULL,
  `vk_id` text,
  `fb_id` text,
  `publish` tinyint(1) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `last` datetime DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vk_id` (`vk_id`(8))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы search
# ------------------------------------------------------------

DROP TABLE IF EXISTS `search`;

CREATE TABLE `search` (
  `url` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `referrer` text NOT NULL,
  `title` text NOT NULL,
  `text` mediumtext NOT NULL,
  `md5` varchar(33) NOT NULL DEFAULT '',
  `lastupdate` int(10) unsigned NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;

INSERT INTO `search` (`url`, `referrer`, `title`, `text`, `md5`, `lastupdate`, `id`)
VALUES
	('/','','Главная',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])главная  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  ваших  даннЫх  есть  мечта  спокойно  работать  мдц  минимальные  риски  низкие  затраты  простой  доступ  из  любой  точки  санктпетербурга  доступность  удобное  расположение  датацентра  sdn&  &mdash  на&  развязке  выборгского&  и&  кад  в&  10&  минутах  от&  ближайшей  станции  метро  80&  парковочных  мест  60&  мин  аэропорта  пулково&  огромнЫй  запас  мощности  выделенная  под  мощность  15&  мегаватт  cиcтема  резервирования  n+1  основе  надежных  дизелей  судового  типа  с&  запасом  топлива  72&  часа  автономной  точка  притяжения  все  ведущие  операторы  провайдеры  интернета  это  свежий  морской  ветер  уникальная  система  kyoto  freecooling  мощностью  холода  каждый  модуль  вЫсокая  плотность  размещения  мы&  обеспечим  энергией  охладим  что  вы&  разместите  сокращая  число  соединений  кабелей  продляем  срок  службы  серверов  снижаем  $(function()  sliderinit()  collocation  здание  специально  спроектировано  безупречное  размещение  заказчиков  предоставление  им  наилучших  условий  для  обеспечения  самого  производительного  режима  максимального  снижения  рисков  клиентов  непрерЫвность  бизнеса  сколько  стоит  одна  минута  простоя  вашего  точный  ответ  дают  только  руководителей  именно  столько  компаний  следствии  непредвиденных  ситуаций  остаются  рынке  самые  предусмотрительные  руководители  обеспечивают  наличие  своих  организацииях  drp  (disaster  recovery  plan)  включите  свой  наличии  условия  развертывания  круглосуточного  аварийного  itофиса  вашей  позвоните  нам  подробной  информации  smartконтракт  пользу  клиента  мы  подготовили  контракт  быстрого  принятия  решения  двухстраничный  документ  —  лаконичный  не  содержит  сложных  формулировок  юридических  ловушек  двойным  толкованием  смысла  зато  максимально  учтены  интересы  процедуры  инструкции  сотрудников  составлены  интересах  высокого  уровня  предоставления  услуг  сохранности  материальных  ценностей  обеспечение  безопасности  записаться  экскурсию  пакеты  тарифов  бизнес  компания  корпорация  индивидуальная  конфигурация  владельцев  иных  типов  включая  формфактор  blade  дисковых  массивов  телекоммуникационных  систем  прочих  устройств  креплением&  19\"  &#8399  интернет  мб/c  вт  коридор  энергия  сверх  коридора  ?/квт  стоимость  инсталяции  ?  время  100%  доступности  часов  максимальный  предел  пакет  канал  оплачивается  отдельно  промоакция  до  января  бронирование  5000&  ?/мес  инсталляция  бесплатно&  расходнЫе  материалЫ  10u  19u  ваш  персональный  запираемый  шкаф  panduit  netaccess  stype  глубиной  1219&  мм  необходимой  бесперебойного  функционирования  инженерной  инфраструктурой  (копия)  помимо  профессиональных  шкафах  они  будут  локализованы  удобства  обслуживания  или  даже  установлены  отдельную  ячейку  ограниченным  доступом  а&  уже  $(function  tariffsinit()  прессцентр  ввод  эксплуатацию  1й  очереди  июля  документы  договоры  реквизиты  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"086new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','9f00511a497061987b20c7fd29855582',1391010098,1),
	('/about/','/','О компании',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])о  компании  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  ооо  сдн&  (sdn)  &ndash  профессиональная  команда  оказывающая  полный  спектр  услуг  дцаутсорсинга  от  предоставления  аренду  готовых  подключению  мест  телекоммуникационных  шкафах  серверных  модулях  до  разработки  комплекса  мер  защите  бизнеса  клиентов  иктрисков  (drpконсалтинг)  владеет  патентом  одно  из  самых  передовых  решений  сфере  создания  эксплуатации  развития  энергоэффективных  модульных  датацентров  благодаря  этому  нашим  клиентам  обеспечиваются  наиболее  выгодные  отечественном  рынке  условия  для  стабильной  безотказной  их  информационных  систем  телекоммуникационного  оборудования&  документы  договоры  реквизиты  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"049new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','a4c149a5c30842bb9b1cc6a90259ffcb',1391010098,2),
	('/about/principle/','/','Принцип работы',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])принцип  работы  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  наивысший  приоритет  отношениях  клиентами  &ndash  качество  решении  стоящих  перед  ним  ит  бизнесзадач  вместе  тем&  мы&  ценим  деньги  и&  время  своих  клиентов  поэтому  позаботились  о&  том  чтобы  им  не&  приходилось  переплачивать  за&  труд  раздутого  штата  менеджеров  юристов  дублирующих  работу  друг  друга  разработанные  нами  тарифные  планы  типовые  договора  учитывают  потребности  разных  категорий  предусматривают  необходимые  гарантии  подобрать  наиболее  подходящий  пакет  опций  просто  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"053new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','3082de0b9db87dea6c01b941b90ab532',1391010099,3),
	('/about/partners/','/','Партнеры',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])партнеры  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  внешэкономбанк&  россия&  кредитная  поддержка&  &mdash  один  из&  старейших  национальных  банков  специализированный  государственный  финансовый  институт  kyotocooling&  голландия&  создатель  и&  производитель  самой  эффективной  системы  охлаждения  для  датацентров  в&  мире  hitec  power  protection&  мировой  лидер  производстве  источников  бесперебойного  питания  с&  более  чем  50летней  историей  поставляет  динамический  источник  мдц  luve&  италия&  мультинациональный  холдинг  производящий  продукцию  систем  daxten&  великобритания&  международная  компания  специализирующаяся  на&  шинопроводов  адамант&  крупнейших  многопрофильных  холдингов  севернозападного  региона  россии  течение  20&  лет  занимается  проектированием  строительством  объектов  недвижимости  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"039new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','a5767627a7755f05cc38b449ad1e4fd0',1391010099,4),
	('/about/licenses/','/','Лицензии',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])лицензии  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  лицензия  №90515  предоставление  услуг  передаче  данных  для  целей  передачи  голосовой  информации  №90516  за  исключением  №90517  телематических  №90518  местной  телефонной  использованием  таксофонов  средств  коллективного  доступа  №90519  предоставлению  связи&  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"044new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','9b4d72b2466c4d4a88182c12fd8d4215',1391010099,5),
	('/about/vacancies/','/','Вакансии',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])вакансии  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  нет  активных  записей  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"0210new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','eb50e473ea049f7ef0f080e58c24ea09',1391010099,6),
	('/datacenter/','/','Дата-центр',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])датацентр  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  комплекс  в&  &ndash  самая  крупная  и&  современная  северозападном  регионе  одна  из&  лучших  европе  технологическая  площадка  она  спроектирована  построена  с&  учётом  рекомендаций  отечественных  отраслевых  регламентов  требований  к&  tier  iii  стандарта  tia942  (отдельно  стоящее  здание  резервирование  элементов  инженерной  инфраструктуры  по&  схеме  нагрузочная  способность  напольного  покрытия  рассчитанная  на&  тяжелое  оборудование  доступность  сервисов  не&  ниже  9995%)  рамках  данного  проекта  одном  участке  земли  развёрнуты  комфортный  для&  административнобытовой  корпус  соединённый  переходами  датацентром  складские  помещения  со&  специально  оборудованными  погрузочноразгрузочными  зонами  собственную  охраняемую  парковку  удобства  клиентов  предусмотрена  просторная  комната  где  персонал  клиента  может  выполнить  необходимые  ему  своим  оборудованием  kvmинструментарий  remote  hand  под&  резервные  офисы  другие  сервисы  которые  нередко  превосходят  своему  качеству  собственные  возможности  компаний  обслуживание  происходит  круглосуточном  режиме  без&  выходных  дней  предполагает  оперативность  доступа  персонала  клиентскую  зону  течение  15&  мин  момента  отправки  заявки  электронной  почте  постоянно  присутствующие  площадке  дежурные&  смены  специалистов  инсталляции  обеспечивают  запуск  работу  заказчиком  более  чем  через&  часа  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"078new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','32320734649fd48443f754d08222c99f',1391010100,7),
	('/datacenter/about/','/','Описание',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])описание  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  расположение  участка  &mdash&  пос&  парголово&  (рядом  с&  развязкой  на&  пересечении  выборгского  шоссе  и&  кад)&  площадь  участка&  &mdash  305&  га  общая  технологических  помещений&  6500&  м2  здания  под&  размещение  клиентских  офисов  помещений  обслуживающего  персонала  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"053new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','991729b9065ad2b35dd714c1ecde2ddf',1391010100,8),
	('/datacenter/tech-specs/','/','Технические характеристики',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])технические  характеристики  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  стартовая  нагрузка  на&  стойку&  &mdash  3&ndash10  квт  (с&  возможностью  наращивания  до&  квт/ст  при&  наличии  электрических  мощностей)  общая  подведённая  мощность&  мвт  собственная  волс  двух  точек  обмена  трафиком  spbix&  (боровая  57)  и&  радуга2&  (кантемировская  12)  подведенная  мощность  от&  ленэнерго  ввода)  тп  объём  топливохранилища  емкостью  кубм&  (обеспечивает  часа  в&  автономном  режиме)  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"071new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','0f6b950239e5b273444bfea5b77bdd28',1391010100,9),
	('/datacenter/technologies/','/','Технологии',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])технологии  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  предметом  особой  гордости  сотрудников  клиентов  является  комплексное  модульное  решение  stackкуб  действия  которого  запатентован  оно  обеспечивает  наилучшие  отрасли  эксплуатационные  датацентра  возможность  гибкого  наращивания  мощностей  без  переплаты  за  поддержание  построенной  навырост  инженерной  инфраструктуры  использование  промышленной  системы  воздушного  охлаждения  от  kyoto  cooling  качестве  основного  избавляет  необходимости  организовывать  фальшпол  гибкое  регулирование  мощности  воздушных  потоков  зависимости  количества  тепла  отводимого  стоек  система  холодоснабжения  построена  учетом  возможного  применения  дополнительного  воздушного&  либо  непосредственного  жидким  холодоносителем  обеспечивается  резервирование  электроснабжению  элементов  энергоснабжение  датацентрах  построенных  осуществляется  базе  динамических  источников  бесперебойного  питания  полная  мощность  энергопотребления  мдц  со  всеми  потребителями  электроэнергии  резервируется  автономными  электрогенераторами  электроснабжение  критичной  нагрузки  минимум  двумя  активными  вводами  полным  резервом  каждому  вводу  потребителей  двум  вводам  напряжением&  одна  фаза  три  фазы  существует  организации  бесперебойного&  электропитания  постоянного  тока  48в  кроме  того  энергоснабжении  применяются  выравнивания  характеристик  питающей  сети  при  поддержке  генераторами  простота  лёгкость  обслуживания  даёт  снизить  оперативные  затраты  что  определённые  выгоды  клиентам  оплате  полученных  им  услуг  сборки  модуля  вариантЫ  конфигураций  модульного  ?вариантЫ  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"053new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','aca8633c621e8e435e3253e04f285713',1391010100,10),
	('/services/','/','Услуги',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])услуги  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  клиенты  stack  data  network  имеют  возможность  оперативно  реагировать  изменение  бизнесобстановки  формируя  необходимый  достаточный  для  себя  комплекс  технологических  проектных  административных  услуг  среднерыночным  ценам  среди  базовых  тарифных  предложений  есть  как  стандартные  (аренда  юнита/стойки/лицензионного  по)  так  абсолютно  россии  продукт  &ndash  готового  эксплуатации  индивидуального  зала&  (выделенной  или  сектора)  позволяющего  клиенту  организовать  защищенный  от  несанкционированного  доступа  узел  корпоративной  вычислительной/телекоммуникационной  сети  сотрудничает  разработчиками  бизнесприложений  ориентированных  обеспечение  комфортности  эффективности  персонала  участие  партнёрских  программах  ведущих  софтверных  компаний  позволяет  предлагать  своим  клиента  наиболее  выгодные  условия  пользования  гибким  ценам&  уникальная  отечественного  рынка  услуга  предполагающая  полное  ограничение  посторонних  лиц  автономное  помещение  среверными  телекоммуникационными  стойками  которых  размещено  оборудование  востребованная  международном  рынке  которая  нашем  датацентре  имеет  целый  ряд  дополнительных  преимуществ  позволяющих  максимально  эффективно  задействовать  свой  итбюджет  вы  начинаете  развивать  новое  направление  планируете  полностью  сфокусироваться  интересующих  вас  задачах  нуждаетесь  стабильном  надёжно  защищённом  доступе  необходимой  информации  мы  хотим  избавить  хлопот  неоправданных  затрат  приобретение  необходимого  железа&  предоставив  ваше  распоряжение  современные  устройства  вендоров  менеджеры  работе  клиентами  помогут  вам  выбрать  решение  полно  отвечающее  вашим  задачам  помещения  оснащенные  отказоустойчивой  инфраструктурой  готовы  выполнения  функций  резервного  офиса  одной  из  важнейших  составляющих  комплексной  программы  обеспечению  непрерывности  бизнеса  датацентру  подведены  оптические  каналы  обеспечивающие  доступ  крупные  коммутационные  центры  санктпетербурга  поэтому  подключение  клиентов  каналам  нужного  ему  оператора  выполняется  быстро&  используйте  руки  квалификацию  специалистов  удалённого  решения  стоящих  перед  вами  задач  тюнингу  своих  информационных  систем  перезагрузке  подготовке  размещенного  дц  либо  складе  проведению  регламентных  работ  всё  предусмотрено  того  чтобы  создать  итперсоналу  комфортного  служебных  обязанностей  территории  расположены  холодные  тёплые  складские  пригодные  хранения  запчастей  устройств  ожидающих  своей  очереди  плановую  инсталляцию  документы  договоры  реквизиты  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"062new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','64f7e0e7d75974aad16f916cf66f366a',1391010100,11),
	('/services/stand/','/','Аренда стойки',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])аренда  стойки  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  наиболее  востребованная  международном  рынке  услуга  которая  нашем  датацентре  имеет  целый  ряд  дополнительных  преимуществ  позволяющих  клиенту  максимально  эффективно  задействовать  свой  итбюджет  прежде  всего  это  прямая  финансовая  выгода  которую  даёт  промышленная  система  управления  воздушными  потоками  от  kyoto  cooling  &ndash  она  избавляет  необходимости  переплачивать  за  энергопитание  те  деньги  клиента  работают  наибольшей  отдачей  чем  датацентрах  классического  типа  дополнительные  юнитов  каждой  стойке  panduit  48u  избавляют  платить  новое  стойкоместо  при  установке  лишней&  единицы  оборудования&  помимо  этого  есть  достаточно  большая  степень  свободы  плане  повышения  вычислительной  плотности  используемых  им  стойках  которым  двум  шинам  подводится  мощность  до  квт  кабельная  сеть  организована  помощью  скс  случае  вынужденной  разместить  оборудование  нестандартных  габаритов  специалисты  выполнят  комплекс  работ  его  корректной  инсталляции  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"051new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','720a03bc8b37a5ba9c3817863b74b3d1',1391010101,12),
	('/services/server-cell/','/','Аренда серверной ячейки',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])аренда  серверной  ячейки  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  уникальная  для  отечественного  рынка  услуга  предполагающая  полное  ограничение  доступа  посторонних  лиц  автономное  помещение  среверными  или  телекоммуникационными  стойками  которых  размещено  оборудование  клиента  все  три  входа  эту  часть  датацетра  &ndash  холодный  коридор  горячие)  защищены  датчиками  системы  контроля  управления  доступом&  нагрузка  размещенных  ячейках  составляет  квт  требованию  ключевых  компонентs  инженерной  инфраструктуры  арендуемого  им  автономного  пространства  может  быть  зарезервированы  схеме  (на  уровне  tier  классификации  uptime  institute)&  предусмотрены  также  меры  обеспечению  видеоконтроля  за  периметром  выделенной  клиенту  (с  выводом  пульт  охраны  клиента)  другие  дополнительной  защите  ресурсов  этой  разработано  базовых  варианта  тарифных  планов  категории  корпорация&  которыми  вы  можете  ознакомиться  здесь  выбрать  наиболее  соответствующий  вашим  задачам  возможностям  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"044new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','ae3f5d48766094da68b1c0ff1fafeb1c',1391010101,13),
	('/services/unit/','/','Аренда юнита',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])аренда  юнита  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  вы  начинаете  развивать  новое  направление  планируете  полностью  сфокусироваться  интересующих  вас  задачах  нуждаетесь  стабильном  надёжно  защищённом  доступе  необходимой  информации  ваш  бизнес  не  предполагает  наличия  большого  объёма  данных  но  разве  ценность  информационных  ресурсов  от  этого  ниже  чем  отраслевых  грандов  ваша  рабочая  группа  решает  свои  задачи  территориально  удалённых  точках&  эта  услуга  для  вас&  юнитов  арендованных  вами  стартовом  этапе  впоследствии  может  перерасти  более  солидный  парк  если  сами  того  пожелаете  за  дело  станет  &ndash  нас  есть  ресурсы  под  развитие  вашей  иктсистемы  дерзайте  мы  поддержим  этой  разработано  базовых  варианта  тарифных  планов  категории  бизнес&  которыми  можете  ознакомиться  здесь  выбрать  наиболее  соответствующий  вашим  задачам  возможностям  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"038new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','06e45bc3eb79049fb99b9f3dc1ef0d3e',1391010101,14),
	('/services/gear/','/','Аренда оборудования',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])аренда  оборудования  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  мы  хотим  избавить  вас  от  хлопот  неоправданных  затрат  приобретение  необходимого  железа&  предоставив  ваше  распоряжение  современные  устройства  ведущих  вендоров  менеджеры  работе  клиентами  помогут  вам  выбрать  решение  наиболее  полно  отвечающее  вашим  задачам  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"047new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','59c8785287dd97e81247cee879430f86',1391010101,15),
	('/services/software/','/','Аренда лицензионного ПО',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])аренда  лицензионного  по  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  сотрудничает  разработчиками  бизнесприложений  ориентированных  обеспечение  комфортности  эффективности  персонала  участие  партнёрских  программах  ведущих  софтверных  компаний  позволяет  предлагать  своим  клиента  наиболее  выгодные  условия  пользования  гибким  ценам  менеджеры  работе  клиентами  помогут  вам  выбрать  решение  полно  отвечающее  вашим  задачам  документы  договоры  реквизиты  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"048new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','fc1b27d17a7c01007b857c48d94fd82d',1391010102,16),
	('/services/canal/','/','Аренда каналов связи',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])аренда  каналов  связи  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  датацентру  подведены  оптические  каналы  обеспечивающие  доступ  крупные  коммутационные  центры  санктпетербурга  поэтому  подключение  клиентов  каналам  нужного  ему  оператора  выполняется  максимально  быстро&  помимо  этого  клиент  может  организовать  собственные  нужной  пропускной  способности  наша  волс  готова  любым  нагрузкам  позвольте  себе  качественную  связь  нас  всё  предусмотрено  для  того  чтобы  эта  услуга  была  доступна  каждому  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"054new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','45ab28e5b3088e66b113208ae43be743',1391010102,17),
	('/services/drp-office/','/','Аренда DRP-офиса',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])аренда  drpофиса  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  современные  помещения  оснащенные  отказоустойчивой  инфраструктурой  готовы  для  выполнения  функций  резервного  офиса  &ndash  одной  из  важнейших  составляющих  комплексной  программы  обеспечению  непрерывности  бизнеса  какой  бы  сложной  ни  была  нештатная  ситуация  застать  ваших  сотрудников&  врасплох  будет  не  такто  просто  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"044new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','dad348cfdfc02054e2d98557850f16d5',1391010102,18),
	('/services/administration/','/','Администрирование',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])администрирование  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  используйте  руки  квалификацию  специалистов  для  удалённого  решения  стоящих  перед  вами  задач  тюнингу  своих  информационных  систем  перезагрузке  или  подготовке  размещенного  дц  либо  складе  проведению  регламентных  работ  remote  hands  готовы  прийти  вам  вырчку  любую  минуту  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"054new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','93a7720ed532148b496c664067a29287',1391010102,19),
	('/services/storage/','/','Аренда склада',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])аренда  склада  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  датацентре  всё  предусмотрено  для  того  чтобы  создать  итперсоналу  клиента  условия  комфортного  выполнения  служебных  обязанностей  территории  расположены  холодные  тёплые  складские  помещения  пригодные  хранения  запчастей  устройств  ожидающих  своей  очереди  плановую  инсталляцию  после  физических  нагрузок  дискомфорта  нередко  возникающего  таких  случаях  всегда  есть  возможность  освежиться  душе  документы  договоры  реквизиты  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"069new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','880799d640424f8f41fe5032a296a573',1391010102,20),
	('/tariffs/','/','Тарифы',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])тарифы  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  пакеты  тарифов  бизнес  компания  корпорация  индивидуальная  конфигурация  для  владельцев  серверов  и&  иных  типов  включая  формфактор  blade  дисковых  массивов  телекоммуникационных  систем  прочих  устройств  с&  креплением&  19\"  &#8399  интернет  мб/c  выделенная  мощность  вт  коридор  мощности  энергия  сверх  коридора  ?/квт  стоимость  инсталяции  ?  время  100%  доступности  часов  максимальный  предел  пакет  канал  оплачивается  отдельно  промоакция  до  января  бронирование  5000&  ?/мес  инсталляция  &mdash  бесплатно&  расходнЫе  материалЫ  10u  19u  ваш  персональный  запираемый  шкаф  panduit  netaccess  stype  глубиной  1219&  мм  необходимой  бесперебойного  функционирования  инженерной  инфраструктурой  (копия)  помимо  размещения  профессиональных  шкафах  они  будут  локализованы  удобства  обслуживания  или  даже  установлены  в&  отдельную  ячейку  ограниченным  доступом  а&  это  уже  $(function  tariffsinit()  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"072new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','dea7b1fd9dcdf4ab04b0b5be3dcf31d1',1391010103,21),
	('/market-press/','/','Маркет-пресс',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])маркетпресс  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  эксперты  готовы  поделиться  своим  мнением  и&  точкой  зрения  на&  вопросы  строительства  эксплуатации  датацентров  с&  аудиторией  деловых  специализированных  изданий  свои  предложения  о&  сотрудничестве  направляйте  пожалуйста  адрес  marketinfo@stackdatanet&  либо  через&  форму  запроса  услуг  в&  разделе  тарифы&  документы  договоры  реквизиты  условия  sla  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"092new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','98154ddb2749e0ddf717855175575386',1391010103,22),
	('/market-press/shares/','/','Акции',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])акции  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  ознакомьтесь  нашими  спецпредложениями  разделе  тарифы&  воспользуйтесь  возможностью  совершить  экскурсию  нашему  датацентру  составить  собственное  мнение  преимуществах  уникальной  stackкуб  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"034new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','5b9b82d3cc1ca04bd57bfe2ddf2fc856',1391010103,23),
	('/market-press/news/','/','Новости',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])новости  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  ввод  эксплуатацию  1й  очереди  датацентра  июля  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"041new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','eb984a911dd507ef7a3b79f1a9990a7b',1391010103,24),
	('/market-press/press/','/','Пресса о компании',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])пресса  компании  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  читайте  журнал  connect  мир  связи&  №&  2013&  где  опубликована  статья  коммерческого  директора  в&  санктпетербурге  евгения  пепеляева  drp  три  простых  вопроса  против  одного  &bdquoсиндрома  титаника&ldquo&  банковские  технологии&  михаила  золоторева  бесперебойность  инженерных  систем&  дц  sla&  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"039new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','201ea121c92cb43b90e6d225b7265b9e',1391010104,25),
	('/market-press/events/','/','Мероприятия',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])мероприятия  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  следите  за  нашими  новостями  подпишитесь  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"036new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','6701a1e62f38b146a3ac197c96cb3143',1391010104,26),
	('/market-press/marketing/','/','Маркетинговые материалы',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])маркетинговые  материалы  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  скором  времени  этой  странице  станут  доступны  pdf  версии  наших  информационных  листков  каталогов  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"034new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','c8fd88473117764c414bd9fbf0e82369',1391010104,27),
	('/market-press/subscribe/','/','Подписаться на рассылку',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])подписаться  на  рассылку  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  полезная  информация  контакты  оставить  заявку  главная  $(\'form#subscribe\')on(\'submit\'  function(e){  epreventdefault()  $ajax({  url  \'/ajax&action=subscribe\'  data  email  $(\'input[name=\"subscribe_email\"]\')val()  type  \'post\'  beforesend  function(){  $(\'form#subscribe  formmessage\')slideup(100)  input[type=\"submit\"]\')attr(\'disabled\'  \'disabled\')  success  function(data){  classname  if(datastatus  true){  \'success\'  }else{  \'error\'  input[type=\"submit\"]\')removeattr(\'disabled\')  formmessage\')addclass(classname)html(datamessage)slidedown(100)  fields\')hide()  error  formmessage\')addclass(\'error\')html(\'внутренняя  ошибка  сервера\')slidedown(100)  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"047new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','3aa63fd33b19d69319377a347bc3a87b',1391010104,28),
	('/helpful/','/','Полезная информация',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])полезная  информация  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  контакты  оставить  заявку  главная  астатический  гироскопический  маятник  глазами  современников  угол  курса  позволяет  исключить  из  рассмотрения  период  переходя  другую  систему  координат  инерциальная  навигация  например  трансформирует  периодический  что  является  очевидным  собственный  кинетический  момент  стационарно  искажает  вектор  угловой  скорости  используя  имеющиеся  этом  случае  первые  интегралы  направление  даёт  большую  проекцию  оси  чем  дифференциальный  нутация  явно  следует  прецессионных  уравнений  движения  степень  свободы  проецирует  жидкий  центр  подвеса  сводя  задачу  квадратурам  время  набора  максимальной  соответствии  основным  законом  динамики  вращает  стабилизатор  можно  рассматривать  достаточной  степенью  точности  как  для  единого  твёрдого  тела  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"034new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','3a7650de1c606b6663b2910d95725bc9',1391010104,29),
	('/contacts/','/','Контакты',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])контакты  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  удобное  расположение  датацентра  развязке  выборгского  кад  мин  от  ближайшей  станции  метро  парковочных  мест  аэропорта  пулково&  адрес  пос  выборгское  шоссе  корп  телефоны  электронная  почта  общим  вопросам&  info@stackdatanet  для  уточнения  деталей  связанных  получением  услуг  заполните  пожалуйста  &ndash  или  сделайте  запрос  через  постоянного  клиента  как  добраться  наш  технологический  комплекс  расположен  рядом  транспортной  развязкой  российской  стекольной  компанией  точное  место  карте  навигатора  вы  можете  определить  координатам  добираться  нам  удобно  автомобиле  (на  территории  имеется  парковка  мест)  так  общественным  транспортом  (ок  минут  парнас&  при  съезде  необходимо  ориентироваться  указатели  \"максидом\"  \"парголово\"  ?двигаясь  внешнему  кольцу  выберите  первый  (небольшой)  поворот  направо  движении  внутреннему  нужно  проехать  парковку  максидома  следовать  прямо  небольшой  асфальтированной  дороге  направлении  противоположном  движению  расчётное  время  пути  метро&  озерки&  автобус  №  маршрутное  такси  пр  просвещения&  такси№  до  супермаркета  максидом  далее  стоянки  пешком  метров  корпоративной  развозке  рск&  рабочим  дням  согласованию  холдингом  адамант&  воспользоваться  служебным  следующего  офиса  осиновая  роща&  стм  гражданский  проспект&  проспект  карта  проезда  места  остановки  служебных  автобусов  все  поля  обязательны  заполнения  $(function(){  feedbackinit()  mapinit()  документы  договоры  реквизиты  условия  sla  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"045new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','8761d38cdd47be1c97e752c675ed01af',1391010104,30),
	('/contacts/visit','/','Заявка на посещение ДЦ',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])заявка  на  посещение  дц  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  рассылку  полезная  информация  контакты  оставить  заявку  заявка  компания  номер  договора  автомобиль  марка  цвет  гос  дата/время  прибытия  дата  время  продолжительность  работ  планируемая  часах  вывоз  планируется  количество  мест  (упаковок)  ввоз  дополнительно  дополнительная  все  поля  обязательны  для  заполнения  $(function(){  visitinit()  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"083new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','6ffeec66951b0ae59b8a2846ae15be58',1391010105,31),
	('/market-press/news/exploitation/','/','Ввод в эксплуатацию 1-й очереди дата-центра в Парголово',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])ввод  эксплуатацию  1й  очереди  датацентра  парголово  sdn  модульный  датацентр  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  ввод  января  года  &ndash  день  официального  ввода  этого  момента  распоряжение  клиентов  поступают  серверных  ячеек  суммарной  емкостью  48u  запуск  следующей  намечен  апрель  спешите  подавать  заявки  необходимый  вам  пакет  услуг  войти  число  региональной  итэлиты  аутсорсинг  датацентре  престижно  надёжно  выгдно  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"096new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','074aca32544c0f0249232b93d2089e3c',1391010105,32),
	('/market-press/press/kollektivnyiy-povtornyiy-kontakt-konkurent-ili-prodvijenie-proekta/','/','Коллективный повторный контакт: конкурент или продвижение проекта',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])коллективный  повторный  контакт  конкурент  или  продвижение  проекта  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  коллективный  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"058new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','d5b7b204839f389bb7f90c42593baf4d',1391010105,33),
	('/market-press/shares/aktsiya/','/','Акция №1',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])акция  №1  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  стиль  менеджмента  без  оглядки  авторитеты  повсеместно  ускоряет  креатив  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"037new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','95d1efbad7eb08e6b408b86688ac9e1f',1391010105,34),
	('/about','/','О компании',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])о  компании  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  ооо  сдн&  (sdn)  &ndash  профессиональная  команда  оказывающая  полный  спектр  услуг  дцаутсорсинга  от  предоставления  аренду  готовых  подключению  мест  телекоммуникационных  шкафах  серверных  модулях  до  разработки  комплекса  мер  защите  бизнеса  клиентов  иктрисков  (drpконсалтинг)  владеет  патентом  одно  из  самых  передовых  решений  сфере  создания  эксплуатации  развития  энергоэффективных  модульных  датацентров  благодаря  этому  нашим  клиентам  обеспечиваются  наиболее  выгодные  отечественном  рынке  условия  для  стабильной  безотказной  их  информационных  систем  телекоммуникационного  оборудования&  документы  договоры  реквизиты  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"037new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','4e52f7ec7f8c412ce7ddca09435c79d5',1391010106,35),
	('/documents/contracts/','/','Договоры',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])договоры  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"070new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','a26e6091a683cab9fd08bdcd98c11bcc',1391010106,36),
	('/documents/requisites/','/','Реквизиты',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])реквизиты  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  документы  реквизиты  договоры  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"038new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','d1ae5d7cae117fc22fada5be99b58c33',1391010106,37),
	('/documents/specifications/','/','Технические условия',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])технические  условия  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  документы  договоры  реквизиты  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"044new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','f5b054c7511d08cd7085aebf101f7b1f',1391010106,38),
	('/documents/sla/','/','SLA',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])sla  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  документы  sla  договоры  реквизиты  условия  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"036new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','ba866115c011274734e07758b515bf23',1391010106,39),
	('/helpful','/','Полезная информация',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])полезная  информация  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  контакты  оставить  заявку  главная  астатический  гироскопический  маятник  глазами  современников  угол  курса  позволяет  исключить  из  рассмотрения  период  переходя  другую  систему  координат  инерциальная  навигация  например  трансформирует  периодический  что  является  очевидным  собственный  кинетический  момент  стационарно  искажает  вектор  угловой  скорости  используя  имеющиеся  этом  случае  первые  интегралы  направление  даёт  большую  проекцию  оси  чем  дифференциальный  нутация  явно  следует  прецессионных  уравнений  движения  степень  свободы  проецирует  жидкий  центр  подвеса  сводя  задачу  квадратурам  время  набора  максимальной  соответствии  основным  законом  динамики  вращает  стабилизатор  можно  рассматривать  достаточной  степенью  точности  как  для  единого  твёрдого  тела  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"049new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','1721589db2aee5fbff1e36e8c10ac943',1391010107,40),
	('/services','/','Услуги',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])услуги  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  клиенты  stack  data  network  имеют  возможность  оперативно  реагировать  изменение  бизнесобстановки  формируя  необходимый  достаточный  для  себя  комплекс  технологических  проектных  административных  услуг  среднерыночным  ценам  среди  базовых  тарифных  предложений  есть  как  стандартные  (аренда  юнита/стойки/лицензионного  по)  так  абсолютно  россии  продукт  &ndash  готового  эксплуатации  индивидуального  зала&  (выделенной  или  сектора)  позволяющего  клиенту  организовать  защищенный  от  несанкционированного  доступа  узел  корпоративной  вычислительной/телекоммуникационной  сети  сотрудничает  разработчиками  бизнесприложений  ориентированных  обеспечение  комфортности  эффективности  персонала  участие  партнёрских  программах  ведущих  софтверных  компаний  позволяет  предлагать  своим  клиента  наиболее  выгодные  условия  пользования  гибким  ценам&  уникальная  отечественного  рынка  услуга  предполагающая  полное  ограничение  посторонних  лиц  автономное  помещение  среверными  телекоммуникационными  стойками  которых  размещено  оборудование  востребованная  международном  рынке  которая  нашем  датацентре  имеет  целый  ряд  дополнительных  преимуществ  позволяющих  максимально  эффективно  задействовать  свой  итбюджет  вы  начинаете  развивать  новое  направление  планируете  полностью  сфокусироваться  интересующих  вас  задачах  нуждаетесь  стабильном  надёжно  защищённом  доступе  необходимой  информации  мы  хотим  избавить  хлопот  неоправданных  затрат  приобретение  необходимого  железа&  предоставив  ваше  распоряжение  современные  устройства  вендоров  менеджеры  работе  клиентами  помогут  вам  выбрать  решение  полно  отвечающее  вашим  задачам  помещения  оснащенные  отказоустойчивой  инфраструктурой  готовы  выполнения  функций  резервного  офиса  одной  из  важнейших  составляющих  комплексной  программы  обеспечению  непрерывности  бизнеса  датацентру  подведены  оптические  каналы  обеспечивающие  доступ  крупные  коммутационные  центры  санктпетербурга  поэтому  подключение  клиентов  каналам  нужного  ему  оператора  выполняется  быстро&  используйте  руки  квалификацию  специалистов  удалённого  решения  стоящих  перед  вами  задач  тюнингу  своих  информационных  систем  перезагрузке  подготовке  размещенного  дц  либо  складе  проведению  регламентных  работ  всё  предусмотрено  того  чтобы  создать  итперсоналу  комфортного  служебных  обязанностей  территории  расположены  холодные  тёплые  складские  пригодные  хранения  запчастей  устройств  ожидающих  своей  очереди  плановую  инсталляцию  документы  договоры  реквизиты  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"036new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','949ba0217e48f1f8ae8f9208351e0528',1391010107,41),
	('/datacenter','/','Дата-центр',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])датацентр  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  комплекс  в&  &ndash  самая  крупная  и&  современная  северозападном  регионе  одна  из&  лучших  европе  технологическая  площадка  она  спроектирована  построена  с&  учётом  рекомендаций  отечественных  отраслевых  регламентов  требований  к&  tier  iii  стандарта  tia942  (отдельно  стоящее  здание  резервирование  элементов  инженерной  инфраструктуры  по&  схеме  нагрузочная  способность  напольного  покрытия  рассчитанная  на&  тяжелое  оборудование  доступность  сервисов  не&  ниже  9995%)  рамках  данного  проекта  одном  участке  земли  развёрнуты  комфортный  для&  административнобытовой  корпус  соединённый  переходами  датацентром  складские  помещения  со&  специально  оборудованными  погрузочноразгрузочными  зонами  собственную  охраняемую  парковку  удобства  клиентов  предусмотрена  просторная  комната  где  персонал  клиента  может  выполнить  необходимые  ему  своим  оборудованием  kvmинструментарий  remote  hand  под&  резервные  офисы  другие  сервисы  которые  нередко  превосходят  своему  качеству  собственные  возможности  компаний  обслуживание  происходит  круглосуточном  режиме  без&  выходных  дней  предполагает  оперативность  доступа  персонала  клиентскую  зону  течение  15&  мин  момента  отправки  заявки  электронной  почте  постоянно  присутствующие  площадке  дежурные&  смены  специалистов  инсталляции  обеспечивают  запуск  работу  заказчиком  более  чем  через&  часа  документы  договоры  реквизиты  условия  sla  адрес  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"052new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','2827868b4e6e8d73b69151cd131e84b4',1391010107,42),
	('/market-press','/','Маркет-пресс',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])маркетпресс  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  главная  эксперты  готовы  поделиться  своим  мнением  и&  точкой  зрения  на&  вопросы  строительства  эксплуатации  датацентров  с&  аудиторией  деловых  специализированных  изданий  свои  предложения  о&  сотрудничестве  направляйте  пожалуйста  адрес  marketinfo@stackdatanet&  либо  через&  форму  запроса  услуг  в&  разделе  тарифы&  документы  договоры  реквизиты  условия  sla  пос  выборгское  шоссе  корп  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"036new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','a386cacbbe44e1c101d8fda84db36a23',1391010107,43),
	('/contacts','/','Контакты',' var  nreumq=nreumq||[]nreumqpush([\"mark\"\"firstbyte\"new  date()gettime()])контакты  sdn  модульный  датацентр  парголово  санктпетербург  новый  уровень  сервиса  (812)  (495)  заказать  обратный  звонок  написать  письмо  личный  кабинет  компании  принцип  работы  партнеры  лицензии  вакансии  описание  технические  характеристики  технологии  услуги  аренда  стойки  серверной  ячейки  юнита  оборудования  лицензионного  по  каналов  связи  drpофиса  администрирование  склада  тарифы  маркетпресс  акции  новости  пресса  мероприятия  маркетинговые  материалы  подписаться  на  рассылку  полезная  информация  контакты  оставить  заявку  удобное  расположение  датацентра  развязке  выборгского  кад  мин  от  ближайшей  станции  метро  парковочных  мест  аэропорта  пулково&  адрес  пос  выборгское  шоссе  корп  телефоны  электронная  почта  общим  вопросам&  info@stackdatanet  для  уточнения  деталей  связанных  получением  услуг  заполните  пожалуйста  &ndash  или  сделайте  запрос  через  постоянного  клиента  как  добраться  наш  технологический  комплекс  расположен  рядом  транспортной  развязкой  российской  стекольной  компанией  точное  место  карте  навигатора  вы  можете  определить  координатам  добираться  нам  удобно  автомобиле  (на  территории  имеется  парковка  мест)  так  общественным  транспортом  (ок  минут  парнас&  при  съезде  необходимо  ориентироваться  указатели  \"максидом\"  \"парголово\"  ?двигаясь  внешнему  кольцу  выберите  первый  (небольшой)  поворот  направо  движении  внутреннему  нужно  проехать  парковку  максидома  следовать  прямо  небольшой  асфальтированной  дороге  направлении  противоположном  движению  расчётное  время  пути  метро&  озерки&  автобус  №  маршрутное  такси  пр  просвещения&  такси№  до  супермаркета  максидом  далее  стоянки  пешком  метров  корпоративной  развозке  рск&  рабочим  дням  согласованию  холдингом  адамант&  воспользоваться  служебным  следующего  офиса  осиновая  роща&  стм  гражданский  проспект&  проспект  карта  проезда  места  остановки  служебных  автобусов  все  поля  обязательны  заполнения  $(function(){  feedbackinit()  mapinit()  документы  договоры  реквизиты  условия  sla  &copy  2013&ndash  сделано  бирс  if(nreumqf){nreumqf=function(){nreumqpush([\"load\"new  date()gettime()])var  e=documentcreateelement(\"script\")etype=\"text/javascript\"esrc=((\"http\"===documentlocationprotocol)\"http\"\"https\")+\"//\"+\"jsagentnewreliccom/nr100js\"documentbodyappendchild(e)if(nreumqa)nreumqa()}nreumqa=windowonloadwindowonload=nreumqf}nreumqpush([\"nrfj\"\"beacon2newreliccom\"\"3b455a7b76\"\"1944847\"\"b1rwyxyex0vraujrwfyeyuunslhyvadofkdqqq==\"047new  date()gettime()\"\"\"\"\"\"\"\"\"\"]) ','d6ed2c5586b7243a8ae1b626b8850253',1391010107,44);

/*!40000 ALTER TABLE `search` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы section_32
# ------------------------------------------------------------

DROP TABLE IF EXISTS `section_32`;

CREATE TABLE `section_32` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2014-01-30 14:44:00',
  `change_date` datetime NOT NULL DEFAULT '2014-01-30 14:44:00',
  `col_215` datetime NOT NULL DEFAULT '2014-01-30 14:44:00',
  `col_216` longtext,
  `col_217` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `section_32` WRITE;
/*!40000 ALTER TABLE `section_32` DISABLE KEYS */;

INSERT INTO `section_32` (`id`, `publish`, `name`, `sort`, `creator_id`, `changer_id`, `creation_date`, `change_date`, `col_215`, `col_216`, `col_217`)
VALUES
	(1,1,'ДЖЕЙН МОНХАЙТ ПРИВЕЗЕТ В МОСКВУ РОЖДЕСТВО! 13 ДЕКАБРЯ В ММДМ',1,3,3,'2014-01-30 14:45:16','2014-01-30 16:25:30','2014-01-10 14:44:00','<p>В Москве наступила зима, выпал снег и начались морозы. Праздничное настроение, елочные украшения и запах мандаринов наполнили столицу.</p>','<p>В Москве наступила зима, выпал снег и начались морозы. Праздничное настроение, елочные украшения и запах мандаринов наполнили столицу.</p>'),
	(2,1,'Объект 2',2,3,3,'2014-01-30 14:55:27','2014-01-30 14:55:32','2014-01-30 14:44:00','asdasdasdasdasd',NULL),
	(3,1,'Объект 3',3,3,3,'2014-01-30 14:55:33','2014-01-30 14:55:36','2014-01-30 14:44:00','asdsadasdsad',NULL),
	(4,1,'Объект 4',4,3,3,'2014-01-30 14:55:38','2014-01-30 14:55:42','2014-01-30 14:44:00','asdasdasdasdsa22',NULL),
	(5,1,'Объект 5',5,3,3,'2014-01-30 14:55:43','2014-01-30 14:55:46','2014-01-30 14:44:00','xxasdasd',NULL),
	(6,1,'Объект 6',6,3,3,'2014-01-30 14:55:48','2014-01-30 14:55:50','2014-01-30 14:44:00','sadasdasd',NULL),
	(7,1,'Объект 7',7,3,3,'2014-01-30 14:55:51','2014-01-30 14:55:53','2014-01-30 14:44:00','asdasdasd2',NULL),
	(8,1,'Объект 8',8,3,3,'2014-01-30 14:55:54','2014-01-30 14:55:56','2014-01-30 14:44:00','asdasdasd',NULL),
	(9,1,'Объект 9',9,3,3,'2014-01-30 14:55:57','2014-01-30 14:55:59','2014-01-30 14:44:00','xxas',NULL),
	(10,1,'Объект 10',10,3,3,'2014-01-30 14:56:00','2014-01-30 14:56:02','2014-01-30 14:44:00','asdasd',NULL),
	(11,1,'Объект 11',11,3,3,'2014-01-30 14:56:04','2014-01-30 14:56:06','2014-01-30 14:44:00','asdasdasdx',NULL);

/*!40000 ALTER TABLE `section_32` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы section_33
# ------------------------------------------------------------

DROP TABLE IF EXISTS `section_33`;

CREATE TABLE `section_33` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2014-01-31 15:52:00',
  `change_date` datetime NOT NULL DEFAULT '2014-01-31 15:52:00',
  `col_221` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `section_33` WRITE;
/*!40000 ALTER TABLE `section_33` DISABLE KEYS */;

INSERT INTO `section_33` (`id`, `publish`, `name`, `sort`, `creator_id`, `changer_id`, `creation_date`, `change_date`, `col_221`)
VALUES
	(20,1,'Объект 20',1,3,3,'2014-01-31 17:01:21','2014-01-31 17:01:26','1'),
	(21,1,'Объект 21',2,3,3,'2014-01-31 17:01:28','2014-01-31 17:01:31','1'),
	(23,1,'Объект 23',3,3,3,'2014-01-31 18:31:42','2014-01-31 18:31:47','1'),
	(24,1,'Объект 24',6,3,3,'2014-01-31 18:31:48','2014-01-31 18:31:52','1'),
	(25,1,'Объект 25',4,3,3,'2014-01-31 18:31:53','2014-01-31 18:31:58','1'),
	(26,1,'Объект 26',11,3,3,'2014-01-31 18:31:59','2014-01-31 18:32:03','1'),
	(27,1,'Объект 27',8,3,3,'2014-01-31 18:32:05','2014-01-31 18:32:09','1'),
	(28,1,'Объект 28',10,3,3,'2014-01-31 18:32:11','2014-01-31 18:32:16','1'),
	(29,1,'Объект 29',7,3,3,'2014-01-31 18:32:17','2014-01-31 18:32:21','1'),
	(30,1,'Объект 30',9,3,3,'2014-01-31 18:32:23','2014-01-31 18:32:27','1'),
	(31,1,'Объект 31',12,3,3,'2014-01-31 18:32:29','2014-01-31 18:32:33','1'),
	(32,1,'Объект 32',13,3,3,'2014-01-31 19:08:37','2014-01-31 19:09:07','1'),
	(33,1,'Объект 33',14,3,3,'2014-01-31 19:09:08','2014-01-31 19:09:08','1');

/*!40000 ALTER TABLE `section_33` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы section_34
# ------------------------------------------------------------

DROP TABLE IF EXISTS `section_34`;

CREATE TABLE `section_34` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2014-02-03 21:39:00',
  `change_date` datetime NOT NULL DEFAULT '2014-02-03 21:39:00',
  `col_225` text,
  `col_226` text,
  `col_228` text,
  `col_234` int(11) DEFAULT '0',
  `col_236` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `section_34` WRITE;
/*!40000 ALTER TABLE `section_34` DISABLE KEYS */;

INSERT INTO `section_34` (`id`, `publish`, `name`, `sort`, `creator_id`, `changer_id`, `creation_date`, `change_date`, `col_225`, `col_226`, `col_228`, `col_234`, `col_236`)
VALUES
	(1,1,'Объект 1',1,3,3,'2014-02-03 21:44:23','2014-02-03 22:39:04','1','0','',1,'15:00'),
	(2,1,'Объект 2',2,3,3,'2014-02-03 21:44:40','2014-02-03 22:39:10','1','0','',1,'22:55'),
	(3,1,'Песенка 3',3,3,3,'2014-02-03 22:43:32','2014-02-03 22:43:48','1','0','',1,'10:11'),
	(4,1,'Объект 4',4,3,3,'2014-02-03 22:43:53','2014-02-03 22:44:05','1','0','',1,'04:12');

/*!40000 ALTER TABLE `section_34` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы section_35
# ------------------------------------------------------------

DROP TABLE IF EXISTS `section_35`;

CREATE TABLE `section_35` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2014-02-03 21:43:00',
  `change_date` datetime NOT NULL DEFAULT '2014-02-03 21:43:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `section_35` WRITE;
/*!40000 ALTER TABLE `section_35` DISABLE KEYS */;

INSERT INTO `section_35` (`id`, `publish`, `name`, `sort`, `creator_id`, `changer_id`, `creation_date`, `change_date`)
VALUES
	(1,1,'Тест',1,3,3,'2014-02-03 21:44:12','2014-02-03 21:44:17');

/*!40000 ALTER TABLE `section_35` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы section_36
# ------------------------------------------------------------

DROP TABLE IF EXISTS `section_36`;

CREATE TABLE `section_36` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `name` tinytext,
  `sort` int(11) NOT NULL DEFAULT '1',
  `creator_id` int(11) NOT NULL,
  `changer_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT '2014-02-05 14:05:00',
  `change_date` datetime NOT NULL DEFAULT '2014-02-05 14:05:00',
  `col_241` text,
  `col_242` text,
  `col_243` text,
  `col_246` text,
  `col_247` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `section_36` WRITE;
/*!40000 ALTER TABLE `section_36` DISABLE KEYS */;

INSERT INTO `section_36` (`id`, `publish`, `name`, `sort`, `creator_id`, `changer_id`, `creation_date`, `change_date`, `col_241`, `col_242`, `col_243`, `col_246`, `col_247`)
VALUES
	(1,1,'Объект 1Объект we',1,3,3,'2014-02-05 14:16:32','2014-02-05 17:26:03','qwewqeqwe','2:10','1','1',NULL),
	(2,1,'Объект 1Объект 1Объект 1',2,3,3,'2014-02-05 14:22:14','2014-02-05 16:17:43','eqweqwe','2:33','1','1',NULL);

/*!40000 ALTER TABLE `section_36` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы sections
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sections`;

CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text NOT NULL,
  `color` varchar(6) NOT NULL DEFAULT 'FFFFFF',
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;

INSERT INTO `sections` (`id`, `name`, `description`, `color`, `sort`)
VALUES
	(35,'Альбомы','','4613FA',NULL),
	(34,'Музыка','','0660A7',NULL),
	(33,'Фото','','5A34E5',NULL),
	(32,'Новости','','69DF1F',NULL),
	(36,'Видео','','A09597',NULL);

/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы shop_categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_categories`;

CREATE TABLE `shop_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `sort` int(11) DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `shop_categories` WRITE;
/*!40000 ALTER TABLE `shop_categories` DISABLE KEYS */;

INSERT INTO `shop_categories` (`id`, `name`, `sort`, `publish`)
VALUES
	(3,'Категория товаров 3',3,1),
	(4,'Категория товаров 4',4,1);

/*!40000 ALTER TABLE `shop_categories` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы shop_goods
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_goods`;

CREATE TABLE `shop_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `sort` int(11) DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `item_article` tinytext,
  `price` float DEFAULT '0',
  `discount` tinyint(3) DEFAULT '0',
  `category` int(11) DEFAULT NULL,
  `item_picture` int(11) DEFAULT NULL,
  `item_gallery` int(11) DEFAULT NULL,
  `description` text,
  `short_description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `shop_goods` WRITE;
/*!40000 ALTER TABLE `shop_goods` DISABLE KEYS */;

INSERT INTO `shop_goods` (`id`, `name`, `sort`, `publish`, `item_article`, `price`, `discount`, `category`, `item_picture`, `item_gallery`, `description`, `short_description`)
VALUES
	(10,'Товар 10',10,0,'',0,0,NULL,0,0,NULL,NULL);

/*!40000 ALTER TABLE `shop_goods` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы structure
# ------------------------------------------------------------

DROP TABLE IF EXISTS `structure`;

CREATE TABLE `structure` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `structure` WRITE;
/*!40000 ALTER TABLE `structure` DISABLE KEYS */;

INSERT INTO `structure` (`id`, `pid`)
VALUES
	(1,0);

/*!40000 ALTER TABLE `structure` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы structure_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `structure_data`;

CREATE TABLE `structure_data` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `name` tinytext,
  `path` tinytext,
  `part` tinytext,
  `title` tinytext,
  `description` tinytext,
  `keywords` tinytext,
  `publish` tinyint(1) DEFAULT '0',
  `sort` tinyint(4) DEFAULT '0',
  `menu` int(11) NOT NULL,
  `mode` tinyint(1) NOT NULL,
  `template` int(11) DEFAULT NULL,
  `private` tinyint(4) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `just_created` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `path` (`path`(2)),
  KEY `menu` (`menu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `structure_data` WRITE;
/*!40000 ALTER TABLE `structure_data` DISABLE KEYS */;

INSERT INTO `structure_data` (`id`, `pid`, `name`, `path`, `part`, `title`, `description`, `keywords`, `publish`, `sort`, `menu`, `mode`, `template`, `private`, `content_id`, `just_created`)
VALUES
	(1,0,'Главная','/',NULL,'','','',1,0,3,1,1,0,3,0);

/*!40000 ALTER TABLE `structure_data` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `va` (`name`),
  KEY `name` (`name`(2))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Дамп таблицы templates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `templates`;

CREATE TABLE `templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `sort` int(11) DEFAULT NULL,
  `publish` tinyint(4) DEFAULT NULL,
  `file` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `templates` WRITE;
/*!40000 ALTER TABLE `templates` DISABLE KEYS */;

INSERT INTO `templates` (`id`, `name`, `sort`, `publish`, `file`)
VALUES
	(2,'Пресс-центр',4,1,'press-center.tpl'),
	(1,'Главная страница',6,1,'main.tpl'),
	(4,'Контакты',7,1,'contacts.tpl'),
	(6,'Внутренний',6,1,'inner.tpl'),
	(7,'Услуги',7,1,'services.tpl'),
	(8,'О компании',8,1,'about.tpl'),
	(9,'Дата-центр',9,1,'datacenter.tpl'),
	(10,'Документы',10,1,'documents.tpl'),
	(11,'Статьи',11,1,'articles.tpl'),
	(12,'Вакансии',12,1,'vacancies.tpl'),
	(13,'Сервисная страница',13,1,'_service_page.tpl'),
	(14,'Тарифы',14,1,'tariffs.tpl'),
	(15,'Подписка на рассылку',15,1,'subscribe.tpl'),
	(16,'Отписаться от рассылки',16,1,'unsubscribe.tpl'),
	(17,'Заявка на посещение ДЦ',17,1,'visit.tpl');

/*!40000 ALTER TABLE `templates` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `name` tinytext,
  `email` tinytext,
  `password` varchar(32) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `ip` int(10) unsigned NOT NULL DEFAULT '0',
  `last` datetime DEFAULT '2010-01-01 00:00:00',
  `activity` datetime DEFAULT '2010-01-01 00:00:00',
  `group` int(11) DEFAULT NULL,
  `publish` tinyint(4) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `login`, `name`, `email`, `password`, `hash`, `ip`, `last`, `activity`, `group`, `publish`, `sort`)
VALUES
	(3,'admin','admin','ruslanchek@gmail.com','d9b1d7db4cd6e70935368a1efb10e377','ea484b22bc2a320570f42493e09bc617',2130706433,'2014-02-05 14:05:08','2014-02-05 18:07:32',1,1,1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы users_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `auth_code` tinytext NOT NULL,
  `publish` tinyint(4) NOT NULL,
  `sort` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;

INSERT INTO `users_groups` (`id`, `name`, `auth_code`, `publish`, `sort`)
VALUES
	(4,'Администраторы','',1,4);

/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
