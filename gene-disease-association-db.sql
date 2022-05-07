-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 03:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gene-disease-association-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `biometrics`
--

CREATE TABLE `biometrics` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `ethnicity` varchar(255) NOT NULL,
  `height` decimal(10,3) NOT NULL,
  `weight` decimal(10,3) NOT NULL,
  `blood_type` set('AB+','AB-','A+','A-','B+','B-','O+','O-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biometrics`
--

INSERT INTO `biometrics` (`id`, `age`, `gender`, `ethnicity`, `height`, `weight`, `blood_type`) VALUES
(3, 29, 'Non - binary', 'French', '180.000', '76.000', 'O-'),
(4, 50, 'Female', 'Egyptian', '155.000', '62.000', 'B-'),
(6, 52, 'Male', 'German', '196.000', '85.000', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `treatments` varchar(255) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `treatments`, `patient_id`, `hospital_id`) VALUES
(3, 'khabta 3a mukho', 3, 2),
(4, 'Soap', 4, 2),
(6, 'Chewing gum', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cases_has_diseases`
--

CREATE TABLE `cases_has_diseases` (
  `case_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cases_has_symptoms`
--

CREATE TABLE `cases_has_symptoms` (
  `case_id` int(11) NOT NULL,
  `symptom_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `chronic` tinyint(1) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `type`, `chronic`, `description`) VALUES
(1, 'Osteoporosis', 'Deficiency Disease', 1, 'A disease that weakens bones to the point where they break easily—most often, bones in the hip, backbone (spine), and wrist. Osteoporosis is called a “silent disease” because you may not notice any changes until a bone breaks. All the while, though, your '),
(2, 'Alzheimers Disease', 'Neurodegenerative Diseases', 1, 'a brain disorder that slowly destroys memory and thinking skills and, eventually, the ability to carry out the simplest tasks.');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `specialty` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `mobile_number`, `email`, `specialty`, `password`) VALUES
(6, 'Rebecca', 'Farah', '+961 81 777 654', 'rebeccafarah@gmail.com', 'Bioexpert', '7f1282974437f511dacee4013a0814bf7cbab38dd07040a4b4a82cebd50d134e'),
(7, 'Frederick', 'Abi Chahine', '+961 81 232 922', 'freddyabichahine@gmail.com', 'Neurologist', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(8, 'Joya', 'Mitri', '+961 70 400 857', 'joyamaria.mitri@lau.edu', 'Something Special', 'ffcdaa9ee96565fc48e6cd3d23ca9fc6b4d38f7ff7365acb20cc7bcbe928c30f'),
(9, 'Marc', 'Shebaby', '+961 70 555 666', 'marc.shebaby@lau.edu', 'Marcooo', 'fc8b6992f8838fca17ac80087ab669c64987e4c1e3c7b802ebb2fa623f7bb4e6'),
(10, 'Charbel', 'hi', '12345', 'charbel@gmail.com', 'Weedology', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(11, 'Ahmad', 'Muhtadi', '+961 30 400 500', 'ahmadtheone@gmail.com', 'Neurologist', '86e68363a3da0c8a647ba9730882a43075e8a53a6c9dadfdc23a90466126f68f');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_has_cases`
--

CREATE TABLE `doctors_has_cases` (
  `doctor_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_has_cases`
--

INSERT INTO `doctors_has_cases` (`doctor_id`, `case_id`) VALUES
(7, 6),
(10, 3),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `genes`
--

CREATE TABLE `genes` (
  `id` int(11) NOT NULL,
  `sequence` mediumtext NOT NULL,
  `code` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genes`
--

INSERT INTO `genes` (`id`, `sequence`, `code`, `location`) VALUES
(1, 'MLPGLALLLLAAWTARALEVPTDGNAGLLAEPQIAMFCGRLNMHMNVQNGKWDSDPSGTKTCIDTKEGILQYCQEVYPELQITNVVEANQPVTIQNWCKRGRKQCKTHPHFVIPYRCLVG\r\nEFVSDALLVPDKCKFLHQERMDVCETHLHWHTVAKETCSEKSTNLHDYGMLLPCGIDKFRGVEFVCCPLAEESDNVDSADAEEDDSDVWWGGADTDYADGSEDKVVEVAEEEEVAEVEEE\r\nEADDDEDDEDGDEVEEEAEEPYEEATERTTSIATTTTTTTESVEEVVREVCSEQAETGPCRAMISRWYFDVTEGKCAPFFYGGCGGNRNNFDTEEYCMAVCGSAMSQSLLKTTQEPLARD\r\nPVKLPTTAASTPDAVDKYLETPGDENEHAHFQKAKERLEAKHRERMSQVMREWEEAERQAKNLPKADKKAVIQHFQEKVESLEQEAANERQQLVETHMARVEAMLNDRRRLALENYITAL\r\nQAVPPRPRHVFNMLKKYVRAEQKDRQHTLKHFEHVRMVDPKKAAQIRSQVMTHLRVIYERMNQSLSLLYNVPAVAEEIQDEVDELLQKEQNYSDDVLANMISEPRISYGNDALMPSLTET\r\nKTTVELLPVNGEFSLDDLQPWHSFGADSVPANTENEVEPVDARPAADRGLTTRPGSGLTNIKTEEISEVKMDAEFRHDSGYEVHHQKLVFFAEDVGSNKGAIIGLMVGGVVIATVIVITL\r\nVMLKKKQYTSIHHGVVEVDAAVTPEERHLSKMQQNGYENPTYKFFEQMQN', 'Amyloid-Beta Precursor Protein (APP)', 'Chromosome 21'),
(2, 'MFSFVDLRLLLLLAATALLTHGQEEGQVEGQDEDIPPITCVQNGLRYHDRDVWKPEPCRI\r\nCVCDNGKVLCDDVICDETKNCPGAEVPEGECCPVCPDGSESPTDQETTGVEGPKGDTGPR\r\nGPRGPAGPPGRDGIPGQPGLPGPPGPPGPPGPPGLGGNFAPQLSYGYDEKSTGGISVPGP\r\nMGPSGPRGLPGPPGAPGPQGFQGPPGEPGEPGASGPMGPRGPPGPPGKNGDDGEAGKPGR\r\nPGERGPPGPQGARGLPGTAGLPGMKGHRGFSGLDGAKGDAGPAGPKGEPGSPGENGAPGQ\r\nMGPRGLPGERGRPGAPGPAGARGNDGATGAAGPPGPTGPAGPPGFPGAVGAKGEAGPQGP\r\nRGSEGPQGVRGEPGPPGPAGAAGPAGNPGADGQPGAKGANGAPGIAGAPGFPGARGPSGP\r\nQGPGGPPGPKGNSGEPGAPGSKGDTGAKGEPGPVGVQGPPGPAGEEGKRGARGEPGPTGL\r\nPGPPGERGGPGSRGFPGADGVAGPKGPAGERGSPGPAGPKGSPGEAGRPGEAGLPGAKGL\r\nTGSPGSPGPDGKTGPPGPAGQDGRPGPPGPPGARGQAGVMGFPGPKGAAGEPGKAGERGV\r\nPGPPGAVGPAGKDGEAGAQGPPGPAGPAGERGEQGPAGSPGFQGLPGPAGPPGEAGKPGE\r\nQGVPGDLGAPGPSGARGERGFPGERGVQGPPGPAGPRGANGAPGNDGAKGDAGAPGAPGS\r\nQGAPGLQGMPGERGAAGLPGPKGDRGDAGPKGADGSPGKDGVRGLTGPIGPPGPAGAPGD\r\nKGESGPSGPAGPTGARGAPGDRGEPGPPGPAGFAGPPGADGQPGAKGEPGDAGAKGDAGP\r\nPGPAGPAGPPGPIGNVGAPGAKGARGSAGPPGATGFPGAAGRVGPPGPSGNAGPPGPPGP\r\nAGKEGGKGPRGETGPAGRPGEVGPPGPPGPAGEKGSPGADGPAGAPGTPGPQGIAGQRGV\r\nVGLPGQRGERGFPGLPGPSGEPGKQGPSGASGERGPPGPMGPPGLAGPPGESGREGAPGA\r\nEGSPGRDGSPGAKGDRGETGPAGPPGAPGAPGAPGPVGPAGKSGDRGETGPAGPAGPVGP\r\nVGARGPAGPQGPRGDKGETGEQGDRGIKGHRGFSGLQGPPGPPGSPGEQGPSGASGPAGP\r\nRGPPGSAGAPGKDGLNGLPGPIGPPGPRGRTGDAGPVGPPGPPGPPGPPGPPSAGFDFSF\r\nLPQPPQEKAHDGGRYYRADDANVVRDRDLEVDTTLKSLSQQIENIRSPEGSRKNPARTCR\r\nDLKMCHSDWKSGEYWIDPNQGCNLDAIKVFCNMETGETCVYPTQPSVAQKNWYISKNPKD\r\nKRHVWFGESMTDGFQFEYGGQGSDPADVAIQLTFLRLMSTEASQNITYHCKNSVAYMDQQ\r\nTGNLKKALLLQGSNEIEIRAEGNSRFTYSVTVDGCTSHTGAWGKTVIEYKTTKTSRLPII\r\nDVAPLDVGAPDQEFGFDVGPVCFL', 'COL1A1', 'Chromosome 17'),
(3, 'MLSFVDTRTLLLLAVTLCLATCQSLQEETVRKGPAGDRGPRGERGPPGPPGRDGEDGPTG\r\nPPGPPGPPGPPGLGGNFAAQYDGKGVGLGPGPMGLMGPRGPPGAAGAPGPQGFQGPAGEP\r\nGEPGQTGPAGARGPAGPPGKAGEDGHPGKPGRPGERGVVGPQGARGFPGTPGLPGFKGIR\r\nGHNGLDGLKGQPGAPGVKGEPGAPGENGTPGQTGARGLPGERGRVGAPGPAGARGSDGSV\r\nGPVGPAGPIGSAGPPGFPGAPGPKGEIGAVGNAGPAGPAGPRGEVGLPGLSGPVGPPGNP\r\nGANGLTGAKGAAGLPGVAGAPGLPGPRGIPGPVGAAGATGARGLVGEPGPAGSKGESGNK\r\nGEPGSAGPQGPPGPSGEEGKRGPNGEAGSAGPPGPPGLRGSPGSRGLPGADGRAGVMGPP\r\nGSRGASGPAGVRGPNGDAGRPGEPGLMGPRGLPGSPGNIGPAGKEGPVGLPGIDGRPGPI\r\nGPAGARGEPGNIGFPGPKGPTGDPGKNGDKGHAGLAGARGAPGPDGNNGAQGPPGPQGVQ\r\nGGKGEQGPPGPPGFQGLPGPSGPAGEVGKPGERGLHGEFGLPGPAGPRGERGPPGESGAA\r\nGPTGPIGSRGPSGPPGPDGNKGEPGVVGAVGTAGPSGPSGLPGERGAAGIPGGKGEKGEP\r\nGLRGEIGNPGRDGARGAPGAVGAPGPAGATGDRGEAGAAGPAGPAGPRGSPGERGEVGPA\r\nGPNGFAGPAGAAGQPGAKGERGAKGPKGENGVVGPTGPVGAAGPAGPNGPPGPAGSRGDG\r\nGPPGMTGFPGAAGRTGPPGPSGISGPPGPPGPAGKEGLRGPRGDQGPVGRTGEVGAVGPP\r\nGFAGEKGPSGEAGTAGPPGTPGPQGLLGAPGILGLPGSRGERGLPGVAGAVGEPGPLGIA\r\nGPPGARGPPGAVGSPGVNGAPGEAGRDGNPGNDGPPGRDGQPGHKGERGYPGNIGPVGAA\r\nGAPGPHGPVGPAGKHGNRGETGPSGPVGPAGAVGPRGPSGPQGIRGDKGEPGEKGPRGLP\r\nGLKGHNGLQGLPGIAGHHGDQGAPGSVGPAGPRGPAGPSGPAGKDGRTGHPGTVGPAGIR\r\nGPQGHQGPAGPPGPPGPPGPPGVSGGGYDFGYDGDFYRADQPRSAPSLRPKDYEVDATLK\r\nSLNNQIETLLTPEGSRKNPARTCRDLRLSHPEWSSGYYWIDPNQGCTMDAIKVYCDFSTG\r\nETCIRAQPENIPAKNWYRSSKDKKHVWLGETINAGSQFEYNVEGVTSKEMATQLAFMRLL\r\nANYASQNITYHCKNSIAYMDEETGNLKKAVILQGSNDVELVAEGNSRFTYTVLVDGCSKK\r\nTNEWGKTIIEYKTNKPSRLPFLDIAPLDIGGADQEFFVDIGPVCFK', 'COL1A2', 'Chromosome 7'),
(4, 'MEPGRRGAAALLALLCVACALRAGRAQYERYSFRSFPRDELMPLESAYRHALDKYSGEHW\r\nAESVGYLEISLRLHRLLRDSEAFCHRNCSAAPQPEPAAGLASYPELRLFGGLLRRAHCLK\r\nRCKQGLPAFRQSQPSREVLADFQRREPYKFLQFAYFKANNLPKAIAAAHTFLLKHPDDEM\r\nMKRNMAYYKSLPGAEDYIKDLETKSYESLFIRAVRAYNGENWRTSITDMELALPDFFKAF\r\nYECLAACEGSREIKDFKDFYLSIADHYVEVLECKIQCEENLTPVIGGYPVEKFVATMYHY\r\nLQFAYYKLNDLKNAAPCAVSYLLFDQNDKVMQQNLVYYQYHRDTWGLSDEHFQPRPEAVQ\r\nFFNVTTLQKELYDFAKENIMDDDEGEVVEYVDDLLELEETS', 'CRTAP', 'Chromosome 3'),
(5, 'MLRLSERNMKVLLAAALIAGSVFFLLLPGPSAADEKKKGPKVTVKVYFDLRIGDEDVGRV\r\nIFGLFGKTVPKTVDNFVALATGEKGFGYKNSKFHRVIKDFMIQGGDFTRGDGTGGKSIYG\r\nERFPDENFKLKHYGPGWVSMANAGKDTNGSQFFITTVKTAWLDGKHVVFGKVLEGMEVVR\r\nKVESTKTDSRDKPLKDVIIADCGKIEVEKPFAIAKE', 'PPIB', 'Chromosome 15');

-- --------------------------------------------------------

--
-- Table structure for table `genes_has_diseases`
--

CREATE TABLE `genes_has_diseases` (
  `gene_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genes_has_diseases`
--

INSERT INTO `genes_has_diseases` (`gene_id`, `disease_id`) VALUES
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `location`, `name`) VALUES
(1, 'Byblos', 'Deir saydet el maaounat'),
(2, 'Beirut', 'AUBMC - American University of Beirut Medical Center');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals_has_doctors`
--

CREATE TABLE `hospitals_has_doctors` (
  `hospital_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `biometric_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `last_name`, `email`, `mobile_number`, `biometric_id`) VALUES
(3, 'John', 'Davidson', 'johnnyboy@hotmail.com', '+961 70 999 777', 3),
(4, 'Jessica', 'Abi Faris', 'jessy@hotmail.com', '+961 81 456 789', 4),
(6, 'Tom', 'Jorden', 'tomjorden@hotmail.com', '+961 71 234 984', 6);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `severity` enum('1','2','3') NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biometrics`
--
ALTER TABLE `biometrics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cases_ibfk_1` (`hospital_id`),
  ADD KEY `cases_ibfk_2` (`patient_id`);

--
-- Indexes for table `cases_has_diseases`
--
ALTER TABLE `cases_has_diseases`
  ADD PRIMARY KEY (`case_id`,`disease_id`),
  ADD KEY `cases_has_diseases_ibfk_2` (`disease_id`);

--
-- Indexes for table `cases_has_symptoms`
--
ALTER TABLE `cases_has_symptoms`
  ADD PRIMARY KEY (`case_id`,`symptom_id`),
  ADD KEY `cases_has_symptoms_ibfk_2` (`symptom_id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors_has_cases`
--
ALTER TABLE `doctors_has_cases`
  ADD PRIMARY KEY (`doctor_id`,`case_id`),
  ADD KEY `doctors_has_cases_ibfk_1` (`case_id`);

--
-- Indexes for table `genes`
--
ALTER TABLE `genes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genes_has_diseases`
--
ALTER TABLE `genes_has_diseases`
  ADD PRIMARY KEY (`gene_id`,`disease_id`),
  ADD KEY `genes_has_diseases_ibfk_2` (`disease_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals_has_doctors`
--
ALTER TABLE `hospitals_has_doctors`
  ADD PRIMARY KEY (`hospital_id`,`doctor_id`),
  ADD KEY `hospitals_has_doctors_ibfk_1` (`doctor_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_ibfk_1` (`biometric_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biometrics`
--
ALTER TABLE `biometrics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `genes`
--
ALTER TABLE `genes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cases_has_diseases`
--
ALTER TABLE `cases_has_diseases`
  ADD CONSTRAINT `cases_has_diseases_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_has_diseases_ibfk_2` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cases_has_symptoms`
--
ALTER TABLE `cases_has_symptoms`
  ADD CONSTRAINT `cases_has_symptoms_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cases_has_symptoms_ibfk_2` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctors_has_cases`
--
ALTER TABLE `doctors_has_cases`
  ADD CONSTRAINT `doctors_has_cases_ibfk_1` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctors_has_cases_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `genes_has_diseases`
--
ALTER TABLE `genes_has_diseases`
  ADD CONSTRAINT `genes_has_diseases_ibfk_2` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `genes_has_diseases_ibfk_3` FOREIGN KEY (`gene_id`) REFERENCES `genes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospitals_has_doctors`
--
ALTER TABLE `hospitals_has_doctors`
  ADD CONSTRAINT `hospitals_has_doctors_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hospitals_has_doctors_ibfk_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`biometric_id`) REFERENCES `biometrics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
