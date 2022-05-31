-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2022 at 05:50 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_scenior`
--
CREATE DATABASE IF NOT EXISTS `easy_scenior` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `easy_scenior`;
-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Heading` varchar(256) NOT NULL,
  `Paragraph` varchar(744) NOT NULL,
  `Image` text NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `Heading`, `Paragraph`, `Image`, `updated_at`, `created_at`) VALUES
(1, 'Join Easy Scenior, upgrade your skills, and learn from experts', 'Easy Senior is a platform for online coaching, where students come together not only to find someone who can tutor them and help with the concepts they\'re stuck on but also to sign up as a tutor themselves!', 'About welcome background.png', '2022-05-29 03:38:14', '0000-00-00 00:00:00'),
(2, 'Our Story', 'Our motivation behind pursuing this project lies in our belief in the fact that every student has his or her own pace of learning. In Pakistan especially, there is a common trend of going to tuition centers and academies in college, to cover the topics which their school/college couldn’t cover, and for extra studying. This leaves the students in the habit of always having a backup plan But after transitioning to universities, these students face trouble while adjusting, and thus resort to seeking help from seniors. So this is where Easy Senior comes in, connecting these students to their peers and seniors, who can guide them in the right direction.', '', '2022-05-29 03:46:22', '0000-00-00 00:00:00'),
(3, 'Top Instructors', 'Our platform provides highly qualified instructors and tutors. They are prepared, set clear and fair expectations, have a positive attitude, are patient with students, and assess their teaching on a regular basis.', 'About Top Instructor.svg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Improve Quickly', 'Easy Senior provides quality-based learning with engagement and motivation to students. Moreover, we maintain students’ attention by perking courses with interesting activities, So that they can excel in their careers.', 'About Improve Quickly.svg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Portable Program', 'We are providing a portable learning platform to students where they can take sessions whenever and from anywhere in the world.', 'About Portable Program.svg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Layla El-Fauly', '', '456892427.png', '2022-05-29 04:55:03', '0000-00-00 00:00:00'),
(7, 'Marc Specter', '', 'About owner (3).png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Yelena Belova', '', 'About owner (2).png', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `titleImage` varchar(700) NOT NULL,
  `desc1` text NOT NULL,
  `img1` varchar(740) NOT NULL,
  `desc2` text NOT NULL,
  `img2` varchar(740) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`blogid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blogid`, `title`, `titleImage`, `desc1`, `img1`, `desc2`, `img2`, `likes`) VALUES
(1, 'Data Science and Machine Learning with Python ', 'Home Blog 1.png', '', '', '', '', 22),
(2, 'Strategies for a Successful Business', 'Home Blog 2.png', '', '', '', '', 100),
(3, 'Entry Test Tips and Tricks - Easy Hacks', 'Home Blog 3.png', '', '', '', '', 53);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_ID`, `cat_name`, `Image`) VALUES
(1, 'Computer Science', 'Computer Science - category.svg'),
(2, 'Electrical Engineering', 'Electrical Engineering - category.svg'),
(3, 'Software Engineering', 'Software Engineering - category.svg'),
(4, 'Business Analytics', 'business Analytics - category.svg'),
(5, 'Architecture Engineering', 'Architecture.svg'),
(6, 'International Relations', 'international.svg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

DROP TABLE IF EXISTS `contact_details`;
CREATE TABLE IF NOT EXISTS `contact_details` (
  `phone_no` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`phone_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`phone_no`, `email`, `address`) VALUES
