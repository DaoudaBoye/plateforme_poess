-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 13 sep. 2025 à 03:29
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pif_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cible_activites`
--

CREATE TABLE `cible_activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_cible` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cible_activites`
--

INSERT INTO `cible_activites` (`id`, `designation_cible`) VALUES
(1, 'Hommes'),
(2, 'Femmes'),
(3, 'Jeunes'),
(4, 'Vieux'),
(5, 'Populations rurales'),
(6, 'Personnes vivant avec un handicape'),
(7, 'Petites et moyennes entreprises (PME)'),
(8, 'Personnes à faible revenu');

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

CREATE TABLE `communes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_commune` varchar(255) NOT NULL,
  `id_departement` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `communes`
--

INSERT INTO `communes` (`id`, `nom_commune`, `id_departement`, `created_at`, `updated_at`) VALUES
(1, 'NGOR', 1, NULL, NULL),
(2, 'BISCUITERIE', 1, NULL, NULL),
(3, 'CA.MERMOZ/ SACRE -COEUR', 1, NULL, NULL),
(4, 'CAMBERENE', 1, NULL, NULL),
(5, 'COLOBANE/FASS/GUEULE TAPEE', 1, NULL, NULL),
(6, 'DIEUPPEUL DERKLE', 1, NULL, NULL),
(7, 'FANN/POINT E/ AMITIE', 1, NULL, NULL),
(8, 'GOREE', 1, NULL, NULL),
(9, 'GRAND DAKAR', 1, NULL, NULL),
(10, 'GRAND YOFF', 1, NULL, NULL),
(11, 'HANN/ BEL AIR', 1, NULL, NULL),
(12, 'HLM', 1, NULL, NULL),
(13, 'MEDINA', 1, NULL, NULL),
(14, 'OUAKAM', 1, NULL, NULL),
(15, 'PARCELLES ASSAINIES', 1, NULL, NULL),
(16, 'PATTE D’OIE', 1, NULL, NULL),
(17, 'PLATEAU', 1, NULL, NULL),
(18, 'SICAP LIBERTE', 1, NULL, NULL),
(19, 'YOFF', 1, NULL, NULL),
(20, 'NDIAREME LIMAMOULAYE', 2, NULL, NULL),
(21, 'GOLF SUD', 2, NULL, NULL),
(22, 'MEDINA GOUNASS', 2, NULL, NULL),
(23, 'SAM NOTAIRE', 2, NULL, NULL),
(24, 'WAKHINANE NIMZATT', 2, NULL, NULL),
(25, 'DALIFORD', 4, NULL, NULL),
(26, 'DIACK SAO', 4, NULL, NULL),
(27, 'DIAMAGUENE/SICAP M’BAO', 4, NULL, NULL),
(28, 'DJIDAH THIAROYE KAO', 4, NULL, NULL),
(29, 'GUINAW RAIL NORD', 4, NULL, NULL),
(30, 'GUINAW RAIL SUD', 4, NULL, NULL),
(31, 'KEUR MASSAR', 4, NULL, NULL),
(32, 'MBAO', 4, NULL, NULL),
(33, 'MALIKA', 4, NULL, NULL),
(34, 'PIKINE EST', 4, NULL, NULL),
(35, 'PIKINE OUEST', 4, NULL, NULL),
(36, 'PIKINE SUD', 4, NULL, NULL),
(37, 'THIAROYE /MER', 4, NULL, NULL),
(38, 'THIAROYE GARE', 4, NULL, NULL),
(39, 'YEUMBEUL NORD', 4, NULL, NULL),
(40, 'YEUMBEUL SUD', 4, NULL, NULL),
(41, 'BAMBYLOR', 3, NULL, NULL),
(42, 'BARGNY', 3, NULL, NULL),
(43, 'DIAMNIADIO', 3, NULL, NULL),
(44, 'JAXAAY PARCELLE NIAKOUL RAP', 3, NULL, NULL),
(45, 'SANGALKAM', 3, NULL, NULL),
(46, 'SEBIKOTANE', 3, NULL, NULL),
(47, 'SENDOU', 3, NULL, NULL),
(48, 'RUFISQUE EST', 3, NULL, NULL),
(49, 'RUFISQUE CENTRE (NORD)', 3, NULL, NULL),
(50, 'RUFISQUE OUEST', 3, NULL, NULL),
(51, 'TIVAOUANE PEULH-NIAGHA', 3, NULL, NULL),
(52, 'YENE', 3, NULL, NULL),
(53, 'BALINGORE', 5, NULL, NULL),
(54, 'BIGNONA', 5, NULL, NULL),
(55, 'DIOULOULOU', 5, NULL, NULL),
(56, 'THIONCK-ESSYL', 5, NULL, NULL),
(57, 'COUBALAN', 5, NULL, NULL),
(58, 'DIEGOUNE', 5, NULL, NULL),
(59, 'DJIBIDIONE', 5, NULL, NULL),
(60, 'DJINAKI', 5, NULL, NULL),
(61, 'KAFOUNTINE', 5, NULL, NULL),
(62, 'KARTHIACK', 5, NULL, NULL),
(63, 'KATABAI', 5, NULL, NULL),
(64, 'MANGAGOULACK', 5, NULL, NULL),
(65, 'MLOMP', 5, NULL, NULL),
(66, 'NIAMONE', 5, NULL, NULL),
(67, 'OULAMPANE', 5, NULL, NULL),
(68, 'OUONCK', 5, NULL, NULL),
(69, 'SINDIAN', 5, NULL, NULL),
(70, 'SUELLE', 5, NULL, NULL),
(71, 'TENGHORY', 5, NULL, NULL),
(72, 'OUSSOUYE', 6, NULL, NULL),
(73, 'DJEMBERING', 6, NULL, NULL),
(74, 'MLOMP', 6, NULL, NULL),
(75, 'OUKOUT', 6, NULL, NULL),
(76, 'SANTHIABA MANJACQUE', 6, NULL, NULL),
(77, 'ADEANE', 7, NULL, NULL),
(78, 'BOUTOUPA CAMAR', 7, NULL, NULL),
(79, 'ZIGUINCHOR', 7, NULL, NULL),
(80, 'ENAMPORE', 7, NULL, NULL),
(81, 'NIAGUIS', 7, NULL, NULL),
(82, 'NYASSIA', 7, NULL, NULL),
(83, 'NDONDOL', 10, NULL, NULL),
(84, 'NGOGOM', 10, NULL, NULL),
(85, 'NGOYE', 10, NULL, NULL),
(86, 'BABA GARAGE', 10, NULL, NULL),
(87, 'BAMBEY', 10, NULL, NULL),
(88, 'DANGALMA', 10, NULL, NULL),
(89, 'DINGUIRAYE', 10, NULL, NULL),
(90, 'GAWANE', 10, NULL, NULL),
(91, 'K. SAMBA KANE', 10, NULL, NULL),
(92, 'LAMBAYE', 10, NULL, NULL),
(93, 'REFANE', 10, NULL, NULL),
(94, 'THIAKAR', 10, NULL, NULL),
(95, 'NDINDY', 8, NULL, NULL),
(96, 'NDOULO', 8, NULL, NULL),
(97, 'NGOHE', 8, NULL, NULL),
(98, 'DIOURBEL', 8, NULL, NULL),
(99, 'DANKH SENE', 8, NULL, NULL),
(100, 'GADE ESCALE', 8, NULL, NULL),
(101, 'KEUR ’GALGOU', 8, NULL, NULL),
(102, 'PATAR', 8, NULL, NULL),
(103, 'TAIBA MOUTOUPHA', 8, NULL, NULL),
(104, 'TOCKY GARE', 8, NULL, NULL),
(105, 'TOUBA LAPPE', 8, NULL, NULL),
(106, 'TOURE M’BONDE', 8, NULL, NULL),
(107, 'NDIOUMANE T. THIEKENE', 9, NULL, NULL),
(108, 'NGHAYE', 9, NULL, NULL),
(109, 'COM. M’BACKE', 9, NULL, NULL),
(110, 'DALLA ’GABOU', 9, NULL, NULL),
(111, 'DAROU NAHIM', 9, NULL, NULL),
(112, 'DAROU SALAM TYP', 9, NULL, NULL),
(113, 'DENDEYE GOUYE GUI', 9, NULL, NULL),
(114, 'KAEL', 9, NULL, NULL),
(115, 'MADINA', 9, NULL, NULL),
(116, 'MISSIRAH', 9, NULL, NULL),
(117, 'SADIO', 9, NULL, NULL),
(118, 'TAIBA TIECKENE', 9, NULL, NULL),
(119, 'TAÏF', 9, NULL, NULL),
(120, 'TOUBA M’BOUL', 9, NULL, NULL),
(121, 'TOUBA FALL', 9, NULL, NULL),
(122, 'TOUBA MOSQUEE', 9, NULL, NULL),
(123, 'BOKHOL', 11, NULL, NULL),
(124, 'DAGANA', 11, NULL, NULL),
(125, 'GAE', 11, NULL, NULL),
(126, 'NDOMBO SANDJIRY', 11, NULL, NULL),
(127, 'RICHARD-TOLL', 11, NULL, NULL),
(128, 'ROSS-BETHIO', 11, NULL, NULL),
(129, 'ROSSO-SENEGAL', 11, NULL, NULL),
(130, 'DIAMA', 11, NULL, NULL),
(131, 'MBANE', 11, NULL, NULL),
(132, 'NGNITH', 11, NULL, NULL),
(133, 'RONKH', 11, NULL, NULL),
(134, 'BOKE DIALLOUBE', 12, NULL, NULL),
(135, 'AERE LAO', 12, NULL, NULL),
(136, 'BODE LAO', 12, NULL, NULL),
(137, 'DEMETTE', 12, NULL, NULL),
(138, 'GALOYA TOUCOULEUR', 12, NULL, NULL),
(139, 'GOLLERE', 12, NULL, NULL),
(140, 'GUEDE CHANTIER', 12, NULL, NULL),
(141, 'MBOUMBA', 12, NULL, NULL),
(142, 'NDIANDANE', 12, NULL, NULL),
(143, 'NDIOUM', 12, NULL, NULL),
(144, 'PETE', 12, NULL, NULL),
(145, 'PODOR', 12, NULL, NULL),
(146, 'WALALDE', 12, NULL, NULL),
(147, 'DODEL', 12, NULL, NULL),
(148, 'DOUNGA-LAO', 12, NULL, NULL),
(149, 'FANAYE', 12, NULL, NULL),
(150, 'GAMADJI SARE', 12, NULL, NULL),
(151, 'GUEDE VILLAGE', 12, NULL, NULL),
(152, 'MBOLO BIRANE', 12, NULL, NULL),
(153, 'MEDINA NDIATHBE', 12, NULL, NULL),
(154, 'MERY', 12, NULL, NULL),
(155, 'NDIAYENE PENDAO', 12, NULL, NULL),
(156, 'NDIEBENE GANDIOLE', 13, NULL, NULL),
(157, 'MPAL', 13, NULL, NULL),
(158, 'SAINT LOUIS', 13, NULL, NULL),
(159, 'FASS NGOM', 13, NULL, NULL),
(160, 'GANDON', 13, NULL, NULL),
(161, 'BALLOU', 14, NULL, NULL),
(162, 'BELE', 14, NULL, NULL),
(163, 'KIDIRA', 14, NULL, NULL),
(164, 'BAKEL', 14, NULL, NULL),
(165, 'DIAWARA', 14, NULL, NULL),
(166, 'GABOU', 14, NULL, NULL),
(167, 'GATHIARY', 14, NULL, NULL),
(168, 'MADINA FOULBE', 14, NULL, NULL),
(169, 'MOUDERY', 14, NULL, NULL),
(170, 'SADATOU', 14, NULL, NULL),
(171, 'SINTHIOU-FISSA', 14, NULL, NULL),
(172, 'TOUMBOURA', 14, NULL, NULL),
(173, 'BALA', 15, NULL, NULL),
(174, 'BANI ISRAEL', 15, NULL, NULL),
(175, 'BOUTOUCOUFARA', 15, NULL, NULL),
(176, 'BOYNGUEL BAMBA', 15, NULL, NULL),
(177, 'GOUDIRY', 15, NULL, NULL),
(178, 'KOTHIARY', 15, NULL, NULL),
(179, 'DIANKE MAKHA', 15, NULL, NULL),
(180, 'DOUGUE', 15, NULL, NULL),
(181, 'GOUMBAYEL', 15, NULL, NULL),
(182, 'KOAR', 15, NULL, NULL),
(183, 'KOMOTI', 15, NULL, NULL),
(184, 'KOULOR', 15, NULL, NULL),
(185, 'KOUSSAN', 15, NULL, NULL),
(186, 'SINTHIOU BOCAR ALI', 15, NULL, NULL),
(187, 'SINTHIOU MAMADOU BOUBOU', 15, NULL, NULL),
(188, 'NDAME', 16, NULL, NULL),
(189, 'BAMBA THIALENE', 16, NULL, NULL),
(190, 'KOUMPENTOUM', 16, NULL, NULL),
(191, 'MALEM NIANI', 16, NULL, NULL),
(192, 'KAHENE', 16, NULL, NULL),
(193, 'KOUTHIA GAYDI', 16, NULL, NULL),
(194, 'KOUTHIABA WOLOF', 16, NULL, NULL),
(195, 'MERETO', 16, NULL, NULL),
(196, 'PASS KOTO', 16, NULL, NULL),
(197, 'PAYAR', 16, NULL, NULL),
(198, 'NDOGA BABACAR', 17, NULL, NULL),
(199, 'TAMBACOUNDA', 17, NULL, NULL),
(200, 'DIALACOTO', 17, NULL, NULL),
(201, 'KOUSSANAR', 17, NULL, NULL),
(202, 'MAKACOULIBATANG', 17, NULL, NULL),
(203, 'MISSIRAH', 17, NULL, NULL),
(204, 'NETTE BOULOU', 17, NULL, NULL),
(205, 'NIANI TOUCOULEUR', 17, NULL, NULL),
(206, 'SINTHIOU MALEM', 17, NULL, NULL),
(207, 'FASS', 20, NULL, NULL),
(208, 'GUINGUINEO', 20, NULL, NULL),
(209, 'MBOSS', 20, NULL, NULL),
(210, 'DARA MBOSS', 20, NULL, NULL),
(211, 'GAGNICK', 20, NULL, NULL),
(212, 'KHELCOM BIRAME', 20, NULL, NULL),
(213, 'MBADAKHOUNE', 20, NULL, NULL),
(214, 'NDIAGO', 20, NULL, NULL),
(215, 'NGATHIE NAOUDE', 20, NULL, NULL),
(216, 'NGUELOU', 20, NULL, NULL),
(217, 'OUROUR', 20, NULL, NULL),
(218, 'PANAL OUOLOF', 20, NULL, NULL),
(219, 'GANDIAYE', 18, NULL, NULL),
(220, 'KAHONE', 18, NULL, NULL),
(221, 'KAOLACK', 18, NULL, NULL),
(222, 'NDOFFANE', 18, NULL, NULL),
(223, 'SIBASSOR', 18, NULL, NULL),
(224, 'DYA', 18, NULL, NULL),
(225, 'KEUR BAKA', 18, NULL, NULL),
(226, 'KEUR SOCE', 18, NULL, NULL),
(227, 'LATMINGUE', 18, NULL, NULL),
(228, 'NDIAFFATE', 18, NULL, NULL),
(229, 'NDIEBEL', 18, NULL, NULL),
(230, 'NDIEDIENG', 18, NULL, NULL),
(231, 'THIARE', 18, NULL, NULL),
(232, 'THIOMBY', 18, NULL, NULL),
(233, 'KEUR MADIABEL', 19, NULL, NULL),
(234, 'NIORO', 19, NULL, NULL),
(235, 'DABALY', 19, NULL, NULL),
(236, 'DAROU SALAM', 19, NULL, NULL),
(237, 'GAINTE KAYE', 19, NULL, NULL),
(238, 'K. MANDONGO', 19, NULL, NULL),
(239, 'KAYEMOR', 19, NULL, NULL),
(240, 'KEUR MABA DIAKHOU', 19, NULL, NULL),
(241, 'MEDINA-SABAKH', 19, NULL, NULL),
(242, 'NDRAME ESCALE', 19, NULL, NULL),
(243, 'NGAYENE', 19, NULL, NULL),
(244, 'PAOSKOTO', 19, NULL, NULL),
(245, 'POROKHANE', 19, NULL, NULL),
(246, 'TAÏBA NIASSENE', 19, NULL, NULL),
(247, 'WACK NGOUNA', 19, NULL, NULL),
(248, 'NDIAGANIAO', 21, NULL, NULL),
(249, 'NGUENIENE', 21, NULL, NULL),
(250, 'NGAPAROU', 21, NULL, NULL),
(251, 'GUEKOKH', 21, NULL, NULL),
(252, 'JOAL- FADIOUTH', 21, NULL, NULL),
(253, 'MBOUR', 21, NULL, NULL),
(254, 'POPOGUINE', 21, NULL, NULL),
(255, 'SALY PORTUDAL', 21, NULL, NULL),
(256, 'SOMONE', 21, NULL, NULL),
(257, 'THIADIAYE', 21, NULL, NULL),
(258, 'DIASS', 21, NULL, NULL),
(259, 'FISSEL', 21, NULL, NULL),
(260, 'MALICOUNDA', 21, NULL, NULL),
(261, 'SANDIARA', 21, NULL, NULL),
(262, 'SESSENE', 21, NULL, NULL),
(263, 'SINDIA', 21, NULL, NULL),
(264, 'NDIEYENE SIRAKH', 22, NULL, NULL),
(265, 'NGOUNDIANE', 22, NULL, NULL),
(266, 'CAYAR', 22, NULL, NULL),
(267, 'KHOMBOLE', 22, NULL, NULL),
(268, 'POUT', 22, NULL, NULL),
(269, 'DIENDER GUEDJI', 22, NULL, NULL),
(270, 'FANDENE', 22, NULL, NULL),
(271, 'KEUR MOUSSA', 22, NULL, NULL),
(272, 'NOTTO', 22, NULL, NULL),
(273, 'TASSETTE', 22, NULL, NULL),
(274, 'THIENABA', 22, NULL, NULL),
(275, 'THIES EST', 22, NULL, NULL),
(276, 'THIES NORD', 22, NULL, NULL),
(277, 'THIES OUEST', 22, NULL, NULL),
(278, 'TOUBA TOUL', 22, NULL, NULL),
(279, 'NGANDIOUF', 23, NULL, NULL),
(280, 'CHERIF LÖ', 23, NULL, NULL),
(281, 'MBORO', 23, NULL, NULL),
(282, 'MEKHE', 23, NULL, NULL),
(283, 'TIVAOUANE', 23, NULL, NULL),
(284, 'DAROU KHOUDOSS', 23, NULL, NULL),
(285, 'KOUL', 23, NULL, NULL),
(286, 'MBAYENE', 23, NULL, NULL),
(287, 'MEOUANE', 23, NULL, NULL),
(288, 'MERINA DAKHAR', 23, NULL, NULL),
(289, 'MONT- ROLLAND', 23, NULL, NULL),
(290, 'NIAKHENE', 23, NULL, NULL),
(291, 'NOTTO GOUYE DIAMA', 23, NULL, NULL),
(292, 'PAMBAL', 23, NULL, NULL),
(293, 'PEKESSE', 23, NULL, NULL),
(294, 'PIRE GOUREYE', 23, NULL, NULL),
(295, 'TAIBA NDIAYE', 23, NULL, NULL),
(296, 'THILMAKHA', 23, NULL, NULL),
(297, 'BADEGNE OUOLOF', 24, NULL, NULL),
(298, 'GUEOUL', 24, NULL, NULL),
(299, 'KEBEMER', 24, NULL, NULL),
(300, 'DAROU MARNANE', 24, NULL, NULL),
(301, 'DAROU MOUSTY', 24, NULL, NULL),
(302, 'DIOKOUL DIAWRIGNE', 24, NULL, NULL),
(303, 'KAB GAYE', 24, NULL, NULL),
(304, 'KANENE NDIOB', 24, NULL, NULL),
(305, 'LORO', 24, NULL, NULL),
(306, 'MBACKE CADIOR', 24, NULL, NULL),
(307, 'MBADIANE', 24, NULL, NULL),
(308, 'NDANDE', 24, NULL, NULL),
(309, 'NDOYENE', 24, NULL, NULL),
(310, 'NGOURANE OUOLOF', 24, NULL, NULL),
(311, 'SAGATTA GUETH', 24, NULL, NULL),
(312, 'SAM YABAL', 24, NULL, NULL),
(313, 'THIEPPE', 24, NULL, NULL),
(314, 'THIOLOM FALL', 24, NULL, NULL),
(315, 'TOUBA MERINA', 24, NULL, NULL),
(316, 'AFFE DJOLOFF', 25, NULL, NULL),
(317, 'BARKEDJI', 25, NULL, NULL),
(318, 'BOULAL', 25, NULL, NULL),
(319, 'DAHRA', 25, NULL, NULL),
(320, 'LINGUERE', 25, NULL, NULL),
(321, 'MBEULEUKHE', 25, NULL, NULL),
(322, 'DEALI', 25, NULL, NULL),
(323, 'DODJI', 25, NULL, NULL),
(324, 'GASSANE', 25, NULL, NULL),
(325, 'KAMB', 25, NULL, NULL),
(326, 'LABGAR', 25, NULL, NULL),
(327, 'MBOULA', 25, NULL, NULL),
(328, 'OUARKHOH', 25, NULL, NULL),
(329, 'SAGATTA DJOLOF', 25, NULL, NULL),
(330, 'TESSEKRE FORAGE', 25, NULL, NULL),
(331, 'THIAMENE DJOLOF', 25, NULL, NULL),
(332, 'THIARGNY', 25, NULL, NULL),
(333, 'THIEL', 25, NULL, NULL),
(334, 'YANG YANG', 25, NULL, NULL),
(335, 'COKI', 26, NULL, NULL),
(336, 'LOUGA', 26, NULL, NULL),
(337, 'NDIAGNE', 26, NULL, NULL),
(338, 'GANDE', 26, NULL, NULL),
(339, 'GUET ARDO', 26, NULL, NULL),
(340, 'K.MOMAR SARR', 26, NULL, NULL),
(341, 'KELLE GUEYE', 26, NULL, NULL),
(342, 'LEONA', 26, NULL, NULL),
(343, 'MBEDIENE', 26, NULL, NULL),
(344, 'NGUER MALAL', 26, NULL, NULL),
(345, 'NGUEUNE SARR', 26, NULL, NULL),
(346, 'NGUIDILE', 26, NULL, NULL),
(347, 'NIOMRE', 26, NULL, NULL),
(348, 'PETE OUARACK', 26, NULL, NULL),
(349, 'SAKAL', 26, NULL, NULL),
(350, 'SYER', 26, NULL, NULL),
(351, 'THIAMENE CAYOR', 26, NULL, NULL),
(352, 'AOURE', 30, NULL, NULL),
(353, 'BOKILADJI', 30, NULL, NULL),
(354, 'DEMBANCANE', 30, NULL, NULL),
(355, 'HAMADY OUNARE', 30, NULL, NULL),
(356, 'KANEL', 30, NULL, NULL),
(357, 'ODOBERE', 30, NULL, NULL),
(358, 'SEMME', 30, NULL, NULL),
(359, 'SINTHIOU BAMANBE-BANADJI', 30, NULL, NULL),
(360, 'WAOUNDE', 30, NULL, NULL),
(361, 'NDENDORY', 30, NULL, NULL),
(362, 'ORKADIERE', 30, NULL, NULL),
(363, 'OURO SIDY', 30, NULL, NULL),
(364, 'AGNAM-CIVOL', 31, NULL, NULL),
(365, 'BOKIDIAWE', 31, NULL, NULL),
(366, 'MATAM', 31, NULL, NULL),
(367, 'NGUIDILOGNE', 31, NULL, NULL),
(368, 'OUROSSOGUI', 31, NULL, NULL),
(369, 'THILOGNE', 31, NULL, NULL),
(370, 'DABIA', 31, NULL, NULL),
(371, 'NABADJI-CIVOL', 31, NULL, NULL),
(372, 'OGO', 31, NULL, NULL),
(373, 'OREFONDE', 31, NULL, NULL),
(374, 'COM. RANEROU', 32, NULL, NULL),
(375, 'LOUGRE-THIOLY', 32, NULL, NULL),
(376, 'OUDALAYE', 32, NULL, NULL),
(377, 'VELINGARA', 32, NULL, NULL),
(378, 'DIAKHAO', 27, NULL, NULL),
(379, 'DIOFIOR', 27, NULL, NULL),
(380, 'FATICK', 27, NULL, NULL),
(381, 'DIAOULE', 27, NULL, NULL),
(382, 'DIARERE', 27, NULL, NULL),
(383, 'DIOUROUP', 27, NULL, NULL),
(384, 'DJILASSE', 27, NULL, NULL),
(385, 'FIMELA', 27, NULL, NULL),
(386, 'LOUL-SESSENE', 27, NULL, NULL),
(387, 'MBELACADIAO', 27, NULL, NULL),
(388, 'NDIOB', 27, NULL, NULL),
(389, 'NGAYOKHEME', 27, NULL, NULL),
(390, 'NIAKHAR', 27, NULL, NULL),
(391, 'PALMARIN FACAO', 27, NULL, NULL),
(392, 'PATAR', 27, NULL, NULL),
(393, 'TATTAGUINE', 27, NULL, NULL),
(394, 'THIARE NDIALGUI', 27, NULL, NULL),
(395, 'BASSOUL', 28, NULL, NULL),
(396, 'FOUNDIOUGNE', 28, NULL, NULL),
(397, 'KARANG POSTE', 28, NULL, NULL),
(398, 'PASSY', 28, NULL, NULL),
(399, 'SOKONE', 28, NULL, NULL),
(400, 'SOUM', 28, NULL, NULL),
(401, 'DIAGANE BARKA', 28, NULL, NULL),
(402, 'DIONEWAR', 28, NULL, NULL),
(403, 'DIOSSONG', 28, NULL, NULL),
(404, 'DJILOR', 28, NULL, NULL),
(405, 'DJIRNDA', 28, NULL, NULL),
(406, 'KEUR SAMBA GUEYE', 28, NULL, NULL),
(407, 'KEUR S.DIANE', 28, NULL, NULL),
(408, 'MBAM', 28, NULL, NULL),
(409, 'NIASSENE', 28, NULL, NULL),
(410, 'NIORO ALASSANE TALL', 28, NULL, NULL),
(411, 'TOUBACOUTA', 28, NULL, NULL),
(412, 'COLOBANE', 29, NULL, NULL),
(413, 'GOSSAS', 29, NULL, NULL),
(414, 'MBAR', 29, NULL, NULL),
(415, 'NDIENE LAGANE', 29, NULL, NULL),
(416, 'OUADIOUR', 29, NULL, NULL),
(417, 'PATAR LIA', 29, NULL, NULL),
(418, 'NDIOGNICK', 33, NULL, NULL),
(419, 'BIRKELANE', 33, NULL, NULL),
(420, 'DIAMAL', 33, NULL, NULL),
(421, 'KEUR MBOUKI', 33, NULL, NULL),
(422, 'MABO', 33, NULL, NULL),
(423, 'MBEULEUP', 33, NULL, NULL),
(424, 'SEGRE GATTA', 33, NULL, NULL),
(425, 'TOUBA M\'BELLA', 33, NULL, NULL),
(426, 'BOULEL', 34, NULL, NULL),
(427, 'NGANDA', 34, NULL, NULL),
(428, 'KAFFRINE', 34, NULL, NULL),
(429, 'DIAMAGADIO', 34, NULL, NULL),
(430, 'DIOKOUL M’BELBOUCK', 34, NULL, NULL),
(431, 'GNIBY', 34, NULL, NULL),
(432, 'KAHI', 34, NULL, NULL),
(433, 'KATHIOTE', 34, NULL, NULL),
(434, 'MEDINATOUL SALAM 2', 34, NULL, NULL),
(435, 'KOUNGHEUL', 35, NULL, NULL),
(436, 'FASS THIEKENE', 35, NULL, NULL),
(437, 'GAINTHE PATHE', 35, NULL, NULL),
(438, 'IDA MOURIDE', 35, NULL, NULL),
(439, 'LOUR ESCALE', 35, NULL, NULL),
(440, 'MAKA YOP', 35, NULL, NULL),
(441, 'MISSIRAH WADENE', 35, NULL, NULL),
(442, 'RIBOT ESCALE', 35, NULL, NULL),
(443, 'SALY ESCALE', 35, NULL, NULL),
(444, 'NDIOUM NGAINTH', 36, NULL, NULL),
(445, 'MALEM HODDAR', 36, NULL, NULL),
(446, 'DAROU MINAM II', 36, NULL, NULL),
(447, 'DIANKE SOUF', 36, NULL, NULL),
(448, 'KHELCOM', 36, NULL, NULL),
(449, 'NDIOBENE SAMBA LAMO', 36, NULL, NULL),
(450, 'SAGNA', 36, NULL, NULL),
(451, 'BANDAFASSI', 37, NULL, NULL),
(452, 'KEDOUGOU', 37, NULL, NULL),
(453, 'DIMBOLI', 37, NULL, NULL),
(454, 'DINDIFELO', 37, NULL, NULL),
(455, 'FONGOLEMBI', 37, NULL, NULL),
(456, 'NINEFECHA', 37, NULL, NULL),
(457, 'TOMBORONKOTO', 37, NULL, NULL),
(458, 'SALEMATA', 38, NULL, NULL),
(459, 'DAKATELI', 38, NULL, NULL),
(460, 'DAR SALAM', 38, NULL, NULL),
(461, 'ETHIOLO', 38, NULL, NULL),
(462, 'KEVOYE', 38, NULL, NULL),
(463, 'OUBADJI', 38, NULL, NULL),
(464, 'BEMBOU', 39, NULL, NULL),
(465, 'SARAYA', 39, NULL, NULL),
(466, 'KHOSSANTO', 39, NULL, NULL),
(467, 'MEDINA BAFFE', 39, NULL, NULL),
(468, 'MISSIRAH SIRIMANA', 39, NULL, NULL),
(469, 'SABODALA', 39, NULL, NULL),
(470, 'BAGADADJI', 40, NULL, NULL),
(471, 'DABO', 40, NULL, NULL),
(472, 'KOLDA', 40, NULL, NULL),
(473, 'SALIKEGNE', 40, NULL, NULL),
(474, 'SARE YOBA DIEGA', 40, NULL, NULL),
(475, 'COUMBACARA', 40, NULL, NULL),
(476, 'DIALAMBERE', 40, NULL, NULL),
(477, 'DIOULACOLON', 40, NULL, NULL),
(478, 'GUIRO YERO BOCAR', 40, NULL, NULL),
(479, 'MAMPATIM', 40, NULL, NULL),
(480, 'MEDINA EL HADJI', 40, NULL, NULL),
(481, 'MEDINA CHERIF', 40, NULL, NULL),
(482, 'SARE BIDJI', 40, NULL, NULL),
(483, 'TANKANTO ESCALE', 40, NULL, NULL),
(484, 'THIETTY', 40, NULL, NULL),
(485, 'BADION', 41, NULL, NULL),
(486, 'BIGNARABE', 41, NULL, NULL),
(487, 'BOUROUCO', 41, NULL, NULL),
(488, 'MEDINA YORO FOULAH', 41, NULL, NULL),
(489, 'PATA', 41, NULL, NULL),
(490, 'DINGUIRAYE', 41, NULL, NULL),
(491, 'FAFACOUROU', 41, NULL, NULL),
(492, 'KEREWANE', 41, NULL, NULL),
(493, 'KOULINTO', 41, NULL, NULL),
(494, 'NDORNA', 41, NULL, NULL),
(495, 'NIAMING', 41, NULL, NULL),
(496, 'BONCONTO', 42, NULL, NULL),
(497, 'DIAOUBE- KABENDOU', 42, NULL, NULL),
(498, 'KOUNKANE', 42, NULL, NULL),
(499, 'VELINGARA', 42, NULL, NULL),
(500, 'KANDIA', 42, NULL, NULL),
(501, 'KANDIAYE', 42, NULL, NULL),
(502, 'LINKERING', 42, NULL, NULL),
(503, 'MEDINA GOUNASS', 42, NULL, NULL),
(504, 'NEMATABA', 42, NULL, NULL),
(505, 'OUASSADOU', 42, NULL, NULL),
(506, 'PAKOUR', 42, NULL, NULL),
(507, 'PAROUMBA', 42, NULL, NULL),
(508, 'SARE COLY SALLE', 42, NULL, NULL),
(509, 'SINTHIANG KOUNDARA', 42, NULL, NULL),
(510, 'BOGHAL', 43, NULL, NULL),
(511, 'BONA', 43, NULL, NULL),
(512, 'BOUNKILING', 43, NULL, NULL),
(513, 'MADINA WANDIFA', 43, NULL, NULL),
(514, 'NDIAMACOUTA', 43, NULL, NULL),
(515, 'DIACOUNDA', 43, NULL, NULL),
(516, 'DIAMBATY', 43, NULL, NULL),
(517, 'DIAROUME', 43, NULL, NULL),
(518, 'DJINANY', 43, NULL, NULL),
(519, 'FAOUNE', 43, NULL, NULL),
(520, 'INOR', 43, NULL, NULL),
(521, 'KANDION MANGANA', 43, NULL, NULL),
(522, 'NDIAMALATHIEL', 43, NULL, NULL),
(523, 'TANKON', 43, NULL, NULL),
(524, 'BAGHERE', 44, NULL, NULL),
(525, 'DIATTACOUNDA', 44, NULL, NULL),
(526, 'GOUDOMP', 44, NULL, NULL),
(527, 'SAMINE', 44, NULL, NULL),
(528, 'TANAFF', 44, NULL, NULL),
(529, 'DIOUBOUDOU', 44, NULL, NULL),
(530, 'DJIBANAR', 44, NULL, NULL),
(531, 'KAOUR', 44, NULL, NULL),
(532, 'KARANTABA', 44, NULL, NULL),
(533, 'KOLIBANTANG', 44, NULL, NULL),
(534, 'MANGAROUNGOU SANTO', 44, NULL, NULL),
(535, 'NIAGHA', 44, NULL, NULL),
(536, 'SIMBADI BALANTE', 44, NULL, NULL),
(537, 'SIMBANDI BRASSOU', 44, NULL, NULL),
(538, 'YARANG BALANTE', 44, NULL, NULL),
(539, 'BAMBALI', 45, NULL, NULL),
(540, 'BENET- BIJINI', 45, NULL, NULL),
(541, 'DIANAH MALARY', 45, NULL, NULL),
(542, 'MARSASSOUM', 45, NULL, NULL),
(543, 'SEDHIOU', 45, NULL, NULL),
(544, 'DIANNAH BA', 45, NULL, NULL),
(545, 'DIENDE', 45, NULL, NULL),
(546, 'DJIBABOUYA', 45, NULL, NULL),
(547, 'DJIREDJI', 45, NULL, NULL),
(548, 'KOUSSY', 45, NULL, NULL),
(549, 'OUDOUCAR', 45, NULL, NULL),
(550, 'SAKAR', 45, NULL, NULL),
(551, 'SAMA KANTA PEULH', 45, NULL, NULL),
(552, 'SANSAMBA', 45, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commune_derouler`
--

CREATE TABLE `commune_derouler` (
  `id_candidature` bigint(20) UNSIGNED NOT NULL,
  `id_commune` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `criteres`
--

CREATE TABLE `criteres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coefficient` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `bareme` int(11) NOT NULL,
  `id_prix` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `criteres`
--

INSERT INTO `criteres` (`id`, `coefficient`, `designation`, `bareme`, `id_prix`, `created_at`, `updated_at`) VALUES
(1, 4, 'zone_intervention', 10, 2, NULL, NULL),
(2, 4, 'approche_innovante', 10, 2, NULL, NULL),
(3, 5, 'cible', 10, 2, NULL, NULL),
(4, 5, 'effet_impact', 10, 2, NULL, NULL),
(5, 3, 'secteur_activite', 10, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_departement` varchar(255) NOT NULL,
  `id_region` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `nom_departement`, `id_region`, `created_at`, `updated_at`) VALUES
