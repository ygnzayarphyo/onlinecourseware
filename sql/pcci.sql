-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2019 at 10:49 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

Create Database If not Exists pcci;
Use pcci;

--
-- Database: `pcci`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` mediumint(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category_question`
--

CREATE TABLE IF NOT EXISTS `category_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category_question`
--

INSERT INTO `category_question` (`id`, `cat_title`) VALUES
(1, 'Grammar'),
(10, 'Java'),
(12, 'Python'),
(13, 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=479 ;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_id`, `answer`) VALUES
(35, 9, 'about'),
(36, 9, 'with'),
(37, 10, 'until'),
(38, 10, 'about'),
(39, 10, 'at'),
(40, 10, 'on'),
(41, 11, 'for'),
(42, 11, 'shine'),
(43, 11, 'until'),
(44, 11, 'on'),
(45, 12, 'by'),
(46, 12, 'at'),
(47, 12, 'with'),
(48, 12, 'on'),
(49, 13, 'on'),
(50, 13, 'with'),
(51, 13, 'to'),
(52, 13, 'at'),
(53, 14, 'in'),
(54, 14, 'at'),
(55, 14, 'to'),
(56, 14, 'on'),
(57, 15, 'in'),
(58, 15, 'on'),
(59, 15, 'to'),
(60, 15, 'at'),
(61, 16, 'at'),
(62, 16, 'in'),
(63, 16, 'by'),
(64, 16, 'at'),
(65, 17, 'since'),
(66, 17, 'for'),
(67, 17, 'until'),
(68, 17, 'at'),
(69, 18, 'for'),
(70, 18, 'to'),
(71, 18, 'in'),
(72, 18, 'at'),
(73, 19, 'seems'),
(74, 19, 'seemed'),
(75, 19, 'seem'),
(76, 19, 'seemeth'),
(77, 20, 'are'),
(78, 20, 'is'),
(79, 20, 'were'),
(80, 20, 'to be'),
(81, 21, 'appears'),
(82, 21, 'appear'),
(83, 21, 'appeared'),
(84, 21, 'other'),
(85, 22, 'is'),
(86, 22, 'are'),
(87, 22, 'were'),
(88, 22, 'other'),
(89, 23, 'hope'),
(90, 23, 'hopes'),
(91, 23, 'hoped'),
(92, 23, 'other'),
(93, 24, 'has-are'),
(94, 24, 'have-is'),
(95, 24, 'other'),
(96, 25, 'is'),
(97, 25, 'are'),
(98, 25, 'was'),
(99, 25, 'to'),
(100, 26, 'who'),
(101, 26, 'whom'),
(102, 26, 'whose'),
(103, 27, 'a/an'),
(104, 27, 'a/a'),
(105, 27, 'an/an'),
(106, 27, 'a/an'),
(107, 28, 'Clauses'),
(108, 28, 'periods'),
(109, 28, 'predicates'),
(110, 28, 'objects'),
(111, 29, 'I'),
(112, 29, 'me'),
(113, 29, 'myself'),
(114, 29, 'mine'),
(115, 30, 'two or more words that share the same pronunciation but have different meanings'),
(116, 30, 'two or more words that share the same meaning but have different pronunciations'),
(117, 30, 'two or more words that share the same spelling but have different meanings'),
(118, 30, 'two or more words that share the same pronunciation but have different spellings'),
(119, 31, 'on'),
(120, 31, 'at'),
(121, 31, 'in'),
(122, 31, 'when'),
(123, 32, 'abstract nouns'),
(124, 32, 'proper nouns'),
(125, 32, 'relative nouns'),
(126, 32, 'countable nouns'),
(127, 33, 'it is'),
(128, 33, 'they are'),
(129, 33, 'itself is'),
(130, 33, 'she is'),
(131, 34, 'fungi / potatoes'),
(132, 34, 'fungus / potatoes'),
(133, 34, 'fungis / potatoes'),
(134, 34, 'fungi / potatos'),
(135, 35, 'adjectives'),
(136, 35, 'nouns'),
(137, 35, 'pronouns'),
(138, 35, 'sentences'),
(139, 36, 'who'),
(140, 36, 'himself'),
(141, 36, 'that'),
(142, 36, 'which'),
(143, 37, 'so'),
(144, 37, 'upon'),
(145, 37, 'from'),
(146, 37, 'will'),
(147, 38, 'attributive and predicative'),
(148, 38, 'attributive and relative'),
(149, 38, 'predicative and collective'),
(150, 38, 'predicative and alternative'),
(151, 39, 'eaten'),
(152, 39, 'eat'),
(153, 39, 'ate'),
(154, 39, 'eated'),
(155, 40, 'it'),
(156, 40, 'a'),
(157, 40, 'the'),
(158, 40, 'an'),
(159, 41, 'that'),
(160, 41, 'which'),
(161, 41, 'whose'),
(162, 41, 'where'),
(163, 42, 'from'),
(164, 42, 'for'),
(165, 42, 'yet'),
(166, 42, 'but'),
(167, 43, 'intransitive verb'),
(168, 43, 'auxiliary verb'),
(169, 43, 'semi-auxiliary verb'),
(170, 43, 'being verb'),
(171, 44, 'me'),
(172, 44, 'myself'),
(173, 44, 'I'),
(174, 44, 'mine'),
(175, 45, 'to confuse'),
(176, 45, 'to harass'),
(177, 45, 'to threaten'),
(178, 45, 'to insult'),
(179, 46, 'speed of a computer system'),
(180, 46, 'speed of a broadband connection'),
(181, 46, 'memory size of a super computer'),
(182, 46, 'the cache of a motherboard'),
(183, 47, 'Western Europe'),
(184, 47, 'Latin America'),
(185, 47, 'Southeast Asia'),
(186, 47, 'Southeast Asia'),
(187, 48, 'slowly'),
(188, 48, 'quickly'),
(189, 48, 'silently'),
(190, 48, 'loudly'),
(191, 49, 'excessively'),
(192, 49, 'modestly'),
(193, 49, 'abruptly'),
(194, 49, 'frankly'),
(195, 50, 'wonder'),
(196, 50, 'pain'),
(197, 50, 'sorrow'),
(198, 50, 'light'),
(199, 51, 'fuzzy'),
(200, 51, 'obsolete'),
(201, 51, 'evident'),
(202, 51, 'blatant'),
(203, 52, 'infamy'),
(204, 52, 'wisdom'),
(205, 52, 'disease'),
(206, 52, 'chastity'),
(207, 53, 'the placing of a person or thing out of its historical time.'),
(208, 53, 'the visual effect of two or more colors combined.'),
(209, 53, 'a chronic state of the anorexia disease.'),
(210, 53, 'a form of musical synchrony that takes place in metal orchestras.'),
(211, 54, 'a specific talent or ability.'),
(212, 54, 'a casual event.'),
(213, 54, 'a wood structure used in doors or windows.'),
(214, 54, 'a piece of feminine garment.'),
(215, 55, 'euphemism'),
(216, 55, 'Oration'),
(217, 55, 'abbreviation'),
(218, 55, 'interjection'),
(219, 56, 'people that own property'),
(220, 56, 'people who are rich'),
(221, 56, 'people who are rich'),
(222, 56, 'people who work for others'),
(223, 57, 'a deity that has taken an earthly form.'),
(224, 57, 'a saint from the orthodox religions.'),
(225, 57, 'a God who has lived twice.'),
(226, 57, 'the name of the image of the Gods in the Roman culture.'),
(227, 58, 'to hesitate'),
(228, 58, 'to continue'),
(229, 58, 'to pursue'),
(230, 58, 'to get'),
(231, 59, 'dull'),
(232, 59, 'special'),
(233, 59, 'polite'),
(234, 59, 'angry '),
(235, 60, 'uncanny'),
(236, 60, 'frugal'),
(237, 60, 'ambivalent'),
(238, 60, 'tacit'),
(239, 61, 'a place where people live in misery.'),
(240, 61, 'a chronic condition of the retina.'),
(241, 61, 'an optical effect characterized by the reduced light reflection.'),
(242, 61, 'a prophecy.'),
(243, 62, 'an extravagant speech.'),
(244, 62, 'an explosion.'),
(245, 62, 'a loud noise.'),
(246, 62, 'a weapon.'),
(247, 63, 'the trends and characteristics of a period.'),
(248, 63, 'group of expressions of a language or region.'),
(249, 63, 'the leader of any country or organization.'),
(250, 63, 'the supernatural phenomena.'),
(251, 64, 'to intimidate'),
(252, 64, 'to surpass'),
(253, 64, 'to invite'),
(254, 64, 'to challenge'),
(255, 65, 'Montgomery'),
(256, 65, 'Sacramento'),
(257, 65, 'Annapolis'),
(258, 65, 'Boise'),
(259, 66, 'Sacramento'),
(260, 66, 'Jefferson City'),
(261, 66, 'Olympia'),
(262, 66, 'Richmond'),
(263, 67, 'Annapolis'),
(264, 67, 'Richmond'),
(265, 67, 'Boise'),
(266, 67, 'Madison'),
(267, 68, 'Frankfort'),
(268, 68, 'Annapolis'),
(269, 68, 'Boise'),
(270, 68, 'Montgomery'),
(271, 69, 'Boise'),
(272, 69, 'Santa Fe'),
(273, 69, 'Annapolis'),
(274, 69, 'Sacramento'),
(275, 70, 'Jefferson City'),
(276, 70, 'Madison'),
(277, 70, 'Santa Fe'),
(278, 70, 'Boise'),
(279, 71, 'Olympia'),
(280, 71, 'Madison'),
(281, 71, 'Boise'),
(282, 71, 'Montgomery'),
(283, 72, 'Richmond'),
(284, 72, 'Frankfort'),
(285, 72, 'Annapolis'),
(286, 72, 'Sacramento'),
(287, 73, 'Santa Fe'),
(288, 73, 'Montgomery'),
(289, 73, 'Madison'),
(290, 73, 'Boise'),
(291, 74, 'Madison'),
(292, 74, 'Montgomery'),
(293, 74, 'Madison'),
(294, 74, 'Boise'),
(295, 75, 'Madison'),
(296, 75, 'Montgomery'),
(297, 75, 'Jefferson City'),
(298, 75, 'Santa Fe'),
(299, 76, 'Arkansas'),
(300, 76, 'Alabama'),
(301, 76, 'Alaska'),
(302, 76, 'Arizona'),
(303, 77, 'Colorado'),
(304, 77, 'Connecticut'),
(305, 77, 'California'),
(306, 77, 'Costa Rica'),
(307, 78, 'Illinois'),
(308, 78, 'Iowa'),
(309, 78, 'Indiana'),
(310, 78, 'Idaho'),
(311, 79, 'Montana'),
(312, 79, 'Missouri'),
(313, 79, 'Minnesota'),
(314, 79, 'Maine'),
(315, 80, 'New Hampshire'),
(316, 80, 'Nevada'),
(317, 80, 'North Carolina'),
(318, 80, 'New York'),
(319, 81, 'Internet Service Provider'),
(320, 81, 'Internet Saves Power'),
(321, 81, 'Internet Super Program'),
(322, 81, 'Internet Service Program'),
(323, 82, 'High Speed Internet'),
(324, 82, 'High Service Inventory'),
(325, 82, 'High System Internet'),
(326, 82, 'High Speed Inventory'),
(327, 83, 'Internet Protocol'),
(328, 83, 'Inventory Provider'),
(329, 83, 'Internet Provider'),
(330, 83, 'Internet Procedure'),
(331, 84, 'Universal Service Bus'),
(332, 84, 'Universal System Bystander'),
(333, 84, 'Unified System Bus'),
(334, 84, 'Universal Standard Bus'),
(335, 85, 'Local Area Network'),
(336, 85, 'Local Admin Network'),
(337, 85, 'Land Area Network'),
(338, 85, 'Labelled Area Network'),
(339, 86, 'Present'),
(340, 86, 'Past '),
(341, 86, 'Future'),
(342, 86, 'None of the above'),
(343, 87, 'Past'),
(344, 87, 'Present'),
(345, 87, 'Future'),
(346, 87, 'None of the above'),
(347, 88, 'Future'),
(348, 88, 'Present'),
(349, 88, 'Past'),
(350, 88, 'None of the above'),
(351, 89, 'Past'),
(352, 89, 'Present'),
(353, 89, 'Future'),
(354, 89, 'None of the above'),
(355, 90, 'Present'),
(356, 90, 'Past'),
(357, 90, 'Future'),
(358, 90, 'None of the above'),
(359, 91, 'its'),
(360, 91, 'its'),
(361, 92, 'compliments'),
(362, 92, 'complements'),
(363, 92, 'complimentis'),
(364, 92, 'cumpliments'),
(365, 93, 'every day'),
(366, 93, 'everydat'),
(367, 93, 'ever days'),
(368, 93, 'ever day'),
(369, 94, 'quiet'),
(370, 94, 'quite'),
(371, 94, 'queit'),
(372, 94, 'quite'),
(373, 95, 'their'),
(374, 95, 'there'),
(375, 95, 'the’re'),
(376, 95, 'they’re'),
(377, 96, 'You’re'),
(378, 96, 'Your'),
(379, 96, 'Yours'),
(380, 97, 'loose'),
(381, 97, 'lose'),
(382, 97, 'louse'),
(383, 97, 'losse'),
(384, 98, 'all right'),
(385, 98, 'alright'),
(386, 98, 'aright'),
(387, 98, 'allright'),
(388, 99, 'though'),
(389, 99, 'Tough'),
(390, 99, 'through'),
(391, 99, 'thought'),
(392, 100, 'accept'),
(393, 100, 'except'),
(394, 100, 'excerpt'),
(395, 100, 'accept'),
(396, 101, 'm,m,'),
(397, 101, 'm,m,'),
(398, 101, ',m,m,m,'),
(399, 101, ',m,m,m'),
(400, 102, 'a'),
(401, 102, 'z'),
(402, 102, 'z'),
(403, 102, 'c'),
(404, 104, 't'),
(405, 104, 'j'),
(406, 104, 'k'),
(407, 104, 'l'),
(408, 106, 'qwqw'),
(409, 106, 'qwqw'),
(410, 106, 'qwqwq'),
(411, 106, 'wqwqwq'),
(412, 109, 'sample'),
(413, 109, 'testing'),
(414, 109, 'bla'),
(415, 109, 'plus'),
(416, 111, 'f'),
(417, 111, 'h'),
(418, 111, 'j'),
(419, 111, 'k'),
(420, 113, 'v'),
(421, 113, 'v'),
(422, 113, 'v'),
(423, 113, 'v'),
(424, 114, '1'),
(425, 114, 'r'),
(426, 114, 'f'),
(427, 114, 't'),
(428, 115, '2'),
(429, 115, 'r'),
(430, 115, 'q'),
(431, 115, 'c'),
(432, 116, '3'),
(433, 116, 'e'),
(434, 116, 'm'),
(435, 116, 'l'),
(436, 117, '4'),
(437, 117, 'f'),
(438, 117, 'h'),
(439, 117, 'l'),
(440, 118, 'computer terms'),
(441, 118, 'human body'),
(442, 118, 'animal body'),
(443, 118, 'answer not included'),
(444, 119, 'public static void main(String[] args)'),
(445, 119, 'public static int main(String[] args)'),
(446, 119, 'public int main(String[] args)'),
(447, 119, 'None of the above.'),
(448, 120, '64 bit'),
(449, 120, '32 bit'),
(450, 120, '16 bit'),
(451, 120, '8 bit'),
(452, 121, '0.0'),
(453, 121, '0'),
(454, 121, 'null'),
(455, 121, 'undefined'),
(456, 122, 'false'),
(457, 122, 'true'),
(458, 122, 'null'),
(459, 122, 'not defined'),
(460, 123, 'It is the process where one object acquires the properties of another.'),
(461, 123, 'inheritance is the ability of an object to take on many forms.'),
(462, 123, 'inheritance is a technique to define different methods of same type.'),
(463, 123, ' None of the above.'),
(464, 124, ' It is a Set implemented when we want elements in a sorted order.'),
(465, 124, 'It is a Set implemented when we want elements in a tree based order.'),
(466, 124, 'It is a Set implemented when we want elements in a binary tree format.'),
(467, 124, 'It is a Set implemented when we want elements in a hiearchical order.'),
(468, 125, 'type'),
(469, 125, 'object'),
(470, 125, 'Both of the above.'),
(471, 125, 'None of the above.'),
(472, 126, 'Invoke its suspend() method.'),
(473, 126, 'Invoke its sleep() method.'),
(474, 126, 'All of the above.'),
(475, 127, 'Always when try block get executed, no matter exception occured or not.'),
(476, 127, 'Always when a method get executed, no matter exception occured or not.'),
(477, 127, 'Always when a try block get executed, if exception do not occur.'),
(478, 127, 'Only when exception occurs in try block code.');

-- --------------------------------------------------------

--
-- Table structure for table `dum_sc`
--

CREATE TABLE IF NOT EXISTS `dum_sc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `teach_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `dum_sc`
--

INSERT INTO `dum_sc` (`id`, `stud_id`, `qid`, `teach_id`) VALUES
(26, 22, 114, 8),
(27, 22, 70, 8),
(28, 22, 30, 8),
(29, 22, 76, 8),
(30, 22, 98, 8),
(31, 22, 36, 8),
(32, 22, 5, 8),
(33, 22, 20, 8),
(34, 22, 2, 8),
(35, 22, 41, 8),
(36, 22, 117, 8),
(37, 22, 116, 8),
(38, 22, 115, 8),
(39, 23, 117, 8),
(40, 23, 115, 8),
(41, 23, 114, 8),
(42, 23, 116, 8);

-- --------------------------------------------------------

--
-- Table structure for table `finishquestion`
--

CREATE TABLE IF NOT EXISTS `finishquestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `finishquestion`
--


-- --------------------------------------------------------

--
-- Table structure for table `list_item`
--

CREATE TABLE IF NOT EXISTS `list_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `list_item`
--

INSERT INTO `list_item` (`id`, `teacher_id`, `score`, `item`) VALUES
(3, 8, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `qtitle`
--

CREATE TABLE IF NOT EXISTS `qtitle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `tid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `qtitle`
--

INSERT INTO `qtitle` (`id`, `title`, `cat`, `tid`) VALUES
(1, 'sasssasas', 'Grammar', 1),
(9, 'fill in the blanks mani', 'Grammar', 1),
(19, 'testing', 'Grammar', 8),
(21, 'Chapter I', 'Java', 9),
(24, 'Chapter I', 'Python', 9);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `disc` datetime NOT NULL,
  `cat` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `num_use` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=128 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`, `teacher_id`, `date`, `status`, `disc`, `cat`, `title`, `exam_type`, `num_use`) VALUES
