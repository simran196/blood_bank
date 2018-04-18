-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 08:35 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `first_name`, `last_name`, `username`, `password`, `email`) VALUES
(1, 'simranjot', 'singh', 'simran@1', '123456', 'simran@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

CREATE TABLE IF NOT EXISTS `appointment_details` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) NOT NULL,
  `patient_phn_no` int(20) NOT NULL,
  `patient_address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bloodbank_name` varchar(200) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `bloodbank_add` varchar(200) NOT NULL,
  `pincode` int(10) NOT NULL,
  `bb_contact_no` int(15) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `unit_req` int(50) NOT NULL,
  `date` char(50) NOT NULL,
  `time` char(50) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `appointment_details`
--

INSERT INTO `appointment_details` (`patient_id`, `patient_name`, `patient_phn_no`, `patient_address`, `email`, `gender`, `bloodbank_name`, `state`, `district`, `category`, `bloodbank_add`, `pincode`, `bb_contact_no`, `blood_group`, `unit_req`, `date`, `time`) VALUES
(1, 'aman', 56458, 'fsgsd', 'himanshu2515555@gmail.com', 'Male', 'gdsgsdgg', 'delhi', 'sagsg', 'private', 'dghh', 110011, 54564654, 'A+', 11, '0', '00:00:'),
(2, 'wwww', 5454, 'dhhd', 'jasvinsinghk@gmail.com', 'Male', 'dd', 'delhi', 'west', 'private', 'xhgdfhd', 453453, 54564654, 'B-', 11, '0', '00:00:'),
(3, 'wwww', 45745646, 'fsgsd', 'jasvinsinghk@gmail.com', 'Male', 'gdsgsdgg', 'fsgsfg', 'west', 'dhgh', 'dghh', 110011, 54564654, 'A-', 12, '0', '22:59:'),
(4, 'aman', 45745646, 'dhhd', 'harshulkaushik9@gmail.com', 'Female', 'All India Institute of Medical Sciences (AIIMS) Blood Bank', 'Delhi', 'SOUTH DELHI', 'Government', 'AIIMS, Main Blood Bank, Ansari Nagar, Ring Road', 110029, 1126594438, 'A-', 2, '0', '00:00:'),
(5, 'aman', 789632541, 'tilak nagar', 'aman@gmail.com', 'Male', 'Hindu Rao Hospital Blood Bank', 'Delhi', 'NORTH DELHI', 'Government', 'G Block 4th floor, Near Civil Lines Malkaganj', 110007, 1123905713, 'B+', 4, '0', '00:00:'),
(6, 'jha', 852147963, 'bihar', 'jha@gmail.com', 'Male', 'Swami Dayanand Hospital Blood Bank', 'Delhi', 'NORTH EAST DELHI', 'private', 'Dilshad Garden', 110095, 1122581031, 'B+', 10, '0', '00:00:'),
(7, 'wwww', 0, 'adff', 'himanshu2515555@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 10, '0', '00:00:'),
(8, 'aman', 45745646, 'bihar', 'himanshu2515555@gmail.com', 'Male', 'Sir Ganga Ram Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Private', 'Old Rajindra Nagar, Near Janki Devi College', 110060, 1142251800, 'B-', 13, '4', '00:00:'),
(9, 'aman', 45745646, 'dhhd', 'jasvinsinghk@gmail.com', 'Male', 'Regional Blood Tranfusion Center Blood bank, Central Zone', 'Delhi', 'CENTRAL DELHI', 'Government', '2 Jawarlal Nehru Marg, Delhi Gate, Near UBPH', 110002, 1123233809, 'B+', 3, '04/18/2018', '00:00:'),
(10, 'wwww', 45745646, 'fsgsd', 'himanshu2515555@gmail.com', 'Female', 'Sucheta Kriplani Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Government', 'C-604, Shaheed Bhagat Singh Marg, Connaught Place, Opposite to Shivaji Stadium Bus Terminal', 110001, 1123408271, 'A-', 3, '04/08/2018', '12 : 0'),
(11, 'wwww', 45745646, 'fsgsd', 'himanshu2515555@gmail.com', 'Female', 'Sucheta Kriplani Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Government', 'C-604, Shaheed Bhagat Singh Marg, Connaught Place, Opposite to Shivaji Stadium Bus Terminal', 110001, 1123408271, 'A-', 3, '04/08/2018', '12 : 03 AM'),
(12, 'aman', 5454, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 3, '04/16/2018', '1 : 00 PM'),
(13, 'aman', 5454, 'dhhd', 'himanshu2515555@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 5, '04/25/2018', '12 : 35 AM'),
(14, 'aman', 5454, 'dhhd', 'himanshu2515555@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 5, '04/25/2018', '12 : 35 AM'),
(15, 'jha', 45745646, 'bihar', 'jasvinsinghk@gmail.com', 'Male', 'Sucheta Kriplani Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Government', 'C-604, Shaheed Bhagat Singh Marg, Connaught Place, Opposite to Shivaji Stadium Bus Terminal', 110001, 1123408271, 'B+', 3, '04/23/2018', '1 : 41 PM'),
(16, 'jha', 45745646, 'bihar', 'jasvinsinghk@gmail.com', 'Male', 'Sucheta Kriplani Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Government', 'C-604, Shaheed Bhagat Singh Marg, Connaught Place, Opposite to Shivaji Stadium Bus Terminal', 110001, 1123408271, 'B+', 3, '04/23/2018', '1 : 41 PM'),
(17, 'aman', 56458, 'fsgsd', 'jasvinsinghk@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 12, '04/23/2018', '11 : 07 PM'),
(18, 'aman', 56458, 'fsgsd', 'jasvinsinghk@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 12, '04/23/2018', '11 : 07 PM'),
(19, 'aman', 56458, 'fsgsd', 'jasvinsinghk@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 12, '04/23/2018', '11 : 07 PM'),
(20, 'aman', 56458, 'fsgsd', 'jasvinsinghk@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 12, '04/23/2018', '11 : 07 PM'),
(21, 'aman', 56458, 'fsgsd', 'jasvinsinghk@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 12, '04/23/2018', '11 : 07 PM'),
(22, 'aman', 56458, 'fsgsd', 'jasvinsinghk@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 12, '04/23/2018', '11 : 07 PM'),
(23, 'aman', 56458, 'fsgsd', 'jasvinsinghk@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 12, '04/23/2018', '11 : 07 PM'),
(24, 'aman', 56458, 'fsgsd', 'jasvinsinghk@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 12, '04/23/2018', '11 : 07 PM'),
(25, 'wwww', 56458, 'dhhd', 'himanshu251@gmail.com', 'Female', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'B+', 14, '04/30/2018', '1 : 06 PM'),
(26, 'wwww', 56458, 'dhhd', 'himanshu251@gmail.com', 'Female', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'B+', 14, '04/30/2018', '1 : 06 PM'),
(27, 'wwww', 56458, 'dhhd', 'himanshu251@gmail.com', 'Female', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'B+', 14, '04/30/2018', '1 : 06 PM'),
(28, 'wwww', 56458, 'dhhd', 'himanshu251@gmail.com', 'Female', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'B+', 14, '04/30/2018', '1 : 06 PM'),
(29, 'wwww', 56458, 'dhhd', 'himanshu251@gmail.com', 'Female', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'B+', 14, '04/30/2018', '1 : 06 PM'),
(30, 'aman', 45745646, 'fsgsd', 'himanshu2515555@gmail.com', 'Female', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'B+', 7, '04/17/2018', '3 : 12 AM'),
(31, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(32, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(33, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(34, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(35, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(36, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(37, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(38, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(39, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(40, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(41, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(42, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(43, 'jha', 56458, 'bihar', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'AB+', 5, '04/18/2018', '3 : 14 AM'),
(44, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(45, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(46, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(47, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(48, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(49, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(50, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(51, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(52, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(53, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(54, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(55, 'ff', 0, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'O-', 10, '04/30/2018', '12 : 43 AM'),
(56, 'aman', 56458, 'fsgsd', 'harshulkaushik9@gmail.com', 'Female', 'Holy Family Hospital Blood Bank', 'Delhi', 'SOUTH DELHI', 'Private', 'Holy Family Hospital, Okhla Road', 110025, 1126332800, 'B+', 9, '04/26/2018', '12 : 22 AM'),
(57, 'wwww', 56458, 'dhhd', 'jasvinsinghk@gmail.com', 'Male', 'Indian Red Cross Society (IRCS) Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Charity', '1, Red Cross Road, Near Parliament House', 110001, 1123711551, 'A-', 12, '04/09/2018', '3 : 08 PM'),
(58, 'wwww', 45745646, 'bihar', 'jasvinsinghk@gmail.com', 'Male', 'Sir Ganga Ram Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Private', 'Old Rajindra Nagar, Near Janki Devi College', 110060, 1142251800, 'AB-', 9, '04/23/2018', '12 : 12 AM'),
(59, 'wwww', 45745646, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Northern Railway Central Hospital Blood Bank', 'Delhi', 'NEW DELHI', 'Government', 'Basant Lane, Connaught Place', 110029, 1123747989, 'A+', 8, '04/25/2018', '11 : 41 AM'),
(60, 'aman', 56458, 'fsgsd', 'himanshu2515555@gmail.com', 'Male', 'Sucheta Kriplani Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Government', 'C-604, Shaheed Bhagat Singh Marg, Connaught Place, Opposite to Shivaji Stadium Bus Terminal', 110001, 1123408271, 'A+', 4, '04/24/2018', '7 : 34 PM'),
(61, 'aman', 45745646, 'bihar', 'himanshu2515555@gmail.com', 'Male', 'Govind Ballabh (G.B.) Pant Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Government', '1, Jawahar Lal Nehru Marg, Delhi Gate ', 110002, 1123232011, 'B+', 14, '04/30/2018', '12 : 04 PM'),
(62, 'aman', 45745646, 'bihar', 'himanshu2515555@gmail.com', 'Male', 'Govind Ballabh (G.B.) Pant Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Government', '1, Jawahar Lal Nehru Marg, Delhi Gate ', 110002, 1123232011, 'B+', 14, '04/30/2018', '12 : 04 PM'),
(63, 'wwww', 45745646, 'dhhd', 'himanshu2515555@gmail.com', 'Male', 'Govind Ballabh (G.B.) Pant Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Government', '1, Jawahar Lal Nehru Marg, Delhi Gate ', 110002, 1123232011, 'A-', 2, '04/28/2018', '12 : 19 PM'),
(64, 'wwww', 45745646, 'dhhd', 'himanshu2515555@gmail.com', 'Male', 'Govind Ballabh (G.B.) Pant Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Government', '1, Jawahar Lal Nehru Marg, Delhi Gate ', 110002, 1123232011, 'A-', 2, '04/28/2018', '12 : 19 PM'),
(65, 'simran', 2147483647, 'laxmi nagar', 'simran@gmail.com', 'Male', 'Blood Bank Organisation', 'Delhi', 'WEST DELHI', 'Private', '11/6-B, Shanti Chamber, Opposite Telephone Exchange, Pusa Road', 110005, 1125721870, 'B+', 3, '04/30/2018', '10 : 30 AM'),
(66, 'simran', 2147483647, 'dhhd', 'himanshu251@gmail.com', 'Male', 'Blood Bank Organisation', 'Delhi', 'WEST DELHI', 'Private', '11/6-B, Shanti Chamber, Opposite Telephone Exchange, Pusa Road', 110005, 1125721870, 'A+', 2, '04/27/2018', '2 : 00 PM'),
(67, 'wwww', 56458, 'fsgsd', 'himanshu2515555@gmail.com', 'Male', 'Blood Bank Organisation', 'Delhi', 'WEST DELHI', 'Private', '11/6-B, Shanti Chamber, Opposite Telephone Exchange, Pusa Road', 110005, 1125721870, 'B+', 6, '04/26/2018', '12 : 02 PM');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_details`
--

CREATE TABLE IF NOT EXISTS `bloodbank_details` (
  `bb_id` int(11) NOT NULL AUTO_INCREMENT,
  `bloodbank_name` varchar(500) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `pincode` int(30) NOT NULL,
  `contact_no` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `A_positive` int(200) NOT NULL,
  `A_negative` int(200) NOT NULL,
  `B_positive` int(200) NOT NULL,
  `B_negative` int(200) NOT NULL,
  `AB_positive` int(200) NOT NULL,
  `AB_negative` int(200) NOT NULL,
  `O_positive` int(200) NOT NULL,
  `O_negative` int(200) NOT NULL,
  PRIMARY KEY (`bb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `bloodbank_details`
--

INSERT INTO `bloodbank_details` (`bb_id`, `bloodbank_name`, `state`, `district`, `address`, `pincode`, `contact_no`, `email`, `category`, `A_positive`, `A_negative`, `B_positive`, `B_negative`, `AB_positive`, `AB_negative`, `O_positive`, `O_negative`) VALUES
(3, 'Sucheta Kriplani Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'C-604, Shaheed Bhagat Singh Marg, Connaught Place, Opposite to Shivaji Stadium Bus Terminal', 110001, 1123408271, 'bloodbanklhmc@gmail.com', 'Government', 3, 3, 3, 3, 3, 3, 3, 5),
(4, 'Govind Ballabh (G.B.) Pant Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', '1, Jawahar Lal Nehru Marg, Delhi Gate ', 110002, 1123232011, 'bloodbank.gbph@gmail.com', 'Government', 4, 4, 4, 4, 4, 4, 4, 4),
(5, 'Regional Blood Tranfusion Center Blood bank, Central Zone', 'Delhi', 'CENTRAL DELHI', '2 Jawarlal Nehru Marg, Delhi Gate, Near UBPH', 110002, 1123233809, 'btolnh@gmail.com', 'Government', 5, 5, 5, 5, 5, 5, 5, 5),
(6, 'Kasturba Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Near Jama Masjid, Daryaganj', 110002, 1123282915, 'kasturbahospital@gmail.com', 'Government', 6, 6, 6, 6, 6, 6, 6, 78),
(7, 'Sir Ganga Ram Hospital Blood Bank', 'Delhi', 'CENTRAL DELHI', 'Old Rajindra Nagar, Near Janki Devi College', 110060, 1142251800, 'bloodbank@srgh.com, vivek.ranjan@sgrh.com', 'Private', 7, 7, 7, 7, 7, 7, 7, 11),
(8, 'Lal Bahadur Shastri Hospital Blood Bank', 'Delhi', 'EAST DELHI', 'Near Kalyanvas Colony / Mayur Vihar Phase -II, GNCTD Kichdipur', 110091, 1122783633, 'lbshbb2016@gmail.com', 'Government', 8, 8, 8, 8, 8, 8, 8, 79),
(9, 'Max Super Specialty Hospital Blood Bank', 'Delhi', 'EAST DELHI', 'Max Balaji Hospital (A unit of Balaji Medical and Diagnostic Research Centre), 108-A, Indraprastha Extension, Opposite Sanchar Apartment, Patparganj', 110092, 1166242515, 'bloodbank.ppg@maxhealthcare.com', 'Private', 9, 9, 9, 9, 9, 9, 9, 55),
(10, 'Dr. Hedgewar Arogaya Sansthan Blood bank', 'Delhi', 'EAST DELHI', 'F-18, Karkardooma', 110032, 1122301148, 'msdhas2010@gmail.com', 'Government', 10, 10, 10, 10, 10, 10, 10, 50),
(11, 'Lions Blood Bank East Delhi', 'Delhi', 'EAST DELHI', '369, II Floor, FIE, Near M.C.D. Office, Patparganj Industrial AreaNear Punjab National Bank', 110092, 1143009747, 'lionsbloodbankeastdelhi@gmail.com', 'Charity', 11, 11, 11, 11, 11, 11, 11, 12),
(12, 'Dharamshila Cancer Foundation and Research Centre Blood Bank', 'Delhi', 'EAST DELHI', '4th floor, Vasundhara Enclave, Near New Ashok Nagar Metro Station', 110096, 1143066436, 'rxhope@gmail.com', 'Private', 1, 1, 1, 1, 1, 1, 1, 66),
(13, 'Northern Railway Central Hospital Blood Bank', 'Delhi', 'NEW DELHI', 'Basant Lane, Connaught Place', 110029, 1123747989, 'sdeorari@yahoo.com', 'Government', 2, 2, 2, 2, 2, 2, 2, 2),
(14, 'Pushpawati Singhania Research Institute Blood bank', 'Delhi', 'NEW DELHI', 'Press Enclave Marg, Sheikh Sarai, Phase-II', 110017, 1130611780, 'bloodbank@psri.net', 'Private', 3, 3, 3, 3, 3, 3, 3, 3),
(15, 'Cardio Neuro Centre Blood Bank, AIIMS ', 'Delhi', 'NEW DELHI', 'AIIMS, Ansari Nagar', 110029, 1126593625, 'anjalihz@gmail.com', 'Government', 4, 4, 4, 4, 4, 4, 4, 4),
(16, 'Hindu Rao Hospital Blood Bank', 'Delhi', 'NORTH DELHI', 'G Block 4th floor, Near Civil Lines Malkaganj', 110007, 1123905713, 'hodbbhindurao@gmail.com', 'Government', 5, 5, 5, 5, 5, 5, 5, 5),
(17, 'St. Stephen&#39;s Hospital Blood Bank', 'Delhi', 'NORTH DELHI', 'Tis Hazari, Opposite to Tis Hazari Metro Station', 110054, 1123966021, 'sshbloodbank@gmail.com, prakash_uma@yahoo.com', 'Private', 6, 6, 6, 6, 6, 6, 6, 6),
(18, 'Sant Pramanand Hospital Blood Bank', 'Delhi', 'NORTH DELHI', '18, Sham Nath Marg, Civil lines,', 110054, 1123981260, 'bloodbank@sphdelhi.org', 'Charity', 7, 7, 7, 7, 7, 7, 7, 7),
(19, 'Swami Dayanand Hospital Blood Bank', 'Delhi', 'NORTH EAST DELHI', 'Dilshad Garden', 110095, 1122581031, 'bloodbank.sdnh.edmc@gmail.com', '', 8, 8, 8, 8, 8, 8, 8, 8),
(20, 'Mission Jan Jagriti Blood Bank', 'Delhi', 'NORTH EAST DELHI', 'MGS Hospital, 35/37 Rohtak road, West Punjabi Bagh\r\nAdjacent to Maharaja Aggarsen Hospital, Near Shivali park metro station', 110026, 1147053443, 'bhupendersingh@yahoo.in, info@missionjanjagriti.org ', 'Charity', 9, 9, 9, 9, 9, 9, 9, 9),
(21, 'Central Poly Clinic Blood Bank', 'Delhi', 'NORTH EAST DELHI', '3, Gangan Vihar, Shahdara Road', 110051, 0, 'drlalchandanidelhi@yahoo.com', 'Private', 10, 10, 10, 10, 10, 10, 10, 10),
(22, 'Sushruta Trauma Centre Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'Civil Lines, 9, Metcalf Road', 110054, 1123906014, 'mfhtc9metcalfroad@gmail.com', 'Government', 11, 11, 11, 11, 11, 11, 11, 11),
(23, 'Sanjay Gandhi Memorial Hospital Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'S-Block, Mangolpuri', 110083, 1127922843, '', 'Government', 12, 12, 12, 12, 12, 12, 12, 12),
(24, 'Sunder Lal Jain Charitable Hospital Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'Ashok Vihar, Phase-III', 110052, 1147030900, 'sljhosp@ndf.vsnl.net.in', 'Private', 13, 13, 13, 13, 13, 13, 13, 13),
(25, 'Max Super Specialty Hospital Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'Max Super Specialty Hospital (A Unit of Max Health Care Institute Ltd), FC-50, Block C and D, Shalimar Bagh', 110088, 1166422222, '', 'Private', 14, 14, 14, 14, 14, 14, 14, 14),
(26, 'Lions Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'A.K.-100, Shalimar Bagh', 110088, 1142258080, 'poonamshrivastava1@gmail.com', 'Charity', 15, 15, 15, 15, 15, 15, 15, 15),
(27, 'Mission Jan Jagriti Blood Bank', 'Delhi', 'NORTH WEST DELHI', '1, Altius Sonia Hospital, Basement, 1, Gulshan Park, Rohtak Road, Nangloi Metro Station, Metro Piller Number 444', 110041, 1130580345, 'drnkbhatia@yahoo.com', 'Private', 16, 16, 16, 16, 16, 16, 16, 16),
(28, 'Saroj Super Speciality Hospital  Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'Saroj Super Speciality Hospital (Run by Ganesh Das Chowla Charitable Trust-Regd.), Sector-14, Rohini, Madhuban Chowk\r\n', 110085, 1147903333, 'rbansal1970@yahoo.com', 'Private', 1, 1, 1, 1, 1, 1, 1, 1),
(29, 'Rajiv Gandhi Cancer Institute and Research Center Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'Rajiv Gandhi Cancer Institute, Sector-V Rohini', 110085, 1147022222, '', 'Private', 2, 2, 2, 2, 2, 2, 2, 2),
(30, 'Dr. Baba Sahab Ambedkar Hospital Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'Sector-6, Rohini', 110085, 1127049950, 'msidhar67@gmail.com', 'Government', 3, 3, 3, 3, 3, 3, 3, 3),
(31, 'Delhi Heart and Lung Institute Blood Bank', 'Delhi', 'NORTH WEST DELHI', '3 MM-11, Panchkuian Road', 110055, 1142999999, 'bloodbank@dhli.in', 'Private', 4, 4, 4, 4, 4, 4, 4, 4),
(32, 'Park Hospital Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'Keshopur Sabzi Mandi, New Chaukhandi, Vishnu Garden', 110018, 1145323232, 'info@parkhospital.org, drrekha29@gmail.com, hospital12@gmail.com', 'Private', 5, 5, 5, 5, 5, 5, 5, 5),
(33, 'Fortis Hospital Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'A-Block, Shalimar Bagh', 110088, 1145302282, 'bloodbank.sb@fortishealthcare.com', 'Private', 6, 6, 6, 6, 6, 6, 6, 6),
(34, 'Pitampura Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'B-294, Saraswati Vihar, Outer Ring Road, Pitampura', 110034, 0, 'pitampurabloodbank@gmail.com', 'Private', 7, 7, 7, 7, 7, 7, 7, 7),
(35, 'Brahm Shakti Hospital and Research Centre Blood Bank', 'Delhi', 'NORTH WEST DELHI', 'Brahma Shakti Hospital, U-1/78, Budh Vihar', 110084, 1127537894, 'info.brahmshaktibloodbank@gmail.com', 'Private', 8, 8, 8, 8, 8, 8, 8, 8),
(36, 'Guru Tegh Bahadur Hospital Blood Bank', 'Delhi', 'SHAHDARA', 'G. T. B. Hospital, Shahdara', 110095, 1122590148, '', 'Government', 9, 9, 9, 9, 9, 9, 9, 9),
(37, 'Holy Family Hospital Blood Bank', 'Delhi', 'SOUTH DELHI', 'Holy Family Hospital, Okhla Road', 110025, 1126332800, '', 'Private', 10, 10, 10, 10, 10, 10, 10, 10),
(38, 'Batra Hospital and Medical Research Centre Blood Bank', 'Delhi', 'SOUTH DELHI', '1, Tuglakabad Institutional Area, Mehrauli Badarpur Road, Tughlakabad', 110062, 1129958747, '', 'Private', 11, 11, 11, 11, 11, 11, 11, 11),
(39, 'All India Institute of Medical Sciences (AIIMS) Blood Bank', 'Delhi', 'SOUTH DELHI', 'AIIMS, Main Blood Bank, Ansari Nagar, Ring Road', 110029, 1126594438, 'kabitachatterjee@gmail.com, poonamcoshic@gmail.com', 'Government', 12, 12, 12, 12, 12, 12, 12, 12),
(40, 'Safdarjung Hospital Blood Bank', 'Delhi', 'SOUTH DELHI', 'Safdarjung Hospital, Ansari Nagar, Ring Road\r\n', 110029, 1126707254, '', 'Government', 13, 13, 13, 13, 13, 13, 13, 13),
(41, 'Shri Moolchand Khariti-Ram Hospital and Ayurvedic Research Institute ', 'Delhi', 'SOUTH DELHI', 'Mool Chand Hospital, Lajpat Nagar-III', 110024, 1142000476, 'info@mcdh.in', 'Private', 1, 1, 1, 1, 1, 1, 1, 1),
(42, 'National Heart Institute Blood Bank', 'Delhi', 'SOUTH DELHI', '49, Community Center, East of Kailash', 110065, 1126414156, 'info@nationalheartinstitute.com', 'Private', 2, 2, 2, 2, 2, 2, 2, 2),
(43, 'Max Super Specialty Hospital Blood Bank', 'Delhi', 'SOUTH DELHI', 'Max Super Specialty Hospital, Heart and Vascular Institute (A Unit of Devki Devi Foundation Institute), 2, Press Enclave Road, Saket', 110017, 1126515050, '', 'Private', 3, 3, 3, 3, 3, 3, 3, 3),
(44, 'Saket City Hospital Blood Bank', 'Delhi', 'SOUTH DELHI', 'Mandir Marg, Press Enclave Road, Saket', 110017, 1140699999, 'bloodbank@saketcityhospital.com', 'Private', 4, 4, 4, 4, 4, 4, 4, 4),
(45, 'Rockland Hospital Qutab Blood Bank', 'Delhi', 'SOUTH DELHI', 'B, 33-34, Qutab Institutional Area', 110016, 1147667357, 'labrh@yahoo.com', 'Private', 5, 5, 5, 5, 5, 5, 5, 5),
(46, 'Primus Ortho and Spine Hospital Blood Bank', 'Delhi', 'SOUTH DELHI', 'Primus Super Speciality Hospital,02, Chandragupta Marg, Lower Ground Floor, Chanakyapuri', 110021, 1166206630, 'mgarg1964@yahoo.co.in', 'Private', 6, 6, 6, 6, 6, 6, 6, 6),
(47, 'White Cross Blood Bank', 'Delhi', 'SOUTH DELHI', 'A-60, East of Kailash', 110065, 1126831063, '', 'Private', 7, 7, 7, 7, 7, 7, 7, 7),
(48, 'Rotary Blood Bank', 'Delhi', 'SOUTH DELHI', '56-57, Institutional Area, Tughlakabad , Next to Batra Hospital\r\n', 110062, 1129054068, 'blood@rotarybloodbank.org', 'Private', 8, 8, 8, 8, 8, 8, 8, 8),
(49, 'Jai Prakash Narayan Apex Trauma Centre Blood Bank', 'Delhi', 'SOUTH DELHI', 'Jai Prakash Narayen Apex Trauma Centre, AIIMS, Raj Nagar,\r\nRing Road', 110029, 1126731166, 'arulselvi.jpnatc@gmail.com', 'Private', 9, 9, 9, 9, 9, 9, 9, 9),
(50, 'Fortis Escort Heart Institute Blood Bank', 'Delhi', 'SOUTH DELHI', 'Fortis Escort Heart Institute, Okhla Road\r\n\r\n', 110025, 1126825053, 'contactus.escorts@fortishealthcare.com ', 'Private', 10, 10, 10, 10, 10, 10, 10, 10),
(51, 'Hakeem Abdul Hameed Centenary Hospital Blood Bank', 'Delhi', 'SOUTH EAST DELHI', 'Jamia Hamdard, Hamdard Nagar', 110062, 1126059668, 'bloodbankjamiahamdard@gmail.com ', 'Private', 11, 11, 11, 11, 11, 11, 11, 11),
(52, 'Apollo Hospital Blood Bank', 'Delhi', 'SOUTH EAST DELHI', 'Indraprastha Medical Corporation, Sarita Vihar', 110044, 1126925801, '', 'Private', 12, 12, 12, 12, 12, 12, 12, 12),
(53, 'Armed Forces Transfusion Centre Blood Bank', 'Delhi', 'SOUTH WEST DELHI', 'Delhi Cantonment, Area Sadar Bazar, Army Public School', 110010, 1123336685, 'aftcdelhicant@gmail.com', 'Government', 1, 1, 1, 1, 1, 1, 1, 1),
(54, 'Fortis Flt. Lt. Rajan Dhall Hospital Blood Bank', 'Delhi', 'SOUTH WEST DELHI', 'Fortis Flt. Lt. Rajan Dhall Hospital (A unit of Flt. Lt. Ranjan Dhall Charitable Trust Regd.), Sector-B, Pocket-1, Aruna Asaf Ali Marg, Vasant Kunj', 110070, 1142776222, 'sljain49@yahoo.com', 'Private', 2, 2, 2, 2, 2, 2, 2, 2),
(55, 'Institute of Liver and Biliary Sciences Blood Bank', 'Delhi', 'SOUTH WEST DELHI', 'Institute of Liver and Biliary Sciences, D-1, Vasant Kunj', 110070, 1146300000, '', 'Charity', 3, 3, 3, 3, 3, 3, 3, 3),
(56, 'Mata Chanan Devi Hospital Blood Bank', 'Delhi', 'SOUTH WEST DELHI', 'Mata Chanan Devi Hospital, C-1 Janakpuri New Delhi', 110058, 1145582193, '', 'Private', 4, 4, 4, 4, 4, 4, 4, 4),
(57, 'Bhagat Chandra Hospital Blood Bank', 'Delhi', 'SOUTH WEST DELHI', 'RZF-1/1, Mahavir  Enclave, Palam', 110045, 1145254525, '', 'Private', 5, 5, 5, 5, 5, 5, 5, 5),
(58, 'Indian Spinal Injuries Centre Blood Bank', 'Delhi', 'SOUTH WEST DELHI', 'Indian Spinal Injuries Centre, C-8, Vasant Kunj', 110070, 1142255387, '', 'Private', 6, 6, 6, 6, 6, 6, 6, 6),
(59, 'Bensups Hospital Blood Bank', 'Delhi', 'SOUTH WEST DELHI', 'Bansups Avenue, Sector 12, Dwarka', 110075, 1145017615, '', 'Private', 7, 7, 7, 7, 7, 7, 7, 7),
(60, 'Blood Bank Organisation', 'Delhi', 'WEST DELHI', '11/6-B, Shanti Chamber, Opposite Telephone Exchange, Pusa Road', 110005, 1125721870, 'bloodbankorg@gmail.com', 'Private', 8, 8, 8, 8, 8, 8, 8, 8),
(61, 'E. S. I. Hospital Blood Bank', 'Delhi', 'WEST DELHI', 'E S I Hospital, Basai  Darapur, Ring Road', 110015, 1125970808, 'dr.ajay.sagar@esic.in', 'Government', 9, 9, 9, 9, 9, 9, 9, 9),
(62, 'Maharaja Agrasen Hospital Blood Bank', 'Delhi', 'WEST DELHI', 'Maharaja Agrasen Hospital, West Punjabi Bagh', 110026, 1140777777, '', 'Private', 10, 10, 10, 10, 10, 10, 10, 10),
(63, 'Sri Balaji Action Medical Institute Blood Bank', 'Delhi', 'WEST DELHI', 'Sri Balaji Action Medical Institute, FC-34, A-4, Paschim Vihar', 110063, 1142888888, 'transfusionmedicine.sbami@yahoo.com', 'Private', 11, 11, 11, 11, 11, 11, 11, 11),
(64, 'Dr. B. L. Kapoor Memorial Hospital Blood Bank', 'Delhi', 'WEST DELHI', 'B. L. K. Memorial Hospital,  Pusa Road', 110005, 1130653095, 'info@blkhospital.com', 'Private', 12, 12, 12, 12, 12, 12, 12, 12),
(65, 'Kalra Hospital and Shri Ram Cardiothoracic and Neurosciences Center (SRCNC) Blood Bank', 'Delhi', 'WEST DELHI', 'Kalra Hospital SRNCNC, A-4, Kirti Nagar', 110015, 1145005700, '', 'Private', 13, 13, 13, 13, 13, 13, 13, 13),
(66, 'R.B.T.C (wz), Deen Dayal Upadhyay Hospital', 'Delhi', 'WEST DELHI', 'Deen Dayal Upadhyay Hospital, Hari Nagar, Near Clock Tower', 110064, 1125129345, 'dduhbloodbank@gmail.com', 'Government', 14, 14, 14, 14, 14, 14, 14, 14),
(67, 'Jaipur Golden Hospital Blood Bank', 'Delhi', 'WEST DELHI', 'Jaipur Golden Hospital, 2, Industrial Area,  Rohini, Sector-III', 110085, 1127907248, '', 'Private', 1, 1, 1, 1, 1, 1, 1, 1),
(68, 'Jan Jagriti Blood Bank', 'Delhi', 'WEST DELHI', 'Mission Jan Jagriti, Blood Bank, C/o. Jeevan Anmol Hospital Mayur Vihar Phase I', 110092, 0, 'drnkbhatia@yahoo.com', 'Private', 0, 0, 0, 0, 0, 0, 0, 0),
(69, 'Dr. Ram Manohar Lohia Hospital Blood Bank', 'DELHI', 'CENTRAL DELHI', '161, Kali Bari Ln, Havelock Square, Type III, President&#39;s Estate', 110001, 1123404291, 'drchaudharyk@yahoo.co.in', 'Government', 12, 44, 41, 15, 44, 11, 20, 11);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phn_no` int(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `phn_no`, `message`) VALUES
(1, '_name', '', 0, ''),
(2, 'name', '', 0, ''),
(3, '', '', 0, ''),
(4, 'simranjot singh', 'jasvinsinghk@gmail.com', 2147483647, 'this is my first sitee.....'),
(5, 'simranjot singh', 'jasvinsinghk@gmail.com', 2147483647, 'this is my first sitee.....'),
(6, '', '', 0, ''),
(7, '', '', 0, ''),
(8, '', '', 0, ''),
(9, 'himanshu', 'jasvinsinghk@gmail.com', 2147483647, 'gi,uiigtuuj'),
(10, 'himanshu', 'jasvinsinghk@gmail.com', 2147483647, 'gi,uiigtuuj'),
(11, '', '', 0, ''),
(12, 'simranjot singh', 'himanshu2515555@gmail.com', 2147483647, 'fgnnnnnnnnnnn');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