(1, 'DAKAR', 1, NULL, NULL),
(2, 'GUEDIAWAYE', 1, NULL, NULL),
(3, 'RUFISQUE', 1, NULL, NULL),
(4, 'PIKINE', 1, NULL, NULL),
(5, 'BIGNONA', 14, NULL, NULL),
(6, 'OUSSOUYE', 14, NULL, NULL),
(7, 'ZIGUINCHOR', 14, NULL, NULL),
(8, 'DIOURBEL', 3, NULL, NULL),
(9, 'M’BACKE', 3, NULL, NULL),
(10, 'BAMBEY', 3, NULL, NULL),
(11, 'DAGANA', 11, NULL, NULL),
(12, 'PODOR', 11, NULL, NULL),
(13, 'SAINT-LOUIS', 11, NULL, NULL),
(14, 'BAKEL', 13, NULL, NULL),
(15, 'GOUDIRY', 13, NULL, NULL),
(16, 'KOUPENTOUM', 13, NULL, NULL),
(17, 'TAMBACOUNDA', 13, NULL, NULL),
(18, 'KAOLACK', 5, NULL, NULL),
(19, 'NIORO', 5, NULL, NULL),
(20, 'GUINGUINEO', 5, NULL, NULL),
(21, 'MBOUR', 2, NULL, NULL),
(22, 'THIES', 2, NULL, NULL),
(23, 'TIVAOUANE', 2, NULL, NULL),
(24, 'KEBEMER', 9, NULL, NULL),
(25, 'LINGUERE', 9, NULL, NULL),
(26, 'LOUGA', 9, NULL, NULL),
(27, 'FATICK', 4, NULL, NULL),
(28, 'FOUNDIOUGNE', 4, NULL, NULL),
(29, 'GOSSAS', 4, NULL, NULL),
(30, 'KANEL', 10, NULL, NULL),
(31, 'MATAM', 10, NULL, NULL),
(32, 'RANEROU', 10, NULL, NULL),
(33, 'BIRKELANE', 6, NULL, NULL),
(34, 'KAFFRINE', 6, NULL, NULL),
(35, 'KOUNGHEUL', 6, NULL, NULL),
(36, 'MALEM HODDAR', 6, NULL, NULL),
(37, 'KEDOUGOU', 7, NULL, NULL),
(38, 'SALEMATA', 7, NULL, NULL),
(39, 'SARAYA', 7, NULL, NULL),
(40, 'KOLDA', 8, NULL, NULL),
(41, 'MEDINA YORO FOULAH', 8, NULL, NULL),
(42, 'VELINGARA', 8, NULL, NULL),
(43, 'BOUNKILING', 12, NULL, NULL),
(44, 'GOUDOMP', 12, NULL, NULL),
(45, 'SEDHIOU', 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `dept_deroule`
--

CREATE TABLE `dept_deroule` (
  `id_candidature` bigint(20) UNSIGNED NOT NULL,
  `id_departement` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dossier_candidatures`
--

CREATE TABLE `dossier_candidatures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `num_dossier` varchar(255) NOT NULL,
  `intitule_activite` varchar(255) NOT NULL,
  `etat` enum('en_attente','validé','évalué','terminé','rejeté') NOT NULL DEFAULT 'en_attente',
  `motif_rejet` text DEFAULT NULL,
  `description_activite` text NOT NULL,
  `effet_impact` text NOT NULL,
  `innovation` text NOT NULL,
  `date_debut_intervention` date NOT NULL,
  `date_fin_intervention` date NOT NULL,
  `documents_complementaires` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`documents_complementaires`)),
  `accessibilite_agences` int(11) DEFAULT NULL,
  `parties_prenantes` text DEFAULT NULL,
  `approche_methodologique` text DEFAULT NULL,
  `nbr_homme_toucher` int(11) DEFAULT NULL,
  `nbr_femme_toucher` int(11) DEFAULT NULL,
  `nbr_jeune_toucher` int(11) DEFAULT NULL,
  `nbr_handicape_toucher` int(11) DEFAULT NULL,
  `id_prix` bigint(20) UNSIGNED NOT NULL,
  `id_structure` bigint(20) UNSIGNED NOT NULL,
  `note_finale` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evaluateurs`
--

CREATE TABLE `evaluateurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `structure` varchar(255) DEFAULT NULL,
  `fonction` varchar(255) DEFAULT NULL,
  `tel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evaluateurs`
