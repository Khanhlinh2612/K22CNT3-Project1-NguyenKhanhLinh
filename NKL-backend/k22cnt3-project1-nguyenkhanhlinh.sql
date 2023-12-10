-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2023 lúc 02:10 PM
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
-- Cơ sở dữ liệu: `k22cnt3-project1-nguyenkhanhlinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_nkl`
--

CREATE TABLE `user_nkl` (
  `USER_ID_NKL` char(12) NOT NULL,
  `USER_NAME_NKL` varchar(100) NOT NULL,
  `PASSWORD_NKL` varchar(200) NOT NULL,
  `EMAIL_NKL` varchar(200) NOT NULL,
  `FULL_NAME_NKL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_nkl`
--

INSERT INTO `user_nkl` (`USER_ID_NKL`, `USER_NAME_NKL`, `PASSWORD_NKL`, `EMAIL_NKL`, `FULL_NAME_NKL`) VALUES
('0987654321', 'OP', '11111', 'tl@gmail.com', 'l k t'),
('2210900035', 'Linh', '54321', 'khanhlinh@gmail.com', 'Nguyễn Khánh Linh\r\n');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user_nkl`
--
ALTER TABLE `user_nkl`
  ADD PRIMARY KEY (`USER_ID_NKL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
