-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2023 lúc 08:21 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybds_team8`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `full_contract`
--

CREATE TABLE `full_contract` (
  `ID` int(11) NOT NULL,
  `Full_Contract_Code` varchar(15) DEFAULT NULL,
  `Customer_Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Year_Of_Birth` int(11) DEFAULT NULL,
  `SSN` varchar(15) NOT NULL,
  `Customer_Address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `Property_ID` int(11) NOT NULL,
  `Date_Of_Contract` date DEFAULT NULL,
  `Price` decimal(18,0) DEFAULT NULL,
  `Deposit` decimal(18,0) DEFAULT NULL,
  `Remain` decimal(18,0) DEFAULT NULL,
  `Status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `full_contract`
--

INSERT INTO `full_contract` (`ID`, `Full_Contract_Code`, `Customer_Name`, `Year_Of_Birth`, `SSN`, `Customer_Address`, `Mobile`, `Property_ID`, `Date_Of_Contract`, `Price`, `Deposit`, `Remain`, `Status`) VALUES
(1, 'FCC112300001', 'Lý Thị Huyền Châu', 1990, '301198908', '45 Trần Hưng Đạo, Quận 5, Thành phố Hồ Chí Minh', '0919686576', 1, '2023-11-26', 1000000000, 100000000, 900000000, b'1'),
(2, 'FCC112300002', 'Minh khoa', NULL, '', '39/12k ấp trung chánh ', '032123123213', 0, '2023-11-26', 1000000000, 1000000000, 1000000000, b'1'),
(3, 'FCC112300003', 'Minh khoa', NULL, '19032003', '39/12k ấp trung chánh ', '032123123213', 0, '2023-11-26', 1000000000, 1000000000, 1000000000, b'1'),
(4, 'FCC112300004', 'dat', NULL, '190', '', '', 0, '0000-00-00', 0, 0, 0, b'1'),
(5, 'FCC112300005', 'dat', NULL, '19032003', '620/30 gò váp', '11111111111111', 0, '2023-11-26', 999999999999999999, 999999999999999999, 999999999999999999, b'1');

--
-- Bẫy `full_contract`
--
DELIMITER $$
CREATE TRIGGER `TG_Full_Contract_INSERT_AUTOCODE` BEFORE INSERT ON `full_contract` FOR EACH ROW BEGIN
    DECLARE THANGHT VARCHAR(2);
    DECLARE NAMHT VARCHAR(2);
    DECLARE STT VARCHAR(12);
    DECLARE MAX_CODE INT;

    SET THANGHT = MONTH(CURDATE());
    SET NAMHT = RIGHT(YEAR(CURDATE()), 2);
    
    SELECT MAX(CAST(RIGHT(Full_Contract_Code, 5) AS SIGNED)) + 1 INTO MAX_CODE FROM Full_Contract;
    
    IF MAX_CODE IS NULL THEN
        SET MAX_CODE = 1;
    END IF;

    SET STT = CONCAT('FCC', THANGHT, NAMHT, LPAD(MAX_CODE, 5, '0'));
    SET NEW.Full_Contract_Code = STT;
END
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `full_contract`
--
ALTER TABLE `full_contract`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `full_contract`
--
ALTER TABLE `full_contract`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
