-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 04:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dongho`
--
CREATE DATABASE IF NOT EXISTS `dongho` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dongho`;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `b_id` int(11) NOT NULL,
  `b_date` date NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `b_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `d_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_quantity` int(11) NOT NULL,
  `p_price` float NOT NULL,
  `p_sale` float NOT NULL,
  `d_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_producer` varchar(50) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_image` text NOT NULL,
  `p_price` float NOT NULL,
  `p_sale` float NOT NULL,
  `p_guarantee` varchar(20) NOT NULL,
  `p_informations` varchar(500) NOT NULL,
  `p_specifications` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_producer`, `p_quantity`, `p_image`, `p_price`, `p_sale`, `p_guarantee`, `p_informations`, `p_specifications`) VALUES
(1, 'Citizen Tsuyosa NJ0150 81L', 'Citizen', 100, 'citizen-tsuyosa-nj0150-81l.webp', 11180000, 0, '1 năm', 'Mẫu Citizen NJ0150-81L phiên bản mặt kính chất liệu kính Sapphire với kích thước nam tính 40mm, kết hợp cùng mẫu dây đeo kim loại mạ bạc phong cách thời trang sang trọng.', 'Thương hiệu: Citizen. Số hiệu sản phẩm: NJ0150-81L. Bộ sưu tập: Citizen Tsuyosa. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 40 mm. Bề dày mặt số: 11.7 mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Xanh. Chống nước: 5 ATM. Chức năng: lịch ngày. Thông số đặc biệt: 21 chân kính, trữ cót 40 giờ'),
(2, 'Citizen Tsuyosa NJ0154 80H', 'Citizen', 100, 'citizen-tsuyosa-nj0154-80h.webp', 12600000, 0, '1 năm', 'Mẫu Citizen NJ0154-80H phiên bản mặt kính chất liệu kính Sapphire với kích thước nam tính 40mm, kết hợp cùng mẫu dây đeo kim loại dây vàng demi phong cách thời trang sang trọng.', 'Thương hiệu: Citizen. Số hiệu sản phẩm: NJ0154-80H. Bộ sưu tập: Citizen Tsuyosa. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 40 mm. Bề dày mặt số: 11.7 mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Đen Xám. Chống nước: 5 ATM. Chức năng: lịch ngày. Thông số đặc biệt: 21 chân kính, trữ cót 40 giờ'),
(3, 'Citizen NH7524-55A', 'Citizen', 100, 'citizen-nh7524-55a.webp', 7985000, 0, '1 năm', 'Đồng hồ Citizen NH7524-55A với kiểu dáng cổ điển, mặt số tròn lớn nam tính, nền số màu trắng cùng kim chỉ và vạch số phủ màu vàng nổi bật, dây đeo demi tinh tế, còn có 1 lịch ngày vị trí 3h tiện dụng.', 'Thương hiệu: Citizen. Số hiệu sản phẩm: NH7524-55A. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 40 mm. Bề dày mặt số: 11 mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Trắng. Chống nước: 5 ATM. Chức năng: lịch ngày – Lịch Thứ – Guilloché. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(4, 'Citizen NJ0080-50E', 'Citizen', 100, 'citizen-nj0080-50e.webp', 11185000, 0, '1 năm', 'Mẫu đồng hồ Citizen NJ0080-50E kích thước mặt số dày dặn với trải nghiệm bộ máy cơ dành cho phái mạnh, các chữ số được in theo phong cách cổ điển chữ số la mã trên nền mặt số tông màu đen quý phái.', 'Thương hiệu: Citizen. Số hiệu sản phẩm: NJ0080-50E. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 42 mm. Bề dày mặt số: 10 mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Đen. Chống nước: 5 ATM. Chức năng: lịch ngày. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(5, 'Citizen NP1026-86A', 'Citizen', 100, 'citizen-np1026-86a.webp', 11185000, 0, '1 năm', 'Vẻ ngoài của một quý ông sang trọng lịch lãm cùng mẫu Citizen NP1026-86A với các chi tiết viền ngoài đồng hồ cho đến nùm vặn được gia công tỉ mỉ bao phủ bên ngoài tone màu vàng nổi bật.', 'Thương hiệu: Citizen. Số hiệu sản phẩm: NP1026-86A. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 40 mm. Bề dày mặt số: 10.7 mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Trắng. Chống nước: 5 ATM. Chức năng: Lên dây cót – Open Heart – Đồng Hồ 24 giờ – Small Second. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(6, 'Casio MWA-100H-7AVDF', 'Casio', 100, 'casio-mwa-100h-7avdf.webp', 1737000, 0, '1 năm', 'Mẫu Casio MWA-100H-7AVDF phiên bản dây đeo cao su với thiết kế phong cách năng động, kết hợp cùng với khả năng chịu nước lên đến 10atm.', 'Thương hiệu: Casio. Số hiệu sản phẩm: MWA-100H-7AVDF. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Resin Glass (Kính nhựa). Máy: Quartz (Pin). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 49.6 mm. Bề dày mặt số: 13.5 mm. Niềng:. Dây đeo: Dây cao su. Màu mặt số: Trắng. Chống nước: 10 ATM. Chức năng: . Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(7, 'Casio LA680WGA-9DF', 'Casio', 100, 'casio-la680wga-9df.webp', 1892000, 0, '1 năm', 'Mẫu đồng hồ nam Casio LA680WGA-9DF khoác lên vẻ sang trọng với vỏ máy cùng dây đeo bằng kim loại mạ vàng nổi bật lên sự nam tính với bộ dây đeo bằng kim loại tạo nên vẻ rắn chắc.', 'Thương hiệu: Casio. Số hiệu sản phẩm: LA680WGA-9DF. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Resin Glass (Kính nhựa). Máy: Quartz (Pin). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 33.5 x 28.6 mm. Bề dày mặt số: 8.6 mm. Niềng:. Dây đeo:. Màu mặt số: Vàng. Chống nước: 3 ATM. Chức năng: Lịch – Bộ Bấm giờ – giờ Kép – Đèn Led – Vài Chức năng Khác. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(8, 'Casio AE1200WHD', 'Casio', 100, 'casio-ae1200whd.webp', 1373000, 0, '1 năm', 'Đồng hồ nam Casio AE1200WHD có mặt đồng hồ vuông to với phong cách thể thao, mặt số điện tử với những Tính năng hiện đại tiện dụng, kết hợp với dây đeo bằng kim loại đem lại vẻ mạnh mẽ cá tính dành cho phái nam.', 'Thương hiệu: Casio. Số hiệu sản phẩm: AE-1200WHD-1AVDF. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Resin Glass (Kính nhựa). Máy: Quartz (Pin). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 45 mm x 42.1 mm. Bề dày mặt số: 12.5 mm. Niềng:. Dây đeo:. Màu mặt số: Đen. Chống nước: 10 ATM. Chức năng: Lịch – Bộ Bấm giờ – giờ Kép – Đèn Led – Vài Chức năng Khác. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(9, 'Doxa GrandeMetre D154RWH', 'Doxa', 100, 'doxa-grandemetre-d154rwh.webp', 144770000, 0, '1 năm', 'Mẫu Doxa D154RWH phiên bản giới hạn 1000 chiếc trên toàn thế giới, sự kết hợp cách điệu giữa các vạch số cùng chữ số la mã dày dặn, điểm nhấn với thiết kế Skeleton cơ lộ máy trước mặt kính Sapphire', 'Thương hiệu: Doxa (Phiên bản giới hạn 1000 chiếc toàn thế giới). Số hiệu sản phẩm: D154RWH. Xuất xứ: Thụy Sỹ. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Handwinding (Lên cót bằng tay). Bảo hành quốc tế: 2 năm. Đường kính mặt số: 40 mm. Bề dày mặt số: 11.2 mm. Niềng: Thép không gỉ. Dây đeo: dây da chính hãng. Màu mặt số: Trắng. Chống nước: 3 ATM. Chức năng:. Nơi sản xuất: Thụy Sỹ. Thông số đặc biệt: tần số dao động 28.800vph, 17 chân kính, trữ cót 42 giờ'),
(10, 'Doxa GrandeMetre D154SWH', 'Doxa', 100, 'doxa-grandemetre-d154swh.webp', 78380000, 0, '1 năm', 'Mẫu đồng hồ Doxa D154SWH phiên bản Limited giới hạn 1000 chiếc trên toàn thế giới, mặt số tròn với các vạch số cùng chữ số la mã to kiểu dáng nam tính, thiết kế Skeleton cơ lộ máy độc đáo trước mặt kính Sapphire.', 'Thương hiệu: Doxa (Phiên Bản Giới Hạn 1000 Chiếc Trên Toàn Thế Giới). Số hiệu sản phẩm: D154SWH – Giới Thiệu Chi Tiết. Xuất xứ: Thụy Sỹ. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Handwinding (Lên Cót Bằng Tay). Bảo hành quốc tế: 2 năm. Đường kính mặt số: 39 mm. Bề dày mặt số: 10 mm. Niềng: Thép không gỉ. Dây đeo: dây da chính hãng. Màu mặt số: Trắng. Chống nước: 3 ATM. Chức năng:. Nơi sản xuất: Thụy Sỹ. Thông số đặc biệt: tần số dao động 28.800VPH, 17 chân kính, trữ cót 42 giờ'),
(11, 'Doxa Noble D205RWL', 'Doxa', 100, 'doxa-noble-d205rwl.webp', 28000000, 0, '1 năm', 'Kiểu dáng dày dặn chứa đựng cả một trải nghiệm nam tính đến từ mẫu đồng hồ nam Doxa D205RWL, kim chỉ vàng hồng kết hợp cùng mẫu dây da nâu có viền chỉ 2 bên mang lại phong cách lịch lãm.', 'Thương hiệu: Doxa. Số hiệu sản phẩm: D205RWL. Xuất xứ: Thụy Sỹ. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo hành quốc tế: 2 năm. Đường kính mặt số: 40 mm. Bề dày mặt số: 10.95 mm. Niềng: Thép không gỉ. Dây đeo: dây da chính hãng. Màu mặt số: Trắng. Chống nước: 5 ATM. Chức năng: lịch ngày – Lịch Thứ. Nơi sản xuất: Thụy Sỹ. Thông số đặc biệt: 26 chân kính, tần số 28.800 VPH, trữ cót 38 giờ'),
(12, 'Orient Open Heart RA-AR0001S10B', 'Orient', 100, 'orient-open-heart-ra-ar0001s10b.webp', 11760000, 0, '1 năm', 'Mẫu Orient RA-AR0001S10B thiết kế đặc trưng Open Heart với ô chân kính lộ ra 1 phần của bô máy cơ tạo nên vẻ độc đáo trước mặt kính Sapphire.', 'Thương hiệu: Orient. Số hiệu sản phẩm: RA-AR0001S10B. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). thời gian trữ cót: 40 giờ. tần số dao ddộng: 21600 vph. chân kính: 24 viên. Lên dây thủ công: Có. Bảo hành quốc tế: 1 năm. Đường kính mặt số: 40.8 mm. Bề dày mặt số: 11 mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Trắng. Chống nước: 5 ATM. Chức năng: Open Heart. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(13, 'Orient Star RE-AU0406L00B ', 'Orient', 50, 'RE-AU0406L00B.webp', 18600000, 10, '1 năm', 'Mẫu Orient RE-AU0406L00B kim chỉ cùng cọc vạch số tạo hình dày dặn phối tone màu vàng hồng thời trang sang trọng trên nền mặt số xanh size 42mm.', 'Thương hiệu: Orient. Số hiệu sản phẩm: RE-AU0406L00B. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 42 mm. Bề dày mặt số: 11.5 mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Xanh. Chống nước: 5 ATM. Chức năng: lịch ngày. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(14, 'Orient Star RE-AV0B03B00B', 'Orient', 50, 'RE-AV0B03B00B.webp', 25750000, 0, '1 năm', 'Mẫu Orient RE-AV0B03B00B phiên bản máy cơ khả năng trữ cót lên đến 50 giờ, thiết kế máy cơ lộ tim tạo nên vẻ độc đáo trên nền mặt số kích thước 41mm', 'Thương hiệu: Orient. Số hiệu sản phẩm: RE-AV0B03B00B. Xuất xứ: Nhật Bản. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo hành quốc tế: 1 năm. Đường kính mặt số: 41 mm. Bề dày mặt số: 13.6 mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Xanh. Chống nước: 10 ATM'),
(15, 'Tissot Le Locle Powermatic 80', 'Tissot', 100, 'T006.407.36.263.00-699x699.webp', 21000000, 0, '2 năm', 'Chiếc đồng hồ Tissot T006.407.36.263.00 thuộc bộ sưu tập Tissot Le Locle Powermatic 80 mang đến sự sang trọng và lịch lãm dành cho quý ông. Sử dụng bộ máy cơ Tự động có thời gian trữ cót lên đến 80 giờ', 'Thương hiệu: Tissot. Số hiệu sản phẩm: T006.407.36.263.00. Xuất xứ: Thụy Sỹ. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo hành quốc tế: 2 năm. Đường kính mặt số: 39.3 mm. Bề dày mặt số: 9.8 mm. thời gian trữ cót: 80 giờ. tần số dao động: 21600 vph. Niềng: Thép không gỉ. Dây đeo: dây da chính hãng. Màu mặt số: Vàng. Chống nước: 3 ATM. Chức năng: lịch ngày – Lên Cót Bằng Tay. Nơi sản xuất: Thụy Sỹ. Thông số đặc biệt: Máy Powermatic 80.111, thời gian trữ cót 80 giờ, 23 chân kính, da bò vân cá sấu, Mạ Vàng PVD'),
(16, ' Tissot T065.430.16.051.00', 'Tissot', 50, 'T065.430.16.051.00-1-699x699.webp', 16100000, 0, '2 năm', 'Đồng hồ Tissot T065.430.16.051.00 với mặt số màu đen, nổi bật với kim chỉ và gạch số được mạ bạc, dây đeo bằng da đen bóng tạo cảm giác mạnh mẽ, lịch lãm cho phái mạnh', 'Thương hiệu: Tissot. Số hiệu sản phẩm: T065.430.16.051.00. Xuất xứ: Thụy Sỹ. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Bảo Hành: Quốc Tế 2 năm. Đường kính mặt số: 39.7 mm. Bề dày mặt số: 9.5 mm. Niềng: Thép không gỉ. Dây đeo: dây da chính hãng. Màu mặt số: Đen. Chống nước: 3 ATM. Chức năng: lịch ngày – Lịch Thứ. Nơi sản xuất: Thụy Sỹ'),
(17, 'Tissot T063.907.16.058.00', 'Tissot', 100, '50_T063.907.16.058.00-699x699.webp', 22050000, 10, '2 năm', 'Mẫu Tissot T063.907.16.058.00 phiên bản máy cơ lộ tim thiết kế độc đáo trên nền mặt số 40mm đi kèm họa tiết Guilloche phong cách thời trang cho phái mạnh', 'Thương hiệu: Tissot. Số hiệu sản phẩm: T063.907.16.058.00. Xuất xứ: Thụy Sỹ. Giới tính: Nam. Kính: Sapphire (Kính chống trầy). Máy: Automatic (Tự động). Lên Dây Thủ Công: Có. Bảo hành quốc tế: 2 năm. Đường kính mặt số: 40 mm. Bề dày mặt số: 9.4 mm. Niềng: Thép không gỉ. Dây đeo: dây da chính hãng. Màu mặt số: Đen. Chống nước: 3 ATM. Chức năng:. Tính năng: Open Heart – Guilloch. Nơi sản xuất: Thụy Sỹ. Thông số đặc biệt: Máy Powermatic 80.601, thời gian trữ cót 80 giờ, tần số dao động 21600 vph, 25 chân kính, da bò vân cá sấu'),
(18, 'Saga 53555-SVMWSV-2', 'Saga', 50, '3_53555-SVMWSV-2-699x699.webp', 5244000, 0, '2 năm', 'Mẫu Saga 53555-SVMWSV-2 phiên bản mạ bạc thời trang với nền mặt số xà cừ size 22mm nổi bật thiết kế đính pha lê Swarovski kết hợp cùng bộ dây đeo tay kiểu dây lắc', 'Thương hiệu: Saga. Số hiệu sản phẩm: 53555 SVMWSV-2. Xuất xứ: Mỹ. Giới tính: Nữ. Kính: Mineral Crystal (Kính cứng). Máy: Quartz (Pin). Bảo hành quốc tế: 2 năm. Bảo Hành Tại Hải Triều: 5 Năm. Đường kính mặt số: 22.5 mm. Bề dày mặt số:  mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Trắng Xà Cừ. Chống nước: 3 ATM. Tính năng: Đính Đá Swarovski. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(19, 'Saga 53555-RGMWRG-2 ', 'Saga', 50, '2_53555-RGMWRG-2-699x699.webp', 5920000, 0, '2 năm', 'Mẫu Saga 53555-RGMWRG-2 phiên bản vàng hồng tone màu thời trang với nền mặt số xà cừ size 22mm nổi bật thiết kế đính pha lê Swarovski kết hợp cùng bộ dây đeo tay kiểu dây lắc', '. Thương hiệu: Saga. Số hiệu sản phẩm: 53555 RGMWRG-2. Xuất xứ: Mỹ. Giới tính: Nữ. Kính: Mineral Crystal (Kính cứng). Máy: Quartz (Pin). Bảo hành quốc tế: 2 năm. Đường kính mặt số: 22.5 mm. Bề dày mặt số:  mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Trắng Xà Cừ. Chống nước: 3 ATM. Tính năng: Đính Đá Swarovski. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc'),
(20, 'Saga Stella 71865-RGMWRG-2L', 'Saga', 50, '13_71865-RGMWRG-2L.webp', 7120000, 0, '2 năm', 'Mẫu Saga 71865-RGMWRG-2L phiên bản kiểu dây lắc tone vàng hồng thời trang sang trọng với thiết kế tinh xảo đính pha lê Swarovski trên phần viền đồng hồ', 'Thương hiệu: Saga. Số hiệu sản phẩm: 71865-RGMWRG-2L. Xuất xứ: Mỹ. Giới tính: Nữ. Kính: Mineral Crystal (Kính cứng). Máy: Quartz (Pin). Bảo hành quốc tế: 2 năm. Đường kính mặt số: 20 mm x 27 mm. Bề dày mặt số: mm. Niềng: Thép không gỉ. Dây đeo: Thép không gỉ. Màu mặt số: Trắng Xà Cừ. Chống nước: 3 ATM. Chức năng. Nơi sản xuất (Tùy từng lô hàng): Trung Quốc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_user` char(20) NOT NULL,
  `u_password` char(20) NOT NULL,
  `u_phone` char(10) NOT NULL,
  `u_address` varchar(50) NOT NULL,
  `u_gmail` char(50) NOT NULL,
  `u_privacy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_user`, `u_password`, `u_phone`, `u_address`, `u_gmail`, `u_privacy`) VALUES
(1, 'admin', 'admin', '1', '12345', 'hcm', 'admin@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);
--
