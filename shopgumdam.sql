-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2023 lúc 03:10 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgumdam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ngaydathang` datetime DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `idgiohang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `ngaybinhluan` datetime DEFAULT NULL,
  `idsanpham` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `ngaybinhluan`, `idsanpham`) VALUES
(31, 'Sản phẩm tốt', 17, '2023-12-05 15:44:17', 27),
(32, 'Sản phẩm tốt', 17, '2023-12-05 15:44:21', 27),
(38, 'sản phẩm rất tốt', 5, '2023-12-05 17:20:43', 28),
(39, 'sản phẩm rất tốt', 5, '2023-12-05 17:20:50', 28),
(45, 'sản phẩm đẹp', 5, '2023-12-06 22:14:00', 28),
(46, 'sản phẩm rất tốt và đáng giá mua', 5, '2023-12-06 22:14:31', 28),
(48, 'sản phẩm rất tốt', 5, '2023-12-06 22:19:01', 30),
(49, 'rất đẹp', 5, '2023-12-06 22:19:28', 30),
(50, 'sản phẩm tốt', 5, '2023-12-06 22:27:21', 27),
(51, 'đẹp', 5, '2023-12-06 22:28:10', 27),
(52, 'đẹp', 5, '2023-12-06 22:28:36', 28),
(53, 'đẹp', 5, '2023-12-07 00:05:18', 29),
(54, 'đẹp', 5, '2023-12-07 00:20:06', 29),
(55, 'dfhfghfghfg', 5, '2023-12-07 20:28:12', 28),
(56, 'tỷty', 5, '2023-12-11 00:04:10', 32),
(57, 'đẹp', 5, '2023-12-12 08:47:53', 31);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `idsanpham` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `name_dm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `name_dm`) VALUES
(11, 'Gundam HG'),
(12, 'Gundam MG'),
(13, 'Gundam PG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohangchitiet`
--

