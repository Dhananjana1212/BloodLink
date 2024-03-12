-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 02:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Fname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Lname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Address` varchar(30) CHARACTER SET latin1 NOT NULL,
  `mobileno` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(15) CHARACTER SET latin1 NOT NULL,
  `UserRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Fname`, `Lname`, `Address`, `mobileno`, `Email`, `Password`, `UserRole`) VALUES
(1, 'Geethan', 'Hemathilake', 'Anuradhapura, Sri Lanka', '712475919', 'geethansh123@gmail.com', 'geethan2001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bloodbanks`
--

CREATE TABLE `bloodbanks` (
  `BloodBankID` int(11) NOT NULL,
  `HospitalName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbanks`
--

INSERT INTO `bloodbanks` (`BloodBankID`, `HospitalName`, `Address`, `Email`, `Contact`, `Password`) VALUES
(1, 'City Hospital', '123 Main St', 'cityhospital@example.com', '1234567890', 'password123'),
(2, 'Community Medical Center', '456 Oak Ave', 'communitymedical@example.com', '9876543210', 'pass456'),
(3, 'Regional Health Center', '789 Pine Rd', 'regionalhealth@example.com', '4561237890', 'securepass');

-- --------------------------------------------------------

--
-- Table structure for table `bloodcampaigns`
--

CREATE TABLE `bloodcampaigns` (
  `CampaignID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Venue` varchar(255) NOT NULL,
  `District` varchar(25) NOT NULL,
  `Description` text DEFAULT NULL,
  `Interested` int(11) DEFAULT NULL,
  `Participated` int(11) DEFAULT NULL,
  `OrganizerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodcampaigns`
--

INSERT INTO `bloodcampaigns` (`CampaignID`, `Name`, `Date`, `Time`, `Venue`, `District`, `Description`, `Interested`, `Participated`, `OrganizerID`) VALUES
(1, 'Emergency Blood Drive', '2022-04-05', '15:00:00', 'Central Park', '', 'Join us for an emergency blood drive!', 50, 30, 1),
(2, 'Community Health Fair', '2026-05-07', '12:30:00', 'Local Community Center', '', 'Health fair with blood donation awareness.', 80, 40, 2),
(3, 'City Blood Donation Marathon', '2022-06-20', '09:00:00', 'City Stadium', '', 'Marathon to promote blood donation in the city.', 120, 70, 3),
(4, 'Testing Blood Campaign', '2024-02-13', '20:17:56', 'Krasta Iela', '', 'Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.Testing.', 1, 0, 1),
(5, 'wdwdwd', '2024-02-19', '20:17:56', 'dwdwdw', '', 'dddddd', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blooddonor`
--

CREATE TABLE `blooddonor` (
  `DonorID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `BloodTypeID` int(11) DEFAULT NULL,
  `Height` decimal(5,2) DEFAULT NULL,
  `Weight` decimal(5,2) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Availability` varchar(15) DEFAULT NULL,
  `BloodDonationTimes` int(11) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `Password` varchar(255) NOT NULL,
  `UserRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blooddonor`
--

INSERT INTO `blooddonor` (`DonorID`, `FirstName`, `LastName`, `Email`, `Contact`, `District`, `Address`, `BloodTypeID`, `Height`, `Weight`, `Gender`, `DOB`, `Availability`, `BloodDonationTimes`, `is_deleted`, `Password`, `UserRole`) VALUES
(1, 'Alice', 'Johnson', 'alice.j@example.com', '1111111111', 'East District', '456 Oak St', 1, '160.00', '60.00', 'Female', '1990-05-15', 'Available', 3, 0, 'alicepass', 2),
(2, 'Charlie', 'Brown', 'charlie.b@example.com', '2222222222', 'West District', '789 Pine St', 2, '175.00', '70.00', 'Male', '1985-08-21', 'Not Available', 5, 0, 'charliepass', 2),
(3, 'Eva', 'Smith', 'eva.s@example.com', '3333333333', 'South District', '123 Main St', 3, '150.00', '55.00', 'Female', '1995-02-10', 'Available', 2, 0, 'evapass', 2),
(5, 'Nelaka', 'Dilshan', 'mynamecheapacc@gmail.com', '+37122443491', 'Kalutara', '45 - 5', 6, '150.00', '30.00', 'Male', '1997-02-21', 'Available', 8, 0, 'Nelaka123', NULL),
(7, 'Shantha', 'Perera', 'shantha@gmail.com', '0774587415', 'Batticaloa', 'Flower Road, Kegalle', 5, '165.00', '83.00', 'Female', '1985-07-10', 'Available', NULL, 0, 'Shantha@1234', NULL),
(8, 'Nuwan ', 'Madushanka', 'nuwan@gmail.com', '0778956852', 'Kandy', 'Tyvbui, Sjvbui', 4, '155.00', '85.00', 'Male', '2001-06-14', 'Available', NULL, 0, 'Nuwan@1234', NULL),
(9, 'Nishantha', 'Bandara', 'nisha@gmail.com', '0775845215', 'Mannar', '34/2, Temple Road, Mannar.', 2, '148.00', '84.00', 'Male', '1974-02-22', 'Unavailable', NULL, 0, 'Nisha1234', NULL),
(10, 'Mahanama', 'Silva', 'mahanama@gmail.com', '2244534671', 'Hambantota', '24/4, Maharagama', 4, '166.00', '67.00', 'Male', '1985-06-11', 'Available', NULL, 0, 'Mahanama', NULL),
(12, 'Nelaka Dilshan', 'Kannangara Koralage Don', 'shantha@gmail.com', '+37122443491', 'Batticaloa', '45 - 5', 3, '111.00', '999.99', 'Male', '2024-02-05', 'Available', NULL, 0, 'ddsfdfdfdfdf', NULL),
(13, 'Isuru', 'Bandara', 'isbandara@gmail.com', '+94352247707', 'Colombo', 'No 425/1', 5, '122.00', '11.00', 'Male', '2024-02-08', 'Available', 10, 0, '12345', NULL),
(14, 'Alkaduwe', 'Alkaduwa', 'akgshehanalkaduwa@gmail.com', '+37127830392', 'Kurunegala', 'Mawathagama ', 6, '156.00', '56.00', 'Male', '2014-02-23', 'Available', 12, 0, 'shehan', NULL),
(15, 'Mihiri', 'fefref', 'mihiri@gmail.com', '6543543545', 'Galle', 'vdscvdf', 3, '999.99', '44.00', 'Male', '2024-02-23', 'Available', NULL, 0, 'Mihiri', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bloodmessages`
--

CREATE TABLE `bloodmessages` (
  `id` int(10) UNSIGNED NOT NULL,
  `recipientID` int(10) UNSIGNED NOT NULL,
  `senderID` int(10) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodmessages`
--

INSERT INTO `bloodmessages` (`id`, `recipientID`, `senderID`, `message`, `timestamp`) VALUES
(1, 0, 1, 'urgent Blood Need for A+ Blood', '2024-02-24 00:07:26'),
(2, 0, 1, 'urgent Blood Need for A+ Blood 1', '2024-02-24 00:08:37'),
(3, 1, 1, 'djbcdsjd', '2024-02-24 00:10:46'),
(4, 1, 1, 'Urgent Blood Need for A+ Blood', '2024-02-25 11:42:02'),
(5, 1, 1, 'Urgent Blood Need ', '2024-02-28 21:52:24'),
(6, 0, 1, 'Urgent Blood Need', '2024-02-29 03:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `bloodtype`
--

CREATE TABLE `bloodtype` (
  `BloodTypeID` int(11) NOT NULL,
  `BloodTypeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodtype`
--

INSERT INTO `bloodtype` (`BloodTypeID`, `BloodTypeName`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'O+'),
(6, 'O-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `campaigninterested`
--

CREATE TABLE `campaigninterested` (
  `InterestedID` int(11) NOT NULL,
  `CampaignID` int(11) DEFAULT NULL,
  `DonorID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `campaignorganizer`
--

CREATE TABLE `campaignorganizer` (
  `OrganizerID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `PostalCode` varchar(15) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaignorganizer`
--

INSERT INTO `campaignorganizer` (`OrganizerID`, `Name`, `Address`, `District`, `PostalCode`, `Email`, `Contact`, `Password`) VALUES
(1, 'Red Cross Society', '10 Red Cross St', 'Central District', '54321', 'redcross@example.com', '1112223333', 'redpass'),
(2, 'Community Volunteers', '22 Volunteer Ave', 'North District', '98765', 'volunteers@example.com', '4445556666', 'volunteerpass'),
(3, 'City Health Initiatives', '5 Health Dr', 'South District', '12345', 'cityhealth@example.com', '7778889999', 'citypass');

-- --------------------------------------------------------

--
-- Table structure for table `campaignparticipation`
--

CREATE TABLE `campaignparticipation` (
  `ParticipationID` int(11) NOT NULL,
  `CampaignID` int(11) DEFAULT NULL,
  `DonorID` int(11) DEFAULT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaignparticipation`
--

INSERT INTO `campaignparticipation` (`ParticipationID`, `CampaignID`, `DonorID`, `Status`) VALUES
(1, 1, 7, 'Approved'),
(2, 1, 2, 'Rejected'),
(3, 2, 3, 'Approved'),
(5, 2, 7, 'Not Approved'),
(6, 3, 7, 'Not Approved'),
(7, 2, 7, 'Not Approved'),
(8, 2, 5, 'Not Approved'),
(9, 3, 5, 'Not Approved'),
(10, 1, 5, 'Not Approved'),
(11, 2, 9, 'Not Approved'),
(12, 3, 5, 'Not Approved'),
(14, 1, 5, 'Not Approved'),
(15, 3, 5, 'Not Approved'),
(16, 2, 5, 'Not Approved'),
(17, 2, 5, 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackID` int(11) NOT NULL,
  `DonorID` int(11) DEFAULT NULL,
  `BloodPacketID` int(11) DEFAULT NULL,
  `TesterID` int(11) DEFAULT NULL,
  `FeedbackComments` text DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackID`, `DonorID`, `BloodPacketID`, `TesterID`, `FeedbackComments`, `Timestamp`) VALUES
(1, 1, 1, 1, 'Good blood quality', '2024-01-21 01:49:56'),
(2, 2, 2, 2, 'Satisfactory', '2024-01-21 01:49:56'),
(3, 3, 3, 3, 'Further testing required', '2024-01-21 01:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `donorid` varchar(10) NOT NULL,
  `bloodpacketid` int(11) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `Flagged` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`donorid`, `bloodpacketid`, `bloodtype`, `date`, `Flagged`) VALUES
('D01', 1, 'B', '2024-01-31', 'No'),
('D01', 2, 'A', '2024-01-31', 'No'),
('D002', 3, 'B-', '2024-01-31', 'No'),
('D003', 7, 'AB+', '2024-01-31', 'No'),
('D005', 8, 'AB-', '2024-01-31', 'No'),
('D006', 9, 'B+', '2024-01-31', 'No'),
('9', 12, 'A', '2024-02-24', 'No'),
('10', 13, 'AB', '2024-02-25', 'No'),
('23', 20, 'A+', '2024-02-29', 'No'),
('7', 21, 'B', '2024-02-29', 'No'),
('25', 22, 'B', '2024-02-29', 'No'),
('30', 23, 'B', '2024-02-29', 'No'),
('31', 24, 'A', '2024-02-29', 'No'),
('8', 25, 'B', '2024-02-29', 'No'),
('50', 26, 'B+', '2024-02-29', 'No');

--
-- Triggers `inventory`
--
DELIMITER $$
CREATE TRIGGER `after_insert_inventory_cryo` AFTER INSERT ON `inventory` FOR EACH ROW BEGIN
    INSERT INTO inventorycryo (bloodpacketid, expirationdate)
    VALUES (NEW.bloodpacketid, DATE_ADD(NEW.date, INTERVAL 1 YEAR));
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_inventory_plasma` AFTER INSERT ON `inventory` FOR EACH ROW BEGIN
    INSERT INTO inventoryplasma (bloodpacketid, expirationdate)
    VALUES (NEW.bloodpacketid, DATE_ADD(NEW.date, INTERVAL 1 YEAR));
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_inventory_platelets` AFTER INSERT ON `inventory` FOR EACH ROW BEGIN
    INSERT INTO inventoryplatelets (bloodpacketid, expirationdate)
    VALUES (NEW.bloodpacketid, DATE_ADD(NEW.date, INTERVAL 5 DAY));
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_inventoryrbc_new` AFTER INSERT ON `inventory` FOR EACH ROW BEGIN
    INSERT INTO inventoryrbc (bloodpacketid, expirationdate)
    VALUES (NEW.bloodpacketid, DATE_ADD(NEW.date, INTERVAL 42 DAY));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `inventorycryo`
--

CREATE TABLE `inventorycryo` (
  `cryoid` int(11) NOT NULL,
  `bloodpacketid` int(11) NOT NULL,
  `expirationdate` date NOT NULL,
  `flagged` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventorycryo`
--

INSERT INTO `inventorycryo` (`cryoid`, `bloodpacketid`, `expirationdate`, `flagged`) VALUES
(1, 20, '2025-02-28', 'No'),
(2, 20, '2025-02-28', 'No'),
(3, 21, '2025-02-28', 'No'),
(4, 21, '2025-02-28', 'No'),
(5, 22, '2025-02-28', 'No'),
(6, 22, '2025-02-28', 'No'),
(7, 23, '2025-02-28', 'No'),
(8, 23, '2025-02-28', 'No'),
(9, 24, '2025-02-28', 'No'),
(10, 24, '2025-02-28', 'No'),
(11, 25, '2025-02-28', 'No'),
(12, 26, '2025-02-28', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `inventorymanagement`
--

CREATE TABLE `inventorymanagement` (
  `DonorID` int(11) DEFAULT NULL,
  `BloodPacketID` int(11) NOT NULL,
  `BloodType` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `DateOfTaken` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventorymanagement`
--

INSERT INTO `inventorymanagement` (`DonorID`, `BloodPacketID`, `BloodType`, `Amount`, `Status`, `DateOfTaken`) VALUES
(1, 1, 1, 200, 'Approved', '2022-01-10'),
(2, 2, 2, 150, 'Approved', '2022-02-15'),
(3, 3, 3, 100, 'Pending', '2022-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `inventorymanager`
--

CREATE TABLE `inventorymanager` (
  `InventoryManagerID` int(11) NOT NULL,
  `BloodBankID` int(11) DEFAULT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventorymanager`
--

INSERT INTO `inventorymanager` (`InventoryManagerID`, `BloodBankID`, `FirstName`, `LastName`, `Email`, `Contact`, `Password`) VALUES
(1, 1, 'John', 'Doe', 'john.doe@example.com', '1234567890', 'johnpass'),
(2, 2, 'Jane', 'Smith', 'jane.smith@example.com', '9876543210', 'janepass'),
(3, 3, 'Bob', 'Johnson', 'bob.johnson@example.com', '4561237890', 'bobpass');

-- --------------------------------------------------------

--
-- Table structure for table `inventoryplasma`
--

CREATE TABLE `inventoryplasma` (
  `plasmaid` int(11) NOT NULL,
  `bloodpacketid` int(11) NOT NULL,
  `expirationdate` date NOT NULL,
  `flagged` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventoryplasma`
--

INSERT INTO `inventoryplasma` (`plasmaid`, `bloodpacketid`, `expirationdate`, `flagged`) VALUES
(1, 20, '2025-02-28', 'No'),
(2, 20, '2025-02-28', 'No'),
(3, 21, '2025-02-28', 'No'),
(4, 21, '2025-02-28', 'No'),
(5, 22, '2025-02-28', 'No'),
(6, 22, '2025-02-28', 'No'),
(7, 23, '2025-02-28', 'No'),
(8, 23, '2025-02-28', 'No'),
(9, 24, '2025-02-28', 'No'),
(10, 24, '2025-02-28', 'No'),
(11, 25, '2025-02-28', 'No'),
(12, 26, '2025-02-28', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `inventoryplatelets`
--

CREATE TABLE `inventoryplatelets` (
  `plateletid` int(11) NOT NULL,
  `bloodpacketid` int(11) NOT NULL,
  `expirationdate` date NOT NULL,
  `flagged` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventoryplatelets`
--

INSERT INTO `inventoryplatelets` (`plateletid`, `bloodpacketid`, `expirationdate`, `flagged`) VALUES
(1, 20, '2024-03-05', 'No'),
(2, 20, '2024-03-05', 'No'),
(3, 21, '2024-03-05', 'No'),
(4, 21, '2024-03-05', 'No'),
(5, 22, '2024-03-05', 'No'),
(6, 22, '2024-03-05', 'No'),
(7, 23, '2024-03-05', 'No'),
(8, 23, '2024-03-05', 'No'),
(9, 24, '2024-03-05', 'No'),
(10, 24, '2024-03-05', 'No'),
(11, 25, '2024-03-05', 'No'),
(12, 26, '2024-03-05', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `inventoryrbc`
--

CREATE TABLE `inventoryrbc` (
  `bloodpacketid` int(11) NOT NULL,
  `rbcid` int(11) NOT NULL,
  `expirationdate` date NOT NULL,
  `flagged` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventoryrbc`
--

INSERT INTO `inventoryrbc` (`bloodpacketid`, `rbcid`, `expirationdate`, `flagged`) VALUES
(20, 4, '2024-04-11', 'No'),
(20, 5, '2024-04-11', 'No'),
(20, 6, '2024-04-11', 'No'),
(21, 7, '2024-04-11', 'No'),
(21, 8, '2024-04-11', 'No'),
(22, 9, '2024-04-11', 'No'),
(22, 10, '2024-04-11', 'No'),
(23, 11, '2024-04-11', 'No'),
(23, 12, '2024-04-11', 'No'),
(24, 13, '2024-04-11', 'No'),
(24, 14, '2024-04-11', 'No'),
(25, 15, '2024-04-11', 'No'),
(26, 16, '2024-04-11', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `labtechnician`
--

CREATE TABLE `labtechnician` (
  `LabTechID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labtechnician`
--

INSERT INTO `labtechnician` (`LabTechID`, `FirstName`, `LastName`, `Email`, `Contact`, `Password`, `UserRole`) VALUES
(1, 'James', 'Miller', 'james.m@example.com', '4444444444', 'jamespass', 5),
(2, 'Linda', 'Johnson', 'linda.j@example.com', '5555555555', 'lindapass', 5),
(3, 'Michael', 'White', 'michael.w@example.com', '6666666666', 'michaelpass', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `NotificationID` int(11) NOT NULL,
  `RecipientID` int(11) DEFAULT NULL,
  `NotificationType` int(2) NOT NULL,
  `AssociateID` int(10) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`NotificationID`, `RecipientID`, `NotificationType`, `AssociateID`, `Timestamp`) VALUES
(1, 1, 1, NULL, '2024-01-21 01:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `notificationtypes`
--

CREATE TABLE `notificationtypes` (
  `NotificationType` int(2) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notificationtypes`
--

INSERT INTO `notificationtypes` (`NotificationType`, `Description`) VALUES
(1, 'A new blood campaign is in your area!'),
(2, 'You have participated to a new blood campaign!'),
(3, 'You have updated your profile successfully!');

-- --------------------------------------------------------

--
-- Table structure for table `sampletester`
--

CREATE TABLE `sampletester` (
  `TesterID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `UserRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sampletester`
--

INSERT INTO `sampletester` (`TesterID`, `FirstName`, `LastName`, `Email`, `Password`, `UserRole`) VALUES
(1, 'Sophia', 'Brown', 'sophia.b@example.com', 'sophiapass', 6),
(2, 'David', 'Smith', 'david.s@example.com', 'davidpass', 6),
(3, 'Emma', 'Davis', 'emma.d@example.com', 'emmapass', 6);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`RoleID`, `RoleName`) VALUES
(1, 'Admin'),
(2, 'Donor'),
(3, 'Organizer'),
(4, 'Inventory Manager'),
(5, 'Lab Technician'),
(6, 'Sample Tester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserRole` (`UserRole`);

--
-- Indexes for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  ADD PRIMARY KEY (`BloodBankID`);

--
-- Indexes for table `bloodcampaigns`
--
ALTER TABLE `bloodcampaigns`
  ADD PRIMARY KEY (`CampaignID`),
  ADD KEY `OrganizerID` (`OrganizerID`);

--
-- Indexes for table `blooddonor`
--
ALTER TABLE `blooddonor`
  ADD PRIMARY KEY (`DonorID`),
  ADD KEY `BloodTypeID` (`BloodTypeID`),
  ADD KEY `UserRole` (`UserRole`);

--
-- Indexes for table `bloodmessages`
--
ALTER TABLE `bloodmessages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipientID` (`recipientID`),
  ADD KEY `fk_senderID` (`senderID`);

--
-- Indexes for table `bloodtype`
--
ALTER TABLE `bloodtype`
  ADD PRIMARY KEY (`BloodTypeID`);

--
-- Indexes for table `campaigninterested`
--
ALTER TABLE `campaigninterested`
  ADD PRIMARY KEY (`InterestedID`),
  ADD KEY `CampaignID` (`CampaignID`),
  ADD KEY `DonorID` (`DonorID`);

--
-- Indexes for table `campaignorganizer`
--
ALTER TABLE `campaignorganizer`
  ADD PRIMARY KEY (`OrganizerID`);

--
-- Indexes for table `campaignparticipation`
--
ALTER TABLE `campaignparticipation`
  ADD PRIMARY KEY (`ParticipationID`),
  ADD KEY `CampaignID` (`CampaignID`),
  ADD KEY `DonorID` (`DonorID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackID`),
  ADD KEY `DonorID` (`DonorID`),
  ADD KEY `BloodPacketID` (`BloodPacketID`),
  ADD KEY `TesterID` (`TesterID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`bloodpacketid`);

--
-- Indexes for table `inventorycryo`
--
ALTER TABLE `inventorycryo`
  ADD PRIMARY KEY (`cryoid`);

--
-- Indexes for table `inventorymanagement`
--
ALTER TABLE `inventorymanagement`
  ADD PRIMARY KEY (`BloodPacketID`),
  ADD KEY `DonorID` (`DonorID`),
  ADD KEY `BloodType` (`BloodType`);

--
-- Indexes for table `inventorymanager`
--
ALTER TABLE `inventorymanager`
  ADD PRIMARY KEY (`InventoryManagerID`),
  ADD KEY `BloodBankID` (`BloodBankID`);

--
-- Indexes for table `inventoryplasma`
--
ALTER TABLE `inventoryplasma`
  ADD PRIMARY KEY (`plasmaid`);

--
-- Indexes for table `inventoryplatelets`
--
ALTER TABLE `inventoryplatelets`
  ADD PRIMARY KEY (`plateletid`);

--
-- Indexes for table `inventoryrbc`
--
ALTER TABLE `inventoryrbc`
  ADD PRIMARY KEY (`rbcid`);

--
-- Indexes for table `labtechnician`
--
ALTER TABLE `labtechnician`
  ADD PRIMARY KEY (`LabTechID`),
  ADD KEY `UserRole` (`UserRole`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`NotificationID`),
  ADD KEY `RecipientID` (`RecipientID`),
  ADD KEY `fk_notification_notificationtype` (`NotificationType`);

--
-- Indexes for table `notificationtypes`
--
ALTER TABLE `notificationtypes`
  ADD PRIMARY KEY (`NotificationType`);

--
-- Indexes for table `sampletester`
--
ALTER TABLE `sampletester`
  ADD PRIMARY KEY (`TesterID`),
  ADD KEY `UserRole` (`UserRole`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`RoleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  MODIFY `BloodBankID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bloodcampaigns`
--
ALTER TABLE `bloodcampaigns`
  MODIFY `CampaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blooddonor`
--
ALTER TABLE `blooddonor`
  MODIFY `DonorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bloodmessages`
--
ALTER TABLE `bloodmessages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bloodtype`
--
ALTER TABLE `bloodtype`
  MODIFY `BloodTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `campaigninterested`
--
ALTER TABLE `campaigninterested`
  MODIFY `InterestedID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaignorganizer`
--
ALTER TABLE `campaignorganizer`
  MODIFY `OrganizerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campaignparticipation`
--
ALTER TABLE `campaignparticipation`
  MODIFY `ParticipationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `bloodpacketid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `inventorycryo`
--
ALTER TABLE `inventorycryo`
  MODIFY `cryoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventorymanagement`
--
ALTER TABLE `inventorymanagement`
  MODIFY `BloodPacketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventorymanager`
--
ALTER TABLE `inventorymanager`
  MODIFY `InventoryManagerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inventoryplasma`
--
ALTER TABLE `inventoryplasma`
  MODIFY `plasmaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventoryplatelets`
--
ALTER TABLE `inventoryplatelets`
  MODIFY `plateletid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventoryrbc`
--
ALTER TABLE `inventoryrbc`
  MODIFY `rbcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `labtechnician`
--
ALTER TABLE `labtechnician`
  MODIFY `LabTechID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `sampletester`
--
ALTER TABLE `sampletester`
  MODIFY `TesterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodcampaigns`
--
ALTER TABLE `bloodcampaigns`
  ADD CONSTRAINT `bloodcampaigns_ibfk_1` FOREIGN KEY (`OrganizerID`) REFERENCES `campaignorganizer` (`OrganizerID`);

--
-- Constraints for table `blooddonor`
--
ALTER TABLE `blooddonor`
  ADD CONSTRAINT `blooddonor_ibfk_1` FOREIGN KEY (`BloodTypeID`) REFERENCES `bloodtype` (`BloodTypeID`),
  ADD CONSTRAINT `blooddonor_ibfk_2` FOREIGN KEY (`UserRole`) REFERENCES `userrole` (`RoleID`);

--
-- Constraints for table `campaigninterested`
--
ALTER TABLE `campaigninterested`
  ADD CONSTRAINT `campaigninterested_ibfk_1` FOREIGN KEY (`CampaignID`) REFERENCES `bloodcampaigns` (`CampaignID`),
  ADD CONSTRAINT `campaigninterested_ibfk_2` FOREIGN KEY (`DonorID`) REFERENCES `blooddonor` (`DonorID`);

--
-- Constraints for table `campaignparticipation`
--
ALTER TABLE `campaignparticipation`
  ADD CONSTRAINT `campaignparticipation_ibfk_1` FOREIGN KEY (`CampaignID`) REFERENCES `bloodcampaigns` (`CampaignID`),
  ADD CONSTRAINT `campaignparticipation_ibfk_2` FOREIGN KEY (`DonorID`) REFERENCES `blooddonor` (`DonorID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`DonorID`) REFERENCES `blooddonor` (`DonorID`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`BloodPacketID`) REFERENCES `inventorymanagement` (`BloodPacketID`),
  ADD CONSTRAINT `feedback_ibfk_3` FOREIGN KEY (`TesterID`) REFERENCES `sampletester` (`TesterID`);

--
-- Constraints for table `inventorymanagement`
--
ALTER TABLE `inventorymanagement`
  ADD CONSTRAINT `inventorymanagement_ibfk_1` FOREIGN KEY (`DonorID`) REFERENCES `blooddonor` (`DonorID`),
  ADD CONSTRAINT `inventorymanagement_ibfk_2` FOREIGN KEY (`BloodType`) REFERENCES `bloodtype` (`BloodTypeID`);

--
-- Constraints for table `inventorymanager`
--
ALTER TABLE `inventorymanager`
  ADD CONSTRAINT `inventorymanager_ibfk_1` FOREIGN KEY (`BloodBankID`) REFERENCES `bloodbanks` (`BloodBankID`);

--
-- Constraints for table `labtechnician`
--
ALTER TABLE `labtechnician`
  ADD CONSTRAINT `labtechnician_ibfk_1` FOREIGN KEY (`UserRole`) REFERENCES `userrole` (`RoleID`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk_notification_notificationtype` FOREIGN KEY (`NotificationType`) REFERENCES `notificationtypes` (`NotificationType`),
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`RecipientID`) REFERENCES `blooddonor` (`DonorID`);

--
-- Constraints for table `sampletester`
--
ALTER TABLE `sampletester`
  ADD CONSTRAINT `sampletester_ibfk_1` FOREIGN KEY (`UserRole`) REFERENCES `userrole` (`RoleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
