-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 03:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bca6`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `userid` int(11) NOT NULL,
  `usertitle` varchar(30) NOT NULL,
  `userdescription` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`userid`, `usertitle`, `userdescription`) VALUES
(5, 'software', 'computer field');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `email`, `Password`, `pic`) VALUES
(7, 'Aman', 'asr@gmail.com', '2345', '05ea45f73c343495407ad7943a5f06aa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `uid`, `pid`, `subtotal`, `qty`, `cdate`) VALUES
(29, 26, 63, 2000, 1, '01/04/22'),
(30, 26, 63, 2000, 1, '01/04/22');

-- --------------------------------------------------------

--
-- Table structure for table `carthistory`
--

CREATE TABLE `carthistory` (
  `cartid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carthistory`
--

INSERT INTO `carthistory` (`cartid`, `uid`, `pid`, `subtotal`, `qty`, `cdate`) VALUES
(1, 26, 63, 0, 1, ''),
(2, 26, 63, 0, 1, ''),
(3, 26, 66, 0, 1, ''),
(4, 26, 66, 0, 1, ''),
(5, 26, 63, 0, 1, ''),
(6, 26, 63, 0, 1, '01/04/22');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `pic` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `pic`) VALUES
(28, 'women', '29-Women-StreetStyle-Fashion.jpg.crdownload'),
(29, 'Kids', '464821208.jpg'),
(32, 'Men', 'mens-fashion-trends-this-year.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `useraddress` varchar(100) NOT NULL,
  `usermobileno` varchar(10) NOT NULL,
  `userwebaddress` varchar(30) NOT NULL,
  `useremail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`userid`, `username`, `useraddress`, `usermobileno`, `userwebaddress`, `useremail`) VALUES
(15, 'Rajput AnkitSingh', 'c-110 suryadev appt,trikamnagar-2,surat-395010.', '9726992074', 'www.ankit.com', 'asr91198@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `Question`, `Answer`) VALUES
(493, 'what is your name?', 'Ankit'),
(494, 'what is your hobby?', 'hockey');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `oid` int(11) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `percentage` int(11) NOT NULL,
  `ostartdate` date NOT NULL,
  `oendsdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ordid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `orduserfname` varchar(50) NOT NULL,
  `orduserlname` varchar(50) NOT NULL,
  `ordusercname` varchar(50) NOT NULL,
  `ordcountryname` varchar(50) NOT NULL,
  `ordstreetadd` varchar(10000) NOT NULL,
  `ordcity` varchar(50) NOT NULL,
  `ordstate` varchar(50) NOT NULL,
  `ordpostcode` varchar(50) NOT NULL,
  `ordphoneno` varchar(50) NOT NULL,
  `ordemailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pdescription` varchar(500) NOT NULL,
  `pprice` varchar(30) NOT NULL,
  `psize` varchar(40) NOT NULL,
  `qty` int(11) NOT NULL,
  `pstatus` int(11) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `sid`, `pname`, `pdescription`, `pprice`, `psize`, `qty`, `pstatus`, `pic`) VALUES
(63, 47, 'Danim', 'vyyyyv', '2000', 'L', 1, 0, '556ed92322f745a629abad4f664cd7b2.jpg'),
(66, 47, 'Damin', 'jgdudgdg', '2000', 'l', 1, 1, '3f18bb2c-c928-4412-9cdf-dd0ebf573cd0_1.146f2ae10681187afef8ea7ba914e241.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `aid` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`aid`, `Email`, `Username`, `Password`, `pic`) VALUES
(48, 'asr91198@gmail.com', 'Ankit', '12345687', '05ea45f73c343495407ad7943a5f06aa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sid`, `cid`, `sname`, `pic`) VALUES
(35, 28, 'jeans', 'jeans2.jpeg'),
(36, 28, 'T-shirt', 'girlst-shirt.jpg'),
(37, 28, 'shirt', 'shirt.jpeg'),
(38, 28, 'jacket', '-473Wx593H-462774619-grey-MODEL6.jpg'),
(41, 28, 'indian saree', '1615378197.Designer_Wedding_Wear_Sky_Color_Lehenga_Choli.jpeg'),
(42, 28, 'indian dress', 'Indian-Dresses-2017-2018.jpg'),
(43, 29, 'frock', '464821208.jpg'),
(46, 32, 'shirt', 'mens-fashion-trends-this-year.jpg'),
(47, 29, 'girls T-shirt', '556ed92322f745a629abad4f664cd7b2.jpg'),
(48, 29, 'Boys-Tshirt', '3f18bb2c-c928-4412-9cdf-dd0ebf573cd0_1.146f2ae10681187afef8ea7ba914e241.jpeg'),
(50, 29, 'jeans', 'children-casual-trousers-baby-boys-jeans.jpg'),
(52, 32, 'shirt', 'ca9847ac-c367-49f6-902d-b3a02160d3f7_1.11be741a06101a7dda89c0d6149df327.jpeg'),
(53, 32, 'T-shirt', '55ae9d97-5537-4487-bb32-d283d8ac3ed1_1.f7cf2738de66e8ddae0f43f77d5f7926.jpeg'),
(56, 32, 'shoot', 'Latest-Coat-Pant-Design-Men-Suit-Formal-Wedding-Blazer-Custom-Jacket-3-Piece-Suits.jpg'),
(57, 32, 'jeans', 'jeans2.jpeg'),
(58, 32, 'indian wedding dress', '53f9156d683bc84f2a4ebd9ff9ee02eb.jpg'),
(59, 29, 'shirt', 'K0003_FRP.webp');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `usermobileno` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `useraddress` varchar(900) NOT NULL,
  `otp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`uid`, `username`, `gender`, `dob`, `usermobileno`, `email`, `password`, `useraddress`, `otp`, `status`) VALUES
(26, 'Ankit', 'Male', '2022-03-04', '9726992074', 'asr91198@gmail.com', '1234', 'hfowrhgoghh', 1082, 1),
(61, 'Rahul', 'Male', '2022-03-04', '9726992074', 'rajputankit5570@gmail.com', '1245', 'dhiyfggc', 2224, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `ucid` int(11) NOT NULL,
  `ucname` varchar(50) NOT NULL,
  `ucemail` varchar(50) NOT NULL,
  `ucphone` varchar(10) NOT NULL,
  `ucsubject` varchar(50) NOT NULL,
  `ucmessage` varchar(500) NOT NULL,
  `ucstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`ucid`, `ucname`, `ucemail`, `ucphone`, `ucsubject`, `ucmessage`, `ucstatus`) VALUES
(13, 'Ankit', 'asr91198@gmail.com', '9726992074', 'contact on whatsapp', 'JDCIUDIUVIUF', 0),
(14, 'AMIT', 'asr91198@gmail.com', '9726992074', 'contact on whatsapp', 'IEFGYRFGYURFY', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `carthistory`
--
ALTER TABLE `carthistory`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ordid`),
  ADD KEY `order_ibfk_1` (`uid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`ucid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `carthistory`
--
ALTER TABLE `carthistory`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=495;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `ucid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userregistration` (`uid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carthistory`
--
ALTER TABLE `carthistory`
  ADD CONSTRAINT `carthistory_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userregistration` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carthistory_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userregistration` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `subcategory` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
