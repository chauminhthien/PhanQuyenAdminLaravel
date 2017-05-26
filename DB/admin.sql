-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 26 Février 2017 à 06:51
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `group`
--

CREATE TABLE `group` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `nameKhongDau` text NOT NULL,
  `privilege_id` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `group`
--

INSERT INTO `group` (`id`, `name`, `nameKhongDau`, `privilege_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2,4,16,17,5,6,7,8,9,10,11,12,13', '2017-02-21 05:32:53', '2017-02-21 05:32:53'),
(2, 'Post', 'post', '2,4,16,17,9,11,12', '2017-02-21 05:35:30', '2017-02-21 05:35:30'),
(3, 'Quản Trị viên', 'quan-tri-vien', '2,4', '2017-02-18 08:58:07', '2017-02-18 07:46:41');

-- --------------------------------------------------------

--
-- Structure de la table `privilege`
--

CREATE TABLE `privilege` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `nameKhongDau` text NOT NULL,
  `menu_id` int(5) DEFAULT '0',
  `icon` text NOT NULL,
  `action` text NOT NULL,
  `hien` int(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `privilege`
--

INSERT INTO `privilege` (`id`, `name`, `nameKhongDau`, `menu_id`, `icon`, `action`, `hien`, `created_at`, `updated_at`) VALUES
(2, 'User', 'user', 0, 'fa fa-suitcase', 'admin/user/danh-sach', 0, '2017-02-16 13:57:30', '0000-00-00 00:00:00'),
(4, 'Danh Sách User', 'danh-sach-user', 2, '', 'admin/user/danh-sach-user', 1, '2017-02-20 06:06:06', '2017-02-20 06:06:06'),
(5, 'Group', 'group', 0, 'fa fa-users', '', 0, '2017-02-20 06:34:28', '2017-02-20 06:34:28'),
(6, 'Danh Sách Group', 'danh-sach-group', 5, '', 'admin/group/danh-sach-group', 1, '2017-02-21 05:29:42', '2017-02-21 05:29:42'),
(7, 'Thêm Group Mới', 'them-group-moi', 5, '', 'admin/group/them-group-moi', 1, '2017-02-20 06:49:39', '2017-02-20 06:49:39'),
(8, 'Phân Quyền', 'phan-quyen', 5, '', 'admin/group/phan-quyen-group', 0, '2017-02-20 06:50:43', '2017-02-20 06:50:43'),
(9, 'Quyền Truy Cập', 'quyen-truy-cap', 0, 'fa fa-flag', '', 0, '2017-02-21 03:15:14', '2017-02-21 03:10:47'),
(10, 'Thêm Quyền Mới', 'them-quyen-moi', 9, '', 'admin/quyen/them-quyen-moi', 1, '2017-02-21 03:31:57', '2017-02-21 03:31:57'),
(11, 'Danh Sách Quyền', 'danh-sach-quyen', 9, '', 'admin/quyen/danh-sach-quyen', 1, '2017-02-21 04:20:39', '2017-02-21 03:33:04'),
(12, 'Sửa', 'sua', 9, '', 'admin/quyen/sua-quyen', 0, '2017-02-21 04:11:07', '2017-02-21 03:33:25'),
(13, 'Xoá', 'xoa', 9, '', 'admin/quyen/xoa-quyen', 0, '2017-02-21 04:13:56', '2017-02-21 04:13:56'),
(14, 'Sửa', 'sua', 5, '', 'admin/group/sua-group', 0, '2017-02-21 03:35:33', '2017-02-21 03:35:33'),
(15, 'Xoá', 'xoa', 5, '', 'admin/quyen/xoa-group', 0, '2017-02-21 03:35:54', '2017-02-21 03:35:54'),
(16, 'Sửa', 'sua', 2, '', 'admin/user/edit-user', 0, '2017-02-21 03:36:34', '2017-02-21 03:36:34'),
(17, 'Thông Tin Cá Nhân', 'thong-tin-ca-nhan', 2, '', 'admin/user/thong-tin-ca-nhan', 0, '2017-02-21 03:38:13', '2017-02-21 03:38:13');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `nameKhongDau` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `remember_token` text NOT NULL,
  `group_id` int(5) NOT NULL,
  `admin` int(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `nameKhongDau`, `email`, `password`, `img`, `remember_token`, `group_id`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'Châu Minh Thiện', 'chau-minh-thien', 'chauminhthien0212@gmail.com', '$2y$10$A2XTVd6fBaXcsgG14213ueh.zG7VzO4BGoFlXoPKypPo5GkfPhRs6', 'profile.jpg', 'jBU9LCIDmc4aKeSqYsEuBCUbzdKg3xzDihQ4afpTWMigynUTAW8PZfujfTaS', 1, 1, '2017-02-21 02:30:29', '2017-02-21 02:30:29'),
(2, 'iTieuLong', 'itieulong', 'minhthien1305@gmail.com', '$2y$10$A2XTVd6fBaXcsgG14213ueh.zG7VzO4BGoFlXoPKypPo5GkfPhRs6', 'TT.jpg', '4vphwn8aCTf4ViqryjsfuFQX9LpGbXeZHyBO5BidAh63DYqgUrkyRapJexkM', 2, 1, '2017-02-21 05:33:35', '2017-02-21 05:33:35');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `privilege`
--
ALTER TABLE `privilege`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `privilege`
--
ALTER TABLE `privilege`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