(1, 'My best friend lives ____ Boretz Road. ', 'on', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(2, 'Since he met  his new girlfriend, Juan never seems to be _____ home.', 'at', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(3, 'The child responded to his mother’s demands _____ throwing a tantrum. ', 'by', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(4, 'I think she spent the entire afternoon _______ the phone.', 'on', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(5, 'I will wait ______6:30, but then I’m going home.', 'until', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(6, 'The police caught the thief _____ the corner of the Cascade and Plum Streets.', 'at', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(7, 'My fingers were injured so my sister had to write the note ___me.', 'for', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(8, 'What are the main ingredients ____ this casserole?', 'of', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(9, 'My best friend, John, is named _____ his great-grandfather.', 'after', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(10, 'Grandpa stayed up _____ two in the morning.', 'until', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(11, 'My parents have been married _____forty-nine years.', 'for', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(12, 'He usually travels to Philadelphia ______ train.', 'by', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(13, 'You frequently see this kind of violence _____ television.', 'on', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(14, 'I told Mom we’d be home ____an hour or so.', 'in', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(15, 'I was visiting my best friend __ the hospital.', 'in', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(16, 'I’ll see you ____home when I get there.', 'at', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(17, 'It’s been snowing ____ Christmas morning.', 'since', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(18, 'I’m not interested _____buying new car now.', 'for', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(19, 'Some of the votes ______ to have been miscounted. ', 'seems', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(20, 'The tornadoes that tear through this country every spring ______more than just nuisance.', 'are', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(21, 'Some of the grain _____ to be contaminated.', 'appears', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(22, 'Three-quarters  of the student body ______against the tuition hike.', 'is', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(23, 'The students and instructors each ______ for a new facility by next year.', 'hope', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(24, 'Most of the milk ____gone bad. Six gallons of milk _____still in the refrigerator', 'has-are', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(25, 'A high percentage of the population ______voting for the new school. ', 'is', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(26, '______ shall I say is calling?', 'who', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(27, '___ hour ago we met ___ history teacher. ', 'a/an', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(28, 'Sentences can be broken down into: ', 'Clauses', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(29, 'Charles and ___ are attending the conference. ', 'I', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(30, 'Homophones are: ', 'two or more words that share the same pronunciation but have different meanings', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 9),
(91, 'The car lost one of ___ wheels. ', 'its', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(92, 'Her speech was wonderful. She received many ____________. ', 'compliments', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(93, 'The same problem happened ______________. ', 'every day', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(94, 'John remained ________ for the rest of the lesson. ', 'quiet', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(95, 'The men forgot ______ meal yesterday.', 'their', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(96, '_______ a liar! ', 'You’re', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(97, 'He prefers to wear _______ clothing when exercising. ', 'loose', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(98, 'Everything is going to be ___________.', 'all right', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(99, 'It didn’t turn out the way we wanted, _________. ', 'though', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(100, 'Please, __________ my excuses!', 'accept', 1, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'fill in the blanks mani', 'finalexam', 6),
(108, 'My best friend lives ____ Boretz Road. ', 'on', 3, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'sasssasas', 'finalexam', 6),
(114, 'testing1', '1', 8, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'testing', 'finalexam', 11),
(115, 'testing2', '2', 8, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'testing', 'finalexam', 11),
(116, 'testing3', '3', 8, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'testing', 'finalexam', 11),
(117, 'testing4', '4', 8, '2012/09/24', 'activate', '0000-00-00 00:00:00', 'Grammar', 'testing', 'finalexam', 11),
(119, 'What is correct syntax for main method of a java class?', 'public static void main(String[] args)', 9, '2019/04/21', 'activate', '0000-00-00 00:00:00', 'Java', 'Chapter I', 'regularquiz', 1),
(120, 'What is the size of long variable?', '64 bit', 9, '2019/04/21', 'activate', '0000-00-00 00:00:00', 'Java', 'Chapter I', 'regularquiz', 1),
(121, 'What is the default value of short variable?', '0.0', 9, '2019/04/21', 'activate', '0000-00-00 00:00:00', 'Java', 'Chapter I', 'regularquiz', 1),
(122, 'What is the default value of Boolean variable?', 'false', 9, '2019/04/21', 'activate', '0000-00-00 00:00:00', 'Java', 'Chapter I', 'regularquiz', 1),
(123, 'What is inheritance?', 'It is the process where one object acquires the properties of another.', 9, '2019/04/21', 'activate', '0000-00-00 00:00:00', 'Java', 'Chapter I', 'regularquiz', 1),
(124, 'What is TreeSet Interface?', ' It is a Set implemented when we want elements in a sorted order.', 9, '2019/04/21', 'deactivate', '0000-00-00 00:00:00', 'Java', 'Chapter I', 'regularquiz', 1),
(125, 'Static binding uses which information for binding?', 'type', 9, '2019/04/21', 'deactivate', '0000-00-00 00:00:00', 'Java', 'Chapter I', 'regularquiz', 1),
(126, 'Which is the way in which a thread can enter the waiting state?', 'All of the above.', 9, '2019/04/21', 'deactivate', '0000-00-00 00:00:00', 'Java', 'Chapter I', 'regularquiz', 1),
(127, ' When finally block gets executed?', 'Always when try block get executed, no matter exception occured or not.', 9, '2019/04/21', 'deactivate', '0000-00-00 00:00:00', 'Java', 'Chapter I', 'regularquiz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `correct` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `stud_id`, `date`, `correct`, `item`, `qid`) VALUES
(1, 22, '04/21/19', 0, 1, 117),
(2, 22, '04/21/19', 1, 1, 116),
(3, 22, '04/21/19', 1, 1, 115),
(4, 23, '04/21/19', 0, 1, 117),
(5, 23, '04/21/19', 0, 1, 115),
(6, 23, '04/21/19', 1, 1, 114),
(7, 23, '04/21/19', 0, 1, 116);

-- --------------------------------------------------------

--
-- Table structure for table `sharequestion`
--

CREATE TABLE IF NOT EXISTS `sharequestion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sharequestion`
--


-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `bday` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `teacher` int(11) NOT NULL,
  `mem_status` varchar(300) NOT NULL,
  `log_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `mname`, `bday`, `address`, `zipcode`, `gender`, `status`, `email`, `username`, `password`, `contact`, `teacher`, `mem_status`, `log_status`) VALUES
(1, 'Stephen', 'Jambonganan', 'Chua', '1991-06-12', 'Talisay City', '6116', 'Male', 'Single', 'stephen@yahoo.com', 'tep', 'tep', 4444404, 2, 'inactive', 1),
(2, 'Rolando', 'Raganas', 'Villaflor', '2012-09-07', 'Bacolod City', '6100', 'Male', 'Single', 'rolando@yahoo.com', 'rolando', 'rolando', 90946543, 1, 'active', 1),
(3, 'Denson', 'Lim', 'Chuck', '1991-04-10', 'Bacolod City', '6100', 'Male', 'Single', 'denson@yahoo.com', 'dens', 'dens', 4442255, 2, 'inactive', 1),
(4, 'Jason', 'Ferrer', 'Uy', '1991-09-02', 'Bacolod City', '6100', 'Male', 'Married', 'jason@gmail.com', 'jason', 'jason', 2147483647, 1, 'inactive', 1),
(5, 'Romar', 'Dasilao', 'Kalep', '2012-09-06', 'Bacolod City', '6100', 'Male', 'Single', 'romar@yahoo.com', 'romar', 'romar', 92134543, 3, 'inactive', 1),
(6, 'Milca', 'Aquino', 'Mana-ay', '1999-08-09', 'Bacolod City', '6100', 'Female', 'Single', 'milca@yahoo.com', 'milca', 'milca', 2147483647, 4, 'inactive', 1),
(7, 'Jigs', 'Selomandin', 'Yu', '1991-09-03', 'Bacolod City', '6100', 'Male', 'Single', 'jigs@gmail.com', 'jigs', 'jigs', 2147483647, 1, 'inactive', 1),
(8, 'Ryan', 'Tupas', 'Magallanes', '2012-09-07', 'Bacolod City', '6100', 'Male', 'Single', 'ryan@yahoo.com', 'ryan', 'ryan', 923212211, 3, 'inactive', 1),
(9, 'Paolo', 'Jereza', 'Jamero', '1991-09-04', 'Bacolod City', '6100', 'Male', 'Single', 'paolo@gmail.com', 'paolo', 'paolo', 2147483647, 1, 'inactive', 1),
(10, 'Speed', 'Tanque', 'Gico', '1991-09-09', 'Palawan', '6321', 'Male', 'Single', 'speed@yahoo.com', 'speed', 'speed', 2147483647, 4, 'inactive', 1),
(11, 'Faylon', 'Europa', 'Bro', '1991-11-15', 'Bacolod City', '6100', 'Male', 'Single', 'faylon@yahoo.com', 'fay', 'fay', 4423698, 2, 'inactive', 1),
(13, 'Ralph', 'Macabenta', 'Ramos', '2012-10-19', 'Bacolod City', '6100', 'Male', 'Single', 'ralph@yahoo.com', 'ralph', 'ralph', 92134987, 3, 'inactive', 1),
(14, 'Keren', 'Gicalde', 'Lucas', '1991-09-06', 'Bacolod City', '6100', 'Female', 'Single', 'keren@gmail.com', 'keren', 'keren', 2147483647, 1, 'inactive', 1),
(15, 'Jam', 'Pido', 'Empedrado', '1985-09-02', 'Bacolod City', '6632', 'Female', 'Single', 'Jam@yahoo.com', 'jam', 'jam', 2147483647, 4, 'inactive', 1),
(16, 'Angela', 'Puntal', 'Villanueva', '1991-01-24', 'Bacolod City', '6100', 'Female', 'Single', 'anj@yahoo.com', 'anj', 'anj', 4523698, 2, 'inactive', 1),
(17, 'Kamille', 'Gayanelo', 'Gilbuela', '1995-09-04', 'Bacolod City', '6100', 'Female', 'Single', 'kamille@gmail.com', 'kamille', 'kamille', 2147483647, 1, 'inactive', 1),
(18, 'Jeysa', 'Reyes', 'Villa', '2012-06-04', 'Bacolod City', '6100', 'Female', 'Single', 'jeysa@yahoo.com', 'jeysa', 'jeysa', 921765087, 3, 'inactive', 1),
(19, 'Francis', 'Jalando-on', 'niel', '2005-08-28', 'Iloilo City', '3411', 'Male', 'Married', 'francis@yahoo.com', 'francis', 'francis', 2147483647, 4, 'inactive', 1),
(20, 'Grace', 'Rebollos', 'Lagos', '1991-06-17', 'Iloilo City', '6100', 'Female', 'Single', 'grace@yahoo.com', 'grace', 'grace', 2147483647, 4, 'inactive', 1),
(21, 'Cai', 'Chua', 'Adara', '1991-10-04', 'Bacolod City', '6100', 'Female', 'Single', 'cai@yahoo.com', 'cai', 'cai', 4896532, 2, 'inactive', 1),
(22, 'y', 'y', 'y', '2012-09-24', 'y', '7878', 'Male', 'Single', 'hghghb@se.com', 'y', 'y', 87878787, 8, 'active', 2),
(23, 'mg', 'mg', 'mg', '2019-04-02', 'ygn', '123466', 'Male', 'Single', 'mgmg@gmail.com', 'mgmg', 'mgmg', 956898522, 9, 'active', 2),
(24, 'naing', 'naing', '-', '2019-04-04', 'ygn', '95', 'Male', 'Single', 'naing@gmail.com', 'naing', 'naing', 956898522, 9, 'active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stud_scores`
--

CREATE TABLE IF NOT EXISTS `stud_scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `date` varchar(38) NOT NULL,
  `score` varchar(30) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `examtype` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stud_scores`
--

INSERT INTO `stud_scores` (`id`, `name`, `date`, `score`, `cat`, `title`, `examtype`) VALUES
(1, 22, '09/24/12', '40%', 'Grammar', 'testing', 'finalexam'),
(2, 23, 'Monday, April 22, 2019, 6:11 pm', '71 %', 'Java', 'Chapter I', 'regularquiz');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `bday` varchar(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `mem_status` varchar(300) NOT NULL,
  `log_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fname`, `lname`, `mname`, `bday`, `address`, `zipcode`, `gender`, `status`, `email`, `username`, `password`, `contact`, `pic`, `mem_status`, `log_status`) VALUES
(1, 'Josh', 'Gayanelo', 'Jeruta', '1991-12-10', 'Bacolod City', '6100', 'Male', 'Single', 'joshgayanelo@gmail.com', 'josh', 'josh', 2147483647, 'profilepic/0820173.jpg', 'active', 1),
(2, 'Ivan', 'Indon', 'Amolo', '1991-11-24', 'Blk 22, Bata Subdivision, Bacolod City', '6100', 'Male', 'Single', 'iamtraneeeXIII@yahoo.com', 'ivan', 'ivan', 2147483647, 'profilepic/0922282.jpg', 'inactive', 1),
(3, 'Juviell', 'Villanueva', 'Amit', '1990-09-08', 'georgina homes, Bacolod City', '6116', 'Male', 'Single', 'villanueva@yahoo.com', 'Juviell', '11111', 2147483647, 'profilepic/0821448.jpg', 'active', 1),
(4, 'Kris Justin', 'Daniel', 'Cordova', '1991-07-03', 'Bacolod City', '6100', 'Male', 'Single', 'justin_dnl@yahoo.com', 'justin_dnl', 'justin', 2147483647, 'profilepic/0822387.jpg', 'inactive', 1),
(5, 'Test', 'Teacher', 'qwerty', '2012-09-18', 'Bacolod City', '6100', 'Male', 'Single', 'test@gmail.com', 'test_teacher', '12345', 12345, 'profilepic/0820173.jpg', 'inactive', 1),
(6, 'jhjhjh', 'jhjhjhjh', 'jhjhjhj', '2012-09-20', 'kjkjkj', '9898989', 'Male', 'Single', 'uiu@iuiu.com', 'admin', 'admin', 9889898, 'profilepic/wire_transfer_256.png', '', 0),
(7, 'argie', 'policarpio', '', '2010-07-06', 'ssasa', '2323', 'Male', 'Single', '2323@2122.com', 'admin', 'admin', 3232323, 'profilepic/wire_transfer_256.png', 'active', 2),
(8, 'h', 'h', 'h', '2012-09-24', 'h', '7667', 'Male', 'Single', 'gfgvgv@drdr.com', 'h', 'h', 67676767, 'profilepic/wire_transfer_256.png', 'active', 1),
(9, 'Zayar', 'Phyo', '-', '2019-04-04', 'ygn', '95', 'Male', 'Single', 'asdf@gmail.com', 'zayar', 'zayar', 2147483647, 'profilepic/Penguins.jpg', 'active', 1),
(13, 'hlaing', 'hlaing', 'a', '2019-04-05', 'oo', '95', 'Female', 'Single', 'hlaing@gmail.com', 'a', 'a', 8888, '', 'active', 1),
(18, 'hnin', 'pwint', 'b', '2019-04-04', 'oo', '95', 'Female', 'Single', 'hnin@gmail.com', 'b', 'b', 1111, '', 'active', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