(516754329, 'info@easyscenior.com', 'Office # 02, Block I, NUST');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `course_ID` int(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `price` int(11) NOT NULL,
  `tutorname` varchar(20) NOT NULL,
  `coverpic` varchar(255) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `lectures` int(10) NOT NULL,
  PRIMARY KEY (`course_ID`) USING BTREE,
  KEY `fk_Course_TutorName` (`tutorname`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_ID`, `coursename`, `desc`, `price`, `tutorname`, `coverpic`, `duration`, `lectures`) VALUES
(1, 'Web Development Full Course', 'The only course you need to become a full-stack web developer. This course covers HTML5, CSS3, JS, ES6, Node, APIs, Mobile & more! Go from Zero skills to building Powerful Web Applications on a highly professional level using the latest 2021 Web Technologies, use a Portfolio of over 15 highly professional websites, Games and Mobile apps you would have developed during the course to take your career to the next level.\r\nUse HTML5, CSS3, Flexbox, Grid & SASS to build website content and add stunning styling and decoration.', 1000, 'Emma_Olivia', 'FC_Course1.png', '2 Hr 30min', 5),
(2, 'Web Development for Beginners', 'An introduction to web development, your first step into the world of full-stack development. Find out if web development is for you with this 5-day course. Learn all about becoming a web developer, from the responsibilities that a web developer performs on a day-to-day basis to the set of skills you\'ll need to succeed in the role. And, of course, you\'ll get your hands dirty with code. You\'ll learn the fundamentals of HTML, CSS, and JavaScript—and you\'ll build your very first website from scratch, all in just 5 days!', 500, 'Emma_Olivia', 'FC_Course2.png', '8 Hr', 8),
(3, 'Flutter Development', 'Whether this is your first time programming, or you\'re coming from another language, we\'ll get you started on the right path.\r\nTake your skills to the next level with the format that works best for you – check out videos, high-quality documentation, codelabs, and more. This course will help you learn new things about Flutter, continue to expand your skills, and stay up to date on the latest announcements and breaking changes.', 1200, 'Noah', 'FC_Course3.png', '12 Hr 45 min', 10),
(4, 'Learn Next Js and land your dream job', 'This amazing course is agoing to give you bite-size information at a time. All the lectures are well organized and distributed sequentially. It’s going to give you information regarding what you need to know along with all the examples as well.\r\nThis course is one of the top-rated courses to learn vue.js, even critics have approved this course to help you to gain your skills.\r\nThings that are going to be covered in this course are Data Binding Conditionals Computed Properties HTTP Routing Lists.\r\nAll those topics are well distributed among lectures and they’ll keep you updated with comments and responses from other users as well. All you need to do is have little JavaScript knowledge to start this course.', 1500, 'Elijah13', 'FC_Course4.png', '5 hr 10 min', 7),
(5, 'How to do business Analytics', 'This business analytics course will help you learn all the necessary skills you need to get started in this field. Business analytics is a complicated sector that deters many people from entering it. Our course will give you all the tools you need to simplify this sector for yourself. \r\nThe course material is suitable for students and professionals who want to learn about business analytics. It covers the fundamentals of this field so you can make progress comfortably. The course lasts for six weeks, and you would only have to invest 30 minutes every day during this period.', 2000, 'Ava', 'FC_Course5.png', '1 Hr', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course_ratings`
--

DROP TABLE IF EXISTS `course_ratings`;
CREATE TABLE IF NOT EXISTS `course_ratings` (
  `course_id` int(11) NOT NULL,
  `ratings` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_ratings`
--

INSERT INTO `course_ratings` (`course_id`, `ratings`) VALUES
(1, 4),
(2, 3),
(3, 4),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cust_review_to_tutor`
--

DROP TABLE IF EXISTS `cust_review_to_tutor`;
CREATE TABLE IF NOT EXISTS `cust_review_to_tutor` (
  `rvw_id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(20) NOT NULL,
  `tutor` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`rvw_id`),
  KEY `fk_rev_Username` (`student`),
  KEY `fk_rev_tutor` (`tutor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_review_to_tutor`
--

INSERT INTO `cust_review_to_tutor` (`rvw_id`, `student`, `tutor`, `content`, `rating`) VALUES
(1, 'Smiith', 'Ava', 'Wonderfull! Answeres all my queries, I have no doubts left. Recommended.', 4),
(2, 'Mariia', 'Ava', 'Wow! what an excellent service, I love it! This is simply unbelievable! It fits my needs perfectly', 5),
(3, 'Emilia', 'Ava', 'I score the highest marks in the exams because of you ma\'am, Thank you so much!', 5),
(4, 'Smiith', 'Elijah13', 'Thank Your sir, you help a lot.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(300) NOT NULL,
  `answer` varchar(300) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `updated_at`, `created_at`) VALUES
(1, 'Can I choose my own tutor?', 'Yes, if you yourself find a tutor on our website from your field, you can book it right away by book session at the bottom of every tutor\'s profile.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'How do i sign up as a tutor?', 'You can sign up as a tutor by \"Become a tutor\" option on our Home page and fill in the required details.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'How long is one session, or is it adjusted according to our requirement.', 'Session details and duration are mentioned on our site, you have to select according to that.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Is it online or in person?', 'Easy Scenior is an online learning platform.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'What time are the sessionn held once we book a tutor?', 'Time slot is decided as per your and tutor\'s mutual coordination and availability.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubHeading` varchar(100) NOT NULL,
  `Heading` varchar(300) NOT NULL,
  `Paragraph` varchar(740) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `SubHeading`, `Heading`, `Paragraph`) VALUES
(1, 'EASY SCENE HAI', 'A learning experience like never before', 'Want help in university or need to prepare for an exam or entry test? Book sessions as per your time and availability, we make education easier, accessible and affordable!'),
(2, '', 'Our Popular Categories', 'Skills that take you months to learn to buy our courses and learn them within weeks.'),
(3, 'BECOME A TUTOR', 'Join With Easy Scenior as an Instructor', 'Join us to help others excel in their student life and earn some extra cash.');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `pkg_ID` int(11) NOT NULL AUTO_INCREMENT,
  `duration` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`pkg_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pkg_ID`, `duration`, `price`, `status`) VALUES
(1, '1 Hour', 500, 'Basic'),
(2, '5 Hours', 2000, 'Silver'),
(3, '20 Hours', 8000, 'Gold');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `session_ID` int(11) NOT NULL AUTO_INCREMENT,
  `tutor` varchar(20) NOT NULL,
  `student` varchar(20) NOT NULL,
  `pckg` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`session_ID`),
  KEY `fk_session_tutor` (`tutor`),
  KEY `fk_session_student` (`student`),
  KEY `fk_session_pkg` (`pckg`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_ID`, `tutor`, `student`, `pckg`, `updated_at`, `created_at`) VALUES
(1, 'Elijah13', 'Lucas', 2, '2022-05-29 15:55:38', '2022-05-29 15:55:38'),
(2, 'Ava', 'Lucas', 1, '2022-05-29 15:55:38', '2022-05-29 15:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `student_enrolled_in_course`
--

DROP TABLE IF EXISTS `student_enrolled_in_course`;
CREATE TABLE IF NOT EXISTS `student_enrolled_in_course` (
  `enrolledID` int(11) NOT NULL AUTO_INCREMENT,
  `st_username` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`enrolledID`),
  KEY `fk_enroll_st` (`st_username`),
  KEY `fk_enroll_Course` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_enrolled_in_course`
--

INSERT INTO `student_enrolled_in_course` (`enrolledID`, `st_username`, `course_id`, `updated_at`, `created_at`) VALUES
(1, 'Smiith', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Emilia', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Mariia', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Lucas', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Lucas', 4, '2022-05-31 00:20:05', '2022-05-31 00:20:05'),
(9, 'Lucas', 5, '2022-05-31 03:19:46', '2022-05-31 03:19:46'),
(11, 'Lucas', 3, '2022-05-31 05:51:34', '2022-05-31 05:51:34');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `testimonial_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `content` varchar(255) NOT NULL,
  `ratings` int(11) NOT NULL,
  PRIMARY KEY (`testimonial_id`),
  KEY `fk_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `username`, `content`, `ratings`) VALUES
(5, 'Smiith', 'I like courses, and online classes more and more each day because it makes my life a lot easier', 5),
(6, 'Mariia', 'Definitely worth the investment. I\'d be lost without a mentor', 4),
(7, 'Emilia', 'Wow-what excellent service, I love it! This is simply unbelievable! It fits my needs perfectly', 5),
(8, 'Lucas', 'Thanks, Easy Senior! You guys rock! It fits our needs perfectly. I will refer everyone I know.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tutorusername` varchar(20) NOT NULL,
  `introduction` varchar(1000) NOT NULL,
  `expertise` varchar(1000) NOT NULL,
  `major` int(11) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`tutorusername`),
  KEY `tutor_fk` (`tutorusername`),
  KEY `fk_category` (`major`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tutorusername`, `introduction`, `expertise`, `major`, `institute`, `updated_at`, `created_at`) VALUES
('aliya', 'Studying International Relations at NDU, Aliya is the one who’ll guide you not only about studies but also about social life which is a key aspect of University life. He maintains an excellent academic standing with a CGPA of 3.56.', 'I\'m good at conveying the complexities and realities of international Relations and International Politics. If you\'re a fresh student and willing to apply for IR, I will be happy to help you regarding the content what to study, what not to study, and what\'s the right way of studying them.\r\nI have a good command of European History related to IR, International Relations Theories are related to IR, CPEC Pakistan Afghanistan Relationship, and the current Scenario. Moreover, I also work on character building so if you’re generally looking for someone to guide you about managing social life along with studies, I’m the person to approach.', 6, 'NDU', '2022-05-28 15:45:28', '2022-05-28 15:45:28'),
('Ava', 'Charlotte pursues BBA at NUST and will be starting her 5th semester. So if you’re starting new in this field, she has enough experience to guide you about this field, department in NUST, and other tips to ace your studies here, with special command on Business analytics.', '“I\'m a business administration student with a keen interest in management and marketing/entrepreneurship-related subjects and I believe that\'s my area of expertise. Students can choose me as their mentor if they need any sort of help in business-related subjects, I\'d be more than happy to help.”', 4, 'National University of Science & Technology', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Elijah13', 'Elijah has maintained an outstanding profile throughout his academic career. Not only is he a position holder in FBISE HSSC Examinations, but also now maintains a remarkable CGPA of 3.97 at the No. 1 Engineering University of Pakistan, NUST. Here’s what he has to say.', '“I have a strong grip on maths and physics. Moreover, I scored 10th position in the ECAT examination conducted by UET. I particularly ace in electrical major subjects. I can guide the junior batches on how to manage studies at University. Moreover, I can also provide them with a strong background in Engineering drawing and Calculus.”', 2, 'Nescom', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Emma_Olivia', 'With an outstanding academic record of having 97.5% in matric and 95%, Emma now pursues Computer Science at the Number 1 University of Pakistan, NUST at SEECS. Not only has she maintained a CGPA of 3.54 but she is also equally socially active in many student societies and clubs.', 'Most students face difficulty adjusting to university life, which is quite normal. So if you want any help with that, I can provide you with some guidelines and tips to help you adjust here, especially in the field of CS. Moreover, I can impart my experience and techniques that I followed during my NET (NUST entry test) preparation which was quite useful for me. Some courses of my freshmen year I can provide you guidance with: Fundamentals of Computer Programming (FoCP), Object-Oriented Programming (OOP), Calculus 1 & 2, Digital Logic Design, and Discrete Maths.', 1, 'National University of Science & Technology', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Lucas', 'testing', 'testing', 1, 'nust', '2022-05-31 05:53:42', '2022-05-31 05:53:42'),
('Noah', 'Some say you can either be a bookworm and score a good GPA, or spend your time learning practical skills. Well, Noah James proves that you can be both, a freelancer with multiple skills and still have an incredible CGPA of 3.69 at the same time.', 'I am good at teaching as I am doing an internship at AI teaching in NUST. I have good concepts of JAVA OOP and C, C++ and I think this is the major concern of every newbie in coding. All you need is perfect guidance and I will assure you the best support, and I am also doing freelancing in it and I will guide you in that too. The main skill involved is communication skills and as a senior, I will there for you in that aspect as well. You can just approach and I would love to answer your query because that is what our seniors did. If you take coaching from me, the guidance will be there for sure but you will get to learn about the latest updates happening in the field and some other morals that are important for our life. I can make a customized plan for your study because that is what I do for myself. And we can have an interactive session once a week to answer the query and enhance our performance.', 3, 'National University of Science & Technology', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('Sara_Ali', 'Hailing from SADA, NUST, Sophia is the person who\'ll guide you all you need to know about what to expect in NET for Architecture and how to ace it.', 'I\'m a first-year student of architecture, the subjects I had in Alevels were maths, physics, and economics. I believe I can guide students that are looking to give their NETS for bachelor\'s in architecture and bachelors in industrial design effectively. I will impart tips and tricks and guide them on how to study for it. I know firsthand how scary it is to give NETS without proper guidance with my friendly personality I hope to make the experience of giving NETs less frightening by preparing students on how to go about it.', 5, 'National University of Science & Technology', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `wallet` int(10) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fullname`, `email`, `password`, `userImage`, `status`, `wallet`, `updated_at`, `created_at`) VALUES
('Admin', 'Admin', 'admin@gmail.com', 'eyJpdiI6IlJnN3Q3MlFMMS9pUERrT3p5T01rdnc9PSIsInZhbHVlIjoicVRIYjZTZ3pQS2Y3YUtUL1JJeHBpZz09IiwibWFjIjoiNTQyYjNjNWMzYmU5MDNkN2RiYmY0OGQ5MDI2Y2I1YzBmMzUxMjQzOWExMDYxZTg3ODliODhiYmU4NzUwMWE4NCIsInRhZyI6IiJ9', 'admin.jpg', 'admin', 31820, '2022-05-31 05:51:34', '2022-05-26 03:11:16'),
('aliya', 'Aliya Noor', 'aliya@gmail.com', 'eyJpdiI6Ik84OUx6N205VFlnMTFSL2lmdEI0akE9PSIsInZhbHVlIjoiR3VMQk1ZVE9sVVpaeXBHMGJCRGNVZz09IiwibWFjIjoiYmZlYjAwOGEzODQ2NTlmMWEzY2IzMDY3NGM5MDM2M2Q3ZmM3MDVhNjcwOWVmZjM3ZGU0N2I5MDk0NDBiZmM2ZSIsInRhZyI6IiJ9', 'aliya.jpg', 'student', 3000, '2022-05-29 07:32:49', '2022-05-28 14:38:06'),
('Ava', 'Charlotte Ava', 'ava@gmail.com', 'eyJpdiI6Ii9kSFljbi9aMmdkSmZBTHEzYjBkNVE9PSIsInZhbHVlIjoielo3bHQreDU5Um5Dcy9oNGhRenp0UT09IiwibWFjIjoiMTdmMjRjMDI4YTJkNzJiZmM4NTk1ODY4MDg4ODUyYmQ1Nzc4MDQ3MWI2YTI0YjgwNzkzOGFhMzE4YWFjMDIyNCIsInRhZyI6IiJ9', 'Ava.png', 'tutor', 10200, '2022-05-31 03:19:46', '2022-05-26 07:27:41'),
('Elijah13', 'Elijah Liam', 'elijah@gmail.com', 'eyJpdiI6ImYvWmtCc1R4RTNtb01LYnRrV2pCSkE9PSIsInZhbHVlIjoiSVpwNGEvRlIrV1dER0srUnhWVTE3VkdXdUhVTkRwOW5TUmlaYWhXdzliST0iLCJtYWMiOiI0ODg1MDIzYTc4NDE1OWUzMDkzMjVhNjYyYTdiZjM0NWMzNmI4NTY0Mjg5ZjRiOTEwNmQ1ODBlM2ZlZDk3NmFiIiwidGFnIjoiIn0=', 'Elijah13.png', 'tutor', 1200, '2022-05-31 00:20:05', '2022-05-26 07:26:37'),
('Emilia', 'Emilia', 'emilia@gmail.com', 'eyJpdiI6IkJucHJsZWZKQWVvenRZZ0g1Zm53Ync9PSIsInZhbHVlIjoicklEdVYxR3FqS2pxWk83djg1MjV4dz09IiwibWFjIjoiNjlmZjMwZWU5YmU2ZTc2NWZkN2NjZjA4NzgzNGI1Y2YxYjExZWY5MWQ4ZDBiNTY4NzA1ZjM3ZTA5YzkzNTE0NCIsInRhZyI6IiJ9', 'st (2).png', 'student', 8000, '2022-05-25 09:53:41', '2022-05-25 09:53:41'),
('Emma_Olivia', 'Emma Olivia', 'emma@gmail.com', 'eyJpdiI6IjBNcWhlVnA3SWMxL3NlNkpaSmltWUE9PSIsInZhbHVlIjoiM05GYnVSSGxzTExDMXRDNXdkcWp0UT09IiwibWFjIjoiYTJiYWJkMWY2ZDQwMTJjNjllOTUxNjM5YTUzOTkxODBmOTNmOGE2YmM2NDU1NDg5ZTM1OTY1OGJkOWFmZjNmOCIsInRhZyI6IiJ9', 'Emma_Olivia.png', 'tutor', 0, '2022-05-29 13:21:31', '2022-05-26 07:38:26'),
('Lucas', 'Lucas Mare', 'lucas@gmail.com', 'eyJpdiI6Ijlzb29JYmtkUXZFZTlma0pVZ1ZnSlE9PSIsInZhbHVlIjoiUmw0cFpxYzdjMTdIQUJ5U1ZjQm1LUT09IiwibWFjIjoiN2UyY2I1ZWI2ZTQ1ZmRjN2JkOTE3NmZmMTM4MjVjYzk4NDk5ZGU0Mjk0M2QwMmQzNzA3NGI3NGM3MTIwYzlmNyIsInRhZyI6IiJ9', 'Lucas.png', 'tutor', 3800, '2022-05-31 05:53:42', '2022-05-26 07:28:13'),
('Mariia', 'Maria David', 'maria@gmail.com', 'eyJpdiI6IkhjaEswVTZuaUpMNHZOV1JWTlpGMFE9PSIsInZhbHVlIjoiMnZ1R3lybWpDaHRxMzAwLzB6YkROZz09IiwibWFjIjoiYzhjYzZmYTU5ODMxM2Y1MmNlZjM1M2UzNWMxNjk5MjUxN2I1NjhkMmFkMjk0NTJmNTcxMmM4OTBmNTNiODc3MCIsInRhZyI6IiJ9', 'st (3).png', 'student', 300, '2022-05-25 12:46:44', '2022-05-25 12:46:44'),
('Noah', 'Noah James', 'naoh@gmail.com', 'eyJpdiI6InNLRFlWLzhzbFRrWUsyK2xhUUV4OEE9PSIsInZhbHVlIjoiT3ZwMmVEVTF3WWYxa3hhTVNvUmw2UT09IiwibWFjIjoiZmJmMGQyNWU1MjU0ZGE3MTUxZWY3NmRkMjg0YmI5NzUyMGRlNTMzZDUyODg1NjhkY2M3ZDMyYWQyOGI5YTZiMyIsInRhZyI6IiJ9', 'Noah.png', 'tutor', 2880, '2022-05-31 05:51:34', '2022-05-26 07:25:11'),
('Sara_Ali', 'Sara Ali', 'sara@gmail.com', 'eyJpdiI6IkVKUFNlVDl4QkIwMFloWEVDdEJXa1E9PSIsInZhbHVlIjoiVVJaaTJCSTRzQVkvOHJtRGRiU2xtUT09IiwibWFjIjoiYThkYjg3YzMxM2E4NzE4NGU4MGFhYjBlNTc4NmYyMDVhZTBmYWJhNzJkMzc5NGJkNmRkYjI0YWFlYThjZTdhNCIsInRhZyI6IiJ9', 'Default.png', 'tutor', 0, '2022-05-26 08:11:04', '2022-05-26 08:11:04'),
('Smiith', 'Smith Jones', 'smith@gmail.com', 'eyJpdiI6IjFoK0hRakFpSjdNV1EvUTlReWJvUmc9PSIsInZhbHVlIjoiS2N2ZEMvbExZczlDNUd4MHBWclBVQT09IiwibWFjIjoiOTk2OGZjYjc0MGZmY2VkMDU3Y2MxNDU1YzAyMzJmZTQ3MGJlNGJhODMzMmIzYWRlNzhlYjliZmM1MTk0N2Y4MSIsInRhZyI6IiJ9', 'st (1).png', 'student', 600, '2022-05-25 09:51:51', '2022-05-25 09:51:51'),
('ubaiid', 'Ubaid', 'ub@gmail.com', 'eyJpdiI6ImxtZWg0MVlKM1R1NVFDRWlwZU5Xemc9PSIsInZhbHVlIjoia3NBaVI0WG5QYy9yWlppTXZUeFY3dz09IiwibWFjIjoiMzNmNjYyY2QyZTUwYWNiOTc5Nzc5YmIzMjc4MmJmNmQxN2MyOWY4NTBjMzAzMmZmMTg5MjVjNDliYmVjYmM0NiIsInRhZyI6IiJ9', 'ubaiid.jpg', 'student', 109000, '2022-05-31 09:22:54', '2022-05-31 03:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_contactus`
--

DROP TABLE IF EXISTS `user_contactus`;
CREATE TABLE IF NOT EXISTS `user_contactus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_contactus`
--

INSERT INTO `user_contactus` (`id`, `name`, `email`, `subject`, `message`, `updated_at`, `created_at`) VALUES
(13, 'Sara', 'sara@gmail.com', 'Timing selection', 'How can we select custom timings?', '2022-05-23 07:27:56', '2022-05-25 07:27:56'),
(12, 'Mashal', 'mashal@gmail.com', 'Booking Cancellation', 'Can we cancel our boookings?', '2022-05-30 07:27:08', '2022-05-24 07:27:08'),
(11, 'Shifa Imran', 'shifaimran@gmail.com', 'Tutor Finding', ' I can\'t find a tutor in my field. Can you recommend yourself?', '2022-05-30 07:23:51', '2022-05-30 07:23:51'),
(10, 'Ali Azhar', 'ali@gmail.com', 'Time For Session', 'Where are the timings for specific session?', '2022-05-31 07:22:16', '2022-05-31 07:22:16');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fk_Course_TutorName` FOREIGN KEY (`tutorname`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_ratings`
--
ALTER TABLE `course_ratings`
  ADD CONSTRAINT `fk_rating_Course` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cust_review_to_tutor`
--
ALTER TABLE `cust_review_to_tutor`
  ADD CONSTRAINT `fk_rev_Username` FOREIGN KEY (`student`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rev_tutor` FOREIGN KEY (`tutor`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `fk_session_pkg` FOREIGN KEY (`pckg`) REFERENCES `packages` (`pkg_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_session_student` FOREIGN KEY (`student`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_session_tutor` FOREIGN KEY (`tutor`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_enrolled_in_course`
--
ALTER TABLE `student_enrolled_in_course`
  ADD CONSTRAINT `fk_enroll_Course` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_enroll_st` FOREIGN KEY (`st_username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`major`) REFERENCES `category` (`cat_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tutorname` FOREIGN KEY (`tutorusername`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
