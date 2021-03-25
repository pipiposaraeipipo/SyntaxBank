-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 09:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountID` int(16) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `BookNumber` varchar(64) NOT NULL,
  `Balance` decimal(64,0) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `AccountType` varchar(16) NOT NULL,
  `CustomerID` int(32) NOT NULL,
  `DebitCardID` bigint(32) NOT NULL,
  `BranchID` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountID`, `fName`, `lName`, `BookNumber`, `Balance`, `Status`, `AccountType`, `CustomerID`, `DebitCardID`, `BranchID`) VALUES
(1, 'Akari', 'Fujisaki', '33334444', '4988', 1, 'Base', 1, 1478523696325874, 1),
(2, 'Akiko', 'Toya', '11457645', '75000', 1, 'Mid', 2, 7896541236547896, 4),
(3, 'Akira', 'Toya', '91345278', '85000', 1, 'Mid', 3, 5876538308210496, 20),
(4, 'Atsushi', 'Kurata', '26565940', '200000', 1, 'Prime', 4, 7370660968540736, 25),
(5, 'Kumiko', 'Tsuda', '28166833', '12500', 1, 'Base', 5, 301289030872482, 15),
(6, 'Yang', 'Hai', '81753019', '24000', 1, 'Base', 6, 1007319624304321, 14),
(7, 'Le', 'Ping', '53407002', '50000', 1, 'Mid', 7, 7577815384665057, 8),
(8, 'Zhao', 'Shi', '92609759', '150000', 1, 'Prime', 8, 4327121892511256, 2),
(9, 'Yuta', 'Fukui', '24014779', '18750', 1, 'Base', 9, 5432692028983307, 3),
(10, 'Suyoung', 'Hong', '75793279', '65000', 1, 'Mid', 10, 4496331404948124, 10),
(11, 'Hikaru', 'Shindo', '16350880', '8000', 1, 'Base', 11, 8211335650596509, 9),
(12, 'Hitoshi', 'Koeike', '02021338', '54000', 1, 'Mid', 12, 2684911259785673, 18),
(13, 'Koji', 'Saeki', '95346934', '45000', 1, 'Mid', 13, 8590027039031004, 23),
(14, 'Yoshitaka', 'Waya', '77668620', '11325', 1, 'Base', 14, 6041641371650096, 11),
(15, 'Kawi', 'Masakawa', '98306902', '18760', 1, 'Base', 15, 1948759230929771, 17),
(16, 'Kanao', 'Mishima', '25963394', '62916', 1, 'Mid', 16, 7700820740117919, 5),
(17, 'Yuga', 'Aoyama', '49387064', '147450', 1, 'Prime', 17, 5674453646710581, 22),
(18, 'Mina', 'Ashido', '19483571', '106225', 1, 'Base', 18, 3141660090232153, 16),
(19, 'Tsuyu', 'Asui', '94309340', '21510', 1, 'Base', 19, 432144180222513, 13),
(20, 'Tenya', 'Lida', '56041600', '46500', 1, 'Mid', 20, 8262365115262407, 7),
(21, 'Ochaco', 'Uraraka', '21586893', '75420', 1, 'Mid', 21, 3996428699654577, 6),
(22, 'Mashirao', 'Ojiro', '19966792', '450000', 1, 'Prime', 22, 8898923622118071, 12),
(23, 'Denki', 'Kaminari', '74233471', '43300', 1, 'Mid', 23, 364819057817850, 19),
(24, 'Eijiro', 'Kirish', '89287048', '9000', 1, 'Base', 24, 7567436402362998, 24),
(25, 'Koji', 'Koda', '78125347', '1750', 1, 'Base', 25, 3221525437029597, 21),
(26, 'Rikido', 'Sato', '34458782', '250000', 1, 'Prime', 26, 4203054196242619, 1),
(27, 'Mezo', 'Shoji', '37331205', '54600', 1, 'Mid', 27, 1407948623873024, 1),
(28, 'Kyoka', 'Jiro', '93130865', '34500', 1, 'Mid', 28, 2348342714196199, 1),
(29, 'Hanta', 'Sero', '39328565', '14000', 1, 'Base', 29, 3648478399873769, 4),
(30, 'Fumikage', 'Tokoyami', '17941181', '9000', 1, 'Base', 30, 1825013428712767, 1),
(31, 'Shoto', 'Todoroki', '15989010', '300000', 1, 'Prime', 31, 5313283452739459, 4),
(32, 'Toru', 'Hagakure', '31601874', '54000', 1, 'Mid', 32, 4850251160868006, 2),
(33, 'Katsuki', 'Bakugo', '85898850', '16500', 1, 'Base', 33, 6384327888385540, 4),
(34, 'Izuku', 'Midoriya', '97322126', '9000', 1, 'Base', 34, 4261192426923449, 3),
(35, 'Minoru', 'Mineta', '81787605', '34200', 1, 'Mid', 35, 3032678424476020, 4),
(36, 'Momo', 'Yaoyoruzu', '07113342', '250000', 1, 'Prime', 36, 6307655667699823, 1),
(37, 'Yosetsu', 'Awase', '08526714', '16700', 1, 'Base', 37, 6986553518635736, 2),
(38, 'Sen', 'Kaibara', '19906037', '40000', 1, 'Mid', 38, 6275803525602167, 2),
(39, 'Togaru', 'Kamakiri', '52811435', '750000', 1, 'Prime', 39, 3701621592595051, 1),
(40, 'Shihai', 'Kuroiro', '51780243', '15000', 1, 'Base', 40, 2966899970695983, 3),
(41, 'Itsuka', 'Kendo', '95591628', '65000', 1, 'Mid', 41, 5394845209048523, 2),
(42, 'Yui', 'Kodai', '80734133', '17500', 1, 'Base', 42, 6015265566314153, 3),
(43, 'Kinoko', 'Komori', '64685223', '412000', 1, 'Prime', 43, 5406364840423653, 3),
(44, 'Ibara', 'Shiozaki', '96539316', '13500', 1, 'Base', 44, 7509282804126679, 5),
(45, 'Jurota', 'Shishida', '76197770', '12000', 1, 'Base', 45, 4394389321105018, 5),
(46, 'Nirengeki', 'Shoda', '50983027', '600000', 1, 'Prime', 46, 3309523549912252, 4),
(47, 'Pony', 'Tsunotori', '86643536', '45000', 1, 'Mid', 47, 7312031675036299, 4),
(48, 'Kosei', 'Tsuburaba', '47335512', '55000', 1, 'Mid', 48, 5213729545230827, 1),
(49, 'Tetsutetsu', 'Tetsutetsu', '02145756', '46100', 1, 'Mid', 49, 7713171976383192, 2),
(50, 'Setsuna', 'Tokage', '27107264', '75300', 1, 'Mid', 50, 819134302822113, 3),
(51, 'Le', 'Ping', '82811995', '20000', 1, 'Base', 7, 376627606548057, 5),
(52, 'Shihai', 'Kuroiro', '76118772', '45000', 1, 'Mid', 40, 5277800229476829, 3),
(53, 'Mashirao', 'Ojiro', '16013230', '20000', 1, 'Base', 22, 2597484381714417, 1),
(54, 'Akiko', 'Toya', '89923292', '22995', 1, 'Base', 2, 3225911163635077, 1),
(55, 'Hitoshi', 'Koeike', '24018554', '17800', 1, 'Base', 12, 1796542082429106, 3),
(56, 'Jurota', 'Shishida', '38671042', '44500', 1, 'Mid', 45, 8086154777946932, 6),
(57, 'Nirengeki', 'Shoda', '54375708', '16000', 1, 'Base', 46, 7582422915624889, 1),
(58, 'Akari', 'Fujisaki', '61638961', '8200', 1, 'Base', 1, 7668472177305246, 6),
(59, 'Toru', 'Hagakure', '35516222', '60000', 1, 'Mid', 32, 1780559946077659, 6),
(60, 'Akira', 'Toya', '34441734', '42000', 1, 'Mid', 3, 223393243101772, 1),
(61, 'Hikaru', 'Shindo', '51437263', '17650', 1, 'Base', 11, 1405184717522246, 4),
(62, 'Akiko', 'Toya', '24844305', '10000', 1, 'Base', 2, 8970627312403815, 6);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `BranchID` int(32) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Name` text NOT NULL,
  `Zipcode` int(32) NOT NULL,
  `PhoneNumber` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BranchID`, `Address`, `Name`, `Zipcode`, `PhoneNumber`) VALUES
