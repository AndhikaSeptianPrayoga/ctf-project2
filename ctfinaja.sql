-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 01:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctfinaja`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetUserRankings` ()   BEGIN
    SELECT 
        u.id_user,
        u.username,
        COALESCE(SUM(c.poin), 0) AS total_points,
        RANK() OVER (ORDER BY COALESCE(SUM(c.poin), 0) DESC) AS rank
    FROM 
        users u
    LEFT JOIN 
        solves s ON u.id_user = s.id_user
    LEFT JOIN 
        challenges c ON s.id_chall = c.id_chall
    GROUP BY 
        u.id_user, u.username
    ORDER BY 
        total_points DESC;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'Programming'),
(2, 'Web Exploit'),
(3, 'Cryptography'),
(4, 'OSINT');

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `id_chall` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `descript` text NOT NULL,
  `id_category` int(11) NOT NULL,
  `flag` varchar(50) NOT NULL,
  `poin` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`id_chall`, `title`, `descript`, `id_category`, `flag`, `poin`, `status`) VALUES
(118, 'Melacak Hengker', '<p>Anda adalah seorang digital forensik investigator yang menangani kasus peretasan satelit china oleh MR.Bucchaereli. Anda diberikan sebuah bahan petunjuk oleh informan rekan Anda, Anda diminta untuk melacak perangkat yang digunakan oleh peretas yang bernama MR.Bucchaereli itu.<br><br><a href=\"https://ctf.akbarwiran.my.id/assets/uploads/test.jpg\" target=\"_blank\">BAHAN PETUNJUK KASUS</a></p>', 4, 'CTFinAJA{KomputerNasa}', 10, 1),
(126, 'Kijang Satu', '<p>Tolong terjemahkan kode aparatur negara ini, ada Intel yang sedang mengawasi Anda!</p>', 3, 'CTFinAJA{aman}', 10, 1),
(127, 'Binary', '<p>Terjemahkan binary tersebut..</p>', 3, 'CTFinAJA{tobat}', 5, 1),
(128, 'Pramuka', '<p>Terjemahkan dong Maniezz</p>', 2, 'CTFinAJA{hell0}', 5, 1),
(129, 'saya ikan', 'tolong terjemahkan bahasa saya', 1, 'CTFinAJA{k3l4z_484n6kuh}', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id_file` int(11) NOT NULL,
  `id_chall` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id_file`, `id_chall`, `file_name`) VALUES
