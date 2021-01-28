-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 07:37 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `ID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qualification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `Name`, `phone`, `email`, `image`, `qualification`) VALUES
(1, 'Dr.Salina Byanju (Physiotherapist)', '9849170795', 'me00salina@gmail.com', 'brain.jpg', ''),
(2, 'Dr.Prajol Dhaubanjar (Physiotherapist', '9860942576', 'dhauprazzol@gmail.com', 'contact.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(1, 'kajold', 'kajold14'),
(2, 'sushan', 'sushan14');

-- --------------------------------------------------------

--
-- Table structure for table `adminservice`
--

CREATE TABLE `adminservice` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `headd` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminservice`
--

INSERT INTO `adminservice` (`id`, `image`, `headd`, `description`) VALUES
(1, 'theheart.jpg', 'CARDIOLOGY', 'Cardiac rehab is a medically supervised program designed to improve your cardiovascular health if you have experienced heart attack, heart failure, angioplasty or heart surgery. Cardiac rehab has three equally important parts: exercise counseling and training, education for heart-healthy living, counseling to reduce stress. '),
(2, 'doc_brain.jpg', 'NEUROLOGY', 'Common types of impairments associated with neurologic conditions can include balance, vision, ambulation, movement, activities of daily living, speech, or loss of functional independence.Neurological Reparative Therapy (NRT) is a new model of treatment on how to better the lives of individuals who suffer from a wide range of mental, emotional, and behavioral disturbances - particularly children and adolescents.\r\n'),
(3, 'electrotherapy.jpg', 'ELECTROTHERAPY', 'TENS AND ULTRASOUND\r\nOur Physios use electrotherapy to treat disorders relating to the muscles, ligaments and/or bone.  The Physiotherapist will use modalities to compliment the manual and exercise treatment being prescribed to aid recovery  as needed. \r\n'),
(4, 'Ergonomics.jpg', 'ERGONOMICS', 'Ergonomics is employed to fulfill the two goals of health and productivity.The scientific discipline concerned with the understanding of interactions among humans and other elements of a system, and the profession that applies theory, principles, data and methods to design in order to optimize human well-being and overall system performance.\r\n'),
(5, 'exercise.jpg', 'EXERCISE PLAN', 'Many people begin their exercise routines with intentions of getting stronger, losing weight and improving health, but wind up disappointed when they lose willpower and commitment. Physiotherapy can help you develop a routine you can stick to!If you\'re struggling to establish and maintain a regular exercise routine, you\'re not alone! We all face commitment difficulties in life, and need some outside help from time to time.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SN` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Feedback` text NOT NULL,
  `Checked` int(11) NOT NULL DEFAULT '1',
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SN`, `Email`, `Feedback`, `Checked`, `Date`) VALUES
(1, 'sushansujakhu14@gmail.com', 'asdasda', 1, '2018-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `SN` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Para 1` text NOT NULL,
  `Para 2` text NOT NULL,
  `Para 3` text NOT NULL,
  `Para 4` text NOT NULL,
  `Para 5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`SN`, `Title`, `Para 1`, `Para 2`, `Para 3`, `Para 4`, `Para 5`) VALUES
(1, 'What is Physiotherapy?', 'Physiotherapy is a rehabilitation profession with a presence in all health care delivery streams in Canada: hospitals, long-term care facilities, home care, community-based clinics, schools, private practice clinics and primary care networks. In all provinces, physiotherapists are registered to practice with their corresponding provincial regulatory College.\r\n\r\n\r\n\r\n\r\n', 'While physicians are referred to as MDs and nurses as RNs, physiotherapists or physical therapists are often referred to as PTs. The professional titles for this leading rehabilitation health care professional are physiotherapist or physical therapist.\r\n', 'Physiotherapy is a drug-free health care practice. Physiotherapists work in partnership with individuals of all ages to break down the barriers to physical function whether that means working with patients pre and post surgery, helping people come back from illness and chronic disease, injury, industrial and motor vehicle accidents and age related conditions. Physiotherapists also play an important role in health promotion and disease prevention. Physiotherapy is the treatment of preference for many who suffer from pain whether in the back or neck, or joint pain such as hips, knees, ankles, wrists, elbows or shoulders.', 'Physiotherapy has proven to be effective in the treatment and management of arthritis, diabetes, stroke and traumatic brain injury, spinal cord injury and a range of respiratory conditions offering those afflicted with tools and techniques to acquire and maintain an optimum level of function and pain free living.', ''),
(2, 'Benefits of Physiotherapy', 'Physiotherapy can make a difference in an individual’s ability to live an active, healthy lifestyle. For many seniors, disabled or chronically ill people, physiotherapy is the key to restoring and maintaining a level of physical function that permits independent living. Physiotherapy is one way to successfully push physical limitations to secure the Freedom to Function.', 'Physiotherapy benefits include decreasing pain, improving joint mobility, increasing strength and coordination and improved cardio-respiratory function. Everyone can benefit from physiotherapy whether you are living with a chronic illness, recovering from a work injury or suffering after that weekend hockey game.', 'Physiotherapy increases your independence and gives you the Freedom to Function™ in your home, workplace or your favorite leisure activity. Physiotherapy offers a range of specialized services of benefit to patients with heart and lung disease, traumatic, workplace and athletic injuries, amputations, arthritic joints, stroke, brain injury, spinal cord and nerve injury, cancer and pre and post surgical needs.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `N_ID` int(11) NOT NULL,
  `Notice` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`N_ID`, `Notice`) VALUES
(1, 'Free treatment to new Patient on first day.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminservice`
--
ALTER TABLE `adminservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`N_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminservice`
--
ALTER TABLE `adminservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `SN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `N_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
