DROP TABLE IF EXISTS donation;
CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `item` varchar(200) NOT NULL,
  `item_desc` varchar(400) NOT NULL,
  `item_type` enum('general','money','food','clothes','service') NOT NULL DEFAULT 'general',
`item_unit` varchar(400) NOT NULL,
  `num_items` int(11) unsigned NOT NULL DEFAULT '1',
  `where_to_collect` varchar(300) NOT NULL,
`donor_name` varchar(120) NOT NULL,
  `phone_number` varchar(120) NOT NULL,
  `media_upload_type` enum('photo','document','pdf','general') NOT NULL DEFAULT 'photo',
  `media_upload_path` varchar(300) NOT NULL,
  `status` varchar(60) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `user_id`, `item`, `item_desc`, `item_type`, `num_items`, `where_to_collect`, `phone_number`, `media_upload_type`, `media_upload_path`, `status`, `date_added`) VALUES
(1, 1, 'Waiwai', 'Waiwai full cartons', 'food', 50, 'Mangal Bazar', '9851128832', 'document', 'photo if any', 'available', '2015-04-30 08:42:38');

