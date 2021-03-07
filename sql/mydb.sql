-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-29 15:58:26
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `client`
--

CREATE TABLE `client` (
  `c_no` int(20) NOT NULL COMMENT '客戶編號',
  `c_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '大樓名稱',
  `c_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '大樓電話',
  `c_address` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '大樓地址',
  `c_uniform` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '統一編號',
  `c_cname` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '主委姓名',
  `c_cphone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '主委電話',
  `c_caddress` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '主委地址',
  `c_fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '財委姓名',
  `c_fphone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '財委電話',
  `c_faddress` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '財委地址',
  `c_paytype` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '付款方式',
  `c_localimg` text COLLATE utf8_unicode_ci NOT NULL COMMENT '位置圖',
  `c_sizeimg` text COLLATE utf8_unicode_ci NOT NULL COMMENT '尺寸圖'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `client`
--



-- --------------------------------------------------------

--
-- 資料表結構 `fix`
--

CREATE TABLE `fix` (
  `fix_no` int(11) NOT NULL COMMENT '維修編號',
  `m_no` int(11) DEFAULT NULL COMMENT '保養編號',
  `m_pno` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '保養產品名稱',
  `f_star_date` date NOT NULL COMMENT '預計施工日期',
  `f_end_date` date NOT NULL COMMENT '實際施工日期',
  `f_finish_date` date NOT NULL COMMENT '實際完工日期',
  `f_statue` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '維修狀態',
  `f_job_statue` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '派工狀態',
  `price_no` int(20) DEFAULT NULL COMMENT '報價流水號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `fix`
--



-- --------------------------------------------------------

--
-- 資料表結構 `fix_item`
--

CREATE TABLE `fix_item` (
  `f_itme_no` int(11) NOT NULL COMMENT '維修項目編號',
  `fix_no` int(11) NOT NULL COMMENT '維修編號',
  `f_work_item` text COLLATE utf8_unicode_ci NOT NULL COMMENT '維修項目',
  `fi_statue` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '狀態',
  `fi_item_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '是否完成',
  `fi_checkbox` int(11) NOT NULL COMMENT '是否勾選'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `fix_item`
--



-- --------------------------------------------------------

--
-- 資料表結構 `half_yea_elevator`
--

CREATE TABLE `half_yea_elevator` (
  `hy_id` int(11) NOT NULL,
  `m_no` int(11) NOT NULL,
  `hye_001` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '電磁煞車器',
  `hye_002` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '乘場選擇器',
  `hye_003` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '調速器',
  `hye_004` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '升降路內、機坑內環境狀況',
  `hye_005` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂、配重之轉向輪',
  `hye_006` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '主鋼索、調速鋼索、檢點',
  `hye_007` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '導軌檢點、鋼帶檢點',
  `hye_008` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '配重器',
  `hye_009` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DrSW動作、DrLock機構檢點'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `job`
--

CREATE TABLE `job` (
  `j_no` int(20) NOT NULL COMMENT '派工編號',
  `j_date` date NOT NULL COMMENT '派工日期',
  `j_meno` text COLLATE utf8_unicode_ci NOT NULL COMMENT '備註(收費)',
  `j_nocheck` int(11) NOT NULL COMMENT '收費備料',
  `j_menof` text COLLATE utf8_unicode_ci NOT NULL COMMENT '備註(不收費)',
  `j_ofcheck` int(11) NOT NULL COMMENT '備料不收費',
  `j_notice` text COLLATE utf8_unicode_ci NOT NULL COMMENT '注意事項',
  `j_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '狀態',
  `j_start_date` date NOT NULL COMMENT '預計施工日期',
  `j_end_date` date NOT NULL COMMENT '實際施工日期',
  `j_comp_date` date NOT NULL COMMENT '預計完工日期',
  `j_actual_date` date NOT NULL COMMENT '實際完工日期',
  `m_no` int(11) DEFAULT NULL COMMENT '保養(外)',
  `fix_no` int(11) DEFAULT NULL COMMENT '維修(外)',
  `price_no` int(20) DEFAULT NULL COMMENT '報價流水號',
  `jt_no` int(20) DEFAULT NULL COMMENT '團隊編號',
  `j_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '派工類型'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `job`
--



-- --------------------------------------------------------

--
-- 資料表結構 `job_team`
--

CREATE TABLE `job_team` (
  `jt_no` int(20) NOT NULL COMMENT '團隊編號',
  `jt_team` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '施工團隊',
  `jt_teamleader` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '負責人',
  `jt_teamphone` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '團隊電話'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `job_team`
--

INSERT INTO `job_team` (`jt_no`, `jt_team`, `jt_teamleader`, `jt_teamphone`) VALUES
(1, '1號', '林子進', '0988175152'),
(2, '2號', '劉子近', '0953666525'),
(3, '3號', '黃予辰', '0947585633'),
(4, '4號', '林曼婷', '0919353622'),
(5, '5號', '翁嘉超', '0910200200');

-- --------------------------------------------------------

--
-- 資料表結構 `job_work`
--

CREATE TABLE `job_work` (
  `j_id` int(20) NOT NULL COMMENT '工作表主鍵',
  `j_no` int(20) NOT NULL COMMENT '派工編號',
  `j_work` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '工作項目',
  `j_cheak` int(11) NOT NULL COMMENT '是否勾選',
  `fix_no` int(11) DEFAULT NULL COMMENT '維修編號',
  `mj_no` int(11) DEFAULT NULL COMMENT '保養工作項目'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `job_work`
--



-- --------------------------------------------------------

--
-- 資料表結構 `maintain`
--

CREATE TABLE `maintain` (
  `m_no` int(11) NOT NULL COMMENT '保養編號',
  `m_pno` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '產品號碼',
  `m_pname` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '產品名稱',
  `m_month` int(20) NOT NULL COMMENT '保養月份',
  `m_status` varchar(3) COLLATE utf8_unicode_ci NOT NULL COMMENT '保養狀態',
  `mf_sataue` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '維修狀態',
  `m_job_statue` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '派工狀態',
  `m_type` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT '保養時間',
  `m_date` date NOT NULL COMMENT '保養日期',
  `m_license` date NOT NULL DEFAULT '2019-01-01' COMMENT '使用許可證有效日期',
  `m_remarks` text COLLATE utf8_unicode_ci NOT NULL COMMENT '備註',
  `m_pretime` time NOT NULL COMMENT '預計施工時間',
  `p_start_date` date NOT NULL COMMENT '預計施工日期',
  `m_p_end_date` date NOT NULL COMMENT '實際施工日期',
  `price_no` int(20) NOT NULL COMMENT '報價流水號',
  `m_in_time` time DEFAULT NULL COMMENT '進入時間',
  `m_out_time` time DEFAULT NULL COMMENT '出去時間',
  `p_id` int(11) NOT NULL COMMENT '產品主建',
  `m_checkbox` int(11) NOT NULL COMMENT '派工勾選'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `maintain`
--



-- --------------------------------------------------------

--
-- 資料表結構 `maintain_job`
--

CREATE TABLE `maintain_job` (
  `mj_no` int(11) NOT NULL COMMENT '工作項目編號',
  `mj_work` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '工作項目'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `month_attached_item`
--

CREATE TABLE `month_attached_item` (
  `ma_id` int(11) NOT NULL,
  `m_no` int(11) NOT NULL COMMENT '保養編號',
  `ma_001` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '注意事項項目',
  `ma_002` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '承載存放限制',
  `ma_003` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '各式按鈕檢視',
  `ma_004` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '設備運轉測試',
  `ma_005` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車台定位檢視',
  `ma_006` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車台水平檢視',
  `ma_007` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '警(指)是裝置檢視',
  `ma_008` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '升降、橫移連鎖裝置檢視',
  `ma_009` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '光電開關檢視',
  `ma_010` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '限動、檢測開關檢視',
  `ma_011` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '驅動元件檢視',
  `ma_012` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '各式傳動元件檢視',
  `ma_013` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '油壓元件檢視',
  `ma_014` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '鍊條、鋼索檢視',
  `ma_015` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '電控系統檢視',
  `ma_016` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '機械結構、置車板機廂檢視',
  `ma_017` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '安全扣元件檢視',
  `ma_018` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '油壓防爆閥檢視',
  `ma_019` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '防落裝置檢視',
  `ma_020` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '照明裝置檢視',
  `ma_021` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '機械式檢視',
  `ma_022` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '區格防護規定(欄杆)',
  `ma_023` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '機坑積水檢視',
  `ma_024` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '停放之車輛符合承載規範'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `month_attached_item`
--



-- --------------------------------------------------------

--
-- 資料表結構 `month_elevator_item`
--

CREATE TABLE `month_elevator_item` (
  `me_id` int(11) NOT NULL,
  `m_no` int(11) NOT NULL COMMENT '保養編號',
  `me_001` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '機械式環境狀況',
  `me_002` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '受電盤、抑御盤、信號盤',
  `me_003` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '電動機、牽引機',
  `me_004` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '電動發電機、啟動盤',
  `me_005` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂走行狀態',
  `me_006` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '對外外部聯絡裝置',
  `me_007` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '停電燈裝置',
  `me_008` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂內裝、照明、通風扇',
  `me_009` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂上環境裝置',
  `me_010` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '門之開閉裝置',
  `me_011` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂著床狀態',
  `me_012` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '門開閉狀態',
  `me_013` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '導滑器、導論',
  `me_014` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '給油器',
  `me_015` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '乘車門、門踏板',
  `me_016` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '乘場按鈕、指示燈'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `month_machine_item`
--

CREATE TABLE `month_machine_item` (
  `mm_id` int(11) NOT NULL,
  `m_no` int(11) NOT NULL COMMENT '保養編號',
  `mm_001` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '注意事項項目',
  `mm_002` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '承載存放限制',
  `mm_003` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '各式按鈕檢視',
  `mm_004` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '設備運轉測試',
  `mm_005` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車台定位檢視',
  `mm_006` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車台水平檢視',
  `mm_007` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '警(指)是裝置檢視',
  `mm_008` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '升降、橫移連鎖裝置檢視',
  `mm_009` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '光電開關檢視',
  `mm_010` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '限動、檢測開關檢視',
  `mm_011` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '驅動元件檢視',
  `mm_012` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '各式傳動元件檢視',
  `mm_013` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '油壓元件檢視',
  `mm_014` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '鍊條、鋼索檢視',
  `mm_015` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '電控系統檢視',
  `mm_016` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '機械結構、置車板機廂檢視',
  `mm_017` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '安全扣元件檢視',
  `mm_018` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '油壓防爆閥檢視',
  `mm_019` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '防落裝置檢視',
  `mm_020` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '照明裝置檢視',
  `mm_021` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '機械式檢視',
  `mm_022` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '區格防護規定(欄杆)',
  `mm_023` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '機坑積水檢視',
  `mm_024` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '停放之車輛符合承載規範'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `month_machine_item`
--



-- --------------------------------------------------------

--
-- 資料表結構 `order_recode`
--

CREATE TABLE `order_recode` (
  `p_id` int(11) NOT NULL COMMENT '產品主建',
  `p_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '產品編號',
  `p_price_order` int(11) NOT NULL COMMENT '產品價格',
  `p_amount` int(11) NOT NULL COMMENT '產品數量',
  `p_subtotal` int(11) NOT NULL COMMENT '產品小計',
  `price_no` int(20) NOT NULL COMMENT '報價流水號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `order_recode`
--



-- --------------------------------------------------------

--
-- 資料表結構 `price_recode`
--

CREATE TABLE `price_recode` (
  `comp_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '零件名稱',
  `comp_price` int(11) NOT NULL COMMENT '零件價錢',
  `comp_amount` int(11) NOT NULL COMMENT '零件數量',
  `comp_subtotal` int(11) NOT NULL COMMENT '零件小計',
  `price_no` int(20) NOT NULL COMMENT '報價流水號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='報價紀錄';

-- --------------------------------------------------------

--
-- 資料表結構 `produce`
--

CREATE TABLE `produce` (
  `p_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '產品編號',
  `p_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '產品名稱',
  `p_device` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '機械停車設備',
  `p_drive` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '驅動方式',
  `p_trans` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '傳動元件',
  `p_rotary` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '旋轉台',
  `p_price` int(20) NOT NULL COMMENT '產品價格',
  `p_maintain_time` time NOT NULL COMMENT '產品保養時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='產品';

--
-- 傾印資料表的資料 `produce`
--

INSERT INTO `produce` (`p_no`, `p_name`, `p_device`, `p_drive`, `p_trans`, `p_rotary`, `p_price`, `p_maintain_time`) VALUES
('a1111', '附屬設備', '升降式', '油壓式', '練條', '迴旋式', 100, '02:00:00'),
('a1112', '附屬設備', '升降式', '油壓式', '鋼索', '迴旋式', 100, '02:00:00'),
('a1113', '附屬設備', '升降式', '油壓式', '油壓缸', '迴旋式', 100, '02:00:00'),
('a1121', '附屬設備', '升降式', '電動機', '練條', '迴旋式', 300, '02:00:00'),
('a1122', '附屬設備', '升降式', '電動機', '鋼索', '迴旋式', 100, '02:00:00'),
('a1123', '附屬設備', '升降式', '電動機', '油壓缸', '迴旋式', 100, '02:00:00'),
('a1131', '附屬設備', '升降式', '臂桿式', '練條', '迴旋式', 100, '02:00:00'),
('a1132', '附屬設備', '升降式', '臂桿式', '鋼索', '迴旋式', 200, '02:00:00'),
('a1133', '附屬設備', '升降式', '臂桿式', '油壓缸', '迴旋式', 105, '02:00:00'),
('a1211', '附屬設備', '升降式', '油壓式', '練條', '旋轉移動式', 500, '02:00:00'),
('a1212', '附屬設備', '升降式', '油壓式', '鋼索', '旋轉移動式', 95, '02:00:00'),
('a1213', '附屬設備', '升降式', '油壓式', '油壓缸', '旋轉移動式', 100, '02:00:00'),
('a1221', '附屬設備', '升降式', '電動機', '練條', '旋轉移動式', 100, '02:00:00'),
('a1222', '附屬設備', '升降式', '電動機', '鋼索', '旋轉移動式', 100, '02:00:00'),
('a1223', '附屬設備', '升降式', '電動機', '油壓缸', '旋轉移動式', 100, '02:00:00'),
('a1231', '附屬設備', '升降式', '臂桿式', '練條', '旋轉移動式', 100, '02:00:00'),
('a1232', '附屬設備', '升降式', '臂桿式', '鋼索', '旋轉移動式', 100, '02:00:00'),
('a1233', '附屬設備', '升降式', '臂桿式', '油壓缸', '旋轉移動式', 100, '02:00:00'),
('a1311', '附屬設備', '升降式', '油壓式', '練條', '貨梯', 100, '02:00:00'),
('a1312', '附屬設備', '升降式', '油壓式', '鋼索', '貨梯', 100, '02:00:00'),
('a1313', '附屬設備', '升降式', '油壓式', '油壓缸', '貨梯', 100, '02:00:00'),
('a1321', '附屬設備', '升降式', '電動機', '練條', '貨梯', 100, '02:00:00'),
('a1322', '附屬設備', '升降式', '電動機', '鋼索', '貨梯', 100, '02:00:00'),
('a1323', '附屬設備', '升降式', '電動機', '油壓缸', '貨梯', 200, '02:00:00'),
('a1331', '附屬設備', '升降式', '臂桿式', '練條', '貨梯', 200, '02:00:00'),
('a1332', '附屬設備', '升降式', '臂桿式', '鋼索', '貨梯', 200, '02:00:00'),
('a1333', '附屬設備', '升降式', '臂桿式', '油壓缸', '貨梯', 200, '02:00:00'),
('a2111', '附屬設備', '升降迴旋式', '油壓式', '練條', '迴旋式', 200, '02:00:00'),
('a2112', '附屬設備', '升降迴旋式', '油壓式', '鋼索', '迴旋式', 200, '02:00:00'),
('a2113', '附屬設備', '升降迴旋式', '油壓式', '油壓缸', '迴旋式', 200, '02:00:00'),
('a2121', '附屬設備', '升降迴旋式', '電動機', '練條', '迴旋式', 200, '02:00:00'),
('a2122', '附屬設備', '升降迴旋式', '電動機', '鋼索', '迴旋式', 200, '02:00:00'),
('a2123', '附屬設備', '升降迴旋式', '電動機', '油壓缸', '迴旋式', 200, '02:00:00'),
('a2131', '附屬設備', '升降迴旋式', '臂桿式', '練條', '迴旋式', 200, '02:00:00'),
('a2132', '附屬設備', '升降迴旋式', '臂桿式', '鋼索', '迴旋式', 200, '02:00:00'),
('a2133', '附屬設備', '升降迴旋式', '臂桿式', '油壓缸', '迴旋式', 200, '02:00:00'),
('a2211', '附屬設備', '升降迴旋式', '油壓式', '練條', '旋轉移動式', 200, '02:00:00'),
('a2212', '附屬設備', '升降迴旋式', '油壓式', '鋼索', '旋轉移動式', 300, '02:00:00'),
('a2213', '附屬設備', '升降迴旋式', '油壓式', '油壓缸', '旋轉移動式', 300, '02:00:00'),
('a2221', '附屬設備', '升降迴旋式', '電動機', '練條', '旋轉移動式', 300, '02:00:00'),
('a2222', '附屬設備', '升降迴旋式', '電動機', '鋼索', '旋轉移動式', 300, '02:00:00'),
('a2223', '附屬設備', '升降迴旋式', '電動機', '油壓缸', '旋轉移動式', 300, '02:00:00'),
('a2231', '附屬設備', '升降迴旋式', '臂桿式', '練條', '旋轉移動式', 300, '02:00:00'),
('a2232', '附屬設備', '升降迴旋式', '臂桿式', '鋼索', '旋轉移動式', 300, '02:00:00'),
('a2233', '附屬設備', '升降迴旋式', '臂桿式', '油壓缸', '旋轉移動式', 300, '02:00:00'),
('a2311', '附屬設備', '升降迴旋式', '油壓式', '練條', '貨梯', 300, '02:00:00'),
('a2312', '附屬設備', '升降迴旋式', '油壓式', '鋼索', '貨梯', 300, '02:00:00'),
('a2313', '附屬設備', '升降迴旋式', '油壓式', '油壓缸', '貨梯', 300, '02:00:00'),
('a2321', '附屬設備', '升降迴旋式', '電動機', '練條', '貨梯', 300, '02:00:00'),
('a2322', '附屬設備', '升降迴旋式', '電動機', '鋼索', '貨梯', 300, '02:00:00'),
('a2323', '附屬設備', '升降迴旋式', '電動機', '油壓缸', '貨梯', 300, '02:00:00'),
('a2331', '附屬設備', '升降迴旋式', '臂桿式', '練條', '貨梯', 300, '02:00:00'),
('a2332', '附屬設備', '升降迴旋式', '臂桿式', '鋼索', '貨梯', 300, '02:00:00'),
('a2333', '附屬設備', '升降迴旋式', '臂桿式', '油壓缸', '貨梯', 300, '02:00:00'),
('a3111', '附屬設備', '升降機移式', '油壓式', '練條', '迴旋式', 300, '02:00:00'),
('a3112', '附屬設備', '升降機移式', '油壓式', '鋼索', '迴旋式', 300, '02:00:00'),
('a3113', '附屬設備', '升降機移式', '油壓式', '油壓缸', '迴旋式', 300, '02:00:00'),
('a3121', '附屬設備', '升降機移式', '電動機', '練條', '迴旋式', 300, '02:00:00'),
('a3122', '附屬設備', '升降機移式', '電動機', '鋼索', '迴旋式', 300, '02:00:00'),
('a3123', '附屬設備', '升降機移式', '電動機', '油壓缸', '迴旋式', 300, '02:00:00'),
('a3131', '附屬設備', '升降機移式', '臂桿式', '練條', '迴旋式', 300, '02:00:00'),
('a3132', '附屬設備', '升降機移式', '臂桿式', '鋼索', '迴旋式', 300, '02:00:00'),
('a3133', '附屬設備', '升降機移式', '臂桿式', '油壓缸', '迴旋式', 300, '02:00:00'),
('a3211', '附屬設備', '升降機移式', '油壓式', '練條', '旋轉移動式', 400, '02:00:00'),
('a3212', '附屬設備', '升降機移式', '油壓式', '鋼索', '旋轉移動式', 400, '02:00:00'),
('a3213', '附屬設備', '升降機移式', '油壓式', '油壓式', '旋轉移動式', 400, '02:00:00'),
('a3221', '附屬設備', '升降機移式', '電動機', '練條', '旋轉移動式', 400, '02:00:00'),
('a3222', '附屬設備', '升降機移式', '電動機', '鋼索', '旋轉移動式', 400, '02:00:00'),
('a3223', '附屬設備', '升降機移式', '電動機', '油壓缸', '旋轉移動式', 400, '02:00:00'),
('a3231', '附屬設備', '升降機移式', '臂桿式', '練條', '旋轉移動式', 400, '02:00:00'),
('a3232', '附屬設備', '升降機移式', '臂桿式', '鋼索', '旋轉移動式', 400, '02:00:00'),
('a3233', '附屬設備', '升降機移式', '臂桿式', '油壓缸', '旋轉移動式', 400, '02:00:00'),
('a3311', '附屬設備', '升降機移式', '油壓式', '練條', '貨梯', 400, '02:00:00'),
('a3312', '附屬設備', '升降機移式', '油壓式', '鋼索', '貨梯', 400, '02:00:00'),
('a3313', '附屬設備', '升降機移式', '油壓式', '油壓缸', '貨梯', 400, '02:00:00'),
('a3321', '附屬設備', '升降機移式', '電動機', '練條', '貨梯', 400, '02:00:00'),
('a3322', '附屬設備', '升降機移式', '電動機', '鋼索', '貨梯', 400, '02:00:00'),
('a3323', '附屬設備', '升降機移式', '電動機', '油壓缸', '貨梯', 400, '02:00:00'),
('a3331', '附屬設備', '升降機移式', '臂桿式', '練條', '貨梯', 400, '02:00:00'),
('a3332', '附屬設備', '升降機移式', '臂桿式', '鋼索', '貨梯', 400, '02:00:00'),
('a3333', '附屬設備', '升降機移式', '臂桿式', '油壓缸', '貨梯', 400, '02:00:00'),
('e0000', '電梯', '', '', '', '', 10000, '03:00:00'),
('p0111', '停車設備', '簡易型單置車板式', '油壓式', '練條', '', 100, '03:00:00'),
('p0112', '停車設備', '簡易型單置車板式', '油壓式', '鋼索', '', 500, '03:00:00'),
('p0113', '停車設備', '簡易型單置車板式', '油壓式', '油壓缸', '', 500, '03:00:00'),
('p0121', '停車設備', '簡易型單置車板式', '電動機', '練條', '', 500, '03:00:00'),
('p0122', '停車設備', '簡易型單置車板式', '電動機', '鋼索', '', 500, '03:00:00'),
('p0123', '停車設備', '簡易型單置車板式', '電動機', '油壓缸', '', 500, '03:00:00'),
('p0131', '停車設備', '簡易型單置車板式', '馬達螺桿', '練條', '', 500, '03:00:00'),
('p0132', '停車設備', '簡易型單置車板式', '馬達螺桿', '鋼索', '', 500, '03:00:00'),
('p0133', '停車設備', '簡易型單置車板式', '馬達螺桿', '油壓缸', '', 500, '03:00:00'),
('p0211', '停車設備', '簡易型雙置車板式', '油壓式', '練條', '', 500, '03:00:00'),
('p0212', '停車設備', '簡易型雙置車板式', '油壓式', '鋼索', '', 500, '03:00:00'),
('p0213', '停車設備', '簡易型雙置車板式', '油壓式', '油壓缸', '', 500, '03:00:00'),
('p0221', '停車設備', '簡易型雙置車板式', '電動機', '練條', '', 500, '03:00:00'),
('p0222', '停車設備', '簡易型雙置車板式', '電動機', '鋼索', '', 500, '03:00:00'),
('p0223', '停車設備', '簡易型雙置車板式', '電動機', '油壓缸', '', 500, '03:00:00'),
('p0231', '停車設備', '簡易型雙置車板式', '馬達螺桿', '練條', '', 500, '03:00:00'),
('p0232', '停車設備', '簡易型雙置車板式', '馬達螺桿', '鋼索', '', 500, '03:00:00'),
('p0233', '停車設備', '簡易型雙置車板式', '馬達螺桿', '油壓缸', '', 500, '03:00:00'),
('p0311', '停車設備', '簡易型多層置車板式', '油壓式', '練條', '', 500, '03:00:00'),
('p0312', '停車設備', '簡易型多層置車板式', '油壓式', '鋼索', '', 500, '03:00:00'),
('p0313', '停車設備', '簡易型多層置車板式', '油壓式', '油壓缸', '', 500, '03:00:00'),
('p0321', '停車設備', '簡易型多層置車板式', '電動機', '練條', '', 500, '03:00:00'),
('p0322', '停車設備', '簡易型多層置車板式', '電動機', '鋼索', '', 500, '03:00:00'),
('p0323', '停車設備', '簡易型多層置車板式', '電動機', '油壓缸', '', 500, '03:00:00'),
('p0331', '停車設備', '簡易型多層置車板式', '馬達螺桿', '練條', '', 500, '03:00:00'),
('p0332', '停車設備', '簡易型多層置車板式', '馬達螺桿', '鋼索', '', 500, '03:00:00'),
('p0333', '停車設備', '簡易型多層置車板式', '馬達螺桿', '油壓缸', '', 500, '03:00:00'),
('p0411', '停車設備', '多段型升降橫移式', '油壓式', '練條', '', 500, '03:00:00'),
('p0412', '停車設備', '多段型升降橫移式', '油壓式', '鋼索', '', 500, '03:00:00'),
('p0413', '停車設備', '多段型升降橫移式', '油壓式', '油壓缸', '', 500, '03:00:00'),
('p0421', '停車設備', '多段型升降橫移式', '電動機', '練條', '', 900, '03:00:00'),
('p0422', '停車設備', '多段型升降橫移式', '電動機', '鋼索', '', 600, '03:00:00'),
('p0423', '停車設備', '多段型升降橫移式', '電動機', '油壓缸', '', 540, '03:00:00'),
('p0431', '停車設備', '多段型升降橫移式', '馬達螺桿', '練條', '', 200, '03:00:00'),
('p0432', '停車設備', '多段型升降橫移式', '馬達螺桿', '鋼索', '', 200, '03:00:00'),
('p0433', '停車設備', '多段型升降橫移式', '馬達螺桿', '油壓缸', '', 200, '03:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `quote`
--

CREATE TABLE `quote` (
  `price_no` int(20) NOT NULL COMMENT '報價流水號',
  `o_status` varchar(3) COLLATE utf8_unicode_ci NOT NULL COMMENT '訂單狀態',
  `p_status` varchar(3) COLLATE utf8_unicode_ci NOT NULL COMMENT '報價狀態',
  `p_date` date NOT NULL COMMENT '報價日期',
  `o_date` date NOT NULL COMMENT '訂單日期',
  `p_start_date` date NOT NULL COMMENT '預計施工日期',
  `p_comp_date` date NOT NULL COMMENT '預計完工日期',
  `p_end_date` date NOT NULL COMMENT '實際施工日期',
  `o_actual_date` date NOT NULL COMMENT '實際完工日期',
  `total` int(20) NOT NULL COMMENT '總價',
  `c_no` int(20) NOT NULL COMMENT '客戶編號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='報價';

--
-- 傾印資料表的資料 `quote`
--


-- --------------------------------------------------------

--
-- 資料表結構 `season_elevator`
--

CREATE TABLE `season_elevator` (
  `se_id` int(11) NOT NULL,
  `m_no` int(11) NOT NULL,
  `se_001` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂操作盤、指示燈',
  `se_002` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂門、門踏板',
  `se_003` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '閉門安全裝置(Safety shoe)',
  `se_004` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '門手動開放'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `time`
--

CREATE TABLE `time` (
  `j_time` int(20) NOT NULL COMMENT '時間表主鍵',
  `in_date` date NOT NULL COMMENT '進入日期',
  `in_time` time NOT NULL COMMENT '進入時間',
  `out_time` time NOT NULL COMMENT '離開時間',
  `j_no` int(20) NOT NULL COMMENT '派工編號'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `time`
--



-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(1, 'user', 'ru04ru/32000');

-- --------------------------------------------------------

--
-- 資料表結構 `year_elevator`
--

CREATE TABLE `year_elevator` (
  `ye_id` int(11) NOT NULL,
  `m_no` int(11) NOT NULL,
  `me_001` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT ' 機械式環境狀況',
  `me_002` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '受電盤、抑御盤、信號盤',
  `me_003` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '電動機、牽引機',
  `me_004` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '電動發電機、啟動盤',
  `me_005` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂走行狀態',
  `me_006` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '對外外部聯絡裝置',
  `me_007` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '停電燈裝置',
  `me_008` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT ' 車廂內裝、照明、通風扇',
  `me_009` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT ' 車廂上環境裝置',
  `me_010` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT ' 門之開閉裝置',
  `me_011` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂著床狀態',
  `me_012` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '門開閉狀態',
  `me_013` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT ' 導滑器、導論',
  `me_014` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '給油器',
  `me_015` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '乘車門、門踏板',
  `me_016` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '乘場按鈕、指示燈',
  `se_001` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂操作盤、指示燈',
  `se_002` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂門、門踏板',
  `se_003` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '閉門安全裝置',
  `se_004` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '門手動開放',
  `hye_001` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '電磁煞車器',
  `hye_002` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '乘場選擇器',
  `hye_003` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '調速器',
  `hye_004` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '升降路內、機坑內環境狀況',
  `hye_005` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '車廂、配重之轉向輪',
  `hye_006` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '主鋼索、調速鋼索、檢點',
  `hye_007` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '導軌檢點、鋼帶檢點',
  `hye_008` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '配重器',
  `hye_009` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'DrSW動作、Dr Lock機構檢點',
  `ye_001` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '上、下部極限開關動作確認',
  `ye_002` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '緊急停止裝置檢點',
  `ye_003` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '移動電纜',
  `ye_004` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '緩衝器檢點',
  `ye_005` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '各張力輪'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`c_no`);

--
-- 資料表索引 `fix`
--
ALTER TABLE `fix`
  ADD PRIMARY KEY (`fix_no`),
  ADD KEY `m_no` (`m_no`),
  ADD KEY `price_no` (`price_no`);

--
-- 資料表索引 `fix_item`
--
ALTER TABLE `fix_item`
  ADD PRIMARY KEY (`f_itme_no`),
  ADD KEY `fix_no` (`fix_no`);

--
-- 資料表索引 `half_yea_elevator`
--
ALTER TABLE `half_yea_elevator`
  ADD PRIMARY KEY (`hy_id`),
  ADD KEY `m_no` (`m_no`);

--
-- 資料表索引 `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_no`),
  ADD KEY `j_maintain` (`m_no`),
  ADD KEY `j_fix` (`fix_no`),
  ADD KEY `price_no` (`price_no`),
  ADD KEY `jt_no` (`jt_no`);

--
-- 資料表索引 `job_team`
--
ALTER TABLE `job_team`
  ADD PRIMARY KEY (`jt_no`);

--
-- 資料表索引 `job_work`
--
ALTER TABLE `job_work`
  ADD PRIMARY KEY (`j_id`),
  ADD KEY `j_no` (`j_no`),
  ADD KEY `m_no` (`fix_no`),
  ADD KEY `mj_no` (`mj_no`);

--
-- 資料表索引 `maintain`
--
ALTER TABLE `maintain`
  ADD PRIMARY KEY (`m_no`) USING BTREE,
  ADD KEY `price_no` (`price_no`),
  ADD KEY `p_id` (`p_id`);

--
-- 資料表索引 `maintain_job`
--
ALTER TABLE `maintain_job`
  ADD PRIMARY KEY (`mj_no`);

--
-- 資料表索引 `month_attached_item`
--
ALTER TABLE `month_attached_item`
  ADD PRIMARY KEY (`ma_id`),
  ADD KEY `m_no` (`m_no`);

--
-- 資料表索引 `month_elevator_item`
--
ALTER TABLE `month_elevator_item`
  ADD PRIMARY KEY (`me_id`),
  ADD KEY `m_no` (`m_no`);

--
-- 資料表索引 `month_machine_item`
--
ALTER TABLE `month_machine_item`
  ADD PRIMARY KEY (`mm_id`),
  ADD KEY `m_no` (`m_no`);

--
-- 資料表索引 `order_recode`
--
ALTER TABLE `order_recode`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `price_no` (`price_no`),
  ADD KEY `p_no` (`p_no`);

--
-- 資料表索引 `price_recode`
--
ALTER TABLE `price_recode`
  ADD KEY `price_no` (`price_no`);

--
-- 資料表索引 `produce`
--
ALTER TABLE `produce`
  ADD PRIMARY KEY (`p_no`);

--
-- 資料表索引 `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`price_no`),
  ADD KEY `c_no` (`c_no`),
  ADD KEY `p_comp_date` (`p_comp_date`),
  ADD KEY `p_start_date` (`p_start_date`);

--
-- 資料表索引 `season_elevator`
--
ALTER TABLE `season_elevator`
  ADD PRIMARY KEY (`se_id`),
  ADD KEY `m_no` (`m_no`);

--
-- 資料表索引 `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`j_time`),
  ADD KEY `j_no` (`j_no`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `year_elevator`
--
ALTER TABLE `year_elevator`
  ADD PRIMARY KEY (`ye_id`),
  ADD KEY `m_no` (`m_no`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `client`
--
ALTER TABLE `client`
  MODIFY `c_no` int(20) NOT NULL AUTO_INCREMENT COMMENT '客戶編號', AUTO_INCREMENT=96;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `fix`
--
ALTER TABLE `fix`
  MODIFY `fix_no` int(11) NOT NULL AUTO_INCREMENT COMMENT '維修編號', AUTO_INCREMENT=120510323;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `fix_item`
--
ALTER TABLE `fix_item`
  MODIFY `f_itme_no` int(11) NOT NULL AUTO_INCREMENT COMMENT '維修項目編號', AUTO_INCREMENT=1188;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `half_yea_elevator`
--
ALTER TABLE `half_yea_elevator`
  MODIFY `hy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `job`
--
ALTER TABLE `job`
  MODIFY `j_no` int(20) NOT NULL AUTO_INCREMENT COMMENT '派工編號', AUTO_INCREMENT=120510323;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `job_team`
--
ALTER TABLE `job_team`
  MODIFY `jt_no` int(20) NOT NULL AUTO_INCREMENT COMMENT '團隊編號', AUTO_INCREMENT=6;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `job_work`
--
ALTER TABLE `job_work`
  MODIFY `j_id` int(20) NOT NULL AUTO_INCREMENT COMMENT '工作表主鍵', AUTO_INCREMENT=1274;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `maintain`
--
ALTER TABLE `maintain`
  MODIFY `m_no` int(11) NOT NULL AUTO_INCREMENT COMMENT '保養編號', AUTO_INCREMENT=19267;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `maintain_job`
--
ALTER TABLE `maintain_job`
  MODIFY `mj_no` int(11) NOT NULL AUTO_INCREMENT COMMENT '工作項目編號';

--
-- 使用資料表自動增長(AUTO_INCREMENT) `month_attached_item`
--
ALTER TABLE `month_attached_item`
  MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `month_elevator_item`
--
ALTER TABLE `month_elevator_item`
  MODIFY `me_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `month_machine_item`
--
ALTER TABLE `month_machine_item`
  MODIFY `mm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `order_recode`
--
ALTER TABLE `order_recode`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '產品主建', AUTO_INCREMENT=867;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `quote`
--
ALTER TABLE `quote`
  MODIFY `price_no` int(20) NOT NULL AUTO_INCREMENT COMMENT '報價流水號', AUTO_INCREMENT=120214385;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `season_elevator`
--
ALTER TABLE `season_elevator`
  MODIFY `se_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `time`
--
ALTER TABLE `time`
  MODIFY `j_time` int(20) NOT NULL AUTO_INCREMENT COMMENT '時間表主鍵', AUTO_INCREMENT=82213505;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `year_elevator`
--
ALTER TABLE `year_elevator`
  MODIFY `ye_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 已傾印資料表的限制(constraint)
--

--
-- 資料表的限制(constraint) `fix`
--
ALTER TABLE `fix`
  ADD CONSTRAINT `fix_ibfk_1` FOREIGN KEY (`m_no`) REFERENCES `maintain` (`m_no`),
  ADD CONSTRAINT `fix_ibfk_2` FOREIGN KEY (`price_no`) REFERENCES `quote` (`price_no`);

--
-- 資料表的限制(constraint) `fix_item`
--
ALTER TABLE `fix_item`
  ADD CONSTRAINT `fix_item_ibfk_1` FOREIGN KEY (`fix_no`) REFERENCES `fix` (`fix_no`);

--
-- 資料表的限制(constraint) `half_yea_elevator`
--
ALTER TABLE `half_yea_elevator`
  ADD CONSTRAINT `half_yea_elevator_ibfk_1` FOREIGN KEY (`m_no`) REFERENCES `maintain` (`m_no`);

--
-- 資料表的限制(constraint) `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`price_no`) REFERENCES `quote` (`price_no`),
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`jt_no`) REFERENCES `job_team` (`jt_no`),
  ADD CONSTRAINT `job_ibfk_3` FOREIGN KEY (`m_no`) REFERENCES `maintain` (`m_no`),
  ADD CONSTRAINT `job_ibfk_4` FOREIGN KEY (`fix_no`) REFERENCES `fix` (`fix_no`);

--
-- 資料表的限制(constraint) `job_work`
--
ALTER TABLE `job_work`
  ADD CONSTRAINT `job_work_ibfk_1` FOREIGN KEY (`j_no`) REFERENCES `job` (`j_no`),
  ADD CONSTRAINT `job_work_ibfk_2` FOREIGN KEY (`fix_no`) REFERENCES `fix` (`fix_no`),
  ADD CONSTRAINT `job_work_ibfk_3` FOREIGN KEY (`mj_no`) REFERENCES `maintain_job` (`mj_no`);

--
-- 資料表的限制(constraint) `maintain`
--
ALTER TABLE `maintain`
  ADD CONSTRAINT `maintain_ibfk_1` FOREIGN KEY (`price_no`) REFERENCES `quote` (`price_no`),
  ADD CONSTRAINT `maintain_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `order_recode` (`p_id`);

--
-- 資料表的限制(constraint) `month_attached_item`
--
ALTER TABLE `month_attached_item`
  ADD CONSTRAINT `month_attached_item_ibfk_1` FOREIGN KEY (`m_no`) REFERENCES `maintain` (`m_no`);

--
-- 資料表的限制(constraint) `month_elevator_item`
--
ALTER TABLE `month_elevator_item`
  ADD CONSTRAINT `month_elevator_item_ibfk_1` FOREIGN KEY (`m_no`) REFERENCES `maintain` (`m_no`);

--
-- 資料表的限制(constraint) `month_machine_item`
--
ALTER TABLE `month_machine_item`
  ADD CONSTRAINT `month_machine_item_ibfk_1` FOREIGN KEY (`m_no`) REFERENCES `maintain` (`m_no`);

--
-- 資料表的限制(constraint) `order_recode`
--
ALTER TABLE `order_recode`
  ADD CONSTRAINT `order_recode_ibfk_1` FOREIGN KEY (`price_no`) REFERENCES `quote` (`price_no`),
  ADD CONSTRAINT `order_recode_ibfk_2` FOREIGN KEY (`p_no`) REFERENCES `produce` (`p_no`);

--
-- 資料表的限制(constraint) `price_recode`
--
ALTER TABLE `price_recode`
  ADD CONSTRAINT `price_recode_ibfk_1` FOREIGN KEY (`price_no`) REFERENCES `quote` (`price_no`);

--
-- 資料表的限制(constraint) `quote`
--
ALTER TABLE `quote`
  ADD CONSTRAINT `quote_ibfk_1` FOREIGN KEY (`c_no`) REFERENCES `client` (`c_no`);

--
-- 資料表的限制(constraint) `season_elevator`
--
ALTER TABLE `season_elevator`
  ADD CONSTRAINT `season_elevator_ibfk_1` FOREIGN KEY (`m_no`) REFERENCES `maintain` (`m_no`);

--
-- 資料表的限制(constraint) `time`
--
ALTER TABLE `time`
  ADD CONSTRAINT `time_ibfk_1` FOREIGN KEY (`j_no`) REFERENCES `job` (`j_no`);

--
-- 資料表的限制(constraint) `year_elevator`
--
ALTER TABLE `year_elevator`
  ADD CONSTRAINT `year_elevator_ibfk_1` FOREIGN KEY (`m_no`) REFERENCES `maintain` (`m_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
