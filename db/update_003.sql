--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(200) NOT NULL,
  `page_description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `updated_date` datetime NOT NULL,
  `page_order` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_description`, `status`, `updated_date`, `page_order`, `url`) VALUES
(1, 'Disclaimer', '<p><b><a href="http://www.afterquake.org">www.afterquake.org</a></b> is a accumulation of information collaborative with volunteering association of individuals and groups working to develop a open source data of Nepal Earthquake (2015). The data available on this website contents both from primary and secondary source. Primary data have been collected by visiting the sites affected by the earthquake, interviewing local people and asking them to fill up a form and the secondary data have been collected by various newspapers and data published by both Governmental or Non Governmental Organizations.</p>\r\n\r\n<p><span style="font-weight:normal">Please note w</span><span style="font-weight:normal">e</span><span style="font-weight:normal"> cannot guarantee the validity of </span><span style="font-weight:normal">all</span><span style="font-weight:normal"> the information found here. </span><span style="font-weight:normal">Please also note that we are neither donor nor relief agency. We are a group of people working </span><span style="font-weight:normal">voluntarily </span><span style="font-weight:normal"> to </span><span style="font-weight:normal">provide</span><span style="font-weight:normal"> information </span><span style="font-weight:normal">related to the Nepal Earthquake (2015)</span><span style="font-weight:normal"> </span><span style="font-weight:normal">to donor and relief agency or interested parties. </span><span style="font-weight:normal">None of the </span><span style="font-weight:normal">volunteers</span><span style="font-weight:normal">, </span><span style="font-weight:normal">donors</span><span style="font-weight:normal">, </span><span style="font-weight:normal">victim</span><span style="font-weight:normal"> or anyone else connected with </span><span style="font-weight:normal"><a href="http://www.afterquake.org" target="_blank">www.afterquake.org</a></span><span style="font-weight:normal"> in any way whatsoever can be responsible for the appearance of any inaccurate or libelous information or for your use of the information contained in or linked from these web pages.</span></p>\r\n', 1, '2015-05-08 07:48:45', 0, 'disclaimer'),
(2, 'Latest updates on volunteering opportunities', '<p>Here are the list of volunteers group who will be working tomorrow. Please send your group to <a href="mailto:rite2sagun@gmail.com">rite2sagun@gmail.com</a> to get added to this page.</p>\r\n\r\n<p><iframe src="https://docs.google.com/document/d/1ofeOeoeo6t0Kcki9N4zt3GAtqQqETBDEd8aruZnMLMI/pub?embedded=true" style="width:100%;height:800px;"></iframe></p>\r\n\r\n<p>Please mail us to <a href="mailto:rite2sagun@gmail.com">rite2sagun@gmail.com</a> if you want to get your activities listed for tomorrow.</p>\r\n', 1, '2015-05-08 07:42:36', 0, 'tomorrow');
