-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 01:10 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webxaydung`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--
DROP TABLE IF EXISTS `comment`;
DROP TABLE IF EXISTS `contact`;
DROP TABLE IF EXISTS `post`;
DROP TABLE IF EXISTS `post_category`;
DROP TABLE IF EXISTS `project`;
DROP TABLE IF EXISTS `project_category`;
DROP TABLE IF EXISTS `service`;
DROP TABLE IF EXISTS `service_category`;
DROP TABLE IF EXISTS `slide`;
DROP TABLE IF EXISTS `slide_category`;
DROP TABLE IF EXISTS `slide_image`;
DROP TABLE IF EXISTS `users`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `status`tinyint(1) DEFAULT(0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `plot_map_image` text DEFAULT NULL,
  `demand` text NOT NULL DEFAULT 'Thiết kế',
  `land_image` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `land_direction` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `other` text DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) DEFAULT(0)
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `users` (`id`, `username`,`password`) VALUES(1,'admin','admin');
--
-- Dumping data for table `contact`
--



-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `name_post` text NOT NULL,
  `description` text DEFAULT NULL,
  `content` text NOT NULL,
  `image` text DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_category_id`, `name_post`, `description`, `content`, `image`, `date`) VALUES
(2, 1, 'Kiểu trang tri tường đẹp hợp phong thủy', 'Trang trí nhà hợp phong thủy sẽ giúp chúng ta có thêm những may mắn trong dịp đầu năm mới. 10 ý tưởng trang trí nhà đơn giản nhưng hiệu quả và hợp phong thủy dưới đây rất hữu ích để bạn tham khảo.', '<p><strong>Trang tr&iacute; nh&agrave; hợp phong thủy sẽ gi&uacute;p ch&uacute;ng ta c&oacute; th&ecirc;m những may mắn trong dịp đầu năm mới.</strong></p>\r\n\r\n <p>10 &yacute; tưởng trang tr&iacute; nh&agrave; đơn giản nhưng hiệu quả v&agrave; hợp phong thủy dưới đ&acirc;y rất hữu &iacute;ch để bạn tham khảo.</p>\r\n<p><strong>1. Chọn m&agrave;u sắc một c&aacute;ch thận trọng</strong></p>\r\n<p>Nếu một bức tường được sơn bằng m&agrave;u sơn cũ, x&aacute;m xịt hay bất kỳ m&agrave;u sơn n&agrave;o cảm thấy giống như vậy khiến ta thấy buồn tẻ v&agrave; nh&agrave;m ch&aacute;n, trong khi một một bức tường được sơn bằng m&agrave;u\r\n                            sơn mới, hoặc sơn những m&agrave;u sắc s&aacute;ng sửa, sạch sẽ như đem đến một hơi thở mới v&agrave; năng lượng cho cuộc sống cũng như to&agrave;n bộ kh&ocirc;ng gian của ng&ocirc;i nh&agrave;.</p>\r\n\r\n\r\n\r\n                        <p><strong>2. Để đồ đạc ra khoảng kh&ocirc;ng rộng</strong></p>\r\n\r\n                        <p>Khi nghe điều n&agrave;y c&oacute; vẻ kh&aacute; mơ hồ, nhưng n&oacute; thực sự kh&aacute; đơn giản. H&atilde;y chắc chắn rằng bất kỳ đồ đạc được sắp xếp n&ecirc;n để lại một khoảng trống th&iacute;ch hợp xung quanh &ndash; khi\r\n                            bạn đi v&agrave;o ph&ograve;ng kh&aacute;ch, kh&ocirc;ng n&ecirc;n để ch&acirc;n bị chạm v&agrave;o lưng ghế. Những phụ kiện nhỏ hoặc những thứ tượng tự ch&uacute;ng ta n&ecirc;n cất trong tủ quần &aacute;o trong ph&ograve;ng\r\n                            ngủ. Như vậy, ch&uacute;ng ta sẽ c&oacute; th&ecirc;m nhiều kh&ocirc;ng gian khi đồ đạc được sắp xếp gọn g&agrave;ng m&agrave; vẫn giữ được số lượng thực tế vốn c&oacute;.</p>\r\n\r\n\r\n\r\n                        <p><strong>3. Kết hợp trang tr&iacute; ở tr&ecirc;n cao</strong></p>\r\n\r\n                        <p>Một căn ph&ograve;ng được b&agrave;i tr&iacute; theo phong thủy sẽ đem lại cho bạn cảm gi&aacute;c an to&agrave;n v&agrave; thoải m&aacute;i hơn. Một sản phẩm mang t&iacute;nh chất nghệ thuật được treo l&ecirc;n cao, hoặc một b&oacute;ng\r\n                            đ&egrave;n y&ecirc;u th&iacute;ch được n&acirc;ng l&ecirc;n tr&ecirc;n nhằm thu h&uacute;t &aacute;nh mắt hướng l&ecirc;n, được cho l&agrave; một thủ thuật n&acirc;ng cao t&acirc;m trạng. Nếu n&oacute; kh&ocirc;ng c&oacute;\r\n                            &yacute; nghĩa trong kh&ocirc;ng gian nh&agrave; bạn, th&igrave; h&atilde;y thử một chiến lược n&acirc;ng cao tầm mắt, chẳng hạn như gắn c&aacute;c vật trang tr&iacute; cho cửa sổ gần trần nh&agrave; hoặc sơn trần nh&agrave;\r\n                            đẹp, nhẹ nh&agrave;ng h&agrave;i h&ograve;a.</p>\r\n', '1.jpg', '2020-01-16'),
('',);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `name`) VALUES
(1, 'Tư vấn phong thủy'),
(2, 'Giải pháp kiến trúc'),
(3, 'Kỹ thuật xây dựng'),
(4, 'Chọn và sử dụng vật liệu');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