--

INSERT INTO `evaluateurs` (`id`, `id_user`, `structure`, `fonction`, `tel`, `created_at`, `updated_at`) VALUES
(22, 179, 'SenHijab', 'Gérante', '778654352', '2025-02-17 10:10:53', '2025-02-17 10:10:53'),
(69, 233, 'FIMF', 'ingénieur', '776568451', '2025-05-05 08:16:03', '2025-05-05 08:16:03');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"eca276ee-91bc-4b58-ba15-d9a947fa93a6\",\"displayName\":\"App\\\\Notifications\\\\EvaluateurRegisteredNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:167;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:50:\\\"App\\\\Notifications\\\\EvaluateurRegisteredNotification\\\":2:{s:7:\\\"\\u0000*\\u0000user\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:167;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:2:\\\"id\\\";s:36:\\\"7a32e6bf-873a-4395-bf23-c74e191092d2\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}}\"}}', 0, NULL, 1739732938, 1739732938),
(2, 'default', '{\"uuid\":\"c9d029b3-3a12-4ba8-8fc8-5439bb24f61b\",\"displayName\":\"App\\\\Notifications\\\\WelcomeUserNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:168;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:41:\\\"App\\\\Notifications\\\\WelcomeUserNotification\\\":1:{s:2:\\\"id\\\";s:36:\\\"d8a37afc-0107-402a-a1eb-0c04edc7f5d6\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}}\"}}', 0, NULL, 1739732993, 1739732993);

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `laureats`
--

