-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 03:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_gc`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama_file`, `judul`) VALUES
(36, 'river.jpg', 'adnan9'),
(37, 'sea.jpg', '9898'),
(38, 'river.jpg', '9080'),
(39, 'river.jpg', '87867t'),
(40, 'city.jpg', 'city'),
(41, 'river.jpg', 'river'),
(42, 'sea.jpg', 'sea'),
(43, 'sea.jpg', 'sea');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(18) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `foto`, `nama`, `nohp`, `alamat`, `pendidikan`) VALUES
(7, 'logo.png', 'Adnan Rohmat Kurniansahz', '085800371886', 'Nambangan, Seloharjo, Pundong, Bantul', 's5'),
(11, 'background.jpg', 'dimaszzeh', '08273623', 'nmbgn', 'SMP 1 Pundong'),
(12, 'Picture6.png', 'rohmat', '97286376', 'isekai', 's8');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `your_name` varchar(50) NOT NULL,
  `your_email` text NOT NULL,
  `your_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `your_name`, `your_email`, `your_message`) VALUES
(11, 'feri', 'feri@gmail.com', 'pppp'),
(13, 'mugetsu', 'mugetsu@gmail.com', 'halo');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama_prestasi` text NOT NULL,
  `juara` varchar(50) NOT NULL,
  `tahun` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `foto`, `nama_prestasi`, `juara`, `tahun`) VALUES
