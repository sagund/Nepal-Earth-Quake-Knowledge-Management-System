DROP TABLE IF EXISTS `media_files`;
CREATE TABLE IF NOT EXISTS `media_files` (
  `media_id` int(11) NOT NULL AUTO_INCREMENT,
  `media_link` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `media_type` varchar(200) NOT NULL,
  `added_date` datetime NOT NULL,
  PRIMARY KEY (`media_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
SET FOREIGN_KEY_CHECKS=1;