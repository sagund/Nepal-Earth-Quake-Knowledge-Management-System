
RENAME TABLE `need_relief` TO `victim`;

ALTER TABLE `victim` ADD `house_conditions` VARCHAR(4000) NOT NULL AFTER `village_id`, ADD `family_conditions` VARCHAR(4000) NOT NULL AFTER `house_conditions`, ADD `flag_safe_water` ENUM('1','0') NOT NULL AFTER `family_conditions`, ADD `flag_safe_food` ENUM('1','0') NOT NULL AFTER `flag_safe_water`, ADD `flag_medical_access` ENUM('1','0') NOT NULL AFTER `flag_safe_food`, ADD `flag_temporary_shelter` ENUM('1','0') NOT NULL AFTER `flag_medical_access`, ADD `flag_permanent_shelter` ENUM('1','0') NOT NULL AFTER `flag_temporary_shelter`, ADD `flag_contagious_disease` ENUM('1','0') NOT NULL AFTER `flag_permanent_shelter`, ADD `psychological_state` VARCHAR(300) NOT NULL COMMENT 'Use JSON/XML String to store different values' AFTER `flag_contagious_disease`, ADD `physical_state` VARCHAR(300) NOT NULL COMMENT 'Use JSON/XML String to store different values' AFTER `psychological_state`;

ALTER TABLE `victim` ADD `victim_condition` VARCHAR(300) NOT NULL AFTER `physical_state`, ADD `economic_state` VARCHAR(300) NOT NULL AFTER `victim_condition`, ADD `initial_assessment` VARCHAR(4000) NOT NULL AFTER `economic_state`;

ALTER TABLE `victim` ADD `fb_id` VARCHAR(150) NOT NULL AFTER `village_id`;

CREATE TABLE `victim_family` (
`id` int(11) unsigned NOT NULL,
  `victim_parent_id` int(11) unsigned NOT NULL,
  `name` varchar(1200) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `victim_family`
--
ALTER TABLE `victim_family`
 ADD PRIMARY KEY (`id`), ADD KEY `victim_parent_id` (`victim_parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `victim_family`
--
ALTER TABLE `victim_family`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;







