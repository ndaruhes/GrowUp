-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 31, 2022 at 01:28 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bncc_competitions_growup`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Itu karena kamu belum mensetting portnya menggunakan server.listen(5000)', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(2, 1, 5, 'Waduh my bad. Terima kasih kak atas bantuannya', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(3, 3, 5, 'Itu disebabkan karena kamu sedang menjalankan port yang sama di server lain', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(4, 3, 6, 'Ohh iya lupa makasih kakak hehehe :)', '2022-03-31 06:22:04', '2022-03-31 06:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'https://i.ibb.co/JqCqz57/data-analyst.png', 'Data Analyst', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(2, 'https://i.ibb.co/YT4WZTK/graphic-design.png', 'Graphic Design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(3, 'https://i.ibb.co/ZYKjMjV/accounting.png', 'Accounting', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(4, 'https://i.ibb.co/TM5Fd0w/data-science.png', 'Data Science', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(5, 'https://i.ibb.co/526GLFQ/ui-ux-design.png', 'UI/UX Design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(6, 'https://i.ibb.co/BcQLYbJ/mobile-development.png', 'Mobile Development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(7, 'https://i.ibb.co/yhY7vmJ/Group-17.png', 'Web Development', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(8, 'https://i.ibb.co/NYf483C/Group-24.png', 'Business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(9, 'https://i.ibb.co/zJRzxxB/Group-26.png', 'Statistic', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(10, 'https://i.ibb.co/CJg90r5/Group-18.png', 'Japanese Language', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(11, 'https://i.ibb.co/60XwnsJ/Group-19.png', 'Chinese Language', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(12, 'https://i.ibb.co/9vbZH82/Group-25.png', 'Mathematic', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it', '2022-03-31 06:22:04', '2022-03-31 06:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) DEFAULT NULL,
  `started_at` date NOT NULL,
  `ended_at` date NOT NULL,
  `max_mentee` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cover`, `title`, `description`, `price`, `started_at`, `ended_at`, `max_mentee`, `rating`, `category_id`, `mentor_id`, `created_at`, `updated_at`) VALUES