CREATE TABLE `giohangchitiet` (
  `id` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `idcart` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,3) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `iddm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `name`, `price`, `image`, `mota`, `iddm`) VALUES
(27, 'Mô hình Bandai Gundam HG 00 Cherudim GNHW/R', 650000.000, 'hg.jpg', 'Mô hình Bandai Gundam HG 00 Cherudim GNHW/R\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : HG\r\n\r\nChiều cao: 13-16cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– Sản phậm nhựa cao cấp với độ sắc nét cao\r\n\r\n– Sản xuất bởi Bandai Namco – Nhật Bản Chính hãng\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Rèn luyện tính kiên nhẫn cho người chơi\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: High Grade (HG)\r\nLà dòng kit phổ thông của có độ chi tiết ở mức trung bình khá nhưng Bandai vẫn cho người chơi thấy được sự cao cấp trong chất nhựa cũng như thiết kế của họ đặc biệt là trong những năm gần đây. Là dòng kit phổ thông có chiều cao khoảng 14cm nên tất cả các mẫu gundam xuất hiện trong phim truyện hay tiểu thiếu thì đều sẽ có cỡ HG. HG cũng là dòng mà người mới chơi dùng để làm quen với gunpla cũng như người lâu năm dùng để sưu tầm các mẫu mình thích hay các builder/modeler dùng để độ lại do ưu thế về mật độ mẫu cũng như về giá của nó.', 11),
(28, 'Mô hình Bandai Gundam HG 00 Sky HWS Trans-AM Infinite Mode', 650000.000, 'hg1.jpg', 'Mô hình Bandai Gundam HG 00 Sky HWS Trans-AM Infinite Mode\r\n\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : HG\r\n\r\nChiều cao: 13-16cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– Sản phậm nhựa cao cấp với độ sắc nét cao\r\n\r\n– Sản xuất bởi Bandai Namco – Nhật Bản Chính hãng\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Rèn luyện tính kiên nhẫn cho người chơi\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: High Grade (HG)\r\nLà dòng kit phổ thông của có độ chi tiết ở mức trung bình khá nhưng Bandai vẫn cho người chơi thấy được sự cao cấp trong chất nhựa cũng như thiết kế của họ đặc biệt là trong những năm gần đây. Là dòng kit phổ thông có chiều cao khoảng 14cm nên tất cả các mẫu gundam xuất hiện trong phim truyện hay tiểu thiếu thì đều sẽ có cỡ HG. HG cũng là dòng mà người mới chơi dùng để làm quen với gunpla cũng như người lâu năm dùng để sưu tầm các mẫu mình thích hay các builder/modeler dùng để độ lại do ưu thế về mật độ mẫu cũng như về giá của nó.', 11),
(29, 'Mô Hình Bandai Gundam HG AW GUNDAM AIRMASTER', 590000.000, 'hg2.jpg', 'Mô Hình Bandai Gundam HG AW GUNDAM AIRMASTER\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : HG\r\n\r\nChiều cao: 13-16cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– Sản phậm nhựa cao cấp với độ sắc nét cao\r\n\r\n– Sản xuất bởi Bandai Namco – Nhật Bản Chính hãng\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Rèn luyện tính kiên nhẫn cho người chơi\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: High Grade (HG)\r\nLà dòng kit phổ thông của có độ chi tiết ở mức trung bình khá nhưng Bandai vẫn cho người chơi thấy được sự cao cấp trong chất nhựa cũng như thiết kế của họ đặc biệt là trong những năm gần đây. Là dòng kit phổ thông có chiều cao khoảng 14cm nên tất cả các mẫu gundam xuất hiện trong phim truyện hay tiểu thiếu thì đều sẽ có cỡ HG. HG cũng là dòng mà người mới chơi dùng để làm quen với gunpla cũng như người lâu năm dùng để sưu tầm các mẫu mình thích hay các builder/modeler dùng để độ lại do ưu thế về mật độ mẫu cũng như về giá của nó.', 11),
(30, 'Mô hình Bandai Gundam HGBF Transient Glacier', 700000.000, 'hg3.jpg', 'Mô hình Bandai Gundam HGBF Transient Glacier\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : HG\r\n\r\nChiều cao: 13-16cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– Sản phẩm nhựa cao cấp với độ sắc nét cao\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não IQ cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Kích thích trí tưởng tượng không gian hình học và tính logic cho trẻ\r\n\r\n– Rèn luyện tính kiên nhẫn, tỉ mỉ, cẩn thận và tự lập cho người chơi\r\n\r\n– Tránh cho trẻ thường xuyên sử dụng điện thoại\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: High Grade (HG)\r\nLà dòng kit phổ thông của có độ chi tiết ở mức trung bình khá nhưng Bandai vẫn cho người chơi thấy được sự cao cấp trong chất nhựa cũng như thiết kế của họ đặc biệt là trong những năm gần đây. Là dòng kit phổ thông có chiều cao khoảng 14cm nên tất cả các mẫu gundam xuất hiện trong phim truyện hay tiểu thiếu thì đều sẽ có cỡ HG. HG cũng là dòng mà người mới chơi dùng để làm quen với gunpla cũng như người lâu năm dùng để sưu tầm các mẫu mình thích hay các builder/modeler dùng để độ lại do ưu thế về mật độ mẫu cũng như về giá của nó.', 11),
(31, 'Mô hình Bandai Gundam HG Kimaris', 530000.000, 'hg4.jpg', 'Mô hình Bandai Gundam HG Kimaris\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : HG\r\n\r\nChiều cao: 13-16cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nKhông kèm đế dựng tuy nhiên bạn có thể mua đế trưng bày với giá rất rẻ ngay tại shop\r\n\r\nDecal dán\r\n\r\n– Sản phậm nhựa cao cấp với độ sắc nét cao\r\n\r\n– Sản xuất bởi Bandai Namco – Nhật Bản Chính hãng\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Rèn luyện tính kiên nhẫn cho người chơi\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: High Grade (HG)\r\nLà dòng kit phổ thông của có độ chi tiết ở mức trung bình khá nhưng Bandai vẫn cho người chơi thấy được sự cao cấp trong chất nhựa cũng như thiết kế của họ đặc biệt là trong những năm gần đây. Là dòng kit phổ thông có chiều cao khoảng 14cm nên tất cả các mẫu gundam xuất hiện trong phim truyện hay tiểu thiếu thì đều sẽ có cỡ HG. HG cũng là dòng mà người mới chơi dùng để làm quen với gunpla cũng như người lâu năm dùng để sưu tầm các mẫu mình thích hay các builder/modeler dùng để độ lại do ưu thế về mật độ mẫu cũng như về giá của nó.', 11),
(32, 'Mô hình Bandai Gundam MG 00 QANT Full Saber', 1800000.000, 'mg.jpg', 'Mô hình Bandai Gundam MG 00 QANT Full Saber\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : MG\r\n\r\nChiều cao: 18-23cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nDecal dán\r\n\r\n– Sản phẩm nhựa cao cấp với độ sắc nét cao\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não IQ cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Kích thích trí tưởng tượng không gian hình học và tính logic cho trẻ\r\n\r\n– Rèn luyện tính kiên nhẫn, tỉ mỉ, cẩn thận và tự lập cho người chơi\r\n\r\n– Tránh cho trẻ thường xuyên sử dụng điện thoại\r\n\r\n– Phân phối bởi TAB Store- Vì một trí tuệ Việt Nam\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: Master Grade (MG)\r\nMG (Master Grade) là dòng Gunpla cỡ 1/100 được sản xuất lần đầu vào lễ kỷ niệm Gundam lần thứ 15. Dòng MG khác với dòng 1/100 ở chi tiết, khớp nối và tỉ lệ chỉ kém hơn dòng PG. Tất cả các dòng MG đều có hệ thống khung xương bên trong và một vài mẫu có thể lắp đèn LED để tăng độ ảo diệu. Để người xem có thể hình dung được cỡ của gundam so với người thì rất nhiều mẫu MG có chứa cỡ 1/100 của phi công điều khiển. Một vài mẫu có cỡ 1/20 của phi công. Đầu năm 2002 mecha designer Hajime Katoki bắt đầu thiết kế lại hàng loạt Mobile Suits và ra mắt chúng trong dòng Master Grade dưới tên gọi ‘’Ver.Ka’’ (Katori Version). Hầu hết các phiên bản Ver.ka được sản xuất là do kết quả bình chọn của fan hàng năm. Ngoài gundam ra thì một số phim mecha và anime nổi tiếng khác cũng được sản xuất cỡ MG như Dragon Ball Z, One Piece.', 12),
(33, 'Mô Hình Bandai Gundam MG Astray Blue Frame D', 1600000.000, 'mg2.jpg', 'Mô Hình Bandai Gundam MG Astray Blue Frame D\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : MG\r\n\r\nChiều cao: 18-23cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nDecal dán\r\n\r\n– Sản phẩm nhựa cao cấp với độ sắc nét cao\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não IQ cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Kích thích trí tưởng tượng không gian hình học và tính logic cho trẻ\r\n\r\n– Rèn luyện tính kiên nhẫn, tỉ mỉ, cẩn thận và tự lập cho người chơi\r\n\r\n– Tránh cho trẻ thường xuyên sử dụng điện thoại\r\n\r\n– Phân phối bởi TAB Store- Vì một trí tuệ Việt Nam\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: Master Grade (MG)\r\nMG (Master Grade) là dòng Gunpla cỡ 1/100 được sản xuất lần đầu vào lễ kỷ niệm Gundam lần thứ 15. Dòng MG khác với dòng 1/100 ở chi tiết, khớp nối và tỉ lệ chỉ kém hơn dòng PG. Tất cả các dòng MG đều có hệ thống khung xương bên trong và một vài mẫu có thể lắp đèn LED để tăng độ ảo diệu. Để người xem có thể hình dung được cỡ của gundam so với người thì rất nhiều mẫu MG có chứa cỡ 1/100 của phi công điều khiển. Một vài mẫu có cỡ 1/20 của phi công. Đầu năm 2002 mecha designer Hajime Katoki bắt đầu thiết kế lại hàng loạt Mobile Suits và ra mắt chúng trong dòng Master Grade dưới tên gọi ‘’Ver.Ka’’ (Katori Version). Hầu hết các phiên bản Ver.ka được sản xuất là do kết quả bình chọn của fan hàng năm. Ngoài gundam ra thì một số phim mecha và anime nổi tiếng khác cũng được sản xuất cỡ MG như Dragon Ball Z, One Piece.', 12),
(34, 'Mô hình Bandai Gundam MG 00 XN Raiser', 2800000.000, 'mg3.jpg', 'Mô hình Bandai Gundam MG 00 XN Raiser\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : MG\r\n\r\nChiều cao: 18-23cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nDecal dán\r\n\r\n– Sản phẩm nhựa cao cấp với độ sắc nét cao\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não IQ cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Kích thích trí tưởng tượng không gian hình học và tính logic cho trẻ\r\n\r\n– Rèn luyện tính kiên nhẫn, tỉ mỉ, cẩn thận và tự lập cho người chơi\r\n\r\n– Tránh cho trẻ thường xuyên sử dụng điện thoại\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: Master Grade (MG)\r\nMG (Master Grade) là dòng Gunpla cỡ 1/100 được sản xuất lần đầu vào lễ kỷ niệm Gundam lần thứ 15. Dòng MG khác với dòng 1/100 ở chi tiết, khớp nối và tỉ lệ chỉ kém hơn dòng PG. Tất cả các dòng MG đều có hệ thống khung xương bên trong và một vài mẫu có thể lắp đèn LED để tăng độ ảo diệu. Để người xem có thể hình dung được cỡ của gundam so với người thì rất nhiều mẫu MG có chứa cỡ 1/100 của phi công điều khiển. Một vài mẫu có cỡ 1/20 của phi công. Đầu năm 2002 mecha designer Hajime Katoki bắt đầu thiết kế lại hàng loạt Mobile Suits và ra mắt chúng trong dòng Master Grade dưới tên gọi ‘’Ver.Ka’’ (Katori Version). Hầu hết các phiên bản Ver.ka được sản xuất là do kết quả bình chọn của fan hàng năm. Ngoài gundam ra thì một số phim mecha và anime nổi tiếng khác cũng được sản xuất cỡ MG như Dragon Ball Z, One Piece.', 12),
(35, 'Mô hình Bandai Gundam MG AGE II Magnum', 1300000.000, 'mg4.jpg', 'Mô hình Bandai Gundam MG AGE II Magnum\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : MG\r\n\r\nChiều cao: 18-23cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nDecal dán\r\n\r\n– Sản phậm nhựa cao cấp với độ sắc nét cao\r\n\r\n– Sản xuất bởi Bandai Namco – Nhật Bản Chính hãng\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Rèn luyện tính kiên nhẫn cho người chơi\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: Master Grade (MG)\r\nMG (Master Grade) là dòng Gunpla cỡ 1/100 được sản xuất lần đầu vào lễ kỷ niệm Gundam lần thứ 15. Dòng MG khác với dòng 1/100 ở chi tiết, khớp nối và tỉ lệ chỉ kém hơn dòng PG. Tất cả các dòng MG đều có hệ thống khung xương bên trong và một vài mẫu có thể lắp đèn LED để tăng độ ảo diệu. Để người xem có thể hình dung được cỡ của gundam so với người thì rất nhiều mẫu MG có chứa cỡ 1/100 của phi công điều khiển. Một vài mẫu có cỡ 1/20 của phi công. Đầu năm 2002 mecha designer Hajime Katoki bắt đầu thiết kế lại hàng loạt Mobile Suits và ra mắt chúng trong dòng Master Grade dưới tên gọi ‘’Ver.Ka’’ (Katori Version). Hầu hết các phiên bản Ver.ka được sản xuất là do kết quả bình chọn của fan hàng năm. Ngoài gundam ra thì một số phim mecha và anime nổi tiếng khác cũng được sản xuất', 12),
(36, 'Mô Hình Bandai Gundam PG GN 0000 GNR 00 Raiser', 5900000.000, 'pg.jpg', 'Mô Hình Bandai Gundam PG GN 0000 GNR 00 Raiser\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : PG Đây là tỉ lệ hoàn hảo nhất của Gundam về độ chi tiết và cả chiều cao\r\n\r\nChiều cao: 32-36cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nDecal dán\r\n\r\n– Sản phậm nhựa cao cấp với độ sắc nét cao\r\n\r\n– Sản xuất bởi Bandai Namco – Nhật Bản Chính hãng\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Rèn luyện tính kiên nhẫn cho người chơi\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: PG\r\nPG (Perfect Grade) là dòng Gunpla cỡ 1/60 được chế tạo bởi Bandai. Mô hình cỡ PG đầu tiên là Perfect Grade Evangelion EVA-01 vào năm 1997. Sau đó dong PG được chuyển sang để làm Gundam vào năm 1998 và từ đó trở đi là dòng dành riêng cho Gundam cho đến năm 2017, khi Bandai thông báo Perfect Grade 1/72 Millenium Falcon của Star Wars. Dòng PG có chi tiết tuyệt vời cả bên ngoài lẫn bên trong, cộng thêm đèn LED để tăng độ ảo diệu. PG là một trong những dòng Gunpla đắt nhất và thường được dùng để phát triển những dòng như MG hay RG.', 13),
(37, 'Mô hình Bandai Gundam PG MBF P02 Astray Red Frame Kai', 6400000.000, 'pg1.jpg', 'Mô hình Bandai Gundam PG MBF P02 Astray Red Frame Kai tỉ lệ 1/60\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : PG Đây là tỉ lệ hoàn hảo nhất của Gundam về độ chi tiết và cả chiều cao\r\n\r\nChiều cao: 32-36cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nDecal dán\r\n\r\n– Sản phậm nhựa cao cấp với độ sắc nét cao\r\n\r\n– Sản xuất bởi Bandai Namco – Nhật Bản Chính hãng\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Rèn luyện tính kiên nhẫn cho người chơi\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: PG\r\nPG (Perfect Grade) là dòng Gunpla cỡ 1/60 được chế tạo bởi Bandai. Mô hình cỡ PG đầu tiên là Perfect Grade Evangelion EVA-01 vào năm 1997. Sau đó dong PG được chuyển sang để làm Gundam vào năm 1998 và từ đó trở đi là dòng dành riêng cho Gundam cho đến năm 2017, khi Bandai thông báo Perfect Grade 1/72 Millenium Falcon của Star Wars. Dòng PG có chi tiết tuyệt vời cả bên ngoài lẫn bên trong, cộng thêm đèn LED để tăng độ ảo diệu. PG là một trong những dòng Gunpla đắt nhất và thường được dùng để phát triển những dòng như MG hay RG.', 13),
(38, 'Mô Hình Bandai Gundam PG RX 178 Mk II Titans 1/60', 3500000.000, 'pg2.jpg', 'Mô Hình Bandai Gundam PG RX 178 Mk II Titans 1/60\r\nSản phẩm Gunpla chính hãng của Bandai, sản xuất tại Nhật Bản.\r\n\r\nPHIÊN BẢN : PG Đây là tỉ lệ hoàn hảo nhất của Gundam về độ chi tiết và cả chiều cao\r\n\r\nChiều cao: 32-36cm\r\n\r\nPHÂN LOẠI SP : LẮP RÁP\r\n\r\nDecal dán\r\n\r\n– Sản phậm nhựa cao cấp với độ sắc nét cao\r\n\r\n– Sản xuất bởi Bandai Namco – Nhật Bản Chính hãng\r\n\r\n– An toàn với trẻ em\r\n\r\n– Phát triển trí não cho trẻ hiệu quả đi đôi với niềm vui thích bất tận\r\n\r\n– Rèn luyện tính kiên nhẫn cho người chơi\r\n\r\n– Phân phối bởi TAB Store\r\n\r\nGIỚI THIỆU CƠ BẢN VỀ GUNDAM\r\nMô hình gundam (gunpla) là một loại mô hình nhựa được gọi là Model kit, bao gồm nhiều mảnh nhựa rời được gọi là part (bộ phận), khi lắp ráp các part lại với nhau sẽ được mô hình hoàn chỉnh. Các mảnh nhựa rời này được gắn trên khung nhựa gọi là runner.\r\n\r\nMỗi một hộp sản phẩm Gunpla bao gồm nhiều runner và các phụ kiện liên quan, một tập sách nhỏ (manual) bên trong giới thiệu sơ lược về mẫu Gundam trong hộp và phần hướng dẫn cách lắp ráp. o Dòng gundam với các chi tiết hoàn hảo.\r\n\r\nCác khớp cử động linh hoạt theo ý muốn.\r\n\r\nNgười chơi sẽ thỏa sức sáng tạo và đam mê.\r\n\r\nGiới thiệu về cỡ: PG\r\nPG (Perfect Grade) là dòng Gunpla cỡ 1/60 được chế tạo bởi Bandai. Mô hình cỡ PG đầu tiên là Perfect Grade Evangelion EVA-01 vào năm 1997. Sau đó dong PG được chuyển sang để làm Gundam vào năm 1998 và từ đó trở đi là dòng dành riêng cho Gundam cho đến năm 2017, khi Bandai thông báo Perfect Grade 1/72 Millenium Falcon của Star Wars. Dòng PG có chi tiết tuyệt vời cả bên ngoài lẫn bên trong, cộng thêm đèn LED để tăng độ ảo diệu. PG là một trong những dòng Gunpla đắt nhất và thường được dùng để phát triển những dòng như MG hay RG.', 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id_tt` int(11) NOT NULL,
  `tenkhachhang` int(11) NOT NULL,
  `phone` int(20) NOT NULL,
  `tensanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `desc_tt` text NOT NULL,
  `ngaymua` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `diachi` varchar(225) NOT NULL,
  `tinhtrang` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`id_tt`, `tenkhachhang`, `phone`, `tensanpham`, `soluong`, `price`, `desc_tt`, `ngaymua`, `diachi`, `tinhtrang`) VALUES
(47, 5, 973283927, 27, 1, 650.000, 'Giao nhanh', '2023-12-12 08:17:49', 'hà nội', '0'),
(48, 5, 973283927, 27, 1, 650.000, 'Đẹp', '2023-12-12 08:20:12', 'hà nội', 'Đang xử lí'),
(49, 5, 973283927, 28, 1, 650.000, 'Giao nhanh', '2023-12-12 08:22:50', 'hà nội', 'Đang xử lý'),
(50, 5, 973283927, 29, 1, 590.000, 'giao nhanh', '2023-12-12 08:46:39', 'hà nội', 'Đang xử lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id_tthai` int(11) NOT NULL,
  `name_trangthai` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id_tthai`, `name_trangthai`) VALUES
(5, 'Đang xử lí'),
(7, 'Đã nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`, `email`, `role`) VALUES
(5, 'admin', '123456', 'vutai@gmail.com', 1),
(17, 'tai', '123', 'tai@gmail.com', 0),
(18, 'vutai', '123', 'vu@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idgiohang` (`idgiohang`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsanpham` (`idsanpham`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsanpham` (`idsanpham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `giohangchitiet`
--
ALTER TABLE `giohangchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcart` (`idcart`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id_tt`),
  ADD KEY `lk_user` (`tenkhachhang`),
  ADD KEY `lk_pro` (`tensanpham`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_tthai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `giohangchitiet`
--
ALTER TABLE `giohangchitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_tthai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`idgiohang`) REFERENCES `giohangchitiet` (`id`);

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `giohangchitiet`
--
ALTER TABLE `giohangchitiet`
  ADD CONSTRAINT `giohangchitiet_ibfk_1` FOREIGN KEY (`idcart`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `giohangchitiet_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id_dm`);

--
-- Các ràng buộc cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `lk_pro` FOREIGN KEY (`tensanpham`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `lk_user` FOREIGN KEY (`tenkhachhang`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
