
--
-- Database: `kcse_results`
--

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE IF NOT EXISTS `counties` (
  `county_id` bigint(200) NOT NULL AUTO_INCREMENT,
  `county_name` varchar(200) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `result_id` bigint(200) NOT NULL AUTO_INCREMENT,
  `student_id` bigint(200) NOT NULL,
  `mathematics` varchar(200) NOT NULL,
  `english` varchar(200) NOT NULL,
  `kiswahili` varchar(200) NOT NULL,
  `cre` varchar(200) NOT NULL,
  `geography` varchar(200) NOT NULL,
  `history` varchar(200) NOT NULL,
  `physics` varchar(200) NOT NULL,
  `chemistry` varchar(200) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` bigint(200) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(200) NOT NULL,
  `school_county_id` bigint(200) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` bigint(200) NOT NULL AUTO_INCREMENT,
  `student_first_name` varchar(200) NOT NULL,
  `student_last_name` varchar(200) NOT NULL,
  `school_id` bigint(200) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




-----------------------------------------------------------
-----------------------------------------------------------
-----------------------site 1------------------------------
-----------------------------------------------------------
-----------------------------------------------------------




--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` bigint(200) NOT NULL AUTO_INCREMENT,
  `student_first_name` varchar(200) NOT NULL,
  `student_last_name` varchar(200) NOT NULL,
  `school_id` bigint(200) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;





--
-- Table structure for table `school_frag1`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` varchar(200) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `school_county_id` bigint(200) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1  ;



-----------------------------------------------------------
-----------------------------------------------------------
-----------------------site 2------------------------------
-----------------------------------------------------------
-----------------------------------------------------------



--
-- Table structure for table `school_frag2`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` varchar(200) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `school_county_id` bigint(200) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ;



--
-- Table structure for table `results_frag1`
--

CREATE TABLE IF NOT EXISTS `results` (
  `result_id` varchar(200) NOT NULL,
  `student_id` bigint(200) NOT NULL,
  `mathematics` varchar(200) NOT NULL,
  `english` varchar(200) NOT NULL,
  `kiswahili` varchar(200) NOT NULL,
  `cre` varchar(200) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1  ;



-----------------------------------------------------------
-----------------------------------------------------------
-----------------------site 3------------------------------
-----------------------------------------------------------
-----------------------------------------------------------



--
-- Table structure for table `counties`
--

CREATE TABLE IF NOT EXISTS `counties` (
  `county_id` bigint(200) NOT NULL AUTO_INCREMENT,
  `county_name` varchar(200) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



--
-- Table structure for table `results_frag2`
--

CREATE TABLE IF NOT EXISTS `results` (
  `result_id` varchar(200) NOT NULL,
  `student_id` bigint(200) NOT NULL,
  `geography` varchar(200) NOT NULL,
  `history` varchar(200) NOT NULL,
  `physics` varchar(200) NOT NULL,
  `chemistry` varchar(200) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1  ;