(55, 129, 'flag.txt');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id_notif` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id_notif`, `title`, `description`, `status`) VALUES
(16, 'About CTF', '<p><b>Apa itu Capture The Flag (CTF)?</b></p><p>Capture The Flag (CTF) adalah kompetisi keamanan cyber yang menantang peserta untuk menyelesaikan serangkaian tantangan untuk mencari \"bendera\" atau flag. Bendera ini bisa berupa teks, kode, atau file yang disembunyikan di berbagai jenis tantangan, seperti pemrograman, steganografi, analisis forensik, dan lainnya.</p><p><br></p><p><b>Bagaimana Cara Berpartisipasi?</b></p><p>Para peserta biasanya bergabung dalam tim atau mengikuti secara individu untuk menyelesaikan tantangan yang disediakan dalam berbagai kategori seperti web, OSINT (Open Source Intelligence), reverse engineering, programming, miscellaneous (misc), steganografi, forensic, dan banyak lagi. Mereka akan menggunakan pengetahuan dan keterampilan mereka dalam keamanan komputer untuk menemukan solusi untuk setiap tantangan.</p><p><br></p><p><b>Mengapa CTF Penting?</b></p><p>CTF adalah cara yang bagus untuk mengasah keterampilan dalam keamanan cyber, serta mempelajari teknik-teknik baru dan berinteraksi dengan komunitas keamanan. Selain itu, CTF juga membantu meningkatkan pemahaman tentang kerentanan keamanan yang mungkin ada dalam sistem dan aplikasi.</p><p><br></p><p><b>Siapa yang Bisa Berpartisipasi?</b></p><p>Siapa pun yang tertarik dalam bidang keamanan cyber, termasuk pemula dan profesional, dapat berpartisipasi dalam CTF. Tidak ada batasan usia atau latar belakang pendidikan untuk ikut serta dalam kompetisi ini.</p><p><br></p><p><b>Ayo Bergabung!</b></p><p>Jika Anda tertarik untuk menguji dan meningkatkan keterampilan keamanan cyber Anda, bergabunglah dalam kompetisi CTF kami dan hadapi tantangan seru dari berbagai kategori! Semakin Anda berlatih, semakin Anda akan berkembang dalam dunia keamanan cyber.</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `solves`
--

CREATE TABLE `solves` (
  `id_solve` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_chall` int(11) NOT NULL,
  `user_flag` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solves`
--

INSERT INTO `solves` (`id_solve`, `id_user`, `id_chall`, `user_flag`, `created_at`, `status`) VALUES
(47350, 18143, 118, 'CTFinAJA{*}', '2024-02-10 22:53:11', 0),
(47351, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-10 22:53:44', 0),
(47352, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-10 22:53:51', 0),
(47353, 18144, 118, 'CTFinAJA{xiaomi}', '2024-02-10 22:54:22', 0),
(47354, 18141, 118, 'CTFinAJA{*}', '2024-02-10 22:55:13', 0),
(47355, 18141, 118, 'CTFinAJA{*}', '2024-02-10 22:55:17', 0),
(47356, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-10 22:55:21', 0),
(47357, 18141, 118, 'CTFinAJA{*}', '2024-02-10 22:55:39', 0),
(47358, 18141, 118, 'CTFinAJA{*}', '2024-02-10 22:56:42', 0),
(47359, 18141, 118, 'CTFinAJA{kunci motor}', '2024-02-10 22:57:46', 0),
(47360, 18141, 118, 'CTFinAJA{kunci}', '2024-02-10 22:57:52', 0),
(47361, 18141, 118, 'CTFinAJA{jawaban}', '2024-02-10 22:58:02', 0),
(47362, 18141, 118, 'CTFinAJA{kunci}', '2024-02-10 22:58:48', 0),
(47363, 18141, 118, 'CTFinAJA{kunci}', '2024-02-10 22:58:51', 0),
(47364, 18141, 118, 'CTFinAJA{kunci motor}', '2024-02-10 22:59:01', 0),
(47365, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-10 23:00:36', 0),
(47366, 18144, 118, 'CTFinAJA{xiaomi}', '2024-02-10 23:01:03', 0),
(47367, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-10 23:01:09', 0),
(47368, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-10 23:06:00', 0),
(47369, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-10 23:06:32', 0),
(47370, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-10 23:07:15', 0),
(47371, 18144, 118, 'CTFRST{Xiaomi}', '2024-02-10 23:10:56', 0),
(47372, 18144, 118, 'CTFRST{Xiaomi}', '2024-02-10 23:14:35', 0),
(47373, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-10 23:15:04', 0),
(47374, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-11 00:32:20', 0),
(47375, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-11 00:32:30', 0),
(47376, 18144, 118, 'CTFinAJA{Xiaomi}', '2024-02-11 01:59:49', 0),
(47377, 18145, 118, 'CTFinAJA{XXiaomi}', '2024-02-11 07:27:18', 0),
(47378, 18145, 118, 'CTFinAJA{XXiaomi}', '2024-02-11 07:27:19', 0),
(47381, 18145, 119, 'CTFinAJA{tes}', '2024-02-11 07:36:38', 1),
(47383, 18145, 120, 'CTFRST{oke}', '2024-02-11 07:45:02', 1),
(47384, 18145, 121, 'CTFinAJA{tes}', '2024-02-11 07:53:41', 1),
(47385, 18145, 122, 'CTFinAJA{tes}', '2024-02-11 07:58:47', 1),
(47386, 18145, 123, 'CTFinAJA{tes}', '2024-02-11 08:01:31', 1),
(47387, 18145, 124, 'CTFinAJA{tges}', '2024-02-11 08:03:37', 0),
(47388, 18145, 124, 'CTFinAJA{tges}', '2024-02-11 08:03:40', 0),
(47389, 18145, 124, 'CTFinAJA{tehs}', '2024-02-11 08:06:29', 0),
(47390, 18145, 124, 'CTFinAJA{tehs}', '2024-02-11 08:06:33', 0),
(47391, 18145, 124, 'CTFinAJA{tehs}', '2024-02-11 08:06:40', 0),
(47392, 18145, 124, 'CTFinAJA{tegs}', '2024-02-11 08:07:26', 0),
(47393, 18145, 124, 'CTFinAJA{tegs}', '2024-02-11 08:07:31', 0),
(47394, 18145, 124, 'CTFinAJA{tegs}', '2024-02-11 08:07:37', 0),
(47395, 18145, 124, 'CTFinAJA{tegs}', '2024-02-11 08:07:40', 0),
(47396, 18145, 124, 'CTFinAJA{teys}', '2024-02-11 08:08:53', 0),
(47397, 18145, 124, 'CTFinAJA{teys}', '2024-02-11 08:08:56', 0),
(47398, 18145, 124, 'CTFinAJA{teys}', '2024-02-11 08:08:58', 0),
(47399, 18145, 124, 'CTFinAJA{teys}', '2024-02-11 08:09:01', 0),
(47400, 18145, 124, 'CTFinAJA{teys}', '2024-02-11 08:09:29', 0),
(47401, 18145, 124, 'CTFinAJA{tegs}', '2024-02-11 08:11:54', 0),
(47402, 18145, 124, 'CTFinAJA{thes}', '2024-02-11 08:12:20', 0),
(47403, 18145, 124, 'CTFinAJA{thes}', '2024-02-11 08:12:21', 0),
(47404, 18145, 124, 'CTFinAJA{thes}', '2024-02-11 08:12:25', 0),
(47405, 18145, 124, 'CTFinAJA{thes}', '2024-02-11 08:12:26', 0),
(47406, 18145, 124, 'CTFinAJA{thes}', '2024-02-11 08:12:28', 0),
(47407, 18145, 124, 'CTFinAJA{thes}', '2024-02-11 08:12:29', 0),
(47408, 18145, 124, 'CTFinAJA{thes}', '2024-02-11 08:12:31', 0),
(47409, 18145, 124, 'CTFinAJA{thes}', '2024-02-11 08:12:32', 0),
(47410, 18145, 124, 'CTFinAJA{tesh}', '2024-02-11 08:13:19', 0),
(47411, 18145, 124, 'CTFinAJA{tehhs}', '2024-02-11 08:14:22', 0),
(47412, 18145, 124, 'CTFinAJA{tehhs}', '2024-02-11 08:15:42', 0),
(47413, 18145, 124, 'CTFinAJA{tehs}', '2024-02-11 08:17:31', 0),
(47414, 18145, 124, 'CTFinAJA{tehs}', '2024-02-11 08:17:35', 0),
(47415, 18145, 124, 'CTFinAJA{tehs}', '2024-02-11 08:17:56', 0),
(47416, 18145, 124, 'CTFinAJA{uu}', '2024-02-11 08:26:31', 0),
(47417, 18145, 124, 'CTFinAJA{uu}', '2024-02-11 08:26:35', 0),
(47418, 18145, 124, 'CTFinAJA{uu}', '2024-02-11 08:26:46', 0),
(47419, 18145, 124, 'CTFRST{1}', '2024-02-11 09:01:41', 0),
(47420, 18145, 124, 'CTFRST{tes}', '2024-02-11 09:01:54', 1),
(47421, 18145, 125, 'CTFinAJA{TES}', '2024-02-11 09:10:23', 0),
(47422, 18145, 125, 'CTFinAJA{tess}', '2024-02-11 09:10:41', 0),
(47423, 18145, 125, 'CTFinAJA{tes}', '2024-02-11 09:10:49', 1),
(47424, 18144, 125, 'CTFinAJA{Tesss}', '2024-02-13 11:17:03', 0),
(47425, 18144, 125, 'CTFinAJA{tesss}', '2024-02-13 11:17:11', 0),
(47426, 18144, 125, 'CTFinAJA{tes}', '2024-02-13 11:17:14', 1),
(47427, 18147, 125, 'CTFinAJA{tes}', '2024-02-13 11:21:21', 1),
(47428, 18147, 118, 'CTFinAJA{memek}', '2024-02-13 11:26:27', 0),
(47429, 18147, 118, 'CTFinAJA{tt}', '2024-02-13 15:41:11', 0),
(47430, 18147, 118, 'CTFinAJA{tt}', '2024-02-13 15:41:13', 0),
(47431, 18147, 118, 'CTFinAJA{tt}', '2024-02-13 15:41:15', 0),
(47432, 18147, 118, 'CTFinAJA{tt}', '2024-02-13 15:41:17', 0),
(47433, 18147, 118, 'CTFinAJA{tt}', '2024-02-13 15:41:18', 0),
(47434, 18147, 118, 'CTFinAJA{tt}', '2024-02-13 15:41:28', 0),
(47435, 18147, 118, 'CTFinAJA{tt}', '2024-02-13 15:41:30', 0),
(47436, 18147, 118, 'CTFinAJA{tt}', '2024-02-13 15:41:32', 0),
(47437, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:05:55', 0),
(47438, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:05:57', 0),
(47439, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:05:59', 0),
(47440, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:00', 0),
(47441, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:01', 0),
(47442, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:02', 0),
(47443, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:03', 0),
(47444, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:04', 0),
(47445, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:05', 0),
(47446, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:06', 0),
(47447, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:07', 0),
(47448, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:09', 0),
(47449, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:11', 0),
(47450, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:12', 0),
(47451, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:13', 0),
(47452, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:14', 0),
(47453, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:15', 0),
(47454, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:16', 0),
(47455, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:17', 0),
(47456, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:19', 0),
(47457, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:20', 0),
(47458, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:20', 0),
(47459, 18147, 118, 'CTFinAJA{kntol}', '2024-02-14 12:06:21', 0),
(47460, 18147, 118, 'CTFinAJA{JEMBOT}', '2024-02-16 11:27:35', 0),
(47461, 18147, 118, 'CTFinAJA{JEMBOT}', '2024-02-16 11:27:37', 0),
(47462, 18147, 118, 'CTFinAJA{JEMBOT}', '2024-02-16 11:27:39', 0),
(47463, 18147, 118, 'CTFinAJA{JEMBOT}', '2024-02-16 11:27:41', 0),
(47464, 18147, 118, 'CTFinAJA{JEMBOT}', '2024-02-16 11:27:42', 0),
(47465, 18148, 118, 'CTFinAJA{Xiaomi}', '2024-02-16 23:30:18', 0),
(47468, 18150, 118, 'zfag', '2024-02-17 00:06:15', 0),
(47470, 18151, 118, 'CTFinAJA{Xiaomi}', '2024-02-17 00:10:37', 0),
(47473, 18153, 127, 'CTFinAJA{Xiaomi}', '2024-02-17 00:52:55', 0),
(47474, 18153, 128, 'CTFinAJA{hell0}', '2024-02-17 00:53:20', 1),
(47475, 18153, 126, 'CTFinAJA{aman}', '2024-02-17 00:53:34', 1),
(47476, 18153, 127, 'CTFinAJA{tobat}', '2024-02-17 00:53:47', 1),
(47477, 18154, 127, 'Lol', '2024-02-17 00:57:21', 0),
(47478, 18152, 127, 'CTFinAJA{tobat}', '2024-02-21 13:09:45', 1),
(47479, 18152, 118, 'CTFinAJA{KomputerNasa}', '2024-02-21 13:14:25', 1),
(47480, 18156, 118, 'southeast', '2024-02-21 14:38:55', 0),
(47481, 18156, 118, 'south east', '2024-02-21 14:39:09', 0),
(47482, 18156, 118, 'South East', '2024-02-21 14:39:16', 0),
(47484, 18157, 128, 'CTFinAJA{HELL0}', '2024-02-21 23:56:06', 0),
(47485, 18157, 128, 'CTFinAJA{HELL0}', '2024-02-21 23:57:14', 0),
(47486, 18157, 128, 'hello', '2024-02-21 23:57:22', 0),
(47488, 18157, 126, 'CTFinAJA{Administrasi-Manajemen-Amanah-Nominasi}', '2024-02-22 00:00:27', 0),
(47489, 18157, 126, 'CTFinAJA{Administrasi-Manajemen-Amanah-Nominasi}', '2024-02-22 00:00:36', 0),
(47490, 18157, 126, 'CTFinAJA{Administrasi-Manajemen-Amanah-Nominasi}', '2024-02-22 00:00:45', 0),
(47491, 18157, 126, 'CTFinAJA{Administrasi-Manajemen-Amanah-Nominasi}', '2024-02-22 00:00:55', 0),
(47492, 18157, 126, 'CTFinAJA{Administrasi-Manajemen-Amanah-Nominasi}', '2024-02-22 00:01:12', 0),
(47493, 18157, 126, 'CTFinAJA{Administrasi-Manajemen-Amanah-Nominasi}', '2024-02-22 00:01:43', 0),
(47494, 18157, 126, 'CTFinAJA{Administrasi-Manajemen-Amanah-Nominasi}', '2024-02-22 00:01:53', 0),
(47495, 18157, 128, 'CTFinAJA{hello}', '2024-02-22 00:04:09', 0),
(47496, 18157, 128, 'CTFinAJA{HELLO}', '2024-02-22 00:05:04', 0),
(47497, 18157, 128, 'CTFinAJA{HELL0}', '2024-02-22 00:05:30', 0),
(47498, 18157, 126, 'CTFinAJA{AMAN}', '2024-02-22 00:06:07', 0),
(47499, 18153, 129, 'CTFinAJA{k3l4z_484n6kuh}', '2024-02-28 13:28:15', 1),
(47500, 18161, 126, 'CTFinAJA{Administrasi-Manajemen-Amanah-Nominasi}', '2024-03-25 13:22:21', 0),
(47501, 18158, 128, 'CTFinAJA{.... . .-.. .-.. -----}', '2024-03-26 03:07:43', 0),
(47502, 18158, 128, '242342', '2024-03-26 03:07:48', 0),
(47503, 18163, 128, 'CTFinAJA{HELL0}', '2024-05-17 22:48:24', 0);

--
-- Triggers `solves`
--
DELIMITER $$
CREATE TRIGGER `after_solve_insert` AFTER INSERT ON `solves` FOR EACH ROW BEGIN
    DECLARE challenge_points INT;
    
   
    SELECT poin INTO challenge_points FROM challenges WHERE id_chall = NEW.id_chall;
    
   
    UPDATE users SET poin = poin + challenge_points WHERE id_user = NEW.id_user;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `file`, `role`) VALUES
(18141, 'FaizalAG', 'd489a3289ecdc847cb67f7a480e6f9fa', 'faizalazzriel@gmail.com', 'img/default-profile.png', 0),
(18152, 'admin', '250301faa7ff245750df7b7bb00553f4', 'admin@ctf.akbarwiran.my.id', 'img/default-profile.png', 1),
(18153, 'Akbar_Wira', '11922c130465a5ef37e2b957b1b1f00d', 'akbarwiranugraha2@gmail.com', 'img/default-profile.png', 0),
(18156, 'andhikap', '390ba5f6b5f18dd4c63d7cda170a0c74', 'andhikapangestu66@gmail.com', 'img/default-profile.png', 0),
(18161, 'faizal', '97404a2d1c5fa01027e2650fff41e108', 'faizalazzriel@gmail.com', 'img/default-profile.png', 0),
(18166, 'jawir', '52bc47a6b56aebf04e2d295225421b24', 'jawir@jawir.com', 'img/1717968935_hengker.jpg', 0),
(18167, 'joni', '1eebfc05efeb8cb09b56f2c504565204', 'joni@joni.com', 'img/default-profile.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id_chall`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `solves`
--
ALTER TABLE `solves`
  ADD PRIMARY KEY (`id_solve`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `challenges`
--
ALTER TABLE `challenges`
  MODIFY `id_chall` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `solves`
--
ALTER TABLE `solves`
  MODIFY `id_solve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47505;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;