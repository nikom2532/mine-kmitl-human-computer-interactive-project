-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 08, 2011 at 12:10 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `hci`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `audit`
-- 

CREATE TABLE `audit` (
  `pkey` int(11) NOT NULL auto_increment,
  `pdate` date NOT NULL,
  `audit` char(200) NOT NULL,
  `auditor` char(200) NOT NULL,
  `auditee` char(200) NOT NULL,
  `risk_level` char(200) NOT NULL,
  `action_plan` char(200) NOT NULL,
  `audit_by` char(200) NOT NULL,
  `target_date` date NOT NULL,
  `action` char(20) NOT NULL,
  `lastest_response` char(200) NOT NULL,
  `postponed1` date NOT NULL,
  `postponed2` date NOT NULL,
  `postponed3` date NOT NULL,
  PRIMARY KEY  (`pkey`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

-- 
-- Dumping data for table `audit`
-- 

INSERT INTO `audit` VALUES (56, '2011-05-24', '123', 'aa', 'a', 'a', 'a', '2011-05-12', '2011-05-24', 'a', '2011-05-12', '2011-05-24', '2011-05-24', '2011-05-24');
INSERT INTO `audit` VALUES (55, '2011-05-24', '', 'aabb', 'a', 'a', 'a', '2011-05-24', '0000-00-00', 'a', '2011-05-24', '2011-05-24', '2011-05-24', '0000-00-00');
INSERT INTO `audit` VALUES (51, '2011-05-12', '', 'ming', 'kimmy', '6', '1-2-3-4-5', '2011-05-12', '0000-00-00', 'kim', '2011-05-12', '2011-05-12', '2011-05-12', '0000-00-00');
INSERT INTO `audit` VALUES (50, '2011-05-06', '', 'aaaaa', 'a', 'a', 'a', '2011-05-06', '0000-00-00', 'a', '2011-05-06', '2011-05-06', '2011-05-06', '0000-00-00');
INSERT INTO `audit` VALUES (49, '2011-05-06', '', 'asa', 'a', '', 'a', '2011-05-06', '0000-00-00', 'a', '2011-05-06', '2011-05-06', '2011-05-06', '0000-00-00');
INSERT INTO `audit` VALUES (48, '2011-05-06', '', 'asas', 'zz', '', 'a', '2011-05-06', '0000-00-00', 'a', '2011-05-06', '2011-05-06', '2011-05-06', '0000-00-00');
INSERT INTO `audit` VALUES (47, '2011-05-12', '', 'aa', 'a', 'a', 'a', '2011-05-12', '0000-00-00', 'a', '2011-05-12', '2011-05-12', '2011-05-12', '0000-00-00');
INSERT INTO `audit` VALUES (63, '2011-05-09', '', 'vv', 'v', 'v', 'v', '0000-00-00', '0000-00-00', '2011-05-09', '2011-05-09', '2011-05-09', '0000-00-00', '0000-00-00');
INSERT INTO `audit` VALUES (62, '2011-05-24', '', 'a', 'a', 'a', 'a', '2011-05-24', '0000-00-00', 'a', '2011-05-24', '2011-05-24', '2011-05-24', '0000-00-00');
INSERT INTO `audit` VALUES (61, '2011-05-09', '', 'w', 'w', 'w', 'w', '2011-05-09', '0000-00-00', 'w', '2011-05-09', '2011-05-09', '2011-05-09', '0000-00-00');
INSERT INTO `audit` VALUES (60, '2011-05-12', '', 'ming', 'kimmy', '6', '1-2-3-4-5', '2011-05-12', '0000-00-00', 'kim', '2011-05-12', '2011-05-12', '2011-05-12', '0000-00-00');
INSERT INTO `audit` VALUES (59, '2011-05-06', '', 'aaaaa', 'a', 'a', 'a', '2011-05-06', '0000-00-00', 'a', '2011-05-06', '2011-05-06', '2011-05-06', '0000-00-00');
INSERT INTO `audit` VALUES (58, '2011-05-06', '', 'asa', 'a', '', 'a', '2011-05-06', '0000-00-00', 'a', '2011-05-06', '2011-05-06', '2011-05-06', '0000-00-00');
INSERT INTO `audit` VALUES (57, '2011-05-06', '', 'asas', 'zz', '', 'a', '2011-05-06', '0000-00-00', 'a', '2011-05-06', '2011-05-06', '2011-05-06', '0000-00-00');
INSERT INTO `audit` VALUES (54, '2011-05-09', '', 'vv', 'v', 'v', 'v', '0000-00-00', '0000-00-00', '2011-05-09', '2011-05-09', '2011-05-09', '0000-00-00', '0000-00-00');
INSERT INTO `audit` VALUES (46, '2011-05-24', '', 'aabb', 'a', 'a', 'a', '2011-05-24', '0000-00-00', 'a', '2011-05-24', '2011-05-24', '2011-05-24', '0000-00-00');
INSERT INTO `audit` VALUES (39, '2011-05-09', '', 'vv', 'v', 'v', 'v', '2011-05-09', '0000-00-00', 'v', '2011-05-09', '2011-05-09', '2011-05-09', '0000-00-00');

-- --------------------------------------------------------

-- 
-- Table structure for table `comment`
-- 

CREATE TABLE `comment` (
  `username` varchar(50) NOT NULL,
  `username_from` varchar(50) NOT NULL,
  `comment_text` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `comment`
-- 

INSERT INTO `comment` VALUES ('ansv', 'bbbb', 'www');
INSERT INTO `comment` VALUES ('ansv', 'bbbb', 'asdf');
INSERT INTO `comment` VALUES ('ansv', 'bbbb', 'asdf');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'asdf');
INSERT INTO `comment` VALUES ('ansv', 'bbbb', 'aa');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'sdrvsdrv');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'd');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'b');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'szrgvfser');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'fff');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'ffff');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'ddd');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'qqq');
INSERT INTO `comment` VALUES ('a', 'bbbb', 'qqq');
INSERT INTO `comment` VALUES ('bbbb', 'a', 'asdf');
INSERT INTO `comment` VALUES ('bbbb', 'a', 'awd');
INSERT INTO `comment` VALUES ('bbbb', 'a', 'a');
INSERT INTO `comment` VALUES ('a', 'bbbb', '24022011');