-- 




-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name_project` text NOT NULL,
  `customer_name` text NOT NULL,
  `investor` text NOT NULL,
  `description` text NOT NULL,
  `land_area` int(11) NOT NULL,
  `building_area` int(11) NOT NULL,
  `construction_progress` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `project_category_id` int(11) NOT NULL,
  `content` text NULL,
  `image` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name_project`, `customer_name`, `investor`, `description`, `land_area`, `building_area`, `construction_progress`, `total_amount`, `project_category_id`, `content`, `image`,`created_at`,`updated_at`) VALUES
(1, 'MR PHƯỚC HOUSE_16_DCONSTECH', 'MR PHƯỚC', 'CÔNG TY TNHH TVXD & TM DCONSTECH', ' Mr Phước House: căn hộ được thiết kế 8 tầng vừa là nhà ở vừa làm căn hộ cho thuê nằm trên trục đường Trần Phú đắt địa nhưng không kém phần khó khăn trong công tác thi công. ', 800, 800, 150, 0, 2, '', 'project1.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44'),
(2, 'XUYÊN VILLA_17_DCONSTECH', 'XUYÊN', 'CÔNG TY TNHH TVXD & TM DCONSTECH', 'Biệt thự được thiết kế với phong cách hiện đại trên khu đất rộng 250m2 nằm trên trục đường Vip nhất của khu đô thi Nam Việt Á (đường Bùi Tá Hán) với các khoảng không làm cho ngôi nhà luôn đầy nắng và gió. ', 250, 350, 120, 0, 1, '', 'project2.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44'),
(3, 'VILLA OF BOSS_11_DCONSTECH', 'Boss', 'CÔNG TY TNHH TVXD & TM DCONSTECH', '\" Nhà của sếp \" Tựa đề đã nói lên tất cả. Cám ơn sếp đã tin tưởng chúng tôi, chúng tôi tự tin sẽ làm sếp hài lòng. Biệt thự 3 tầng với phong cách hiện đại tọa lạc tại một trong những khu Vip nhất Đà Nẵng \"', 250, 560, 90, 0, 1, '', 'project3.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44'),
(4, 'MS KHƯƠNG HOUSE_18_DCONSTECH', 'MS KHƯƠNG', 'CÔNG TY TNHH TVXD & TM DCONSTECH', 'Chuyện giờ mới kể : khởi công vào tháng 9 sương sương, trời thì vẫn cứ mưa, nhà thì vẫn cứ xây, ngồi nhà của ms Khương nên hình như vậy. Cảm ơn chị đã đặt trọn niềm tin vào chúng tôi để xây dựng ngôi nhà mơ ước.', 120, 185, 90, 0, 2, '', 'project4.png','2020-01-16 01:08:44','2020-01-16 01:08:44'),
(5, 'MR KHÁNH HOUSE_15_DCONSTECH', 'Mr Khánh', 'CÔNG TY TNHH TVXD & TM DCONSTECH', 'Ngôi nhà 5 tầng ban đầu được đơn vị thiết kế S3 thiết kế với kết cấu thép với chi phí rất cao. Với sự tư vấn của chúng tôi, chủ đầu tư đã đồng ý chuyển sang phương án BTCT với chi phí phải chăng và mang lại hiệu quả lâu dài. ', 100, 500, 120, 0, 2, '', 'project5.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44'),
(6, 'MR THƯƠNG HOUSE_07_DCONSTECH', 'Mr Thương', 'CÔNG TY TNHH TVXD & TM DCONSTECH', 'Mr Thương House_25/05/2019. Ngôi nhà 3 tầng trên diện tích lô đất rộng 200m2 được thiết kế các không gian thoáng và nhiều ánh sáng như mong muốn của chủ nhà. ', 250, 420, 120, 0, 2, '', 'project6.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
   `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `name`,`created_at`,`updated_at`) VALUES
(1, 'Biệt thự','2020-01-16 01:08:44','2020-01-16 01:08:44'),
(2, 'Nhà phố','2020-01-16 01:08:44','2020-01-16 01:08:44'),
(3, 'Khách sạn-văn phòng','2020-01-16 01:08:44','2020-01-16 01:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name_service` text,
  `content` text,
  `service_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name_service`, `content`, `service_category_id`) VALUES
