-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 02:53 AM
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
  `Organization` varchar(255) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Venue` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Interested` int(11) DEFAULT NULL,
  `Participated` int(11) DEFAULT NULL,
  `OrganizerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodcampaigns`
--

INSERT INTO `bloodcampaigns` (`CampaignID`, `Name`, `Organization`, `Date`, `Time`, `Venue`, `Description`, `Interested`, `Participated`, `OrganizerID`) VALUES
(1, 'Emergency Blood Drive', 'Red Cross Society', '2022-04-05', '15:00:00', 'Central Park', 'Join us for an emergency blood drive!', 50, 30, 1),
(2, 'Community Health Fair', 'Community Volunteers', '2022-05-10', '12:30:00', 'Local Community Center', 'Health fair with blood donation awareness.', 80, 40, 2),
(3, 'City Blood Donation Marathon', 'City Health Initiatives', '2022-06-20', '09:00:00', 'City Stadium', 'Marathon to promote blood donation in the city.', 120, 70, 3);

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
  `Password` varchar(255) NOT NULL,
  `UserRole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blooddonor`
--

INSERT INTO `blooddonor` (`DonorID`, `FirstName`, `LastName`, `Email`, `Contact`, `District`, `Address`, `BloodTypeID`, `Height`, `Weight`, `Gender`, `DOB`, `Availability`, `BloodDonationTimes`, `Password`, `UserRole`) VALUES
(1, 'Alice', 'Johnson', 'alice.j@example.com', '1111111111', 'East District', '456 Oak St', 1, '160.00', '60.00', 'Female', '1990-05-15', 'Available', 3, 'alicepass', 2),
(2, 'Charlie', 'Brown', 'charlie.b@example.com', '2222222222', 'West District', '789 Pine St', 2, '175.00', '70.00', 'Male', '1985-08-21', 'Not Available', 5, 'charliepass', 2),
(3, 'Eva', 'Smith', 'eva.s@example.com', '3333333333', 'South District', '123 Main St', 3, '150.00', '55.00', 'Female', '1995-02-10', 'Available', 2, 'evapass', 2);

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
(2, 'B-'),
(3, 'O+');

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
(1, 1, 1, 'Approved'),
(2, 1, 2, 'Rejected'),
(3, 2, 3, 'Approved');

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
  `NotificationType` varchar(255) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`NotificationID`, `RecipientID`, `NotificationType`, `Timestamp`) VALUES
(1, 1, 'Campaign Reminder', '2024-01-21 01:49:56'),
(2, 2, 'Blood Request', '2024-01-21 01:49:56'),
(3, 3, 'Campaign Update', '2024-01-21 01:49:56');

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
-- Indexes for table `bloodtype`
--
ALTER TABLE `bloodtype`
  ADD PRIMARY KEY (`BloodTypeID`);

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
  ADD KEY `RecipientID` (`RecipientID`);

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
-- AUTO_INCREMENT for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  MODIFY `BloodBankID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bloodcampaigns`
--
ALTER TABLE `bloodcampaigns`
  MODIFY `CampaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blooddonor`
--
ALTER TABLE `blooddonor`
  MODIFY `DonorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bloodtype`
--
ALTER TABLE `bloodtype`
  MODIFY `BloodTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campaignorganizer`
--
ALTER TABLE `campaignorganizer`
  MODIFY `OrganizerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campaignparticipation`
--
ALTER TABLE `campaignparticipation`
  MODIFY `ParticipationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `labtechnician`
--
ALTER TABLE `labtechnician`
  MODIFY `LabTechID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
