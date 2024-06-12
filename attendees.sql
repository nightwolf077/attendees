-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 03, 2023 at 12:03 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `attendees`
-- 
CREATE DATABASE `attendees` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `attendees`;

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES ('admin', '0000');

-- --------------------------------------------------------

-- 
-- Table structure for table `members`
-- 

CREATE TABLE `members` (
  `ID` int(255) NOT NULL auto_increment,
  `Name` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Age` int(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `members`
-- 

INSERT INTO `members` VALUES (1, 'adadad', 'Ø£Ø±Ø¯Ù†ÙŠ', 19, '22', '0000-00-00');
INSERT INTO `members` VALUES (2, 'wdwdwd', 'Ø£Ø±Ø¯Ù†ÙŠ', 15, '2222', '0000-00-00');
INSERT INTO `members` VALUES (3, 'bs', 'Ø³ÙˆØ±ÙŠ', 18, '22', '0000-00-00');
INSERT INTO `members` VALUES (4, 'qqqq', 'Ø£Ø±Ø¯Ù†ÙŠ', 20, '22222', '2023-07-31');
INSERT INTO `members` VALUES (5, 'rrrrr', 'Ø³ÙˆØ±ÙŠ', 21, '44444', '2023-07-31');
INSERT INTO `members` VALUES (6, 'eeeee', 'Ø³ÙˆØ±ÙŠ', 19, '44444444', '2023-07-31');
INSERT INTO `members` VALUES (7, 'ammar', 'Ø¹Ø±Ø§Ù‚ÙŠ', 20, '22222', '2023-07-31');
INSERT INTO `members` VALUES (8, 'fafafa', 'Ø¹Ø±Ø§Ù‚ÙŠ', 11, '222444', '2023-07-31');
INSERT INTO `members` VALUES (9, 'Ammar', 'Palestinian', 20, '0778025843', '2023-08-01');
INSERT INTO `members` VALUES (10, 'Ammar', 'Palestinian', 20, '0778025843', '2023-08-01');
INSERT INTO `members` VALUES (11, 'amjad', 'Ø£Ø±Ø¯Ù†ÙŠ', 21, '0772708006', '2023-07-31');
INSERT INTO `members` VALUES (12, 'osama', 'Ø£Ø±Ø¯Ù†ÙŠ', 24, '0777777777', '2023-08-01');
INSERT INTO `members` VALUES (13, 'Ø´', '', 0, '222', '2023-08-01');
INSERT INTO `members` VALUES (14, '', 'Ø£Ø±Ø¯Ù†ÙŠ', 23, '2', '2023-08-01');
INSERT INTO `members` VALUES (15, 'Ø´ÙŠØ´ÙŠØ´ÙŠ', '', 20, '2222', '2023-08-01');
INSERT INTO `members` VALUES (16, 'Ø´ÙŠØ´ÙŠØ´ÙŠ', 'Ø³ÙˆØ±ÙŠ', 20, '', '2023-08-01');
INSERT INTO `members` VALUES (17, 'Ø´ÙŠØ´ÙŠ', 'Ø³ÙˆØ±ÙŠ', 0, '222', '2023-08-01');
INSERT INTO `members` VALUES (22, 'amjadosama', 'Ø¹Ø±Ø§Ù‚ÙŠ', 20, '20', '2023-08-02');
INSERT INTO `members` VALUES (19, '', '', 0, '', '2023-08-01');
INSERT INTO `members` VALUES (20, '', '', 0, '', '2023-08-01');
INSERT INTO `members` VALUES (21, 'aaaaaa', 'Ø£Ø±Ø¯Ù†ÙŠ', 20, '2222244', '2023-08-01');
INSERT INTO `members` VALUES (23, '', '', 0, '', '2023-08-02');
INSERT INTO `members` VALUES (24, '', '', 0, '', '2023-08-02');
INSERT INTO `members` VALUES (25, 'Ø§Ù…Ø¬Ø¯ ÙÙŠØµÙ„ Ø¬Ø¨Ø±ÙŠÙ„ Ø§Ù„Ø¯Ù‚ÙˆØ±', 'Ø£Ø±Ø¯Ù†ÙŠ', 21, '0772708006', '2023-08-02');
INSERT INTO `members` VALUES (26, 'Ø¹Ù…Ø§Ø± Ø¹Ø¨Ø¯Ùˆ', 'Ø£Ø±Ø¯Ù†ÙŠ', 21, '0700', '2023-08-02');
INSERT INTO `members` VALUES (27, '', '', 0, '', '2023-08-02');
INSERT INTO `members` VALUES (28, '', '', 0, '', '2023-08-02');
INSERT INTO `members` VALUES (29, '', '', 0, '', '2023-08-02');
INSERT INTO `members` VALUES (30, '', '', 0, '', '2023-08-02');
