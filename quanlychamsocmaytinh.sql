-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th1 17, 2024 lúc 05:19 PM
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
-- Cơ sở dữ liệu: `quanlychamsocmaytinh`
--
CREATE DATABASE IF NOT EXISTS `quanlychamsocmaytinh` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `quanlychamsocmaytinh`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucdichvu`
--

CREATE TABLE `danhmucdichvu` (
  `madv` int(11) NOT NULL,
  `tendv` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `dongia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucdichvu`
--

INSERT INTO `danhmucdichvu` (`madv`, `tendv`, `mota`, `dongia`) VALUES
(1, 'Dịch vụ Sửa chữa và Bảo dưỡng', ' Các kỹ thuật viên sẽ kiểm tra và sửa chữa các vấn đề phần cứng và phần mềm trên máy tính của bạn. Bảo dưỡng có thể bao gồm làm mới hệ thống và làm sạch bụi bẩn.', 500000),
(2, 'Dịch vụ Diệt virus và Bảo mật', 'Diệt virus, loại bỏ phần mềm độc hại và cài đặt/kiểm tra các chương trình bảo mật để đảm bảo tính an toàn của máy tính.', 100000),
(3, 'Dịch vụ Sao lưu và Khôi phục dữ liệu', 'Sao lưu dữ liệu quan trọng, và khôi phục dữ liệu khi cần thiết.', 50000),
(4, 'Tối ưu hóa Hiệu suất', 'Tối ưu hóa hệ thống, làm mới phần mềm và kiểm tra/đánh giá phần cứng để cải thiện hiệu suất máy tính.', 100000),
(5, 'Dịch vụ Hỗ trợ Kỹ thuật từ xa', 'Cung cấp hỗ trợ kỹ thuật từ xa thông qua internet để giải quyết vấn đề máy tính.', 100000),
(6, 'Dịch vụ Tư vấn Mua sắm và Nâng cấp', 'Tư vấn về mua sắm máy tính mới hoặc nâng cấp phần cứng.', 200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(255) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mand` int(11) DEFAULT NULL,
  `ngayhen` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `sdt`, `email`, `mand`, `ngayhen`) VALUES
