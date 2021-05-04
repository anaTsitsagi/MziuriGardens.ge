-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2018 at 07:34 PM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khuloge_shindi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `idx` int(11) NOT NULL,
  `id` int(11) NOT NULL DEFAULT '0',
  `key` varchar(100) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL DEFAULT '0',
  `value` varchar(2000) NOT NULL DEFAULT '0',
  `language` varchar(3) NOT NULL DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`idx`, `id`, `key`, `title`, `value`, `language`, `deleted`) VALUES
(1, 1, 'ipprotection', 'IP Protection', 'No', 'ge', 0),
(2, 1, 'ipprotection', 'IP Protection', 'No', 'en', 0),
(3, 1, 'ipprotection', 'IP Protection', 'No', 'ru', 0),
(4, 2, 'iplist', 'IP List', '46.49.33.55,46.49.33.55', 'ge', 0),
(5, 2, 'iplist', 'IP List', '46.49.33.55,46.49.33.55', 'en', 0),
(6, 2, 'iplist', 'IP List', '46.49.33.55,46.49.33.55', 'ru', 0),
(7, 3, 'news.per.page', 'News Per Page', '20', 'ge', 0),
(8, 3, 'news.per.page', 'News Per Page', '20', 'en', 0),
(9, 3, 'news.per.page', 'News Per Page', '20', 'ru', 0),
(10, 4, 'list.per.page', 'List Per Page', '20', 'ge', 0),
(11, 4, 'list.per.page', 'List Per Page', '20', 'en', 0),
(12, 4, 'list.per.page', 'List Per Page', '20', 'ru', 0),
(13, 5, 'faq.per.page', 'Faq Per Page', '20', 'ge', 0),
(14, 5, 'faq.per.page', 'Faq Per Page', '20', 'en', 0),
(15, 5, 'faq.per.page', 'Faq Per Page', '20', 'ru', 0),
(16, 6, 'banner.per.page', 'Banners Per Page', '20', 'ge', 0),
(17, 6, 'banner.per.page', 'Banners Per Page', '20', 'en', 0),
(18, 6, 'banner.per.page', 'Banners Per Page', '20', 'ru', 0),
(19, 7, 'users.per.page', 'Users Per Page', '20', 'ge', 0),
(20, 7, 'users.per.page', 'Users Per Page', '20', 'en', 0),
(21, 7, 'users.per.page', 'Users Per Page', '20', 'ru', 0),
(22, 8, 'siteusers.per.page', 'Site Users Per Page', '20', 'ge', 0),
(23, 8, 'siteusers.per.page', 'Site Users Per Page', '20', 'en', 0),
(24, 8, 'siteusers.per.page', 'Site Users Per Page', '20', 'ru', 0),
(25, 9, '0', 'kkm', 'kmkm', 'ge', 1),
(26, 9, '0', 'kkm', 'kmkm', 'en', 1),
(27, 9, '0', 'kkm', 'kmkm', 'ru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attached`
--

CREATE TABLE `attached` (
  `id` bigint(11) NOT NULL,
  `page` bigint(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(800) DEFAULT NULL,
  `position` bigint(20) NOT NULL DEFAULT '0',
  `language` varchar(2) NOT NULL DEFAULT 'ge'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pid` bigint(11) DEFAULT NULL,
  `userid` int(11) NOT NULL DEFAULT '0',
  `price` decimal(4,2) NOT NULL DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sold` tinyint(1) NOT NULL DEFAULT '0',
  `session` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `prod_type` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `idx` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL DEFAULT '0',
  `title` varchar(1200) CHARACTER SET utf8 NOT NULL,
  `menuid` int(11) DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `position` bigint(20) NOT NULL DEFAULT '0',
  `language` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `slug` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT '0.00',
  `description` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `meta_keys` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postdate` datetime DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `homepage` tinyint(1) NOT NULL DEFAULT '0',
  `image1` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image2` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image3` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image4` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image5` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image6` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `file` varchar(1200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `artikul` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` text COLLATE utf8_unicode_ci,
  `typ` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `norm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `schneidstoff` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `beschichtung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `form` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `schneidrichtung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gewindeart` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lochart` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toleranzfeld` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `available` int(11) NOT NULL DEFAULT '0',
  `en_iso_4957` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `werkstoffeigenschaften` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verwendungszweck` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cr` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mn` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `v` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `w` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ni` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `co` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `si` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `standard_arbeitsharte` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lieferzustand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `warmebehandlung_weichgluhen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `warmebehandlung_spannungsarmgluhen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `harten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anlassen` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `username` varchar(130) NOT NULL,
  `email` varchar(400) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `idx` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL,
  `menuid` bigint(20) DEFAULT NULL,
  `title` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `show_title` tinyint(1) NOT NULL DEFAULT '1',
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `meta_keys` text,
  `author` varchar(255) DEFAULT NULL,
  `link` varchar(1200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image1` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `postdate` datetime DEFAULT NULL,
  `language` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `position` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `language_data`
--

CREATE TABLE `language_data` (
  `idx` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `key` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` bigint(20) NOT NULL,
  `user` varchar(100) CHARACTER SET latin1 NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 NOT NULL,
  `subaction` varchar(100) CHARACTER SET latin1 NOT NULL,
  `menu` int(11) NOT NULL,
  `language` varchar(10) CHARACTER SET latin1 NOT NULL,
  `visitdate` datetime DEFAULT NULL,
  `href` varchar(800) CHARACTER SET latin1 NOT NULL,
  `ipaddress` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pagetitle` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `idx` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `language` varchar(2) NOT NULL,
  `type` varchar(48) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `items_per_page` int(11) NOT NULL DEFAULT '10',
  `items_on_homepage` int(11) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`idx`, `id`, `title`, `language`, `type`, `deleted`, `items_per_page`, `items_on_homepage`) VALUES
(1, 1, 'Main Menu', 'ge', 'sitemap', 0, 0, 0),
(2, 1, 'Main Menu', 'en', 'sitemap', 0, 0, 0),
(3, 1, 'Главное меню', 'ru', 'sitemap', 0, 0, 0),
(4, 1, 'Main Menu', 'gr', 'sitemap', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `idx` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL DEFAULT '0',
  `masterid` bigint(20) NOT NULL DEFAULT '0',
  `level` tinyint(3) NOT NULL DEFAULT '0',
  `postdate` datetime DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `position` bigint(20) NOT NULL DEFAULT '0',
  `language` varchar(2) NOT NULL DEFAULT '0',
  `menuid` bigint(20) NOT NULL DEFAULT '1',
  `visibility` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(1200) NOT NULL,
  `menutitle` varchar(1200) DEFAULT '',
  `description` text,
  `content` longtext,
  `author` varchar(255) DEFAULT NULL,
  `redirectlink` varchar(1000) DEFAULT NULL,
  `menutype` smallint(7) DEFAULT '0',
  `slug` varchar(1000) DEFAULT NULL,
  `template` varchar(1000) DEFAULT '',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `category` smallint(5) NOT NULL DEFAULT '0',
  `image1` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image2` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image3` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image4` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image5` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `image6` varchar(1200) CHARACTER SET latin1 DEFAULT NULL,
  `homepage` tinyint(1) DEFAULT '0',
  `meta_keys` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `collapsed` tinyint(1) NOT NULL DEFAULT '0',
  `review` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`idx`, `id`, `masterid`, `level`, `postdate`, `lastupdate`, `position`, `language`, `menuid`, `visibility`, `title`, `menutitle`, `description`, `content`, `author`, `redirectlink`, `menutype`, `slug`, `template`, `deleted`, `category`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `homepage`, `meta_keys`, `meta_desc`, `collapsed`, `review`) VALUES
(1, 1, 0, 1, '1970-01-01 00:00:00', '2018-06-04 15:28:31', 1, 'ge', 1, 1, 'მთავარი', 'მთავარი', '', NULL, NULL, NULL, 0, 'home', NULL, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL),
(2, 1, 0, 1, '1970-01-01 00:00:00', '2018-06-04 15:28:10', 1, 'en', 1, 1, 'Home', 'Home', NULL, NULL, NULL, NULL, 0, 'home', NULL, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL),
(3, 1, 0, 1, '1970-01-01 00:00:00', '2015-02-25 13:15:33', 1, 'ru', 1, 1, 'Главная', 'Главная', NULL, NULL, NULL, NULL, 0, 'home', NULL, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL),
(4, 1, 0, 1, '2016-04-06 10:38:29', '2018-06-04 15:28:24', 1, 'gr', 1, 1, 'Home', 'Home', NULL, NULL, NULL, NULL, 0, 'home', NULL, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `idx` int(11) NOT NULL,
  `id` int(11) NOT NULL DEFAULT '0',
  `key` varchar(100) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL DEFAULT '0',
  `value` varchar(2000) DEFAULT '0',
  `language` varchar(3) DEFAULT '0',
  `deleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`idx`, `id`, `key`, `title`, `value`, `language`, `deleted`) VALUES
(142, 1, 'sitetitle', 'Site Title', 'ხულოს მუნიციპალიტეტი', 'ge', 0),
(143, 1, 'sitetitle', 'Site Title', 'Khulo', 'en', 0),
(144, 1, 'sitetitle', 'Site Title', 'Khulo', 'ru', 0),
(145, 1, 'sitetitle', 'Site Title', 'Khulo', 'gr', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_users`
--

CREATE TABLE `site_users` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `type` tinyint(1) DEFAULT '1',
  `firstname` varchar(80) DEFAULT NULL,
  `lastname` varchar(80) DEFAULT NULL,
  `pn` varchar(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `address` varchar(140) DEFAULT NULL,
  `birthdate` datetime NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logindate` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `recover` varchar(60) DEFAULT NULL,
  `regcode` varchar(60) DEFAULT NULL,
  `remember` varchar(40) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE `sold` (
  `id` int(11) NOT NULL,
  `cid` bigint(20) NOT NULL DEFAULT '0',
  `price` decimal(6,2) NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(225) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(128) NOT NULL,
  `firstname` varchar(400) DEFAULT NULL,
  `lastname` varchar(400) DEFAULT NULL,
  `usercat` varchar(60) NOT NULL DEFAULT 'Administrator',
  `email` varchar(400) NOT NULL,
  `class` tinyint(1) NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `usercat`, `email`, `class`, `active`, `deleted`, `password`) VALUES
(1, 'ddadmin', '', '', 'Administrator', '', 0, 1, 0, '3C9909AFEC25354D551DAE21590BB26E38D53F2173B8D3DC3EEE4C047E7AB1C1EB8B85103E3BE7BA613B31BB5C9C36214DC9F14A42FD7A2FDB84856BCA5C44C2'),
(2, 'admin', 'admin', 'admin', 'Administrator', 'Enter your e-mail', 1, 1, 0, 'bf1ab3a29f5bc00af31e46e88f3eeda549d31b0a37a480f4855f8bdf16f177c6a53a153d95b49d51837c09c44e5ea008600b777e2235b3b991b0eff626583342'),
(3, 'vako', NULL, NULL, 'Administrator', 'vako@shindi.ge', 1, 1, 0, '$2y$10$5zHQch/nBOqnBRcS2RQRS.xh7t8koj6wcylwpWJNYpbBRQJGFL0Em');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `action` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subaction` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `menuid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `attached`
--
ALTER TABLE `attached`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `id` (`id`),
  ADD KEY `menuid` (`menuid`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `id` (`id`),
  ADD KEY `menuid` (`menuid`);

--
-- Indexes for table `language_data`
--
ALTER TABLE `language_data`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `menuid` (`menuid`),
  ADD KEY `language` (`language`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `site_users`
--
ALTER TABLE `site_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `attached`
--
ALTER TABLE `attached`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `idx` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `idx` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `language_data`
--
ALTER TABLE `language_data`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=552;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `idx` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `idx` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `site_users`
--
ALTER TABLE `site_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sold`
--
ALTER TABLE `sold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