CREATE TABLE `laureats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rang` int(11) DEFAULT NULL,
  `date_selection` date NOT NULL,
  `candidature_id` bigint(20) UNSIGNED NOT NULL,
  `observation_jury` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_22_171456_create_prix_table', 1),
(5, '2025_01_22_171901_create_cible_activites_table', 1),
(6, '2025_01_22_171907_create_secteur_interventions_table', 1),
(7, '2025_01_22_172016_create_regions_table', 1),
(8, '2025_01_22_172025_create_structures_table', 1),
(9, '2025_01_22_172041_create_admins_table', 1),
(10, '2025_01_22_172051_create_evaluateurs_table', 1),
(11, '2025_01_22_172105_create_criteres_table', 1),
(12, '2025_01_22_172120_create_dossier_candidatures_table', 1),
(13, '2025_01_22_172135_create_notes_table', 1),
(14, '2025_01_22_172218_create_viser_activites_table', 1),
(15, '2025_01_22_172247_create_region_derouler_table', 1),
(16, '2025_01_22_172325_create_departements_table', 1),
(17, '2025_01_22_172334_create_communes_table', 1),
(18, '2025_01_22_172348_create_commune_derouler_table', 1),
(19, '2025_01_22_172427_create_secteur_toucher_table', 1),
(20, '2025_01_22_193211_create_dept_deroule_table', 1),
(21, '2025_02_12_114421_update_etat_column_in_dossier_candidatures', 2),
(22, '2025_02_12_114932_modify_id_user_to_id_evaluateur_in_notes_table', 2),
(23, '2025_02_12_120722_add_motif_rejet_to_dossier_candidatures_table', 3),
(24, '2025_02_14_004802_add_two_factor_columns_to_users_table', 4),
(25, '2025_02_15_221052_update_evaluateurs_table', 4),
(26, '2025_02_15_222013_remove_columns_from_evaluateurs', 5),
(27, '2025_02_21_163015_create_laureats_table', 6),
(28, '2025_02_21_120942_create_laureats_table', 7),
(29, '2025_03_19_115242_update_structures_table', 7),
(37, '2025_03_21_111510_create_pays_table', 8),
(38, '2025_08_05_110438_add_fields_to_dossier_candidatures_table', 9),
(39, '2025_08_05_144105_update_documents_dossier_candidatures', 9),
(40, '2025_09_02_111308_remove_rapport_agrement_from_dossier_candidatures', 10),
(41, '2025_09_12_231748_add_mail_structure_to_structures_table', 11);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `observation` text DEFAULT NULL,
  `etat_note` varchar(255) NOT NULL,
  `note_critere` int(11) NOT NULL,
  `etat` enum('en_attente','enregistré','validé') NOT NULL DEFAULT 'en_attente',
  `id_critere` bigint(20) UNSIGNED NOT NULL,
  `id_candidature` bigint(20) UNSIGNED NOT NULL,
  `id_evaluateur` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `national` varchar(255) NOT NULL,
  `candidature_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

CREATE TABLE `prix` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) NOT NULL,
  `annee` int(11) NOT NULL,
  `date_ouverture` date NOT NULL,
  `date_cloture_depot_dossier` date NOT NULL,
  `date_cloture` date NOT NULL,
  `etat` enum('en_attente','ouvert','fermé') NOT NULL DEFAULT 'en_attente',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `prix`
--

INSERT INTO `prix` (`id`, `designation`, `annee`, `date_ouverture`, `date_cloture_depot_dossier`, `date_cloture`, `etat`, `created_at`, `updated_at`) VALUES
(2, 'Prix du Ministre de la Microfinance et de l\'Économie Sociale et Solidaire pour la Promotion de l\'Inclusion Financière', 2025, '2025-03-14', '2025-05-08', '2025-02-28', 'en_attente', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom_region` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `nom_region`, `created_at`, `updated_at`) VALUES
(1, 'Dakar', NULL, NULL),
(2, 'Thiès', NULL, NULL),
(3, 'Diourbel', NULL, NULL),
(4, 'Fatick', NULL, NULL),
(5, 'Kaolack', NULL, NULL),
(6, 'Kaffrine', NULL, NULL),
(7, 'Kédougou', NULL, NULL),
(8, 'Kolda', NULL, NULL),
(9, 'Louga', NULL, NULL),
(10, 'Matam', NULL, NULL),
(11, 'Saint-Louis', NULL, NULL),
(12, 'Sédhiou', NULL, NULL),
(13, 'Tambacounda', NULL, NULL),
(14, 'Ziguinchor', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `region_derouler`
--

CREATE TABLE `region_derouler` (
  `id_candidature` bigint(20) UNSIGNED NOT NULL,
  `id_region` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `secteur_interventions`
--

CREATE TABLE `secteur_interventions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_secteur` varchar(255) NOT NULL,
  `descripion_secteur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `secteur_interventions`
--

INSERT INTO `secteur_interventions` (`id`, `designation_secteur`, `descripion_secteur`) VALUES
(1, 'Agriculture', 'Production végétale et animale, y compris la pêche et la foresterie.'),
(2, 'Commerce', 'Activités liées à l’achat et à la vente de biens et services.'),
(3, 'Industrie', 'Fabrication et transformation des matières premières en produits finis.'),
(4, 'Éducation', 'Secteur consacré à l’enseignement et à la formation.'),
(5, 'Santé', 'Services médicaux, pharmaceutiques et hospitaliers.'),
(6, 'Finance', 'Banques, assurances et institutions de microfinance.'),
(7, 'BTP', 'Bâtiments et travaux publics, construction d’infrastructures.'),
(8, 'Transport', 'Moyens de déplacement des personnes et des marchandises.'),
(9, 'Technologie', 'Développement et maintenance de solutions informatiques et numériques.'),
(10, 'Tourisme', 'Activités liées aux voyages, à l’hôtellerie et aux loisirs.'),
(11, 'Pêche', 'autre'),
(12, 'Artisanat', 'autre');

-- --------------------------------------------------------

--
-- Structure de la table `secteur_toucher`
--

CREATE TABLE `secteur_toucher` (
  `id_candidature` bigint(20) UNSIGNED NOT NULL,
  `id_secteur` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RgVHipPNszfyXORhiPav2ISfJrga2vDHd4AFawrx', 227, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiejVmY0IycmNyZWpTR3hVM1BKaFhjaUhmbUZNN1hCWFBWa3RyeVFGeiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoxMDc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdHJ1Y3QvdGVsZWNoYXJnZXIvZG9jdW1lbnRzLWNvbXBsZW1lbnRhaXJlcy9tZWMtc2FudGUteWFsbGFfZG9jX2NvbXBsZW1lbnRhaXJlXzAucGRmIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTA3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvc3RydWN0L3RlbGVjaGFyZ2VyL2RvY3VtZW50cy1jb21wbGVtZW50YWlyZXMvbWVjLXNhbnRlLXlhbGxhX2RvY19jb21wbGVtZW50YWlyZV8wLnBkZiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjIyNzt9', 1754419976),
('vW1Zr8QdpoTzYNCQ3SmJgBpepBYVPuCuyC3r5sZd', 227, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoic1VqMTZyT2RENlk2b08zYUdQWUJyNFNtNVF1Tm1xVUtQSlFSZWVsbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ldmFsdWF0b3IvdGVsZWNoYXJnZXIvcmFwcG9ydC9tZWMtc2FudGUteWFsbGFfcmFwcG9ydC5wZGYiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMjc7fQ==', 1754412168),
('wD2sjGwzUQgo1KXrWPNDpanIOxqRDAzKrBgqdQHC', 144, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36 Edg/140.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieHRtbFdGa3NvVUJWMVB5dlAyQ1pTS2lXREZ6ZzRJMDVRRk1uRm96ZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdHJ1Y3QvY2FuZGlkYXRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE0NDt9', 1757726988);

-- --------------------------------------------------------

--
-- Structure de la table `structures`
--

CREATE TABLE `structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `nom_structure` varchar(255) NOT NULL,
  `siege_social` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  `tel_structure` int(11) NOT NULL,
  `ninea` varchar(255) DEFAULT NULL,
  `agreement` varchar(255) DEFAULT NULL,
  `num_decret` varchar(255) DEFAULT NULL,
  `statut_juridique` varchar(255) DEFAULT NULL,
  `registre_commerce` varchar(255) DEFAULT NULL,
  `nom_contact` varchar(255) NOT NULL,
  `prenom_contact` varchar(255) NOT NULL,
  `fonction_contact` varchar(255) NOT NULL,
  `tel_contact` int(11) NOT NULL,
  `email_contact` varchar(255) NOT NULL,
  `mail_structure` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `structures`
--

INSERT INTO `structures` (`id`, `type`, `nom_structure`, `siege_social`, `date_creation`, `tel_structure`, `ninea`, `agreement`, `num_decret`, `statut_juridique`, `registre_commerce`, `nom_contact`, `prenom_contact`, `fonction_contact`, `tel_contact`, `email_contact`, `mail_structure`, `id_user`, `created_at`, `updated_at`) VALUES
(36, 'Structure publique', 'FIMF', '4, Avenue Jean Jaurès, Immeuble El Hadji Oumar Dia, 2ème étage blocs D, E et F', '2005-02-02', 52548865, 'DS-TEF736', 'KL-OIJSDH', '12-HKYY-22376', 'SARL', 'TF-GGSD787', 'DIONGUE', 'Cheikh Anta', 'INFORMATICIEN', 52548865, 'cheikhanta@gmail.com', NULL, 139, '2025-02-11 14:44:55', '2025-03-20 16:57:53'),
(44, 'Société coopérative', 'LARABIA', 'Thiès', '2012-02-01', 776145543, 'FT-HSG765', 'GH-SOS990', '2025YSF637', NULL, 'KI-HS827', 'BADJI', 'Patrice', 'Coordonateur', 776145543, 'aristidebadji@gmail.com', NULL, 145, '2025-02-13 23:37:56', '2025-02-13 23:37:56'),
(45, 'ONG', 'Agrovision', 'DIAMNIADIO', '2025-02-01', 773553905, 'FT-HSG765', 'GH-SOS990', '2025YSF637', NULL, 'KI-HS827', 'BADJI', 'Patrice', 'Coordonateur', 52548865, 'aristidebadji@gmail.com', NULL, 146, '2025-02-14 01:07:18', '2025-02-14 01:07:18'),
(47, 'Banque', 'BIS', 'Sandaga', '2025-02-01', 775527442, 'FT-HSG765', 'GH-SOS990', '2025YSF637', NULL, 'KI-HS827', 'SARR', 'KATIME', 'Ingénieur agronome', 52548865, 'katime.sarr@gmail.com', NULL, 162, '2025-02-15 23:50:46', '2025-02-15 23:50:46'),
(48, 'ONG', 'Agritech SARL', 'Mermoz', '2025-01-27', 66444336, '0001122 2G3', '7840929', 'DS-002344', NULL, 'G30001122 2', 'DIOP', 'Aminata', 'Assistante de Direction', 66777, 'aminatadiop@agritech.sn', NULL, 178, '2025-02-17 10:03:03', '2025-02-17 10:03:03'),
(49, 'Structure publique', 'AfricaHair', 'Quest Foire', '2025-01-26', 330995677, '18822799', '0002G31122', 'DS-002344', NULL, 'G30001122 2', 'Mbaye', 'Rokhaya', 'Directrice', 339857795, 'rokhaya.mbaye@africahair.sn', NULL, 183, '2025-02-26 16:10:02', '2025-02-26 16:10:02'),
(86, 'IMF', 'CNC-SHAP', 'DAKAR', '2025-04-04', 774189000, 'DS-TEF736', NULL, NULL, 'SARL', 'YU-AZS656', 'Boye', 'Daouda', 'Ingénieur agronome', 773553905, 'daoudaboye19@gmail.com', NULL, 187, '2025-04-29 16:19:33', '2025-04-29 16:19:33'),
(89, 'IMF', 'MEC-SANTE YALLA', 'Dakar, Diamniadio', '2022-12-27', 773499473, NULL, 'DK-HDEFIZ', NULL, 'SA', NULL, 'CISSE', 'ABDOU', 'Assistant', 768837239, 'abdou@gmail.com', NULL, 227, '2025-08-04 11:36:28', '2025-08-04 11:36:28'),
(94, 'IMF', 'MEC FONESS', 'Kaolack', '2025-09-10', 772625252, NULL, 'KL-OIJSDH', NULL, 'SA', NULL, 'Boye', 'Daouda', 'INFORMATICIEN', 772625252, 'daoudaboye19@gmail.com', 'aristidebadji@gmail.com', 144, '2025-09-13 01:01:40', '2025-09-13 01:01:40');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'DMIF', 'dmif@dmif.sn', NULL, '$2y$12$aRzUP5ZNPvez1UllxYz.b.jK4IfmDIuK6zXoqSFLQytafQDAoTwEK', NULL, NULL, NULL, 'DMIF', NULL, NULL, NULL),
(20, 'Cheikh Anta DIONGUE', 'cheikhanta@gmail.com', NULL, '$2y$12$aRzUP5ZNPvez1UllxYz.b.jK4IfmDIuK6zXoqSFLQytafQDAoTwEK', NULL, NULL, NULL, 'jury', NULL, NULL, NULL),
(139, 'Patrice Samuel Aristide BADJI', 'daouda.boye@fimf.sn', NULL, '$2y$12$l5QxzKc77oRlTcMcScWPr.PE2/.RA4UrAe6IzMGAlWWhvPOp5oPAK', NULL, NULL, NULL, 'structure', NULL, '2025-02-11 14:42:10', '2025-02-11 14:42:10'),
(144, 'Moussou Touré', 'moussou.toure@fimf.sn', NULL, '$2y$12$CpmF6D5D2HBvcjSjAOkgleaVcG0DEwXKhMLTczMzDUIJvvPspjkYW', NULL, NULL, NULL, 'structure', NULL, '2025-02-13 11:53:35', '2025-02-13 11:53:35'),
(145, 'Amadou Sylla', 'prixmmess@fimf.sn', NULL, '$2y$12$SbnGXKvUHWeQpxqn1kr87O9osTM64Zqv3LSwwRvJe5fhnlW4rKO82', NULL, NULL, NULL, 'structure', NULL, '2025-02-13 23:20:11', '2025-02-13 23:20:11'),
(146, 'Aissatou Ndao', 'daoudaboye@gmail.com', NULL, '$2y$12$T0EtZdl3IasvDJGDFkW8F.fhsrLD04PksdVNKzYznATg2coCoYV7u', NULL, NULL, NULL, 'structure', NULL, '2025-02-13 23:31:58', '2025-02-13 23:31:58'),
(162, 'Rokhaya NIANG', 'rokhaya.niang@fimf.sn', NULL, '$2y$12$IOjTQ0RTWvEf3fKqhrAGcuuhMn9euzepuv/g.Si9PVHxgyPqTw2s6', NULL, NULL, NULL, 'structure', NULL, '2025-02-15 23:48:39', '2025-02-15 23:48:39'),
(178, 'Mariama Kesso BAH', 'mariamakessobah@esp.sn', NULL, '$2y$12$owjzSNI3gHx6oTYbW58fY.sSIo9anMNQ5siDZA70oWDMMOaa16yby', NULL, NULL, NULL, 'structure', NULL, '2025-02-17 10:00:07', '2025-02-17 10:00:07'),
(179, 'Mariéme SALL', 'mariama.ba@fimf.sn', NULL, '$2y$12$reX3T288VDWU2aW1BRhfd.G0rHE.RZnJfWdiJnBn/VGNjyWxtrvLW', NULL, NULL, NULL, 'evaluateur', NULL, '2025-02-17 10:10:53', '2025-02-17 12:01:50'),
(183, 'Abdoulaye Ba', 'abdoulayeba@gmail.com', NULL, '$2y$12$9C/rxG8z7LFagAU1bFBBD.FK.TXoZUdxHKZY9MXKSYdxZVmD1.H/y', NULL, NULL, NULL, 'structure', NULL, '2025-02-26 15:40:33', '2025-02-26 15:40:33'),
(187, 'Mamadou Mbow', 'mamadou@fimf.sn', NULL, '$2y$12$kKwDvgzIkN1md9CrpLwsyO6HsKTWrNZgxI9BNkKW5Fu.LXLDorceS', NULL, NULL, NULL, 'structure', NULL, '2025-03-19 11:17:15', '2025-03-19 11:17:15'),
(227, 'Amadou Sylla', 'daoudaboye19@gmail.com', NULL, '$2y$12$RZBuKllJ.q3tdqHorgcQK.HJEAT.ecgcqQp6K2/ziYVixEx4MrzEC', NULL, NULL, NULL, 'structure', NULL, '2025-04-30 10:43:50', '2025-04-30 10:43:50'),
(233, 'Daouda Boye', 'daoudaboye18@gmail.com', NULL, '$2y$12$yEFOBqBRgZONEhKnFJSaau.p2FHaPkOjB1ylM2t9NL.I88KwuFRu2', NULL, NULL, NULL, 'evaluateur', NULL, '2025-05-05 08:16:03', '2025-05-05 08:16:42');

-- --------------------------------------------------------

--
-- Structure de la table `viser_activites`
--

CREATE TABLE `viser_activites` (
  `id_candidature` bigint(20) UNSIGNED NOT NULL,
  `id_cible` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_id_user_foreign` (`id_user`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cible_activites`
--
ALTER TABLE `cible_activites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communes_id_departement_foreign` (`id_departement`);

--
-- Index pour la table `commune_derouler`
--
ALTER TABLE `commune_derouler`
  ADD KEY `commune_derouler_id_candidature_foreign` (`id_candidature`),
  ADD KEY `commune_derouler_id_commune_foreign` (`id_commune`);

--
-- Index pour la table `criteres`
--
ALTER TABLE `criteres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteres_id_prix_foreign` (`id_prix`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departements_id_region_foreign` (`id_region`);

--
-- Index pour la table `dept_deroule`
--
ALTER TABLE `dept_deroule`
  ADD KEY `dept_deroule_id_candidature_foreign` (`id_candidature`),
  ADD KEY `dept_deroule_id_departement_foreign` (`id_departement`);

--
-- Index pour la table `dossier_candidatures`
--
ALTER TABLE `dossier_candidatures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dossier_candidatures_num_dossier_unique` (`num_dossier`),
  ADD KEY `dossier_candidatures_id_prix_foreign` (`id_prix`),
  ADD KEY `dossier_candidatures_id_structure_foreign` (`id_structure`);

--
-- Index pour la table `evaluateurs`
--
ALTER TABLE `evaluateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluateurs_id_user_foreign` (`id_user`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `laureats`
--
ALTER TABLE `laureats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laureats_candidature_id_foreign` (`candidature_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_id_critere_foreign` (`id_critere`),
  ADD KEY `notes_id_candidature_foreign` (`id_candidature`),
  ADD KEY `notes_id_evaluateur_foreign` (`id_evaluateur`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pays_candidature_id_foreign` (`candidature_id`);

--
-- Index pour la table `prix`
--
ALTER TABLE `prix`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prix_annee_unique` (`annee`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `region_derouler`
--
ALTER TABLE `region_derouler`
  ADD KEY `region_derouler_id_candidature_foreign` (`id_candidature`),
  ADD KEY `region_derouler_id_region_foreign` (`id_region`);

--
-- Index pour la table `secteur_interventions`
--
ALTER TABLE `secteur_interventions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `secteur_toucher`
--
ALTER TABLE `secteur_toucher`
  ADD KEY `secteur_toucher_id_candidature_foreign` (`id_candidature`),
  ADD KEY `secteur_toucher_id_secteur_foreign` (`id_secteur`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `structures_id_user_foreign` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `viser_activites`
--
ALTER TABLE `viser_activites`
  ADD KEY `viser_activites_id_candidature_foreign` (`id_candidature`),
  ADD KEY `viser_activites_id_cible_foreign` (`id_cible`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cible_activites`
--
ALTER TABLE `cible_activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=553;

--
-- AUTO_INCREMENT pour la table `criteres`
--
ALTER TABLE `criteres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `dossier_candidatures`
--
ALTER TABLE `dossier_candidatures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT pour la table `evaluateurs`
--
ALTER TABLE `evaluateurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `laureats`
--
ALTER TABLE `laureats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `prix`
--
ALTER TABLE `prix`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `secteur_interventions`
--
ALTER TABLE `secteur_interventions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `structures`
--
ALTER TABLE `structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commune_derouler`
--
ALTER TABLE `commune_derouler`
  ADD CONSTRAINT `commune_derouler_id_candidature_foreign` FOREIGN KEY (`id_candidature`) REFERENCES `dossier_candidatures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commune_derouler_id_commune_foreign` FOREIGN KEY (`id_commune`) REFERENCES `communes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `criteres`
--
ALTER TABLE `criteres`
  ADD CONSTRAINT `criteres_id_prix_foreign` FOREIGN KEY (`id_prix`) REFERENCES `prix` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `departements_id_region_foreign` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `dept_deroule`
--
ALTER TABLE `dept_deroule`
  ADD CONSTRAINT `dept_deroule_id_candidature_foreign` FOREIGN KEY (`id_candidature`) REFERENCES `dossier_candidatures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dept_deroule_id_departement_foreign` FOREIGN KEY (`id_departement`) REFERENCES `departements` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `dossier_candidatures`
--
ALTER TABLE `dossier_candidatures`
  ADD CONSTRAINT `dossier_candidatures_id_prix_foreign` FOREIGN KEY (`id_prix`) REFERENCES `prix` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dossier_candidatures_id_structure_foreign` FOREIGN KEY (`id_structure`) REFERENCES `structures` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `evaluateurs`
--
ALTER TABLE `evaluateurs`
  ADD CONSTRAINT `evaluateurs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `laureats`
--
ALTER TABLE `laureats`
  ADD CONSTRAINT `laureats_candidature_id_foreign` FOREIGN KEY (`candidature_id`) REFERENCES `dossier_candidatures` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_id_candidature_foreign` FOREIGN KEY (`id_candidature`) REFERENCES `dossier_candidatures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_id_critere_foreign` FOREIGN KEY (`id_critere`) REFERENCES `criteres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_id_evaluateur_foreign` FOREIGN KEY (`id_evaluateur`) REFERENCES `evaluateurs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `pays_candidature_id_foreign` FOREIGN KEY (`candidature_id`) REFERENCES `dossier_candidatures` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `region_derouler`
--
ALTER TABLE `region_derouler`
  ADD CONSTRAINT `region_derouler_id_candidature_foreign` FOREIGN KEY (`id_candidature`) REFERENCES `dossier_candidatures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `region_derouler_id_region_foreign` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `secteur_toucher`
--
ALTER TABLE `secteur_toucher`
  ADD CONSTRAINT `secteur_toucher_id_candidature_foreign` FOREIGN KEY (`id_candidature`) REFERENCES `dossier_candidatures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `secteur_toucher_id_secteur_foreign` FOREIGN KEY (`id_secteur`) REFERENCES `secteur_interventions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `structures`
--
ALTER TABLE `structures`
  ADD CONSTRAINT `structures_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `viser_activites`
--
ALTER TABLE `viser_activites`
  ADD CONSTRAINT `viser_activites_id_candidature_foreign` FOREIGN KEY (`id_candidature`) REFERENCES `dossier_candidatures` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `viser_activites_id_cible_foreign` FOREIGN KEY (`id_cible`) REFERENCES `cible_activites` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