(1, 'Le Van C', '0123456789', 'levanc@gmail.com', 2, '2024-01-02'),
(2, 'Pham Thi D', '0987654321', 'phamthid@gmail.com', 2, '2024-01-03'),
(3, 'Le Van G', '0123456780', 'levang@gmail.com', 2, '2024-01-10'),
(4, 'Pham Thi H', '0987654322', 'phamthih@gmail.com', 2, '2024-01-11'),
(5, 'Hoang Van I', '0123456781', 'hoangvani@gmail.com', 2, '2024-01-12'),
(6, 'Ngo Thi K', '0987654323', 'ngothik@gmail.com', 2, '2024-01-13'),
(7, 'Trinh Van L', '0123456782', 'trinhvanl@gmail.com', 2, '2024-01-14'),
(8, 'Tran Thi F', '0987654321', 'tranthif@gmail.com', 2, '2024-01-09'),
(9, 'Nguyen Van E', '0123456789', 'nguyenvane@gmail.com', 2, '2024-01-08'),
(10, 'Nguyễn Đắc H', '088076654', 'nguyenhuy30496@gmail.com', 2, '2024-01-09'),
(11, 'Bùi Thị Tràn Ánh', '2003994843', 'buithitranganh@gmail.com', 2, '2024-01-05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichhen`
--

CREATE TABLE `lichhen` (
  `malh` int(11) NOT NULL,
  `makh` int(11) DEFAULT NULL,
  `manvchamsockh` int(11) DEFAULT NULL,
  `ngayhen` datetime DEFAULT NULL,
  `trangthai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichhen`
--

INSERT INTO `lichhen` (`malh`, `makh`, `manvchamsockh`, `ngayhen`, `trangthai`) VALUES
(1, 1, 2, '2024-01-04 10:00:00', 'Hoàn thành'),
(2, 2, 1, '2024-09-05 15:30:00', 'Chưa hoàn thành'),
(3, 3, 3, '2024-09-12 14:00:00', 'Chưa hoàn thành'),
(4, 4, 2, '2024-09-09 14:00:00', 'Chưa hoàn thành'),
(5, 5, 2, '2024-09-08 14:30:00', 'Chưa hoàn thành'),
(6, 6, 1, '2024-09-02 15:30:00', 'Chưa hoàn thành'),
(7, 7, 3, '2024-09-17 09:30:04', 'Chưa hoàn thành'),
(8, 8, 2, '2024-09-03 09:30:00', 'Chưa hoàn thành'),
(9, 9, 1, '2024-09-10 08:00:00', 'Chưa hoàn thành'),
(10, 10, 1, '2024-09-10 09:00:00', 'Chưa hoàn thành'),
(11, 11, 3, '2024-09-20 14:30:00', 'Chưa hoàn thành'),
(12, 4, 1, '2024-09-05 15:00:00', 'Chưa hoàn thành'),
(13, 1, 3, '2024-01-09 09:00:00', 'Hoàn thành'),
(14, 2, 2, '2024-02-08 14:00:00', 'Hoàn thành'),
(15, 3, 3, '2024-03-22 09:00:00', 'Hoàn thành'),
(16, 4, 2, '2024-04-11 14:00:00', 'Hoàn thành'),
(17, 5, 1, '2024-05-26 09:30:00', 'Hoàn thành'),
(18, 6, 3, '2024-06-20 09:00:00', 'Hoàn thành'),
(19, 7, 1, '2024-07-19 08:00:00', 'Hoàn thành'),
(20, 8, 1, '2024-08-15 15:00:00', 'Hoàn thành'),
(21, 9, 3, '2024-05-13 15:00:00', 'Hoàn thành'),
(22, 10, 2, '2024-06-10 15:00:00', 'Hoàn thành'),
(23, 11, 1, '2024-07-08 08:30:00', 'Hoàn thành'),
(24, 10, 2, '2024-08-13 14:30:00', 'Hoàn thành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichhendichvu`
--

CREATE TABLE `lichhendichvu` (
  `malhdv` int(11) NOT NULL,
  `malh` int(11) DEFAULT NULL,
  `madv` int(11) DEFAULT NULL,
  `soluongdv` int(11) DEFAULT NULL,
  `manv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichhendichvu`
--

INSERT INTO `lichhendichvu` (`malhdv`, `malh`, `madv`, `soluongdv`, `manv`) VALUES
(1, 1, 1, 1, 2),
(2, 2, 2, 1, 1),
(3, 3, 1, 1, 3),
(4, 4, 2, 1, 2),
(5, 5, 3, 1, 2),
(6, 6, 4, 1, 1),
(7, 7, 5, 1, 3),
(8, 8, 5, 1, 2),
(9, 9, 3, 1, 1),
(10, 10, 6, 1, 1),
(11, 11, 1, 1, 3),
(12, 12, 2, 1, 2),
(13, 13, 4, 1, 3),
(14, 14, 3, 1, 2),
(15, 15, 1, 1, 3),
(16, 16, 2, 1, 2),
(17, 17, 6, 1, 1),
(18, 18, 6, 1, 3),
(19, 19, 4, 1, 1),
(20, 20, 5, 1, 1),
(21, 21, 2, 1, 3),
(22, 22, 1, 1, 2),
(23, 23, 3, 1, 1),
(24, 24, 4, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(11) NOT NULL,
  `tennv` varchar(255) DEFAULT NULL,
  `sdt` varchar(15) NOT NULL,
  `chucvu` varchar(255) DEFAULT NULL,
  `mand` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `sdt`, `chucvu`, `mand`) VALUES
(1, 'Nguyễn Văn M', '0123456789', 'Quản lý', 1),
(2, 'Bùi Thị T', '0122938485', 'Nhân viên', 4),
(3, 'Nguyễn Văn f', '0103994843', 'Nhân viên', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `maph` int(11) NOT NULL,
  `makh` int(11) DEFAULT NULL,
  `danhgia` int(11) DEFAULT NULL,
  `gopy` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`maph`, `makh`, `danhgia`, `gopy`) VALUES
(1, 1, 4, 'Dich vu tot, nhan vien niem no'),
(2, 2, 3, 'Can cai thien ve thoi gian phuc vu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `matt` int(11) NOT NULL,
  `manvthuchientt` int(11) DEFAULT NULL,
  `thanhtien` decimal(19,0) DEFAULT NULL,
  `ngaytt` datetime DEFAULT NULL,
  `malh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`matt`, `manvthuchientt`, `thanhtien`, `ngaytt`, `malh`) VALUES
(1, 3, 100000, '2024-01-09 09:00:00', 13),
(2, 2, 50000, '2024-02-08 14:00:00', 14),
(3, 3, 500000, '2024-03-22 09:00:00', 15),
(4, 2, 100000, '2024-04-11 14:00:00', 16),
(5, 1, 200000, '2024-05-26 09:30:00', 17),
(6, 3, 200000, '2024-06-20 09:00:00', 18),
(7, 1, 100000, '2024-07-19 08:00:00', 19),
(8, 1, 100000, '2024-08-15 15:00:00', 20),
(9, 3, 100000, '2024-05-13 15:00:00', 21),
(10, 2, 500000, '2024-06-10 15:00:00', 22),
(11, 1, 50000, '2024-07-08 08:30:00', 23),
(12, 2, 100000, '2024-08-13 14:30:00', 24),
(13, 2, 500000, '2024-01-05 09:00:00', 1),
(14, 1, 200000, '2023-01-08 15:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `mand` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`mand`, `role`, `username`, `password`) VALUES
(1, '1', 'admin', '123'),
(2, '0', 'user', '456'),
(3, '1', 'nv1', '111'),
(4, '1', 'nv2', '222');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucdichvu`
--
ALTER TABLE `danhmucdichvu`
  ADD PRIMARY KEY (`madv`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`),
  ADD KEY `khachhang_ibfk_1` (`mand`);

--
-- Chỉ mục cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  ADD PRIMARY KEY (`malh`),
  ADD KEY `manvchamsockh` (`manvchamsockh`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `lichhendichvu`
--
ALTER TABLE `lichhendichvu`
  ADD PRIMARY KEY (`malhdv`),
  ADD KEY `madv` (`madv`),
  ADD KEY `malh` (`malh`),
  ADD KEY `manv` (`manv`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`),
  ADD KEY `nhanvien_ibfk_1` (`mand`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`maph`),
  ADD KEY `phanhoi_ibfk_1` (`makh`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`matt`),
  ADD KEY `thanhtoan_ibfk_1` (`manvthuchientt`),
  ADD KEY `malh` (`malh`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mand`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucdichvu`
--
ALTER TABLE `danhmucdichvu`
  MODIFY `madv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  MODIFY `malh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `lichhendichvu`
--
ALTER TABLE `lichhendichvu`
  MODIFY `malhdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `maph` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `matt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `mand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`mand`) REFERENCES `user` (`mand`);

--
-- Các ràng buộc cho bảng `lichhen`
--
ALTER TABLE `lichhen`
  ADD CONSTRAINT `lichhen_ibfk_1` FOREIGN KEY (`manvchamsockh`) REFERENCES `nhanvien` (`manv`),
  ADD CONSTRAINT `lichhen_ibfk_2` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Các ràng buộc cho bảng `lichhendichvu`
--
ALTER TABLE `lichhendichvu`
  ADD CONSTRAINT `lichhendichvu_ibfk_1` FOREIGN KEY (`madv`) REFERENCES `danhmucdichvu` (`madv`),
  ADD CONSTRAINT `lichhendichvu_ibfk_2` FOREIGN KEY (`malh`) REFERENCES `lichhen` (`malh`),
  ADD CONSTRAINT `lichhendichvu_ibfk_3` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`mand`) REFERENCES `user` (`mand`);

--
-- Các ràng buộc cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `phanhoi_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Các ràng buộc cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`manvthuchientt`) REFERENCES `nhanvien` (`manv`),
  ADD CONSTRAINT `thanhtoan_ibfk_2` FOREIGN KEY (`malh`) REFERENCES `lichhen` (`malh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