-- --------------------------------------------------------

-- 
-- Table structure for table `customer`
-- 

CREATE TABLE `customer` (
  `DB_cid` varchar(50) NOT NULL,
  `DB_cname` varchar(100) NOT NULL,
  `DB_cpassword` varchar(50) NOT NULL,
  PRIMARY KEY  (`DB_cid`),
  UNIQUE KEY `DB_cpassword` (`DB_cpassword`),
  UNIQUE KEY `DB_cpassword_2` (`DB_cpassword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `customer`
-- 

INSERT INTO `customer` VALUES ('b', 'b', 'b');
INSERT INTO `customer` VALUES ('a', 'a', 'a');

-- --------------------------------------------------------

-- 
-- Table structure for table `customer_v2`
-- 

CREATE TABLE `customer_v2` (
  `id` int(4) NOT NULL auto_increment,
  `username` varchar(65) NOT NULL default '',
  `password` varchar(65) NOT NULL default '',
  `aa` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `customer_v2`
-- 

INSERT INTO `customer_v2` VALUES (1, 'a', 'a', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `customer_v3`
-- 

CREATE TABLE `customer_v3` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` char(1) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `regis_date` datetime NOT NULL,
  `regis_ip` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `pre_score` varchar(10) NOT NULL,
  `post_score` varchar(10) NOT NULL,
  `lesson1` char(1) NOT NULL,
  `lesson2` char(1) NOT NULL,
  `lesson3` char(1) NOT NULL,
  `lesson4` char(1) NOT NULL,
  `lesson5` char(1) NOT NULL,
  `lesson6` char(1) NOT NULL,
  `lesson7` char(1) NOT NULL,
  `lesson8` char(1) NOT NULL,
  `lesson9` char(1) NOT NULL,
  `lesson10` char(1) NOT NULL,
  `lesson11` char(1) NOT NULL,
  `enable` char(1) NOT NULL,
  `admin` char(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- 
-- Dumping data for table `customer_v3`
-- 

INSERT INTO `customer_v3` VALUES ('ansv', '1234', 'Anonj', 'm', '2008-09-09', 'ansv@thai.com', 'sdfsdfsdf', '2009-12-02 23:47:40', '127.0.0.1', '2010-02-12 10:23:57', '5', '', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y');
INSERT INTO `customer_v3` VALUES ('adder', '1234', '5555', 'm', '2010-01-01', 'a@a.com', '111', '2010-01-31 22:41:28', '58.8.103.85', '2010-03-31 17:57:37', '6', '4', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y');
INSERT INTO `customer_v3` VALUES ('TG006', '083271', '?????? ??????', 'm', '1993-12-03', 'm@a.com', '79 ???? 4 ?.???????? ?.???? ?.?????', '2010-02-12 09:57:39', '118.172.197.180', '2010-02-12 11:01:57', '5', '7', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '');
INSERT INTO `customer_v3` VALUES ('TG008', '1234', '????  ????????', 'm', '1995-02-09', 'notnum@thaimail.com', '25/3?.3?.?????????.?????.?????', '2010-02-12 09:58:05', '118.172.197.180', '2010-02-12 11:02:50', '6', '10', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '');
INSERT INTO `customer_v3` VALUES ('TG002', '1234', '????? ?????', 'f', '1994-07-12', 'a@a.com', '35 ????5 ?.???????? ?.???? ?.?????', '2010-02-12 09:59:32', '118.172.197.180', '2010-02-12 11:03:13', '9', '4', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '');
INSERT INTO `customer_v3` VALUES ('TG005', '1234', '?????    ??????', 'm', '1996-01-08', 'n@a.com', '100?.4?.?????????.?????.?????', '2010-02-12 09:59:37', '118.172.197.180', '2010-02-12 11:02:06', '2', '4', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '');
INSERT INTO `customer_v3` VALUES ('TG007', '082396', '??????    ???', 'm', '1995-04-05', 'aodlovepim@live.com', '??????????????????????? ?.????????  ?.????   ?.?????', '2010-02-12 09:59:36', '118.172.197.180', '2010-02-12 10:59:51', '8', '7', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '');
INSERT INTO `customer_v3` VALUES ('TG001', '1234', '???????  ?????', 'm', '1994-11-08', 'z@a', '9 ???? 4 ?.???????? ?.???? ?.?????', '2010-02-12 10:02:00', '118.172.197.180', '2010-02-12 11:02:03', '7', '8', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '');
INSERT INTO `customer_v3` VALUES ('TG0010', '1234', '?????    ???????', 'f', '1997-01-11', 's@acom', '76 ?.4 ?.?????????.???? ?.?????', '2010-02-12 10:00:15', '118.172.197.180', '2010-02-12 11:02:13', '1', '8', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '');
INSERT INTO `customer_v3` VALUES ('TG003', '1234', '????    ??????', 'f', '1995-05-07', 'o@a.com', '53/1?.4 ?.???????? ?.?????', '2010-02-12 09:59:35', '118.172.197.180', '2010-02-12 11:04:08', '5', '8', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '');
INSERT INTO `customer_v3` VALUES ('TG009', '1234', '??????  ???', 'f', '1997-05-16', 'u@a.com', '52?.6?.?????????.?????.?????', '2010-02-12 10:00:26', '118.172.197.180', '2010-02-12 11:08:53', '4', '4', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '');
INSERT INTO `customer_v3` VALUES ('bbbb', 'bbbb', 'b', 'm', '2010-01-01', 'b@b.com', 'b', '2010-04-02 18:07:02', '127.0.0.1', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', 'y', 'y');
INSERT INTO `customer_v3` VALUES ('aaaaa', 'aaaaa', 'aa', 'm', '2010-01-01', 'aaaa@m.com', 'aaaa@m.com', '2010-04-05 11:56:53', '192.169.99.17', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', 'y', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `friends`
-- 

CREATE TABLE `friends` (
  `username` varchar(50) NOT NULL,
  `fnd` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `friends`
-- 

INSERT INTO `friends` VALUES ('a', 'bbbb');
INSERT INTO `friends` VALUES ('a', 'TG009');
INSERT INTO `friends` VALUES ('bbbb', 'a');
INSERT INTO `friends` VALUES ('bbbb', 'ansv');

-- --------------------------------------------------------

-- 
-- Table structure for table `itpr_audit`
-- 

CREATE TABLE `itpr_audit` (
  `DATE` varchar(255) NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `AUDITOR` varchar(255) NOT NULL,
  `AUDITEE` varchar(255) NOT NULL,
  `RISK_LEVEL` char(10) NOT NULL,
  `ACTION_PLAN` varchar(255) NOT NULL,
  `AUDIT_BY` varchar(255) NOT NULL,
  `TARGET_DATE` varchar(255) NOT NULL,
  `ACTION` char(10) NOT NULL,
  `LATEST_RESPONSE` varchar(255) NOT NULL,
  `POSTPONED1` varchar(255) NOT NULL,
  `POSTPONED2` varchar(255) NOT NULL,
  `POSTPONED3` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- 
-- Dumping data for table `itpr_audit`
-- 

INSERT INTO `itpr_audit` VALUES ('04/05/11', 'title_name', 'auditor', 'auditee', 'risk_level', 'action', 'audit_by', 'target_date', 'action_by', 'lastest_response', 'postponed1', 'postponed2', 'postponed3');
INSERT INTO `itpr_audit` VALUES ('04/05/11', 'title_name', 'auditor', 'auditee', 'risk_level', 'action', 'audit_by', 'target_date', 'action_by', 'lastest_response', 'postponed1', 'postponed2', 'postponed3');
INSERT INTO `itpr_audit` VALUES ('04/05/11', 'title_name', 'auditor', 'auditee', 'risk_level', 'action', 'audit_by', 'target_date', 'action_by', 'lastest_response', 'postponed1', 'postponed2', 'postponed3');
INSERT INTO `itpr_audit` VALUES ('04/05/11', 'title_name', 'auditor', 'auditee', 'risk_level', 'action', 'audit_by', 'target_date', 'action_by', 'lastest_response', 'postponed1', 'postponed2', 'postponed3');
INSERT INTO `itpr_audit` VALUES ('1', '06/05/11', 'NAME1', 'DEP1', 'OWNER1', 'COBIT1', 'RISK_IT', 'STATUS1', 'APPR', 'CONTACT', 'PRO_DOC', '', '');
INSERT INTO `itpr_audit` VALUES ('1', '06/05/11', 'NAME1', 'DEP1', 'OWNER1', 'COBIT1', 'RISK_IT', 'STATUS1', 'APPR', 'CONTACT', 'PRO_DOC', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `itpr_control`
-- 

CREATE TABLE `itpr_control` (
  `pkey` int(11) NOT NULL auto_increment,
  `CONTROL_NUMBER` int(11) NOT NULL,
  `RISK_NUMBER` int(11) NOT NULL,
  `DESCRIPTION_1` varchar(255) NOT NULL,
  `ACTION_BY` varchar(255) NOT NULL,
  `TARGET_DATE` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `NOTE` varchar(255) NOT NULL,
  PRIMARY KEY  (`pkey`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `itpr_control`
-- 

INSERT INTO `itpr_control` VALUES (1, 1, 1, 'DESC', 'ACTIONBY', '06/05/11', 'PASS', 'NOTE1');

-- --------------------------------------------------------

-- 
-- Table structure for table `itpr_incident`
-- 

CREATE TABLE `itpr_incident` (
  `pkey` int(11) NOT NULL auto_increment,
  `INCIDENT_NUMBER` int(11) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `SEVERITY` smallint(6) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `APPLICATION` varchar(255) NOT NULL,
  `CAUSE` varchar(255) NOT NULL,
  `RISK_IT_CATEGORY` varchar(255) NOT NULL,
  `TEMPORARY_SOLUTION` varchar(255) NOT NULL,
  `PERMANENT_SOLUTION` varchar(255) NOT NULL,
  `ACTION_BY` varchar(255) NOT NULL,
  `DOWNTIME` varchar(255) NOT NULL,
  `MAJOR_CUSTOMERS` varchar(255) NOT NULL,
  `LOSS` varchar(255) NOT NULL,
  `REPUTATION` char(50) NOT NULL,
  `ATTACHMENT` varchar(255) NOT NULL,
  PRIMARY KEY  (`pkey`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `itpr_incident`
-- 

INSERT INTO `itpr_incident` VALUES (1, 1, '06/05/11', 2, 'DESC', 'APP', 'CAUSE', 'RISKCATE', 'TEMP', 'PERMANENT', '', 'DOWN', 'MAJOR', 'LOSS1', 'REPh', 'ATTACH');
INSERT INTO `itpr_incident` VALUES (2, 2, '06/05/11', 6, 'DESC', 'APP', 'CAUSE', 'RISKCATE', 'TEMP', 'PERMANENT', '', 'DOWN', 'MAJOR', 'LOSS1', 'REP', 'ATTACH');
INSERT INTO `itpr_incident` VALUES (3, 3, '06/05/11', 5, 'DESC', 'APP', 'CAUSE', 'RISKCATE', 'TEMP', 'PERMANENT', '', 'DOWN', 'MAJOR', 'LOSS1', 'REP', 'ATTACH');
INSERT INTO `itpr_incident` VALUES (4, 0, '2011-05-12', 2, 'aa', 'aaaa', 'aa', 'aaa', 'a', 'a', 'ss', 's', 's', 's', 'ssss', 's');
INSERT INTO `itpr_incident` VALUES (5, 0, '2011-05-19', 4, 'rrr', 'r', 'rr', 'r', 'r', 'rr', '', 'r', 'r', 'rr', 'r', 'r');

-- --------------------------------------------------------

-- 
-- Table structure for table `itpr_process`
-- 

CREATE TABLE `itpr_process` (
  `pkey` int(11) NOT NULL auto_increment,
  `PROCESS_NUMBER` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DEPARTMENT` varchar(255) NOT NULL,
  `OWNER` varchar(255) NOT NULL,
  `COBIT` varchar(255) NOT NULL,
  `RISK_IT_CATEGORY` varchar(255) NOT NULL,
  `STATUS` char(15) NOT NULL,
  `APPROVED_BY` varchar(255) NOT NULL,
  `CONTACT_PERSON` varchar(255) NOT NULL,
  `PROCESS_DOCUMENT` varchar(255) NOT NULL,
  PRIMARY KEY  (`pkey`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `itpr_process`
-- 

INSERT INTO `itpr_process` VALUES (1, 1, '2006-05-11', 'NAME1', 'DEP1', 'OWNER1', 'COBIT1', 'RISK_IT', 'STATUS1', 'APPR', '', 'PRO_DOC');
INSERT INTO `itpr_process` VALUES (2, 0, '2011-05-12', 'abcde', 'aaa', 'a', 'a', 's', 's', 's', '', 's');
INSERT INTO `itpr_process` VALUES (3, 0, '2011-05-12', 'test', 'Risk', 'kim', 'ITIL', 'ghfgh', 'pass', 'ming', 'kk', 'no');

-- --------------------------------------------------------

-- 
-- Table structure for table `itpr_risk`
-- 

CREATE TABLE `itpr_risk` (
  `pkey` int(11) NOT NULL auto_increment,
  `DATE_ASSESSED` varchar(255) NOT NULL,
  `RISK_NUMBER` int(11) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `DEPARTMENT` varchar(255) NOT NULL,
  `APPROVED_BY` varchar(255) NOT NULL,
  `CAUSE` varchar(255) NOT NULL,
  `RISK_IT_CATEGORY` varchar(255) NOT NULL,
  `IMPACT_INHERITED` varchar(255) NOT NULL,
  `FREQUENCY_INHERITED` varchar(255) NOT NULL,
  `RISK_LEVEL_INHERITED` varchar(255) NOT NULL,
  `IMPACT_RESIDUAL` varchar(255) NOT NULL,
  `FREQUENCY_RESIDUAL` varchar(255) NOT NULL,
  `RISK_LEVEL_RESIDUAL` varchar(255) NOT NULL,
  `EXISTING_CONTROL1` varchar(255) NOT NULL,
  `EXISTING_CONTROL2` varchar(255) NOT NULL,
  `EXISTING_CONTROL3` varchar(255) NOT NULL,
  `EXISTING_CONTROL4` varchar(255) NOT NULL,
  `CONTROL_EFFICIENCY` smallint(6) NOT NULL,
  `ATTACHMENT` varchar(255) NOT NULL,
  PRIMARY KEY  (`pkey`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `itpr_risk`
-- 

INSERT INTO `itpr_risk` VALUES (1, '6/5/2011', 5, 'DESC', 'DEP', 'APPRBY', 'CAUSE1', 'RISKCATE', 'IMPACTIN', 'FREQIN', '', 'IMPACTRE', 'FREQRE', 'RISKRE', 'EX1', 'EX2', 'EX3', 'EX4', 2, 'ATTACH');
INSERT INTO `itpr_risk` VALUES (2, '6/5/2011', 1, 'DESC', 'DEP', 'APPRBY', 'CAUSE1', 'RISKCATE', 'IMPACTIN', 'FREQIN', 'RISKIN', 'IMPACTRE', 'FREQRE', 'RISKRE', 'EX1', 'EX2', 'EX3', 'EX4', 2, 'ATTACH');
INSERT INTO `itpr_risk` VALUES (3, '6/5/2011', 1, 'DESC', 'DEP', 'APPRBY', 'CAUSE1', 'RISKCATE', 'IMPACTIN', 'FREQIN', 'RISKIN', 'IMPACTRE', 'FREQRE', 'RISKRE', 'EX1', 'EX2', 'EX3', 'EX4', 2, 'ATTACH');
INSERT INTO `itpr_risk` VALUES (4, '6/5/2011', 1, 'DESC', 'DEP', 'APPRBY', 'CAUSE1', 'RISKCATE', 'IMPACTIN', 'FREQIN', 'RISKIN', 'IMPACTRE', 'FREQRE', 'RISKRE', 'EX1', 'EX2', 'EX3', 'EX4', 2, 'ATTACH');
INSERT INTO `itpr_risk` VALUES (5, '2011-05-12', 0, 'test', 'Risk', 'aaaa', 'ITIL', 'ghfgh', 'h', 'hhhh', 'h', 'hhh', 'h', 'hj', 'jj', 'jj', 'jjjj', 'jj', 2, 'jjjjjjjjjjjj');

-- --------------------------------------------------------

-- 
-- Table structure for table `itpr_user`
-- 

CREATE TABLE `itpr_user` (
  `USER_LOGIN` char(15) NOT NULL,
  `USER_PWD` char(15) NOT NULL,
  `USER_NAME` varchar(255) NOT NULL,
  `USER_STATUS` char(1) NOT NULL,
  `USER_ROLE` char(1) NOT NULL,
  `LAST_LOGIN` varchar(255) NOT NULL,
  `CREATE_DATE` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

-- 
-- Dumping data for table `itpr_user`
-- 

INSERT INTO `itpr_user` VALUES ('kimloor', '', 'panupong', 'Y', 'G', 'NO SESSION', '2011-05-23 17:46:47');
INSERT INTO `itpr_user` VALUES ('bbbb', 'bbbb', 'Nikom', 'Y', 'A', '2011-09-07 22:31:56', '2011-09-07 21:31:56');
INSERT INTO `itpr_user` VALUES ('kim2', 'scb1234!', 'Panupong S.', 'Y', 'A', '2011-05-24 11:31:37', '2011-05-24 10:52:03');

-- --------------------------------------------------------

-- 
-- Table structure for table `webboard_answer`
-- 

CREATE TABLE `webboard_answer` (
  `wa_id` int(10) NOT NULL auto_increment,
  `wp_id` int(10) NOT NULL,
  `wa_number` int(10) NOT NULL,
  `wa_detail` text NOT NULL,
  `wa_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `wa_date` datetime NOT NULL,
  `wa_ip` varchar(50) NOT NULL,
  `wa_show` char(1) NOT NULL,
  PRIMARY KEY  (`wa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `webboard_answer`
-- 

INSERT INTO `webboard_answer` VALUES (1, 1, 1, 'ee', 'ss', 'ansv', '2009-12-07 10:46:30', '127.0.0.1', 'y');
INSERT INTO `webboard_answer` VALUES (2, 1, 2, '66', '66', 'ansv', '2009-12-07 10:47:17', '127.0.0.1', 'y');
INSERT INTO `webboard_answer` VALUES (3, 2, 1, '444', '444', 'ansv', '2009-12-13 09:25:46', '127.0.0.1', 'y');
INSERT INTO `webboard_answer` VALUES (4, 4, 1, ',/.,.', 'nklnk', 'thaitel', '2010-01-03 12:11:03', '127.0.0.1', 'y');
INSERT INTO `webboard_answer` VALUES (5, 6, 1, '5555', '555', 'adder', '2010-01-31 22:49:41', '58.8.103.85', 'y');
INSERT INTO `webboard_answer` VALUES (6, 7, 1, '?????', '??', 'ansv', '2010-02-01 14:32:28', '202.28.9.63', 'y');
INSERT INTO `webboard_answer` VALUES (7, 9, 1, '??? ????????????????? ?????????   ???????????<br />\r\n<br />\r\n  ', 'gang sodalove ', 'TG007', '2010-02-12 11:10:23', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (8, 9, 2, '???????????????????????????????', '???', 'TG008', '2010-02-12 11:12:03', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (9, 9, 3, '????????????????????????????????????????????? ???????????????????????????????????? ', '?????  ???????', 'TG006', '2010-02-12 11:14:30', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (10, 9, 4, '??????????????????????????????????????????????????', '???', 'TG005', '2010-02-12 11:14:36', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (11, 9, 5, '????????????????????????????????????????????', '????   ???', 'TG003', '2010-02-12 11:14:39', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (12, 9, 6, '?? ???????????????? ???? ?????????????????? ?????????????  ????.....?????? ??????', 'BOY', 'TG001', '2010-02-12 11:14:46', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (13, 9, 7, '???????????????????????????? ?????????????????? ?????????????????????', '??', 'TG002', '2010-02-12 11:14:49', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (14, 9, 8, '???? ???????????????????????????????????????????? ??????????????????  ??????? ? ? ????', '??', 'TG009', '2010-02-12 11:18:07', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (15, 9, 9, '???? ????????     ?????????????????????<br />\r\n???????????????????????   ????????????????????<br />\r\n??????????????????????? ??????? ???????????<br />\r\n??????????????????????????????????????????????<br />\r\n???', '???', 'TG0010', '2010-02-12 11:18:19', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (16, 9, 10, '??????????????', '?', 'TG001', '2010-02-12 11:19:46', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (17, 9, 11, 'Hip Hop', 'Boy', 'TG001', '2010-02-12 11:21:35', '118.172.197.180', 'y');
INSERT INTO `webboard_answer` VALUES (18, 10, 1, 'b', 'b', 'aaaa', '2010-03-31 11:29:30', '127.0.0.1', 'y');

-- --------------------------------------------------------

-- 
-- Table structure for table `webboard_post`
-- 

CREATE TABLE `webboard_post` (
  `wp_id` int(10) NOT NULL auto_increment,
  `wp_topic` varchar(150) NOT NULL,
  `wp_detail` text NOT NULL,
  `wp_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `wp_date` datetime NOT NULL,
  `wp_ip` varchar(50) NOT NULL,
  `wp_show` char(1) NOT NULL,
  PRIMARY KEY  (`wp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `webboard_post`
-- 

INSERT INTO `webboard_post` VALUES (1, '??', '????', '123', 'ansv', '2009-12-04 20:44:27', '127.0.0.1', 'n');
INSERT INTO `webboard_post` VALUES (2, '???', '?????', '555', 'ansv', '2009-12-07 11:12:31', '127.0.0.1', 'n');
INSERT INTO `webboard_post` VALUES (3, '555', '666', '3443', 'ansv', '2010-01-03 11:30:11', '127.0.0.1', 'n');
INSERT INTO `webboard_post` VALUES (4, 'kkjm', ';l,l,l', '..,;.,l', 'thaitel', '2010-01-03 12:10:52', '127.0.0.1', 'n');
INSERT INTO `webboard_post` VALUES (5, 'fgfdgfdg', '<br />\r\n<br />\r\n<br />\r\nfg', 'dasdsa', 'ansv', '2010-01-31 12:48:55', '127.0.0.1', 'n');
INSERT INTO `webboard_post` VALUES (6, '5555', '5555', '5555', 'adder', '2010-01-31 22:49:18', '58.8.103.85', 'n');
INSERT INTO `webboard_post` VALUES (7, '????', '?????????', '?????', 'ansv', '2010-02-01 14:32:05', '202.28.9.63', 'n');
INSERT INTO `webboard_post` VALUES (8, '????????????????????', '????????? ????????????????????????????', 'GongZilla', 'ansv', '2010-02-12 10:28:02', '118.172.197.180', 'n');
INSERT INTO `webboard_post` VALUES (9, '????????????????????', '????????? ????????????????????????????', 'GongZilla', 'ansv', '2010-02-12 10:28:14', '118.172.197.180', 'y');
INSERT INTO `webboard_post` VALUES (10, 'a', 'a', 'a', 'aaaa', '2010-03-31 11:29:28', '127.0.0.1', 'y');
INSERT INTO `webboard_post` VALUES (11, '21111', 'xfcf', 'gjg', 'bbbb', '2011-02-17 10:51:26', '127.0.0.1', 'y');