(1, 'https://i.ibb.co/mHXjxYX/course-1.png', 'Membuat REST API Menggunakan ExpressJS & MongoDB', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', 1800000, '2022-07-24', '2022-08-30', 30, 5, 7, 1, '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(2, 'https://i.ibb.co/RyPVv6Q/course-2.jpg', 'Full Stack Laravel Development: Framework Terbaik Masa Kini', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', 750000, '2022-04-29', '2022-05-29', 30, 3, 7, 2, '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(3, 'https://i.ibb.co/dKPxpsT/course-3.jpg', 'Tailwind CSS: Membuat Tampilan Website Menjadi Cantik', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', NULL, '2022-04-29', '2022-05-29', 30, 4, 7, 1, '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(4, 'https://i.ibb.co/VCwZNYd/course-4.png', 'PHP & MySQL Pemula: Belajar Dari Dasar Sampai Mahir', 'Belajar lebih jauh mengenai pengertian, fungsi, dan cara kerja dari Express JS pada pengembangan aplikasi di sisi back end secara fleksibel.', 1500000, '2022-04-29', '2022-05-29', 30, 5, 7, 3, '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(5, 'https://i.ibb.co/S5GRjWw/course-5.png', 'Japanese Language: Kelas 1 Bulan Bahasa Jepang 101', 'Cara mudah belajar bahasa jepang mulai dari hiragana sampai katakana untuk kalangan muda sampai tua', NULL, '2022-04-04', '2022-05-04', 30, 4, 10, 4, '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(6, 'https://i.ibb.co/dDgf8g5/introduction-to-kanji-thumbnail.png', 'Paket Lengkap Hiragana, Katakana dan Kanji Untuk Pemula', 'Cara mudah belajar bahasa jepang mulai dari hiragana sampai katakana untuk kalangan muda sampai tua', 350000, '2022-05-14', '2022-06-14', 30, 3, 10, 3, '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(7, 'https://i.ibb.co/dJwfBVG/kanji.png', 'Belajar Kanji dalam Bahasa Jepang Selama 2 Bulan (Pasti Bisa)', 'Cara mudah belajar bahasa jepang mulai dari hiragana sampai katakana untuk kalangan muda sampai tua', 750000, '2022-04-23', '2022-06-23', 30, 4, 10, 1, '2022-03-31 06:22:04', '2022-03-31 06:22:04'),
(8, 'https://i.ibb.co/wBJqYBD/japanesepod101.jpg', 'Belajar Nihongo Dalam 1 Bulan Sampai Mahir', 'Cara mudah belajar bahasa jepang mulai dari hiragana sampai katakana untuk kalangan muda sampai tua', 500000, '2022-07-05', '2022-06-05', 30, 5, 10, 4, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(9, 'https://i.ibb.co/b1dQt1G/1.jpg', 'Chinese Culture: Belajar Budaya & Bahasa Mandarin', 'Belajar Basic dari Bahasa Mandarin: Pengucapan, Pendengaran, Penulisan dan Pendengaran', 250000, '2022-08-10', '2022-10-10', 30, 5, 11, 4, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(10, 'https://i.ibb.co/945CdPZ/video-thumbnail-hsk-courses.jpg', 'HSK Pemula: Belajar HSK 1 - 6 Sampai Mahir', 'Belajar Bahasa Mandarin untuk keperluan bisnis, sekolah dan sehari-hari menggunakan buku HSK', 1500000, '2022-07-08', '2022-12-28', 30, 5, 11, 1, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(11, 'https://i.ibb.co/JjVgNFy/course-6.jpg', 'Chinese Kids: Kelas Bahasa Mandarin Untuk Anak ', 'Belajar Basic dari Bahasa Mandarin: Pengucapan, Pendengaran, Penulisan dan Pendengaran', 980000, '2022-07-08', '2022-12-28', 30, 5, 11, 3, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(12, 'https://i.ibb.co/LkqhVX4/courses-7.jpg', 'Pasti Bisa: Bahasa Mandarin Untuk Pemula', 'Belajar Basic dari Bahasa Mandarin: Pengucapan, Pendengaran, Penulisan dan Pendengaran', 370000, '2022-07-08', '2022-12-28', 30, 5, 11, 2, '2022-03-31 06:22:05', '2022-03-31 06:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `course_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tanya Jawab Pertemuan 1', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(2, 1, 'Tanya Jawab Pertemuan 2', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(3, 1, 'Tanya Jawab Pertemuan 3', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(4, 1, 'Tanya Jawab Pertemuan 4', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(5, 1, 'Tanya Jawab Pertemuan 5', '2022-03-31 06:22:05', '2022-03-31 06:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_10_140633_create_courses_table', 1),
(6, '2022_03_10_141341_create_categories_table', 1),
(7, '2022_03_16_113529_create_sessions_table', 1),
(8, '2022_03_21_071543_create_transactions_table', 1),
(9, '2022_03_30_192738_create_questions_table', 1),
(10, '2022_03_30_192809_create_forums_table', 1),
(11, '2022_03_30_192833_create_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `forum_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `forum_id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Port Tidak Ditemukan', 'Kenapa saat saya menjalankan nodemon app.js tetapi port tidak ditemukan?', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(2, 1, 6, 'Kegunaan Dari HTTP Request', 'Kenapa Http Request tidak berjalan?', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(3, 2, 5, 'Unknown node compiler', 'Halo, kenapa ada error node compiler ya?', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(4, 3, 6, '\"Port 3000 was running\" Tapi Error', 'Sesuai judul, tapi kenapa app nya tidak bisa dijalankan?', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(5, 4, 5, 'File Build Failed', 'Kenapa ketika menjalankan filenya lalu app memberi pesan error seperti pada judul?', '2022-03-31 06:22:05', '2022-03-31 06:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resources` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(11) NOT NULL,
  `done_status` enum('True','False') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `title`, `description`, `meeting_link`, `resources`, `schedule`, `time`, `course_id`, `done_status`, `created_at`, `updated_at`) VALUES
(1, 'Perkenalan NodeJS (Sintaks, Variabel, Dll)', 'Di pertemuan pertama kita akan berkenalan dengan NodeJS, mempelajari sintaks, dan cara menulis variabel', 'https://meet.google.com/cuw-pkau-iux', 'contoh_microservicesmonolithic (1)-CBUbGV4QSR-20220321044331.pdf', '2022-07-24', '09:30', 1, 'False', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(2, 'Perkenalan MongoDB (Table, Query)', 'Di pertemuan kedua kita akan berkenalan dengan MongoDB sekaligus belajar membuat table dan menjalankan query', 'https://meet.google.com/bgh-bckj-ghd', 'contoh_microservicesmonolithic-iUf7OFpkHS-20220321044412.pdf', '2022-07-25', '10:30', 1, 'False', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(3, 'Controller & Middleware', 'Di pertemuan ketiga kita akan menggunakan Controller & Middleware', 'https://meet.google.com/bgh-bckj-ghd', 'contoh_microservicesmonolithic-iUf7OFpkHS-20220321044412.pdf', '2022-07-25', '10:30', 1, 'False', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(4, 'App Management & Database Models', 'Di pertemuan keempat kita akan belajar cara manajemen aplikasi & Model Database', 'https://meet.google.com/bgh-bckj-ghd', 'contoh_microservicesmonolithic-iUf7OFpkHS-20220321044412.pdf', '2022-07-25', '10:30', 1, 'False', '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(5, 'Perkenalan ExpressJS, Framework NodeJS yang Populer', 'Di pertemuan kelima kita akan berkenalan dengan Perkenalan ExpressJS, dimana framework tersebut merupakan salah satu framework NodeJS yang populer', 'https://meet.google.com/bgh-bckj-ghd', 'contoh_microservicesmonolithic-iUf7OFpkHS-20220321044412.pdf', '2022-07-25', '10:30', 1, 'False', '2022-03-31 06:22:05', '2022-03-31 06:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `mentee_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `course_id`, `mentee_id`, `mentor_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(2, 1, 6, 1, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(3, 2, 6, 2, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(4, 2, 5, 2, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(5, 8, 5, 4, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(6, 8, 6, 4, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(7, 8, 7, 4, '2022-03-31 06:22:05', '2022-03-31 06:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('Mentor','Mentee') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Mentee',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhamad Ndaru', 'ndaru@gmail.com', NULL, 'Mentor', '$2y$10$E.ZGcqQ1o5W3A0aEFFWEtuDGUPzvw65JoHSkHg91OUnb1oWZpAajW', NULL, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(2, 'Richard William', 'richard@gmail.com', NULL, 'Mentor', '$2y$10$dNm/aoRn8CFW8kuGVkp7QetD7ZqTSr.HrVfJLSHjwcQ8GH6kaCtRy', NULL, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(3, 'Astrid Dewi', 'astrid@gmail.com', NULL, 'Mentor', '$2y$10$bnQARHigN3B.8MzZctfiIOeTas3Noa2Xn6j0OEjcMYayOBSnbCQWa', NULL, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(4, 'Vaness Barnabas', 'vaness@gmail.com', NULL, 'Mentor', '$2y$10$rW3BXLgmR/stLtOUXMbv/.PcOyl0j8e.QEqE5aPSe5c9zbBGAgpaW', NULL, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(5, 'Jonathan Jansen', 'jansen@gmail.com', NULL, 'Mentee', '$2y$10$4.4RFBgvJk8Qc2GcmU4UauxCenaYlrcolB9DFch7NDc0reti8JVXa', NULL, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(6, 'Albert Barnabas', 'albert@gmail.com', NULL, 'Mentee', '$2y$10$3y1oohjWDK5lQ3lEMWM.OeaCINEVidHUd7ujtmL7sMhfszKsovKKa', NULL, '2022-03-31 06:22:05', '2022-03-31 06:22:05'),
(7, 'Alex Rai', 'alex@gmail.com', NULL, 'Mentee', '$2y$10$e..fM5GbdTrE6rW/CwlVC.QkBBtDFxRECH6E8U503uaEZTxbJRsSy', NULL, '2022-03-31 06:22:06', '2022-03-31 06:22:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