(1, 'index.jpg', 'Juara Bulutangkis dalam acara besar aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Juara Pertama tingkat kabupatenn', '2006'),
(3, 'index.jpg', 'bilekkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'ketiga tingkat provinsi', '2010');

-- --------------------------------------------------------

--
-- Table structure for table `siswax`
--

CREATE TABLE `siswax` (
  `id` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswax`
--

INSERT INTO `siswax` (`id`, `nis`, `foto`, `nama`, `kelas`, `alamat`) VALUES
(26, 13091, 'background.jpg', 'Adnan Rohmat Kurniansah', 'XI RPL 2', 'Nambangan, Seloharjo, Pundong, Bantullaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(30, 16091, 'Picture3.png', 'rohmat', 'kama', 'jaja'),
(32, 48929, 'Picture13.png', 'Adnan', 'x pm', 'imogiri');

-- --------------------------------------------------------

--
-- Table structure for table `siswaxi`
--

CREATE TABLE `siswaxi` (
  `id` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswaxi`
--

INSERT INTO `siswaxi` (`id`, `nis`, `foto`, `nama`, `kelas`, `alamat`) VALUES
(6, 16871, 'logo.png', 'Adnan Rohmat Kurniansahhhhhhhhhhhhhhz', 'xi ak 1', 'Nambangan, Seloharjo, Pundong, Bantul'),
(8, 17891, 'background.jpg', 's sncb', 'sjjbc', 'njdsjbd');

-- --------------------------------------------------------

--
-- Table structure for table `siswaxii`
--

CREATE TABLE `siswaxii` (
  `id` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswaxii`
--

INSERT INTO `siswaxii` (`id`, `nis`, `foto`, `nama`, `kelas`, `alamat`) VALUES
(1, 16030, 'student.png', 'Adnan Rohmat Kurniansahz', 'X RPL 1', 'Nambangan, Seloharjo, Pundong, Bantul');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `AdminUserName` varchar(255) NOT NULL,
  `AdminPassword` varchar(255) NOT NULL,
  `AdminEmailId` varchar(255) NOT NULL,
  `Is_Active` int(11) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `Is_Active`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '$2y$12$fw3o6vgLIrazsx/zE2TXQ.y3rlK76gTvjHe5pJDWu5iJWnTLYdrru', 'campcodes@gmail.com', 1, '2020-03-27 17:51:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(2, 'Bollywood', 'Bollywood News', '2018-06-06 10:28:09', '2018-06-30 18:41:07', 1),
(3, 'Sports', 'Related to sports news', '2018-06-06 10:35:09', '2018-06-14 11:11:55', 1),
(5, 'Entertainment', 'Entertainment related  News', '2018-06-14 05:32:58', '2018-06-14 05:33:41', 1),
(6, 'Politics', 'Politics', '2018-06-22 15:46:09', '0000-00-00 00:00:00', 1),
(7, 'Business', 'Business', '2018-06-22 15:46:22', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'About News Portal', '<font color=\"#7b8898\" face=\"Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, å¾®è½¯é›…é»‘, å®‹ä½“, SimSun, STXihei, åŽæ–‡ç»†é»‘, serif\"><span style=\"font-size: 26px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></font><br>', '2018-06-30 18:01:03', '2018-06-30 19:19:51'),
(2, 'contactus', 'Contact Details', '<p><br></p><p><b>Address :&nbsp; </b>New Delhi India</p><p><b>Phone Number : </b>+91 -01234567890</p><p><b>Email -id : </b>phpgurukulofficial@gmail.com</p>', '2018-06-30 18:01:36', '2018-06-30 19:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`) VALUES
(7, 'Navbars are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our Collapse JavaScript plugin.', 0, 0, '<p><br></p><p>Navbars can use <code>.navbar-toggler</code>, <code>.navbar-collapse</code>, and <code>.navbar-expand{-sm|-md|-lg|-xl|-xxl}</code>\r\n classes to determine when their content collapses behind a button. In \r\ncombination with other utilities, you can easily choose when to show or \r\nhide particular elements.</p><p>\r\n<br></p><p>For navbars that never collapse, add the <code>.navbar-expand</code> class on the navbar. For navbars that always collapse, don’t add any <code>.navbar-expand</code> class.</p><p><br></p>', '2018-06-30 18:49:23', '2022-10-30 14:58:54', 1, 'Navbars-are-responsive-by-default,-but-you-can-easily-modify-them-to-change-that.-Responsive-behavior-depends-on-our-Collapse-JavaScript-plugin.', '2760735506a5bc187a35f6c829fae70d.jpg'),
(10, 'Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal000', 0, 0, '<h1 style=\"box-sizing: inherit; margin-top: 0px; padding: 0px; font-family: Roboto, sans-serif; font-size: 38px; line-height: normal; letter-spacing: -0.5px; color: rgb(51, 51, 51);\"><span itemprop=\"headline\" style=\"box-sizing: inherit;\">Tata Steel, Thyssenkrupp Finalise Landmark Steel Deal</span>Tata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel DealTata Steel, Thyssenkrupp Finalise Landmark Steel Deal</h1>', '2018-06-30 19:08:56', '2022-10-30 15:47:43', 1, 'Tata-Steel,-Thyssenkrupp-Finalise-Landmark-Steel-Deal000', 'b5bb38b5d15bc6cb0228f0277c17927e.jpg'),
(12, 'Shah holds meeting with NE states leaders in Manipur', 6, 7, '<p><span style=\"color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">New Delhi: BJP president Amit Shah today held meetings with his party leaders who are in-charge of 11 Lok Sabha seats spread across seven northeast states as part of a drive to ensure that it wins the maximum number of these constituencies in the general election next year.</span><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><br style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\"><webviewcontentdata style=\"box-sizing: inherit; color: rgb(25, 25, 25); font-family: &quot;Noto Serif&quot;; font-size: 16px;\">Shah held separate meetings with Lok Sabha toli (group) of Arunachal Pradesh, Tripura, Meghalaya, Mizoram, Nagaland, Sikkim and Manipur in Manipur, the partys media head Anil Baluni said.<br style=\"box-sizing: inherit;\"><br style=\"box-sizing: inherit;\">Baluni said that Shah was in West Bengal for two days before he arrived in Manipur. The BJP chief would reach Odisha tomorrow.</webviewcontentdata><br></p>', '2018-06-30 19:11:44', '2022-10-30 14:12:59', 1, 'Shah-holds-meeting-with-NE-states-leaders-in-Manipur', '2760735506a5bc187a35f6c829fae70d.jpg'),
(13, 'Navbars and their contents are fluid by default. Change the container to limit their horizontal width in different ways.', 0, 0, '<p><br></p><p>Navbars can use <code>.navbar-toggler</code>, <code>.navbar-collapse</code>, and <code>.navbar-expand{-sm|-md|-lg|-xl|-xxl}</code>\r\n classes to determine when their content collapses behind a button. In \r\ncombination with other utilities, you can easily choose when to show or \r\nhide particular elements.</p><p>\r\n<br></p><p>For navbars that never collapse, add the <code>.navbar-expand</code> class on the navbar. For navbars that always collapse, don’t add any <code>.navbar-expand</code> class.</p><p><br></p>', '2022-10-30 14:56:47', NULL, 1, 'Navbars-and-their-contents-are-fluid-by-default.-Change-the-container-to-limit-their-horizontal-width-in-different-ways.', '47a026371ca1337ced290ed9ad028c21.jpg'),
(14, 'Aspect ratios can be customized with modifier classes. By default the following ratio classes are provided:', 0, 0, '<p><br></p><p>Use the ratio helper to manage the aspect ratios of external content like <code>&lt;iframe&gt;</code>s, <code>&lt;embed&gt;</code>s, <code>&lt;video&gt;</code>s, and <code>&lt;object&gt;</code>s. These helpers also can be used on any standard HTML child element (e.g., a <code>&lt;div&gt;</code> or <code>&lt;img&gt;</code>). Styles are applied from the parent <code>.ratio</code> class directly to the child.</p><p>\r\n<br></p><p>Aspect ratios are declared in a Sass map and included in each class via CSS variable, which also allows <a href=\"https://getbootstrap.com/docs/5.2/helpers/ratio/#custom-ratios\">custom aspect ratios</a>.</p><p><br></p>', '2022-10-30 15:00:51', NULL, 1, 'Aspect-ratios-can-be-customized-with-modifier-classes.-By-default-the-following-ratio-classes-are-provided:', 'b5bb38b5d15bc6cb0228f0277c17927e.jpg'),
(16, 'Progress components are built with two HTML elements, some CSS to set the width, and a few attributes.zzz1', 0, 0, '<p><br></p><ul><li>We use the <code>.progress</code> as a wrapper to indicate the max value of the progress bar.</li><li>We use the inner <code>.progress-bar</code> to indicate the progress so far.</li><li>The <code>.progress-bar</code> requires an inline style, utility class, or custom CSS to set their width.</li><li>The <code>.progress-bar</code> also requires some <code>role</code> and <code>aria</code> attributes to make it accessible, including an accessible name (using <code>aria-label</code>, <code>aria-labelledby</code>, or similar).</li></ul><p><br></p>', '2022-10-30 15:10:55', '2022-10-31 12:22:40', 1, 'Progress-components-are-built-with-two-HTML-elements,-some-CSS-to-set-the-width,-and-a-few-attributes.zzz1', '2760735506a5bc187a35f6c829fae70d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(3, 5, 'Bollywood ', 'Bollywood masala', '2018-06-22 15:45:38', '0000-00-00 00:00:00', 1),
(4, 3, 'Cricket', 'Cricket\r\n\r\n', '2018-06-30 09:00:43', '0000-00-00 00:00:00', 1),
(5, 3, 'Football', 'Football', '2018-06-30 09:00:58', '0000-00-00 00:00:00', 1),
(6, 5, 'Television', 'TeleVision', '2018-06-30 18:59:22', '0000-00-00 00:00:00', 1),
(7, 6, 'National', 'National', '2018-06-30 19:04:29', '0000-00-00 00:00:00', 1),
(8, 6, 'International', 'International', '2018-06-30 19:04:43', '0000-00-00 00:00:00', 1),
(9, 7, 'India', 'India', '2018-06-30 19:08:42', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(6, 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswax`
--
ALTER TABLE `siswax`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nis`);

--
-- Indexes for table `siswaxi`
--
ALTER TABLE `siswaxi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `siswaxii`
--
ALTER TABLE `siswaxii`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswax`
--
ALTER TABLE `siswax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `siswaxi`
--
ALTER TABLE `siswaxi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siswaxii`
--
ALTER TABLE `siswaxii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
