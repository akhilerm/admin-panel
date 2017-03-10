-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2017 at 04:53 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conjura`
--
CREATE DATABASE IF NOT EXISTS `conjura_spot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `conjura_spot`;
-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(10) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
  `event_name` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `pre_reg` char(2) NOT NULL COMMENT 'y if advance payment required',
  `team` char(2) NOT NULL COMMENT 'y if its a team event',
  `event_display` varchar(50) DEFAULT NULL,
  `lock_event` int(2) DEFAULT '0' COMMENT 'if lock==1 , event is locked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1083;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `amount`, `pre_reg`, `team`, `event_display`, `lock_event`) VALUES
(1001, 'voice_of_conjura', 100, 'n', 'n', 'VOICE OF CONJURA', 0),
(1002, 'unplugged', 400, 'n', 'y', 'UNPLUGGED', 0),
(1003, 'solowestern', 100, 'n', 'n', 'SOLOWESTERN', 0),
(1004, 'overdrive', 400, 'n', 'y', 'OVERDRIVE', 0),
(1005, 'dyad(duet)', 150, 'n', 'y', 'DYAD(DUET)', 0),
(1006, 'agnee', 400, 'n', 'y', 'AGNEE', 0),
(1007, 'dj_war', 500, 'n', 'y', 'DJ WAR', 0),
(1008, 'spot_master', 100, 'n', 'n', 'SPOT MASTER', 0),
(1009, 'reflection', 150, 'n', 'y', 'REFLECTION', 0),
(1010, 'go_solo', 100, 'n', 'n', 'GO SOLO', 0),
(1011, 'choreonight', 1500, 'n', 'y', 'CHOREONIGHT', 0),
(1012, 'monoact', 100, 'n', 'n', 'MONOACT', 0),
(1013, 'mime', 300, 'n', 'y', 'MIME', 0),
(1014, 'hraswa', 500, 'y', 'y', 'HRASWA', 0),
(1015, 'drama', 300, 'n', 'y', 'DRAMA', 0),
(1016, 'love_letter_writing', 50, 'n', 'n', 'LOVE LETTER WRITING', 0),
(1017, 'jam', 50, 'n', 'n', 'JAM', 0),
(1018, 'haiku_writing', 50, 'n', 'n', 'HAIKU WRITING', 0),
(1019, 'debate', 100, 'n', 'n', 'DEBATE', 0),
(1020, 'recitation', 50, 'n', 'n', 'RECITATION', 0),
(1021, 'pencil_sketching', 50, 'n', 'n', 'PENCIL SKETCHING', 0),
(1022, 'painting', 50, 'n', 'n', 'PAINTING', 0),
(1023, 'mehendi', 50, 'n', 'n', 'MEHENDI', 0),
(1024, 'face_painting', 50, 'n', 'n', 'FACE PAINTING', 0),
(1025, 'collage', 50, 'n', 'n', 'COLLAGE', 0),
(1026, 'clay_modelling', 50, 'n', 'n', 'CLAY MODELLING', 0),
(1027, 'mr_and_ms_conjura', 300, 'n', 'n', 'MR & MS CONJURA', 0),
(1028, 'treasure_hunt', 200, 'n', 'y', 'TREASURE HUNT', 0),
(1029, 'graffiti', 100, 'n', 'y', 'GRAFFITI', 0),
(1030, 'hive_mind', 200, 'n', 'y', 'HIVE MIND', 0),
(1031, 'you_know_nothing', 100, 'n', 'y', 'YOU KNOW NOTHING', 0),
(1032, 'badminton', 200, 'n', 'y', 'BADMINTON', 0),
(1033, 'football', 300, 'n', 'y', 'FOOTBALL', 0),
(1034, 'cricket', 400, 'n', 'y', 'CRICKET', 0),
(1035, 'volleyball', 300, 'n', 'y', 'VOLLEYBALL', 0),
(1036, 'chess', 200, 'n', 'n', 'CHESS', 0),
(1037, 'g_coder', 100, 'n', 'n', 'G CODER', 0),
(1038, 'cadwar', 100, 'n', 'n', 'CADWAR', 0),
(1039, 'fabricato', 150, 'n', 'y', 'FABRICATO', 0),
(1040, 'robo_gt', 300, 'n', 'y', 'ROBO GT', 0),
(1041, 'envisage', 100, 'n', 'y', 'ENVISAGE', 0),
(1042, 'creativo', 150, 'n', 'y', 'CREATIVO', 0),
(1043, 'engine_assembly', 150, 'n', 'y', 'ENGINE ASSEMBLY', 0),
(1044, 'contraption', 200, 'n', 'y', 'CONTRAPTION', 0),
(1045, 'aqua_strike', 150, 'n', 'y', 'AQUA STRIKE', 0),
(1046, 'regatta', 100, 'n', 'n', 'REGATTA', 0),
(1047, 'praesentare', 100, 'n', 'y', 'PRAESENTARE', 0),
(1048, 'hackovate', 300, 'n', 'y', 'HACKOVATE', 0),
(1049, 'glow_it_or_blow_it', 100, 'n', 'n', 'GLOW IT OR BLOW IT', 0),
(1050, 'espionage', 300, 'n', 'y', 'ESPIONAGE', 0),
(1051, 'electromaze', 100, 'n', 'n', 'ELECTROMAZE', 0),
(1052, 'task_marathon', 100, 'n', 'y', 'TASK MARATHON', 0),
(1053, 'robowar', 500, 'n', 'y', 'ROBOWAR', 0),
(1054, 'matlab_image_coding', 100, 'n', 'y', 'MATLAB IMAGE CODING', 0),
(1055, 'line_follower', 200, 'n', 'n', 'LINE FOLLOWER', 0),
(1056, 'formula_dr1', 1000, 'n', 'y', 'FORMULA DR1', 0),
(1057, 'instant_coding', 100, 'n', 'n', 'INSTANT CODING', 0),
(1058, 'code_fortress', 100, 'n', 'y', 'CODE FORTRESS', 0),
(1059, 'hack_dr_lanning', 100, 'n', 'n', 'HACK DR LANNING', 0),
(1060, 'fb_quest', 100, 'n', 'n', 'FB QUEST', 0),
(1061, 'alohomora', 100, 'n', 'y', 'ALOHOMORA', 0),
(1062, 'theodo', 100, 'n', 'y', 'THEODO', 0),
(1063, 'sthapati', 100, 'n', 'y', 'STHAPATI', 0),
(1064, 'sahistha_saggha', 200, 'n', 'y', 'SAHISTHA SAGGHA', 0),
(1065, 'contrivir', 100, 'n', 'y', 'CONTRIVIR', 0),
(1066, 'equipo_360', 200, 'n', 'y', 'EQUIPO 360', 0),
(1067, 'terminus_puzzle', 200, 'n', 'y', 'TERMINUS PUZZLE', 0),
(1068, 'innovate_2017', 100, 'n', 'y', 'INNOVATE 2017', 0),
(1069, 'propulsia', 200, 'n', 'y', 'PROPULSIA', 0),
(1070, 'potentia', 100, 'n', 'y', 'POTENTIA', 0),
(1071, 'formula_h', 200, 'n', 'y', 'FORMULA H', 0),
(1072, 'deadlock', 100, 'n', 'y', 'DEADLOCK', 0),
(1073, 'choncord_macro', 200, 'y', 'y', 'CHONCORD MACRO', 0),
(1074, 'choncord_micro', 100, 'y', 'y', 'CHONCORD MICRO', 0),
(1075, 'fabrilis', 100, 'y', 'y', 'FABRILIS', 0),
(1076, 'hustle_n_bustle', 100, 'y', 'y', 'HUSTLE N BUSTLE', 0),
(1077, 'play_around', 200, 'n', 'y', 'PLAY AROUND', 0),
(1078, 'trikal', 100, 'y', 'y', 'TRIKAL', 0),
(1079, 'call_of_duty', 100, 'n', 'n', 'CALL OF DUTY 4 MODERN WARFARE', 0),
(1080, 'fifa_15_legendary', 100, 'n', 'n', 'FIFA 15 LEGENDARY', 0),
(1081, 'fifa_tournament', 100, 'n', 'n', 'FIFA TOURNAMENT', 0),
(1082, 'nfs_most_wanted', 100, 'n', 'n', 'NFS MOST WANTED', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_participants`
--

CREATE TABLE `event_participants` (
  `sno` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `part_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `paid` char(2) NOT NULL,
  `trans_id` varchar(15) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- Table structure for table `event_participants_spot`

CREATE TABLE `event_participants_spot` (
  `sno` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `part_id` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `paid` char(2) NOT NULL,
  `trans_id` varchar(15) NOT NULL,
  `attendance` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `event_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5001;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `college` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL UNIQUE,
  `gender` char(2) NOT NULL,
  `accommodation` char(2) NOT NULL,
  `email` varchar(40) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=11001;

-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE `refund` (
  `sno` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `trans_id` varchar(15) NOT NULL,
  `refund_amt` int(10) NOT NULL,
  `comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `sno` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `event_id` int(10) NOT NULL,
  `head_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1  AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sno` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `part_id` int(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `trans_id` varchar(25) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
