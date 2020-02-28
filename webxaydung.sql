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
DROP TABLE IF EXISTS `introduction`;
DROP TABLE IF EXISTS `role`;
CREATE TABLE `Role`(
	`id` int(11) NOT NULL,
	`rolename` text NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `role`(`id`,`rolename`) VALUES(1,'admin'),(2,'user');

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
  `password` text NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `users` (`id`, `username`,`password`,`id_role`) VALUES(1,'admin','admin',1),(2,'user','user',2);
--
-- Dumping data for table `contact`
--
CREATE TABLE `introduction` (
  `id` int(11) NOT NULL,
  `history` text NOT NULL,
	`information` text NOT NULL,
  `service` text NOT NULL,
   `company_diagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `introduction` (`id`, `history`,`information`,`service`,`company_diagram`) 
VALUES(1,
'<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, nisi rerum necessitatibus vero commodi voluptatem nihil omnis corrupti similique. Officia sunt ex placeat libero nisi nemo laudantium autem reprehenderit ab.</p>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reprehenderit reiciendis, cumque velit repudiandae officia aperiam ab culpa commodi ratione cum consequatur amet accusantium minima quod, voluptatibus ducimus dicta sequi.</p>
',
'<p><span style="font-size:26px"><strong>T&ecirc;n doanh nghiệp</strong>:&nbsp;C&ocirc;ng Ty TNHH Tư Vấn X&acirc;y Dựng V&agrave; Thương Mại Dconstech</span></p>

<p><span style="font-size:26px"><strong>Trụ sở ch&iacute;nh</strong>:&nbsp;24 Trần Th&aacute;nh T&ocirc;ng</span></p>

<p><span style="font-size:26px"><strong>VP Đại Diện</strong>:&nbsp;189 L&ecirc; Đ&igrave;nh L&yacute;</span></p>

<p><span style="font-size:26px"><strong>Ng&agrave;y Th&agrave;nh Lập</strong>:&nbsp;01/10/2018</span></p>
',
'<p><span style="font-size:26px">Thiết kế Kiến tr&uacute;c c&ocirc;ng tr&igrave;nh D&acirc;n dụng &amp; C&ocirc;ng nghiệp</span></p>

<p><span style="font-size:26px">Thiết kế Kết cấu c&ocirc;ng tr&igrave;nh D&acirc;n dụng &amp; C&ocirc;ng nghiệp.</span></p>

<p><span style="font-size:26px">Thiết kế Cơ-Điện c&ocirc;ng tr&igrave;nh D&acirc;n dụng &amp; C&ocirc;ng nghiệp</span></p>

<p><span style="font-size:26px">Thi c&ocirc;ng c&ocirc;ng tr&igrave;nh D&acirc;n dụng &amp; C&ocirc;ng nghiệp.</span></p>
',
'slider-1.jpg');

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
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_category_id`, `name_post`, `description`, `content`, `image`, `status`) VALUES
(2, 1, 'Kiểu trang tri tường đẹp hợp phong thủy', 'Trang trí nhà hợp phong thủy sẽ giúp chúng ta có thêm những may mắn trong dịp đầu năm mới. 10 ý tưởng trang trí nhà đơn giản nhưng hiệu quả và hợp phong thủy dưới đây rất hữu ích để bạn tham khảo.', '<p><strong>Trang tr&iacute; nh&agrave; hợp phong thủy sẽ gi&uacute;p ch&uacute;ng ta c&oacute; th&ecirc;m những may mắn trong dịp đầu năm mới.</strong></p>\r\n\r\n <p>10 &yacute; tưởng trang tr&iacute; nh&agrave; đơn giản nhưng hiệu quả v&agrave; hợp phong thủy dưới đ&acirc;y rất hữu &iacute;ch để bạn tham khảo.</p>\r\n<p><strong>1. Chọn m&agrave;u sắc một c&aacute;ch thận trọng</strong></p>\r\n<p>Nếu một bức tường được sơn bằng m&agrave;u sơn cũ, x&aacute;m xịt hay bất kỳ m&agrave;u sơn n&agrave;o cảm thấy giống như vậy khiến ta thấy buồn tẻ v&agrave; nh&agrave;m ch&aacute;n, trong khi một một bức tường được sơn bằng m&agrave;u\r\n                            sơn mới, hoặc sơn những m&agrave;u sắc s&aacute;ng sửa, sạch sẽ như đem đến một hơi thở mới v&agrave; năng lượng cho cuộc sống cũng như to&agrave;n bộ kh&ocirc;ng gian của ng&ocirc;i nh&agrave;.</p>\r\n\r\n\r\n\r\n                        <p><strong>2. Để đồ đạc ra khoảng kh&ocirc;ng rộng</strong></p>\r\n\r\n                        <p>Khi nghe điều n&agrave;y c&oacute; vẻ kh&aacute; mơ hồ, nhưng n&oacute; thực sự kh&aacute; đơn giản. H&atilde;y chắc chắn rằng bất kỳ đồ đạc được sắp xếp n&ecirc;n để lại một khoảng trống th&iacute;ch hợp xung quanh &ndash; khi\r\n                            bạn đi v&agrave;o ph&ograve;ng kh&aacute;ch, kh&ocirc;ng n&ecirc;n để ch&acirc;n bị chạm v&agrave;o lưng ghế. Những phụ kiện nhỏ hoặc những thứ tượng tự ch&uacute;ng ta n&ecirc;n cất trong tủ quần &aacute;o trong ph&ograve;ng\r\n                            ngủ. Như vậy, ch&uacute;ng ta sẽ c&oacute; th&ecirc;m nhiều kh&ocirc;ng gian khi đồ đạc được sắp xếp gọn g&agrave;ng m&agrave; vẫn giữ được số lượng thực tế vốn c&oacute;.</p>\r\n\r\n\r\n\r\n                        <p><strong>3. Kết hợp trang tr&iacute; ở tr&ecirc;n cao</strong></p>\r\n\r\n                        <p>Một căn ph&ograve;ng được b&agrave;i tr&iacute; theo phong thủy sẽ đem lại cho bạn cảm gi&aacute;c an to&agrave;n v&agrave; thoải m&aacute;i hơn. Một sản phẩm mang t&iacute;nh chất nghệ thuật được treo l&ecirc;n cao, hoặc một b&oacute;ng\r\n                            đ&egrave;n y&ecirc;u th&iacute;ch được n&acirc;ng l&ecirc;n tr&ecirc;n nhằm thu h&uacute;t &aacute;nh mắt hướng l&ecirc;n, được cho l&agrave; một thủ thuật n&acirc;ng cao t&acirc;m trạng. Nếu n&oacute; kh&ocirc;ng c&oacute;\r\n                            &yacute; nghĩa trong kh&ocirc;ng gian nh&agrave; bạn, th&igrave; h&atilde;y thử một chiến lược n&acirc;ng cao tầm mắt, chẳng hạn như gắn c&aacute;c vật trang tr&iacute; cho cửa sổ gần trần nh&agrave; hoặc sơn trần nh&agrave;\r\n                            đẹp, nhẹ nh&agrave;ng h&agrave;i h&ograve;a.</p>\r\n', '1.jpg', 1)
;

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name_project`, `customer_name`, `investor`, `description`, `land_area`, `building_area`, `construction_progress`, `total_amount`, `project_category_id`, `content`, `image`,`created_at`,`updated_at`,`status`) VALUES
(1, 'MR PHƯỚC HOUSE_16_DCONSTECH', 'MR PHƯỚC', 'CÔNG TY TNHH TVXD & TM DCONSTECH', ' Mr Phước House: căn hộ được thiết kế 8 tầng vừa là nhà ở vừa làm căn hộ cho thuê nằm trên trục đường Trần Phú đắt địa nhưng không kém phần khó khăn trong công tác thi công. ', 800, 800, 150, 0, 2, '
Edit your toolbar now!

<p><strong>B&ecirc; t&ocirc;ng m&oacute;ng</strong></p>

<p><img alt="Trong hình ảnh có thể có: trong nhà" src="https://scontent.fdad5-1.fna.fbcdn.net/v/t1.0-9/p720x720/68565361_700572577081498_1162767592578875392_o.jpg?_nc_cat=106&amp;_nc_ohc=12LsvseSfyIAX-ut9bO&amp;_nc_ht=scontent.fdad5-1.fna&amp;_nc_tp=6&amp;oh=2233abc6ae1641cba4e1e7c904f57706&amp;oe=5F02ED0D" /></p>

<p>&nbsp;</p>

<p><strong>C&ocirc;ng t&aacute;c v&aacute;n khu&ocirc;n m&oacute;ng</strong></p>

<p><img alt="Không có mô tả ảnh." src="https://scontent.fdad5-1.fna.fbcdn.net/v/t1.0-9/p720x720/68720191_700572403748182_4051921139738345472_o.jpg?_nc_cat=102&amp;_nc_ohc=99r1RvUm3JUAX9vmrOL&amp;_nc_ht=scontent.fdad5-1.fna&amp;_nc_tp=6&amp;oh=7a9f9c2b1ddfe762259999fab1ebdaa6&amp;oe=5EFE52A7" /></p>
', 'project1.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44',1),
(2, 'XUYÊN VILLA_17_DCONSTECH', 'XUYÊN', 'CÔNG TY TNHH TVXD & TM DCONSTECH', 'Biệt thự được thiết kế với phong cách hiện đại trên khu đất rộng 250m2 nằm trên trục đường Vip nhất của khu đô thi Nam Việt Á (đường Bùi Tá Hán) với các khoảng không làm cho ngôi nhà luôn đầy nắng và gió. ', 250, 350, 120, 0, 1, '<p><strong>&Eacute;p cừ C chống sạt nh&agrave; l&acirc;n cận</strong></p>

<p><img alt="Trong hình ảnh có thể có: một hoặc nhiều người, mọi người đang đứng và ngoài trời" src="https://scontent.fdad5-1.fna.fbcdn.net/v/t1.0-9/p720x720/70433355_714322199039869_6215581485705986048_o.jpg?_nc_cat=109&amp;_nc_ohc=tHTVJ1Wepe4AX8IEUqJ&amp;_nc_ht=scontent.fdad5-1.fna&amp;_nc_tp=6&amp;oh=e8efea1d607491d6762924e4ad0fe03a&amp;oe=5EC5886A" /></p>

<p><strong>&Eacute;p cừ C</strong></p>

<p><img alt="Trong hình ảnh có thể có: bầu trời, cây và ngoài trời" src="https://scontent.fdad5-1.fna.fbcdn.net/v/t1.0-9/p720x720/70014256_714322022373220_4455988403065847808_o.jpg?_nc_cat=101&amp;_nc_ohc=DRHvkrau-8QAX_ZpqOr&amp;_nc_ht=scontent.fdad5-1.fna&amp;_nc_tp=6&amp;oh=44b6577502af9b31946d44fb7e6f6549&amp;oe=5EBBEF15" /></p>

<p><strong>C&uacute;ng động thổ</strong></p>

<p><img alt="Trong hình ảnh có thể có: bầu trời, cây và ngoài trời" src="https://scontent.fdad5-1.fna.fbcdn.net/v/t1.0-9/p720x720/70037553_714321729039916_9100853520596205568_o.jpg?_nc_cat=107&amp;_nc_ohc=KqLl8lohUPwAX_3U9mu&amp;_nc_ht=scontent.fdad5-1.fna&amp;_nc_tp=6&amp;oh=cf9e5fe826ce38a561c680ea35fb808c&amp;oe=5F0303DC" /></p>

<p>&nbsp;</p>
', 'project2.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44',1),
(3, 'VILLA OF BOSS_11_DCONSTECH', 'Boss', 'CÔNG TY TNHH TVXD & TM DCONSTECH', '\" Nhà của sếp \" Tựa đề đã nói lên tất cả. Cám ơn sếp đã tin tưởng chúng tôi, chúng tôi tự tin sẽ làm sếp hài lòng. Biệt thự 3 tầng với phong cách hiện đại tọa lạc tại một trong những khu Vip nhất Đà Nẵng \"', 250, 560, 90, 0, 1, '<p><strong>X&acirc;y tường</strong></p>

<p><img alt="Trong hình ảnh có thể có: giày và ngoài trời" src="https://scontent.fdad5-1.fna.fbcdn.net/v/t1.0-9/p720x720/69636737_706997406439015_8391769409462468608_o.jpg?_nc_cat=107&amp;_nc_ohc=SlJuYq2VCssAX__7Luo&amp;_nc_ht=scontent.fdad5-1.fna&amp;_nc_tp=6&amp;oh=9786dd4e9dedf447f8b332d6667026b2&amp;oe=5F03503F" /></p>

<p><img alt="Trong hình ảnh có thể có: ngoài trời" src="https://scontent.fdad5-1.fna.fbcdn.net/v/t1.0-9/69852381_706997606438995_1324835267210641408_o.jpg?_nc_cat=106&amp;_nc_ohc=8YZDXVntnqgAX-RKGJz&amp;_nc_ht=scontent.fdad5-1.fna&amp;oh=a4fe33db3042b2e4a3104bf6aab670bb&amp;oe=5EC31BA4" /></p>

<p><img alt="Trong hình ảnh có thể có: ngoài trời" src="https://scontent.fdad5-1.fna.fbcdn.net/v/t1.0-9/p720x720/69335263_706997466439009_1591860578073182208_o.jpg?_nc_cat=107&amp;_nc_ohc=nrxRB5G73gYAX-pYtQU&amp;_nc_ht=scontent.fdad5-1.fna&amp;_nc_tp=6&amp;oh=8263b7f40d6382788b7297e782bf885f&amp;oe=5EC391DA" /></p>

<p>&nbsp;</p>

<p><strong>Khoan b&aacute;t r&acirc;u x&acirc;y tường</strong></p>

<p><img alt="Trong hình ảnh có thể có: cây, thực vật, bầu trời và ngoài trời" src="https://scontent.fdad5-1.fna.fbcdn.net/v/t1.0-9/p720x720/69251680_706997796438976_6571705034130587648_o.jpg?_nc_cat=105&amp;_nc_ohc=VhsAbfjausEAX8oPMdk&amp;_nc_ht=scontent.fdad5-1.fna&amp;_nc_tp=6&amp;oh=6c3b710a4285a4b68a0160f9fc18d688&amp;oe=5EFCBFE9" /></p>




<p>&nbsp;</p>
', 'project3.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44',1),
(4, 'MS KHƯƠNG HOUSE_18_DCONSTECH', 'MS KHƯƠNG', 'CÔNG TY TNHH TVXD & TM DCONSTECH', 'Chuyện giờ mới kể : khởi công vào tháng 9 sương sương, trời thì vẫn cứ mưa, nhà thì vẫn cứ xây, ngồi nhà của ms Khương nên hình như vậy. Cảm ơn chị đã đặt trọn niềm tin vào chúng tôi để xây dựng ngôi nhà mơ ước.', 120, 185, 90, 0, 2, '', 'project4.png','2020-01-16 01:08:44','2020-01-16 01:08:44',1),
(5, 'MR KHÁNH HOUSE_15_DCONSTECH', 'Mr Khánh', 'CÔNG TY TNHH TVXD & TM DCONSTECH', 'Ngôi nhà 5 tầng ban đầu được đơn vị thiết kế S3 thiết kế với kết cấu thép với chi phí rất cao. Với sự tư vấn của chúng tôi, chủ đầu tư đã đồng ý chuyển sang phương án BTCT với chi phí phải chăng và mang lại hiệu quả lâu dài. ', 100, 500, 120, 0, 2, '', 'project5.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44',1),
(6, 'MR THƯƠNG HOUSE_07_DCONSTECH', 'Mr Thương', 'CÔNG TY TNHH TVXD & TM DCONSTECH', 'Mr Thương House_25/05/2019. Ngôi nhà 3 tầng trên diện tích lô đất rộng 200m2 được thiết kế các không gian thoáng và nhiều ánh sáng như mong muốn của chủ nhà. ', 250, 420, 120, 0, 2, '', 'project6.jpg','2020-01-16 01:08:44','2020-01-16 01:08:44',1);

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
(1, 'Thiết kế công trình', '<table cellspacing="0" style="border-collapse:collapse; width:1352px">
	<tbody>
		<tr>
			<td colspan="6" style="border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; height:53px; text-align:center; vertical-align:bottom; white-space:nowrap; width:1352px"><span style="font-size:19px"><strong><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">BẢNG B&Aacute;O GI&Aacute; PH&Iacute; THIẾT KẾ C&Ocirc;NG TR&Igrave;NH</span></span></strong></span></td>
		</tr>
		<tr>
			<td rowspan="2" style="background-color:#c6e0b4; border-bottom:.7px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:50px; text-align:center; vertical-align:middle; white-space:normal; width:172px"><span style="font-size:19px"><strong><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Loại h&igrave;nh c&ocirc;ng tr&igrave;nh</span></span></strong></span></td>
			<td rowspan="2" style="background-color:#c6e0b4; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><strong><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Loại h&igrave;nh thiết kế</span></span></strong></span></td>
			<td colspan="2" style="background-color:#c6e0b4; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><strong><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Đơn gi&aacute;</span></span></strong></span></td>
			<td rowspan="2" style="background-color:#c6e0b4; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><strong><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Th&agrave;nh phần hồ sơ</span></span></strong></span></td>
			<td rowspan="2" style="background-color:#c6e0b4; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><strong><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">C&aacute;c giai đoạn thanh to&aacute;n</span></span></strong></span></td>
		</tr>
		<tr>
			<td style="background-color:#c6e0b4; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:25px; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><strong><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Hiện Đại</span></span></strong></span></td>
			<td style="background-color:#c6e0b4; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><strong><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Cổ Điển</span></span></strong></span></td>
		</tr>
		<tr>
			<td rowspan="3" style="border-bottom:.7px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:789px; text-align:center; vertical-align:middle; white-space:normal; width:172px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Nh&agrave; l&ocirc; phố<br />
			Nh&agrave; ống<br />
			Nh&agrave; cấp 4<br />
			Văn ph&ograve;ng cho Thu&ecirc;</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Thiết kế Kiến tr&uacute;c</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">80.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">100.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">1. Bản vẽ kiến tr&uacute;c<br />
			2. Phối cảnh 3D ngoại thất<br />
			3. Bản vẽ kết cấu x&acirc;y dựng<br />
			4. Bản vẽ triển khai kiến tr&uacute;c<br />
			5. Sơ đồ điện nước<br />
			6. Bản vẽ xin ph&eacute;p x&acirc;y dựng<br />
			- Ri&ecirc;ng với hồ sơ thiết kế cải tạo c&oacute; th&ecirc;m bản vẽ hiện trạng, bản vẽ đập ph&aacute;.</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">* Tư vấn (miễn ph&iacute;).<br />
			1. Ứng 10% gi&aacute; trị hợp đồng để l&agrave;m phương &aacute;n mặt bằng v&agrave; phương &aacute;n phối cảnh 3D<br />
			2. Ứng 20% gi&aacute; trị hợp đồng sau khi thống nhất phương &aacute;n mặt bằng v&agrave; phối cảnh 3D<br />
			3. Ứng 20% gi&aacute; trị hợp đồng sau khi giao hồ sơ XPXD<br />
			4. Thanh to&aacute;n 50% gi&aacute; trị hợp đồng c&ograve;n lại khi b&agrave;n giao hồ sơ thiết kế</span></span></span></td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:218px; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Thiết kế Nội thất</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">80.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">100.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">1. Thiết kế nội thất kh&ocirc;ng gian 3D<br />
			2. Bản vẽ triển khai nội thất<br />
			3. Bản vẽ bố tr&iacute; trần đ&egrave;n<br />
			- Ri&ecirc;ng với hồ sơ thiết kế cải tạo c&oacute; th&ecirc;m bản vẽ hiện trạng, bản vẽ đập ph&aacute;.</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">* Tư vấn (miễn ph&iacute;).<br />
			1. Ứng 20% gi&aacute; trị hợp đồng sau khi k&yacute; hợp đồng<br />
			2. Ứng 30% chốt phương &aacute;n 3D nội thất<br />
			3. Thanh to&aacute;n 50% gi&aacute; trị hợp đồng c&ograve;n lại khi b&agrave;n giao hồ sơ thiết kế</span></span></span></td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:296px; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Thiết kế trọn g&oacute;i</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">120.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">140.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">1. Bản vẽ kiến tr&uacute;c<br />
			2. Phối cảnh 3D ngoại thất<br />
			3. Thiết kế nội thất kh&ocirc;ng gian 3D<br />
			4. Bản vẽ triển khai kiến tr&uacute;c &amp; nội thất<br />
			5. Bản vẽ điện nước<br />
			6. Bản vẽ kết cấu x&acirc;y dựng<br />
			7. Hồ sơ xin ph&eacute;p x&acirc;y dựng<br />
			- Ri&ecirc;ng với hồ sơ thiết kế cải tạo c&oacute; th&ecirc;m bản vẽ hiện trạng, bản vẽ đập ph&aacute;.</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">* Tư vấn (miễn ph&iacute;).<br />
			1. Ứng 10% gi&aacute; trị hợp đồng để l&agrave;m phương &aacute;n mặt bằng v&agrave; phương &aacute;n phối cảnh 3D<br />
			2. Ứng 20% gi&aacute; trị hợp đồng sau khi thống nhất phương &aacute;n mặt bằng v&agrave; phối cảnh 3D<br />
			3. Ứng 20% gi&aacute; trị hợp đồng sau khi giao hồ sơ XPXD<br />
			4. Thanh to&aacute;n 50% gi&aacute; trị hợp đồng c&ograve;n lại khi b&agrave;n giao hồ sơ thiết kế</span></span></span></td>
		</tr>
		<tr>
			<td rowspan="3" style="border-bottom:.7px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:913px; text-align:center; vertical-align:middle; white-space:normal; width:172px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Biệt thự<br />
			Qu&aacute;n Coffee</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Thiết kế Kiến tr&uacute;c</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">100.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">120.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">1. Bản vẽ kiến tr&uacute;c<br />
			2. Phối cảnh 3D ngoại thất<br />
			3. Bản vẽ kết cấu x&acirc;y dựng<br />
			4. Bản vẽ triển khai kiến tr&uacute;c<br />
			5. Sơ đồ điện nước<br />
			6. Bản vẽ xin ph&eacute;p x&acirc;y dựng<br />
			- Ri&ecirc;ng với hồ sơ thiết kế cải tạo c&oacute; th&ecirc;m bản vẽ hiện trạng, bản vẽ đập ph&aacute;.</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">* Tư vấn (miễn ph&iacute;).<br />
			1. Ứng 10% gi&aacute; trị hợp đồng để l&agrave;m phương &aacute;n mặt bằng v&agrave; phương &aacute;n phối cảnh 3D<br />
			2. Ứng 20% gi&aacute; trị hợp đồng sau khi thống nhất phương &aacute;n mặt bằng v&agrave; phối cảnh 3D<br />
			3. Ứng 20% gi&aacute; trị hợp đồng sau khi giao hồ sơ XPXD<br />
			4. Thanh to&aacute;n 50% gi&aacute; trị hợp đồng c&ograve;n lại khi b&agrave;n giao hồ sơ thiết kế</span></span></span></td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:235px; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Thiết kế Nội thất</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">100.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">120.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">1. Thiết kế nội thất kh&ocirc;ng gian 3D<br />
			2. Bản vẽ triển khai nội thất<br />
			3. Bản vẽ bố tr&iacute; trần đ&egrave;n<br />
			- Ri&ecirc;ng với hồ sơ thiết kế cải tạo c&oacute; th&ecirc;m bản vẽ hiện trạng, bản vẽ đập ph&aacute;.</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">* Tư vấn (miễn ph&iacute;).<br />
			1. Ứng 20% gi&aacute; trị hợp đồng sau khi k&yacute; hợp đồng<br />
			2. Ứng 30% chốt phương &aacute;n 3D nội thất<br />
			3. Thanh to&aacute;n 50% gi&aacute; trị hợp đồng c&ograve;n lại khi b&agrave;n giao hồ sơ thiết kế</span></span></span></td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:362px; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Thiết kế trọn g&oacute;i</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">140.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">160.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">1. Bản vẽ kiến tr&uacute;c<br />
			2. Phối cảnh 3D ngoại thất<br />
			3. Thiết kế nội thất kh&ocirc;ng gian 3D<br />
			4. Bản vẽ triển khai kiến tr&uacute;c &amp; nội thất<br />
			5. Bản vẽ điện nước<br />
			6. Bản vẽ kết cấu x&acirc;y dựng<br />
			7. Hồ sơ xin ph&eacute;p x&acirc;y dựng<br />
			- Ri&ecirc;ng với hồ sơ thiết kế cải tạo c&oacute; th&ecirc;m bản vẽ hiện trạng, bản vẽ đập ph&aacute;.</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">* Tư vấn (miễn ph&iacute;).<br />
			1. Ứng 10% gi&aacute; trị hợp đồng để l&agrave;m phương &aacute;n mặt bằng v&agrave; phương &aacute;n phối cảnh 3D<br />
			2. Ứng 20% gi&aacute; trị hợp đồng sau khi thống nhất phương &aacute;n mặt bằng v&agrave; phối cảnh 3D<br />
			3. Ứng 20% gi&aacute; trị hợp đồng sau khi giao hồ sơ XPXD<br />
			4. Thanh to&aacute;n 50% gi&aacute; trị hợp đồng c&ograve;n lại khi b&agrave;n giao hồ sơ thiết kế</span></span></span></td>
		</tr>
		<tr>
			<td rowspan="3" style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:652px; text-align:center; vertical-align:middle; white-space:normal; width:172px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Karaoke<br />
			Bar<br />
			Nh&agrave; H&agrave;ng<br />
			Chung cư<br />
			Kh&aacute;ch Sạn</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Thiết kế Kiến tr&uacute;c</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">120.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">140.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">1. Bản vẽ kiến tr&uacute;c<br />
			2. Phối cảnh 3D ngoại thất<br />
			3. Bản vẽ kết cấu x&acirc;y dựng<br />
			4. Bản vẽ triển khai kiến tr&uacute;c<br />
			5. Sơ đồ điện nước<br />
			6. Bản vẽ xin ph&eacute;p x&acirc;y dựng<br />
			7. Hồ sơ xin ph&eacute;p PCCC<br />
			- Ri&ecirc;ng với hồ sơ thiết kế cải tạo c&oacute; th&ecirc;m bản vẽ hiện trạng, bản vẽ đập ph&aacute;.</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">* Tư vấn (miễn ph&iacute;).<br />
			1. Ứng 10% gi&aacute; trị hợp đồng để l&agrave;m phương &aacute;n mặt bằng v&agrave; phương &aacute;n phối cảnh 3D<br />
			2. Ứng 20% gi&aacute; trị hợp đồng sau khi thống nhất phương &aacute;n mặt bằng v&agrave; phối cảnh 3D<br />
			3. Ứng 20% gi&aacute; trị hợp đồng sau khi giao hồ sơ XPXD, XPPCCC<br />
			4. Thanh to&aacute;n 50% gi&aacute; trị hợp đồng c&ograve;n lại khi b&agrave;n giao hồ sơ thiết kế</span></span></span></td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:176px; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Thiết kế Nội thất</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">120.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">140.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">1. Thiết kế nội thất kh&ocirc;ng gian 3D<br />
			2. Bản vẽ triển khai nội thất<br />
			3. Bản vẽ bố tr&iacute; trần đ&egrave;n<br />
			- Ri&ecirc;ng với hồ sơ thiết kế cải tạo c&oacute; th&ecirc;m bản vẽ hiện trạng, bản vẽ đập ph&aacute;.</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">* Tư vấn (miễn ph&iacute;).<br />
			1. Ứng 20% gi&aacute; trị hợp đồng sau khi k&yacute; hợp đồng<br />
			2. Ứng 30% chốt phương &aacute;n 3D nội thất<br />
			3. Thanh to&aacute;n 50% gi&aacute; trị hợp đồng c&ograve;n lại khi b&agrave;n giao hồ sơ thiết kế</span></span></span></td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:257px; vertical-align:middle; white-space:normal; width:140px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">Thiết kế trọn g&oacute;i</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">160.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">180.000 VNĐ/m2</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">1. Bản vẽ kiến tr&uacute;c<br />
			2. Phối cảnh 3D ngoại thất<br />
			3. Thiết kế nội thất kh&ocirc;ng gian 3D<br />
			4. Bản vẽ triển khai kiến tr&uacute;c &amp; nội thất<br />
			5. Bản vẽ điện nước<br />
			6. Bản vẽ kết cấu x&acirc;y dựng<br />
			7. Hồ sơ xin ph&eacute;p x&acirc;y dựng<br />
			8. Hồ sơ xin ph&eacute;p PCCC<br />
			- Ri&ecirc;ng với hồ sơ thiết kế cải tạo c&oacute; th&ecirc;m bản vẽ hiện trạng, bản vẽ đập ph&aacute;.</span></span></span></td>
			<td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:383px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black">* Tư vấn (miễn ph&iacute;).<br />
			1. Ứng 10% gi&aacute; trị hợp đồng để l&agrave;m phương &aacute;n mặt bằng v&agrave; phương &aacute;n phối cảnh 3D<br />
			2. Ứng 20% gi&aacute; trị hợp đồng sau khi thống nhất phương &aacute;n mặt bằng v&agrave; phối cảnh 3D<br />
			3. Ứng 20% gi&aacute; trị hợp đồng sau khi giao hồ sơ XPXD, XPPCCC<br />
			4. Thanh to&aacute;n 50% gi&aacute; trị hợp đồng c&ograve;n lại khi b&agrave;n giao hồ sơ thiết kế</span></span></span></td>
		</tr>
		<tr>
			<td style="border-bottom:none; border-left:none; border-right:none; border-top:none; height:31px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
			<td style="border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:middle; white-space:normal; width:140px">&nbsp;</td>
			<td style="border-bottom:none; border-left:none; border-right:none; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap">&nbsp;</td>
			<td style="border-bottom:none; border-left:none; border-right:none; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap">&nbsp;</td>
			<td style="border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:middle; white-space:normal; width:383px">&nbsp;</td>
			<td style="border-bottom:none; border-left:none; border-right:none; border-top:none; vertical-align:middle; white-space:normal; width:383px">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="6" style="border-bottom:none; border-left:none; border-right:none; border-top:none; height:174px; text-align:left; vertical-align:middle; white-space:normal; width:1352px"><span style="font-size:19px"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:black"><span style="font-size:14pt"><span style="color:black"><strong><u><span style="font-family:&quot;Times New Roman&quot;,serif">Ghi ch&uacute;:</span></u></strong></span></span><br />
			<span style="font-size:14pt"><span style="color:black"><em><span style="font-family:&quot;Times New Roman&quot;,serif">Đơn gi&aacute; tr&ecirc;n chưa bao gồm thuế VAT (nếu chủ đầu tư y&ecirc;u cầu)<br />
			Đơn gi&aacute; cải tạo nh&acirc;n hệ số 1,25<br />
			Diện t&iacute;ch tổng dưới 200m2 nh&acirc;n hệ số 1,25<br />
			Diện t&iacute;ch tổng dưới 100m2 nh&acirc;n hệ số 1,5<br />
			Chi ph&iacute; tr&ecirc;n kh&ocirc;ng bao gồm chi ph&iacute; thiết kế s&acirc;n vườn, cổng, h&agrave;ng r&agrave;o, hồ bơi ngo&agrave;i trời, dự to&aacute;n,... k&egrave;m theo<br />
			Hồ sơ được in th&agrave;nh 2 bộ A3-A1 t&ugrave;y theo loại loại c&ocirc;ng tr&igrave;nh gồm 1 bộ gốc c&oacute; dấu v&agrave; chữ k&yacute; của c&aacute;c th&agrave;nh vi&ecirc;n tham gia thiết kế v&agrave; hai bộ photocopy của bộ gốc. B&ecirc;n thiết kế ho&agrave;n to&agrave;n chịu tr&aacute;ch nhiệm về hồ sơ thiết kế trước ph&aacute;p luật. Kh&aacute;ch h&agrave;ng bảo quản hồ sơ gốc, mọi chỉnh sửa phải được b&ecirc;n thiết kế đồng &yacute; v&agrave;o hồ sơ gốc.</span></em></span></span></span></span></span></td>
		</tr>
	</tbody>
</table>
', 1),
(2,'Thi công xây dựng','<ol style="list-style-type:upper-alpha">
	<li style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">Thi c&ocirc;ng ph&iacute;:</span></strong><strong> </strong></span></span></li>
</ol>
<table align="center" class="Table" style="height:100%; width:100%">
	<thead>
		<tr>
			<th scope="col">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">STT</span> </strong></span></span></p>
			</th>
			<th scope="col">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">HẠNG MỤC THI C&Ocirc;NG</span> </strong></span></span></p>
			</th>
			<th scope="col">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>Đ</strong> <strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">VT</span> </strong></span></span></p>
			</th>
			<th scope="col">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong>ĐƠN GI</strong> <strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">&Aacute; (VNĐ)</span> </strong></span></span></p>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">1</span></span></p>
			</td>
			<td>
			<p><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">Thi c&ocirc;ng x&acirc;y dựng trọn g&oacute;i</span> </strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-family:VNI-Times">m<sup>2</sup></span> </span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:VNI-Times">5.000.000 &ndash; 6.000.000</span> </strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">2</span></span></p>
			</td>
			<td>
			<p><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">Thi c&ocirc;ng x&acirc;y dựng th&ocirc;</span> </strong></span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-family:VNI-Times">m<sup>2</sup></span> </span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:VNI-Times">3.100.000 &ndash; 3.500.000</span> </strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">3</span></span></p>
			</td>
			<td>
			<p><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-family:&quot;Tahoma&quot;,sans-serif">Thi c&ocirc;ng nội thất</span> </span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-family:VNI-Times">m<sup>2</sup></span> </span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-family:&quot;Tahoma&quot;,sans-serif">Theo bản thiết kế</span> </span></span></p>
			</td>
		</tr>
		<tr>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">4</span></span></p>
			</td>
			<td>
			<p><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-family:&quot;Tahoma&quot;,sans-serif">Cải tạo, sữa chữa</span> </span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-family:VNI-Times">m<sup>2</sup></span> </span></span></p>
			</td>
			<td>
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-family:&quot;Tahoma&quot;,sans-serif">Theo bản thiết kế</span> </span></span></p>
			</td>
		</tr>
	</tbody>
</table>
<p><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></span></p>
<ol>
	<li style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">Một số g&oacute;i x&acirc;y dựng trọn g&oacute;i tham khảo</span></strong><strong> </strong></span></span></li>
</ol>
<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">G&oacute;i 1 - Đơn gi&aacute;: </span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">5</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">.</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">5</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">00.000 đ/m<sup>2</sup></span></strong><strong> </strong></span></span></p>
<ul>
	<li style="list-style-type:none">
	<ul style="list-style-type:circle">
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Việt Mỹ , Việt &Uacute;c </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng s&ocirc;ng gianh , Hải V&acirc;n </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;t T&uacute;y Loan , Cầu Đỏ </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Phước Tường </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch ống tổ hợp. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch nền &lt;= 150.000 đ/m<sup>2</sup>. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch ốp tường &lt;= 120.000 đ/m<sup>2</sup>. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch viền tường &lt;= 8.000 đ/vi&ecirc;n. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Mặt cầu thang, bếp: Đ&aacute; Granite v&acirc;n thừong </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tay vịn cầu thang, lan can cầu thang, lan can mặt tiền: sắt sơn &lt;= 550.000 đ/1m tới. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ống cấp tho&aacute;t nước B&igrave;nh minh</span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bồn nước inox Đại Th&agrave;nh 1.000L. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện Dasaco, Taya , ống ruột g&agrave;. cadivi</span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng tắc + ổ cắm ChengLi , Sino </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n thắp s&aacute;ng + tăng ph&ocirc; Điện Quang. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa đi, cửa sổ c&aacute;c loại: sắt, k&iacute;nh 5mm. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Kh&oacute;a cửa &lt;= 100.000 đ/bộ. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa WC: nhựa. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sơn nước Toa ,maxiline </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bột tr&eacute;t Toa ,maxiline</span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sơn dầu Expo. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bộ bồn cầu, lavap&ocirc;, gương soi, v&ograve;i sen &lt;= 4.500.000 đ/wc. </span></span></li>
	</ul>
	</li>
</ul>
<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">G&oacute;i&nbsp;2 - Đơn gi&aacute;: 6.</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">0</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">00.000 đ/m<sup>2</sup></span></strong><strong> </strong></span></span></p>
<ul>
	<li style="list-style-type:none">
	<ul style="list-style-type:circle">
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Việt Mỹ , &Uacute;c </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng S&ocirc;ng gianh .Kim Đỉnh </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;t T&uacute;y Loan. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Phước Tường </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch ống Tuynen Lộc an, Th&aacute;i tuấn </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch nền &lt;= 200.000 đ/m<sup>2</sup>. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch ốp tường &lt;= 150.000 đ/m<sup>2</sup>. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch len tường &lt;= 10.000 đ/vi&ecirc;n. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Mặt cầu thang, bếp: Đ&aacute; hoa cương &lt;= 1.000.000 đ/m<sup>2</sup>. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Tay vịn cầu thang: gỗ sồi, lan can cầu thang sắt , hoặc k&iacute;nh cường lực&lt;= 1.200.000&nbsp;đ/1 m tới. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ống cấp tho&aacute;t nước B&igrave;nh Minh. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bồn nước inox Đại Th&agrave;nh, T&acirc;n &aacute;, 1.000L. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện Cadivi, ống ruột g&agrave;. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&ocirc;ng tắc + ổ cắm Clipsal. sino</span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&egrave;n thắp s&aacute;ng + tăng ph&ocirc; Philip. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa đi ch&iacute;nh, cửa sổ c&aacute;c loại: nhự l&otilde;i th&eacute;p , k&iacute;nh 5mm. Cường lực</span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa ph&ograve;ng ngủ: gỗ c&ocirc;ng nghiệp&nbsp;&lt;= 1.200.000&nbsp;đ/m<sup>2</sup>, k&iacute;nh 5mm.&nbsp; </span></span></li>
	</ul>
	</li>
</ul>
<p style="margin-left:6px"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="font-size:10.0pt"><span style="font-family:&quot;Courier New&quot;">o</span></span>&nbsp;&nbsp;&nbsp; Kh&oacute;a cửa &lt;= 150.000 đ/bộ.</span></span></p>
<ol style="list-style-type:upper-alpha">
	<li style="list-style-type:none">
	<ul style="list-style-type:circle">
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Cửa WC: nh&ocirc;m trắng, k&iacute;nh 5mm. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sơn nước Maxilite. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bột tr&eacute;t Joton. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Sơn dầu Expo. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Bộ bồng cầu, lavap&ocirc;, gương soi, v&ograve;i sen &lt;= 5.000.000 đ/wc.&nbsp; </span></span></li>
	</ul>
	</li>
	<li style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">Một số g&oacute;i x&acirc;y dựng th&ocirc; tham khảo</span></strong><strong> </strong></span></span></li>
</ol>
<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">G&oacute;i 1 - Đơn gi&aacute;: </span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">3</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">.</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">1</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">00.000 đ/m<sup>2</sup></span></strong><strong> </strong></span></span></p>
<ul>
	<li style="list-style-type:none">
	<ul style="list-style-type:circle">
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Việt mỹ hoặc tương đương. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng Hải V&acirc;n. S&ocirc;ng gianh</span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;t T&uacute;y Loan. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Phước Tường </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch ống tổ hợp. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ống cấp tho&aacute;t nước Đạt H&ograve;a </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện Dasaco, ống ruột g&agrave;. </span></span></li>
	</ul>
	</li>
</ul>
<p style="margin-left:48px; text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">G&oacute;i&nbsp;2 - Đơn gi&aacute;: </span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">3</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">.</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">5</span></strong><strong><span style="font-family:&quot;Tahoma&quot;,sans-serif">00.000 đ/m<sup>2</sup></span></strong><strong> </strong></span></span></p>
<ol>
	<li style="list-style-type:none">
	<ul style="list-style-type:circle">
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Th&eacute;p Việt &uacute;c hoặc H&ograve;a ph&aacute;t. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Xi măng kim đỉnh. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">C&aacute;t T&uacute;y Loan </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đ&aacute; Phước Tường </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Gạch ống Tuynen. </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Ống cấp tho&aacute;t nước B&igrave;nh Minh </span></span></li>
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">D&acirc;y điện cadivi , ống ruột g&agrave;. </span></span></li>
	</ul>
	</li>
	<li style="text-align:justify" value="1">
	<ul style="list-style-type:circle">
		<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="font-family:&quot;Tahoma&quot;,sans-serif">Ghi ch&uacute;:</span></u></strong><strong><u> </u></strong></span></span>
		<ul style="list-style-type:square">
			<li><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">Đơn gi&aacute; tr&ecirc;n c&oacute; t&iacute;nh chất tham khảo. Gi&aacute; ch&iacute;nh x&aacute;c sẽ được b&aacute;o gi&aacute; theo đ&uacute;ng bảng thiết kế. </span></span></li>
		</ul>
		</li>
	</ul>
	</li>
</ol>
<p style="text-align:center"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="color:#333333">BẢNG B&Aacute;O GI&Aacute; THI C&Ocirc;NG X&Acirc;Y DỰNG PHẦN TH&Ocirc; 2020</span></strong></span></span></span></p>
<p style="text-align:center"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">DCONSTECH </span><span style="color:#333333">&nbsp;tr&acirc;n trọng gửi đến qu&yacute; kh&aacute;ch h&agrave;ng bảng&nbsp;<strong>b&aacute;o gi&aacute; thi c&ocirc;ng x&acirc;y dựng</strong>&nbsp;phần th&ocirc; &aacute;p dụng từ ng&agrave;y 01/0</span><span style="color:#333333">1</span><span style="color:#333333">/20</span><span style="color:#333333">20</span><span style="color:#333333"> như sau:</span> </span></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="color:#333333">B&Aacute;O GI&Aacute; THI C&Ocirc;NG X&Acirc;Y DỰNG PHẦN TH&Ocirc;</span></strong><strong> </strong></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<table align="center" cellspacing="0" class="Table" style="background:white; border-collapse:collapse; width:524px">
	<tbody>
		<tr>
			<td style="background-color:white; height:.25in; vertical-align:top; width:295px">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="color:#333333">LOẠI C&Ocirc;NG TR&Igrave;NH</span> </strong></span></span></p>
			</td>
			<td style="background-color:white; height:.25in; vertical-align:top; width:295px">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="color:#333333">ĐƠN GI&Aacute;</span> </strong></span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; height:34px; vertical-align:top; width:295px">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">NH&Agrave; PHỐ</span> </span></span></p>
			</td>
			<td style="background-color:white; height:34px; vertical-align:top; width:295px">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">3.100.000 đ/m2 &nbsp;- 3.500.000đ/m2</span> </span></span></p>
			</td>
		</tr>
		<tr>
			<td style="background-color:white; height:34px; vertical-align:top; width:295px">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">BIỆT THỰ</span> </span></span></p>
			</td>
			<td style="background-color:white; height:34px; vertical-align:top; width:295px">
			<p style="text-align:center"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">3.400.000 đ/m2 &nbsp;- 4.000.000đ/m2</span> </span></span></p>
			</td>
		</tr>
	</tbody>
</table>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; &nbsp;<strong><span style="color:#333333">VẬT TƯ SỬ DỤNG THI C&Ocirc;NG X&Acirc;Y DỰNG PHẦN TH&Ocirc;</span> </strong></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; C&aacute;t b&ecirc; t&ocirc;ng: c&aacute;t v&agrave;ng&nbsp;<strong>T&uacute;y Loan , Cầu Đỏ</strong>, C&aacute;t x&acirc;y t&ocirc; ti&ecirc;u chuẩn. ( trừ hạng mục san lấp).</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đ&aacute; 4x6, Đ&aacute; 1x2&nbsp;( Đ&aacute; Phước Tường)</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Th&eacute;p Việt &Uacute;c ,Dana - &Yacute;</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Xi măng Kim Đỉnh hoặc S&ocirc;ng Gianh.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Gạch Tuynel Đ&agrave; Nẵng hoặc Qu&atilde;ng Nam</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ống nước lạnh B&igrave;nh Minh đi &acirc;m tường ( Chịu &aacute;p lực 6 bar).</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; D&acirc;y điện Cadivi đi &acirc;m tường.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; D&acirc;y truyền h&igrave;nh c&aacute;p, ADSL, điện thoại: SINO.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">9.&nbsp; &nbsp; Ống ruột g&agrave; &acirc;m tường, dầm, s&agrave;n loại 1</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><span style="color:red">Tất cả hạn mục thi c&ocirc;ng đảm bảo đ&uacute;ng y&ecirc;u cầu chất lượng, kỹ thuật, thi c&ocirc;ng đ&uacute;ng, đủ cấp phối b&ecirc; t&ocirc;ng, m&aacute;c vữa theo hồ sơ thiết kế</span></strong><strong> </strong></span></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;<strong><span style="color:#333333">&nbsp;QUY TR&Igrave;NH THI C&Ocirc;NG X&Acirc;Y DỰNG PHẦN TH&Ocirc;</span> </strong></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tổ chức c&ocirc;ng trường, l&agrave;m l&aacute;n trại cho c&ocirc;ng nh&acirc;n ( nếu mặt bằng cho ph&eacute;p ).</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vệ sinh mặt bằng thi c&ocirc;ng, định vị tim cột, m&oacute;ng.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đ&agrave;o đất v&agrave; vận chuyển x&agrave; bần ra khỏi c&ocirc;ng tr&igrave;nh.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đ&agrave;o hố m&oacute;ng, thi c&ocirc;ng phần m&oacute;ng, m&oacute;ng đơn hoặc m&oacute;ng bằng &nbsp;( hoặc từ đầu cọc &eacute;p, cọc khoan nhồi trở l&ecirc;n).</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thi c&ocirc;ng BTCT s&agrave;n tầng hầm, v&aacute;ch tầng hầm (nếu c&oacute;).</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thi c&ocirc;ng BTCT m&oacute;ng, đ&agrave;, kiềng.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thi c&ocirc;ng hầm tự hoại, hố ga, Bể nước ngầm.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lắp đặt hệ thống tho&aacute;t nước thải trong khu&ocirc;n vi&ecirc;n đất x&acirc;y dựng.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thi c&ocirc;ng c&aacute;c tấm s&agrave;n, cột, đ&agrave;, dầm, lanh t&ocirc;, m&aacute;i b&ecirc; t&ocirc;ng.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">10.&nbsp;&nbsp;&nbsp; Đổ b&ecirc; t&ocirc;ng bản cầu thang theo thiết kế v&agrave; x&acirc;y bậc&nbsp;.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">11.&nbsp;&nbsp;&nbsp; X&acirc;y t&ocirc; tường bao v&agrave; tường ngăn chia ph&ograve;ng.</span> </span></span></span></p>
<p style="margin-left:24px; text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp; </span></span></span></p>
<p style="text-align:justify">&nbsp;</p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><strong><u><span style="color:red">Lưu &yacute;:</span></u></strong><strong><u> &nbsp; </u></strong></span></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">- </span><strong><span style="color:#333333">C&ocirc;ng ty miễn trừ 50% ph&iacute; Tư vấn thiết kế hồ sơ thiết kế cơ sở v&agrave; thi c&ocirc;ng cho hợp đồng trọn g&oacute;i ph&acirc;n th&ocirc; v&agrave; 100% chi ph&iacute; hồ sơ thiết kế thi c&ocirc;ng cho hợp đồng trọn g&oacute;i ho&agrave;n thiện. ( &aacute;p dụng cho nh&agrave; phố v&agrave; biệt thự).</span></strong></span></span></span></p>
<p style="text-align:justify"><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif"><span style="color:#333333">Thi c&ocirc;ng x&acirc;y dựng kho xưởng, trường học, kh&aacute;ch sạn, nh&agrave; văn ph&ograve;ng&hellip;sẽ lập b&aacute;o gi&aacute; chi tiết theo từng hồ sơ thiết kế</span> </span></span></span></p>
<p><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">Lh:<strong>C&Ocirc;NG TY TNHH</strong><strong> TƯ VẤN X&Acirc;Y DỰNG &amp;THƯƠNG MẠI DCONSTECH</strong></span></span></span></p>
<p><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">Địa chỉ : 24 Trần Th&aacute;nh T&ocirc;ng , P.An Hải Bắc- Sơn Tr&agrave;- TP Đ&agrave; Nẵng</span></span></span></p>
<p><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">Điện thoại :&nbsp;<strong>09</strong><strong>11412274 &ndash; 0906119274&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></span></span></span></p>
<p><span style="font-size:12pt"><span style="background-color:white"><span style="font-family:&quot;Times New Roman&quot;,serif">Email : lanluu.dconstech@gmail.com</span></span></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
',2);

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
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);
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
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
