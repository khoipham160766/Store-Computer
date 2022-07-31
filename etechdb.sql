-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 10:56 PM
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
-- Database: `etechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `title_blog` varchar(50) NOT NULL,
  `main_img` varchar(250) NOT NULL,
  `sub_recommend` varchar(50) NOT NULL,
  `time_create` datetime NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `id_category`, `title_blog`, `main_img`, `sub_recommend`, `time_create`, `content`) VALUES
(1, 1, 'Khuyễn mãi điện thoại lên tới 20%', 'khuyen-mai-1.jpg', 'Khuyến mãi điện thoại.', '2022-07-29 05:22:49', 'Khuyến mãi tất cả các dòng điện thoại lên tới 20%.'),
(2, 2, 'Hè đến, mua ngay laptop !', 'lapt7_800x450.jpg', 'Khuyến mãi laptop nhân dịp hè tới.', '2022-07-29 05:24:19', 'Khuyến mãi laptop');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `email_user` varchar(50) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `product_img` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`email_user`, `id_category`, `id_product`, `name_product`, `product_img`, `type`, `price`, `quantity`, `name_category`) VALUES
('contrau@gmail.com', 2, 1, 'Laptop Acer Nitro 5 Gaming', 'acer-nitro-5-gaming-an515-57-54mv-i5-11400h-8gb-600x600.jpg', 'Acer', '21190000', '100', 'Laptop'),
('contrau@gmail.com', 2, 2, 'Laptop MSI Gaming GF63', 'msi-gaming-gf63-thin-10sc-i7-10750h-8gb-512gb-600x600.jpg', 'MSI', '18990000', '50', 'Laptop'),
('contrau@gmail.com', 1, 1, 'IPhone 13 Pro Max 128GB', 'iphone-13-pro-max.jpg', 'IPhone', '28390000', '21', 'Điện thoại'),
('contrau@gmail.com', 3, 1, 'Chuột Không Dây Logitech M190', 'chuot-khong-day-logitech-m190-01-600x600.jpg', 'Logitech', '290000', '89', 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(250) NOT NULL,
  `fold_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `fold_img`) VALUES
(1, 'Điện thoại', 'phones'),
(2, 'Laptop', 'laptops'),
(3, 'Phụ kiện', 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_order` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `img_product` varchar(250) NOT NULL,
  `name_product` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `time_send` datetime NOT NULL,
  `content_feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `name`, `email_user`, `time_send`, `content_feedback`) VALUES
(1, 'Phạm Trần Khôi', 'khoipham160766@gmail.com', '2022-07-29 05:17:06', 'Kiểm tra database mới');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `time_create` datetime NOT NULL,
  `total_price` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products_accessories`
--

CREATE TABLE `products_accessories` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(250) NOT NULL,
  `sale_percent` varchar(100) NOT NULL,
  `sale_price` varchar(250) NOT NULL,
  `img_product` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `decription` text NOT NULL,
  `time_up` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_accessories`
--