(1, '23, Syntax Building, Surawong, Bangrak, Bangrak, Bangkok', 'Syntax Headquarter', 10500, '022454456'),
(2, '17-19, Phrachan, Phra Barom Maha Ratchawang, Phra Nakhon, Bangkok', 'Tha Prachan Branch', 10200, '022233634'),
(3, '222,222/1-7,224 Siam Square Soi 1, Rama I, Wangmai, Pathum Wan, Bangkok', 'Siam Square Branch', 10330, '022246586'),
(4, '18-24, Yaowaphanit, Chakkawat, Samphanthawong, Bangkok', 'Yaowarat Branch', 10100, '024536435'),
(5, '4 th Fl , MBK Center , 444, Phayathai, Wangmai, Pathum Wan, Bangkok', 'Maboonkrong Branch', 10330, '025674354'),
(6, '4 th FL., 299, Charoennakhon, Khlongtonsai, Khlong San, Bangkok', 'Iconsiam Branch', 10600, '027586659'),
(7, '4 FL., CENTRAL PINKLAO 7/222, Boromratchonnani, Arunammarin, Bangkok Noi, Bangkok', 'Central Plaza Pinklao Branch', 10700, '022232343'),
(8, '4, Ratdamri, Phathumwan, Pathum Wan, Bangkok', 'Central World Branch', 10330, '029876253'),
(9, '87/2 Unit No.338 B On 3Rd Floor, China Resources Tower All Seasons Place, Wireless, Lumpini, Pathum Wan, Bangkok', 'All Seasons Place Branch', 10330, '023423423'),
(10, '3 rd.Fl., 8 Soi Sukhumwit 35 (Charoenniwet), , Khlongtannuea, Watthana, Bangkok', 'Emquartier Branch', 10110, '022254567'),
(11, '3rd floor. 99,99/1,99/2 Moo 4 Fah Ham, Muang Chiang Mai, Chiang Mai', 'Central Festival Chiangmai Branch', 50000, '053288845'),
(12, 'B floor. 2 Central Plaza Chiang Mai Airport,Mahidol Road,Hai Ya, Muang Chiang Mai, Chiang Mai', 'Central Plaza Chiang Mai Airport', 50100, '053201843'),
(13, '2 nd FL., 319, Highway- Lampang -Ngao, Suandok, Mueang, Lampang', 'Central Plaza Lampang Branch', 52100, '053432453'),
(14, '2 nd FL., Central Plaza Chiang Rai 99/9 MU 13, , Ropwiang, Mueang, Chiang Rai', 'Central Plaza Chiangrai Branch', 57000, '056435647'),
(15, '43/2, 43/3 Nimmanhaemin Road, Suthep, Muang Chiang Mai, Chiang Mai', 'Tanon Nimmanhaemin Road Chiang mai', 50200, '053217619'),
(16, '3 rd FL., 990, 998, Mittraphap-Nongkhai, Naimueang, Mueang, Nakhorn Ratchasima', 'Central Plaza Nakhonratchasima Branch', 30000, '078954564'),
(17, '2 nd FL., Central Plaza Khonkaen, 99, Sichan , Naimuang, Mueang, Khon Kaen', 'Central Plaza Khonkaen Branch', 40000, '098763543'),
(18, '2 Nd Fl.,Robinson Surin 338 Mu 16 , , Salakdai, Mueang, Surin', 'Robinson Surin Branch', 32000, '034543456'),
(19, '2F nd. Fl.,137 Mu 3 , , Donglan, Mueang, Roi Et', 'Robinson Roiet Branch', 45000, '056473857'),
(20, '2F nd FL., 88/8, Nittyo, Thatchoengchum, Mueang, Sakon Nakhon', 'Robinson Sakonnakhon Branch', 47000, '0564736458'),
(21, 'F2 Nd Fl.,Robinson Ocean Nakhonsrithammarat,89/201, Phatthanakankukhwang, Khlang, Mueang, Nakhorn Si Thammarat', 'Robinson Nakhonsrithammarat Branch', 80000, '087564783'),
(22, '2 nd FL., 8, 9/8 Mu 7, , Nasan, Phra Phrom, Nakhorn Si Thammarat', 'Central Plaza Nakhonsithammarat Branch', 80000, '074339709'),
(23, '4th FL. , Central Festival Phuket , 74-75 Mu 5, , Vichit, Mueang, Phuket', 'Central Phuket Festival Branch', 83000, '076248509'),
(24, '3 Rd Fl.,Centralfestival Hatyai 1518,1518/1-2 , Kanchanawanit, Hatyai, Hat Yai, Songkhla', 'Central Festival Hatyai Branch', 90110, '074339709'),
(25, '209,209/1-2 Mu 2 Bo Phut, Ko Samui, Surat Thani', 'Central Festival Samui Branch', 84320, '077410569'),
(26, '1st FL., Central Plaza Chonburi, 55/88 - 55/89 Mu 1, , Samet, Mueang, Chon Buri', 'Central Plaza Chonburi Branch', 20000, '033003240'),
(27, '2 nd Fl., Central Plaza Marina Pattaya, 78/54-56 Mu 9, Payyayasai 2, Nongprue, Bang Lamung, Chon Buri', 'Central Plaza Marina Pattaya Branch', 20150, '032389758'),
(28, '4th FL. Centralfestival Pattaya Beach, 333/99 Mu 9, , Nong Prue, Bang Lamung, Chon Buri', 'Central Festival Pattaya Beach Branch', 20150, '032389767'),
(29, '2 nd.FL., 99,99/1, Bangna-Trat, Choengnoen, Mueang, Rayong', 'Central Plaza Rayong Branch', 21000, '036789560'),
(30, '2 FL., Banking Zone, Robinson Chonburi 888 Mu 3, Donhualo, Mueang, Chon Buri', 'Robinson Chonburi Branch', 20000, '036549807');