(1, 'Thiết kế kiến trúc', '', 1),
(2,'Thi công xây dựng','',2);

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`id`, `name`) VALUES
(1, 'Thiết kế công trình'),
(2, 'Thi công xây dựng')
;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `slide_category_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `slide_category_id`, `name`) VALUES
(1, 2, 'MR PHƯỚC HOUSE_16_DCONSTECH'),
(2, 2, 'XUYÊN VILLA_17_DCONSTECH'),
(3, 2, 'VILLA OF BOSS_11_DCONSTECH'),
(4, 2, 'MR KHÁNH HOUSE_15_DCONSTECH'),
(5, 2, 'MR THƯƠNG HOUSE_07_DCONSTECH'),
(6, 2, 'MS KHƯƠNG HOUSE_18_DCONSTECH');

-- --------------------------------------------------------

--
-- Table structure for table `slide_category`
--

CREATE TABLE `slide_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide_category`
--

INSERT INTO `slide_category` (`id`, `name`) VALUES
(1, 'Home'),
(2, 'Buiding');

-- --------------------------------------------------------

--
-- Table structure for table `slide_image`
--

CREATE TABLE `slide_image` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide_image`
--

INSERT INTO `slide_image` (`id`, `image_url`) VALUES
(1, 'slider-1.jpg'),
(2, 'slider-2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_category`
--
ALTER TABLE `slide_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_image`
--
ALTER TABLE `slide_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slide_category`
--
ALTER TABLE `slide_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide_image`
--
ALTER TABLE `slide_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