INSERT INTO `products_accessories` (`id_product`, `id_category`, `type_name`, `name_product`, `color`, `quantity`, `price`, `sale_percent`, `sale_price`, `img_product`, `status`, `decription`, `time_up`) VALUES
(1, 3, 'Logitech', 'Chuột Không Dây Logitech M190', 'Xanh đen', '89', '290000', '0', '0', 'chuot-khong-day-logitech-m190-01-600x600.jpg', 1, 'Thiết kế không dây gọn đẹp, di chuyển tự do\r\n2 bên hông thân chuột Không Dây Logitech M190 có nhiều đường gợn sóng tạo độ bám, cho bạn cầm chuột chắc chắn. Hình dạng chuột uốn cong theo đường cong của bàn tay bạn, phần đuôi chuột nâng cao, vị trí 2 phím trái - phải nâng đỡ và tạo sự dễ chịu cho bàn tay và các ngón tay khi dùng.\r\n\r\nCó 2 gam màu đen và xanh đen sang trọng, lựa chọn lý tưởng cho cả phái mạnh và phái đẹp.', '2022-07-29 17:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `products_laptop`
--

CREATE TABLE `products_laptop` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `hard_drive` varchar(250) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(250) NOT NULL,
  `sale_percent` varchar(100) NOT NULL,
  `sale_price` varchar(250) NOT NULL,
  `img_product` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `other` varchar(250) NOT NULL,
  `chip` varchar(100) NOT NULL,
  `chip_graphic` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `decription` text NOT NULL,
  `time_up` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_laptop`
--

INSERT INTO `products_laptop` (`id_product`, `id_category`, `type_name`, `name_product`, `color`, `hard_drive`, `quantity`, `price`, `sale_percent`, `sale_price`, `img_product`, `weight`, `model`, `os`, `cpu`, `size`, `other`, `chip`, `chip_graphic`, `pin`, `status`, `decription`, `time_up`) VALUES
(1, 2, 'Acer', 'Laptop Acer Nitro 5 Gaming', 'Đen', '512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2TB)Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng (nâng cấp tối đa 1TB)', '100', '21190000', '0', '0', 'acer-nitro-5-gaming-an515-57-54mv-i5-11400h-8gb-600x600.jpg', '2.2', 'Laptop Acer Nitro 5 Gaming AN515 57 54MV i5 11400H/8GB/512GB/4GB RTX3050/144Hz/Win11 (NH.QENSV.003)', 'Windows 11 Home SL', '11400H, 2.7GHz', 'Dài 363.4 mm - Rộng 255 mm - Dày 23.9 mm', 'Đèn bàn phím chuyển màu RGB.', 'Intel Core i5 Tiger Lake - 11400H', 'Card rời - NVIDIA GeForce RTX3050, 4 GB', '4-cell Li-ion, 57.5 Wh', 1, 'Laptop Acer Nitro 5 Gaming AN515 57 54MV i5 (NH.QENSV.003) mang trên mình sức mạnh từ con chip Intel thế hệ 11, card rời cho khả năng tối ưu hoá mọi tác vụ từ đồ hoạ đến game, hứa hẹn sẽ mang đến những trải nghiệm tuyệt vời khó quên cho người dùng.', '2022-07-29 17:12:11'),
(2, 2, 'MSI', 'Laptop MSI Gaming GF63', 'Đen', '512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2TB)Hỗ trợ khe cắm HDD SATA 2.5 inch mở rộng (nâng cấp tối đa 2 TB)', '50', '18990000', '0', '0', 'msi-gaming-gf63-thin-10sc-i7-10750h-8gb-512gb-600x600.jpg', '1.86', 'Laptop MSI Gaming GF63 Thin 10SC i7 10750H/8GB/512GB/4GB GTX1650 Max-Q/Win10 (813VN)', 'Windows 10 Home SL', '2.6', 'Dài 359 mm - Rộng 254 mm - Dày 21.7 mm', 'Có đèn bàn phím.', 'Intel Core i7 Comet Lake - 10750H', 'Card rời - GeForce GTX 1650 Max-Q Design, 4GB', '\r\n3-cell Li-ion, 51 Wh', 1, 'Laptop MSI Gaming GF63 Thin 10SC i7 (813VN) mang hiệu năng mạnh mẽ, đánh bật mọi đối thủ nhờ card rời GTX 1650 Max-Q Design.\r\n• Được bao bọc bởi lớp vỏ nhựa tông màu đen nên laptop chỉ mang trọng lượng khoảng 1.86 kg và dày 21.7 mm, dễ dàng đồng hành cùng bạn.\r\n\r\n• Xử lý mọi tác vụ đồ họa trên phần mềm nhà Adobe như render video, kết xuất 2D,... một cách mượt mà nhờ laptop MSI GF63 Thin sở hữu chip Intel Core i7 Comet Lake 10750H.\r\n\r\n• Trang bị RAM 8 GB, SSD 512 GB cùng card rời GeForce GTX 1650 Max-Q Design 4 GB gia tăng khả năng đồ hoạ, hỗ trợ bạn chiến mượt mà các tựa game thịnh hành như LOL, PUBG,... \r\n\r\n• Trải nghiệm hình ảnh rõ nét, góc nhìn được mở rộng, thị giác được bảo vệ nhờ màn hình 15.6 inch cùng công nghệ chống chói Anti Glare, LED Backlit và tấm nền IPS.\r\n\r\n• Công nghệ Hi-Res và Nahimic Audio được tích hợp trong chiếc laptop gaming này cho âm vòm 3D sống động, chân thật y như đang trong trận chiến.\r\n\r\n• Laptop MSI được trang bị đèn nền đơn sắc và đa dạng các cổng kết nối Type-A USB 3.2 Gen 1, HDMI, LAN (RJ45), USB Type-C nhằm tối ưu hiệu suất làm việc cho bạn.', '2022-07-29 17:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `products_phone`
--

CREATE TABLE `products_phone` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `hard_drive` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `sale_percent` varchar(100) NOT NULL,
  `sale_price` varchar(100) NOT NULL,
  `img_product` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `screen` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `chip` varchar(100) NOT NULL,
  `chip_graphic` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `fast_charging` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `time_up` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_phone`
--

INSERT INTO `products_phone` (`id_product`, `id_category`, `type_name`, `name_product`, `color`, `ram`, `hard_drive`, `quantity`, `price`, `sale_percent`, `sale_price`, `img_product`, `model`, `camera`, `os`, `screen`, `cpu`, `size`, `weight`, `material`, `chip`, `chip_graphic`, `pin`, `fast_charging`, `description`, `status`, `time_up`) VALUES
(1, 1, 'IPhone', 'IPhone 13 Pro Max 128GB', 'Vàng đồng', '8', '128', '21', '28390000', '0', '0', 'iphone-13-pro-max.jpg', 'Điện thoại iPhone 13 Pro Max 128GB', 'Sau: 3 camera 12 MP. Trước: 12MP', 'iOS 15', 'OLED, 6.7\", Super Retina XDR', '3.22', 'Dài 160.8 mm - Ngang 78.1 mm - Dày 7.65 mm', '240', 'Khung thép không gỉ & Mặt lưng kính cường lực', 'Apple A15 Bionic 6 nhân', 'Apple GPU 5 nhân', '4352 ', '20', 'Điện thoại iPhone 13 Pro Max 128 GB - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', 1, '2022-07-29 17:21:38'),
(2, 1, 'Samsung', 'Samsung Galaxy A13 4GB', 'Cam', '4', '64', '20', '4090000', '0', '0', 'Samsung-Galaxy-A13-cam-thumb-600x600.jpg', 'Samsung Galaxy A13 4GB ', 'Sau: Chính 50 MP & Phụ 5 MP, 2 MP, 2 MP .Trước: 8 MP ', 'Android 12', 'PLS TFT LCD, 6.6\", Full HD+', '2.0', 'Dài 165.1 mm - Ngang 76.4 mm - Dày 8.8 mm', '195', 'Khung & Mặt lưng nhựa', '\r\nExynos 850 8 nhân', 'Mali-G52', '\r\n5000', '15', 'Nhằm mang trải nghiệm tốt hơn trên dòng sản phẩm giá rẻ, Samsung cho ra mắt Galaxy A13 4G với một hiệu năng ổn định, camera chụp ảnh sắc nét và viên pin khủng đáp ứng nhu cầu sử dụng cả ngày cho bạn cùng một mức giá trang bị cực kỳ phải chăng.', 1, '2022-07-29 17:21:38'),
(3, 1, 'Oppo', 'OPPO Reno7 Z 5G', 'Bạc', '8', '128', '50', '10490000', '0', '0', 'oppo-reno7-z.jpg', 'OPPO Reno7 Z 5G', 'Sau: Chính 64 MP & Phụ 2 MP, 2 MP.Trước: 16 MP', '\r\nAndroid 11', 'AMOLED, 6.43\", Full HD+', '2.2', 'Dài 159.85 mm - Ngang 73.17 mm - Dày 7.49 mm', '173', '\r\nKhung nhựa & Mặt lưng thuỷ tinh hữu cơ', 'Snapdragon 695 5G 8 nhân', '\r\nAdreno 619', '4500 ', '33', 'OPPO đã trình làng mẫu Reno7 Z 5G với thiết kế OPPO Glow độc quyền, camera mang hiệu ứng như máy DSLR chuyên nghiệp cùng viền sáng kép, máy có một cấu hình mạnh mẽ và đạt chứng nhận xếp hạng A về độ mượt.', 1, '2022-07-29 17:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id_subcategory` int(11) NOT NULL,
  `name_subcategory` varchar(250) NOT NULL,
  `id_category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id_subcategory`, `name_subcategory`, `id_category`) VALUES
(1, 'Acer', 2),
(2, 'MSI', 2),
(3, 'IPhone', 1),
(4, 'Oppo', 1),
(5, 'Samsung', 1),
(6, 'Logitech', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `email`, `password`, `gender`, `status`, `phone_number`, `address`, `avatar`) VALUES
(1, 'Con', 'Trâu', 'contrau@gmail.com', '145a829dff80553d2747dfa14f44cc56', 'Nữ', 1, '0794667091', 'P.Tân Hưng Thuận, Q.12', 'riven.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `id_user` (`email_user`,`id_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD KEY `id_order` (`id_order`,`id_product`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `products_accessories`
--
ALTER TABLE `products_accessories`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `products_laptop`
--
ALTER TABLE `products_laptop`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `products_phone`
--
ALTER TABLE `products_phone`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id_subcategory`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_accessories`
--
ALTER TABLE `products_accessories`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products_laptop`
--
ALTER TABLE `products_laptop`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products_phone`
--
ALTER TABLE `products_phone`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id_subcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `products_accessories`
--
ALTER TABLE `products_accessories`
  ADD CONSTRAINT `products_accessories_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `products_laptop`
--
ALTER TABLE `products_laptop`
  ADD CONSTRAINT `products_laptop_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `products_phone`
--
ALTER TABLE `products_phone`
  ADD CONSTRAINT `products_phone_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