-- --------------------------------------------------------

--
-- Table structure for table `cheque`
--

CREATE TABLE `cheque` (
  `ChequeID` int(16) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Amount` decimal(64,0) NOT NULL,
  `ReceiverID` int(16) NOT NULL,
  `AccountID` int(16) NOT NULL,
  `StaffID` int(32) NOT NULL,
  `WrittenDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `ChequeDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cheque`
--

INSERT INTO `cheque` (`ChequeID`, `Status`, `Amount`, `ReceiverID`, `AccountID`, `StaffID`, `WrittenDate`, `ChequeDate`) VALUES
(1234567, 1, '5000', 1, 1, 1, '2020-05-20 04:30:00', '2020-05-21 05:30:00'),
(1234568, 1, '6000', 2, 58, 1, '2020-05-25 19:25:00', '2020-05-27 18:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE `creditcard` (
  `CreditCardID` bigint(32) NOT NULL,
  `CVV` int(16) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `ExpiredDate` date NOT NULL,
  `CustomerID` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creditcard`
--

INSERT INTO `creditcard` (`CreditCardID`, `CVV`, `Status`, `ExpiredDate`, `CustomerID`) VALUES
(1995582591710584, 845, 1, '2020-10-21', 39),
(2942015085195106, 963, 1, '2027-09-14', 19),
(2970137447104045, 784, 1, '2029-04-16', 50),
(3275631152288641, 958, 1, '2025-05-20', 12),
(3727247685763630, 954, 1, '2026-07-07', 1),
(4015541980723196, 751, 1, '2020-05-04', 16),
(4482809287783192, 958, 1, '2028-07-11', 6),
(4938466689596721, 958, 1, '2020-12-16', 4),
(5038420761536071, 165, 1, '2020-09-16', 34),
(5608562360639564, 782, 1, '2033-02-15', 2),
(6812186978172060, 468, 1, '2028-05-09', 29),
(7385928176661452, 858, 1, '2029-05-10', 1),
(7521114646926828, 986, 1, '2028-11-20', 48),
(8939351472382715, 123, 1, '2030-05-09', 46),
(9772239882924351, 753, 1, '2029-05-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(32) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Zipcode` int(32) NOT NULL,
  `PhoneNumber` varchar(32) NOT NULL,
  `Gender` varchar(16) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `CitizenID` varchar(32) NOT NULL,
  `BirthDate` date NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Income` varchar(128) NOT NULL,
  `PIN` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `fName`, `lName`, `Address`, `Zipcode`, `PhoneNumber`, `Gender`, `Email`, `CitizenID`, `BirthDate`, `Username`, `Password`, `Income`, `PIN`) VALUES
(1, 'Akari', 'Fujisaki', 'Ubonratchathani', 34000, '0452507777', 'Female', 'Fujisaki@hotmail.com', '1497785033462', '2000-01-01', 'fujiha', 'sakatomo123', '35000', 1654),
(2, 'Akiko', 'Toya', 'Prachinburi', 25000, '0123642312', 'Female', 'toya@live.com', '1246594688452', '1988-02-18', 'zawarudo', 'kawaki', '45000', 5421),
(3, 'Akira', 'Toya', 'Ubonratchathani', 34000, '0454589076', 'Male', 'yoyara123@hotmail.com', '3412256799041', '2001-02-17', 'yoyabaki', 'zaza123', '100000', 4444),
(4, 'Atsushi', 'Kurata', 'Bangkok', 10140, '0452502588', 'Male', 'kuratawwe@hotmail.com', '1953330598524', '1985-01-02', 'kuratamasato', 'kuratamasato123', '40000', 5446),
(5, 'Kumiko', 'Tsuda', 'Prachinburi', 25000, '0455481654', 'Female', 'TsudaKumiko@hotmail.com', '2958663733676', '1996-10-21', 'kumiko123', 'kakakabe', '20000', 9876),
(6, 'Yang', 'Hai', 'Bangkok', 10140, '0985799824', 'Male', 'HaiYangOBS@hotmail.com', '0081698429702', '1998-03-25', 'YangThai', 'ZabaHai', '12000', 9513),
(7, 'Le', 'Ping', 'Ubonratchathani', 34000, '0765148888', 'Male', 'lepingchina@live.com', '4197379168699', '2006-06-20', 'lelele', 'pingpingping', '20000', 6549),
(8, 'Zhao', 'Shi', 'Chonburi', 20000, '0784524682', 'Male', 'zhaojin@hotmail.com', '8189518473465', '1996-10-15', 'zhaozhao', 'jinjinza', '40000', 8888),
(9, 'Yuta', 'Fukui', 'Chonburi', 20000, '0993426659', 'Male', 'yutarockza@live.com', '0194280844548', '1995-02-06', 'yuta54321', 'password', '12000', 9865),
(10, 'Suyoung', 'Hong', 'Chonburi', 20000, '0648989695', 'Male', 'honghongwasaki@hotmail.com', '2503482340322', '1981-06-14', 'honghong', 'youngohm', '36200', 3578),
(11, 'Hikaru', 'Shindo', 'Chonburi', 20000, '0653626425', 'Male', 'hikaruzai@live.com', '2050120304687', '1996-06-13', 'hikaru123', 'shindo123', '6500', 2222),
(12, 'Hitoshi', 'Koeike', 'Bangkok', 10140, '0495931659', 'Male', 'hitoshiwasa@hotmail.com', '2878595818870', '1992-05-30', 'hotohitoshi', 'userza', '40000', 4395),
(13, 'Koji', 'Saeki', 'Nakhonpathom', 73000, '0349995665', 'Male', 'kojigo@hotmail.com', '8713806467648', '2000-06-27', 'kojikoji', 'anonymous', '24590', 2222),
(14, 'Yoshitaka', 'Waya', 'Nakhonpathom', 73000, '0413116472', 'Male', 'wayakawasaki@hotmail.com', '5508841867358', '2007-06-22', 'wayasasa', 'madafaka', '2500', 3468),
(15, 'Kawi', 'Masakawa', 'Nakhonpathom', 73000, '0456259567', 'Male', 'kawaijung@hotmail.com', '7725552722680', '1990-10-28', 'kawijung', 'sakawaju', '35000', 7539),
(16, 'Kanao', 'Mishima', 'Nakhonpathom', 73000, '0627659999', 'Female', 'kanaohunter@live.com', '7719706584647', '1996-05-07', 'kanaohunterwashi', 'wawow', '84000', 2975),
(17, 'Yuga', 'Aoyama', 'Bangkok', 10140, '0135249898', 'Male', 'yushinanana@live.com', '5837341954676', '1986-02-09', 'yugawashi', 'washiyuga', '90000', 9865),
(18, 'Mina', 'Ashido', 'Khonkaen', 40000, '0436216452', 'Female', 'minamina@hotmail.com', '8348320189209', '2009-01-28', 'minajung', 'ashidoinvis', '3500', 5555),
(19, 'Tsuyu', 'Asui', 'Khonkaen', 40000, '0769435297', 'Female', 'ashujazi@hotmail.com', '4887863456046', '1995-09-12', 'azjinan', 'kakawaxu', '12000', 8246),
(20, 'Tenya', 'Lida', 'Khonkaen', 40000, '0439699999', 'Male', 'tenyashashi@hotmail.com', '4973698812642', '1999-03-03', 'tenyasasa', 'yaymashi', '26000', 5643),
(21, 'Ochaco', 'Uraraka', 'Khonkaen', 40000, '0769593156', 'Female', 'urarakaaa@hotmail.com', '1838728252065', '1978-08-24', 'urahero', 'namityu', '43200', 6666),
(22, 'Mashirao', 'Ojiro', 'Khonkaen', 40000, '0469543167', 'Male', 'Ojirosama@hotmail.com', '6371267516456', '1995-08-24', 'ojiroooooza', 'mroza', '85000', 1369),
(23, 'Denki', 'Kaminari', 'Bangkok', 10140, '0664329672', 'Male', 'denkihero@live.com', '4884826508161', '1993-04-23', 'denkijung', 'kaminaruking', '34000', 9876),
(24, 'Eijiro', 'Kirish', 'Bangkok', 10140, '0557946788', 'Male', 'myheronamana@hotmail.com', '5482466325205', '2010-08-13', 'eijorokung', 'noobslayer545', '200', 6547),
(25, 'Koji', 'Koda', 'Ubonratchathani', 34000, '0464659835', 'Male', 'kojihero@hotmail.com', '1524951811044', '1988-09-12', 'kojikoji', 'kodasama', '13500', 8765),
(26, 'Rikido', 'Sato', 'Bangkok', 10140, '0643759562', 'Male', 'satorikido@live.com', '7154554126879', '1985-12-27', 'rikidoza123', 'hbd789', '65000', 6953),
(27, 'Mezo', 'Shoji', 'Ubonratchathani', 34000, '0437599865', 'Male', 'Mezohero@hotmail.com', '6080058656451', '2001-01-27', 'mezohero', 'heroheroshoji', '30000', 4329),
(28, 'Kyoka', 'Jiro', 'Bangkok', 10140, '0347658316', 'Female', 'jirohero@hotmail.com', '5156246015344', '1993-11-13', 'jirosama', 'masterjiro', '25000', 6666),
(29, 'Hanta', 'Sero', 'Chonburi', 20000, '0467658320', 'Male', 'hantamasaka@live.com', '1708271732575', '1993-11-14', 'hantamaster', 'hantahunter', '5400', 7878),
(30, 'Fumikage', 'Tokoyami', 'Bangkok', 10140, '0467689432', 'Male', 'fukutaoyami@hotmail.com', '2172852144331', '1999-01-04', 'fukukageza', 'madasakuka', '12000', 4629),
(31, 'Shoto', 'Todoroki', 'Ubonratchathani', 34000, '0627658316', 'Male', 'shotoheroza@live.com', '4981739088537', '1986-11-09', 'shotoreduce', 'todoshoto', '45000', 6298),
(32, 'Toru', 'Hagakure', 'Khonkaen', 40000, '0469753105', 'Female', 'torumymy@live.com', '2954767441839', '2002-04-17', 'kaguneza', 'maidaitummai', '23650', 4625),
(33, 'Katsuki', 'Bakugo', 'Sisaket', 33000, '0426459732', 'Male', 'bakugozaza@live.com', '3885562142430', '1989-09-10', 'bakugoza543', 'madashashimi', '21000', 8751),
(34, 'Izuku', 'Midoriya', 'Sisaket', 33000, '0457628132', 'Male', 'Izukujung@hotmail.com', '1423582575719', '2003-02-06', 'midoriyaizuya', 'mashikawa', '12000', 8524),
(35, 'Minoru', 'Mineta', 'Sisaket', 33000, '0367624580', 'Male', 'minoruking@live.com', '7455299108042', '1985-08-30', 'minorukawai', 'onijungza', '45000', 3495),
(36, 'Momo', 'Yaoyoruzu', 'Sisaket', 33000, '0427651256', 'Female', 'momoparadise@hotmail.com', '1407737419106', '1991-03-22', 'momojungza123', 'momokawasaki', '70000', 6125),
(37, 'Yosetsu', 'Awase', 'Udonthani', 41000, '0439427654', 'Male', 'awasezawa@live.com', '2296054408162', '1998-04-17', 'kawaserizuki', 'kawaseyoyo', '24000', 4325),
(38, 'Sen', 'Kaibara', 'Udonthani', 41000, '0427651325', 'Male', 'sen1452@hotmail.com', '9610035653481', '1991-09-19', 'sensenkang', 'kaibarakung', '29400', 5462),
(39, 'Togaru', 'Kamakiri', 'Udonthani', 41000, '0617429999', 'Male', 'togarusynsyn@live.com', '7493223578760', '1975-05-06', 'togaruwareal', 'realkama56', '80000', 4982),
(40, 'Shihai', 'Kuroiro', 'Udonthani', 41000, '0748651324', 'Male', 'shikuroryu@hotmail.com', '4098968978741', '1999-06-24', 'kuroiza123', 'lnwza6', '23000', 7534),
(41, 'Itsuka', 'Kendo', 'Udonthani', 41000, '0439587651', 'Female', 'kendokwondo@hotmail.com', '7247364521777', '1976-04-22', 'kendosabarashi', 'kendolnw123', '40000', 4567),
(42, 'Yui', 'Kodai', 'Bangkok', 10140, '0427596452', 'Female', 'yuiyuiza123@live.com', '3071143580699', '1985-12-15', 'yuikodai5678', '56781234zayui', '24000', 7899),
(43, 'Kinoko', 'Komori', 'Ubonratchathani', 34000, '0422517652', 'Female', 'kinokojudai@hotmail.com', '0391488387576', '1992-09-15', 'kinokoghoul', 'kinokowakatoshi', '70000', 1597),
(44, 'Ibara', 'Shiozaki', 'Yasothon', 35000, '0754528651', 'Female', 'ibaraconan@hotmail.com', '3591836953510', '1997-09-05', 'ibarajung123', 'missibara', '21000', 6548),
(45, 'Jurota', 'Shishida', 'Yasothon', 35000, '0417658420', 'Male', 'shishidaju@live.com', '3083556643289', '1998-04-22', 'jurotakung456', 'lnwlnwkub', '24100', 4678),
(46, 'Nirengeki', 'Shoda', 'Yasothon', 35000, '0478657652', 'Male', 'shodakung@live.com', '0070510396147', '1985-09-05', 'shodanirengod', 'shoda456', '89000', 3465),
(47, 'Pony', 'Tsunotori', 'Yasothon', 35000, '0417598888', 'Female', 'ponyjung123@live.com', '3110061168513', '1989-08-21', 'ponyzsqwert', 'qwerty', '14000', 7561),
(48, 'Kosei', 'Tsuburaba', 'Yasothon', 35000, '0759856014', 'Male', 'koseizakung453@hotmail.com', '8411281930708', '2020-05-08', 'koseikosei2', 'koseiwakatoshi', '24000', 8544),
(49, 'Tetsutetsu', 'Tetsutetsu', 'Yasothon', 35000, '0498546125', 'Male', 'tetsugod2time@hotmail.com', '1193212677823', '1991-09-12', 'tetsu2time', 'tetsugodson', '20000', 3265),
(50, 'Setsuna', 'Tokage', 'Bangkok', 10140, '0657549152', 'Female', 'setsutoka@hotmail.com', '2728632256140', '1988-09-09', 'setsukageho', 'setsugege', '45000', 9514);

-- --------------------------------------------------------

--
-- Table structure for table `debitcard`
--

CREATE TABLE `debitcard` (
  `DebitCardID` bigint(32) NOT NULL,
  `CVV` int(16) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `ExpiredDate` date NOT NULL,
  `CustomerID` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `debitcard`
--

INSERT INTO `debitcard` (`DebitCardID`, `CVV`, `Status`, `ExpiredDate`, `CustomerID`) VALUES
(223393243101772, 858, 1, '2027-03-16', 3),
(301289030872482, 298, 1, '2029-01-04', 5),
(364819057817850, 696, 1, '2024-12-12', 23),
(376627606548057, 753, 1, '2024-03-19', 7),
(432144180222513, 457, 1, '2032-10-30', 19),
(819134302822113, 951, 1, '2029-03-13', 50),
(1007319624304321, 777, 1, '2037-06-23', 6),
(1405184717522246, 656, 1, '2029-07-23', 11),
(1407948623873024, 346, 1, '2021-03-01', 27),
(1478523696325874, 321, 1, '2020-05-30', 1),
(1780559946077659, 968, 1, '2028-09-26', 32),
(1796542082429106, 469, 1, '2025-01-03', 12),
(1825013428712767, 765, 1, '2026-09-12', 30),
(1948759230929771, 165, 1, '2021-10-19', 15),
(2348342714196199, 986, 1, '2025-09-06', 28),
(2597484381714417, 414, 1, '2024-09-11', 22),
(2684911259785673, 762, 1, '2023-04-13', 12),
(2966899970695983, 456, 1, '2026-04-13', 40),
(3032678424476020, 452, 1, '2033-04-01', 35),
(3141660090232153, 692, 1, '2025-08-16', 18),
(3221525437029597, 764, 1, '2024-04-10', 25),
(3225911163635077, 111, 1, '2026-09-14', 2),
(3309523549912252, 346, 1, '2025-03-10', 46),
(3648478399873769, 611, 1, '2020-05-13', 29),
(3701621592595051, 789, 1, '2025-08-11', 39),
(3996428699654577, 333, 1, '2034-05-07', 21),
(4203054196242619, 465, 1, '2027-04-15', 26),
(4261192426923449, 666, 1, '2025-05-07', 34),
(4327121892511256, 753, 1, '2021-08-24', 8),
(4394389321105018, 467, 1, '2025-09-16', 45),
(4496331404948124, 636, 1, '2027-06-15', 10),
(4850251160868006, 462, 1, '2025-04-16', 32),
(5213729545230827, 854, 1, '2028-09-03', 48),
(5277800229476829, 578, 1, '2025-09-09', 40),
(5313283452739459, 444, 1, '2032-03-08', 31),
(5394845209048523, 456, 1, '2029-04-15', 41),
(5406364840423653, 456, 1, '2025-09-23', 43),
(5432692028983307, 764, 1, '2021-06-22', 9),
(5674453646710581, 111, 1, '2026-08-13', 17),
(5876538308210496, 167, 1, '2020-10-12', 3),
(6015265566314153, 789, 1, '2032-09-10', 42),
(6041641371650096, 619, 1, '2020-11-17', 14),
(6275803525602167, 123, 1, '2024-11-18', 38),
(6307655667699823, 758, 1, '2033-09-08', 36),
(6384327888385540, 753, 1, '2022-07-28', 33),
(6986553518635736, 546, 1, '2026-03-17', 37),
(7312031675036299, 753, 1, '2027-09-09', 47),
(7370660968540736, 321, 1, '2027-06-22', 4),
(7509282804126679, 789, 1, '2032-04-15', 44),
(7567436402362998, 888, 1, '2022-01-02', 24),
(7577815384665057, 695, 1, '2022-05-16', 7),
(7582422915624889, 324, 1, '2028-11-14', 46),
(7668472177305246, 745, 1, '2030-07-10', 1),
(7700820740117919, 761, 1, '2030-10-14', 16),
(7713171976383192, 326, 1, '2028-04-18', 49),
(7896541236547896, 444, 1, '2020-10-21', 2),
(8086154777946932, 764, 1, '2027-07-20', 45),
(8211335650596509, 222, 1, '2020-12-02', 11),
(8262365115262407, 753, 1, '2025-05-16', 20),
(8590027039031004, 666, 1, '2028-06-13', 13),
(8898923622118071, 795, 1, '2026-09-15', 22),
(8970627312403815, 945, 1, '2027-09-21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `depositwithdraw`
--

CREATE TABLE `depositwithdraw` (
  `DepositWithDrawID` int(16) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Type` varchar(16) NOT NULL,
  `Amount` int(64) NOT NULL,
  `Fee` decimal(64,0) NOT NULL,
  `AccountID` int(16) NOT NULL,
  `StaffID` int(32) DEFAULT NULL,
  `MachineID` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `depositwithdraw`
--

INSERT INTO `depositwithdraw` (`DepositWithDrawID`, `Date`, `Type`, `Amount`, `Fee`, `AccountID`, `StaffID`, `MachineID`) VALUES
(1, '2020-05-24 22:05:00', 'Withdraw', 5000, '0', 1, 1, NULL),
(2, '2020-05-26 22:05:00', 'Deposit', 5000, '0', 1, 1, NULL),
(4, '2020-05-12 04:11:00', 'Deposit', 500, '0', 20, 20, NULL),
(5, '2020-05-20 04:11:00', 'Deposit', 5000, '0', 2, 19, NULL),
(6, '2020-05-22 03:25:00', 'Deposit', 9000, '0', 54, 18, NULL),
(7, '2020-05-15 07:22:00', 'Withdraw', 500, '5', 54, 22, NULL),
(8, '2020-05-22 07:25:00', 'Withdraw', 5000, '13', 17, 15, NULL),
(9, '2020-05-01 07:22:00', 'Withdraw', 5000, '13', 1, 2, NULL),
(10, '2020-04-30 18:25:00', 'Withdraw', 9000, '0', 18, 19, NULL),
(11, '2020-04-30 18:01:00', 'Deposit', 10000, '0', 16, 19, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `MachineID` int(16) NOT NULL,
  `BranchID` int(32) NOT NULL,
  `1000B` int(16) NOT NULL,
  `500B` int(16) NOT NULL,
  `100B` int(16) NOT NULL,
  `Balance` decimal(64,0) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Type` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`MachineID`, `BranchID`, `1000B`, `500B`, `100B`, `Balance`, `Status`, `Type`) VALUES
(1, 29, 30, 10, 2, '35200', 1, 'atm'),
(2, 10, 50, 20, 5, '60500', 0, 'cdm'),
(3, 9, 35, 15, 8, '43300', 0, 'cdm'),
(4, 1, 8, 5, 3, '10800', 1, 'atm'),
(5, 13, 60, 45, 14, '83900', 1, 'cdm'),
(6, 25, 24, 12, 8, '30800', 0, 'atm'),
(7, 3, 13, 9, 2, '17700', 0, 'atm'),
(8, 5, 25, 15, 10, '34200', 1, 'cdm'),
(9, 4, 50, 5, 1, '52600', 0, 'cdm'),
(10, 8, 20, 9, 4, '24900', 1, 'cdm');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `OrganizationID` int(16) NOT NULL,
  `AccountID` int(16) DEFAULT NULL,
  `Name` text NOT NULL,
  `Type` varchar(16) NOT NULL,
  `SwiftCode` varchar(16) NOT NULL,
  `AccountNo` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`OrganizationID`, `AccountID`, `Name`, `Type`, `SwiftCode`, `AccountNo`) VALUES
(1, 18, 'Kasikorn Bank', 'Bank', 'KSKSTT1231', '1237894561'),
(2, 1, 'Siam Super Shop', 'Company', 'STKSTT1234', '1237894599');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(16) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Type` varchar(16) NOT NULL,
  `Amount` decimal(64,0) NOT NULL,
  `Fee` decimal(64,0) NOT NULL,
  `StaffID` int(32) DEFAULT NULL,
  `AccountID` int(16) NOT NULL,
  `MachineID` int(16) DEFAULT NULL,
  `Ref1` varchar(64) NOT NULL,
  `Ref2` varchar(64) NOT NULL,
  `CreditCardID` bigint(32) DEFAULT NULL,
  `OrganizationID` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `Date`, `Type`, `Amount`, `Fee`, `StaffID`, `AccountID`, `MachineID`, `Ref1`, `Ref2`, `CreditCardID`, `OrganizationID`) VALUES
(1, '2020-04-29 19:01:00', 'Payment', '500', '0', 18, 18, NULL, 'XCX111', 'XCX222', NULL, 1),
(2, '2020-05-11 18:01:00', 'Transfer', '5000', '0', 1, 1, NULL, 'XCX110', 'XCX000', 3727247685763630, 2);

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `ReceiverID` int(16) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `CitizenID` varchar(32) NOT NULL,
  `PhoneNumber` varchar(32) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Zipcode` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`ReceiverID`, `fName`, `lName`, `CitizenID`, `PhoneNumber`, `Address`, `Zipcode`) VALUES
(1, 'Vasin', 'Chongcharoenkit', '1102955566102', '0959492655', '126 Pracha Uthit Rd, Bang Mot, Thung Khru, Bangkok 10140', 2101),
(2, 'Pingpong', 'Jung', '1102955566333', '0831873711', '126 Pracha Uthit Rd, Bang Mot, Thung Khru, Bangkok 10140', 2101);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` int(32) NOT NULL,
  `CustomerID` int(32) NOT NULL,
  `BranchID` int(32) NOT NULL,
  `RateOverview` int(16) NOT NULL,
  `RateService` int(16) NOT NULL,
  `RateDuration` int(16) NOT NULL,
  `RateAtmosphere` int(16) NOT NULL,
  `RateTools` int(16) NOT NULL,
  `Comment` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ReviewID`, `CustomerID`, `BranchID`, `RateOverview`, `RateService`, `RateDuration`, `RateAtmosphere`, `RateTools`, `Comment`) VALUES
(1, 1, 1, 5, 5, 0, 5, 5, 'Good'),
(2, 1, 2, 3, 3, 3, 3, 3, 'Average'),
(3, 6, 7, 5, 4, 4, 4, 3, 'Very Well'),
(4, 1, 10, 2, 2, 2, 2, 2, 'Bad');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(32) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Zipcode` int(32) NOT NULL,
  `PhoneNumber` varchar(32) NOT NULL,
  `Gender` varchar(16) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `CitizenID` varchar(32) NOT NULL,
  `BranchID` int(32) NOT NULL,
  `BirthDate` date NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Salary` decimal(64,0) NOT NULL,
  `Position` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `fName`, `lName`, `Address`, `Zipcode`, `PhoneNumber`, `Gender`, `Email`, `CitizenID`, `BranchID`, `BirthDate`, `Username`, `Password`, `Salary`, `Position`) VALUES
(1, 'Nath', 'Shinno', 'Ubonratchathani', 34000, '0431687521', 'Male', 'dewbbgun@syntaxbank.com', '1459976422105', 1, '2000-04-04', 'dewzaza', 'dewbaba', '20000', 'Staff'),
(2, 'Naruto', 'Uzumaki', 'Bangkok', 10140, '0134678954', 'Male', 'NarutoUzumaki@syntaxbank.com', '1467781322498', 6, '1995-05-19', 'nanana', 'tototo', '50000', 'Manager'),
(3, 'Sasuke', 'Uchiha', 'Ubonratchathani', 34000, '0294857625', 'Male', 'Saksuke@syntaxbank.com', '1349901033455', 2, '1998-05-19', 'sasuke', 'naruto', '40000', 'Manager'),
(4, 'Sakura', 'Haruno', 'Bangkok', 10120, '0154918245', 'Female', 'SakuraH@syntaxbank.com', '1842739546248', 3, '1999-06-17', 'snowy', 'sakura', '30000', 'Manager'),
(5, 'Kakashi', 'Hatake', 'Pattani', 94140, '0341815139', 'Male', 'Kakashi@syntaxbank.com', '1754238129576', 5, '1997-03-05', 'kakashi', 'auto', '25000', 'Staff'),
(6, 'Boruto', 'Uzumaki', 'Prachinburi', 25150, '0468925431', 'Male', 'Borutoki@syntaxbank.com', '1842953176842', 7, '1999-07-08', 'freestyle', 'boruto', '35000', 'Manager'),
(7, 'Sarada', 'Uchiha', 'Chanthaburi', 22120, '0671392846', 'Female', 'SaradaU@syntaxbank.com', '1276531829462', 4, '2000-01-01', 'sarada', 'earthzaza', '22000', 'Staff'),
(8, 'Konohamaru', 'Sarutobi', 'Kalasin', 46130, '0813429187', 'Male', 'Konohamaru@syntaxbank.com', '1538249613478', 8, '1996-05-10', 'rare', 'item', '45000', 'Manager'),
(9, 'Hinata', 'Hyuga', 'Phetchaburi', 67000, '0735167489', 'Female', 'Hinata@syntaxbank.com', '1347826948263', 10, '1997-02-20', 'hinata', 'sasuke', '15000', 'Staff'),
(10, 'Kiba', 'Inuzuka', 'Sukhothai', 64180, '0491385126', 'Male', 'Kiba@syntaxbank.com', '1942627589632', 15, '1995-10-11', 'extreme', 'mode', '17500', 'Staff'),
(11, 'Shino', 'Aburame', 'Bangkok', 10600, '0913842651', 'Male', 'Shinoz@syntaxbank.com', '1492862175368', 13, '1998-05-03', 'folkza', 'expert', '48000', 'Manager'),
(12, 'Kurenai', 'Yuhi', 'Phuket', 83110, '0513862495', 'Female', 'Kurenai@syntaxbank.com', '1762486532195', 11, '1995-04-23', 'pingpong', 'ragnarok', '55000', 'Manager'),
(13, 'Shikamaru', 'Nara', 'Chumphon', 86220, '0165248925', 'Male', 'ShikamaruN@syntaxbank.com', '1648842144526', 12, '1999-09-09', 'mill', 'shiba', '49000', 'Manager'),
(14, 'Choji', 'Akimichi', 'Lopburi', 15150, '0998561234', 'Male', 'Choji@syntaxbank.com', '1478963215632', 3, '1997-02-25', 'michael', 'jackson', '13000', 'Staff'),
(15, 'Ino', 'Yamanaka', 'Pattani', 94140, '0379128635', 'Female', 'Inonaka@syntaxbank.com', '1862547896321', 6, '1994-12-30', 'wiki', 'miku', '43000', 'Manager'),
(16, 'Asuma', 'Sarutobi', 'Lampang', 52170, '0241563480', 'Male', 'Asumatobi@syntaxbank.com', '1927635846218', 5, '1999-11-22', 'ninja', 'assassin', '23500', 'Staff'),
(17, 'Rock', 'Lee', 'Kalasin', 46130, '0641563792', 'Male', 'RockandRow@syntaxbank.com', '1384229665137', 7, '1998-03-04', 'speed', 'run', '38000', 'Manager'),
(18, 'Neji', 'Hyuga', 'Nakhonnayok', 26110, '0995624813', 'Male', 'Neji@syntaxbank.com', '1663428952369', 11, '1995-08-24', 'earthcpe', 'earthaz', '14000', 'Staff'),
(19, 'Might', 'Guy', 'Phetchaburi', 76120, '0759138524', 'Male', 'Guyberg@syntaxbank.com', '1752463892468', 2, '1997-05-15', 'dark', 'night', '16000', 'Staff'),
(20, 'Shikadai', 'Nara', 'Ranong', 85000, '0342869125', 'Male', 'Shikadai@syntaxbank.com', '1238469285631', 18, '1990-03-06', 'sun', 'shine', '10000', 'Staff'),
(21, 'Chocho', 'Akimichi', 'Yala', 95130, '0452178563', 'Female', 'Chochomoji@syntaxbank.com', '1824695246285', 25, '1991-11-30', 'grizzly', 'panda', '70000', 'Manager'),
(22, 'Inojin', 'Yamanaka', 'Saraburi', 18110, '0139521450', 'Male', 'Inojin@syntaxbank.com', '1463852469246', 10, '2000-02-03', 'ice', 'bear', '60000', 'Manager'),
(23, 'Moegi', 'Kazamatsuri', 'Phuket', 83120, '0988951488', 'Female', 'Moegi@syntaxbank.com', '1556236841253', 21, '1994-01-14', 'rythm', 'joox', '65000', 'Manager'),
(24, 'Metal', 'Lee', 'Nakhonpathom', 73170, '0246813579', 'Male', 'Leefists@syntaxbank.com', '1963214852479', 14, '2001-06-12', 'dragon', 'tail', '7000', 'Staff'),
(25, 'Iwabi', 'Yuino', 'Yala', 95000, '0763185269', 'Male', 'Iwabi@syntaxbank.com', '1247836952368', 19, '1985-03-17', 'rush', 'iwabi', '12500', 'Staff'),
(26, 'Denki', 'Kaminarimon', 'Bangkok', 10600, '0675126892', 'Male', 'Denki@syntaxbank.com', '1678524569258', 17, '1988-09-10', 'denki', 'academy', '38000', 'Manager'),
(27, 'Udon', 'Ise', 'Trat', 23000, '0884256314', 'Male', 'Udon@syntaxbank.com', '1843562489271', 1, '1999-02-01', 'cartoon', 'netflix', '24000', 'Staff'),
(28, 'Zabuza', 'Momochi', 'Lopburi', 15150, '0935619147', 'Male', 'Zabuza@syntaxbank.com', '1374689524635', 9, '1987-04-21', 'tokyo', 'disney', '42000', 'Manager'),
(29, 'Kabuto', 'Yakushi', 'Nan', 55140, '0758139624', 'Male', 'Kabuto@syntaxbank.com', '1524863179524', 5, '1990-05-13', 'mickey', 'mouse', '11000', 'Staff'),
(30, 'Obito', 'Uchiha', 'Sukhothai', 64140, '0845213791', 'Male', 'Obito@syntaxbank.com', '1624893547125', 12, '1991-03-10', 'monkey', 'banana', '56000', 'Manager'),
(31, 'Kisame', 'Hoshigaki', 'Chumphon', 86180, '0771235465', 'Male', 'Kisame@syntaxbank.com', '1351328143578', 20, '1998-04-28', 'alcohol', 'covid', '80000', 'Manager'),
(32, 'Itachi', 'Uchiha', 'Rayong', 21140, '0476248954', 'Male', 'Itachi@syntaxbank.com', '1357468524698', 4, '1992-10-12', 'earth', 'moon', '15000', 'Staff'),
(33, 'Madara', 'Uchiha', 'Bangkok', 10120, '0653168795', 'Male', 'Madara@syntaxbank.com', '1985698496871', 23, '1993-12-12', 'never', 'sky', '33000', 'Manager'),
(34, 'Kaguya', 'Otsutsuki', 'Chiangmai', 50350, '0223654487', 'Female', 'Kaguya@syntaxbank.com', '1665234189572', 19, '1999-11-04', 'apple', 'iphone', '5000', 'Staff'),
(35, 'Toneri', 'Otsutsuki', 'Singburi', 16120, '0136589468', 'Male', 'Toneri@syntaxbank.com', '1489526789452', 8, '1986-01-02', 'samsung', 'galaxy', '64000', 'Manager'),
(36, 'Momoshiki', 'Otsutsuki', 'Ubonratchathani', 34230, '0663568874', 'Male', 'Momoshiki@syntaxbank.com', '1284658924758', 10, '1980-03-11', 'momo', 'shiki', '16000', 'Staff'),
(37, 'Kinshiki', 'Otsutsuki', 'Saraburi', 18150, '0789878520', 'Male', 'Kinshiki@syntaxbank.com', '1574223415241', 15, '1999-01-28', 'ghost', 'black', '75000', 'Manager'),
(38, 'Shin', 'Uchiha', 'Pathumthani', 12110, '0334568125', 'Male', 'Shin@syntaxbank.com', '1368456298125', 6, '1988-05-24', 'gem', 'booster', '3000', 'Staff'),
(39, 'Iruka', 'Umino', 'Songkhla', 90190, '0811248563', 'Male', 'Iruka@syntaxbank.com', '1452158795246', 1, '1983-02-07', 'manga', 'anime', '59000', 'Manager'),
(40, 'Hashirama', 'Senju', 'Yala', 95000, '0553267485', 'Male', 'Hashirama@syntaxbank.com', '1336254185963', 3, '1995-04-13', 'online', 'offline', '21000', 'Staff'),
(41, 'Tobirama', 'Senju', 'Uttaradit', 53230, '0348569130', 'Male', 'Tobirama@syntaxbank.com', '1095263420102', 24, '1998-01-27', 'music', 'play', '13000', 'Staff'),
(42, 'Hiruzen', 'Sarutobi', 'Yasothon', 35120, '0990102548', 'Male', 'Hiruzen@syntaxbank.com', '1210036584736', 16, '1980-03-14', 'admin', 'host', '10000', 'Staff'),
(43, 'Minato', 'Namikaze', 'Sukhothai', 64180, '0472368710', 'Male', 'Minato@syntaxbank.com', '1924713685213', 7, '1986-07-21', 'premium', 'vip', '57000', 'Manager'),
(44, 'Anko', 'Mitarashi', 'Phrae', 54150, '0843160024', 'Female', 'Anko@syntaxbank.com', '1403680750691', 23, '1982-12-31', 'gold', 'silver', '68500', 'Manager'),
(45, 'Hagoromo', 'Otsutsuki', 'Chaiyaphum', 36170, '0334150278', 'Male', 'Hagoromo@syntaxbank.com', '1504856924100', 25, '1989-09-19', 'control', 'screen', '43000', 'Manager'),
(46, 'Himawari', 'Uzumaki', 'Kalasin', 46190, '0203652012', 'Female', 'Himawari@syntaxbank.com', '1103056302123', 3, '1990-04-11', 'open', 'mind', '16500', 'Staff'),
(47, 'Sumire', 'Kakei', 'Nakhonnayok', 26000, '0375416982', 'Female', 'Sumire@syntaxbank.com', '1334120893256', 20, '1999-02-18', 'comic', 'book', '42000', 'Manager'),
(48, 'Mei', 'Terumi', 'Trang', 92000, '0661023789', 'Female', 'Mei@syntaxbank.com', '1806987254368', 30, '1983-03-13', 'calculator', 'star', '9500', 'Staff'),
(49, 'Gengetsu', 'Hozuki', 'Krabi', 81160, '0705413890', 'Male', 'Gengetsu@syntaxbank.com', '1943256318023', 27, '1992-06-24', 'future', 'success', '68000', 'Manager'),
(50, 'Suigetsu', 'Hozuki', 'Lopburi', 15190, '0466813942', 'Male', 'Suigetsu@syntaxbank.com', '1743682401025', 29, '1979-10-01', 'heart', 'couple', '77000', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountID`),
  ADD KEY `BranchID` (`BranchID`),
  ADD KEY `CustomerID` (`CustomerID`) USING BTREE,
  ADD KEY `DebitCardID` (`DebitCardID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BranchID`);

--
-- Indexes for table `cheque`
--
ALTER TABLE `cheque`
  ADD PRIMARY KEY (`ChequeID`),
  ADD KEY `StaffID` (`StaffID`),
  ADD KEY `AccountID` (`AccountID`),
  ADD KEY `ReceiverID` (`ReceiverID`);

--
-- Indexes for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`CreditCardID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `debitcard`
--
ALTER TABLE `debitcard`
  ADD PRIMARY KEY (`DebitCardID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `depositwithdraw`
--
ALTER TABLE `depositwithdraw`
  ADD PRIMARY KEY (`DepositWithDrawID`),
  ADD KEY `StaffID` (`StaffID`),
  ADD KEY `MachineID` (`MachineID`),
  ADD KEY `AccountID` (`AccountID`);

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`MachineID`),
  ADD KEY `BranchID` (`BranchID`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`OrganizationID`),
  ADD KEY `AccountID` (`AccountID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `StaffID` (`StaffID`),
  ADD KEY `MachineID` (`MachineID`),
  ADD KEY `AccountID` (`AccountID`),
  ADD KEY `CreditCardID` (`CreditCardID`),
  ADD KEY `OrganizationID` (`OrganizationID`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`ReceiverID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `BranchID` (`BranchID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`),
  ADD KEY `BranchID` (`BranchID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccountID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `depositwithdraw`
--
ALTER TABLE `depositwithdraw`
  MODIFY `DepositWithDrawID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `OrganizationID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `ReceiverID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_3` FOREIGN KEY (`BranchID`) REFERENCES `branch` (`BranchID`),
  ADD CONSTRAINT `account_ibfk_4` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `account_ibfk_5` FOREIGN KEY (`DebitCardID`) REFERENCES `debitcard` (`DebitCardID`);

--
-- Constraints for table `cheque`
--
ALTER TABLE `cheque`
  ADD CONSTRAINT `cheque_ibfk_3` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`),
  ADD CONSTRAINT `cheque_ibfk_4` FOREIGN KEY (`AccountID`) REFERENCES `account` (`AccountID`),
  ADD CONSTRAINT `cheque_ibfk_5` FOREIGN KEY (`ReceiverID`) REFERENCES `receiver` (`ReceiverID`);

--
-- Constraints for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD CONSTRAINT `creditcard_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `debitcard`
--
ALTER TABLE `debitcard`
  ADD CONSTRAINT `debitcard_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `depositwithdraw`
--
ALTER TABLE `depositwithdraw`
  ADD CONSTRAINT `depositwithdraw_ibfk_2` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`),
  ADD CONSTRAINT `depositwithdraw_ibfk_3` FOREIGN KEY (`MachineID`) REFERENCES `machine` (`MachineID`),
  ADD CONSTRAINT `depositwithdraw_ibfk_4` FOREIGN KEY (`AccountID`) REFERENCES `account` (`AccountID`);

--
-- Constraints for table `machine`
--
ALTER TABLE `machine`
  ADD CONSTRAINT `machine_ibfk_1` FOREIGN KEY (`BranchID`) REFERENCES `branch` (`BranchID`);

--
-- Constraints for table `organization`
--
ALTER TABLE `organization`
  ADD CONSTRAINT `organization_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `account` (`AccountID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`),
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`MachineID`) REFERENCES `machine` (`MachineID`),
  ADD CONSTRAINT `payment_ibfk_6` FOREIGN KEY (`AccountID`) REFERENCES `account` (`AccountID`),
  ADD CONSTRAINT `payment_ibfk_7` FOREIGN KEY (`CreditCardID`) REFERENCES `creditcard` (`CreditCardID`),
  ADD CONSTRAINT `payment_ibfk_8` FOREIGN KEY (`OrganizationID`) REFERENCES `organization` (`OrganizationID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`BranchID`) REFERENCES `branch` (`BranchID`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`BranchID`) REFERENCES `branch` (`BranchID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
